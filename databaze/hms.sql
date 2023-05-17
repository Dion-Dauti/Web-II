-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 16, 2023 at 02:27 AM
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
  `userId` bigint(20) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `Message`) VALUES
(1, NULL, 3, 3, NULL, 'dfsagd'),
(2, NULL, 1, 36, NULL, 'DionDAUIT BOSSI I BONI FIX BUGS'),
(3, NULL, 2, 36, NULL, 'Filani po ka dhimbjem koke');

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

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `docEmail`) VALUES
(1, 'Surgery', 'Soren Bo Bostian', 'soren@gmail.com'),
(2, 'Internal Diseases', 'Bryan Saftler', 'totallynotbrayan@gmail.com'),
(3, 'Orthopedics', 'Matthew Bayliss', 'matthew12:1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`) VALUES
(2, 'Internal Diseases'),
(3, 'Orthopedics'),
(1, 'Surgery');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientId` bigint(20) DEFAULT NULL,
  `BloodPreasure` tinyint(1) DEFAULT NULL,
  `BloodSugar` tinyint(1) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientId`, `BloodPreasure`, `BloodSugar`, `CreationDate`) VALUES
(1, 1, 1, 0, '2023-05-14 15:54:18'),
(2, 36, 0, 0, '2023-05-14 15:54:18'),
(3, 6, 1, 1, '2023-05-14 15:54:18');

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
(36, 'filani', NULL, 'filani@gmail.com', '$2y$10$Z4NLZyVu.eRgJ6dzSj00IexK/D7kFbTh3iEwONT2ianXSHX6oAZJ6', 'user'),
(45, 'test8', NULL, 'test8@gmail.com', '$2y$10$vAbs1/yDKYuru9zpj5WYm.OOdEBOCseZfPkmfaL1q9.ZFGJfYm8Qm', 'user'),
(49, 'hihii', 'hihii', 'hihii1@gmail.com', '$2y$10$DYvizpClNItWHx3mK7wl9uGRIuoXa113bY13h76sD6v/VEyOkoJRe', 'user'),
(50, 'ksv', 'ksv', 'ksv@gmail', '$2y$10$REdGUHoPQsX1UYu9XTE3MO0CE5MQ/xCjI/uFm9o6lW.b5SRHQ5kgy', 'user'),
(51, 'test', 'test', 'testa@gmail.com', '$2y$10$HY2S8HYIq6m1zbz3y5Tjo.ihFf.Za3AruDorkE/LCcpIJjzszGiIO', 'user'),
(52, 'test', 'test', 'testb@gmail.com', '$2y$10$ZmV40WASaulLmn2LLLG.ZO4KteQrSJ8.dqmg8794AVlqtnPeMm/5O', 'user'),
(53, 'test', 'test', 'tetsc@gmail.com', '$2y$10$.CzFVWrpTsU2IUDkf0dEEOKyEBGf2i2SUIfUJQ73qng9x1a5StOW.', 'user'),
(54, 'test', 'testd', 'testd@gmail.com', '$2y$10$f.CVefwIRyuvKIJn0zCfiuyF1Ug663D8TVkhHJvXg9ZL1UTQPtaPG', 'user'),
(56, 'test', 'test', 'testf@gmail.com', '$2y$10$tUriFMcIAcjchuI3QNiT9.TfK9soXbmiT9X8llG1F9.dHks6okwRy', 'user'),
(57, 'test', 'test', 'testt@gmail.com', '$2y$10$yFKTbgSSbe6BPVEFA/0eTOSiSuaIpwLV/wMIdsXq6LK2ud0PX0D/.', 'user'),
(132, 'Dion', NULL, 'fknskjf@gmail.com', '$2y$10$DmEbDILPeNkP6nUQcWclAeqn8RlGmhSrC0REYzJyaeW/2sDHY6MH2', 'user'),
(135, 'jndsfkajf', NULL, 'dion@gmail.com', '$2y$10$ditSR6y.BLM0Q/NkbtdyWu167iSmpqPpdAHq5OvtKjbXUeuGJYUx2', 'user'),
(136, 'dasg', NULL, 'outer@gmail.com', '$2y$10$fF/yra2UWucti3spqajQHuENyU8U6yvfzuFgymrwurGMyJ4QwagEC', 'user'),
(137, 'Artur', NULL, 'artur@gmail.com', '$2y$10$LkzwCyYnrpVAH9vUBBGGNeSj7gyJftkvyJBzbfSWKmsePy/BUwDzi', 'admin'),
(138, 'Dion', NULL, 'diondauti@gmail.com', '$2y$10$EFDVhAlRADVzeRM4poppyOrqw4bPnkTF4o3VEKQVU.w8Tv2EhsEOq', 'admin'),
(139, 'Dion', 'Dauti', 'diondauti123@gmail.com', '$2y$10$ZCJFJ1CISmmrI8wii9UeC.RzaizkLQ/0NU6jZcgIZv/6ZpolRgJYy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c1` (`doctorId`),
  ADD KEY `c2` (`userId`),
  ADD KEY `c4` (`doctorSpecialization`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c3` (`specilization`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `specilization` (`specilization`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c6` (`useremail`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `c5` (`PatientId`);

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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `c1` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `c2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `c4` FOREIGN KEY (`doctorSpecialization`) REFERENCES `doctorspecilization` (`specilization`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `c3` FOREIGN KEY (`specilization`) REFERENCES `doctorspecilization` (`specilization`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `c6` FOREIGN KEY (`useremail`) REFERENCES `users` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD CONSTRAINT `c5` FOREIGN KEY (`PatientId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
