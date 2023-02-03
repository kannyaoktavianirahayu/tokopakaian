<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"SELECT * FROM `tb_pakaian`");
?>
<a href="tambah_data.php">tambah data</a><br>

<?php
foreach($data as $data){
    echo $data['nama_pakaian'];
    echo $data['harga_pakaian'];
    echo $data['warna_pakaian'];
    echo $data['jumlah_pakaian'];
    echo $data['stok_pakaian']."<br>";
    ?>
    <a href="hapus_barang.php?id=<?php echo $data['id_pakaian']?>">hapus</a>
    &nbsp
    <a href="edit_barang.php?id=<?php echo $data['id_pakaian']?>">edit</a>
    <br>
    <?php
}