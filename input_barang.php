<?php
include 'koneksi.php';
$nama_pakaian = $_POST['nama_pakaian'];
$harga_pakaian = $_POST['harga_pakaian'];
$warna_pakaian = $_POST['warna_pakaian'];
$jumlah_pakaian = $_POST['jumlah_pakaian'];
$stok_pakaian = $_POST['stok_pakaian'];

$data = mysqli_query($koneksi, "INSERT INTO `tb_pakaian`(`nama_pakaian`, `harga_pakaian`, `warna_pakaian`, `jumlah_pakaian`, `stok_pakaian`) VALUES ('$nama_pakaian','$harga_pakaian','$warna_pakaian','$jumlah_pakaian','$stok_pakaian')");
header("location: tampil_barang.php");
?>