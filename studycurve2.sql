-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 06:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studycurve2`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_015704_create_topics_table', 1),
(6, '2023_11_15_015728_create_tasks_table', 1),
(7, '2023_11_15_015751_create_tests_table', 1),
(8, '2023_11_15_015816_create_review_sessions_table', 1),
(9, '2023_11_15_075809_create_subjects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `review_sessions`
--

CREATE TABLE `review_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `review_date` date NOT NULL,
  `S#` varchar(255) NOT NULL,
  `isDone` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_sessions`
--

INSERT INTO `review_sessions` (`id`, `user_id`, `subject_id`, `topic_id`, `review_date`, `S#`, `isDone`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 41, '2023-11-18', '', 0, NULL, NULL),
(2, 1, 1, 41, '2023-11-20', '', 0, NULL, NULL),
(3, 1, 1, 41, '2023-11-24', '', 0, NULL, NULL),
(4, 1, 1, 41, '2023-12-02', '', 0, NULL, NULL),
(5, 1, 1, 41, '2023-12-02', '', 0, NULL, NULL),
(6, 1, 1, 41, '2023-12-17', '', 0, NULL, NULL),
(7, 1, 1, 41, '2024-01-26', '', 0, NULL, NULL),
(8, 1, 1, 42, '2023-11-18', '', 0, NULL, NULL),
(9, 1, 1, 42, '2023-11-20', '', 0, NULL, NULL),
(10, 1, 1, 42, '2023-11-24', '', 0, NULL, NULL),
(11, 1, 1, 42, '2023-12-02', '', 0, NULL, NULL),
(12, 1, 1, 42, '2023-12-02', '', 0, NULL, NULL),
(13, 1, 1, 42, '2023-12-17', '', 0, NULL, NULL),
(14, 1, 1, 42, '2024-01-26', '', 0, NULL, NULL),
(15, 1, 1, 43, '2023-11-18', '', 0, NULL, NULL),
(16, 1, 1, 43, '2023-11-20', '', 0, NULL, NULL),
(17, 1, 1, 43, '2023-11-24', '', 0, NULL, NULL),
(18, 1, 1, 43, '2023-12-02', '', 0, NULL, NULL),
(19, 1, 1, 43, '2023-12-02', '', 0, NULL, NULL),
(20, 1, 1, 43, '2023-12-17', '', 0, NULL, NULL),
(21, 1, 1, 43, '2024-01-26', '', 0, NULL, NULL),
(22, 1, 1, 44, '2023-11-17', '', 0, NULL, NULL),
(23, 1, 1, 44, '2023-11-19', '', 0, NULL, NULL),
(24, 1, 1, 44, '2023-11-23', '', 0, NULL, NULL),
(25, 1, 1, 44, '2023-12-01', '', 0, NULL, NULL),
(26, 1, 1, 44, '2023-12-01', '', 0, NULL, NULL),
(27, 1, 1, 44, '2023-12-16', '', 0, NULL, NULL),
(28, 1, 1, 44, '2024-01-25', '', 0, NULL, NULL),
(35, 1, 1, 46, '2023-11-18', 'S1', 1, NULL, NULL),
(36, 1, 1, 46, '2023-11-20', 'S3', 1, NULL, NULL),
(37, 1, 1, 46, '2023-11-24', 'S7', 0, NULL, NULL),
(38, 1, 1, 46, '2023-12-02', 'S15', 0, NULL, NULL),
(39, 1, 1, 46, '2023-12-17', 'S30', 0, NULL, NULL),
(40, 1, 1, 46, '2024-01-26', 'S70', 0, NULL, NULL),
(41, 1, 3, 47, '2023-11-10', 'S1', 0, NULL, NULL),
(42, 1, 3, 47, '2023-11-12', 'S3', 0, NULL, NULL),
(43, 1, 3, 47, '2023-11-16', 'S7', 0, NULL, NULL),
(44, 1, 3, 47, '2023-11-24', 'S15', 0, NULL, NULL),
(45, 1, 3, 47, '2023-12-09', 'S30', 0, NULL, NULL),
(46, 1, 3, 47, '2024-01-18', 'S70', 0, NULL, NULL),
(47, 1, 3, 48, '2023-11-17', 'S1', 1, NULL, NULL),
(48, 1, 3, 48, '2023-11-19', 'S3', 0, NULL, NULL),
(49, 1, 3, 48, '2023-11-23', 'S7', 0, NULL, NULL),
(50, 1, 3, 48, '2023-12-01', 'S15', 0, NULL, NULL),
(51, 1, 3, 48, '2023-12-16', 'S30', 0, NULL, NULL),
(52, 1, 3, 48, '2024-01-25', 'S70', 0, NULL, NULL),
(53, 1, 1, 49, '2023-11-15', 'S1', 0, NULL, NULL),
(54, 1, 1, 49, '2023-11-17', 'S3', 0, NULL, NULL),
(55, 1, 1, 49, '2023-11-21', 'S7', 0, NULL, NULL),
(56, 1, 1, 49, '2023-11-29', 'S15', 0, NULL, NULL),
(57, 1, 1, 49, '2023-12-14', 'S30', 0, NULL, NULL),
(58, 1, 1, 49, '2024-01-23', 'S70', 0, NULL, NULL),
(59, 1, 1, 50, '2023-11-11', 'S1', 0, NULL, NULL),
(60, 1, 1, 50, '2023-11-13', 'S3', 0, NULL, NULL),
(61, 1, 1, 50, '2023-11-17', 'S7', 0, NULL, NULL),
(62, 1, 1, 50, '2023-11-25', 'S15', 0, NULL, NULL),
(63, 1, 1, 50, '2023-12-10', 'S30', 0, NULL, NULL),
(64, 1, 1, 50, '2024-01-19', 'S70', 0, NULL, NULL),
(65, 1, 1, 51, '2023-11-18', 'S1', 0, NULL, NULL),
(66, 1, 1, 51, '2023-11-20', 'S3', 0, NULL, NULL),
(67, 1, 1, 51, '2023-11-24', 'S7', 0, NULL, NULL),
(68, 1, 1, 51, '2023-12-02', 'S15', 0, NULL, NULL),
(69, 1, 1, 51, '2023-12-17', 'S30', 0, NULL, NULL),
(70, 1, 1, 51, '2024-01-26', 'S70', 0, NULL, NULL),
(71, 5, 1, 52, '2023-11-18', 'S1', 0, NULL, NULL),
(72, 5, 1, 52, '2023-11-20', 'S3', 0, NULL, NULL),
(73, 5, 1, 52, '2023-11-24', 'S7', 0, NULL, NULL),
(74, 5, 1, 52, '2023-12-02', 'S15', 0, NULL, NULL),
(75, 5, 1, 52, '2023-12-17', 'S30', 0, NULL, NULL),
(76, 5, 1, 52, '2024-01-26', 'S70', 0, NULL, NULL),
(77, 5, 1, 53, '2023-11-17', 'S1', 0, NULL, NULL),
(78, 5, 1, 53, '2023-11-19', 'S3', 0, NULL, NULL),
(79, 5, 1, 53, '2023-11-23', 'S7', 0, NULL, NULL),
(80, 5, 1, 53, '2023-12-01', 'S15', 0, NULL, NULL),
(81, 5, 1, 53, '2023-12-16', 'S30', 0, NULL, NULL),
(82, 5, 1, 53, '2024-01-25', 'S70', 0, NULL, NULL),
(83, 5, 1, 54, '2023-11-15', 'S1', 0, NULL, NULL),
(84, 5, 1, 54, '2023-11-17', 'S3', 0, NULL, NULL),
(85, 5, 1, 54, '2023-11-21', 'S7', 0, NULL, NULL),
(86, 5, 1, 54, '2023-11-29', 'S15', 0, NULL, NULL),
(87, 5, 1, 54, '2023-12-14', 'S30', 0, NULL, NULL),
(88, 5, 1, 54, '2024-01-23', 'S70', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Biology', NULL, NULL),
(2, 'Chemistry', NULL, NULL),
(3, 'Physics', NULL, NULL),
(4, 'English', NULL, NULL),
(5, 'Urdu', NULL, NULL),
(6, 'Math', NULL, NULL),
(7, 'Islamiat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `task_description` text NOT NULL,
  `due_date` date NOT NULL,
  `priority` int(11) NOT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `test_description` text NOT NULL,
  `test_date` date NOT NULL,
  `unit` varchar(255) NOT NULL,
  `test_marks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `user_id`, `subject_id`, `test_description`, `test_date`, `unit`, `test_marks`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'dfghj', '2023-11-16', '', NULL, NULL, NULL),
(2, 1, 2, 'qwertyuio', '2023-11-02', '23', NULL, NULL, NULL),
(3, 1, 5, 'Quis enim qui est de', '2020-01-19', '78', NULL, NULL, NULL),
(4, 1, 5, 'Quis enim qui est de', '2020-01-19', '78', NULL, NULL, NULL),
(5, 1, 1, 'hi', '2023-11-17', '6', NULL, NULL, NULL),
(6, 5, 1, 'cell cycle', '2023-11-20', '21', NULL, NULL, NULL),
(7, 5, 1, 'werryiu', '2023-11-18', '23', NULL, NULL, NULL),
(8, 5, 3, 'ghjkl', '2023-11-17', '16', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `date_added` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `title`, `description`, `tags`, `date_added`, `created_at`, `updated_at`, `subject_id`) VALUES
(12, 2, 'hi', NULL, NULL, '2023-11-15', '2023-11-15 04:31:44', '2023-11-15 04:31:44', 5),
(19, 4, 'Present Perfect Continues Tense', NULL, NULL, '2023-11-16', '2023-11-16 12:51:20', '2023-11-16 12:51:20', 4),
(20, 4, 'Binary Fission', NULL, NULL, '2023-11-16', '2023-11-16 12:51:47', '2023-11-16 12:51:47', 1),
(21, 4, 'Multi fission', NULL, NULL, '2023-11-16', '2023-11-16 12:52:15', '2023-11-16 12:52:15', 1),
(22, 4, 'Fragmentation', NULL, NULL, '2023-11-16', '2023-11-16 12:52:46', '2023-11-16 12:52:46', 1),
(23, 4, 'Hazard\'s of electricity', NULL, NULL, '2023-11-16', '2023-11-16 12:53:22', '2023-11-16 12:53:22', 3),
(24, 4, 'Fuse, Earth wire', NULL, NULL, '2023-11-16', '2023-11-16 12:54:10', '2023-11-16 12:54:10', 3),
(25, 4, 'nucleic acid', NULL, NULL, '2023-11-16', '2023-11-16 12:55:42', '2023-11-16 12:55:42', 2),
(27, 1, 'Mitosis', NULL, NULL, '2023-11-17', '2023-11-16 21:44:47', '2023-11-16 21:44:47', 1),
(41, 1, 'Mitosis', NULL, NULL, '2023-11-17', '2023-11-16 22:31:48', '2023-11-16 22:31:48', 1),
(42, 1, 'Mitosis', NULL, NULL, '2023-11-17', '2023-11-16 22:33:11', '2023-11-16 22:33:11', 1),
(43, 1, 'Mitosis', NULL, NULL, '2023-11-17', '2023-11-16 22:41:14', '2023-11-16 22:41:14', 1),
(44, 1, 'hi', NULL, NULL, '2023-11-16', '2023-11-16 23:23:48', '2023-11-16 23:23:48', 1),
(46, 1, 'test', NULL, NULL, '2023-11-17', '2023-11-17 01:40:03', '2023-11-17 01:40:03', 1),
(47, 1, 'Rlc Circuitt', NULL, NULL, '2023-11-09', '2023-11-17 03:31:46', '2023-11-17 03:31:46', 3),
(48, 1, 'werty', NULL, NULL, '2023-11-16', '2023-11-17 03:34:59', '2023-11-17 03:34:59', 3),
(49, 1, 'iksd', NULL, NULL, '2023-11-14', '2023-11-17 03:38:36', '2023-11-17 03:38:36', 1),
(50, 1, 'pqpqpq', NULL, NULL, '2023-11-10', '2023-11-17 03:39:21', '2023-11-17 03:39:21', 1),
(51, 1, 'Mitosis', NULL, NULL, '2023-11-17', '2023-11-17 07:15:51', '2023-11-17 07:15:51', 1),
(52, 5, 'meiotic error', NULL, NULL, '2023-11-17', '2023-11-17 11:30:08', '2023-11-17 11:30:08', 1),
(53, 5, 'meiosis', NULL, NULL, '2023-11-16', '2023-11-17 11:31:34', '2023-11-17 11:31:34', 1),
(54, 5, 'interphase', NULL, NULL, '2023-11-14', '2023-11-17 11:37:43', '2023-11-17 11:37:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julie Shaffer', 'mufigo@mailinator.com', NULL, '$2y$12$9fz1cXAkFyrxyscVB.DhYeu8L9IC4pGfCXTlVAGnoWvHwuwazuITa', 'w9zWzKQOG8ioR7VPCH7CDhuff0RvXWjvyCRaLPZt7rxB7z0FuSWcC1cTuH8u', '2023-11-15 03:19:28', '2023-11-15 03:19:28'),
(2, 'Muhammad MUNEEB', 'muneebmuhammad358@gmail.com', NULL, '$2y$12$IAULJPtQu2C17aH2qugk3e.eU0f3GZu5dqgS0OQir7LbXbIv0WTgC', NULL, '2023-11-15 04:29:51', '2023-11-15 04:29:51'),
(3, 'Muhammad', 'fasih2416@outlook.com', NULL, '$2y$12$7/6QxTsCE.sseT7eRZCTfOJhTJuDPNZ1qmrImtCT8lJQjAn9uzMKy', NULL, '2023-11-15 04:34:33', '2023-11-15 04:34:33'),
(4, 'Muhammad Muneeb', 'muneebmuhammad359@gmail.com', NULL, '$2y$12$ja/tv.F0YPiFN8wnlLsXzeFKu4TA0C8UnCAuYLu5JZOIox5SX2Lae', NULL, '2023-11-16 12:49:26', '2023-11-16 12:49:26'),
(5, 'Aiko Sharp', 'qote@mailinator.com', NULL, '$2y$12$j7RFZr6fMM/b54MwLRy34efhf4JmPyork0aSKBF54QDsEx08X6E7u', NULL, '2023-11-17 11:28:46', '2023-11-17 11:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `review_sessions`
--
ALTER TABLE `review_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_sessions_user_id_foreign` (`user_id`),
  ADD KEY `review_sessions_subject_id_foreign` (`subject_id`),
  ADD KEY `review_sessions_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_user_id_foreign` (`user_id`),
  ADD KEY `tests_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_user_id_foreign` (`user_id`),
  ADD KEY `topics_subject_id_foreign` (`subject_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_sessions`
--
ALTER TABLE `review_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review_sessions`
--
ALTER TABLE `review_sessions`
  ADD CONSTRAINT `review_sessions_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `review_sessions_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_sessions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `topics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
