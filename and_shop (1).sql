-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 08:13 PM
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
-- Database: `and_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 33, 'upload/banner-image/282048.png', '2024-04-24 22:20:28', '2024-04-24 22:20:28'),
(3, 24, 'upload/banner-image/424084.jpg', '2024-04-24 22:20:47', '2024-04-24 22:20:47'),
(4, 32, 'upload/banner-image/146747.jpg', '2024-04-24 22:21:22', '2024-04-24 22:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Gucci', 'Gucci', 'upload/brand-image/76654.png', 1, '2024-03-28 12:02:57', '2024-03-28 12:02:57'),
(6, 'Nokia', 'NokiaNokiaNokiaNokiaNokia', 'upload/brand-image/347937.jpg', 1, '2024-03-28 12:53:14', '2024-03-28 12:53:14'),
(7, 'Apple', 'Apple Apple Apple Apple Apple Apple', 'upload/brand-image/18716.png', 1, '2024-03-28 13:01:28', '2024-03-28 13:01:28'),
(8, 'hp', 'hp hp', 'upload/brand-image/184079.png', 1, '2024-03-28 13:06:01', '2024-03-28 13:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('8a5dd50862bc0cb0bcaf85515c4e441c', 'i:1;', 1712558703),
('8a5dd50862bc0cb0bcaf85515c4e441c:timer', 'i:1712558703;', 1712558703),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1712558490),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1712558490;', 1712558490),
('de53ec18b877c70be09da417785b95f5', 'i:1;', 1715515284),
('de53ec18b877c70be09da417785b95f5:timer', 'i:1715515284;', 1715515284),
('ebc9856674749b0e100a37e24fb9234e', 'i:2;', 1714242602),
('ebc9856674749b0e100a37e24fb9234e:timer', 'i:1714242602;', 1714242602),
('shimul591@gmail.com|127.0.0.1', 'i:2;', 1714242602),
('shimul591@gmail.com|127.0.0.1:timer', 'i:1714242602;', 1714242602);

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `code` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `size` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Jewelleries', 'Jewelleries & Accessories', 'upload/category-image/317084.jpg', 1, '2024-03-28 11:54:23', '2024-03-28 11:54:23'),
(11, 'Fashion', 'Fashion Fashion Fashion', 'upload/category-image/84837.jpg', 1, '2024-03-28 12:29:00', '2024-03-28 12:29:00'),
(12, 'Electronics', 'ElectronicsElectronicsElectronicsElectronicsElectronics', 'upload/category-image/116719.png', 1, '2024-03-28 12:51:35', '2024-03-28 12:51:35'),
(13, 'Baby & Kids', 'Baby & Kids\r\nBaby & Kids\r\nBaby & Kids\r\nBaby & Kids\r\nBaby & Kids', 'upload/category-image/351568.jpg', 1, '2024-03-28 13:09:08', '2024-03-28 13:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` text DEFAULT NULL,
  `blood_group` text DEFAULT NULL,
  `nid` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `date_of_birth`, `blood_group`, `nid`, `address`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Tariqul Islam', 'mshimul591@gmail.com', '01303863702', '$2y$12$F6SWWNBx1cDX8RsDcLVC6OJFrcfWNiIPAfG2lG..vfhleiKgSBbqe', NULL, NULL, NULL, 'Muhakhali, Dhaka', NULL, 1, '2024-03-31 12:50:16', '2024-03-31 12:50:16'),
(6, 'Shimul Mia', 'shimul@gmail.com', '01626850047', '$2y$12$yB8QfXi8.JhiX/dm81VNtetkUJ.EFRb0cxuIVrEQaLlViCtQMnMDy', NULL, NULL, NULL, 'Muhakhali, Dhaka', 'upload/customer/462203.png', 1, '2024-03-31 14:31:31', '2024-03-31 14:31:31'),
(9, 'Emran mia', 'emran@gmail.com', '01344553322', '$2y$12$rYTpLS6ColeM.Zfd/UGZ2uIhivN5NL1LMT19Y1k3/.eLy1Iojf0ke', NULL, NULL, NULL, 'shakhipur', NULL, 1, '2024-04-02 01:26:24', '2024-04-02 01:26:24'),
(10, 'SP Shimul', 'simul@gmail.com', '13242536', '$2y$12$i8yazubi0/ZInXf64593WOa4epg7ayXVUeHZ/n0YCH1/vIbtPv3z6', NULL, NULL, NULL, 'dhaka', 'upload/customer/57822.png', 1, '2024-04-08 11:20:03', '2024-04-08 11:20:03'),
(11, 'shimul Islam', 'shimul591@gmail.com', '01303863703', '$2y$12$qmvqH13kGwVHfh1ysaCxbO/qATt4FTZGu36D/fSZR74Zk4JASfNqm', NULL, NULL, NULL, 'Muhakhali, Dhaka', NULL, 1, '2024-05-12 08:40:46', '2024-05-12 08:40:46');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_24_173032_add_two_factor_columns_to_users_table', 1),
(5, '2024_03_24_173057_create_personal_access_tokens_table', 1),
(7, '2024_03_25_054817_create_categories_table', 2),
(8, '2024_03_25_165928_create_brands_table', 3),
(9, '2024_03_25_181438_create_sub_categories_table', 4),
(10, '2024_03_27_050130_create_units_table', 5),
(11, '2024_03_27_054012_create_products_table', 6),
(13, '2024_03_27_055040_create_product_other_images_table', 7),
(23, '2024_03_29_161511_create_carts_table', 8),
(24, '2024_03_31_073109_create_customers_table', 8),
(25, '2024_03_31_073121_create_orders_table', 8),
(26, '2024_03_31_073135_create_order_details_table', 8),
(27, '2024_04_24_035908_create_banners_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL DEFAULT 0,
  `order_total` double NOT NULL,
  `tax_total` double NOT NULL,
  `sipping_total` double NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_date` text DEFAULT NULL,
  `delivery_timestamp` text DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'BDT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `courier_id`, `order_total`, `tax_total`, `sipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `delivery_date`, `delivery_timestamp`, `payment_method`, `payment_status`, `payment_date`, `payment_timestamp`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(3, 4, 2, 13225, 257, 100, '2024-03-31', '1711843200', 'Processing', 'Muhakhali, Dhaka', 'Processing', NULL, NULL, 'Processing', 'pending', NULL, NULL, NULL, 'BDT', '2024-03-31 12:50:16', '2024-04-08 11:00:19'),
(4, 4, 0, 605, 10, 100, '2024-04-01', '1711929600', 'Pending', 'Muhakhali, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-04-01 00:23:37', '2024-04-01 00:23:37'),
(5, 4, 0, 13869, 270, 100, '2024-04-01', '1711929600', 'Canceled', 'Muhakhali, Dhaka', 'Canceled', NULL, NULL, 'Canceled', 'pending', NULL, NULL, NULL, 'BDT', '2024-04-01 00:25:51', '2024-04-08 11:12:49'),
(6, 4, 0, 13869, 270, 100, '2024-04-01', '1711929600', 'Pending', 'Muhakhali, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-04-01 00:35:01', '2024-04-01 00:35:01'),
(7, 9, 0, 34269, 670, 100, '2024-04-02', '1712016000', 'Confirmed', 'shakhipur', 'Confirmed', '2024-04-08', '1712534400', 'Confirmed', 'pending', '2024-04-08', '1712534400', NULL, 'BDT', '2024-04-02 01:26:24', '2024-04-08 11:13:05'),
(8, 9, 0, 123148, 2413, 100, '2024-04-02', '1712016000', 'Pending', 'shakhipur', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-04-02 01:31:17', '2024-04-02 01:31:17'),
(9, 6, 0, 4374, 84, 100, '2024-04-02', '1712016000', 'Pending', 'Malibag, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-04-02 01:35:06', '2024-04-02 01:35:06'),
(10, 6, 0, 10300, 200, 100, '2024-04-28', '1714262400', 'Pending', 'Malibag, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-04-28 11:13:05', '2024-04-28 11:13:05'),
(11, 4, 0, 457, 7, 100, '2024-05-09', '1715212800', 'Pending', 'Muhakhali, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-05-09 08:54:37', '2024-05-09 08:54:37'),
(12, 4, 0, 2956, 56, 100, '2024-05-11', '1715385600', 'Pending', 'Muhakhali, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-05-11 07:27:00', '2024-05-11 07:27:00'),
(13, 4, 0, 100, 0, 100, '2024-05-11', '1715385600', 'Pending', 'Muhakhali, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-05-11 07:42:44', '2024-05-11 07:42:44'),
(14, 4, 0, 457, 7, 100, '2024-05-12', '1715472000', 'Pending', 'Muhakhali, Dhaka', 'Pending', NULL, NULL, 'Cash', 'pending', NULL, NULL, NULL, 'BDT', '2024-05-12 05:59:53', '2024-05-12 05:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `product_color`, `product_size`, `created_at`, `updated_at`) VALUES
(3, 3, 26, 'Men\'s Cotton Short Pant', 390, 3, '#8C898E', 'l', '2024-03-31 12:50:16', '2024-03-31 12:50:16'),
(4, 3, 27, 'Fastrack Nn3084sl02 Gray Dial Brown Leather Strap Watch', 5849, 2, '#8C898E', 'm', '2024-03-31 12:50:16', '2024-03-31 12:50:16'),
(5, 4, 20, 'Beautifully designed earrings for', 165, 2, '#8C898E', 'l', '2024-04-01 00:23:37', '2024-04-01 00:23:37'),
(6, 5, 31, 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB', 13499, 1, '#8C898E', 'xl', '2024-04-01 00:25:51', '2024-04-01 00:25:51'),
(7, 6, 31, 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB', 13499, 1, '#8C898E', 'xl', '2024-04-01 00:35:01', '2024-04-01 00:35:01'),
(8, 7, 31, 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB', 13499, 1, '#C0C022', 'm', '2024-04-02 01:26:24', '2024-04-02 01:26:24'),
(9, 7, 33, 'MSI PRO MP223 21.45\" Full HD Business Monitor', 10000, 2, '#C0C022', 's', '2024-04-02 01:26:24', '2024-04-02 01:26:24'),
(10, 8, 32, 'iPhone 15 128GB Blue (Singapore Unofficial)', 117000, 1, '#F8BFDF', 'm', '2024-04-02 01:31:17', '2024-04-02 01:31:17'),
(11, 8, 34, 'Deer Rider', 1360, 1, '#C0C022', 's', '2024-04-02 01:31:17', '2024-04-02 01:31:17'),
(12, 8, 25, 'Men\'s Half Sleeve Cotton T-Shirt Black Inject Round Neck', 350, 1, '#8C898E', 's', '2024-04-02 01:31:17', '2024-04-02 01:31:17'),
(13, 8, 23, 'Most Beautiful Good Quality Bag For Girls and Women', 1925, 1, '#F8BFDF', 'l', '2024-04-02 01:31:17', '2024-04-02 01:31:17'),
(14, 9, 20, 'Beautifully designed earrings for', 165, 1, '#F8BFDF', 's', '2024-04-02 01:35:06', '2024-04-02 01:35:06'),
(15, 9, 21, 'Necklace for a beautiful Girls', 500, 1, '#8C898E', 'm', '2024-04-02 01:35:06', '2024-04-02 01:35:06'),
(16, 9, 22, 'Necklace - Necklace For Girls', 800, 1, '#8C898E', 'l', '2024-04-02 01:35:06', '2024-04-02 01:35:06'),
(17, 9, 23, 'Most Beautiful Good Quality Bag For Girls and Women', 1925, 1, '#C0C022', 'xl', '2024-04-02 01:35:06', '2024-04-02 01:35:06'),
(18, 9, 24, 'Golden Celebrity Pearl Handle Based Bag For Girls and Women', 800, 1, '#8C898E', 'l', '2024-04-02 01:35:06', '2024-04-02 01:35:06'),
(19, 11, 25, 'Men\'s Half Sleeve Cotton T-Shirt Black Inject Round Neck', 350, 1, '#8C898E', 'l', '2024-05-09 08:54:37', '2024-05-09 08:54:37'),
(20, 12, 30, 'Ladies\' One Piece', 1400, 2, '#8C898E', 'xl', '2024-05-11 07:27:00', '2024-05-11 07:27:00'),
(21, 14, 25, 'Men\'s Half Sleeve Cotton T-Shirt Black Inject Round Neck', 350, 1, '#C0C022', 'l', '2024-05-12 05:59:53', '2024-05-12 05:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('mshimul591@gmail.com', '$2y$12$0OFtyt8ntLUANXiNUjIYgOdIEbDj50Pap81V3gXWZ4hv.32gMbR3G', '2024-04-27 11:39:09');

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
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `shot_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `stock_amount` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `trending_status` tinyint(4) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `shot_description`, `long_description`, `meta_title`, `meta_description`, `regular_price`, `selling_price`, `stock_amount`, `status`, `featured_status`, `trending_status`, `sales_count`, `hit_count`, `image`, `created_at`, `updated_at`) VALUES
(20, 10, 3, 5, 2, 'Beautifully designed earrings for', 'SJB00185', '*10% off on UCB, SEBL & Lanka Bangla Credit\r\n*10% Cashback on bKash', 'These earrings for women are a must-have addition to any jewelry collection. Made with high-quality materials, these earrings are designed to last. The elegant drop design is perfect for adding a touch of sophistication to any outfit. These earrings are versatile and can be worn for any occasion, whether it\'s a formal event or a casual day out. it adds a touch of luxury, making these earrings a great gift for someone special. With their stylish design and durable construction, these earrings are sure to become a favorite in your jewelry collection.', 'Beautifully designed earrings for women-D66', 'can be worn for any occasion, whether it\'s a formal event or a casual day out. it adds a touch of luxury, making these earrings a great gift for someone special. With their stylish design and durable construction, these earrings are sure to become a favorite in your jewelry collection.', 1000, 165, 50, 1, 0, 0, 0, 0, 'upload/product-image/414966.jpg', '2024-03-28 12:07:04', '2024-03-28 12:13:25'),
(21, 10, 4, 5, 2, 'Necklace for a beautiful Girls', 'FRW00451', '*10% off on UCB, SEBL & Lanka Bangla Credit\r\n*10% Cashback on bKash', 'm has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop', 'Necklace for a beautiful Girls', 'essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop', 1500, 500, 50, 1, 0, 0, 0, 0, 'upload/product-image/120271.jpg', '2024-03-28 12:12:47', '2024-03-28 12:12:47'),
(22, 10, 4, 5, 2, 'Necklace - Necklace For Girls', 'FRW00427', 'web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. V', 'ts in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the', 'Necklace - Necklace For Girls', 'Necklace - Necklace For GirlsNecklace - Necklace For GirlsNecklace - Necklace For GirlsNecklace - Necklace For Girls', 1000, 800, 500, 1, 0, 0, 0, 0, 'upload/product-image/150271.jpg', '2024-03-28 12:15:53', '2024-03-28 12:15:53'),
(23, 10, 5, 5, 2, 'Most Beautiful Good Quality Bag For Girls and Women', 'FRW00550', 'vable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32', 'Most Beautiful Good Quality Bag For Girls and Women', 'psum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from', 3500, 1925, 100, 1, 0, 0, 0, 0, 'upload/product-image/299452.png', '2024-03-28 12:22:16', '2024-03-28 12:22:16'),
(24, 10, 5, 5, 2, 'Golden Celebrity Pearl Handle Based Bag For Girls and Women', 'KAT00005', '*10% off on UCB, SEBL & Lanka Bangla Credit\r\n*10% Cashback on bKash', 'Golden Celebrity Pearl Handle Based  Bag For Girls and Women \r\nItem Name : Bag \r\nGender : Women\r\nExcellent Quality Products \r\nColor : (Golden) As Given Picture\r\n\r\nNote: Product delivery duration may vary due to product availability in stock.\r\n\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 'Golden Celebrity Pearl Handle Based Bag For Girls and Women', 'Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 1600, 800, 100, 1, 0, 0, 0, 0, 'upload/product-image/343315.png', '2024-03-28 12:25:51', '2024-03-28 12:25:51'),
(25, 11, 6, 5, 2, 'Men\'s Half Sleeve Cotton T-Shirt Black Inject Round Neck', 'ARM00055', 'the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ar', 'aking it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.1', 'Men\'s Half Sleeve Cotton T-Shirt Black Inject Round Neck', 'Men\'s Half Sleeve Cotton T-Shirt Black Inject Round NeckMen\'s Half Sleeve Cotton T-Shirt Black Inject Round NeckMen\'s Half Sleeve Cotton T-Shirt Black Inject Round NeckMen\'s Half Sleeve Cotton T-Shirt Black Inject Round Neck', 150, 350, 100, 1, 0, 0, 0, 0, 'upload/product-image/413081.jpg', '2024-03-28 12:33:31', '2024-03-28 12:33:31'),
(26, 11, 6, 5, 2, 'Men\'s Cotton Short Pant', 'GDM00134', 'Men\'s Cotton Short Pant\r\nProduct Type: Men\'s Short Pant\r\nSummer Collection\r\nFabric: CottonTerry fabric\r\nStyle: Casual\r\nType: Elastic Waist Belt Short Pant\r\nGender: Men\r\nProduction Country: Ba', 'rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem', 'Men\'s Cotton Short Pant', 'Men\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short PantMen\'s Cotton Short Pant', 500, 390, 100, 1, 0, 0, 0, 0, 'upload/product-image/151900.jpg', '2024-03-28 12:36:01', '2024-03-28 12:36:01'),
(27, 11, 6, 5, 2, 'Fastrack Nn3084sl02 Gray Dial Brown Leather Strap Watch', 'ARI00277', 'Fastrack Nn3084sl02 Grey Dial Brown Leather Strap Watch\r\nBrand: Fastrack\r\nItem code: Nn3084sl02\r\nGender: Men\r\nStrap Material: Leather\r\nMovement: Quartz\r\nFunction: Analog\r\nCase Shape: Round', 'Fastrack Nn3084sl02 Grey Dial Brown Leather Strap Watch\r\nBrand: Fastrack\r\nItem code: Nn3084sl02\r\nGender: Men\r\nStrap Material: Leather\r\nMovement: Quartz\r\nFunction: Analog\r\nCase Shape: Round\r\nCase Material: Metal\r\nCase Thickness: 11.90 Mm\r\nGlass Material: Mineral Glass\r\nLock Mechanism: Buckle\r\nCase Length(6h-12h): 53.20 Mm\r\nCase Width(3h-9h): 47.30 Mm\r\nWater Resistance: 5 Atm\r\nDial color: Gray (As given picture)\r\nStrap Color: Brown (As given picture)\r\n\r\nStrap on this watch on your wrist and be a force to be reckoned with. The black dial with bold numbering and silver indices looks robust yet luxurious. The markings on the black bezel make the watch look suave. The leather belt finishes the look of this watch with finesse. Throw on a leather jacket over your casuals and add this watch for a fierce, rugged look.', 'Fastrack Nn3084sl02 Gray Dial Brown Leather Strap Watch', 'Fastrack Nn3084sl02 Gray Dial Brown Leather Strap Watch Fastrack Nn3084sl02 Gray Dial Brown Leather Strap Watch', 8355, 5849, 100, 1, 0, 0, 0, 0, 'upload/product-image/268894.jpg', '2024-03-28 12:38:50', '2024-03-28 12:38:50'),
(28, 11, 6, 5, 2, 'Fastrack 3224nl01 Fastfit Watch With Black Dial & Leather Strap', 'ARI00265', 'ARI00265ARI0 265ARI00265ARI0 0265ARI00265ARI002 65ARI00265 unction: Analog with day and dath\r\nStrap Material: Leather\r\nWater Resistance: 5 Atm\r\nMovement: Quartz', 'a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by a', 'Fastrack 3224nl01 Fastfit Watch With Black Dial & Leather Strap', 'a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ave evolved over the years, sometimes by a', 12000, 7120, 30, 1, 0, 0, 0, 0, 'upload/product-image/135994.jpg', '2024-03-28 12:42:22', '2024-03-28 12:42:22'),
(29, 11, 7, 5, 2, 'Trendy & Stylish Black Silk Karchupi Work Kurti for Women by Winner Style', 'WFS01103', 'Trendy & Stylish Black Silk Karchupi Work Kurti for Women by Winner Style\r\nBrand: Winner fashions\r\nLadies Kameez\r\nStyle : LKW 24-310', 'Trendy & Stylish Black Silk Karchupi Work Kurti for Women by Winner Style\r\nBrand: Winner fashions\r\nLadies Kameez\r\nStyle : LKW 24-310\r\nFabric : Silk\r\nDescription : Karchupi work\r\nSize: S, M, L, XL\r\nColor: Black (As given picture)\r\n\r\nSize Chart:	Measurement (Inch)	 \r\nBody	Length\r\nS\r\n37	41\r\nM	39	42\r\nL	41	43\r\nXL	43	44\r\nN.B:\r\nProduct delivery duration may vary due to product availability in stock.\r\nPlease check the size chart and select your size before placing order.\r\n\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 'Trendy & Stylish Black Silk Karchupi Work Kurti for Women by Winner Style', NULL, 1300, 1251, 20, 1, 0, 0, 0, 0, 'upload/product-image/465086.png', '2024-03-28 12:47:22', '2024-03-28 12:47:22'),
(30, 11, 7, 5, 2, 'Ladies\' One Piece', 'WFS00485', '*10% off on UCB, SEBL & Lanka Bangla Credit\r\n*10% Cashback on bKash', '1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ip', 'Ladies\' One Piece', 'galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ip', 1400, 1400, 100, 1, 0, 0, 0, 0, 'upload/product-image/225044.jpg', '2024-03-28 12:49:36', '2024-03-28 12:49:36'),
(31, 12, 8, 6, 2, 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB', 'NOK00019', 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB\r\nBrand: Nokia \r\nModel: C32', 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB\r\nBrand: Nokia \r\nModel: C32\r\nColor: (Charcoal, Green) As given picture.\r\n\r\nNETWORK:\r\nTechnology: GSM / HSPA / LTE\r\n\r\nLAUNCH:\r\nAnnounced: 2023, February 25\r\nStatus    Available.: 2023, February 25\r\n\r\nBODY:    \r\nDimensions: 164.6 x 75.9 x 8.6 mm (6.48 x 2.99 x 0.34 in)\r\nWeight: 199.4 g (7.02 oz)\r\nBuild: Glass front, glass back, plastic frame\r\nSIM: Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)\r\n     Splash and dust resistant\r\n\r\nDISPLAY:    \r\nType: IPS LCD\r\nSize: 6.5 inches, 102.0 cm2 (~81.6% screen-to-body ratio)\r\nResolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi density)\r\nProtection: Scratch-resistant glass\r\n\r\nPLATFORM:    \r\nOS: Android 13\r\nChipset: Unisoc SC9863A1 (22nm)\r\nCPU: Octa-core (4x1.6 GHz Cortex-A55 & 4x1.2 GHz Cortex-A55)\r\nGPU: IMG8322\r\n\r\nMEMORY:    \r\nCard slot: microSDXC (dedicated slot)\r\nInternal: 64GB 3GB RAM\r\n     eMMC 5.1\r\n\r\nMAIN CAMERA:    \r\nDual: 50 MP, (wide), AF\r\n2 MP, (macro)\r\nFeatures: LED flash, HDR\r\nVideo: 1080p@30fps\r\n\r\nSELFIE CAMERA:    \r\nSingle: 8 MP\r\nVideo: Yes\r\n\r\nSOUND:\r\nLoudspeaker: Yes\r\n3.5mm jack: Yes\r\n\r\nCOMMS:\r\nWLAN: Wi-Fi 802.11 b/g/n\r\nBluetooth: 5.2, A2DP\r\nPositioning: GPS\r\nNFC: No\r\nRadio: Wireless FM radio\r\nUSB: USB Type-C 2.0\r\n\r\nFEATURES:    \r\nSensors: Fingerprint (side-mounted), accelerometer, proximity\r\n\r\nBATTERY:\r\nType: Li-Po 5000 mAh, non-removable\r\nCharging: 10W wired', 'Nokia C32 7GB RAM (3GB Virtual RAM) 64GB', 'COMMS:\r\nWLAN: Wi-Fi 802.11 b/g/n\r\nBluetooth: 5.2, A2DP\r\nPositioning: GPS\r\nNFC: No\r\nRadio: Wireless FM radio\r\nUSB: USB Type-C 2.0\r\n\r\nFEATURES:    \r\nSensors: Fingerprint (side-mounted), accelerometer, proximity\r\n\r\nBATTERY:\r\nType: Li-Po 5000 mAh, non-removable\r\nCharging: 10W wired', 13499, 13499, 10, 1, 0, 0, 0, 0, 'upload/product-image/146706.jpg', '2024-03-28 12:55:33', '2024-03-28 12:55:33'),
(32, 12, 8, 7, 2, 'iPhone 15 128GB Blue (Singapore Unofficial)', 'NOK00019', 'Model: iPhone 15\r\nDisplay: 6.1‑inch (diagonal) all‑screen OLED display\r\nProcessor: A16 Bionic chip, Storage: 128GB\r\nCamera: 48MP + 12MP + 12MP Rear, 12MP Front\r\nFeatures: Dynamic Island, Face ID, eSIM Support, USB Type-C 3.0, DisplayPort', 'The iPhone 15 128GB is a groundbreaking handset that blends cutting-edge technology with breathtaking design. This phone combines beauty and sustainability, made from a combination of color-infused glass and recyclable metal. The iPhone 15 has a Super Retina XDR OLED display with ceramic shield protection, providing Apple superb visual experience. Stay connected and informed with the dynamic island that appears at the top of the screen. This revolutionary feature alerts users to crucial notifications and live activity, so you never miss a beat. Capture beautiful photographs with the 48 MP primary camera\'s enhanced resolution and lenses. Whether you\'re a skilled photographer or just enjoy shooting images, the iPhone 15 will take your photography skills to new heights. The A16 Bionic chip powers this amazing gadget, providing revolutionary features that increase performance to the maximum level. Experience lightning-fast speeds, fluid multitasking, and smooth gaming, all while preserving battery life. In terms of battery life, the iPhone 15 comes with an optimized, high-capacity battery that can last all day on a single charge. Say goodbye to always hunting for a power outlet and enjoy uninterrupted use throughout the day. The iPhone 15 supports the universal Type C charger, which allows you to create a charging environment. No more messing with separate chargers for different devices; simply plug in and turn on. Safety is a major priority, and the iPhone 15\'s emergency features exceed expectations. Along with SOS and Crash Detection, this gadget provides Roadside Assistance via satellite. Rest assured that assistance is available in the event of an unanticipated incident. Experience the future of smartphones with the iPhone 15 128GB. This smartphone is a definite game changer, with its gorgeous look, strong performance, and sophisticated features. Enhance your smartphone experience and embrace the possibilities with the iPhone 15.', 'iPhone 15 128GB Blue (Singapore Unofficial)', 'iPhone 15 128GB Blue (Singapore Unofficial) iPhone 15 128GB Blue (Singapore Unofficial) iPhone 15 128GB Blue (Singapore Unofficial)', 128700, 117000, 10, 1, 0, 0, 0, 0, 'upload/product-image/398268.png', '2024-03-28 13:00:24', '2024-03-28 13:01:55'),
(33, 12, 9, 8, 2, 'MSI PRO MP223 21.45\" Full HD Business Monitor', 'PRO MP223', 'Resolution: FHD (1920 x 1080)\r\nDisplay: VA, 100Hz, 1ms\r\nPorts: 1x HDMI, 1x VGA, 1x Audio Out\r\nFeatures: Anti-Flicker Technology', 'The MSI PRO MP223 21.45\" 100Hz Full HD Business Monitor Boost your productivity at work with the 21.5-inch Full HD Monitor. Your programs, spreadsheets, and other crucial work papers may be seen with ease on its large 21.45-inch screen. Your eyes are protected by MSI Anti-Flicker technology, which also reduces blue light, while long-term eye damage is also prevented. Despite your long hours of work, you can rely on this monitor to safeguard your eye health. The VA Wide Viewing Angle technology enhances the screen\'s colors and brightness to make sure you can enjoy every detail to the fullest, making it ideal for professionals who need precise color representation. This MSI PRO MP223 also has a high refresh rate of 100Hz, which enables it to display more images continuously while putting less strain on your eyes. Also, the MSI PRO MP22 Monitor Display Kit Support offers you the most practical instrument to guarantee accurate color and display mode while working. In order to keep your MSI Pen or smartphone close to hand and ensure that you never miss a crucial communication, the MSI PRO MP223 also has an accessory slot design that creates a clear table. In addition, this MSI PRO MP223 Business Monitor is VESA compatible, so you can mount it on the wall of your house or office to make it completely inconspicuous when placed on a desk. With the MSI PRO MP223, improve your work experience.', 'MSI PRO MP223 21.45\" Full HD Business Monitor', 'and display mode while working. In order to keep your MSI Pen or smartphone close to hand and ensure that you never miss a crucial communication, the MSI PRO MP223 also has an accessory slot design that creates a clear table. In addition, this MSI PRO MP223 Business Monitor is VESA compatible, so you can mount it on the wall of your house or office to make it completely inconspicuous when placed on a desk. With the MSI PRO MP223, improve your work experience.', 10740, 10000, 100, 1, 0, 0, 0, 0, 'upload/product-image/427873.png', '2024-03-28 13:05:31', '2024-03-28 13:07:18'),
(34, 13, 10, 5, 2, 'Deer Rider', 'PLD00053', 'Process: Blow molding\r\nMaterial: HDPE\r\nToxicity: Non-toxic\r\nGrade: Food grade', 'Product code: 852652\r\nBrand: Play Time\r\nType: Rocker\r\nProcess: Blow molding\r\nMaterial: HDPE\r\nToxicity: Non-toxic\r\nGrade: Food grade\r\nDesign: Ergonomically designed without sharp edge\r\nSafety: Child safe\r\nPigment: Child safe\r\nAge group: 2-5 Years\r\nColor: Red (As given picture)\r\n\r\nNote:\r\n* Product delivery duration may vary due to product availability in stock.\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 'Deer Rider', 'Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 1600, 1360, 100, 1, 0, 0, 0, 0, 'upload/product-image/327337.jpg', '2024-03-28 13:13:22', '2024-03-28 13:13:22'),
(35, 13, 10, 5, 3, 'Double Colored Plastic Kids Ball 50 pcs', 'PLD00054', 'Item code: 852663\r\nClass code: RC1810020\r\nGroup: Safer\r\nType: Double color plastic kids ball\r\nMaterial: PP\r\nToxicity: Non-toxic', 'Double Colored Plastic Kids Ball 50 pcs\r\nBrand: Playtime Toys\r\nItem code: 852663\r\nClass code: RC1810020\r\nGroup: Safer\r\nType: Double color plastic kids ball\r\nMaterial: PP\r\nToxicity: Non-toxic\r\nGrade: Food grade\r\nDesign: Ergonomically design without sharp edge\r\nSafety: Child safe\r\nPigment: Child safe\r\nAge group: 1 to 3 Years\r\nBall qty per packet: 50 pcs\r\nColor: (Mixed) As given picture.\r\n\r\nNote: Product delivery duration may vary due to product availability in stock.\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 'Picture of Double Colored Plastic Kids Ball 50 pcsPicture of Double Colored Plastic Kids Ball 50 pcs Picture of Double Colored Plastic Kids Ball 50 pcsPicture of Double Colored Plastic Kids Ball 50 pcs Picture of Double Colored Plastic Kids Ball 50 pcs Picture of Double Colored Plastic Kids Ball 50 pcs Picture of Double Colored Plastic Kids Ball 50 pcs', 'Double Colored Plastic Kids Ball 50 pcs\r\nBrand: Playtime Toys\r\nItem code: 852663\r\nClass code: RC1810020\r\nGroup: Safer\r\nType: Double color plastic kids ball\r\nMaterial: PP\r\nToxicity: Non-toxic\r\nGrade: Food grade\r\nDesign: Ergonomically design without sharp edge\r\nSafety: Child safe\r\nPigment: Child safe\r\nAge group: 1 to 3 Years\r\nBall qty per packet: 50 pcs\r\nColor: (Mixed) As given picture.\r\n\r\nNote: Product delivery duration may vary due to product availability in stock.\r\nDisclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.', 500, 425, 40, 1, 0, 0, 0, 0, 'upload/product-image/252974.jpg', '2024-03-28 13:15:19', '2024-03-28 13:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_other_images`
--

CREATE TABLE `product_other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_other_images`
--

INSERT INTO `product_other_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(79, 20, 'upload/product_other_image/493668.jpg', '2024-03-28 12:07:04', '2024-03-28 12:07:04'),
(80, 20, 'upload/product_other_image/36229.jpg', '2024-03-28 12:07:04', '2024-03-28 12:07:04'),
(81, 20, 'upload/product_other_image/216446.jpg', '2024-03-28 12:07:04', '2024-03-28 12:07:04'),
(82, 21, 'upload/product_other_image/231911.jpg', '2024-03-28 12:12:47', '2024-03-28 12:12:47'),
(83, 21, 'upload/product_other_image/143845.jpg', '2024-03-28 12:12:47', '2024-03-28 12:12:47'),
(84, 21, 'upload/product_other_image/359622.jpg', '2024-03-28 12:12:47', '2024-03-28 12:12:47'),
(85, 22, 'upload/product_other_image/496009.jpg', '2024-03-28 12:15:53', '2024-03-28 12:15:53'),
(86, 22, 'upload/product_other_image/125342.jpg', '2024-03-28 12:15:53', '2024-03-28 12:15:53'),
(87, 22, 'upload/product_other_image/263745.jpg', '2024-03-28 12:15:53', '2024-03-28 12:15:53'),
(88, 22, 'upload/product_other_image/448709.jpg', '2024-03-28 12:15:53', '2024-03-28 12:15:53'),
(89, 23, 'upload/product_other_image/82825.png', '2024-03-28 12:22:16', '2024-03-28 12:22:16'),
(90, 23, 'upload/product_other_image/91277.jpg', '2024-03-28 12:22:16', '2024-03-28 12:22:16'),
(91, 24, 'upload/product_other_image/381365.png', '2024-03-28 12:25:51', '2024-03-28 12:25:51'),
(92, 24, 'upload/product_other_image/446726.jpg', '2024-03-28 12:25:51', '2024-03-28 12:25:51'),
(93, 25, 'upload/product_other_image/184524.jpg', '2024-03-28 12:33:31', '2024-03-28 12:33:31'),
(94, 25, 'upload/product_other_image/436788.jpg', '2024-03-28 12:33:31', '2024-03-28 12:33:31'),
(95, 25, 'upload/product_other_image/238575.jpg', '2024-03-28 12:33:31', '2024-03-28 12:33:31'),
(96, 26, 'upload/product_other_image/193399.jpg', '2024-03-28 12:36:01', '2024-03-28 12:36:01'),
(97, 26, 'upload/product_other_image/216252.jpg', '2024-03-28 12:36:01', '2024-03-28 12:36:01'),
(98, 27, 'upload/product_other_image/450550.jpg', '2024-03-28 12:38:50', '2024-03-28 12:38:50'),
(99, 27, 'upload/product_other_image/267846.jpg', '2024-03-28 12:38:50', '2024-03-28 12:38:50'),
(100, 27, 'upload/product_other_image/164176.jpg', '2024-03-28 12:38:50', '2024-03-28 12:38:50'),
(101, 27, 'upload/product_other_image/74424.jpg', '2024-03-28 12:38:50', '2024-03-28 12:38:50'),
(102, 28, 'upload/product_other_image/192267.jpg', '2024-03-28 12:42:22', '2024-03-28 12:42:22'),
(103, 28, 'upload/product_other_image/287902.jpg', '2024-03-28 12:42:22', '2024-03-28 12:42:22'),
(104, 28, 'upload/product_other_image/468984.jpg', '2024-03-28 12:42:22', '2024-03-28 12:42:22'),
(105, 28, 'upload/product_other_image/24606.jpg', '2024-03-28 12:42:22', '2024-03-28 12:42:22'),
(106, 28, 'upload/product_other_image/432352.jpg', '2024-03-28 12:42:22', '2024-03-28 12:42:22'),
(107, 29, 'upload/product_other_image/457262.png', '2024-03-28 12:47:22', '2024-03-28 12:47:22'),
(108, 29, 'upload/product_other_image/151899.png', '2024-03-28 12:47:22', '2024-03-28 12:47:22'),
(109, 30, 'upload/product_other_image/498865.jpg', '2024-03-28 12:49:36', '2024-03-28 12:49:36'),
(110, 30, 'upload/product_other_image/316483.png', '2024-03-28 12:49:36', '2024-03-28 12:49:36'),
(111, 30, 'upload/product_other_image/442851.png', '2024-03-28 12:49:36', '2024-03-28 12:49:36'),
(112, 31, 'upload/product_other_image/412195.png', '2024-03-28 12:55:33', '2024-03-28 12:55:33'),
(113, 31, 'upload/product_other_image/474469.jpg', '2024-03-28 12:55:33', '2024-03-28 12:55:33'),
(114, 31, 'upload/product_other_image/5917.jpg', '2024-03-28 12:55:33', '2024-03-28 12:55:33'),
(115, 32, 'upload/product_other_image/71690.png', '2024-03-28 13:00:24', '2024-03-28 13:00:24'),
(116, 32, 'upload/product_other_image/327616.png', '2024-03-28 13:00:24', '2024-03-28 13:00:24'),
(117, 33, 'upload/product_other_image/480549.png', '2024-03-28 13:05:31', '2024-03-28 13:05:31'),
(118, 33, 'upload/product_other_image/439639.png', '2024-03-28 13:05:31', '2024-03-28 13:05:31'),
(119, 33, 'upload/product_other_image/24474.png', '2024-03-28 13:05:31', '2024-03-28 13:05:31'),
(120, 34, 'upload/product_other_image/333175.jpg', '2024-03-28 13:13:22', '2024-03-28 13:13:22'),
(121, 34, 'upload/product_other_image/191536.jpg', '2024-03-28 13:13:22', '2024-03-28 13:13:22'),
(122, 34, 'upload/product_other_image/426293.png', '2024-03-28 13:13:22', '2024-03-28 13:13:22'),
(123, 35, 'upload/product_other_image/480437.jpg', '2024-03-28 13:15:19', '2024-03-28 13:15:19'),
(124, 35, 'upload/product_other_image/59951.jpg', '2024-03-28 13:15:19', '2024-03-28 13:15:19');

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
('cIRVxNlD2hONF6ljkxNyAVcCxfloroeEslHhNcZK', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUZSTlY2SEdwOE5wZTl5RDVoMFlaMW1WdzQ0WWZQWHI3UUZ6WXhLcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvamVjdC9hbmRTaG9wL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715604115),
('deWvEdO6eeR7YWsSBWCERR7Kxm1ZpGVeF93t1KU0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3RJSXpuOUladjdHMzd6WkdGTHlCd0dzQVlvdzJCWmtFQkFzUHpZZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1715769414),
('Iavd8AwAYE4IJmrxv4DCd8TD0SZcXvXV0AkKARTd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2JvMGVob053bkxSRXdNVno0Z2prc08zU25XWUJXMk1oa0FpajBYMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWwvMzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1715536453);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Jewelry', 10, 'Jewelry  Jewelry', 'upload/subCategory-image/495046.jpg', 1, '2024-03-28 11:58:05', '2024-03-28 11:58:05'),
(4, 'Jewellery Set', 10, 'jewellery Set', 'upload/subCategory-image/295475.jpg', 1, '2024-03-28 12:10:12', '2024-03-28 12:10:12'),
(5, 'Handbags', 10, 'HandbagsHandbags Handbags Handbags Handbags Handbags Handbags Handbags Handbags Handbags Handbags Handbags Handbags', 'upload/subCategory-image/122630.jpg', 1, '2024-03-28 12:18:01', '2024-03-28 12:18:01'),
(6, 'Men Fashion', 11, 'Men Fashion  Men Fashion  Men Fashion', 'upload/subCategory-image/200975.jpg', 1, '2024-03-28 12:30:16', '2024-03-28 12:30:16'),
(7, 'Woman Fashion', 11, 'Woman FashionWoman FashionWoman FashionWoman Fashion', 'upload/subCategory-image/295794.png', 1, '2024-03-28 12:44:22', '2024-03-28 12:44:22'),
(8, 'Smartphone', 12, 'Smartphone\r\nSmartphone\r\nSmartphone', 'upload/subCategory-image/117211.jpg', 1, '2024-03-28 12:52:19', '2024-03-28 12:52:19'),
(9, 'computer', 12, 'computer computer computer computer computer computer', 'upload/subCategory-image/333398.png', 1, '2024-03-28 13:07:03', '2024-03-28 13:07:03'),
(10, 'Toys', 13, 'ToysToysToysToy sToysToys ToysToysToysToy sToysToysToys', 'upload/subCategory-image/457076.png', 1, '2024-03-28 13:10:20', '2024-03-28 13:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kg', 'kg', 0, '2024-03-26 23:23:28', '2024-03-26 23:24:02'),
(2, 'pec', 'pec', 1, '2024-03-26 23:23:46', '2024-03-26 23:23:46'),
(3, 'Set', 'Set Set Set Set Set Set', 1, '2024-03-28 13:11:04', '2024-03-28 13:11:04');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'Shimul Mia', 'mshimul591@gmail.com', NULL, '$2y$12$nedhNTpNI/myFn6p2ba07udEKNV8T6052X2uyuWMA2pR1CXlyGxt6', NULL, NULL, NULL, 'mnNEbpEwJpvq1SneEaViFT4bIxJY80QL2TgiJwATt51ti0I74tjfH3TTq74g', NULL, 'upload/user/208178.png', '2024-03-26 12:12:25', '2024-03-26 12:12:25'),
(5, 'Shimul shimul', 'shimul@gmail.com', NULL, '$2y$12$IK89BdiWkvMTOK4gt8DwOuKO/ZxVUWsEyI2/JLEe8mCS9OgsxXsfi', NULL, NULL, NULL, NULL, NULL, 'upload/user/393904.jpg', '2024-03-26 12:16:59', '2024-03-26 13:10:29'),
(6, 'Popi', 'admin@gmail.com', NULL, '$2y$12$BT44iaoWYGNfCqJfF1cwWea5ElkCmmv7jBjmj1eArT0cG5i9uK0Fm', NULL, NULL, NULL, NULL, NULL, 'upload/user/380640.jpg', '2024-03-26 13:06:34', '2024-03-26 13:07:10'),
(7, 'popi', 'popi@gmail.com', NULL, '$2y$12$OQJDblPW0BAO5VMCTxx7FO3GCDJuL4xz41T7w15y0uRdyE6AQPaDC', NULL, NULL, NULL, NULL, NULL, 'upload/user/26555.jpg', '2024-04-08 00:43:06', '2024-04-08 00:43:52'),
(8, 'tariqul Islam', 'tariqul@gmail.com', NULL, '$2y$12$dhFc9OqeSMUCc.oebah2Ke9lMt6PfQNC.B8Y4ipS4iTm4ywANUChm', NULL, NULL, NULL, NULL, NULL, 'upload/user/105524.png', '2024-04-25 22:15:19', '2024-04-27 12:28:31'),
(9, 'SP Shimul', 'shimul591@gmail.com', NULL, '$2y$12$eAq9YPqy/3Jro2/VXQyQ0erjYNAThoQqaSo/bV2dwCMTosYHyDlmy', NULL, NULL, NULL, NULL, NULL, 'upload/user/448622.png', '2024-04-27 12:27:08', '2024-04-27 12:28:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `product_other_images`
--
ALTER TABLE `product_other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_other_images`
--
ALTER TABLE `product_other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
