<?php
include 'koneksi.php';

// ambil data dari body request
$data = json_decode(file_get_contents('php://input'), true);

// ambil data user dari database
$query = "SELECT * FROM user WHERE username = '{$data['username']}'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);

    // verifikasi password
    if (password_verify($data['password'], $user['password'])) {
        echo json_encode(['status' => 'sukses']);
    } else {
        echo json_encode(['status' => 'gagal', 'message' => 'Password salah']);
    }
} else {
    echo json_encode(['status' => 'gagal', 'message' => 'Username tidak ditemukan']);
}

mysqli_close($koneksi);
?>
