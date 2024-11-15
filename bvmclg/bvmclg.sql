-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2013 at 07:47 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bvmclg`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Contact` text NOT NULL,
  `Date` date NOT NULL,
  `Course` text NOT NULL,
  `Email` text NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`ID`, `Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES
(1, 'Saurabh Kumar Tiwari', '9301025373', '2013-06-07', 'MCA', 'saurabhkrtiwari@gmail.com', 'Hi this is First record.'),
(2, '', '', '2013-06-09', 'MBA', '', ''),
(3, '', '', '2013-06-09', 'MBA', '', ''),
(4, '', '', '2013-06-09', '', '', ''),
(5, '', '', '2013-06-09', '', '', ''),
(6, '', '', '2013-06-09', '', '', ''),
(7, '', '', '2013-06-09', 'MBA', '', ''),
(8, '', '', '2013-06-09', 'BCA', '', ''),
(9, '', '', '2013-06-09', 'MBA', '', ''),
(10, '', '', '2013-06-09', 'MBA', '', ''),
(11, '', '', '2013-06-09', '', '', ''),
(12, '', '', '2013-06-09', '', '', ''),
(13, '', '', '2013-06-09', '', '', ''),
(14, '', '', '2013-06-09', '', '', ''),
(15, 'fFSAfc', '9301025373', '2013-06-09', 'MCA', 'sweetpreeti.rathi@gmail.com', 'gxduydxvdxgasx'),
(16, 'fFSAfc', '9301025373', '2013-06-09', 'MCA', 'bvm.saurabh@gmail.com', 'gxduydxvdxgasx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
