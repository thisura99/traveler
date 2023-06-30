-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2023 at 06:40 PM
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
CREATE DATABASE IF NOT EXISTS `traveler` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `traveler`;

-- --------------------------------------------------------

--
-- Table structure for table `about_service_items`
--

CREATE TABLE IF NOT EXISTS `about_service_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `about_service_items`
--

INSERT INTO `about_service_items` (`id`, `icon`, `title`, `description`) VALUES
(6, 'fa-globe', 'WorldWide Toures', 'One of the benefits of traveling on a package tour around the world is the cost cutting aspect. At least some of your meals will be covered, as well as a good amount of transportation, and almost all accommodations.'),
(7, 'fa-hotel', 'Hotel Reservation', 'We can offer a 3 star to 7 star hotel for you with best facilities include rooms, swimming pools, with clubs. we have agents in many countries. you can get special descounts when booking hotels from our web site.'),
(8, 'fa-users', 'Travel Guides', 'Are you looking for some new and exciting travel destinations? Maybe you are curious about a specific country or culture, and you are not sure where to start. Wonder no more â€“ we have got the perfect travel guide for you!'),
(9, 'fa-cog', 'Event Management', 'we manage anything from a small meeting to a huge conference. There are many different aspects to event management, and it can be a complex and challenging process.'),
(10, 'fa-shield-halved', '100% Guranteed', 'We serve more than 100,000 travelers worldwide per year. We can provide you 100% guaranteed, safe, premium, best facilities you can get.'),
(11, 'fa-binoculars', 'Travel Equipment', 'We have more than 100+ travel equipment and we have travel equipment dealers. We sell and rent travel equipment. We have top brand and good quality equipment.'),
(12, 'fa-tachometer', 'Authentic & Unique', 'Go off the beaten track. Our award-winning licensed local guides provide incredible insights add insider tips, passionately bringing alive unique and exclusive experiences for you.'),
(13, 'fa-car', 'Transport Services', 'When you travel, it is important to stay safe. One way to do that is to have one of our agents attend with our vehicle. You do not have to constantly check on them. 100% reliable.');

-- --------------------------------------------------------

--
-- Table structure for table `best_holiday`
--

CREATE TABLE IF NOT EXISTS `best_holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `rating` int(2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `best_holiday`
--

INSERT INTO `best_holiday` (`id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description`) VALUES
(3, 'Scenic Sri Lanka Tour', 'Nuwara Eliya', '130', 'laxapana_card.jpg', 5, '250.00', 'best weekend in nuwara eliya.\r\n'),
(4, 'Clasic Tour', 'Badulla', '160', 'clasic_tour.jpg', 3, '200.00', 'can get best experiment.'),
(5, 'Culture Tour', 'Anuradhapura', '180', 'culture_tour.jpg', 5, '300.00', 'Lowest price and enjoy better days.');

-- --------------------------------------------------------

--
-- Table structure for table `best_places`
--

CREATE TABLE IF NOT EXISTS `best_places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `rating` int(2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `best_places`
--

INSERT INTO `best_places` (`id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description`) VALUES
(17, 'Jungle Beach', 'Unawatuna', '147', 'Jungle_Beach_Card.jpg', 4, '150.00', 'Jungle Beach is a small bay in Rumassala. you can enjoy a great day of sunbathing and snorkeling.'),
(18, 'Bahirawakanda', 'Kandy', '200', 'bahirawakanda_card.jpg', 3, '400.00', 'NIce view point in the kandy.'),
(19, 'Ruwanweliseya', 'Anuradapura', '200', 'ruwanweliseya_card.jpg', 4, '140.00', 'Historical place in the anuradhapura.');

-- --------------------------------------------------------

--
-- Table structure for table `festival_sl`
--

CREATE TABLE IF NOT EXISTS `festival_sl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` int(2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `festival_sl`
--

INSERT INTO `festival_sl` (`id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description`) VALUES
(1, 'kandy perehera', 'Kandy', '150', 'kandy_perehera_card.jpg', 4, '200.00', 'Attractive Event in the Kandy..'),
(2, 'Katharagam Perehera', 'Katharagama', '160', 'katharagama_perehera_card.jpg', 5, '250.00', 'Most famous place in the souther province'),
(3, 'Vesak Festival', 'All Around The Sri Lanka', '0', 'vesak_card.jpg', 4, '0.00', 'You can see beautiful Sri Lankan roads in May..');

-- --------------------------------------------------------

--
-- Table structure for table `home_about`
--

CREATE TABLE IF NOT EXISTS `home_about` (
  `sub_title` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `para_1` longtext NOT NULL,
  `para_2` longtext NOT NULL,
  `point_1` varchar(30) NOT NULL,
  `point_2` varchar(30) NOT NULL,
  `point_3` varchar(30) NOT NULL,
  `point_4` varchar(30) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_about`
--

INSERT INTO `home_about` (`sub_title`, `title`, `para_1`, `para_2`, `point_1`, `point_2`, `point_3`, `point_4`, `image`) VALUES
('ABOUT', 'Welcome to Sri Lanka', 'Sri Lanka is a small island surrounded by the sea, but it is an attractive place with an environment that captivates the eyes of the natural beauty. And a country full of unique traditions and mind-blowing places. Sri Lanka is one of the leading romantic destinations in the whole world. The land of serendipity brings spiritual tranquility and a chance to rediscover oneself. The beauty of this tiny island is simply breath-taking. Known for its enchanting ancient ruins, endless soft-sanded beaches, imposing mountains, colourful festivals, tempting water sports, dense wild-life, diverse ethnical groups and off the top hospitality from the local residents, Sri Lanka is bound to make you come back again.', 'We''ll bring all of this to your fingertips for you, so you can discover the island of tranquility. This is the best time to visit Sri Lanka. Come, enjoy and make memories!', 'Professional Staff', 'Top Driver Guides', 'Custom Made Private Tours', '24/7 Online Service', 'welcome.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imagetest`
--

CREATE TABLE IF NOT EXISTS `imagetest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `imagetest`
--

INSERT INTO `imagetest` (`id`, `title`, `image`, `description`) VALUES
(1, 'dff', 'Photo.jpeg', 'dfssd'),
(3, 'fhgfd', 'WhatsApp Image 2022-10-22 at 5.16.24 PM.jpeg', 'dfghdf'),
(8, 'fgdsf', 'photo-1624696503378-069979d46b71.jpg', 'dfs'),
(9, 'sdfsdf', 'Photo.jpeg', 'sfds'),
(11, 'sdf', '4.PNG', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `image`) VALUES
(1, 'Travel Bag', '100.00', 'travel_bag.jpg'),
(4, 'Travel Tent', '80.00', 'travel_tent.jpg'),
(5, 'Hiking Shoe', '200.00', 'hiking_shoes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(23, 'thisura', 'thisura@gc', '123', 'admin'),
(24, 'seniya', 'se@gc', '111', 'user'),
(36, 'cc', 'cc@cc', 'cc', 'admin'),
(63, 'qs', 'qs@qs', 'qs', 'user'),
(64, 'xx', 'xx@xx', 'xx', 'user'),
(67, 'asdddsa', 'asq@asq', 'asq', 'user'),
(68, 'qe', 'qe@qe', 'qe', 'user'),
(69, '12', '12@12', '12', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `top_thing`
--

CREATE TABLE IF NOT EXISTS `top_thing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `rating` int(2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `top_thing`
--

INSERT INTO `top_thing` (`id`, `title`, `location`, `distance`, `image`, `rating`, `price`, `description`) VALUES
(3, 'Bird Watching', 'Anawilundawa', '120', 'bird_watching_card.jpg', 4, '120.00', 'Best for wild photography.'),
(2, 'Surffing', 'Weligama', '18', 'surffing _card.jpg', 3, '80.00', 'Jungle Beach is a small bay in Rumassala. you can enjoy a great day of sunbathing and snorkeling.'),
(4, 'Scuba Diving', ' Mirissa', '87', 'scuba_diving_card.jpg', 3, '150.00', 'best place for surfing and scuba diiving');

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
(1, 'Europe', 'Packages Are Starting At $400 Per Person', 'country_01_packs.php', 'europe.jpg'),
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
