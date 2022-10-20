-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2022 at 05:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_type` text NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_phone` int(13) NOT NULL,
  `admin_pic` varchar(500) NOT NULL DEFAULT '../images/admins/no_pic.png',
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_type`, `admin_name`, `admin_email`, `admin_phone`, `admin_pic`, `password`) VALUES
(103023, 'user_manager', 'Njeke Silver', 'njekesilver@gmail.com', 704172740, '../images/admins/no_pic.png', '$2y$10$B94GWk4erhmtnT7kJ4MtaeIpIDKG3ohxre8VZvVavnTBFyXpPqwgy'),
(103026, 'property_manager', 'Libby Habile', 'libbymatolo@gmail.com', 717421423, '../images/admins/no_pic.png', '$2y$10$TNEyGv191Ity06.U8HB0IeCMfjHPWUCp23118YYRgseZBlhzV80Jy');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_id` int(3) NOT NULL,
  `property_id` int(10) NOT NULL,
  `client_id` int(3) NOT NULL,
  `amount` int(15) NOT NULL DEFAULT 0,
  `bid_approval` text NOT NULL DEFAULT '\'no\'',
  `bid_state` text NOT NULL DEFAULT 'incomplete',
  `bid_status` text NOT NULL DEFAULT 'open',
  `date_made` datetime NOT NULL,
  `date_approved` datetime NOT NULL,
  `approval_expiry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `property_id`, `client_id`, `amount`, `bid_approval`, `bid_state`, `bid_status`, `date_made`, `date_approved`, `approval_expiry`) VALUES
(1, 933, 807, 6000000, 'no', 'pending', 'blocked', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 6744, 807, 32900000, 'no', 'pending', 'blocked', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 172, 229, 2500, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 201, 229, 4639000, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1223, 810, 4500000, 'no', 'incomplete\r\n', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 201, 807, 4639000, 'no', 'pending', 'blocked', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1223, 807, 4500000, 'no', 'incomplete\r\n', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1220, 229, 1200000, 'no', 'pending', 'blocked', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1220, 807, 1200000, 'no', 'incomplete\r\n', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1222, 814, 5670000, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1030, 814, 1000, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 6432, 229, 14000000, 'no', 'incomplete\r\n', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 111, 111, 111111, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1223, 807, 45, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1223, 807, 4500000, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1223, 807, 450, 'no', 'incomplete', 'open', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 1223, 807, 3333, 'no', 'incomplete', 'open', '2022-07-18 08:39:56', '0000-00-00 00:00:00', '2022-07-25 08:39:56'),
(21, 1223, 807, 1111, 'no', 'incomplete', 'open', '2022-07-18 09:43:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE `broker` (
  `broker_id` int(10) NOT NULL,
  `broker_name` text NOT NULL,
  `broker_gender` text NOT NULL,
  `broker_location` text NOT NULL,
  `broker_phone_number` int(13) NOT NULL,
  `broker_email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `broker_pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`broker_id`, `broker_name`, `broker_gender`, `broker_location`, `broker_phone_number`, `broker_email`, `password`, `broker_pic`) VALUES
(130, 'Nazani Imadi', 'Female', 'Nairobi, Kenya', 708765476, 'nimadi@gmail.com', '$2y$10$gKPbgRmz1Wo.L63yBttfr.PZb6iin5we8Ns2Onfilz/VuYFMtmr2e', 'broker.jpg'),
(131, 'Zaphoz Kilima', 'Male', 'Nanyuki', 703245454, 'zkilima@gmail.com', '$2y$10$Bhuz2e7nCJ7XN8xiL1hlBeQKN1EJ6U57y1USm7NjQTultaeHZY64S', 'broker3.jpg'),
(132, 'Duncan Ndegwa', 'Male', 'CBD', 768675093, 'dndegwa@gmail.com', '$2y$10$iBR1.u.eU2nlpBxTnzh13eM/5OM1uyTFDc2VdWBZQBuwQ5JV8dDkK', 'broker4.jpg\n'),
(134, 'Senje Matolo', 'Female', 'Lavington', 790543765, 'smatolo@gmail.com', '$2y$10$MZqz.yJhcE0d7x.8iwuM7uU3va3Gw4OJnzOWya0rUB1Ksj762EedW', 'broker6.jpg'),
(135, 'Ailene Muthama', 'Female', 'Kilimani', 788665544, 'amuthama@gmail.com', '$2y$10$e0uwE26w.e9OkRjMNDIU.es56GWvV1PYQd1Lx5LbPiUxqvhcMljCS', 'broker5.jpg'),
(137, 'Prince Kiptoo', 'Male', 'Kakamega', 711888977, 'pkiptoo@gmail.com', '$2y$10$VxrlIjkTdGtDehF/p7wwXuBw1r0EhTHaJoFCpAR6/vBdBOWK9YB2K', 'broker3.jpg'),
(141, 'Ngari Ngari', 'Male', 'Marsabit', 786454545, 'ngari@gmail.com', '$2y$10$C.VpE9xFiJLoWU/TCalZ3eGqlWIUzYOIrzAtaK5EYSKdcGps5jCDO', 'no_pic.png'),
(143, 'chimi', 'Female', 'Kakamega', 711977888, 'chimi@gmail.com', '$2y$10$OvJ37ED2dCaL6xHKu4mGduqhK30.RdnjsWrXRwharaLZfWc6D7PWm', 'no_pic.png');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `gender` text NOT NULL,
  `phone_number` int(13) NOT NULL,
  `location` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `picture_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `gender`, `phone_number`, `location`, `email`, `password`, `picture_url`) VALUES
(229, 'Micky Adidie', 'Male', 788623415, 'Mombasa, Kenya', 'madidie@gmail.com', '$2y$10$EfQLy/WeXjnq7yYuwD25oOWeHhD7dL99HMospYoETXb.KundzKqji', 'client.jpg'),
(807, 'Amani Kamau', 'Female', 765432122, 'Malindi', 'akamau@gmail.com', '$2y$10$WJY1BKdWqD16nNBbsuEOceWIsYEfuNWwDHOowWB4pEyfxc5oLVgKq', 'client2.jpg'),
(810, 'Zaphan Murash', 'Male', 702214804, 'Nanyuki', 'zmurash@gmail.com', '$2y$10$OP7Uns1dS/75dA5JeEugy.Qgom39A10xH90p4LQTVPawYr2447SbG', 'client1.jpg'),
(812, 'Natalie Omera', 'Female', 797876543, 'Kisumu', 'nomera@gmail.com', '$2y$10$xpHnfexeSVBPv7rk6wlAuu7LYEsXlnmLS7zYp1Y28VSqHBFU84RLy', 'client3.jpg'),
(814, 'Imani Muchoki', 'Female', 725437555, 'Machakos', 'imuchoki@gmail.com', '$2y$10$cawp2tWVPM9nMq35C1KLee3NretqMP6jQMQjODBdHDQiHqnTdFW3i', 'client4.jpg'),
(816, 'Michelle Wahome', 'Female', 798786756, 'Muranga', 'mwahome@gmail.com', '$2y$10$/DA6Yflhcs2TjB96DNanZufgppOkO/skVp9tgNwkxUzyiqnaGHAKG', 'client5.jpg'),
(818, 'Kimani Macharia', 'Female', 755443322, 'Nakuru', 'kmacharia@gmail.com', '$2y$10$aaNbBHsPC2sRueW7Mh6z4uT18oW3gWeMGnGPPgIk5d.qx0RZKgcm2', 'client6.jpg'),
(824, 'chimi', 'Male', 711977888, 'Kakamega', 'chimi@gmail.com', '$2y$10$ZXRc3KodWHelOFTrzBr5Yu0Fx6FsgQDXaMB9pQK0pBym..fFU7iiS', 'no_pic.png');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(10) NOT NULL,
  `owner_name` text NOT NULL,
  `owner_gender` text NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `owner_phone` int(13) NOT NULL,
  `broker_id` int(10) NOT NULL,
  `broker_status` text NOT NULL DEFAULT 'unknown',
  `account_status` text NOT NULL DEFAULT 'not verified',
  `owner_pic` varchar(1000) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `owner_name`, `owner_gender`, `owner_email`, `owner_phone`, `broker_id`, `broker_status`, `account_status`, `owner_pic`, `password`) VALUES
(35, 'Francis Kumquat', 'Male', 'fkumquat@gmail.com', 784746360, 132, 'pending', 'not verified', '/repms/images/owners/owner1.jpg', ''),
(103, 'Tony Tdat', 'Male', 'ttdat@gmail.com', 784746360, 134, 'pending', 'not verified', '/repms/images/owners/owner2.jpg', ''),
(133, 'Keith Kiua', 'Male', 'kkiua@gmail.com', 777787922, 130, 'pending', 'not verified', '/repms/images/owners/owner3.jpg', ''),
(136, 'Imani Milaki', 'Male', 'imilaki@gmail.com', 707212918, 132, 'pending', 'not verified', '/repms/images/owners/owner5.jpg', ''),
(188, 'Kazing Karodas', 'Female', 'kkarodas@gmail.com', 766341922, 130, 'pending', 'not verified', '/repms/images/owners/owner14.jpg', ''),
(204, 'Zaphoz Murage', 'Male', 'zmurage@gmail.com', 702404814, 130, 'pending', 'not verified', '/repms/images/owners/owner9.jpg', ''),
(208, 'Jany Nyaboke', 'Female', 'jnyaboke@gmail.com', 765344544, 130, 'pending', 'not verified', '/repms/images/owners/owner4.jpg', ''),
(230, 'Terotich Milan', 'Female', 'tmilan@gmail.com', 710020427, 130, 'pending', 'not verified', '/repms/images/owners/owner7.jpg', ''),
(423, 'Maya Wilkes', 'Female', 'mwilkes@gmail.com', 789384453, 135, 'pending', 'not verified', '/repms/images/owners/owner8.jpg', ''),
(432, 'Bernard Hamasi', 'Male', 'bhamasi@gmail.com', 764769932, 131, 'pending', 'not verified', '/repms/images/owners/owner13.jpg', ''),
(546, 'Kamila Kagani', 'Female', 'kkagani@gmail.com', 785463728, 131, 'pending', 'not verified', '/repms/images/owners/owner0.jpg', ''),
(812, 'Tshaka Zumba', 'Male', 'tzumba@gmail.com', 765432108, 130, 'approved', 'not verified', '/repms/images/owners/owner12.jpg', ''),
(1324, 'Zara Marali', 'Female', 'zmarali@gmail.com', 744829627, 131, 'pending', 'not verified', '/repms/images/owners/owner6.jpg', ''),
(3240, 'Anna Kuliko', 'Female', 'akuliko@gmail.com', 729055097, 132, 'pending', 'not verified', '/repms/images/owners/owner1.jpg', ''),
(3242, 'Njeke Mbai', 'Rather not say', 'njekesilver@gmail.com', 0, 130, 'approved', 'not verified', '../images/owners/no_pic.png', ''),
(3243, 'chimi', 'Male', 'chimi@gmail.com', 711977888, 0, 'unknown', 'not verified', 'profile_images/62d3e4516bd429.02603803.png', '$2y$10$aaCCaXoGpNfJwsvyiy712epAgHp1MN72DpJ49ichFT3n.ZumEl/vG'),
(3244, 'zz', 'Male', 'zz@gmail.com', 786454545, 0, 'unknown', 'not verified', 'profile_images/62d3e7117e6e93.47663248.png', '$2y$10$xLXGWBJoQTSFEPzDOVC0nuBigvf8cmj/WGe6XeJx/R5LgdPNc3omO');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `transaction_id` int(10) NOT NULL,
  `property_name` text NOT NULL,
  `amount` int(13) NOT NULL,
  `transaction_code` varchar(500) NOT NULL,
  `payment_module` text NOT NULL DEFAULT '\'Pesa Pal\'',
  `client_id` int(10) NOT NULL,
  `date_paid` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transaction_id`, `property_name`, `amount`, `transaction_code`, `payment_module`, `client_id`, `date_paid`) VALUES
(1, 'Alfa Heights', 45000000, '', 'Pesa Pal', 229, '2022-06-23 15:23:12'),
(2, 'Nyaga Nyaga', 40000, '', 'Pesa Pal', 816, '2022-05-17 10:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(4) NOT NULL,
  `property_name` text NOT NULL,
  `price` int(12) NOT NULL,
  `bedrooms` int(2) NOT NULL,
  `bathrooms` int(2) NOT NULL,
  `location` text NOT NULL,
  `category` text NOT NULL,
  `owner_id` int(10) NOT NULL,
  `room1` varchar(500) NOT NULL,
  `room2` varchar(500) NOT NULL,
  `room3` varchar(500) NOT NULL,
  `room4` varchar(500) NOT NULL,
  `room5` varchar(500) NOT NULL,
  `room6` varchar(500) NOT NULL,
  `room7` varchar(500) NOT NULL,
  `room8` varchar(500) NOT NULL,
  `room9` varchar(500) NOT NULL,
  `room10` varchar(500) NOT NULL,
  `amenity1` text NOT NULL,
  `amenity2` text NOT NULL,
  `amenity3` text NOT NULL,
  `amenity4` text NOT NULL,
  `amenity5` text NOT NULL,
  `amenity6` text NOT NULL,
  `amenity7` text NOT NULL,
  `amenity8` text NOT NULL,
  `amenity9` text NOT NULL,
  `amenity10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `price`, `bedrooms`, `bathrooms`, `location`, `category`, `owner_id`, `room1`, `room2`, `room3`, `room4`, `room5`, `room6`, `room7`, `room8`, `room9`, `room10`, `amenity1`, `amenity2`, `amenity3`, `amenity4`, `amenity5`, `amenity6`, `amenity7`, `amenity8`, `amenity9`, `amenity10`) VALUES
(172, 'Pangolian Castle', 6570000, 3, 4, 'Lamu, Kenya', 'Mansion', 103, '/repms/images/Properties/172/bedroom.jpg', '/repms/images/Properties/172/bathroom.jpg', '/repms/images/Properties/172/kitchen.jpg', '/repms/images/Properties/172/gazebo.jpg', '/repms/images/Properties/172/living_room.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(201, 'Alfa Heights', 4639000, 4, 2, 'Kileleshwa, Nairobi', 'Apartment', 136, '/repms/images/Properties/201/living_room.jpg', '/repms/images/Properties/201/bedroom.jpg', '/repms/images/Properties/201/pool.jpg', '/repms/images/Properties/201/gym.jpg', '/repms/images/Properties/201/kitchen.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(300, 'Kamala Ganii', 5600000, 4, 6, 'Lavington, Nairobi', 'Mansion', 546, '/repms/images/Properties/300/gazebo.jpg', '/repms/images/Properties/300/bathroom.jpg', '/repms/images/Properties/300/kitchen.jpg', '/repms/images/Properties/300/living_room.jpg', '/repms/images/Properties/300/pool.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(367, 'Fatush Apartments', 4500000, 3, 3, 'Parklands, Nairobi', 'Apartment', 133, '/repms/images/Properties/367/laundry.jpg', '/repms/images/Properties/367/bedroom.jpg', '/repms/images/Properties/367/kitchen.jpg', '/repms/images/Properties/367/living_room.jpg', '/repms/images/Properties/367/pool.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(549, 'St. Francis', 47800000, 4, 5, 'Kiambu, Kiambu', 'Mansion', 230, '/repms/images/Properties/549/bedroom1.jpg', '/repms/images/Properties/549/playground.jpg', '/repms/images/Properties/549/kitchen.jpg', '/repms/images/Properties/549/living_room.jpg', '/repms/images/Properties/549/rooftop.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(933, 'Malaika Suite', 7890000, 4, 6, 'Roselyn, Nairobi', 'Mansion', 35, '/repms/images/Properties/933/bathroom.jpg', '/repms/images/Properties/933/bedroom.jpg', '/repms/images/Properties/933/kitchen.jpg', '/repms/images/Properties/933/living_room.jpg', '/repms/images/Properties/933/gazebo.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1030, 'Zero Degrees Apartments', 1350000, 3, 3, 'Hurlingham, Nairobi', 'Apartment', 208, '/repms/images/Properties/1030/dining.jpg', '/repms/images/Properties/1030/bedroom.jpg', '/repms/images/Properties/1030/pool.jpg', '/repms/images/Properties/1030/bedroom1.jpg', '/repms/images/Properties/1030/kitchen.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1220, 'Falcon Flats', 1200000, 2, 2, 'Kileleshwa, Nairobi', 'Apartment', 812, '/repms/images/Properties/1220/living_room.jpg', '/repms/images/Properties/1220/bedroom.jpg', '/repms/images/Properties/1220/kitchen.jpg', '/repms/images/Properties/1220/balcony.jpg', '/repms/images/Properties/1220/laundry.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1221, 'Lancaster Heights', 3600800, 3, 2, 'Ruaka', 'Apartment', 814, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1222, 'The Place', 5670000, 3, 3, 'Kasarani, Nairobi', 'Apartment', 188, '/repms/images/Properties/1222/bathroom.jpg', '/repms/images/Properties/1222/bedroom.jpg', '/repms/images/Properties/1222/kitchen.jpg', '/repms/images/Properties/1222/living_room.jpg', '/repms/images/Properties/1222/pool.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1223, 'Coconut Bay', 4500000, 5, 7, 'Karen', 'Mansion', 432, '/repms/images/Properties/1223/bathroom.jpg', '/repms/images/Properties/1223/bedroom.jpg', '/repms/images/Properties/1223/kitchen.jpg', '/repms/images/Properties/1223/living_room.jpg', '/repms/images/Properties/1223/rooftop.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6432, 'Casa Blanca', 14000000, 4, 3, 'Lavington, Nairobi', 'Bungalow', 1324, '/repms/images/Properties/6432/living_room.jpg', '/repms/images/Properties/6432/bedroom.jpg', '/repms/images/Properties/6432/garden.jpg', '/repms/images/Properties/6432/pool.jpg', '/repms/images/Properties/6432/tennis_court.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6744, 'Devil\'s Lair', 32900000, 4, 3, 'Matungulu', 'Cabin', 204, '/repms/images/Properties/6744/living_room.jpg', '/repms/images/Properties/6744/dining.jpg', '/repms/images/Properties/6744/kitchen.jpg', '/repms/images/Properties/6744/hallway.jpg', '/repms/images/Properties/6744/bedrrom.jpg', '/repms/images/Properties/6744/', '/repms/images/Properties/6744/', '/repms/images/Properties/6744/', '/repms/images/Properties/6744/', '/repms/images/Properties/6744/', '', '', '', '', '', '', '', '', '', ''),
(1342534664, 'Casa Amor', 3000000, 6, 5, 'Kitusuru', 'Apartment', 3242, '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '', '', '', '', '', '', '', '', '', ''),
(1342534667, 'Tshaka Villa', 56000000, 4, 5, 'Kitusuru', 'Condo', 812, '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', 'Swimming Pool', 'Gym', 'Gazebo', 'Garden', 'Wifi', 'Security', '', '', '', ''),
(1342534668, 'Su Casa', 1700000, 4, 3, 'Kahawa Sukari', 'Bungalow', 3242, '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', '/repms/images/Properties/', 'Garden', 'WiFi', 'Laundry', 'Garage', 'Chimney', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `rental_id` int(10) NOT NULL,
  `rental_name` text NOT NULL,
  `rental_location` text NOT NULL,
  `rental_price` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `category` text NOT NULL,
  `occupied` varchar(20) NOT NULL DEFAULT 'no',
  `rent_paid` text NOT NULL DEFAULT '\'no\'',
  `client_id` int(15) DEFAULT NULL,
  `room1` varchar(500) DEFAULT '../images/Rentals/',
  `room2` varchar(500) DEFAULT '../images/Rentals/',
  `room3` varchar(500) DEFAULT '../images/Rentals/',
  `room4` varchar(500) DEFAULT '../images/Rentals/',
  `room5` varchar(500) DEFAULT '../images/Rentals/',
  `room6` varchar(500) NOT NULL,
  `room7` varchar(500) NOT NULL,
  `room8` varchar(500) NOT NULL,
  `room9` varchar(500) NOT NULL,
  `room10` varchar(500) NOT NULL,
  `amenity1` text NOT NULL,
  `amenity2` text NOT NULL,
  `amenity3` text NOT NULL,
  `amenity4` text NOT NULL,
  `amenity5` text NOT NULL,
  `amenity6` text NOT NULL,
  `amenity7` text NOT NULL,
  `amenity8` text NOT NULL,
  `amenity9` text NOT NULL,
  `amenity10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`rental_id`, `rental_name`, `rental_location`, `rental_price`, `bedrooms`, `bathrooms`, `owner_id`, `category`, `occupied`, `rent_paid`, `client_id`, `room1`, `room2`, `room3`, `room4`, `room5`, `room6`, `room7`, `room8`, `room9`, `room10`, `amenity1`, `amenity2`, `amenity3`, `amenity4`, `amenity5`, `amenity6`, `amenity7`, `amenity8`, `amenity9`, `amenity10`) VALUES
(125, 'Nyaga Nyaga', 'Kitengela', 40000, 3, 4, 230, 'Mansion', 'not paid', 'no', 816, '../images/Rentals/125/living_room.jpg', '../images/Rentals/125/kitchen.jpg', '../images/Properties/125/dining.jpg', '../images/Properties/125/bathroom.jpg', '../images/Properties/125/pool.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, 'The Monsoon', 'Syokimau', 35000, 3, 2, 230, 'Apartment', 'occupied', 'no', 0, '../images/Rentals/126/living_room.jpg', '../images/Rentals/126/bedroom.jpg', '../images/Rentals/126/kitchen.jpg', '../images/Rentals/126/dining.jpg', '../images/Rentals/126/bathroom', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, 'Mara Apartments', 'Thome', 39000, 3, 3, 102, 'Aparment', 'not', 'no', 102, '../images/Rentals/127', '../images/Rentals/127', '../images/Rentals/127', '../images/Rentals/127', '../images/Rentals/127', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, 'Moria Mwago', 'Kitusuru', 120000, 6, 8, 0, 'Mansion', 'no', '\'no\'', NULL, '../images/Rentals/128', '../images/Rentals/128', '../images/Rentals/128', '../images/Rentals/128', '../images/Rentals/128\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, 'Darina ', 'Buruburu', 45000, 3, 3, 208, 'Mansionette', 'no', 'no', 0, 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', ' ', ' ', ' ', ' ', ' ', '', '', '', '', ''),
(132, 'Su Casa', 'Kahawa Sukari', 46000, 4, 3, 3242, 'Bungalow', 'no', 'no', 0, 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'no_pic.jpg', 'Garden', 'WiFi', 'Laundry', 'Garden', 'Chimney', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(10) NOT NULL,
  `requester_type` text NOT NULL,
  `requester_id` int(10) NOT NULL,
  `servicer_id` int(10) NOT NULL,
  `request_title` varchar(200) NOT NULL,
  `request_content` varchar(1000) NOT NULL,
  `date_sent` datetime NOT NULL,
  `date_completed` datetime DEFAULT NULL,
  `request_status` text NOT NULL DEFAULT 'pending',
  `viewed` text NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `requester_type`, `requester_id`, `servicer_id`, `request_title`, `request_content`, `date_sent`, `date_completed`, `request_status`, `viewed`) VALUES
(1, 'client', 229, 103023, 'Bid Reversal', 'I would like to reverse my request but I am unsure how. Please help.', '2022-07-17 19:22:30', NULL, 'pending', 'no'),
(2, 'client', 229, 103023, 'Password Change', 'I would like to change my password but I am unsure how. Please help.', '2022-07-17 19:46:30', NULL, 'pending', 'no'),
(3, 'client', 229, 130, 'Electrical Issues', 'Sina stima, sort me please.', '2022-07-19 03:58:46', NULL, 'pending', 'yes'),
(7, 'client', 229, 130, 'Plumbing and Water Supply', 'I haven\'t had water for two days. Could you send a plumber to check it out?', '2022-07-19 04:28:57', NULL, 'pending', 'no'),
(12, 'client', 229, 130, 'Rent Issues', 'I paid my rent but it is not reflecting in the system. Please help.\r\n\r\n', '2022-07-19 04:47:30', NULL, 'pending', 'no'),
(13, 'client', 229, 103023, 'Password Change', 'I want to change my password.', '2022-07-19 04:50:14', NULL, 'pending', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `response_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `response_title` text NOT NULL,
  `response_content` text NOT NULL,
  `date_sent` datetime NOT NULL,
  `date_viewed` text NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`response_id`, `request_id`, `response_title`, `response_content`, `date_sent`, `date_viewed`) VALUES
(1, 3, 'Electrical Issues', 'I have sent the electrician to check the mains.', '2022-07-19 05:22:09', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `tenant_id` int(10) NOT NULL,
  `tenant_name` text NOT NULL,
  `property_id` int(10) NOT NULL,
  `location` text NOT NULL,
  `rent_status` text NOT NULL DEFAULT 'due'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`tenant_id`, `tenant_name`, `property_id`, `location`, `rent_status`) VALUES
(1, 'Karuni Mara', 0, 'Kilimani', 'due\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(5) NOT NULL,
  `client_id` int(10) NOT NULL,
  `property_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wish_id`, `client_id`, `property_id`) VALUES
(2, 807, 6744),
(4, 807, 1223),
(5, 229, 172),
(6, 229, 201),
(7, 810, 1223),
(8, 229, 1220),
(9, 807, 1220),
(10, 229, 6432),
(12, 814, 1030),
(13, 807, 933);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `broker`
--
ALTER TABLE `broker`
  ADD PRIMARY KEY (`broker_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`rental_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`response_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`tenant_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103027;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `broker`
--
ALTER TABLE `broker`
  MODIFY `broker_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=825;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3245;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1342534669;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `rental_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `tenant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
