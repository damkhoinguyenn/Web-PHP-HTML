-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2020 at 12:00 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ch01`
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
(9, 'Dung', 'Kieu', 'kieutuandung@gmail.com', '111', '2020-10-05 10:55:46', '', 0),
(10, 'Dung', 'Kieu', 'kieutuandung2@gmail.com', '$2y$10$bHcBOIdNwi5Oh9Q.heloA.4mbq6qokQPVkICslcMMcv9LH.ALitsO', '2020-10-05 10:58:17', '', 0),
(11, 'Dung', 'Kieu', 'kieutuandung3@gmail.com', '$2y$10$tJz8u5vtRgBAFYls16CstO1cNGkpThf5HF6FpaEIAXYrnUPxQZE9K', '2020-10-05 10:58:33', '', 0),
(12, 'Dung', 'Kieu', 'kieutuandung4@gmail.com', '$2y$10$9.SvRDcyVqxCoH5fNmlVwesQqdt6boEhYDwCtdQnTLIaL0JFcx88O', '2020-10-05 11:01:59', '', 0),
(13, 'Dung', 'Kieu', 'kieutuandung5@gmail.com', '$2y$10$SPrJ.R8fqZhja6UFfkj/HethoXOEaotS4rfl/E4YS8F7GSk3Xn7Oi', '2020-10-05 11:06:26', 'a08c522a5977754c', 0),
(14, 'Dung', 'Kieu', 'web2code2vn@gmail.com', '$2y$10$E5qW3VFD/hT24lwSnwgFaOXCjDo/36J9EKfcX8XD2xuBd.b5gEl9G', '2020-10-05 11:11:50', '4de6314b75c9279e', 1);

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
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
