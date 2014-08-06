-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2014 at 09:02 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `exp_interest`
--

INSERT INTO `exp_interest` (`exps_id`, `uid1`, `uid2`, `msg`, `likes`) VALUES
(36, 41, 35, NULL, 1),
(37, 41, 35, ' hi shenoy i like u i guess', NULL),
(38, 41, 43, NULL, 1),
(39, 41, 45, ' hey abhilasha, how r u', NULL),
(40, 29, 33, NULL, 1),
(41, 29, 33, ' Hi Jayanth!I liked your profile!Shall we meet up to take this furtheR?', NULL),
(42, 33, 29, NULL, 1),
(43, 47, 40, NULL, 1),
(44, 49, 38, NULL, 1),
(45, 49, 38, ' Hey gagan, i keep seeing u in rv. wish we were in same class', NULL),
(46, 38, 49, ' megh, i wish the same too :(', NULL),
(47, 50, 38, NULL, 1),
(48, 50, 41, ' amit i think v can take this further', NULL),
(49, 51, 49, NULL, 1),
(50, 51, 50, ' Hey neethu! nice pic!', NULL),
(51, 52, 48, NULL, 1),
(52, 29, 33, NULL, 1),
(53, 54, 53, NULL, 1),
(54, 35, 55, ' you are awesom!!!!!!!!!!!!!!', NULL),
(55, 55, 35, NULL, 1),
(56, 56, 55, NULL, 1),
(57, 57, 56, NULL, 1),
(58, 58, 52, NULL, 1),
(59, 58, 52, ' hey ash!!', NULL),
(60, 29, 33, 'hi i really liked your profile :)', NULL),
(61, 52, 48, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `link` varchar(60) NOT NULL,
  PRIMARY KEY (`img_id`),
  UNIQUE KEY `link` (`link`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `uid`, `link`) VALUES
(1, 44, 'upload/44100_3093.jpg'),
(2, 45, 'upload/45abhi.gif'),
(3, 41, 'upload/41amit.jpg'),
(5, 40, 'upload/401002171_10201677245834056_815788110_n.jpg'),
(6, 33, 'upload/331474414_663725296983383_1161364373_n.jpg'),
(7, 47, 'upload/471798851_10152225726269153_1219675833_n.jpg'),
(9, 48, 'upload/481005359_10153136798490046_1198652580_n.jpg'),
(10, 49, 'upload/491979727_10201754289475212_1872135778_n.jpg'),
(11, 38, 'upload/381888706_640510002682343_928548445_n.jpg'),
(12, 50, 'upload/501385370_592306020804968_1224659179_n.jpg'),
(13, 51, 'upload/511476158_10200139184280873_1652977341_n.jpg'),
(14, 52, 'upload/521654092_612650882141603_1320878739_n.jpg'),
(15, 29, 'upload/2928Photo0012edit.jpg'),
(16, 53, 'upload/531662268_495619127216095_157895643_n.jpg'),
(17, 54, 'upload/54942194_509791582444005_1890291679_n.jpg'),
(18, 35, 'upload/351150814_514447138666627_906844166_n.jpg'),
(19, 56, 'upload/561524909_549496421813960_380277794_n.jpg'),
(20, 57, 'upload/571013562_10151962864958243_1439338268_n.jpg');

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
  `language` varchar(30) DEFAULT NULL,
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

INSERT INTO `pref_tb` (`uid`, `fromage`, `toage`, `height`, `rlgn`, `marital_status`, `language`, `living`, `education`, `occupation`, `salary`, `build`, `diet`, `smoke`, `drink`, `complexion`, `lookingfor`) VALUES
(29, 4, 6, '', 'Hindu', 0, 'Telugu', 0, '49', '1', 'INR 5 Lakh to INR 10 Lakh', '', NULL, NULL, NULL, '', 'He should be able to handle my mood swings!'),
(33, 4, 4, '', 'Hindu - Brahmin', NULL, 'Kannada', NULL, '49', '1', 'INR 5 Lakh to INR 10 Lakh', '', 0, 0, NULL, '', 'I want a simple good hearted person!'),
(35, 3, 3, '', 'Hindu - Brahmin', 0, '', NULL, '49', '', '', '', 0, 0, 0, '', 'Intelligent,Smart,'),
(36, 1, 58, 'med', 'Others', NULL, 'English', NULL, '55', '35', 'INR 50 Lakh to INR 1 Crore', 'ath', 1, 0, 0, 'fair', 'Should cook well.'),
(37, 6, 9, 'tall', 'Hindu - Brahmin', 0, 'Kannada', NULL, '61', '49', 'INR 20 Lakh to INR 50 Lakh', 'med', NULL, 0, NULL, 'wheatish', 'Eeeeeeeeeeeeeeee'),
(38, 4, 4, 'med', 'Hindu', 0, 'Kannada', 0, '49', '', '', 'med', 0, 0, 0, 'wheatish', 'hehehehehehe:P'),
(39, 3, 4, 'med', 'Hindu', 0, 'Kannada', 0, '49', '1', 'upto INR 1 Lakh', 'med', 0, 0, 0, 'fair', 'she must be good by heart.........'),
(40, 1, 13, '', '', NULL, '', NULL, '', '', '', '', NULL, 0, NULL, '', 'should not have a high pitched voice.'),
(41, 1, 12, '', '', NULL, '', NULL, '', '', '', '', NULL, NULL, NULL, '', 'girl shud noe to code'),
(42, 1, 13, '', 'Hindu', 1, '', NULL, '49', '67', '', '', NULL, NULL, NULL, '', 'svnjd,nerjrkmlmlmcme'),
(44, 3, 5, '', 'Hindu', NULL, '', NULL, '', '', '', '', NULL, NULL, NULL, '', 'I want a loving caring guy'),
(45, 3, 8, '', 'Hindu', NULL, 'Hindi', NULL, '', '', '', '', NULL, NULL, NULL, '', 'hi i want a smart fello who is god looking'),
(46, 1, 8, '', '', NULL, '', NULL, '', '', '', '', NULL, NULL, NULL, '', 'hi i wanna cute simple female!'),
(47, 2, 7, '', '', NULL, '', 0, '', '', '', '', NULL, NULL, NULL, '', 'I want some one who can understand me'),
(48, 1, 6, '', 'Hindu', NULL, 'Kannada', NULL, '', '', '', '', NULL, NULL, NULL, '', 'I want some one who is awesom!'),
(49, 3, 5, '', 'Hindu', NULL, 'Kannada', NULL, '49', '67', '', '', NULL, NULL, NULL, '', 'I want some one who cares for me'),
(50, 2, 8, '', '', NULL, '', NULL, '', '', '', '', NULL, NULL, NULL, '', 'I want him to be super coool fella!'),
(51, 2, 6, '', 'Hindu', NULL, 'Kannada', 0, '49', '67', '', '', NULL, NULL, NULL, '', 'Girl should be decent :)'),
(52, 2, 7, '', 'Hindu', NULL, '', NULL, '', '', '', '', NULL, NULL, NULL, '', 'He shud be dynamic'),
(53, 3, 8, '', 'Christian - Catholic', NULL, 'English', 0, '', '', '', '', NULL, NULL, NULL, '', 'good looking and good'),
(54, 2, 10, '', 'Christian - Catholic', NULL, 'English', NULL, '', '', '', '', NULL, NULL, NULL, '', 'I want a person who is cool'),
(55, 1, 5, '', 'Hindu - Brahmin', NULL, 'Konkani', NULL, '', '', '', '', NULL, NULL, NULL, '', 'simple kind hearted'),
(56, 2, 4, '', '', NULL, '', NULL, '49', '67', '', '', NULL, NULL, NULL, '', 'i want some one who is like good at heart\r\n'),
(57, 2, 6, '', 'Sikh', NULL, 'Konkani', NULL, '', '', '', '', NULL, NULL, NULL, '', 'hmmmm nothing particular'),
(58, 2, 8, '', '', NULL, 'Hindi', NULL, '', '', '', '', NULL, NULL, NULL, '', 'shold be a talkoholic'),
(59, 2, 8, '', 'Hindu - Brahmin', NULL, '', NULL, '', '', '', '', NULL, NULL, NULL, '', 'must b great and good');

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
  `rlgn` varchar(30) NOT NULL,
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
  `language` varchar(30) NOT NULL,
  `about_me` longtext NOT NULL,
  `phno` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `dname` (`dname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_m`
--

INSERT INTO `profile_m` (`pid`, `fname`, `mname`, `lname`, `dname`, `age`, `sex`, `rlgn`, `education`, `occupation`, `salary`, `living`, `country`, `state`, `city`, `marital_status`, `sec_type`, `kids`, `height`, `build`, `complexion`, `smoke`, `drink`, `diet`, `language`, `about_me`, `phno`) VALUES
(29, 'Aparna', '', 'H S', 'Aparna', 4, 0, 'Hindu - Brahmin', 49, 1, 'INR 5 Lakh to INR 10 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 1, 0, 'Kannada', 'I loveeee writing poems and reading novels!', '9190357837'),
(33, 'Jayanth', '', 'Manklu', 'Jay', 5, 1, 'Hindu', 49, 1, 'INR 5 Lakh to INR 10 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 1, 0, 'Telugu', 'I love listening to music, drawing and adventures!', '9190357837'),
(35, 'Niveditha', 'B', 'Shenoy', 'Niveditha', 4, 0, 'Hindu - Brahmin', 3, 41, 'Select', 1, '', '', '', 0, 0, 0, 'med', 'med', 'wheatish', 0, 0, 0, 'Konkani', 'I love singing,writing articles.I love creativity.', '9448311034'),
(36, 'Sheldon', '', 'Cooper', 'Shelly', 4, 1, 'Others', 55, 35, 'Above 1 Crore', 1, 'USA', '', '', 1, 0, 1, 'tall', 'slim', 'fair', 0, 0, 1, 'English', 'I have an amazing memory.\r\n\r\n\r\n', '1233455693'),
(37, 'Chaitra', 'R', 'Hebbar', 'Chai', 4, 0, 'Hindu', 49, 67, 'INR 5 Lakh to INR 10 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, 'tall', 'med', 'wheatish', 0, 1, 0, 'Kannada', 'hahahahahahaha', '9620641063'),
(38, 'Gagan', '', 'S', 'Gagan', 4, 1, 'Hindu', 49, 888, 'Select', 0, '', 'Karnataka', 'Tumkur', 0, 0, 0, 'tall', 'med', 'wheatish', 0, 0, 0, 'Kannada', 'heheheh :P', '8971600578'),
(39, 'Jeevith', '', 'H.M', 'jeevith', 4, 1, 'Hindu', 49, 67, 'upto INR 1 Lakh', 0, '', 'Karnataka', 'Tumkur', 0, 0, 0, 'med', 'med', 'fair', 0, 0, 0, 'Kannada', 'i am so friendly,and good human being\r\n', '9964086087'),
(40, 'Akshat', '', 'Agarwal', 'akshat', 4, 1, 'Hindu', 49, 67, 'INR 5 Lakh to INR 10 Lakh', 0, '', 'Karnataka', 'Bangalore', 1, 1, 0, '', '', '', 0, 1, 0, 'Hindi', 'marry me ;)', '8172880022'),
(41, 'Amit', '', 'Bhat', 'Amit_coding_is_', 5, 1, 'Hindu - Brahmin', 53, 1, 'Above 1 Crore', 0, '', 'Karnataka', 'Bangalore', 1, 0, 0, 'tall', 'ath', 'fair', 1, 1, 1, 'Kannada', 'I dont care if the girl cannot cook. She should know how to code. Thats all.', '1234567890'),
(42, 'G', 'G', 'G', 'G', 4, 0, 'Hindu', 49, 67, 'Select', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 0, 0, 'Kannada', 'wfijiwdwwafawkfkawf\r\n', '9190357837'),
(43, 'Nitya', '', 'Sharma', 'Nitya', 4, 0, 'Hindu', 49, 28, 'INR 2 Lakh to INR 5 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 0, 0, 'Kannada', 'i am good hearted and ever smiling', '9190356675'),
(44, 'Akanksha', '', 'Bubber', 'Akanksha', 4, 0, 'Hindu', 8, 1, 'INR 5 Lakh to INR 10 Lakh', 0, '', 'Rajasthan', 'Jaipur', 0, 0, 0, '', 'med', 'fair', 0, 0, 0, 'Hindi', 'Hey i love sports and I run around a lot', '9620922911'),
(45, 'Abhilasha', '', 'Tyaagi', 'Abhilasha', 5, 0, 'Hindu', 49, 19, 'INR 2 Lakh to INR 5 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 0, 0, 'Hindi', 'hi i love surprisesss!!!', '9190357837'),
(46, 'Akshay', '', 'Venugopal', 'Akshay', 4, 1, 'Hindu - Brahmin', 49, 67, 'Select', 1, '', '', '', 0, 0, 0, '', 'slim', 'wheatish', 0, 0, 0, 'Kannada', 'I loveeee football and I will love my girl too', ''),
(47, 'Shravani', '', 'Rao', 'Shrav', 4, 0, 'Hindu', 49, 1, 'upto INR 1 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 1, 0, 'Telugu', 'I love drawinggggg!!!', '9190357837'),
(48, 'Anvith', '', 'Ekkati', 'Anvith', 4, 1, 'Hindu', 49, 67, 'INR 10 Lakh to INR 20 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 1, 1, 'Kannada', 'I love coding stuff!', '9190357837'),
(49, 'Meghana', '', 'Babu', 'Meghana', 4, 0, 'Hindu', 49, 67, 'Select', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', 'wheatish', 0, 0, 0, 'Kannada', 'I am a a very good singer!', '9035676829'),
(50, 'Neethu', '', 'Kumar', 'Neethu', 4, 0, 'Hindu', 49, 67, 'Select', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 1, 1, 'Kannada', 'hey i love roaming around!', '9190357837'),
(51, 'Harshwardhan', '', 'Rawoot', 'Harsh', 4, 1, 'Hindu', 49, 67, 'INR 5 Lakh to INR 10 Lakh', 0, '', 'Karnataka', 'Hubli', 0, 0, 0, '', '', '', 0, 1, 0, 'Kannada', 'I love footballlll!', ''),
(52, 'Ayeshni', '', 'Dasgupta', 'Ayeshni', 5, 0, 'Hindu', 49, 67, 'Select', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 1, 1, 'Hindi', 'i love football and writing!', '9190357837'),
(53, 'Pracheta', '', 'Gupta', 'Prach', 4, 0, 'Christian - Catholic', 49, 67, 'upto INR 1 Lakh', 0, '', 'Delhi', 'Noida', 0, 0, 0, '', '', '', 0, 0, 1, 'English', 'hi i am looking for a great person', ''),
(54, 'Kevin', '', 'Thomas', 'Kevin Thoms', 4, 1, 'Christian - Catholic', 49, 67, 'Select', 0, '', 'Delhi', 'Old Delhi', 0, 0, 0, '', '', '', 0, 1, 0, 'English', 'i love playing basket ball and i am spc', ''),
(55, 'Ravindra', '', 'Soori', 'Soori', 3, 1, 'Hindu - Brahmin', 49, 67, 'INR 10 Lakh to INR 20 Lakh', 0, '', 'Karnataka', 'Mangalore', 0, 0, 0, '', '', '', 0, 0, 0, 'Kannada', 'Hi I love coding, hacking and designing', ''),
(56, 'Pooja', '', 'Govind', 'Pooja', 4, 0, 'Sikh', 49, 67, 'INR 1 Lakh to INR 2 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 0, 0, 'Konkani', 'i love dance!', '9190357837'),
(57, 'Karthik', '', 'Sivaprasad', 'Karthik', 4, 1, 'Sikh', 49, 67, 'INR 1 Lakh to INR 2 Lakh', 0, '', 'Karnataka', 'Bangalore', 0, 0, 0, '', '', '', 0, 0, 0, 'Konkani', 'hi i love racing!!and bikes!', '9190357837'),
(58, 'Shobhit', 'Singh', 'Ranawat', 'Shobhit', 4, 1, 'Hindu - Kshatriya', 49, 67, 'Select', 0, '', 'Rajasthan', 'Jaipur', 1, 0, 0, '', '', '', 1, 1, 1, 'Hindi', 'i love talking!!phat phat phat!', ''),
(59, 'Sindhushree', '', 'Bhaskar', 'Sindhu', 4, 0, 'Hindu - Brahmin', 49, 67, 'upto INR 1 Lakh', 0, '', 'Karnataka', 'Bangalore', 1, 1, 1, 'short', 'heavy', '', 0, 0, 0, 'Kannada', 'hmmm i m sweett', '9190357837');

-- --------------------------------------------------------

--
-- Table structure for table `sns_tb`
--

CREATE TABLE IF NOT EXISTS `sns_tb` (
  `sid` int(11) NOT NULL,
  `fblink` varchar(50) DEFAULT NULL,
  `linked` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sns_tb`
--

INSERT INTO `sns_tb` (`sid`, `fblink`, `linked`) VALUES
(29, 'https://www.facebook.com/aparna.sreedhara', ''),
(33, 'https://www.facebook.com/jaymanklu?fref=ts', 'http://www.linkedin.com/profile/view?id=97668002'),
(35, 'https://www.facebook.com/bniveditha.shenoy?ref=ts&', ''),
(38, 'https://www.facebook.com/gagan', ''),
(39, 'www.facebook.com/jeevith.jeevi', ''),
(40, 'https://www.facebook.com/akshat.agarwal.779', ''),
(41, 'https://www.facebook.com/amitgbhat?fref=ts', 'http://www.linkedin.com/profile/view?id=230607406'),
(45, 'https://www.facebook.com/abhilasha.tyagi.587?ref=t', 'linkedin.com'),
(47, 'https://www.facebook.com/shravani13?fref=ts', ''),
(49, 'https://www.facebook.com/meghana.n.babu?fref=ts', ''),
(50, 'https://www.facebook.com/neethu.skumar?fref=ts', ''),
(51, 'https://www.facebook.com/harshrawoot?fref=ts', ''),
(52, 'https://www.facebook.com/ayeshni.dasgupta?fref=ts', ''),
(53, 'https://www.facebook.com/PrachetaG?fref=ts', ''),
(54, 'https://www.facebook.com/kevinjacthomas?fref=ts', ''),
(56, 'https://www.facebook.com/pooja.govin?fref=ts', ''),
(57, 'https://www.facebook.com/karthik.shivaprasad?fref=', ''),
(58, 'https://www.facebook.com/shobhit.ranawat?fref=ts', ''),
(59, 'https://www.facebook.com/sindhu.shree.7737?fref=ts', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `succ_tab`
--

INSERT INTO `succ_tab` (`succ_no`, `image`, `message`, `name1`, `name2`) VALUES
(12, NULL, ' We found each other on V Match! We thank the V Match team for making this special bond of love happen between us', 'Uppi', 'Anmol'),
(13, NULL, 'I Expressed Interest and she liked my profile!! Then the magic happened! Thanks V Match ', 'Shekar', 'Reshma'),
(14, NULL, 'Perfect Matches by V Match are like super cool! I got Sinchu as my perfect match and now we are happily married. Thanks V Match :) ', 'Kishore', 'Sinchu'),
(15, NULL, 'I first saw his name on quick search, then registered saw his profile and fell for him :) Now we are getting married. V Match is THE BEST', 'Vaani', 'Amaresh'),
(16, NULL, 'I think this is one of the best matrimonial sites! I found my life partner here. Thanku!', 'Hafeez', 'Sauda');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`uid`, `email`, `password`) VALUES
(29, 'hs.aparna.blr@gmail.com', 'i'),
(33, 'jayanthms7@gmail.com', 'Ca$hc0w1'),
(35, 'shenoy.niveditha@yahoo.in', 'niveditha'),
(36, 'sheldon.cooper@gmail.com', 'sheldon'),
(37, 'chaitra.r.hebbar@gmail.com', 'yuiopqwert'),
(38, 'gagan.yes@gmail.com', 'meghana'),
(39, 'jeevi.jeevith@gmail.com', 'jeevith'),
(40, 'akshat@yahoo.com', 'akshat'),
(41, 'amitgbhat@gmail.com', 'amitg'),
(42, 'g@k.com', 'g'),
(43, 'nitya@gmail.com', 'nitya'),
(44, 'akank.bubbs@yahoo.in', 'akank'),
(45, 'abhi@tyaagi.com', 'abhi'),
(46, 'akshay@gmail.com', 'akshay'),
(47, 'shrav@hotmail.com', 'shrav'),
(48, 'anvith@gmail.com', 'anvith'),
(49, 'megh.babu@yahoo.com', 'megh'),
(50, 'neethu@gmail.com', 'neethu'),
(51, 'harsh@gmail.com', 'harsh'),
(52, 'ayesh@yahoo.in', 'ayesh'),
(53, 'pracheta@gmail.com', 'gupta'),
(54, 'kevin@gmail.com', 'kev'),
(55, 'soori@she.com', 'soori'),
(56, 'pooja.govin@yahoo.com', 'pooja'),
(57, 'karthik@car.com', 'car'),
(58, 'sho@sho.com', 'sho'),
(59, 'sindhu@gmail.com', 'sindhu'),
(60, 'arpan@hotmail.com', 'arpan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exp_interest`
--
ALTER TABLE `exp_interest`
  ADD CONSTRAINT `exp_interest_ibfk_5` FOREIGN KEY (`uid1`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exp_interest_ibfk_6` FOREIGN KEY (`uid2`) REFERENCES `profile_m` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

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
