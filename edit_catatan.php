<div class="page-header">
    <h3 class="page-title"> Edit Data </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Edit</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="?url=catatan_perjalanan" class="text-primary">Catatan Perjalanan</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <?php

            $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
            $id_catatan = $_GET['id_catatan'];
            foreach ($data as $value) {
                $pecah = explode('|', $value);
                if ($pecah['0'] == $id_catatan) {

            ?>
                    <div class="card-body">
                        <h4 class="card-title">Isi Data Perjalanan</h4>
                        <form class="forms-sample" action="simpan_edit_catatan.php" method="POST">
                            <input type="hidden" name="id_catatan" value="<?= $pecah['0']; ?>">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-9">
                                    <input value="<?= $pecah['3']; ?>" name="tanggal" type="text" readonly value="<?php echo date("Y-m-d"); ?>" required class="form-control" placeholder="Masukkan Tanggal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Waktu</label>
                                <div class="col-sm-9">
                                    <input value="<?= $pecah['4']; ?>" name="jam" type="text" readonly value="<?php echo date("H:i:s A"); ?>" required class="form-control" placeholder="Masukkan Waktu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lokasi</label>
                                <div class="col-sm-9">
                                    <div class="input-group-text">
                                        <input value="<?= $pecah['5']; ?>" name="lokasi" type="text" required class="form-control" placeholder="Masukkan Lokasi">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Suhu Tubuh</label>
                                <div class="col-sm-9">
                                    <div class="input-group-text">
                                        <input value="<?= $pecah['6']; ?>" name="suhu" step="0.1" type="text" required class="form-control" placeholder="Masukkan Suhu Tubuh">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-dark">°C</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit</button>
                        </form>

                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>