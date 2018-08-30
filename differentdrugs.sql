-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2018 at 11:47 AM
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
-- Table structure for table `differentdrugs`
--

DROP TABLE IF EXISTS `differentdrugs`;
CREATE TABLE IF NOT EXISTS `differentdrugs` (
  `Categories` varchar(100) DEFAULT NULL,
  `Alcohol` float DEFAULT NULL,
  `Cocaine` float DEFAULT NULL,
  `Ecstasy` float DEFAULT NULL,
  `LSD` float DEFAULT NULL,
  `Heroin` float DEFAULT NULL,
  `Cannabis` float DEFAULT NULL,
  `Meth` float DEFAULT NULL,
  `Tobacco` float DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `differentdrugs`
--

INSERT INTO `differentdrugs` (`Categories`, `Alcohol`, `Cocaine`, `Ecstasy`, `LSD`, `Heroin`, `Cannabis`, `Meth`, `Tobacco`, `ID`) VALUES
('	Drug Problem	', 1693, 2734, 836, 201, 7928, 5779, 4030, 537, 1),
('	Cause of Death	', 7602, 1221, 942, 110, 3969, 232, 1073, 9288, 2),
('	Most Serious Concern	', 11447, 1574, 1350, 219, 2934, 1117, 2368, 3951, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
