-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 04:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `capital`, `currence`, `population`, `created_at`, `updated_at`) VALUES
(5, 'Bangladesh', 'Dhaka', 'BDT', '18000000', '2020-08-31 19:42:23', '2020-08-31 19:42:23'),
(8, 'Pakisthan', 'Islamabad', 'Rupy', '13000000', '2020-08-31 19:54:11', '2020-08-31 19:54:11'),
(9, 'Indea', 'Kolkata', 'Rupy', '1135000000', '2020-08-31 19:54:33', '2020-09-02 20:04:52'),
(10, 'Pakisthan', 'Islamabad', 'Rupy', '180000002222', '2020-09-02 18:33:11', '2020-09-02 19:54:58'),
(11, 'USA', 'Caliphone', 'Rupy', '180000002222', '2020-09-02 18:33:27', '2020-09-02 18:33:27'),
(13, 'USA', 'Islamabad', 'usa', '180000002', '2020-09-04 08:10:37', '2020-09-04 08:10:46');

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
(1, '2020_08_25_171323_create_countries_table', 1),
(3, '2020_09_04_145932_create_people_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `phone`, `country_id`, `created_at`, `updated_at`) VALUES
(1, '01945546612', 'fibrahim0216@gmail.com', '01945546612', 5, '2020-09-04 11:55:06', '2020-09-04 11:55:06'),
(2, 'Md Ibrahim Hossain', 'fibrahim0216@gmail.com', '01945546612', 10, '2020-09-04 11:59:07', '2020-09-04 11:59:07'),
(3, 'Abul Kashem', 'fibrahim0216@gmail.com', '01945546612', 9, '2020-09-04 12:00:34', '2020-09-04 12:00:34'),
(4, 'Abdullah', 'abdullah@gmail.com', '01945546653', 5, '2020-09-04 12:01:29', '2020-09-04 12:01:29'),
(5, 'Rasel Ahmed', 'rasel@gmail.com', '01945546612', 8, '2020-09-04 12:05:30', '2020-09-04 12:05:30'),
(6, 'Rejaul Karim', 'fibrahim0216@gmail.com', '01945546612', 5, '2020-09-04 20:09:56', '2020-09-04 20:09:56'),
(7, 'Md Rezaul Karim', 'rezaulkarim1985@gmail.com', '01945546612', 5, '2020-09-04 20:10:40', '2020-09-04 20:10:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
