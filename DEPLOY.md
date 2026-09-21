# Panduan Deployment ke Railway — LDK Al-Madaniah UBB

> **Versi Laravel:** 8.83.29 · **PHP:** 8.2 · **Database:** MySQL  
> **Terakhir diperbarui:** September 2026

---

## Daftar Isi

1. [Persiapan Akun Railway](#1-persiapan-akun-railway)
2. [Struktur File Deployment](#2-struktur-file-deployment)
3. [Sambungkan Repository GitHub](#3-sambungkan-repository-github)
4. [Setup Database MySQL](#4-setup-database-mysql)
5. [Konfigurasi Environment Variables](#5-konfigurasi-environment-variables)
6. [Build & Deploy](#6-build--deploy)
7. [Post-Deploy Verification](#7-post-deploy-verification)
8. [Troubleshooting](#8-troubleshooting)
9. [Tips & Best Practices](#9-tips--best-practices)

---

## 1. Persiapan Akun Railway

1. Buka [railway.app](https://railway.app) dan daftar akun (bisa pakai GitHub).
2. Verifikasi email jika diminta.
3. Install Railway CLI (opsional, untuk deploy dari terminal):

```bash
# macOS / Linux
curl -fsSL https://railway.com/install.sh | sh

# Windows (pakai scoop atau download dari GitHub)
npm install -g @railway/cli
railway login
```

---

## 2. Struktur File Deployment

Berikut file yang sudah disiapkan di root project:

| File | Fungsi |
|------|--------|
| `Dockerfile` | Multi-stage Docker build: Composer deps → Laravel Mix assets → production image PHP 8.2 |
| `railway.json` | Konfigurasi Railway build & deploy |
| `Procfile` | Perintah awal aplikasi untuk Railway |
| `.env.production` | Template environment variables (jangan commit ke repo!) |

> **Catatan:** `.env.production` hanya template panduan. Nilai sebenarnya diatur via Railway Dashboard, bukan di-commit ke repository.

---

## 3. Sambungkan Repository GitHub

### 3.1 Buat Project Baru di Railway

1. Login ke [railway.app/dashboard](https://railway.app/dashboard).
2. Klik **"+ New Project"** → pilih **"Deploy from GitHub Repo"**.
3. Jika pertama kali, Railway akan meminta izin akses GitHub — klik **Authorize**.
4. Cari dan pilih repository `ldksyahid-app`.
5. Railway akan otomatis mendeteksi `Dockerfile` di root.

### 3.2 Manual Deploy (jika belum terhubung)

1. Klik **"New"** → **"GitHub Repo"** di sidebar.
2. Pilih branch `main` atau branch yang ingin di-deploy.

---

## 4. Setup Database MySQL

### 4.1 Tambah Plugin MySQL

1. Di dashboard project, klik tab **"New"** → pilih **"Database"** → **"MySQL"**.
2. Railway akan membuat instance MySQL dan menghasilkan variabel:
   - `MYSQL_URL`
   - `MYSQLHOST`
   - `MYSQLPORT`
   - `MYSQLDATABASE`
   - `MYSQLUSER`
   - `MYSQLPASSWORD`

### 4.2 Copy ke Service App

1. Klik service **MySQL** → tab **"Data"** untuk memastikan database aktif.
2. Kembali ke tab service **app** → tab **"Variables"**.
3. Railway otomatis memasukkan variabel MySQL. Pastikan `DB_CONNECTION=mysql` sudah di-set.

### 4.3 Parsing MYSQL_URL (jika perlu)

Railway menyediakan `MYSQL_URL` dalam format:
```
mysql://user:password@host:port/database
```

Jika aplikasi tidak mem-parse otomatis, tambahkan shell script di `startCommand`:

```bash
eval $(python3 -c "
import os, urllib.parse
url = os.environ.get('MYSQL_URL', '')
if url:
    p = urllib.parse.urlparse(url)
    print(f'export DB_HOST={p.hostname}')
    print(f'export DB_PORT={p.port}')
    print(f'export DB_DATABASE={p.path.lstrip(\"/\")}')
    print(f'export DB_USERNAME={p.username}')
    print(f'export DB_PASSWORD={p.password}')
")
```

> **Tips:** Di Railway Dashboard, kamu bisa menambahkan variabel `DB_HOST`, `DB_PORT`, dll. secara manual dengan nilai dari MySQL instance — ini lebih mudah daripda parsing URL.

---

## 5. Konfigurasi Environment Variables

### 5.1 Set Variabel Wajib

Di Railway Dashboard → tab **"Variables"** → tambahkan:

| Variable | Nilai |
|----------|-------|
| `APP_NAME` | `LDK Al-Madaniah UBB` |
| `APP_ENV` | `production` |
| `APP_KEY` | (generate dengan `php artisan key:generate`, atau Railway bisa generate) |
| `APP_DEBUG` | `false` |
| `APP_URL` | `https://your-app.up.railway.app` |
| `DB_CONNECTION` | `mysql` |
| `DB_HOST` | *(dari Railway MySQL)* |
| `DB_PORT` | *(dari Railway MySQL)* |
| `DB_DATABASE` | *(dari Railway MySQL)* |
| `DB_USERNAME` | *(dari Railway MySQL)* |
| `DB_PASSWORD` | *(dari Railway MySQL)* |
| `MAIL_MAILER` | `smtp` |
| `MAIL_HOST` | `smtp-relay.brevo.com` |
| `MAIL_PORT` | `587` |
| `MAIL_USERNAME` | *(Brevo login email)* |
| `MAIL_PASSWORD` | *(Brevo SMTP key)* |
| `MAIL_ENCRYPTION` | `tls` |
| `MAIL_FROM_ADDRESS` | *(sender verified di Brevo)* |
| `MAIL_FROM_NAME` | `LDK Al-Madaniah` |
| `QUEUE_CONNECTION` | `sync` |
| `FILESYSTEM_DRIVER` | `public` |
| `SESSION_DRIVER` | `file` |

### 5.2 Set Variabel Integrasi

Tambahkan sesuai kebutuhan:

```bash
# Google OAuth
GOOGLE_CLIENT_ID=...
GOOGLE_CLIENT_SECRET=...
GOOGLE_REDIRECT_URI=https://your-app.up.railway.app/auth/google/callback

# Xendit
SECRET_KEY_XENDIT=...
XENDIT_WEBHOOK_TOKEN=...

# reCAPTCHA Enterprise
RECAPTCHA_SITE_KEY=...
RECAPTCHA_API_KEY=...
RECAPTCHA_PROJECT_ID=...
RECAPTCHA_ENABLED=true

# Kirimdev (WhatsApp)
KIRIMDEV_API_KEY=...
KIRIMDEV_PHONE_NUMBER_ID=...
KIRIMDEV_BASE_URL=https://api.kirimdev.com/v1

# Brevo API
BREVO_API_KEY=...
```

### 5.3 Generate APP_KEY via CLI

```bash
# Jika Railway tidak auto-generate:
railway run php artisan key:generate
```

---

## 6. Build & Deploy

### 6.1 Auto-Deploy (GitHub Push)

Setelah repo terhubung, Railway akan otomatis deploy setiap push ke branch yang terhubung (default: `main`).

### 6.2 Manual Deploy

**Via Dashboard:**
1. Buka service app → klik tombol **"Deploy"** di pojok kanan atas.

**Via CLI:**
```bash
cd /path/to/ldksyahid-app
railway link          # pilih project & service
railway up            # build & deploy
```

### 6.3 Monitor Build

- Tab **"Deployments"** di dashboard menunjukkan status build & deploy.
- Klik **"View Logs"** untuk melihat output log build dan runtime.
- Build biasanya selesai dalam 2–5 menit.

---

## 7. Post-Deploy Verification

### 7.1 Cek Aplikasi Berjalan

```bash
# Buka URL dari dashboard, atau:
railway open
```

Pastikan halaman utama muncul tanpa error 500.

### 7.2 Jalankan Migration

Jika migration belum berjalan otomatis (tergantung CMD di Dockerfile):

```bash
railway run php artisan migrate --force
```

### 7.3 Seed Data (opsional)

```bash
railway run php artisan db:seed --force
```

### 7.4 Jalankan Spatie Permission Migration

```bash
railway run php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
railway run php artisan migrate --force
```

### 7.5 Buat Storage Link

```bash
railway run php artisan storage:link
```

### 7.6 Cek Semua Service

```bash
railway run php artisan about
railway run php artisan route:list
```

---

## 8. Troubleshooting

### Error: "No such file or directory" saat build

**Penyebab:** File yang dibutuhkan Dockerfile belum ada di repo.  
**Solusi:** Pastikan file berikut ada di root project:
- `composer.json`, `composer.lock`
- `package.json`, `package-lock.json`
- `artisan`
- Folder: `app/`, `config/`, `database/`, `routes/`, `resources/`, `public/`

### Error: "Permission denied" pada storage/ atau bootstrap/cache/

**Solusi:** Tambahkan di Dockerfile atau CMD:
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Error: "Connection refused" ke database

**Penyebab:** MySQL belum siap atau variabel `DB_HOST` salah.  
**Solusi:**
1. Cek variabel MySQL di Railway Dashboard.
2. Tambahkan `sleep 5 &&` sebelum migrate (opsional).
3. Pastikan service MySQL aktif (icon hijau di dashboard).

### Error: 500 Internal Server Error

**Solusi:**
1. Cek log: `railway logs` atau tab **"Metrics/Logs"** di dashboard.
2. Pastikan `APP_DEBUG=false` di production.
3. Pastikan `APP_KEY` sudah di-generate.
4. Cek `APP_URL` sesuai dengan URL Railway.

### Error: "Target class does not exist" (500)

**Solusi:**
```bash
railway run php artisan config:clear
railway run php artisan cache:clear
railway run php artisan route:clear
```

### Assets (CSS/JS) tidak muncul

**Solusi:**
1. Pastikan `npm run build` atau `npx mix --production` berhasil saat build.
2. Cek apakah file `public/css/app.css` dan `public/js/app.js` ada.
3. Jalankan: `railway run php artisan vendor:publish --force --tag=laravel-assets`

---

## 9. Tips & Best Practices

### Migrasi dari SQLite ke MySQL

Jika kamu menjalankan SQLite di development:

1. Ubah `.env` development:
   ```
   DB_CONNECTION=sqlite
   DB_DATABASE=/full/path/to/database.sqlite
   ```
2. Jalankan `php artisan migrate` di SQLite untuk mendapat schema.
3. Export data:
   ```bash
   php artisan tinker
   # Dalam tinker:
   # $users = \App\Models\User::all()->toArray();
   # file_put_contents('users.json', json_encode($users));
   ```
4. Di Railway (MySQL), jalankan migration lalu import data.

### Domain Kustom

1. Di Railway Dashboard → tab **"Settings"** → **"Networking"**.
2. Tambahkan **Custom Domain** → masukkan domain.
3. Update DNS: tambahkan CNAME record ke `<project>.up.railway.app`.
4. Update `APP_URL` di variabel environment.

### Monitoring & Alert

- Railway menyediakan **Metrics** (CPU, RAM, Network) di dashboard.
- Untuk error alerting, integrasikan dengan layanan seperti Sentry atau Brevo log.

### Backup Database

Railway MySQL menyediakan automatic backup. Untuk manual backup:
```bash
railway run mysqldump -u $DB_USERNAME -p$DB_PASSWORD $DB_DATABASE > backup.sql
```

---

> **Dibuat untuk deployment LDK Al-Madaniah UBB ke Railway.**
> Dokumen ini bersifat panduan umum — sesuaikan dengan kebutuhan spesifik proyekmu.
