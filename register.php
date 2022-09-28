<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PeduliDiri - Daftar</title>
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
              <h4>Daftar</h4>
              <h6 class="font-weight-light">Buatlah akun Anda!</h6>
              <form class="pt-3" method="POST" action="proses_register.php">
                <div class="form-group">
                  <label>NIK</label>
                  <div class="input-group-text">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-card-details-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="nik" required onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control form-control-lg border-left-0" placeholder="Masukkan NIK" maxlength="16" minlength="16" required>
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
                    <input type="text" name="nama_lengkap" required onkeypress='return harusHuruf(event)' class="form-control form-control-lg border-left-0" placeholder="Masukkan Nama Lengkap">
                  </div>
                </div>
                <div class="my-3">
                  <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="DAFTAR">
                </div>
                <div class="text-center mt-4 font-weight-light"> Sudah punya akun? <a href="index.php" class="text-primary">Masuk</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 d-flex flex-row">
            <img src="assets/images/register.svg">
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