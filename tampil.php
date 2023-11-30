<?php
include 'koneksi.php';

// ambil data dari database
$query = "SELECT * FROM catatan_pelanggaran";
$result = mysqli_query($koneksi, $query);

// konversi data ke format JSON
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($koneksi);
?>
