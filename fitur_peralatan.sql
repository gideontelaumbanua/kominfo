-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 00.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur_peralatan`
--

CREATE TABLE `fitur_peralatan` (
  `nomor` int(20) NOT NULL,
  `no_alat` varchar(13) NOT NULL,
  `fitur_1` mediumtext NOT NULL,
  `fitur_2` mediumtext NOT NULL,
  `fitur_3` mediumtext NOT NULL,
  `fitur_4` mediumtext NOT NULL,
  `fitur_5` mediumtext NOT NULL,
  `fitur_6` mediumtext NOT NULL,
  `fitur_7` mediumtext NOT NULL,
  `fitur_8` mediumtext NOT NULL,
  `fitur_9` mediumtext NOT NULL,
  `fitur_10` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `update_data` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fitur_peralatan`
--
ALTER TABLE `fitur_peralatan`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fitur_peralatan`
--
ALTER TABLE `fitur_peralatan`
  MODIFY `nomor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
