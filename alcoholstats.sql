-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2018 at 03:34 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

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
-- Table structure for table `alcoholstats`
--

DROP TABLE IF EXISTS `alcoholstats`;
CREATE TABLE IF NOT EXISTS `alcoholstats` (
  `AlcoholStatsID` int(11) NOT NULL AUTO_INCREMENT,
  `_2000` float DEFAULT NULL,
  `_2001` float DEFAULT NULL,
  `_2002` float DEFAULT NULL,
  `_2003` float DEFAULT NULL,
  `_2004` float DEFAULT NULL,
  `_2005` float DEFAULT NULL,
  `_2006` float DEFAULT NULL,
  `_2007` float DEFAULT NULL,
  `_2008` float DEFAULT NULL,
  `_2009` float DEFAULT NULL,
  `_2010` float DEFAULT NULL,
  `_2011` float DEFAULT NULL,
  `_2012` float DEFAULT NULL,
  `_2013` float DEFAULT NULL,
  `_2014` float DEFAULT NULL,
  `_2015` float DEFAULT NULL,
  `_2016` float DEFAULT NULL,
  `_2017` float DEFAULT NULL,
  PRIMARY KEY (`AlcoholStatsID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alcoholstats`
--

INSERT INTO `alcoholstats` (`AlcoholStatsID`, `_2000`, `_2001`, `_2002`, `_2003`, `_2004`, `_2005`, `_2006`, `_2007`, `_2008`, `_2009`, `_2010`, `_2011`, `_2012`, `_2013`, `_2014`, `_2015`, `_2016`, `_2017`) VALUES
(1, 19.153, 19.413, 19.6514, 19.8954, 20.1274, 20.3948, 20.6979, 20.8276, 21.2492, 21.6917, 22.0318, 2.34, 22.7425, 23.1459, 23.5041, 23.8508, 24.2108, 24.5989),
(2, 1, 2, 3, 5, 7, 9, 11, 12, 45, 56, 78, 235, 4545, 32443, 45456, 45534, 55543, 67435),
(3, 0.0522111, 0.103024, 0.152661, 0.251314, 0.347785, 0.441289, 0.531455, 0.576159, 2.11773, 2.58163, 3.54034, 100.427, 199.846, 1401.67, 1933.96, 1909.12, 2294.14, 2741.38);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;