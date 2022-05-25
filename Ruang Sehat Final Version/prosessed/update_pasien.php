<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php
include('../config/koneksi.php');
$id_pasien           = $_POST['id_pasien'];
$nama_pasien         = $_POST['nama_pasien'];
$nik           		 = $_POST['nik'];
$no_bpjs           	 = $_POST['no_bpjs'];
$tgl_lahir           = $_POST['tgl_lahir'];
$tempat_lahir        = $_POST['tempat_lahir'];
$jenis_kelamin       = $_POST['jenis_kelamin'];
$alamat              = $_POST['alamat'];
$no_telepon          = $_POST['no_telepon'];
$riwayat_penyakit    = $_POST['riwayat_penyakit'];


$sql = "UPDATE tb_pasien SET
        id_pasien='$id_pasien', nama_pasien='$nama_pasien', nik='$nik', no_bpjs='$no_bpjs', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telepon='$no_telepon', riwayat_penyakit='$riwayat_penyakit'
        WHERE id_pasien ='$id_pasien'
        ";


$conn->query($sql);

header("Location:../pages/pasien.php");
?>

