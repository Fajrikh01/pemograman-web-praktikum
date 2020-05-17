<?php
require '../php/functions.php';
$alat_musik = cari($_GET['keyword']);
?>

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
          <a href="ubah.php?id=<?= $am['id']; ?>" class="white-text"><button id="tombol" type="submit" name="submit" class="btn blue lighten-1" style="width: 100%;">Ubah</button></a>
          <a href="hapus.php?id=<?= $am['id']; ?>" onclick="return confirm('Hapus Data??')" class="white-text"><button id="tombol" type="submit" name="submit" class="btn red lighten-1" style="width: 100%;">Hapus</button></a>
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