<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-file-document-box"></i>
        </span> Catatan Perjalanan
    </h3>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <h4 class="card-title">Data Catatan Perjalanan</h4>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                            $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
                            foreach ($data as $values) {
                                $dipisah = explode("|", $values);
                                @$key     = $dipisah['1'] . "|" . $dipisah['2'];
                                if ($key == $user) {

                            ?>
                                    <tr>
                                        <td><?= $no++; ?> </td>
                                        <td><?= $dipisah['3'] ?></td>
                                        <td><?= $dipisah['4'] ?></td>
                                        <td><?= $dipisah['5'] ?></td>
                                        <td><?= $dipisah['6'] ?> °C</td>
                                        <td>
                                            <a href="?url=edit_catatan&id_catatan=<?= $dipisah['0'] ?>">
                                                <button class="btn btn-inverse-success btn-icon me-2"><i class="mdi mdi-lead-pencil"></i></button>
                                            </a>
                                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" href="hapus_catatan.php?id_catatan=<?= $dipisah['0'] ?>" class="btn btn-inverse-danger btn-icon">
                                                <button class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                    <a type="button" class="btn btn-gradient-info btn-icon-text me-2" href="cetak.php">Cetak <i class="mdi mdi-printer btn-icon-append"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>