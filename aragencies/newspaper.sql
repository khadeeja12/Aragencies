-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:00 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `doneon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `userid`, `month`, `year`, `amount`, `doneon`) VALUES
(1, 'jasal@gmail.com', 'January', '2022', '270', '2022/11/07'),
(2, 'jithin@gmail.com', 'June', '2022', '220', '2022/11/07'),
(3, 'jasal@gmail.com', 'February', '2022', '220', '2022/11/07'),
(4, 'jasal@gmail.com', 'March', '2022', '270', '2022/11/07'),
(5, 'jasal@gmail.com', 'June', '2022', '250', '2022/11/07'),
(6, 'jasal@gmail.com', 'March', '2022', '', '2022/11/08'),
(7, 'jasal@gmail.com', 'January', '2022', '', '2022/11/08');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `userid`, `complaint`, `reply`, `status`) VALUES
(1, 'jasal@gmail.com', 'i get the newspaper in a wet state for the past few days', 'i will solve it', 'RESOLVED'),
(2, 'jasal@gmail.com', 'jksagdasjhdadnqwk', 'r5rt7uu5r', 'RESOLVED'),
(3, 'jasal@gmail.com', 'innale paper kitteelaa', 'njn kondonn tharaam', 'RESOLVED'),
(4, 'sinan@gmail.com', 'i need newspapers', 'we have newspapers', 'RESOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE IF NOT EXISTS `newspapers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`id`, `name`, `price`) VALUES
(2, 'Mathrubhumi', '270'),
(3, 'Deshabhimani', '270'),
(4, 'Mangalam', '240'),
(5, 'Deepika', '270'),
(6, 'The Hindu', '260'),
(8, 'Indian Express', '270'),
(10, 'Malayala Manorama', '250'),
(11, 'Madhyamam', '270');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `papername` varchar(50) NOT NULL,
  `placedon` varchar(50) NOT NULL,
  `startmonth` varchar(50) NOT NULL,
  `startyear` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `papername`, `placedon`, `startmonth`, `startyear`, `status`) VALUES
(8, 'jasal@gmail.com', 'Malayala Manorama', '2022/11/07', 'January', '2022', 'APPROVED'),
(9, 'jasal@gmail.com', 'Times of India', '2022/11/07', 'February', '2022', 'APPROVED'),
(11, 'jasal@gmail.com', 'Times of India', '2022/11/08', 'August', '2022', 'APPROVED'),
(14, 'jithin@gmail.com', 'The Hindu', '2022/11/08', 'December', '2022', 'APPROVED'),
(17, 'manaf@gmail.com', 'Times Of India', '2022/11/12', 'December', '2022', 'APPROVED'),
(18, 'sinan@gmail.com', 'Mathrubhumi', '2022/11/13', 'December', '2022', 'APPROVED'),
(20, 'sinan@gmail.com', 'Madhyamam', '2022/11/13', 'January', '2022', 'APPROVED'),
(21, 'sinan@gmail.com', 'The Hindu', '2022/11/13', 'January', '2022', 'APPROVED'),
(22, 'sinan@gmail.com', 'Deepika', '2022/11/13', 'January', '2022', 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `paperboy`
--

CREATE TABLE IF NOT EXISTS `paperboy` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `papers` varchar(50) NOT NULL,
  `salaryperpaper` varchar(50) NOT NULL,
  `totalsalary` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `paperboy`
--

INSERT INTO `paperboy` (`id`, `name`, `address`, `phone`, `email`, `papers`, `salaryperpaper`, `totalsalary`, `userid`, `password`) VALUES
(3, 'ansil', 'Marottickal House,Edathala P.O,Ambunad', '7356995837', 'ansilrasheen07@gmail.com', '250', '35', '8750', 'ansil@gmail.com', 'ansil'),
(4, 'faisal', 'Marottickal House,Edathala P.O,Ambunad', '9083839208', 'faisal@gmail.com', '254', '25', '6350', 'faisal@gmail.com', 'faisal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone`, `email`, `userid`, `password`) VALUES
(1, 'jasal', 'Maleth House,Mudickal P.O,Nedumthodu', '9496698768', 'jasal@gmail.com', 'jasal@gmail.com', 'jasal'),
(2, 'Jithin', 'iwudijq', '76375213798', 'jithin@gmail.com', 'jithin@gmail.com', 'jithin'),
(3, 'manaf', 'vzgdgsd', '7863765', 'manaf@gmail.com', 'manaf@gmail.com', 'manaf'),
(4, 'sinan', 'Marottickal House,Edathala P.O,Ambunad', '8086235244', 'sinan@gmail.com', 'sinan@gmail.com', 'sinan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
