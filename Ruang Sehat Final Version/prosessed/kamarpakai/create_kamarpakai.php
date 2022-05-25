<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php
include('../../config/koneksi.php');

$id_pasien      	= $_POST['id_pasien'];
$id_kamar           = $_POST['id_kamar'];
$lama_pakai    	    = $_POST['lama_pakai'];
$Tgl_pakai          = $_POST['Tgl_pakai'];


$sql = "INSERT INTO tb_kamarpakai
        (id_pasien, id_kamar, lama_pakai, Tgl_pakai)
        VALUES
        ('$id_pasien', '$id_kamar', '$lama_pakai', '$Tgl_pakai')
        ";

$conn->query($sql);

header("Location:../../pages/kamarPakai.php");
?>

<!-- INSERT INTO `tb_kamarpakai` (`kd_kamarpakai`, `id_pasien`, `id_kamar`, `lama_pakai`, `Tgl_pakai`) VALUES ('KD-02', 'ID-005', '1', '7 Hari', '2022-05-14'); -->