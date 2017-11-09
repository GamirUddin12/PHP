-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 01:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `dose`
--

CREATE TABLE IF NOT EXISTS `dose` (
  `dose` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dose`
--

INSERT INTO `dose` (`dose`) VALUES
('1+1+1'),
('&#2536;+&#2534;+&#2536;'),
('&#2535;+&#2535;+&#2535;'),
('&#2535;+&#2534;+&#2535;');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE IF NOT EXISTS `duration` (
  `duration` varchar(300) NOT NULL,
  UNIQUE KEY `duration` (`duration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`duration`) VALUES
('&#2535;&#2534; &#2470;&#2495;&#2472;'),
('&#2536; &#2488;&#2474;&#2509;&#2468;&#2494;&#2489;'),
('7 days');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `trade_name` varchar(100) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `generic_name` varchar(100) NOT NULL,
  UNIQUE KEY `trade_name` (`trade_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`trade_name`, `company_name`, `generic_name`) VALUES
('glucose', 'beximco', 'C6H12O6'),
('gomir glucose', 'gomir company', 'C6H12O6'),
('ashik glucose', 'ashik company', 'C6H12O6'),
('salt', 'eurica', 'sodium cloride'),
('gomir lobon', 'eurica', 'magnecium sulphate'),
('atel', 'eurica', 'ashik cloride');

-- --------------------------------------------------------

--
-- Table structure for table `preperation`
--

CREATE TABLE IF NOT EXISTS `preperation` (
  `preperation` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preperation`
--

INSERT INTO `preperation` (`preperation`) VALUES
('tablet'),
('selain'),
('capsule'),
('injection');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `class` varchar(30) NOT NULL,
  `generic_name` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`class`, `generic_name`) VALUES
('antibiotic', 'C6H12O6'),
('ppi', 'C6H12O6'),
('antibiotic', 'sodium cloride'),
('ppi', 'magnecium sulphate'),
('antibiotic', 'ashik cloride');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `rule` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`rule`) VALUES
('after eating'),
('&#2454;&#2503;&#2468;&#2503; &#2454;&#2503;&#2468;&#2503;'),
('&#2457;&#2509;&#2454;&#2494;&#2451;&#2527;&#2494;&#2480; &#2474;&#2480;');

-- --------------------------------------------------------

--
-- Table structure for table `strength`
--

CREATE TABLE IF NOT EXISTS `strength` (
  `strength` varchar(20) NOT NULL,
  UNIQUE KEY `strength` (`strength`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strength`
--

INSERT INTO `strength` (`strength`) VALUES
('500 gm/ml'),
('70 ml');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
