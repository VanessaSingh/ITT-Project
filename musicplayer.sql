-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 07:48 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`SID`, `NAME`, `ALBUM`, `ARTIST`, `GENRE`, `MOOD`, `ERA`, `DURATION`, `URL`) VALUES
(1, 'Northern Lights', 'Single', 'Cider Sky', 'Pop', '', 'Middle', '03:50', 'songs\\Northern Lights.wma'),
(2, 'Jalpari', 'Coke Studio', 'Atif Aslam', 'Fusion', '', 'Middle', '07:03', 'songs\\Jalpari.wma'),
(3, 'Hallelujah', 'Coke Studio', 'Karsh Kale', 'Fusion', '', 'Middle', '08:55', 'songs\\Hallelujah.MP3'),
(4, 'Dilruba', 'Coke Studio', 'Kailash Kher', 'Fusion', '', 'Middle', '05:35', 'songs\\Dilruba.MP3'),
(5, 'Dil Dhadakne Do', 'ZNMD', 'Shankar Mahadevan', 'Bolllywood', '', 'Middle', '03:45', 'songs\\Dil Dhadakne Do.mp3'),
(6, 'Khaabon Ke Parindey', 'ZNMD', 'Mohit Chauhan', 'Bollywood', '', 'Middle', '04:12', 'songs\\Khaabon Ke Parinday.mp3'),
(7, 'Der Lagi Lekin', 'ZNMD', 'Shankar Mahadevan', '', '', '', '05:55', 'songs\\Der Lagi Lekin.mp3'),
(8, 'Sooraj Ki Baahon Mein', 'ZNMD', 'Dominique Cere', 'Bollywood', '', '', '03:24', 'songs\\Sooraj Ki Baahon Mein.mp3'),
(9, 'Toh Zinda Ho Tum', 'ZNMD', 'Farhan Akhtar', 'Bollywood', '', '', '01:43', 'songs\\Toh Zinda Ho Tum.mp3'),
(10, 'Ik Junoon', 'ZNMD', 'Shankar Mahadevan', 'Bollywood', '', '', '04:59', 'songs\\Ik Junoon.mp3'),
(11, 'Breakeven', 'The Script', 'The Script', 'Rock', '', '', '04:19', 'songs\\Breakeven.mp3'),
(12, 'The Man Who Can''t Be Moved', 'The Script', 'The Script', '', '', '', '04:01', 'songs\\The Man Who Can''t Be Moved.mp3'),
(13, 'If Today Was Your Last Day', 'Dark Horse', 'Nickelback', 'Hard Rock', '', '', '04:08', 'songs\\If Today Was Your Last Day.mp3'),
(14, 'Burn It To The Ground', 'Dark Horse', 'Nickelback', 'Hard Rock', '', '', '03:31', 'songs\\Burn It To The Ground.mp3'),
(15, 'Rockstar', 'Dark Horse', 'Nickelback', 'Hard Rock', '', '', '04:15', 'songs\\RockStar.mp3'),
(16, 'Sham', 'Aisha', 'Nikhil D''Souza', 'Bollywood', '', '', '04:44', 'songs\\Sham.mp3'),
(17, 'Lehrein', 'Aisha', 'Nikhil D''Souza', 'Bollywood', '', '', '04:50', 'songs\\Lehrein.mp3'),
(18, 'Aashiyaan', 'Barfi', 'Nikhil Paul George', 'Bollywood', '', '', '03:54', 'songs\\Aashiyan.mp3'),
(19, 'Kyon', 'Barfi', 'Papon', 'Bollywood', '', '', '04:24', 'songs\\Kyon.mp3'),
(20, 'Main Kya Karoon', 'Barfi', 'Nikhil D''Souza', 'Bollywood', '', '', '04:26', 'songs\\Main Kya Karoon.mp3'),
(21, 'Yeh Tumhari Meri Baatein', 'Rock On', 'Dominique Cere', 'Bollywood', '', '', '04:46', 'songs\\Ye Tumhari Meri Baatein.wma'),
(22, 'Moves Like Jagger', 'Hands All Over', 'Maroon5', 'Pop', '', '', '03:49', 'songs\\Moves Like Jagger.MP3'),
(23, 'One More Night', 'Overexposed', 'Maroon5', 'Pop', '', '', '03:35', 'songs\\One More Night.wma'),
(24, 'Payphone', 'Overexposed', 'Maroon5', 'Pop', '', '', '03:56', 'songs\\Payphone.wma'),
(25, 'Back To December', 'Speak Now', 'Taylor Swift', 'Pop', '', '', '05:10', 'songs\\Back To December.wma'),
(26, 'Mean', 'Speak Now', 'Taylor Swift', 'Pop', '', '', '04:03', 'songs\\Mean.wma'),
(27, 'Mine', 'Speak Now', 'Taylor Swift', 'Pop', '', '', '03:56', 'songs\\Mine.wma'),
(28, 'Safe and Sound', 'The Hunger Games', 'Taylor Swift', 'Pop', '', '', '03:57', 'songs\\Safe and Sound.wma'),
(29, 'We Are Never Ever Getting Back Together', 'Red', 'Taylor Swift', 'Pop', '', '', '03:35', 'songs\\We Are Never Ever Getting Back Together.wma'),
(30, 'Yet', 'Hello Hurricane', 'Switchfoot', 'Rock', '', '', '03:53', 'songs\\Yet.mp3'),
(31, 'Enough To Let Me Go', 'Hello Hurricane', 'Switchfoot', 'Rock', '', '', '03:52', 'songs\\Enough To Let Me Go.mp3'),
(32, 'Dare You To Move', 'A Walk To Remember', 'Switchfoot', 'Rock', '', '', '04:07', 'songs\\Dare You To Move.mp3'),
(33, 'I''ll Be Waiting.mp3', 'It''s Time For A Love Revolution', 'Lenny Kravitz', 'Rock', '', '', '04:16', 'songs\\Dare You To Move.mp3'),
(34, 'Joker And The Thief', 'Wolfmother', 'Wolfmother', 'Hard Rock', '', '', '04:39', 'songs\\Joker And The Thief.mp3'),
(35, 'Learning To Breathe', 'Learning To Breathe', 'Switchfoot', 'Rock', '', '', '04:35', 'songs\\Learning To Breathe.mp3'),
(36, 'Stars', 'Nothing Is Sound', 'Switchfoot', 'Rock', '', '', '04:08', 'songs\\Stars.mp3'),
(37, 'Together We Cry', 'The Script', 'The Script', 'Pop', '', '', '03:50', 'songs\\Together We Cry.mp3'),
(38, 'The Reason', 'Reason', 'Hoobastank', 'Rock', '', '', '03:52', 'songs\\The Reason.mp3'),
(39, 'We Were Meant To Live ', 'The Beautiful Letdown', 'Switchfoot', 'Rock', '', '', '03:25', 'songs\\We Were Meant To Live.mp3'),
(40, 'You Found Me', 'Fray', 'The Fray', 'Rock', '', '', '04:03', 'songs\\You Found Me.mp3'),
(41, 'All My Loving', 'With The Beatles', 'The Beatles', 'Pop', '', '', '02:09', 'songs\\All My Loving.mp3'),
(42, 'Saw Her Standing There', 'With The Beatles', 'The Beatles', 'Pop', '', '', '02:55', 'songs\\Saw Her Standing There.mp3'),
(43, 'While My Guitar Gently Weeps', 'With The Beatles ', 'The Beatles', 'Pop', '', '', '04:46', 'songs\\While My Guitar Gently Weeps.mp3'),
(44, 'Californication', 'Californication', 'Red Hot Chiili Peppers', 'Rock', '', '', '05:22', 'songs\\Californication.mp3'),
(45, 'Dream On', 'Aerosmith', 'Aerosmith', 'Classic Rock', '', '', '05:22', 'songs\\Californication.mp3'),
(46, 'Hello', 'Hello', 'Adele', 'Pop', '', '', '04:56', 'songs\\Hello.mp3'),
(47, 'Highway To Hell', 'Highway To Hell.mp3', 'AC/DC', 'Hard Rock', '', '', '03:28', 'songs\\Highway To Hell.mp3'),
(48, 'Like I’m Gonna Lose You', 'Like I’m Gonna Lose You', 'John Legend', 'Pop', '', '', '03:25', 'songs\\Like I’m Gonna Lose You.mp3'),
(49, 'Abhi Na Jao Chhod Kar', 'Hum Dono', 'Rafi', 'Bollywood', '', '', '04:17', 'songs\\Abhi Na Jao Chhod Kar.mp3'),
(50, 'Mere Sapno Ki Rani', 'Aradhana', 'Kishore Kumar', 'Bollywood', '', '', '05:02', 'songs\\Mere Sapno Ki Rani.mp3'),
(51, 'Roop Tera Mastana', 'Aradhana', 'Kishore Kumar', 'Bollywood', '', '', '03:44', 'songs\\Roop Tera Mastana.mp3'),
(52, 'Aaj Jaane Ki Zid Na Karo', 'Aaj Jaane Ki Zid Na Karo', 'Farida Khannum', 'Bollywood', '', '', '09:48', 'songs\\Aaj Jaane Ki Zid Na Karo.mp3'),
(53, 'Aao Huzoor Tumko', 'Asha The Enchantress', 'Asha Bhonsle', 'Bollywood', '', '', '05:48', 'songs\\Aao Huzoor Tumko.mp3'),
(54, 'Dil Cheez Kya Hai', 'Umrao Jaan', 'Asha Bhonsle', 'Bollywood', '', '', '06:09', 'songs\\Dil Cheez Kya Hai.mp3'),
(55, 'Chal Ri Purwaiyan', 'Chupke Chupke', 'Lata Mangeshkar', 'Bollywood', '', '', '05:04', 'songs\\Chal Ri Purwaiyan.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
