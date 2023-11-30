<?php
include 'koneksi.php';

// ambil data dari body request
$data = json_decode(file_get_contents('php://input'), true);

// insert data ke database
$query = "INSERT INTO catatan_pelanggaran (nama_pelanggar, tanggal, jenis_pelanggaran, keterangan)
          VALUES ('{$data['nama_pelanggar']}', '{$data['tanggal']}', '{$data['jenis_pelanggaran']}', '{$data['keterangan']}')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo json_encode(['status' => 'sukses']);
} else {
    echo json_encode(['status' => 'gagal']);
}

mysqli_close($koneksi);
?>
