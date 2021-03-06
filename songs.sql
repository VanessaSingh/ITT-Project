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
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `album` varchar(60) NOT NULL,
  `artist` varchar(60) NOT NULL,
  `genre` varchar(60) NOT NULL,
  `mood` varchar(60) NOT NULL,
  `era` varchar(60) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `url` varchar(150) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`sid`, `name`, `album`, `artist`, `genre`, `mood`, `era`, `duration`, `url`) VALUES
(1, 'Northern Lights', 'Single', 'Cider Sky', 'Pop', 'dreamy', 'Middle', '03:50', 'songs/NorthernLights.wma'),
(2, 'Jalpari', 'Coke Studio', 'Atif Aslam', 'Fusion', 'cheerful', 'Middle', '07:03', 'songs/Jalpari.wma'),
(3, 'Hallelujah', 'Coke Studio', 'Karsh Kale', 'Fusion', 'sufi', 'Middle', '08:55', 'songs/Hallelujah.MP3'),
(4, 'Dilruba', 'Coke Studio', 'Kailash Kher', 'Fusion', 'romantic', 'Middle', '05:35', 'songs/Dilruba.MP3'),
(5, 'Dil Dhadakne Do', 'ZNMD', 'Shankar Mahadevan', 'Bolllywood', 'travel', 'Middle', '03:45', 'songs/DilDhadakneDo.mp3'),
(6, 'Khaabon Ke Parindey', 'ZNMD', 'Mohit Chauhan', 'Bollywood', 'travel', 'Middle', '04:12', 'songs/KhaabonKeParinday.mp3'),
(7, 'Der Lagi Lekin', 'ZNMD', 'Shankar Mahadevan', 'Bollywood', 'meditation', '', '05:55', 'songs/DerLagiLekin.mp3'),
(8, 'Sooraj Ki Baahon Mein', 'ZNMD', 'Dominique Cere', 'Bollywood', 'cheerful', '', '03:24', 'songs/SoorajKiBaahonMein.mp3'),
(9, 'Toh Zinda Ho Tum', 'ZNMD', 'Farhan Akhtar', 'Bollywood', 'meditation', '', '01:43', 'songs/TohZindaHoTum.mp3'),
(10, 'Ik Junoon', 'ZNMD', 'Shankar Mahadevan', 'Bollywood', 'dance', '', '04:59', 'songs/IkJunoon.mp3'),
(11, 'Breakeven', 'The Script', 'The Script', 'Rock', 'romantic', '', '04:19', 'songs/Breakeven.mp3'),
(12, 'The Man Who Can''t Be Moved', 'The Script', 'The Script', '', 'romantic', '', '04:01', 'songs/TheManWhoCantBeMoved.mp3'),
(13, 'If Today Was Your Last Day', 'Dark Horse', 'Nickelback', 'Hard Rock', 'cheerful', '', '04:08', 'songs/IfTodayWasYourLastDay.mp3'),
(14, 'Burn It To The Ground', 'Dark Horse', 'Nickelback', 'Hard Rock', 'party', '', '03:31', 'songs/BurnItToTheGround.mp3'),
(15, 'Rockstar', 'Dark Horse', 'Nickelback', 'Hard Rock', 'cheerful', '', '04:15', 'songs/RockStar.mp3'),
(16, 'Sham', 'Aisha', 'Nikhil D''Souza', 'Bollywood', 'meditation', '', '04:44', 'songs/Sham.mp3'),
(17, 'Lehrein', 'Aisha', 'Nikhil D''Souza', 'Bollywood', 'meditation', '', '04:50', 'songs/Lehrein.mp3'),
(18, 'Aashiyaan', 'Barfi', 'Nikhil Paul George', 'Bollywood', 'patriotic', '', '03:54', 'songs/Aashiyan.mp3'),
(19, 'Kyon', 'Barfi', 'Papon', 'Bollywood', 'cheerful', '', '04:24', 'songs/Kyon.mp3'),
(20, 'Main Kya Karoon', 'Barfi', 'Nikhil D''Souza', 'Bollywood', 'romantic', '', '04:26', 'songs/MainKyaKaroon.mp3'),
(21, 'Yeh Tumhari Meri Baatein', 'Rock On', 'Dominique Cere', 'Bollywood', 'romantic', '', '04:46', 'songs/YeTumhariMeriBaatein.wma'),
(22, 'Moves Like Jagger', 'Hands All Over', 'Maroon5', 'Pop', 'edm', '', '03:49', 'songs/MovesLikeJagger.MP3'),
(23, 'One More Night', 'Overexposed', 'Maroon5', 'Pop', 'edm', '', '03:35', 'songs/OneMoreNight.wma'),
(24, 'Payphone', 'Overexposed', 'Maroon5', 'Pop', 'edm', '', '03:56', 'songs/Payphone.wma'),
(25, 'Back To December', 'Speak Now', 'Taylor Swift', 'Pop', 'romantic', '', '05:10', 'songs/BackToDecember.wma'),
(26, 'Mean', 'Speak Now', 'Taylor Swift', 'Pop', 'romantic', '', '04:03', 'songs/Mean.wma'),
(27, 'Mine', 'Speak Now', 'Taylor Swift', 'Pop', 'romantic', '', '03:56', 'songs/Mine.wma'),
(28, 'Safe and Sound', 'The Hunger Games', 'Taylor Swift', 'Pop', 'patriotic', '', '03:57', 'songs/SafeandSound.mp3'),
(29, 'We Are Never Ever Getting Back Together', 'Red', 'Taylor Swift', 'Pop', 'romantic', '', '03:35', 'songs/WeAreNeverEverGettingBackTogether.wma'),
(30, 'Yet', 'Hello Hurricane', 'Switchfoot', 'Rock', 'romantic', '', '03:53', 'songs/Yet.mp3'),
(31, 'Enough To Let Me Go', 'Hello Hurricane', 'Switchfoot', 'Rock', 'romantic', '', '03:52', 'songs/EnoughToLetMeGo.mp3'),
(32, 'Dare You To Move', 'A Walk To Remember', 'Switchfoot', 'Rock', 'salsa', '', '04:07', 'songs/DareYouToMove.mp3'),
(33, 'I''ll Be Waiting.mp3', 'It''s Time For A Love Revolution', 'Lenny Kravitz', 'Rock', 'romantic', '', '04:16', 'songs/IllBeWaiting.mp3'),
(34, 'Joker And The Thief', 'Wolfmother', 'Wolfmother', 'Hard Rock', 'edm', '', '04:39', 'songs/JokerAndTheThief.mp3'),
(35, 'Learning To Breathe', 'Learning To Breathe', 'Switchfoot', 'Rock', 'travel', '', '04:35', 'songs/LearningToBreathe.mp3'),
(36, 'Stars', 'Nothing Is Sound', 'Switchfoot', 'Rock', 'dreamy', '', '04:08', 'songs/Stars.mp3'),
(37, 'Together We Cry', 'The Script', 'The Script', 'Pop', 'party', '', '03:50', 'songs/TogetherWeCry.mp3'),
(38, 'The Reason', 'Reason', 'Hoobastank', 'Rock', 'party', '', '03:52', 'songs/TheReason.mp3'),
(39, 'We Were Meant To Live ', 'The Beautiful Letdown', 'Switchfoot', 'Rock', 'romantic', '', '03:25', 'songs/WeWereMeantToLive.mp3'),
(40, 'You Found Me', 'Fray', 'The Fray', 'Rock', 'meditation', '', '04:03', 'songs/YouFoundMe.mp3'),
(41, 'All My Loving', 'With The Beatles', 'The Beatles', 'Pop', 'salsa', '', '02:09', 'songs/AllMyLoving.mp3'),
(42, 'Saw Her Standing There', 'With The Beatles', 'The Beatles', 'Pop', 'romantic', '', '02:55', 'songs/SawHerStandingThere.mp3'),
(43, 'While My Guitar Gently Weeps', 'With The Beatles ', 'The Beatles', 'Pop', 'sufi', '', '04:46', 'songs/WhileMyGuitarGentlyWeeps.mp3'),
(44, 'Californication', 'Californication', 'Red Hot Chiili Peppers', 'Rock', 'meditation', '', '05:22', 'songs/Californication.mp3'),
(45, 'Dream On', 'Aerosmith', 'Aerosmith', 'Classic Rock', 'dreamy', '', '05:22', 'songs/DreamOn.mp3'),
(46, 'Hello', 'Hello', 'Adele', 'Pop', 'party', '', '04:56', 'songs/Hello.mp3'),
(47, 'Highway To Hell', 'Highway To Hell.mp3', 'AC/DC', 'Hard Rock', 'cheerful', '', '03:28', 'songs/HighwayToHell.mp3'),
(48, 'Like I’m Gonna Lose You', 'Like I’m Gonna Lose You', 'John Legend', 'Pop', 'romantic', '', '03:25', 'songs/LikeImGonnaLoseYou.mp3'),
(49, 'Abhi Na Jao Chhod Kar', 'Hum Dono', 'Rafi', 'Bollywood', 'romantic', '', '04:17', 'songs/AbhiNaJaoChhodKar.mp3'),
(50, 'Mere Sapno Ki Rani', 'Aradhana', 'Kishore Kumar', 'Bollywood', 'folk', '', '05:02', 'songs/MereSapnoKiRani.mp3'),
(51, 'Roop Tera Mastana', 'Aradhana', 'Kishore Kumar', 'Bollywood', 'folk', '', '03:44', 'songs/RoopTeraMastana.mp3'),
(52, 'Aaj Jaane Ki Zid Na Karo', 'Aaj Jaane Ki Zid Na Karo', 'Farida Khannum', 'Bollywood', 'romantic', '', '09:48', 'songs/AajJaaneKiZidNaKaro.mp3'),
(53, 'Aao Huzoor Tumko', 'Asha The Enchantress', 'Asha Bhonsle', 'Bollywood', 'romantic', '', '05:48', 'songs/AaoHuzoorTumko.mp3'),
(54, 'Dil Cheez Kya Hai', 'Umrao Jaan', 'Asha Bhonsle', 'Bollywood', 'romantic', '', '06:09', 'songs/DilCheezKyaHai.mp3'),
(55, 'Chal Ri Purwaiyan', 'Chupke Chupke', 'Lata Mangeshkar', 'Bollywood', 'cheerful', '', '05:04', 'songs/ChalRiPurwaiyan.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
