<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM `tb_pakaian` WHERE `id_pakaian` = $id");

$tampil = mysqli_fetch_array($data);
?>
<form action="update_barang.php" method="POST">
    <input type="text" name = "id_pakaian" value="<?php echo $id;?>" hidden=""><br>
    <input type="text" name = "nama_pakaian" value="<?php echo $tampil['nama_pakaian']?>"><br>
    <input type="number" name="harga_pakaian" value="<?php echo $tampil['harga_pakaian']?>"><br>
    <input type="text" name="warna_pakaian" value="<?php echo $tampil['warna_pakaian']?>"><br>
    <input type="number" name="jumlah_pakaian" value="<?php echo $tampil['jumlah_pakaian']?>"><br>
    <input type="number" name="stok_pakaian" value="<?php echo $tampil['stok_pakaian']?>"><br>
    <input type="submit" value="kirim">
</form>