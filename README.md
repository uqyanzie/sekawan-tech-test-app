# Sekawan Vehicle Loan System

### Keterangan
Project ini dibuat untuk memenuhi tahapan technical test pada PT. Sekawan Media Informatika. Project ini dibuat dengan menggunakan framework Laravel 8 dan database MySQL.

## System Requirements
- PHP >= ^8.0
- Laravel >= ^8.0
- Composer >= ^2.0
- NodeJS >= ^14.0
- NPM >= ^6.0
- MySQL >= ^8.0

### Instalasi
1. Clone repository ini
2. Masuk ke dalam folder project
3. Jalankan perintah `composer install`
4. Jalankan perintah `npm install`
5. Buat file `.env` dengan menyalin isi dari file `.env.example`
6. Nyalakan server MySQL lewat XAMPP/Laragon dan buat database baru dengan nama `sekawan_vehicle`
7. Ubah konfigurasi database `DB_DATABASE`  pada file `.env` menjadi `DB_DATABASE=sekawan_vehicle`
8. Jalankan perintah `php artisan key:generate`
9. Jalankan migrasi database dan seeder dengan perintah `php artisan migrate --seed`
10. Jalankan perintah `php artisan storage:link` untuk membuat symlink folder `storage/app/public` ke folder `public/storage
11. Jalankan perintah `php artisan serve` untuk menjalankan aplikasi

## Description
Sebuah perusahaan tambang nikel berlokasi di beberapa daerah (region), satu kantor pusat, satu kantor cabang dan memiliki enam tambang dengan lokasi yang berbeda. Perusahaan tersebut mempunyai banyak kendaraan dengan jenis kendaraan angkutan orang dan angkutan barang. Selain kendaraan milik perusahaan, ada juga kendaraan yang disewa dari perusahaan persewaan. 

Perusahaan tersebut membutuhkan sebuah web aplikasi untuk dapat memonitoring  kendaraan yang dimiliki. Mulai dari konsumsi BBM, jadwal service dan riwayat pemakaian kendaraan. Untuk dapat memakai kendaraan, pegawai diwajibkan untuk melakukan pemesanan terlebih dahulu ke pool atau bagian pengelola kendaraan dan pemakaian kendaraan harus diketahui atau disetujui oleh masing - masing atasan.

## Daftar User
1. Admin
  - Email: admin@mail.com
  - Password: admin123 
- 
