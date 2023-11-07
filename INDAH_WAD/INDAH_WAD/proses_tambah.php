<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$kategori = $_POST['kategori'];
$jumlah_barang = $_POST['deskripsi']; // Ambil nilai jumlah barang dari input deskripsi
$satuan = $_POST['satuan']; // Ambil nilai satuan dari input satuan

$deskripsi = $jumlah_barang . ' ' . $satuan; // Gabungkan jumlah barang dan satuan

$query = "INSERT INTO barang (nama_barang, harga_barang, kategori, deskripsi) VALUES ('$nama_barang', '$harga_barang', '$kategori', '$deskripsi')";
mysqli_query($koneksi, $query);

header("Location: index.php");
?>
