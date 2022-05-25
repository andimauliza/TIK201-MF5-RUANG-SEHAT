<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php
include('../../config/koneksi.php');
// $id_kamar           = $_POST['id_kamar'];
$nama_ruangan       = $_POST['nama_ruangan'];
$kategori           = $_POST['kategori'];
$tv           	    = $_POST['tv'];
$meja_makan         = $_POST['meja_makan'];
$kamar_mandi        = $_POST['kamar_mandi'];
$ac                 = $_POST['ac'];
$image_kamar        = $_POST['image_kamar'];



$sql = "INSERT INTO tb_kamar
        (nama_ruangan, kategori, tv, meja_makan, kamar_mandi, ac, image_kamar)
        VALUES
        ('$nama_ruangan', '$kategori', '$tv', '$meja_makan', '$kamar_mandi', '$ac', '$image_kamar')
        ";

$conn->query($sql);

header("Location:../../pages/kamar.php");
?>
