-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 06:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `table_name`, `action`, `created_at`, `updated_at`) VALUES
(381, 1, 'files', 'admin  uploaded a file Accomplishment Report.pdf', '2023-01-08 10:13:00', '2023-01-08 10:13:00'),
(382, 1, 'files', 'admin deleted file with id 48 Accomplishment Report.pdf', '2023-01-08 10:13:10', '2023-01-08 10:13:10'),
(383, 1, 'files', 'admin  uploaded a file Accomplishment Report.pdf', '2023-01-08 10:13:51', '2023-01-08 10:13:51'),
(384, 1, 'files', 'admin  uploaded a file Financial Report 890.pdf', '2023-01-08 10:14:02', '2023-01-08 10:14:02'),
(385, 1, 'files', 'admin  uploaded a file Blotter Report.pdf', '2023-01-08 10:14:18', '2023-01-08 10:14:18'),
(386, 1, 'barangay official', 'admin  created a profile of ', '2023-01-08 10:16:14', '2023-01-08 10:16:14'),
(387, 1, 'admin_residents', 'admin  added resident  ', '2023-01-08 10:18:02', '2023-01-08 10:18:02'),
(388, 1, 'admin_residents', 'admin  added resident  ', '2023-01-08 10:18:02', '2023-01-08 10:18:02'),
(389, 0, 'residents_registrations', 'Guest  approved residents registration of  ', '2023-01-08 10:23:54', '2023-01-08 10:23:54'),
(390, 0, 'residents_registrations', 'Guest  updated the registration of   ', '2023-01-08 10:23:54', '2023-01-08 10:23:54'),
(391, 0, 'residents_registrations', 'Guest  approved residents registration of  ', '2023-01-08 10:25:43', '2023-01-08 10:25:43'),
(392, 0, 'residents_registrations', 'Guest  updated the registration of   ', '2023-01-08 10:25:43', '2023-01-08 10:25:43'),
(393, 1, 'admin_residents', 'admin  added resident  ', '2023-01-08 10:32:09', '2023-01-08 10:32:09'),
(394, 1, 'admin_residents', 'admin  added resident  ', '2023-01-08 10:32:09', '2023-01-08 10:32:09'),
(395, 0, 'residents_registrations', 'Guest  approved residents registration', '2023-01-08 10:36:14', '2023-01-08 10:36:14'),
(396, 0, 'residents_registrations', 'Guest  updated the registration of   ', '2023-01-08 10:36:14', '2023-01-08 10:36:14'),
(397, 0, 'blotters', 'Guest created blotter with id 15 complainant Aldrin Priela', '2023-01-08 10:45:12', '2023-01-08 10:45:12'),
(398, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-01-08 10:47:15', '2023-01-08 10:47:15'),
(399, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-01-08 10:48:43', '2023-01-08 10:48:43'),
(400, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-01-08 10:53:13', '2023-01-08 10:53:13'),
(401, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-01-08 10:54:32', '2023-01-08 10:54:32'),
(402, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-01-08 10:58:36', '2023-01-08 10:58:36'),
(403, 1, 'blotter', 'admin approved blotter report of Aldrin Prielawith the request action toSummon', '2023-01-08 11:02:21', '2023-01-08 11:02:21'),
(404, 1, 'blotter', 'admin  edited the blotter report of  Aldrin Priela', '2023-01-08 11:03:16', '2023-01-08 11:03:16'),
(405, 1, 'blotter', 'admin  edited the blotter report of  Aldrin Priela', '2023-01-08 11:04:01', '2023-01-08 11:04:01'),
(406, 1, 'blotter', 'admin  updated blotter information of  Aldrin Priela', '2023-01-08 11:04:33', '2023-01-08 11:04:33'),
(407, 1, 'blotter', 'admin  edited the blotter report of  Aldrin Priela', '2023-01-08 11:04:34', '2023-01-08 11:04:34'),
(408, 1, 'blotter', 'admin  edited the blotter report of  Aldrin Priela', '2023-01-08 11:12:32', '2023-01-08 11:12:32'),
(409, 1, 'certificate', 'admin  approved the Barangay Clearance requested by Doquisa Claro Panugao', '2023-01-08 11:14:03', '2023-01-08 11:14:03'),
(410, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-01-08 11:25:30', '2023-01-08 11:25:30'),
(411, 1, 'admin_residents', 'admin logged in admin dashboard', '2023-01-08 18:55:33', '2023-01-08 18:55:33'),
(412, 1, 'admin_residents', 'admin  updated the account of resident Jeuell Talagtag', '2023-01-08 19:06:06', '2023-01-08 19:06:06'),
(413, 1, 'barangay official', 'admin  created a profile of Rafael Folloso', '2023-01-08 19:06:26', '2023-01-08 19:06:26'),
(414, 1, 'barangay official', 'admin  created a profile of Sherrey Lomaad Tagongtong', '2023-01-08 19:06:34', '2023-01-08 19:06:34'),
(415, 1, 'admin_residents', 'admin  updated the account of resident Aldrin Glenn Priela', '2023-01-08 19:07:02', '2023-01-08 19:07:02'),
(416, 1, 'admin_residents', 'admin  updated the account of resident Leamae Sebullen', '2023-01-08 19:07:22', '2023-01-08 19:07:22'),
(417, 1, 'admin_residents', 'admin  updated the account of resident Doquisa Panugao', '2023-01-08 19:07:42', '2023-01-08 19:07:42'),
(418, 1, 'files', 'admin deleted file with id 49 Accomplishment Report for January', '2023-01-08 19:21:27', '2023-01-08 19:21:27'),
(419, 1, 'barangay official', 'admin  created a profile of ', '2023-03-26 06:46:02', '2023-03-26 06:46:02'),
(420, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-03-26 06:51:12', '2023-03-26 06:51:12'),
(421, 52, 'admin_residents', 'ricky10 logged in ricky10 dashboard', '2023-03-26 06:51:24', '2023-03-26 06:51:24'),
(422, 52, 'files', 'ricky10  uploaded a file Accomplishment Report for April.pdf', '2023-03-26 06:51:44', '2023-03-26 06:51:44'),
(423, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-03-26 06:51:52', '2023-03-26 06:51:52'),
(424, 1, 'admin_residents', 'admin logged in admin dashboard', '2023-03-26 06:52:25', '2023-03-26 06:52:25'),
(425, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  ', '2023-03-26 06:52:50', '2023-03-26 06:52:50'),
(426, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  ', '2023-03-26 07:01:43', '2023-03-26 07:01:43'),
(427, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Doquisa Claro Panugao', '2023-03-26 07:03:48', '2023-03-26 07:03:48'),
(428, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Doquisa Claro Panugao', '2023-03-26 07:06:04', '2023-03-26 07:06:04'),
(429, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Doquisa Claro Panugao', '2023-03-26 07:13:37', '2023-03-26 07:13:37'),
(430, 1, 'certificate', 'admin  approved the Certificate of Residency requested by Leamae Tanggapan Sebullen', '2023-03-26 07:15:15', '2023-03-26 07:15:15'),
(431, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Leamae Tanggapan Sebullen', '2023-03-26 07:15:29', '2023-03-26 07:15:29'),
(432, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Leamae Tanggapan Sebullen', '2023-03-26 07:15:54', '2023-03-26 07:15:54'),
(433, 1, 'certificate', 'admin approved barangayCertificate of Indigency with id 36 Jeuell Ramos Talagtag', '2023-03-26 07:16:08', '2023-03-26 07:16:08'),
(434, 1, 'barangay official', 'admin  created a profile of ', '2023-03-26 07:59:08', '2023-03-26 07:59:08'),
(435, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-03-26 07:59:44', '2023-03-26 07:59:44'),
(436, 53, 'admin_residents', 'lorna09 logged in lorna09 dashboard', '2023-03-26 07:59:58', '2023-03-26 07:59:58'),
(437, 0, 'admin_residents', 'Guest logged out dashboard.', '2023-03-26 08:02:05', '2023-03-26 08:02:05'),
(438, 1, 'admin_residents', 'admin logged in admin dashboard', '2023-03-26 08:02:16', '2023-03-26 08:02:16'),
(439, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Doquisa Claro Panugao', '2023-03-26 08:20:26', '2023-03-26 08:20:26'),
(440, 1, 'request certificate', 'admin added control number, remarks, picture and control number in certificate requested by  Doquisa Claro Panugao', '2023-03-26 08:20:40', '2023-03-26 08:20:40'),
(441, 1, 'admin_residents', 'admin  updated the account of resident Doquisa Panugao', '2023-03-26 08:21:47', '2023-03-26 08:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_image` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `userType` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `admin_image`, `first_name`, `last_name`, `position`, `email`, `email_verified_at`, `password`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$T9510rJbTwPH3bfYb4vFnOuggHTgDjlOCwi5SLtxGH3iNrGmr7Sli', 0, NULL, '2022-11-28 07:06:25', '2022-11-28 07:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_residents`
--

CREATE TABLE `admin_residents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `house_no` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `voter_status` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `work_status` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `resident_image` varchar(255) DEFAULT NULL,
  `id_image` varchar(255) DEFAULT NULL,
  `userType` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_residents`
--

INSERT INTO `admin_residents` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `nickname`, `place_of_birth`, `birthdate`, `age`, `civil_status`, `street`, `house_no`, `gender`, `voter_status`, `citizenship`, `email`, `username`, `phone_number`, `occupation`, `work_status`, `password`, `resident_image`, `id_image`, `userType`, `status`, `created_at`, `updated_at`) VALUES
(13, 47, 'Doquisa', 'Claro', 'Panugao', 'Dok', 'Pasig City', '19-03-2001', 22, 'Single', 'Zone 7', 1044, 'Female', 'Voter', 'Filipino', 'dok@gmail.com', 'okidoki', '09876543212', 'Student', 'Unemployed', '$2y$10$nWOg/iVLaHA3H7Boxcr2IecBt30Ba0K2KKH1n6.Amq6/4Mf6i.8Oi', 'images/IA6W9uqv84HivyPBSIjlVOIatfaGzb5FlWoqDkW2.png', NULL, 1, 1, '2023-01-08 10:18:02', '2023-03-26 08:21:47'),
(14, 48, 'Leamae', 'Tanggapan', 'Sebullen', 'Lea', 'Davao City', '19-08-1992', 31, 'Married', 'Zone 7', 9087, 'Female', 'Voter', 'Filipino', 'lea@gmail.com', 'leamae12', '09876543468', 'Housewife', 'Unemployed', '$2y$10$.LLfTNRCtaKgViL8OEq0l.rzTCHZ9CIoNceptU3UlF.xrs4L8iVNq', 'images/c9yRgSZ2zlIgtLNpagGPxNfSMOF2HJEuGnzTDf6h.jpg', 'images/z86cHw2Jdz6zMpORI8373kx0MaUZrnEAPMeF0gpO.jpg', 1, 1, '2023-01-08 10:23:54', '2023-01-08 19:07:22'),
(15, 49, 'Aldrin Glenn', 'Intia', 'Priela', 'Aldr', 'Bato City', '14-01-1997', 26, 'Live-In', 'Zone 7', 767, 'Male', 'Voter', 'Filipino', 'aldrin@gmail.com', 'aldrin32', '09878767543', 'Manager', 'Employed', '$2y$10$wAr51ZteYSktF2kyr0oaA.DQWSi0h8wu5JhlJ8x.Tr5Ezjc6BpM6q', 'images/c94HHExQRVBXLZFkU4zQd3CqcCHfGhjgZceWLK8V.webp', 'images/XYQU8MZcKq6fsQmaQwhFnHiaXbmpNY71oZXRcrkf.jpg', 1, 1, '2023-01-08 10:25:43', '2023-01-08 19:07:02'),
(16, 50, 'Jeuell', 'Ramos', 'Talagtag', 'Je', 'Bato City', '25-01-1989', 34, 'Separated', 'Zone 8', 908, 'Male', 'Voter', 'Filipino', 'je@gmail.com', 'jeuell89', '09654345678', 'Supervisor', 'Employed', '$2y$10$UYh5BQBGzmVt.DwDkY6jrOrxLqY90MRD.I3eA5oumf1fIzqANjhsW', 'images/qqE7tocV2zMPj8CyJtneZ9CkdGMapDWxlzoq1tW8.png', NULL, 1, 1, '2023-01-08 10:32:09', '2023-01-08 19:06:06'),
(17, 51, 'Aniya', 'Lee', 'Forger', 'Aniyaaa', 'London', '29-01-2005', 18, 'Single', 'Spy Family Street', 90867, 'Female', 'Non Voter', 'Japanese', 'aniya@gmail.com', 'aniya90', '09878765678', 'Psychic', 'Unemployed', '$2y$10$5KKkj2ZTTLCpRtLTNW7hwuUy5y/PVwdhFbsggdiOGqP6ERMf4IUX6', 'images/qJRqRVB1yHnLZeSsUuRkrXlXlTn4Yus9ltvsxmTQ.jpg', 'images/sXxTiPcEqFMGxqpIF8fPtp4fTisf17nV92Daewqm.jpg', 1, 0, '2023-01-08 10:36:14', '2023-01-08 10:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangay_officials`
--

CREATE TABLE `barangay_officials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `official_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangay_officials`
--

INSERT INTO `barangay_officials` (`id`, `user_id`, `name`, `age`, `birthdate`, `gender`, `position`, `phone_number`, `email`, `username`, `password`, `userType`, `status`, `official_image`, `created_at`, `updated_at`) VALUES
(8, 1, 'Rafael Folloso', 34, '1990-06-14', 'Male', 'Barangay Captain', '09647876546', 'raffyfolloso@gmail.com', 'Admin', '$2y$10$gdPNfLm3n6BnaCCst5TEq.dqWTiYoZHGupTdrJxkz0Kp/JPr9r2t2', 0, 1, 'images/n5cYI13AjEM61jsql8Wncy1m7czNXs61HnLTouSZ.png', '2022-12-21 07:23:27', '2023-01-08 19:06:26'),
(23, 46, 'Sherrey Lomaad Tagongtong', 45, '1996-12-12', 'Female', 'Barangay Secretary', '09876543234', 'sherrey@gmail.com', 'sherrey12', '$2y$10$TzBNj5s0JfLoaR3bZ6dzceUO9yAB56vSwUq4MnhbKdo1b5XDd4Gdi', 0, 1, 'images/ZjW5uiFU2xgShigU8BCuJFr5q76WYEerhvfSxfu9.png', '2023-01-08 10:16:14', '2023-03-26 07:59:28'),
(24, 52, 'Ricky Llagas', 39, '1978-09-11', 'Male', 'Barangay Kagawad', '09965356354', 'ricky@gmail.com', 'ricky10', '$2y$10$2FZFlPDrkN8OOdb4PrNCPuQwzxHAQ93fQeVMYHO/C58aakFJeX3xq', 0, 1, 'images/6LIw0h9FV0peqrKAooCSyWwoUcLbVic5wfIsC1AE.png', '2023-03-26 06:46:02', '2023-03-26 06:51:07'),
(25, 53, 'Lorna Muhi', 56, '1976-04-06', 'Female', 'Barangay Treasurer', '09123212912', 'lorna@gmail.com', 'lorna09', '$2y$10$uHIzmEK4UmYEatwC4.3y1.aLHO4HUF7oqGoBFgBDiNs82VvlHhJEu', 0, 1, 'images/l9NEgmb9gjnm4ulAJfS0HTynyGKAMHhrsJ6rvZQt.png', '2023-03-26 07:59:08', '2023-03-26 07:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `blotters`
--

CREATE TABLE `blotters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complainant` varchar(255) NOT NULL,
  `respondent` varchar(255) DEFAULT NULL,
  `resCA` varchar(250) DEFAULT NULL,
  `comCA` varchar(255) DEFAULT NULL,
  `victim` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `details` longtext NOT NULL,
  `proof` varchar(255) DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `phone_number1` varchar(255) NOT NULL,
  `phone_number2` varchar(255) DEFAULT NULL,
  `status` enum('pending','approved','declined') NOT NULL DEFAULT 'pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `for_reason` varchar(255) DEFAULT NULL,
  `datesum` varchar(100) DEFAULT NULL,
  `timesum` varchar(100) DEFAULT NULL,
  `delsum` varchar(100) DEFAULT NULL,
  `delsum2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blotters`
--

INSERT INTO `blotters` (`id`, `complainant`, `respondent`, `resCA`, `comCA`, `victim`, `location`, `date`, `time`, `details`, `proof`, `action`, `phone_number1`, `phone_number2`, `status`, `deleted_at`, `created_at`, `updated_at`, `for_reason`, `datesum`, `timesum`, `delsum`, `delsum2`) VALUES
(15, 'Aldrin Priela', 'Mr. Karl Cabalquinto', 'Zone 3 San Isidro, Baao Camarines Sur', 'Zone 9 Tres Reyes, Bato Camarines Sur', 'Ms. Neumilyn Julie Cortez', 'Robinson Naga Place', '2023-01-03', '14:43', 'Sinigwan ako ni Karl na bading sa maraming tao at pinapahayag pa nito na ako raw ay transgender.', 'images/MzPLgV8UgIX7TgrRjrZxWMcsnEqcn3fpJ0FqKlbe.jpg', 'Summon', '9876545679', '9876545678', 'approved', NULL, '2023-01-08 10:45:12', '2023-01-08 11:04:33', 'Public Harassment', '2023-01-05', '03:08', '2023-01-12', '06:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `category` enum('accomplishment','financial','blotter') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `size`, `category`, `status`, `deleted_at`, `created_at`, `updated_at`, `description`) VALUES
(48, 'Accomplishment Report.pdf', 'application/pdf', '188119', 'accomplishment', 1, '2023-01-08 10:13:10', '2023-01-08 10:13:00', '2023-01-08 10:13:10', NULL),
(49, 'Accomplishment Report for January', NULL, NULL, 'accomplishment', 1, '2023-01-08 19:21:27', '2023-01-08 10:13:38', '2023-01-08 19:21:27', 'This is a sample accomplishment report'),
(50, 'Accomplishment Report.pdf', 'application/pdf', '188119', 'accomplishment', 1, NULL, '2023-01-08 10:13:51', '2023-01-08 10:13:51', NULL),
(51, 'Financial Report 890.pdf', 'application/pdf', '189067', 'financial', 1, NULL, '2023-01-08 10:14:02', '2023-01-08 10:14:02', NULL),
(52, 'Blotter Report.pdf', 'application/pdf', '185919', 'blotter', 1, NULL, '2023-01-08 10:14:18', '2023-01-08 10:14:18', NULL),
(53, 'Accomplishment Report for April.pdf', 'application/pdf', '188119', 'accomplishment', 1, NULL, '2023-03-26 06:51:44', '2023-03-26 06:51:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freq_askeds`
--

CREATE TABLE `freq_askeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freq_askeds`
--

INSERT INTO `freq_askeds` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(3, 'FAQ 1: What is a Barangay Certificate of Residency?', 'The Certificate of Residency is a document certifying your stay in a barangay. You can apply and obtain a barangay certification from a barangay where you have been living for six (6) months or more.', '2023-01-08 11:22:43', '2023-01-08 11:22:43'),
(4, 'FAQ 2:  What is a Barangay Clearance?', 'A Barangay Clearance is one of the requirements before a mayor issues a permit or license to build a business in a barangay. This clearance is available from the village (barangay) where the business will be built or processed.', '2023-01-08 11:23:14', '2023-01-08 11:23:14'),
(5, 'FAQ 3: When there is a dispute with the barangay, whom should first approach?', 'As chairman of the Peacemaker Board, the Punong Barangay or Barangay Captain should be the first to hear your complaint. If Barangay Captain does not show up, he will then form a Team of Recipients which includes three (3) members from the Board, who will then handle the complaints.', '2023-01-08 11:23:51', '2023-01-08 11:23:51'),
(6, 'FAQ 4: Is it true that only a limit of three (3) summon or hearing can be complained to the barangay?', 'It is not in the law of barangay justice that only three hearing shall be conducted by the Peacemaker Board. It is stated that the Barangay Captain must be reconciled within 15 days of the complaint from the day the two parties first meet and 15 days in the Setup Order and may be extended for another 15 days in the opinion if The Group is hopeful or even willing to agree on the two sides.', '2023-01-08 11:24:42', '2023-01-08 11:24:42'),
(7, 'FAQ 5: Can a barangay official/ appointee work in a private company during his or her term?', 'Barangay officials and workers can work in private companies. But if they are not honest in their uphold duties, they will be filed an administrative case at the council city or town according to section 61 (C) of the local government code.', '2023-01-08 11:25:23', '2023-01-08 11:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `freq_asked_titles`
--

CREATE TABLE `freq_asked_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `frq_asked_title` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freq_asked_titles`
--

INSERT INTO `freq_asked_titles` (`id`, `frq_asked_title`, `created_at`, `updated_at`) VALUES
(1, 'HERE ARE THE FREQUENTLY ASKED QUESTIONS ABOUT THE DUTIES OF A BARANGAY', '2022-11-28 07:06:25', '2022-12-21 07:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_23_130244_create_admin_residents_table', 1),
(6, '2022_08_16_140353_create_resident_user_table', 1),
(7, '2022_08_20_023706_create_barangay_officials_table', 1),
(8, '2022_08_28_114239_create_settings_table', 1),
(9, '2022_09_03_110951_create_blotters_table', 1),
(10, '2022_09_03_162857_create_request_certificates_table', 1),
(11, '2022_09_07_053244_create_announcements_table', 1),
(12, '2022_09_09_064202_create_files_table', 1),
(13, '2022_09_09_141146_create_admin_logs_table', 1),
(14, '2022_09_13_102529_create_activity_logs_table', 1),
(15, '2022_09_21_060612_create_admins_table', 1),
(16, '2022_09_27_151506_create_user_registrations_table', 1),
(17, '2022_10_02_045710_create_vaccines_table', 1),
(18, '2022_10_03_110035_create_senior_citizens_table', 1),
(19, '2022_10_04_104636_create_p_w_d_s_table', 1),
(20, '2022_10_08_060222_create_pregnants_table', 1),
(21, '2022_10_13_163812_create_freq_askeds_table', 1),
(22, '2022_10_15_000703_create_freq_asked_titles_table', 1),
(23, '2022_12_01_013836_create_create_documents_table', 2),
(24, '2022_09_29_011238_create_smsmessages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pregnants`
--

CREATE TABLE `pregnants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `LMP` varchar(255) NOT NULL,
  `EDC` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pregnants`
--

INSERT INTO `pregnants` (`id`, `name`, `age`, `birthdate`, `weight`, `LMP`, `EDC`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Sebullen, Leamae  Tanggapan', 31, '19-08-1992', '89', '2023-01-02', '2023-01-28', 1, '2023-01-08 10:53:09', '2023-01-08 10:56:47'),
(6, 'Panugao, Doquisa  Claro', 22, '19-03-2001', '67', '2023-01-01', '2023-01-30', 1, '2023-01-08 10:54:28', '2023-01-08 10:57:01'),
(7, 'Panugao, Doquisa  Claro', 22, '19-03-2001', '90', '2023-02-14', '2023-03-04', 1, '2023-01-08 10:58:32', '2023-01-08 10:58:55'),
(8, 'Sebullen, Leamae  Tanggapan', 31, '19-08-1992', '98', '2023-03-07', '2023-03-24', 1, '2023-01-08 11:00:04', '2023-01-08 11:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `p_w_d_s`
--

CREATE TABLE `p_w_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `type_disability` varchar(255) NOT NULL,
  `cause_disablity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_w_d_s`
--

INSERT INTO `p_w_d_s` (`id`, `name`, `sex`, `civil_status`, `birthdate`, `type_disability`, `cause_disablity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Talagtag, Jeuell  R.', '34', 'Separated', '25-01-1989', '[\"Intellectual Disability\"]', '[\"Congenital \\/ Inborn\",\"ADHD\"]', 1, '2023-01-08 10:47:10', '2023-01-08 10:57:22'),
(2, 'Priela, Aldrin Glenn  I.', '26', 'Live-In', '14-01-1997', '[\"Speech and Language Impairment\"]', '[\"Injury\"]', 0, '2023-01-08 10:48:40', '2023-01-08 10:48:40'),
(3, 'Sebullen, Leamae  T.', '31', 'Married', '19-08-1992', '[\"Intellectual Disability\"]', '[\"Autism\"]', 0, '2023-01-08 10:52:53', '2023-01-08 10:52:53'),
(4, 'Panugao, Doquisa  C.', '22', 'Single', '19-03-2001', '[\"Learning Disability\"]', '[\"Injury\"]', 0, '2023-01-08 10:54:13', '2023-01-08 10:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `request_certificates`
--

CREATE TABLE `request_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_resident_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `doctype` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `referenceNumber` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) NOT NULL,
  `otherPurpose` varchar(255) DEFAULT NULL,
  `status` enum('pending','declined','approved') NOT NULL DEFAULT 'pending',
  `status2` tinyint(1) NOT NULL DEFAULT 0,
  `screenshot` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `orNum` varchar(255) DEFAULT NULL,
  `cnNum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_certificates`
--

INSERT INTO `request_certificates` (`id`, `admin_resident_id`, `fullname`, `doctype`, `paymentMethod`, `contact_number`, `referenceNumber`, `purpose`, `otherPurpose`, `status`, `status2`, `screenshot`, `created_at`, `updated_at`, `remarks`, `orNum`, `cnNum`) VALUES
(35, 13, 'Doquisa Claro Panugao', 'Barangay Clearance', 'Gcash', '9876543212', '9876545678987', 'Others please specify', 'As a supporting document', 'approved', 0, '5513ec9a915f3827a32befeab3048bd8_IMG_20221229_110005.jpg', '2023-01-08 10:38:23', '2023-03-26 08:20:40', 'No Derogatory Found', '121212', '32323'),
(36, 16, 'Jeuell Ramos Talagtag', 'Certificate of Indigency', 'Cash on Pick-up', '9878656345', NULL, 'Proof of belonging into indigent family', NULL, 'approved', 0, NULL, '2023-01-08 10:38:57', '2023-03-26 07:16:08', NULL, NULL, NULL),
(37, 14, 'Leamae Tanggapan Sebullen', 'Certificate of Residency', 'Cash on Pick-up', '9878765123', NULL, 'Valid proof of identity', NULL, 'approved', 0, NULL, '2023-01-08 10:39:31', '2023-03-26 07:15:54', NULL, '212121', '43435453'),
(38, 15, 'Aldrin Glenn  Priela', 'Barangay Clearance', 'Gcash', '9976543457', '8765456765565', 'availment of government identification cards', NULL, 'pending', 0, '3d4293ee247a26af6a3a4014d7d9821a_IMG_20221229_110005.jpg', '2023-03-26 07:20:58', '2023-03-26 07:20:58', NULL, NULL, NULL),
(39, 14, 'Leamae Tanggapan Sebullen', 'Certificate of Indigency', 'Cash on Pick-up', '9955664456', NULL, 'proof of belonging into indigent family', NULL, 'pending', 0, NULL, '2023-03-26 07:33:42', '2023-03-26 07:33:42', NULL, NULL, NULL),
(40, 13, 'Doquisa  Panugao', 'Certificate of Residency', 'Cash on Pick-up', '9091389917', NULL, 'valid proof of identity', NULL, 'pending', 0, NULL, '2023-03-26 07:34:46', '2023-03-26 07:34:46', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resident_user`
--

CREATE TABLE `resident_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senior_citizens`
--

CREATE TABLE `senior_citizens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `osca_no` varchar(255) NOT NULL,
  `date_issue` varchar(255) NOT NULL,
  `senior_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barangay_name` varchar(255) NOT NULL,
  `barangay_logo` varchar(255) NOT NULL,
  `barangay_logo2` varchar(255) NOT NULL,
  `brgy_location` varchar(255) NOT NULL,
  `brgy_email` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `vission` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `goal` varchar(255) NOT NULL,
  `system_logo` varchar(255) NOT NULL,
  `system_title` varchar(255) NOT NULL,
  `about_section1` longtext NOT NULL,
  `about_section2` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `barangay_name`, `barangay_logo`, `barangay_logo2`, `brgy_location`, `brgy_email`, `description`, `vission`, `mission`, `goal`, `system_logo`, `system_title`, `about_section1`, `about_section2`, `created_at`, `updated_at`) VALUES
(1, 'Paloyon Oriental', 'images/njqFOWoBsGXJAdgKWX9RYBorr65kdpuw0Ge0pn7W.png', 'images/YGLBZJGcDYaE5ZO3tja8LannouWvPu0PI1NS03xe.png', 'Paloyon Oriental, Camarines Sur', 'palyonoriental@gmail.com', 'Barangay Paloyon Oriental', 'Envisions a Progressive, Healthy, Peaceful community, empowered constituents and collectively participating in decision making gearing towards good governance.', 'To formulate and enforce Transparent Plans, Programs and Regulations for the protection of the interest of the community with regards to Environment, Education, Infrastructure, Health, Social Services, Moral, Financial, Peace and Order.', 'Our major goal is to providethem social, economic, environmental and infrastructure assistance under the spirit of transperacy and good governance.', 'images/PY2NVd1NNEh4XUqVp3fn9HXOppMBiBckUttvjYbw.jpg', 'Web-Based Management System with SMS Notification of Barangay Paloyon Oriental', 'Paloyon Oriental is a barangay in the municipality of Nabua, in the province of Camarines Sur. Its population as determined by the 2020 Census was 699. This represented 0.81% of the total population of Nabua.', 'Historical population\r\nThe population of Paloyon Oriental grew from 694 in 1990 to 699 in 2020, an increase of 5 people over the course of 30 years. The latest census figures in 2020 denote a negative growth rate of 3.58%, or a decrease of 132 people, from the previous population of 831 in 2015.', '2022-11-28 07:06:24', '2023-01-08 19:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `smsmessages`
--

CREATE TABLE `smsmessages` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `userType` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email_verified_at`, `password`, `userType`, `status`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'admin', NULL, '$2y$10$T9510rJbTwPH3bfYb4vFnOuggHTgDjlOCwi5SLtxGH3iNrGmr7Sli', 0, 1, NULL, '2022-11-28 07:06:25', '2022-11-28 07:06:25', NULL),
(46, 'sherrey12', NULL, '$2y$10$TzBNj5s0JfLoaR3bZ6dzceUO9yAB56vSwUq4MnhbKdo1b5XDd4Gdi', 0, 0, NULL, '2023-01-08 10:16:14', '2023-01-08 10:16:14', 'Barangay Secretary'),
(47, 'okidoki', NULL, '$2y$10$nWOg/iVLaHA3H7Boxcr2IecBt30Ba0K2KKH1n6.Amq6/4Mf6i.8Oi', 1, 1, NULL, '2023-01-08 10:18:02', '2023-01-08 10:18:02', NULL),
(48, 'leamae12', NULL, '$2y$10$.LLfTNRCtaKgViL8OEq0l.rzTCHZ9CIoNceptU3UlF.xrs4L8iVNq', 1, 0, NULL, '2023-01-08 10:23:54', '2023-01-08 10:23:54', NULL),
(49, 'aldrin32', NULL, '$2y$10$wAr51ZteYSktF2kyr0oaA.DQWSi0h8wu5JhlJ8x.Tr5Ezjc6BpM6q', 1, 0, NULL, '2023-01-08 10:25:43', '2023-01-08 10:25:43', NULL),
(50, 'jeuell89', NULL, '$2y$10$UYh5BQBGzmVt.DwDkY6jrOrxLqY90MRD.I3eA5oumf1fIzqANjhsW', 1, 1, NULL, '2023-01-08 10:32:09', '2023-01-08 10:32:09', NULL),
(51, 'aniya90', NULL, '$2y$10$5KKkj2ZTTLCpRtLTNW7hwuUy5y/PVwdhFbsggdiOGqP6ERMf4IUX6', 1, 0, NULL, '2023-01-08 10:36:14', '2023-01-08 10:36:14', NULL),
(52, 'ricky10', NULL, '$2y$10$2FZFlPDrkN8OOdb4PrNCPuQwzxHAQ93fQeVMYHO/C58aakFJeX3xq', 0, 0, NULL, '2023-03-26 06:46:02', '2023-03-26 06:46:02', 'Barangay Kagawad'),
(53, 'lorna09', NULL, '$2y$10$uHIzmEK4UmYEatwC4.3y1.aLHO4HUF7oqGoBFgBDiNs82VvlHhJEu', 0, 0, NULL, '2023-03-26 07:59:08', '2023-03-26 07:59:08', 'Barangay Treasurer');

-- --------------------------------------------------------

--
-- Table structure for table `user_registrations`
--

CREATE TABLE `user_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house_no` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `work_status` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `image_id_birth` varchar(255) DEFAULT NULL,
  `userType` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `vaccine_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dose` varchar(255) DEFAULT NULL,
  `date_first` varchar(255) NOT NULL,
  `date_second` varchar(255) DEFAULT NULL,
  `first_booster` varchar(255) DEFAULT NULL,
  `second_booster` varchar(255) DEFAULT NULL,
  `first_booster_date` varchar(255) DEFAULT NULL,
  `second_booster_date` varchar(255) DEFAULT NULL,
  `vaccine_image` varchar(255) DEFAULT NULL,
  `booster_image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `name`, `age`, `birthdate`, `vaccine_type`, `address`, `dose`, `date_first`, `date_second`, `first_booster`, `second_booster`, `first_booster_date`, `second_booster_date`, `vaccine_image`, `booster_image`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Jeuell, Talagtag  R.', 34, '25-01-1989', 'AstraZeneca', 'Bato Camarines Sur', 'With Booster', '2022-12-12', '2023-12-01', 'Pfizer', 'AstraZeneca', '2022-12-12', '2022-12-12', 'images/tFxcABH9e1CScmWrGwnSEpfFkAP7bRXsA571W6QZ.jpg', 'images/NlJWoEeJnJkXUqDN0HgJL1ZzZnCWDEx1iwBCm9Ja.jpg', 1, '2023-01-08 10:46:51', '2023-01-08 10:55:48'),
(18, 'Aldrin Glenn, Priela  I.', 26, '14-01-1997', 'Janssen', 'Bato Camarines Sur', 'Fully Vaccinated', '2022-03-31', '2022-12-09', NULL, NULL, NULL, NULL, 'images/hhqUSDJY6qQMOi3WU06wHGhrU2AeknSlp1lxrbA1.jpg', NULL, 1, '2023-01-08 10:48:29', '2023-01-08 10:56:17'),
(19, 'Leamae, Sebullen  T.', 31, '19-08-1992', 'Sinovac', 'Nabua, Camarines Sur', 'Partially Vaccinated', '2022-09-09', NULL, NULL, NULL, NULL, NULL, 'images/A4B4c9KSCm8P5blLgvbXuZtpFMb0761XESdx1rBX.jpg', NULL, 1, '2023-01-08 10:51:35', '2023-01-08 10:56:05'),
(20, 'Doquisa, Panugao  C.', 22, '19-03-2001', 'Moderna', 'Iriga City', 'Partially Vaccinated', '2002-12-12', NULL, NULL, NULL, NULL, NULL, 'images/PY2CXOkE98wnFqhqxu5t7hXlAlFE5xQVwHnbuItz.jpg', NULL, 1, '2023-01-08 10:54:02', '2023-01-08 10:56:29'),
(21, 'Doquisa, Panugao  C.', 22, '19-03-2001', 'Moderna', 'Iriga City', 'Partially Vaccinated', '2002-12-12', NULL, NULL, NULL, NULL, NULL, 'images/yFY93kg5vxfCmRI8ubJESYC08KV622yRQmJjPeoD.jpg', NULL, 0, '2023-01-08 10:54:02', '2023-01-08 10:54:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_index` (`user_id`);

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_residents`
--
ALTER TABLE `admin_residents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_residents_user_id_index` (`user_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_officials`
--
ALTER TABLE `barangay_officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotters`
--
ALTER TABLE `blotters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freq_askeds`
--
ALTER TABLE `freq_askeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freq_asked_titles`
--
ALTER TABLE `freq_asked_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pregnants`
--
ALTER TABLE `pregnants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_w_d_s`
--
ALTER TABLE `p_w_d_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_certificates`
--
ALTER TABLE `request_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_user`
--
ALTER TABLE `resident_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senior_citizens`
--
ALTER TABLE `senior_citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smsmessages`
--
ALTER TABLE `smsmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registrations`
--
ALTER TABLE `user_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_residents`
--
ALTER TABLE `admin_residents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay_officials`
--
ALTER TABLE `barangay_officials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blotters`
--
ALTER TABLE `blotters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `freq_askeds`
--
ALTER TABLE `freq_askeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `freq_asked_titles`
--
ALTER TABLE `freq_asked_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pregnants`
--
ALTER TABLE `pregnants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_w_d_s`
--
ALTER TABLE `p_w_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_certificates`
--
ALTER TABLE `request_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `resident_user`
--
ALTER TABLE `resident_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senior_citizens`
--
ALTER TABLE `senior_citizens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smsmessages`
--
ALTER TABLE `smsmessages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_registrations`
--
ALTER TABLE `user_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
