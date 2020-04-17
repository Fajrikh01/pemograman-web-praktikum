<?php

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

// Memilih database
mysqli_select_db($conn, "tubes_193040159") or die("Database salah!");

// query mengambil objek dari table didalam databse
$result = mysqli_query($conn, "SELECT *FROM alat_musik");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
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
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><img src="assets/img/<?= $row['gambar']; ?>"></td>
                        <td><?= $row['nama_alat_musik']; ?></td>
                        <td><?= $row['provinsi']; ?></td>
                        <td><?= $row['sumber_bunyi']; ?></td>
                        <td><?= $row['cara_memainkan']; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>