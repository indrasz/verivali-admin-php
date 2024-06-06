<?php
header('Content-Type: application/json');

// Sertakan file koneksi
include 'koneksi.php';

// Periksa apakah parameter NIK ada dalam permintaan
$search_nik = isset($_GET['nik']) ? $_GET['nik'] : '';

$response = array();

if (!empty($search_nik)) {
    // Query untuk mengambil data berdasarkan NIK
    $sql = "SELECT nama, nik, tanggal_lahir, umur, bansos, status_dtks, alamat, kabupaten, kecamatan, desa 
            FROM bansos 
            WHERE nik LIKE '%$search_nik%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $response['status'] = 'success';
        $response['data'] = $data;
    } else {
        $response['status'] = 'no_data';
        $response['message'] = 'Tidak ada data yang ditemukan';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Parameter NIK tidak ditemukan';
}

echo json_encode($response);

$conn->close();
