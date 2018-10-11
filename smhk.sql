-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 04:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smhk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppp`
--

CREATE TABLE `ppp` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `zero` float DEFAULT NULL,
  `six` float DEFAULT NULL,
  `twelve` float DEFAULT NULL,
  `eightteen` float DEFAULT NULL,
  `twentyfour` float DEFAULT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppp`
--

INSERT INTO `ppp` (`id`, `tanggal`, `zero`, `six`, `twelve`, `eightteen`, `twentyfour`, `location`) VALUES
(5, '2018-10-03', 0, 0, 699.978, 1313.58, 10000, 'B-02'),
(6, '2018-10-05', 0, 0, 1000, 666, 777, 'B-02'),
(7, '2018-10-07', 0, 0, 1000, 12344, 12222, 'B-02'),
(8, '2018-10-08', 0, 0, 2018, 2018, 2018, 'B-02'),
(9, '2018-10-09', 0, 0, 1000, 1200, 1300, 'B-02');

-- --------------------------------------------------------

--
-- Table structure for table `spub`
--

CREATE TABLE `spub` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `zero` float DEFAULT NULL,
  `six` float DEFAULT NULL,
  `twelve` float DEFAULT NULL,
  `eightteen` float DEFAULT NULL,
  `twentyfour` float DEFAULT NULL,
  `nama_tangki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spub`
--

INSERT INTO `spub` (`id`, `tanggal`, `zero`, `six`, `twelve`, `eightteen`, `twentyfour`, `nama_tangki`) VALUES
(2, '2018-10-01', 100, 120, 150, 180, 200, 'B-02'),
(3, '2018-10-02', 0, 100, 35, 78, 294.342, 'B-02'),
(30, '2018-10-03', 294.342, 299.245, 299.242, 303.233, 294.342, 'B-02'),
(37, '2018-10-05', 0, 306, 212, 281, 422, 'B-02'),
(38, '2018-10-07', 0, 123, 1240, 12345, 12345, 'B-02'),
(41, '2018-10-08', 0, 1000, 2000, 3000, 4000, 'B-03'),
(42, '2018-10-08', 0, 2000, 3000, 4000, 5000, 'B-04'),
(43, '2018-10-08', 12345, 12343, 1001, 2002, 3003, 'B-02'),
(44, '2018-10-08', 0, 100000, 123445, 1234570, 12332, 'TOS-UMM'),
(45, '2018-10-08', 0, 123, 1234, 12334, 123455, 'M-1'),
(46, '2018-10-08', 0, 123, 122, 1211, 1231, 'B-1'),
(47, '2018-10-08', 0, 2018, 2019, 2020, 2021, 'C-2'),
(48, '2018-10-08', 0, 1990, 1991, 1992, 1993, 'A-1'),
(49, '2018-10-08', 0, 2001, 2002, 2003, 2004, 'D'),
(50, '2018-10-09', 3003, 3005, 3008, 3010, 3020, 'B-02'),
(51, '2018-10-10', 3020, 3021, NULL, NULL, NULL, 'B-02'),
(52, '2018-10-10', 0, 2018, NULL, NULL, NULL, 'B-03'),
(53, '2018-10-10', 0, 2017, NULL, NULL, NULL, 'B-04'),
(54, '2018-10-11', 0, 1000, 1021, 1025, NULL, 'B-02'),
(55, '2018-10-11', 0, 21, NULL, NULL, NULL, 'C-2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppp`
--
ALTER TABLE `ppp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spub`
--
ALTER TABLE `spub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppp`
--
ALTER TABLE `ppp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spub`
--
ALTER TABLE `spub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
