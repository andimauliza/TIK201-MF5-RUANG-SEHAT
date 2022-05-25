<?php
include('../../config/koneksi.php');
$id_kamar 	= $_GET['id_kamar'];
$sql  = "DELETE FROM tb_kamar WHERE id_kamar='$id_kamar'";

$conn->query($sql);
header("Location:../../pages/kamar.php");
?>