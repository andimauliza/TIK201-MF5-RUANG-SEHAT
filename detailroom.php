<?php 
// komeksi ke databas
$conn = mysqli_connect("localhost", "root", "", "ruang_sehat");

// ambil data / query dari tabel kamar
// $result = mysqli_query($conn, "SELECT * FROM kamar");

// $row = mysqli_fetch_assoc($result);

$sql    = "SELECT * FROM tb_ruangan";
$result = $conn->query($sql);

$id_kamar           = $_GET['id_kamar'];
$tb_ruangan           = "SELECT * FROM tb_ruangan WHERE id_kamar='$id_kamar'";
$result_tb_ruangan    = $conn->query($tb_ruangan);
$rows                = $result_tb_ruangan->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangSehat - Detail Room</title>
    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/detailroom.css">

    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-light">
        <div class="container-fluid mx-auto logo">
        <a class="mx-auto mt-4" href="home.html">RS.</a>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcrumb -->
    <div class="breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
            <li class="breadcrumb-item"><a href="rooms.html">Rooms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Room</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- content -->
    <section class="content">
        <div class="hero">
            <img src="img/<?= $rows["image_kamar"] ?>" alt="">
        </div>
        <div class="data">
            <h4><?= $rows["nama_ruangan"] ?>"</h4>
            <p><?= $rows["kategori"] ?>"</p>
            <p class="badge bg-success">Available</p>
            <h4 class="fasilitas">Fasilitas</h4>
            <div class="row mt-3">
                <div class="col text-center">
                    <img src="img/tv.png" alt="" class="mb-1">
                    <h5>TV</h5>
                    <span><?= $rows["tv"] ?></span>
                </div>
                <div class="col text-center">
                    <img src="img/lemari.png" alt="" class="mb-1">
                    <h5>Lemari Pakaian</h5>
                    <span>Tidak Tersedia</span>
                </div>
                <div class="col text-center">
                    <img src="img/oksigen.png" alt="" class="mb-1">
                    <h5>Oksigen Sentral</h5>
                    <span>Tidak Tersedia</span>
                </div>
                
            </div>
            <div class="row mt-2">
                <div class="col text-center">
                    <img src="img/kamarmandi.png" alt="" class="mb-1">
                    <h5>Kamar Mandi</h5>
                    <span><?= $rows['kamar_mandi'] ?></span>
                </div>
                <div class="col text-center">
                    <img src="img/ac.png" alt="" class="mb-1">
                    <h5>AC</h5>
                    <span><?= $rows['ac'] ?></span>
                </div>
                <div class="col text-center">
                    <img src="img/meja.png" alt="" class="mb-1">
                    <h5>Meja Makan</h5>
                    <span><?= $rows['meja_makan'] ?></span>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->

    <!-- footer -->
    <footer>
        <div class="copyright">
            <p>Copyright 2022 | All Right Reserved</p>
            <p><a href="contact.html">Call: </a>08972886253</p>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html>