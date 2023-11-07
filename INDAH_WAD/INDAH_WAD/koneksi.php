<?php
$host = 'localhost';
$database = 'crud_indah';
$username = 'root';
$password = '';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}
?>
