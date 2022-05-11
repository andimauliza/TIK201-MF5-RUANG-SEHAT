<?php 
// komeksi ke databas
$conn = mysqli_connect("localhost", "root", "", "ruang_sehat");

// ambil data / query dari tabel kamar
// $result = mysqli_query($conn, "SELECT * FROM tb_ruangan");

$sql    = " SELECT * FROM tb_ruangan";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangSehat:Home Page</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/rooms.css">
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
            <li class="breadcrumb-item active" aria-current="page">Rooms</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- content -->
    <div class="content">
        <div class="row">
            <?php foreach( $result as $row ) : ?>
                <div class="col col-sm-12 col-md-4">
                    <a href="detailroom.php?id_kamar=<?= $row['id_kamar']; ?>">
                        <div class="card">
                            <img src="img/<?= $row['image_kamar'] ?>" alt="Kamar Inap">
                            <div class="cardfooter">
                                <h4><?= $row['nama_ruangan'] ?></h4>
                                <p><?= $row['kategori'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- end content -->
    
    <!-- footer -->
    <footer>
        <div class="copyright">
            <p>Copyright 2022 | All Right Reserved</p>
            <p><a href="contact.html" style="text-decoration:underline">Contact: </a>08972886253</p>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html>