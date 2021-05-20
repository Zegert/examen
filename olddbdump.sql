-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2021 at 02:46 PM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex_83504`
--

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `amount_people_in` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`ID`, `date`, `starttime`, `endtime`, `amount_people_in`, `created_at`, `updated_at`) VALUES
(27, '2021-05-21', '11:00:00', '14:00:00', 0, '2021-05-20 08:07:33', '2021-05-20 09:18:29'),
(28, '2021-05-22', '11:00:00', '14:00:00', 0, '2021-05-20 08:07:53', '2021-05-20 10:46:57'),
(29, '2021-05-23', '11:00:00', '14:00:00', 0, '2021-05-20 08:11:28', '2021-05-20 12:45:12'),
(30, '2021-05-25', '13:34:00', '14:34:00', 0, '2021-05-20 09:32:21', '2021-05-20 12:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` int(2) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `adress` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(160) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `rank`, `firstname`, `lastname`, `adress`, `town`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(2, 'test', '$2y$10$xiBmIoAxH.XsuibYVdsXc.xAP9McR3DUBCHe3OjZPKDulKFdy3yKa', 2, 'test', 'test', '', '', '06-12345678', 'test@test.test', '2021-05-20 06:22:50', '2021-05-20 06:23:06'),
(3, 'admin', '$2y$10$xFtJ8i8qan3p7Q.Njomf7ua43hMBXqBvZWTQ.oIEpdMKnX0u.EZoq', 2, 'Admin', 'Admin', '', '', '06-12345677', 'admin@admin.admin', '2021-05-20 09:33:13', '2021-05-20 12:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_on_time`
--

CREATE TABLE `user_on_time` (
  `ID` int(10) NOT NULL,
  `ID_user` int(5) NOT NULL,
  `ID_time` int(10) NOT NULL,
  `cancelled` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `date` (`date`,`starttime`,`endtime`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username_unique` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user_on_time`
--
ALTER TABLE `user_on_time`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_user` (`ID_user`,`ID_time`),
  ADD KEY `ID_time` (`ID_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_on_time`
--
ALTER TABLE `user_on_time`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_on_time`
--
ALTER TABLE `user_on_time`
  ADD CONSTRAINT `user_on_time_ibfk_1` FOREIGN KEY (`ID_time`) REFERENCES `times` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_on_time_ibfk_2` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
