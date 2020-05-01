<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

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
  <title>Latihan7c</title>
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
      <a href="tambah.php">Tambah Data</a>
    </div>

    <form action="" method="GET">
      <input type="text" name="keyword" size="30" autocomplete="off" autofocus>
      <button type="submit" name="cari" style="width: auto">Cari</button>
    </form>

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

      <?php if (empty($alat_musik)) : ?>
        <tr>
          <td colspan="7">
            <p style="color: red; font-style:italic">data tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $no = 1; ?>
      <?php foreach ($alat_musik as $am) : ?>
        <tr>
          <td><?= $no; ?></td>
          <td>
            <a href="ubah.php?id=<?= $am['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $am['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
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

    <div class="logout">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>

</html>