<?php

if (!isset($_GET['id'])) {
  header("localtion: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$alat_musik = query("SELECT * FROM alat_musik WHERE id = $id")[0];
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

  <title>Latihan7c</title>
</head>

<body>
  <section id="detail" class="detail grey lighten-3" style="padding: 20px 0 10px 0;">
    <div class="container">
      <div class="row">
        <div class="col s12 m7 offset-m3">
          <div class="card">
            <div class="card-image">
              <img src="../assets/img/<?= $alat_musik["gambar"]; ?>" alt="">
            </div>
            <div class="card-content">
              <table>
                <tbody>
                  <tr>
                    <td>Nama Alat Musik</td>
                    <td>:</td>
                    <td><?= $alat_musik["nama_alat_musik"]; ?></td>
                  </tr>
                  <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td><?= $alat_musik["provinsi"]; ?></td>
                  </tr>
                  <tr>
                    <td>Sumber Bunyi</td>
                    <td>:</td>
                    <td><?= $alat_musik["sumber_bunyi"]; ?></td>
                  </tr>
                  <tr>
                    <td>Cara Memainkan</td>
                    <td>:</td>
                    <td><?= $alat_musik["cara_memainkan"]; ?></td>
                  </tr>
                </tbody>
              </table>
              <div>
                <a href="../index.php" id="tombol"><button class="waves-effect waves-light btn blue darken-2" style="text-transform: capitalize">Kembali</button></a><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>