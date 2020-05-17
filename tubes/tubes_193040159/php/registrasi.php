<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
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

  <title>Registrasi</title>
</head>

<body>

  <section id="registrasi" class="registrasi grey lighten-3" style="padding: 135px 0 135px 0;">
    <div class="container">
      <div class="row">
        <div class="col l6 m8 s12 offset-l3 offset-m2">
          <form action="" method="post">
            <div class="card-panel">
              <h5 class="center">Buat Akun</h5>
              <br>
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="username" id="usernamename" class="validate" autofocus required>
                <label for="username">Userame</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password" class="validate" required>
                <label for="password">Password</label>
              </div>
              <button type="submit" name="register" class="waves-effect waves-light btn blue darken-2" style="text-transform: capitalize">Tambah Akun</button><br>
              <a href=" login.php" class="waves-effect waves-light dark grey-text text-darken-3">
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
</body>

</html>