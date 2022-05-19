<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php

$kd_kamarpakai      = $_POST['kd_kamarpakai'];
$id_pasien      	= $_POST['id_pasien'];
$id_kamar           = $_POST['id_kamar'];
$lama_pakai    	    = $_POST['lama_pakai'];
$Tgl_pakai          = $_POST['Tgl_pakai'];


$sql = "UPDATE tb_kamarpakai SET
        kd_kamarpakai='$kd_kamarpakai', id_pasien='$id_pasien', id_kamar='$id_kamar', lama_pakai='$lama_pakai', Tgl_pakai='$Tgl_pakai'
        WHERE kd_kamarpakai ='$kd_kamarpakai'
        ";


$conn->query($sql);

header("Location:dashboard.php?page=kamarpakai/index.php");
?>

