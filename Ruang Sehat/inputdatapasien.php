   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangSehat - Dashboard</title>
    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="wrapper">
        <ul class="navbar-nav sidebar">
            <!-- profile -->
            <div class="sidebar-card mt-4">
                <img src="img/profile.png" alt="...">
                <p class="text-center mb-2">Admin</p>
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active mt-4">
                <a class="nav-link" href="dashboard.php"> <img src="img/dashboard.png"><span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Heading -->
            <div class="sidebar-heading">
                Input
            </div>

            <!-- Nav Item - Input data pasien -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/pasien.png"><span>Input Data Pasien</span></a>
            </li>
            <!-- Nav Item - Input data kamar -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/kamar.png"><span>Input Data Kamar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Lihat data pasien -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/pasien.png"><span>Lihat Data Pasien</span></a>
            </li>
            <!-- Nav Item - Lihat data kamar -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/kamar.png"><span>Lihat Data Kamar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/pasien.png"><span>Profile</span></a>
            </li>
            <!-- Nav Item - Logout -->
           <li class="nav-item mt-3">
                <a class="nav-link" href="#" ><form action="logout.php" method="POST"><button class="btn btn-danger" type="submit" name="logout"> <img src="img/logout.png"><span>Logout</span></button></form></a>
            </li>

        </ul>

        <div class="content">
            <h1>Input Data Pasien</h1>
            <div class="datapasien mt-5 px-2">
                <form action="" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Id Pasien</label>
                        <input class="form-control" name="id_pasien" />
                                          
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input class="form-control" name="nama_pasien">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">NIK</label>
                        <input class="form-control" name="nik">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">No BPJS</label>
                        <input class="form-control" name="no_bpjs">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tgl Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir">
                    </div>
                    <div class="col-md-6">
                         <label class="form-label">Jenis Kelamin</label>
                        <input class="form-control" name="jenis_kelamin">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">No Telepon</label>
                        <input class="form-control" name="no_telepon">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Riwayat Penyakit</label>
                        <input class="form-control" name="riwayat_penyakit">
                    </div>
                   <div>
                         <input type="submit" name="simpan" class="btn btn-primary">
                         <input class="btn btn-danger" type="reset" value="Reset">
                    </div><br>
                </form>
            </div>
        </div>
    </div>

</body>
</html>


<?php
$koneksi= new mysqli ("localhost","root","","ruang_sehat");

error_reporting(0);
 
 $id_pasien =$_POST['id_pasien']; 
 $nama_pasien =$_POST['nama_pasien']; 
 $nik =$_POST['nik']; 
 $no_bpjs =$_POST['no_bpjs']; 
 $tgl_lahir =$_POST['tgl_lahir'];
 $tempat_lahir =$_POST['tempat_lahir'];
 $jenis_kelamin =$_POST['jenis_kelamin']; 
 $alamat =$_POST['alamat'];
 $no_telepon =$_POST['no_telepon'];
 $riwayat_penyakit =$_POST['riwayat_penyakit'];

  
 $simpan =$_POST['simpan'];

 if($simpan) {
    $sql=$koneksi -> query("INSERT INTO `tb_pasien`( `id_pasien`,`nama_pasien`, `nik`, `no_bpjs`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_telepon`, `riwayat_penyakit`) values('$id_pasien','$nama_pasien','$nik','$no_bpjs','$tgl_lahir','$tempat_lahir','$jenis_kelamin','$alamat','$no_telepon','$riwayat_penyakit')");

    if($sql){
    ?>
            <script type="text/javascript">

            alert("Data Berhasil Disimpan");
            window.location.href="dashboard.php";
            </script>

    <?php
    }
 }
    

?>
