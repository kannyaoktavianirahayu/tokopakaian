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
    <br>
    
    <a href="hapus_barang.php?id_pakaian=<?php echo $data['id_pakaian'] ?>">delete</a>
    <?php
}