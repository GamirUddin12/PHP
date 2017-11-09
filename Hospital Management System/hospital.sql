-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2017 at 06:39 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed_assign`
--

CREATE TABLE IF NOT EXISTS `bed_assign` (
  `p_id` varchar(30) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `DeptId` varchar(30) NOT NULL,
  `DeptName` varchar(15) DEFAULT NULL,
  `Seat` int(11) NOT NULL,
  `SeatRemained` int(5) NOT NULL,
  PRIMARY KEY (`DeptId`),
  UNIQUE KEY `DeptId` (`DeptId`),
  UNIQUE KEY `DeptName` (`DeptName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p_admission`
--

CREATE TABLE IF NOT EXISTS `p_admission` (
  `p_id` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_age` varchar(4) NOT NULL,
  `p_gender` varchar(7) NOT NULL,
  `p_dept` varchar(20) NOT NULL,
  `p_complication` varchar(200) NOT NULL,
  `p_admission_date` varchar(15) NOT NULL,
  `p_date_of_birth` varchar(15) NOT NULL,
  `p_bed_no` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p_cured`
--

CREATE TABLE IF NOT EXISTS `p_cured` (
  `p_id` varchar(30) NOT NULL,
  `p_release_date` varchar(12) NOT NULL,
  `p_treatment` varchar(200) NOT NULL,
  `p_condition` varchar(300) NOT NULL,
  `p_bill` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p_dead`
--

CREATE TABLE IF NOT EXISTS `p_dead` (
  `p_id` varchar(30) NOT NULL,
  `p_date_of_death` varchar(15) NOT NULL,
  `p_treatment` varchar(300) NOT NULL,
  `p_death_reason` varchar(300) NOT NULL,
  `p_bill` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `time` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
