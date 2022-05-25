<?php
include('../../config/koneksi.php');
$id_kamarpakai 	= $_GET['id_kamarpakai'];
$sql  = "DELETE FROM tb_kamarpakai WHERE id_kamarpakai='$id_kamarpakai'";

$conn->query($sql);
header("Location:../../pages/kamarpakai.php");
?>