-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 05:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` tinyint(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `FullName`, `Email`, `Password`) VALUES
(1, 'Nguyen', 'dammit2525@gmail.com', 'Damnguyen26');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` tinyint(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `FullName`, `Email`, `Password`) VALUES
(1, 'Nguyen', 'dammit2525@gmail.com', 'Damnguyen26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(6) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FullName`, `Email`, `Password`) VALUES
(1, 'Dam Nguyen', 'dammit2525@gmail.com', 'Damnguyen26'),
(2, 'Tran Cong Tin', 'Tintran2211@gmail.com', 'TranTin2211'),
(3, 'Nguyen Dam', 'dammit2525@gmail.com', 'Nguyen26'),
(4, 'asdasd', 'asdasdasd', 'asdasdasda'),
(5, 'Nguyen', 'dammit2525@yahoo.com.vn', '$2y$10$Eu77kP2vtiO51uPAVbNkb.cmFJhxlJu.D6GSdhmw/P1'),
(6, 'Nguyen', 'dammit@gmail.com', '$2y$10$rzn.2rtqcr/J8kBqu7c0i.prB4Etcs8vIBFym/gfq26'),
(7, 'Nguyen Dam', 'dammit2@gmail.com', '$2y$10$x.EeJD3jfrSZfv4Y5Ygwfevn7RftrnPI/rUFN3OIMrL'),
(8, 'Nguyen Dam', 'dammit25@gmail.com', '$2y$10$w04HCC7VbxHAubcJXe1m3uSK/e5ShI0tv7EzOz5OECU'),
(9, 'Nguyen Dam', 'dammit255@gmail.com', '$2y$10$ZV5LUzRtmum8ZMyd8hd7fe1HmA30nQ4TbaPvPTiSKmx'),
(10, 'Nguyen Dam', 'dam@gmail.com', '$2y$10$9rTQRkPxvSCkIvPAQlDqK.z4XArbDc1GmfjedKxrx8e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
