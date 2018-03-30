-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2018 at 05:50 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) DEFAULT NULL,
  `opt1` varchar(200) DEFAULT NULL,
  `opt2` varchar(200) DEFAULT NULL,
  `opt3` varchar(200) DEFAULT NULL,
  `opt4` varchar(200) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `type` varchar(500) DEFAULT 'quiz',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `image`, `type`) VALUES
(1, '7 + 2*3', 'Odd', 'Even', NULL, NULL, 'Odd', NULL, 'oddeven'),
(2, NULL, 'Epiphany', 'Elementary', 'Emacs', 'Simphony', 'Elementary', 'q1.jpg', 'logo'),
(3, '7 * 3 + 5', 'Odd', 'Even', '3', '4', 'Even', NULL, 'oddeven'),
(4, '9', 'Iris', 'Spark', 'Hadoop', 'Cassandra', 'Cassandra', 'q2.jpg', 'logo'),
(5, '(8+3)*(12-3)', 'Odd', 'Even', 'bsd', 'bfb ', 'Odd', 'bdbf', 'oddeven'),
(6, 'bdb d', 'Vue', 'Vuforia', 'VueJS', 'Vector', 'VueJS', 'q3.png', 'logo'),
(7, '(9-7)+(2*3)', 'Odd', 'Even', 'vwev', 'qwrbva', 'Even', 'wv sz', 'oddeven'),
(8, 't4', 'Electron', 'Aurelia', 'Code Ignitor', 'FlexBox', 'Aurelia', 'q4.png', 'logo'),
(9, '(44/4)*3', 'Odd', 'Even', 'serbws', 'aebfs', 'Odd', 'gwsergw', 'oddeven'),
(10, 'qfved', 'GNU', 'GRUB', 'GREP', 'Bison', 'GNU', 'q5.png', 'logo'),
(11, '(6*11)+(9-2)', 'Odd', 'Even', '2fvsrbv', 'qf3veaf', 'Odd', 'frqaegwe', 'oddeven'),
(12, 'ewgfvsegqfgvs', 'OSI', 'YACC', 'FSF', 'Apache', 'OSI', 'q6.png', 'logo'),
(13, '(4)^3 + (9-4)', 'Odd', 'Even', 'qwfqe', 'wrfqef', 'Odd', 'rfqfa', 'oddeven'),
(14, 'xfcawgvsfaev', 'Joomla', 'NodeJS', 'Oracle', 'WikiMedia', 'WikiMedia', 'q7.png', 'logo'),
(15, 'gvfsedv', 'Redox', 'Rust', 'React', 'Yarn', 'Rust', 'q8.png', 'logo'),
(16, '(7-9)+(6^4)', 'Odd', 'Even', 'casvd ', 'sdvawv', 'Even', 'vvavcawc', 'oddeven'),
(17, 'xcwdv', 'Flex', 'FSF', 'Unreal', 'Unity', 'Unreal', 'q9.png', 'logo'),
(18, '(45%5)+(8/2)', 'Odd', 'Even', 'XVAS', 'SDVA', 'Even', 'ADVAW', 'oddeven'),
(19, '(69-7)*(2+3)', 'Odd', 'Even', 'FDHTYH', 'FHDTR', 'Odd', 'FGDFGR', 'oddeven'),
(20, '(23+9)-7', 'Odd', 'Even', 'CF', 'DF', 'Even', 'G', 'oddeven'),
(21, '(4-6)+(89-43)', 'Odd', 'Even', 'ASDVASDVASDVA', 'SDVADV', 'Even', 'SDVABV', 'oddeven'),
(22, '(1)^1026+(9*7)', 'Odd', 'Even', 'SDBVBA', 'SCBAV', 'Even', 'ASVAV', 'oddeven'),
(23, '', 'PixieJS', 'PhasorJS', 'Godot', 'Cryengine', 'Godot', 'q10.png', 'logo'),
(24, NULL, 'Apache Server', 'Ajax', 'Angular JS', 'Archery', 'Angular JS', 'Angular JS.png', 'logo'),
(25, NULL, 'At&T', 'iBall', 'SanDisk', 'Airtel', 'Airtel', 'Airtel.png', 'quiz'),
(26, NULL, 'Bing', 'CloudWorld', 'Microsoft Cloud', 'G Drive', 'Bing', 'Bing', 'logo.jpg'),
(27, NULL, 'Android JellyBean', 'Candy Crush Saga', 'Android Lollypop', 'Candy Ville', 'Candy Crush Saga', 'Candy Crush Saga.jpg', 'logo'),
(28, NULL, 'AXML', 'Android Viewer', 'App Store', 'None of these', 'App Store', 'App Store.jpg', 'logo'),
(29, NULL, 'E-Target', 'Spamton', 'T-Mobile', 'Norton', 'Norton', 'Norton.png', 'logo'),
(30, NULL, 'BlueFish', 'Blue Firm', 'Blue Shark', 'None of these', 'BlueFish', 'BlueFish.jpg', 'logo'),
(31, NULL, 'Dream Viewer', 'Myntra.com', 'RedBus.in', 'MTS', 'MTS', 'MTS.jpg', 'logo'),
(32, NULL, 'Google Wallet', 'Bluestacks', 'Android Bucket', 'None of these', 'Bluestacks', 'Bluestacks.jpg', 'logo'),
(33, NULL, 'iTune', 'i-Reader', 'iPod', 'Iball', 'Iball', 'Iball.jpg', 'logo'),
(34, NULL, 'GeekLog 7', 'Mamboo 3', 'Concrete 5', 'CSS 2', 'Concrete 5', 'Concrete 5.jpg', 'logo'),
(35, NULL, 'Xoops', 'XCode', 'XQueue', 'XOL', 'XCode', 'XCode.jpg', 'logo'),
(36, NULL, 'GhostClean', 'ModX', 'Scuttle', 'Snapchat', 'Snapchat', 'Snapchat.png', 'logo'),
(37, NULL, 'BigData', 'Bitcoin', 'BigRocks', 'BlockChain', 'Bitcoin', 'Bitcoin.png', 'logo'),
(38, NULL, 'Minions', 'Android', 'Go Language', 'Node JS', 'Go Language', 'Go Language.jpg', 'logo');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Score` int(10) NOT NULL DEFAULT '0',
  `Level` int(10) DEFAULT '0',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `Name`, `Score`, `Level`, `Time`, `IP`) VALUES
(30, 'Aswin', 70, 1, '2018-03-28 14:34:23', '::1'),
(31, 'Aswin', 10, 1, '2018-03-28 14:41:54', '::1'),
(32, 'Aswin', 30, 1, '2018-03-29 17:21:32', '::1'),
(33, 'Aswin', 30, 1, '2018-03-29 17:44:27', '::1'),
(34, NULL, 30, 1, '2018-03-29 18:10:53', '::1'),
(35, NULL, 0, 1, '2018-03-29 18:13:00', '::1'),
(36, NULL, 0, 1, '2018-03-29 18:14:31', '::1'),
(37, NULL, 0, 1, '2018-03-29 18:26:23', '::1'),
(38, NULL, 0, 1, '2018-03-29 18:53:26', '::1'),
(39, NULL, 0, 1, '2018-03-29 18:55:19', '::1'),
(40, NULL, 0, 1, '2018-03-30 04:39:42', '::1'),
(41, NULL, 0, 1, '2018-03-30 04:43:10', '::1'),
(42, 'Aswin', 0, 1, '2018-03-30 06:41:54', '::1'),
(43, 'Aswin', 0, 1, '2018-03-30 07:07:46', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `temp_table`
--

DROP TABLE IF EXISTS `temp_table`;
CREATE TABLE IF NOT EXISTS `temp_table` (
  `uniq` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) DEFAULT NULL,
  `life` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uniq`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_table`
--

INSERT INTO `temp_table` (`uniq`, `id`, `life`) VALUES
(1, 1, NULL),
(2, 4, NULL),
(3, 4, NULL),
(4, 3, NULL),
(5, 2, NULL),
(6, 2, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
