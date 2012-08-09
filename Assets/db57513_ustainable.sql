-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: internal-db.s57513.gridserver.com
-- Generation Time: Aug 09, 2012 at 03:27 PM
-- Server version: 5.1.55-rel12.6
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db57513_ustainable`
--

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE IF NOT EXISTS `acts` (
  `actID` int(10) unsigned zerofill NOT NULL,
  `actGroup` varchar(150) NOT NULL,
  `actName` varchar(255) NOT NULL,
  `actUsage` mediumint(9) NOT NULL,
  PRIMARY KEY (`actID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `profileID` int(10) unsigned zerofill NOT NULL,
  `facebookID` bigint(20) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(20) NOT NULL,
  `suburb` varchar(30) NOT NULL,
  `postcode` int(5) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `registrationDate` datetime NOT NULL,
  PRIMARY KEY (`profileID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projectID` int(10) unsigned zerofill NOT NULL,
  `projectType` varchar(255) NOT NULL,
  `profileID` int(11) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `projectDescription` text NOT NULL,
  `projectAddress` varchar(255) NOT NULL,
  `projectPostcode` int(5) NOT NULL,
  `projectState` varchar(30) NOT NULL,
  `projectStartDate` datetime NOT NULL,
  `projectEndDate` datetime NOT NULL,
  `projectTags` varchar(150) NOT NULL,
  `projectActs` varchar(150) NOT NULL,
  `projectRewards` varchar(150) NOT NULL,
  `projectVideo` text NOT NULL,
  `projectImage` text NOT NULL,
  PRIMARY KEY (`projectID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE IF NOT EXISTS `rewards` (
  `rewardID` int(10) unsigned zerofill NOT NULL,
  `rewardGroup` varchar(150) NOT NULL,
  `rewardDescription` varchar(255) NOT NULL,
  `rewardUsage` mediumint(9) NOT NULL,
  PRIMARY KEY (`rewardID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tagID` int(10) unsigned zerofill NOT NULL,
  `tagGroup` varchar(150) NOT NULL,
  `tagName` varchar(255) NOT NULL,
  `tagUsage` mediumint(9) NOT NULL,
  PRIMARY KEY (`tagID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
