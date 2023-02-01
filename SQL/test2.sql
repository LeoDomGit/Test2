-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2023 at 08:25 AM
-- Server version: 10.9.3-MariaDB-log
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

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
(2, '2023_02_01_062250_stores', 2),
(3, '2023_02_01_062714_products', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idStore` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `idStore`, `price`, `status`, `note`, `created_at`, `updated_at`) VALUES
(12, 'Products 6', 22, 11003776, 0, NULL, NULL, NULL),
(13, 'Products 7', 23, 18215596, 0, NULL, NULL, NULL),
(14, 'Products 5', 15, 2023000, 0, NULL, NULL, NULL),
(15, 'Products 7', 15, 18985976, 0, NULL, NULL, NULL),
(16, 'Products 3', 16, 3895610, 0, NULL, NULL, NULL),
(17, 'Products 5', 20, 10933902, 1, NULL, NULL, NULL),
(18, 'Products 7', 20, 10700805, 1, NULL, NULL, NULL),
(19, 'Products 2', 16, 16995353, 0, NULL, NULL, NULL),
(20, 'Products 9', 15, 11953118, 1, NULL, NULL, NULL),
(21, 'Products 1', 18, 13336925, 1, NULL, NULL, NULL),
(22, 'Products 2', 20, 3537216, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `idUser`, `address`, `note`, `created_at`, `updated_at`) VALUES
(13, 'stores 3tKlKQOQvN', 25, NULL, NULL, NULL, NULL),
(14, 'stores HTYqTrdvHp', 31, NULL, NULL, NULL, NULL),
(15, 'stores qPPuiw9awA', 27, NULL, NULL, NULL, NULL),
(16, 'stores xYA2YKMATT', 30, NULL, NULL, NULL, NULL),
(17, 'stores JdZBKFa3Gf', 23, NULL, NULL, NULL, NULL),
(18, 'stores nBdSHx3u72', 26, NULL, NULL, NULL, NULL),
(19, 'stores EywKlGnn3j', 30, NULL, NULL, NULL, NULL),
(20, 'stores nS0O1RAC5V', 23, NULL, NULL, NULL, NULL),
(21, 'stores AZ04VPnKxa', 30, NULL, NULL, NULL, NULL),
(22, 'stores gsM7ynkzLK', 28, NULL, NULL, NULL, NULL),
(23, 'stores attWS7pUOQ', 23, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
(23, 'usertttS6XDd5J', 'kzWairghOi@gmail.com', NULL, '$2y$10$KBAzqwyhd2CVMN41x6fvZ..mPnsKRdqh44FsXzktZ1UVkPSJSGkCm', NULL, NULL, NULL),
(24, 'userfkSMImUahh', 'uxqIDrfQ7R@gmail.com', NULL, '$2y$10$EjjvtozxJ7QvI6zZX4Jz6Ommq3aul5/AFpRYKY7oWvPo9UZo8jTfC', NULL, NULL, NULL),
(25, 'userTWPQusPt9A', 'I75hKqXRET@gmail.com', NULL, '$2y$10$/ju.HF2tb7W4aVln0edT5eQx4SNwEojZlR046jNZ1MPle.120m1nq', NULL, NULL, NULL),
(26, 'userNUlBmsiZGc', 'q3l60fukcE@gmail.com', NULL, '$2y$10$UrWSlhmjqZaw4bzLk4pKCuINmcBHb0jOPX97uUIq5JyGR0HNDkuny', NULL, NULL, NULL),
(27, 'userTxXOhteAMT', 'idamx1Mhko@gmail.com', NULL, '$2y$10$fHirKd4R3f09G8wa3qsrh.HdFB.5aZZ0SlRO/FF9BO2qxeUGsX9g.', NULL, NULL, NULL),
(28, 'userC1utf5Ls87', 'CMXMR6hnUv@gmail.com', NULL, '$2y$10$RSPebYphOQc3PVsV6OitveYoWh4GlvzaMDMwRJPxtdCyEgsWgjGa2', NULL, NULL, NULL),
(29, 'userYo5S57LJay', 'VKSPzgHFUd@gmail.com', NULL, '$2y$10$VBinGVS/CGyxf5xW6C0z2Ot4cgh0nvWL3TM2ysprO2HP0agqzNQ0C', NULL, NULL, NULL),
(30, 'userLFQf6MMuGK', 'AHHQ6Jwhlr@gmail.com', NULL, '$2y$10$iu0gzpsVx56tJmAdjh3CAOTn1r4fRz9HXNi8CqsffPKP6xQdyQ7uq', NULL, NULL, NULL),
(31, 'useryXJhKMatnX', 'Kjs1OGr8Hu@gmail.com', NULL, '$2y$10$GkmZ9WssLIuXnhqKgLocleiqdIKMiltjAqJDHhgl13aa7JWMNRGG6', NULL, NULL, NULL),
(32, 'user84Fq1z3krq', 'G7ExMjNATd@gmail.com', NULL, '$2y$10$JRfPZzsxtyzWN3/RgG4K.uupn9S7BlmzLLV2tzlNAb3DEjjjc8iAq', NULL, NULL, NULL),
(33, 'user3dJVibQiD6', 'nGKUiwChEH@gmail.com', NULL, '$2y$10$Ugir1MXH/d2stuedsYH/xuqrm4iEp4Ygm98kRltrUeuCmvgakYtzy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_idstore_foreign` (`idStore`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_iduser_foreign` (`idUser`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_idstore_foreign` FOREIGN KEY (`idStore`) REFERENCES `stores` (`id`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
