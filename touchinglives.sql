-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2018 at 09:10 AM
-- Server version: 10.1.22-MariaDB-
-- PHP Version: 7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `touchinglives`
--

-- --------------------------------------------------------

--
-- Table structure for table `centres`
--

CREATE TABLE `centres` (
  `id` int(11) NOT NULL,
  `centre_id` varchar(45) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `centre` varchar(255) DEFAULT NULL,
  `coordinator` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centres`
--

INSERT INTO `centres` (`id`, `centre_id`, `zone`, `centre`, `coordinator`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Akwa Ibom state', 'Abak Center 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-26 11:39:36'),
(2, '', 'Akwa Ibom state', 'Abak Center 2', '', 'active', '2018-03-21 05:32:05', '2018-03-28 05:40:54'),
(3, '', 'Akwa Ibom state', 'Abak center 3', '', 'active', '2018-03-21 05:32:05', '2018-03-27 12:02:43'),
(4, '', 'Akwa Ibom state', 'Eket center 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(5, '', 'Akwa Ibom state', 'Eket center 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-27 18:25:21'),
(6, '', 'Akwa Ibom state', 'Essien Udim center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(7, '', 'Akwa Ibom state', 'Etinan center 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(8, '', 'Akwa Ibom state', 'Esit Eket', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(9, '', 'Akwa Ibom state', 'Ibesikpo center 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(10, '', 'Akwa Ibom state', 'Ibesikpo center 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(11, '', 'Akwa Ibom state', 'Ibeno center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(12, '', 'Akwa Ibom state', 'Ibiono center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(13, '', 'Akwa Ibom state', 'Ika center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(14, '', 'Akwa Ibom state', 'Ikono center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(15, '', 'Akwa Ibom state', 'Ikot Ekpene center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(16, '', 'Akwa Ibom state', 'Ikot Abasi center ', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(17, '', 'Akwa Ibom state', 'Ini center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(18, '', 'Akwa Ibom state', 'Itu center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(19, '', 'Akwa Ibom state', 'Nsit Atai center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(20, '', 'Akwa Ibom state', 'Nsit Ibom center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(21, '', 'Akwa Ibom state', 'Nsit Ubium Center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(22, '', 'Akwa Ibom state', 'Obot Akara Centre', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(23, '', 'Akwa Ibom state', 'Onna center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(24, '', 'Akwa Ibom state', 'Oron center 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(25, '', 'Akwa Ibom state', 'Oron center 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(26, '', 'Akwa Ibom state', 'Oron center 3', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(27, '', 'Akwa Ibom state', 'Oron center 4', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(28, '', 'Akwa Ibom state', 'Oron center 5', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(29, '', 'Akwa Ibom state', 'Oruk Anam center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(30, '', 'Akwa Ibom state', 'Uyo center 1(Abak Rd)', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(31, '', 'Akwa Ibom state', 'Uyo center 2(Nwaniba)', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(32, '', 'Akwa Ibom state', 'Uyo center 3(hospital Rd)', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(33, '', 'Akwa Ibom state', 'Uyo center 4(Anua Obio)', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(34, '', 'Akwa Ibom state', 'Uyo center 5(Ikot Okubo)', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(35, '', 'Akwa Ibom state', 'Uyo center 6(Ikot Akpanabia)', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(36, '', 'Akwa Ibom state', 'Uruan center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(37, '', 'Rivers state', 'Phalga', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(38, '', 'Rivers state', 'Obia Okpor', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(39, '', 'Rivers state', 'Rumuomasi', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(40, '', 'Rivers state', 'Elelenwo', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(41, '', 'Rivers state', 'Igbo Etche', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(42, '', 'Rivers state', 'Abuloma', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(43, '', 'Rivers state', 'Kaa', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(44, '', 'Rivers state', 'Gokana', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(45, '', 'Rivers state', 'Khana 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(46, '', 'Rivers state', 'Khana 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(47, '', 'Rivers state', 'Okirika', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(48, '', 'Rivers state', 'Boni', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(49, '', 'Bayelsa state', 'Yenegua', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(50, '', 'Delta state', 'Warri 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(51, '', 'Delta state', 'Warri 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(52, '', 'Delta state', 'Warri 3', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(53, '', 'Delta state', 'Asaba 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(54, '', 'Delta state', 'Asaba 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(55, '', 'Edo state', 'Benin ', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(56, '', 'Abia State', 'Aba', '', 'active', '2018-03-21 05:32:05', '2018-03-29 05:48:58'),
(57, '', 'Abia State', 'Umuahia', '', 'active', '2018-03-21 05:32:05', '2018-03-29 07:09:42'),
(58, '', 'Imo state', 'Owerri', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(59, '', 'Cross Rivers state', 'calabar 1', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(60, '', 'Cross Rivers state', 'calabar 2', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(61, '', 'Cross Rivers state', 'calabar 3', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(62, '', 'Cross Rivers state', 'calabar 4', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(63, '', 'Cross Rivers state', 'calabar 5', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(64, '', 'Cross Rivers state', 'Obudu ', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05'),
(65, '', 'Cross Rivers state', 'Ikom center', '', 'inactive', '2018-03-21 05:32:05', '2018-03-21 05:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `wallet_id` varchar(191) NOT NULL,
  `reg_id` varchar(191) NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `other_name` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `marital_status` varchar(191) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `phone_no` varchar(191) DEFAULT NULL,
  `nationality` varchar(191) DEFAULT NULL,
  `state_origin` varchar(191) DEFAULT NULL,
  `lga_origin` varchar(191) DEFAULT NULL,
  `village` varchar(191) DEFAULT NULL,
  `programme` varchar(191) DEFAULT NULL,
  `zone` varchar(191) DEFAULT NULL,
  `centre` varchar(191) DEFAULT NULL,
  `status` enum('pending','registered','canceled') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `type` enum('admin','user') NOT NULL DEFAULT 'user',
  `access_level` enum('1','2','3','4') DEFAULT '1',
  `status` enum('pending','active','blocked') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `name`, `email`, `password`, `remember_token`, `type`, `access_level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super', 'admin@touchinglivesskills.com', '$2y$10$mJwt8KQMfv6tXN27W/5eG.QGDyv0AayEvDQUmM0F6.vZKg16OYOW2', 'ANxaAa8JkFnIi84gHQZNktuKoputMnODFpvIyMSOTn0M3X9kUwSwUunhNLC1', 'admin', '4', 'active', '2018-03-22 06:19:04', '2018-03-21 10:08:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centres`
--
ALTER TABLE `centres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrations_reg_id_uindex` (`reg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centres`
--
ALTER TABLE `centres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
