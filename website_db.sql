-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 03:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exclusives`
--

CREATE TABLE `exclusives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exclusives`
--

INSERT INTO `exclusives` (`id`, `title`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'exclusive', '90', '2022-12-02 18:32:24', '2022-12-02 18:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_11_28_232239_create_homesettings_table', 2),
(6, '2022_11_29_093514_create_section_ones_table', 2),
(8, '2022_12_01_205220_create_section_threes_table', 4),
(9, '2022_12_01_181051_create_section_twos_table', 5),
(10, '2022_12_02_132512_create_starters_table', 6),
(11, '2022_12_02_132530_create_exclusives_table', 6),
(12, '2022_12_02_132544_create_premia_table', 6),
(13, '2022_12_02_234933_create_services_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premia`
--

CREATE TABLE `premia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premia`
--

INSERT INTO `premia` (`id`, `title`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum is simply dumy text', '150', '2022-12-02 18:29:26', '2022-12-02 18:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `section_ones`
--

CREATE TABLE `section_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text_main` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_secondary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_ones`
--

INSERT INTO `section_ones` (`id`, `text_main`, `text_secondary`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Corperate Website', 'This section is for testing the web content. There are two primary ways to tackle frontend.', '/storage/images/1670074361photo1.png', '2022-12-03 11:32:41', '2022-12-03 11:32:41'),
(10, 'Corperate Website', 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things', '/storage/images/1670076299photo1.png', '2022-12-03 12:04:59', '2022-12-03 12:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `section_threes`
--

CREATE TABLE `section_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_threes`
--

INSERT INTO `section_threes` (`id`, `title`, `main_text`, `created_at`, `updated_at`) VALUES
(2, 'We love to make perfect solutions for your business', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2022-12-01 19:07:00', '2022-12-01 19:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `section_twos`
--

CREATE TABLE `section_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `who_we_are` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_vision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abt_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_twos`
--

INSERT INTO `section_twos` (`id`, `text_title`, `who_we_are`, `our_vision`, `our_history`, `abt_image`, `created_at`, `updated_at`) VALUES
(2, 'Our Team Comes with Experience and Knowledge', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '/storage/images/1669984125IMG-20211214-WA0013.jpg', '2022-12-02 10:28:46', '2022-12-02 10:28:46'),
(5, 'Our Team Comes with Experience and Knowledge', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ipsum is that it has a more or less normal distribution of letters, look kike a readable English.', 'There are many variations of passages of Lorem ipsum available but the majority have in some form by injected humour', 'The point of using Lorem ipsum is that it has a more or less normal distribution of letters, look kike a readable English.', '/storage/images/1670014537IMG-20211214-WA0013.jpg', '2022-12-02 18:55:37', '2022-12-02 18:55:37'),
(6, 'Our Team Comes with Experience and Knowledge', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ipsum is that it has a more or less normal distribution of letters, look kike a readable English.', 'There are many variations of passages of Lorem ipsum available but the majority have in some form by injected humour', 'The point of using Lorem ipsum is that it has a more or less normal distribution of letters, look kike a readable English.', '/storage/images/1670021258photo2.png', '2022-12-02 20:47:39', '2022-12-02 20:47:39'),
(7, 'Our Team Comes with Experience and Knowledge', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ipsum is that it has a more or less normal distribution of letters, look kike a readable English.', 'There are many variations of passages of Lorem ipsum available but the majority have in some form by injected humour', 'The point of using Lorem ipsum is that it has a more or less normal distribution of letters, look kike a readable English.', '/storage/images/1670071161photo3.jpg', '2022-12-03 10:39:21', '2022-12-03 10:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(7, 'Refreshing Desing', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna', '/storage/images/1670075731arrow-repeat.svg', '2022-12-03 11:55:32', '2022-12-03 11:55:32'),
(8, 'Solid Bootstrap 5', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna', '/storage/images/1670076008bootstrap-reboot.svg', '2022-12-03 12:00:08', '2022-12-03 12:00:08'),
(9, '100+ Components', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna', '/storage/images/1670076055c-circle.svg', '2022-12-03 12:00:55', '2022-12-03 12:00:55'),
(10, 'Speed Optimized', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna', '/storage/images/1670076082speedometer2.svg', '2022-12-03 12:01:22', '2022-12-03 12:01:22'),
(11, 'Fully Customizable', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna', '/storage/images/1670076108layers.svg', '2022-12-03 12:01:48', '2022-12-03 12:01:48'),
(12, 'Regular Updates', 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna', '/storage/images/1670076159compass.svg', '2022-12-03 12:02:40', '2022-12-03 12:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `starters`
--

CREATE TABLE `starters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `starters`
--

INSERT INTO `starters` (`id`, `title`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'kkytk', '3', '2022-12-02 18:25:36', '2022-12-02 18:25:36'),
(2, 'kkytk', '38', '2022-12-02 18:25:37', '2022-12-02 18:25:37'),
(3, 'Lorem ipsum is simply dumy text', '0', '2022-12-02 18:26:49', '2022-12-02 18:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samuel Makoholi', 'samuelmakoh@gmail.com', NULL, '$2y$10$2fEoPdZ2jadlZokpG2/mGOFi1/6f4md7ythHbXcXNgM86v9n9uPHa', NULL, '2022-11-28 19:33:28', '2022-11-28 19:33:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exclusives`
--
ALTER TABLE `exclusives`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `premia`
--
ALTER TABLE `premia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_ones`
--
ALTER TABLE `section_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_threes`
--
ALTER TABLE `section_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_twos`
--
ALTER TABLE `section_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starters`
--
ALTER TABLE `starters`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `exclusives`
--
ALTER TABLE `exclusives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premia`
--
ALTER TABLE `premia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_ones`
--
ALTER TABLE `section_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section_threes`
--
ALTER TABLE `section_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_twos`
--
ALTER TABLE `section_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `starters`
--
ALTER TABLE `starters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
