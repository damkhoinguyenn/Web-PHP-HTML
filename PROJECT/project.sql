-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 04:42 PM
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
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `Id` smallint(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Gender` tinyint(2) NOT NULL,
  `Birthday` date NOT NULL,
  `Ethnic` varchar(50) NOT NULL,
  `Relligion` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Yeargra` date NOT NULL,
  `Rank12` varchar(50) NOT NULL,
  `Att12` varchar(50) NOT NULL,
  `CMND` varchar(50) NOT NULL,
  `DataCMND` date NOT NULL,
  `PlaceCMND` varchar(50) NOT NULL,
  `BornPlace` varchar(50) NOT NULL,
  `Year10` date NOT NULL,
  `CodeSchool10` varchar(50) NOT NULL,
  `Year11` date NOT NULL,
  `CodeSchool11` varchar(50) NOT NULL,
  `Year12` date NOT NULL,
  `CodeSchool12` varchar(50) NOT NULL,
  `PlaceContact` varchar(50) NOT NULL,
  `PhoneStudents` varchar(50) NOT NULL,
  `PhoneParent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`Id`, `FullName`, `Gender`, `Birthday`, `Ethnic`, `Relligion`, `Place`, `Yeargra`, `Rank12`, `Att12`, `CMND`, `DataCMND`, `PlaceCMND`, `BornPlace`, `Year10`, `CodeSchool10`, `Year11`, `CodeSchool11`, `Year12`, `CodeSchool12`, `PlaceContact`, `PhoneStudents`, `PhoneParent`) VALUES
(1, 'qweqwe', 1, '0000-00-00', 'sdasdadasd', 'asdasd', 'adasdas', '0000-00-00', 'dadasdad', 'adasdsa', 'dsadsad', '2020-11-11', 'dsadad', 'asdasd', '2020-11-02', 'asdasd', '2020-11-17', 'asdsadsa', '2020-11-11', 'asdsadas', 'dsadsad', 'asdadas', 'dsadasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `UserId` int(6) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`UserId`, `FullName`, `Email`, `Password`) VALUES
(1, 'Dam Nguyen', 'dammit2525@gmail.com', 'Damnguyen26'),
(2, 'Tran Cong Tin', 'Tintran2211@gmail.com', 'TranTin2211'),
(3, 'Nguyen Dam', 'dammit2525@gmail.com', 'Nguyen26'),
(4, 'asdasd', 'asdasdasd', 'asdasdasda'),
(5, 'Nguyen', 'dammit2525@yahoo.com.vn', '$2y$10$Eu77kP2vtiO51uPAVbNkb.cmFJhxlJu.D6GSdhmw/P1'),
(6, 'Nguyen', 'dammit@gmail.com', '$2y$10$rzn.2rtqcr/J8kBqu7c0i.prB4Etcs8vIBFym/gfq26'),
(7, 'Nguyen Dam', 'dammit2@gmail.com', '$2y$10$x.EeJD3jfrSZfv4Y5Ygwfevn7RftrnPI/rUFN3OIMrL'),
(8, 'Nguyen Dam', 'dammit25@gmail.com', '$2y$10$w04HCC7VbxHAubcJXe1m3uSK/e5ShI0tv7EzOz5OECU'),
(9, 'Nguyen Dam', 'dammit255@gmail.com', '$2y$10$ZV5LUzRtmum8ZMyd8hd7fe1HmA30nQ4TbaPvPTiSKmx'),
(10, 'Nguyen Dam', 'dam@gmail.com', '$2y$10$9rTQRkPxvSCkIvPAQlDqK.z4XArbDc1GmfjedKxrx8e'),
(11, 'Nguyen Dam', 'asdasdasdas@gmail.com', '$2y$10$lj.bfS64QZr2xthcTsDzrOZtEmdR1vWmYZgaLOEUaB6'),
(12, 'Nguyen Dam', 'asdasdasdasd525@gmail.com', '$2y$10$.HGmGZsQerL9Sx3Y.pCXgeIMnFI9h66oWyieDd9x1yp'),
(13, 'Nguyen Dam', 'damfdsgsdafsadf@gmail.com', '$2y$10$mm5q2I26C3xiiGzb2Nfp5egDRWjDTNAk3gWn/CBTUiS');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Id` tinyint(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Id`, `FullName`, `Email`, `Password`) VALUES
(1, 'Nguyen', 'dammit2525@gmail.com', 'Damnguyen26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `Id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `UserId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
