<?php
include 'koneksi.php';

// ambil data dari body request
$data = json_decode(file_get_contents('php://input'), true);

// hapus data di database
$query = "DELETE FROM catatan_pelanggaran WHERE id = {$data['id']}";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo json_encode(['status' => 'sukses']);
} else {
    echo json_encode(['status' => 'gagal']);
}

mysqli_close($koneksi);
?>
