<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

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

<title>Form Ubah Daftar Alat Musik</title>
<form action="" method="post">
  <input type="hidden" name="id" id="id" value="<?= $am['id']; ?>">
  <ul>
    <li>
      <label for="gambar">Gambar :</label><br>
      <input type="text" name="gambar" id="gambar" required value="<?= $am['gambar']; ?>"><br><br>
    </li>
    <li>
      <label for="nama_alat_musik">Nama Alat Musik :</label><br>
      <input type="text" name="nama_alat_musik" id="nama_alat_musik" required value="<?= $am['nama_alat_musik']; ?>"><br><br>
    </li>
    <li>
      <label for="provinsi">Provinsi :</label><br>
      <input type="text" name="provinsi" id="provinsi" required value="<?= $am['provinsi']; ?>"><br><br>
    </li>
    <li>
      <label for="sumber_bunyi">Sumber Bunyi :</label><br>
      <select name="sumber_bunyi" id="sumber_bunyi" required value="<?= $am['sumber_bunyi']; ?>">
        <option value="">--- Pilih Sumber Bunyi ---</option>
        <option value="Idiofon">Idiofon</option>
        <option value="Aerofon">Aerofon</option>
        <option value="Kordofon">Kordofon</option>
        <option value="Membranfon">Membranfon</option>
        <option value="Elektrofon">Elektrofon</option>
      </select>
    </li> <br>
    <li>
      <label for="cara_memainkan">Cara Memainkan :</label><br>
      <input type="text" name="cara_memainkan" id="cara_memainkan" required value="<?= $am['cara_memainkan']; ?>"><br><br>
    </li>
    <br>
    <button type="submit" name="ubah">Ubah Data!</button>
    <button type="submit">
      <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
    </button>
  </ul>
</form>