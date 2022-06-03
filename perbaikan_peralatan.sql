-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 01.00
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
-- Struktur dari tabel `perbaikan_peralatan`
--

CREATE TABLE `perbaikan_peralatan` (
  `no_data` int(11) NOT NULL,
  `no_alat` varchar(13) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `mulai_gangguan` varchar(20) NOT NULL,
  `ciri_gangguan` mediumtext NOT NULL,
  `dampak_gangguan` mediumtext NOT NULL,
  `mulai_penanganan` varchar(20) NOT NULL,
  `mekanik` varchar(100) NOT NULL,
  `tindakan` mediumtext NOT NULL,
  `selesai_penanganan` varchar(20) NOT NULL,
  `hasil` mediumtext NOT NULL,
  `petunjuk` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perbaikan_peralatan`
--
ALTER TABLE `perbaikan_peralatan`
  ADD PRIMARY KEY (`no_data`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perbaikan_peralatan`
--
ALTER TABLE `perbaikan_peralatan`
  MODIFY `no_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
