<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php

$id_user                = $_POST['id_user'];
$nip                    = $_POST['nip'];
$nama                   = $_POST['nama'];
$username               = $_POST['username'];
$email                  = $_POST['email'];
$password               = $_POST['password'];
$picture                = $_POST['picture'];

$sql = "UPDATE tb_user SET
        id_user='$id_user', nip='$nip', nama='$nama', username='$username', email='$email', password='$password', picture='$picture'
        WHERE id_user ='$id_user'
        ";


$conn->query($sql);

header("Location:index.php?page=pasien/index.php");
?>

