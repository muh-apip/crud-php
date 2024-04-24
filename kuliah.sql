-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2024 at 01:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int NOT NULL,
  `mahasiswa_npm` char(13) COLLATE utf8mb4_general_ci NOT NULL,
  `matakuliah_kodemk` char(6) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `mahasiswa_npm`, `matakuliah_kodemk`) VALUES
(1, '2210631250001', 'MK001'),
(2, '2210631250002', 'MK002'),
(3, '2210631250004', 'MK001'),
(4, '2210631250004', 'MK003'),
(5, '2210631250005', 'MK004'),
(6, '2210631250006', 'MK001'),
(7, '2210631250007', 'MK001'),
(8, '2210631250008', 'MK002'),
(9, '2210631250009', 'MK002'),
(10, '2210631250010', 'MK003');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(13) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`, `alamat`) VALUES
('2210631250001', 'Siska Putri', 'Teknik Informatika', 'Jakarta'),
('2210631250002', 'Ujang Aziz', 'Sistem Informasi', 'Karawang'),
('2210631250003', 'Veronica Setyano', 'Sistem Informasi', 'Bekasi'),
('2210631250004', 'Rizka Nurmala Putri', 'Teknik Informatika', 'Bekasi'),
('2210631250005', 'Eren Putra', 'Teknik Informatika', 'Bandung'),
('2210631250006', 'Putra Abdul Rachman', 'Teknik Informatika', 'Karawang'),
('2210631250007', 'Rahmat Andriyadi', 'Teknik Informatika', 'Jakarta'),
('2210631250008', 'Ayu Puspitasari', 'Teknik Informatika', 'Bekasi'),
('2210631250009', 'Putri Ayuni', 'Teknik Informatika', 'Karawang'),
('2210631250010', 'Andri Muhammad', 'Teknik Informatika', 'Tanggerang'),
('2210631250020', 'Muhammad Haviv', 'Sistem Informasi', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mk` char(6) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_sks` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `nama`, `jumlah_sks`) VALUES
('MK001', 'Basis data', 3),
('MK002', 'Pemrograman Berbasis Web', 3),
('MK003', 'Algoritma dan Struktur Data', 3),
('MK004', 'Kajian Jurnal Informatika', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
