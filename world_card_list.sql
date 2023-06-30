-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2023 at 09:15 PM
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
-- Table structure for table `world_card_list`
--

CREATE TABLE IF NOT EXISTS `world_card_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `world_card_list`
--

INSERT INTO `world_card_list` (`id`, `title`, `description`, `url`, `image`) VALUES
(1, 'Europe', 'Packages Are Starting At $400 Per Person', 'url', 'europe.jpg'),
(2, 'Thailand', 'Packages Are Starting At $80 Per Person', 'country_01_packs.php', 'thailand.jpg'),
(3, 'Mauritius', 'Packages Are Starting At $250 Per Person', 'country_01_packs.php', 'mauritius.jpg'),
(4, 'Singapore', 'Packages Are Starting At $400 Per Person', 'country_01_packs.php', 'singapore.jpg'),
(5, 'Bali', 'Packages Are Starting At $450 Per Person', 'country_01_packs.php', 'bali.jpg'),
(6, 'Dubai', 'Packages Are Starting At $200 Per Person', 'country_01_packs.php', 'dubai.jpg'),
(7, 'Maldives', 'Packages Are Starting At $200 Per Person', 'country_01_packs.php', 'maldives.jpg'),
(8, 'Australia', 'Packages Are Starting At $200 Per Person', 'country_01_packs.php', 'australia.jpg'),
(9, 'Turkey', 'Packages Are Starting At $800 Per Person', 'country_01_packs.php', 'turkey.jpg'),
(10, 'Vietnam', 'Packages Are Starting At $150 Per Person', 'country_01_packs.php', 'vietnam.jpg'),
(11, 'Gujarat', 'Packages Are Starting At $90 Per Person', 'url', 'gujarat.jpg'),
(12, 'Mahaeashtra', 'Packages Are Starting At $120 Per Person', 'url', 'maharashtra.jpg'),
(13, 'South Africa', 'Packages Are Starting At $1100 Per Person', 'country_01_packs.php', 'south_africa.jpg'),
(14, 'Egypt', 'Packages Are Starting At $1200 Per Person', 'country_01_packs.php', 'egypt.jpg'),
(15, 'Australia', 'Packages Are Starting At $330 Per Person', 'country_01_packs.php', 'australia.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
