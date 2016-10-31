-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 09:11 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicplayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `listensto`
--

DROP TABLE IF EXISTS `listensto`;
CREATE TABLE IF NOT EXISTS `listensto` (
  `UID` int(10) NOT NULL,
  `SID` int(10) NOT NULL,
  `FREQUENCY` int(10) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `SID` int(10) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(60) NOT NULL,
  `ALBUM` varchar(60) NOT NULL,
  `ARTIST` varchar(60) NOT NULL,
  `GENRE` varchar(60) NOT NULL,
  `MOOD` varchar(60) NOT NULL,
  `ERA` varchar(60) NOT NULL,
  `DURATION` varchar(10) NOT NULL,
  `URL` varchar(150) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`SID`, `NAME`, `ALBUM`, `ARTIST`, `GENRE`, `MOOD`, `ERA`, `DURATION`, `URL`) VALUES
(1, 'Northern Lights', 'Single', 'Cider Sky', 'Pop', '', 'Middle', '03:50', ''),
(2, 'Jalpari', 'Coke Studio', 'Atif Aslam', 'Fusion', '', 'Middle', '07:03', ''),
(3, 'Hallelujah', 'Coke Studio', 'Karsh Kale', 'Fusion', '', 'Middle', '08:55', ''),
(4, 'Dilruba', 'Coke Studio', 'Kailash Kher', 'Fusion', '', 'Middle', '05:35', ''),
(5, 'Dil Dhadakne Do', 'ZNMD', 'Shankar Mahadevan', 'Bolllywood', '', 'Middle', '03:45', ''),
(6, 'Khaabon Ke Parindey', 'ZNMD', 'Mohit Chauhan', 'Bollywood', '', 'Middle', '04:12', ''),
(7, 'Der Lagi Lekin', 'ZNMD', 'Shankar Mahadevan', '', '', '', '05:55', ''),
(8, 'Sooraj Ki Baahon Mein', 'ZNMD', 'Dominique Cere', 'Bollywood', '', '', '03:24', ''),
(9, 'Toh Zinda Ho Tum', 'ZNMD', 'Farhan Akhtar', 'Bollywood', '', '', '01:43', ''),
(10, 'Ik Junoon', 'ZNMD', 'Shankar Mahadevan', 'Bollywood', '', '', '04:59', ''),
(11, 'Breakeven', 'The Script', 'The Script', 'Rock', '', '', '04:19', ''),
(12, 'The Man Who Can''t Be Moved', 'The Script', 'The Script', '', '', '', '04:01', ''),
(13, 'If Today Was Your Last Day', 'Dark Horse', 'Nickelback', 'Hard Rock', '', '', '04:08', ''),
(14, 'Burn It To The Ground', 'Dark Horse', 'Nickelback', 'Hard Rock', '', '', '03:31', ''),
(15, 'Rockstar', 'Dark Horse', 'Nickelback', 'Hard Rock', '', '', '04:15', ''),
(16, 'Sham', 'Aisha', 'Nikhil D''Souza', 'Bollywood', '', '', '04:44', ''),
(17, 'Lehrein', 'Aisha', 'Nikhil D''Souza', 'Bollywood', '', '', '04:50', ''),
(18, 'Aashiyaan', 'Barfi', 'Nikhil Paul George', 'Bollywood', '', '', '03:54', ''),
(19, 'Kyon', 'Barfi', 'Papon', 'Bollywood', '', '', '04:24', ''),
(20, 'Main Kya Karoon', 'Barfi', 'Nikhil D''Souza', 'Bollywood', '', '', '04:26', ''),
(21, 'Yeh Tumhari Meri Baatein', 'Rock On', 'Dominique Cere', 'Bollywood', '', '', '04:46', ''),
(22, 'Moves Like Jagger', 'Hands All Over', 'Maroon5', 'Pop', '', '', '03:49', ''),
(23, 'One More Night', 'Overexposed', 'Maroon5', 'Pop', '', '', '03:35', ''),
(24, 'Payphone', 'Overexposed', 'Maroon5', 'Pop', '', '', '03:56', ''),
(25, 'Back To December', 'Speak Now', 'Taylor Swift', 'Pop', '', '', '05:10', ''),
(26, 'Mean', 'Speak Now', 'Taylor Swift', 'Pop', '', '', '04:03', ''),
(27, 'Mine', 'Speak Now', 'Taylor Swift', 'Pop', '', '', '03:56', ''),
(28, 'Safe and Sound', 'The Hunger Games', 'Taylor Swift', 'Pop', '', '', '03:57', ''),
(29, 'We Are Never Ever Getting Back Together', 'Red', 'Taylor Swift', 'Pop', '', '', '03:35', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
