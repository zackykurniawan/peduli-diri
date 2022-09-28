<?php
ob_start();
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Jakarta');
if (empty($_SESSION['nik'])) { ?>
  <script type="text/javascript">
    alert('Maaf Anda Belum Melakukan Login');
    window.location.assign('index.php');
  </script>


<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PeduliDiri - Pengguna</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Tables styles-->
  <link rel="stylesheet" href="assets/vendors/datatables/dataTables.bootstrap4.min.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/logos.svg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href=""><img src="assets/images/logo-light.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="assets/images/logos.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="logout.php">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/profile.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $_SESSION['nama_lengkap']; ?></span>
                <span class="text-secondary text-small"><?php echo $_SESSION['nik']; ?></span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=beranda">
              <span class="menu-title">Beranda</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=tulis_catatan">
              <span class="menu-title">Isi Data</span>
              <i class="mdi mdi-file-send menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?url=catatan_perjalanan">
              <span class="menu-title">Catatan Perjalanan</span>
              <i class="mdi mdi-file-document-box menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span class="menu-title">Keluar</span>
              <i class="mdi mdi-power menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <?php
          if (!empty($_GET['url'])) {
            switch ($_GET['url']) {
              case 'beranda';
                include 'beranda.php';
                break;

              case 'tulis_catatan';
                include 'tulis_catatan.php';
                break;

              case 'catatan_perjalanan';
                include 'catatan_perjalanan.php';
                break;

              case 'edit_catatan':
                include 'edit_catatan.php';
                break;

              default:
                echo "<h3>Halaman Tidak Ditemukan...</h3>";
                break;
            }
          }
          ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © PeduliDiri <?php echo date("Y") ?></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- Page level plugins -->
  <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendors/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>