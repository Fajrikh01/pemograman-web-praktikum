<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header('Location: admin.php');
  exit;
}

// cek kookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('hash', $row['id']);
        setcookie('hash', $hash . time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
    }
  }
  $error = true;
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

  <title>Login</title>
</head>

<body>

  <section id="login" class="login grey lighten-3" style="padding: 119px 0 120px 0;">
    <div class="container">
      <div class="row">
        <div class="col m6 s12 offset-m3">
          <form action="" method="post">
            <div class="card-panel">
              <h5 class="center">Login</h5>
              <br>
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="username" id="username" class="validate" autofocus required>
                <label for="username">Userame</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password" class="validate" required>
                <label for="password">Password</label>
              </div>
              <p>
                <div class="remember">
                  <input type="checkbox" name="remember">
                  <label>
                    <input type="checkbox" />
                    <span>Remember me</span>
                  </label>
                </div>
              </p>
              <div>
                <button type="submit" name="submit" class="waves-effect waves-light btn blue darken-2" style="text-transform: capitalize">Login</button>
              </div>
              <div class="registrasi">
                <p class="blue-text text-darken-2" style="font-family: 'Hind';"><a href="registrasi.php">Buat akun</a></p>
              </div>
              <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username atau Password salah</p>
              <?php endif; ?>
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