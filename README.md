ARJUNRAY-TEST

Aplikasi web berbasis PHP untuk manajemen user dan produk dengan sistem autentikasi.
Struktur project menggunakan gaya Laravel-style framework, dengan mysql sebagai database nya.

Fitur Utama
Autentikasi user: login, logout, register.
Manajemen user: tambah, edit, hapus, daftar user.
Manajemen produk: tambah, edit, hapus, daftar, dan detail produk.
Middleware: proteksi halaman untuk user.
Database mysql.

Alur Kerja
User membuka halaman web (login, register, produk).
Request diarahkan ke routes (web.php).
Route memanggil Controller sesuai fungsinya:
AuthController → login/logout
RegisterController → registrasi
UserController → CRUD user
ProductController → CRUD produk
Controller mengakses Model untuk operasi database.
Data dikirim ke Blade template (resources/views) untuk ditampilkan di browser.

## Instalasi

```bash
git clone https://github.com/Array2026/ARJUNRAY-TEST.git
cd ARJUNRAY-TEST

composer install
```

Buat file `.env` lalu isi konfigurasi database:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

Generate key dan jalankan migration:

```bash
php artisan key:generate
php artisan migrate
php artisan serve
```

Buka aplikasi di:

```text
http://127.0.0.1:8000
```

Catatan
File .env bisa diubah untuk konfigurasi database
