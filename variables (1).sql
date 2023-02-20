-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2023 at 10:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `variables`
--

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

DROP TABLE IF EXISTS `degree`;
CREATE TABLE IF NOT EXISTS `degree` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `added_date` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id`, `subject`, `adder`, `added_date`) VALUES
(1, 'دیپلم', 'ashouri', '1401/9/27 21:51'),
(2, 'فوق دیپلم/کاردانی', 'ashouri', '1401/9/27 21:51'),
(3, 'لیسانس/کارشناسی', 'ashouri', '1401/9/27 21:51'),
(4, 'کارشناسی ارشد', 'ashouri', '1401/9/27 21:51'),
(5, 'دکتری', 'ashouri', '1401/9/27 21:51'),
(6, 'سطح 1 حوزه', 'ashouri', '1401/9/27 21:51'),
(7, 'سطح 2 حوزه', 'ashouri', '1401/9/27 21:51'),
(8, 'سطح 3 حوزه', 'ashouri', '1401/9/27 21:51'),
(9, 'سطح 4 حوزه', 'ashouri', '1401/9/27 21:51');

-- --------------------------------------------------------

--
-- Table structure for table `international_position`
--

DROP TABLE IF EXISTS `international_position`;
CREATE TABLE IF NOT EXISTS `international_position` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `adder` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `international_position`
--

INSERT INTO `international_position` (`id`, `subject`, `adder`, `added_date`) VALUES
(1, 'ISC', 'ashouri', '1401/9/27 21:51'),
(2, 'ISI', 'ashouri', '1401/9/27 21:51'),
(3, 'CIVILICA', 'ashouri', '1401/9/27 21:51'),
(4, 'PUB-MED', 'ashouri', '1401/9/27 21:51'),
(5, 'SCOPUS', 'ashouri', '1401/9/27 21:51'),
(6, 'SID', 'ashouri', '1401/9/27 21:51'),
(7, 'WOS', 'ashouri', '1401/9/27 21:51');

-- --------------------------------------------------------

--
-- Table structure for table `person_subjects`
--

DROP TABLE IF EXISTS `person_subjects`;
CREATE TABLE IF NOT EXISTS `person_subjects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `person_subjects`
--

INSERT INTO `person_subjects` (`id`, `subject`, `adder`, `added_date`) VALUES
(1, 'جناب آقای دکتر', 'ashouri', '1401/9/27 21:50'),
(2, 'حجت الاسلام و المسلمین جناب آقای', 'ashouri', '1401/9/27 21:51'),
(3, 'حجت الاسلام و المسلمین دکتر', 'ashouri', '1401/9/27 21:51'),
(4, 'حضرت آیت الله جناب آقای', 'ashouri', '1401/9/27 21:51'),
(5, 'حضرت آیت الله العظمی جناب آقای', 'ashouri', '1401/9/27 21:51'),
(6, 'جناب آقای', 'ashouri', '1401/9/27 21:51'),
(7, 'سرکار خانم', 'ashouri', '1401/9/27 21:51');

-- --------------------------------------------------------

--
-- Table structure for table `publication_period`
--

DROP TABLE IF EXISTS `publication_period`;
CREATE TABLE IF NOT EXISTS `publication_period` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `publication_period`
--

INSERT INTO `publication_period` (`id`, `subject`, `adder`, `added_date`) VALUES
(1, 'هفته نامه', 'ashouri', '1401/9/27 21:51'),
(2, 'دو هفته نامه', 'ashouri', '1401/9/27 21:51'),
(3, 'ماهنامه', 'ashouri', '1401/9/27 21:51'),
(4, 'فصلنامه', 'ashouri', '1401/9/27 21:51'),
(5, 'دو فصلنامه', 'ashouri', '1401/9/27 21:51'),
(6, 'سالنامه', 'ashouri', '1401/9/27 21:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
