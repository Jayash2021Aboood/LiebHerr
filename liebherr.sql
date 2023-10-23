-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2023 at 02:45 AM
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
-- Database: `liebherr`
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
-- Table structure for table `job_orders`
--

CREATE TABLE `job_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `identity_number` varchar(255) NOT NULL,
  `residency` varchar(255) DEFAULT NULL,
  `date_of_issue` date NOT NULL,
  `issuing_authority` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `possibility_of_travel` tinyint(1) NOT NULL DEFAULT 0,
  `worked_before` tinyint(1) NOT NULL DEFAULT 0,
  `qualification` varchar(255) NOT NULL,
  `qualification_type` varchar(255) NOT NULL,
  `certificate_source` varchar(255) NOT NULL,
  `attach_certificates` varchar(255) NOT NULL,
  `section_type` varchar(255) NOT NULL,
  `graduation_date` date NOT NULL,
  `academic_experience` varchar(255) DEFAULT NULL,
  `attach_academic_experience` longtext DEFAULT NULL,
  `training_courses` varchar(255) DEFAULT NULL,
  `attach_training_courses` longtext DEFAULT NULL,
  `english_level` varchar(255) NOT NULL,
  `computer_level` varchar(255) NOT NULL,
  `hear_about_company` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `attach_additional_information` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_orders`
--

INSERT INTO `job_orders` (`id`, `fullname`, `gender`, `nationality`, `date_of_birth`, `identity_number`, `residency`, `date_of_issue`, `issuing_authority`, `marital_status`, `email`, `phone`, `possibility_of_travel`, `worked_before`, `qualification`, `qualification_type`, `certificate_source`, `attach_certificates`, `section_type`, `graduation_date`, `academic_experience`, `attach_academic_experience`, `training_courses`, `attach_training_courses`, `english_level`, `computer_level`, `hear_about_company`, `cv`, `attach_additional_information`, `created_at`, `updated_at`) VALUES
(1, 'nnnn', 'male', 'nnnnnn', '2023-09-17', 'hhhhhhh', 'gggggg', '2023-10-17', 'jjjjjj', 'single', 'abc@gmail.com', 'hhhhhh', 0, 1, 'university', 'diploma', 'hhhhhhhhh', 'files/6mddo8JN2B8OFRhc17owq3NpdgcdyVVqttnPbPRY.jpg', 'hhhhhh', '2023-10-17', 'hhhhhhhhhh', 'files/zCviIFT6JaM1xrie9RnsfH1mBK2lc8m4s4GH2VCT.pdf|files/mr2L3MxG66Zx0A7yFY41nZmiG2L7ZpX3PsEJWYUk.pdf', 'sfsfsf\r\nsdfsfd', 'files/Cgrkh3ADy7VDyMPOCGFBoZZURnM33tPp2PWIOQgf.pdf|files/XtNkNnW1tBwP9cGh69tvy5beiPIHNpfOZXoW8OPG|files/lA5SLZagbdYPvXRZ0Gm1JaAUGD1do3BqUMRzwsDe.pdf|files/4kRULfudtkENxONgBpGGTZyKwy46E817NBLBWGm9.docx', 'weak', 'weak', 'hhhhhhh', 'files/ddBfn5Gz8yiRxAIfuGTTQtTeYGoEaba5QUrirkca.jpg', 'files/OzzvTgckyi7R343ntdK1NbdSOvqjHIL2kwWQ9xI4.pdf|files/5oBBixSyW8ocE0pNNLgnTcVWEFYEX46d8cIqDXp5.pdf|files/pXRo3UjIdDokZiKxDRQadVqy5oVc1eRDYGlwtLaf.jpg|files/vaNjpFmPUpAKu6CmEQ07MAgoVkzYRILnnE0fPdAs.jpg|files/4uW0KghgkaS2jeeUnG2bIaNjKmCdw3H3EW2vsP8w.jpg|files/4GedPKS7T4ejxB7JUeoKcShJOpOSjCC6lJRi1kCr.jpg|files/61mSXIgOFgbnWR5AYf6u1R1fNqWVu8095uEVO8qf.jpg|files/3Ve2z9A7QiROHsKyVtO5vVekKgpnoiRhZLLdnza6.jpg|files/8pbZGVcNFeIUkqkj6jXzbptx0SE6Di6zoFxOLNMw.jpg|files/CVLEkQ0cP2BVx187f7TuvezsGU5Bs5WVcfKXTajQ.jpg|files/YDBHmuaBJIpQg6FykWwdwAivCnNOMY7aSzEEjtUx.jpg', '2023-10-17 06:56:36', '2023-10-17 06:56:36');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_10_06_001757_create_products_table', 1),
(18, '2023_10_07_003153_create_job_orders_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$qqcQszrwfucQtqX2myoFpeK97qhGs5sszvLf7NrsaME7bm1ueWIPK', NULL, '2023-10-17 06:57:12', '2023-10-17 06:57:12');

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
-- Indexes for table `job_orders`
--
ALTER TABLE `job_orders`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_orders`
--
ALTER TABLE `job_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
