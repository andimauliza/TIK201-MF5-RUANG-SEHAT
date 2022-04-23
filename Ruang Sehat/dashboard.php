<?php 
    include'config/koneksi.php';
    error_reporting(0);
    session_start();

    $koneksi= new mysqli ("localhost","root","","ruang_sehat");

    $user =$_SESSION['nip'];
 if ($user == "") {
?>

<script type="text/javascript">
      window.location.href="index.php";
    </script>
    <?php
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/simple-sidebar.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Roboto+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" href="vendor/datatables/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="vendor/datatables/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="vendor/datatables/dataTables.bootstrap4.min"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangSehat - Dashboard</title>
    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
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
                <a class="nav-link" href="dashboard.php?page=home"> <img src="img/dashboard.png"><span>Dashboard</span></a>
            </li>

                <!-- Heading -->
           

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Lihat data pasien -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?page=pasien/index.php"> <img src="img/pasien.png"><span>Lihat Data Pasien</span></a>
            </li>
            <!-- Nav Item - Lihat data kamar -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/kamar.png"><span>Lihat Data Kamar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?page=profile/profile.php"> <img src="img/pasien.png"><span>Profile</span></a>
            </li>
            <!-- Nav Item - Logout -->
            <li class="nav-item mt-3">
                <a class="nav-link" href="#" ><form action="logout.php" method="POST"><button class="btn btn-danger" type="submit" name="logout"> <img src="img/logout.png"><span>Logout</span></button></form></a>
            </li>
          

        </ul>

        <div class="content">
            <div class="container-fluid">
            <!--Start ini fungsi pemanggilan file dalam folder-->
             <?php include("views/" . $_GET['page']); ?>
            <!--Stop ini fungsi pemanggilan file dalam folder-->
            </div>
        </div>
    </div>

</body>
</html>