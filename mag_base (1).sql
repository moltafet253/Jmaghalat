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
-- Database: `mag_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `head_of_seminary_institute`
--

DROP TABLE IF EXISTS `head_of_seminary_institute`;
CREATE TABLE IF NOT EXISTS `head_of_seminary_institute` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `family` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `responsibility` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `state` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mobile` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mag_admins`
--

DROP TABLE IF EXISTS `mag_admins`;
CREATE TABLE IF NOT EXISTS `mag_admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `concessionaire` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'صاحب امتیاز',
  `concessionaire_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نوع کاربری صاحب امتیاز',
  `responsible_manager_owner_subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'عنوان مدیر مسئول',
  `responsible_manager_owner_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام مدیر مسئول',
  `responsible_manager_owner_family` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام خانوادگی مدیر مسئول',
  `responsible_manager_owner_degree` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'مدرک مدیر مسئول',
  `responsible_manager_owner_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن ثابت مدیر مسئول',
  `responsible_manager_owner_mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن همراه مدیر مسئول',
  `responsible_manager_owner_address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci COMMENT 'آدرس مدیر مسئول',
  `chief_editor_subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'عنوان سردبیر',
  `chief_editor_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام سردبیر',
  `chief_editor_family` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام خانوادگی سردبیر',
  `chief_editor_degree` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'مدرک علمی سردبیر',
  `chief_editor_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن ثابت سردبیر',
  `chief_editor_mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن همراه سردبیر',
  `chief_editor_address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci COMMENT 'آدرس سردبیر',
  `administration_manager_subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'عنوان مدیر اجرایی',
  `administration_manager_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام مدیر اجرایی',
  `administration_manager_family` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام خانوادگی مدیر اجرایی',
  `administration_manager_degree` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'مدرک علمی مدیر اجرایی',
  `administration_manager_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن ثابت مدیر اجرایی',
  `administration_manager_mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن همراه مدیر اجرایی',
  `administration_manager_address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci COMMENT 'آدرس مدیر اجرایی',
  `mag_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تلفن',
  `mag_fax` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'دورنگار',
  `mag_state` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mag_city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mag_address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `mag_email` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `mag_website` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `add_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `mag_admins`
--

INSERT INTO `mag_admins` (`id`, `concessionaire`, `concessionaire_type`, `responsible_manager_owner_subject`, `responsible_manager_owner_name`, `responsible_manager_owner_family`, `responsible_manager_owner_degree`, `responsible_manager_owner_phone`, `responsible_manager_owner_mobile`, `responsible_manager_owner_address`, `chief_editor_subject`, `chief_editor_name`, `chief_editor_family`, `chief_editor_degree`, `chief_editor_phone`, `chief_editor_mobile`, `chief_editor_address`, `administration_manager_subject`, `administration_manager_name`, `administration_manager_family`, `administration_manager_degree`, `administration_manager_phone`, `administration_manager_mobile`, `administration_manager_address`, `mag_phone`, `mag_fax`, `mag_state`, `mag_city`, `mag_address`, `mag_email`, `mag_website`, `adder`, `add_date`, `editor`, `edited_date`) VALUES
(1, 'موسسه آموزشی و پژوهشی امام خمینی ', 'حقوقی', 'حجت الاسلام و المسلمین جناب آقای', 'احمد حسین', ' شریفی', 'سطح 4 حوزه', '3245443', '3423424', 'قم میدان امام', 'حجت الاسلام و المسلمین جناب آقای', 'احمد حسین', 'شریفی', 'سطح 4 حوزه', '93408573', '98043759384', 'قم میدان امام', 'سرکار خانم', 'حمیده', 'خانی', 'کارشناسی ارشد', '904983009', '20934809483', 'قم میدان مطهری', '02532113474', '02532934483', 'قم', 'قم', 'بلوار امین - بلوار جمهوری اسلامی - موسسه آموزشی و پژوهشی امام خمینی - طبقه چهارم - اداره کل نشریات تخصصی', 'info@iki.ac.ir', 'www.iki.ac.ir', '5', '1401/11/16 10:30:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mag_articles`
--

DROP TABLE IF EXISTS `mag_articles`;
CREATE TABLE IF NOT EXISTS `mag_articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mag_version_id` int NOT NULL,
  `subject` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `body` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `scientific_group_1` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `scientific_group_2` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `number_of_page_in_mag_from` int DEFAULT NULL,
  `number_of_page_in_mag_to` int DEFAULT NULL,
  `language` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `special_type` int DEFAULT NULL,
  `author` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `cooperation_type` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `cooperators` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `selected_for_jm` tinyint DEFAULT '0',
  `festival_id` int DEFAULT NULL,
  `file_url` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci,
  `adder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `mag_articles`
--

INSERT INTO `mag_articles` (`id`, `mag_version_id`, `subject`, `body`, `type`, `scientific_group_1`, `scientific_group_2`, `number_of_page_in_mag_from`, `number_of_page_in_mag_to`, `language`, `special_type`, `author`, `cooperation_type`, `cooperators`, `selected_for_jm`, `festival_id`, `file_url`, `adder`, `added_date`) VALUES
(1, 1, 'اثر اول', 'بیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیببیسبسیبسیب', 'علمی پژوهشی', '4', '7', 12, 32, 'فارسی', 3, 'علیرضا مظاهری|342324', 'فردی', NULL, 1, 5, '1-8-2-16-1396-5/Article1 Mag-Ver 1/فهرست آثار ثبت شده.pdf', '5', '1401/11/17 08:58:57'),
(3, 1, 'روش شناسی شناخت علوم انسانی از منظر فطرت', 'فغتفغتفغ', 'علمی پژوهشی', '4', '7', 8, 67, 'فارسی', 3, 'علیرضا مظاهری|8967678', 'فردی', NULL, 1, 5, '1-8-2-16-1396-5/Article1 Mag-Ver 1/واحد های پژوهشی.pdf', '5', '1401/11/17 09:13:48'),
(4, 1, 'مبانی ارزشی و نقش آن در تولید علم دینی؛ با تکیه بر دیدگاه علامه طباطبایی', 'غعنهغعنهغعن', 'علمی پژوهشی', '3', '8', 78, 99, 'عربی', 3, 'فرشته نورعلیزاده|67867867', 'گروهی', 'علی عابدی|67867|حسین نجفی|6786678', 1, 2, '1-8-2-16-1396-5/Article2 Mag-Ver 1/ثبت آثار  جشنواره علامه حلی.pdf', '5', '1401/11/17 09:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `mag_info`
--

DROP TABLE IF EXISTS `mag_info`;
CREATE TABLE IF NOT EXISTS `mag_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `science_rank` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `scientific_group` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `international_position` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'جایگاه بین المللی',
  `mag_type` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'دانشگاهی / حوزوی',
  `ISSN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `publication_period` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'دوره انتشار',
  `adder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `date_added` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `mag_info`
--

INSERT INTO `mag_info` (`id`, `admin_id`, `name`, `science_rank`, `scientific_group`, `international_position`, `mag_type`, `ISSN`, `publication_period`, `adder`, `date_added`, `editor`, `edited_date`) VALUES
(1, 1, 'عیار پژوهش در علوم انسانی', 'علمی ترویجی', 'علوم اجتماعی', 'ISC/SID', 'حوزوی', '2423-5679', 'دو فصلنامه', '5', '1401/11/16 10:30:20', NULL, NULL),
(2, 1, 'عیار پژوهش در علوم rvHk\r\n', 'علمی ترویجی', 'علوم اجتماعی', 'ISC/SID', 'حوزوی', '2423-5679', 'دو فصلنامه', '5', '1401/11/16 10:30:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mag_versions`
--

DROP TABLE IF EXISTS `mag_versions`;
CREATE TABLE IF NOT EXISTS `mag_versions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mag_info_id` int NOT NULL,
  `mag_admins_id` int NOT NULL,
  `publication_period_year` int NOT NULL,
  `publication_period_number` int NOT NULL,
  `publication_number` int NOT NULL,
  `publication_year` int NOT NULL,
  `number_of_pages` int NOT NULL,
  `number_of_articles` int NOT NULL,
  `folder_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `file_url` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `cover_url` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `article_submitted` tinyint DEFAULT '0',
  `adder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `mag_versions`
--

INSERT INTO `mag_versions` (`id`, `mag_info_id`, `mag_admins_id`, `publication_period_year`, `publication_period_number`, `publication_number`, `publication_year`, `number_of_pages`, `number_of_articles`, `folder_name`, `file_url`, `cover_url`, `article_submitted`, `adder`, `added_date`) VALUES
(1, 1, 1, 8, 2, 16, 1396, 100, 2, '1-8-2-16-1396-5', 'Files/Mag_Files/1-8-2-16-1396-5/گزارش انجام و اتمام قرارداد طراحی و برنامه نویسی سامانه ارزیابی.docx', 'Files/Mag_Files/1-8-2-16-1396-5/گزارش فعالیت های انجام شده.pdf', 0, '5', '1401/11/16 10:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_and_cultural_centers`
--

DROP TABLE IF EXISTS `scientific_and_cultural_centers`;
CREATE TABLE IF NOT EXISTS `scientific_and_cultural_centers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_subject` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'عنوان گروه',
  `state` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `fax` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `manager_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `manager_family` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `manager_mobile` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `epistle` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='Table for managing Scientific and cultural centers';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
