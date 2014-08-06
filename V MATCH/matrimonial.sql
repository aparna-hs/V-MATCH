-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 01:03 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`aid`, `email`, `password`) VALUES
(1, 'hs.aparna.blr@gmail.com', 'aparna'),
(2, 'bhavya.v.karki@gmail.com', 'bhavya');

-- --------------------------------------------------------

--
-- Table structure for table `exp_interest`
--

CREATE TABLE IF NOT EXISTS `exp_interest` (
  `exps_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) DEFAULT NULL,
  `uid2` int(11) DEFAULT NULL,
  `msg` text,
  `likes` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`exps_id`),
  KEY `uid1` (`uid1`),
  KEY `uid2` (`uid2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `exp_interest`
--


-- --------------------------------------------------------

--
-- Table structure for table `horoscope`
--

CREATE TABLE IF NOT EXISTS `horoscope` (
  `uid` int(11) NOT NULL,
  `link` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horoscope`
--


-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `link` varchar(30) NOT NULL,
  PRIMARY KEY (`img_id`),
  UNIQUE KEY `link` (`link`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `images`
--


-- --------------------------------------------------------

--
-- Table structure for table `pref_tb`
--

CREATE TABLE IF NOT EXISTS `pref_tb` (
  `uid` int(11) NOT NULL,
  `fromage` int(11) DEFAULT NULL,
  `toage` int(11) DEFAULT NULL,
  `height` varchar(20) DEFAULT NULL,
  `rlgn` varchar(20) DEFAULT NULL,
  `marital_status` tinyint(1) DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  `living` tinyint(1) DEFAULT NULL,
  `education` varchar(20) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `salary` varchar(40) DEFAULT NULL,
  `build` varchar(20) DEFAULT NULL,
  `diet` tinyint(1) DEFAULT NULL,
  `smoke` tinyint(1) DEFAULT NULL,
  `drink` tinyint(1) DEFAULT NULL,
  `complexion` varchar(20) DEFAULT NULL,
  `lookingfor` longtext,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pref_tb`
--


-- --------------------------------------------------------

--
-- Table structure for table `profile_m`
--

CREATE TABLE IF NOT EXISTS `profile_m` (
  `pid` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) NOT NULL,
  `dname` varchar(15) NOT NULL,
  `age` int(2) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `rlgn` int(11) NOT NULL,
  `education` int(11) NOT NULL,
  `occupation` int(11) NOT NULL,
  `salary` varchar(35) DEFAULT NULL,
  `living` tinyint(1) NOT NULL,
  `country` varchar(30) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `marital_status` tinyint(1) NOT NULL,
  `sec_type` tinyint(1) DEFAULT NULL,
  `kids` tinyint(1) DEFAULT NULL,
  `height` varchar(15) NOT NULL,
  `build` varchar(15) NOT NULL,
  `complexion` varchar(15) NOT NULL,
  `smoke` tinyint(1) NOT NULL,
  `drink` tinyint(1) NOT NULL,
  `diet` tinyint(1) NOT NULL,
  `language` int(11) NOT NULL,
  `about_me` longtext NOT NULL,
  `phno` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `dname` (`dname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_m`
--


-- --------------------------------------------------------

--
-- Table structure for table `sns_tb`
--

CREATE TABLE IF NOT EXISTS `sns_tb` (
  `sid` int(11) NOT NULL,
  `fblink` varchar(30) DEFAULT NULL,
  `linked` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sns_tb`
--


-- --------------------------------------------------------

--
-- Table structure for table `succ_tab`
--

CREATE TABLE IF NOT EXISTS `succ_tab` (
  `succ_no` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(40) DEFAULT NULL,
  `message` longtext NOT NULL,
  `name1` varchar(30) NOT NULL,
  `name2` varchar(30) NOT NULL,
  PRIMARY KEY (`succ_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `succ_tab`
--

INSERT INTO `succ_tab` (`succ_no`, `image`, `message`, `name1`, `name2`) VALUES
(1, NULL, ' we got mariredd!! yipeee', '', 'bhavya'),
(2, NULL, '22222kdsdddddddddddddddddddddddd ', '', 'Aparna'),
(3, NULL, 'sdjkfnsdjfnsdcsdkcmdslcmslacma ', '', 'jai'),
(4, NULL, 'ejdsknjkzcndscmdsl;kcsl;slslsdf ', '', 'megh'),
(5, NULL, 'lsdvdsnksdkdvkdsvdvdvdsvlkdmdsk ', 'al', 'rahim'),
(6, NULL, 'saklaskmasmsmsmx ', 'bubber', 'anand'),
(7, NULL, 'sjcnsskassa ', '', 'a'),
(8, NULL, 'kasdmasdaskdk ', '', 'Niveditha'),
(9, NULL, 'smcdscmcscsmcmscskmksdcds ', '', 'apa'),
(10, NULL, 'ascasaskskk ', 'apa', 'Bhavya');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`uid`, `email`, `password`) VALUES
(26, 'harry.aparna@gmail.com', 'apa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exp_interest`
--
ALTER TABLE `exp_interest`
  ADD CONSTRAINT `exp_interest_ibfk_6` FOREIGN KEY (`uid2`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exp_interest_ibfk_5` FOREIGN KEY (`uid1`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `horoscope`
--
ALTER TABLE `horoscope`
  ADD CONSTRAINT `horoscope_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pref_tb`
--
ALTER TABLE `pref_tb`
  ADD CONSTRAINT `pref_tb_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile_m`
--
ALTER TABLE `profile_m`
  ADD CONSTRAINT `profile_m_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `user_tb` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sns_tb`
--
ALTER TABLE `sns_tb`
  ADD CONSTRAINT `sns_tb_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;
