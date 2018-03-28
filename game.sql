-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2018 at 07:20 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `image`, `type`) VALUES
(1, '7 + 2*3', 'Odd', 'Even', NULL, NULL, 'Odd', NULL, 'oddeven'),
(2, NULL, 'Epiphany', 'Elementary', 'Emacs', 'Simphony', 'Elementary', 'q1.jpg', 'logo'),
(3, '7 * 3 + 5', 'Odd', 'Even', '3', '4', 'Even', NULL, 'oddeven'),
(4, '9', 'Iris', 'Spark', 'Hadoop', 'Cassandra', 'Cassandra', 'q2.jpg', 'logo'),
(5, '(8+3)*(12-3)', 'Odd', 'Even', 'bsd', 'bfb ', 'Even', 'bdbf', 'oddeven'),
(6, 'bdb d', 'Vue', 'Vuforia', 'VueJS', 'Vector', 'VueJS', 'q3.png', 'logo'),
(7, '(9-7)+(2*3)', 'Odd', 'Even', 'vwev', 'qwrbva', 'Even', 'wv sz', 'oddeven'),
(8, 't4', 'Electron', 'Aurelia', 'Code Ignitor', 'FlexBox', 'Aurelia', 'q4.png', 'logo'),
(9, '(44/4)*3', 'Odd', 'Even', 'serbws', 'aebfs', 'Odd', 'gwsergw', 'oddeven'),
(10, 'qfved', 'GNU', 'GRUB', 'GREP', 'Bison', 'GNU', 'q5.png', 'logo'),
(11, '(6*11)+(9-2)', 'Odd', 'Even', '2fvsrbv', 'qf3veaf', 'Odd', 'frqaegwe', 'oddeven'),
(12, 'ewgfvsegqfgvs', 'OSI', 'YACC', 'FSF', 'Apache Foundation', 'OSI', 'q6.png', 'logo'),
(13, '(4)^3 + (9-4)', 'Odd', 'Even', 'qwfqe', 'wrfqef', 'Odd', 'rfqfa', 'oddeven'),
(14, 'xfcawgvsfaev', 'Joomla', 'NodeJS Foundation', 'Oracle', 'WikiMedia', 'WikiMedia', 'q7.png', 'logo'),
(15, 'gvfsedv', 'Redox', 'Rust', 'React', 'Yarn', 'Rust', 'q8.png', 'logo'),
(16, '(7-9)+(6^4)', 'Odd', 'Even', 'casvd ', 'sdvawv', 'Even', 'vvavcawc', 'oddeven'),
(17, 'xcwdv', 'Flex', 'FSF', 'Unreal', 'Unity', 'Unreal', 'q9.png', 'logo'),
(18, '(45%5)+(8/2)', 'Odd', 'Even', 'XVAS', 'SDVA', 'Even', 'ADVAW', 'oddeven'),
(19, '(69-7)*(2+3)', 'Odd', 'Even', 'FDHTYH', 'FHDTR', 'Odd', 'FGDFGR', 'oddeven'),
(20, '(23+9)-7', 'Odd', 'Even', 'CF', 'DF', 'Odd', 'G', 'oddeven'),
(21, '(4-6)+(89-43)', 'Odd', 'Even', 'ASDVASDVASDVA', 'SDVADV', 'Even', 'SDVABV', 'oddeven'),
(22, '(1)^1026+(9*7)', 'Odd', 'Even', 'SDBVBA', 'SCBAV', 'Even', 'ASVAV', 'oddeven'),
(23, '3^2 + 5', 'PixieJS', 'PhasorJS', 'Godot', 'Cryengine', 'Godot', 'q10.png', 'logo');

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
