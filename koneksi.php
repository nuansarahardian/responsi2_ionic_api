<?php
//header untuk menangani cors policy
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json, charset=utf-8');

//membuat variable koneksi ke mysql
$host = 'localhost';
$user = 'root';
$pass = '123';
$db   = 'pelanggaran';

$koneksi = mysqli_connect($host, $user, $pass, $db) or die('koneksi gagal');
?>
