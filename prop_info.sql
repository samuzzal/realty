-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2014 at 03:07 PM
-- Server version: 5.5.37
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realty`
--

-- --------------------------------------------------------

--
-- Table structure for table `prop_info`
--

CREATE TABLE IF NOT EXISTS `prop_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROP_TYPE` enum('plot','ind_house','apartment') DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `rate` float(12,2) DEFAULT NULL,
  `home_rate` float(12,2) DEFAULT NULL,
  `area` float(12,2) DEFAULT NULL,
  `dimension` varchar(10) DEFAULT NULL,
  `locality` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `distance_from_city` int(11) DEFAULT NULL,
  `sinte_no` int(11) DEFAULT NULL,
  `corner` char(1) DEFAULT NULL,
  `facing` char(1) DEFAULT NULL,
  `site_picture` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `prop_info`
--

INSERT INTO `prop_info` (`ID`, `PROP_TYPE`, `bedroom`, `rate`, `home_rate`, `area`, `dimension`, `locality`, `city`, `description`, `distance_from_city`, `sinte_no`, `corner`, `facing`, `site_picture`) VALUES
(1, 'ind_house', 2, 3200000.00, 5900000.00, 1200.00, '30X40', 'Vijayanagar 4th stage', 'Mysore', 'Full teak, Italian Kitchen, Living and Dining - Granite, 2 bed room, single floor, Wardrobe in both the bedrooms, MUDA Site, NearProposed Marimallappa School, Delhi Public School, 3KM from BMH Hospotal,  1 KM from SVEI College', 6, 8529, 'N', 'W', 'IMG_20140303_120926.jpg'),
(2, 'plot', NULL, 3800000.00, 0.00, 1200.00, '30X40', 'Vijayanagar 4th stage', 'Mysore', 'Muda, Behinde main road, NearProposed Marimallappa School, Delhi Public School, 3KM from BMH Hospotal,  1 KM from SVEI College', 6, 7727, 'N', 'N', 'IMG_20140303_121730.jpg'),
(3, 'plot', NULL, 2500000.00, 0.00, 1200.00, '30X40', 'Vijayanagar 4th stage', 'Mysore', 'MUDA approved , Private with excellent pals of the layout.3KM from BMH Hospotal  1 KM from SVEI College.', 7, 474, 'N', 'E', 'IMG_20140303_122923.jpg'),
(4, 'plot', NULL, 4800000.00, 0.00, 2400.00, '40X60', 'Sathagalli  A zone', 'Mysore', 'MUDA, Parallel to ring road, 300 Mteres from Vishweshwaraih Institute of Technology, Near St. Arnold Pre Primary School', 3, 1672, 'N', 'E', 'IMG_20140303_165232.jpg'),
(5, 'plot', NULL, 4200000.00, 0.00, 2400.00, '40X60', 'Sathagalli B Zone', 'Mysore', 'MUDA, Near Nice Road, Neart KSRTC bus Depoty, Near St. Arnold Pre Primary School, Vishweshwaraih Institute of Technology', 3, 667, 'N', 'N', 'IMG_20140303_170158.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
