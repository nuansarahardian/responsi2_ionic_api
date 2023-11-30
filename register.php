<?php
include 'koneksi.php';

// ambil data dari body request
$data = json_decode(file_get_contents('php://input'), true);

// enkripsi password sebelum disimpan
$hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

// insert data user ke database
$query = "INSERT INTO user (username, password) VALUES ('{$data['username']}', '$hashedPassword')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo json_encode(['status' => 'sukses']);
} else {
    echo json_encode(['status' => 'gagal']);
}

mysqli_close($koneksi);
?>
