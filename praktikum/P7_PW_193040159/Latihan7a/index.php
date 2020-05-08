<?php

require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $alat_musik = query("SELECT * FROM alat_musik WHERE
                   nama_alat_musik LIKE '%$keyword%' OR
                   provinsi LIKE '%$keyword%' OR
                   sumber_bunyi LIKE '%$keyword%' OR
                   cara_memainkan LIKE '%$keyword%'");
} else {
    $alat_musik = query("SELECT * FROM alat_musik");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan7a</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="page-wrap">
        <div class="content">
            <h1 class="judul">Daftar Nama Alat Musik</h1>
            <form action="" method="GET">
                <input type="text" name="keyword" size="20" autocomplete="off" autofocus>
                <button type="submit" name="cari" style="width: auto">Cari</button>
            </form>

            <?php if (empty($alat_musik)) : ?>
                <tr>
                    <td colspan="7">
                        <p style="color: red; font-style:italic">data tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

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

        <a href="php/login.php">
            <button>Masuk ke halaman admin</button>
        </a>

    </div>
</body>

</html>