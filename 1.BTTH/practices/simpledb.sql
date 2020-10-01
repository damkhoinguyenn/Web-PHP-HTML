-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2020 at 03:31 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `activation_code`, `status`) VALUES
(1, 'Steve', 'Johnson', 'sjohnson@sjohnson.com', '$2y$10$lEmRKPYfu/Nb6ECtbmp7YOuIZeZDYuCnZKRmEBnQ6nRHDKJHdEgMK', '2018-04-26 15:11:58', '', 0),
(2, 'Mike', 'Rosolt', 'mrosolf@someplace.com', '$2y$10$9lXam45bwNHu4/zbu5FdXuW243F1R0GkQBDJr/juvV8wYr6lMZbau', '2018-04-28 15:15:32', '', 0),
(3, 'Tweedle', 'Dee-Deest', 'tdeedeest@themail.com', '$2y$10$.ewnSKbbeP6lSI4UF0BasOTnDyLzBH8mwcDM3wEM1hzoJAXYz2doK', '2018-04-28 15:17:29', '', 0),
(4, 'Annie', 'Versary', 'aversary@outcook.com', '$2y$10$5yz6IiFq/uZR4VdacjVRbOWTIA5tZCSLZ975mGZCoas3UHMMojN46', '2018-04-28 15:18:17', '', 0),
(5, 'Charley', 'Farnsbarns', 'cfransnarns@outcook.com', '$2y$10$WFX630.YbR5WQcYNBnMMueIbjIbo5.C6aDkUKVUfXBC1oNrqasmWa', '2018-04-28 15:19:50', '', 0),
(9, 'Dung', 'Kieu Tuan', 'dungkt@tlu.edu.vn', '$2y$10$zib1KsH9bd8Uwff2alV0M.4yWO74prl2zl10IzLKR9sZ33nFYHI1.', '2020-09-29 13:20:48', '', 0),
(10, 'Dung', 'Kieu', 'dungkt@tlu.edu.vn', '$2y$10$O6rh7NZXmNotsqau5FFv4OqBvucgVg5VQwVCc6QyztPTTWfHVmIFe', '2020-09-29 14:25:03', '', 0),
(11, 'Dung', 'Kieu', 'dungkt2@tlu.edu.vn', '$2y$10$UpkvSVR2B5JKBKUiOo5BxeV/4l6bqj.vRsBOWhpWxyEkwHCsBTGpi', '2020-09-29 14:25:27', '', 0),
(12, 'Dung', 'Kieu', 'dungkt3@tlu.edu.vn', '$2y$10$F8.e/KHpkADc5BjhK0AtfeINt4aCdhjdxfAz6TsXvMX2iu6BGETaG', '2020-09-29 14:29:10', '', 0),
(13, 'Dung', 'Kieu', 'dungkt@tlu.edu.vn', '$2y$10$IEmK57I/4D3Ji0qfJ2fmJudkmsf2GQAKV1nxf2bcxIyu/sFjZQtoG', '2020-09-29 14:30:17', '', 0),
(14, 'Dung', 'Kieu', 'dungkt4@tlu.edu.vn', '$2y$10$8nOTWitFoH.HtDkuG8FvPu7JqXLtbmtiUeL5Aq5YI8M6HE4DfHF1a', '2020-09-29 14:39:34', '4e62e663232251c7', 0),
(15, 'Dung', 'Kieu', 'dungkt5@tlu.edu.vn', '$2y$10$5L1QcZSwPdP7Ta1ybDzzy.WMev/CAF9pbxRFuB64hYWiV2OGehRLG', '2020-09-29 14:57:05', 'f22629b8f47cbe95', 0),
(17, 'Dung', 'Kieu', 'web2code2vn@gmail.com', '$2y$10$s8QjIaRO8hNFs95m4qtAHOVJFUjS8RKs6FwSO3KGQ9auMSWx5h3YO', '2020-09-29 14:59:38', 'ac24fd7825b082e7', 1),
(18, 'Dung', 'Kieu', 'web2code2vn@gmail.com', '$2y$10$8StDjdyaMCbf1qwFk5uiCOrwrvAyG0b4UxfpfeHNok5YilXot.tM6', '2020-09-29 15:29:33', 'a0ea6930f393a9a0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
