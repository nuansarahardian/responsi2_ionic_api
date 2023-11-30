<?php
include 'koneksi.php';

// ambil data dari database
$query = "SELECT * FROM catatan_pelanggaran WHERE id = {$_GET['id']}";
$result = mysqli_query($koneksi, $query);

// konversi data ke format JSON
$data = mysqli_fetch_assoc($result);

echo json_encode($data);

mysqli_close($koneksi);
?>
