-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 08:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `c.medik`
--

CREATE TABLE `c.medik` (
  `id_cm` int(12) NOT NULL,
  `id_pas` int(12) NOT NULL,
  `id_dok` int(12) NOT NULL,
  `id_pen` int(12) NOT NULL,
  `riw_pen` varchar(40) NOT NULL,
  `diagnosa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c.medik`
--

INSERT INTO `c.medik` (`id_cm`, `id_pas`, `id_dok`, `id_pen`, `riw_pen`, `diagnosa`) VALUES
(1, 1, 220533603, 1, 'Asma', 'Peradangan Tonsil');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dok` int(12) NOT NULL,
  `nama_dok` varchar(40) NOT NULL,
  `ttl_dok` varchar(40) NOT NULL,
  `telp_dok` varchar(40) NOT NULL,
  `bidang_dok` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dok`, `nama_dok`, `ttl_dok`, `telp_dok`, `bidang_dok`) VALUES
(220533601, 'Joko Sutarman', '24 Agustus 1970', '081234567891', 'Bedah Syaraf'),
(220533602, 'Bambang Susetyo', '12 Mei 1978', '081234567899', 'Dokter Gigi'),
(220533603, 'Paijo Sutaryo', '12 Maret 1976', '081234567893', 'Dokter Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pas` int(12) NOT NULL,
  `id_daftar` int(12) NOT NULL,
  `id_cm` int(12) DEFAULT NULL,
  `nama_pas` varchar(40) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL,
  `telp_pas` varchar(40) NOT NULL,
  `ttl_pas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pas`, `id_daftar`, `id_cm`, `nama_pas`, `nik`, `jenis_kelamin`, `telp_pas`, `ttl_pas`) VALUES
(1, 1, 0, 'Kenzo Alvaro', '3573050101020001', 'Laki-Laki', '089988776655', '1 Januari 2002');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(12) NOT NULL,
  `tgl_daftar` varchar(40) NOT NULL,
  `keluhan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `tgl_daftar`, `keluhan`) VALUES
(1, '20 April 2023', 'Mumet');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_pen` int(12) NOT NULL,
  `jenis_pen` varchar(40) NOT NULL,
  `nama_pen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_pen`, `jenis_pen`, `nama_pen`) VALUES
(1, 'Influenza', 'Tubulus Kontortus Distal');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_pendaftaran`
--

CREATE TABLE `rekap_pendaftaran` (
  `id_rPendaftaran` int(12) NOT NULL,
  `id_pas` int(12) NOT NULL,
  `id_daftar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c.medik`
--
ALTER TABLE `c.medik`
  ADD PRIMARY KEY (`id_cm`),
  ADD KEY `id_pas` (`id_pas`),
  ADD KEY `id_dok` (`id_dok`),
  ADD KEY `id_pen` (`id_pen`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pas`),
  ADD KEY `id_daftar` (`id_daftar`),
  ADD KEY `id_cm` (`id_cm`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_pen`);

--
-- Indexes for table `rekap_pendaftaran`
--
ALTER TABLE `rekap_pendaftaran`
  ADD PRIMARY KEY (`id_rPendaftaran`),
  ADD KEY `id_pas` (`id_pas`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c.medik`
--
ALTER TABLE `c.medik`
  MODIFY `id_cm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_pen` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
