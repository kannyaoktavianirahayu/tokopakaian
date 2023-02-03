<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `tb_pakaian` WHERE `id_pakaian` = $id");

if($data == TRUE){
    header("location: tampil_barang.php");
}else{
    echo "gagal hapus";
}
