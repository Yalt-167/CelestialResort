-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2023 at 03:56 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysitelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `celestialresort`
--

CREATE TABLE IF NOT EXISTS `celestialresort` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `celestialresort`
--

INSERT INTO `celestialresort` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, 'aze@gmail.com', 'aze', 'qsd'),
(0, 'aze@gmail.com', 'aze', 'qsd'),
(0, 'aze@gmail.com', 'aze', 'qsd'),
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `commentsreviews`
--

CREATE TABLE IF NOT EXISTS `commentsreviews` (
`commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentContent` text NOT NULL,
  `commentSenderName` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

CREATE TABLE IF NOT EXISTS `core` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'hjk');

-- --------------------------------------------------------

--
-- Table structure for table `farewell`
--

CREATE TABLE IF NOT EXISTS `farewell` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farewell`
--

INSERT INTO `farewell` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'ghj');

-- --------------------------------------------------------

--
-- Table structure for table `forsakencity`
--

CREATE TABLE IF NOT EXISTS `forsakencity` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forsakencity`
--

INSERT INTO `forsakencity` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, 'aze@gmail.com', 'aze', 'fhjfghf\r\n'),
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `goldenridge`
--

CREATE TABLE IF NOT EXISTS `goldenridge` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goldenridge`
--

INSERT INTO `goldenridge` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'qsd'),
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `mirrortemple`
--

CREATE TABLE IF NOT EXISTS `mirrortemple` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mirrortemple`
--

INSERT INTO `mirrortemple` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `oldsite`
--

CREATE TABLE IF NOT EXISTS `oldsite` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oldsite`
--

INSERT INTO `oldsite` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `reflection`
--

CREATE TABLE IF NOT EXISTS `reflection` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reflection`
--

INSERT INTO `reflection` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'rty'),
(0, '', '', 'aze'),
(0, 'ariviale@gaming.tech', 'aze', 'aze');

-- --------------------------------------------------------

--
-- Table structure for table `summit`
--

CREATE TABLE IF NOT EXISTS `summit` (
  `commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `summit`
--

INSERT INTO `summit` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(0, '', '', 'qsd');

-- --------------------------------------------------------

--
-- Table structure for table `techs`
--

CREATE TABLE IF NOT EXISTS `techs` (
`commentID` int(11) NOT NULL,
  `commentSender` varchar(255) NOT NULL,
  `commentSenderName` varchar(255) NOT NULL,
  `commentContent` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `techs`
--

INSERT INTO `techs` (`commentID`, `commentSender`, `commentSenderName`, `commentContent`) VALUES
(1, '', '', 'klm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userEmail` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userEmail`, `userName`, `userPassword`) VALUES
('azer@gmail.com', 'aze', '$2y$10$pcxbrgTSzgbrF3Cir0kNSe2BrueA5C11KSDAshyg6f5aQY0XGUFWO'),
('aze@gmail.com', 'aze', '$2y$10$iP9w2Nja7ihOHoiNja16/.dvaIt0ovM0TEVThGZgcPulOg2cXzkzG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentsreviews`
--
ALTER TABLE `commentsreviews`
 ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `techs`
--
ALTER TABLE `techs`
 ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentsreviews`
--
ALTER TABLE `commentsreviews`
MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `techs`
--
ALTER TABLE `techs`
MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
