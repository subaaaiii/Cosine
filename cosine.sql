-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 06:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosine`
--

-- --------------------------------------------------------

--
-- Table structure for table `basis_kasus`
--

CREATE TABLE `basis_kasus` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `npm` varchar(256) NOT NULL,
  `sks1` float NOT NULL,
  `sks2` float NOT NULL,
  `sks3` float NOT NULL,
  `sks4` float NOT NULL,
  `ipk1` float NOT NULL,
  `ipk2` float NOT NULL,
  `ipk3` float NOT NULL,
  `ipk4` float NOT NULL,
  `n1` float NOT NULL,
  `n2` float NOT NULL,
  `n3` float NOT NULL,
  `n4` float NOT NULL,
  `n5` float NOT NULL,
  `n6` float NOT NULL,
  `n7` float NOT NULL,
  `n8` float NOT NULL,
  `masa_studi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basis_kasus`
--

INSERT INTO `basis_kasus` (`id`, `nama`, `npm`, `sks1`, `sks2`, `sks3`, `sks4`, `ipk1`, `ipk2`, `ipk3`, `ipk4`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `masa_studi`) VALUES
(1, 'mahasiswa 1', '', 20, 24, 24, 22, 3.3, 3.27, 3.19, 3.39, 0.5, 1, 1, 0.75, 0.825, 0.8175, 0.7975, 0.8475, 8),
(2, 'mahasiswa 2', '', 18, 21, 24, 24, 3.28, 3.5, 3.6, 3.57, 0.25, 0.625, 1, 1, 0.82, 0.875, 0.9, 0.8925, 10),
(3, 'mahasiswa 3', '', 18, 21, 24, 24, 3.08, 3.24, 3.1, 3.4, 0.25, 0.625, 1, 1, 0.77, 0.81, 0.775, 0.85, 8),
(4, 'mahasiswa 4', '', 18, 22, 21, 22, 3.03, 3.32, 2.86, 2.86, 0.25, 0.75, 0.625, 0.75, 0.7575, 0.83, 0.715, 0.715, 12),
(5, 'mahasiswa 5', '', 18, 20, 16, 21, 2.78, 2.98, 2.88, 3.1, 0.25, 0.5, 0, 0.625, 0.695, 0.745, 0.72, 0.775, 11),
(6, 'mahasiswa 6', '', 20, 21, 20, 19, 3.48, 3.38, 3.23, 3.03, 0.5, 0.625, 0.5, 0.375, 0.87, 0.845, 0.8075, 0.7575, 12),
(7, 'mahasiswa 7', '', 20, 21, 20, 19, 3.13, 2.79, 3.33, 3.21, 0.5, 0.625, 0.5, 0.375, 0.7825, 0.6975, 0.8325, 0.8025, 10),
(8, 'mahasiswa 8', '', 20, 21, 20, 19, 3.23, 3.19, 2.65, 3.34, 0.5, 0.625, 0.5, 0.375, 0.8075, 0.7975, 0.6625, 0.835, 14);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `npm` varchar(11) NOT NULL,
  `sks1` int(11) NOT NULL,
  `sks2` int(11) NOT NULL,
  `sks3` int(11) NOT NULL,
  `sks4` int(11) NOT NULL,
  `ipk1` float NOT NULL,
  `ipk2` float NOT NULL,
  `ipk3` float NOT NULL,
  `ipk4` float NOT NULL,
  `n1` float NOT NULL,
  `n2` float NOT NULL,
  `n3` float NOT NULL,
  `n4` float NOT NULL,
  `n5` float NOT NULL,
  `n6` float NOT NULL,
  `n7` float NOT NULL,
  `n8` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `sks1`, `sks2`, `sks3`, `sks4`, `ipk1`, `ipk2`, `ipk3`, `ipk4`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`) VALUES
(10, 'Subairi', '21081010019', 20, 21, 22, 23, 3.4, 3.6, 3.5, 3.87, 0.5, 0.625, 0.75, 0.875, 0.85, 0.9, 0.875, 0.9675),
(11, 'Ihza Fajri', '21081010043', 18, 21, 23, 22, 3.7, 3.2, 3.4, 3.5, 0.25, 0.625, 0.875, 0.75, 0.925, 0.8, 0.85, 0.875),
(12, 'Rizky Fathur', '21081010019', 20, 20, 21, 22, 3.4, 4, 3.6, 3.1, 0.5, 0.5, 0.625, 0.75, 0.85, 1, 0.9, 0.775),
(13, 'Sabui', '21081010019', 20, 24, 24, 23, 3.38, 3.52, 3.42, 3.5, 0.5, 1, 1, 0.875, 0.845, 0.88, 0.855, 0.875),
(15, 'Haji', '21081010019', 20, 20, 20, 20, 4, 4, 4, 4, 0.5, 0.5, 0.5, 0.5, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
