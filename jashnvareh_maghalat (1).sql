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
-- Database: `jashnvareh_maghalat`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_id` int NOT NULL,
  `festival_id` int NOT NULL,
  `rate_status` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL DEFAULT 'اجمالی' COMMENT 'نوبت ارزیابی',
  `avg_ejmali_g1` float DEFAULT NULL COMMENT ' میانگین کل ارزیابی های اجمالی گروه اول این اثر ',
  `avg_ejmali_g2` float DEFAULT NULL COMMENT ' میانگین کل ارزیابی های اجمالی گروه دوم این اثر ',
  `avg_tafsili_g1` float DEFAULT NULL COMMENT ' میانگین کل ارزیابی های تفصیلی گروه اول این اثر ',
  `avg_tafsili_g2` float DEFAULT NULL COMMENT ' میانگین کل ارزیابی های تفصیلی گروه اول این اثر ',
  `grade` float DEFAULT NULL COMMENT 'نمره نهایی',
  `chosen_status` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'وضعیت برگزیدگی',
  `chosen_subject` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'نوع برگزیدگی این اثر',
  `adder` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'ثبت کننده',
  `date_added` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'تاریخ ثبت',
  `editor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'ویرایش کننده',
  `edited_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ ویرایش',
  `ejmali1_ratercode_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب اجمالی 1',
  `ejmali1_registrar_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به اجمالی یکم',
  `ejmali1_set_date_g1` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر اجمالی یکم به ارزیاب',
  `ejmali1_g1_done` int NOT NULL DEFAULT '0',
  `ejmali2_ratercode_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب اجمالی 2',
  `ejmali2_registrar_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به اجمالی دوم',
  `ejmali2_set_date_g1` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر اجمالی دوم به ارزیاب',
  `ejmali2_g1_done` int NOT NULL DEFAULT '0',
  `ejmali3_ratercode_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب اجمالی 3',
  `ejmali3_registrar_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به اجمالی سوم',
  `ejmali3_set_date_g1` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر اجمالی سوم به ارزیاب',
  `ejmali3_g1_done` int NOT NULL DEFAULT '0',
  `tafsili1_ratercode_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب تفصیلی 1',
  `tafsili1_registrar_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به تفصیلی اول',
  `tafsili1_set_date_g1` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر تفصیلی یکم به ارزیاب',
  `tafsili2_ratercode_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب تفصیلی 2',
  `tafsili2_registrar_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به تفصیلی دوم',
  `tafsili2_set_date_g1` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر تفصیلی دوم به ارزیاب',
  `tafsili3_ratercode_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب تفصیلی 3',
  `tafsili3_registrar_g1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به تفصیلی سوم',
  `tafsili3_set_date_g1` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر تفصیلی سوم به ارزیاب',
  `ejmali1_ratercode_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب اجمالی 1',
  `ejmali1_registrar_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به اجمالی یکم',
  `ejmali1_set_date_g2` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر اجمالی یکم به ارزیاب',
  `ejmali1_g2_done` int NOT NULL DEFAULT '0',
  `ejmali2_ratercode_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب اجمالی 2',
  `ejmali2_registrar_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به اجمالی دوم',
  `ejmali2_set_date_g2` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر اجمالی دوم به ارزیاب',
  `ejmali2_g2_done` int NOT NULL DEFAULT '0',
  `ejmali3_ratercode_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب اجمالی 3',
  `ejmali3_registrar_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به اجمالی سوم',
  `ejmali3_set_date_g2` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر اجمالی سوم به ارزیاب',
  `ejmali3_g2_done` int NOT NULL DEFAULT '0',
  `tafsili1_ratercode_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب تفصیلی 1',
  `tafsili1_registrar_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به تفصیلی اول',
  `tafsili1_set_date_g2` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر تفصیلی یکم به ارزیاب',
  `tafsili2_ratercode_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب تفصیلی 2',
  `tafsili2_registrar_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به تفصیلی دوم',
  `tafsili2_set_date_g2` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر تفصیلی دوم به ارزیاب',
  `tafsili3_ratercode_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کد ارزیاب تفصیلی 3',
  `tafsili3_registrar_g2` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'کاربر اختصاص دهنده به تفصیلی سوم',
  `tafsili3_set_date_g2` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'تاریخ و زمان اختصاص اثر تفصیلی سوم به ارزیاب',
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_id` (`article_id`),
  KEY `fk_article_mag` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for information of articles';

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_id`, `festival_id`, `rate_status`, `avg_ejmali_g1`, `avg_ejmali_g2`, `avg_tafsili_g1`, `avg_tafsili_g2`, `grade`, `chosen_status`, `chosen_subject`, `adder`, `date_added`, `editor`, `edited_date`, `ejmali1_ratercode_g1`, `ejmali1_registrar_g1`, `ejmali1_set_date_g1`, `ejmali1_g1_done`, `ejmali2_ratercode_g1`, `ejmali2_registrar_g1`, `ejmali2_set_date_g1`, `ejmali2_g1_done`, `ejmali3_ratercode_g1`, `ejmali3_registrar_g1`, `ejmali3_set_date_g1`, `ejmali3_g1_done`, `tafsili1_ratercode_g1`, `tafsili1_registrar_g1`, `tafsili1_set_date_g1`, `tafsili2_ratercode_g1`, `tafsili2_registrar_g1`, `tafsili2_set_date_g1`, `tafsili3_ratercode_g1`, `tafsili3_registrar_g1`, `tafsili3_set_date_g1`, `ejmali1_ratercode_g2`, `ejmali1_registrar_g2`, `ejmali1_set_date_g2`, `ejmali1_g2_done`, `ejmali2_ratercode_g2`, `ejmali2_registrar_g2`, `ejmali2_set_date_g2`, `ejmali2_g2_done`, `ejmali3_ratercode_g2`, `ejmali3_registrar_g2`, `ejmali3_set_date_g2`, `ejmali3_g2_done`, `tafsili1_ratercode_g2`, `tafsili1_registrar_g2`, `tafsili1_set_date_g2`, `tafsili2_ratercode_g2`, `tafsili2_registrar_g2`, `tafsili2_set_date_g2`, `tafsili3_ratercode_g2`, `tafsili3_registrar_g2`, `tafsili3_set_date_g2`) VALUES
(1, 1, 5, 'اجمالی', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '1401/11/17 13:57:16', NULL, NULL, '7', '5', '1401/11/30 13:47:58', 1, '8', '5', '1401/12/15 13:08:43', 0, '8', '5', '1401/12/15 13:08:47', 0, '', '', '', '', '', '', '', '', '', '7', '5', '1401/12/1 10:47:49', 1, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL),
(2, 3, 5, 'تفصیلی', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '1401/11/17 13:57:16', NULL, NULL, '', '', '', 0, '', '', '', 0, '', '', '', 0, '6', '5', '1401/12/15 13:09:17', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL),
(3, 4, 2, 'اجمالی', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '1401/11/17 13:57:16', NULL, NULL, '6', '5', '1401/12/1 12:03:12', 0, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank_list`
--

DROP TABLE IF EXISTS `bank_list`;
CREATE TABLE IF NOT EXISTS `bank_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `bank_list`
--

INSERT INTO `bank_list` (`id`, `name`) VALUES
(1, 'آینده'),
(2, 'اقتصاد نوین'),
(3, 'ایران زمین'),
(4, 'پارسیان'),
(5, 'پاسارگاد'),
(6, 'پست بانک ایران'),
(7, 'تجارت'),
(8, 'توسعه تعاون'),
(9, 'توسعه صادرات ایران'),
(10, 'خاورمیانه'),
(11, 'دی'),
(12, 'رسالت'),
(13, 'رفاه'),
(14, 'سامان'),
(15, 'سپه'),
(16, 'سرمایه'),
(17, 'سینا'),
(18, 'شهر'),
(19, 'صادرات'),
(20, 'صنعت و معدن'),
(21, 'کارآفرین'),
(22, 'کشاورزی'),
(23, 'مسکن'),
(24, 'ملت'),
(25, 'ملی'),
(26, 'مهر ایران');

-- --------------------------------------------------------

--
-- Table structure for table `cooperations`
--

DROP TABLE IF EXISTS `cooperations`;
CREATE TABLE IF NOT EXISTS `cooperations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `family` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `national_code` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `hawzah_file_number` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL COMMENT 'شماره پرونده حوزوی',
  `cooperation_percentage` int NOT NULL,
  `mobile` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `adder` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_cooperations_national_code` (`national_code`),
  KEY `fk_cooperations_article` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for store cooperators informations';

-- --------------------------------------------------------

--
-- Table structure for table `ejmali`
--

DROP TABLE IF EXISTS `ejmali`;
CREATE TABLE IF NOT EXISTS `ejmali` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_code` int NOT NULL,
  `r1` float NOT NULL COMMENT 'اولویت و روزآمدی مسئله یا موضوع',
  `r2` float NOT NULL COMMENT 'ارزش علمی و نو بودن محتوا',
  `r3` float NOT NULL COMMENT 'استفاده مناسب از منابع معتبر',
  `r4` float NOT NULL COMMENT 'اثربخشی و میزان تاثیرگذاری در حل مشکلات علمی و کاربردی',
  `sum` float NOT NULL,
  `level` varchar(15) COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'نوبت اجمالی',
  `rater` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `rate_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ejmali_article` (`article_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for ejmali rates';

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

DROP TABLE IF EXISTS `festival`;
CREATE TABLE IF NOT EXISTS `festival` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `start_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `starter` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `extension_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `extensioner` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `finish_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `finisher` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for administration of festivals';

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`id`, `name`, `start_date`, `starter`, `extension_date`, `extensioner`, `finish_date`, `finisher`, `active`) VALUES
(1, 'اول', '1396/02/01 09:21', '5', '-', '-', '1396/04/01 09:21', '5', 0),
(2, 'دوم', '1397/02/01 09:21', '5', '-', '-', '1397/04/01 09:21', '5', 0),
(3, 'سوم', '1398/02/01 09:21', '5', '-', '-', '1398/04/01 09:21', '5', 0),
(4, 'چهارم', '1399/02/01 09:21', '5', '-', '-', '1399/04/01 09:21', '5', 0),
(5, 'پنجم', '1400/02/01 09:22', '5', '-', '-', '1400/03/30 09:22', '5', 0),
(6, 'ششم', '1401/02/01 09:22', '5', '-', '-', '1401/04/01 09:22', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `operation` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `url` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `dateandtime` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `browser` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  PRIMARY KEY (`id`),
  KEY `fk_logs_users_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Logs\nincludes:\n1- logins\n2- operations\n3- logouts';

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `operation`, `url`, `dateandtime`, `ip_address`, `browser`) VALUES
(1, 5, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/23 20:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(2, 5, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/23 20:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(3, 5, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/26 21:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(4, 5, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/26 21:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(7, 5, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/26 23:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(8, 5, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/27 21:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(10, 5, 'Logout user= 5', 'localhost/Jmaghalat/logout.php', '1401/9/27 22:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(11, 5, 'HeaderLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/27 22:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(12, 5, 'Logout user= 5', 'localhost/Jmaghalat/logout.php', '1401/9/27 22:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(13, 5, 'HeaderLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/27 22:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0'),
(14, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/9/30 08:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0'),
(15, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/1 08:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0'),
(16, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/3 11:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0'),
(17, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/4 13:34', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36'),
(18, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/5 10:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0'),
(19, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/7 09:14', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36'),
(20, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/7 13:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0'),
(21, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/10/8 08:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0'),
(24, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/3 12:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(25, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/4 11:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(26, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/16 08:04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(28, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/16 13:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(29, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/17 08:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(31, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/18 07:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(32, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/20 08:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(33, 5, 'CityAdminLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/20 19:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(36, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/20 20:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(37, 8, 'Logout user= 8', 'localhost/jmaghalat/logout.php', '1401/11/20 21:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(38, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/20 21:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(39, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/20 22:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(40, 5, 'CityAdminLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/20 22:27', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(42, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/21 17:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(43, 5, 'CityAdminLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/21 19:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(44, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/21 22:15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(46, 5, 'CityAdminLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/21 22:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(47, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/22 18:28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(48, 8, 'Logout user= 8', 'localhost/jmaghalat/logout.php', '1401/11/22 18:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(49, 5, 'CityAdminLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/22 18:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(51, 8, 'RaterLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/22 18:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(53, 5, 'CityAdminLoginSuccess', 'localhost/jmaghalat/chk.php', '1401/11/23 21:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(55, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/30 11:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(57, 7, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/11/30 13:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0'),
(60, 7, 'RaterLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/12/1 09:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0'),
(62, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/12/1 09:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0'),
(64, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/12/1 10:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0'),
(66, 5, 'CityAdminLoginSuccess', 'localhost/Jmaghalat/chk.php', '1401/12/15 13:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `link` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `access` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `Is_Parent` tinyint NOT NULL,
  `childs` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `subject`, `link`, `icon`, `access`, `Is_Parent`, `childs`) VALUES
(2, 'صفحه اصلی', 'panel.php', 'fa-home', '1|2|3|4', 0, NULL),
(3, 'مدیریت مجلات', 'mag_manager.php', 'fa-book', '3|4', 0, NULL),
(4, 'مدیریت نسخه های نشریه', 'version_manager.php', 'fa-sitemap', '3|4', 0, NULL),
(5, 'مدیریت مقالات', 'article_manager.php', 'fa-newspaper-o ', '3|4', 0, NULL),
(6, 'اختصاص اثر به ارزیاب', '#', 'fa-send', '3|4', 1, '12|13'),
(7, 'آمار و گزارشات', '#', 'fa-bar-chart', '3|4', 1, NULL),
(8, 'مدیریت کاربران', 'user_manager.php', 'fa-users', '3|4', 0, NULL),
(9, 'مدیریت جشنواره', 'festival_manager.php', 'fa-star-half-o', '3|4', 0, NULL),
(10, 'مدیریت کاتالوگ ها', 'catalogs.php', 'fa-toggle-on', '3|4', 0, NULL),
(11, 'خروج', 'logout.php', 'fa-sign-out', '1|2|3|4', 0, NULL),
(12, 'اجمالی', 'set_ejmali.php', '', '3|4', 2, NULL),
(13, 'تفصیلی', 'set_tafsili.php', '', '3|4', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scientific_group`
--

DROP TABLE IF EXISTS `scientific_group`;
CREATE TABLE IF NOT EXISTS `scientific_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for managing scientific groups';

--
-- Dumping data for table `scientific_group`
--

INSERT INTO `scientific_group` (`id`, `name`) VALUES
(1, 'تفسیر و علوم قرآن'),
(2, 'حدیث، درایه و رجال'),
(3, 'فلسفه'),
(4, 'اخلاق و عرفان'),
(5, 'تاریخ، سیره و تراجم'),
(6, 'فقه و اصول'),
(7, 'کتب مرجع'),
(8, 'ادبیات و هنر'),
(9, 'علوم اجتماعی'),
(10, 'تصحیح و تعلیق'),
(11, 'ترجمه'),
(12, 'کلام'),
(13, 'انقلاب اسلامی ایران'),
(14, 'اقتصاد'),
(15, 'حقوق'),
(16, 'روانشناسی'),
(17, 'علوم تربیتی'),
(18, 'علوم سیاسی'),
(19, 'مدیریت'),
(20, 'سایر');

-- --------------------------------------------------------

--
-- Table structure for table `special_type`
--

DROP TABLE IF EXISTS `special_type`;
CREATE TABLE IF NOT EXISTS `special_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `adder` int NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `editor` int DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for managing Special Types';

--
-- Dumping data for table `special_type`
--

INSERT INTO `special_type` (`id`, `subject`, `active`, `adder`, `added_date`, `editor`, `edited_date`) VALUES
(1, 'test', 0, 5, '1401/11/4 13:05:46', NULL, NULL),
(2, 'salam', 0, 5, '1401/11/4 13:06:06', NULL, NULL),
(3, 'ali', 1, 5, '1401/11/4 13:06:11', NULL, NULL),
(4, 'شسیش', 0, 5, '1401/11/4 13:08:12', NULL, NULL),
(5, 'محور ویژه', 1, 5, '1401/11/17 13:30:17', NULL, NULL),
(6, 'بخش ویژه 1', 0, 5, '1401/12/15 13:12:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tafsili`
--

DROP TABLE IF EXISTS `tafsili`;
CREATE TABLE IF NOT EXISTS `tafsili` (
  `id` int NOT NULL,
  `article_code` int NOT NULL,
  `r1` float NOT NULL COMMENT 'روزآمدی موضوع و ابتنای آن بر نیاز جامعه و نظام',
  `r1_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r2` float NOT NULL COMMENT 'رعایت شاخص های محتوایی و ساختاری مقالات علمی پژوهشی',
  `r2_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r3` float NOT NULL COMMENT 'رعایت روشمندی متناسب با مسئله',
  `r3_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r4` float NOT NULL COMMENT 'میزان نوآوری در تولید نظریه و اهمیت آن در دانش',
  `r4_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r5` float NOT NULL COMMENT 'میزان خلاقیت و نوآوری در تولید روش و ساختار دانشی جدید',
  `r5_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r6` float NOT NULL COMMENT 'نوآوری در نقد نظریه یا دفاع از نظریه و اصلاح و ارتقای آن',
  `r6_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r7` float NOT NULL COMMENT 'جامعیت و غنای علمی و اتقان تحلیل و استدلال',
  `r7_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r8` float NOT NULL COMMENT 'میزان تاثیرگذاری بر حل مشکلات عملی و کاربردی جامعه یا پاسخ به شبهات علمی موجود',
  `r8_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r9-1` float NOT NULL COMMENT 'امتیاز ویژه - الف\nپاسداری و حراست از ارزش های دینی و انقلابی',
  `r9_1_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `r9-2` float NOT NULL COMMENT 'امتیاز ویژه - ب\nاثربخشی فوق العاده، برجستگی و جذابیت ویژه در نگارش',
  `r9_2_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci,
  `sum` float NOT NULL,
  `general_comment` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'اظهار نظر کلی داور',
  `type` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `rater` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `rate_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for tafsili rates';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `family` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `gender` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `national_code` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `bank_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `date_added` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `edited_date` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `shaba` varchar(24) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `bank_id` int DEFAULT NULL,
  `debit_card_id` int NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT '1- rater\r\n2- header\r\n3- admin\r\n4- super-admin',
  `approved` tinyint NOT NULL DEFAULT '1',
  `scientific_group` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `registrar` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users.bank_id to bank_list.id` (`bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci COMMENT='Table for All users.\nincluding:\n1- Raters\n2- Admins\n3- Headers\n4- Viewers';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `family`, `gender`, `national_code`, `phone`, `address`, `bank_name`, `date_added`, `edited_date`, `shaba`, `bank_id`, `debit_card_id`, `type`, `approved`, `scientific_group`, `registrar`, `editor`) VALUES
(4, 'Ali', '234234234', 'mohammad', 'asadi', 'مرد', '78978', '09398888226', 'یسبیسبسیبسس', NULL, '', NULL, '', NULL, 0, '2', 1, NULL, '', NULL),
(5, 'saeed', '$argon2i$v=19$m=65536,t=4,p=1$NU52RExRekEzd2dPM1RwLg$kfO/AgItBI2wqTtyExlEwazmcDjZa6eGuz27JN9X4Qs', 'محمد', 'عاشوری', 'مرد', 'saeed', '23423423', '', '', '1401/9/20 23:05', NULL, '', 0, 0, '4', 1, 'اقتصاد', 'me', NULL),
(6, 'hasan', '$argon2i$v=19$m=65536,t=4,p=1$b3dpUzVyNC5SdXVBWm12bw$jrj18WXEkhpO6AUYsq35AlDQQYLKTbA1+ejlh9Y0qrQ', 'hasan', 'alimardani', 'مرد', 'hasan', '329083423', 'sgsf;kdsjaf;okjdf;', 'آینده', '1401/11/3 12:44', NULL, '3453453534534534534534', 2147483647, 2147483647, '1', 1, 'ادبیات و هنر||تاریخ، سیره و تراجم||ترجمه', '', NULL),
(7, 'test2', '$argon2i$v=19$m=65536,t=4,p=1$VFV1bzE1TzdwcWpSdnR5SQ$cvTqQYRtzK2OiJqx2OLtZ6ea1lAllZf345XRTSw3X/g', 'ali', 'alavi', 'مرد', 'test2', '948023984', '', '', '1401/11/18 13:14:19', NULL, '', 0, 0, '1', 1, 'ادبیات و هنر||انقلاب اسلامی ایران', '', NULL),
(8, 'test3', '$argon2i$v=19$m=65536,t=4,p=1$ZlVna3lBWnRmMENvNkpkQQ$BnI+IhAye+htvm4sKB2THcgyj5YzEa2nOGnrTS5VsuA', 'محمد', 'حمیدی', 'مرد', 'test3', '0392843290', '', '', '1401/11/20 20:47:01', NULL, '', 0, 0, '1', 1, 'اقتصاد', '', NULL),
(9, 'test4', '$argon2i$v=19$m=65536,t=4,p=1$OEJxS3BZeU5CUmM2SUFPaQ$yUijVh9FgH+1PixgST0vEJlxLVip1AhwXm/qx/oGT40', 'ali', 'saeedi', 'مرد', 'test4', '94944954', '', '', '1401/11/22 18:36:08', NULL, '', 0, 0, '2', 1, 'ادبیات و هنر||اقتصاد||انقلاب اسلامی ایران||تاریخ، سیره و تراجم||ترجمه', '', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
