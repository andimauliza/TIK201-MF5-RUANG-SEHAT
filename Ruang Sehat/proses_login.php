<?php

session_start();

if (isset($_POST['login'])) {
	$koneksi= new mysqli ("localhost","root","","ruang_sehat");
//sesuaikan dengan namenya
	$nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
	$password = mysqli_real_escape_string($koneksi, $_POST['password']);

/* pengecekan
jika inputan kosong */

if (empty($nip) || empty($password)) {
 	echo '<script type="text/javascript">
		  alert("Masukkan data");
		  window.location.href="index.php";
		  </script>';
		 exit();
 }else{
 	//sesuaikan dengan database. tabel dan kolomnya
 	$sql = "SELECT * FROM tb_user WHERE nip='$nip'";
		$result = mysqli_query($koneksi, $sql);
		$resulCheck = mysqli_num_rows($result);

		if ($resulCheck < 1) {
		
			echo '<script type="text/javascript">
			  alert("Login Gagal, Akun Tidak Di Temukan");
			  window.location.href="index.php";
			  </script>';
			exit();
			}else{
				if ($row = mysqli_fetch_assoc($result)) {
					if ($password != $row['password']) {
						echo '<script type="text/javascript">
		 			     alert("Gagal-pass");
						 window.location.href="index.php";
		 				 </script>';
					exit();
					}else{
						$_SESSION['nip']	= $row['nip'];

						header("Location:dashboard.php?page=home");//masukkan file halaman utamanya
						exit();
					}
				}else{
					echo '<script type="text/javascript">
		  alert("Gagal");
		  window.location.href="index.php";
		  </script>';
	exit();
				}
			}
 		}

}else{
	echo '<script type="text/javascript">
		  alert("Gagal Menyambung Ke Database");
		  window.location.href="index.php";
		  </script>';
	exit();
}
 ?>