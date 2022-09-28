  <?php
  error_reporting(0);
  session_start();
  if (isset($_REQUEST['submit'])) {

    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $format = "$nik|$nama_lengkap";
    $file = file('config.txt', FILE_IGNORE_NEW_LINES);

    if (in_array($format, $file)) {
      session_start();
      $_SESSION['nik'] = $nik;
      $_SESSION['nama_lengkap'] = $nama_lengkap;
      header("Location: user.php");
      exit();
    } else {
      // Tampilkan Alert ketika user tidak ditemukan
      $_SESSION['err'] = "Pengguna tidak ditemukan";
      header('Location: ./');
      exit();
    }
  } else {
  ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>PeduliDiri - Masuk</title>
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
      <!-- End layout styles -->
      <link rel="shortcut icon" href="assets/images/logos.svg" />
    </head>

    <body>
      <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent text-left p-3">
                  <div class="brand-logo">
                    <img src="assets/images/logo-light.png">
                  </div>
                  <h4>Masuk</h4>
                  <h6 class="font-weight-light">Masukkan akun Anda!</h6>
                  <?php unset($_SESSION['nik']); ?>
                  <form class="pt-3" method="POST" action="proses_login.php">
                    <div class="form-group">
                      <label>NIK</label>
                      <div class="input-group-text">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-account-card-details-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="text" name="nik" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required class="form-control form-control-lg border-left-0" placeholder="Masukkan NIK" maxlength="16" minlength="16" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <div class="input-group-text">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-account-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="password" name="nama_lengkap" onkeypress='return harusHuruf(event)' required class="form-control form-control-lg border-left-0" id="pass" placeholder="Masukkan Nama Lengkap">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0" id="mybutton" onclick="change()">
                            <i class="mdi mdi-eye text-primary"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mb-2 d-flex">
                      <a type="button" class="btn btn-outline-primary auth-form-btn flex-grow me-2" href="register.php">SAYA PENGGUNA BARU</a>
                      <input type="submit" class="btn btn-gradient-primary auth-form-btn flex-grow" value="MASUK">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-5 d-flex flex-row">
                <img src="assets/images/login.svg">
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <script type="text/javascript">
        function harusHuruf(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
            return false;
          return true;
        }
      </script>
      <script type="text/javascript">
        function change() {
          var x = document.getElementById('pass').type;

          if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('mybutton').innerHTML = '<i class="mdi mdi-eye-off text-primary"></i>';
          } else {
            document.getElementById('pass').type = 'password';
            document.getElementById('mybutton').innerHTML = '<i class="mdi mdi-eye text-primary"></i>';
          }
        }
      </script>
      <!-- plugins:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="assets/js/off-canvas.js"></script>
      <script src="assets/js/hoverable-collapse.js"></script>
      <script src="assets/js/misc.js"></script>
      <!-- endinject -->
    </body>

    </html>
  <?php
  } ?>