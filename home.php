<?php
$conn = new mysqli("localhost", "root", "", "ruang_sehat");

$data_pasien    = " SELECT * FROM tb_pasien";
$jumlah_pasien  = mysqli_num_rows($data_pasien);

$data_ruangan    = " SELECT * FROM tb_ruangan";
$jumlah_ruangan = mysqli_num_rows($data_ruangan);

$data_kamarpakai    = " SELECT * FROM tb_kamarpakai";
$jumlah_kamarpakai = mysqli_num_rows($data_kamarpakai);
?>

<h1>Dashboard</h1>

<div class="row">
    <div class="col">
        <div class="card">
            <h5>Ruangan Tersedia</h5>
            <div class="isi">
                <h3><?= $jumlah_ruangan ?></h3>
                <img src="img/icon kamar.png">    
            </div>
        </div>
        <div class="card">
            <h5>Ruangan Terpakai</h5>
            <div class="isi">
                <h3><?= $jumlah_kamarpakai ?></h3>
                <img src="img/icon kamar 2.png">    
            </div>
        </div>
        <div class="card">
            <h5>Pasien</h5>
            <div class="isi">
                <h3><?= $jumlah_pasien ?></h3>
                <img src="img/icon pasien.png">    
            </div>
        </div>
    </div>
</div>