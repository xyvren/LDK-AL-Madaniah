# =============================================================================
# Dockerfile — LDK Al-Madaniah UBB (Laravel 8.83.29 · PHP 8.2)
# Multi-stage build: deps → assets → production
# =============================================================================

# ---------------------------------------------------------------------------
# Stage 1: Composer dependencies
# ---------------------------------------------------------------------------
FROM php:8.2-cli AS composer-deps

# System dependencies for PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
        libicu-dev libbcmath-dev libxml2-dev libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql mbstring xml curl zip gd intl bcmath fileinfo opcache exif \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy only composer files first for layer caching
COPY composer.json composer.lock ./

# Install dependencies (--no-dev for production)
RUN composer install \
        --no-dev \
        --no-interaction \
        --no-scripts \
        --prefer-dist \
        --optimize-autoloader

# ---------------------------------------------------------------------------
# Stage 2: Node.js — build front-end assets (Laravel Mix / Webpack)
# ---------------------------------------------------------------------------
FROM node:18-alpine AS asset-builder

WORKDIR /var/www/html

COPY package.json package-lock.json ./
RUN npm ci --no-audit --no-fund

COPY resources/ resources/
COPY webpack.mix.js ./

RUN npx mix --production

# ---------------------------------------------------------------------------
# Stage 3: Final production image
# ---------------------------------------------------------------------------
FROM php:8.2-cli AS production

# Runtime system dependencies (smaller set than build stage)
RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
        libicu-dev libbcmath-dev libxml2-dev libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql mbstring xml curl zip gd intl bcmath fileinfo opcache exif \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# PHP production settings
RUN { \
        echo 'memory_limit = 256M'; \
        echo 'upload_max_filesize = 20M'; \
        echo 'post_max_size = 25M'; \
        echo 'max_execution_time = 60'; \
        echo 'opcache.enable=1'; \
        echo 'opcache.memory_consumption=128'; \
        echo 'opcache.interned_strings_buffer=8'; \
        echo 'opcache.max_accelerated_files=10000'; \
        echo 'opcache.validate_timestamps=0'; \
        echo 'opcache.save_comments=1'; \
        echo 'opcache.fast_shutdown=1'; \
    } > /usr/local/etc/php/conf.d/opcache.ini

WORKDIR /var/www/html

# Copy Composer dependencies from builder
COPY --from=composer-deps /var/www/html/vendor vendor/

# Copy built assets from builder
COPY --from=asset-builder /var/www/html/public/js public/js/
COPY --from=asset-builder /var/www/html/public/css public/css/
COPY --from=asset-builder /var/www/html/public/mix-manifest.json public/mix-manifest.json

# Copy application source code
COPY app/ app/
COPY bootstrap/ bootstrap/
COPY config/ config/
COPY database/ database/
COPY resources/ resources/
COPY routes/ routes/
COPY public/ public/
COPY artisan artisan
COPY server.php server.php
COPY .env.example .env.example

# Ensure required directories exist and are writable
RUN mkdir -p storage/framework/{sessions,views,cache} \
             storage/logs \
             storage/app/public \
             bootstrap/cache \
             public/storage \
    && chmod -R 775 storage bootstrap/cache \
    && chmod -R 775 public/storage

# If a storage link artisan command is needed:
# RUN php artisan storage:link

# Health-check command for Railway
HEALTHCHECK --interval=30s --timeout=5s --retries=3 \
    CMD php artisan tinker --execute="echo 'ok';" || exit 1

# Expose the port Railway assigns
EXPOSE ${PORT:-8000}

# Start the Laravel dev server (Railway sets PORT automatically)
CMD ["sh", "-c", "php artisan key:generate --force && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"]
