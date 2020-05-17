-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 07.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040159`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `nama_alat_musik` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `sumber_bunyi` varchar(100) DEFAULT NULL,
  `cara_memainkan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `gambar`, `nama_alat_musik`, `provinsi`, `sumber_bunyi`, `cara_memainkan`) VALUES
(1, 'angklung.jpg', 'Angklung', 'Jawa Barat', 'Idiofon', 'Dimainkan dengan cara digoyangkan'),
(2, 'sasando.jpg', 'Sasando', 'Nusa Tenggara Timur', 'Kordofon', 'Dimainkan dengan cara dipetik seperti gitar'),
(3, 'tifa.jpg', 'Tifa', 'Maluku dan Papua', 'Membranfon', 'Dimainkan dengan cara dipukul'),
(4, 'aramba.jpg', 'Aramba', 'Sumatera Utara', 'Ideofon', 'Dipukul dengan menggunakan pemukul khusus'),
(5, 'gambus.jpg', 'Gambus', 'Riau', 'Kordofon', 'Dipetik dengan menggunakan jari'),
(6, 'bonang.jpg', 'Bonang', 'Jawa Timur', 'Ideofon', 'Dimainkan dengan cara dipukul'),
(7, 'panting.jpg', 'Panting', 'Kalimantan Selatan', 'Kordofon', 'Dimainkan dengan cara dipetik bagian senarnya'),
(8, 'kacapi.jpg', 'Kecapi', 'Sulawesi Barat', 'Kordofon', 'Dimainkan dengan cara dipetik'),
(9, 'gong.jpg', 'Gong', 'Jawa Barat', 'Membranfon', 'Dipukul menggunakan alat pukul yang didesain secara khusus'),
(10, 'genggong.jpg', 'Genggong', 'Sumatera Selatan', 'Aerofon', 'Dimainkan dengan cara ditiup'),
(11, 'kompang.jpg', 'Kompang', 'Lampung', 'Kordofon', 'Dimainkan dengan cara dipukul'),
(12, 'calung.jpg', 'Calung', 'Jawa Barat', 'Idiofon', 'Memukul ruas tabung bambu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'jae', '$2y$10$F36x1mH1.6Vb3LkXulEE.uF17vNmjX0KWbhGli6r9QZc14QpT6AFe'),
(4, 'eajpark', '$2y$10$qv/YbcvEyNQGHW02WzV2QODw9FI5W3eCuh726OhLRwFcVnt4TNKi2'),
(5, 'alliwannado', '$2y$10$cd3qScwlJD.apshIo0LuKeCKbznMR2M58L6Fy1Q86icTui/KZNK1S'),
(6, 'jung', '$2y$10$QwOVtR81H8/DjkeFP04O0.rgUJbhsHOSafHsauEWNBDHuRbEBsQ92'),
(7, 'kangceoding', '$2y$10$Liy7qpPfDyBnFdQLIHOCPug23tftU23GNGaFQYAJNVZb5IkFCauW2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
