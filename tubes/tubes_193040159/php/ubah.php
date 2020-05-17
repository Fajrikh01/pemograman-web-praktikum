<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];
$am = query("SELECT * FROM alat_musik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal diubah!');
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

  <!-- My Font -->
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@600&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Ubah Data</title>
</head>

<body>
  <section id="login" class="login grey lighten-3" style="padding: 25px 0 5px 0;">
    <div class="container">
      <div class="row">
        <div class="col m8 s12 offset-m2">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="card-panel">
              <h5 class="center">Ubah Data</h5><br>
              <input type="hidden" name="id" id="id" value="<?= $am['id']; ?>">
              <div>
                <input type="hidden" name="gambar_lama" value="<?= $am['gambar']; ?>">
                <label for="gambar">Gambar :</label>
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                    <img src="../assets/img/<?= $am['gambar']; ?>" width="120" style="display: block;" class="img-preview">
                  </div>
                </div>
              </div>
              <div>
                <label for="nama_alat_musik">Nama Alat Musik :</label>
                <input type="text" name="nama_alat_musik" id="nama_alat_musik" required value="<?= $am['nama_alat_musik']; ?>">
              </div>
              <div>
                <label for="provinsi">Provinsi :</label>
                <input type="text" name="provinsi" id="provinsi" required value="<?= $am['provinsi']; ?>">
              </div>
              <div>
                <label for="sumber_bunyi">Sumber Bunyi :</label>
                <select class="browser-default" name="sumber_bunyi" id="sumber_bunyi" required value="<?= $am['sumber_bunyi']; ?>">
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
                <input type="text" name="cara_memainkan" id="cara_memainkan" required value="<?= $am['cara_memainkan']; ?>">
              </div>
              <div><br>
                <button type="submit" name="ubah" class="btn blue darken-2" style="text-transform: capitalize">Ubah</button><br>
              </div>
              <a href="admin.php" class="waves-effect waves-light dark grey-text text-darken-3">
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