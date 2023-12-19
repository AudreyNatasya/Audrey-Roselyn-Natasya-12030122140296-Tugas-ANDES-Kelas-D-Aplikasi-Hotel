### Tugas Analisis dan Desain Sistem 
### Nama: Audrey Roselyn Natasya 
### NIM: (12030122140296)
### Jurusan: S1-Akuntansi
### Mata kuliah/ kelas: Analisis dan Desain Sistem/ kelas D
### Dosen pengampu: Bapak Totok Dewayanto, S.E.,M.Si., Akt.

### ROOMING (Room Booking) 😄

Merupakan aplikasi yang dibuat untuk memesan hotel. Melalui aplikasi ini pelanggan atau user bisa memesan kamar dan mendapatakan segala informasi tentang kamar yang disediakan dengan cepat, sehingga pemesanan hotel bisa dilakukan dengan lebih cepat, efektif, dan efisien. Aplikasi hotel ini bergerak di bidang teknologi informasi. Sistem ini memanfaatkan teknologi informasi untuk membantu hotel dalam mengelola operasionalnya. Dengan adanya sistem informasi hotel, hotel dapat meningkatkan efisiensi dan efektivitas operasionalnya, serta memberikan layanan yang lebih baik kepada tamu.Aplikasi sistem informasi hotel ini menggunakan laravel PHP 8. 

Pertama user membuat form, form otomatis akan berstatus PENDING. Lalu admin bisa menyetujui atau menolak permintaan booking user. Admin juga bisa membatalkan penyetujuan maupun penolakan booking. 

Form booking dibuat untuk booking 1 hari. 

Ada 7 status booking, di antaranya PENDING, DISETUJUI, DIGUNAKAN, DITOLAK, BATAL, SELESAI, dan EXPIRED.

### Penjelasan Status Booking
Berikut ini ialah penjelasan status booking yang dibuat oleh User. Otomatisasi perubahan status booking dilakukan dengan Laravel Scheduler.

1. PENDING. Ketika User baru mengajukan permintaan booking.
2. DISETUJUI. Ketika Admin menyetujui permintaan booking User. Aksi ini bisa dibatalkan dengan mengklik Batalkan di data booking User
3. DIGUNAKAN. Ketika User tengah menggunakan ruangan, dilihat berdasarkan tanggal, waktu mulai dan waktu selesai booking User.
4. DITOLAK. Ketika Admin menolak permintaan booking User. Aksi ini bisa dibatalkan dengan mengklik Setujui di data booking User.
5. BATAL. Ketika User membatalkan permintaan booking. Aksi ini tidak bisa dibatalkan
6. SELESAI. Ketika waktu booking selesai, dilihat berdasarkan tanggal, waktu mulai dan waktu selesai booking User.
7. EXPIRED. Ketika permintaan booking User dibiarkan PENDING sampai melewati waktu mulai booking.

Note: ROOMING menggunakan waktu Jakarta / Waktu Indonesia Barat. Jika ingin mengganti waktu yang digunakan, ganti nilai `APP_TIMEZONE` di .env

### Tech Stack
- Laravel 8
- Bootstrap 4
lain-lain:
- Yajra Datatables
- Stisla Admin Theme

### Instalasi
- Clone atau Download 
- Masuk ke folder ROOMING ini
- Copy .env.example ke .env (Jika tidak ada .env silakan buat di root folder)
- Sesuaikan konfigurasi .env seperti username dan password database dengan milikmu
- Jalankan `php artisan key:generate` untuk generate `APP_KEY` di .env
- Buat database MySQL dengan nama `db_rooming`
- Jalankan di terminal `composer install`
- Jalankan di terminal `php artisan migrate --seed`
- Buat Cron Job (Linux) atau Task Scheduler (Windows) untuk menjalankan perintah schedule Laravel karena ROOMING menggunakan [Laravel Scheduler](https://laravel.com/docs/8.x/scheduling).

### Menjalankan Laravel Scheduler di Linux (Ubuntu)
- Ketik `crontab -e` atau `sudo crontab -e` di terminal
- Sistem akan membuatkan sebuah file jika ini adalah kali pertama
- Masukkan perintah `* * * * * cd /path/ke/projekmu && php artisan schedule:run >> /dev/null 2>&1`
- Ganti `/path/ke/projekmu` dengan path projek ROOMING kamu
- Tekan `Ctrl+x` lalu tekan `y` dan enter
- Untuk melihat cronjob akun User yang saat ini dipakai ketik `crontab -l` atau `sudo crontab -l`

### Jalankan Aplikasi
```
php artisan serve
```

### Jalankan Queues
[Queues](https://laravel.com/docs/8.x/queues) digunakan untuk pengiriman email notifikasi pembuatan, pembatalan, penyetujuan, dan penolakan request booking.
```
php artisan queue:work
```

### User
User\
Username: user\
Password: user

Admin\
Username: admin\
Password: admin


### Berikut adalah tampilan aplikasi hotel yang saya buat:
### Halaman  login 👇
![login hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/8f10f8b2-4517-466c-a81a-6a4fcf4e1854)
Melalui halaman ini nantinya baik admin maupun user (pelanggan) mengisi username dan password agar bisa masuk ke aplikasi sistem hotel. 

### Halaman  dashboard admin 👇
![halaman dashboard admin hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/397edc19-2f45-418f-9ef0-58a34ebed3fd)
Halaman ini berfungsi untuk menampilkan informasi total ruangan, total user, dan total pemesanan kamar yang dipesan oleh pelanggan. 

### Halaman  data ruangan 👇
![data ruangan hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/b3a41fd7-4b17-4fd9-b874-01dd5171de3b)
Halaman ini berfungsi untuk menampilkan daftar data-data ruangan apa saja yang disediakan oleh hotel termasuk kapasitas dan deskripsinya. 

### Halaman data user 👇
![data user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/9fc6b413-9f41-4301-9866-7bda48cf535f)
Halaman ini berfungsi untuk menampilkan data-data pelanggan yang masuk ke sistem informasi hotel.

### Halaman booking lists 👇
![booking list hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/3da7e8aa-7743-4f10-be51-c691b9649bc9)
Halaman ini berfungsi untuk menampilkan daftar-daftar pesanan yang sudah di booking oleh para pelanggan sebelumnya. 

### Halaman dashboard user 👇
![dashboard hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/387c2c3e-c5e9-47e7-8fe8-d2b99d5313d9)
Halaman ini berfungsi untuk menampilkan jumlah pesanan yang mereka buat sebelumya. 

### Halaman data ruangan user 👇
![data ruangan user hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/2576f10c-4ee1-433e-987c-31bbd66682af)
Halaman ini berfungsi untuk menampilkan data-data ruangan yang ada

### Halaman my booking list 👇
![mu booking list hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/0bcb1cfd-3796-402d-b745-f36f3be66573)
Halaman ini berfungsi untuk menampilkan daftar-daftar pesanan kamar yang sudah dipesan oleh user atau pelanggan.

### Halaman ganti password 👇
![ganti password hotel](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/fbbf992b-e807-48cb-ad95-e53d7752d412)
Halaman ini berfungsi buat admin dan juga user untuk mengganti password mereka.

### Source Code
Source code dalam sistem informasi aplikasi hotel adalah kode program yang ditulis dalam bahasa pemrograman tertentu, seperti PHP, Java, atau Python. Kode program ini berisi instruksi-instruksi yang akan dijalankan oleh komputer untuk membuat sistem informasi aplikasi hotel tersebut berfungsi.
Berikut adalah beberapa source code dari sistem informasi hotel 👇

### 1. Source code user
Didalam source code user ini terdiri dari dua yaitu source code my booking list dan source code room. 

### a. Source code my booking list
Source code my booking list berfungsi untuk mengubah atau mengedit daftar-daftar pesanan yang tersedia. 
![source code my booking list user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/ef918698-dead-4263-b584-304ff7c30a82)

### b. Source code room 
Source code room berfungsi untuk mengubah atau mengedit daftar-daftar kamar yang tersedia. 
![source code room user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/7dd20bd0-3e2c-478c-b3a3-373f3e9f2a8e)

### 2. Source code change pass
Source code dibawah ini berfungsi untuk mengubah atau mengedit password admin maupun user. 
![source code change pass](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/c94669ec-28ca-4c96-876b-c763dd932c7f)

### 3. Source code admin
Didalam source code user ini terdiri dari tiga yaitu source code booking list, user dan source code room. 

### a. Source code booking list (admin)
![source code booking list admin](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/d6aaec56-2f82-4d29-9390-be07ae63bce1)

### b. Source code user (admin)
- Index.blade: digunakan untuk menampilkan halaman web yang menampilkan daftar semua kamar. Halaman ini dapat digunakan untuk melihat informasi tentang daftar kamar yang tersedia.
  ![source code index blade room](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/144278fb-82e0-40b1-a4e0-8ec5606b4ddb)
  
- Edit_or_create.blade: digunakan untuk menampilkan halaman web yang digunakan untuk membuat atau mengedit data kamar. Halaman ini memiliki formulir yang dapat digunakan untuk memasukkan atau 
  mengubah informasi tentang kamar.
  ![source code edit or created blade room](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/738deff9-ec23-49f5-a705-5b98996c5ccd)

### c. Source code user
Didalam source code user ini terdiri dari empat komponen yaitu:

- Source code change-pass.blade:
  Digunakan untuk menampilkan halaman web yang digunakan untuk mengubah kata sandi pengguna. Halaman ini memiliki formulir yang dapat digunakan untuk memasukkan kata sandi baru.
  ![source code change pass blade user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/01fe7bd2-9ac7-4938-86ea-2de9a6c600fa)

- Source code create.blade
  Digunakan untuk menampilkan halaman web yang digunakan untuk membuat data pengguna baru. Halaman ini memiliki formulir yang dapat digunakan untuk memasukkan data pengguna baru.
  ![source code create blade user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/5ea4e44b-8a4b-4fe5-9741-d90b99f375ff)

- Source code edit.blade
  Digunakan untuk menampilkan halaman web yang digunakan untuk mengedit data pengguna. Halaman ini memiliki formulir yang dapat digunakan untuk mengubah data pengguna yang sudah ada.
  ![source code edit blade user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/b15287e2-1030-4219-88dd-2a849abaeb51)

- Source code index.blade
  Untuk menampilkan halaman web yang menampilkan daftar semua pengguna. Halaman ini dapat digunakan untuk melihat informasi tentang pengguna, seperti nama, alamat, dan nomor telepon.
  ![source code index blade user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/0e2e8e64-c190-4941-9849-5c81e393df2a)
   

### Berikut merupakan hasil laporan beserta penjelasan mengenai sistem informasi dan aplikasi sistem pembelian yang telah saya buat. Silahkan di klik yaa!. Terima kasih 😄
[Audrey Roselyn Natasya_12030122140296_LaporanAkhir.pdf](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/files/13709884/Audrey.Roselyn.Natasya_12030122140296_LaporanAkhir.pdf)








