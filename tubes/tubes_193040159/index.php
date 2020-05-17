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

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- My Font -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

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
          <a href="#home" class="brand-logo"><i class="material-icons">cloud</i>Fajri Khoirunnisa</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#cari"><i class="material-icons left">search</i>Cari</a></li>
            <li><a href="php/login.php"><i class="material-icons left">person</i>Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#cari">Cari</a></li>
    <li><a href="php/login.php">Login</a></li>
  </ul>
  <!-- akhir sidenav -->

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <a href="#daftar">
          <img src="assets/img/angklung.jpg">
          <div class="caption left-align">
            <h1>Alat Musik</h1>
          </div>
        </a>
      </li>
      <li>
        <a href="#daftar">
          <img src="assets/img/bonang.jpg">
          <div class="caption right-align">
            <h1>Tradisional</h1>
          </div>
        </a>
      </li>
      <li>
        <a href="#daftar">
          <img src="assets/img/kompang.jpg">
          <div class="caption center-align">
            <h1>Indonesia</h1>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <!-- akhir slider -->


  <!-- daftar -->
  <section class="table grey lighten-3 scrollspy" id="table" style="padding: 3px 0;">
    <div class="container">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Daftar Alat Musik</h3>
        <hr>
        <form action="" method="GET" id="cari" class="scrollspy">
          <input type="text" name="keyword" size="20" placeholder="Search" autocomplete="off" autofocus id="keyword">
          <button type="submit" name="cari" class="tombol-cari" style="width: auto">Cari</button>
        </form>
        <?php foreach ($alat_musik as $am) : ?>
          <div class="col m4 s12">
            <div class="card-panel center">
              <img src="assets/img/<?= $am["gambar"]; ?>" class="responsive-img materialboxed">
              <h5 class="dark-text">
                <?= $am["nama_alat_musik"]; ?>
              </h5>
              <a href="php/detail.php?id=<?= $am['id']; ?>" class="waves-effect waves-light dark grey-text text-darken-3">
                <span class="material-icons">
                  expand_more
                </span>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php if (empty($alat_musik)) : ?>
    <tr>
      <td colspan="7">
        <p style="color: red; font-style:italic">data tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>
  <!-- Akhir Isi -->

  <!-- footer -->
  <footer class="blue lighten-2 white-text center">
    <p class="flow-text">&copy; Copyright 2020.</p>
  </footer>






  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider')
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 150
    });

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);
  </script>
</body>

</html>