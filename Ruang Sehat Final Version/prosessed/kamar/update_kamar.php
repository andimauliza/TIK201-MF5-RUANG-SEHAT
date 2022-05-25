<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php
include('../../config/koneksi.php');
$id_kamar           = $_POST['id_kamar'];
$nama_ruangan       = $_POST['nama_ruangan'];
$kategori           = $_POST['kategori'];
$tv           	    = $_POST['tv'];
$meja_makan         = $_POST['meja_makan'];
$kamar_mandi        = $_POST['kamar_mandi'];
$ac                 = $_POST['ac'];
$image_kamar        = $_POST['image_kamar'];


$sql = "UPDATE tb_kamar SET
        id_kamar='$id_kamar', nama_ruangan='$nama_ruangan', kategori='$kategori', tv='$tv', meja_makan='$meja_makan', kamar_mandi='$kamar_mandi', ac='$ac', image_kamar='$image_kamar'
        WHERE id_kamar ='$id_kamar'
        ";


$conn->query($sql);

header("Location:../../pages/kamar.php");
?>

