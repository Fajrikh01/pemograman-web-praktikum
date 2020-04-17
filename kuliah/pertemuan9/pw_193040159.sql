-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2020 pada 03.12
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
-- Database: `pw_193040159`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Fajri Khoirunnisa', '193040159', '193040159@unpas.ac.id', 'Teknik Informatika', '1.jpg'),
(2, 'Nelli Marliana', '193040165', '193040165@unpas.ac.id', 'Teknik Informatika', '2.jpg'),
(3, 'Jeremy Anandika E', '193040173', '193040173@unpas.ac.id', 'Teknik Informatika', '3.jpg'),
(4, 'Rizky Angga Saputra', '193040160', '193040160@unpas.ac.id', 'Teknik Informatika', '4.jpg'),
(5, 'Muhamad Fawwazt Sabilarrasyad', '193040176', '193040176@unpas.ac.id', 'Teknik Informatika', '5.jpg'),
(6, 'Elti Rahmawati', '193040154', '193040154@unpas.ac.id', 'Teknik Informatika', '6.jpg'),
(7, 'Freety Indriani Safitri', '193040175', '193040175@unpas.ac.id', 'Teknik Informatika', '7.jp'),
(8, 'Nur Safitri', '193040181', '193040181@unpas.ac.id', 'Teknik Informatika', '8.jpg'),
(9, 'Mohammad Iqbal Ghifari', '193040147', '193040147@unpas.ac.id', 'Teknik Informatika', '9.jpg'),
(10, 'Kang Daniel', '193040999', '193040999@unpas.ac.id', 'Teknik Informatika', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
