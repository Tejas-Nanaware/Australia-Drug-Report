-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2018 at 11:31 AM
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
-- Table structure for table `drugproblem`
--

DROP TABLE IF EXISTS `drugproblem`;
CREATE TABLE IF NOT EXISTS `drugproblem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DrugType` varchar(50) DEFAULT NULL,
  `A1` float DEFAULT NULL,
  `A2` float DEFAULT NULL,
  `A3` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugproblem`
--

INSERT INTO `drugproblem` (`ID`, `DrugType`, `A1`, `A2`, `A3`) VALUES
(1, '	Alcohol	', 1693, 7602, 11447),
(2, '	Cocaine	', 2734, 1221, 1574),
(3, '	Ecstasy	', 836, 942, 1350),
(4, '	LSD	', 201, 110, 219),
(5, '	Heroin	', 7928, 3969, 2934),
(6, '	Cannabis	', 5779, 232, 1117),
(7, '	Meth	', 4030, 1073, 2368),
(8, '	Tobacco	', 537, 9288, 3951);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
