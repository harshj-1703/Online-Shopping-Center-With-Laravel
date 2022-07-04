-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2022 at 04:35 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelinsert1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

DROP TABLE IF EXISTS `addtocart`;
CREATE TABLE IF NOT EXISTS `addtocart` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `imgurl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addbyemail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_05_21_142034_create_registration_table', 1),
(14, '2022_05_23_055848_create_shop_table', 1),
(16, '2022_05_27_052936_create_addtocart_table', 2),
(17, '2022_05_30_072121_create_ordermaster_table', 3),
(18, '2022_05_30_081619_create_ordermaster_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

DROP TABLE IF EXISTS `ordermaster`;
CREATE TABLE IF NOT EXISTS `ordermaster` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgurl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyeremail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasedatetime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpaypaymentid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordermaster`
--

INSERT INTO `ordermaster` (`id`, `pname`, `price`, `quantity`, `imgurl`, `buyeremail`, `purchasedatetime`, `address`, `razorpaypaymentid`) VALUES
(39, 'AMZON ALEXA', '10000', '1', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'dp@gmail.com', '31-05-2022 10:58:36am', 'PUNIT NAGAR', 'pay_Jbif0kepdV4nxW'),
(38, 'BOAT AIRPODES', '2000', '2', 'images/kg6ny7URowtMSA7wuxeZwe1nywyghI91kGn6ISlX.jpg', 'dp@gmail.com', '31-05-2022 10:58:36am', 'PUNIT NAGAR', 'pay_Jbif0kepdV4nxW'),
(37, 'MAP', '100', '4', 'images/iDtiUhlwaULZqVax0b7MQfU3iKUiGi31mkevJ0tN.jpg', 'hj@hj.commm', '30-05-2022 04:40:06pm', 'hhhhhhhhhhhhhhhjjjjjjjjjjjjjjjjjjjjj', 'pay_JbPwdhmtZT4g8E'),
(36, 'OPPO A15S', '12000', '2', 'images/sKQNRq3M6YFSVFsW815juZoJOqXXvXKtA29YrQNI.jpg', 'hj@hj.commm', '30-05-2022 04:40:06pm', 'hhhhhhhhhhhhhhhjjjjjjjjjjjjjjjjjjjjj', 'pay_JbPwdhmtZT4g8E'),
(35, 'BOAT AIRPODES', '2000', '3', 'images/kg6ny7URowtMSA7wuxeZwe1nywyghI91kGn6ISlX.jpg', 'harshj0107@gmail.com', '30-05-2022 04:33:06pm', 'GOKULDHAM', 'pay_JbPpFBA0Hzeuu5'),
(33, 'MAP', '100', '1', 'images/iDtiUhlwaULZqVax0b7MQfU3iKUiGi31mkevJ0tN.jpg', 'harshj0107@gmail.com', '30-05-2022 04:33:06pm', 'GOKULDHAM', 'pay_JbPpFBA0Hzeuu5'),
(34, 'AMZON ALEXA', '10000', '5', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'harshj0107@gmail.com', '30-05-2022 04:33:06pm', 'GOKULDHAM', 'pay_JbPpFBA0Hzeuu5'),
(40, 'MAP', '100', '2', 'images/iDtiUhlwaULZqVax0b7MQfU3iKUiGi31mkevJ0tN.jpg', 'dp@gmail.com', '31-05-2022 10:58:36am', 'PUNIT NAGAR', 'pay_Jbif0kepdV4nxW'),
(41, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '31-05-2022 02:23:44pm', 'GOKULDHAM', 'pay_Jbm9iFuwCfwTKU'),
(42, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '31-05-2022 02:30:40pm', 'GOKULDHAM', 'pay_JbmH1jEFJM6ZMz'),
(43, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '31-05-2022 02:31:58pm', 'GOKULDHAM', 'pay_JbmIPuEQrDr11c'),
(44, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '31-05-2022 02:32:47pm', 'GOKULDHAM', 'pay_JbmJGRRmbGaXcC'),
(45, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '31-05-2022 02:41:10pm', 'GOKULDHAM', 'pay_JbmS7odUtDWevN'),
(46, 'AMZON ALEXA', '10000', '1', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'harshj0107@gmail.com', '31-05-2022 02:49:24pm', 'GOKULDHAM', 'pay_JbmapIa6xcWV6E'),
(47, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '2', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '31-05-2022 03:00:09pm', 'GOKULDHAM', 'pay_JbmmAYet6DKzgt'),
(48, 'AMZON ALEXA', '10000', '1', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'harshj0107@gmail.com', '31-05-2022 03:00:09pm', 'GOKULDHAM', 'pay_JbmmAYet6DKzgt'),
(49, 'AMZON ALEXA', '10000', '1', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'harshj0107@gmail.com', '31-05-2022 03:54:47pm', 'GOKULDHAM', 'pay_JbnhsPxavqJ6Jr'),
(50, 'AMZON ALEXA', '10000', '1', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'harshj0107@gmail.com', '31-05-2022 05:43:53pm', 'GOKULDHAM', 'pay_JbpZ8sp1ysWY8T'),
(51, 'BOAT AIRDOPES 121V2 BLUETOOTH', '1400', '4', 'images/Id1zJr7XN9g0w1vrYOIBnXR5Ibyi9IwPw4kuoygm.jpg', 'harshj0107@gmail.com', '31-05-2022 05:43:53pm', 'GOKULDHAM', 'pay_JbpZ8sp1ysWY8T'),
(52, 'BOAT AIRDOPES 121V2 BLUETOOTH', '1400', '10', 'images/Id1zJr7XN9g0w1vrYOIBnXR5Ibyi9IwPw4kuoygm.jpg', 'dp@gmail.com', '31-05-2022 05:46:50pm', 'PUNIT NAGAR', 'pay_JbpcFSTJTFYYH7'),
(53, 'OPPO A15S', '12000', '24', 'images/sKQNRq3M6YFSVFsW815juZoJOqXXvXKtA29YrQNI.jpg', 'bn@gmail.com', '31-05-2022 05:55:17pm', 'KERALA TAMIL NAGAR', 'pay_JbplCWbzJFbIhf'),
(54, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '9', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'bn@gmail.com', '31-05-2022 05:55:17pm', 'KERALA TAMIL NAGAR', 'pay_JbplCWbzJFbIhf'),
(55, 'BOAT AIRDOPES 121V2 BLUETOOTH', '1400', '50', 'images/Id1zJr7XN9g0w1vrYOIBnXR5Ibyi9IwPw4kuoygm.jpg', 'bn@gmail.com', '31-05-2022 05:55:17pm', 'KERALA TAMIL NAGAR', 'pay_JbplCWbzJFbIhf'),
(56, 'MAP', '100', '1', 'images/iDtiUhlwaULZqVax0b7MQfU3iKUiGi31mkevJ0tN.jpg', 'harshj0107@gmail.com', '01-06-2022 10:40:49am', 'GOKULDHAM', 'pay_Jc6tNO2VakiU4X'),
(57, 'BOAT AIRDOPES 121V2 BLUETOOTH', '1400', '1', 'images/Id1zJr7XN9g0w1vrYOIBnXR5Ibyi9IwPw4kuoygm.jpg', 'harshj0107@gmail.com', '01-06-2022 10:40:49am', 'GOKULDHAM', 'pay_Jc6tNO2VakiU4X'),
(58, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '3', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '01-06-2022 10:40:49am', 'GOKULDHAM', 'pay_Jc6tNO2VakiU4X'),
(59, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '01-06-2022 10:45:40am', 'GOKULDHAM', 'pay_Jc6yV2ds0yIJPX'),
(60, 'PHILIPS AUDIO SPA4040B(BLACK)', '6000', '1', 'images/0wcxLroNXP5UmKd2hZ6kZn7xRvOmUPCm9rV1lck8.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(61, 'ACER(43-INCH)4K-HD LED-TV', '27000', '1', 'images/4E4ttHjHdDkMGLY9YH0z7xaoeavFI33AmKXmJHA1.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(62, 'REDMI K20 PRO(8GB,256GB)', '31000', '1', 'images/d67V3LSEZO5tl9imMGftaxqPqVtf9jhQ2MZJSIuA.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(63, 'BOAT AIRDOPES 121V2 BLUETOOTH', '1400', '1', 'images/Id1zJr7XN9g0w1vrYOIBnXR5Ibyi9IwPw4kuoygm.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(64, 'FIRE-BOLTT NINJA 2 SMART WATCH', '1800', '1', 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(65, 'AMZON ALEXA', '10000', '1', 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(66, 'BOAT AIRPODES', '2000', '1', 'images/kg6ny7URowtMSA7wuxeZwe1nywyghI91kGn6ISlX.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(67, 'MAP', '100', '1', 'images/iDtiUhlwaULZqVax0b7MQfU3iKUiGi31mkevJ0tN.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(68, 'OPPO A15S', '12000', '1', 'images/sKQNRq3M6YFSVFsW815juZoJOqXXvXKtA29YrQNI.jpg', 'harshj0107@gmail.com', '01-06-2022 11:39:10am', 'GOKULDHAM', 'pay_Jc7t09pfnJgSJz'),
(69, 'REDMI K20 PRO(8GB,256GB)', '31000', '1', 'images/d67V3LSEZO5tl9imMGftaxqPqVtf9jhQ2MZJSIuA.jpg', 'harshj0107@gmail.com', '01-06-2022 11:50:47am', 'GOKULDHAM', 'pay_Jc85GiCDD0Uz1u'),
(70, 'ACER(43-INCH)4K-HD LED-TV', '27000', '1', 'images/4E4ttHjHdDkMGLY9YH0z7xaoeavFI33AmKXmJHA1.jpg', 'harshj0107@gmail.com', '01-06-2022 11:55:03am', 'GOKULDHAM', 'pay_Jc89oBBygqgZVw'),
(71, 'REDMI K20 PRO(8GB,256GB)', '31000', '1', 'images/d67V3LSEZO5tl9imMGftaxqPqVtf9jhQ2MZJSIuA.jpg', 'harshj0107@gmail.com', '01-06-2022 07:34:27pm', 'GOKULDHAM', 'pay_JcFz2zDwdqQHUF');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `lname`, `password`, `dob`, `gender`, `email`, `phoneno`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HARSH', 'JOLAPARA', '$2y$10$pfaEbU2ywWGmPRDETj9QvOuxZRBYYv6xJqvye.IEkg.k7N1BRdgbG', '2022-05-01', 'M', 'harshj0107@gmail.com', '8128203856', 'GOKULDHAM', 1, '2022-05-27 00:10:48', '2022-05-27 00:10:48'),
(2, 'HARSH', 'JOLAPARA', 'harsh@1703', '2022-05-11', 'M', 'hj123@gmail.com', '8128203856', 'GOKULDHAM', 1, '2022-05-27 00:09:48', NULL),
(3, 'HJ', 'HJ', '$2y$10$7Rg6dkm.oYvVX52UAkopU.1A.c0tbjhQZr5F4G8/PawrtMbPB.2zK', '2022-04-28', 'F', 'hj@hj.commm', '1234567890', 'hhhhhhhhhhhhhhhjjjjjjjjjjjjjjjjjjjjj', 1, '2022-05-30 02:27:34', '2022-05-30 02:27:34'),
(4, 'HARSH', 'JOLAPARA', 'harsh@1703', '2003-07-01', 'M', 'harsh@gmail.com', '8128203856', 'GOKULDHAM', 1, '2022-05-27 00:09:48', NULL),
(5, 'DHANRAJ', 'PARMAR', '$2y$10$ls.cjM493Siv8NU5gHfNN.IWznfJf2q6j2LI.d/C9CYJPoGyS0OYy', '2022-05-11', 'M', 'dp@gmail.com', '2222222222', 'PUNIT NAGAR', 1, '2022-05-30 23:38:32', '2022-05-30 23:38:32'),
(6, 'BELVIN', 'NADAR', '$2y$10$JFXiWZtgUZd0RpEkUqcYn.9wrBGTHMw1WQ8Gw8NFaWeMPm1rCaq7a', '2022-05-30', 'M', 'bn@gmail.com', '3333333333', 'KERALA TAMIL NAGAR', 1, '2022-05-31 06:53:59', '2022-05-31 06:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `imgurl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `pname`, `details`, `price`, `imgurl`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OPPO A15S', 'NICE PHONE', 12000, 'images/sKQNRq3M6YFSVFsW815juZoJOqXXvXKtA29YrQNI.jpg', 1, '2022-05-27 00:19:32', '2022-05-31 23:43:00'),
(2, 'MAP', 'MAP IS VERY NICE AND READABLE', 100, 'images/iDtiUhlwaULZqVax0b7MQfU3iKUiGi31mkevJ0tN.jpg', 1, '2022-05-27 00:20:37', '2022-05-31 23:43:00'),
(3, 'CAT', 'NICE CAT FROM JAPAN', 22000, 'images/glpTLsKSqx4LRjDbF1qk1o1kz7Rms0hnL2nfAeXg.png', 1, '2022-05-27 00:21:12', '2022-05-31 23:43:01'),
(4, 'BOAT AIRPODES', 'NICE AIRPODS', 2000, 'images/kg6ny7URowtMSA7wuxeZwe1nywyghI91kGn6ISlX.jpg', 1, '2022-05-27 00:21:49', '2022-05-31 23:43:03'),
(5, 'AMZON ALEXA', 'AMZON ALEXA ECHO DOT THAT PLAYS SONGS FOR US AND ALSO TALK US WITH VERY FRIENDLY', 10000, 'images/8SAgUHKsghXzoZtXgUERvaEqzyscEWQxeVaAZQFQ.jpg', 1, '2022-05-30 01:00:36', '2022-05-31 23:43:04'),
(7, 'FIRE-BOLTT NINJA 2 SMART WATCH', 'FIRE-BOLTT NINJA 2 SPO2 FULL TOUCH SMARTWATCH WITH 30 WORKOUT MODES, HEART RATE TRACKING, AND 100+ CLOUD WATCH FACES, 7 DAYS OF EXTENSIVE BATTERY, DEEP BLACK, M', 1800, 'images/SaIn9HrCgYMzTSRBBAAk5yCxszZgyoFHGNXPybKD.jpg', 1, '2022-05-31 00:42:41', '2022-05-31 23:43:05'),
(8, 'BOAT AIRDOPES 121V2 BLUETOOTH', 'BOAT AIRDOPES 121V2 BLUETOOTH TRULY WIRELESS IN EAR EARBUDS WITH UPTO 14 HOURS PLAYBACK, LIGHTWEIGHT EARBUDS, 8MM DRIVERS, LED INDICATORS AND MULTIFUNCTION CONTROLS WITH MIC (ACTIVE BLACK)', 1400, 'images/Id1zJr7XN9g0w1vrYOIBnXR5Ibyi9IwPw4kuoygm.jpg', 1, '2022-05-31 06:38:46', '2022-05-31 23:43:06'),
(10, 'REDMI K20 PRO(8GB,256GB)', '48+13+8MP PRIMARY CAMERA WITH 20MP FRONT FACING CAMERA\r\n16.23 CENTIMETERS (6.39-INCH) AMOLED CAPACITIVE TOUCHSCREEN WITH 2340 X 1080 PIXELS RESOLUTION, 403 PPI PIXEL DENSITY\r\nMEMORY, STORAGE & SIM: 8GB RAM | 256GB STORAGE', 31000, 'images/d67V3LSEZO5tl9imMGftaxqPqVtf9jhQ2MZJSIuA.jpg', 1, '2022-06-01 00:16:17', '2022-06-01 00:16:17'),
(11, 'APPLE IPHONE 13 PRO (1TB) - GOLD', '15 CM (6.1-INCH) SUPER RETINA XDR DISPLAY WITH PROMOTION FOR A FASTER, MORE RESPONSIVE FEEL\r\nCINEMATIC MODE ADDS SHALLOW DEPTH OF FIELD AND SHIFTS FOCUS AUTOMATICALLY IN YOUR VIDEOS\r\nPRO CAMERA SYSTEM WITH NEW 12MP TELEPHOTO, WIDE AND ULTRA WIDE CAMERAS;', 171000, 'images/91IpQO1C1UAsMoDZDHnOcV0MdIa59htAkoFzTGFE.jpg', 1, '2022-06-01 00:22:42', '2022-06-01 00:22:42'),
(12, 'SENNHEISER HD HEADPHONES ', 'ENJOY AUDIOPHILE SOUND QUALITY, WHETHER AT HOME OR ON THE MOVE\r\nNEW REFERENCE FOR CLOSED BACK HEADPHONES\r\nCLOSED, CIRCUMAURAL DYNAMIC STEREO, HEADPHONES\r\nNATURAL HEARING EXPERIENCE - REALISTIC SOUND FIELD WITH MINIMAL RESONANCE', 191000, 'images/GRFboLB1SQbVUbuS0OsMwbf1BBv0gV5BvVjQnH9Z.jpg', 1, '2022-06-01 00:23:50', '2022-06-01 00:23:50'),
(13, 'ACER(43-INCH)4K-HD LED-TV', 'RESOLUTION : 4K ULTRA HD (3840X2160) RESOLUTION | REFRESH RATE : 60 HERTZ | 178 DEGREE WIDE VIEWING ANGLE\r\nCONNECTIVITY: 3 HDMI PORTS (HDMI 1 SUPPORTS ARC) TO CONNECT PERSONAL COMPUTER, LAPTOP, SET TOP BOX', 27000, 'images/4E4ttHjHdDkMGLY9YH0z7xaoeavFI33AmKXmJHA1.jpg', 1, '2022-06-01 00:26:12', '2022-06-01 00:26:12'),
(14, 'CANON EOS 6D MARK II 26.2MP ', 'SENSOR: FULL FRAME CMOS SENSOR WITH 26.2 MP (NICE RESOLUTION FOR LARGE PRINTS AND IMAGE CROPPING)\nISO: 100-40000 SENSITIVITY RANGE (CRITICAL FOR OBTAINING GRAIN-FREE PICTURES, ESPECIALLY IN LOW LIGHT)\nIMAGE PROCESSOR: DIGIC 7 WITH 45 AUTOFOCUS POINTS', 181000, 'images/72uzfBLwTE3qAHDHZlAEC6atqIKUx3UG02um3J0t.jpg', 1, '2022-06-01 00:28:51', '2022-06-01 08:36:15'),
(15, 'PHILIPS AUDIO SPA4040B(BLACK)', '5.1 SURROUND SOUND  PLAYBACK\nFM TUNER FOR RADIO ENJOYMENT,1 YEAR WARRANTY.WORKS WITH ANY BLUETOOTH-ENABLED DEVICE\n/94 5.1 CHANNEL 45W MULTIMEDIA SPEAKERS SYSTEM WITH BLUETOOTH, 4X4W SATELLITE SPEAKERS, LED DISPLAY & BASS BOOST TECHNOLOGY ', 6000, 'images/0wcxLroNXP5UmKd2hZ6kZn7xRvOmUPCm9rV1lck8.jpg', 1, '2022-06-01 00:30:11', '2022-06-01 00:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
