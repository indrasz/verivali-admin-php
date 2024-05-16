<?php
$servername = "localhost";
$username = "root";  // ganti dengan username MySQL Anda
$password = "root";      // ganti dengan password MySQL Anda
$dbname = "verivali";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil";
