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

Instalasi
Clone repository:
git clone https://github.com/Array2026/ARJUNRAY-TEST.git
cd ARJUNRAY-TEST
Install dependensi PHP (gunakan Composer):
composer install
Jalankan migration untuk membuat tabel:
php artisan migrate
Jalankan aplikasi di server lokal:
php -S localhost:8000 -t public
Buka browser di http://localhost:8000

Catatan
File .env bisa diubah untuk konfigurasi database