## Deskripsi

Project ini merupakan project backend yang dibuat untuk pengelolaan data game yang terdiri dari nama, deskripsi, harga, kategori dan status ketersediaan. Didalamnya terdapat beberapa API yang berfungsi untuk register, login, logout dan CRUD data game. Autentikasi menggunakan sanctum token dari laravel.

## Intruksi

1. **Persiapan Lingkungan:**
   Pastikan Anda sudah menginstal PHP, Laravel, Composer, dan MySQL.

2. **Clone Repositori:**
   `git clone https://github.com/Pacifista00/backendtest_gamemanagement.git`

3. **Instalasi:**
   Buka folder melalui terminal / git bash lalu ketikkan:
   `composer update`

4. **Membuat file .env di Windows:**
   Jika menggunakan windows ketikkan:
   `copy .env.example .env`

5. **Membuat file .env di Linux:**
   Jika menggunakan linux ketikkan:
   `cp .env.example .env`

6. **Generate key**
   Setelah berhasil membuat file .env, berikutnya jalankan perintah berikut:
   `php artisan key:generate`

7. **Buka xampp**
   Buka xampp dan jalankan MySQL
8. **Seeding Database**
   Buat database dan isi database menggunakan seed untuk memuat data dummy dengan menjalankan perintah berikut:
   `php artisan migrate --seed`
9. **Jalankan Aplikasi**
   Jalankan aplikasi dengan perintah berikut:
   `php artisan serve`

10. **Uji coba API**
    Gunakan software API testing seperti Postman atau sebagainya. Sebagai contoh API untuk login adalah seperti dibawah:
    `http://127.0.0.1:8000/api/login` Tambahkan juga parameter yang diperlukan yaitu email dan password.

## Teknologi yang dipakai

-   Laravel 10
-   PHP 8.1.17
-   10.4.28-MariaDB
-   Visual Studi0
-   Postman
