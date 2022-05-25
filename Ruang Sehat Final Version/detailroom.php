<?php 
// komeksi ke databas
$conn = mysqli_connect("localhost", "root", "", "ruangsehat");

// ambil data / query dari tabel kamar
// $result = mysqli_query($conn, "SELECT * FROM kamar");

// $row = mysqli_fetch_assoc($result);

$sql    = "SELECT * FROM tb_kamar";
$result = $conn->query($sql);

$id_kamar           = $_GET['id_kamar'];
$tb_ruangan           = "SELECT * FROM tb_kamar WHERE id_kamar='$id_kamar'";
$result_tb_ruangan    = $conn->query($tb_ruangan);
$rows                = $result_tb_ruangan->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    DetailRoom: RuangSehat
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
  </head>

  <body class="vh-100 bg-gray-100">
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid pe-0">
              <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="index.php">
                RuangSehat
              </a>
              <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto ms-xl-auto me-xl-12">
                  <li class="nav-item px-2">
                    <a class="nav-link d-flex align-items-center me-3 active" aria-current="page" href="index.php">
                      Home
                    </a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link me-3" href="rooms.php">
                      Rooms
                    </a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link me-3" href="contact.php">
                      Contact
                    </a>
                  </li>
                </ul>
                <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-round btn-sm mb-0 bg-gradient-primary me-2" target="_blank" href="pages/login.php">Login as Admin</a>
                </li>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
    </div>

    <section class="mt-7">
        <div class="container">
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Detail Ruangan Tersedia</h6>
                        <a href="rooms.php" class="text-danger text-gradient font-weight-bold text-sm">Kembali</a>
                    </div>
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 mb-xl-0 mb-4 d-flex">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                        <img src="assets/img/<?= $rows['image_kamar']; ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 mb-xl-0 mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h4><?= $rows['nama_ruangan']; ?></h4>
                                        <h6><em><?= $rows['kategori']; ?></em></h6>
                                        <span class="badge bg-gradient-success mt-3">Tersedia</span>
                                        <h5 class="mt-4">Fasilitas</h5>
                                    </div>
                                </div>
                                <div class="row text-center mt-2">
                                    <div class="col-md-4">
                                        <img src="assets/img/illustrations/meja.png" alt="">
                                        <p>Meja Makan</p>
                                        <span><?= $rows['meja_makan']; ?></span>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/img/illustrations/tv.png" alt="">
                                        <p>TV</p>
                                        <span><?= $rows['tv']; ?></span>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/img/illustrations/kamarmandi.png" alt="">
                                        <p>Kamar Mandi</p>
                                        <span><?= $rows['kamar_mandi']; ?></span>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <img src="assets/img/illustrations/ac.png" alt="">
                                        <p>AC</p>
                                        <span><?= $rows['ac']; ?></span>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <img src="assets/img/illustrations/lemari.png" alt="">
                                        <p>Lemari</p>
                                        <span>Tersedia</span>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <img src="assets/img/illustrations/oksigen.png" alt="">
                                        <p>Oksigen</p>
                                        <span>Tersedia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer position-absolute bottom-5 w-100">
      <div class="container">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © Copyright <script>
                document.write(new Date().getFullYear())
              </script>,
               | All Right Reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        let typed = new Typed(".auto-type", {
            strings: ["Patient", "People", "Users"],
            typeSpeed: 130,
            backSpeed: 130,
            loop: true
        })
    </script>

    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
  </body>
</html>
