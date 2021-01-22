-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2021 at 06:00 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_bonafide`
--

DROP TABLE IF EXISTS `accepted_bonafide`;
CREATE TABLE IF NOT EXISTS `accepted_bonafide` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepted_bonafide`
--

INSERT INTO `accepted_bonafide` (`id`, `firstname`, `lastname`, `branch`, `class`, `rollno`, `prn`, `number`, `date`, `reason`, `status`) VALUES
(28, 'vishal ', 'jadhav', 'Computer Science ', 'TE ', '22 ', '2017032500241273 ', '9097890897 ', '2020-03-06', 'family function ', 'Accepted'),
(29, 'vishal ', 'jadhav', 'Computer Science ', 'TE ', '22 ', '2017032500241273 ', '9097890897 ', '2020-03-13', 'Marriage aniversary ', 'Accepted'),
(30, 'vishal ', 'jadhav', 'Computer Science ', 'TE ', '22 ', '2017032500241273 ', '9097890897 ', '2020-03-14', 'family function ', 'Accepted'),
(31, 'vishal ', 'jadhav', 'Computer Science ', 'TE ', '22 ', '2017032500241273 ', '9097890897 ', '2020-03-06', 'family function ', 'Accepted'),
(32, 'vishal ', 'jadhav', 'Computer Science ', 'BE ', '04 ', '2017032500241273 ', '9049353922 ', '1122-02-11', 'any ', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `accepted_leave`
--

DROP TABLE IF EXISTS `accepted_leave`;
CREATE TABLE IF NOT EXISTS `accepted_leave` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepted_leave`
--

INSERT INTO `accepted_leave` (`id`, `firstname`, `lastname`, `branch`, `class`, `rollno`, `prn`, `number`, `datefrom`, `dateto`, `timefrom`, `timeto`, `reason`, `status`) VALUES
(11, 'Ajay ', 'Shete', 'Computer Science ', 'TE ', '06 ', '2017032500241845 ', '9096901847 ', '2020-12-31', '2020-12-31', '00:59:00', '12:59:00', 'family function ', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `accepted_nightout`
--

DROP TABLE IF EXISTS `accepted_nightout`;
CREATE TABLE IF NOT EXISTS `accepted_nightout` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `prn` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `rmno` varchar(10) NOT NULL,
  `nights` varchar(10) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepted_nightout`
--

INSERT INTO `accepted_nightout` (`id`, `firstname`, `lastname`, `prn`, `address`, `number`, `pnumber`, `rmno`, `nights`, `datefrom`, `dateto`, `reason`, `status`) VALUES
(10, 'Prathamesh ', 'Jadhav', '2017032500242036', 'A/P Karkamb Ambe Mala ', '7262078311 ', '9049613511 ', '80 ', '3', '2020-02-20', '2020-02-23', 'family function ', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `bonafideform`
--

DROP TABLE IF EXISTS `bonafideform`;
CREATE TABLE IF NOT EXISTS `bonafideform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(3) NOT NULL,
  `prn` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deny_bonafide`
--

DROP TABLE IF EXISTS `deny_bonafide`;
CREATE TABLE IF NOT EXISTS `deny_bonafide` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deny_bonafide`
--

INSERT INTO `deny_bonafide` (`id`, `firstname`, `lastname`, `branch`, `class`, `rollno`, `prn`, `number`, `date`, `reason`, `status`) VALUES
(7, 'vishal ', 'jadhav', 'Computer Science ', 'TE ', '22 ', '2017032500241273 ', '9097890897 ', '2020-03-07', 'pass ', 'Deny');

-- --------------------------------------------------------

--
-- Table structure for table `deny_leave`
--

DROP TABLE IF EXISTS `deny_leave`;
CREATE TABLE IF NOT EXISTS `deny_leave` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deny_leave`
--

INSERT INTO `deny_leave` (`id`, `firstname`, `lastname`, `branch`, `class`, `rollno`, `prn`, `number`, `datefrom`, `dateto`, `timefrom`, `timeto`, `reason`, `status`) VALUES
(3, 'Prathamesh ', 'Jadhav', 'Computer Science ', 'TE ', '05 ', '2017032500242036 ', '7262078311 ', '2020-02-06', '2020-02-08', '03:02:00', '03:10:00', 'family function  ', 'Deny');

-- --------------------------------------------------------

--
-- Table structure for table `deny_nightout`
--

DROP TABLE IF EXISTS `deny_nightout`;
CREATE TABLE IF NOT EXISTS `deny_nightout` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `prn` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `rmno` varchar(10) NOT NULL,
  `nights` varchar(10) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod_login`
--

DROP TABLE IF EXISTS `hod_login`;
CREATE TABLE IF NOT EXISTS `hod_login` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod_login`
--

INSERT INTO `hod_login` (`userid`, `password`) VALUES
('csehod', 'csehod@123'),
('csehod', 'csehod123');

-- --------------------------------------------------------

--
-- Table structure for table `leaveform`
--

DROP TABLE IF EXISTS `leaveform`;
CREATE TABLE IF NOT EXISTS `leaveform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(5) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `reason` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nightoutform`
--

DROP TABLE IF EXISTS `nightoutform`;
CREATE TABLE IF NOT EXISTS `nightoutform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `prn` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(15) NOT NULL,
  `pnumber` varchar(15) NOT NULL,
  `rmno` varchar(5) NOT NULL,
  `nights` varchar(5) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `reason` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `principal_login`
--

DROP TABLE IF EXISTS `principal_login`;
CREATE TABLE IF NOT EXISTS `principal_login` (
  `id` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal_login`
--

INSERT INTO `principal_login` (`id`, `userid`, `password`) VALUES
('1', 'principal', 'principal123');

-- --------------------------------------------------------

--
-- Table structure for table `rector_login`
--

DROP TABLE IF EXISTS `rector_login`;
CREATE TABLE IF NOT EXISTS `rector_login` (
  `id` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rector_login`
--

INSERT INTO `rector_login` (`id`, `userid`, `password`) VALUES
('1', 'hostel1', 'hostel1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `branch` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `prn` varchar(255) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `dob`, `branch`, `class`, `rollno`, `prn`, `number`, `email`, `password`) VALUES
(60, 'vishal', 'jadhav', '1999-07-21', 'Computer Science', 'BE', '04', '2017032500241273', '9049353922', 'vishal@gmail.com', 'Vishal@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
