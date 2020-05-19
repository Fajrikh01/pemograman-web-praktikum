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

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- My Font -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Alat Musik Tradisional</title>
</head>

<body id="home" class="scrollspy">

  <!-- navbar -->

  <div class="navbar-fixed">
    <nav class="blue lighten-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo"><i class="material-icons">cloud</i>FK.</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="tambah.php"><i class="material-icons left">add</i>Tambah Data</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Akhir Navbar -->

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#cari">Cari</a></li>
    <li><a href="tambah.php">Tambah Data</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <!-- akhir sidenav -->

  <!-- Table -->
  <section id="table" class="table pt-2 pb-4">
    <div class="container">
      <h3>ALAT MUSIK TRADISIONAL</h3>
      <form action="" method="GET" id="cari" class="scrollspy">
        <input type="text" name="keyword" size="20" placeholder="Search" autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari" style="width: auto">Cari</button>
      </form>
      <table class="centered highlight">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama Alat Musik</th>
            <th>Provinsi</th>
            <th>Sumber Bunyi</th>
            <th>Cara Memainkan</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($alat_musik as $am) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td>
                <a href="ubah.php?id=<?= $am['id']; ?>" class="white-text"><button id="tombol" type="submit" name="submit" class="waves-effect waves-light btn blue lighten-1">Ubah</button></a>
                <a href="hapus.php?id=<?= $am['id']; ?>" onclick="return confirm('Hapus Data??')" class="white-text"><button id="tombol" type="submit" name="submit" class="waves-effect waves-light btn red lighten-1">Hapus</button></a>
              </td>
              <td><img src="../assets/img/<?= $am['gambar']; ?>" style="height: 100px;"></td>
              <td><?= $am['nama_alat_musik']; ?></td>
              <td><?= $am['provinsi']; ?></td>
              <td><?= $am['sumber_bunyi']; ?></td>
              <td><?= $am['cara_memainkan']; ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
          <?php if (empty($alat_musik)) : ?>
            <tr>
              <td colspan="7">
                <p style="color: red; font-style:italic">data tidak ditemukan!</p>
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- Akhir Table -->

  <!-- footer -->
  <footer class="blue lighten-2 white-text center">
    <p class="flow-text">&copy; Copyright 2020.</p>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll);
  </script>
</body>

</html>