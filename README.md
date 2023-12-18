### Tugas Analisis dan Desain Sistem 
### Oleh: Audrey Roselyn Natasya (12030122140296)
### Kelas D Andes S1- Akuntansi dengan Bapak Totok Dewayanto

### ROOMING (Room Booking)

Merupakan aplikasi yang dibuat untuk memesan hotel. Melalui aplikasi ini pelanggan atau user bisa memesan kamar dan mendapatakan segala informasi tentang kamar yang disediakan dengan cepat, sehingga pemesanan hotel bisa dilakukan dengan lebih cepat, efektif, dan efisien. 
Aplikasi sistem informasi hotel ini menggunakan laravel PHP 8. 

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


### Demo
[Youtube](https://youtu.be/ZZL4VrJCA3E)


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

### 1. Source code my booking list user
![source code my booking list user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/1967e1e0-0825-4340-850b-6c82d401a90b)

### 2. Source code room user
![source code room user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/659c14f2-151d-49ac-ac7c-e4013f05ed32)

### 3. Source code change pass
![source code change pass](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/c06246a4-1389-4436-b435-9302065cb222)

### 4. Source code booking list admin
![source code booking list admin](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/8f60e142-551e-4f73-8d65-15479f8fad40)

### 5. Source code room admin
![source code room admin](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/e93d9aca-b74c-4b69-b455-434d39b61cb4)

### 6. Source code user
![source code user](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/assets/152130643/451fe88a-1506-479b-857b-47cd5283e4dc)

### Berikut merupakan hasil laporan beserta penjelasan mengenai sistem informasi dan aplikasi sistem pembelian yang telah saya buat. Silahkan di klik yaa!. Terima kasih 😄
[Audrey Roselyn Natasya 12030122140296_Laporan Tugas ANDES Aplikasi Hotel.pdf](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Tugas-ANDES-Kelas-D-Aplikasi-Hotel/files/13705360/Audrey.Roselyn.Natasya.12030122140296_Laporan.Tugas.ANDES.Aplikasi.Hotel.pdf)









