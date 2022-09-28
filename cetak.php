<!DOCTYPE html>
<html>

<body onload="window.print()">

    <center>
        <h3>Laporan Catatan Perjalanan</h3>
    </center>

    <table border="1" cellspacing="0" style="width: 100%">
        <tr bgcolor="c183ff">
            <th width="1%">No</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Lokasi</th>
            <th>Suhu Tubuh</th>
        </tr>
        <?php
        session_start();
        $no = 1;
        $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
        $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
        foreach ($data as $value) {
            $pecah = explode("|", $value);
            @$key = $pecah['1'] . "|" . $pecah['2'];
            if ($key == $user) {
        ?>
                <tr align="center">
                    <td><?= $no++;   ?></td>
                    <td><?= $pecah['3'];   ?></td>
                    <td><?= $pecah['4'];   ?></td>
                    <td><?= $pecah['5'];   ?></td>
                    <td><?= $pecah['6'];   ?></td>
                </tr>
        <?php }
        } ?>
    </table>
</body>

</html>