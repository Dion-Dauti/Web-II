-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 13, 2023 at 11:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientId` int(10) DEFAULT NULL,
  `BloodPreasure` tinyint(1) DEFAULT NULL,
  `BloodSugar` tinyint(1) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(128) DEFAULT NULL,
  `Last_name` varchar(200) DEFAULT NULL,
  `Email` varchar(220) DEFAULT NULL,
  `Password_hash` varchar(225) DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Last_name`, `Email`, `Password_hash`, `role`) VALUES
(1, 'test', NULL, 'test@gmail.com', '$2y$10$N46T1gra53xUG.HUUt0eaOA9p9D1xYTpIeepso3tGM9wd0eehBhsW', 'user'),
(3, 'test2', NULL, 'test2@gmail.com', '$2y$10$t747xDgiJ2l/KN8wYe0MjO/OAVIHnVqXPlYkjQbPzzrYER4oHXdQS', 'user'),
(6, 'test', NULL, 'test3@gmail.com', '$2y$10$JIbk2MDGbRs3Q/VCKU687O6FpdPdqN/A81tOpTrdN6Mrqm2FXoqgi', 'user'),
(10, 'test', NULL, 'test4@gmail.com', '$2y$10$xnbso8NBks37dVzk9Rc24eCM3sXYgswagChmiROCvUcljCgM3qnRO', 'user'),
(11, NULL, NULL, '', NULL, 'user'),
(17, NULL, NULL, 'hello@gmail.com', NULL, 'user'),
(24, 'test', NULL, 'test10@gmail.com', '$2y$10$FH7M5EJK4k6mPyKiEqJb.e4Xz387jmbMqMdPMSGYqXt/0DpsVXcY2', 'user'),
(36, 'filani', NULL, 'filani@gmail.com', '$2y$10$Z4NLZyVu.eRgJ6dzSj00IexK/D7kFbTh3iEwONT2ianXSHX6oAZJ6', 'user'),
(37, 'filani2', NULL, 'filani2@gmail.com', '$2y$10$p1h.NATZNm2vRD0ldZlngulPwW/vmPwSIbs4PDWXuAGRb8/JlCezu', 'user'),
(41, 'test123', NULL, 'test123@gmail.com', '$2y$10$KWbHtO.uNAxbBQDrrkSe5OBGiApLfD4kre8wVecw/FyHwZlju5hZK', 'user'),
(43, 'user1', NULL, 'user@gmail.com', '$2y$10$bX9VYdSmWo1W.BwJkD5BlO2xdF68hyuLXf21Qnd0CsqaHFgt6K9Vy', 'user'),
(44, 'grupi1', 'grupi1', 'grupi1@gmail.com', '$2y$10$YLavlKgwcgOo6nMrnPsxHueigN.uLqvHi811ls32Fuf7UrDIy4M9C', 'admin'),
(45, 'test8', NULL, 'test8@gmail.com', '$2y$10$vAbs1/yDKYuru9zpj5WYm.OOdEBOCseZfPkmfaL1q9.ZFGJfYm8Qm', 'user'),
(49, 'hihii', 'hihii', 'hihii1@gmail.com', '$2y$10$DYvizpClNItWHx3mK7wl9uGRIuoXa113bY13h76sD6v/VEyOkoJRe', 'user'),
(50, 'ksv', 'ksv', 'ksv@gmail', '$2y$10$REdGUHoPQsX1UYu9XTE3MO0CE5MQ/xCjI/uFm9o6lW.b5SRHQ5kgy', 'user'),
(51, 'test', 'test', 'testa@gmail.com', '$2y$10$HY2S8HYIq6m1zbz3y5Tjo.ihFf.Za3AruDorkE/LCcpIJjzszGiIO', 'user'),
(52, 'test', 'test', 'testb@gmail.com', '$2y$10$ZmV40WASaulLmn2LLLG.ZO4KteQrSJ8.dqmg8794AVlqtnPeMm/5O', 'user'),
(53, 'test', 'test', 'tetsc@gmail.com', '$2y$10$.CzFVWrpTsU2IUDkf0dEEOKyEBGf2i2SUIfUJQ73qng9x1a5StOW.', 'user'),
(54, 'test', 'testd', 'testd@gmail.com', '$2y$10$f.CVefwIRyuvKIJn0zCfiuyF1Ug663D8TVkhHJvXg9ZL1UTQPtaPG', 'user'),
(55, 'test', 'test', 'teste@gmail.com', '$2y$10$vqd5fmT.zjSWzBiQTU19aOKxyuQ981K45dHKM9zB2o8H/lF/Ek.5m', 'user'),
(56, 'test', 'test', 'testf@gmail.com', '$2y$10$tUriFMcIAcjchuI3QNiT9.TfK9soXbmiT9X8llG1F9.dHks6okwRy', 'user'),
(57, 'test', 'test', 'testt@gmail.com', '$2y$10$yFKTbgSSbe6BPVEFA/0eTOSiSuaIpwLV/wMIdsXq6LK2ud0PX0D/.', 'user'),
(58, 'test', 'test', 'test2d', '$2y$10$Xqx.qPF.za.oriPT/UOnxOQWCbtDFg3zCO0AeB56yf.91/Uw9mSEK', 'user'),
(59, 'test', 'test', 'test', '$2y$10$ykY8ZfHOLlME0Ps6HDUNr.mTgc7rC2PzYFK5RA1nXYi4Nmm72ioT6', 'user'),
(60, 'test', 'test', 'test2', '$2y$10$TdHRD5Qi4NYN4YJlDzjf4OdW1fElU37m9twmGNZkRvbXxsnm1THnG', 'user'),
(61, 'test', 'test', 'uebi2@gmail.com', '$2y$10$rx.6N9ycEJQm3iYSmZTrWuAsgNmlruE7Isnj1UtsYYxScaKB3IxX.', 'user'),
(62, 'test', 'test', 'uebi1@gmail.com', '$2y$10$BEPbxUzzhbGvN/e.s6S8U./vxeqBEXChTSerBelCaNYnFSil2ABDq', 'user'),
(63, 'test', 'test', 'knk1@gmail.com', '$2y$10$hYhL1zu9DmYZ7/sAwwCoCur4XhhQn2Rv4Ahnitfzpc4CzeFb2iIt2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
