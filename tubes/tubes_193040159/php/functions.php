<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040159") or die("Database salah!");

    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$query");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //       alert('pilih gambar terlebih dahulu!');
        //     </script>";
        return 'egg.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
          alert('yang anda pilih bukan gambar!');
        </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
          alert('bukan gambar!');
        </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
          alert('ukuran terlalu besar!');
        </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    // $gambar = htmlspecialchars($data['gambar']);
    $nama_alat_musik = htmlspecialchars($data['nama_alat_musik']);
    $provinsi = htmlspecialchars($data['provinsi']);
    $sumber_bunyi = htmlspecialchars($data['sumber_bunyi']);
    $cara_memainkan = htmlspecialchars($data['cara_memainkan']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO 
                alat_musik
              VALUES
              (null, '$gambar', '$nama_alat_musik', '$provinsi', '$sumber_bunyi', '$cara_memainkan')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di folder img
    $am = query("SELECT * FROM alat_musik WHERE id = $id")[0];
    if ($am['gambar'] != 'egg.jpg') {
        unlink('../assets/img/' . $am['gambar']);
    }

    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama_alat_musik = htmlspecialchars($data['nama_alat_musik']);
    $provinsi = htmlspecialchars($data['provinsi']);
    $sumber_bunyi = htmlspecialchars($data['sumber_bunyi']);
    $cara_memainkan = htmlspecialchars($data['cara_memainkan']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'egg.jpg') {
        $gambar = $gambar_lama;
    }

    $query = "UPDATE alat_musik SET
              gambar = '$gambar',
              nama_alat_musik = '$nama_alat_musik',
              provinsi = '$provinsi',
              sumber_bunyi = '$sumber_bunyi',
              cara_memainkan = '$cara_memainkan'
            WHERE id = '$id'";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();
    $query = "SELECT * FROM alat_musik
              WHERE 
            nama_alat_musik LIKE '%$keyword%' OR
            provinsi LIKE '%$keyword%' OR
            sumber_bunyi LIKE '%$keyword%' OR
            cara_memainkan LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
