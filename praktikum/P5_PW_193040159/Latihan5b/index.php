<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$alat_musik = query("SELECT * FROM alat_musik");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5b</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <h1>ALAT MUSIK TRADISIONAL</h1>
        <table border='1' cellspacing='0' cellpadding='10'>
            <thead>
                <tr>
                    <td>NO</td>
                    <td>GAMBAR</td>
                    <td>NAMA ALAT MUSIK</td>
                    <td>PROVINSI</td>
                    <td>SUMBER BUNYI</td>
                    <td>CARA MEMAINKAN</td>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($alat_musik as $am) : ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><img src="assets/img/<?= $am['gambar']; ?>"></td>
                        <td><?= $am['nama_alat_musik']; ?></td>
                        <td><?= $am['provinsi']; ?></td>
                        <td><?= $am['sumber_bunyi']; ?></td>
                        <td><?= $am['cara_memainkan']; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>