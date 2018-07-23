-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2018 at 07:58 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connectband`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `band_master`
--

DROP TABLE IF EXISTS `band_master`;
CREATE TABLE IF NOT EXISTS `band_master` (
  `band_id` int(10) NOT NULL AUTO_INCREMENT,
  `band_name` varchar(200) NOT NULL,
  `band_info` varchar(1000) NOT NULL,
  `band_image1` varchar(1000) NOT NULL,
  `band_detailImage` varchar(1000) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`band_id`),
  UNIQUE KEY `band_name` (`band_name`),
  KEY `category_foreignkey` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `band_master`
--

INSERT INTO `band_master` (`band_id`, `band_name`, `band_info`, `band_image1`, `band_detailImage`, `category_id`) VALUES
(2, 'The Doors', 'The Doors were an American rock band formed in 1965 in Los Angeles, with vocalist Jim Morrison, keyboardist Ray Manzarek, guitarist Robby Krieger, and John Densmore on drums. ', 'assets/img/portfolio/2.jpg', 'assets/img/bg/Performer3.jpeg', 4),
(3, 'FLoster & Merdock', 'Floster and Merdock is a indie folk band started by 2 friends who were bunk buddies in the Berkeley School of Music. They emphasize heavy focus on interesting rhythms instead of simple melodies. They are well know for there energizing shows .', 'assets/img/portfolio/3.jpg', 'assets/img/bg/performer4.jpeg', 2),
(5, '2 Quarters', 'Ralph Lewis also known as 2 Quarters is a Rap artist. His music consist of heavy beats and family friendly lyrics about the chill life of a gangster. He is known for his uplifting songs about living in the hood. ', 'assets/img/portfolio/5.jpg', 'assets/img/bg/about.png', 6),
(6, 'Hemlock', 'Hemlock is folk band that uses musical instrument from ancient greece. Hemlock is the poison what Socrates was forced to drink as his sentence after his last trial. Hemlock music consist topics such as greek gods and philosophers. They are known for there quiet shows.', 'assets/img/portfolio/6.jpg', 'assets/img/bg/Performer3.jpeg', 4),
(7, 'DeathLAZERS', 'DeathLAZERS is a swedish metal band started by 5 members  who meet in a swedish bar. DeathLazers is notable for its super fast drum beats and its unique focus on synth solos rather than the usual Guitar solo. Another notable thing about DeathLazers is that the lyrics are about principles of quantum mechanics despite the lyrical performance being described as “crude” by many critics.', 'assets/img/portfolio/7.jpg', 'assets/img/bg/roc-starProtrait.jpg', 3),
(8, 'Pink Floyd', 'Pink Floyd were an english progressive Rock Band founded in London in 1965. They are know as innovators in the progressive and psychedelic fields of rock. Their most notable albums are The Dark Side Of the Moon and The Wall which are one of the best selling albums of all time.', 'assets/img/portfolio/8.jpg', 'assets/img/bg/performer4.jpeg', 7),
(9, 'The Beach Boys', 'The Beach Boys is a American Surf Rock Band formed in Hawthorne California in 1961. They had a humble beginnings as a garageband than became a staple of southern California Surf culture  in the late 1960s. Many people back look at the Beach Boys with rich nostalgic, with hits that are included in such albums like Pet Sounds.', 'assets/img/portfolio/9.jpg', 'assets/img/bg/pp1.jpeg', 5),
(10, 'Cold Play', 'ColdPlay is british pop rock band formed in 1996 by lead singer and pianist Chris Martin and lead guitarist Jonny Buckland at University College London. Coldplay is very notable for its best selling albums such as A Rush of Blood to the Head and X&C. Coldplay have won 107 award from 252 nominations throughout their careers. ', 'assets/img/portfolio/10.jpg\r\n', 'assets/img/bg/performer4.jpeg', 3),
(11, 'Nirvana', 'The most notorious band of the famous Seattle 4 from the early 90s. With such hits like “Smells  Like Teen Spirit” and “Come as You are” Nirvana became the flagship band of Generation X. Nirvana was one of the best selling bands of all time and it also lead to the creation of one of the biggest bands of the world “Foo Fighters”  ', 'assets/img/portfolio/11.jpg\r\n', 'assets/img/bg/pp2.jpeg', 2),
(12, 'Genesis', 'Genesis was a  English art rock band that was form in the late 60s.  The band went through many musical style changes from flok to progressive rocks while moving to pop at their careers.They have sold 21.5 million RIAA-certified albums in the United States and their worldwide sales are estimated to be between 100 million and 150 million.', 'assets/img/portfolio/12.jpg', 'assets/img/bg/Performer 5.jpeg\r\n', 6),
(13, 'The Police', 'The Police Were a British rock band formed in London in 1977, The band is lead by a person called the Sting who is there lead vocalist, guitarist and songwriter of the band. The Police became globally popular and is considered as  one of the pioneers of new wave. ', 'assets/img/portfolio/4.jpg', 'assets/img/bg/Performer4.jpeg', 4),
(14, 'Eagles', 'The Eagles are a American Country Rock band formed in Los Angeles in 1971, Hotel California is one of  the most overplayed songs in human history. Their greatest hits album is fifth best selling album in America', 'assets/img/portfolio/1.jpg', 'assets/img/bg/Performer3.jpeg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

DROP TABLE IF EXISTS `category_master`;
CREATE TABLE IF NOT EXISTS `category_master` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`category_id`, `category_name`) VALUES
(5, 'Blues\r\n'),
(3, 'Country'),
(6, 'Jazz'),
(7, 'Metal'),
(2, 'Pop'),
(4, 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

DROP TABLE IF EXISTS `feedback_master`;
CREATE TABLE IF NOT EXISTS `feedback_master` (
  `user_id` int(11) NOT NULL,
  `band_id` int(10) NOT NULL,
  `feedback_data` varchar(500) NOT NULL,
  PRIMARY KEY (`user_id`,`band_id`),
  KEY `bandid_foreginkey` (`band_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`user_id`, `band_id`, `feedback_data`) VALUES
(1, 2, 'My First Feedback'),
(1, 5, 'My 2 qurter feedback');

-- --------------------------------------------------------

--
-- Table structure for table `testimage`
--

DROP TABLE IF EXISTS `testimage`;
CREATE TABLE IF NOT EXISTS `testimage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
CREATE TABLE IF NOT EXISTS `user_master` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_name`, `email`, `password`, `mobile`, `first_name`, `last_name`) VALUES
(1, 'samarth01', 'samarth@gmail.com', 'mypassword', 65745484351, 'Samarth', 'Shah');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

DROP TABLE IF EXISTS `voting`;
CREATE TABLE IF NOT EXISTS `voting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `votes_up` int(11) NOT NULL DEFAULT '0',
  `votes_down` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `title`, `link`, `votes_up`, `votes_down`) VALUES
(1, 'google', 'www.google.com', 3, 1),
(2, 'yahoo', 'www.yahoo.com', 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `band_master`
--
ALTER TABLE `band_master`
  ADD CONSTRAINT `category_foreignkey` FOREIGN KEY (`category_id`) REFERENCES `category_master` (`category_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
