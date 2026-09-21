# =============================================================================
# Dockerfile — LDK Al-Madaniah UBB (Laravel 8.83.29 · PHP 8.2)
# Simple two-stage build: composer-deps → production
# =============================================================================

# ---------------------------------------------------------------------------
# Stage 1: Composer dependencies
# ---------------------------------------------------------------------------
FROM php:8.2-cli AS composer-deps

RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip pkg-config libcurl4-openssl-dev libzip-dev libpng-dev \
        libjpeg62-turbo-dev libfreetype6-dev libicu-dev libxml2-dev libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql mbstring xml curl zip gd intl bcmath fileinfo opcache exif \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./

# Install deps WITHOUT autoloader optimization (source not copied yet)
RUN composer install \
        --no-dev \
        --no-interaction \
        --no-scripts \
        --prefer-dist \
        --no-autoloader

# ---------------------------------------------------------------------------
# Stage 2: Final production image
# ---------------------------------------------------------------------------
FROM php:8.2-cli AS production

RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip pkg-config libcurl4-openssl-dev libzip-dev libpng-dev \
        libjpeg62-turbo-dev libfreetype6-dev libicu-dev libxml2-dev libonig-dev \
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

# Copy application source code (assets already compiled in repo)
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

# Generate optimized autoloader NOW (source code is present)
RUN composer dump-autoload --optimize --no-scripts

# Ensure required directories exist and are writable
RUN mkdir -p storage/framework/{sessions,views,cache} \
             storage/logs \
             storage/app/public \
             bootstrap/cache \
             public/storage \
    && chmod -R 775 storage bootstrap/cache \
    && chmod -R 775 public/storage

# Expose the port Railway assigns
EXPOSE ${PORT:-8000}

# Start the Laravel dev server (Railway sets PORT automatically)
CMD ["sh", "-c", "php artisan key:generate --force && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"]
