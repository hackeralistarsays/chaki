-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 05:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postal_code` int(11) NOT NULL,
  `postal_address` int(11) NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `postal_code`, `postal_address`, `street`, `town`, `country`, `created_at`, `updated_at`) VALUES
(1, 99, 90130, 'Kavatanzou', 'Nunguni', 'Kenya', '2020-02-28 06:14:52', '2020-02-28 06:14:52'),
(2, 89, 90132, 'Nzaui', 'Emali', 'Kenya', '2020-02-28 06:17:50', '2020-02-28 06:17:50'),
(3, 78, 10003, 'mumbuni', 'Mbooni', 'Kenya', '2020-03-01 05:34:22', '2020-03-01 05:34:22'),
(4, 45, 8392, 'Kagumo', 'Kitundumo', 'Kenya', '2020-03-02 23:05:48', '2020-03-02 23:05:48'),
(5, 10, 46624, 'Imatra', 'Imara daima', 'Kenya', '2020-03-02 23:44:58', '2020-03-02 23:44:58'),
(6, 90, 29212, 'Sultan', 'Sultan Hamud', 'Kenya', '2020-03-05 19:26:55', '2020-03-05 19:26:55'),
(7, 21, 370, 'Kathangathini', 'Nunguni', 'Kenya', '2020-03-05 19:32:17', '2020-03-05 19:32:17'),
(8, 76, 31234, 'kivandini', 'Masaku', 'Kenya', '2020-03-05 19:36:11', '2020-03-05 19:36:11'),
(9, 90, 32942, 'mwea', 'Embu', 'Kenya', '2020-03-05 19:42:02', '2020-03-05 19:42:02'),
(10, 83, 74242, 'kibwezi', 'Kibwezi', 'Kenya', '2020-03-05 19:46:26', '2020-03-05 19:46:26'),
(11, 67, 90743, 'njoro', 'Nakuru', 'Kenya', '2020-03-07 05:46:51', '2020-03-07 05:46:51'),
(12, 73, 90323, 'Kateki', 'Mwea', 'Kenya', '2020-03-08 21:13:50', '2020-03-08 21:13:50'),
(13, 52, 1000, 'kawangware', 'Nairobi', 'Kenya', '2020-10-20 08:37:09', '2020-10-20 08:37:09'),
(14, 90, 7987, 'Njoro', 'Nakuru', 'Kenya', '2020-10-20 10:13:38', '2020-10-20 10:13:38'),
(15, 78, 7433, 'sultan', 'Makueni', 'Kenya', '2020-10-20 10:36:22', '2020-10-20 10:36:22'),
(16, 73, 10223, 'Kavatanzou', 'Nunguni', 'Kenya', '2020-10-20 10:46:40', '2020-10-20 10:46:40'),
(17, 53, 67903, 'njoro', 'Nunguni', 'Kenya', '2020-10-21 11:32:17', '2020-10-21 11:32:17'),
(18, 987, 76543, 'kawangware', 'Nairobi', 'Kenya', '2020-10-22 10:39:12', '2020-10-22 10:39:12'),
(19, 99, 90130, 'Nunguni', 'Nunguni', 'Kenya', '2020-11-12 10:55:45', '2020-11-12 10:55:45'),
(20, 67, 87646, 'Nunguni', 'Nunguni', 'Kenya', '2020-11-15 07:23:57', '2020-11-15 07:23:57'),
(21, 73, 39483, 'Kangemi', 'Nairobi', 'Kenya', '2020-11-15 07:25:48', '2020-11-15 07:25:48'),
(22, 78, 30283, 'meru', 'Meru', 'Kenya', '2020-11-28 08:38:56', '2020-11-28 08:38:56'),
(23, 56, 84823, 'Meru', 'Meru', 'Kenya', '2020-12-06 14:18:41', '2020-12-06 14:18:41'),
(24, 78, 38372, 'Nunguni', 'Nunguni', 'Kenya', '2020-12-16 16:25:15', '2020-12-16 16:25:15'),
(25, 45, 43049, 'Kangemi', 'Nairobi', 'Kenya', '2020-12-16 16:37:38', '2020-12-16 16:37:38'),
(26, 78, 87657, 'Kangemi', 'Nairobi', 'Kenya', '2020-12-17 02:14:52', '2020-12-17 02:14:52'),
(27, 93, 49482, 'Kibwezi', 'Makueni', 'Kenya', '2020-12-17 03:00:44', '2020-12-17 03:00:44'),
(28, 99, 90130, 'Nunguni', 'Nunguni', 'Kenya', '2020-12-17 03:04:23', '2020-12-17 03:04:23'),
(29, 34, 84042, 'Nunguni', 'Nairobi', 'Kenya', '2020-12-17 03:06:10', '2020-12-17 03:06:10'),
(30, 48, 93091, 'Nyando', 'Kisumu', 'Kenya', '2020-12-17 03:08:06', '2020-12-17 03:08:06'),
(31, 67, 94932, 'Kangemi', 'Nunguni', 'Kenya', '2020-12-17 03:09:57', '2020-12-17 03:09:57'),
(32, 49, 95931, 'Kangemi', 'Nunguni', 'Kenya', '2020-12-17 03:11:42', '2020-12-17 03:11:42'),
(33, 44, 56442, 'Nunguni', 'Nairobi', 'Kenya', '2020-12-17 03:14:17', '2020-12-17 03:14:17'),
(34, 565, 56642, 'Kangemi', 'Nairobi', 'Kenya', '2020-12-17 03:15:43', '2020-12-17 03:15:43'),
(35, 44, 44333, 'Kangemi', 'Nairobi', 'Kenya', '2020-12-17 03:19:26', '2020-12-17 03:19:26'),
(36, 65, 74742, 'Kangemi', 'Nunguni', 'Kenya', '2020-12-17 03:22:33', '2020-12-17 03:22:33'),
(37, 445, 79453, 'Kangemi', 'Nunguni', 'Kenya', '2020-12-17 03:24:11', '2020-12-17 03:24:11'),
(38, 56, 54453, 'Nunguni', 'Nunguni', 'Kenya', '2020-12-17 03:26:16', '2020-12-17 03:26:16'),
(39, 56, 54453, 'Nunguni', 'Nunguni', 'Kenya', '2020-12-17 03:26:17', '2020-12-17 03:26:17'),
(40, 433, 35434, 'Nunguni', 'Makueni', 'Kenya', '2020-12-17 03:27:52', '2020-12-17 03:27:52'),
(41, 43, 78874, 'Kangemi', 'Nunguni', 'Kenya', '2020-12-17 03:29:24', '2020-12-17 03:29:24'),
(42, 90, 44434, 'Nunguni', 'Nunguni', 'Kenya', '2020-12-17 03:33:45', '2020-12-17 03:33:45'),
(43, 54, 45455, 'meru', 'Meru', 'Kenya', '2020-12-17 03:37:15', '2020-12-17 03:37:15'),
(44, 566, 57334, 'Kangemi', 'Nairobi', 'Kenya', '2020-12-17 03:38:55', '2020-12-17 03:38:55'),
(45, 45, 77097, 'Nunguni', 'Nunguni', 'Kenya', '2020-12-17 03:40:26', '2020-12-17 03:40:26'),
(46, 76, 76559, 'Kangemi', 'Nairobi', 'Kenya', '2020-12-17 03:42:00', '2020-12-17 03:42:00'),
(47, 62, 37372, 'meru', 'Nunguni', 'Kenya', '2020-12-17 09:04:59', '2020-12-17 09:04:59'),
(48, 100, 100, 'nope', 'Nairobi', 'Kenya', '2021-03-08 13:55:42', '2021-03-08 13:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplinary_cases`
--

CREATE TABLE `disciplinary_cases` (
  `case_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `student_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `case_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_reported` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_taked` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_action_taken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_taken_by` bigint(20) UNSIGNED DEFAULT NULL,
  `case_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uncleared',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disciplinary_cases`
--

INSERT INTO `disciplinary_cases` (`case_id`, `student_id`, `student_class`, `teacher_id`, `case_category`, `case_description`, `date_reported`, `action_taked`, `date_action_taken`, `action_taken_by`, `case_status`, `created_at`, `updated_at`) VALUES
(1, 8, '1E', 1, 'Absentism', 'Student absent on date 21/09/2019', '2020-09-26', 'Brought parent', '28-09-2020', 1, 'cleared', NULL, NULL),
(2, 10, '1E', 1, 'Bullying', 'The student bullied a fellow form 1 student.', '2020-09-26', 'Brought parent', '28-09-2020', 1, 'cleared', NULL, NULL),
(3, 11, '1W', 1, 'Theft', 'stole money belonging to another student.', '2020-09-26', 'Brought parent', '28-09-2020', 1, 'cleared', NULL, NULL),
(4, 1, '1W', 1, 'Making noise', 'Student disturbs others during personal studies.', '2020-09-26', 'Brought parent', '28-09-2020', 1, 'cleared', NULL, NULL),
(5, 6, '1E', 1, 'Making noise', 'Student makes noise in class', '2020-09-28', 'given punishment', '28-09-2020', 1, 'cleared', NULL, NULL),
(6, 8, '1E', 1, 'Absentism', 'Student was absent on 2/09/2020', '2020-09-28', NULL, NULL, NULL, 'uncleared', NULL, NULL),
(7, 10, '1E', 1, 'Theft', 'Student stole money belonging to another student', '2020-09-28', 'Student repaid', '28-09-2020', 1, 'cleared', NULL, NULL),
(8, 8, '1E', 1, 'Absentism', 'The student was absent on date 24-11-2020', '2020-11-28', NULL, NULL, NULL, 'uncleared', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dormitories`
--

CREATE TABLE `dormitories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dormitories`
--

INSERT INTO `dormitories` (`id`, `name`, `preferred_gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tsavo', 'female', 'Good', '2020-04-07 14:00:08', '2020-04-07 14:00:08'),
(2, 'Turkana', 'female', 'Good', '2020-04-07 14:06:57', '2020-04-07 14:06:57'),
(3, 'Victoria', 'male', 'Good', '2020-12-10 17:26:59', '2020-12-10 17:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `dormitories_rooms`
--

CREATE TABLE `dormitories_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dorm_id` bigint(20) UNSIGNED NOT NULL,
  `room_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dormitories_rooms`
--

INSERT INTO `dormitories_rooms` (`id`, `dorm_id`, `room_no`, `room_capacity`, `room_status`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 22, 'Good', 'YES', NULL, NULL),
(2, 1, '2', 2, 'Good', 'NO', NULL, NULL),
(3, 1, '3', 20, 'Good', 'NO', NULL, NULL),
(4, 1, '2', 20, 'Good', 'YES', NULL, NULL),
(5, 2, 'T1', 10, 'Good', 'NO', NULL, NULL),
(6, 2, 'T2', 12, 'Good', 'NO', NULL, NULL),
(7, 2, 'T3', 10, 'Good', 'NO', NULL, NULL),
(8, 1, '1', 35, 'Good', 'NO', NULL, NULL),
(9, 1, '5', 25, 'Good', 'NO', NULL, NULL),
(10, 1, '10', 5, 'Good', 'NO', NULL, NULL),
(11, 3, '1', 10, 'Good', 'NO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_sessions`
--

CREATE TABLE `exam_sessions` (
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `exam_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_start_date` date NOT NULL,
  `exam_end_date` date NOT NULL,
  `exam_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_sessions`
--

INSERT INTO `exam_sessions` (`exam_id`, `term_id`, `exam_type`, `exam_start_date`, `exam_end_date`, `exam_status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Opener exam', '2020-10-12', '2020-11-28', 'past', NULL, NULL),
(4, 1, 'Mid term exam', '2020-11-29', '2020-11-30', 'past', NULL, NULL),
(6, 1, 'End term exam', '2020-12-05', '2020-12-17', 'past', NULL, NULL),
(7, 2, 'Mid term exam', '2021-03-08', '2021-03-10', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_balances`
--

CREATE TABLE `fee_balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `total_fees` decimal(15,2) NOT NULL,
  `amount_paid` decimal(15,2) NOT NULL,
  `balance` decimal(15,2) NOT NULL,
  `overpay` decimal(15,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_balances`
--

INSERT INTO `fee_balances` (`id`, `student_id`, `total_fees`, `amount_paid`, `balance`, `overpay`, `created_at`, `updated_at`) VALUES
(1, 7, '25300.00', '24800.00', '500.00', '0.00', NULL, NULL),
(2, 8, '52000.00', '35005.00', '16995.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(3, 4, '52000.00', '125300.00', '0.00', '73300.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(4, 10, '52000.00', '26000.00', '26000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(5, 9, '52000.00', '29302.00', '22698.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(6, 1, '50000.00', '12000.00', '38000.00', '0.00', '2021-01-09 07:35:41', '2021-01-09 07:35:41'),
(7, 11, '52000.00', '27400.00', '24600.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(8, 5, '52000.00', '35500.00', '16500.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(9, 2, '52000.00', '25000.00', '27000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(10, 12, '52000.00', '8000.00', '44000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(11, 6, '52000.00', '25000.00', '27000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(12, 15, '25000.00', '6000.00', '19000.00', '0.00', NULL, NULL),
(13, 17, '25000.00', '30000.00', '0.00', '5000.00', NULL, NULL),
(14, 18, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(15, 19, '25000.00', '7000.00', '18000.00', '0.00', NULL, NULL),
(16, 21, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(17, 20, '30000.00', '0.00', '30000.00', '0.00', NULL, NULL),
(18, 14, '30000.00', '2.00', '29998.00', '0.00', NULL, NULL),
(19, 13, '30000.00', '0.00', '30000.00', '0.00', NULL, NULL),
(20, 22, '50000.00', '0.00', '50000.00', '0.00', '2021-01-09 07:35:41', '2021-01-09 07:35:41'),
(21, 23, '30000.00', '0.00', '30000.00', '0.00', NULL, NULL),
(22, 24, '30000.00', '0.00', '30000.00', '0.00', NULL, NULL),
(23, 25, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(24, 26, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(25, 27, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(26, 28, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(27, 29, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(28, 30, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(29, 31, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(30, 32, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(31, 33, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(32, 34, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(33, 35, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(34, 36, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(35, 37, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(36, 38, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(37, 39, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(38, 40, '52000.00', '0.00', '52000.00', '0.00', '2021-01-09 07:34:59', '2021-01-09 07:34:59'),
(39, 41, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(40, 42, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(41, 43, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(42, 44, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(43, 45, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(44, 46, '30000.00', '0.00', '30000.00', '0.00', NULL, NULL),
(45, 47, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(46, 48, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(47, 49, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(48, 50, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(49, 51, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL),
(50, 52, '50000.00', '0.00', '50000.00', '0.00', '2021-01-09 07:35:41', '2021-01-09 07:35:41'),
(51, 53, '25000.00', '0.00', '25000.00', '0.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fee_structures`
--

CREATE TABLE `fee_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` int(11) NOT NULL,
  `fee` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_structures`
--

INSERT INTO `fee_structures` (`id`, `year`, `class`, `term`, `fee`, `created_at`, `updated_at`) VALUES
(1, 2020, 'Form 1', 1, '27000.00', '2020-03-18 06:22:54', '2020-03-18 06:22:54'),
(2, 2020, 'Form 2', 1, '24000.00', '2020-03-18 06:22:54', '2020-03-18 06:22:54'),
(3, 2020, 'Form 3', 1, '30000.00', '2020-03-18 06:22:54', '2020-03-18 06:22:54'),
(4, 2020, 'Form 4', 1, '25000.00', '2020-03-18 06:22:54', '2020-03-18 06:22:54'),
(5, 2021, 'Form 1', 2, '25000.00', '2021-01-09 07:34:58', '2021-01-09 07:34:58'),
(6, 2021, 'Form 2', 2, '26000.00', '2021-01-09 07:35:41', '2021-01-09 07:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `fee_transactions`
--

CREATE TABLE `fee_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `date_recorded` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_transactions`
--

INSERT INTO `fee_transactions` (`id`, `student_id`, `branch`, `transaction_no`, `date_paid`, `amount`, `date_recorded`, `emp_id`, `created_at`, `updated_at`) VALUES
(1, 7, 'KCB Egerton University', '35543rffd3523', '2020-03-11', '4500.00', '2020-03-29 01:03:13', 3, NULL, NULL),
(2, 7, 'KCB Egerton University', 'hkgvsdfkhd443', '2020-03-04', '800.00', '2020-03-29 01:03:35', 3, NULL, NULL),
(4, 8, 'KCB Egerton University', 'hgfhxgd4224', '2020-03-10', '21000.00', '2020-03-29 01:03:04', 3, NULL, NULL),
(5, 4, 'KCB Industrial area Nairobi', 'rtfgr463tf4t433', '2020-03-09', '6000.00', '2020-03-29 01:03:08', 3, NULL, NULL),
(6, 4, 'KCB Egerton University', 'kjfhdxgs5733', '2020-03-18', '1300.00', '2020-03-29 01:03:23', 3, NULL, NULL),
(7, 8, 'KCB Egerton University', 'gyjtyrts3653', '2020-03-18', '10000.00', '2020-03-29 01:03:59', 3, NULL, NULL),
(8, 10, 'KCB Egerton University', 'rexswtyty454', '2020-03-11', '18000.00', '2020-03-29 01:03:34', 3, NULL, NULL),
(9, 9, 'KCB Egerton University', '646546dfgdt44', '2020-03-19', '5000.00', '2020-03-29 09:03:56', 3, NULL, NULL),
(10, 7, 'KCB Egerton University', 'yftq3773gdu33', '2020-03-18', '7000.00', '2020-03-29 09:03:30', 3, NULL, NULL),
(11, 1, 'KCB Industrial area Nairobi', 'jf46533zwawa', '2020-03-26', '12000.00', '2020-03-29 09:03:28', 3, NULL, NULL),
(12, 11, 'KCB Moi Avenue Nairobi', 'gfdr456xrfe3', '2020-03-10', '15000.00', '2020-03-29 09:03:01', 3, NULL, NULL),
(13, 5, 'KCB Industrial area Nairobi', 'dvgdd34w5223', '2020-03-19', '6300.00', '2020-03-29 09:03:28', 3, NULL, NULL),
(14, 7, 'KCB Nakuru', 'jhjgsf73834sd', '2020-03-18', '6000.00', '2020-03-29 09:03:05', 3, NULL, NULL),
(15, 7, 'KCB Nakuru', '3287yr38w94', '2020-03-04', '5000.00', '2020-03-29 10:03:17', 3, NULL, NULL),
(16, 9, 'KCB Nakuru', '6327db3h7328', '2020-03-18', '18000.00', '2020-03-29 10:03:08', 3, NULL, NULL),
(17, 10, 'KCB Nakuru', 'hukds8249422', '2020-03-17', '7000.00', '2020-03-29 10:03:40', 3, NULL, NULL),
(18, 5, 'KCB Industrial area Nairobi', 'hghgf382632d', '2020-03-25', '18000.00', '2020-03-30 12:03:15', 3, NULL, NULL),
(19, 2, 'KCB Egerton University', '1dghg78s3sh3', '2020-03-19', '15000.00', '2020-03-30 12:03:43', 3, NULL, NULL),
(20, 12, 'KCB Nakuru', '76i5g55v88h', '2020-03-19', '8000.00', '2020-03-30 12:03:43', 3, NULL, NULL),
(21, 2, 'KCB Eldoret', 'jhbsfc83jnd83d2', '2020-03-04', '10000.00', '2020-03-30 01:03:39', 3, NULL, NULL),
(22, 4, 'KCB Moi Avenue Nairobi', 'fdgh5632zvdz3', '2020-03-11', '12000.00', '2020-03-30 05:03:58', 3, NULL, NULL),
(23, 11, 'KCB Moi Avenue Nairobi', 'dsg4f4g4ggfh5', '2020-03-18', '9300.00', '2020-03-31 12:03:02', 3, NULL, NULL),
(24, 6, 'KCB Egerton University', 'khxje9dj39432n', '2020-03-19', '6000.00', '2020-03-31 12:03:48', 3, NULL, NULL),
(25, 7, 'KCB Moi Avenue Nairobi', 'liefuie8488493jj', '2020-03-12', '1000.00', '2020-03-31 11:03:57', 3, NULL, NULL),
(26, 6, 'KCB Industrial area Nairobi', 'lijjhsa7o378d3', '2020-04-01', '7000.00', '2020-04-06 04:04:06', 3, NULL, NULL),
(27, 6, 'KCB Eldoret', '6738dj367t3dd', '2020-04-03', '3000.00', '2020-04-06 04:04:11', 3, NULL, NULL),
(28, 5, 'KCB Industrial area Nairobi', 'hjgttyyyt5776', '2020-10-16', '7000.00', '2020-10-23 08:10:34', 1, NULL, NULL),
(29, 5, 'KCB Kenyatta Avenue Nakuru', '67543sdfgh87', '2020-10-15', '1200.00', '2020-10-23 08:10:26', 1, NULL, NULL),
(30, 6, 'KCB Industrial area Nairobi', 'hfgd544aszx', '2020-10-01', '6000.00', '2020-10-23 09:10:06', 1, NULL, NULL),
(31, 9, 'KCB Egerton University', 'gf45673454', '2020-10-02', '6300.00', '2020-10-23 09:10:05', 1, NULL, NULL),
(32, 7, 'KCB Nakuru', 'kwsyuiow9832', '2020-10-22', '300.00', '2020-10-23 10:10:35', 1, NULL, NULL),
(33, 7, 'KCB Nakuru', 'hjgf56789v', '2020-10-07', '200.00', '2020-10-23 10:10:34', 1, NULL, NULL),
(34, 10, 'KCB Industrial area Nairobi', 'ytrr6548876', '2020-10-07', '1000.00', '2020-10-23 11:10:41', 1, NULL, NULL),
(35, 5, 'KCB Egerton University', 't7765rfgtr45', '2020-10-09', '3000.00', '2020-10-23 11:10:45', 1, NULL, NULL),
(36, 11, 'KCB Moi Avenue Nairobi', 'uykqw6743893', '2020-10-08', '3100.00', '2020-10-23 11:10:18', 1, NULL, NULL),
(37, 8, 'KCB Nakuru', 'hku5673jds', '2020-10-08', '4000.00', '2020-10-24 09:10:35', 1, NULL, NULL),
(38, 4, 'KCB Industrial area Nairobi', 'jluyfmi76ye', '2020-10-30', '6000.00', '2020-10-30 07:10:34', 1, NULL, NULL),
(39, 6, 'KCB Egerton University', 'jkhg23456gf', '2020-11-03', '3000.00', '2020-11-10 08:11:50', 1, NULL, NULL),
(40, 15, 'KCB Industrial area Nairobi', 'jhgfd34567hg', '2020-11-04', '6000.00', '2020-11-10 08:11:50', 1, NULL, NULL),
(41, 17, 'KCB Moi Avenue Nairobi', 'ngfds3456jhg', '2020-11-07', '15000.00', '2020-11-10 08:11:18', 1, NULL, NULL),
(42, 17, 'KCB Eldoret', '9986fgy4s5', '2020-11-07', '15000.00', '2020-11-10 08:11:37', 1, NULL, NULL),
(43, 19, 'KCB Egerton University', '8765vbjyt45', '2020-11-06', '7000.00', '2020-11-10 08:11:37', 1, NULL, NULL),
(44, 4, 'KCB Egerton University', 'jhgf34567ggg', '2020-11-04', '100000.00', '2020-11-15 06:11:39', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mailtostudentmessages`
--

CREATE TABLE `mailtostudentmessages` (
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `from_teacher_id` bigint(20) UNSIGNED NOT NULL,
  `to_parent_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_send` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailtostudentmessages`
--

INSERT INTO `mailtostudentmessages` (`message_id`, `student_id`, `from_teacher_id`, `to_parent_id`, `subject`, `message_body`, `date_send`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 9, 'Form 1E meeting', 'There will be form 1E parents meeting on 31/11/2020 for purposes of academic discussion. You are thereby requested to attend.', '2020-10-22 11:49:03am', NULL, NULL),
(3, 4, 1, 6, 'Form 1 meeting', 'There will be a form 1 meeting on 22/11/2020. Kindly purpose to attend.', '2020-10-22 12:14:03pm', NULL, NULL),
(4, 8, 1, 13, 'Form 1 meeting', '123456', '2020-12-17 10:23:34', '2020-12-17 07:23:34', '2020-12-17 07:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_02_16_045401_classes', 1),
(3, '2020_02_16_050934_subjects', 1),
(4, '2020_02_16_051840_addresses', 1),
(5, '2020_02_16_052604_school_details', 1),
(6, '2020_02_16_190918_password_resets', 1),
(7, '2020_02_22_180452_non_teaching_staff', 1),
(8, '2020_02_24_051317_parents', 1),
(9, '2020_02_24_141011_students', 1),
(10, '2020_02_24_141150_student_parent', 1),
(11, '2020_02_24_141315_student_address', 1),
(12, '2020_02_28_020821_teachers', 1),
(13, '2020_02_28_021621_roles_and_responsibilities', 1),
(14, '2020_02_29_002933_teacher_classes', 1),
(15, '2020_03_01_213831_student_marks', 1),
(16, '2020_03_05_044822_student_marks_ranking', 1),
(17, '2020_03_18_043753_fee_structures', 1),
(18, '2020_03_28_231420_fee_transactions', 1),
(19, '2020_03_28_232421_fee_balances', 1),
(20, '2020_04_06_211700_dormitories', 1),
(21, '2020_04_17_191118_dormitories_rooms', 1),
(22, '2020_04_22_182740_student_dorm_rooms', 1),
(23, '2020_09_26_202349_disciplinary_cases', 1),
(24, '2020_09_30_190707_student_classes', 1),
(25, '2020_10_06_144521_term_sessions', 1),
(26, '2020_10_09_032002_exam_session', 1),
(27, '2020_10_22_114819_mail_to_student_messages', 1),
(28, '2020_10_24_192631_users', 1),
(29, '2020_11_10_200124_out_of_sessions', 1),
(30, '2020_11_10_200257_mpesa_transactions', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_transactions`
--

CREATE TABLE `mpesa_transactions` (
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `transaction_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mpesa_transactions`
--

INSERT INTO `mpesa_transactions` (`transaction_id`, `student_id`, `parent_id`, `transaction_code`, `phone_no`, `transaction_date`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'OE234ODVFR', '25418422812', '2020-10-31 12:03:05', '100.00', NULL, NULL),
(2, 8, 13, 'OL1939Z2AF', '254718422812', '2020-12-01 13:38:24', '2.00', '2020-12-01 07:38:24', '2020-12-01 07:38:24'),
(3, 8, 13, 'OL193AAIJ9', '254718422812', '2020-12-01 13:44:43', '1.00', '2020-12-01 07:44:43', '2020-12-01 07:44:43'),
(6, 8, 13, 'OLH7N87NDX', '254718422812', '2020-12-17 09:26:54', '2.00', '2020-12-17 06:26:54', '2020-12-17 06:26:54'),
(7, 14, 13, 'OLH1NG32N9', '254718422812', '2020-12-17 12:21:58', '2.00', '2020-12-17 09:21:58', '2020-12-17 09:21:58'),
(8, 9, 13, 'OLH7NI6QIL', '254704332234', '2020-12-17 13:07:08', '2.00', '2020-12-17 10:07:08', '2020-12-17 10:07:08'),
(9, 20, 25, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 20, 25, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 20, 25, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `non_teaching_staff`
--

CREATE TABLE `non_teaching_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `hired_date` date NOT NULL,
  `date_left` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `non_teaching_staff`
--

INSERT INTO `non_teaching_staff` (`id`, `first_name`, `middle_name`, `last_name`, `phone_no`, `email`, `id_no`, `password`, `emp_no`, `category`, `gender`, `religion`, `nationality`, `profile_pic`, `salary`, `status`, `hired_date`, `date_left`, `created_at`, `updated_at`) VALUES
(1, 'victor', 'kipla', 'Bet', '0736293732', 'vickipla@gmail.com', 33928767, '$2y$10$NdgNuVCWpkJ91rmwnjM03eE88OayGYhDvZtRtyUNhkgJRJsVEYC1O', 'emp020', 'bursar', 'Male', 'Christian', 'Kenyan', '1_1603488017.jpeg', 30000, 'active', '2020-03-05', NULL, '2020-03-05 18:41:54', '2020-03-05 18:41:54'),
(2, 'samson', 'kimole', 'mutangili', '0737863629', 'sam@gmail.com', 33893468, '$2y$10$JruR.vtKZEtBZhYYzmrZ2.QElSmXKv62.QMFy11Dz9qBlAHmt/hVK', 'emp021', 'bursar', 'Male', 'Christian', 'Kenyan', NULL, 18000, 'active', '2020-03-05', NULL, '2020-03-05 18:43:03', '2020-03-05 18:43:03'),
(3, 'Justus', 'Muoka', 'Peter', '0722938432', 'justusmuoka@gmail.com', 12345678, '$2y$10$Ue5Iwkvvxw/d3BB3pGEAV.VgR9LPYfPUXcWuGGAL7jYIyUhbvgNx6', 'emp003', 'bursar', 'Male', 'Christian', 'Kenyan', NULL, 30000, 'active', '2020-03-28', NULL, '2020-03-28 15:11:36', '2020-03-28 15:11:36'),
(4, 'Faith', 'mutai', 'samson', '0776543223', 'faith@gmail.com', 87654322, '$2y$10$Lty73NAa6OSRtX9iRwMYI.vnqbt/Ys6VH/6PPULOiIvyU6WqFOAC6', '673212', 'bursar', 'Male', 'Christian', 'Kenyan', NULL, 46789, 'active', '2020-10-22', NULL, '2020-10-22 10:21:35', '2020-10-22 10:21:35'),
(5, 'Brenda', 'Mukui', 'Thomas', '0749823490', 'brenda11@gmail.com', 76546789, '$2y$10$dzbbmoj81byHD5tisUDRW.5VHd0Ik/ShNOxP2z2TtzjBMXwez.1E.', '987654', 'bursar', 'Male', 'Christian', 'Kenyan', '5_1603465560.jpeg', 15000, 'active', '2020-10-22', NULL, '2020-10-22 10:26:17', '2020-10-22 10:26:17'),
(6, 'gedion', 'Justus', 'John', '0754345678', 'gedionjustus@gmail.com', 39876556, '$2y$10$WBlNld.LdrqwAvPs3pggVOEAmzGKPS2UL3g5KJk2iLNtnrekbO5US', 'emp006', 'bursar', 'Male', 'Christian', 'Kenyan', NULL, 20000, 'active', '2020-11-13', NULL, '2020-11-13 16:03:13', '2020-11-13 16:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `out_of_sessions`
--

CREATE TABLE `out_of_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date DEFAULT NULL,
  `session_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `out_of_sessions`
--

INSERT INTO `out_of_sessions` (`id`, `student_id`, `date_from`, `date_to`, `session_status`, `created_at`, `updated_at`) VALUES
(1, 14, '2020-11-14', '2020-11-28', 'in', '2020-11-14 06:54:41', '2020-11-28 09:57:39'),
(2, 14, '2020-11-28', NULL, 'out', '2020-11-28 09:59:50', '2020-11-28 09:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `first_name`, `middle_name`, `last_name`, `phone_no`, `email`, `id_no`, `password`, `gender`, `occupation`, `created_at`, `updated_at`) VALUES
(1, 'kim', 'Mutangili', 'Mutangili', '0738097489', 'kimmutangili@gmail.com', '23943932', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Software engineer', '2020-02-28 06:16:16', '2020-02-28 06:16:16'),
(2, 'Mary', 'Nduku', 'Mutangili', '0734897433', 'marynduku@gmail.com', '74374573', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Lecturer', '2020-02-28 06:16:16', '2020-02-28 06:16:16'),
(3, 'Josphat', 'Justus', 'Justus', '0738748244', 'josphatkimole@gmai.com', '88959323', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Teacher', '2020-02-28 06:20:25', '2020-02-28 06:20:25'),
(4, 'Christine', 'Mukami', 'Nkatha', '0718422888', 'christinemukami29@gmail.com', '79697333', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Engineer', '2020-02-28 06:20:25', '2020-02-28 06:20:25'),
(5, 'Brian', 'Justus', 'Justus', '0734978444', 'briankim@gmail.com', '56789473', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'farmer', '2020-03-01 05:35:02', '2020-03-01 05:35:02'),
(6, 'Joseph', 'Matheka', 'Matheka', '0748874627', 'joseph@gmail.com', '38299321', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'farmer', '2020-03-02 23:07:37', '2020-03-02 23:07:37'),
(7, 'Eve', 'Wambui', 'Ngungi', '0749857637', 'evewambui@gmail.com', '68437742', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Teacher', '2020-03-02 23:07:37', '2020-03-02 23:07:37'),
(8, 'Christine', 'Nduku', 'Musau', '0739847443', 'christinenduku@gmail.com', '56757389', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Teacher', '2020-03-02 23:45:49', '2020-03-02 23:45:49'),
(9, 'David', 'Kituku', 'Kituku', '0738276483', 'davidmawilu@gmail.com', '38299043', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Civil servant', '2020-03-05 19:30:11', '2020-03-05 19:30:11'),
(10, 'Faith', 'Mutinda', 'Kilitu', '0749274812', 'faithmwania@gmail.com', '32494223', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Farmer', '2020-03-05 19:30:11', '2020-03-05 19:30:11'),
(11, 'Betty', 'Kalekye', 'Stephen', '0749828329', 'bettykalekye@gmail.com', '68373229', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Cabinet secretary', '2020-03-05 19:34:05', '2020-03-05 19:34:05'),
(12, 'Joseph', 'Muthoka', 'Muthoka', '0747328339', 'josephmuthoka@gmail.com', '86783833', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Teacher', '2020-03-05 19:34:05', '2020-11-16 06:47:26'),
(13, 'Samson', 'Musyoka', 'Musyoka', '0718422812', 'samsonkimole@gmail.com', '64743989', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Pilot', '2020-03-05 19:39:28', '2020-12-17 09:18:15'),
(14, 'Eunice', 'Ndunge', 'Mutisya', '0738764623', 'eunicendunge@gmail.com', '78374563', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Software engineer', '2020-03-05 19:39:29', '2020-03-05 19:39:29'),
(15, 'Josphat', 'Kioko', 'Kioko', '0749482311', 'josphatkioko@gmail.com', '87835874', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Pastor', '2020-03-05 19:44:32', '2020-03-05 19:44:32'),
(16, 'Catherine', 'Mutheu', 'Ndungi', '0739846380', 'catherinemutheu@gmail.com', '88045831', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Farmer', '2020-03-05 19:44:32', '2020-03-05 19:44:32'),
(17, 'Justina', 'Mwikali', 'Mutonde', '0742731003', 'justinamwikali@gmail.com', '87434943', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Farmer', '2020-03-05 19:47:28', '2020-03-05 19:47:28'),
(18, 'Samson', 'Mutangili', 'Mutangili', '0794928432', 'samkim@gmail.com', '76374322', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'teacher', '2020-03-07 05:49:09', '2020-03-07 05:49:09'),
(19, 'Mulili', 'Musyoka', 'Musyoka', '0709482321', 'mulilimusyoka@gmail.com', '34929421', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Teacher', '2020-03-08 21:15:09', '2020-03-08 21:15:09'),
(20, 'Makiti', 'Ndawa', 'Ndawa', '0739428421', 'makiti@gmail.com', '74763822', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'farmer', '2020-10-20 08:40:21', '2020-10-20 08:40:21'),
(21, 'Jane', 'Mwende', 'Makiti', '0798429499', 'janemwende@gmail.com', '73023239', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Teacher', '2020-10-20 08:40:21', '2020-10-20 08:40:21'),
(22, 'Mary', 'shiku', 'Mwangi', '0793911243', 'maryshiku@gmail.com', '63942323', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Engineer', '2020-10-20 10:14:38', '2020-10-20 10:14:38'),
(23, 'Jonas', 'John', 'John', '0793922873', 'jonasjohn@gmail.com', '63842229', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'Professor', '2020-10-20 10:37:21', '2020-10-20 10:37:21'),
(24, 'Mary', 'Mutheu', 'Mutua', '0739322323', 'marymutheu@gmail.com', '80933233', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'female', 'Teacher', '2020-10-20 10:47:33', '2020-10-20 10:47:33'),
(25, 'jon', 'mutua', 'mutua', '0794397389', 'johnmutua@gmail.com', '33044360', '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'male', 'teacher', '2020-10-21 11:34:16', '2020-10-21 11:34:16'),
(26, 'meri', 'shiku', 'wanjiku', '0794903280', 'meri@gmail.com', '74938216', '$2y$10$2oKoOnVjY0ITE9OzNaiAf.v3APjQNn2l..UygLjU5KbL28AmcExp2', 'female', 'teacher', '2020-10-21 11:34:16', '2020-10-21 11:34:16'),
(27, 'Kembi', 'Mutangili', 'Mutangili', '0739873211', 'kembi@gmail.com', '87654521', '$2y$10$2oKoOnVjY0ITE9OzNaiAf.v3APjQNn2l..UygLjU5KbL28AmcExp2', 'male', 'Engineer', '2020-10-22 10:48:59', '2020-12-11 13:50:11'),
(28, 'Mary', 'Nduku', 'Ngungi', '0749827369', 'nduku@gmail.com', '87334328', '$2y$10$2oKoOnVjY0ITE9OzNaiAf.v3APjQNn2l..UygLjU5KbL28AmcExp2', 'female', 'teacher', '2020-10-22 10:48:59', '2020-10-22 10:48:59'),
(29, 'Mutai', 'Chege', 'Chege', '0793209879', 'kipla@gmail.com', '23456543', '$2y$10$2oKoOnVjY0ITE9OzNaiAf.v3APjQNn2l..UygLjU5KbL28AmcExp2', 'male', 'farmer', '2020-10-22 10:48:59', '2020-10-22 10:48:59'),
(30, 'Zack', 'Ogoma', 'Otieno', '0703908072', 'zackogoma@gmail.com', '34233592', '$2y$10$Jp7PIacxY352g/QOjS4W6eJwKM98lIuovQ7SY4Gufm0roWu.aiE0G', 'male', 'Engineer', '2020-11-12 07:12:02', '2020-11-12 13:17:03'),
(31, 'Daniel', 'Kibui', 'Kagotho', '0740847840', 'danielkibui660@gmail.com', '46636222', '$2y$10$D5QC5fVMa49rGhbRCoQ5eu.Ax242MoD26kZ/uDxAkyaYBfl8msMPq', 'male', 'Engineer', '2020-12-17 05:56:47', '2020-12-17 05:56:47'),
(32, 'Daniel', 'Kibui', 'Kagotho', '0740847840', 'edwinonywoki207@gmail.com', '89484722', '$2y$10$g1qJYQCEdCJOAnCE9qv.0OF2YS4QIOyIXgVhbg0BdZAUYjKqYMwoK', 'male', 'Engineer', '2020-12-17 05:59:03', '2020-12-17 05:59:03'),
(33, 'Glo', 'Mia', 'Shylyne', '0777388210', 'samsonkimole00@gmail.com', '68339211', '$2y$10$mV0THZPZ5UZkXtOjuwjr4OZuEfgJmvV4Sz788sftJcSy272JHvuJS', 'female', 'Engineer', '2020-12-17 06:02:09', '2020-12-17 06:03:34'),
(34, 'Jonie', 'Stones', 'Thumba', '0728337372', 'samsonkimole090@gmail.com', '45678003', '$2y$10$5BGMBxF5rghornt4zQ5zJeNhwiVzjsYiceduJsu41pxkaGSmgxngK', 'male', 'Engineer', '2020-12-17 06:04:37', '2020-12-17 06:44:04'),
(35, 'Brian', 'John', 'Mbugua', '0739837371', 'brianjohn@gmail.com', '54332222', '$2y$10$yPgRTkq30v8hXaKcMBxRYeXcWoMFvAFrf69ZMtuNVf2bLbMkQKMeW', 'male', 'Engineer', '2020-12-17 07:28:50', '2020-12-17 09:06:59'),
(36, 'Justus', 'Muoka', 'Peter', '0716373728', 'justusmuoka@gmail.com', '53736532', '$2y$10$X4YmjV016EkrjVn7TxnI4.5vcHWPQHAhK7Pmuymlf24AxuaujOsie', 'male', 'Engineer', '2020-12-17 07:40:36', '2020-12-17 09:06:30'),
(37, 'Walter', 'Okeyo', 'Mwalo', '0721698574', 'walter@gmail.com', '45678987', '$2y$10$vKEnXHYhm9pwZJknIa7oR.SkZWj4U12wB7h.YVsoPyZetfyGdQaqu', 'male', 'Doctor', '2021-03-08 13:58:40', '2021-03-08 13:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_and_responsibilities`
--

CREATE TABLE `roles_and_responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `special_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibility` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_teacher` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_and_responsibilities`
--

INSERT INTO `roles_and_responsibilities` (`id`, `teacher_id`, `special_role`, `responsibility`, `class_teacher`, `created_at`, `updated_at`) VALUES
(1, 3, 'Examination and student admission', 'Class teacher', '1E', '2020-02-28 04:36:50', '2020-02-28 04:36:50'),
(2, 1, 'Principal', NULL, NULL, '2020-02-28 04:37:43', '2020-02-28 04:37:43'),
(3, 7, NULL, 'Class teacher', '1W', '2020-03-07 05:42:37', '2020-03-07 05:42:37'),
(4, 2, NULL, NULL, NULL, '2020-04-06 09:43:57', '2020-04-06 09:43:57'),
(5, 19, NULL, 'Class teacher', '4W', '2021-03-08 14:08:11', '2021-03-08 14:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact no_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_number` int(11) NOT NULL,
  `date_of_admission` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_cert_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kcpe_index_no` int(11) NOT NULL,
  `residence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_study` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `date_left` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `admission_number`, `date_of_admission`, `gender`, `DOB`, `birth_cert_no`, `religion`, `kcpe_index_no`, `residence`, `class`, `nationality`, `profile_pic`, `year_of_study`, `status`, `date_left`, `created_at`, `updated_at`) VALUES
(1, 'Josephine', 'Mwende', 'Nzioka', 1000, '2020-02-28', 'female', '2006-06-05', '8798398', 'Christian', 169394002, 'Njokerio', '1W', 'Kenyan', NULL, 1, 'active', NULL, '2020-02-28 06:14:32', '2020-02-28 06:14:32'),
(2, 'Brenton', 'Kanini', 'Musembi', 1001, '2020-02-28', 'male', '2004-06-17', '8734842', 'Christian', 193348003, 'Gate', '1W', 'Kenyan', '1603300132.jpeg', 1, 'active', NULL, '2020-02-28 06:17:30', '2020-02-28 06:17:30'),
(3, 'Josephine', 'Kanini', 'Nzioka', 1003, '2020-03-01', 'female', '1999-06-15', '8765346', 'Christian', 985367832, 'Gate', '4E', 'Kenyan', NULL, 4, 'active', NULL, '2020-03-01 05:33:54', '2020-03-01 05:33:54'),
(4, 'Jackline', 'Mwende', 'Katumo', 1004, '2020-03-02', 'female', '2000-02-22', '6773897', 'Christian', 293949004, 'Njoro', '1W', 'Kenyan', '1603356826.jpeg', 1, 'active', NULL, '2020-03-02 23:05:24', '2020-03-02 23:05:24'),
(5, 'Cate', 'Mbinya', 'Mutanu', 1005, '2020-03-02', 'female', '2000-10-23', '2345678', 'Christian', 765433007, 'Gate', '1W', 'Kenyan', '1603356867.jpeg', 1, 'active', NULL, '2020-03-02 23:44:31', '2020-03-02 23:44:31'),
(6, 'Everlyne', 'Kanini', 'Katumbi', 1006, '2020-03-05', 'female', '2002-06-10', '9834630', 'Christian', 833929010, 'Njokerio', '1E', 'Kenyan', '1607717044.jpeg', 1, 'active', NULL, '2020-03-05 19:26:25', '2020-03-05 19:26:25'),
(7, 'Samuel', 'Musembi', 'Mutua', 1007, '2020-03-05', 'male', '1999-03-23', '7398347', 'Christian', 183029015, 'Gate', '1E', 'Kenyan', NULL, 1, 'cleared', '2020-10-20', '2020-03-05 19:31:56', '2020-03-05 19:31:56'),
(8, 'Mary', 'Mwende', 'Kyalo', 1012, '2020-03-05', 'female', '2003-07-20', '6332542', 'Christian', 545622022, 'Gate', '1E', 'Kenyan', '1603300864.jpeg', 1, 'active', NULL, '2020-03-05 19:35:50', '2020-03-05 19:35:50'),
(9, 'Grace', 'Nzenyo', 'Mulinge', 1009, '2020-03-05', 'female', '2010-06-05', '5348472', 'Christian', 849239002, 'Njoro', '1E', 'Kenyan', '1603358508.jpeg', 1, 'active', NULL, '2020-03-05 19:41:39', '2020-03-05 19:41:39'),
(10, 'Jacky', 'Nduku', 'Mutonde', 1020, '2020-03-05', 'female', '2001-10-01', '7392822', 'Christian', 793013003, 'Gate', '1E', 'Kenyan', '1603356784.jpeg', 1, 'active', NULL, '2020-03-05 19:46:08', '2020-03-05 19:46:08'),
(11, 'Mary', 'Wanjiku', 'Mwangi', 1022, '2020-03-07', 'female', '1999-07-13', '6392942', 'Christian', 749294001, 'Njokerio', '1W', 'Kenyan', '1603300899.jpeg', 1, 'active', NULL, '2020-03-07 05:46:23', '2020-03-07 05:46:23'),
(12, 'Mirriam', 'Mutanu', 'Mwini', 1026, '2020-03-08', 'female', '2002-06-16', '5348320', 'Christian', 290429003, 'Njokerio', '1W', 'Kenyan', '1603356914.jpeg', 1, 'active', NULL, '2020-03-08 21:13:26', '2020-03-08 21:13:26'),
(13, 'Violet', 'Mutindi', 'Mutava', 1023, '2020-10-20', 'female', '2004-07-13', '7878032', 'Christian', 780426001, 'Nakuru', '3E', 'Kenyan', NULL, 3, 'active', NULL, '2020-10-20 08:36:04', '2020-10-20 08:36:04'),
(14, 'Faith', 'Jep', 'John', 1056, '2020-10-20', 'male', '2006-12-04', '8798345', 'Christian', 169394008, 'Nakuru', '3W', 'Kenyan', NULL, 3, 'out of session', NULL, '2020-10-20 09:08:39', '2020-10-20 09:08:39'),
(15, 'Anita', 'Katunge', 'Muindi', 1031, '2020-10-20', 'female', '2006-11-23', '2838329', 'Christian', 894221001, 'Nakuru', '4W', 'Kenyan', NULL, 4, 'active', NULL, '2020-10-20 10:12:59', '2020-10-20 10:12:59'),
(17, 'jons', 'stones', 'Katua', 1045, '2020-10-20', 'female', '2002-07-16', '6623896', 'Christian', 897304080, 'Nakuru', '4W', 'Somalian', NULL, 4, 'active', NULL, '2020-10-20 10:35:36', '2020-10-20 10:35:36'),
(18, 'Jonathan', 'Kioko', 'Mutua', 1046, '2020-10-20', 'male', '2003-06-12', '5673298', 'Christian', 876237002, 'nairobi', '4W', 'Kenyan', NULL, 4, 'active', NULL, '2020-10-20 10:43:44', '2020-10-20 10:43:44'),
(19, 'Jonathan', 'Kioko', 'Mutua', 1047, '2020-10-20', 'female', '2003-06-12', '5673290', 'Other', 876237056, 'nairobi', '4W', 'Somalian', NULL, 4, 'active', NULL, '2020-10-20 10:45:18', '2020-10-20 10:45:18'),
(20, 'miriam', 'Mutanu', 'kimole', 1050, '2020-10-21', 'female', '2005-06-22', '5678397', 'Christian', 762398001, 'nairobi', '3E', 'Kenyan', '1603301691.jpeg', 3, 'active', NULL, '2020-10-21 11:31:52', '2020-10-21 11:31:52'),
(21, 'Stephens', 'Mulwa', 'Mutua', 1057, '2020-10-22', 'female', '2020-10-21', '8765423', 'Other', 234564532, 'nairobi', '4W', 'Somalian', '1603384620.jpeg', 4, 'cleared', '2020-12-12', '2020-10-22 10:37:00', '2020-10-22 10:37:00'),
(22, 'Yvone', 'Nduku', 'Muoka', 1058, '2020-11-12', 'female', '2006-07-06', '9876739', 'Christian', 986732010, 'Nakuru', '2W', 'Kenyan', '1605200124.jpeg', 2, 'active', NULL, '2020-11-12 10:55:24', '2020-11-12 10:55:24'),
(23, 'Joan', 'Jully', 'Maweu', 1059, '2020-11-15', 'female', '2004-10-23', '5973728', 'Christian', 737391002, 'Nakuru', '3W', 'Kenyan', '1605446620.jpeg', 3, 'active', NULL, '2020-11-15 07:23:40', '2020-11-15 07:23:40'),
(24, 'Gloria', 'Glory', 'Muthenya', 1060, '2020-11-15', 'female', '2005-03-21', '7656921', 'Christian', 893919010, 'Nairobi', '3W', 'Kenyan', '1605446724.jpeg', 3, 'active', NULL, '2020-11-15 07:25:24', '2020-11-15 07:25:24'),
(25, 'David', 'Mwinja', 'Ominde', 1061, '2020-11-28', 'male', '2005-12-02', '6384732', 'Christian', 837293002, 'Nakuru', '1E', 'Kenyan', '1606573708.jpeg', 1, 'active', NULL, '2020-11-28 08:28:28', '2020-11-28 08:28:28'),
(26, 'Evans', 'Mugendi', 'Kirema', 1062, '2020-12-06', 'male', '2006-02-09', '3456762', 'Christian', 654345001, 'Nakuru', '1E', 'Kenyan', '1607275093.jpeg', 1, 'active', NULL, '2020-12-06 14:18:13', '2020-12-06 14:18:13'),
(27, 'Evans', 'Thumbi', 'Mwangi', 1063, '2020-12-16', 'Male', '2004-03-06', '4567362', 'Christian', 887321010, 'Nakuru', '1E', 'Kenyan', '1608146653.jpeg', 1, 'active', NULL, '2020-12-16 16:24:13', '2020-12-16 16:24:13'),
(28, 'Gloria', 'Muliro', 'Thigha', 1064, '2020-12-16', 'female', '2006-02-12', '5456783', 'Christian', 936293012, 'Nairobi', '1E', 'Kenyan', '1608146957.jpeg', 1, 'active', NULL, '2020-12-16 16:29:17', '2020-12-16 16:29:17'),
(29, 'Gloria', 'Muliro', 'Thumba', 1065, '2020-12-16', 'female', '2005-12-31', '6553731', 'Christian', 903932021, 'Eldoret', '1E', 'Kenyan', '1608147398.jpeg', 1, 'active', NULL, '2020-12-16 16:36:38', '2020-12-16 16:36:38'),
(30, 'Fancy', 'Janet', 'John', 1066, '2020-12-17', 'female', '2006-10-08', '5773848', 'Christian', 456732002, 'Nakuru', '1E', 'Kenyan', '1608182060.jpeg', 1, 'active', NULL, '2020-12-17 02:14:20', '2020-12-17 02:14:20'),
(31, 'Benjamin', 'Makau', 'Maingi', 1067, '2020-12-17', 'Male', '2005-04-06', '6883831', 'Christian', 384842034, 'Nakuru', '1W', 'Kenyan', '1608184821.jpeg', 1, 'active', NULL, '2020-12-17 03:00:21', '2020-12-17 03:00:21'),
(32, 'Lorna', 'Wairimu', 'Maina', 1068, '2020-12-17', 'female', '2006-09-08', '6780391', 'Christian', 637382002, 'Nairobi', '1W', 'Kenyan', '1608185039.jpeg', 1, 'active', NULL, '2020-12-17 03:03:59', '2020-12-17 03:03:59'),
(33, 'Colin', 'Mburugu', 'Otieno', 1069, '2020-12-17', 'Male', '2007-04-03', '4947293', 'Christian', 948482034, 'Eldoret', '1E', 'Kenyan', '1608185154.jpeg', 1, 'active', NULL, '2020-12-17 03:05:54', '2020-12-17 03:05:54'),
(34, 'David', 'Malamu', 'Muthuure', 1070, '2020-12-17', 'Male', '2007-09-04', '4747321', 'Christian', 799319007, 'Nyanza', '1W', 'Kenyan', '1608185250.jpeg', 1, 'active', NULL, '2020-12-17 03:07:30', '2020-12-17 03:07:30'),
(35, 'Dedan', 'Msafari', 'Mbugu', 1071, '2020-12-17', 'Male', '2006-04-09', '3837171', 'Christian', 484821043, 'Nyahururu', '1W', 'Kenyan', '1608185377.jpeg', 1, 'active', NULL, '2020-12-17 03:09:37', '2020-12-17 03:09:37'),
(36, 'Doris', 'Nyawira', 'Kibui', 1072, '2020-12-17', 'female', '2007-08-06', '4563983', 'Christian', 494838051, 'Nyanza', '1E', 'Kenyan', '1608185485.jpeg', 1, 'active', NULL, '2020-12-17 03:11:25', '2020-12-17 03:11:25'),
(37, 'Emonyi', 'Elias', 'mutangili', 1073, '2020-12-17', 'Male', '2006-04-08', '8842012', 'Christian', 384848061, 'Eldoret', '1E', 'Kenyan', '1608185644.jpeg', 1, 'active', NULL, '2020-12-17 03:14:04', '2020-12-17 03:14:04'),
(38, 'Risper', 'Bevalyne', 'Oyaro', 1074, '2020-12-17', 'female', '2006-05-04', '9474992', 'Christian', 193948002, 'Nairobi', '1W', 'Kenyan', '1608185726.jpeg', 1, 'active', NULL, '2020-12-17 03:15:26', '2020-12-17 03:15:26'),
(39, 'Sam', 'Macharia', 'Kiteru', 1075, '2020-12-17', 'Male', '2007-05-06', '4849421', 'Christian', 138382009, 'Nakuru', '1W', 'Kenyan', '1608185821.jpeg', 1, 'active', NULL, '2020-12-17 03:17:01', '2020-12-17 03:17:01'),
(40, 'Hillary', 'Ian', 'Wanjala', 1076, '2020-12-17', 'Male', '2008-12-09', '4847371', 'Christian', 433233048, 'Nakuru', '1W', 'Kenyan', '1608185935.jpeg', 1, 'active', NULL, '2020-12-17 03:18:55', '2020-12-17 03:18:55'),
(41, 'Jackiline', 'Mboya', 'Giteru', 1077, '2020-12-17', 'Male', '2007-04-06', '4344224', 'Christian', 748481020, 'Nairobi', '4W', 'Kenyan', '1608186134.jpeg', 4, 'active', NULL, '2020-12-17 03:22:15', '2020-12-17 03:22:15'),
(42, 'Adeny', 'Joakim', 'Mbuvi', 1078, '2020-12-17', 'Male', '2008-06-06', '3464362', 'Christian', 984829011, 'Eldoret', '4W', 'Kenyan', '1608186234.jpeg', 4, 'active', NULL, '2020-12-17 03:23:54', '2020-12-17 03:23:54'),
(43, 'Brian', 'Alamin', 'Bassam', 1079, '2020-12-17', 'Male', '2005-04-06', '4344533', 'Christian', 595932042, 'Eldoret', '4E', 'Kenyan', '1608186359.jpeg', 4, 'active', NULL, '2020-12-17 03:25:59', '2020-12-17 03:25:59'),
(44, 'Chrispine', 'Otieno', 'Ariga', 1080, '2020-12-17', 'Male', '2007-04-09', '3243233', 'Christian', 748429004, 'Eldoret', '4E', 'Kenyan', '1608186451.jpeg', 4, 'active', NULL, '2020-12-17 03:27:31', '2020-12-17 03:27:31'),
(45, 'Emmanuel', 'Kadenge', 'Nyawira', 1081, '2020-12-17', 'Male', '2007-03-05', '4747382', 'Christian', 484742012, 'Nyanza', '4E', 'Kenyan', '1608186553.jpeg', 4, 'active', NULL, '2020-12-17 03:29:13', '2020-12-17 03:29:13'),
(46, 'Edwin', 'Onwoki', 'Ondiek', 1082, '2020-12-17', 'Male', '2008-03-25', '3654553', 'Christian', 344543041, 'Eldoret', '3E', 'Kenyan', '1608186636.jpeg', 3, 'active', NULL, '2020-12-17 03:30:36', '2020-12-17 03:30:36'),
(47, 'Edwin', 'Onwoki', 'Ondiek', 1083, '2020-12-17', 'Male', '2007-02-08', '7474922', 'Christian', 847448048, 'Nyanza', '4E', 'Kenyan', '1608186805.jpeg', 4, 'active', NULL, '2020-12-17 03:33:25', '2020-12-17 03:33:25'),
(48, 'Eva', 'Wanjiru', 'Githinji', 1084, '2020-12-17', 'female', '2006-04-09', '3988432', 'Christian', 488482056, 'Nakuru', '4E', 'Kenyan', '1608187020.jpeg', 4, 'active', NULL, '2020-12-17 03:37:00', '2020-12-17 03:37:00'),
(49, 'Gerald', 'Giteru', 'Graham', 1085, '2020-12-17', 'Male', '2007-03-05', '4884748', 'Christian', 568544021, 'Nairobi', '4E', 'Kenyan', '1608187119.jpeg', 4, 'active', NULL, '2020-12-17 03:38:39', '2020-12-17 03:38:39'),
(50, 'Brenda', 'Nyaswa', 'Mburugu', 1086, '2020-12-17', 'female', '2007-04-02', '3335342', 'Christian', 658384001, 'Nairobi', '4W', 'Kenyan', '1608187214.jpeg', 4, 'active', NULL, '2020-12-17 03:40:14', '2020-12-17 03:40:14'),
(51, 'Caroline', 'Gakii', 'Alexandar', 1087, '2020-12-17', 'female', '2008-03-04', '4567987', 'Christian', 434446008, 'Nakuru', '4W', 'Kenyan', '1608187302.jpeg', 4, 'active', NULL, '2020-12-17 03:41:42', '2020-12-17 03:41:42'),
(52, 'Elvis', 'Mutau', 'Gitau', 1088, '2020-12-17', 'female', '2006-12-31', '7373732', 'Christian', 367373002, 'Eldoret', '2E', 'Kenyan', '1608206681.jpeg', 2, 'active', NULL, '2020-12-17 09:04:42', '2020-12-17 09:04:42'),
(53, 'Mary', 'Someone', 'Admin', 1089, '2021-03-08', 'female', '1998-05-02', '1234536', 'Islam', 123456773, 'Nairobi', '1W', 'Somalian', '1615182896.jpg', 1, 'active', NULL, '2021-03-08 13:54:56', '2021-03-08 13:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

CREATE TABLE `student_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_address`
--

INSERT INTO `student_address` (`id`, `student_id`, `address_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 6, NULL, NULL),
(7, 7, 7, NULL, NULL),
(8, 8, 8, NULL, NULL),
(9, 9, 9, NULL, NULL),
(10, 10, 10, NULL, NULL),
(11, 11, 11, NULL, NULL),
(12, 12, 12, NULL, NULL),
(13, 13, 13, NULL, NULL),
(14, 15, 14, NULL, NULL),
(15, 17, 15, NULL, NULL),
(16, 19, 16, NULL, NULL),
(17, 20, 17, NULL, NULL),
(18, 21, 18, NULL, NULL),
(19, 22, 19, NULL, NULL),
(20, 23, 20, NULL, NULL),
(21, 24, 21, NULL, NULL),
(22, 25, 22, NULL, NULL),
(23, 26, 23, NULL, NULL),
(24, 27, 24, NULL, NULL),
(25, 29, 25, NULL, NULL),
(26, 30, 26, NULL, NULL),
(27, 31, 27, NULL, NULL),
(28, 32, 28, NULL, NULL),
(29, 33, 29, NULL, NULL),
(30, 34, 30, NULL, NULL),
(31, 35, 31, NULL, NULL),
(32, 36, 32, NULL, NULL),
(33, 37, 33, NULL, NULL),
(34, 38, 34, NULL, NULL),
(35, 40, 35, NULL, NULL),
(36, 41, 36, NULL, NULL),
(37, 42, 37, NULL, NULL),
(38, 43, 38, NULL, NULL),
(39, 43, 39, NULL, NULL),
(40, 44, 40, NULL, NULL),
(41, 45, 41, NULL, NULL),
(42, 47, 42, NULL, NULL),
(43, 48, 43, NULL, NULL),
(44, 49, 44, NULL, NULL),
(45, 50, 45, NULL, NULL),
(46, 51, 46, NULL, NULL),
(47, 52, 47, NULL, NULL),
(48, 53, 48, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trial` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`class_id`, `student_id`, `year`, `class_name`, `stream`, `trial`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2020', 'Form 1', '1W', 1, 'past', '2020-09-30 16:22:26', '2020-09-30 16:22:26'),
(2, 2, '2020', 'Form 1', '1W', 1, 'active', '2020-09-30 16:22:51', '2020-09-30 16:22:51'),
(3, 4, '2020', 'Form 1', '1W', 1, 'active', '2020-09-30 16:23:12', '2020-09-30 16:23:12'),
(4, 5, '2020', 'Form 1', '1W', 1, 'active', '2020-09-30 16:23:37', '2020-09-30 16:23:37'),
(5, 6, '2020', 'Form 1', '1E', 1, 'active', '2020-09-30 16:24:40', '2020-09-30 16:24:40'),
(6, 7, '2020', 'Form 1', '1E', 1, 'completed', '2020-09-30 16:24:53', '2020-09-30 16:24:53'),
(8, 8, '2020', 'Form 1', '1E', 1, 'active', '2020-09-30 16:25:29', '2020-09-30 16:25:29'),
(9, 9, '2020', 'Form 1', '1E', 1, 'active', '2020-09-30 16:25:45', '2020-09-30 16:25:45'),
(10, 10, '2020', 'Form 1', '1E', 1, 'active', '2020-09-30 16:26:00', '2020-09-30 16:26:00'),
(11, 11, '2020', 'Form 1', '1W', 1, 'active', '2020-09-30 16:26:15', '2020-09-30 16:26:15'),
(12, 12, '2020', 'Form 1', '1W', 1, 'active', '2020-09-30 16:26:31', '2020-09-30 16:26:31'),
(13, 1, '2020', 'Form 2', '2W', 1, 'active', NULL, NULL),
(15, 7, '2020', 'Form 2', '2E', 1, 'completed', NULL, NULL),
(16, 15, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(17, 17, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(18, 18, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(19, 19, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(20, 20, '2020', 'Form 3', '3E', 1, 'active', NULL, NULL),
(21, 21, '2019', 'Form 4', '4W', 1, 'completed', NULL, NULL),
(22, 14, '2020', 'Form 3', '3W', 1, 'past', NULL, NULL),
(23, 13, '2019', 'Form 3', '3E', 1, 'completed', NULL, NULL),
(24, 22, '2020', 'Form 2', '2W', 1, 'active', NULL, NULL),
(25, 23, '2020', 'Form 3', '3W', 1, 'active', NULL, NULL),
(26, 24, '2020', 'Form 3', '3W', 1, 'active', NULL, NULL),
(27, 25, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(28, 14, '2020', 'Form 1', '1E', 1, 'past', '2020-11-28 09:57:38', '2020-11-28 09:57:38'),
(29, 26, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(30, 13, '2020', 'Form 4', '4E', 1, 'active', '2020-12-12 13:17:27', '2020-12-12 13:17:27'),
(31, 21, '2020', 'Form 4', '4W', 2, 'completed', '2020-12-12 13:31:36', '2020-12-12 13:31:36'),
(32, 27, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(33, 28, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(34, 29, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(35, 30, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(36, 31, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(37, 32, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(38, 33, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(39, 34, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(40, 35, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(41, 36, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(42, 37, '2020', 'Form 1', '1E', 1, 'active', NULL, NULL),
(43, 38, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(44, 39, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(45, 40, '2020', 'Form 1', '1W', 1, 'active', NULL, NULL),
(46, 41, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(47, 42, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(48, 43, '2020', 'Form 4', '4E', 1, 'active', NULL, NULL),
(49, 44, '2020', 'Form 4', '4E', 1, 'active', NULL, NULL),
(50, 45, '2020', 'Form 4', '4E', 1, 'active', NULL, NULL),
(51, 46, '2020', 'Form 3', '3E', 1, 'active', NULL, NULL),
(52, 47, '2020', 'Form 4', '4E', 1, 'active', NULL, NULL),
(53, 48, '2020', 'Form 4', '4E', 1, 'active', NULL, NULL),
(54, 49, '2020', 'Form 4', '4E', 1, 'active', NULL, NULL),
(55, 50, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(56, 51, '2020', 'Form 4', '4W', 1, 'active', NULL, NULL),
(57, 52, '2020', 'Form 2', '2E', 1, 'active', NULL, NULL),
(58, 53, '2021', 'Form 1', '1W', 1, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_dorm_rooms`
--

CREATE TABLE `student_dorm_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `date_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allocation_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_dorm_rooms`
--

INSERT INTO `student_dorm_rooms` (`id`, `student_id`, `room_id`, `date_from`, `date_to`, `allocation_status`, `created_at`, `updated_at`) VALUES
(1, 8, 1, '20/04/2020', '25-04-2020', 'changed', NULL, NULL),
(2, 9, 2, '20/4/2020', '25-04-2020', 'changed', NULL, NULL),
(3, 10, 1, '20/4/2020', '04-23-2020', 'deallocated', NULL, NULL),
(4, 6, 6, '24-04-2020', '27-10-2020', 'changed', NULL, NULL),
(6, 11, 6, '24-04-2020', NULL, 'active', NULL, NULL),
(7, 4, 2, '24-04-2020', '24-10-2020', 'changed', NULL, NULL),
(8, 9, 7, '25-04-2020', '10-12-2020', 'deallocated', NULL, NULL),
(9, 8, 2, '25-04-2020', NULL, 'active', NULL, NULL),
(10, 10, 3, '24-10-2020', NULL, 'active', NULL, NULL),
(11, 6, 3, '24-10-2020', '27-10-2020', 'changed', NULL, NULL),
(12, 5, 7, '24-10-2020', NULL, 'active', NULL, NULL),
(13, 2, 5, '24-10-2020', '10-12-2020', 'changed', NULL, NULL),
(14, 4, 6, '24-10-2020', NULL, 'active', NULL, NULL),
(15, 6, 6, '27-10-2020', NULL, 'active', NULL, NULL),
(16, 15, 2, '10-11-2020', NULL, 'active', NULL, NULL),
(17, 17, 9, '10-11-2020', NULL, 'active', NULL, NULL),
(18, 18, 6, '10-11-2020', NULL, 'active', NULL, NULL),
(19, 19, 6, '10-11-2020', NULL, 'active', NULL, NULL),
(20, 20, 10, '10-12-2020', '10-12-2020', 'changed', NULL, NULL),
(21, 20, 7, '10-12-2020', NULL, 'active', NULL, NULL),
(22, 24, 6, '10-12-2020', NULL, 'active', NULL, NULL),
(23, 1, 11, '10-12-2020', NULL, 'active', NULL, NULL),
(24, 25, 11, '10-12-2020', NULL, 'active', NULL, NULL),
(25, 2, 11, '10-12-2020', NULL, 'active', NULL, NULL),
(26, 22, 10, '10-12-2020', NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `term` int(11) NOT NULL,
  `exam_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks_obtained` int(11) NOT NULL,
  `grade` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `year`, `term`, `exam_type`, `student_id`, `class_name`, `subject`, `marks_obtained`, `grade`, `comments`, `teacher_id`, `created_at`, `updated_at`) VALUES
(5, 2020, 1, 'End term', 3, '4E', 'chemistry', 60, 'B-', 'Good', 1, NULL, NULL),
(14, 2020, 1, 'End term', 1, '1W', 'chemistry', 70, 'B+', 'Very good', 1, NULL, NULL),
(15, 2020, 1, 'End term', 2, '1W', 'chemistry', 78, 'A-', 'Excellent. Keep up', 1, NULL, NULL),
(16, 2020, 1, 'End term', 1, '1W', 'mathematics', 90, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(17, 2020, 1, 'End term', 2, '1W', 'mathematics', 80, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(18, 2020, 1, 'End term', 4, '1W', 'chemistry', 45, 'C-', 'Work hard', 1, NULL, NULL),
(19, 2020, 1, 'End term', 4, '1W', 'mathematics', 67, 'B', 'Good', 1, NULL, NULL),
(20, 2020, 1, 'End term', 5, '1W', 'chemistry', 76, 'A-', 'Very good', 1, NULL, NULL),
(21, 2020, 1, 'End term', 5, '1W', 'mathematics', 83, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(22, 2020, 1, 'End term', 6, '1E', 'kiswahili', 78, 'A-', 'Very good', 8, NULL, NULL),
(23, 2020, 1, 'End term', 7, '1E', 'kiswahili', 56, 'C+', 'Can do better', 8, NULL, NULL),
(24, 2020, 1, 'End term', 8, '1E', 'kiswahili', 83, 'A', 'Excellent. Keep up', 8, NULL, NULL),
(25, 2020, 1, 'End term', 9, '1E', 'kiswahili', 69, 'B', 'Very good', 8, NULL, NULL),
(26, 2020, 1, 'End term', 10, '1E', 'kiswahili', 45, 'C-', 'Work hard', 8, NULL, NULL),
(27, 2020, 1, 'End term', 1, '1W', 'kiswahili', 78, 'A-', 'Very good', 8, NULL, NULL),
(28, 2020, 1, 'End term', 2, '1W', 'kiswahili', 56, 'C+', 'Can do better', 8, NULL, NULL),
(29, 2020, 1, 'End term', 4, '1W', 'kiswahili', 77, 'A-', 'Very good', 8, NULL, NULL),
(30, 2020, 1, 'End term', 5, '1W', 'kiswahili', 90, 'A', 'Excellent. Keep up', 8, NULL, NULL),
(31, 2020, 1, 'End term', 1, '1W', 'geography', 57, 'C+', 'Can do better', 7, NULL, NULL),
(32, 2020, 1, 'End term', 1, '1W', 'business_studies', 78, 'A-', 'Very good', 7, NULL, NULL),
(33, 2020, 1, 'End term', 2, '1W', 'geography', 78, 'A-', 'Very good', 7, NULL, NULL),
(34, 2020, 1, 'End term', 2, '1W', 'business_studies', 70, 'B+', 'Very good', 7, NULL, NULL),
(35, 2020, 1, 'End term', 4, '1W', 'geography', 90, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(36, 2020, 1, 'End term', 4, '1W', 'business_studies', 63, 'B-', 'Good', 7, NULL, NULL),
(37, 2020, 1, 'End term', 5, '1W', 'geography', 78, 'A-', 'Very good', 7, NULL, NULL),
(38, 2020, 1, 'End term', 5, '1W', 'business_studies', 82, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(39, 2020, 1, 'End term', 6, '1E', 'geography', 59, 'C+', 'Work hard', 7, NULL, NULL),
(40, 2020, 1, 'End term', 6, '1E', 'business_studies', 69, 'B', 'Good', 7, NULL, NULL),
(41, 2020, 1, 'End term', 7, '1E', 'geography', 73, 'B+', 'Good', 7, NULL, NULL),
(42, 2020, 1, 'End term', 7, '1E', 'business_studies', 67, 'B', 'Good', 7, NULL, NULL),
(43, 2020, 1, 'End term', 8, '1E', 'geography', 84, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(44, 2020, 1, 'End term', 8, '1E', 'business_studies', 67, 'B', 'Good', 7, NULL, NULL),
(45, 2020, 1, 'End term', 9, '1E', 'geography', 55, 'C+', 'Can do better', 7, NULL, NULL),
(46, 2020, 1, 'End term', 9, '1E', 'business_studies', 63, 'B-', 'Good', 7, NULL, NULL),
(47, 2020, 1, 'End term', 10, '1E', 'geography', 66, 'B', 'Good', 7, NULL, NULL),
(48, 2020, 1, 'End term', 10, '1E', 'business_studies', 78, 'A-', 'Very good', 7, NULL, NULL),
(49, 2020, 1, 'End term', 6, '1E', 'english', 67, 'B', 'Good', 4, NULL, NULL),
(50, 2020, 1, 'End term', 7, '1E', 'english', 53, 'C', 'Can do better', 4, NULL, NULL),
(51, 2020, 1, 'End term', 8, '1E', 'english', 59, 'C+', 'Good', 4, NULL, NULL),
(52, 2020, 1, 'End term', 9, '1E', 'english', 48, 'C-', 'Can do better', 4, NULL, NULL),
(53, 2020, 1, 'End term', 10, '1E', 'english', 78, 'A-', 'Very good', 4, NULL, NULL),
(54, 2020, 1, 'End term', 1, '1W', 'english', 70, 'B+', 'Very good', 4, NULL, NULL),
(55, 2020, 1, 'End term', 2, '1W', 'english', 62, 'B-', 'Good', 4, NULL, NULL),
(56, 2020, 1, 'End term', 4, '1W', 'english', 57, 'C+', 'Good', 4, NULL, NULL),
(57, 2020, 1, 'End term', 5, '1W', 'english', 73, 'B+', 'Very good', 4, NULL, NULL),
(58, 2020, 1, 'End term', 6, '1E', 'agriculture', 56, 'C+', 'Good', 6, NULL, NULL),
(59, 2020, 1, 'End term', 7, '1E', 'agriculture', 49, 'C-', 'Work hard', 6, NULL, NULL),
(60, 2020, 1, 'End term', 8, '1E', 'agriculture', 78, 'A-', 'Very good', 6, NULL, NULL),
(61, 2020, 1, 'End term', 9, '1E', 'agriculture', 56, 'C+', 'Good', 6, NULL, NULL),
(62, 2020, 1, 'End term', 10, '1E', 'agriculture', 77, 'A-', 'Very good', 6, NULL, NULL),
(63, 2020, 1, 'End term', 1, '1W', 'agriculture', 69, 'B', 'Good', 6, NULL, NULL),
(64, 2020, 1, 'End term', 2, '1W', 'agriculture', 58, 'C+', 'Good', 6, NULL, NULL),
(65, 2020, 1, 'End term', 4, '1W', 'agriculture', 81, 'A', 'Excellent. Keep up', 6, NULL, NULL),
(66, 2020, 1, 'End term', 5, '1W', 'agriculture', 44, 'D+', 'Work hard', 6, NULL, NULL),
(67, 2020, 1, 'End term', 6, '1E', 'physics', 68, 'B', 'Good', 9, NULL, NULL),
(68, 2020, 1, 'End term', 7, '1E', 'physics', 75, 'A-', 'Very good', 9, NULL, NULL),
(69, 2020, 1, 'End term', 8, '1E', 'physics', 59, 'C+', 'Good', 9, NULL, NULL),
(70, 2020, 1, 'End term', 9, '1E', 'physics', 83, 'A', 'Excellent. Keep up', 9, NULL, NULL),
(71, 2020, 1, 'End term', 10, '1E', 'physics', 83, 'A', 'Excellent. Keep up', 9, NULL, NULL),
(72, 2020, 1, 'End term', 1, '1W', 'physics', 68, 'B', 'Good', 9, NULL, NULL),
(73, 2020, 1, 'End term', 2, '1W', 'physics', 79, 'A-', 'Very good', 9, NULL, NULL),
(74, 2020, 1, 'End term', 4, '1W', 'physics', 63, 'B-', 'Good', 9, NULL, NULL),
(75, 2020, 1, 'End term', 5, '1W', 'physics', 45, 'C-', 'Can do better', 9, NULL, NULL),
(76, 2020, 1, 'End term', 6, '1E', 'biology', 60, 'B-', 'Good', 2, NULL, NULL),
(77, 2020, 1, 'End term', 7, '1E', 'biology', 52, 'C', 'Can do better', 2, NULL, NULL),
(78, 2020, 1, 'End term', 8, '1E', 'biology', 67, 'B', 'Good', 2, NULL, NULL),
(79, 2020, 1, 'End term', 9, '1E', 'biology', 73, 'B+', 'Very good', 2, NULL, NULL),
(80, 2020, 1, 'End term', 10, '1E', 'biology', 77, 'A-', 'Very good', 2, NULL, NULL),
(81, 2020, 1, 'End term', 1, '1W', 'biology', 76, 'A-', 'Very good', 2, NULL, NULL),
(82, 2020, 1, 'End term', 2, '1W', 'biology', 74, 'B+', 'Very good', 2, NULL, NULL),
(83, 2020, 1, 'End term', 4, '1W', 'biology', 59, 'C+', 'Good', 2, NULL, NULL),
(84, 2020, 1, 'End term', 5, '1W', 'biology', 45, 'C-', 'Work hard', 2, NULL, NULL),
(85, 2020, 1, 'End term', 6, '1E', 'cre', 88, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(86, 2020, 1, 'End term', 6, '1E', 'history', 71, 'B+', 'Very good', 3, NULL, NULL),
(87, 2020, 1, 'End term', 7, '1E', 'cre', 69, 'B', 'Good', 3, NULL, NULL),
(88, 2020, 1, 'End term', 7, '1E', 'history', 79, 'A-', 'Very good', 3, NULL, NULL),
(89, 2020, 1, 'End term', 8, '1E', 'cre', 55, 'C+', 'Good', 3, NULL, NULL),
(90, 2020, 1, 'End term', 8, '1E', 'history', 68, 'B', 'Good', 3, NULL, NULL),
(91, 2020, 1, 'End term', 9, '1E', 'cre', 60, 'B-', 'Good', 3, NULL, NULL),
(92, 2020, 1, 'End term', 9, '1E', 'history', 78, 'A-', 'Very good', 3, NULL, NULL),
(93, 2020, 1, 'End term', 10, '1E', 'cre', 63, 'B-', 'Good', 3, NULL, NULL),
(94, 2020, 1, 'End term', 10, '1E', 'history', 54, 'C', 'Good', 3, NULL, NULL),
(95, 2020, 1, 'End term', 1, '1W', 'cre', 77, 'A-', 'Very good', 3, NULL, NULL),
(96, 2020, 1, 'End term', 2, '1W', 'cre', 73, 'B+', 'Very good', 3, NULL, NULL),
(97, 2020, 1, 'End term', 4, '1W', 'cre', 56, 'C+', 'Can do better', 3, NULL, NULL),
(98, 2020, 1, 'End term', 5, '1W', 'cre', 68, 'B', 'Good', 3, NULL, NULL),
(99, 2020, 1, 'End term', 6, '1E', 'chemistry', 56, 'C+', 'Good', 1, NULL, NULL),
(100, 2020, 1, 'End term', 7, '1E', 'chemistry', 89, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(101, 2020, 1, 'End term', 8, '1E', 'chemistry', 67, 'B', 'Very good', 1, NULL, NULL),
(102, 2020, 1, 'End term', 9, '1E', 'chemistry', 59, 'C+', 'Good', 1, NULL, NULL),
(103, 2020, 1, 'End term', 10, '1E', 'chemistry', 77, 'A-', 'Very good', 1, NULL, NULL),
(104, 2020, 1, 'End term', 1, '1W', 'history', 67, 'B', 'Good', 3, NULL, NULL),
(105, 2020, 1, 'End term', 2, '1W', 'history', 78, 'A-', 'Very good', 3, NULL, NULL),
(106, 2020, 1, 'End term', 4, '1W', 'history', 65, 'B', 'Good', 3, NULL, NULL),
(107, 2020, 1, 'End term', 5, '1W', 'history', 56, 'C+', 'Can do better', 3, NULL, NULL),
(108, 2020, 1, 'End term', 6, '1E', 'mathematics', 78, 'A-', 'Very good', 5, NULL, NULL),
(109, 2020, 1, 'End term', 7, '1E', 'mathematics', 55, 'C+', 'Good', 5, NULL, NULL),
(110, 2020, 1, 'End term', 8, '1E', 'mathematics', 49, 'C-', 'Work hard', 5, NULL, NULL),
(111, 2020, 1, 'End term', 9, '1E', 'mathematics', 69, 'B', 'Good', 5, NULL, NULL),
(112, 2020, 1, 'End term', 10, '1E', 'mathematics', 49, 'C-', 'Can do better', 5, NULL, NULL),
(113, 2020, 1, 'End term', 11, '1W', 'chemistry', 67, 'B', 'Good', 1, NULL, NULL),
(114, 2020, 1, 'End term', 11, '1W', 'mathematics', 77, 'A-', 'Very good', 1, NULL, NULL),
(115, 2020, 1, 'End term', 12, '1W', 'chemistry', 45, 'C-', 'Can do better', 1, NULL, NULL),
(116, 2020, 1, 'End term', 12, '1W', 'mathematics', 61, 'B-', 'Good', 1, NULL, NULL),
(131, 2020, 1, 'Opener exam', 7, '1E', 'chemistry', 78, 'A-', 'Very good', 1, NULL, NULL),
(132, 2020, 1, 'Opener exam', 8, '1E', 'chemistry', 49, 'C-', 'Can do better', 1, NULL, NULL),
(133, 2020, 1, 'Opener exam', 9, '1E', 'chemistry', 81, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(134, 2020, 1, 'Opener exam', 10, '1E', 'chemistry', 60, 'B-', 'Good', 1, NULL, NULL),
(135, 2020, 1, 'Opener exam', 1, '1W', 'chemistry', 81, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(136, 2020, 1, 'Opener exam', 2, '1W', 'chemistry', 36, 'D', 'Work hard', 1, NULL, NULL),
(137, 2020, 1, 'Opener exam', 2, '1W', 'mathematics', 70, 'B+', 'Very good', 1, NULL, NULL),
(138, 2020, 1, 'Opener exam', 1, '1W', 'mathematics', 77, 'A-', 'Very good', 1, NULL, NULL),
(139, 2020, 1, 'Opener exam', 4, '1W', 'chemistry', 58, 'C+', 'Good', 1, NULL, NULL),
(140, 2020, 1, 'Opener exam', 4, '1W', 'mathematics', 78, 'A-', 'Very good', 1, NULL, NULL),
(141, 2020, 1, 'Opener exam', 5, '1W', 'chemistry', 45, 'C-', 'Work hard', 1, NULL, NULL),
(142, 2020, 1, 'Opener exam', 5, '1W', 'mathematics', 65, 'B', 'Good', 1, NULL, NULL),
(143, 2020, 1, 'Opener exam', 11, '1W', 'chemistry', 89, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(144, 2020, 1, 'Opener exam', 11, '1W', 'mathematics', 74, 'B+', 'Very good', 1, NULL, NULL),
(145, 2020, 1, 'Opener exam', 12, '1W', 'chemistry', 66, 'B', 'Good', 1, NULL, NULL),
(146, 2020, 1, 'Opener exam', 12, '1W', 'mathematics', 52, 'C', 'Can do better', 1, NULL, NULL),
(147, 2020, 1, 'Opener exam', 6, '1E', 'chemistry', 75, 'A-', 'Very good', 1, NULL, NULL),
(148, 2020, 1, 'Opener exam', 6, '1E', 'biology', 56, 'C+', 'Can do better', 2, NULL, NULL),
(149, 2020, 1, 'Opener exam', 7, '1E', 'biology', 86, 'A', 'Excellent. Keep up', 2, NULL, NULL),
(150, 2020, 1, 'Opener exam', 8, '1E', 'biology', 71, 'B+', 'Very good', 2, NULL, NULL),
(151, 2020, 1, 'Opener exam', 9, '1E', 'biology', 44, 'D+', 'Work hard', 2, NULL, NULL),
(152, 2020, 1, 'Opener exam', 10, '1E', 'biology', 58, 'C+', 'Good', 2, NULL, NULL),
(153, 2020, 1, 'Opener exam', 1, '1W', 'biology', 39, 'D', 'Work hard', 2, NULL, NULL),
(154, 2020, 1, 'Opener exam', 2, '1W', 'biology', 68, 'B', 'Good', 2, NULL, NULL),
(155, 2020, 1, 'Opener exam', 4, '1W', 'biology', 76, 'A-', 'Very good', 2, NULL, NULL),
(156, 2020, 1, 'Opener exam', 5, '1W', 'biology', 88, 'A', 'Very good', 2, NULL, NULL),
(157, 2020, 1, 'Opener exam', 11, '1W', 'biology', 63, 'B-', 'Good', 2, NULL, NULL),
(158, 2020, 1, 'Opener exam', 12, '1W', 'biology', 49, 'C-', 'Can do better', 2, NULL, NULL),
(159, 2020, 1, 'Opener exam', 6, '1E', 'cre', 88, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(160, 2020, 1, 'Opener exam', 6, '1E', 'history', 72, 'B+', 'Very good', 3, NULL, NULL),
(161, 2020, 1, 'Opener exam', 7, '1E', 'cre', 56, 'C+', 'Good', 3, NULL, NULL),
(162, 2020, 1, 'Opener exam', 7, '1E', 'history', 68, 'B', 'Very good', 3, NULL, NULL),
(163, 2020, 1, 'Opener exam', 8, '1E', 'cre', 46, 'C-', 'Work hard', 3, NULL, NULL),
(164, 2020, 1, 'Opener exam', 8, '1E', 'history', 59, 'C+', 'Good', 3, NULL, NULL),
(165, 2020, 1, 'Opener exam', 9, '1E', 'cre', 67, 'B', 'Good', 3, NULL, NULL),
(166, 2020, 1, 'Opener exam', 9, '1E', 'history', 58, 'C+', 'Good', 3, NULL, NULL),
(167, 2020, 1, 'Opener exam', 10, '1E', 'cre', 69, 'B', 'Very good', 3, NULL, NULL),
(168, 2020, 1, 'Opener exam', 10, '1E', 'history', 50, 'C', 'Can do better', 3, NULL, NULL),
(169, 2020, 1, 'Opener exam', 1, '1W', 'cre', 64, 'B-', 'Good', 3, NULL, NULL),
(170, 2020, 1, 'Opener exam', 1, '1W', 'history', 72, 'B+', 'Very good', 3, NULL, NULL),
(171, 2020, 1, 'Opener exam', 2, '1W', 'cre', 77, 'A-', 'Very good', 3, NULL, NULL),
(172, 2020, 1, 'Opener exam', 2, '1W', 'history', 48, 'C-', 'Can do better', 3, NULL, NULL),
(173, 2020, 1, 'Opener exam', 4, '1W', 'cre', 57, 'C+', 'Good', 3, NULL, NULL),
(174, 2020, 1, 'Opener exam', 4, '1W', 'history', 78, 'A-', 'Very good', 3, NULL, NULL),
(175, 2020, 1, 'Opener exam', 5, '1W', 'cre', 56, 'C+', 'Good', 3, NULL, NULL),
(176, 2020, 1, 'Opener exam', 5, '1W', 'history', 63, 'B-', 'Good', 3, NULL, NULL),
(177, 2020, 1, 'Opener exam', 11, '1W', 'cre', 70, 'B+', 'Very good', 3, NULL, NULL),
(178, 2020, 1, 'Opener exam', 11, '1W', 'history', 65, 'B', 'Good', 3, NULL, NULL),
(179, 2020, 1, 'Opener exam', 12, '1W', 'cre', 49, 'C-', 'Work hard', 3, NULL, NULL),
(180, 2020, 1, 'Opener exam', 12, '1W', 'history', 68, 'B', 'Good', 3, NULL, NULL),
(181, 2020, 1, 'Opener exam', 6, '1E', 'english', 55, 'C+', 'Good', 4, NULL, NULL),
(182, 2020, 1, 'Opener exam', 7, '1E', 'english', 70, 'B+', 'Very good', 4, NULL, NULL),
(183, 2020, 1, 'Opener exam', 8, '1E', 'english', 63, 'B-', 'Good', 4, NULL, NULL),
(184, 2020, 1, 'Opener exam', 9, '1E', 'english', 48, 'C-', 'Can do better', 4, NULL, NULL),
(185, 2020, 1, 'Opener exam', 10, '1E', 'english', 67, 'B', 'Very good', 4, NULL, NULL),
(186, 2020, 1, 'Opener exam', 1, '1W', 'english', 78, 'A-', 'Very good', 4, NULL, NULL),
(187, 2020, 1, 'Opener exam', 2, '1W', 'english', 58, 'C+', 'Good', 4, NULL, NULL),
(188, 2020, 1, 'Opener exam', 4, '1W', 'english', 38, 'D', 'Work hard', 4, NULL, NULL),
(189, 2020, 1, 'Opener exam', 5, '1W', 'english', 61, 'B-', 'Good', 4, NULL, NULL),
(190, 2020, 1, 'Opener exam', 11, '1W', 'english', 52, 'C', 'Good', 4, NULL, NULL),
(191, 2020, 1, 'Opener exam', 12, '1W', 'english', 71, 'B+', 'Very good', 4, NULL, NULL),
(192, 2020, 1, 'Opener exam', 6, '1E', 'mathematics', 45, 'C-', 'Can do better', 5, NULL, NULL),
(193, 2020, 1, 'Opener exam', 7, '1E', 'mathematics', 78, 'A-', 'Very good', 5, NULL, NULL),
(194, 2020, 1, 'Opener exam', 8, '1E', 'mathematics', 48, 'C-', 'Work hard', 5, NULL, NULL),
(195, 2020, 1, 'Opener exam', 9, '1E', 'mathematics', 77, 'A-', 'Very good', 5, NULL, NULL),
(196, 2020, 1, 'Opener exam', 10, '1E', 'mathematics', 64, 'B-', 'Good', 5, NULL, NULL),
(197, 2020, 1, 'Opener exam', 6, '1E', 'agriculture', 56, 'C+', 'Good', 6, NULL, NULL),
(198, 2020, 1, 'Opener exam', 7, '1E', 'agriculture', 67, 'B', 'Very good', 6, NULL, NULL),
(199, 2020, 1, 'Opener exam', 8, '1E', 'agriculture', 60, 'B-', 'Good', 6, NULL, NULL),
(200, 2020, 1, 'Opener exam', 9, '1E', 'agriculture', 70, 'B+', 'Very good', 6, NULL, NULL),
(201, 2020, 1, 'Opener exam', 10, '1E', 'agriculture', 45, 'C-', 'Work hard', 6, NULL, NULL),
(202, 2020, 1, 'Opener exam', 1, '1W', 'agriculture', 57, 'C+', 'Good', 6, NULL, NULL),
(203, 2020, 1, 'Opener exam', 2, '1W', 'agriculture', 66, 'B', 'Good', 6, NULL, NULL),
(204, 2020, 1, 'Opener exam', 4, '1W', 'agriculture', 49, 'C-', 'Can do better', 6, NULL, NULL),
(205, 2020, 1, 'Opener exam', 5, '1W', 'agriculture', 38, 'D', 'Work hard', 6, NULL, NULL),
(206, 2020, 1, 'Opener exam', 12, '1W', 'agriculture', 67, 'B', 'Very good', 6, NULL, NULL),
(207, 2020, 1, 'Opener exam', 11, '1W', 'agriculture', 73, 'B+', 'Very good', 6, NULL, NULL),
(208, 2020, 1, 'Opener exam', 6, '1E', 'geography', 72, 'B+', 'Very good', 7, NULL, NULL),
(209, 2020, 1, 'Opener exam', 6, '1E', 'business_studies', 78, 'A-', 'Very good', 7, NULL, NULL),
(210, 2020, 1, 'Opener exam', 7, '1E', 'geography', 81, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(211, 2020, 1, 'Opener exam', 7, '1E', 'business_studies', 80, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(212, 2020, 1, 'Opener exam', 8, '1E', 'geography', 81, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(213, 2020, 1, 'Opener exam', 8, '1E', 'business_studies', 58, 'C+', 'Good', 7, NULL, NULL),
(214, 2020, 1, 'Opener exam', 9, '1E', 'geography', 58, 'C+', 'Good', 7, NULL, NULL),
(215, 2020, 1, 'Opener exam', 9, '1E', 'business_studies', 49, 'C-', 'Good', 7, NULL, NULL),
(216, 2020, 1, 'Opener exam', 10, '1E', 'geography', 49, 'C-', 'Can do better', 7, NULL, NULL),
(217, 2020, 1, 'Opener exam', 10, '1E', 'business_studies', 68, 'B', 'Good', 7, NULL, NULL),
(218, 2020, 1, 'Opener exam', 1, '1W', 'geography', 48, 'C-', 'Can do better', 7, NULL, NULL),
(219, 2020, 1, 'Opener exam', 1, '1W', 'business_studies', 69, 'B', 'Very good', 7, NULL, NULL),
(220, 2020, 1, 'Opener exam', 2, '1W', 'geography', 69, 'B', 'Good', 7, NULL, NULL),
(221, 2020, 1, 'Opener exam', 2, '1W', 'business_studies', 54, 'C', 'Can do better', 7, NULL, NULL),
(222, 2020, 1, 'Opener exam', 4, '1W', 'geography', 73, 'B+', 'Very good', 7, NULL, NULL),
(223, 2020, 1, 'Opener exam', 4, '1W', 'business_studies', 69, 'B', 'Very good', 7, NULL, NULL),
(224, 2020, 1, 'Opener exam', 5, '1W', 'geography', 45, 'C-', 'Can do better', 7, NULL, NULL),
(225, 2020, 1, 'Opener exam', 5, '1W', 'business_studies', 72, 'B+', 'Very good', 7, NULL, NULL),
(226, 2020, 1, 'Opener exam', 12, '1W', 'geography', 49, 'C-', 'Can do better', 7, NULL, NULL),
(227, 2020, 1, 'Opener exam', 12, '1W', 'business_studies', 73, 'B+', 'Very good', 7, NULL, NULL),
(228, 2020, 1, 'Opener exam', 11, '1W', 'geography', 58, 'C+', 'Good', 7, NULL, NULL),
(229, 2020, 1, 'Opener exam', 11, '1W', 'business_studies', 60, 'B-', 'Good', 7, NULL, NULL),
(230, 2020, 1, 'Opener exam', 6, '1E', 'kiswahili', 55, 'C+', 'Good', 8, NULL, NULL),
(231, 2020, 1, 'Opener exam', 7, '1E', 'kiswahili', 73, 'B+', 'Very good', 8, NULL, NULL),
(232, 2020, 1, 'Opener exam', 8, '1E', 'kiswahili', 56, 'C+', 'Good', 8, NULL, NULL),
(233, 2020, 1, 'Opener exam', 9, '1E', 'kiswahili', 68, 'B', 'Very good', 8, NULL, NULL),
(234, 2020, 1, 'Opener exam', 10, '1E', 'kiswahili', 65, 'B', 'Good', 8, NULL, NULL),
(235, 2020, 1, 'Opener exam', 1, '1W', 'kiswahili', 77, 'A-', 'Excellent. Keep up', 8, NULL, NULL),
(236, 2020, 1, 'Opener exam', 2, '1W', 'kiswahili', 59, 'C+', 'Good', 8, NULL, NULL),
(237, 2020, 1, 'Opener exam', 4, '1W', 'kiswahili', 45, 'C-', 'Work hard', 8, NULL, NULL),
(238, 2020, 1, 'Opener exam', 5, '1W', 'kiswahili', 51, 'C', 'Good', 8, NULL, NULL),
(239, 2020, 1, 'Opener exam', 11, '1W', 'kiswahili', 63, 'B-', 'Very good', 8, NULL, NULL),
(240, 2020, 1, 'Opener exam', 12, '1W', 'kiswahili', 69, 'B', 'Very good', 8, NULL, NULL),
(241, 2020, 1, 'Opener exam', 6, '1E', 'physics', 77, 'A-', 'Very good', 9, NULL, NULL),
(242, 2020, 1, 'Opener exam', 7, '1E', 'physics', 64, 'B-', 'Good', 9, NULL, NULL),
(243, 2020, 1, 'Opener exam', 8, '1E', 'physics', 48, 'C-', 'Can do better', 9, NULL, NULL),
(244, 2020, 1, 'Opener exam', 9, '1E', 'physics', 61, 'B-', 'Good', 9, NULL, NULL),
(245, 2020, 1, 'Opener exam', 10, '1E', 'physics', 70, 'B+', 'Very good', 9, NULL, NULL),
(246, 2020, 1, 'Opener exam', 1, '1W', 'physics', 48, 'C-', 'Can do better', 9, NULL, NULL),
(247, 2020, 1, 'Opener exam', 2, '1W', 'physics', 74, 'B+', 'Very good', 9, NULL, NULL),
(248, 2020, 1, 'Opener exam', 4, '1W', 'physics', 58, 'C+', 'Good', 9, NULL, NULL),
(249, 2020, 1, 'Opener exam', 5, '1W', 'physics', 79, 'A-', 'Excellent. Keep up', 9, NULL, NULL),
(250, 2020, 1, 'Opener exam', 11, '1W', 'physics', 75, 'A-', 'Very good', 9, NULL, NULL),
(251, 2020, 1, 'Opener exam', 12, '1W', 'physics', 49, 'C-', 'Work hard', 9, NULL, NULL),
(252, 2020, 1, 'Opener exam', 20, '3E', 'biology', 79, 'A-', 'Excellent. Keep up', 2, NULL, NULL),
(253, 2020, 1, 'Opener exam', 13, '3E', 'biology', 67, 'B', 'Good', 2, NULL, NULL),
(254, 2020, 1, 'Opener exam', 20, '3E', 'mathematics', 70, 'B+', 'Good', 5, NULL, NULL),
(255, 2020, 1, 'Opener exam', 20, '3E', 'chemistry', 64, 'B-', 'Good', 5, NULL, NULL),
(256, 2020, 1, 'Opener exam', 13, '3E', 'mathematics', 90, 'A', 'Excellent. Keep up', 5, NULL, NULL),
(257, 2020, 1, 'Opener exam', 13, '3E', 'chemistry', 75, 'A-', 'Excellent. Keep up', 5, NULL, NULL),
(258, 2020, 1, 'Opener exam', 23, '3W', 'mathematics', 56, 'C+', 'Can do better', 5, NULL, NULL),
(259, 2020, 1, 'Opener exam', 23, '3W', 'chemistry', 88, 'A', 'Excellent. Keep up', 5, NULL, NULL),
(260, 2020, 1, 'Opener exam', 24, '3W', 'mathematics', 78, 'A-', 'Excellent. Keep up', 5, NULL, NULL),
(261, 2020, 1, 'Opener exam', 24, '3W', 'chemistry', 70, 'B+', 'Very good', 5, NULL, NULL),
(262, 2020, 1, 'Opener exam', 23, '3W', 'history', 67, 'B', 'Good', 3, NULL, NULL),
(263, 2020, 1, 'Opener exam', 24, '3W', 'cre', 89, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(264, 2020, 1, 'Opener exam', 20, '3E', 'cre', 72, 'B+', 'Very good', 3, NULL, NULL),
(265, 2020, 1, 'Opener exam', 13, '3E', 'history', 76, 'A-', 'Excellent. Keep up', 3, NULL, NULL),
(266, 2020, 1, 'Opener exam', 20, '3E', 'business_studies', 56, 'C+', 'Can do better', 7, NULL, NULL),
(267, 2020, 1, 'Opener exam', 20, '3E', 'geography', 67, 'B', 'Good', 7, NULL, NULL),
(268, 2020, 1, 'Opener exam', 13, '3E', 'business_studies', 80, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(269, 2020, 1, 'Opener exam', 23, '3W', 'business_studies', 77, 'A-', 'Very good', 7, NULL, NULL),
(270, 2020, 1, 'Opener exam', 24, '3W', 'geography', 79, 'A-', 'Excellent. Keep up', 7, NULL, NULL),
(271, 2020, 1, 'Opener exam', 20, '3E', 'english', 54, 'C', 'Can do better', 4, NULL, NULL),
(272, 2020, 1, 'Opener exam', 13, '3E', 'english', 67, 'B', 'Good', 4, NULL, NULL),
(273, 2020, 1, 'Opener exam', 23, '3W', 'english', 71, 'B+', 'Very good', 4, NULL, NULL),
(274, 2020, 1, 'Opener exam', 24, '3W', 'english', 77, 'A-', 'Excellent. Keep up', 4, NULL, NULL),
(275, 2020, 1, 'Opener exam', 23, '3W', 'physics', 75, 'A-', 'Excellent. Keep up', 9, NULL, NULL),
(276, 2020, 1, 'Opener exam', 24, '3W', 'physics', 68, 'B', 'Good', 9, NULL, NULL),
(277, 2020, 1, 'Opener exam', 20, '3E', 'kiswahili', 66, 'B', 'Good', 8, NULL, NULL),
(278, 2020, 1, 'Opener exam', 13, '3E', 'kiswahili', 72, 'B+', 'Very good', 8, NULL, NULL),
(279, 2020, 1, 'Opener exam', 23, '3W', 'kiswahili', 72, 'B+', 'Very good', 8, NULL, NULL),
(280, 2020, 1, 'Opener exam', 24, '3W', 'kiswahili', 56, 'C+', 'Can do better', 8, NULL, NULL),
(281, 2020, 1, 'Mid term exam', 6, '1E', 'chemistry', 70, 'B+', 'Very good', 1, NULL, NULL),
(282, 2020, 1, 'End term exam', 6, '1E', 'chemistry', 78, 'A-', 'Very good', 1, NULL, NULL),
(283, 2020, 1, 'End term exam', 8, '1E', 'chemistry', 64, 'B-', 'Good', 1, NULL, NULL),
(284, 2020, 1, 'End term exam', 9, '1E', 'chemistry', 46, 'C-', 'Can do better', 1, NULL, NULL),
(285, 2020, 1, 'End term exam', 10, '1E', 'chemistry', 80, 'A', 'Excellent. Keep up', 1, NULL, NULL),
(286, 2020, 1, 'End term exam', 26, '1E', 'chemistry', 10, 'E', 'Work hard', 1, NULL, NULL),
(287, 2020, 1, 'End term exam', 4, '1W', 'chemistry', 67, 'B', 'Good', 1, NULL, NULL),
(288, 2020, 1, 'End term exam', 4, '1W', 'mathematics', 78, 'A-', 'Excellent. Keep up', 1, NULL, NULL),
(289, 2020, 1, 'End term exam', 2, '1W', 'chemistry', 65, 'B', 'Good', 1, NULL, NULL),
(290, 2020, 1, 'End term exam', 2, '1W', 'mathematics', 45, 'C-', 'Can do better', 1, NULL, NULL),
(291, 2020, 1, 'End term exam', 5, '1W', 'chemistry', 55, 'C+', 'Good', 1, NULL, NULL),
(292, 2020, 1, 'End term exam', 5, '1W', 'mathematics', 67, 'B', 'Good', 1, NULL, NULL),
(293, 2020, 1, 'End term exam', 11, '1W', 'chemistry', 78, 'A-', 'Excellent. Keep up', 1, NULL, NULL),
(294, 2020, 1, 'End term exam', 11, '1W', 'mathematics', 67, 'B', 'Very good', 1, NULL, NULL),
(295, 2020, 1, 'End term exam', 12, '1W', 'chemistry', 46, 'C-', 'Work hard', 1, NULL, NULL),
(296, 2020, 1, 'End term exam', 12, '1W', 'mathematics', 78, 'A-', 'Excellent. Keep up', 1, NULL, NULL),
(297, 2020, 1, 'End term exam', 32, '1W', 'chemistry', 68, 'B', 'Very good', 1, NULL, NULL),
(298, 2020, 1, 'End term exam', 32, '1W', 'mathematics', 70, 'B+', 'Very good', 1, NULL, NULL),
(299, 2020, 1, 'End term exam', 38, '1W', 'chemistry', 79, 'A-', 'Very good', 1, NULL, NULL),
(300, 2020, 1, 'End term exam', 38, '1W', 'mathematics', 61, 'B-', 'Good', 1, NULL, NULL),
(301, 2020, 1, 'End term exam', 35, '1W', 'chemistry', 49, 'C-', 'Can do better', 1, NULL, NULL),
(302, 2020, 1, 'End term exam', 35, '1W', 'mathematics', 73, 'B+', 'Very good', 1, NULL, NULL),
(303, 2020, 1, 'End term exam', 31, '1W', 'chemistry', 58, 'C+', 'Good', 1, NULL, NULL),
(304, 2020, 1, 'End term exam', 31, '1W', 'mathematics', 45, 'C-', 'Good', 1, NULL, NULL),
(305, 2020, 1, 'End term exam', 39, '1W', 'chemistry', 39, 'D', 'Work hard', 1, NULL, NULL),
(306, 2020, 1, 'End term exam', 39, '1W', 'mathematics', 50, 'C', 'Can do better', 1, NULL, NULL),
(307, 2020, 1, 'End term exam', 40, '1W', 'chemistry', 52, 'C', 'Good', 1, NULL, NULL),
(308, 2020, 1, 'End term exam', 40, '1W', 'mathematics', 76, 'A-', 'Very good', 1, NULL, NULL),
(309, 2020, 1, 'End term exam', 6, '1E', 'biology', 89, 'A', 'Excellent. Keep up', 2, NULL, NULL),
(310, 2020, 1, 'End term exam', 8, '1E', 'biology', 45, 'C-', 'Can do better', 2, NULL, NULL),
(311, 2020, 1, 'End term exam', 9, '1E', 'biology', 78, 'A-', 'Good', 2, NULL, NULL),
(312, 2020, 1, 'End term exam', 10, '1E', 'biology', 61, 'B-', 'Good', 2, NULL, NULL),
(313, 2020, 1, 'End term exam', 25, '1E', 'biology', 55, 'C+', 'Good', 2, NULL, NULL),
(314, 2020, 1, 'End term exam', 26, '1E', 'biology', 72, 'B+', 'Good', 2, NULL, NULL),
(315, 2020, 1, 'End term exam', 28, '1E', 'biology', 65, 'B', 'Good', 2, NULL, NULL),
(316, 2020, 1, 'End term exam', 37, '1E', 'biology', 48, 'C-', 'Can do better', 2, NULL, NULL),
(317, 2020, 1, 'End term exam', 30, '1E', 'biology', 49, 'C-', 'Can do better', 2, NULL, NULL),
(318, 2020, 1, 'End term exam', 29, '1E', 'biology', 67, 'B', 'Good', 2, NULL, NULL),
(319, 2020, 1, 'End term exam', 27, '1E', 'biology', 51, 'C', 'Good', 2, NULL, NULL),
(320, 2020, 1, 'End term exam', 33, '1E', 'biology', 43, 'D+', 'Can do better', 2, NULL, NULL),
(321, 2020, 1, 'End term exam', 36, '1E', 'biology', 61, 'B-', 'Good', 2, NULL, NULL),
(322, 2020, 1, 'End term exam', 2, '1W', 'biology', 63, 'B-', 'Good', 2, NULL, NULL),
(323, 2020, 1, 'End term exam', 4, '1W', 'biology', 89, 'A', 'Excellent. Keep up', 2, NULL, NULL),
(324, 2020, 1, 'End term exam', 5, '1W', 'biology', 51, 'C', 'Can do better', 2, NULL, NULL),
(325, 2020, 1, 'End term exam', 12, '1W', 'biology', 66, 'B', 'Good', 2, NULL, NULL),
(326, 2020, 1, 'End term exam', 32, '1W', 'biology', 49, 'C-', 'Can do better', 2, NULL, NULL),
(327, 2020, 1, 'End term exam', 34, '1W', 'biology', 77, 'A-', 'Very good', 2, NULL, NULL),
(328, 2020, 1, 'End term exam', 40, '1W', 'biology', 30, 'D-', 'Work hard', 2, NULL, NULL),
(329, 2020, 1, 'End term exam', 38, '1W', 'biology', 69, 'B', 'Very good', 2, NULL, NULL),
(330, 2020, 1, 'End term exam', 35, '1W', 'biology', 48, 'C-', 'Can do better', 2, NULL, NULL),
(331, 2020, 1, 'End term exam', 39, '1W', 'biology', 65, 'B', 'Good', 2, NULL, NULL),
(332, 2020, 1, 'End term exam', 6, '1E', 'cre', 67, 'B', 'Very good', 3, NULL, NULL),
(333, 2020, 1, 'End term exam', 6, '1E', 'history', 83, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(334, 2020, 1, 'End term exam', 8, '1E', 'cre', 65, 'B', 'Good', 3, NULL, NULL),
(335, 2020, 1, 'End term exam', 8, '1E', 'history', 67, 'B', 'Good', 3, NULL, NULL),
(336, 2020, 1, 'End term exam', 9, '1E', 'cre', 63, 'B-', 'Good', 3, NULL, NULL),
(337, 2020, 1, 'End term exam', 9, '1E', 'history', 76, 'A-', 'Very good', 3, NULL, NULL),
(338, 2020, 1, 'End term exam', 10, '1E', 'cre', 67, 'B', 'Good', 3, NULL, NULL),
(339, 2020, 1, 'End term exam', 10, '1E', 'history', 56, 'C+', 'Good', 3, NULL, NULL),
(340, 2020, 1, 'End term exam', 26, '1E', 'cre', 49, 'C-', 'Can do better', 3, NULL, NULL),
(341, 2020, 1, 'End term exam', 26, '1E', 'history', 67, 'B', 'Very good', 3, NULL, NULL),
(342, 2020, 1, 'End term exam', 28, '1E', 'cre', 78, 'A-', 'Good', 3, NULL, NULL),
(343, 2020, 1, 'End term exam', 28, '1E', 'history', 89, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(344, 2020, 1, 'End term exam', 29, '1E', 'cre', 57, 'C+', 'Good', 3, NULL, NULL),
(345, 2020, 1, 'End term exam', 29, '1E', 'history', 74, 'B+', 'Very good', 3, NULL, NULL),
(346, 2020, 1, 'End term exam', 36, '1E', 'cre', 46, 'C-', 'Can do better', 3, NULL, NULL),
(347, 2020, 1, 'End term exam', 36, '1E', 'history', 78, 'A-', 'Excellent. Keep up', 3, NULL, NULL),
(348, 2020, 1, 'End term exam', 30, '1E', 'cre', 48, 'C-', 'Good', 3, NULL, NULL),
(349, 2020, 1, 'End term exam', 30, '1E', 'history', 65, 'B', 'Good', 3, NULL, NULL),
(350, 2020, 1, 'End term exam', 27, '1E', 'cre', 71, 'B+', 'Good', 3, NULL, NULL),
(351, 2020, 1, 'End term exam', 27, '1E', 'history', 83, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(352, 2020, 1, 'End term exam', 33, '1E', 'cre', 77, 'A-', 'Excellent. Keep up', 3, NULL, NULL),
(353, 2020, 1, 'End term exam', 33, '1E', 'history', 61, 'B-', 'Very good', 3, NULL, NULL),
(354, 2020, 1, 'End term exam', 37, '1E', 'cre', 56, 'C+', 'Good', 3, NULL, NULL),
(355, 2020, 1, 'End term exam', 37, '1E', 'history', 82, 'A', 'Good', 3, NULL, NULL),
(356, 2020, 1, 'End term exam', 2, '1W', 'cre', 73, 'B+', 'Very good', 3, NULL, NULL),
(357, 2020, 1, 'End term exam', 2, '1W', 'history', 67, 'B', 'Good', 3, NULL, NULL),
(358, 2020, 1, 'End term exam', 4, '1W', 'cre', 56, 'C+', 'Good', 3, NULL, NULL),
(359, 2020, 1, 'End term exam', 4, '1W', 'history', 51, 'C', 'Good', 3, NULL, NULL),
(360, 2020, 1, 'End term exam', 5, '1W', 'cre', 64, 'B-', 'Good', 3, NULL, NULL),
(361, 2020, 1, 'End term exam', 5, '1W', 'history', 63, 'B-', 'Very good', 3, NULL, NULL),
(362, 2020, 1, 'End term exam', 11, '1W', 'cre', 72, 'B+', 'Good', 3, NULL, NULL),
(363, 2020, 1, 'End term exam', 11, '1W', 'history', 89, 'A', 'Very good', 3, NULL, NULL),
(364, 2020, 1, 'End term exam', 12, '1W', 'cre', 90, 'A', 'Excellent. Keep up', 3, NULL, NULL),
(365, 2020, 1, 'End term exam', 12, '1W', 'history', 59, 'C+', 'Can do better', 3, NULL, NULL),
(366, 2020, 1, 'End term exam', 31, '1W', 'cre', 40, 'D+', 'Work hard', 3, NULL, NULL),
(367, 2020, 1, 'End term exam', 31, '1W', 'history', 32, 'D-', 'Work hard', 3, NULL, NULL),
(368, 2020, 1, 'End term exam', 32, '1W', 'cre', 65, 'B', 'Good', 3, NULL, NULL),
(369, 2020, 1, 'End term exam', 32, '1W', 'history', 71, 'B+', 'Very good', 3, NULL, NULL),
(370, 2020, 1, 'End term exam', 34, '1W', 'cre', 78, 'A-', 'Very good', 3, NULL, NULL),
(371, 2020, 1, 'End term exam', 34, '1W', 'history', 63, 'B-', 'Good', 3, NULL, NULL),
(372, 2020, 1, 'End term exam', 35, '1W', 'cre', 55, 'C+', 'Good', 3, NULL, NULL),
(373, 2020, 1, 'End term exam', 35, '1W', 'history', 78, 'A-', 'Good', 3, NULL, NULL),
(374, 2020, 1, 'End term exam', 38, '1W', 'cre', 77, 'A-', 'Very good', 3, NULL, NULL),
(375, 2020, 1, 'End term exam', 38, '1W', 'history', 39, 'D', 'Work hard', 3, NULL, NULL),
(376, 2020, 1, 'End term exam', 40, '1W', 'cre', 66, 'B', 'Good', 3, NULL, NULL),
(377, 2020, 1, 'End term exam', 40, '1W', 'history', 70, 'B+', 'Very good', 3, NULL, NULL),
(378, 2020, 1, 'End term exam', 6, '1E', 'english', 56, 'C+', 'Good', 4, NULL, NULL),
(379, 2020, 1, 'End term exam', 10, '1E', 'english', 67, 'B', 'Very good', 4, NULL, NULL),
(380, 2020, 1, 'End term exam', 9, '1E', 'english', 57, 'C+', 'Good', 4, NULL, NULL),
(381, 2020, 1, 'End term exam', 26, '1E', 'english', 76, 'A-', 'Excellent. Keep up', 4, NULL, NULL),
(382, 2020, 1, 'End term exam', 29, '1E', 'english', 67, 'B', 'Very good', 4, NULL, NULL),
(383, 2020, 1, 'End term exam', 30, '1E', 'english', 56, 'C+', 'Good', 4, NULL, NULL),
(384, 2020, 1, 'End term exam', 28, '1E', 'english', 71, 'B+', 'Excellent. Keep up', 4, NULL, NULL),
(385, 2020, 1, 'End term exam', 25, '1E', 'english', 67, 'B', 'Good', 4, NULL, NULL),
(386, 2020, 1, 'End term exam', 27, '1E', 'english', 66, 'B', 'Good', 4, NULL, NULL),
(387, 2020, 1, 'End term exam', 33, '1E', 'english', 56, 'C+', 'Very good', 4, NULL, NULL),
(388, 2020, 1, 'End term exam', 36, '1E', 'english', 43, 'D+', 'Can do better', 4, NULL, NULL),
(389, 2020, 1, 'End term exam', 37, '1E', 'english', 72, 'B+', 'Good', 4, NULL, NULL),
(390, 2020, 1, 'End term exam', 2, '1W', 'english', 56, 'C+', 'Good', 4, NULL, NULL),
(391, 2020, 1, 'End term exam', 4, '1W', 'english', 67, 'B', 'Very good', 4, NULL, NULL),
(392, 2020, 1, 'End term exam', 5, '1W', 'english', 73, 'B+', 'Very good', 4, NULL, NULL),
(393, 2020, 1, 'End term exam', 11, '1W', 'english', 78, 'A-', 'Very good', 4, NULL, NULL),
(394, 2020, 1, 'End term exam', 12, '1W', 'english', 67, 'B', 'Very good', 4, NULL, NULL),
(395, 2020, 1, 'End term exam', 32, '1W', 'english', 64, 'B-', 'Good', 4, NULL, NULL),
(396, 2020, 1, 'End term exam', 35, '1W', 'english', 72, 'B+', 'Very good', 4, NULL, NULL),
(397, 2020, 1, 'End term exam', 38, '1W', 'english', 64, 'B-', 'Good', 4, NULL, NULL),
(398, 2020, 1, 'End term exam', 34, '1W', 'english', 76, 'A-', 'Very good', 4, NULL, NULL),
(399, 2020, 1, 'End term exam', 39, '1W', 'english', 65, 'B', 'Very good', 4, NULL, NULL),
(400, 2020, 1, 'End term exam', 40, '1W', 'english', 56, 'C+', 'Good', 4, NULL, NULL),
(401, 2020, 1, 'End term exam', 6, '1E', 'mathematics', 78, 'A-', 'Very good', 5, NULL, NULL),
(402, 2020, 1, 'End term exam', 8, '1E', 'mathematics', 67, 'B', 'Good', 5, NULL, NULL),
(403, 2020, 1, 'End term exam', 9, '1E', 'mathematics', 56, 'C+', 'Good', 5, NULL, NULL),
(404, 2020, 1, 'End term exam', 6, '1E', 'kiswahili', 78, 'A-', 'Excellent. Keep up', 8, NULL, NULL),
(405, 2020, 1, 'End term exam', 8, '1E', 'kiswahili', 56, 'C+', 'Excellent. Keep up', 8, NULL, NULL),
(406, 2020, 1, 'End term exam', 9, '1E', 'kiswahili', 67, 'B', 'Very good', 8, NULL, NULL),
(407, 2020, 1, 'End term exam', 10, '1E', 'kiswahili', 49, 'C-', 'Can do better', 8, NULL, NULL),
(408, 2020, 1, 'End term exam', 25, '1E', 'kiswahili', 74, 'B+', 'Very good', 8, NULL, NULL),
(409, 2020, 1, 'End term exam', 26, '1E', 'kiswahili', 46, 'C-', 'Can do better', 8, NULL, NULL),
(410, 2020, 1, 'End term exam', 37, '1E', 'kiswahili', 66, 'B', 'Good', 8, NULL, NULL),
(411, 2020, 1, 'End term exam', 28, '1E', 'kiswahili', 58, 'C+', 'Good', 8, NULL, NULL),
(412, 2020, 1, 'End term exam', 27, '1E', 'kiswahili', 79, 'A-', 'Excellent. Keep up', 8, NULL, NULL),
(413, 2020, 1, 'End term exam', 29, '1E', 'kiswahili', 71, 'B+', 'Very good', 8, NULL, NULL),
(414, 2020, 1, 'End term exam', 30, '1E', 'kiswahili', 51, 'C', 'Excellent. Keep up', 8, NULL, NULL),
(415, 2020, 1, 'End term exam', 36, '1E', 'kiswahili', 49, 'C-', 'Excellent. Keep up', 8, NULL, NULL),
(416, 2020, 1, 'End term exam', 33, '1E', 'kiswahili', 55, 'C+', 'Good', 8, NULL, NULL),
(417, 2020, 1, 'End term exam', 2, '1W', 'kiswahili', 61, 'B-', 'Good', 8, NULL, NULL),
(418, 2020, 1, 'End term exam', 4, '1W', 'kiswahili', 56, 'C+', 'Good', 8, NULL, NULL),
(419, 2020, 1, 'End term exam', 5, '1W', 'kiswahili', 63, 'B-', 'Good', 8, NULL, NULL),
(420, 2020, 1, 'End term exam', 12, '1W', 'kiswahili', 71, 'B+', 'Very good', 8, NULL, NULL),
(421, 2020, 1, 'End term exam', 31, '1W', 'kiswahili', 63, 'B-', 'Good', 8, NULL, NULL),
(422, 2020, 1, 'End term exam', 34, '1W', 'kiswahili', 60, 'B-', 'Very good', 8, NULL, NULL),
(423, 2020, 1, 'End term exam', 38, '1W', 'kiswahili', 66, 'B', 'Good', 8, NULL, NULL),
(424, 2020, 1, 'End term exam', 39, '1W', 'kiswahili', 39, 'D', 'Work hard', 8, NULL, NULL),
(425, 2020, 1, 'End term exam', 35, '1W', 'kiswahili', 48, 'C-', 'Can do better', 8, NULL, NULL),
(426, 2020, 1, 'End term exam', 32, '1W', 'kiswahili', 71, 'B+', 'Very good', 8, NULL, NULL),
(427, 2020, 1, 'End term exam', 40, '1W', 'kiswahili', 59, 'C+', 'Can do better', 8, NULL, NULL),
(428, 2020, 1, 'End term exam', 6, '1E', 'geography', 61, 'B-', 'Good', 7, NULL, NULL),
(429, 2020, 1, 'End term exam', 6, '1E', 'business_studies', 67, 'B', 'Good', 7, NULL, NULL),
(430, 2020, 1, 'End term exam', 8, '1E', 'geography', 57, 'C+', 'Good', 7, NULL, NULL),
(431, 2020, 1, 'End term exam', 8, '1E', 'business_studies', 78, 'A-', 'Very good', 7, NULL, NULL),
(432, 2020, 1, 'End term exam', 9, '1E', 'geography', 58, 'C+', 'Can do better', 7, NULL, NULL),
(433, 2020, 1, 'End term exam', 9, '1E', 'business_studies', 67, 'B', 'Good', 7, NULL, NULL),
(434, 2020, 1, 'End term exam', 10, '1E', 'geography', 77, 'A-', 'Very good', 7, NULL, NULL),
(435, 2020, 1, 'End term exam', 10, '1E', 'business_studies', 56, 'C+', 'Good', 7, NULL, NULL),
(436, 2020, 1, 'End term exam', 25, '1E', 'geography', 67, 'B', 'Very good', 7, NULL, NULL),
(437, 2020, 1, 'End term exam', 25, '1E', 'business_studies', 69, 'B', 'Good', 7, NULL, NULL),
(438, 2020, 1, 'End term exam', 26, '1E', 'geography', 74, 'B+', 'Very good', 7, NULL, NULL),
(439, 2020, 1, 'End term exam', 26, '1E', 'business_studies', 60, 'B-', 'Good', 7, NULL, NULL),
(440, 2020, 1, 'End term exam', 27, '1E', 'geography', 49, 'C-', 'Can do better', 7, NULL, NULL),
(441, 2020, 1, 'End term exam', 27, '1E', 'business_studies', 74, 'B+', 'Excellent. Keep up', 7, NULL, NULL),
(442, 2020, 1, 'End term exam', 30, '1E', 'geography', 56, 'C+', 'Very good', 7, NULL, NULL),
(443, 2020, 1, 'End term exam', 30, '1E', 'business_studies', 58, 'C+', 'Very good', 7, NULL, NULL),
(444, 2020, 1, 'End term exam', 29, '1E', 'geography', 62, 'B-', 'Good', 7, NULL, NULL),
(445, 2020, 1, 'End term exam', 29, '1E', 'business_studies', 67, 'B', 'Good', 7, NULL, NULL),
(446, 2020, 1, 'End term exam', 25, '1E', 'mathematics', 78, 'A-', 'Very good', 5, NULL, NULL),
(447, 2020, 1, 'End term exam', 28, '1E', 'geography', 75, 'A-', 'Excellent. Keep up', 7, NULL, NULL),
(448, 2020, 1, 'End term exam', 28, '1E', 'business_studies', 39, 'D', 'Can do better', 7, NULL, NULL),
(449, 2020, 1, 'End term exam', 27, '1E', 'mathematics', 56, 'C+', 'Good', 5, NULL, NULL),
(450, 2020, 1, 'End term exam', 33, '1E', 'geography', 66, 'B', 'Very good', 7, NULL, NULL),
(451, 2020, 1, 'End term exam', 33, '1E', 'business_studies', 69, 'B', 'Very good', 7, NULL, NULL),
(452, 2020, 1, 'End term exam', 36, '1E', 'geography', 64, 'B-', 'Good', 7, NULL, NULL),
(453, 2020, 1, 'End term exam', 36, '1E', 'business_studies', 73, 'B+', 'Very good', 7, NULL, NULL),
(454, 2020, 1, 'End term exam', 30, '1E', 'mathematics', 45, 'C-', 'Can do better', 5, NULL, NULL),
(455, 2020, 1, 'End term exam', 37, '1E', 'geography', 56, 'C+', 'Good', 7, NULL, NULL),
(456, 2020, 1, 'End term exam', 37, '1E', 'business_studies', 63, 'B-', 'Good', 7, NULL, NULL),
(457, 2020, 1, 'End term exam', 26, '1E', 'mathematics', 80, 'A', 'Excellent. Keep up', 5, NULL, NULL),
(458, 2020, 1, 'End term exam', 28, '1E', 'mathematics', 80, 'A', 'Very good', 5, NULL, NULL),
(459, 2020, 1, 'End term exam', 2, '1W', 'geography', 49, 'C-', 'Can do better', 7, NULL, NULL),
(460, 2020, 1, 'End term exam', 2, '1W', 'business_studies', 43, 'D+', 'Can do better', 7, NULL, NULL),
(461, 2020, 1, 'End term exam', 4, '1W', 'geography', 67, 'B', 'Good', 7, NULL, NULL),
(462, 2020, 1, 'End term exam', 4, '1W', 'business_studies', 71, 'B+', 'Very good', 7, NULL, NULL),
(463, 2020, 1, 'End term exam', 5, '1W', 'geography', 72, 'B+', 'Very good', 7, NULL, NULL),
(464, 2020, 1, 'End term exam', 5, '1W', 'business_studies', 56, 'C+', 'Good', 7, NULL, NULL),
(465, 2020, 1, 'End term exam', 32, '1W', 'geography', 64, 'B-', 'Good', 7, NULL, NULL),
(466, 2020, 1, 'End term exam', 32, '1W', 'business_studies', 47, 'C-', 'Can do better', 7, NULL, NULL),
(467, 2020, 1, 'End term exam', 11, '1W', 'geography', 67, 'B', 'Good', 7, NULL, NULL),
(468, 2020, 1, 'End term exam', 11, '1W', 'business_studies', 49, 'C-', 'Can do better', 7, NULL, NULL),
(469, 2020, 1, 'End term exam', 12, '1W', 'geography', 69, 'B', 'Very good', 7, NULL, NULL),
(470, 2020, 1, 'End term exam', 12, '1W', 'business_studies', 61, 'B-', 'Good', 7, NULL, NULL),
(471, 2020, 1, 'End term exam', 31, '1W', 'geography', 81, 'A', 'Excellent. Keep up', 7, NULL, NULL),
(472, 2020, 1, 'End term exam', 31, '1W', 'business_studies', 74, 'B+', 'Excellent. Keep up', 7, NULL, NULL),
(473, 2020, 1, 'End term exam', 38, '1W', 'geography', 56, 'C+', 'Good', 7, NULL, NULL),
(474, 2020, 1, 'End term exam', 38, '1W', 'business_studies', 67, 'B', 'Very good', 7, NULL, NULL),
(475, 2020, 1, 'End term exam', 35, '1W', 'geography', 63, 'B-', 'Good', 7, NULL, NULL),
(476, 2020, 1, 'End term exam', 35, '1W', 'business_studies', 58, 'C+', 'Good', 7, NULL, NULL),
(477, 2020, 1, 'End term exam', 34, '1W', 'geography', 71, 'B+', 'Very good', 7, NULL, NULL),
(478, 2020, 1, 'End term exam', 34, '1W', 'business_studies', 70, 'B+', 'Good', 7, NULL, NULL),
(479, 2020, 1, 'End term exam', 39, '1W', 'geography', 48, 'C-', 'Can do better', 7, NULL, NULL),
(480, 2020, 1, 'End term exam', 39, '1W', 'business_studies', 78, 'A-', 'Very good', 7, NULL, NULL),
(481, 2020, 1, 'End term exam', 40, '1W', 'geography', 34, 'D-', 'Work hard', 7, NULL, NULL),
(482, 2020, 1, 'End term exam', 40, '1W', 'business_studies', 48, 'C-', 'Work hard', 7, NULL, NULL),
(483, 2020, 1, 'End term exam', 6, '1E', 'physics', 67, 'B', 'Very good', 9, NULL, NULL),
(484, 2020, 1, 'End term exam', 8, '1E', 'physics', 56, 'C+', 'Good', 9, NULL, NULL),
(485, 2020, 1, 'End term exam', 9, '1E', 'physics', 45, 'C-', 'Can do better', 9, NULL, NULL),
(486, 2020, 1, 'End term exam', 10, '1E', 'physics', 57, 'C+', 'Good', 9, NULL, NULL),
(487, 2020, 1, 'End term exam', 25, '1E', 'physics', 78, 'A-', 'Excellent. Keep up', 9, NULL, NULL),
(488, 2020, 1, 'End term exam', 27, '1E', 'physics', 68, 'B', 'Very good', 9, NULL, NULL),
(489, 2020, 1, 'End term exam', 37, '1E', 'physics', 73, 'B+', 'Very good', 9, NULL, NULL),
(490, 2020, 1, 'End term exam', 29, '1E', 'physics', 78, 'A-', 'Excellent. Keep up', 9, NULL, NULL),
(491, 2020, 1, 'End term exam', 28, '1E', 'physics', 73, 'B+', 'Excellent. Keep up', 9, NULL, NULL),
(492, 2020, 1, 'End term exam', 26, '1E', 'physics', 32, 'D-', 'Can do better', 9, NULL, NULL),
(493, 2020, 1, 'End term exam', 33, '1E', 'physics', 59, 'C+', 'Very good', 9, NULL, NULL),
(494, 2020, 1, 'End term exam', 36, '1E', 'physics', 48, 'C-', 'Very good', 9, NULL, NULL),
(495, 2020, 1, 'End term exam', 2, '1W', 'physics', 78, 'A-', 'Excellent. Keep up', 9, NULL, NULL),
(496, 2020, 1, 'End term exam', 4, '1W', 'physics', 59, 'C+', 'Very good', 9, NULL, NULL),
(497, 2020, 1, 'End term exam', 5, '1W', 'physics', 60, 'B-', 'Very good', 9, NULL, NULL),
(498, 2020, 1, 'End term exam', 11, '1W', 'physics', 49, 'C-', 'Can do better', 9, NULL, NULL),
(499, 2020, 1, 'End term exam', 12, '1W', 'physics', 76, 'A-', 'Excellent. Keep up', 9, NULL, NULL),
(500, 2020, 1, 'End term exam', 38, '1W', 'physics', 54, 'C', 'Good', 9, NULL, NULL),
(501, 2020, 1, 'End term exam', 35, '1W', 'physics', 61, 'B-', 'Good', 9, NULL, NULL),
(502, 2020, 1, 'End term exam', 34, '1W', 'physics', 67, 'B', 'Good', 9, NULL, NULL),
(503, 2020, 1, 'End term exam', 31, '1W', 'physics', 76, 'A-', 'Very good', 9, NULL, NULL),
(504, 2020, 1, 'End term exam', 32, '1W', 'physics', 71, 'B+', 'Excellent. Keep up', 9, NULL, NULL),
(505, 2020, 1, 'End term exam', 39, '1W', 'physics', 41, 'D+', 'Can do better', 9, NULL, NULL),
(506, 2020, 1, 'End term exam', 40, '1W', 'physics', 64, 'B-', 'Good', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks_ranking`
--

CREATE TABLE `student_marks_ranking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `term` int(11) NOT NULL,
  `exam_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `english` int(11) DEFAULT NULL,
  `kiswahili` int(11) DEFAULT NULL,
  `mathematics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `biology` int(11) DEFAULT NULL,
  `business_studies` int(11) DEFAULT NULL,
  `geography` int(11) DEFAULT NULL,
  `cre` int(11) DEFAULT NULL,
  `agriculture` int(11) DEFAULT NULL,
  `history` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `average_marks` double(4,2) DEFAULT NULL,
  `average_grade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks_ranking`
--

INSERT INTO `student_marks_ranking` (`id`, `year`, `term`, `exam_type`, `class_name`, `student_id`, `english`, `kiswahili`, `mathematics`, `chemistry`, `physics`, `biology`, `business_studies`, `geography`, `cre`, `agriculture`, `history`, `total`, `average_marks`, `average_grade`, `created_at`, `updated_at`) VALUES
(1, 2020, 1, 'End term', '1W', 1, 70, 78, 77, 70, 68, 76, 78, 57, 77, 69, 67, 800, 72.73, 'B+', NULL, NULL),
(2, 2020, 1, 'End term', '1W', 2, 62, 56, 70, 78, 79, 74, 70, 78, 73, 58, 78, 775, 70.45, 'B+', NULL, NULL),
(3, 2020, 1, 'End term', '1W', 4, 57, 77, 78, 45, 63, 59, 63, 90, 56, 81, 65, 723, 65.73, 'B', NULL, NULL),
(4, 2020, 1, 'End term', '1W', 5, 73, 90, 65, 76, 45, 45, 82, 78, 68, 44, 56, 740, 67.27, 'B', NULL, NULL),
(5, 2020, 1, 'End term', '1E', 6, 67, 78, 78, 56, 68, 60, 69, 59, 88, 56, 71, 750, 68.18, 'B', NULL, NULL),
(6, 2020, 1, 'End term', '1E', 7, 53, 56, 55, 89, 75, 52, 67, 73, 69, 49, 79, 717, 65.18, 'B', NULL, NULL),
(7, 2020, 1, 'End term', '1E', 8, 59, 83, 49, 67, 59, 67, 67, 84, 55, 78, 68, 736, 66.91, 'B', NULL, NULL),
(8, 2020, 1, 'End term', '1E', 9, 48, 69, 69, 59, 83, 73, 63, 55, 60, 56, 78, 713, 64.82, 'B-', NULL, NULL),
(9, 2020, 1, 'End term', '1E', 10, 78, 45, 49, 77, 83, 77, 78, 66, 63, 77, 54, 747, 67.91, 'B', NULL, NULL),
(10, 2020, 1, 'End term', '1W', 11, NULL, NULL, 74, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 144, 13.09, 'E', NULL, NULL),
(11, 2020, 1, 'End term', '1W', 12, NULL, NULL, 52, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 106, 9.64, 'E', NULL, NULL),
(21, 2020, 1, 'Opener exam', '1E', 6, 55, 55, 45, 75, 77, 56, 78, 72, 88, 56, 72, 729, 66.27, 'B', NULL, NULL),
(22, 2020, 1, 'Opener exam', '1E', 7, 70, 73, 78, 78, 64, 86, 80, 81, 56, 67, 68, 801, 72.82, 'B+', NULL, NULL),
(23, 2020, 1, 'Opener exam', '1E', 8, 63, 56, 48, 49, 48, 71, 58, 81, 46, 60, 59, 639, 58.09, 'C+', NULL, NULL),
(24, 2020, 1, 'Opener exam', '1E', 9, 48, 68, 77, 81, 61, 44, 49, 58, 67, 70, 58, 681, 61.91, 'B-', NULL, NULL),
(25, 2020, 1, 'Opener exam', '1E', 10, 67, 65, 64, 60, 70, 58, 68, 49, 69, 45, 50, 665, 60.45, 'B-', NULL, NULL),
(26, 2020, 1, 'Opener exam', '1W', 1, 78, 77, 77, 81, 48, 39, 69, 48, 64, 57, 72, 710, 64.55, 'B-', NULL, NULL),
(27, 2020, 1, 'Opener exam', '1W', 2, 58, 59, 70, 36, 74, 68, 54, 69, 77, 66, 48, 679, 61.73, 'B-', NULL, NULL),
(28, 2020, 1, 'Opener exam', '1W', 4, 38, 45, 78, 58, 58, 76, 69, 73, 57, 49, 78, 679, 61.73, 'B-', NULL, NULL),
(29, 2020, 1, 'Opener exam', '1W', 5, 61, 51, 65, 45, 79, 88, 72, 45, 56, 38, 63, 663, 60.27, 'B-', NULL, NULL),
(30, 2020, 1, 'Opener exam', '1W', 11, 52, 63, 74, 89, 75, 63, 60, 58, 70, 73, 65, 742, 67.45, 'B', NULL, NULL),
(31, 2020, 1, 'Opener exam', '1W', 12, 71, 69, 52, 66, 49, 49, 73, 49, 49, 67, 68, 662, 60.18, 'B-', NULL, NULL),
(32, 2020, 1, 'Opener exam', '3E', 20, 54, 66, 70, 64, NULL, 79, 56, 67, 72, NULL, NULL, 528, 66.00, 'B', NULL, NULL),
(33, 2020, 1, 'Opener exam', '3E', 13, 67, 72, 90, 75, NULL, 67, 80, NULL, NULL, NULL, 76, 527, 75.29, 'A-', NULL, NULL),
(34, 2020, 1, 'Opener exam', '3W', 23, 71, 72, 56, 88, 75, NULL, 77, NULL, NULL, NULL, 67, 506, 72.29, 'B+', NULL, NULL),
(35, 2020, 1, 'Opener exam', '3W', 24, 77, 56, 78, 70, 68, NULL, NULL, 79, 89, NULL, NULL, 517, 73.86, 'B+', NULL, NULL),
(36, 2020, 1, 'Mid term exam', '1E', 6, NULL, NULL, NULL, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70, 6.36, 'E', NULL, NULL),
(37, 2020, 1, 'End term exam', '1E', 6, 56, 78, 78, 78, 67, 89, 67, 61, 67, NULL, 83, 724, 65.82, 'B', NULL, NULL),
(38, 2020, 1, 'End term exam', '1E', 8, NULL, 56, 67, 64, 56, 45, 78, 57, 65, NULL, 67, 555, 50.45, 'C', NULL, NULL),
(39, 2020, 1, 'End term exam', '1E', 9, 57, 67, 56, 46, 45, 78, 67, 58, 63, NULL, 76, 613, 55.73, 'C+', NULL, NULL),
(40, 2020, 1, 'End term exam', '1E', 10, 67, 49, NULL, 80, 57, 61, 56, 77, 67, NULL, 56, 570, 51.82, 'C', NULL, NULL),
(41, 2020, 1, 'End term exam', '1E', 26, 76, 46, 80, 10, 32, 72, 60, 74, 49, NULL, 67, 566, 51.45, 'C', NULL, NULL),
(42, 2020, 1, 'End term exam', '1W', 4, 67, 56, 78, 67, 59, 89, 71, 67, 56, NULL, 51, 661, 60.09, 'B-', NULL, NULL),
(43, 2020, 1, 'End term exam', '1W', 2, 56, 61, 45, 65, 78, 63, 43, 49, 73, NULL, 67, 600, 54.55, 'C', NULL, NULL),
(44, 2020, 1, 'End term exam', '1W', 5, 73, 63, 67, 55, 60, 51, 56, 72, 64, NULL, 63, 624, 56.73, 'C+', NULL, NULL),
(45, 2020, 1, 'End term exam', '1W', 11, 78, NULL, 67, 78, 49, NULL, 49, 67, 72, NULL, 89, 549, 49.91, 'C-', NULL, NULL),
(46, 2020, 1, 'End term exam', '1W', 12, 67, 71, 78, 46, 76, 66, 61, 69, 90, NULL, 59, 683, 62.09, 'B-', NULL, NULL),
(47, 2020, 1, 'End term exam', '1W', 32, 64, 71, 70, 68, 71, 49, 47, 64, 65, NULL, 71, 640, 58.18, 'C+', NULL, NULL),
(48, 2020, 1, 'End term exam', '1W', 38, 64, 66, 61, 79, 54, 69, 67, 56, 77, NULL, 39, 632, 57.45, 'C+', NULL, NULL),
(49, 2020, 1, 'End term exam', '1W', 35, 72, 48, 73, 49, 61, 48, 58, 63, 55, NULL, 78, 605, 55.00, 'C+', NULL, NULL),
(50, 2020, 1, 'End term exam', '1W', 31, NULL, 63, 45, 58, 76, NULL, 74, 81, 40, NULL, 32, 469, 42.64, 'D+', NULL, NULL),
(51, 2020, 1, 'End term exam', '1W', 39, 65, 39, 50, 39, 41, 65, 78, 48, NULL, NULL, NULL, 425, 38.64, 'D', NULL, NULL),
(52, 2020, 1, 'End term exam', '1W', 40, 56, 59, 76, 52, 64, 30, 48, 34, 66, NULL, 70, 555, 50.45, 'C', NULL, NULL),
(53, 2020, 1, 'End term exam', '1E', 25, 67, 74, 78, NULL, 78, 55, 69, 67, NULL, NULL, NULL, 488, 44.36, 'D+', NULL, NULL),
(54, 2020, 1, 'End term exam', '1E', 28, 71, 58, 80, NULL, 73, 65, 39, 75, 78, NULL, 89, 628, 57.09, 'C+', NULL, NULL),
(55, 2020, 1, 'End term exam', '1E', 37, 72, 66, NULL, NULL, 73, 48, 63, 56, 56, NULL, 82, 516, 46.91, 'C-', NULL, NULL),
(56, 2020, 1, 'End term exam', '1E', 30, 56, 51, 45, NULL, NULL, 49, 58, 56, 48, NULL, 65, 428, 38.91, 'D', NULL, NULL),
(57, 2020, 1, 'End term exam', '1E', 29, 67, 71, NULL, NULL, 78, 67, 67, 62, 57, NULL, 74, 543, 49.36, 'C-', NULL, NULL),
(58, 2020, 1, 'End term exam', '1E', 27, 66, 79, 56, NULL, 68, 51, 74, 49, 71, NULL, 83, 597, 54.27, 'C', NULL, NULL),
(59, 2020, 1, 'End term exam', '1E', 33, 56, 55, NULL, NULL, 59, 43, 69, 66, 77, NULL, 61, 486, 44.18, 'D+', NULL, NULL),
(60, 2020, 1, 'End term exam', '1E', 36, 43, 49, NULL, NULL, 48, 61, 73, 64, 46, NULL, 78, 462, 42.00, 'D+', NULL, NULL),
(61, 2020, 1, 'End term exam', '1W', 34, 76, 60, NULL, NULL, 67, 77, 70, 71, 78, NULL, 63, 562, 51.09, 'C', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_parent`
--

CREATE TABLE `student_parent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_parent`
--

INSERT INTO `student_parent` (`id`, `student_id`, `parent_id`, `relationship`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 2, 3, 'Father', NULL, NULL),
(4, 2, 4, 'Mother', NULL, NULL),
(5, 3, 5, NULL, NULL, NULL),
(6, 4, 6, 'Father', NULL, NULL),
(7, 4, 7, 'Mother', NULL, NULL),
(8, 5, 8, 'Mother', NULL, NULL),
(9, 6, 9, 'Father', NULL, NULL),
(10, 6, 10, 'Mother', NULL, NULL),
(11, 7, 11, 'Mother', NULL, NULL),
(12, 7, 12, 'Father', NULL, NULL),
(13, 8, 13, 'Father', NULL, NULL),
(14, 8, 14, 'Mother', NULL, NULL),
(15, 9, 15, 'Father', NULL, NULL),
(16, 9, 16, 'Mother', NULL, NULL),
(17, 10, 17, 'Mother', NULL, NULL),
(18, 11, 18, 'Guardian', NULL, NULL),
(19, 12, 19, 'Father', NULL, NULL),
(20, 13, 20, NULL, NULL, NULL),
(21, 13, 21, NULL, NULL, NULL),
(22, 15, 22, NULL, NULL, NULL),
(23, 17, 23, NULL, NULL, NULL),
(24, 19, 24, NULL, NULL, NULL),
(25, 20, 25, NULL, NULL, NULL),
(26, 20, 26, NULL, NULL, NULL),
(27, 21, 27, NULL, NULL, NULL),
(28, 21, 28, NULL, NULL, NULL),
(29, 21, 29, NULL, NULL, NULL),
(30, 20, 30, 'Father', NULL, NULL),
(31, 5, 30, 'Guardian', NULL, NULL),
(32, 26, 18, 'Guardian', NULL, NULL),
(33, 24, 20, 'Guardian', NULL, NULL),
(35, 9, 13, 'Guardian', NULL, NULL),
(36, 53, 37, 'Father', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tsc_no` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_hired` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `profile_pic` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_left` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `phone_no`, `tsc_no`, `id_no`, `password`, `gender`, `subject_1`, `subject_2`, `religion`, `nationality`, `date_hired`, `status`, `profile_pic`, `date_left`, `created_at`, `updated_at`) VALUES
(1, 'Brentone', 'Alistar', 'Okeyo', 'ibrentone.alistar@gmail.com', '0740096095', 6773275, 33064829, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'mathematics', 'chemistry', 'Christian', 'Kenyan', '2020-02-28', 'active', '1_1615182587.jpg', NULL, '2020-02-28 04:26:36', '2020-02-28 04:26:36'),
(2, 'Shantel', 'Kamanthe', 'Matheka', 'shantelkamanthe@gmail.com', '0718300201', 6732483, 12345678, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'biology', 'agriculture', 'Islam', 'Kenyan', '2020-02-28', 'active', '2_1603456271.jpeg', NULL, '2020-02-28 04:27:22', '2020-02-28 04:27:22'),
(3, 'Justus', 'Omondi', 'Otieno', 'justusomondi@gmail.com', '0739847233', 7836463, 73475643, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'cre', 'history', 'Christian', 'Kenyan', '2020-02-28', 'active', '3_1603577030.jpeg', NULL, '2020-02-28 04:28:23', '2020-02-28 04:28:23'),
(4, 'Eve', 'Wambui', 'Mangi', 'evewambui@gmail.com', '0798973724', 6327467, 23934863, '$2y$10$ZBfQbslPEXoqvYPY/9fg0ODKSVbsydTnERCvc5gBi0VKAjFN2GHfy', 'Male', 'english', 'literature', 'Christian', 'Kenyan', '2020-02-28', 'active', NULL, NULL, '2020-02-28 04:29:20', '2020-02-28 04:29:20'),
(5, 'Brian', 'Musyoki', 'Kimatu', 'brianmusyoki@gmail.com', '0734873744', 2683763, 33894673, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'mathematics', 'chemistry', 'Christian', 'Kenyan', '2020-02-29', 'active', '5_1603456491.jpeg', NULL, '2020-02-29 02:53:09', '2020-02-29 02:53:09'),
(6, 'Eve', 'Mbinya', 'Peter', 'evembinya@gmail.com', '0718422812', 6873473, 23483332, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Female', 'biology', 'agriculture', 'Christian', 'Kenyan', '2020-02-29', 'active', NULL, NULL, '2020-02-29 06:34:32', '2020-02-29 06:34:32'),
(7, 'McDonald', 'Kimani', 'Mwangi', 'kimanimwangi@gmail.com', '0739843420', 9837433, 36483423, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'business_studies', 'geography', 'Christian', 'Kenyan', '2020-03-05', 'active', NULL, NULL, '2020-03-05 19:52:57', '2020-03-05 19:52:57'),
(8, 'Precious', 'Mbinya', 'Kimole', 'preciousmbinya@gmail.com', '0738423356', 8359532, 34942795, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Female', 'kiswahili', 'cre', 'Christian', 'Kenyan', '2020-03-05', 'active', NULL, NULL, '2020-03-05 19:54:30', '2020-03-05 19:54:30'),
(9, 'Justus', 'Muoka', 'Mawili', 'justusmuoka92@gmail.com', '0740483323', 7484294, 38442943, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'physics', 'mathematics', 'Christian', 'Kenyan', '2020-03-05', 'active', NULL, NULL, '2020-03-05 19:56:02', '2020-03-05 19:56:02'),
(11, 'DAVID', 'MALAMU', 'Mikai', 'davidmalamu@gmail.com', '0739283792', 9089899, 67676767, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'chemistry', 'physics', 'Other', 'Tanzania', '2020-03-10', 'active', NULL, NULL, '2020-03-10 19:58:54', '2020-03-10 19:58:54'),
(12, 'Pius', 'Mutonde', 'Kinyanjui', 'piusmutonde@gmail.com', '0749384282', 7646783, 83882932, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'physics', 'chemistry', 'Christian', 'Kenyan', '2020-03-24', 'active', NULL, NULL, '2020-03-24 05:43:24', '2020-03-24 05:43:24'),
(13, 'judy', 'mwongeli', 'mutangili', 'judy@gmail.com', '0793429822', 9876587, 76542345, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'mathematics', 'chemistry', 'Christian', 'Kenyan', '2020-10-22', 'active', NULL, NULL, '2020-10-22 09:16:33', '2020-10-22 09:16:33'),
(14, 'Jonas', 'Kimtai', 'Kipchoge', 'jonaskimtai@gmail.com', '0701765678', 6732431, 70987651, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'mathematics', 'chemistry', 'Other', 'Somalian', '2020-10-26', 'active', NULL, NULL, '2020-10-26 15:18:18', '2020-10-26 15:18:18'),
(15, 'Kims', 'Wambua', 'Julius', 'wambua@gmail.com', '0798743212', 5678221, 98765322, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'cre', 'history', 'Christian', 'Kenyan', '2020-10-26', 'archived', NULL, '2020-11-12', '2020-10-26 15:33:43', '2020-10-26 15:33:43'),
(16, 'Florida', 'Mutheu', 'John', 'florida@gmail.com', '0738372290', 5453334, 54433266, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Female', 'mathematics', 'chemistry', 'Christian', 'Kenyan', '2020-12-17', 'active', NULL, NULL, '2020-12-17 01:50:48', '2020-12-17 01:50:48'),
(17, 'Florida', 'Mutheu', 'Kiko', 'samsonmutangili@gmail.com', '0718422812', 5678882, 76543458, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'mathematics', 'chemistry', 'Christian', 'Kenyan', '2020-12-17', 'active', NULL, NULL, '2020-12-17 07:46:44', '2020-12-17 07:46:44'),
(18, 'Victor', 'Kiplabet', 'Bett', 'vicbett@gmail.com', '0793837321', 7494824, 64736262, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'kiswahili', 'history', 'Christian', 'Kenyan', '2020-12-17', 'active', NULL, NULL, '2020-12-17 07:58:50', '2020-12-17 07:58:50'),
(19, 'Brentone', 'Noor', 'Alistar', 'brentonealistar@gmail.com', '0740096095', 2345678, 35886769, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'physics', 'mathematics', 'Christian', 'Kenyan', '2021-03-08', 'active', NULL, NULL, '2021-03-08 13:51:07', '2021-03-08 13:51:07'),
(20, 'Merol', 'Akinyi', 'Okotto', 'merrol@gmail.com', '0722913478', 1232123, 12312314, '$2y$10$ouKoY0ZhBkZkz56alpoc8OkWvWUPEzbgjtqYuV73LO.Q0/QYCZO0y', 'Male', 'business_studies', 'geography', 'Christian', 'Kenyan', '2021-03-08', 'active', NULL, NULL, '2021-03-08 22:30:29', '2021-03-08 22:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_classes`
--

CREATE TABLE `teacher_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_classes`
--

INSERT INTO `teacher_classes` (`id`, `teacher_id`, `class_name`, `subject1`, `subject2`, `year`, `created_at`, `updated_at`) VALUES
(5, 2, '1E', 'biology', NULL, 2020, '2020-02-29 06:47:17', '2020-02-29 06:47:17'),
(8, 5, '4E', 'mathematics', NULL, 2020, '2020-02-29 06:59:49', '2020-02-29 06:59:49'),
(18, 1, '1W', 'chemistry', 'mathematics', 2020, '2020-02-29 19:14:21', '2020-02-29 19:14:21'),
(21, 5, '1E', 'mathematics', NULL, 2020, '2020-03-05 19:57:09', '2020-03-05 19:57:09'),
(22, 1, '1E', 'chemistry', NULL, 2020, '2020-03-05 19:57:53', '2020-03-05 19:57:53'),
(23, 3, '1E', 'cre', 'history', 2020, '2020-03-05 19:58:25', '2020-03-05 19:58:25'),
(24, 3, '1W', 'cre', 'history', 2020, '2020-03-05 19:58:34', '2020-03-05 19:58:34'),
(25, 6, '1W', 'agriculture', NULL, 2020, '2020-03-05 19:59:18', '2020-03-05 19:59:18'),
(26, 6, '1E', 'agriculture', NULL, 2020, '2020-03-05 19:59:28', '2020-03-05 19:59:28'),
(27, 8, '1E', 'kiswahili', NULL, 2020, '2020-03-05 19:59:46', '2020-03-05 19:59:46'),
(28, 8, '1W', 'kiswahili', NULL, 2020, '2020-03-05 19:59:55', '2020-03-05 19:59:55'),
(29, 9, '1E', 'physics', NULL, 2020, '2020-03-05 20:00:21', '2020-03-05 20:00:21'),
(30, 9, '1W', 'physics', NULL, 2020, '2020-03-05 20:00:29', '2020-03-05 20:00:29'),
(31, 7, '1E', 'geography', 'business_studies', 2020, '2020-03-05 20:01:04', '2020-03-05 20:01:04'),
(32, 7, '1W', 'geography', 'business_studies', 2020, '2020-03-05 20:01:14', '2020-03-05 20:01:14'),
(33, 4, '1E', 'english', NULL, 2020, '2020-03-05 20:02:28', '2020-03-05 20:02:28'),
(34, 4, '1W', 'english', NULL, 2020, '2020-03-05 20:02:40', '2020-03-05 20:02:40'),
(35, 2, '1W', 'biology', NULL, 2020, '2020-03-05 20:30:03', '2020-03-05 20:30:03'),
(36, 8, '3W', 'kiswahili', NULL, 2020, '2020-10-20 07:32:39', '2020-10-20 07:32:39'),
(37, 2, '3E', 'biology', NULL, 2020, '2020-11-14 07:44:04', '2020-11-14 07:44:04'),
(38, 3, '3E', 'cre', 'history', 2020, '2020-11-15 07:14:55', '2020-11-15 07:14:55'),
(39, 3, '3W', 'history', 'cre', 2020, '2020-11-15 07:15:35', '2020-11-15 07:15:35'),
(40, 5, '3E', 'mathematics', 'chemistry', 2020, '2020-11-15 07:16:41', '2020-11-15 07:16:41'),
(41, 5, '3W', 'mathematics', 'chemistry', 2020, '2020-11-15 07:16:58', '2020-11-15 07:16:58'),
(42, 7, '3E', 'business_studies', 'geography', 2020, '2020-11-15 07:32:20', '2020-11-15 07:32:20'),
(43, 7, '3W', 'business_studies', 'geography', 2020, '2020-11-15 07:32:33', '2020-11-15 07:32:33'),
(44, 4, '3W', 'english', NULL, 2020, '2020-11-15 07:36:23', '2020-11-15 07:36:23'),
(45, 4, '3E', 'english', NULL, 2020, '2020-11-15 07:36:36', '2020-11-15 07:36:36'),
(46, 2, '3W', 'biology', NULL, 2020, '2020-11-15 07:39:40', '2020-11-15 07:39:40'),
(47, 9, '3W', 'physics', NULL, 2020, '2020-11-15 07:41:38', '2020-11-15 07:41:38'),
(48, 8, '3E', 'kiswahili', NULL, 2020, '2020-11-15 07:43:57', '2020-11-15 07:43:57'),
(49, 8, '4E', 'kiswahili', NULL, 2020, '2020-11-15 11:58:20', '2020-11-15 11:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `term_sessions`
--

CREATE TABLE `term_sessions` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` int(11) NOT NULL,
  `term_start_date` date NOT NULL,
  `term_end_date` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_sessions`
--

INSERT INTO `term_sessions` (`term_id`, `year`, `term`, `term_start_date`, `term_end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020', 1, '2020-10-12', '2021-01-08', 'past', NULL, NULL),
(2, '2021', 2, '2021-01-08', '2021-04-02', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', '$2y$10$XkZacWD7hVqEGkV.PMpM9eAIagJf6YVpdj//PfxhZryGWjihNIu9m', 'admin', '2020-10-24 13:34:54', '2020-10-24 13:34:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplinary_cases`
--
ALTER TABLE `disciplinary_cases`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `disciplinary_cases_student_id_foreign` (`student_id`),
  ADD KEY `disciplinary_cases_teacher_id_foreign` (`teacher_id`),
  ADD KEY `disciplinary_cases_action_taken_by_foreign` (`action_taken_by`);

--
-- Indexes for table `dormitories`
--
ALTER TABLE `dormitories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dormitories_rooms`
--
ALTER TABLE `dormitories_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dormitories_rooms_dorm_id_foreign` (`dorm_id`);

--
-- Indexes for table `exam_sessions`
--
ALTER TABLE `exam_sessions`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `exam_sessions_term_id_foreign` (`term_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_balances`
--
ALTER TABLE `fee_balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fee_balances_student_id_foreign` (`student_id`);

--
-- Indexes for table `fee_structures`
--
ALTER TABLE `fee_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_transactions`
--
ALTER TABLE `fee_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fee_transactions_student_id_foreign` (`student_id`),
  ADD KEY `fee_transactions_emp_id_foreign` (`emp_id`);

--
-- Indexes for table `mailtostudentmessages`
--
ALTER TABLE `mailtostudentmessages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `mailtostudentmessages_student_id_foreign` (`student_id`),
  ADD KEY `mailtostudentmessages_from_teacher_id_foreign` (`from_teacher_id`),
  ADD KEY `mailtostudentmessages_to_parent_id_foreign` (`to_parent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `mpesa_transactions_student_id_foreign` (`student_id`);

--
-- Indexes for table `non_teaching_staff`
--
ALTER TABLE `non_teaching_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_of_sessions`
--
ALTER TABLE `out_of_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `out_of_sessions_student_id_foreign` (`student_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_and_responsibilities`
--
ALTER TABLE `roles_and_responsibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_and_responsibilities_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_address`
--
ALTER TABLE `student_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_address_student_id_foreign` (`student_id`),
  ADD KEY `student_address_address_id_foreign` (`address_id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `student_classes_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_dorm_rooms`
--
ALTER TABLE `student_dorm_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_dorm_rooms_student_id_foreign` (`student_id`),
  ADD KEY `student_dorm_rooms_room_id_foreign` (`room_id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_marks_student_id_foreign` (`student_id`),
  ADD KEY `student_marks_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `student_marks_ranking`
--
ALTER TABLE `student_marks_ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_marks_ranking_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_parent`
--
ALTER TABLE `student_parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_parent_student_id_foreign` (`student_id`),
  ADD KEY `student_parent_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`),
  ADD UNIQUE KEY `teachers_tsc_no_unique` (`tsc_no`);

--
-- Indexes for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_classes_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `term_sessions`
--
ALTER TABLE `term_sessions`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disciplinary_cases`
--
ALTER TABLE `disciplinary_cases`
  MODIFY `case_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dormitories`
--
ALTER TABLE `dormitories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dormitories_rooms`
--
ALTER TABLE `dormitories_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_sessions`
--
ALTER TABLE `exam_sessions`
  MODIFY `exam_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_balances`
--
ALTER TABLE `fee_balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `fee_structures`
--
ALTER TABLE `fee_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee_transactions`
--
ALTER TABLE `fee_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `mailtostudentmessages`
--
ALTER TABLE `mailtostudentmessages`
  MODIFY `message_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  MODIFY `transaction_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `non_teaching_staff`
--
ALTER TABLE `non_teaching_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `out_of_sessions`
--
ALTER TABLE `out_of_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles_and_responsibilities`
--
ALTER TABLE `roles_and_responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `student_address`
--
ALTER TABLE `student_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `student_dorm_rooms`
--
ALTER TABLE `student_dorm_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT for table `student_marks_ranking`
--
ALTER TABLE `student_marks_ranking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `student_parent`
--
ALTER TABLE `student_parent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `term_sessions`
--
ALTER TABLE `term_sessions`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disciplinary_cases`
--
ALTER TABLE `disciplinary_cases`
  ADD CONSTRAINT `disciplinary_cases_action_taken_by_foreign` FOREIGN KEY (`action_taken_by`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disciplinary_cases_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disciplinary_cases_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dormitories_rooms`
--
ALTER TABLE `dormitories_rooms`
  ADD CONSTRAINT `dormitories_rooms_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dormitories` (`id`);

--
-- Constraints for table `exam_sessions`
--
ALTER TABLE `exam_sessions`
  ADD CONSTRAINT `exam_sessions_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `term_sessions` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_balances`
--
ALTER TABLE `fee_balances`
  ADD CONSTRAINT `fee_balances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_transactions`
--
ALTER TABLE `fee_transactions`
  ADD CONSTRAINT `fee_transactions_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `non_teaching_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_transactions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mailtostudentmessages`
--
ALTER TABLE `mailtostudentmessages`
  ADD CONSTRAINT `mailtostudentmessages_from_teacher_id_foreign` FOREIGN KEY (`from_teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mailtostudentmessages_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mailtostudentmessages_to_parent_id_foreign` FOREIGN KEY (`to_parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  ADD CONSTRAINT `mpesa_transactions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `out_of_sessions`
--
ALTER TABLE `out_of_sessions`
  ADD CONSTRAINT `out_of_sessions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles_and_responsibilities`
--
ALTER TABLE `roles_and_responsibilities`
  ADD CONSTRAINT `roles_and_responsibilities_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_address`
--
ALTER TABLE `student_address`
  ADD CONSTRAINT `student_address_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_address_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD CONSTRAINT `student_classes_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `student_dorm_rooms`
--
ALTER TABLE `student_dorm_rooms`
  ADD CONSTRAINT `student_dorm_rooms_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `dormitories_rooms` (`id`),
  ADD CONSTRAINT `student_dorm_rooms_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD CONSTRAINT `student_marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_marks_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_marks_ranking`
--
ALTER TABLE `student_marks_ranking`
  ADD CONSTRAINT `student_marks_ranking_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_parent`
--
ALTER TABLE `student_parent`
  ADD CONSTRAINT `student_parent_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_parent_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  ADD CONSTRAINT `teacher_classes_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
