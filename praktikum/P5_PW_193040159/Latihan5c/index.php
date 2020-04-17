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
    <title>Latihan5c</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="page-wrap">
        <div class="content">
            <h1 class="judul">Daftar Nama Alat Musik</h1>
            <?php foreach ($alat_musik as $am) : ?>
                <div class="kotak">
                    <p class="nama">
                        <a href="php/detail.php?id=<?= $am['id']; ?>">
                            <?= $am["nama_alat_musik"]; ?>
                        </a>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>