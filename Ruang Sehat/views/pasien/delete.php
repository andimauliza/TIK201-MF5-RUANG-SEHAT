<?php
$id_pasien 	= $_GET['id_pasien'];
$sql  = "DELETE FROM tb_pasien WHERE id_pasien='$id_pasien'";

$conn->query($sql);
header("Location:dashboard.php?page=pasien/index.php");
?>