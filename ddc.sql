-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 06:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddc`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer1` (
  `name` varchar(255) NOT NULL,
  `a1` varchar(100) DEFAULT NULL,
  `at1` bigint(255) DEFAULT NULL,
  `a2` varchar(100) DEFAULT NULL,
  `at2` bigint(255) DEFAULT NULL,
  `a3` varchar(100) DEFAULT NULL,
  `at3` bigint(255) DEFAULT NULL,
  `a4` varchar(100) DEFAULT NULL,
  `at4` bigint(255) DEFAULT NULL,
  `a5` varchar(100) DEFAULT NULL,
  `at5` bigint(255) DEFAULT NULL,
  `a6` varchar(100) DEFAULT NULL,
  `at6` bigint(255) DEFAULT NULL,
  `a7` varchar(100) DEFAULT NULL,
  `at7` bigint(255) DEFAULT NULL,
  `a8` varchar(100) DEFAULT NULL,
  `at8` bigint(255) DEFAULT NULL,
  `a9` varchar(100) DEFAULT NULL,
  `at9` bigint(255) DEFAULT NULL,
  `a10` varchar(100) DEFAULT NULL,
  `at10` bigint(255) DEFAULT NULL,
  `a11` varchar(100) DEFAULT NULL,
  `at11` bigint(255) DEFAULT NULL,
  `a12` varchar(100) DEFAULT NULL,
  `at12` bigint(255) DEFAULT NULL,
  `a13` varchar(100) DEFAULT NULL,
  `at13` bigint(255) DEFAULT NULL,
  `a14` varchar(100) DEFAULT NULL,
  `at14` bigint(255) DEFAULT NULL,
  `a15` varchar(100) DEFAULT NULL,
  `at15` bigint(255) DEFAULT NULL,
  `a16` varchar(100) DEFAULT NULL,
  `at16` bigint(255) DEFAULT NULL,
  `a17` varchar(100) DEFAULT NULL,
  `at17` bigint(255) DEFAULT NULL,
  `a18` varchar(100) DEFAULT NULL,
  `at18` bigint(255) DEFAULT NULL,
  `a19` varchar(100) DEFAULT NULL,
  `at19` bigint(255) DEFAULT NULL,
  `a20` varchar(100) DEFAULT NULL,
  `at20` bigint(255) DEFAULT NULL,
  `a21` varchar(100) DEFAULT NULL,
  `at21` bigint(255) DEFAULT NULL,
  `a22` varchar(100) DEFAULT NULL,
  `at22` bigint(255) DEFAULT NULL,
  `a23` varchar(100) DEFAULT NULL,
  `at23` bigint(255) DEFAULT NULL,
  `a24` varchar(100) DEFAULT NULL,
  `at24` bigint(255) DEFAULT NULL,
  `a25` varchar(100) DEFAULT NULL,
  `at25` bigint(255) DEFAULT NULL,
  `a26` varchar(100) DEFAULT NULL,
  `at26` bigint(255) DEFAULT NULL,
  `a27` varchar(100) DEFAULT NULL,
  `at27` bigint(255) DEFAULT NULL,
  `a28` varchar(100) DEFAULT NULL,
  `at28` bigint(255) DEFAULT NULL,
  `a29` varchar(100) DEFAULT NULL,
  `at29` bigint(255) DEFAULT NULL,
  `a30` varchar(100) DEFAULT NULL,
  `at30` bigint(255) DEFAULT NULL,
  `a31` varchar(100) DEFAULT NULL,
  `at31` bigint(255) DEFAULT NULL,
  `a32` varchar(100) DEFAULT NULL,
  `at32` bigint(255) DEFAULT NULL,
  `a33` varchar(100) DEFAULT NULL,
  `at33` bigint(255) DEFAULT NULL,
  `a34` varchar(100) DEFAULT NULL,
  `at34` bigint(255) DEFAULT NULL,
  `a35` varchar(100) DEFAULT NULL,
  `at35` bigint(255) DEFAULT NULL,
  `a36` varchar(100) DEFAULT NULL,
  `at36` bigint(255) DEFAULT NULL,
  `a37` varchar(100) DEFAULT NULL,
  `at37` bigint(255) DEFAULT NULL,
  `a38` varchar(100) DEFAULT NULL,
  `at38` bigint(255) DEFAULT NULL,
  `a39` varchar(100) DEFAULT NULL,
  `at39` bigint(255) DEFAULT NULL,
  `a40` varchar(100) DEFAULT NULL,
  `at40` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `age`, `sex`) VALUES
('admin', 'admin', 21, 'Male'),
('asdfa', 'safg', 21, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer1`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
