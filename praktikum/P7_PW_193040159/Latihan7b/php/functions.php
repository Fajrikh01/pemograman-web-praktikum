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

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_alat_musik = htmlspecialchars($data['nama_alat_musik']);
    $provinsi = htmlspecialchars($data['provinsi']);
    $sumber_bunyi = htmlspecialchars($data['sumber_bunyi']);
    $cara_memainkan = htmlspecialchars($data['cara_memainkan']);

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
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama_alat_musik = htmlspecialchars($data['nama_alat_musik']);
    $provinsi = htmlspecialchars($data['provinsi']);
    $sumber_bunyi = htmlspecialchars($data['sumber_bunyi']);
    $cara_memainkan = htmlspecialchars($data['cara_memainkan']);
    $gambar = htmlspecialchars($data['gambar']);

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
