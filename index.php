<?php
// session_start();

// if (!isset($_SESSION["username"])) {
//   header("Location: login.php");
//   exit;
// }

// require 'functions.php';

// if (isset($_GET['cari'])) {
//   $keyword = $_GET['keyword'];
//   $alat_musik = query("SELECT * FROM alat_musik WHERE
//                  nama_alat_musik LIKE '%$keyword%' OR
//                  provinsi LIKE '%$keyword%' OR
//                  sumber_bunyi LIKE '%$keyword%' OR
//                  cara_memainkan LIKE '%$keyword%'");
// } else {
//   $alat_musik = query("SELECT * FROM alat_musik");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="tubes/tubes_193040159/css/materialize.min.css" media="screen,projection" />

  <!-- My Font -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="tubes/tubes_193040159/css/style.css">

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
          <a href="#home" class="brand-logo"><i class="material-icons">cloud</i>Home</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <!-- card -->
  <div class="container">
    <h3 class="padding: 25px 0 25px 0;">DAFTAR INDEX</h3>
    <div class="row">
      <div class="col s12 m4">
        <div class="card center">
          <h5 class="dark-text" style="padding: 15px 0 15px 0">Kuliah</h5>
          <div class="card-action">
            <a href="kuliah/pertemuan9" class="waves-effect waves-light dark grey-text text-darken-3">Pertemuan 9</a>
          </div>
          <div class="card-action">
            <a href="kuliah/pertemuan10" class="waves-effect waves-light dark grey-text text-darken-3">Pertemuan 10</a>
          </div>
          <div class="card-action">
            <a href="kuliah/pertemuan11" class="waves-effect waves-light dark grey-text text-darken-3">Pertemuan 11</a>
          </div>
          <div class="card-action">
            <a href="kuliah/pertemuan12" class="waves-effect waves-light dark grey-text text-darken-3">Pertemuan 12</a>
          </div>
          <div class="card-action">
            <a href="kuliah/pertemuan13" class="waves-effect waves-light dark grey-text text-darken-3">Pertemuan 13</a>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card center">
          <h5 class="dark-text" style="padding: 15px 0 15px 0">Praktikum</h5>
          <div class="card-action">
            <a href="praktikum/P5_PW_193040159" class="waves-effect waves-light dark grey-text text-darken-3">P5_PW_193040159</a>
          </div>
          <div class="card-action">
            <a href="praktikum/P6_PW_193040159" class="waves-effect waves-light dark grey-text text-darken-3">P6_PW_193040159</a>
          </div>
          <div class="card-action">
            <a href="praktikum/P7_PW_193040159" class="waves-effect waves-light dark grey-text text-darken-3">P7_PW_193040159</a>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card center">
          <h5 class="dark-text" style="padding: 15px 0 15px 0">Tugas Besar</h5>
          <div class="card-action">
            <a href="tubes/tubes_193040159" class="waves-effect waves-light dark grey-text text-darken-3">Tugas Besar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Table -->


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="tubes/tubes_193040159/js/materialize.min.js"></script>
</body>

</html>