-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 03:44 AM
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
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
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
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
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
(1, '0001_01_01_100001_create_cache_table', 1),
(2, '0001_01_01_100002_create_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2025_10_27_000001_create_role_table', 1),
(5, '2025_10_27_000002_create_user_table', 1),
(6, '2025_10_27_000003_create_product_category_table', 1),
(7, '2025_10_27_000004_create_product_table', 1),
(8, '2025_10_27_000005_create_sale_transaction_table', 1),
(9, '2025_10_27_000006_create_sale_transaction_details_table', 1),
(10, '2025_10_27_000007_create_sale_transaction_log_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` bigint(20) UNSIGNED NOT NULL,
  `PRODUCT_CATEGORY_ID` bigint(20) UNSIGNED NOT NULL,
  `PRODUCT_NAME` varchar(255) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `PRICE` int(11) NOT NULL,
  `STOCK_LEVEL` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CATEGORY_ID`, `PRODUCT_NAME`, `DESCRIPTION`, `PRICE`, `STOCK_LEVEL`) VALUES
(1, 1, 'Bananas', 'Fresh yellow bananas', 30, 38),
(2, 1, 'Apples', 'Red and juicy apples', 40, 60),
(3, 1, 'Oranges', 'Fresh oranges', 35, 50),
(4, 1, 'Tomatoes', 'Ripe tomatoes', 25, 70),
(5, 1, 'Carrots', 'Fresh carrots', 20, 60),
(6, 1, 'Cucumbers', 'Fresh cucumbers', 22, 50),
(7, 1, 'Lettuce', 'Green lettuce', 28, 40),
(8, 1, 'Spinach', 'Fresh spinach leaves', 25, 45),
(9, 1, 'Grapes', 'Seedless grapes', 50, 30),
(10, 1, 'Pineapple', 'Fresh pineapple', 60, 20),
(11, 2, 'Whole Milk', '1-liter whole milk', 55, 40),
(12, 2, 'Cheddar Cheese', '200g cheddar cheese', 120, 30),
(13, 2, 'Yogurt', 'Plain yogurt 500g', 65, 50),
(14, 2, 'Butter', 'Salted butter 250g', 80, 25),
(15, 2, 'Skim Milk', '1-liter skimmed milk', 50, 40),
(16, 2, 'Cream Cheese', 'Spreadable cream cheese', 95, 20),
(17, 2, 'Mozzarella', 'Fresh mozzarella 200g', 110, 30),
(18, 2, 'Sour Cream', '200g sour cream', 60, 25),
(19, 2, 'Evaporated Milk', '400ml can', 45, 30),
(20, 2, 'Condensed Milk', '400ml can', 55, 35),
(21, 3, 'White Bread', 'Loaf of white bread', 40, 50),
(22, 3, 'Whole Wheat Bread', 'Loaf of whole wheat bread', 45, 40),
(23, 3, 'Baguette', 'French baguette', 35, 30),
(24, 3, 'Croissant', 'Butter croissant', 50, 25),
(25, 3, 'Muffins', 'Blueberry muffins', 55, 20),
(26, 3, 'Cakes', 'Chocolate cake slice', 80, 15),
(27, 3, 'Donuts', 'Glazed donuts', 35, 30),
(28, 3, 'Bagels', 'Plain bagels', 45, 25),
(29, 3, 'Bread Rolls', 'Soft dinner rolls', 30, 40),
(30, 3, 'Pita Bread', 'Middle Eastern flatbread', 35, 35),
(31, 4, 'Orange Juice', '1-liter orange juice', 70, 40),
(32, 4, 'Apple Juice', '1-liter apple juice', 70, 40),
(33, 4, 'Cola', '330ml soda can', 35, 60),
(34, 4, 'Mineral Water', '500ml bottled water', 20, 100),
(35, 4, 'Coffee', 'Ground coffee 250g', 120, 30),
(36, 4, 'Tea Bags', '50-count tea bags', 60, 40),
(37, 4, 'Energy Drink', '250ml energy drink', 55, 50),
(38, 4, 'Iced Tea', '500ml bottle', 40, 60),
(39, 4, 'Lemonade', '1-liter lemonade', 50, 30),
(40, 4, 'Sparkling Water', '500ml sparkling water', 30, 50),
(41, 5, 'Potato Chips', 'Salted potato chips 100g', 35, 50),
(42, 5, 'Chocolate Bar', 'Milk chocolate 50g', 25, 60),
(43, 5, 'Gummy Bears', 'Fruit gummy candy 100g', 30, 40),
(44, 5, 'Nuts Mix', 'Roasted nuts 200g', 80, 30),
(45, 5, 'Cookies', 'Chocolate chip cookies 200g', 55, 50),
(46, 5, 'Candy', 'Assorted hard candy 100g', 20, 70),
(47, 5, 'Popcorn', 'Butter popcorn 150g', 40, 60),
(48, 5, 'Chocolate Truffles', 'Box of 6 truffles', 150, 25),
(49, 5, 'Energy Bar', 'Protein energy bar', 45, 40),
(50, 5, 'Crackers', 'Savory crackers 200g', 30, 50),
(51, 6, 'Frozen Peas', '500g frozen peas', 60, 40),
(52, 6, 'Frozen Corn', '500g frozen corn', 55, 35),
(53, 6, 'Frozen Pizza', 'Pepperoni pizza 400g', 150, 20),
(54, 6, 'Frozen Chicken', '1kg frozen chicken pieces', 200, 25),
(55, 6, 'Frozen Fish Fillet', '500g fish fillet', 180, 30),
(56, 6, 'Frozen Vegetables Mix', '500g mixed vegetables', 65, 40),
(57, 6, 'Frozen Dumplings', '300g vegetable dumplings', 90, 30),
(58, 6, 'Ice Cream', 'Vanilla ice cream 500ml', 120, 25),
(59, 6, 'Frozen Shrimp', '500g frozen shrimp', 220, 20),
(60, 6, 'Frozen Beef', '1kg frozen beef cubes', 250, 15),
(61, 7, 'Dishwashing Liquid', '500ml liquid detergent', 50, 50),
(62, 7, 'Laundry Detergent', '1kg powder detergent', 120, 30),
(63, 7, 'Paper Towels', 'Pack of 2 rolls', 60, 40),
(64, 7, 'Toilet Paper', 'Pack of 4 rolls', 80, 50),
(65, 7, 'Cleaning Spray', 'All-purpose cleaner 500ml', 70, 30),
(66, 7, 'Garbage Bags', 'Pack of 20', 55, 40),
(67, 7, 'Dish Cloths', 'Set of 3 cloths', 30, 50),
(68, 7, 'Sponges', 'Pack of 5 sponges', 40, 58),
(69, 7, 'Broom', 'Household broom', 90, 20),
(70, 7, 'Mop', 'Floor mop', 100, 25),
(71, 8, 'Shampoo', '250ml hair shampoo', 85, 38),
(72, 8, 'Soap', 'Bar soap 100g', 25, 60),
(73, 8, 'Toothpaste', '100g toothpaste tube', 40, 50),
(74, 8, 'Toothbrush', 'Soft bristle toothbrush', 35, 70),
(75, 8, 'Body Lotion', '200ml moisturizing lotion', 120, 30),
(76, 8, 'Deodorant', '150ml spray deodorant', 95, 40),
(77, 8, 'Face Wash', '150ml facial cleanser', 110, 35),
(78, 8, 'Hand Cream', '50ml hand cream', 60, 25),
(79, 8, 'Conditioner', '250ml hair conditioner', 90, 40),
(80, 8, 'Hair Oil', '100ml nourishing hair oil', 80, 30);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `PRODUCT_CATEGORY_ID` bigint(20) UNSIGNED NOT NULL,
  `CATEGORY_NAME` varchar(255) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `TAX_RATE` decimal(11,2) DEFAULT NULL,
  `PRICING_RULE` enum('Fixed Price','Discount Price','Tiered Pricing','Bundle Pricing','Promotional Price','Member Price','Cost-Plus') NOT NULL DEFAULT 'Fixed Price'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`PRODUCT_CATEGORY_ID`, `CATEGORY_NAME`, `DESCRIPTION`, `TAX_RATE`, `PRICING_RULE`) VALUES
(1, 'Fresh Produce', 'Fruits and vegetables', 5.00, 'Fixed Price'),
(2, 'Dairy Products', 'Milk, cheese, yogurt, and butter', 5.50, 'Fixed Price'),
(3, 'Bakery', 'Bread, cakes, and pastries', 6.00, 'Fixed Price'),
(4, 'Beverages', 'Juices, soda, water, coffee, and tea', 8.00, 'Fixed Price'),
(5, 'Snacks & Confectionery', 'Chips, chocolates, candies, and nuts', 7.50, 'Promotional Price'),
(6, 'Frozen Foods', 'Frozen vegetables, meat, and ready-to-eat meals', 6.50, 'Fixed Price'),
(7, 'Household Items', 'Cleaning products, detergents, and paper goods', 10.00, 'Fixed Price'),
(8, 'Personal Care', 'Shampoo, soap, toothpaste, and cosmetics', 8.50, 'Discount Price');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ROLE_ID` bigint(20) UNSIGNED NOT NULL,
  `ROLE_NAME` enum('admin','manager','cashier') NOT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ROLE_ID`, `ROLE_NAME`, `DESCRIPTION`) VALUES
(1, 'admin', 'System administrator with full access.'),
(2, 'cashier', 'Handles sales transactions.'),
(3, 'manager', 'Oversees operations and reports.');

-- --------------------------------------------------------

--
-- Table structure for table `sale_transaction`
--

CREATE TABLE `sale_transaction` (
  `SALE_TRANSACTION_ID` bigint(20) UNSIGNED NOT NULL,
  `USER_ID` bigint(20) UNSIGNED NOT NULL,
  `TOTAL_PRICE` decimal(10,2) NOT NULL DEFAULT 0.00,
  `STATUS` enum('pending','completed','deleted') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_transaction`
--

INSERT INTO `sale_transaction` (`SALE_TRANSACTION_ID`, `USER_ID`, `TOTAL_PRICE`, `STATUS`) VALUES
(1, 2, 587.45, 'completed'),
(2, 2, 525.00, 'pending'),
(3, 2, 63.00, 'completed'),
(4, 2, 0.00, 'completed'),
(5, 2, 0.00, 'deleted'),
(6, 2, 126.00, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sale_transaction_details`
--

CREATE TABLE `sale_transaction_details` (
  `SALE_TRANSACTION_DETAILS_ID` bigint(20) UNSIGNED NOT NULL,
  `SALE_TRANSACTION_ID` bigint(20) UNSIGNED NOT NULL,
  `PRODUCT_ID` bigint(20) UNSIGNED NOT NULL,
  `UNIT_PRICE` decimal(10,2) NOT NULL,
  `QUANTITY` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `TOTAL` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_transaction_details`
--

INSERT INTO `sale_transaction_details` (`SALE_TRANSACTION_DETAILS_ID`, `SALE_TRANSACTION_ID`, `PRODUCT_ID`, `UNIT_PRICE`, `QUANTITY`, `TOTAL`) VALUES
(1, 1, 1, 30.00, 10, 300.00),
(2, 1, 68, 40.00, 2, 80.00),
(3, 1, 71, 85.00, 2, 170.00),
(4, 2, 9, 50.00, 10, 500.00),
(5, 3, 1, 30.00, 2, 60.00),
(6, 6, 2, 40.00, 3, 120.00);

-- --------------------------------------------------------

--
-- Table structure for table `sale_transaction_log`
--

CREATE TABLE `sale_transaction_log` (
  `SALE_TRANSACTION_LOG_ID` bigint(20) UNSIGNED NOT NULL,
  `SALE_TRANSACTION_ID` bigint(20) UNSIGNED NOT NULL,
  `ACTION_TYPE` enum('created','detail added','detail deleted','detail updated','confirmed','deleted') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_transaction_log`
--

INSERT INTO `sale_transaction_log` (`SALE_TRANSACTION_LOG_ID`, `SALE_TRANSACTION_ID`, `ACTION_TYPE`, `created_at`, `updated_at`) VALUES
(1, 1, 'created', '2025-12-01 00:37:18', NULL),
(2, 1, 'detail added', '2025-12-01 00:38:08', NULL),
(3, 1, 'detail added', '2025-12-01 00:38:23', NULL),
(4, 1, 'detail added', '2025-12-01 00:39:08', NULL),
(5, 1, 'confirmed', '2025-12-01 00:39:25', NULL),
(6, 2, 'created', '2025-12-01 00:41:03', NULL),
(7, 2, 'detail added', '2025-12-01 00:41:55', NULL),
(8, 3, 'created', '2025-12-16 01:00:16', NULL),
(9, 3, 'detail added', '2025-12-16 01:00:33', NULL),
(10, 3, 'detail updated', '2025-12-16 01:00:50', NULL),
(11, 3, 'confirmed', '2025-12-16 01:01:04', NULL),
(12, 4, 'created', '2025-12-16 01:40:52', NULL),
(13, 4, 'confirmed', '2025-12-16 01:41:08', NULL),
(14, 5, 'created', '2025-12-16 01:44:12', NULL),
(15, 5, 'deleted', '2025-12-16 01:50:49', NULL),
(16, 6, 'created', '2025-12-16 02:20:02', NULL),
(17, 6, 'detail added', '2025-12-16 02:20:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
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
('Njut0iORpaldCaqOHHmlrZlkVc6ZS1S1vPiLICC6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 OPR/124.0.0.0', 'YTo2OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiSkZiRzc0QVhQTzJyS3RuTVBGWWJEdW5maG81OW1TczFwTnM0NXFHTSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3MvbWFuYWdlci9kYXNoYm9hcmQiO3M6NToicm91dGUiO047fXM6NzoiVVNFUl9JRCI7aTozO3M6ODoiVVNFUk5BTUUiO3M6ODoibWFuYWdlcjEiO3M6NzoiUk9MRV9JRCI7aTozO30=', 1765852851);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` bigint(20) UNSIGNED NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD_HASH` varchar(255) NOT NULL,
  `ROLE_ID` bigint(20) UNSIGNED NOT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `CONTACT_NUMBER` varchar(255) DEFAULT NULL,
  `ADMIN_ID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD_HASH`, `ROLE_ID`, `ADDRESS`, `CONTACT_NUMBER`, `ADMIN_ID`) VALUES
(1, 'Admin', 'User', 'admin1', '$2y$12$a9fmhmTcfFKIlRJrl19Kxuu3vkeC8cwdOARED.q4FCsSHE3tkkdIO', 1, 'Admin Address', '09123456789', NULL),
(2, 'Cashier', 'User', 'cashier1', '$2y$12$wolxF.8TyDT1QrsM0007CuNfoFs8Ii0HkeHbbeWYrGN.aXsKe4WnG', 2, 'Cashier Address', '09129876543', 1),
(3, 'Manager', 'User', 'manager1', '$2y$12$6uyVbrKEolk93IPzYBySVeqnJv/g5N0LzeykwKhpmDxCvWZ/cT1nu', 3, 'Manager Address', '09122334455', 1);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `product_product_category_id_foreign` (`PRODUCT_CATEGORY_ID`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`PRODUCT_CATEGORY_ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Indexes for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  ADD PRIMARY KEY (`SALE_TRANSACTION_ID`),
  ADD KEY `sale_transaction_user_id_foreign` (`USER_ID`);

--
-- Indexes for table `sale_transaction_details`
--
ALTER TABLE `sale_transaction_details`
  ADD PRIMARY KEY (`SALE_TRANSACTION_DETAILS_ID`),
  ADD KEY `sale_transaction_details_sale_transaction_id_foreign` (`SALE_TRANSACTION_ID`),
  ADD KEY `sale_transaction_details_product_id_foreign` (`PRODUCT_ID`);

--
-- Indexes for table `sale_transaction_log`
--
ALTER TABLE `sale_transaction_log`
  ADD PRIMARY KEY (`SALE_TRANSACTION_LOG_ID`),
  ADD KEY `sale_transaction_log_sale_transaction_id_foreign` (`SALE_TRANSACTION_ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `user_username_unique` (`USERNAME`),
  ADD KEY `user_role_id_foreign` (`ROLE_ID`),
  ADD KEY `user_admin_id_foreign` (`ADMIN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `PRODUCT_CATEGORY_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ROLE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  MODIFY `SALE_TRANSACTION_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sale_transaction_details`
--
ALTER TABLE `sale_transaction_details`
  MODIFY `SALE_TRANSACTION_DETAILS_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sale_transaction_log`
--
ALTER TABLE `sale_transaction_log`
  MODIFY `SALE_TRANSACTION_LOG_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_product_category_id_foreign` FOREIGN KEY (`PRODUCT_CATEGORY_ID`) REFERENCES `product_category` (`PRODUCT_CATEGORY_ID`);

--
-- Constraints for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  ADD CONSTRAINT `sale_transaction_user_id_foreign` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `sale_transaction_details`
--
ALTER TABLE `sale_transaction_details`
  ADD CONSTRAINT `sale_transaction_details_product_id_foreign` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`),
  ADD CONSTRAINT `sale_transaction_details_sale_transaction_id_foreign` FOREIGN KEY (`SALE_TRANSACTION_ID`) REFERENCES `sale_transaction` (`SALE_TRANSACTION_ID`);

--
-- Constraints for table `sale_transaction_log`
--
ALTER TABLE `sale_transaction_log`
  ADD CONSTRAINT `sale_transaction_log_sale_transaction_id_foreign` FOREIGN KEY (`SALE_TRANSACTION_ID`) REFERENCES `sale_transaction` (`SALE_TRANSACTION_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_admin_id_foreign` FOREIGN KEY (`ADMIN_ID`) REFERENCES `user` (`USER_ID`) ON DELETE SET NULL,
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`ROLE_ID`) REFERENCES `role` (`ROLE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
