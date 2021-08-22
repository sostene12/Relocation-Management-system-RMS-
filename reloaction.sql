-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reloaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `idnumber` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`idnumber`, `firstname`, `lastname`, `gender`, `status`, `sector`, `cell`, `village`, `date`, `email`) VALUES
(2147483647, ' ngarukiyimana', ' sostene', ' MALE', 'SINGLE', 'NGOMA', 'kaburemera', 'gatoki', '2021-08-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `citzen`
--

CREATE TABLE `citzen` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `idNumber` varchar(25) DEFAULT NULL,
  `phoneNumber` varchar(12) DEFAULT NULL,
  `moveDate` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `maritalStatus` text DEFAULT NULL,
  `sector` text DEFAULT NULL,
  `cell` text DEFAULT NULL,
  `village` text DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `fileUpload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citzen`
--

INSERT INTO `citzen` (`id`, `firstName`, `lastName`, `email`, `idNumber`, `phoneNumber`, `moveDate`, `gender`, `maritalStatus`, `sector`, `cell`, `village`, `reason`, `fileUpload`) VALUES
(1, ' ngarukiyimana', 'sostene', 'ngarukiyimanasostene@gmail.com', '2147483647', '0787938344', '2021-08-01', 'MALE', 'SINGLE', 'NGOMA', 'kaburemera', 'gatoki', 'job activities', '02-Activation.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fullName` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `problem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullName`, `email`, `problem`) VALUES
(10, 'ngarukiyimana sostene', 'ngarukiyimanasostene@gmail.com', 'how many days does it take to be answered when you have submitted request');

-- --------------------------------------------------------

--
-- Table structure for table `exaddress`
--

CREATE TABLE `exaddress` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phonenumber` varchar(10) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `cell` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exaddress`
--

INSERT INTO `exaddress` (`firstname`, `lastname`, `gender`, `email`, `phonenumber`, `sector`, `cell`, `village`) VALUES
('ngarukiyimana', 'sostene', 'male', 'ngarukiyimanasostene@gmail.com', '0787938344', 'NGOMA', 'kaburemera', 'gatoki');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(0, 'ngarukiyimanasostene@gmail.com', 'sostene', '$2y$10$1WUSXaq9AOOkteZ5PkxhiegKbl1rR2dPo.YxWVWHHQdLRefkgOJSC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`idnumber`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citzen`
--
ALTER TABLE `citzen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `exaddress`
--
ALTER TABLE `exaddress`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`),
  ADD KEY `email_4` (`email`),
  ADD KEY `email_5` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `citzen`
--
ALTER TABLE `citzen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
