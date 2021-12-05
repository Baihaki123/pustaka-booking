<!DOCTYPE html>
<html lang="en">

<head>

    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
    </style>
    <h3>
        <center>Laporan Data Buku Perpustakaan Online</center>
    </h3>
    <br>
    <table class="tabel-data">
        <thead>
            <tr>
                <td>No</td>
                <td>Judul Buku</td>
                <td>Pengarang</td>
                <td>Terbit</td>
                <td>Tahun Penerbit</td>
                <td>ISBN</td>
                <td>Stok</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($buku as $b) {
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $b['judul_buku']; ?></td>
                    <td><?= $b['pengarang']; ?></td>
                    <td><?= $b['penerbit']; ?></td>
                    <td><?= $b['tahun_terbit']; ?></td>
                    <td><?= $b['isbn']; ?></td>
                    <td><?= $b['stok']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>