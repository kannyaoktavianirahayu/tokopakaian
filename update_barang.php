<?php
include 'koneksi.php';
echo $id = $_POST['id_pakaian'];
echo $nama_pakaian = $_POST['nama_pakaian'];
echo $harga_pakaian = $_POST['harga_pakaian'];
echo $warna_pakaian = $_POST['warna_pakaian'];
echo $jumlah_pakaian = $_POST['jumlah_pakaian'];
echo $stok_pakaian = $_POST['stok_pakaian'];

$data = mysqli_query($koneksi, "UPDATE `tb_pakaian` SET `nama_pakaian`='$nama_pakaian',`harga_pakaian`='$harga_pakaian',`warna_pakaian`='$warna_pakaian',`jumlah_pakaian`='$jumlah_pakaian',`stok_pakaian`='$stok_pakaian' WHERE `id_pakaian` = $id");
header("location: tampil_barang.php");