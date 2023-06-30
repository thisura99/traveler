-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2023 at 06:41 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `traveler`
--

-- --------------------------------------------------------

--
-- Table structure for table `world_tour`
--

CREATE TABLE IF NOT EXISTS `world_tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `rating` int(2) NOT NULL,
  `tour_name` varchar(150) NOT NULL,
  `tour_type` varchar(50) NOT NULL,
  `hotels` int(2) NOT NULL,
  `activities` int(2) NOT NULL,
  `transfers` int(2) NOT NULL,
  `nights` int(2) NOT NULL,
  `days` int(2) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `world_tour`
--

INSERT INTO `world_tour` (`id`, `destination`, `price`, `rating`, `tour_name`, `tour_type`, `hotels`, `activities`, `transfers`, `nights`, `days`, `image`) VALUES
(1, 'Paris', '90000.00', 5, 'Swiss Paris Delight Group Departure', 'Holiday  tour', 2, 5, 2, 6, 7, 'paris_tour_1.jpg'),
(2, 'Portugal', '75000.00', 5, 'Best of Spain & Portugal! 2023', 'Holiday Package', 2, 4, 1, 6, 7, 'Portugal_tour_1.jpg'),
(8, 'Thailand', '50000.00', 4, 'Unforgettable Trip to Krabi & Phuket', 'Holiday Tour', 2, 5, 2, 6, 7, 'thailand_tour_1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
