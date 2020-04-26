-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 11.22
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
(11, 'kompang.jpg', 'Kompang', 'Lampung', 'Kordofon', 'Dimainkan dengan cara dipukul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
