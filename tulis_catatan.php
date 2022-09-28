<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-file-send"></i>
    </span> Isi Data
  </h3>
</div>
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Isi Data Perjalanan</h4>
        <form class="forms-sample" action="simpan_catatan.php" method="POST">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-9">
              <input name="tanggal" type="text" readonly value="<?php echo date("Y-m-d"); ?>" required class="form-control" placeholder="Masukkan Tanggal">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Waktu</label>
            <div class="col-sm-9">
              <input name="jam" type="text" readonly value="<?php echo date("H:i:s A"); ?>" required class="form-control" placeholder="Masukkan Waktu">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lokasi</label>
            <div class="col-sm-9">
              <div class="input-group-text ">
                <input name="lokasi" type="text" required class="form-control" placeholder="Masukkan Lokasi">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Suhu Tubuh</label>
            <div class="col-sm-9">
              <div class="input-group-text">
                <input name="suhu" step="0.1" type="number" required class="form-control" placeholder="Masukkan Suhu Tubuh">
                <div class="input-group-prepend">
                  <span class="input-group-text text-dark">°C</span>
                </div>
              </div>
            </div>
          </div>
          <button type=" submit" class="btn btn-gradient-primary btn-icon-text me-2">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>