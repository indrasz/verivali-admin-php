<?php
// Header untuk memberitahukan bahwa konten yang dihasilkan adalah JSON
header('Content-Type: application/json');

// Sertakan file koneksi
include 'koneksi.php';

// Konfigurasi pagination
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 100;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Query untuk mengambil data dengan limit dan offset
$sql = "SELECT id, nama, nik, tanggal_lahir, umur, bansos, status_dtks, alamat, kabupaten, kecamatan, desa FROM bansos LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

// Array untuk menyimpan data
$data = array();

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Tutup koneksi
$conn->close();

// Mengembalikan data dalam format JSON
echo json_encode($data);
