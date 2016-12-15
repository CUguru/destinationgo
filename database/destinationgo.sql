-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2016 at 11:40 AM
-- Server version: 5.5.52-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uguru_destinationGo`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`aid`, `name`) VALUES
(1, 'nightlife'),
(2, 'relaxing');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE IF NOT EXISTS `cost` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`cid`, `name`) VALUES
(1, 'high'),
(2, 'low');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `wid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `wid`, `fid`, `cid`, `pid`, `aid`, `lid`) VALUES
(1, 'Honolulu, Hawaii', 1, 2, 1, 1, 2, 1),
(2, 'Berlin, Germany', 2, 2, 1, 1, 1, 1),
(3, 'Barcelona, Spain', 1, 2, 1, 1, 1, 1),
(4, 'Obudu Resort, Nigeria', 2, 1, 2, 2, 1, 2),
(5, 'Bar Beach, Nigeria', 1, 1, 2, 2, 2, 2),
(6, 'Banff, Canada', 2, 1, 2, 1, 1, 2),
(7, 'Victoria, Canada', 2, 1, 2, 2, 1, 1),
(8, 'Playa Del Carmen, Mexico', 1, 2, 2, 1, 2, 1),
(9, 'Barbados, Caribbean Islands', 1, 2, 1, 1, 2, 2),
(10, 'Anaheim, Florida, USA', 1, 1, 1, 1, 2, 1),
(11, 'Grand Teton, Wyoming, USA', 2, 2, 2, 2, 1, 2),
(12, 'Val Thorens, France', 2, 1, 1, 2, 1, 2),
(13, 'Patagonia, Chile', 2, 1, 2, 2, 2, 2),
(14, 'Curacao, Caribbean Island', 1, 2, 1, 2, 2, 1),
(15, 'Seattle, Washington, USA', 2, 2, 1, 1, 1, 1),
(16, 'Vancouver, Canada', 2, 2, 2, 1, 2, 1),
(17, 'Lake Louise, Canada', 2, 2, 1, 1, 2, 2),
(18, 'Sylvan Lake, Canada', 1, 1, 2, 2, 2, 2),
(19, 'Ibo Island, Mozambique', 1, 1, 1, 2, 2, 2),
(20, 'Saigon, Vietnam', 1, 1, 2, 2, 1, 1),
(21, 'Placencia, Belize', 1, 2, 2, 2, 1, 2),
(22, 'Lake Louise, Canada', 2, 2, 1, 1, 2, 2),
(23, 'Zurich, Switzerland', 2, 2, 1, 2, 2, 1),
(24, 'Fort Lauderdale, Florida', 1, 1, 2, 1, 1, 2),
(25, 'Grandvalira, Andorra', 2, 1, 1, 2, 2, 2),
(26, 'Jasper, Canada', 2, 1, 2, 2, 2, 1),
(27, 'Jackson Hole, USA', 2, 2, 2, 2, 2, 2),
(28, 'Cervinia, Italy', 2, 1, 2, 1, 2, 2),
(29, 'Zell am See-Kaprun, Austria', 2, 1, 1, 2, 1, 1),
(30, 'Les Arcs, France', 2, 2, 1, 2, 1, 2),
(31, 'St. Moritz, Switzerland', 2, 1, 1, 1, 1, 2),
(32, 'Aspen, Colorado, USA', 2, 2, 2, 2, 1, 1),
(33, 'Whistler/BlackComb, Canada', 2, 1, 2, 1, 1, 1),
(34, 'Grindelwald, Switzerland', 2, 2, 2, 1, 1, 2),
(35, 'Sydney, Australia', 1, 2, 2, 1, 1, 1),
(36, 'San Juan, Puerto Rico, USA', 1, 2, 1, 1, 1, 2),
(37, 'Orlando, Florida, USA', 1, 1, 1, 1, 1, 1),
(38, 'Nice, France', 1, 2, 1, 2, 1, 1),
(39, 'Cancun, Mexico', 1, 2, 2, 1, 2, 2),
(40, 'Okinawa, Japan', 1, 1, 2, 1, 2, 1),
(41, 'Lisbon, Portugal', 1, 2, 2, 2, 2, 1),
(42, 'Kapolei, Hawaii', 1, 1, 1, 1, 2, 2),
(43, 'Antigua, Carribean Islands', 1, 1, 1, 2, 2, 2),
(44, 'Seoul, South Korea', 1, 1, 1, 2, 2, 1),
(45, 'Beijing, China', 2, 2, 2, 1, 1, 1),
(46, 'Breckenridge, Colorado, USA', 2, 2, 1, 1, 1, 2),
(47, 'Tokyo, Japan', 2, 1, 1, 1, 1, 1),
(48, 'Hong Kong Island, Hong Kong', 2, 2, 1, 2, 1, 1),
(49, 'Nepal', 2, 1, 2, 1, 2, 2),
(50, 'Huangshan, China', 2, 1, 2, 1, 2, 1),
(51, 'Tibet, China', 2, 2, 2, 2, 2, 1),
(52, 'Grand Canyon National Park, Arizona, USA', 2, 1, 1, 1, 2, 2),
(53, 'Anchorage, Alaska, USA', 2, 2, 1, 2, 2, 2),
(54, 'Portland, Oregon, USA', 2, 1, 1, 2, 2, 1),
(55, 'Negril, Jamaica', 1, 2, 2, 1, 1, 2),
(56, 'Scheveningen, Holland', 1, 1, 2, 1, 1, 1),
(57, 'Copacabana Beach, Brazil', 1, 2, 2, 2, 1, 1),
(58, 'Santorini, Greece', 1, 1, 1, 1, 1, 2),
(59, 'WildWood Beach, USA', 1, 2, 1, 2, 1, 2),
(60, 'Barnes Bay, Anguilla', 1, 1, 1, 2, 1, 1),
(61, 'Koh Lanta, Thailand', 1, 1, 2, 1, 2, 2),
(62, 'Bathsehba Beach, Barbados', 1, 2, 2, 2, 2, 2),
(63, 'Coral Coast, Fiji', 1, 1, 2, 2, 2, 1),
(64, 'Hermitage Beach, Antigua', 1, 1, 1, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`fid`, `name`) VALUES
(1, 'kids'),
(2, 'adults');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `name`) VALUES
(1, 'urban'),
(2, 'rural');

-- --------------------------------------------------------

--
-- Table structure for table `popularity`
--

CREATE TABLE IF NOT EXISTS `popularity` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `popularity`
--

INSERT INTO `popularity` (`pid`, `name`) VALUES
(1, 'popular'),
(2, 'hidden');

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE IF NOT EXISTS `weather` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`wid`, `name`) VALUES
(1, 'beach'),
(2, 'mountain');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
