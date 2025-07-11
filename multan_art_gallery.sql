-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 07:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multan_art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Bio` text NOT NULL,
  `Contact` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `user_id`, `Name`, `Bio`, `Contact`, `Email`, `Country`, `Address`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 4, 'Zeeshan Zafar', 'Just a random dude who will die soon!', '+923124421761', 'mzeeshanzafar28@gmail.com', 'Pakistan', 'Grave I Guess', 'storage/images/pSLfHEjsZe39ZYkcwyJsqDLsBs1J3iE017DhF1fC.jpg', '2025-06-11 10:25:30', '2025-06-11 10:25:30'),
(2, 6, 'Jasmine Rivera', 'Jasmine Rivera is a Brooklyn-based visual artist whose work explores urban identity and memory through mixed-media collage. A graduate of Pratt Institute, her work has been exhibited in group shows across New York and featured in Juxtapose and Create! Magazine. Rivera combines found materials, photography, and text to create layered narratives of place and self.', '+923036440415', 'JasmineRivera@gmail.com', 'Pakistan', '715 Southwest 14th Street', 'storage/images/WLKH21gZd2ovFyZnqx6hNGq8XZBChvyL9EtjgtmY.jpg', '2025-07-09 15:21:27', '2025-07-09 15:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `artist_images`
--

CREATE TABLE `artist_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) NOT NULL,
  `comment` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `print` text DEFAULT NULL,
  `print_size` text DEFAULT NULL,
  `edition` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist_images`
--

INSERT INTO `artist_images` (`id`, `artist_id`, `image_path`, `comment`, `price`, `year`, `print`, `print_size`, `edition`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/images/HMsec1O6gTe5QO9l9IqEkfXzNcjGpSr5R3bt4MU7.jpg', 'The shape of hic', 12.00, 2025, 'RANDOM TYPE', '24x36 ka Random Size', 'FIRST EDITION', '2025-06-11 10:25:30', '2025-06-11 10:25:30'),
(2, 1, 'storage/images/Yo3z5m30qk7X0km2ZnkDKF22R66iDVJdN27QppE1.jpg', '12sdadasddas', 33.00, 2022, 'RANDOM TYPE', '24x36 ka Random Size', 'FIRST EDITION', '2025-06-11 10:25:30', '2025-06-11 10:25:30'),
(3, 2, 'storage/images/06ZBQNAVbqmaJpDp10xDCOxjbu1J4jFfueeMTfEj.jpg', 'The Persistence of Memory', 15.00, 2025, 'Oil on Canvas', '9.5 in × 13 in (24 cm × 33 cm)', 'Original (1 of 1)', '2025-07-09 15:21:27', '2025-07-09 15:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `artwork_comments`
--

CREATE TABLE `artwork_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `artwork_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artwork_comments`
--

INSERT INTO `artwork_comments` (`id`, `user_id`, `artwork_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'wow', '2025-06-11 10:29:27', '2025-06-11 10:29:27'),
(2, 4, 1, 'love it', '2025-06-11 10:29:46', '2025-06-11 10:29:46'),
(3, 4, 2, 'fffhfhf', '2025-06-11 11:23:07', '2025-06-11 11:23:07'),
(4, 4, 2, 'hgjygjg', '2025-06-11 11:23:15', '2025-06-11 11:23:15'),
(5, 4, 2, 'hfhffjfjfhfhf', '2025-06-11 11:23:51', '2025-06-11 11:23:51'),
(6, 7, 3, 'nice post', '2025-07-10 04:00:42', '2025-07-10 04:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `artwork_reactions`
--

CREATE TABLE `artwork_reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `artwork_id` bigint(20) UNSIGNED NOT NULL,
  `reaction` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artwork_reactions`
--

INSERT INTO `artwork_reactions` (`id`, `user_id`, `artwork_id`, `reaction`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, '2025-06-11 10:28:57', '2025-06-11 11:23:40'),
(2, 4, 2, 1, '2025-06-11 11:23:42', '2025-06-11 11:23:42'),
(3, 6, 3, 1, '2025-07-09 15:22:07', '2025-07-09 15:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Bio` varchar(191) NOT NULL,
  `Date` varchar(191) NOT NULL,
  `Venue` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`id`, `Name`, `Bio`, `Date`, `Venue`, `created_at`, `updated_at`) VALUES
(1, 'computer science project exibition', 'projects over view and appreciation', '2025-07-08', 'Dpartment of CS BZU Multan', '2025-07-08 02:06:51', '2025-07-08 02:06:51'),
(2, 'Canvas of the People', 'Canvas of the People” is a celebration of creativity, color, and connection — an inclusive art exhibition that bridges the gap between artists and everyday life. Step into a space.', '2025-07-20', 'Art Gallery,Mulatn', '2025-07-10 00:40:58', '2025-07-10 00:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `exhibition_images`
--

CREATE TABLE `exhibition_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exhibition_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exhibition_images`
--

INSERT INTO `exhibition_images` (`id`, `exhibition_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/1751958411_686cc38b9fbd8.jpeg', '2025-07-08 02:06:51', '2025-07-08 02:06:51'),
(2, 1, 'images/1751958411_686cc38ba146a.jpeg', '2025-07-08 02:06:51', '2025-07-08 02:06:51'),
(3, 2, 'images/1752126058_686f526a914f8.jpeg', '2025-07-10 00:40:58', '2025-07-10 00:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2024_03_22_221309_create_messages_table', 1),
(13, '2024_04_15_175358_create_artists_table', 1),
(14, '2024_04_15_205826_create_exhibitions_table', 1),
(15, '2025_04_18_071003_create_artist_images_table', 1),
(16, '2025_04_30_154301_create_exhibition_images_table', 1),
(17, '2025_06_11_151320_create_artwork_reactions_table', 1),
(18, '2025_06_11_151441_create_artwork_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wg1hXD2FewDLQbdDXHbdalj9RcnM0dE9kgQYCqgM', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY0RvVnBtNFFSS0djYklnTzdSOU93ZENuZkJOYzdWangwWW40MmJNSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTE7fQ==', 1752140463);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-06-11 10:21:35', '$2y$12$FG.YjQJPL9Jfd8HCLYJ7cO255LYAct3zG7wzrhmJtgC4hKopKEfcS', '01Y13rNalq', '2025-06-11 10:21:36', '2025-06-11 10:21:36'),
(2, 'admin', 'admin@example.com', '2025-06-11 10:21:36', '$2y$12$I4Ue7v2ABGP9zwIEiUHsj.LjpBp6K3VTM4OACoeGGP4h62yndjsr6', 'tL27jalbHG', '2025-06-11 10:21:36', '2025-06-11 10:21:36'),
(3, 'Roy', 'fadi@gmail.com', NULL, '$2y$12$5Upee9ZM0ucwn3fHE3kM1eJrbBVceuSFWboXR7SADeXDo8hlbmciW', NULL, '2025-06-11 10:22:08', '2025-06-11 10:22:08'),
(4, 'zeeshan', 'mzeeshanzafar28@gmail.com', NULL, '$2y$12$pRpLSVH5Ikj8cre.TBvaFOp20ao3gcw2na22H2sXEjaqvGKkg1vG2', NULL, '2025-06-11 10:23:12', '2025-06-11 10:23:12'),
(5, 'mani', 'mmm123@gmail.com', NULL, '$2y$12$FHbtvwvIXLu2KRs3MIoIAufSw41aP4/7qDCm9GljLbY0fa5gkwuVK', NULL, '2025-07-08 02:01:14', '2025-07-08 02:01:14'),
(6, 'JasmineRivera', 'JasmineRivera@gmail.com', NULL, '$2y$12$abDCRDnBBcCgiiq5AalUb.BNcbfVCwLWVtJ0SPKwq8WPxmMzZPLAW', NULL, '2025-07-09 14:45:31', '2025-07-09 14:45:31'),
(7, 'faahadkhalid', 'faahad@123.123', NULL, '$2y$12$TKuWqnKrJOR2FY3NznG9NeRLp61604TomMnR4ygkBKLeBfrtv.wye', NULL, '2025-07-10 04:00:02', '2025-07-10 04:00:02'),
(8, 'alibinali', 'alibinali@123123.com', NULL, '$2y$12$lUSGPKJasTHO9eT/mKLBCeId3BzmY0CJl7/5p0BBqYYb8Sa3jUI12', NULL, '2025-07-10 04:13:24', '2025-07-10 04:13:24'),
(9, 'Fahad', 'test@gmail.com', NULL, '$2y$12$FTErWfKVr.B7/qtnqUuIQuWPkAHOPWqejMMlsECn7n4CGOI6UjKeG', NULL, '2025-07-10 04:15:51', '2025-07-10 04:15:51'),
(10, 'akbarali', 'akbarali@gmail.com', NULL, '$2y$12$fJnIM0/nUZy2J1ZzA1lJPurbsebtmh20izWZsQ4qDLn2q30XbTedm', NULL, '2025-07-10 04:36:18', '2025-07-10 04:36:18'),
(11, 'anwarraza', 'anwarraza@gmail.com', NULL, '$2y$12$rMEyW6fJA654H0Maf.Tl1OilYXm2zKSO6my54REkP1U..1kbJlABy', NULL, '2025-07-10 04:40:48', '2025-07-10 04:40:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artists_user_id_foreign` (`user_id`);

--
-- Indexes for table `artist_images`
--
ALTER TABLE `artist_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_images_artist_id_foreign` (`artist_id`);

--
-- Indexes for table `artwork_comments`
--
ALTER TABLE `artwork_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_comments_user_id_foreign` (`user_id`),
  ADD KEY `artwork_comments_artwork_id_foreign` (`artwork_id`);

--
-- Indexes for table `artwork_reactions`
--
ALTER TABLE `artwork_reactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artwork_reactions_user_id_artwork_id_unique` (`user_id`,`artwork_id`),
  ADD KEY `artwork_reactions_artwork_id_foreign` (`artwork_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibition_images`
--
ALTER TABLE `exhibition_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exhibition_images_exhibition_id_foreign` (`exhibition_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artist_images`
--
ALTER TABLE `artist_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artwork_comments`
--
ALTER TABLE `artwork_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artwork_reactions`
--
ALTER TABLE `artwork_reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exhibitions`
--
ALTER TABLE `exhibitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exhibition_images`
--
ALTER TABLE `exhibition_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `artists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `artist_images`
--
ALTER TABLE `artist_images`
  ADD CONSTRAINT `artist_images_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `artwork_comments`
--
ALTER TABLE `artwork_comments`
  ADD CONSTRAINT `artwork_comments_artwork_id_foreign` FOREIGN KEY (`artwork_id`) REFERENCES `artist_images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `artwork_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `artwork_reactions`
--
ALTER TABLE `artwork_reactions`
  ADD CONSTRAINT `artwork_reactions_artwork_id_foreign` FOREIGN KEY (`artwork_id`) REFERENCES `artist_images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `artwork_reactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exhibition_images`
--
ALTER TABLE `exhibition_images`
  ADD CONSTRAINT `exhibition_images_exhibition_id_foreign` FOREIGN KEY (`exhibition_id`) REFERENCES `exhibitions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
