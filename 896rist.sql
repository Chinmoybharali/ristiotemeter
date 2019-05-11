-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 09:19 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `896rist`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE IF NOT EXISTS `consumer` (
  `CID` varchar(10) NOT NULL,
  `CName` varchar(30) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(21) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `CType` varchar(10) DEFAULT NULL,
  `MID` varchar(10) DEFAULT NULL,
  `Unit` int(10) DEFAULT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`CID`, `CName`, `Address`, `ContactNo`, `email`, `area`, `CType`, `MID`, `Unit`) VALUES
('C001', 'CHINMOY', 'RIST, CAMOUS', '32423423423', 'dad@dd.com', NULL, 'Domestic', 'M001', 13),
('C002', 'PARI CHETIA', 'GHAR', '4r42432', 'ss@aa.com', NULL, 'Domestic', 'M002', 0),
('C003', 'KUHIMA BEGUM', 'RIST', '243232423', 'k@ma.com', NULL, 'Domestic', 'M003', 0);

-- --------------------------------------------------------

--
-- Table structure for table `datalog`
--

CREATE TABLE IF NOT EXISTS `datalog` (
  `SLID` int(10) NOT NULL AUTO_INCREMENT,
  `Dated` date DEFAULT NULL,
  `TimeStamp` varchar(20) DEFAULT NULL,
  `MID` varchar(10) DEFAULT NULL,
  `CID` varchar(10) DEFAULT NULL,
  `UNIT` int(10) DEFAULT NULL,
  PRIMARY KEY (`SLID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `datalog`
--

INSERT INTO `datalog` (`SLID`, `Dated`, `TimeStamp`, `MID`, `CID`, `UNIT`) VALUES
(1, '0000-00-00', '08:39:17', 'M001$UNIT=', 'ERR_05', 0),
(2, '0000-00-00', '08:39:41', 'M001', 'ERR_05', 6),
(3, '0000-00-00', '08:40:58', 'M001', 'C001', 6),
(4, '2019-05-09', '08:41:43', 'M001', 'C001', 6),
(5, '2019-05-09', '12:12:47', 'M001', 'C001', 7),
(6, '2019-05-09', '12:17:42', 'M001', 'C001', 8),
(7, '2019-05-09', '12:22:24', 'M001', 'C001', 11),
(8, '2019-05-09', '12:47:00', 'M001', 'C001', 12),
(9, '2019-05-09', '12:47:12', 'M001', 'C001', 13);

-- --------------------------------------------------------

--
-- Table structure for table `meter`
--

CREATE TABLE IF NOT EXISTS `meter` (
  `MID` varchar(10) NOT NULL,
  `Capacity` varchar(10) DEFAULT NULL,
  `UNIT` int(10) DEFAULT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter`
--

INSERT INTO `meter` (`MID`, `Capacity`, `UNIT`) VALUES
('M001', '1 KV', 2),
('M002', '1 KV', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` varchar(10) NOT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `UserType` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `UserType`) VALUES
('admin', 'Administrator', '1234', 'ADMIN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
