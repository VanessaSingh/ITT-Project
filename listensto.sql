-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 12:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beatsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `listensto`
--

CREATE TABLE IF NOT EXISTS `listensto` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `uid` int(150) NOT NULL,
  `sid` int(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `listensto`
--

INSERT INTO `listensto` (`id`, `uid`, `sid`) VALUES
(1, 3, 6),
(2, 3, 7),
(3, 3, 7),
(4, 3, 5),
(5, 3, 5),
(6, 3, 5),
(7, 3, 5),
(8, 3, 6),
(9, 3, 5),
(10, 3, 1),
(11, 3, 3),
(12, 3, 4),
(13, 3, 2),
(14, 3, 6),
(15, 3, 4),
(16, 3, 4),
(17, 3, 12),
(18, 3, 1),
(19, 3, 8),
(20, 3, 8),
(21, 3, 5),
(22, 3, 1),
(23, 3, 2),
(24, 3, 4),
(25, 3, 47),
(26, 3, 15),
(27, 3, 1),
(28, 3, 6),
(29, 3, 7),
(30, 3, 8),
(31, 3, 14),
(32, 3, 43),
(33, 3, 23),
(34, 3, 24),
(35, 3, 34),
(36, 3, 22),
(37, 3, 23),
(38, 3, 24),
(39, 3, 34),
(40, 3, 22),
(41, 3, 24),
(42, 3, 23),
(43, 3, 23),
(44, 3, 23),
(45, 3, 23),
(46, 3, 23),
(47, 3, 23),
(48, 3, 23),
(49, 3, 23),
(50, 3, 23),
(51, 3, 23),
(52, 3, 23),
(53, 3, 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
