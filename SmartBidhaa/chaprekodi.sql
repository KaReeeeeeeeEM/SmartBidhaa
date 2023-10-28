-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 08:30 PM
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
-- Database: `chaprekodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `jina` varchar(50) NOT NULL,
  `nenosiri` varchar(50) NOT NULL,
  `tarehe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `jina`, `nenosiri`, `tarehe`) VALUES
(1, 'Kareem', '052002', '2023-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `chakula`
--

CREATE TABLE `chakula` (
  `id` int(11) NOT NULL,
  `ainayachakula` varchar(50) NOT NULL,
  `nambayamifuko` varchar(50) NOT NULL,
  `jumlailiyotumika` varchar(70) NOT NULL,
  `tarehe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mauzo`
--

CREATE TABLE `mauzo` (
  `id` int(11) NOT NULL,
  `nambayakuku` varchar(50) NOT NULL,
  `beiyakilakuku` varchar(50) NOT NULL,
  `jumlayabei` varchar(65) NOT NULL,
  `tarehe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stoki`
--

CREATE TABLE `stoki` (
  `id` int(11) NOT NULL,
  `ainayastoki` varchar(50) NOT NULL,
  `nambayakuku` varchar(50) NOT NULL,
  `jumlailiyotumika` varchar(70) NOT NULL,
  `tarehe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taarifa`
--

CREATE TABLE `taarifa` (
  `id` int(11) NOT NULL,
  `ainayataarifa` varchar(50) NOT NULL,
  `nambayakuku` varchar(50) NOT NULL,
  `jumlayahasara` varchar(70) NOT NULL,
  `tarehe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chakula`
--
ALTER TABLE `chakula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mauzo`
--
ALTER TABLE `mauzo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stoki`
--
ALTER TABLE `stoki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taarifa`
--
ALTER TABLE `taarifa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chakula`
--
ALTER TABLE `chakula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mauzo`
--
ALTER TABLE `mauzo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stoki`
--
ALTER TABLE `stoki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taarifa`
--
ALTER TABLE `taarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
