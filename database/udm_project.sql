-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 07:30 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udm_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `battery_capacity`
--

CREATE TABLE `battery_capacity` (
  `id_capacity` int(11) NOT NULL,
  `name_capacity` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battery_capacity`
--

INSERT INTO `battery_capacity` (`id_capacity`, `name_capacity`) VALUES
(1, '10'),
(2, '20'),
(3, '30'),
(4, '40'),
(5, '50'),
(6, '60'),
(7, '70'),
(8, '80'),
(9, '90'),
(10, '100'),
(11, '110'),
(12, '120'),
(13, '130'),
(14, '140'),
(15, '150'),
(16, '160');

-- --------------------------------------------------------

--
-- Table structure for table `battery_charger`
--

CREATE TABLE `battery_charger` (
  `id_charger` int(11) NOT NULL,
  `name_charger` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battery_charger`
--

INSERT INTO `battery_charger` (`id_charger`, `name_charger`) VALUES
(1, 'Slow'),
(2, 'Semi Fast');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id_budget` int(11) NOT NULL,
  `name_budget` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id_budget`, `name_budget`) VALUES
(1, 50),
(2, 60),
(3, 70),
(4, 80),
(5, 90),
(6, 100),
(7, 110),
(8, 120),
(9, 130),
(10, 140),
(11, 150),
(12, 160),
(13, 170),
(14, 180),
(15, 190),
(16, 200),
(17, 70),
(18, 80),
(19, 90),
(20, 100),
(21, 110),
(22, 120),
(23, 130),
(24, 140),
(25, 150),
(26, 160),
(27, 170),
(28, 180),
(29, 190),
(30, 200);

-- --------------------------------------------------------

--
-- Table structure for table `ceb_power`
--

CREATE TABLE `ceb_power` (
  `id_ceb_power` int(11) NOT NULL,
  `name_ceb_power` int(11) NOT NULL,
  `id_ceb_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ceb_power`
--

INSERT INTO `ceb_power` (`id_ceb_power`, `name_ceb_power`, `id_ceb_category`) VALUES
(1, 25, 0),
(2, 50, 0),
(3, 25, 0),
(4, 50, 0),
(5, 75, 0),
(6, 100, 0),
(7, 200, 0),
(8, 300, 0),
(9, 350, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ceb_price`
--

CREATE TABLE `ceb_price` (
  `id_ceb_price` int(11) NOT NULL,
  `name_ceb_price` float NOT NULL,
  `id_ceb_tariff` int(11) NOT NULL,
  `id_ceb_power` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ceb_price`
--

INSERT INTO `ceb_price` (`id_ceb_price`, `name_ceb_price`, `id_ceb_tariff`, `id_ceb_power`) VALUES
(1, 2.18, 1, 1),
(2, 3.04, 1, 2),
(3, 5.45, 1, 4),
(4, 6.15, 1, 5),
(5, 7.02, 1, 6),
(6, 7.9, 1, 7),
(7, 8.77, 1, 8),
(8, 3.16, 2, 1),
(9, 4.38, 2, 2),
(10, 4.74, 2, 3),
(11, 5.45, 2, 4),
(12, 6.15, 2, 5),
(13, 7.02, 2, 6),
(14, 7.9, 2, 7),
(15, 8.77, 2, 8),
(16, 3.16, 3, 1),
(17, 4.38, 3, 2),
(18, 4.74, 3, 3),
(19, 5.45, 3, 4),
(20, 6.15, 3, 5),
(21, 7.02, 3, 6),
(22, 7.9, 3, 7),
(23, 8.77, 3, 8),
(24, 3.16, 4, 1),
(25, 4.38, 4, 2),
(26, 4.74, 4, 3),
(27, 5.45, 4, 4),
(28, 6.15, 4, 5),
(29, 7.02, 4, 6),
(30, 7.9, 4, 7),
(31, 8.77, 4, 8),
(32, 5.4, 5, 0),
(33, 10, 5, 0),
(34, 4, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ceb_tariff`
--

CREATE TABLE `ceb_tariff` (
  `id_ceb_tariff` int(11) NOT NULL,
  `name_ceb_tariff` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ceb_tariff`
--

INSERT INTO `ceb_tariff` (`id_ceb_tariff`, `name_ceb_tariff`) VALUES
(1, '110A'),
(2, '110'),
(3, '120'),
(4, '140'),
(5, '150C');

-- --------------------------------------------------------

--
-- Table structure for table `charger`
--

CREATE TABLE `charger` (
  `id_charger` int(6) NOT NULL,
  `name_charger` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_capacity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charger`
--

INSERT INTO `charger` (`id_charger`, `name_charger`, `id_capacity`) VALUES
(1, 'Slow', 1),
(2, 'Semi-Fas', 1),
(3, 'Fast', 1);

-- --------------------------------------------------------

--
-- Table structure for table `charger_price`
--

CREATE TABLE `charger_price` (
  `id_charger_price` int(11) NOT NULL,
  `name_charger_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_charger_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charger_price`
--

INSERT INTO `charger_price` (`id_charger_price`, `name_charger_price`, `price_charger_price`) VALUES
(1, 'Trickle supply', 0),
(2, 'Wallbox 7.4kw', 80000),
(3, 'Wallbox 11kw', 120000),
(4, 'semi-fast charger', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `consumption`
--

CREATE TABLE `consumption` (
  `id_consumption` int(11) NOT NULL,
  `name_consumption` float NOT NULL,
  `id_power` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumption`
--

INSERT INTO `consumption` (`id_consumption`, `name_consumption`, `id_power`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `daily_range`
--

CREATE TABLE `daily_range` (
  `id_daily_range` int(11) NOT NULL,
  `name_daily_range` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_range`
--

INSERT INTO `daily_range` (`id_daily_range`, `name_daily_range`) VALUES
(1, 0),
(2, 1),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 15),
(12, 20),
(13, 25),
(14, 30),
(15, 35),
(16, 40),
(17, 45),
(18, 50),
(19, 55),
(20, 60),
(21, 65),
(22, 70),
(23, 75),
(24, 80),
(25, 85),
(26, 90),
(27, 95),
(28, 100),
(29, 105),
(30, 110),
(31, 115),
(32, 120);

-- --------------------------------------------------------

--
-- Table structure for table `distance`
--

CREATE TABLE `distance` (
  `id_distance` int(11) NOT NULL,
  `name_distance` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distance`
--

INSERT INTO `distance` (`id_distance`, `name_distance`) VALUES
(1, 5),
(2, 10),
(3, 15),
(4, 20),
(5, 25),
(6, 30),
(7, 35),
(8, 40),
(9, 45),
(10, 50),
(11, 55),
(12, 60),
(13, 65),
(14, 70),
(15, 75),
(16, 80),
(17, 85),
(18, 90),
(19, 95),
(20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `durer`
--

CREATE TABLE `durer` (
  `id_durer` int(11) NOT NULL,
  `name_durer` int(11) NOT NULL,
  `id_null` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `durer`
--

INSERT INTO `durer` (`id_durer`, `name_durer`, `id_null`) VALUES
(3, 15, 0),
(4, 30, 0),
(5, 45, 0),
(6, 60, 0),
(7, 75, 0),
(8, 90, 0),
(9, 120, 0),
(10, 130, 0),
(11, 140, 0),
(12, 150, 0),
(13, 160, 0),
(14, 170, 0),
(15, 180, 0),
(16, 190, 0),
(17, 200, 0),
(18, 210, 0),
(19, 220, 0),
(20, 230, 0),
(21, 240, 0),
(22, 250, 0),
(28, 90, 0),
(29, 120, 0),
(30, 130, 0),
(31, 140, 0),
(32, 150, 0),
(33, 160, 0),
(34, 170, 0),
(35, 180, 0),
(36, 190, 0),
(37, 200, 0),
(38, 210, 0),
(39, 220, 0),
(40, 230, 0),
(41, 240, 0),
(42, 250, 0);

-- --------------------------------------------------------

--
-- Table structure for table `energy`
--

CREATE TABLE `energy` (
  `id_energy` int(11) NOT NULL,
  `name_energy` varchar(255) NOT NULL,
  `co2_rate` float NOT NULL,
  `power_dissiped` double NOT NULL,
  `price_energy` float NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `energy`
--

INSERT INTO `energy` (`id_energy`, `name_energy`, `co2_rate`, `power_dissiped`, `price_energy`, `id_type`) VALUES
(1, 'gasoline', 2392, 8.9, 74.1, 2),
(2, 'diesel', 2640, 10, 54.55, 2),
(4, 'electric', 0, 0, 5.45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `name_location` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id_location`, `name_location`) VALUES
(1, 'North'),
(2, 'South'),
(3, 'Est'),
(4, 'West');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `id_make` int(11) NOT NULL,
  `name_make` varchar(255) NOT NULL,
  `id_energy` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`id_make`, `name_make`, `id_energy`, `id_marque`) VALUES
(1, 'Toyota', 1, 1),
(2, 'Toyota', 2, 1),
(3, 'Toyota', 3, 1),
(4, 'Mercedes', 1, 2),
(6, 'Mercedes', 3, 2),
(7, 'BMW', 1, 3),
(9, 'BMW', 3, 3),
(10, 'Honda', 1, 4),
(12, 'Honda', 3, 4),
(13, 'Hyundai', 1, 5),
(15, 'Hyundai', 3, 5),
(16, 'Tesla', 4, 6),
(17, 'Ford', 1, 7),
(18, 'Ford', 2, 7),
(19, 'Ford', 3, 7),
(20, 'Audi', 1, 8),
(22, 'Audi', 3, 8),
(24, 'Volkswagen', 1, 9),
(26, 'Volkswagen', 3, 9),
(28, 'Porsche ', 1, 10),
(29, 'Porsche ', 3, 10),
(31, 'Nissan', 1, 11),
(32, 'Nissan', 2, 11),
(33, 'Nissan', 3, 11),
(37, 'Kia', 1, 13),
(39, 'Kia', 3, 13),
(182, 'Mitsubishi', 1, 14),
(183, 'Mitsubishi', 2, 14),
(184, 'Peugeot', 1, 15),
(185, 'Peugeot', 3, 15),
(186, 'Citroen', 1, 16),
(187, 'Citroen', 3, 16),
(188, 'Renault', 1, 17),
(189, 'Renault', 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `max_range_full_charge`
--

CREATE TABLE `max_range_full_charge` (
  `id_max_range_full_charge` int(11) NOT NULL,
  `name_max_range_full_charge` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `max_range_full_charge`
--

INSERT INTO `max_range_full_charge` (`id_max_range_full_charge`, `name_max_range_full_charge`) VALUES
(1, 10),
(2, 15),
(3, 20),
(4, 25),
(5, 30),
(6, 35),
(7, 40),
(8, 45),
(9, 50),
(10, 55),
(11, 60),
(12, 65),
(13, 70),
(14, 75),
(15, 80),
(16, 85),
(17, 90),
(18, 95),
(19, 100),
(20, 105),
(21, 110),
(22, 115),
(23, 120),
(24, 125),
(25, 130),
(26, 135),
(27, 140),
(28, 145),
(29, 150),
(30, 155),
(31, 160),
(32, 165);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_consumption`
--

CREATE TABLE `monthly_consumption` (
  `id_monthly_consumption` int(11) NOT NULL,
  `name_monthly_consumption` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_consumption`
--

INSERT INTO `monthly_consumption` (`id_monthly_consumption`, `name_monthly_consumption`) VALUES
(1, 0),
(2, 1),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32);

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE `power` (
  `id_power` int(11) NOT NULL,
  `name_power` int(11) NOT NULL,
  `id_make` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `power`
--

INSERT INTO `power` (`id_power`, `name_power`, `id_make`) VALUES
(95, 101, 0),
(98, 102, 0),
(99, 103, 0),
(5, 1, 0),
(6, 2, 0),
(7, 3, 0),
(8, 4, 0),
(9, 5, 0),
(10, 6, 0),
(11, 7, 0),
(12, 8, 0),
(13, 9, 0),
(14, 10, 0),
(15, 11, 0),
(16, 12, 0),
(17, 13, 0),
(18, 14, 0),
(19, 15, 0),
(20, 16, 0),
(21, 17, 0),
(22, 18, 0),
(23, 19, 0),
(24, 20, 0),
(25, 21, 0),
(26, 22, 0),
(27, 23, 0),
(28, 24, 0),
(29, 25, 0),
(30, 26, 0),
(31, 27, 0),
(32, 28, 0),
(33, 29, 0),
(34, 30, 0),
(35, 31, 0),
(36, 32, 0),
(37, 33, 0),
(38, 34, 0),
(39, 35, 0),
(40, 36, 0),
(41, 37, 0),
(42, 38, 0),
(43, 39, 0),
(44, 40, 0),
(45, 51, 0),
(46, 52, 0),
(47, 53, 0),
(48, 54, 0),
(49, 55, 0),
(50, 56, 0),
(51, 57, 0),
(52, 58, 0),
(53, 59, 0),
(54, 60, 0),
(55, 61, 0),
(56, 62, 0),
(57, 63, 0),
(58, 64, 0),
(59, 65, 0),
(60, 66, 0),
(61, 67, 0),
(62, 68, 0),
(63, 69, 0),
(64, 70, 0),
(65, 71, 0),
(66, 72, 0),
(67, 73, 0),
(68, 74, 0),
(69, 75, 0),
(70, 76, 0),
(71, 77, 0),
(72, 78, 0),
(73, 79, 0),
(74, 80, 0),
(75, 81, 0),
(76, 82, 0),
(77, 83, 0),
(78, 84, 0),
(79, 85, 0),
(80, 86, 0),
(81, 87, 0),
(82, 88, 0),
(83, 89, 0),
(84, 90, 0),
(85, 91, 0),
(86, 92, 0),
(87, 93, 0),
(88, 94, 0),
(89, 95, 0),
(90, 96, 0),
(91, 97, 0),
(92, 98, 0),
(93, 99, 0),
(94, 100, 0),
(100, 104, 0),
(101, 105, 0),
(102, 106, 0),
(103, 107, 0),
(104, 108, 0),
(105, 109, 0),
(106, 110, 0),
(107, 111, 0),
(108, 112, 0),
(109, 113, 0),
(110, 114, 0),
(111, 115, 0),
(112, 116, 0),
(113, 117, 0),
(114, 118, 0),
(115, 119, 0),
(116, 120, 0),
(117, 121, 0),
(118, 122, 0),
(119, 123, 0),
(120, 124, 0),
(121, 125, 0),
(122, 126, 0),
(123, 127, 0),
(124, 128, 0),
(125, 129, 0),
(126, 130, 0),
(127, 131, 0),
(128, 132, 0),
(129, 133, 0),
(130, 134, 0),
(131, 135, 0),
(132, 136, 0),
(133, 137, 0),
(134, 138, 0),
(135, 139, 0),
(136, 140, 0),
(137, 141, 0),
(138, 142, 0),
(139, 143, 0),
(140, 144, 0),
(141, 145, 0),
(142, 146, 0),
(143, 147, 0),
(144, 148, 0),
(145, 149, 0),
(146, 150, 0),
(147, 151, 0),
(148, 152, 0),
(149, 153, 0),
(150, 154, 0),
(151, 155, 0),
(152, 156, 0),
(153, 157, 0),
(154, 158, 0),
(155, 159, 0),
(156, 160, 0),
(157, 161, 0),
(158, 162, 0),
(159, 163, 0),
(160, 164, 0),
(161, 165, 0),
(162, 166, 0),
(163, 167, 0),
(164, 168, 0),
(165, 169, 0),
(166, 170, 0),
(167, 171, 0),
(168, 172, 0),
(169, 173, 0),
(170, 174, 0),
(171, 175, 0),
(172, 176, 0),
(173, 177, 0),
(174, 178, 0),
(175, 179, 0),
(176, 180, 0),
(177, 181, 0),
(178, 182, 0),
(179, 183, 0),
(180, 184, 0),
(181, 185, 0),
(182, 186, 0),
(183, 187, 0),
(184, 188, 0),
(185, 189, 0),
(186, 190, 0),
(187, 191, 0),
(188, 192, 0),
(189, 193, 0),
(190, 194, 0),
(191, 195, 0),
(192, 196, 0),
(193, 197, 0),
(194, 198, 0),
(195, 199, 0),
(196, 200, 0),
(197, 201, 0),
(198, 202, 0),
(199, 203, 0),
(200, 204, 0),
(201, 205, 0),
(202, 206, 0),
(203, 207, 0),
(204, 208, 0),
(205, 209, 0),
(206, 210, 0),
(207, 211, 0),
(208, 212, 0),
(209, 213, 0),
(210, 214, 0),
(211, 215, 0),
(212, 216, 0),
(213, 217, 0),
(214, 218, 0),
(215, 219, 0),
(216, 220, 0),
(217, 221, 0),
(218, 222, 0),
(219, 223, 0),
(220, 224, 0),
(221, 225, 0),
(222, 226, 0),
(223, 227, 0),
(224, 228, 0),
(225, 229, 0),
(226, 230, 0),
(227, 231, 0),
(228, 232, 0),
(229, 233, 0),
(230, 234, 0),
(231, 235, 0),
(232, 236, 0),
(233, 237, 0),
(234, 238, 0),
(235, 239, 0),
(236, 240, 0),
(237, 241, 0),
(238, 242, 0),
(239, 243, 0),
(240, 244, 0),
(241, 245, 0),
(242, 246, 0),
(243, 247, 0),
(244, 248, 0),
(245, 249, 0),
(246, 250, 0),
(247, 251, 0),
(248, 252, 0),
(249, 253, 0),
(250, 254, 0),
(251, 255, 0),
(252, 256, 0),
(253, 257, 0),
(254, 258, 0),
(255, 259, 0),
(256, 260, 0),
(257, 261, 0),
(258, 262, 0),
(259, 263, 0),
(260, 264, 0),
(261, 265, 0),
(262, 266, 0),
(263, 267, 0),
(264, 268, 0),
(265, 269, 0),
(266, 270, 0),
(267, 271, 0),
(268, 272, 0),
(269, 273, 0),
(270, 274, 0),
(271, 275, 0),
(272, 276, 0),
(273, 277, 0),
(274, 278, 0),
(275, 279, 0),
(276, 280, 0),
(277, 281, 0),
(278, 282, 0),
(279, 283, 0),
(280, 284, 0),
(281, 285, 0),
(282, 286, 0),
(283, 287, 0),
(284, 288, 0),
(285, 289, 0),
(1553, 500, 0),
(1026, 300, 0),
(1027, 301, 0),
(1028, 302, 0),
(1029, 303, 0),
(1030, 304, 0),
(1031, 305, 0),
(1032, 306, 0),
(1033, 307, 0),
(1034, 308, 0),
(1035, 309, 0),
(1036, 310, 0),
(1037, 311, 0),
(1038, 312, 0),
(1039, 313, 0),
(1040, 314, 0),
(1041, 315, 0),
(1042, 316, 0),
(1043, 317, 0),
(1044, 318, 0),
(1045, 319, 0),
(1046, 320, 0),
(1047, 321, 0),
(1048, 322, 0),
(1049, 323, 0),
(1050, 324, 0),
(1051, 325, 0),
(1052, 326, 0),
(1053, 327, 0),
(1054, 328, 0),
(1055, 329, 0),
(1056, 330, 0),
(1057, 331, 0),
(1058, 332, 0),
(1059, 333, 0),
(1060, 334, 0),
(1061, 335, 0),
(1062, 336, 0),
(1063, 336, 0),
(1064, 337, 0),
(1065, 338, 0),
(1066, 339, 0),
(1067, 340, 0),
(1068, 341, 0),
(1069, 342, 0),
(1070, 343, 0),
(1071, 344, 0),
(1072, 345, 0),
(1073, 346, 0),
(1074, 347, 0),
(1075, 348, 0),
(1076, 349, 0),
(1077, 350, 0),
(1078, 351, 0),
(1079, 352, 0),
(1080, 353, 0),
(1081, 354, 0),
(1082, 355, 0),
(1083, 356, 0),
(1084, 357, 0),
(1085, 358, 0),
(1086, 359, 0),
(1087, 360, 0),
(1088, 361, 0),
(1089, 362, 0),
(1090, 363, 0),
(1091, 364, 0),
(1092, 365, 0),
(1093, 366, 0),
(1094, 367, 0),
(1095, 368, 0),
(1096, 369, 0),
(1097, 370, 0),
(1098, 371, 0),
(1099, 372, 0),
(1100, 373, 0),
(1101, 374, 0),
(1102, 375, 0),
(1103, 376, 0),
(1104, 377, 0),
(1105, 378, 0),
(1106, 379, 0),
(1107, 380, 0),
(1108, 381, 0),
(1109, 382, 0),
(1110, 383, 0),
(1111, 384, 0),
(1112, 385, 0),
(1113, 386, 0),
(1114, 387, 0),
(1115, 388, 0),
(1116, 389, 0),
(1117, 390, 0),
(1118, 391, 0),
(1119, 392, 0),
(1120, 393, 0),
(1121, 394, 0),
(1122, 395, 0),
(1123, 396, 0),
(1124, 397, 0),
(1125, 398, 0),
(1126, 399, 0),
(1127, 400, 0),
(1128, 401, 0),
(1129, 402, 0),
(1130, 403, 0),
(1131, 404, 0),
(1132, 405, 0),
(1133, 406, 0),
(1134, 407, 0),
(1135, 408, 0),
(1136, 409, 0),
(1137, 408, 0),
(1138, 409, 0),
(1139, 410, 0),
(1140, 411, 0),
(1141, 412, 0),
(1142, 413, 0),
(1144, 416, 0),
(1145, 417, 0),
(1146, 418, 0),
(1147, 419, 0),
(1148, 420, 0),
(1149, 421, 0),
(1150, 422, 0),
(1151, 423, 0),
(1152, 424, 0),
(1153, 425, 0),
(1154, 426, 0),
(1155, 427, 0),
(1156, 428, 0),
(1157, 429, 0),
(1158, 430, 0),
(1159, 431, 0),
(1160, 432, 0),
(1161, 433, 0),
(1162, 434, 0),
(1163, 435, 0),
(1164, 436, 0),
(1165, 437, 0),
(1166, 438, 0),
(1167, 439, 0),
(1168, 450, 0),
(1169, 451, 0),
(1170, 452, 0),
(1171, 453, 0),
(1172, 454, 0),
(1173, 545, 0),
(1174, 546, 0),
(1175, 457, 0),
(1176, 458, 0),
(1177, 459, 0),
(1178, 460, 0),
(1179, 461, 0),
(1180, 462, 0),
(1181, 463, 0),
(1182, 464, 0),
(1183, 465, 0),
(1184, 466, 0),
(1185, 467, 0),
(1186, 468, 0),
(1187, 469, 0),
(1188, 470, 0),
(1189, 471, 0),
(1190, 472, 0),
(1191, 473, 0),
(1192, 474, 0),
(1193, 475, 0),
(1194, 476, 0),
(1195, 477, 0),
(1196, 478, 0),
(1382, 300, 0),
(1383, 301, 0),
(1384, 302, 0),
(1385, 303, 0),
(1386, 304, 0),
(1387, 305, 0),
(1388, 306, 0),
(1389, 307, 0),
(1390, 308, 0),
(1391, 309, 0),
(1392, 310, 0),
(1393, 311, 0),
(1394, 312, 0),
(1395, 313, 0),
(1396, 314, 0),
(1397, 315, 0),
(1398, 316, 0),
(1399, 317, 0),
(1400, 318, 0),
(1401, 319, 0),
(1402, 320, 0),
(1403, 321, 0),
(1404, 322, 0),
(1405, 323, 0),
(1406, 324, 0),
(1407, 325, 0),
(1408, 326, 0),
(1409, 327, 0),
(1410, 328, 0),
(1411, 329, 0),
(1412, 330, 0),
(1413, 331, 0),
(1414, 332, 0),
(1415, 333, 0),
(1416, 334, 0),
(1417, 335, 0),
(1418, 336, 0),
(1419, 336, 0),
(1420, 337, 0),
(1421, 338, 0),
(1422, 339, 0),
(1423, 340, 0),
(1424, 341, 0),
(1425, 342, 0),
(1426, 343, 0),
(1427, 344, 0),
(1428, 345, 0),
(1429, 346, 0),
(1430, 347, 0),
(1431, 348, 0),
(1432, 349, 0),
(1433, 350, 0),
(1434, 351, 0),
(1435, 352, 0),
(1436, 353, 0),
(1437, 354, 0),
(1438, 355, 0),
(1439, 356, 0),
(1440, 357, 0),
(1441, 358, 0),
(1442, 359, 0),
(1443, 360, 0),
(1444, 361, 0),
(1445, 362, 0),
(1446, 363, 0),
(1447, 364, 0),
(1448, 365, 0),
(1449, 366, 0),
(1450, 367, 0),
(1451, 368, 0),
(1452, 369, 0),
(1453, 370, 0),
(1454, 371, 0),
(1455, 372, 0),
(1456, 373, 0),
(1457, 374, 0),
(1458, 375, 0),
(1459, 376, 0),
(1460, 377, 0),
(1461, 378, 0),
(1462, 379, 0),
(1463, 380, 0),
(1464, 381, 0),
(1465, 382, 0),
(1466, 383, 0),
(1467, 384, 0),
(1468, 385, 0),
(1469, 386, 0),
(1470, 387, 0),
(1471, 388, 0),
(1472, 389, 0),
(1473, 390, 0),
(1474, 391, 0),
(1475, 392, 0),
(1476, 393, 0),
(1477, 394, 0),
(1478, 395, 0),
(1479, 396, 0),
(1480, 397, 0),
(1481, 398, 0),
(1482, 399, 0),
(1483, 400, 0),
(1484, 401, 0),
(1485, 402, 0),
(1486, 403, 0),
(1487, 404, 0),
(1488, 405, 0),
(1489, 406, 0),
(1490, 407, 0),
(1491, 408, 0),
(1492, 409, 0),
(1493, 408, 0),
(1494, 409, 0),
(1495, 410, 0),
(1496, 411, 0),
(1497, 412, 0),
(1498, 413, 0),
(1499, 4015, 0),
(1500, 416, 0),
(1501, 417, 0),
(1502, 418, 0),
(1503, 419, 0),
(1504, 420, 0),
(1505, 421, 0),
(1506, 422, 0),
(1507, 423, 0),
(1508, 424, 0),
(1509, 425, 0),
(1510, 426, 0),
(1511, 427, 0),
(1512, 428, 0),
(1513, 429, 0),
(1514, 430, 0),
(1515, 431, 0),
(1516, 432, 0),
(1517, 433, 0),
(1518, 434, 0),
(1519, 435, 0),
(1520, 436, 0),
(1521, 437, 0),
(1522, 438, 0),
(1523, 439, 0),
(1524, 450, 0),
(1525, 451, 0),
(1526, 452, 0),
(1527, 453, 0),
(1528, 454, 0),
(1529, 545, 0),
(1530, 546, 0),
(1531, 457, 0),
(1532, 458, 0),
(1533, 459, 0),
(1534, 460, 0),
(1535, 461, 0),
(1536, 462, 0),
(1537, 463, 0),
(1538, 464, 0),
(1539, 465, 0),
(1540, 466, 0),
(1541, 467, 0),
(1542, 468, 0),
(1543, 469, 0),
(1544, 470, 0),
(1545, 471, 0),
(1546, 472, 0),
(1547, 473, 0),
(1548, 474, 0),
(1549, 475, 0),
(1550, 476, 0),
(1551, 477, 0),
(1552, 478, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prefered_time_charge`
--

CREATE TABLE `prefered_time_charge` (
  `id_prefered_time_charge` int(11) NOT NULL,
  `name_prefered_time_charge` time NOT NULL,
  `id_ceb_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prefered_time_charge`
--

INSERT INTO `prefered_time_charge` (`id_prefered_time_charge`, `name_prefered_time_charge`, `id_ceb_price`) VALUES
(1, '04:00:00', 32),
(2, '17:00:00', 32),
(3, '18:00:00', 33),
(4, '21:00:00', 33),
(5, '22:00:00', 34),
(6, '03:00:00', 34);

-- --------------------------------------------------------

--
-- Table structure for table `pv_available_surface`
--

CREATE TABLE `pv_available_surface` (
  `id_pv_available_surface` int(11) NOT NULL,
  `name_pv_available_surface` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pv_available_surface`
--

INSERT INTO `pv_available_surface` (`id_pv_available_surface`, `name_pv_available_surface`) VALUES
(1, 0),
(2, 1),
(3, 2),
(4, 4),
(5, 6),
(6, 8),
(7, 10),
(8, 12),
(9, 14),
(10, 16),
(11, 18),
(12, 20),
(13, 22),
(14, 24),
(15, 26),
(16, 28),
(17, 30),
(18, 40),
(19, 50),
(20, 60),
(21, 70),
(22, 80),
(23, 90),
(24, 100),
(25, 120),
(26, 140),
(27, 160),
(28, 180),
(29, 200),
(30, 220),
(31, 240),
(32, 250);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'car'),
(2, 'car'),
(3, 'moto'),
(4, ''),
(5, ''),
(6, ''),
(7, 'moto'),
(8, 'car');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `name_type`) VALUES
(1, 'motorcycle'),
(2, 'car');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(5, 'guest', 'udm2022', 'guest@udm.mu');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `id_ve` int(4) NOT NULL,
  `make_ve` varchar(255) NOT NULL,
  `model_ve` varchar(255) NOT NULL,
  `power_ve` float NOT NULL,
  `acceleration_ve` float NOT NULL,
  `topSpeed_ve` int(11) NOT NULL,
  `range_ve` int(11) NOT NULL,
  `efficiency_ve` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_marque` int(2) NOT NULL,
  `capacity` float NOT NULL,
  `useable` float NOT NULL,
  `CO2_Emission` float NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`id_ve`, `make_ve`, `model_ve`, `power_ve`, `acceleration_ve`, `topSpeed_ve`, `range_ve`, `efficiency_ve`, `price`, `id_marque`, `capacity`, `useable`, `CO2_Emission`, `img_path`) VALUES
(1, 'Mitsubishi ', 'i-MiEV', 47, 15.9, 130, 85, 171, 23790, 14, 16, 14.5, 0, 'Mitsubishi_i-MiEV-01.jpg'),
(2, 'Peugeot ', 'iOn', 47, 16, 130, 85, 171, 29393, 15, 16, 14.5, 0, 'Peugeot_iOn-01.jpg'),
(3, 'Citroen', 'C-Zero', 47, 15.9, 130, 85, 171, 21800, 16, 16, 14.5, 0, 'Citroen_C-Zero-01.jpg'),
(4, 'Nissan', 'Leaf', 110, 7.9, 144, 225, 176, 29990, 11, 40, 37, 0, 'Nissan_Leaf-01.jpg'),
(5, 'Renault ', 'Zoe Q210', 65, 14, 135, 140, 166, 20990, 17, 25.9, 23.3, 0, 'Renault_Zoe-01.jpg'),
(6, 'Ford ', 'Electric', 107, 11.4, 135, 105, 187, 39990, 7, 23, 19.6, 0, 'Ford_Focus_Electric-01.jpg'),
(7, 'Tesla ', 'Model S 85', 278, 5.6, 225, 402, 201, 87400, 4, 85, 80.8, 0, 'Tesla_Model_S-01.jpg'),
(8, 'BMW ', 'i3 ', 125, 7.2, 150, 115, 163, 34950, 3, 21.6, 18.8, 0, 'BMW_i3-01.jpg'),
(9, 'Nissan', 'e-NV200 Evalia', 80, 14, 123, 105, 210, 37602, 11, 24, 22, 0, 'Nissan_e-NV200_Evalia-01.jpg'),
(10, 'Mercedes', 'B 250e', 132, 7.9, 160, 150, 187, 39151, 2, 31, 28, 0, 'Mercedes_B_250e-01.jpg'),
(11, 'Tesla ', 'Model S 90D', 311, 4.4, 250, 440, 194, 98000, 4, 90, 85.5, 0, 'Tesla_Model_S-01.jpg'),
(12, 'Tesla ', 'Model S 60D', 245, 5.4, 210, 350, 177, 74719, 4, 75, 62, 0, 'Tesla_Model_S-01.jpg'),
(13, 'Hyundai ', 'IONIQ Electric', 88, 9.9, 165, 190, 147, 33300, 5, 30.5, 28, 0, 'Hyundai_IONIQ_Electric-01.jpg'),
(14, 'Tesla Model ', 'X 60D', 245, 6.2, 210, 285, 218, 89100, 4, 75, 62, 0, 'Tesla_Model_X-01.jpg'),
(15, 'Smart ForTwo ', 'Electric Drive', 60, 11.5, 130, 100, 167, 21940, 0, 17.6, 16.7, 0, 'Smart_fortwo-01.jpg'),
(16, 'Renault ', 'Zoe Q90', 65, 13.5, 135, 250, 164, 34984, 17, 44.1, 41, 0, 'Renault_Zoe_2019-01.jpg'),
(17, 'Hyundai', 'Kona Electric 64 kWh', 150, 7.9, 167, 395, 162, 37995, 5, 67.5, 64, 0, 'Hyundai_Kona_Electric-01.jpg'),
(18, 'Mercedes ', 'EQS 450+', 245, 6.2, 210, 640, 168, 106374, 2, 120, 107.8, 0, 'Mercedes_EQS_2021-01.jpg'),
(19, 'Dacia ', 'Spring Electric', 33, 15, 125, 170, 158, 20490, 0, 26.8, 26.8, 0, 'Dacia_Spring_Electric-01.jpg'),
(20, 'Toyota ', 'PROACE Shuttle M', 45, 12.1, 130, 175, 257, 45395, 1, 50, 45, 0, 'Toyota_PROACE_Verso-05.jpg'),
(21, 'Toyota ', 'bZ4X FWD', 150, 8.4, 160, 380, 188, 41950, 1, 71.4, 71.4, 0, 'Toyota_bZ4X-01.jpg'),
(22, 'Toyota ', 'PROACE Verso M', 100, 13.1, 130, 250, 260, 58995, 1, 75, 65, 0, 'Toyota_PROACE_Verso-01.jpg'),
(23, 'Audi ', 'Q4 e-tron 35', 125, 9, 160, 285, 182, 40750, 8, 55, 52, 0, 'Audi_Q4_e-tron_2021-04.jpg'),
(24, 'Audi ', 'Q4 Sportback e-tron 40', 150, 8.5, 160, 425, 180, 45865, 8, 82, 76.6, 0, 'Audi_Q4_e-tron_Sportback_2021-18.jpg'),
(25, 'Peugeot ', 'e-208', 100, 8.1, 150, 285, 158, 29850, 15, 50, 45, 0, 'Peugeot_e-208_GT-01.jpg'),
(26, 'Peugeot ', 'e-Rifter Long', 100, 11.7, 135, 195, 231, 42590, 15, 50, 45, 0, 'Peugeot_e-Rifter-01.jpg'),
(27, 'Peugeot ', 'e-Expert Combi Compact', 100, 12.1, 130, 180, 250, 40790, 15, 50, 45, 0, 'Peugeot_e-Traveller-08.jpg'),
(28, 'Citroen ', 'e-C4', 100, 9.7, 150, 265, 170, 33990, 16, 50, 45, 0, 'Citroen_e-C4-03.jpg'),
(29, 'Citroen', 'e-Jumpy Combi XS ', 100, 12.1, 130, 180, 250, 41780, 16, 50, 45, 0, 'Citroen_e-SpaceTourer-01.jpg'),
(30, 'Nissan ', 'Leaf e+', 160, 7.3, 157, 325, 172, 32945, 11, 62, 56, 0, 'Nissan_Leaf_2018-02.jpg'),
(31, 'Nissan ', 'Ariya ', 178, 7.6, 160, 445, 196, 55000, 11, 91, 87, 0, 'Nissan_Ariya-01.jpg'),
(32, 'BMW ', 'i3s ', 135, 6.9, 160, 230, 165, 43634, 3, 42.2, 37.9, 0, 'BMW_i3_2019-01.jpg'),
(33, 'BMW ', 'i4 eDrive40', 250, 5.7, 190, 470, 172, 58300, 3, 83.9, 80.7, 0, 'BMW_i4_eDrive40-01.jpg'),
(34, 'Renault ', 'Twingo Electric', 60, 12.6, 135, 130, 164, 20690, 17, 23, 21.3, 0, 'Renault_Twingo_ZE_2020-01.jpg'),
(35, 'Renault ', 'Zoe ZE40 R110', 80, 11.4, 135, 255, 161, 29990, 17, 54.7, 41, 0, 'Renault_Zoe_2020-01.jpg'),
(36, 'Renault ', 'Zoe ZE50 R110', 80, 11.4, 135, 315, 165, 31990, 17, 54.7, 52, 0, 'Renault_Zoe_2020-07.jpg'),
(37, 'Hyundai ', 'Kona Electric 39 kWh', 100, 9.9, 155, 250, 157, 33995, 5, 42, 39.2, 0, 'Hyundai_Kona_Electric_2021-01.jpg'),
(38, 'Hyundai ', 'IONIQ 5 Long Range 2WD', 160, 7.4, 185, 380, 184, 45100, 5, 72.6, 70, 0, 'Hyundai_IONIQ5_2021-01.jpg'),
(41, 'Kia', 'e-Niro', 100, 9.8, 155, 235, 167, 35290, 13, 42, 39.2, 0, 'Kia_e-Niro-2020-01.jpg'),
(43, 'Kia', 'e-Soul', 150, 7.9, 167, 370, 173, 37790, 13, 67.5, 64, 0, 'Kia_e-Soul-07.jpg'),
(45, 'Audi', 'Q4 Sportback e-tron 50 quattro', 220, 6.2, 180, 400, 192, 55600, 8, 82, 76.6, 0, 'Audi_Q4_e-tron_Sportback_2021-01.jpg'),
(47, 'Volkswagen', 'e-Up', 220, 6.2, 180, 400, 192, 26895, 9, 36.8, 32.3, 0, 'Volkswagen_e-Up-2019-01.jpg'),
(53, 'Honda', 'e Advance', 113, 8.3, 145, 170, 168, 38000, 4, 35.5, 28.5, 0, 'Honda_e-01.jpg'),
(51, 'Porsche', 'Taycan', 300, 5.4, 230, 410, 173, 85543, 10, 79.2, 71, 0, 'Porsche_Taycan-02.jpg'),
(50, 'Volkswagen', 'ID.3 Pure Performance', 110, 8.9, 160, 275, 164, 33990, 9, 55, 45, 0, 'Volkswagen_ID3-01.jpg'),
(54, 'Honda', 'e Advance', 113, 8.3, 145, 170, 168, 38000, 4, 35.5, 28.5, 0, 'Honda_e-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ve_user`
--

CREATE TABLE `ve_user` (
  `id_ve_user` int(11) NOT NULL,
  `ve_capacity` float NOT NULL,
  `ve_max_range_full_charge` float NOT NULL,
  `ve_monthly_consumption` float NOT NULL,
  `ve_ceb_tariff` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ve_daily_range` float NOT NULL,
  `ve_pv_available_surface` float NOT NULL,
  `ve_location` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ve_prefered_time_charge_start` time NOT NULL,
  `ve_prefered_time_charge_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ve_user`
--

INSERT INTO `ve_user` (`id_ve_user`, `ve_capacity`, `ve_max_range_full_charge`, `ve_monthly_consumption`, `ve_ceb_tariff`, `ve_daily_range`, `ve_pv_available_surface`, `ve_location`, `ve_prefered_time_charge_start`, `ve_prefered_time_charge_end`) VALUES
(30, 5, 5, 5, '5', 5, 5, '5', '00:00:05', '00:00:05'),
(31, 20, 20, 20, '150C', 20, 20, 'North', '00:00:17', '00:00:20'),
(32, 20, 20, 20, '150C', 20, 20, 'North', '17:00:00', '20:00:00'),
(33, 30, 100, 17, '150C', 45, 40, 'North', '18:00:00', '20:00:00'),
(35, 90, 30, 10, '150C', 40, 30, 'North', '17:00:00', '20:00:00'),
(36, 90, 160, 7, '150C', 60, 40, 'South', '20:00:00', '06:00:00'),
(37, 90, 160, 17, '150C', 40, 40, 'Est', '15:00:00', '08:00:00'),
(38, 40, 160, 30, '150C', 40, 20, 'West', '16:00:00', '06:00:00'),
(39, 40, 45, 30, '140', 40, 20, 'South', '18:00:00', '06:00:00'),
(40, 90, 160, 30, '140', 40, 20, 'South', '18:00:00', '06:00:00'),
(41, 120, 165, 30, '140', 45, 18, 'West', '18:00:00', '06:00:00'),
(42, 30, 80, 17, '120', 30, 30, 'South', '17:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visiteur` int(4) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `vehicle_energy` varchar(255) NOT NULL,
  `vehicle_make` varchar(255) NOT NULL,
  `vehicle_power` int(4) NOT NULL,
  `distance` int(11) NOT NULL,
  `co2` float NOT NULL,
  `trajectory_duration` int(4) NOT NULL,
  `consumption` float NOT NULL,
  `fuel_daily_consumption` float NOT NULL,
  `co2_annual_emission` float NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visiteur`
--

INSERT INTO `visiteur` (`id_visiteur`, `vehicle_type`, `vehicle_energy`, `vehicle_make`, `vehicle_power`, `distance`, `co2`, `trajectory_duration`, `consumption`, `fuel_daily_consumption`, `co2_annual_emission`, `date_time`) VALUES
(58, 'car', 'essence', 'Ford', 218, 50, 143.52, 120, 6, 3, 1872.94, '2022-02-21 17:10:55'),
(57, 'car', 'essence', 'Toyota', 40, 80, 71.76, 60, 3, 2.4, 1498.35, '2022-02-21 13:39:29'),
(56, 'car', 'essence', 'Citroen', 60, 90, 71.76, 180, 3, 2.7, 1685.64, '2022-02-20 11:57:38'),
(55, 'car', 'diesel', 'Nissan', 100, 40, 184.8, 120, 7, 2.8, 1929.31, '2022-02-20 11:56:22'),
(54, 'car', 'essence', 'Peugeot', 72, 40, 143.52, 75, 6, 2.4, 1498.35, '2022-02-20 09:50:50'),
(53, 'car', 'diesel', 'Ford', 90, 15, 105.6, 45, 4, 0.6, 413.424, '2022-02-20 09:47:56'),
(52, 'car', 'essence', 'BMW', 210, 60, 239.2, 120, 10, 6, 3745.87, '2022-02-20 09:46:58'),
(51, 'car', 'hybrid', 'Toyota', 80, 95, 71.76, 180, 3, 2.85, 1779.29, '2022-02-20 09:45:35'),
(50, 'car', 'diesel', 'Ford', 200, 30, 184.8, 60, 7, 2.1, 1446.98, '2022-02-20 09:23:42'),
(49, 'car', 'essence', 'Toyota', 105, 80, 191.36, 120, 8, 6.4, 3995.6, '2022-02-20 09:22:18'),
(59, 'car', 'essence', 'Mercedes', 9, 75, 47.84, 210, 2, 1.5, 936.468, '2022-02-23 01:22:33'),
(60, 'car', 'essence', 'Mercedes', 9, 75, 47.84, 210, 2, 1.5, 936.468, '2022-02-23 01:23:37'),
(61, 'car', 'essence', 'Mercedes', 9, 75, 47.84, 210, 2, 1.5, 936.468, '2022-02-23 01:23:37'),
(62, 'car', 'essence', 'Ford', 70, 70, 95.68, 140, 4, 2.8, 1748.07, '2022-02-24 04:13:54'),
(63, 'car', 'essence', 'Honda', 2, 20, 95.68, 45, 4, 0.8, 499.45, '2022-02-24 09:55:35'),
(64, 'car', 'essence', 'Toyota', 102, 15, 167.44, 30, 7, 1.05, 655.528, '2022-02-24 19:35:52'),
(65, 'car', 'essence', 'Toyota', 100, 20, 95.68, 30, 4, 0.8, 499.45, '2022-02-24 23:03:32'),
(66, 'car', 'essence', 'BMW', 100, 60, 167.44, 120, 7, 4.2, 2622.11, '2022-02-28 00:48:11'),
(67, 'car', 'essence', 'Mercedes', 170, 80, 191.36, 120, 8, 6.4, 3995.6, '2022-02-28 01:00:02'),
(68, 'car', 'essence', 'Ford', 121, 65, 119.6, 90, 5, 3.25, 2029.01, '2022-03-10 06:47:18'),
(69, 'car', 'essence', 'Peugeot', 95, 95, 167.44, 210, 7, 6.65, 4151.67, '2022-03-18 06:46:46'),
(70, 'car', 'essence', 'Toyota', 100, 100, 119.6, 140, 5, 5, 3121.56, '2022-03-19 16:09:56'),
(71, 'car', 'essence', 'Toyota', 12, 60, 119.6, 45, 5, 3, 1872.94, '2022-04-04 10:39:11'),
(72, 'car', 'diesel', 'Mitsubishi', 8, 35, 79.2, 60, 3, 1.05, 723.492, '2022-04-04 10:51:23'),
(73, 'car', 'essence', 'BMW', 10, 85, 215.28, 150, 9, 7.65, 4775.99, '2022-04-05 06:24:33'),
(74, 'car', 'essence', 'Hyundai', 10, 70, 167.44, 150, 7, 4.9, 3059.13, '2022-04-05 10:29:53'),
(75, 'car', 'essence', 'Audi', 3, 20, 143.52, 30, 6, 1.2, 749.174, '2022-04-06 07:23:02'),
(76, 'car', 'essence', 'Audi', 272, 40, 191.36, 60, 8, 3.2, 1997.8, '2022-04-06 12:14:59'),
(77, 'car', 'gasoline', 'Audi', 272, 20, 191.36, 30, 8, 1.6, 998.899, '2022-04-06 12:43:31'),
(78, 'car', 'gasoline', 'Audi', 272, 25, 191.36, 30, 8, 2, 1248.62, '2022-04-06 12:46:32'),
(79, 'car', 'gasoline', 'Audi', 272, 25, 191.36, 60, 8, 2, 1248.62, '2022-04-06 12:47:57'),
(80, 'car', 'gasoline', 'Audi', 272, 45, 191.36, 60, 8, 3.6, 2247.52, '2022-04-06 12:51:27'),
(81, 'car', 'gasoline', 'Audi', 272, 80, 143.52, 60, 6, 4.8, 2996.7, '2022-04-06 13:25:23'),
(82, 'car', 'gasoline', 'Audi', 272, 55, 191.36, 130, 8, 4.4, 2746.97, '2022-04-06 14:13:39'),
(83, 'car', 'gasoline', 'Audi', 272, 45, 191.36, 60, 8, 3.6, 2247.52, '2022-04-06 15:49:17'),
(84, 'car', 'gasoline', 'Audi', 130, 20, 191.36, 45, 8, 1.6, 998.899, '2022-04-06 16:15:15'),
(85, 'car', 'gasoline', 'Kia', 16, 50, 95.68, 60, 4, 2, 1248.62, '2022-04-06 16:30:15'),
(86, 'car', 'gasoline', 'Audi', 134, 45, 119.6, 60, 5, 2.25, 1404.7, '2022-04-06 16:39:15'),
(87, 'car', 'gasoline', 'Kia', 60, 75, 119.6, 150, 5, 3.75, 2341.17, '2022-04-06 16:42:48'),
(88, 'car', 'gasoline', 'Honda', 187, 40, 143.52, 60, 6, 2.4, 1498.35, '2022-04-06 17:39:30'),
(89, 'car', 'gasoline', 'Audi', 134, 45, 143.52, 60, 6, 2.7, 1685.64, '2022-04-06 18:08:17'),
(90, 'car', 'gasoline', 'Audi', 141, 25, 167.44, 45, 7, 1.75, 1092.55, '2022-04-06 18:16:41'),
(91, 'car', 'gasoline', 'Audi', 134, 45, 167.44, 60, 7, 3.15, 1966.58, '2022-04-07 02:51:59'),
(92, 'car', 'gasoline', 'Audi', 120, 30, 191.36, 45, 8, 2.4, 1498.35, '2022-04-07 04:25:30'),
(93, 'car', 'gasoline', 'Audi', 134, 45, 167.44, 60, 7, 3.15, 1966.58, '2022-04-07 06:03:32'),
(94, 'car', 'gasoline', 'Audi', 134, 45, 167.44, 60, 7, 3.15, 1966.58, '2022-04-07 07:43:52'),
(95, 'car', 'gasoline', 'Mercedes', 20, 10, 119.6, 30, 5, 0.5, 312.156, '2022-04-10 05:47:23'),
(96, 'car', 'gasoline', 'Audi', 134, 45, 167.44, 60, 7, 3.15, 1966.58, '2022-04-10 10:26:55'),
(97, 'car', 'gasoline', 'Audi', 134, 45, 167.44, 60, 7, 3.15, 1966.58, '2022-04-11 09:21:09'),
(98, 'car', 'gasoline', 'Audi', 133, 40, 167.44, 60, 7, 2.8, 1748.07, '2022-04-22 07:18:02'),
(99, 'car', 'gasoline', 'Audi', 334, 45, 191.36, 60, 8, 3.6, 2247.52, '2022-05-05 08:50:11'),
(100, 'car', 'gasoline', 'Audi', 7, 40, 143.52, 45, 6, 2.4, 1498.35, '2022-06-14 08:20:05'),
(101, 'car', 'diesel', 'Toyota', 30, 40, 211.2, 60, 8, 3.2, 2204.93, '2022-07-21 10:30:23'),
(102, 'car', 'diesel', 'Toyota', 4, 5, 132, 30, 5, 0.25, 172.26, '2022-10-25 17:55:55'),
(103, 'car', 'gasoline', 'BMW', 364, 70, 71.76, 180, 3, 2.1, 1311.06, '2022-10-26 04:50:45'),
(104, 'car', 'gasoline', 'BMW', 53, 55, 239.2, 190, 10, 5.5, 3433.72, '2022-10-27 06:33:28'),
(105, 'car', 'electric', 'Tesla', 11, 50, 0, 190, 9, 4.5, 0, '2022-10-27 12:14:52'),
(106, 'car', 'gasoline', 'BMW', 8, 60, 167.44, 190, 7, 4.2, 2622.11, '2022-11-01 06:16:02'),
(107, 'car', 'gasoline', 'Audi', 7, 60, 167.44, 45, 7, 4.2, 2622.11, '2022-11-01 06:41:33'),
(108, 'car', 'gasoline', 'Porsche ', 7, 55, 95.68, 190, 4, 2.2, 1373.49, '2022-11-05 17:03:48'),
(109, 'car', 'diesel', 'Ford', 108, 50, 132, 120, 5, 2.5, 1722.6, '2022-11-06 04:07:45'),
(110, 'car', 'diesel', 'Mitsubishi', 14, 80, 79.2, 220, 3, 2.4, 1653.7, '2022-11-06 04:54:16'),
(111, 'car', 'diesel', 'Mitsubishi', 14, 80, 79.2, 220, 3, 2.4, 1653.7, '2022-11-06 04:54:16'),
(112, 'car', 'gasoline', 'Hyundai', 15, 75, 191.36, 220, 8, 6, 3745.87, '2022-11-06 05:09:20'),
(113, 'car', 'gasoline', 'Hyundai', 15, 75, 191.36, 220, 8, 6, 3745.87, '2022-11-06 05:09:20'),
(114, 'car', 'electric', 'Tesla', 16, 95, 0, 210, 3, 2.85, 0, '2022-11-06 07:12:38'),
(115, 'car', 'electric', 'Tesla', 16, 95, 0, 210, 3, 2.85, 0, '2022-11-06 07:12:38'),
(116, 'car', 'diesel', 'Ford', 17, 75, 211.2, 150, 8, 6, 4134.24, '2022-11-06 07:38:54'),
(117, 'car', 'diesel', 'Ford', 17, 75, 211.2, 150, 8, 6, 4134.24, '2022-11-06 07:38:54'),
(118, 'car', 'gasoline', 'Citroen', 17, 90, 167.44, 200, 7, 6.3, 3933.17, '2022-11-06 07:43:26'),
(119, 'car', 'gasoline', 'Citroen', 17, 90, 167.44, 200, 7, 6.3, 3933.17, '2022-11-06 07:43:26'),
(120, 'car', 'gasoline', 'Citroen', 17, 90, 167.44, 200, 7, 6.3, 3933.17, '2022-11-06 07:44:05'),
(121, 'car', 'gasoline', 'Citroen', 17, 90, 167.44, 200, 7, 6.3, 3933.17, '2022-11-06 07:44:05'),
(122, 'car', 'gasoline', 'Citroen', 17, 90, 167.44, 200, 7, 6.3, 3933.17, '2022-11-06 07:44:09'),
(123, 'car', 'gasoline', 'Citroen', 17, 90, 167.44, 200, 7, 6.3, 3933.17, '2022-11-06 07:44:09'),
(124, 'car', 'diesel', 'Mitsubishi', 21, 100, 264, 230, 10, 10, 6890.4, '2022-11-06 07:44:24'),
(125, 'car', 'diesel', 'Mitsubishi', 21, 100, 264, 230, 10, 10, 6890.4, '2022-11-06 07:44:24'),
(126, 'car', 'diesel', 'Mitsubishi', 21, 100, 264, 230, 10, 10, 6890.4, '2022-11-06 07:45:28'),
(127, 'car', 'diesel', 'Mitsubishi', 21, 100, 264, 230, 10, 10, 6890.4, '2022-11-06 07:45:28'),
(128, 'car', 'gasoline', 'Mercedes', 18, 85, 191.36, 220, 8, 6.8, 4245.32, '2022-11-06 07:51:28'),
(129, 'car', 'gasoline', 'Mercedes', 18, 85, 191.36, 220, 8, 6.8, 4245.32, '2022-11-06 07:51:28'),
(130, 'car', 'gasoline', 'Honda', 3, 90, 47.84, 210, 2, 1.8, 1123.76, '2022-11-06 07:53:08'),
(131, 'car', 'gasoline', 'Honda', 3, 90, 47.84, 210, 2, 1.8, 1123.76, '2022-11-06 07:53:08'),
(132, 'car', 'gasoline', 'Renault', 9, 90, 119.6, 220, 5, 4.5, 2809.4, '2022-11-06 07:54:34'),
(133, 'car', 'gasoline', 'Renault', 9, 90, 119.6, 220, 5, 4.5, 2809.4, '2022-11-06 07:54:34'),
(134, 'car', 'gasoline', 'BMW', 19, 85, 239.2, 210, 10, 8.5, 5306.65, '2022-11-06 07:55:51'),
(135, 'car', 'gasoline', 'BMW', 19, 85, 239.2, 210, 10, 8.5, 5306.65, '2022-11-06 07:55:51'),
(136, 'car', 'diesel', 'Toyota', 70, 50, 132, 45, 5, 2.5, 1722.6, '2022-11-06 08:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `battery_capacity`
--
ALTER TABLE `battery_capacity`
  ADD PRIMARY KEY (`id_capacity`);

--
-- Indexes for table `battery_charger`
--
ALTER TABLE `battery_charger`
  ADD PRIMARY KEY (`id_charger`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id_budget`);

--
-- Indexes for table `ceb_power`
--
ALTER TABLE `ceb_power`
  ADD PRIMARY KEY (`id_ceb_power`);

--
-- Indexes for table `ceb_price`
--
ALTER TABLE `ceb_price`
  ADD PRIMARY KEY (`id_ceb_price`);

--
-- Indexes for table `ceb_tariff`
--
ALTER TABLE `ceb_tariff`
  ADD PRIMARY KEY (`id_ceb_tariff`);

--
-- Indexes for table `charger`
--
ALTER TABLE `charger`
  ADD PRIMARY KEY (`id_charger`);

--
-- Indexes for table `charger_price`
--
ALTER TABLE `charger_price`
  ADD PRIMARY KEY (`id_charger_price`);

--
-- Indexes for table `consumption`
--
ALTER TABLE `consumption`
  ADD PRIMARY KEY (`id_consumption`);

--
-- Indexes for table `daily_range`
--
ALTER TABLE `daily_range`
  ADD PRIMARY KEY (`id_daily_range`);

--
-- Indexes for table `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`id_distance`);

--
-- Indexes for table `durer`
--
ALTER TABLE `durer`
  ADD PRIMARY KEY (`id_durer`);

--
-- Indexes for table `energy`
--
ALTER TABLE `energy`
  ADD PRIMARY KEY (`id_energy`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`id_make`);

--
-- Indexes for table `max_range_full_charge`
--
ALTER TABLE `max_range_full_charge`
  ADD PRIMARY KEY (`id_max_range_full_charge`);

--
-- Indexes for table `monthly_consumption`
--
ALTER TABLE `monthly_consumption`
  ADD PRIMARY KEY (`id_monthly_consumption`);

--
-- Indexes for table `power`
--
ALTER TABLE `power`
  ADD PRIMARY KEY (`id_power`);

--
-- Indexes for table `prefered_time_charge`
--
ALTER TABLE `prefered_time_charge`
  ADD PRIMARY KEY (`id_prefered_time_charge`);

--
-- Indexes for table `pv_available_surface`
--
ALTER TABLE `pv_available_surface`
  ADD PRIMARY KEY (`id_pv_available_surface`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id_ve`);

--
-- Indexes for table `ve_user`
--
ALTER TABLE `ve_user`
  ADD PRIMARY KEY (`id_ve_user`);

--
-- Indexes for table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visiteur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `battery_capacity`
--
ALTER TABLE `battery_capacity`
  MODIFY `id_capacity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `battery_charger`
--
ALTER TABLE `battery_charger`
  MODIFY `id_charger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id_budget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ceb_power`
--
ALTER TABLE `ceb_power`
  MODIFY `id_ceb_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ceb_price`
--
ALTER TABLE `ceb_price`
  MODIFY `id_ceb_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ceb_tariff`
--
ALTER TABLE `ceb_tariff`
  MODIFY `id_ceb_tariff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `charger`
--
ALTER TABLE `charger`
  MODIFY `id_charger` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `charger_price`
--
ALTER TABLE `charger_price`
  MODIFY `id_charger_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consumption`
--
ALTER TABLE `consumption`
  MODIFY `id_consumption` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `daily_range`
--
ALTER TABLE `daily_range`
  MODIFY `id_daily_range` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `distance`
--
ALTER TABLE `distance`
  MODIFY `id_distance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `durer`
--
ALTER TABLE `durer`
  MODIFY `id_durer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `energy`
--
ALTER TABLE `energy`
  MODIFY `id_energy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `id_make` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `max_range_full_charge`
--
ALTER TABLE `max_range_full_charge`
  MODIFY `id_max_range_full_charge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `monthly_consumption`
--
ALTER TABLE `monthly_consumption`
  MODIFY `id_monthly_consumption` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `power`
--
ALTER TABLE `power`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1554;

--
-- AUTO_INCREMENT for table `prefered_time_charge`
--
ALTER TABLE `prefered_time_charge`
  MODIFY `id_prefered_time_charge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pv_available_surface`
--
ALTER TABLE `pv_available_surface`
  MODIFY `id_pv_available_surface` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `id_ve` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ve_user`
--
ALTER TABLE `ve_user`
  MODIFY `id_ve_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visiteur` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
