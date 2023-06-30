-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2023 at 06:38 PM
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
-- Table structure for table `world_tour_packages`
--

CREATE TABLE IF NOT EXISTS `world_tour_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pack_id` varchar(150) NOT NULL,
  `pack_title` varchar(50) NOT NULL,
  `place_1` varchar(50) NOT NULL,
  `place_2` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `rating` int(2) NOT NULL,
  `tour_name` varchar(150) NOT NULL,
  `tour_type` varchar(50) NOT NULL,
  `hotels` int(2) NOT NULL,
  `activities` int(2) NOT NULL,
  `transfers` int(2) NOT NULL,
  `nights` int(2) NOT NULL,
  `days` int(2) NOT NULL,
  `url` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `world_tour_packages`
--

INSERT INTO `world_tour_packages` (`id`, `pack_id`, `pack_title`, `place_1`, `place_2`, `price`, `rating`, `tour_name`, `tour_type`, `hotels`, `activities`, `transfers`, `nights`, `days`, `url`, `image`) VALUES
(1, 'country_1', 'Europe', 'Eiffel Tower', 'Disneyland', '2400.00', 5, 'Swiss Paris Delight Group Departure 2023', 'Holiday Package', 3, 14, 1, 6, 7, 'country_01_packs_01.php', 'europe_pack_1.jpg'),
(2, 'country_1', 'Europe', 'Eiffel Tower', 'Transfers', '2000.00', 5, 'Budget Swiss Paris Group Departure 2023!', 'Holiday Package', 2, 6, 2, 5, 6, 'country_01_packs_01.php', 'europe_pack_2.jpg'),
(3, 'country_1', 'Europe', 'Vlenna', 'Prague', '2300.00', 5, 'Jewels of Eastern Europe Group Departure - 2023', 'Holiday Package', 4, 8, 1, 7, 8, 'country_01_packs_01.php', 'europe_pack_3.jpg'),
(4, 'country_1', 'Europe', 'Amsterdam', 'Paris', '2500.00', 5, 'Amsterdam Swiss Paris Budget Special Group Departure 2023', 'Holiday Package', 3, 7, 2, 8, 9, 'country_01_packs_01.php', 'europe_pack_4.jpg'),
(5, 'country_1', 'Europe', 'Valencia', 'Barcelona', '2100.00', 5, 'Spanish Delight Budget Special Group Departure 2023', 'Holiday Package', 5, 4, 2, 7, 8, 'country_01_packs_01.php', 'europe_pack_5.jpg'),
(6, 'country_1', 'Europe', 'Padova', 'Milan', '2800.00', 5, 'Best of Italy & Swiss Group Departure 2023', 'Holiday Package', 6, 9, 2, 8, 9, 'country_01_packs_01.php', 'europe_pack_6.jpg'),
(7, 'country_1', 'Europe', 'Eiffel Tower', 'Berlin', '3200.00', 5, 'European Dream Group Departure 2023', 'Holiday Package', 6, 8, 1, 11, 12, 'country_01_packs_01.php', 'europe_pack_7.jpg'),
(8, 'country_1', 'Europe', 'Eiffel Tower', 'Mannheim', '3600.00', 5, 'European Bonanza- Group Departure 2023', 'Holiday Package', 9, 14, 1, 13, 14, 'country_01_packs_01.php', 'europe_pack_8.jpg'),
(9, 'country_1', 'Europe', 'London Eye', 'Zurich', '3000.00', 5, 'London Swiss Paris-Budget Special Group Departure 2023', 'Holiday Package', 3, 7, 2, 8, 9, 'country_01_packs_01.php', 'europe_pack_9.jpg'),
(10, 'country_1', 'Europe', 'London City Tower', 'London Eye', '2800.00', 5, 'Majestic London & Scotland Group Departure 2023', 'Holiday Package', 5, 7, 2, 8, 9, 'country_01_packs_01.php', 'europe_pack_10.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
