 <?php
    if (isset($_GET['tanggal'])) {

        $tanggal = $_GET['tanggal'];
        $jam = $_GET['jam'];
        $lokasi = $_GET['lokasi'];
        $suhu = $_GET['suhu'];
        $content = file_get_contents('catatan.txt');

        $old = "$tanggal|$jam|$lokasi|$suhu\n";

        $content = str_replace($old, '', $content);
        file_put_contents('catatan.txt', $content);
    }


    ?>
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
                 <h4 class="card-title">Data Catatan Perjalanan</h4>
                 <table class="table table-bordered" id="dataTable">
                     <thead>
                         <tr>
                             <th> No </th>
                             <th> Tanggal </th>
                             <th> Waktu </th>
                             <th> Lokasi </th>
                             <th> Suhu Tubuh </th>
                             <th> Aksi </th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $no = 1;
                            $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                            $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
                            foreach ($data as $value) {
                                $pecah = explode("|", $value);
                                @$key = $pecah['0'] . "|" . $pecah['1'];
                                if ($key == $user) {
                            ?>
                                 <tr>
                                     <td><?= $no++; ?></td>
                                     <td><?= $pecah['2'] ?></td>
                                     <td><?= $pecah['3'] ?></td>
                                     <td><?= $pecah['4'] ?></td>
                                     <td><?= $pecah['5'] ?></td>
                                     <td>
                                         <a href="?url=edit&tanggal=<?= $pecah[2] ?>&jam=<?= $pecah[3] ?>&lokasi=<?= $pecah[4] ?>&suhu=<?= $pecah[5] ?>"><button type="button" class="btn btn-inverse-success btn-icon me-2"><i class="mdi mdi-lead-pencil btn-icon"></i></button></a>
                                         <a href="./user.php?url=hapus&tanggal=<?= $pecah[2] ?>&jam=<?= $pecah[3] ?>&lokasi=<?= $pecah[4] ?>&suhu=<?= $pecah[5] ?>"><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete"></i></button></a>
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