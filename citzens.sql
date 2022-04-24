-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 04:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citzens`
--

-- --------------------------------------------------------

--
-- Table structure for table `citzen`
--

CREATE TABLE `citzen` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `idNumber` int(11) DEFAULT NULL,
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
(29, ' sostene', 'ngarukiyimana', 'kwizerapacifique19@gmail.com', 2147483647, '0787938344', '2021-08-04', 'Female', 'DEVORCED', 'NGOMA', 'matyazo', 'rurenda', 'kkkkk', 'TAKE.png'),
(30, ' NGARUKIYIMANA', 'SOSTENE', 'ngarukiyimanasostene@gmail.com', 2147483647, '0787938344', '2021-08-03', 'MALE', 'DEVORCED', 'NGOMA', 'butare', 'gasoro', 'to go near my job', 'Asset 1@2x.png'),
(31, ' NGARUKIYIMANA', 'SOSTENE', 'ngarukiyimanasostene@gmail.com', 2147483647, '0787938344', '0000-00-00', 'MALE', 'DEVORCED', 'NGOMA', 'butare', 'buye', 'to go near my job', 'Asset 1@2x.png');

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
(6, 'ngarukiyimana sostene', 'kwizerapacifique19@gmail.com', 'we prefer your services'),
(7, 'ngarukiyimana sostene', 'kwizerapacifique19@gmail.com', 'we prefer your services');

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
(1, '', 'sostene', '12345'),
(3, 'ngarukiyimanasostene@gmail.com', 'admin', '$2y$10$bxAj9t0.ie6T/HNfemcLweN2XYqRm/YEtdsjpdHcxe1djiDgahfz6'),
(4, 'reteehyjh@gfdd', 'hjggtyu', '$2y$10$LM2MUagaAr/.Uu7rPSl/bu2clk4w.tN87p99owvY5MOKTZuhHgbyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citzen`
--
ALTER TABLE `citzen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citzen`
--
ALTER TABLE `citzen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
