-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 11:33 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `base_amount`
--

CREATE TABLE IF NOT EXISTS `base_amount` (
`id` int(11) NOT NULL,
  `duration_type` enum('1','2') NOT NULL,
  `upto` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `base_amount`
--

INSERT INTO `base_amount` (`id`, `duration_type`, `upto`, `cost`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 10, '2015-08-29 03:16:01', '2015-08-29 03:16:01'),
(3, '1', 3, 30, '2015-08-29 03:16:21', '2015-08-29 03:16:21'),
(4, '1', 2, 20, '2015-08-29 03:16:30', '2015-08-29 03:16:30'),
(5, '1', 4, 40, '2015-08-29 03:16:39', '2015-08-29 03:16:39'),
(6, '1', 5, 50, '2015-08-29 03:16:45', '2015-08-29 03:16:45'),
(7, '1', 6, 60, '2015-08-29 03:16:52', '2015-08-29 03:16:52'),
(8, '1', 7, 70, '2015-08-29 03:16:59', '2015-08-29 03:16:59'),
(9, '1', 8, 80, '2015-08-29 03:17:05', '2015-08-29 03:17:05'),
(13, '1', 9, 90, '2015-08-29 03:17:40', '2015-08-29 03:17:40'),
(14, '1', 10, 100, '2015-08-29 03:17:50', '2015-08-29 03:17:50'),
(15, '1', 11, 110, '2015-08-29 03:17:56', '2015-08-29 03:17:56'),
(16, '1', 12, 115, '2015-08-29 03:18:03', '2015-08-29 03:18:03'),
(17, '1', 13, 120, '2015-08-29 03:18:12', '2015-08-29 03:18:12'),
(18, '1', 14, 125, '2015-08-29 03:18:19', '2015-08-29 03:18:19'),
(19, '1', 15, 130, '2015-08-29 03:18:27', '2015-08-29 03:18:27'),
(20, '1', 16, 135, '2015-08-29 03:18:37', '2015-08-29 03:18:37'),
(21, '1', 17, 140, '2015-08-29 03:18:43', '2015-08-29 03:18:43'),
(22, '1', 18, 145, '2015-08-29 03:18:49', '2015-08-29 03:18:49'),
(23, '1', 19, 145, '2015-08-29 03:18:57', '2015-08-29 03:18:57'),
(24, '1', 20, 150, '2015-08-29 03:19:03', '2015-08-29 03:19:03'),
(25, '1', 21, 155, '2015-08-29 03:19:09', '2015-08-29 03:19:09'),
(26, '1', 22, 160, '2015-08-29 03:19:16', '2015-08-29 03:19:16'),
(27, '1', 23, 165, '2015-08-29 03:19:22', '2015-08-29 03:19:22'),
(28, '1', 24, 170, '2015-08-29 03:19:28', '2015-08-29 03:19:28'),
(29, '2', 1, 150, '2015-08-29 03:19:45', '2015-08-29 03:19:45'),
(30, '2', 2, 200, '2015-08-29 03:20:13', '2015-08-29 03:20:13'),
(31, '2', 3, 250, '2015-08-29 03:20:42', '2015-08-29 03:20:42'),
(32, '2', 4, 300, '2015-08-29 03:20:50', '2015-08-29 03:20:50'),
(33, '2', 5, 350, '2015-08-29 03:20:57', '2015-08-29 03:20:57'),
(34, '2', 6, 400, '2015-08-29 03:21:03', '2015-08-29 03:21:03'),
(35, '2', 7, 400, '2015-08-29 03:21:12', '2015-08-29 03:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE IF NOT EXISTS `floor` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `status` enum('Active','InActive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`id`, `name`, `short_name`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Base One', 'BO', 25, 'Active', '2015-08-29 03:15:39', '2015-08-29 03:15:39'),
(2, 'Base Two', 'BT', 25, 'Active', '2015-08-29 03:21:41', '2015-08-29 03:21:41'),
(3, 'Base Four', 'BF', 25, 'Active', '2015-08-29 03:21:58', '2015-08-29 03:21:58'),
(4, 'Base Five', 'BFI', 25, 'Active', '2015-08-29 03:22:11', '2015-08-29 03:22:11'),
(5, 'Base Six', 'BS', 25, 'Active', '2015-08-29 03:22:29', '2015-08-29 03:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parking_details`
--

CREATE TABLE IF NOT EXISTS `parking_details` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `car_number` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `floor_id` int(11) NOT NULL,
  `slot_no` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cost` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `in_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_details`
--

INSERT INTO `parking_details` (`id`, `name`, `car_number`, `mobile`, `status`, `floor_id`, `slot_no`, `image`, `cost`, `created_by`, `in_time`, `out_time`, `created_at`, `updated_at`) VALUES
(1, 'Edge', 'CA65D526', '85662179', '1', 1, 1, 'CA65D5261440838831images.jpg', NULL, 2, '2015-08-29 09:00:31', '0000-00-00 00:00:00', '2015-08-29 03:30:31', '2015-08-29 03:30:31'),
(2, 'Ferraimic', 'VE25F655', '659832264', '1', 1, 2, 'VE25F6551440838872TitanServicev1.jpg', NULL, 2, '2015-08-29 09:01:13', '0000-00-00 00:00:00', '2015-08-29 03:31:13', '2015-08-29 03:31:13'),
(3, 'Mathews', 'KS2563', '65215951', '1', 2, 1, 'KS25631440838902Porsche-913-Concept-4.jpg', NULL, 2, '2015-08-29 09:01:42', '0000-00-00 00:00:00', '2015-08-29 03:31:42', '2015-08-29 03:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('InActive','Active') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `gender`, `staff_id`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'info@aimwindow.com', '0', '0', '$2y$10$zwjwxCfeCm1p9pAx9hXHFe8wTH8JRQeM/IvZF/n0XtwYWE/xMnrRS', 'Active', '1UwJxRaloLqAZ8SHcBYdgsp0XExF7GAgUrMGuNiQxTC7fEiUvYlBATqPiYfN', '0000-00-00 00:00:00', '2015-08-29 03:24:44'),
(2, 'Martin', 'Guptill', 'Martin@email.com', '0', 'CS32B56', '$2y$10$idCKe5/Zd327gmz63wc.Xu3ZzWEa1sM53SxTmqmObO0ea4kTYXZgK', 'Active', 'vJpFgg7nMPQ2sfNUq8mtulpmQN1Mon4VgvzsLa9gFYaZAdCTgYMjM0gSI5jP', '2015-08-29 03:23:22', '2015-08-29 03:32:04'),
(3, 'Micheal', 'Charis', 'Micheal@email.com', '0', 'Cs45D65', '$2y$10$kxpfmXdhsiqy1QhO.44QxOz3eQlrQ2AAUUuf5sQyhEBL0XlS8l8lK', 'InActive', NULL, '2015-08-29 03:24:32', '2015-08-29 03:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_floors`
--

CREATE TABLE IF NOT EXISTS `user_floors` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_floors`
--

INSERT INTO `user_floors` (`id`, `user_id`, `floor_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2015-08-29 03:23:22', '2015-08-29 03:23:22'),
(2, 2, 2, '2015-08-29 03:23:22', '2015-08-29 03:23:22'),
(3, 3, 5, '2015-08-29 03:24:32', '2015-08-29 03:24:32'),
(4, 3, 3, '2015-08-29 03:24:32', '2015-08-29 03:24:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base_amount`
--
ALTER TABLE `base_amount`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_details`
--
ALTER TABLE `parking_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_floors`
--
ALTER TABLE `user_floors`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base_amount`
--
ALTER TABLE `base_amount`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parking_details`
--
ALTER TABLE `parking_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_floors`
--
ALTER TABLE `user_floors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
