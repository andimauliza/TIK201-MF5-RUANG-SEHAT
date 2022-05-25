<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php
include('../../config/koneksi.php');
$id_kamarpakai      = $_POST['id_kamarpakai'];
$id_pasien          = $_POST['id_pasien'];
$id_kamar           = $_POST['id_kamar'];
$lama_pakai    	    = $_POST['lama_pakai'];
$Tgl_pakai          = $_POST['Tgl_pakai'];


$sql = "UPDATE tb_kamarpakai SET
        id_kamarpakai='$id_kamarpakai', id_pasien='$id_pasien', id_kamar='$id_kamar', lama_pakai='$lama_pakai', Tgl_pakai='$Tgl_pakai'
        WHERE id_kamarpakai ='$id_kamarpakai'
        ";


$conn->query($sql);

header("Location:../../pages/kamarpakai.php");
?>

