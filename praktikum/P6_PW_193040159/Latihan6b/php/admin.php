<?php
require 'functions.php';

$alat_musik = query("SELECT * FROM alat_musik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6b</title>
  <style>
    body {
      background-color: lightsteelblue;
      font-family: Arial, Helvetica, sans-serif
    }

    th {
      background-color: burlywood;
      font-weight: bold;
      text-align: center;
    }

    h1 {
      text-align: center;
      font-size: 37px;
    }

    table {
      background-color: lightgoldenrodyellow;
    }

    img {
      height: 100px;
    }

    td {
      text-align: center;
    }

    .container {
      width: 800px;
      margin: 0px auto 0px auto;
    }

    button {
      width: 100%;
      margin: 5px 0 5px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>ALAT MUSIK TRADISIONAL</h1>
    <div class="add">
      <a href="tambah.php">
        <button style="width: auto">Tambah Data</button>
      </a>
    </div>
    <br>
    <table border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Gambar</th>
        <th>Nama Alat Musik</th>
        <th>Provinsi</th>
        <th>Sumber Bunyi</th>
        <th>Cara Memainkan</th>
      </tr>
      <?php $no = 1; ?>
      <?php foreach ($alat_musik as $am) : ?>
        <tr>
          <td><?= $no; ?></td>
          <td>
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
          </td>
          </td>
          <td><img src="../assets/img/<?= $am['gambar']; ?>"></td>
          <td><?= $am['nama_alat_musik']; ?></td>
          <td><?= $am['provinsi']; ?></td>
          <td><?= $am['sumber_bunyi']; ?></td>
          <td><?= $am['cara_memainkan']; ?></td>
        </tr>
        <?php $no++; ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>