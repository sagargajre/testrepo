-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2019 at 06:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_login`
--

CREATE TABLE `log_login` (
  `log_id` bigint(20) NOT NULL,
  `log_type` tinyint(4) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `log_timestamp` int(11) NOT NULL,
  `log_data` text NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_login`
--

INSERT INTO `log_login` (`log_id`, `log_type`, `user_id`, `ip_address`, `log_timestamp`, `log_data`, `created_time`) VALUES
(1, 1, 140, '::1', 1564731278, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 09:34:38'),
(2, 1, 140, '::1', 1564731368, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 09:36:08'),
(3, 1, 140, '::1', 1564731544, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 09:39:04'),
(4, 1, 140, '::1', 1564733018, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:03:38'),
(5, 1, 140, '::1', 1564733261, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:07:41'),
(6, 1, 140, '::1', 1564733407, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:10:07'),
(7, 1, 140, '::1', 1564733472, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:11:12'),
(8, 1, 140, '::1', 1564733589, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:13:09'),
(9, 1, 140, '::1', 1564733594, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:13:14'),
(10, 1, 140, '::1', 1564733623, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:13:43'),
(11, 1, 140, '::1', 1564734015, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:20:15'),
(12, 1, 140, '::1', 1564734050, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:20:50'),
(13, 1, 140, '::1', 1564734076, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:21:16'),
(14, 1, 140, '::1', 1564734216, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:23:36'),
(15, 1, 140, '::1', 1564734667, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:31:07'),
(16, 1, 140, '::1', 1564734762, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:32:42'),
(17, 1, 140, '::1', 1564734949, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:35:49'),
(18, 1, 140, '::1', 1564735094, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:38:14'),
(19, 1, 140, '::1', 1564735141, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:39:01'),
(20, 1, 140, '::1', 1564735170, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:39:30'),
(21, 1, 140, '::1', 1564735586, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:46:26'),
(22, 1, 140, '::1', 1564735598, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:46:38'),
(23, 1, 140, '::1', 1564735613, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:46:53'),
(24, 1, 140, '::1', 1564735767, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:49:27'),
(25, 1, 140, '::1', 1564736285, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 10:58:05'),
(26, 1, 140, '::1', 1564736853, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:07:33'),
(27, 1, 140, '::1', 1564736871, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:07:51'),
(28, 1, 140, '::1', 1564737388, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:16:28'),
(29, 1, 140, '::1', 1564737762, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:22:42'),
(30, 2, 140, '::1', 1564739807, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:56:47'),
(31, 1, 140, '::1', 1564739911, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:58:31'),
(32, 2, 140, '::1', 1564739999, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 11:59:59'),
(33, 1, 140, '::1', 1564740070, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:01:10'),
(34, 2, 140, '::1', 1564740074, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:01:14'),
(35, 1, 140, '::1', 1564740091, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:01:31'),
(36, 2, 140, '::1', 1564740284, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:04:44'),
(37, 1, 140, '::1', 1564740287, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:04:47'),
(38, 2, 140, '::1', 1564741913, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:31:53'),
(39, 1, 140, '::1', 1564742848, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:47:28'),
(40, 2, 140, '::1', 1564742851, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 12:47:31'),
(41, 1, 141, '::1', 1564746142, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 13:42:22'),
(42, 2, 141, '::1', 1564749382, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 14:36:22'),
(43, 1, 140, '::1', 1564749386, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 14:36:26'),
(44, 2, 140, '::1', 1564749669, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-02 14:41:09'),
(45, 1, 142, '::1', 1564810068, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:27:48'),
(46, 2, 142, '::1', 1564810081, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:28:01'),
(47, 1, 142, '::1', 1564810363, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:32:43'),
(48, 2, 142, '::1', 1564811561, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:52:41'),
(49, 1, 142, '::1', 1564811564, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:52:44'),
(50, 2, 142, '::1', 1564811585, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:53:05'),
(51, 1, 142, '::1', 1564811588, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 07:53:08'),
(52, 1, 142, '::1', 1564814808, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 08:46:48'),
(53, 2, 142, '::1', 1564815876, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 09:04:36'),
(54, 1, 142, '::1', 1564815885, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 09:04:45'),
(55, 2, 142, '::1', 1564815901, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 09:05:01'),
(56, 1, 142, '::1', 1564817966, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-03 09:39:26'),
(57, 1, 142, '::1', 1564985994, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-05 08:19:54'),
(58, 2, 142, '::1', 1564986497, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-05 08:28:17'),
(59, 1, 142, '::1', 1565002356, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-05 12:52:36'),
(60, 1, 142, '::1', 1565003382, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-05 13:09:42'),
(61, 1, 142, '::1', 1565007914, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-05 14:25:14'),
(62, 1, 142, '::1', 1565065436, '{\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/76.0.3809.87 Safari\\/537.36\",\"REMOTE_ADDR\":\"::1\"}', '2019-08-06 06:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `site_id` bigint(20) NOT NULL,
  `name_applicant_occupant` varchar(100) NOT NULL,
  `owner_type` int(1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `aadhar_card` int(12) NOT NULL,
  `dob` date NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `land_type` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `postal_address` varchar(100) NOT NULL,
  `whether_plan_approved` varchar(100) NOT NULL,
  `occupancy_obtained` varchar(100) NOT NULL,
  `land_owner` varchar(50) NOT NULL,
  `land_situated_details_of_land` varchar(100) NOT NULL,
  `area_details_of_land` varchar(100) NOT NULL,
  `road_details_of _land` varchar(100) NOT NULL,
  `created_by_sd` bigint(20) NOT NULL,
  `created_time_sd` datetime NOT NULL,
  `updated_by_sd` bigint(20) NOT NULL,
  `updated_time_sd` datetime NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `registration_category` tinyint(1) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_lock` tinyint(1) NOT NULL,
  `temp_access_token` varchar(100) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `profile_picture` text NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_time` datetime NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `updated_time` datetime NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `mobile_number`, `registration_category`, `email_id`, `address`, `is_active`, `is_lock`, `temp_access_token`, `user_type`, `profile_picture`, `created_by`, `created_time`, `updated_by`, `updated_time`, `is_delete`) VALUES
(1, 'admin@syp', '1327e811606505f48ce612a22b2979e6', 'Admin', '', 'User', '7046030691', 0, 'admin@sss.com', 'NIC-Daman', 1, 0, '', 1, '1_National_Informatics_Centre_Logo.svg.png', 0, '2018-01-08 12:59:44', 0, '2018-07-30 13:17:14', 0),
(2, 'sandipsingh', '60614a07bff76eac4b537bbc3530bbda', 'Sandip', '', 'Singh', '', 0, '', '', 1, 0, '', 3, '', 0, '2018-04-13 15:31:01', 0, '0000-00-00 00:00:00', 0),
(3, 'jbchauhan', '8068c3f627eb8c68a8bbe4f4bbc4ea79', 'Jaina', '', 'Chauhan', '', 0, '', '', 1, 0, '', 4, '', 0, '2018-04-13 15:31:01', 0, '0000-00-00 00:00:00', 0),
(9, 'akshaypatra', '884fd59418c5bea14432d7021a356ebe', 'Akshay', '', 'Patra', '9624962496', 1, 'akshaypatra@gmail.com', '', 1, 0, '', 2, '', 0, '2018-04-12 16:00:35', 9, '2018-04-16 08:33:41', 0),
(10, 'charmiparekh', '09f22f4738596c752cc233059a53310c', 'Charmi', '', 'Parekh', '', 0, '', '', 1, 0, '', 3, '', 0, '2018-04-13 15:31:01', 0, '0000-00-00 00:00:00', 0),
(15, 'ramanpolymers', '967d1169f0f4bc3acc134d611d107c6a', 'Hitesh', '', 'Desai', '8511128489', 2, 'ramanpolymers@gmail.com', 'Survey No. 57/2(2) & 57/2(3) village dunetha , bheslor industrial estate , Daman', 1, 0, '', 0, '', 0, '2018-05-25 16:43:46', 0, '0000-00-00 00:00:00', 0),
(16, 'kmdavda', 'b1b4a3ddf922907b24e7b3909a0871e0', 'Manish', 'Subhashbhai', 'Mistry', '9723602800', 2, 'kailesh.davda@fancyfittings.com', 'Plot No 55/2A, Behind Daman Fire Forse Station, Ringanvada, Daman', 1, 0, '', 0, '16_avatar5.png', 0, '2018-05-25 16:45:15', 0, '2019-06-24 07:12:42', 0),
(17, 'alpha', 'f7465d7bd58a586ff706d94112dd5908', 'Bhupendra', '', 'Damania', '7624001104', 2, 'bhupendra@alpha.co.in', 'Plot No.  374, Shed A/2, Alpha Industtrial Park, Atiyawad, Dabhel, Daman - 396210', 1, 0, '3Pb5jzf0nG149PCSlDs8', 0, '', 0, '2018-05-25 16:58:58', 0, '0000-00-00 00:00:00', 0),
(18, 'eidb2018', '7ff6328c8d458d4ffc7be9a34cc18c5a', 'Chetan', '', 'Patel', '9712795265', 2, 'hrd@eidb.in', 'Village Bimpore, Daman', 1, 0, '', 0, '', 0, '2018-05-25 17:01:56', 0, '0000-00-00 00:00:00', 0),
(19, 'arorapackers', '985909aa103e57ef38d9586918d3b34d', 'Ramsagar', '', 'Gupata', '9377001174', 2, 'sangeetapolyproduct@gmail.com', '653/1 Plot No. 13 Somanath Co. opp Industrial Society Lit.Somanath Road, Daman', 1, 0, '', 0, '', 0, '2018-05-25 17:14:42', 0, '0000-00-00 00:00:00', 0),
(20, 'amishadaman', '6a58a7d2495bfa9d301ed56ab70c365e', 'Satish', 'R', 'Anchan', '9327553874', 2, 'amishadaman@amishavinyls.com', '361/6, 7, 11, 362/11,  Shri Ganesh Industrial Estate, Kachigam, Daman 396210', 1, 0, '', 0, '20_IMAG0506.jpg', 0, '2018-05-25 17:15:37', 0, '2018-05-26 17:41:56', 0),
(21, 'surajpandey', '1cb1c29799b8fe9f8b9a9e7e2dde49a8', 'Nitin', 'Bhagwandas', 'Parmar', '8140367687', 1, 'suraj.pandey350@gmail.com', 'C-1/5, Row House, Dunes Residency, Dunetha, Nani Daman 396210', 1, 0, 'JgZCX3P6oyLaCb4UrBY8', 0, '', 0, '2018-05-25 17:18:58', 0, '0000-00-00 00:00:00', 0),
(22, 'hapatel', 'f12a85e25da42cf35d8777bb460495f4', 'Hitendra', 'A', 'Patel', '9825468692', 1, 'hapatel_daman@rediff.com', '14/145, D2 airport road, near pukhraj hotel ,daman', 1, 0, '', 0, '', 0, '2018-05-25 17:23:01', 0, '0000-00-00 00:00:00', 0),
(23, 'indchemie2', 'baf21dea52f25e399317612a1b5fadc3', 'Jayna', 'K', 'Desai', '9909994066', 2, 'jeyna@indchemie.in', 'Plot No. 7 OIDC , Mahatma Gandhi Udhyog  Nagar , Amalia, Dabhel, Daman', 1, 0, 'CJv8hUIUzrD2UcFlQSOE', 0, '', 0, '2018-05-25 17:23:09', 0, '0000-00-00 00:00:00', 0),
(24, 'NATVAR', '8b79f0494805c54b323e1705ca858d6c', 'Ronak', 'Jayantibhai', 'Hirpara', '9978155099', 1, 'ronakhirpara17@gmail.com', 'A-403, City Center, Near Resham Bhavan, Lal Darwaja, Surat-395004', 1, 0, '', 0, '', 0, '2018-05-25 17:27:36', 0, '0000-00-00 00:00:00', 0),
(25, 'nakoda2plast', '091435a7d3247c77704c53d880261e10', 'Kirti', 'K', 'Jain', '9377004171', 2, 'nakoda2plast@rediffmail.com', 'Plot no. 22/C, 24/F, 24 & 24/A, Daman Industrial Estate, Somnath road, Dabhel, Daman - 396210', 1, 0, '', 0, '25_04.jpg', 0, '2018-05-25 17:29:57', 0, '2018-07-23 15:01:05', 0),
(26, 'damanpolythread', 'd544f5929a0c367d3b303977da8f6353', 'Durga', '', 'prasad', '8347150168', 2, 'admindaman@damanpolythread.com', 'survey no 732/736, 733/1-5 and 731/2-4, near Vtrans India Ltd, riganwada, Dabhel, Daman', 1, 0, 'QPPZ96Xh67yNOwmDPnau', 0, '', 0, '2018-05-25 17:36:13', 0, '0000-00-00 00:00:00', 0),
(27, 'narendrasharma', '1c95ee55974289c92faab590b4fbd3a3', 'Narendra', '', 'Sharma', '9724982367', 2, 'narendra1976sharma@gmail.com', 'Plot No. 659/B Kevdi  Road , Somanath Indistrial estate  ,Daman', 1, 0, '', 0, '', 0, '2018-05-25 17:40:27', 0, '0000-00-00 00:00:00', 0),
(28, 'pregna international ltd', '956f3785088dec635fb05492c0181b37', 'sheetal', 'amit', 'upadhyay', '9426778817', 2, 'store.eloira@pregna.com', 'plot no 342/3,plotno 29, Bharat Industrial Estate, Bhimpore,Daman', 1, 0, '', 0, '28_Tulips.jpg', 0, '2018-05-25 17:42:19', 0, '2018-06-12 11:31:55', 0),
(29, 'ratan123', '21b444aba51dbdb71605cbda7b9f7516', 'RATAN', 'POLY', 'PLAST', '9375099227', 2, 'HR.Daman@ratanplastics.com', 'Plot No. 34/A, OIDC, Daman Industrial Estate, Somnath Road, Dabhel, Nani Daman. 396210', 1, 0, 'nPIjb8fMEXNQWqc9lAkj', 0, '29_Ratan_Logo.jpg', 0, '2018-05-25 17:53:06', 0, '2018-05-25 18:13:27', 0),
(30, 'dipalbhandari', '3370f4047dd3faf4fae9b85bcdd27640', 'Dipal', '', 'Bhandari', '8866619747', 1, 'dipal.daman@gmail.com', 'House No. 14,45/A-1/G-9,Dilip Nagar,Nani Daman-396210', 1, 0, '', 0, '30_DF45B95C-AF65-45FD-B156-E575B8D0E89D.png', 0, '2018-05-25 18:00:09', 0, '2018-06-07 11:25:17', 0),
(31, 'sangeetapolypack', 'e2d4934985822057d59de9374c65e797', 'ASHOK', '', 'PATEL', '8511132206', 2, 'works@sangeetapolypack.com', 'sr no 597/2(1) opp somnath temple Dabhel, B/h Siddhi Vinayak Ind Daman', 1, 0, '', 0, '', 0, '2018-05-25 19:58:03', 0, '0000-00-00 00:00:00', 0),
(32, 'bhaktiplastllp', '9e971eed47dd7b61f9a626e16a706140', 'Bankit', '', 'Patel', '9904368109', 2, 'bhaktiplastllp@gmail.com', 'D-6, OIDC, Udhyog Nagar, Ringanwada, Daman', 1, 0, 'OfrLya0s1O3RbX6APd0T', 0, '32_Untitled.jpg', 0, '2018-05-28 11:07:33', 0, '2018-05-30 17:53:51', 0),
(33, 'arunppil', 'db351788f5bf0a5b1e04b137ba14d1cf', 'Arun', '', 'Gautam', '7043403999', 2, 'hr@packprintind.com', 'Plot No.c1,2,3 & 12, OIDC , Industrial Estate, Ringanwada, Daman', 1, 0, '', 0, '33_logo.png', 0, '2018-05-28 11:29:17', 0, '2018-06-24 09:42:21', 0),
(34, 'maverickelectricals', 'b3f66678a5d8940ee6d7a49fadae9eae', 'Sanjay', 'Hirubhai', 'Patel', '8882190989', 1, 'skp1189@gmail.com', '13-174, Khatkiwad, Dhakliniwadi, Nani Daman-396210', 1, 0, '', 0, '', 0, '2018-05-28 11:43:04', 0, '0000-00-00 00:00:00', 0),
(35, 'infinityelectricals', 'a2c7740f80669ec49aeedeb990db9188', 'Dhruvil', 'Yogeshbhai', 'Bhandari', '8000009530', 1, 'infinity.electricals111@gmail.com', '10/108,Ratandaya  Building, Luhar Faliya, Nani Daman', 1, 0, '', 0, '', 0, '2018-05-28 11:53:11', 0, '0000-00-00 00:00:00', 0),
(36, 'dishankelectricals', 'c55add364e1d6297b91fe68329a1db19', 'Bhoomi', 'Dipal', 'Bhandari', '8866619747', 1, 'dishankelectricals2016@gmail.com', 'Shop No.66, Center Point , Dabhel, Nani Daman', 1, 0, '', 0, '', 0, '2018-05-28 12:00:29', 0, '0000-00-00 00:00:00', 0),
(37, 'vicky', '644d3e127451162d6cbdcfb7bb4cd1e2', 'test', '', 'patel', '9724174371', 0, 'bkp4444@gmail.com', 'Daman', 1, 0, '', 0, '', 0, '2018-05-28 14:21:09', 0, '0000-00-00 00:00:00', 1),
(38, 'hitendra', '7c47381378f274df95087984a2447457', 'Hitendra', 'a', 'patel', '9825468692', 1, 'hapatel_daman@rediffmail.com', '14-145/D/2,NEAR PUKHRAJ HOTEL,AIRPORT ROAD NANI DAMAN 396210.', 1, 0, '', 0, '', 0, '2018-05-28 16:44:52', 0, '0000-00-00 00:00:00', 0),
(39, 'shriramhandle', '1f5bc0819161853ed93009511396c72b', 'Ashok', 'Navnital', 'Modi', '9377213472', 2, 'shriramdaman@gmail.com', 'Plot No.D-9, 10,11 & 12, OIDC , Ringanwada, Daman', 1, 0, '', 0, '39_Untitled.png', 0, '2018-05-29 16:19:49', 0, '2018-06-06 15:33:54', 0),
(40, 'nitin1', '58528607bb6b1644d74be279021cb5b9', 'Teest', 'M', 'name', '9824581819', 0, 'nitin.diu@gmail.com', 'addres', 0, 0, '3v1zDMjes3lxJsThaCOg', 0, '', 0, '2018-05-30 13:08:07', 0, '0000-00-00 00:00:00', 0),
(41, 'henal1', '215780a806064ab354cba855d4bc93aa', 'Test', 'm', 'name', '9824567222', 1, 'henalbhandari11@gmail.com', 'address', 1, 0, '', 0, '', 0, '2018-05-30 13:11:25', 0, '0000-00-00 00:00:00', 1),
(42, 'softech', 'e56c4d57e87e5e0485e629175b4f6dc3', 'Mithun', '', 'Patel', '9998670790', 2, 'mpatel@softechfarma.com', 'Plot no.708/6, Behind Somnath Temple, Village Dabhel, Daman', 1, 0, '', 0, '', 0, '2018-05-30 15:16:02', 0, '0000-00-00 00:00:00', 0),
(43, 'eaglestar', '93026da166ac38a32ec0d8c4627eef2d', 'Santosh', '', 'Tiwari', '9998684555', 2, 'eagledaman@gmail.com', '730/5 & 6, Near V Trance, Ringanwada Indl. Complex, Ringanwada, Daman', 1, 0, '', 0, '', 0, '2018-05-31 10:58:08', 0, '0000-00-00 00:00:00', 0),
(45, 'kapilsharma', 'd61d91528c18bdc508a30d7274dedd6c', 'Tarvinder', '', 'Singh', '9376511777', 2, 'kapil.sharma@statusquo.in', 'Tirupati Balagi tower , near Rathod Moter, Chala, Vapi', 1, 0, 'XYHegfWb1BNoOkeMIJMz', 0, '', 0, '2018-06-05 11:21:31', 0, '0000-00-00 00:00:00', 0),
(46, 'novaflexipack', '36a6bdc045ee72f67f7d77660b7329b2', 'Paresh', 'Virendra', 'Kothari', '9821050066', 2, 'novaflexipack@gmail.com', 'Seksaria Chambers, 3rd Floor,\r\n139, Nagindas Master Road,\r\nFort,\r\nMumbai - 400023\r\ntel Nos: 022-22673455 / 22673456', 1, 0, 'I0vNCBMKUxQg8hqUParn', 0, '', 0, '2018-06-05 12:10:00', 0, '0000-00-00 00:00:00', 0),
(47, 'aanujinfraproject', '6900a9f7d24ba4b6a2b8325e0a6903ca', 'Narendra', 'P', 'Parmar', '8469799110', 1, 'yashwantdubey84@gmail.com', 'Macchiwad, Moti Daman', 1, 0, '', 0, '', 0, '2018-06-05 12:40:12', 0, '0000-00-00 00:00:00', 0),
(48, 'sojitra92', '37e5350b2e2d5a3bcc6c5d6d86ddea20', 'RAMESHBHAI', 'KARSHANBHAI', 'SOJITRA', '9904638929', 1, 'bhautik_sojitra@yahoo.co.in', 'GIDC, vapi', 1, 0, '', 0, '', 0, '2018-06-06 10:54:27', 0, '0000-00-00 00:00:00', 0),
(49, 'kanapithiya', 'ccba06f7897a39d1e2e1058f52aaa308', 'Kana', '', 'Pithiya', '9723651777', 1, 'dharmikcons777@gmail.com', 'Prishram appt. , room-no. 203, Bhagyoday society, vapi daman road, chala vapi', 1, 0, '', 0, '', 0, '2018-06-06 11:06:58', 0, '0000-00-00 00:00:00', 0),
(50, 'akconstruction', 'f20c9747e12d4780586fdd8831ed1eac', 'Ambrish', '', 'Intwala', '9978140098', 1, 'akconst2000@yahoo.com', 'A.k Empire, Airport Road, Nani Daman, Daman', 1, 0, 'WAYuI5k39LGQIMNwwLb2', 0, '', 0, '2018-06-06 11:08:14', 0, '0000-00-00 00:00:00', 0),
(51, 'amitshah', 'f039eb446cc0bd7c5ad12b7a0e2a1dae', 'Amit', 'N', 'Shah', '9586733412', 1, 'kelvin.patel22@gmail.com', '301, Daman hieght near SBI', 1, 0, '', 0, '', 0, '2018-06-06 11:22:59', 0, '0000-00-00 00:00:00', 0),
(52, 'MGGP', 'c4cc5b088088e8bfb77d27fa825edd04', 'Satyam', '', 'Patel', '8141714565', 1, 'satyavanpatel1234@gmail.com', 'Magarwada,Moti Daman, Daman', 1, 0, '', 0, '', 0, '2018-06-06 11:52:01', 0, '0000-00-00 00:00:00', 0),
(53, 'sejalpatel', 'ffa06449692b7d6b0177751ec2843980', 'Sejal', '', 'Patel', '8511637670', 1, 'sejalpatel846@gmail.com', 'Varkund Gram panchayat, nani daman', 1, 0, '', 0, '', 0, '2018-06-06 12:38:59', 0, '0000-00-00 00:00:00', 0),
(54, 'abhisheksingh', 'c024d7dbe6487f7ba0a35eb39ce8c49b', 'Ajay', '', 'Thakur', '7285852007', 1, 'ajaythakurconstruction@yahoo.com', 'Nutan Nagar, Paraji  Park, Bunglow No.1, Vapi', 1, 0, 'dkBXl6tpMM7owPlvsOA4', 0, '', 0, '2018-06-06 12:40:34', 0, '0000-00-00 00:00:00', 0),
(55, 'riteshpatel', '8fcfca504bd9b5c30d5b67cfd864481e', 'Ritesh', '', 'Patel', '9913040813', 1, 'riteshp718@gmail.com', 'Pariyari patel falia Moti Daman', 1, 0, '', 0, '', 0, '2018-06-06 12:52:17', 0, '0000-00-00 00:00:00', 0),
(56, 'OIDC', '52bd1280c4a049d2bd49a694980b81c8', 'Lalji', '', 'Baria', '9904061837', 1, 'oidcdmn@gmail.com', 'Plot No. 35 ,Somnath, Daman', 1, 0, 'y0QUkJmzzUaQ4IMWMLqJ', 0, '', 0, '2018-06-06 12:59:39', 0, '0000-00-00 00:00:00', 0),
(57, 'yagneshpatel', '4bd8e22706c4390dc313efb18cb204ed', 'Yagnesh', '', 'Patel', '9537332096', 1, 'yagneshp111@gmail.com', 'Patlara Chheda Falia, Moti Daman', 1, 0, '', 0, '', 0, '2018-06-06 13:03:10', 0, '0000-00-00 00:00:00', 0),
(58, 'dunethapanchayat', '0c6e88b160fda887c530d08d3021a0d6', 'Rahul', '', 'Patel', '9904000037', 1, 'patelrahul003729@gmail.com', 'Dunetha Gram Panchayat', 1, 0, '', 0, '', 0, '2018-06-06 13:10:55', 0, '0000-00-00 00:00:00', 0),
(59, 'bhartipatel', '82adfd54f804157bb43251ab90fc0635', 'Bharti', '', 'Patel', '9925155876', 1, 'bhartipatel1611@gmail.com', 'Bhimpore Group Gram Panchayat', 1, 0, '', 0, '59_15380712_624639987708512_8471179440599488450_n.jpg', 0, '2018-06-07 11:17:07', 0, '2018-06-14 15:48:49', 0),
(60, 'rambilash', 'fe903c627dd40f55a6a5efbcd0a51f21', 'RamBilash', '', 'Chauhan', '9824330573', 1, 'test@test.com', 'The Address(Air port Road, Near Coast Guard)', 1, 0, '', 0, '', 0, '2018-06-07 11:32:20', 0, '0000-00-00 00:00:00', 0),
(61, 'vprpldaman', '94f6d63901bdff002b1879313a0fad30', 'NIlesh', '', 'Kalal', '8875011168', 1, 'vprpldaman@gmail.com', '504, Ridhdhi Sidhdhi, College Road, Dunetha', 1, 0, '', 0, '', 0, '2018-06-07 11:34:56', 0, '0000-00-00 00:00:00', 0),
(62, 'rcc2016daman', '2673b1522062e4b59592e3ad9c662dd6', 'Anil', 'Amrutbhai', 'Patel', '8140787437', 1, 'rcc2016daman@gmail.com', 'Magarwada, Singa Falia Patlara, Moti Daman', 1, 0, '', 0, '', 0, '2018-06-07 12:15:07', 0, '0000-00-00 00:00:00', 0),
(63, 'kinjalconst', '44e08e175d4af26203b47de3414b2c27', 'Balkirshna', 'Natavarlal', 'Patel', '9824300056', 1, 'kinjalconst@gmail.com', 'Magarwada, Singa Falia ,Moti Daman', 1, 0, '', 0, '', 0, '2018-06-07 12:27:12', 0, '0000-00-00 00:00:00', 0),
(64, 'jrvala', 'f6c6766a93eae56ac3a8259a12aa83e5', 'J.R.', '', 'Vala', '9586668815', 1, 'ae2pwddmn@gmai.com', 'Near Jetty, Nani Daman', 1, 0, 'tAJ0La6GbIyQ4IEHxOcs', 0, '', 0, '2018-06-07 13:01:33', 0, '0000-00-00 00:00:00', 0),
(65, 'sandippatel', '43cf0e644bc499b253da515ee6e71363', 'Bhavesh', '', 'Patel', '8980351277', 1, 'patlarapanchayat2005@gmail.com', 'Patlara, Moti Daman', 1, 0, '', 0, '', 0, '2018-06-07 13:04:10', 0, '0000-00-00 00:00:00', 0),
(66, 'pareshnirmal', '0f77f8d3ae0012faca97969e69b0544e', 'Paresh', '', 'Nirmal', '9898347107', 1, 'paresh.nirmal16@gmail.com', 'Rameshwar App. D-wing Float No. 407, Masal Chowk, Nani Daman', 1, 0, 'rFpsHj8Z8BXyASn2N6ig', 0, '', 0, '2018-06-08 10:16:42', 1, '2018-08-01 15:55:32', 0),
(67, 'marwad', 'd1d2ee75a4b5830f4002835711d03b96', 'Dhruvin', 'Kantibhai', 'Patel', '9727696600', 1, 'patel1267@gmail.com', 'Marwad Panchayat Ghar', 1, 0, '', 0, '67_indian-flag-with-map-of-india_1394-915c.jpg', 0, '2018-06-08 10:47:48', 0, '2018-06-08 12:17:43', 0),
(68, 'manojpatel', '05a746d47efbaf64edd0d27b7d7a0a05', 'Manoj', '', 'Patel', '9712054854', 1, 'mnjptl2007@rediffmail.com', '74/1 Kachigam, Nani Koliwad, Nani Daman', 1, 0, '', 0, '68_bbbbb.png', 0, '2018-06-08 11:13:15', 0, '2018-06-09 11:55:17', 0),
(69, 'dabhelpanchayat', 'd072516955603b9e537c0068746aa9fd', 'Hiren', '', 'Patel', '8141788869', 1, 'dabhelggpanchayat@gmail.com', 'Dabhel Group Gram Panchayat', 1, 0, '', 0, '', 0, '2018-06-08 11:23:49', 0, '0000-00-00 00:00:00', 0),
(70, 'mohit', '4342b324522f1854e5bf538b5b79b53c', 'Bharat', '', 'Chaudhary', '7977593954', 1, 'test@test1.com', 'Dubai Market, Texi Satand, Nani Daman', 1, 0, 'wmD4BW71WdXO958jgegu', 0, '', 0, '2018-06-08 11:51:11', 0, '0000-00-00 00:00:00', 0),
(71, 'vilashpatel', '63aa3d595121d201989fc9ca78273d24', 'Vilash', '', 'Patel', '9978600040', 1, 'vilashramu@gmail.com', '8/2 Sagarwad, Pariyari, Moti Daman- 396220', 1, 0, 'xWtEKyrU9Pb2s9zswRYD', 0, '71_logo.png', 0, '2018-06-08 12:04:14', 0, '2018-06-09 11:46:49', 0),
(72, 'ashitrana2014@gmail.com', '20ac2fda7866563507c72d34569ebe9b', 'Ashit D Rana', 'D', 'Rana', '9824479000', 1, 'asitrana2014@gmail.com', 'H.no 1010 Bhandari Street Ambavadi Moti Daman', 1, 0, '', 0, '', 0, '2018-06-08 12:46:02', 0, '0000-00-00 00:00:00', 0),
(73, 'nalinpatel', '1d205ca9c5c33babf4234357574e9506', 'Nalin', '', 'Patel', '9904779000', 1, 'patelnalinkeshv@yahoo.in', 'Shanj Pardi, behind Marwad Govt. Hospital, Nani Daman-396 210', 1, 0, '', 0, '73_kkconstructions-200x150.png', 0, '2018-06-09 11:04:36', 0, '2018-06-09 11:41:47', 0),
(74, 'pregna', '300d153161c0c47a2a343f66d4729c7a', 'URVASHI', '', 'LAD', '9979281123', 2, 'damanadmin@pregna.com', 'Plot No. 210, Survey No. 168, Dabhel Cooperative Industrial Society Limited, Dabhel, Daman (U.T)', 1, 0, '', 0, '', 0, '2018-06-09 14:10:50', 0, '0000-00-00 00:00:00', 0),
(75, 'shuklaldas', 'ad42d01f25f425117f40d9cd2eacb5bf', 'Kishor', '', 'Ayer', '9825919046', 1, 'suklal064@gmail.com', 'Rana State,Nani Daman', 1, 0, '', 0, '', 0, '2018-06-11 11:28:05', 0, '0000-00-00 00:00:00', 0),
(76, 'mohnish', '80d291cc17319e57bbc1e2300708cc57', 'Chanchalben', 'S', 'Halpati', '7043799913', 1, 'mohnishmahyavanshi19@gmail.com', 'Pariyari Panchayat Ghare, Jampour Road, Moti Daman', 1, 0, '', 0, '', 0, '2018-06-11 11:34:54', 0, '0000-00-00 00:00:00', 0),
(77, 'capitalinfra', '6369435bcac2f828d0cae4c31c78c251', 'Umesh', 'Vishnubhai', 'Kamli', '9376756003', 1, 'pranavconstruct@gmail.com', 'Signature House. Dori Kadaiya, Opposite Of Weight-bridge, on - Road site work , Daman', 1, 0, '', 0, '', 0, '2018-06-11 11:46:52', 0, '0000-00-00 00:00:00', 0),
(78, 'Damanwada', '6dfc45a607c005072331361ca99b2952', 'Kalavati Mahesh', '', 'Patel', '9898417373', 1, 'damanwadapanchayat720@gmail.com', 'Damanwada, Moti Daman. DAMAN-396220', 1, 0, '', 0, '', 0, '2018-06-12 12:57:01', 0, '0000-00-00 00:00:00', 0),
(79, 'bharatcottage', 'ca653fead39da2a17a69c84220a11fee', 'jaynti', '', 'malviya', '9586182311', 2, 'bcidaman@gmail.com', 'Plot No.52,54,56&58, opp. Fire Station, Dabhel, Daman', 1, 0, '', 0, '', 0, '2018-06-12 12:57:04', 0, '0000-00-00 00:00:00', 0),
(80, 'vmclabour', 'f3a1816f6c16afa91207d5c526875e62', 'NIRAJ', 'VIJAYBHAI', 'MISTRY', '8980034021', 1, 'vmcdaman@gmail.com', 'ZARI BRIDGE SITE, NEAR PSL FACTORY, KACHIGAM, DAMAN PIN-396210', 1, 0, '', 0, '', 0, '2018-06-22 11:29:01', 0, '0000-00-00 00:00:00', 0),
(81, 'Yagnesh B. Patel', '4bd8e22706c4390dc313efb18cb204ed', 'Yagnesh', 'B.', 'Patel', '9537332096', 1, 'karsanmitna@gmail.com', 'Kachigam, Nani Daman', 1, 0, '', 0, '', 0, '2018-06-23 16:30:37', 0, '0000-00-00 00:00:00', 0),
(82, 'alltimeplastics', '1c3c81ddf13ef6232644b8e5550ef5a0', 'Asutosh', '', 'Sarkar', '7567733485', 2, 'asutosh.sarkar@alltimeplastics.com', 'Plot No.371/1 & 2, Stone quarry, Kachigam Char Rasta, Village kachigam , Daman', 1, 0, 'DEPpjSTu91xQn4sWIwQq', 0, '', 0, '2018-06-26 16:27:08', 0, '0000-00-00 00:00:00', 0),
(83, 'amitpareek@yahoo.com', 'b76134ed28595a902721a23f950ff1b6', 'Amit', '', 'Pareek', '9099959879', 1, 'amitpareek@yahoo.com', 'Manobhav Banglow, Plot no 20 Vishwkarma Society near Parikh Hospital, Chala, Vapi', 1, 0, '', 0, '', 0, '2018-06-28 15:40:27', 0, '0000-00-00 00:00:00', 0),
(84, 'albatross', '5c3cb15d03661ea29fe64f08ec3fea07', 'Amitkumar', 'R', 'lad', '9016131188', 2, 'albosslock@gmail.com', '8, Avis Udhyog Bhavan, Near V tarance, Village Ringanwada, Daman', 1, 0, '', 0, '84_logo.jpg', 0, '2018-06-29 14:52:08', 0, '2018-07-13 15:35:39', 0),
(85, 'chemcoplast', '931016db66b30417b974c12817e31b25', 'Udhay', '', 'Desai', '9377840912', 2, 'uday@chemcoplast.com', 'Plot No.F-3, OIDC, ringanwada, Daman', 1, 0, '', 0, '', 0, '2018-07-02 10:16:17', 0, '0000-00-00 00:00:00', 0),
(86, 'nayasapoly', 'bf560e34badb5a176505292c25938cbd', 'Ravi', '', 'Chawla', '9825511568', 2, 'nayasasuperplast@yahoo.com', 'G-9, Udhyog Nagar, Village ringanwada, Daman', 1, 0, '', 0, '', 0, '2018-07-04 16:33:20', 0, '0000-00-00 00:00:00', 0),
(87, 'alpetcontainers', '3cf0a0e0ac902d00c843d44a1e35d07d', 'Rakesh', '', 'Kumar', '7819824004', 2, 'alpetcontainersdaman@gmail.com', 'Plot No.12, sr No. 257, Near Fire Station, Somnath indl. Estate, Village Kachigam, Daman', 1, 0, '', 0, '', 0, '2018-07-05 12:10:56', 0, '0000-00-00 00:00:00', 0),
(88, 'timwood', 'cabf031d5e3dc279f3856ac9a4fdde7d', 'Ranjan', '', 'Sinha', '7096963156', 2, 'timwoodppl123@gmail.com', 'Plot No. G-5, OIDC, Village Ringanwada, Daman', 1, 0, '', 0, '', 0, '2018-07-09 15:41:57', 0, '0000-00-00 00:00:00', 0),
(89, 'superknit', 'ea26e57faab98e1b62e1d519b58ed1bf', 'Senthil', '', 'Kumar', '9824155123', 2, 'senthil@superknit.com', 'plot No. 91\'/92, Bharat Indl. Estate, Village Bhimpore, Daman', 1, 0, '', 0, '', 0, '2018-07-09 15:49:02', 0, '0000-00-00 00:00:00', 0),
(90, 'ambepkg', '7367661be563f09d2dc77808c2fee2a3', 'Harish', '', 'Patel', '9824122083', 2, 'ambepkginds@gmail.com', 'Srv No. 168, Plot no. 20, 21 & 25, Village Dabhel, Daman', 1, 0, '', 0, '', 0, '2018-07-10 14:28:22', 0, '0000-00-00 00:00:00', 0),
(91, 'mblaminators', 'c4e98d9b1b853059d1aa7dd76ee4a946', 'Babulal', '', 'Kumawat', '8690881593', 2, 'mbldaman@morwalgroup.com', 'Srv No. 669/6-C, Somnath Kachigam Road, Village Dabhel, Daman', 1, 0, '', 0, '91_WIN_20180712_12_46_02_Pro.jpg', 0, '2018-07-11 10:48:51', 0, '2018-07-12 12:46:53', 0),
(92, 'indupackaging', 'ce6e8111ab004113b635416e0e4aa5f3', 'Jatin', '', 'Patel', '7228866017', 2, 'jatin@indupackaging.com', 'Plot No. 16, GDDIDC Industrial Estate, Somnath Road, Daman', 1, 0, 'qFkM59AD5ZGCyE3Q5e4o', 0, '', 0, '2018-07-20 15:32:15', 0, '0000-00-00 00:00:00', 0),
(93, 'fortune9', '14acecd1658e2be86daf789771d1bcef', 'Piyush', '', 'Patel', '8758450400', 1, 'jigs769@gmail.com', 'Fortune 9 , teen Batti, Nani Daman', 1, 0, '', 0, '', 0, '2018-07-24 11:13:09', 0, '0000-00-00 00:00:00', 0),
(94, 'bahusmarana', '4d7395bb6c44899c7d2683b30ad36c41', 'Akshay', '', 'Patel', '7698573561', 1, 'akshay3729@gmail.com', 'A-901, Raj Avenue, Khariwad, Nani Daman', 1, 0, '', 0, '', 0, '2018-07-24 11:47:13', 0, '0000-00-00 00:00:00', 0),
(95, 'girish', '949edce28f1cfc661235504926b80d1f', 'Girish', '', 'Patel', '9924520004', 1, 'smitpetro13@gmail.com', 'Near Smith Petrol Pump, Nani Daman', 1, 0, '', 0, '', 0, '2018-07-30 12:16:16', 0, '0000-00-00 00:00:00', 0),
(96, 'xyz', '0b6953bfe1286d22e9fa17550f26df4f', 'xyz', '', 'abc', '9825815719', 2, 'sonal.beladi@gov.in', 'Daman', 0, 0, 'AAGNkrQeFi3x9QKPtLcT', 0, '', 0, '2018-07-30 15:36:50', 0, '0000-00-00 00:00:00', 0),
(97, 'dhairya', '01ef29f3410754d90ee17ac636e31070', 'sonal', '', 'beladi', '9825815719', 2, 'cifb-dmn-dd@nic.in', 'Daman', 1, 0, '', 0, '', 0, '2018-07-30 15:46:10', 0, '0000-00-00 00:00:00', 0),
(98, 'sspolymers', '539d93e21f97684777d05f06cb61b6b8', 'Anand', '', 'Desai', '9898195694', 2, 'sspolymers1979@gmail.com', 'Ringanwada, Daman', 1, 0, '', 0, '', 0, '2018-07-30 16:22:41', 0, '0000-00-00 00:00:00', 0),
(99, 'JOAGPL', '70789a283d97a64f2b5cbd394daa8889', 'Rajesh', '', 'Mishra', '7984021975', 1, 'dhmisra10@gmail.com', 'JOAGPL Adani (Opp Gate No 1, Mirasol Resort,Kadaiya-Bhimpore Nani Daman)', 1, 0, '4cbRGlIXkMSuyO2GE0ax', 0, '', 0, '2018-07-31 12:21:35', 0, '0000-00-00 00:00:00', 0),
(100, 'INTERPACK', 'ed1184453eed40cffd9df18a4bd7bd14', 'RAKESHKUMAR', 'GANPATBHAI', 'PATEL', '9825131582', 2, 'interpack38@yahoo.com', 'kosamba koliwad\r\nvalsad(GUJARAT)', 1, 0, '', 0, '', 0, '2018-08-09 17:40:22', 0, '0000-00-00 00:00:00', 0),
(101, 'ronchpolymers', '57df0dc505ce85680a3ed194b66c3dd0', 'Chandu', '', 'Soni', '7043213679', 2, 'chandu.soni@ronchpolymers.com', 'Bhenslore, Daman', 1, 0, '', 0, '101_IMG_20151002_185538.jpg', 0, '2018-08-10 12:22:52', 0, '2018-08-17 14:41:35', 0),
(102, 'globallplast', 'd0c88d9d6bb5985fc8f648277bb03533', 'Rajaram', '', 'Khandelwal', '9377789281', 2, 'globallplast@gmail.com', 'Plot No.23, Village Dabhel, Daman', 1, 0, '', 0, '', 0, '2018-08-10 12:48:51', 0, '0000-00-00 00:00:00', 0),
(104, 'indupack', '2afb03ec4484c91769116ad321950d17', 'Navin', '', 'Desai', '9374007615', 2, 'acc.indumultipack@gmail.com', 'Plot No.759/1, Manica Ind. Estate, Village Dabhel, Daman', 1, 0, '', 0, '', 0, '2018-08-14 15:14:01', 0, '0000-00-00 00:00:00', 0),
(105, 'chhayayadav', '64ec64c7a3d56e18dae7968e2cd5b8fc', 'CHHAYA', 'P', 'YADAV', '9727408327', 2, 'chhaya1495@gmail.com', 'OPP ROFEL COLLEGE, NAMDHA ROAD, KHADAKLA, SAGAR KIRANA, VAPI', 1, 0, 'X6yAaJigb2PV7PivBSL7', 0, '105_avatar2.png', 0, '2018-10-03 12:15:24', 0, '2019-06-26 08:15:47', 0),
(106, 'chhayayadav1', '64ec64c7a3d56e18dae7968e2cd5b8fc', 'CHHAYA', 'P', 'YADAV', '9727408327', 1, 'chhaya14951@gmail.com', 'OPP ROFEL COLLEGE, NAMDHA ROAD, KHADAKLA, SAGAR KIRANA, VAPI', 1, 0, '6JXJUMhawSuJTMWTFyfU', 0, '', 0, '2018-10-03 12:23:06', 0, '0000-00-00 00:00:00', 0),
(107, 'prmod', '8f45b3fbc351fadfb6a4d38859d10e26', 'prmod', 's', 'pal', '7858787888', 1, 'prmod@gmail.com', 'jhhh', 0, 0, 'fWUSl3DejO7gC3fA8d3f', 0, '', 0, '2018-10-05 06:34:24', 0, '0000-00-00 00:00:00', 0),
(108, 'sagar', 'b4a9b9a47707381eee9c217e47edf072', 'sagar', 'p', 'YADAV', '9855646546', 1, 'sagar@gmail.com', 'OPP ROFEL COLLEGE, NAMDHA ROAD, KHADAKLA, SAGAR KIRANA, VAPI', 0, 0, 'Z853PuxvcJo00Z807Dxx', 0, '', 0, '2018-10-05 07:29:04', 0, '0000-00-00 00:00:00', 0),
(109, 'cy', '64ec64c7a3d56e18dae7968e2cd5b8fc', 'CHHAYA', 'p', 'YADAV', '9727408327', 1, 'chhaya@gmail.com', 'OPP ROFEL COLLEGE, NAMDHA ROAD, KHADAKLA, SAGAR KIRANA, VAPI', 0, 0, 'ZiQlrikQGGsMr6Hfq6lY', 0, '', 0, '2018-10-05 08:58:28', 0, '0000-00-00 00:00:00', 0),
(110, 'pramodpal', '8f45b3fbc351fadfb6a4d38859d10e26', 'pramod', 's', 'kjhjh', '5645645645', 1, 'pramod123@gmail.com', 'hjghghj', 0, 0, 'bEnjwVoMZu5Sjv0UU2UA', 0, '', 0, '2018-10-05 11:58:54', 0, '0000-00-00 00:00:00', 0),
(111, 'pramodpal123', '8f45b3fbc351fadfb6a4d38859d10e26', 'pdoclpsc', 'jbjb', 'jbj', '5455454546', 1, 'p@gmial.com', 'kjkjnkj', 0, 0, 'iA65Q3ytPKCrUu9SEC18', 0, '', 0, '2018-10-05 12:04:40', 0, '0000-00-00 00:00:00', 0),
(112, 'prmoadpallll', '8f45b3fbc351fadfb6a4d38859d10e26', 'hjhkhk', 'jkjhkhkj', 'jhjkb', '6465465465', 1, 'u@gmail.com', 'jhjhbjh', 0, 0, 'wZkvTySkKWSraAWKyi0Z', 0, '', 0, '2018-10-05 12:07:35', 0, '0000-00-00 00:00:00', 0),
(113, 'ppppp', '8f45b3fbc351fadfb6a4d38859d10e26', 'amsdnjs', 'jkhjkh', 'jjkhkjh', '4545456465', 1, 'v@gmail.com', 'hhbhj', 0, 0, 'cgswJlGiSWFPnR4lFzB3', 0, '', 0, '2018-10-05 12:09:29', 0, '0000-00-00 00:00:00', 0),
(114, 'PPPal', '8f45b3fbc351fadfb6a4d38859d10e26', 'hbhjjh', 'jhbjhb', 'hjbjhb', '5454545454', 1, 'b@gmail.com', 'hjghjghjg', 0, 0, 'mITKnLUrQp57Bnv57Y2q', 0, '', 0, '2018-10-05 12:16:14', 0, '0000-00-00 00:00:00', 0),
(115, 'Chhaya123', '64ec64c7a3d56e18dae7968e2cd5b8fc', 'shjdsvdhj', 'hjjhv', 'hjvjhv', '5465465465', 1, 'cc@gmail.com', 'jhghjhv', 0, 0, 'uPBQcDU0UPlKycwYOS1I', 0, '', 0, '2018-10-05 12:20:11', 0, '0000-00-00 00:00:00', 0),
(116, 'Chhayayadav112233', '64ec64c7a3d56e18dae7968e2cd5b8fc', 'mnsbjb', 'jbjb', 'jhbjhb', '5454545454', 1, 'vc@gmail.com', 'hghjg', 0, 0, 'jKLfmbkkYfcTclSfvSXH', 0, '', 0, '2018-10-05 12:25:07', 0, '0000-00-00 00:00:00', 0),
(117, 'Pramodpagl', '8f45b3fbc351fadfb6a4d38859d10e26', 'mdjsb', 'kjhjkh', 'kjhjkh', '4654654654', 1, 'bb@gmail.com', 'jhhjbjhb', 1, 0, 'bivxSBNum4saajrk3KIg', 0, '', 0, '2018-10-05 12:28:05', 0, '0000-00-00 00:00:00', 0),
(142, 'joyoplastic', '88955cba018af4942930d966c18f5e59', 'sagar ', 'vijaykumar', 'gajre ', '1111111111', 1, 'sa@gmail.com', 'muktanand marg chala vapi', 1, 0, 'Ku0UxOyBx4bMGYmwyRxUf78rOVyQFukREDD0YXikoIIrxhGTcd', 0, '', 0, '2019-08-03 07:27:22', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_login`
--
ALTER TABLE `log_login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_login`
--
ALTER TABLE `log_login`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `site_details`
--
ALTER TABLE `site_details`
  MODIFY `site_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
