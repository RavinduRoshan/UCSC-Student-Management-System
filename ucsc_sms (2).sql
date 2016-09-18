-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 10:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ucsc_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `2012cs1`
--

CREATE TABLE IF NOT EXISTS `2012cs1` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs1`
--

INSERT INTO `2012cs1` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS1000', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS1000', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS1000', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS1000', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS1000', 63, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs1gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs1gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs1gpa`
--

INSERT INTO `2012cs1gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 7.5, 7.5, 2),
(12000023, 3.75, 3.75, 7.5, 7.5, 2),
(12000033, 4, 4, 8, 8, 2),
(12000043, 2.25, 2.25, 4.5, 4.5, 2),
(12000053, 2.75, 2.75, 5.5, 5.5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs2`
--

CREATE TABLE IF NOT EXISTS `2012cs2` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs2`
--

INSERT INTO `2012cs2` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS1001', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS1001', 65, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS1001', 76, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS1001', 53, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS1001', 71, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs2gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs2gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs2gpa`
--

INSERT INTO `2012cs2gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 7.5, 7.5, 2),
(12000023, 3.25, 3.25, 6.5, 6.5, 2),
(12000033, 3.75, 3.75, 7.5, 7.5, 2),
(12000043, 2, 2, 4, 4, 2),
(12000053, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs3`
--

CREATE TABLE IF NOT EXISTS `2012cs3` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs3`
--

INSERT INTO `2012cs3` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS2000', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS2000', 61, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS2000', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS2000', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS2000', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs3gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs3gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs3gpa`
--

INSERT INTO `2012cs3gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 2.25, 2.25, 4.5, 4.5, 2),
(12000023, 2.75, 2.75, 5.5, 5.5, 2),
(12000033, 4.25, 4.25, 8.5, 8.5, 2),
(12000043, 4, 4, 8, 8, 2),
(12000053, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs4`
--

CREATE TABLE IF NOT EXISTS `2012cs4` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs4`
--

INSERT INTO `2012cs4` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS2001', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS2001', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS2001', 65, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS2001', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS2001', 82, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs4gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs4gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs4gpa`
--

INSERT INTO `2012cs4gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 7.5, 7.5, 2),
(12000023, 4, 4, 8, 8, 2),
(12000033, 3.25, 3.25, 6.5, 6.5, 2),
(12000043, 2.25, 2.25, 4.5, 4.5, 2),
(12000053, 4, 4, 8, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs4thyrfinalgpa`
--

CREATE TABLE IF NOT EXISTS `2012cs4thyrfinalgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs4thyrfinalgpa`
--

INSERT INTO `2012cs4thyrfinalgpa` (`index_no`, `gpa`, `classGPA`) VALUES
(12000013, 3.5735294117647, 3.5735294117647),
(12000023, 3.0147058823529, 3.0147058823529),
(12000033, 3.8529411764706, 3.8529411764706),
(12000043, 2.8676470588235, 2.5588235294118),
(12000053, 2.6764705882353, 2.6764705882353);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs4thyrlist`
--

CREATE TABLE IF NOT EXISTS `2012cs4thyrlist` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs4thyrlist`
--

INSERT INTO `2012cs4thyrlist` (`index_no`, `gpa`) VALUES
(12000013, 3.375),
(12000023, 3.4375),
(12000033, 3.8125),
(12000043, 2.625),
(12000053, 1.6875);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs5`
--

CREATE TABLE IF NOT EXISTS `2012cs5` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs5`
--

INSERT INTO `2012cs5` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS3000', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS3000', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS3000', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS3000', 61, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS3000', 73, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs5gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs5gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs5gpa`
--

INSERT INTO `2012cs5gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 7.5, 7.5, 2),
(12000023, 2.25, 2.25, 4.5, 4.5, 2),
(12000033, 4, 4, 8, 8, 2),
(12000043, 2.75, 2.75, 5.5, 5.5, 2),
(12000053, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs6`
--

CREATE TABLE IF NOT EXISTS `2012cs6` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs6`
--

INSERT INTO `2012cs6` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS3001', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS3001', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS3001', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS3001', 61, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS3001', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs6gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs6gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs6gpa`
--

INSERT INTO `2012cs6gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 7.5, 7.5, 2),
(12000023, 2.25, 2.25, 4.5, 4.5, 2),
(12000033, 4, 4, 8, 8, 2),
(12000043, 2.75, 2.75, 5.5, 5.5, 2),
(12000053, 4, 4, 8, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs7`
--

CREATE TABLE IF NOT EXISTS `2012cs7` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs7`
--

INSERT INTO `2012cs7` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS4000', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS4000', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS4000', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS4000', 25, 'D-', 75, 'A-', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS4000', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs7gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs7gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs7gpa`
--

INSERT INTO `2012cs7gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 11.25, 11.25, 3),
(12000023, 2.25, 2.25, 6.75, 6.75, 3),
(12000033, 4, 4, 12, 12, 3),
(12000043, 3.75, 2, 11.25, 6, 3),
(12000053, 4, 4, 12, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs8`
--

CREATE TABLE IF NOT EXISTS `2012cs8` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs8`
--

INSERT INTO `2012cs8` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(12000013, 'SCS4001', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000023, 'SCS4001', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000033, 'SCS4001', 98, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000043, 'SCS4001', 65, 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12000053, 'SCS4001', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2012cs8gpa`
--

CREATE TABLE IF NOT EXISTS `2012cs8gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012cs8gpa`
--

INSERT INTO `2012cs8gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(12000013, 3.75, 3.75, 7.5, 7.5, 2),
(12000023, 2.25, 2.25, 4.5, 4.5, 2),
(12000033, 4.25, 4.25, 8.5, 8.5, 2),
(12000043, 3.25, 3.25, 6.5, 6.5, 2),
(12000053, 2, 2, 4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2012csfinalgpa`
--

CREATE TABLE IF NOT EXISTS `2012csfinalgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012csfinalgpa`
--

INSERT INTO `2012csfinalgpa` (`index_no`, `gpa`, `classGPA`) VALUES
(12000013, 3.5, 3.5),
(12000023, 3.0416666666667, 3.0416666666667),
(12000033, 3.875, 3.875),
(12000043, 2.6666666666667, 2.6666666666667),
(12000053, 1.7916666666667, 1.7916666666667);

-- --------------------------------------------------------

--
-- Table structure for table `2012csoverallgpa`
--

CREATE TABLE IF NOT EXISTS `2012csoverallgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012csoverallgpa`
--

INSERT INTO `2012csoverallgpa` (`index_no`, `gpa`, `classGPA`) VALUES
(12000013, 3.375, 3.375),
(12000023, 3.4375, 3.4375),
(12000033, 3.8125, 3.8125),
(12000043, 2.625, 2.625),
(12000053, 1.6875, 1.6875);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs1`
--

CREATE TABLE IF NOT EXISTS `2013cs1` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs1`
--

INSERT INTO `2013cs1` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS1101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS1101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS1101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS1101', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS1101', 74, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS1101', 36, 'D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS1101', 45, 'C-', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS1101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS1101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS1101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS1101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS1101', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS1101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS1101', 81, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS1101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS1101', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS1101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS1101', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS1101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS1101', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS1101', 36, 'D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS1101', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS1101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS1101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS1101', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS1101', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS1101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS1101', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS1101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS1101', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS1101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS1101', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS1101', 61, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS1101', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS1101', 63, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS1101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS1101', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS1101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS1101', 76, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS1101', 36, 'D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS1101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS1101', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS1101', 88, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS1101', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS1101', 63, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS1101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS1101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS1101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs1gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs1gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs1gpa`
--

INSERT INTO `2013cs1gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 2.25, 2.25, 6.75, 6.75, 3),
(13000022, 2.25, 2.25, 6.75, 6.75, 3),
(13000039, 4, 4, 12, 12, 3),
(13000043, 4.25, 4.25, 12.75, 12.75, 3),
(13000053, 0, 0, 0, 0, 3),
(13000068, 1, 1, 3, 3, 3),
(13000081, 3.75, 2, 11.25, 6, 3),
(13000103, 4, 4, 12, 12, 3),
(13000111, 2, 2, 6, 6, 3),
(13000128, 3.25, 3.25, 9.75, 9.75, 3),
(13000136, 3.25, 3.25, 9.75, 9.75, 3),
(13000144, 3.75, 3.75, 11.25, 11.25, 3),
(13000152, 4.25, 4.25, 12.75, 12.75, 3),
(13000162, 4, 4, 12, 12, 3),
(13000179, 3.25, 3.25, 9.75, 9.75, 3),
(13000187, 4, 4, 12, 12, 3),
(13000195, 3.25, 3.25, 9.75, 9.75, 3),
(13000209, 3.25, 3.25, 9.75, 9.75, 3),
(13000214, 1.75, 1.75, 5.25, 5.25, 3),
(13000225, 4.25, 4.25, 12.75, 12.75, 3),
(13000235, 1, 1, 3, 3, 3),
(13000241, 2.25, 2.25, 6.75, 6.75, 3),
(13000256, 3.25, 3.25, 9.75, 9.75, 3),
(13000267, 1.75, 1.75, 5.25, 5.25, 3),
(13000273, 4, 4, 12, 12, 3),
(13000283, 4.25, 4.25, 12.75, 12.75, 3),
(13000296, 2.25, 2.25, 6.75, 6.75, 3),
(13000306, 4, 4, 12, 12, 3),
(13000314, 3.25, 3.25, 9.75, 9.75, 3),
(13000328, 3.25, 3.25, 9.75, 9.75, 3),
(13000335, 3.25, 3.25, 9.75, 9.75, 3),
(13000343, 2.75, 2.75, 8.25, 8.25, 3),
(13000358, 2.75, 2.75, 8.25, 8.25, 3),
(13000364, 2.75, 2.75, 8.25, 8.25, 3),
(13000371, 2.75, 2.75, 8.25, 8.25, 3),
(13000385, 3.25, 3.25, 9.75, 9.75, 3),
(13000394, 3.75, 3.75, 11.25, 11.25, 3),
(13000403, 3.25, 3.25, 9.75, 9.75, 3),
(13000417, 3.75, 3.75, 11.25, 11.25, 3),
(13000428, 1, 1, 3, 3, 3),
(13000431, 2.25, 2.25, 6.75, 6.75, 3),
(13000443, 3.25, 3.25, 9.75, 9.75, 3),
(13000453, 4, 4, 12, 12, 3),
(13000463, 4, 4, 12, 12, 3),
(13000477, 2.75, 2.75, 8.25, 8.25, 3),
(13000486, 2, 2, 6, 6, 3),
(13000495, 2, 2, 6, 6, 3),
(13000513, 2, 2, 6, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs2`
--

CREATE TABLE IF NOT EXISTS `2013cs2` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs2`
--

INSERT INTO `2013cs2` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS1103', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS1103', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS1103', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS1103', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS1103', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS1103', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS1103', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS1103', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS1103', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS1103', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS1103', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS1103', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS1103', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS1103', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS1103', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS1103', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS1103', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS1103', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS1103', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS1103', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS1103', 88, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS1103', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS1103', 45, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS1103', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS1103', 77, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS1103', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS1103', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS1103', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS1103', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS1103', 24, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS1103', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS1103', 91, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS1103', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS1103', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS1103', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS1103', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS1103', 76, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS1103', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS1103', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS1103', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS1103', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS1103', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS1103', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS1103', 53, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS1103', 51, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS1103', 53, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS1103', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS1103', 51, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs2gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs2gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs2gpa`
--

INSERT INTO `2013cs2gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 3.25, 3.25, 6.5, 6.5, 2),
(13000022, 4, 4, 8, 8, 2),
(13000039, 3.25, 3.25, 6.5, 6.5, 2),
(13000043, 0.75, 0.75, 1.5, 1.5, 2),
(13000053, 3.75, 3.75, 7.5, 7.5, 2),
(13000068, 3.25, 3.25, 6.5, 6.5, 2),
(13000081, 3.25, 3.25, 6.5, 6.5, 2),
(13000103, 3.75, 3.75, 7.5, 7.5, 2),
(13000111, 4.25, 4.25, 8.5, 8.5, 2),
(13000128, 3.75, 3.75, 7.5, 7.5, 2),
(13000136, 3.25, 3.25, 6.5, 6.5, 2),
(13000144, 3.25, 3.25, 6.5, 6.5, 2),
(13000152, 3.25, 3.25, 6.5, 6.5, 2),
(13000162, 3.25, 3.25, 6.5, 6.5, 2),
(13000179, 2.25, 2.25, 4.5, 4.5, 2),
(13000187, 3.75, 3.75, 7.5, 7.5, 2),
(13000195, 3.25, 3.25, 6.5, 6.5, 2),
(13000209, 1.75, 1.75, 3.5, 3.5, 2),
(13000214, 0.75, 0.75, 1.5, 1.5, 2),
(13000225, 3.25, 3.25, 6.5, 6.5, 2),
(13000235, 4, 4, 8, 8, 2),
(13000241, 3.75, 3.75, 7.5, 7.5, 2),
(13000256, 1.75, 1.75, 3.5, 3.5, 2),
(13000267, 3.25, 3.25, 6.5, 6.5, 2),
(13000273, 3.75, 3.75, 7.5, 7.5, 2),
(13000283, 4, 4, 8, 8, 2),
(13000296, 4, 4, 8, 8, 2),
(13000306, 4, 4, 8, 8, 2),
(13000314, 4, 4, 8, 8, 2),
(13000328, 0.75, 0.75, 1.5, 1.5, 2),
(13000335, 3.25, 3.25, 6.5, 6.5, 2),
(13000343, 4.25, 4.25, 8.5, 8.5, 2),
(13000358, 2.25, 2.25, 4.5, 4.5, 2),
(13000364, 3.25, 3.25, 6.5, 6.5, 2),
(13000371, 3.75, 3.75, 7.5, 7.5, 2),
(13000385, 4.25, 4.25, 8.5, 8.5, 2),
(13000394, 3.75, 3.75, 7.5, 7.5, 2),
(13000403, 4.25, 4.25, 8.5, 8.5, 2),
(13000417, 2.25, 2.25, 4.5, 4.5, 2),
(13000428, 2.75, 2.75, 5.5, 5.5, 2),
(13000431, 3.25, 3.25, 6.5, 6.5, 2),
(13000443, 2.75, 2.75, 5.5, 5.5, 2),
(13000453, 2.25, 2.25, 4.5, 4.5, 2),
(13000463, 2, 2, 4, 4, 2),
(13000477, 2, 2, 4, 4, 2),
(13000486, 2, 2, 4, 4, 2),
(13000495, 2.25, 2.25, 4.5, 4.5, 2),
(13000513, 2, 2, 4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs3`
--

CREATE TABLE IF NOT EXISTS `2013cs3` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs3`
--

INSERT INTO `2013cs3` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS2101', 52, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS2101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS2101', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS2101', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS2101', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS2101', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS2101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS2101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS2101', 74, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS2101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS2101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS2101', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS2101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS2101', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS2101', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS2101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS2101', 100, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS2101', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS2101', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS2101', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS2101', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS2101', 82, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS2101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS2101', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS2101', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS2101', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS2101', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS2101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS2101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS2101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS2101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS2101', 53, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS2101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS2101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS2101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS2101', 82, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS2101', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS2101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS2101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS2101', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS2101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS2101', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS2101', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS2101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS2101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS2101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS2101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS2101', 79, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs3gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs3gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs3gpa`
--

INSERT INTO `2013cs3gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 2, 2, 4, 4, 2),
(13000022, 3.25, 3.25, 6.5, 6.5, 2),
(13000039, 4, 4, 8, 8, 2),
(13000043, 2.75, 2.75, 5.5, 5.5, 2),
(13000053, 0.75, 0.75, 1.5, 1.5, 2),
(13000068, 3.75, 3.75, 7.5, 7.5, 2),
(13000081, 3.25, 3.25, 6.5, 6.5, 2),
(13000103, 4.25, 4.25, 8.5, 8.5, 2),
(13000111, 0, 0, 0, 0, 2),
(13000128, 2.25, 2.25, 4.5, 4.5, 2),
(13000136, 2.25, 2.25, 4.5, 4.5, 2),
(13000144, 3.25, 3.25, 6.5, 6.5, 2),
(13000152, 3.25, 3.25, 6.5, 6.5, 2),
(13000162, 2.25, 2.25, 4.5, 4.5, 2),
(13000179, 3.75, 3.75, 7.5, 7.5, 2),
(13000187, 4.25, 4.25, 8.5, 8.5, 2),
(13000195, 4.25, 4.25, 8.5, 8.5, 2),
(13000209, 3.75, 3.75, 7.5, 7.5, 2),
(13000214, 4, 4, 8, 8, 2),
(13000225, 4, 4, 8, 8, 2),
(13000235, 2.75, 2.75, 5.5, 5.5, 2),
(13000241, 4, 4, 8, 8, 2),
(13000256, 3.25, 3.25, 6.5, 6.5, 2),
(13000267, 2.75, 2.75, 5.5, 5.5, 2),
(13000273, 2.75, 2.75, 5.5, 5.5, 2),
(13000283, 2.25, 2.25, 4.5, 4.5, 2),
(13000296, 2.25, 2.25, 4.5, 4.5, 2),
(13000306, 2.25, 2.25, 4.5, 4.5, 2),
(13000314, 2.25, 2.25, 4.5, 4.5, 2),
(13000328, 2.25, 2.25, 4.5, 4.5, 2),
(13000335, 2, 2, 4, 4, 2),
(13000343, 2, 2, 4, 4, 2),
(13000358, 2.25, 2.25, 4.5, 4.5, 2),
(13000364, 1.75, 1.75, 3.5, 3.5, 2),
(13000371, 3.25, 3.25, 6.5, 6.5, 2),
(13000385, 4, 4, 8, 8, 2),
(13000394, 4, 4, 8, 8, 2),
(13000403, 3.25, 3.25, 6.5, 6.5, 2),
(13000417, 3.25, 3.25, 6.5, 6.5, 2),
(13000428, 4, 4, 8, 8, 2),
(13000431, 3.25, 3.25, 6.5, 6.5, 2),
(13000443, 4, 4, 8, 8, 2),
(13000453, 4, 4, 8, 8, 2),
(13000463, 4, 4, 8, 8, 2),
(13000477, 2.25, 2.25, 4.5, 4.5, 2),
(13000486, 1.75, 1.75, 3.5, 3.5, 2),
(13000495, 3.25, 3.25, 6.5, 6.5, 2),
(13000513, 3.75, 3.75, 7.5, 7.5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4`
--

CREATE TABLE IF NOT EXISTS `2013cs4` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4`
--

INSERT INTO `2013cs4` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS2106', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS2106', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS2106', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS2106', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS2106', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS2106', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS2106', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS2106', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS2106', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS2106', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS2106', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS2106', 74, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS2106', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS2106', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS2106', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS2106', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS2106', 74, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS2106', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS2106', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS2106', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS2106', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS2106', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS2106', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS2106', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS2106', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS2106', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS2106', 74, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS2106', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS2106', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS2106', 74, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS2106', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS2106', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS2106', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS2106', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS2106', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS2106', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS2106', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS2106', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS2106', 74, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS2106', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS2106', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS2106', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS2106', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS2106', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS2106', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS2106', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS2106', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS2106', 52, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs4gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4gpa`
--

INSERT INTO `2013cs4gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 3.25, 3.25, 9.75, 9.75, 3),
(13000022, 4, 4, 12, 12, 3),
(13000039, 4.25, 4.25, 12.75, 12.75, 3),
(13000043, 3.25, 3.25, 9.75, 9.75, 3),
(13000053, 3.25, 3.25, 9.75, 9.75, 3),
(13000068, 2.25, 2.25, 6.75, 6.75, 3),
(13000081, 1.75, 1.75, 5.25, 5.25, 3),
(13000103, 3.25, 3.25, 9.75, 9.75, 3),
(13000111, 3.75, 3.75, 11.25, 11.25, 3),
(13000128, 4.25, 4.25, 12.75, 12.75, 3),
(13000136, 0, 0, 0, 0, 3),
(13000144, 0, 0, 0, 0, 3),
(13000152, 3.25, 3.25, 9.75, 9.75, 3),
(13000162, 2, 2, 6, 6, 3),
(13000179, 4, 4, 12, 12, 3),
(13000187, 4.25, 4.25, 12.75, 12.75, 3),
(13000195, 0, 0, 0, 0, 3),
(13000209, 2.75, 2.75, 8.25, 8.25, 3),
(13000214, 2.25, 2.25, 6.75, 6.75, 3),
(13000225, 2.75, 2.75, 8.25, 8.25, 3),
(13000235, 4, 4, 12, 12, 3),
(13000241, 3.75, 3.75, 11.25, 11.25, 3),
(13000256, 3.25, 3.25, 9.75, 9.75, 3),
(13000267, 0, 0, 0, 0, 3),
(13000273, 3.75, 3.75, 11.25, 11.25, 3),
(13000283, 3.75, 3.75, 11.25, 11.25, 3),
(13000296, 0, 0, 0, 0, 3),
(13000306, 3.25, 3.25, 9.75, 9.75, 3),
(13000314, 3.25, 3.25, 9.75, 9.75, 3),
(13000328, 0, 0, 0, 0, 3),
(13000335, 3.75, 3.75, 11.25, 11.25, 3),
(13000343, 3.25, 3.25, 9.75, 9.75, 3),
(13000358, 4, 4, 12, 12, 3),
(13000364, 3.75, 3.75, 11.25, 11.25, 3),
(13000371, 4, 4, 12, 12, 3),
(13000385, 0.75, 0.75, 2.25, 2.25, 3),
(13000394, 3.25, 3.25, 9.75, 9.75, 3),
(13000403, 4.25, 4.25, 12.75, 12.75, 3),
(13000417, 0, 0, 0, 0, 3),
(13000428, 3.25, 3.25, 9.75, 9.75, 3),
(13000431, 4, 4, 12, 12, 3),
(13000443, 3.25, 3.25, 9.75, 9.75, 3),
(13000453, 3.25, 3.25, 9.75, 9.75, 3),
(13000463, 2, 2, 6, 6, 3),
(13000477, 2.25, 2.25, 6.75, 6.75, 3),
(13000486, 2.25, 2.25, 6.75, 6.75, 3),
(13000495, 2.25, 2.25, 6.75, 6.75, 3),
(13000513, 2, 2, 6, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4thyrfinalgpa`
--

CREATE TABLE IF NOT EXISTS `2013cs4thyrfinalgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4thyrfinalgpa`
--

INSERT INTO `2013cs4thyrfinalgpa` (`index_no`, `gpa`, `classGPA`) VALUES
(13000012, 3.2125, 3.2125),
(13000022, 3.425, 3.425),
(13000039, 3.4875, 3.4875),
(13000043, 3.15, 3.15),
(13000068, 2.6875, 2.6875),
(13000081, 2.25, 2.25),
(13000103, 3.425, 3.425),
(13000111, 3, 3),
(13000128, 3.6625, 3.6625),
(13000144, 2.3625, 2.3625),
(13000152, 3.6375, 3.6375),
(13000162, 2.775, 2.775),
(13000179, 3.45, 3.45),
(13000187, 3.825, 3.825),
(13000195, 2.65, 2.65),
(13000209, 3.0625, 3.0625),
(13000225, 3.15, 3.15),
(13000235, 3.375, 3.375),
(13000241, 3.6125, 3.6125),
(13000256, 2.975, 2.975),
(13000273, 3.6375, 3.6375),
(13000283, 3.2125, 3.2125),
(13000306, 3.0875, 3.0875),
(13000314, 3.575, 3.575),
(13000335, 2.775, 2.775),
(13000343, 3.225, 3.225),
(13000358, 3.1625, 3.1625),
(13000364, 3.3875, 3.3875),
(13000371, 3.6125, 3.6125),
(13000385, 2.8875, 2.8875),
(13000394, 3.6875, 3.6875),
(13000403, 3.275, 3.275),
(13000428, 2.625, 2.625),
(13000431, 3.0875, 3.0875),
(13000443, 3.55, 3.55),
(13000453, 3.6, 3.6),
(13000463, 2.975, 2.975),
(13000477, 2.45, 2.45),
(13000495, 2.575, 2.575),
(13000513, 2.9, 2.9);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs4thyrlist`
--

CREATE TABLE IF NOT EXISTS `2013cs4thyrlist` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs4thyrlist`
--

INSERT INTO `2013cs4thyrlist` (`index_no`, `gpa`) VALUES
(13000012, 2.7),
(13000022, 3.325),
(13000039, 3.925),
(13000043, 2.95),
(13000068, 2.375),
(13000081, 2.35),
(13000103, 3.775),
(13000111, 2.575),
(13000128, 3.45),
(13000144, 2.425),
(13000152, 3.55),
(13000162, 2.9),
(13000179, 3.375),
(13000187, 4.075),
(13000195, 2.475),
(13000209, 2.9),
(13000225, 3.55),
(13000235, 2.85),
(13000241, 3.35),
(13000256, 2.95),
(13000273, 3.625),
(13000283, 3.65),
(13000306, 3.425),
(13000314, 3.2),
(13000335, 3.15),
(13000343, 3.05),
(13000358, 2.925),
(13000364, 2.95),
(13000371, 3.425),
(13000385, 2.85),
(13000394, 3.65),
(13000403, 3.75),
(13000428, 2.625),
(13000431, 3.175),
(13000443, 3.3),
(13000453, 3.425),
(13000463, 3),
(13000477, 2.35),
(13000495, 2.375),
(13000513, 2.35);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs5`
--

CREATE TABLE IF NOT EXISTS `2013cs5` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs5`
--

INSERT INTO `2013cs5` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS3100', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS3100', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS3100', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS3100', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS3100', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS3100', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS3100', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS3100', 61, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS3100', 73, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS3100', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS3100', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS3100', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS3100', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS3100', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS3100', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS3100', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS3100', 52, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS3100', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS3100', 52, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS3100', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS3100', 89, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS3100', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS3100', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS3100', 79, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS3100', 92, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS3100', 93, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS3100', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS3100', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS3100', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS3100', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS3100', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS3100', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS3100', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS3100', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS3100', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS3100', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS3100', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS3100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS3100', 74, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS3100', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs5gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs5gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs5gpa`
--

INSERT INTO `2013cs5gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 2.25, 2.25, 4.5, 4.5, 2),
(13000022, 3.25, 3.25, 6.5, 6.5, 2),
(13000039, 2.75, 2.75, 5.5, 5.5, 2),
(13000043, 3.25, 3.25, 6.5, 6.5, 2),
(13000053, 2.25, 2.25, 4.5, 4.5, 2),
(13000068, 4.25, 4.25, 8.5, 8.5, 2),
(13000081, 4, 4, 8, 8, 2),
(13000103, 2.25, 2.25, 4.5, 4.5, 2),
(13000111, 2.75, 2.75, 5.5, 5.5, 2),
(13000128, 0, 0, 0, 0, 2),
(13000136, 2.25, 2.25, 4.5, 4.5, 2),
(13000144, 3.25, 3.25, 6.5, 6.5, 2),
(13000152, 2.75, 2.75, 5.5, 5.5, 2),
(13000162, 3.25, 3.25, 6.5, 6.5, 2),
(13000179, 2.75, 2.75, 5.5, 5.5, 2),
(13000187, 3.25, 3.25, 6.5, 6.5, 2),
(13000195, 1.75, 1.75, 3.5, 3.5, 2),
(13000209, 2.25, 2.25, 4.5, 4.5, 2),
(13000214, 2, 2, 4, 4, 2),
(13000225, 2.25, 2.25, 4.5, 4.5, 2),
(13000235, 2, 2, 4, 4, 2),
(13000241, 2.25, 2.25, 4.5, 4.5, 2),
(13000256, 4, 4, 8, 8, 2),
(13000267, 3.25, 3.25, 6.5, 6.5, 2),
(13000273, 4.25, 4.25, 8.5, 8.5, 2),
(13000283, 3.75, 3.75, 7.5, 7.5, 2),
(13000296, 4.25, 4.25, 8.5, 8.5, 2),
(13000306, 4.25, 4.25, 8.5, 8.5, 2),
(13000314, 2.25, 2.25, 4.5, 4.5, 2),
(13000328, 3.25, 3.25, 6.5, 6.5, 2),
(13000335, 1.75, 1.75, 3.5, 3.5, 2),
(13000343, 3.25, 3.25, 6.5, 6.5, 2),
(13000358, 3.75, 3.75, 7.5, 7.5, 2),
(13000364, 4, 4, 8, 8, 2),
(13000371, 4, 4, 8, 8, 2),
(13000385, 4, 4, 8, 8, 2),
(13000394, 3.25, 3.25, 6.5, 6.5, 2),
(13000403, 3.25, 3.25, 6.5, 6.5, 2),
(13000417, 3.25, 3.25, 6.5, 6.5, 2),
(13000428, 2, 2, 4, 4, 2),
(13000431, 2.25, 2.25, 4.5, 4.5, 2),
(13000443, 2.25, 2.25, 4.5, 4.5, 2),
(13000453, 3.25, 3.25, 6.5, 6.5, 2),
(13000463, 3.25, 3.25, 6.5, 6.5, 2),
(13000477, 3.25, 3.25, 6.5, 6.5, 2),
(13000486, 3.25, 3.25, 6.5, 6.5, 2),
(13000495, 0, 0, 0, 0, 2),
(13000513, 2, 2, 4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs6`
--

CREATE TABLE IF NOT EXISTS `2013cs6` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs6`
--

INSERT INTO `2013cs6` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS3101', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS3101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS3101', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS3101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS3101', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS3101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS3101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS3101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS3101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS3101', 91, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS3101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS3101', 47, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS3101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS3101', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS3101', 82, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS3101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS3101', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS3101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS3101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS3101', 74, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS3101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS3101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS3101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS3101', 52, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS3101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS3101', 51, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS3101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS3101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS3101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS3101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS3101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS3101', 53, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS3101', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS3101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS3101', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS3101', 98, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS3101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS3101', 74, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS3101', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS3101', 73, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS3101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS3101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS3101', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS3101', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS3101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS3101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS3101', 64, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS3101', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs6gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs6gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs6gpa`
--

INSERT INTO `2013cs6gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 3.25, 3.25, 9.75, 9.75, 3),
(13000022, 2.25, 2.25, 6.75, 6.75, 3),
(13000039, 0, 0, 0, 0, 3),
(13000043, 2, 2, 6, 6, 3),
(13000053, 0, 0, 0, 0, 3),
(13000068, 2.25, 2.25, 6.75, 6.75, 3),
(13000081, 3.25, 3.25, 9.75, 9.75, 3),
(13000103, 1.75, 1.75, 5.25, 5.25, 3),
(13000111, 4.25, 4.25, 12.75, 12.75, 3),
(13000128, 4.25, 4.25, 12.75, 12.75, 3),
(13000136, 4.25, 4.25, 12.75, 12.75, 3),
(13000144, 1.75, 1.75, 5.25, 5.25, 3),
(13000152, 3.25, 3.25, 9.75, 9.75, 3),
(13000162, 2.25, 2.25, 6.75, 6.75, 3),
(13000179, 4, 4, 12, 12, 3),
(13000187, 3.25, 3.25, 9.75, 9.75, 3),
(13000195, 4.25, 4.25, 12.75, 12.75, 3),
(13000209, 2.25, 2.25, 6.75, 6.75, 3),
(13000214, 2, 2, 6, 6, 3),
(13000225, 0, 0, 0, 0, 3),
(13000235, 3.25, 3.25, 9.75, 9.75, 3),
(13000241, 3.25, 3.25, 9.75, 9.75, 3),
(13000256, 2.25, 2.25, 6.75, 6.75, 3),
(13000267, 2, 2, 6, 6, 3),
(13000273, 2.25, 2.25, 6.75, 6.75, 3),
(13000283, 2, 2, 6, 6, 3),
(13000296, 2.25, 2.25, 6.75, 6.75, 3),
(13000306, 2, 2, 6, 6, 3),
(13000314, 4, 4, 12, 12, 3),
(13000328, 4.25, 4.25, 12.75, 12.75, 3),
(13000335, 2, 2, 6, 6, 3),
(13000343, 2, 2, 6, 6, 3),
(13000358, 3.25, 3.25, 9.75, 9.75, 3),
(13000364, 3.25, 3.25, 9.75, 9.75, 3),
(13000371, 2.25, 2.25, 6.75, 6.75, 3),
(13000385, 4.25, 4.25, 12.75, 12.75, 3),
(13000394, 3.25, 3.25, 9.75, 9.75, 3),
(13000403, 0, 0, 0, 0, 3),
(13000417, 4, 4, 12, 12, 3),
(13000428, 0, 0, 0, 0, 3),
(13000431, 2.25, 2.25, 6.75, 6.75, 3),
(13000443, 3.25, 3.25, 9.75, 9.75, 3),
(13000453, 2.25, 2.25, 6.75, 6.75, 3),
(13000463, 2.75, 2.75, 8.25, 8.25, 3),
(13000477, 2, 2, 6, 6, 3),
(13000486, 3.25, 3.25, 9.75, 9.75, 3),
(13000495, 2.75, 2.75, 8.25, 8.25, 3),
(13000513, 2.75, 2.75, 8.25, 8.25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs7`
--

CREATE TABLE IF NOT EXISTS `2013cs7` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs7`
--

INSERT INTO `2013cs7` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS4100', 82, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS4100', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS4100', 66, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS4100', 82, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS4100', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS4100', 55, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS4100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS4100', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS4100', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS4100', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS4100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS4100', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS4100', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS4100', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS4100', 36, 'D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS4100', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS4100', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS4100', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS4100', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS4100', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS4100', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS4100', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS4100', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS4100', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS4100', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS4100', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS4100', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS4100', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS4100', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS4100', 63, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS4100', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS4100', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS4100', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS4100', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS4100', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS4100', 67, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS4100', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS4100', 62, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS4100', 73, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS4100', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS4100', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS4100', 76, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs7gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs7gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs7gpa`
--

INSERT INTO `2013cs7gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 4, 4, 8, 8, 2),
(13000022, 2.25, 2.25, 4.5, 4.5, 2),
(13000039, 3.25, 3.25, 6.5, 6.5, 2),
(13000043, 4, 4, 8, 8, 2),
(13000053, 4, 4, 8, 8, 2),
(13000068, 2.25, 2.25, 4.5, 4.5, 2),
(13000081, 3.25, 3.25, 6.5, 6.5, 2),
(13000103, 3.75, 3.75, 7.5, 7.5, 2),
(13000111, 3.25, 3.25, 6.5, 6.5, 2),
(13000128, 3.25, 3.25, 6.5, 6.5, 2),
(13000136, 0, 0, 0, 0, 2),
(13000144, 3.25, 3.25, 6.5, 6.5, 2),
(13000152, 4, 4, 8, 8, 2),
(13000162, 4.25, 4.25, 8.5, 8.5, 2),
(13000179, 0.75, 0.75, 1.5, 1.5, 2),
(13000187, 1, 1, 2, 2, 2),
(13000195, 1.75, 1.75, 3.5, 3.5, 2),
(13000209, 2.25, 2.25, 4.5, 4.5, 2),
(13000214, 3.25, 3.25, 6.5, 6.5, 2),
(13000225, 3.25, 3.25, 6.5, 6.5, 2),
(13000235, 3.75, 3.75, 7.5, 7.5, 2),
(13000241, 3.25, 3.25, 6.5, 6.5, 2),
(13000256, 3.75, 3.75, 7.5, 7.5, 2),
(13000267, 2.25, 2.25, 4.5, 4.5, 2),
(13000273, 3.25, 3.25, 6.5, 6.5, 2),
(13000283, 2.25, 2.25, 4.5, 4.5, 2),
(13000296, 1.75, 1.75, 3.5, 3.5, 2),
(13000306, 3.25, 3.25, 6.5, 6.5, 2),
(13000314, 4, 4, 8, 8, 2),
(13000328, 3.25, 3.25, 6.5, 6.5, 2),
(13000335, 2.25, 2.25, 4.5, 4.5, 2),
(13000343, 2.75, 2.75, 5.5, 5.5, 2),
(13000358, 2.75, 2.75, 5.5, 5.5, 2),
(13000364, 3.75, 3.75, 7.5, 7.5, 2),
(13000371, 3.25, 3.25, 6.5, 6.5, 2),
(13000385, 3.75, 3.75, 7.5, 7.5, 2),
(13000394, 3.25, 3.25, 6.5, 6.5, 2),
(13000403, 4.25, 4.25, 8.5, 8.5, 2),
(13000417, 3.75, 3.75, 7.5, 7.5, 2),
(13000428, 2.25, 2.25, 4.5, 4.5, 2),
(13000431, 2.25, 2.25, 4.5, 4.5, 2),
(13000443, 3.25, 3.25, 6.5, 6.5, 2),
(13000453, 4.25, 4.25, 8.5, 8.5, 2),
(13000463, 2.75, 2.75, 5.5, 5.5, 2),
(13000477, 0, 0, 0, 0, 2),
(13000486, 3.75, 3.75, 7.5, 7.5, 2),
(13000495, 3.75, 3.75, 7.5, 7.5, 2),
(13000513, 3.75, 3.75, 7.5, 7.5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs8`
--

CREATE TABLE IF NOT EXISTS `2013cs8` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs8`
--

INSERT INTO `2013cs8` (`index_no`, `sub_id`, `mark`, `grade`, `mark2`, `grade2`, `mark3`, `grade3`, `mark4`, `grade4`, `mark5`, `grade5`, `mark6`, `grade6`) VALUES
(13000012, 'SCS4101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000022, 'SCS4101', 84, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000039, 'SCS4101', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000043, 'SCS4101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000053, 'SCS4101', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000068, 'SCS4101', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000081, 'SCS4101', 72, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000103, 'SCS4101', 61, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000111, 'SCS4101', 44, 'D+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000128, 'SCS4101', 58, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000136, 'SCS4101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000144, 'SCS4101', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000152, 'SCS4101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000162, 'SCS4101', 45, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000179, 'SCS4101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000187, 'SCS4101', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000195, 'SCS4101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000209, 'SCS4101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000214, 'SCS4101', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000225, 'SCS4101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000235, 'SCS4101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000241, 'SCS4101', 78, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000256, 'SCS4101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000267, 'SCS4101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000273, 'SCS4101', 87, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000283, 'SCS4101', 54, 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000296, 'SCS4101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000306, 'SCS4101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000314, 'SCS4101', 65, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000328, 'SCS4101', 79, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000335, 'SCS4101', 25, 'D-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000343, 'SCS4101', 92, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000358, 'SCS4101', 57, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000364, 'SCS4101', 69, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000371, 'SCS4101', 98, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000385, 'SCS4101', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000394, 'SCS4101', 79, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000403, 'SCS4101', 59, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000417, 'SCS4101', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000428, 'SCS4101', 86, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000431, 'SCS4101', 56, 'C+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000443, 'SCS4101', 85, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000453, 'SCS4101', 96, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000463, 'SCS4101', 68, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000477, 'SCS4101', 95, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000486, 'SCS4101', 75, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000495, 'SCS4101', 48, 'C-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13000513, 'SCS4101', 100, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2013cs8gpa`
--

CREATE TABLE IF NOT EXISTS `2013cs8gpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  `gpv` double DEFAULT NULL,
  `classGPV` double DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013cs8gpa`
--

INSERT INTO `2013cs8gpa` (`index_no`, `gpa`, `classGPA`, `gpv`, `classGPV`, `credits`) VALUES
(13000012, 3.25, 3.25, 9.75, 9.75, 3),
(13000022, 4, 4, 12, 12, 3),
(13000039, 3.75, 3.75, 11.25, 11.25, 3),
(13000043, 3.25, 3.25, 9.75, 9.75, 3),
(13000053, 0.75, 0.75, 2.25, 2.25, 3),
(13000068, 4, 4, 12, 12, 3),
(13000081, 0, 0, 0, 0, 3),
(13000103, 2.75, 2.75, 8.25, 8.25, 3),
(13000111, 1.25, 1.25, 3.75, 3.75, 3),
(13000128, 2.25, 2.25, 6.75, 6.75, 3),
(13000136, 3.25, 3.25, 9.75, 9.75, 3),
(13000144, 3.75, 3.75, 11.25, 11.25, 3),
(13000152, 3.25, 3.25, 9.75, 9.75, 3),
(13000162, 1.75, 1.75, 5.25, 5.25, 3),
(13000179, 3.25, 3.25, 9.75, 9.75, 3),
(13000187, 3.75, 3.75, 11.25, 11.25, 3),
(13000195, 4, 4, 12, 12, 3),
(13000209, 4.25, 4.25, 12.75, 12.75, 3),
(13000214, 3.75, 3.75, 11.25, 11.25, 3),
(13000225, 4.25, 4.25, 12.75, 12.75, 3),
(13000235, 3.25, 3.25, 9.75, 9.75, 3),
(13000241, 3.75, 3.75, 11.25, 11.25, 3),
(13000256, 2, 2, 6, 6, 3),
(13000267, 4, 4, 12, 12, 3),
(13000273, 4, 4, 12, 12, 3),
(13000283, 2, 2, 6, 6, 3),
(13000296, 3.25, 3.25, 9.75, 9.75, 3),
(13000306, 1.75, 1.75, 5.25, 5.25, 3),
(13000314, 3.25, 3.25, 9.75, 9.75, 3),
(13000328, 3.75, 3.75, 11.25, 11.25, 3),
(13000335, 0.75, 0.75, 2.25, 2.25, 3),
(13000343, 4.25, 4.25, 12.75, 12.75, 3),
(13000358, 2.25, 2.25, 6.75, 6.75, 3),
(13000364, 3.25, 3.25, 9.75, 9.75, 3),
(13000371, 4.25, 4.25, 12.75, 12.75, 3),
(13000385, 2.25, 2.25, 6.75, 6.75, 3),
(13000394, 3.75, 3.75, 11.25, 11.25, 3),
(13000403, 2.25, 2.25, 6.75, 6.75, 3),
(13000417, 4.25, 4.25, 12.75, 12.75, 3),
(13000428, 4, 4, 12, 12, 3),
(13000431, 2.25, 2.25, 6.75, 6.75, 3),
(13000443, 4, 4, 12, 12, 3),
(13000453, 4.25, 4.25, 12.75, 12.75, 3),
(13000463, 3.25, 3.25, 9.75, 9.75, 3),
(13000477, 4.25, 4.25, 12.75, 12.75, 3),
(13000486, 3.75, 3.75, 11.25, 11.25, 3),
(13000495, 1.75, 1.75, 5.25, 5.25, 3),
(13000513, 4.25, 4.25, 12.75, 12.75, 3);

-- --------------------------------------------------------

--
-- Table structure for table `2013csfinalgpa`
--

CREATE TABLE IF NOT EXISTS `2013csfinalgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013csfinalgpa`
--

INSERT INTO `2013csfinalgpa` (`index_no`, `gpa`, `classGPA`) VALUES
(13000012, 2.75, 2.75),
(13000022, 3.1, 3.1),
(13000039, 2.9833333333333, 2.9833333333333),
(13000043, 2.8, 2.8),
(13000053, 1.55, 1.55),
(13000068, 2.6, 2.6),
(13000081, 2.75, 2.8),
(13000103, 3.1666666666667, 3.1666666666667),
(13000111, 2.9333333333333, 2.9333333333333),
(13000128, 3.15, 3.15),
(13000136, 2.5333333333333, 2.5333333333333),
(13000144, 2.4, 2.4),
(13000152, 3.3833333333333, 3.3833333333333),
(13000162, 2.8166666666667, 2.8166666666667),
(13000179, 3.4166666666667, 3.4166666666667),
(13000187, 3.8, 3.8),
(13000195, 2.7333333333333, 2.7333333333333),
(13000209, 2.6833333333333, 2.6833333333333),
(13000214, 2.1, 2.1),
(13000225, 2.6666666666667, 2.6666666666667),
(13000235, 2.8166666666667, 2.8166666666667),
(13000241, 3.1833333333333, 3.1833333333333),
(13000256, 2.95, 2.95),
(13000267, 1.9833333333333, 1.9833333333333),
(13000273, 3.4333333333333, 3.4333333333333),
(13000283, 3.3333333333333, 3.3333333333333),
(13000296, 2.3, 2.3),
(13000306, 3.25, 3.25),
(13000314, 3.2333333333333, 3.2333333333333),
(13000328, 2.3333333333333, 2.3333333333333),
(13000335, 2.7333333333333, 2.7333333333333),
(13000343, 2.8666666666667, 2.8666666666667),
(13000358, 3.1, 3.1),
(13000364, 3.15, 3.15),
(13000371, 3.2666666666667, 3.2666666666667),
(13000385, 3.2833333333333, 3.2833333333333),
(13000394, 3.5166666666667, 3.5166666666667),
(13000403, 2.9333333333333, 2.9333333333333),
(13000417, 2.7166666666667, 2.7166666666667),
(13000428, 2.0166666666667, 2.0166666666667),
(13000431, 2.8666666666667, 2.8666666666667),
(13000443, 3.15, 3.15),
(13000453, 3.1666666666667, 3.1666666666667),
(13000463, 2.9833333333333, 2.9833333333333),
(13000477, 2.4, 2.4),
(13000486, 2.4333333333333, 2.4333333333333),
(13000495, 2.1333333333333, 2.1333333333333),
(13000513, 2.3833333333333, 2.3833333333333);

-- --------------------------------------------------------

--
-- Table structure for table `2013csoverallgpa`
--

CREATE TABLE IF NOT EXISTS `2013csoverallgpa` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `gpa` double DEFAULT NULL,
  `classGPA` double DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013csoverallgpa`
--

INSERT INTO `2013csoverallgpa` (`index_no`, `gpa`, `classGPA`) VALUES
(13000012, 2.7, 2.7),
(13000022, 3.325, 3.325),
(13000039, 3.925, 3.925),
(13000043, 2.95, 2.95),
(13000053, 1.875, 1.875),
(13000068, 2.375, 2.375),
(13000081, 2.35, 2.35),
(13000103, 3.775, 3.775),
(13000111, 2.575, 2.575),
(13000128, 3.45, 3.45),
(13000136, 2.075, 2.075),
(13000144, 2.425, 2.425),
(13000152, 3.55, 3.55),
(13000162, 2.9, 2.9),
(13000179, 3.375, 3.375),
(13000187, 4.075, 4.075),
(13000195, 2.475, 2.475),
(13000209, 2.9, 2.9),
(13000214, 2.15, 2.15),
(13000225, 3.55, 3.55),
(13000235, 2.85, 2.85),
(13000241, 3.35, 3.35),
(13000256, 2.95, 2.95),
(13000267, 1.725, 1.725),
(13000273, 3.625, 3.625),
(13000283, 3.65, 3.65),
(13000296, 1.925, 1.925),
(13000306, 3.425, 3.425),
(13000314, 3.2, 3.2),
(13000328, 1.575, 1.575),
(13000335, 3.15, 3.15),
(13000343, 3.05, 3.05),
(13000358, 2.925, 2.925),
(13000364, 2.95, 2.95),
(13000371, 3.425, 3.425),
(13000385, 2.85, 2.85),
(13000394, 3.65, 3.65),
(13000403, 3.75, 3.75),
(13000417, 2.225, 2.225),
(13000428, 2.625, 2.625),
(13000431, 3.175, 3.175),
(13000443, 3.3, 3.3),
(13000453, 3.425, 3.425),
(13000463, 3, 3),
(13000477, 2.35, 2.35),
(13000486, 2.025, 2.025),
(13000495, 2.375, 2.375),
(13000513, 2.35, 2.35);

-- --------------------------------------------------------

--
-- Table structure for table `2014cs1`
--

CREATE TABLE IF NOT EXISTS `2014cs1` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2014cs2`
--

CREATE TABLE IF NOT EXISTS `2014cs2` (
  `index_no` int(8) NOT NULL DEFAULT '0',
  `sub_id` varchar(50) NOT NULL DEFAULT '',
  `mark` int(11) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `mark2` int(11) DEFAULT NULL,
  `grade2` char(2) DEFAULT NULL,
  `mark3` int(11) DEFAULT NULL,
  `grade3` char(2) DEFAULT NULL,
  `mark4` int(11) DEFAULT NULL,
  `grade4` char(2) DEFAULT NULL,
  `mark5` int(11) DEFAULT NULL,
  `grade5` char(2) DEFAULT NULL,
  `mark6` int(11) DEFAULT NULL,
  `grade6` char(2) DEFAULT NULL,
  PRIMARY KEY (`index_no`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `writer` int(11) NOT NULL,
  `msg` longtext NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`,`writer`),
  KEY `inquiry_ibfk_1` (`writer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `writer`, `msg`, `date`) VALUES
(3, 4, 'This is a test post of Student Management System , University of Colombo School of Computing....', 'Tue Jan 05, 2016 20:23'),
(5, 4, '\r\nUCSC undergraduate students (Computer Science/Software Engineering and Information Systems) in the above acad', 'Tue Jan 05, 2016 20:25'),
(6, 4, 'Loan Facility for University Undergraduates to purchase Laptops.For more details see the attachment.', 'Tue Jan 05, 2016 20:26'),
(9, 4, 'UCSC undergraduate students (Computer Science and Information Systems) of the 2nd Year (A/Y 2012/2013) are hereby informed that calling application for the selection of the Bachelor of Science Honours (4 Year) Degree Programmes in Computer Science and Information Systems will take place till 29th January 2016.', 'Tue Jan 05, 2016 21:06'),
(11, 4, 'Please enter all the results of the subjects 2013 Cs batch before 15th of January 2016. Thanks', 'Mon Jan 11, 2016 8:21'),
(12, 4, 'This is an inquiry...', 'Mon Jan 11, 2016 18:03'),
(13, 4, 'vdsfsdvsdv', 'Tue Jan 12, 2016 8:13'),
(14, 4, 'Testing Inquery...', 'Tue Jan 19, 2016 13:42'),
(15, 4, 'this is an inquery...', 'Tue Jan 19, 2016 14:46'),
(16, 4, 'fbfgdhf hgrhg h', 'Sun Jan 24, 2016 10:09'),
(17, 4, 'trtdgfdgfd vsvds', 'Mon Jun 06, 2016 7:05'),
(18, 4, 'Testinngggg', 'Thu Jun 09, 2016 16:04');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_subject`
--

CREATE TABLE IF NOT EXISTS `lecturer_subject` (
  `staff_id` varchar(30) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`,`sub_id`),
  KEY `lecturer_subject_ibfk_2` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_subject`
--

INSERT INTO `lecturer_subject` (`staff_id`, `sub_id`) VALUES
('UCSC254', 'SCS1000'),
('UCSC254', 'SCS1001'),
('UCSC254', 'SCS1101'),
('UCSC254', 'SCS1102'),
('UCSC254', 'SCS1103'),
('UCSC254', 'SCS2000'),
('UCSC254', 'SCS2001'),
('UCSC254', 'SCS2101'),
('UCSC254', 'SCS2106'),
('UCSC254', 'SCS3000'),
('UCSC254', 'SCS3001'),
('UCSC254', 'SCS3100'),
('UCSC254', 'SCS3101'),
('UCSC002', 'SCS3102'),
('UCSC254', 'SCS4000'),
('UCSC254', 'SCS4001'),
('UCSC254', 'SCS4100'),
('UCSC254', 'SCS4101');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `image_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_no` int(8) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `nwi` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `course` varchar(5) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`index_no`),
  UNIQUE KEY `id` (`id`),
  KEY `index_no` (`index_no`),
  KEY `index_no_2` (`index_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `index_no`, `full_name`, `nwi`, `nic`, `batch`, `course`, `reg_no`, `address`, `contact_no`, `email`, `gender`, `dob`) VALUES
(56, 12000013, 'Nimal Gamage', 'N Gamage', '902756875V', '2012', 'CS', '2012CS001', 'No 1', '0776558945', 'nimal@gmail.com', 'male', '1990-01-04'),
(57, 12000023, 'Nimal Perera', 'N Perera', '902756885V', '2012', 'CS', '2012CS002', 'No 2', '0776558969', 'nimal1@gmail.com', 'male', '1990-12-04'),
(58, 12000033, 'Kamal Gamage', 'K Gamage', '902758885V', '2012', 'CS', '2012CS003', 'No 3', '0776558945', 'kamal@gmail.com', 'male', '1990-12-25'),
(59, 12000043, 'Kamal Perera', 'K Perera', '902757885V', '2012', 'CS', '2012CS004', 'No 4', '0776558145', 'kamal2@gmail.com', 'male', '1990-07-25'),
(60, 12000053, 'Kamal Silva', 'K Silva', '902758885V', '2012', 'CS', '2012CS005', 'No 5', '0776558178', 'kamagf2@gmail.com', 'male', '1990-09-25'),
(4, 13000012, 'Thanuja Dilanka Abeygunarathna', 'T D Abeygunarathna', '927856984v', '2013', 'CS', '2013CS001', 'Weligama,\\r\\nMatara.', '0718674853', 'thanujapoyya@gmail.com', 'male', '1992-08-25'),
(5, 13000022, 'Kosgodage Ashanthi Irunika Abeyrathna', 'K A I Abeyrathna', '936846786v', '2013', 'CS', '2013CS002', 'NO 45,\\r\\nMattakkuliya,\\r\\nColombo 10.', '0715864877', 'Ashanthiirunika@gmail.com', 'female', '1993-08-04'),
(6, 13000039, 'Anjana Eranga Aberathna', 'A E Abeyrathna', '925687986v', '2013', 'CS', '2013CS003', 'Ambalangoda,\\r\\nGalle.', '0775868476', 'anjanaibba@gmail.com', 'male', '1992-04-05'),
(55, 13000043, 'Kurupayya Ahilendaran', 'K ahilendra', '931793642v', '2013', 'CS', '2013CS004', 'Jafna', '0712586547', 'Ahilahilendran@gmail.com', 'male', '1993-12-24'),
(49, 13000053, 'Ayesh Lakmina Almeda', 'A L Almeda', '925483698v', '2013', 'CS', '2013CS005', 'Moratuwa,', '0714255863', 'ayeshlakmin@gmail.com', 'male', '1992-11-28'),
(7, 13000068, 'Anobia Anstain', 'A Alstan', '926584256v', '2013', 'CS', '2013CS006', 'Jafna', '0715483695', 'anobia123@gmail.com', 'female', '1992-08-05'),
(8, 13000081, 'Arachchige Ishan Madushanka Amarathunga', 'A I M Amarathunga', '920698726v', '2013', 'CS', '2013CS008', 'Horana, \\r\\nKaluthara.', '0715684582', 'ishanmadushanka@gmail.com', 'male', '1992-02-15'),
(27, 13000103, 'Miyuru Arachchi', 'M Arachchi', '921536286v', '2013', 'CS', '2013CS010', 'NO 25,\\r\\nMatara.', '0714458623', 'miyurukavishan@gmail.com', 'male', '1992-04-11'),
(9, 13000111, 'Nisitha Athukorala', 'N Athukorala', '922681836v', '2013', 'CS', '2013CS011', 'Karapitiya,\\r\\nGalle', '0715236987', 'nisithaathukorala@gmail.com', 'male', '1992-10-23'),
(11, 13000128, 'Viboda Ranith Balalla', 'V R Balalla', '931686393v', '2013', 'CS', '2013CS012', 'Meegoda,\\r\\nColombo.', '0715847623', 'vibodabalalla@gmail.com', 'male', '1993-07-16'),
(3, 13000136, 'Naveen Upeksha Batagoda', 'N U Batagodage', '910546847v', '2013', 'CS', '2013CS013', 'NO 25A,\\r\\nGalle ROAD,\\r\\nMatara.', '0718677284', 'naveenbatagoda@gmail.com', 'male', '1991-02-23'),
(12, 13000144, 'Sathish Bowaththa', 'S Bowaththa', '911385262v', '2013', 'CS', '2013CS014', 'Panagala, \\r\\nGampaha', '0716582478', 'sathishb@gmail.com', 'male', '1991-05-12'),
(13, 13000152, 'Sandun Chamara', 'S chamara', '923456825v', '2013', 'CS', '2013CS015', 'Kamburupitiya,\\r\\nMatara.', '0714286789', 'Sandunchamara92@gmail.com', 'male', '1992-11-11'),
(14, 13000162, 'Panadura Arachchige Danushka Chandana', 'P A D Chandana', '931587621v', '2013', 'CS', '2013CS016', 'Panadura,\\r\\nKaluthara', '0757986324', 'PADchandana@gmail.com', 'male', '1993-08-07'),
(15, 13000179, 'Isuru Udayanga Chandrasiri', 'I U Chandrasiri', '940021548v', '2013', 'CS', '2013CS017', 'Nugegoda,\\r\\nColombo.', '0713698745', 'isuruudayanga@gmail.com', 'male', '1994-01-02'),
(17, 13000187, 'Buddhika Nuwan Dahanayaka', 'B N Dahanayaka', '921584736v', '2013', 'CS', '2013CS018', 'Yakkalamulla,\\r\\nGalle.', '0717896321', 'buddhikanuwan@gmail.com', 'male', '1992-03-23'),
(18, 13000195, 'Thushara Sachith Dahanayaka', 'T S Dahanayaka', '911469866v', '2013', 'CS', '2013CS019', 'Sewanagala,\\r\\nEmbilipitiya.', '0715870087', 'Thusharadahanayaka@gmail.com', 'male', '1991-05-26'),
(19, 13000209, 'Amila Sanka Dayarathna', 'A S Dayarathna', '921687569v', '2013', 'CS', '2013CS020', 'Weligama,\\r\\nMatara.', '0718625867', 'Amilasanka@gmail.com', 'male', '1992-08-10'),
(20, 13000214, 'Dushman Nalin Dayawansa', 'D N Dayawansa', '913246868v', '2013', 'CS', '2013CS021', 'Pitigala,\\r\\nElpitiya,\\r\\nGalle.', '0716489687', 'Dushmannalin@gmail.com', 'male', '1991-11-18'),
(21, 13000225, 'Keshan Ganesh De Silva', 'K G Silva', '921578624v', '2013', 'CS', '2013CS005', 'Unawatuna,\\r\\nGalle.', '0720154312', 'Keshan123@gmail.com', 'male', '1992-07-05'),
(22, 13000235, 'Thisara Maheshka De Silva', 'T M De Silva', '912058686v', '2013', 'CS', '2013CS023', 'Galle', '0758696363', 'thisara@gmail.com', 'male', '1991-08-25'),
(23, 13000241, 'Weeramuni Asen Sanjula De Silva', 'W A S De Silva', '940265487v', '2013', 'CS', '2013CS024', 'Balapitiya,\\r\\nAmbalangoda.', '0779866521', 'Asensanjula@gmail.com', 'male', '1994-01-26'),
(24, 13000256, 'Eranga Sampath De Zoysa', 'E S De Zoysa', '921548693v', '2013', 'CS', '2013CS025', 'Balapitiya,\\r\\nAmbalangoda', '0719632587', 'erangasampath@gmail.com', 'male', '1992-07-22'),
(25, 13000267, 'Tharuka Deshan', 'T Deshan', '920725815v', '2013', 'CS', '2013CS026', 'Kelaniya,\\r\\nGampaha.', '0753698752', 'Tharukapakshiya@gmail.com', 'male', '1992-03-12'),
(26, 13000273, 'Nadeesh Dilanga', 'N Dilanga', '922565585v', '2013', 'CS', '2013CS027', 'weligama,\\r\\nMatara', '0786862254', 'nadeeshdilanga@gmail.com', 'male', '1992-09-12'),
(28, 13000283, 'Gallage Dilshan', 'G Dilshan', '921458693v', '2013', 'CS', '2013CS028', 'Weligama,\\r\\nMatara.', '0712586932', 'gallage1992@gmail.com', 'male', '1992-03-22'),
(29, 13000296, 'Malith Dilshan', 'M Dilshan', '930958636v', '2013', 'CS', '2013CS029', 'Galle road,\\r\\nMatara', '0712583698', 'Dilshanwanni@gmail.com', 'male', '1993-09-20'),
(30, 13000306, 'Imasha Dilshani', 'I Dilshani', '923015861v', '2013', 'CS', '2013CS030', 'Matara.', '0717894587', 'dilshani12@gmail.com', 'female', '1992-10-12'),
(31, 13000314, 'Amoda Dissanayaka', 'A Dissanayake', '936258369v', '2013', 'CS', '2013CS031', 'Baththaramulla,\\r\\nColombo.', '0715869874', 'amoda987@gmail.com', 'female', '1993-04-25'),
(32, 13000328, 'Hasitha Nayanapriya Dissanayaka', 'H N Dissanayaka', '922986322v', '2013', 'CS', '2013CS032', 'Gampaha', '0712586935', 'Hdissanayaka@gmail.co', 'male', '1992-10-08'),
(33, 13000335, 'Maheshi Dissanayake', 'M Dissanayake', '926854891v', '2013', 'CS', '2013CS033', 'Ulivitike,\\r\\nGalle', '0711472583', 'chanika@gmail.com', 'female', '1992-05-19'),
(34, 13000343, 'Binura Dodangoda', 'B Dodangoda', '920145862v', '2013', 'CS', '2013CS034', 'Wakwella,\\r\\nGalle.', '0713698741', 'Binuraknight@gmail.com', 'male', '1992-02-02'),
(35, 13000358, 'Mohemed Fasly', 'M Fasly', '922558369v', '2013', 'CS', '2013CS035', 'Awissawella,\\r\\nColombo.', '0713232658', 'Fasly369@gmail.com', 'male', '1992-06-12'),
(36, 13000364, 'Shalika Fernando', 'S Fernando', '925681234v', '2013', 'CS', '2013CS036', 'Negombo,\\r\\nGampaha', '0712583691', 'Shalikafer@gmail.com', 'female', '1992-10-08'),
(37, 13000371, 'Chathuri Gunarathna', 'C Gunarathna', '936258481v', '2013', 'CS', '2013CS037', 'Horana,\\r\\nKaluthara.', '0717869253', 'Chathurig@gmail.com', 'female', '1993-09-11'),
(38, 13000385, 'Piumi Gunarathna', 'P Gunarathna', '925993681v', '2013', 'CS', '2013CS038', 'Kandy.', '0775869348', 'piumi@gmail.com', 'female', '1993-04-11'),
(39, 13000394, 'Yasara Gunarathna', 'Y Gunarathna', '920258368v', '2013', 'CS', '2013CS039', 'Udugama,\\r\\nGalle.', '0782365419', 'yasaranuwan@gmail.com', 'male', '1992-01-22'),
(40, 13000403, 'Bagya Gunawardana', 'B Gunawardana', '926589346v', '2013', 'CS', '2013CS040', 'Deniyaya,\\r\\nMatara', '0712583694', 'Bagyadeniyaya@gmail.com', 'male', '1992-07-01'),
(41, 13000417, 'Charitha Sampath Gunawardana', 'C S Gunawardana', '921458658v', '2013', 'CS', '2013CS041', 'Galle Road,\\r\\nMatara.', '0775864003', 'charithasampath@gmail.com', 'male', '1992-08-09'),
(42, 13000428, 'Pasan Madara Gunathilaka', 'P M Gunathilaka', '921473698v', '2013', 'CS', '2013CS042', 'Malabe,\\r\\nColombo.', '0719875246', 'pmg@gmail.com', 'male', '1992-08-25'),
(43, 13000431, 'Shyama Hemachaya', 'S Hemachaya', '927435861v', '2013', 'CS', '2013CS043', 'Matara 03.', '0712583697', 'shyama@gmail.com', 'female', '1992-11-11'),
(44, 13000443, 'Wishwa Dileepa Hettige', 'W D Hettige', '940248742v', '2013', 'CS', '2013CS044', 'Malabe,\\r\\ncolombo', '0778952525', 'wishwadileepa@gmail.com', 'male', '1994-01-24'),
(45, 13000453, 'Krishani Indrachapa', 'K Indrchapa', '936478258v', '2013', 'CS', '2013CS045', 'Maharahagama,\\r\\ncolombo.', '0711425836', 'krishaniI147@gmail.com', 'female', '1993-03-22'),
(46, 13000463, 'Samaraweerage Ishani', 'S Ishani', '925843692v', '2013', 'CS', '2013CS046', 'uluvitike,\\r\\nGalle.', '0712836914', 'ishanisamaraweera@gmail.com', 'female', '1992-05-12'),
(47, 13000477, 'Thusitha Madushan Jayalath', 'T M Jayalath', '921473692v', '2013', 'CS', '2013CS047', 'Gampola,\\r\\nKandy.', '0753698741', 'Thusithathiushan@gmail.com', 'male', '1992-06-22'),
(48, 13000486, 'Sampath Jayarathna', 'S Jayarathna', '931425864v', '2013', 'CS', '2013CS048', 'Horana,\\r\\nKaluthara.', '0714258369', 'sampathjaye@gmail.com', 'male', '1993-07-28'),
(50, 13000495, 'Paramie Jayasinghe', 'P Jaysinghe', '925516547v', '2013', 'CS', '2013CS049', 'Godagama,\\r\\nMeegoda.', '0772583658', 'Paramiejayasinghe@gmail.com', 'female', '1992-02-20'),
(51, 13000513, 'Chamod Jayasundara', 'C Jayasundara', '921463587v', '2013', 'CS', '2013CS051', 'Kurunegala.', '0712583648', 'Chamodakayya@gmail.com', 'male', '1992-05-11'),
(52, 13020013, 'Azees Afsar', 'A Afsar', '912583645v', '2013', 'IS', '2013IS001', 'Matara town, \\r\\nMatara.', '0714789632', 'Afsarazees@gmail.com', 'male', '1991-08-06'),
(53, 13020026, 'Anushka Athulathmudali', 'A Athulathmudali', '921658369v', '2013', 'IS', '2013IS002', 'Kandy.', '0716549873', 'AnushkaAthulathmudali@gmail.com', 'male', '1992-07-16'),
(54, 13020037, 'Ayodya Balasuriya', 'A Balasuriya', '936258263v', '2013', 'IS', '2013IS003', 'Gampaha.', '0712565478', 'Ayodyabala@gmail.com', 'female', '1993-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_id` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem_id` int(2) NOT NULL,
  `course` varchar(10) NOT NULL,
  `credits` int(2) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `year`, `sem_id`, `course`, `credits`) VALUES
('EN1001', 'Enhancement I', '1st year', 1, 'CS', 2),
('ENH1102', 'Enhancement II', '1st year', 2, 'CS', 1),
('IS1008', 'Financial Accounting', '1st year', 2, 'IS', 3),
('IS1009', 'Business Communication', '1st year', 2, 'IS', 2),
('IS1010', 'Database Management', '1st year', 2, 'IS', 3),
('IS1011', 'Systems` Analysis and Design', '1st year', 2, 'IS', 3),
('IS1012', 'Discrete Mathematics II', '1st year', 2, 'IS', 1),
('IS1013', 'Organizational Behavior', '1st year', 2, 'IS', 2),
('IS1014', 'Computing and Society', '1st year', 2, 'IS', 2),
('IS2002', 'Group Project I', '2nd year', 4, 'IS', 4),
('IS2007', 'IT Project Management', '2nd year', 3, 'IS', 2),
('IS2008', 'Information Systems Management', '2nd year', 4, 'IS', 3),
('SCS1000', 'Subject I', '1st year', 1, 'CS', 2),
('SCS1001', 'Subject II', '1st year', 2, 'CS', 2),
('SCS1101', 'Data Structures and Algorithms I', '1st year', 1, 'CS', 3),
('SCS1102', 'Programming I', '1st year', 1, 'CS', 3),
('SCS1103', 'Mathematics Methods I', '1st year', 2, 'CS', 2),
('SCS1104', 'Database Management System', '1st year', 3, 'CS', 3),
('SCS1105', 'Computer System 1', '1st year', 1, 'CS', 2),
('SCS1106', 'Laboratory I', '1st year', 1, 'CS', 1),
('SCS1107', 'Software Engineering I', '1st year', 2, 'CS', 2),
('SCS1108', 'Data Structures and Algorithms II', '1st year', 2, 'CS', 2),
('SCS1109', 'Programming II', '1st year', 2, 'CS', 3),
('SCS1110', 'Discrete Mathematics', '1st year', 2, 'CS', 2),
('SCS1111', 'Mathematics Methods II', '1st year', 2, 'CS', 2),
('SCS1112', 'Foundations of Computer Science', '1st year', 2, 'CS', 2),
('SCS1113', 'Statistics', '1st year', 2, 'CS', 2),
('SCS2000', 'Subject III', '2nd year', 3, 'CS', 2),
('SCS2001', 'Subject IV', '2nd year', 4, 'CS', 2),
('SCS2101', 'Data Structures and Algorithms III', '2nd year', 3, 'CS', 2),
('SCS2102', 'Group Project I', '2nd year', 4, 'CS', 2),
('SCS2103', 'Software Engineering II', '2nd year', 3, 'CS', 3),
('SCS2104', 'Programming III', '2nd year', 3, 'CS', 3),
('SCS2105', 'Computer Networks I', '2nd year', 3, 'CS', 2),
('SCS2106', 'Operating Systems', '2nd year', 4, 'CS', 3),
('SCS2107', 'Mathematical Methods III', '2nd year', 4, 'CS', 2),
('SCS2108', 'Programming IV', '2nd year', 4, 'CS', 3),
('SCS2109', 'Database II', '2nd year', 4, 'CS', 2),
('SCS2110', 'Pramming Language Concepts', '2nd year', 4, 'CS', 2),
('SCS2111', 'Laboratory II', '2nd year', 4, 'CS', 2),
('SCS2112', 'Automata Theory', '2nd year', 4, 'CS', 2),
('SCS3000', 'Subject V', '3rd year', 5, 'CS', 2),
('SCS3001', 'Subject VI', '3rd year', 6, 'CS', 2),
('SCS3100', 'Data Structures & Algorithms III', '3rd year', 5, 'CS', 2),
('SCS3101', 'Electronics I', '3rd year', 6, 'CS', 3),
('SCS3102', 'Networking', '3rd year', 5, 'CS', 3),
('SCS4000', 'Subject VII', '4th year', 7, 'CS', 3),
('SCS4001', 'Subject VIII', '4th year', 8, 'CS', 2),
('SCS4100', 'Software Engineering III', '4th year', 7, 'CS', 2),
('SCS4101', 'Compiler Theory II', '4th year', 8, 'CS', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(40) NOT NULL,
  `privilege` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id_4` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `hashed_password`, `privilege`, `name`, `full_name`, `staff_id`, `email`, `nic`, `id`, `image`) VALUES
('examin', 'd5d48b79c1ac0337ec85d1a767148acc1c086cfe', 'staff', 'ucsc exam', 'examination', '1234', 'exam@gmail.com', '', 4, ''),
('lecturer', '2f23a0532d1ede23f0ff71091928aa80d2b267ee', 'lecturer', 'ucsc lec', 'lecturer', 'UCSC254', 'lec@gmail.com', '', 5, ''),
('ucsc001', 'f12026b6bd205bbfe7c18537630b9736e08ad596', 'lecturer', 'W K L Thilakarathna', 'Wakwella Kankanamge Lal Thilakarathna', 'UCSC001', 'lalthilakarathna@ucsc.com', '', 7, ''),
('ucsc002', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', 'lecturer', 'A M Disanayaka', 'Athulath Mudalige Disanayaka', 'UCSC002', 'amd@ucsc.com', '', 8, ''),
('ucsc003', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'M Sirisena', 'Mayithripala Sirisena', 'UCSC003', 'sirisena@ucsc.ac.com', '', 9, ''),
('ucsc004', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'R H Premarathna', 'Ranapura Hewage Premarathne', 'UCSC004', 'premarathna@gmail.com', '', 10, ''),
('ucsc005', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'lecturer', 'S Wikramasinha', 'Sampath Wikramasinha', 'UCSC005', 'premarathna@gmail.com', '', 11, ''),
('Gihan', '08a1fb72749d9cbec38c868d3cb660edf1898a85', 'admin', 'G Wikramanayake', 'Gihan Wikramanayake', 'UCSC233', 'gihan@gmail.com', '', 20, 'user.jpg'),
('Damith', '683ca2e1564777d9776f266a7475cbb33a579ea1', 'admin', 'D D  Karunarathne', 'Damith Karunarathne', 'ucsc145', 'damith@ucsc.lk', '', 21, 'user.jpg'),
('Champika', '92c2669345ab8fb1d5151f4cd308c4b399599b24', 'academic', 'C Weerasooriya', 'Champika Weerasooriya', 'ucsc152', 'champika@gmail.com', '', 22, 'user.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_ibfk_1` FOREIGN KEY (`writer`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lecturer_subject`
--
ALTER TABLE `lecturer_subject`
  ADD CONSTRAINT `lecturer_subject_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `users` (`staff_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `lecturer_subject_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subjects` (`sub_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
