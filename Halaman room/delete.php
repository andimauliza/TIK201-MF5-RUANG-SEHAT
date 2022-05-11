<?php
$kd_kamarpakai 	= $_GET['kd_kamarpakai'];
$sql  = "DELETE FROM tb_kamarpakai WHERE kd_kamarpakai='$kd_kamarpakai'";

$conn->query($sql);
header("Location:dashboard.php?page=kamarpakai/index.php");
?>