-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 06:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phase`
--

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE `phase` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`id`, `name`) VALUES
(1, 'dfsdf'),
(2, 'sfsfsd'),
(3, 'fgdsgsdf'),
(4, 'gfghdfg'),
(5, 'sqweqew'),
(6, 'fgdsgsdf'),
(7, 'gfghdfg'),
(8, 'sqweqew'),
(9, 'fgdsgsdf'),
(10, 'gfghdfg'),
(11, 'sqweqew'),
(12, 'fgdsgsdf'),
(13, 'gfghdfg'),
(14, 'sqweqew'),
(15, 'fgdsgsdf'),
(16, 'gfghdfg'),
(17, 'sqweqew'),
(18, 'fgdsgsdf'),
(19, 'gfghdfg'),
(20, 'sqweqew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
