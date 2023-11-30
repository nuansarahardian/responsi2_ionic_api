<?php
include 'koneksi.php';

// ambil data dari body request
$data = json_decode(file_get_contents('php://input'), true);

// update data di database
$query = "UPDATE catatan_pelanggaran SET
          nama_pelanggar = '{$data['nama_pelanggar']}',
          tanggal = '{$data['tanggal']}',
          jenis_pelanggaran = '{$data['jenis_pelanggaran']}',
          keterangan = '{$data['keterangan']}'
          WHERE id = {$data['id']}";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo json_encode(['status' => 'sukses']);
} else {
    echo json_encode(['status' => 'gagal']);
}

mysqli_close($koneksi);
?>
