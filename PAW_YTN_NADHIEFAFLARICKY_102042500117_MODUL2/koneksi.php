<?php
// Sesuaikan akun, sandi, dan nama database dengan komputer Anda.
// 127.0.0.1 memakai port TCP yang sama di Windows dan Mac.

// =====================================================================
// TODO 1 - Membuat koneksi ke database MySQL
//   127.0.0.1 = alamat host     -> komputer sendiri: 127.0.0.1
//   root = username MySQL  -> bawaan XAMPP/Laragon: root
//   ___1c___ = password MySQL  -> bawaan XAMPP/Laragon: kosong, jadi tulis ''
//   paw_modul2_showroom = nama database   -> lihat baris CREATE DATABASE di database.sql
// =====================================================================
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "paw_modul2_showroom";
$port = 3307;
$conn = @new mysqli($host, $username, $password, $database, $port);
if (!$conn) {
    die ("Koneksi database gagal:" . mysqli_connect_error());
}
// =====================================================================
// TODO 2 - Mengatur charset koneksi
//   utf8mb4 = nama charset -> samakan dengan CHARACTER SET di database.sql
// =====================================================================
mysqli_set_charset($conn, 'utf8mb4');

// echo "Koneksi database berhasil!";
?>