<?php
$conn = new mysqli("localhost", "root", "", "ruang_sehat");

$data_masyarakat    = " SELECT COUNT(*) FROM tb_masyarakat";
$query_masyarakat = mysqli_query($conn,$data_masyarakat);
$jumlah_masyarakat  = mysqli_fetch_array($query_masyarakat, MYSQLI_NUM);

$data_kamar    = " SELECT COUNT(*) FROM tb_ruangan";
$query_kamar = mysqli_query($conn,$data_kamar);
$jumlah_kamar  = mysqli_fetch_array($query_kamar, MYSQLI_NUM);

$data_kamarpakai    = " SELECT COUNT(*) FROM tb_kamarpakai";
$query_kamarpakai = mysqli_query($conn,$data_kamarpakai);
$jumlah_kamarpakai  = mysqli_fetch_array($query_kamarpakai, MYSQLI_NUM);

?>

<h1>Dashboard</h1>

<div class="row">
    <div class="col">
    	<a href="dashboard.php?page=kamar/index.php">
        <div class="card">
            <h5>Ruangan Tersedia</h5>
            <div class="isi">
                <h3><?= $jumlah_kamar[0] ?></h3>
                <img src="img/icon kamar.png">    
            </div>
        </div>
        </a>

        <a href="dashboard.php?page=kamarpakai/index.php">
        <div class="card">
            <h5>Ruangan Terpakai</h5>
            <div class="isi">
                <h3><?= $jumlah_kamarpakai[0] ?></h3>
                <img src="img/icon kamar 2.png">    
            </div>
        </div>
        </a>

        <a href="dashboard.php?page=pasien/index.php">
        <div class="card">
            <h5>Pasien</h5>
            <div class="isi">
                <h3><?= $jumlah_masyarakat[0] ?></h3>
                <img src="img/icon pasien.png">    
            </div>
        </div>
        </a>
    </div>
</div>