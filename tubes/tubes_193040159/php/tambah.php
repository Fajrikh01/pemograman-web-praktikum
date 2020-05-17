<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
  }
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

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Tambah Data</title>
</head>

<body>
  <section id="tambah" class="tambah grey lighten-3" style="padding: 20px 0 5px 0;">
    <div class="container">
      <div class="row">
        <div class="col m8 s12 offset-m2">
          <!-- <div class="col"> -->
          <form action="" method="post" enctype="multipart/form-data">
            <div class="card-panel">
              <h5 class="center">Tambah Data</h5><br>
              <div>
                <label for="gambar">Gambar :</label><br>
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                    <img src="../assets/img/egg.jpg" width="120" style="display: block;" class="img-preview">
                  </div>
                </div>
                <div>
                  <label for="nama_alat_musik">Nama Alat Musik :</label><br>
                  <input type="text" name="nama_alat_musik" id="nama_alat_musik" required>
                </div>
                <div>
                  <label for="provinsi">Provinsi :</label><br>
                  <input type="text" name="provinsi" id="provinsi" required>
                </div>
                <div>
                  <label for="sumber_bunyi">Sumber Bunyi :</label><br>
                  <select class="browser-default" name="sumber_bunyi" id="sumber_bunyi" required>
                    <option value="" disabled selected>----- Pilih Sumber Bunyi -----</option>
                    <option value="Idiofon">Idiofon</option>
                    <option value="Aerofon">Aerofon</option>
                    <option value="Kordofon">Kordofon</option>
                    <option value="Membranfon">Membranfon</option>
                    <option value="Elektrofon">Elektrofon</option>
                  </select>
                </div>
                <div>
                  <label for="cara_memainkan">Cara Memainkan :</label>
                  <input type="text" name="cara_memainkan" id="cara_memainkan" required>
                </div>
                <div><br>
                  <button type="submit" name="tambah" class="btn blue darken-2" style="text-transform: capitalize">Tambah</button><br>
                </div>
                <a href=" admin.php" class="waves-effect waves-light dark grey-text text-darken-3">
                  <i class="material-icons">arrow_back</i>
                </a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>