<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            allert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal ditambahkan!');
            ddocument.location.href = 'admin.php';
            </script>";
  }
}
?>

<h3>Form Tambah Data Alat Musik</h3>
<form action="" method="post">
  <ul>
    <li>
      <label for="gambar">Gambar :</label><br>
      <input type="text" name="gambar" id="gambar" required><br><br>
    </li>
    <li>
      <label for="nama_alat_musik">Nama Alat Musik :</label><br>
      <input type="text" name="nama_alat_musik" id="nama_alat_musik" required><br><br>
    </li>
    <li>
      <label for="provinsi">Provinsi :</label><br>
      <input type="text" name="provinsi" id="provinsi" required><br><br>
    </li>
    <li>
      <label for="sumber_bunyi">Sumber Bunyi :</label><br>
      <select name="sumber_bunyi" id="sumber_bunyi" required>
        <option value="">--- Pilih Sumber Bunyi ---</option>
        <option value="Idiofon">Idiofon</option>
        <option value="Aerofon">Aerofon</option>
        <option value="Kordofon">Kordofon</option>
        <option value="Membranfon">Membranfon</option>
        <option value="Elektrofon">Elektrofon</option>
      </select>
    </li>
    <br>
    <li>
      <label for="cara_memainkan">Cara Memainkan :</label><br>
      <input type="text" name="cara_memainkan" id="cara_memainkan" required><br><br>
    </li>
    <br>
    <button type="submit" name="tambah">Tambah Data!</button>
    <button type="submit">
      <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
    </button>
  </ul>
</form>