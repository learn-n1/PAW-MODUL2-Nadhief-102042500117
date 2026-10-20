<?php
// Sesuaikan dengan MySQL di laptop masing-masing.
// XAMPP/Laragon biasanya: port 3306, user root, password kosong.
// MAMP biasanya: port 8889, user root, password root.
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database   = 'paw_jurnal2_lms';
$port = 3307;
$conn = @new mysqli($host, $username, $password, $database, $port);

try {
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    http_response_code(503);
    exit('Koneksi database gagal. Cek MySQL sudah menyala, database.sql sudah di-import, dan isi connect.php sudah benar.');
}
