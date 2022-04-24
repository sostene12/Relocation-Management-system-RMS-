-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 10:33 AM
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
-- Database: `relocation`
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
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(31, ' NGARUKIYIMANA', 'SOSTENE', 'ngarukiyimanasostene@gmail.com', 2147483647, '0787938344', '0000-00-00', 'MALE', 'DEVORCED', 'NGOMA', 'butare', 'buye', 'to go near my job', 'Asset 1@2x.png'),
(32, ' NGARUKIYIMANA', 'SOSTENE', 'ngarukiyimanasostene@gmail.com', 2147483647, '0787938344', '2021-08-07', 'MALE', 'DEVORCED', 'NGOMA', 'butare', 'bukinanyana', 'job activities', 'LOGO 2.png'),
(33, ' NGARUKIYIMANA', 'SOSTENE', 'ngarukiyimanasostene@gmail.com', 2147483647, '0787938344', '2021-08-07', 'MALE', 'DEVORCED', 'NGOMA', 'butare', 'bukinanyana', 'job activities', 'LOGO 2.png');

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
(5, '', '', '$2y$10$cILUHVq1TunqOojxe9HUJuInm2/jjAx2jhVKb4KMScdWm9E705nxa'),
(6, '', '', '$2y$10$y0Mim3K3cSjqFL.X7ZD.4uHDOHoSU3K5FQQY99CaPzOBqb4SuBs0i'),
(7, 'kwizerapacifique19@gmail.com', 'paccy', '$2y$10$08SUngZ/vqOCy3sDDPbNveH/XDMM72ZZNxiRC7azIaOAL2xCIvPoa'),
(8, 'ngarukiyimanasostene@gmail.com', 'sostene', '$2y$10$Uk50d50mwYECWmYReJUVK.EdC8vcpQYpFxdEDZHJO6HYUGdxSw3c.'),
(9, 'hafashimanagermain@gmail.com', 'germain', '$2y$10$Ebcp43HxPFDXQN77MVA/7ufI35uwqjh1mEuau6jbf3btF1VkMKvq.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`idnumber`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citzen`
--
ALTER TABLE `citzen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
