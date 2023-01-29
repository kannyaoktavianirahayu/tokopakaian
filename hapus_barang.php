<?php
include 'koneksi.php';

$data = mysqli_query($koneksi, "DELETE FROM `tb_pakaian` WHERE id_pakaian=28");
if ($data){
    echo "DELETE berhasil";
    header("location:tampil_barang.php");
}

?>