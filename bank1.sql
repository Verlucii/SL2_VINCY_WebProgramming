-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 07.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer1`
--

CREATE TABLE `customer1` (
  `NamaDepan` varchar(30) NOT NULL,
  `NamaTengah` varchar(30) NOT NULL,
  `NamaBelakang` varchar(30) NOT NULL,
  `TempatLahir` varchar(30) NOT NULL,
  `TglLahir` date NOT NULL,
  `NIK` bigint(20) NOT NULL,
  `WargaNegara` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoHp` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `KodePos` int(8) NOT NULL,
  `FotoProfil` longtext NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password1` varchar(30) NOT NULL,
  `Password2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer1`
--

INSERT INTO `customer1` (`NamaDepan`, `NamaTengah`, `NamaBelakang`, `TempatLahir`, `TglLahir`, `NIK`, `WargaNegara`, `Email`, `NoHp`, `Alamat`, `KodePos`, `FotoProfil`, `Username`, `Password1`, `Password2`) VALUES
('De', 'John', 'Calvin', 'Jakarta', '2022-02-02', 1271156781234857, 'WNI', 'johhhhn@gmail.com', '085211112222', 'Jl. Lutheran no.77 , Bali', 20567, 'spotify.png', 'calvin', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer1`
--
ALTER TABLE `customer1`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
