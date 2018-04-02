-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2018 at 12:46 PM
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
-- Database: `ocultacion`
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
  `type` varchar(500) DEFAULT 'text',
  `time` int(10) DEFAULT '120',
  `score` int(10) DEFAULT '5',
  `section` varchar(30) NOT NULL DEFAULT 'logical',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `image`, `type`, `time`, `score`, `section`) VALUES
(39, 'Look at this series: <br/> 2, 1, (1/2), (1/4), ... <br/>What number should come next?', '(1/3)', '(1/8)', '(2/8)', '(1/16)', '(1/8)', NULL, 'text', 20, 5, 'logical');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Score` int(10) NOT NULL DEFAULT '0',
  `Count` int(10) DEFAULT '0',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(200) DEFAULT NULL,
  `Correct` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `Name`, `Score`, `Count`, `Time`, `IP`, `Correct`) VALUES
(44, '1000', 0, 1, '2018-04-02 12:40:40', '::1', 0);

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
