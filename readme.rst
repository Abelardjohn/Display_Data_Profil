# Sistem Sederhana untuk Menampilkan Data User yang Sedang Login

Ini adalah sebuah readme file yang memberikan penjelasan tentang sebuah sistem sederhana yang menggunakan Codeigniter 3 untuk menampilkan data user yang sedang login. Sistem ini memiliki fitur-fitur utama berupa Registrasi, Login, dan Lupa Password.

## Instalasi

Berikut adalah langkah-langkah untuk menginstal sistem ini:

1. Pastikan server web yang mendukung Codeigniter 3 sudah terpasang.
2. Salin seluruh file dari repositori ini ke dalam direktori root server web Anda.
3. Buat sebuah database baru di server MySQL dan impor file sql yang disediakan (`user.sql`) untuk membuat tabel yang diperlukan.
4. Buka file `application/config/database.php` dan sesuaikan pengaturan database sesuai dengan konfigurasi server MySQL Anda.
5. Buka file `application/config/config.php` dan sesuaikan konfigurasi lainnya, seperti base URL sesuai dengan lokasi instalasi sistem di server.

## Struktur Direktori

Berikut adalah struktur direktori utama dari sistem ini:

- **application**: Mengandung seluruh file inti dari aplikasi Codeigniter.
  - **config**: Mengandung file konfigurasi untuk sistem.
  - **controllers**: Mengandung file-file pengontrol yang mengatur logika sistem.
  - **models**: Mengandung file-file model yang berinteraksi dengan database.
  - **views**: Mengandung file-file tampilan yang menampilkan data kepada pengguna.
- **assets**: Mengandung file-file aset seperti gambar, CSS, dan JavaScript.
- **user.sql**: File sql untuk membuat tabel dalam database.
- **index.php**: File utama yang menjalankan sistem Codeigniter.

## Fitur-Fitur

### Registrasi

Fitur Registrasi memungkinkan pengguna untuk membuat akun baru dalam sistem. Untuk mendaftar, pengguna perlu memberikan informasi berikut:

- Nama
- Alamat email
- Foto Profil
- Kata sandi

Setelah pengguna berhasil mendaftar, informasi akun mereka akan disimpan dalam database untuk digunakan saat login.

### Login

Fitur Login memungkinkan pengguna yang sudah terdaftar untuk masuk ke dalam sistem. Pengguna harus memasukkan alamat email dan kata sandi yang sesuai dengan akun yang sudah terdaftar. Jika informasi yang dimasukkan benar, pengguna akan diarahkan ke halaman HOME yang menampilkan data pengguna yang sedang login.

### Lupa Password

Fitur Lupa Password memungkinkan pengguna untuk mengatur ulang kata sandi mereka jika mereka lupa. Dalam fitur ini, pengguna diminta untuk memasukkan alamat email terdaftar dan password yang baru untuk mereset password sebelumnya.

## Lisensi

Sistem ini dilisensikan di bawah [MIT License](LICENSE). Anda bebas menggunakan, memodifikasi, dan mendistribusikan kode ini sesuai dengan persyaratan lisensi tersebut.

