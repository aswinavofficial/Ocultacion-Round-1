-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2018 at 09:23 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.1.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
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
  `section` varchar(30) NOT NULL DEFAULT 'logical'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `image`, `type`, `time`, `score`, `section`) VALUES
(39, 'Look at this series: <br/> 2, 1, (1/2), (1/4), ... <br/>What number should come next?', '(1/3)', '(1/8)', '(2/8)', '(1/16)', '(1/8)', NULL, 'text', 20, 5, 'logical'),
(40, 'Fact 1: Most stuffed toys are stuffed with beans.<br/>Fact 2: There are stuffed bears and stuffed tigers.<br/>Fact 3: Some chairs are stuffed with beans.<br/>If the first three statements are facts, which of the following statements must also be a fact?<br/>I. Only children’s chairs are stuffed with beans.<br/>II. All stuffed tigers are stuffed with beans.<br/>III. Stuffed monkeys are not stuffed with beans.', 'I only ', 'II only ', 'II and III only ', 'None of the statements is a known fact.', 'None of the statements is a known fact.', NULL, 'text', 120, 5, 'logical'),
(41, '2  44  4  41  6  38  8', '10  12 ', '35 32 ', '34  9', '35  10', '35  10', NULL, 'text', 120, 5, 'logical'),
(42, '20 20 17 17 14 14 11', '8 8', '11 11', '11 14', '11 8', '11 8', NULL, 'text', 120, 5, 'logical'),
(43, 'If two painters can complete painting of two rooms in two hours.<br/>How many painters would be needed to to paints eighteen rooms in six hours ?', '10', '6', '3', '4', '6', NULL, 'text', 120, 5, 'logical'),
(44, 'Detective James Gordon needs to access a secret door that can be accessed only by a code. The code is about 7 characters and consists of numbers and alphabets. There was a picture just above the door as shown below with the text "You force heaven to be empty".<br/>Can you help Detective James Gordon to break the code? ', 'u472bmt', 'u27b4mt', 'um472bmt', 'ubmt472', 'u472bmt', NULL, 'text', 120, 5, 'logical'),
(45, 'Jigsaw forced Mahrez and Vardy to play the game of death.<br/>Jigsaw placed 11 marbles at the table and asked Mahrez and Vardy to pick marble(s) one by one with the following rules:<br/>1. You need to pick at least one marble.<br/>2. You can\'t pick more than five marbles.<br/>The one that picks the last marble will die.<br/>Mahrez to start the game<br/>How many marbles must Mahrez pick in order to make sure that he came out from the game alive?', '2', '3', '4', '6', '4', NULL, 'text', 120, 5, 'logical'),
(46, 'Today is Ramanujan birthday.<br/>A year Ago on his birthday, he had five candles and he lit all except the last one.<br/>Today he is going to light all the candles.<br/>How old is Ramanujan Today?<br/>Note: He is not turning five today.', '32', '34', '31', '35', '31', NULL, 'text', 120, 5, 'logical'),
(47, 'We all know that square root of number 121 is 11.<br/>But do you know what si the square root of the number "12345678987654321" ?', '11111', '111111', '111111111', '1111111111', '111111111', NULL, 'text', 120, 5, 'logical'),
(48, 'Dean Sam and Castiel are three brothers.<br/>Interestingly their current age is prime. <br/>What\'s more interesting that difference between their ages is also prime.<br/>How old are they ?', 'sam:11 dean:13 castiel:17', 'sam:19 dean:23 castiel:29', 'sam:2 dean:5 castiel:7', 'not possible', 'not possible', NULL, 'text', 120, 5, 'logical'),
(49, 'Z, W, S, P, L, I, E, ? ', 'B', 'D', 'F', 'K', 'B', NULL, 'text', 120, 5, 'logical'),
(50, 'A, I, P, V, A, E, ? ', 'E', 'F', 'G', 'H', 'H', NULL, 'text', 120, 5, 'logical'),
(51, 'EJO, TYD, INS, XCH, ? ', 'NRW', 'MRW', 'MSX', 'NSX', 'MRW', NULL, 'text', 120, 5, 'logical'),
(52, 'ABA, EDE, IFI, ? ', 'UGU', 'OIO', 'OHO', 'OMS', 'OHO', NULL, 'text', 120, 5, 'logical'),
(53, 'adb_ac_da_cddcb_dbc_cbda ', 'bccba', 'cbbaa', 'ccbba', 'bbcad', 'cbbaa', NULL, 'text', 120, 5, 'logical'),
(54, 'Pointing to a photograph, a man said, "I have no brother or sister but that man’s father is my father’s son." Whose photograph was it? ', 'His own', 'His nephew’s', 'His father’s', 'His son’s', 'His son’s', NULL, 'text', 120, 5, 'logical'),
(55, 'Pointing to a man in a photograph, a woman said, "His brother\'s father is the only son of my grandfather." How is the woman related to the man in the photograph? ', 'Sister', 'Aunt', 'Grandmother', 'Daughter', 'Sister', NULL, 'text', 120, 5, 'logical'),
(56, 'If TRANSFER is coded as RTNAFSRE, then ELEPHANT would be coded as ', 'LEPEHATN', 'LEPEAHTN', 'LEEPAHTN', 'LEPEAHNT', 'LEPEAHTN', NULL, 'text', 120, 5, 'logical'),
(57, 'WINDOW : CURTAIN :: ', 'Door : Frame', 'Book : Jacket', 'CPU : Cabinet', 'Casing : Wire', 'CPU : Cabinet', NULL, 'text', 120, 5, 'logical'),
(59, 'He lives near a lovely ...... of countryside.', 'length', 'piece', 'section', 'stretch', 'stretch', NULL, 'text', 120, 5, 'verbal'),
(60, 'Owing to the power cut in the area, factories are being forced to ...... men', 'throw away', 'send off', 'put off', 'lay off', 'lay off', NULL, 'text', 120, 5, 'verbal'),
(61, 'Since the beginning of history<br/>P:have managed to catch<br/>Q:the Eskimos and Red Indians<br/>R:by a very difficulty method<br/>S:a few specimens of this aquatic animal', 'QRPS', 'SQPR', 'SQRP', 'QPSR', 'QPSR', NULL, 'text', 120, 5, 'verbal'),
(62, 'Ramesh is as tall if not, taller than Mahesh.', 'not as tall but', 'not so tall but as', 'as tall as,if not', 'as if not', 'as tall as,if not', NULL, 'text', 120, 5, 'verbal'),
(63, 'In the following questions choose the word which best expresses the meaning of the given word.<br/>VORACIOUS', 'Wild', 'Greedy', 'Angry', 'Quick', 'Greedy', NULL, 'text', 120, 5, 'verbal'),
(64, 'In the following questions choose the word which best expresses the meaning of the given word.<br/>We were <u>not</u> the wiser for all this effort to explain the case to us.', 'none', 'neither', 'neverthless', 'no improvement', 'none', NULL, 'text', 120, 5, 'logical'),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'text', 120, 5, 'verbal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
