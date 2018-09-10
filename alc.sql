-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 10:35 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drugex`
--

-- --------------------------------------------------------

--
-- Table structure for table `alc`
--

CREATE TABLE `alc` (
  `AlcoholStatsID` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Population` double NOT NULL,
  `Alcoholics` double NOT NULL,
  `A/P` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alc`
--

INSERT INTO `alc` (`AlcoholStatsID`, `Year`, `Population`, `Alcoholics`, `A/P`) VALUES
(1, 2000, 19.153, 1, 0.052),
(2, 2001, 19.413, 2, 0.103),
(3, 2002, 19.651, 3, 0.153),
(4, 2003, 19.895, 5, 0.251),
(5, 2004, 20.127, 7, 0.348),
(6, 2005, 20.395, 9, 0.441),
(7, 2006, 20.698, 11, 0.531),
(8, 2007, 20.828, 12, 0.576),
(9, 2008, 21.249, 45, 2.118),
(10, 2009, 21.692, 56, 2.582),
(11, 2010, 22.032, 78, 3.54),
(12, 2011, 2.34, 235, 100.427),
(13, 2012, 22.743, 4545, 199.846),
(14, 2013, 23.146, 32443, 1401.67),
(15, 2014, 23.504, 45456, 1933.96),
(16, 2015, 23.851, 45534, 1909.12),
(17, 2016, 24.211, 55543, 2294.14),
(18, 2017, 24.599, 67435, 2741.38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alc`
--
ALTER TABLE `alc`
  ADD PRIMARY KEY (`AlcoholStatsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alc`
--
ALTER TABLE `alc`
  MODIFY `AlcoholStatsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
