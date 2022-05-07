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
    <style type="text/css">
        * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                body {
                    background-color: #082032;
                }

                .wrapper {
                    display: flex;
                }
                ul.sidebar {
                    background-color: #082032;
                    padding-bottom: 40px;
                }

                ul .sidebar-card {
                    background-color: #334756;
                    width: 268px;
                    height: 300px;
                    margin-left: 36px;
                    margin-right: 36px;
                    border-radius: 48px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                ul .sidebar-card p {
                    font-weight: 500;
                    font-size: 24px;
                    color: white;
                    margin-top: 22px;
                }

                ul li.nav-item, li.logout {
                    margin-left: 36px;
                }

                ul li.nav-item:hover, ul li.nav-item.hovered {
                    background-color: white;
                    border-radius: 20px 0 0 20px;
                }

                ul li.nav-item:hover a.nav-link, ul li.nav-item.hovered a.nav-link {
                    color: #334756;
                    position: relative;
                }

                ul li.nav-item:hover a.nav-link::before, ul li.nav-item.hovered a.nav-link::before {
                    content: '';
                    position: absolute;
                    background-color: transparent;
                    width: 50px;
                    height: 50px;
                    top: -50px;
                    right: 0;
                    border-radius: 50%;
                    box-shadow: 35px 35px 0 10px white;
                    pointer-events: none;
                }

                ul li.nav-item:hover a.nav-link::after, ul li.nav-item.hovered a.nav-link::after {
                    content: '';
                    position: absolute;
                    background-color: transparent;
                    width: 50px;
                    height: 50px;
                    bottom: -50px;
                    right: 0;
                    border-radius: 50%;
                    box-shadow: 35px -35px 0 10px white;
                    pointer-events: none;
                }

                ul li a.nav-link {
                    font-weight: 600;
                    color: white;
                }

                ul li a.nav-link span {
                    margin-left: 26px;
                    font-size: 18px;
                }

                ul li a.nav-link:hover, ul li a.nav-link.hovered{
                    color: white;
                }

                ul li a.nav-link img {
                    width: 18px;
                    margin-left: 10px;
                }

                ul.sidebar .sidebar-heading {
                    margin-left: 36px;
                    color: rgb(214, 214, 214);
                }

                /* content */
                .content {
                    width: 100%;
                    margin: 24px 24px 24px 0;
                    background-color: white;
                    border-radius: 48px;
                }

                .content h1 {
                    margin-left: 0px;
                    margin-top: 0px;
                }

    </style>
</head>
<body>
    <div class="wrapper">

        <ul class="navbar-nav sidebar">
            <!-- profile -->
            <div class="sidebar-card mt-4">
                <img src="img/default.png" alt="...">
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
                <a class="nav-link" href="dashboard.php?page=kamar/index.php"> <img src="img/kamar.png"><span>Lihat Data Kamar</span></a>
            </li>

            <!-- Nav Item - Lihat data kamar pakai -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?page=kamarpakai/index.php"> <img src="img/kamar.png"><span>Lihat Data Kamar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php?page=profile/index.php"> <img src="img/pasien.png"><span>Profile</span></a>
            </li>
            <!-- Nav Item - Logout -->
            <li class="logout mt-3">
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



<script>
    // menambahkan class hovered ketika diklik
    let list = document.querySelectorAll('li.nav-item');
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) =>
    item.addEventListener('mouseover',activeLink));
</script>
</body>
</html>
