-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 04:43 PM
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
-- Database: `furniscape`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_quant` int(11) NOT NULL,
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
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'beds', 'beds', '2024-05-19 16:47:50', '2024-05-28 16:53:38'),
(2, 'tables', 'tables', '2024-05-19 16:47:50', '2024-08-13 07:59:13'),
(3, 'chairs', 'chairs', '2024-05-19 16:47:50', '2024-08-13 07:59:28'),
(4, 'ottoman chairs', 'ottoman-chairs', '2024-05-19 16:47:50', '2024-08-13 08:00:16'),
(5, 'dining set', 'dining-set', '2024-05-19 16:47:50', '2024-08-13 08:00:37'),
(6, 'drawer', 'drawer', '2024-05-19 16:47:50', '2024-08-13 08:02:38'),
(7, 'dining table', 'dining-table', '2024-05-19 16:47:50', '2024-08-14 09:22:37'),
(8, 'Side table', 'side-table', '2024-05-19 16:47:50', '2024-08-14 09:33:13'),
(9, 'dresser', 'dresser', '2024-05-19 16:47:50', '2024-08-14 11:37:00'),
(10, 'storage cabinets', 'storage-cabinets', '2024-05-19 16:47:50', '2024-08-14 11:48:48'),
(11, 'sofa', 'sofa', '2024-05-27 05:14:37', '2024-05-27 05:14:37'),
(12, 'rugs', 'rugs', '2024-08-15 07:46:22', '2024-08-15 07:46:22'),
(13, 'Kids decor', 'kids-decor', '2024-08-15 08:07:40', '2024-08-15 08:07:40'),
(14, 'kitchen cabinet', 'kitchen-cabinet', '2024-08-15 08:22:38', '2024-08-15 08:22:38'),
(15, 'wardrobe', 'wardrobe', '2024-08-15 10:45:26', '2024-08-15 10:45:26'),
(16, 'mirror', 'mirror', '2024-08-15 12:29:17', '2024-08-15 12:29:17'),
(17, 'kids bed', 'kids-bed', '2024-08-15 12:37:34', '2024-08-15 12:37:34'),
(18, 'toddlers bed', 'toddlers-bed', '2024-08-15 12:59:59', '2024-08-15 12:59:59'),
(19, 'kitchen stool', 'kitchen-stool', '2024-08-15 13:15:14', '2024-08-15 13:15:14');

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
(5, '2024_05_15_213106_create_categories_table', 1),
(6, '2024_05_15_213123_create_products_table', 1),
(7, '2024_05_15_213141_create_orders_table', 1),
(8, '2024_05_15_213158_create_order_items_table', 1),
(9, '2024_05_15_213242_create_product_images_table', 1),
(10, '2024_05_15_213254_create_product_variations_table', 1),
(11, '2024_05_25_235847_add_role_enum_to_users_table', 2),
(12, '2024_06_29_134959_create_carts_table', 3),
(13, '2024_07_07_111359_add_columns_to_users_table', 4),
(14, '2024_07_07_113234_add_tracking_number_to_orders_table', 4),
(15, '2024_07_07_131717_add_total_price_to_orders_table', 5),
(16, '2024_08_03_131634_create_product_variants_table', 6),
(17, '2024_08_03_131758_create_product_variant_images_table', 6),
(18, '2024_08_07_103501_add_variant_id_to_carts_table', 7),
(19, '2024_08_07_115614_add_variant_id_to_order_items_table', 8),
(20, '2024_08_07_175433_create_ratings_table', 9),
(21, '2024_08_11_164218_add_rider_id_to_orders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `status` enum('pending','confirmed','delivered','dispatched','cancelled') NOT NULL,
  `payment_method` enum('cod','card') NOT NULL,
  `payment_status` tinyint(1) NOT NULL,
  `shipping_address` text NOT NULL,
  `billing_address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `total_price` double NOT NULL,
  `rider_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `number`, `status`, `payment_method`, `payment_status`, `shipping_address`, `billing_address`, `created_at`, `updated_at`, `tracking_no`, `total_price`, `rider_id`) VALUES
(1, 1, 122, 'pending', 'cod', 0, 'Updated Shipping Address', 'Billing Address', '2024-07-12 11:29:47', '2024-08-11 12:27:19', 'ORD_8426', 400, NULL),
(2, 1, 122, 'pending', 'cod', 0, 'Bahria Town Bhase 4', 'Bahria Town Bhase 7', '2024-08-03 03:33:13', '2024-08-11 12:26:58', 'ORD_4982', 793.79, NULL),
(3, 1, 122, 'pending', 'cod', 0, 'Shipping Address', 'Billing Address', '2024-08-07 06:45:35', '2024-08-11 12:25:05', 'ORD_5012', 90000, NULL),
(5, 1, 122, 'dispatched', 'cod', 0, 'Shipping Address', 'Billing Address', '2024-08-07 07:04:01', '2024-08-13 10:40:01', 'ORD_2429', 112000, '4'),
(6, 1, 123, 'dispatched', 'cod', 0, 'Bahria Town Bhase 4', 'Bahria Town Bhase 7', '2024-08-08 14:09:55', '2024-08-13 10:39:43', 'ORD_123', 193000, '4'),
(7, 7, 124, 'delivered', 'cod', 0, 'hbl atm iiui', 'hbl atm iiui', '2024-08-13 11:21:34', '2024-08-13 11:34:11', 'ORD_124', 50000, '4');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `variant_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(3, 2, 3, NULL, 2, 394, '2024-08-03 03:33:13', '2024-08-03 03:33:13'),
(4, 3, 59, NULL, 2, 45000, '2024-08-07 06:45:35', '2024-08-07 06:45:35'),
(5, 3, 59, NULL, 1, 45000, '2024-08-07 06:45:35', '2024-08-07 06:45:35'),
(6, 5, 59, 1, 1, 58000, '2024-08-07 07:04:01', '2024-08-07 07:04:01'),
(7, 5, 59, 3, 1, 54000, '2024-08-07 07:04:01', '2024-08-07 07:04:01'),
(8, 6, 59, NULL, 3, 45000, '2024-08-08 14:09:55', '2024-08-08 14:09:55'),
(9, 6, 59, 1, 1, 58000, '2024-08-08 14:09:55', '2024-08-08 14:09:55'),
(10, 7, 6, 13, 1, 50000, '2024-08-13 11:21:34', '2024-08-13 11:21:34');

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
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `SKU` varchar(255) DEFAULT NULL,
  `dimensions` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `discount_price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `quantity`, `SKU`, `dimensions`, `material`, `weight`, `is_featured`, `is_available`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 'Tarva Bed', 'Libero quas dolorem tenetur unde qui est autem. Blanditiis illo aperiam et tempora. Esse eum non tempore dolor. Sint iusto dolorem animi ullam.', 1, 63, NULL, '36.06x25.02x31.73', 'itaque', 797, 0, 0, 492.59, 400, '2024-05-19 17:56:51', '2024-08-13 08:13:46'),
(2, 'Fugiat', 'Ullam et illo exercitationem similique quis corrupti. Voluptate non odio consequatur beatae repellat nulla. Molestias dolorem eaque dolorem autem libero enim accusantium.', 1, 4, NULL, '34.17x32.17x36.86', 'illo', 89, 1, 1, 2999.53, 20000, '2024-05-19 17:56:51', '2024-08-14 10:32:56'),
(3, 'Dolorum', 'Sit voluptatum natus culpa repudiandae dolores repellendus. Voluptates voluptate tenetur officia dolores. Sint sit placeat dolor vel ad at. Alias ut libero excepturi iste possimus culpa aut.', 1, 8, NULL, '76.63x37.76x23.54', 'nobis', 839, 1, 1, 7999.33, 3999.79, '2024-05-19 17:56:51', '2024-08-14 12:26:27'),
(4, 'Non', 'Asperiores repellat quasi soluta voluptas voluptatibus minima recusandae. Aut dolorem occaecati rem ut laudantium sed officia. Illo sed nemo nemo quos unde.', 1, 98, NULL, '33.67x39.9x86.18', 'pariatur', 4, 0, 1, 80000.87, NULL, '2024-05-19 17:56:51', '2024-08-13 08:31:48'),
(5, 'Laborum', 'Ut soluta consequatur enim error ipsa. Necessitatibus officiis autem sint et dolorem hic cumque. Tempore fuga excepturi quis molestiae voluptas. Itaque distinctio aliquam omnis est tenetur expedita.', 4, 77, NULL, '0.39x61.99x32.69', 'Est', 855, 1, 0, 50000.97, NULL, '2024-05-19 17:56:51', '2024-08-13 08:49:03'),
(6, 'Eveniet', 'Aut est fugiat maxime molestias. Omnis a enim non voluptatem voluptates laudantium ratione. Omnis debitis numquam molestiae. Eum nulla illum reprehenderit ipsam.', 4, 87, NULL, '84.05x82.17x21.04', 'sint', 120, 1, 0, 48000.81, NULL, '2024-05-19 17:56:51', '2024-08-13 08:53:54'),
(7, 'Nisi', 'Aut vitae incidunt doloribus ut vitae voluptatem. Sequi et in nostrum illum fuga. Aut enim sit sit quam.', 3, 97, NULL, '6.26x15.78x75.79', 'Eius', 164, 1, 1, 8700.05, NULL, '2024-05-19 17:56:51', '2024-08-13 10:33:57'),
(8, 'Aspernatur', 'Molestias ut aut natus dolores nesciunt quasi sint fuga. Molestias qui optio aliquid quisquam quia sit. Nemo ut vero laboriosam accusamus ut voluptates.', 6, 81, NULL, '6.07x72.18x52', 'Ett', 123, 0, 1, 17000.15, NULL, '2024-05-19 17:56:51', '2024-08-13 09:17:05'),
(9, 'Facilis', 'Voluptas quo ullam dolores. Ducimus non sunt sint. Provident excepturi cumque voluptas consequatur.', 4, 73, NULL, '11.29x50.23x90.16', 'blanditiis', 514, 0, 0, 14999.07, NULL, '2024-05-19 17:56:51', '2024-08-13 08:59:16'),
(10, 'Voluptates', 'Non incidunt a modi nemo aut. Dolor amet qui fugiat possimus veritatis ipsa. Laboriosam omnis hic ut non vero debitis.', 6, 62, NULL, '76.72x58.72x49.28', 'tempore', 885, 1, 1, 48999.71, NULL, '2024-05-19 17:56:51', '2024-08-13 09:20:17'),
(11, 'Madona', 'Quo ut id cum quis perspiciatis itaque modi. Ducimus aut et ipsam odio sunt. Aliquid eum perspiciatis totam reprehenderit pariatur velit aut.', 3, 19, NULL, '32.41x28.37x80.07', 'eos', 928, 0, 0, 48000.47, NULL, '2024-05-19 17:56:51', '2024-08-13 09:53:22'),
(12, 'Praesentium', 'Nemo quis similique sint tenetur ex rerum. Porro provident doloremque ducimus laudantium ut quod possimus quia. Similique facere nobis qui et similique dolorem molestiae numquam. Hic quam similique autem exercitationem.', 3, 25, NULL, '15.62x0.28x34.03', 'occaecati', 23, 0, 0, 5500.18, NULL, '2024-05-19 17:56:51', '2024-08-13 09:56:34'),
(13, 'Dolor', 'Ullam minima et distinctio vitae adipisci. Magnam nihil natus rem autem quis. Omnis laborum omnis vitae culpa mollitia aut. Magnam consequatur perspiciatis est et ipsam in autem.', 6, 36, NULL, '36.68x88.54x72.68', 'omnis', 95, 1, 0, 140000.29, NULL, '2024-05-19 17:56:51', '2024-08-13 09:25:46'),
(14, 'Occaecati', 'Ut velit enim enim enim accusamus illum. Quisquam aut amet iusto dolor. Occaecati consequatur aspernatur dolore eaque error facilis eligendi.', 6, 8, NULL, '32.07x1.39x68.67', 'ratione', 528, 0, 0, 290000.98, NULL, '2024-05-19 17:56:51', '2024-08-13 09:40:28'),
(15, 'Swirly', 'Dolores nisi et tempora id. Sit cumque itaque eligendi. Qui est et exercitationem libero alias. Atque magni non a expedita.', 4, 94, NULL, '49.69x69.88x75.18', 'perspiciatis', 848, 1, 1, 9600.41, NULL, '2024-05-19 17:56:51', '2024-08-13 10:09:50'),
(16, 'Sviv Ottoman', 'Quos eum sapiente et ab eum molestias. Hic aut accusamus sed illo.', 4, 91, NULL, '23.54x40.58x38.99', 'est', 18, 1, 1, 32001.21, NULL, '2024-05-19 17:56:51', '2024-08-13 10:24:22'),
(17, 'Anton Coffee Table', 'Id aut aut laboriosam praesentium molestias in. Tenetur qui aut ad ducimus iste consequuntur. Quo sint quia facilis ducimus cum similique tenetur.', 8, 100, NULL, '83.24x51.59x23.35', 'Enim', 402, 1, 1, 930.26, NULL, '2024-05-19 17:56:51', '2024-08-14 09:28:58'),
(18, 'Anton Marble', 'Aut voluptas nihil omnis neque et rerum et. Recusandae voluptatem pariatur ipsum nihil. Aut quisquam beatae non error sed et soluta.', 8, 20, NULL, '12x3.52x48.68', 'aliquam', 208, 0, 0, 679.06, NULL, '2024-05-19 17:56:51', '2024-08-14 11:32:05'),
(19, 'Predestal', 'Eos voluptatum quae ut. Enim eum unde praesentium atque iste nihil. In in excepturi eveniet nostrum.', 8, 33, NULL, '64.61x78.41x6.12', 'veniam', 492, 0, 0, 935.48, 131.69, '2024-05-19 17:56:51', '2024-08-14 10:37:19'),
(20, 'Odin', 'Facere optio distinctio laudantium tenetur pariatur eligendi impedit. Saepe labore quasi fugiat voluptatem voluptate ratione dolor.', 8, 98, NULL, '56.63x15.67x56.63', 'eveniet', 8, 0, 0, 756.96, NULL, '2024-05-19 17:56:51', '2024-08-14 09:36:08'),
(21, 'Et', 'Asperiores temporibus fugiat autem cum ullam. Omnis odit aliquam amet aut quibusdam dolores vel laboriosam. Distinctio ad quo quod eos consequatur. Labore in exercitationem nam molestias.', 2, 10, NULL, '25.44x41.99x43.54', 'molestias', 328, 1, 1, 441.51, 335.03, '2024-05-19 17:56:51', '2024-08-14 10:01:32'),
(22, 'quas', 'Quia quasi omnis aliquam voluptate ut eaque a. Et porro sit qui voluptatem. Et ex consequuntur in. Voluptatem impedit dolorum modi recusandae porro recusandae ut vitae.', 4, 70, '4201586185617', '49.3x71.21x14.99', 'debitis', 840, 0, 0, 153.94, 484.85, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(23, 'maxime', 'Earum similique quasi eveniet rerum aut quas at. Placeat aut laboriosam itaque nisi ducimus distinctio et. Quo rerum voluptatum maxime dignissimos omnis odio labore.', 1, 20, '6597019979006', '18.82x97.04x45.56', 'distinctio', 145, 1, 0, 649.98, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(24, 'et', 'Ad quia iure doloremque minima iste voluptas. Reiciendis in ipsum incidunt nisi. Qui quisquam dolore earum laudantium.', 7, 86, '9066854995016', '54.6x69.21x3.11', 'illo', 159, 1, 1, 133.43, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(25, 'et', 'Omnis est est et. Aliquid consectetur adipisci quas omnis. Et aspernatur cumque perspiciatis qui nihil est culpa illum.', 5, 79, '5993094700534', '31.51x32.03x96.19', 'ad', 677, 1, 1, 362.17, 56.62, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(26, 'fuga', 'Molestiae rerum quis et similique. Aut nostrum architecto voluptate dicta consequatur ea. Tempora enim ab consectetur rerum reprehenderit consequatur dolore. Nihil voluptatem ut omnis optio molestiae in odit.', 1, 87, '4082992896058', '11.88x28.97x57.18', 'facilis', 518, 1, 0, 202.52, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(27, 'dignissimos', 'Exercitationem nobis porro alias odio dicta at fugit. Molestiae dolores aliquam sed ut. Aut voluptatibus vitae vel unde.', 8, 88, '1549388838694', '98.97x20.23x92.01', 'at', 505, 0, 1, 191.58, 326.43, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(28, 'Disk', 'Quia et dolor veritatis. Eaque modi odio nemo est et ut consequatur dolore. Animi quia nostrum sunt.', 8, 98, NULL, '98.02x51.71x1.05', 'voluptatibus', 114, 1, 0, 344.38, NULL, '2024-05-19 17:56:51', '2024-08-14 09:51:23'),
(29, 'Nostrum', 'Eum omnis voluptatem ut perferendis. Qui repellendus consequuntur sed reprehenderit ipsa. Non similique aut et velit repudiandae.', 2, 43, NULL, '47.6x91.44x8.5', 'minus', 715, 0, 1, 166.99, NULL, '2024-05-19 17:56:51', '2024-08-14 09:57:08'),
(30, 'omnis', 'Molestiae ducimus occaecati sunt dolores. Soluta amet cupiditate iure et doloribus eveniet. Eos quasi delectus optio inventore voluptatem. Fuga est commodi iste et dicta animi tempora.', 7, 24, '1835814078872', '22.7x93.02x15.02', 'delectus', 55, 1, 0, 951.59, 84.68, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(31, 'sunt', 'Nisi dolores qui quo unde quam natus. Unde voluptatem animi cum quia et placeat voluptas.', 4, 22, '0547846648602', '2.2x6.46x98.82', 'aut', 954, 1, 1, 898.23, 395.06, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(32, 'deserunt', 'Quae a sint rerum delectus quia. Omnis repudiandae aliquam provident a sed et. Voluptate et qui nobis mollitia qui tempora est.', 2, 24, '6516613268262', '13.34x85.85x86.66', 'dicta', 682, 1, 1, 530.94, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(33, 'et', 'Qui debitis voluptatem recusandae architecto placeat autem ab. Rerum quo consequuntur exercitationem beatae porro ea. Aspernatur placeat deserunt molestiae error voluptatibus et sint alias.', 4, 18, '6092108166898', '57.15x33.43x52.99', 'ipsum', 183, 0, 1, 429.49, 315.26, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(34, 'Metallic', 'Consectetur omnis officiis inventore et adipisci. Odio in quis nesciunt. Est accusamus omnis aut sed molestiae nemo ut. Aliquam voluptas nisi accusantium velit soluta quos ratione.', 10, 73, NULL, '98.76x42.87x34.66', 'voluptatem', 834, 1, 0, 882.56, 395.3, '2024-05-19 17:56:51', '2024-08-14 12:20:45'),
(35, 'blanditiis', 'Harum deleniti rerum voluptatibus animi officiis adipisci. Et temporibus consequuntur non aut. Ut culpa consequuntur eius ratione saepe magni voluptas iure. Quam sunt ut doloribus quia voluptate ut.', 3, 28, '0152214365434', '62.41x24.93x15.2', 'et', 237, 0, 0, 634.97, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(36, 'ut', 'Eum voluptas autem eum corporis ipsam impedit repellat. Dolores earum labore sunt eaque laborum consequatur enim. Quisquam consequatur fugiat pariatur quo culpa.', 9, 16, '0774759186031', '60.62x21.06x49.2', 'impedit', 804, 0, 1, 528.03, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(37, 'deserunt', 'Minus placeat nisi minima incidunt est. Itaque et nisi et veniam totam. Laudantium omnis quibusdam quasi laborum assumenda voluptatem culpa. Et dicta nesciunt impedit est nihil consequatur.', 4, 22, '8829280789137', '16.64x20.21x56.89', 'et', 807, 0, 1, 991.37, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(38, 'laborum', 'Nesciunt ipsum amet eveniet odio natus ullam. Laboriosam quo modi qui velit. Laborum qui illum quibusdam perferendis.', 6, 27, '7185536888681', '98.65x71.49x51.01', 'et', 708, 1, 0, 303.36, 116.36, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(39, 'voluptatum', 'Sapiente ab molestiae aut in rerum dolorem. Nisi incidunt molestias quo et.', 3, 95, '3661338082419', '38.91x50.8x78.08', 'ea', 239, 1, 0, 180.88, 315.94, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(40, 'accusamus', 'Quis natus quod autem laudantium enim aut est. Vel sunt officia ut minima maiores. Totam quia iusto aut vitae optio nesciunt. Et sed veniam ipsam laboriosam modi.', 7, 22, '6877240751184', '71.6x76.84x6.65', 'porro', 340, 1, 1, 690.42, 37.81, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(41, 'est', 'Nulla necessitatibus facilis et. Alias voluptatem dolores ut consequuntur consequuntur maiores eos doloremque.', 5, 5, '2908583097388', '41.03x91.31x13.97', 'et', 377, 1, 0, 271.03, 305.72, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(42, 'amet', 'Aut voluptates odit dolores veniam sint. Culpa perferendis enim quo dolorum. Natus placeat et soluta qui voluptatem itaque accusamus unde. Unde ut ut delectus numquam. Ut est nesciunt quibusdam consequatur autem beatae atque.', 5, 4, '4315648133611', '84.03x32.6x90.37', 'iure', 108, 1, 0, 907.64, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(43, 'quae', 'Est sed maiores cupiditate voluptatum voluptatem. Nihil minus delectus doloribus. Quae dolores voluptate dignissimos. Assumenda sint possimus beatae dolorem.', 4, 13, '1176985143762', '66.76x20.36x59.24', 'odio', 62, 0, 1, 992.76, 190.28, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(44, 'quo', 'Magni cumque dolor odit odio. Nobis ab dolor et dolorum quas et excepturi. Aut nesciunt modi fuga libero odio adipisci.', 9, 65, '6512254483972', '54.67x78.38x73.2', 'recusandae', 947, 0, 0, 528.7, 50.63, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(45, 'voluptate', 'Libero modi ut est omnis possimus. Quos sit eos sequi voluptatem. Provident nulla rerum qui quam et sit beatae.', 9, 39, '3842172296938', '58.21x88.53x3.54', 'minima', 454, 1, 0, 471.91, 342.61, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(46, 'est', 'Alias praesentium rerum veritatis recusandae consequatur. Tempora quasi fugit tempora est. Nihil impedit voluptatem adipisci mollitia animi beatae.', 6, 59, '4670608424551', '84.08x24.6x76.24', 'distinctio', 12, 1, 0, 419.81, 142.17, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(47, 'nihil', 'Exercitationem dolorum quae sunt quisquam vero. Deserunt consequatur rerum voluptatem amet eveniet voluptatem cumque. Non asperiores dolorem voluptatem temporibus aut sit eos. Adipisci officiis beatae rem est vero et.', 7, 53, '6778942939989', '22.21x7.76x38.25', 'recusandae', 911, 1, 0, 127.26, 67.44, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(48, 'consequuntur', 'Accusantium voluptatibus molestiae enim accusamus sit animi minima. Consequatur ut sit asperiores unde voluptatibus architecto. Laudantium maxime similique voluptatem numquam repudiandae. Accusamus eum eum quis et doloribus omnis.', 1, 18, '5786941293002', '76.53x32.29x30.45', 'fugit', 786, 0, 0, 332.64, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(49, 'maxime', 'Exercitationem est quisquam sit quo. Doloribus facilis aut optio et. Similique fugit quidem architecto.', 8, 93, '1891460535589', '97.56x40.37x50.17', 'quia', 802, 0, 0, 696.59, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(50, 'ea', 'Et blanditiis pariatur expedita sed non velit. Est vel non eum. Perferendis eius beatae veritatis et quia et. Nobis est assumenda voluptatem id sit expedita.', 4, 70, '2409219659180', '90.63x61.86x64.61', 'enim', 476, 1, 0, 399.94, 114.76, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(59, 'Luxury Sofa', 'Luxury Sofa', 11, 56, 'SKU-121', '36.06x25.02x31.73', 'Velvet', 56, 1, 1, 50000, 45000, '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(60, 'Leeka', 'Lorem Ispum jskjhsksbahjab', 1, 50, NULL, '300x450', 'Pure wood', 100, 1, 1, 50000, 40000, '2024-08-13 08:09:59', '2024-08-13 08:11:16'),
(61, 'Solace', 'lorem', 2, 6, NULL, '300x450', 'Est', 85, 1, 1, 5000, NULL, '2024-08-14 10:43:54', '2024-08-14 11:28:16'),
(62, 'Manti Black', 'lorem', 2, 50, NULL, '300x450', NULL, 60, 1, 1, 25000, NULL, '2024-08-14 11:34:41', '2024-08-14 11:35:21'),
(63, 'Sol', 'Lorem', 9, 60, NULL, '300x450', NULL, 50, 1, 1, 6000, NULL, '2024-08-14 11:37:47', '2024-08-14 11:38:25'),
(64, 'Monka', 'lo', 2, 50, NULL, '300x450', NULL, 30, 1, 1, 60000, NULL, '2024-08-14 11:41:57', '2024-08-14 11:43:05'),
(65, 'Pecker', 'lo', 3, 90, NULL, '300x450', NULL, 60, 1, 1, 600, NULL, '2024-08-14 11:44:49', '2024-08-14 11:47:03'),
(66, 'Sova', 'lo', 10, 30, NULL, NULL, NULL, 95, 1, 1, 8000, NULL, '2024-08-14 11:49:47', '2024-08-14 11:50:19'),
(67, 'Woila', 'lo', 10, 50, NULL, '300x450', NULL, 78, 1, 1, 12000, NULL, '2024-08-14 11:56:59', '2024-08-14 11:59:14'),
(68, 'woven', 'lo', 10, 70, NULL, '300x450', NULL, 60, 1, 1, 6000, NULL, '2024-08-14 12:04:54', '2024-08-14 12:05:28'),
(69, 'Olaa', 'lo', 10, 93, NULL, '300x450', NULL, 24, 1, 1, 80000, NULL, '2024-08-14 12:06:19', '2024-08-14 12:09:34'),
(70, 'Quin', 'lo', 10, 60, NULL, '300x450', NULL, 80, 1, 1, 9000, NULL, '2024-08-14 12:10:25', '2024-08-14 12:10:57'),
(71, 'Cloud', 'lo', 1, 60, NULL, '300x450', NULL, 70, 1, 1, 60000, NULL, '2024-08-14 12:47:41', '2024-08-14 12:49:37'),
(72, 'Mid-century Daybed', 'lo', 1, 80, NULL, '300x450', NULL, 45, 1, 1, 89000, NULL, '2024-08-14 12:56:59', '2024-08-14 12:59:38'),
(73, 'Berska', 'lo', 12, 80, NULL, '300x450', NULL, 500, 1, 1, 8000, NULL, '2024-08-15 07:47:59', '2024-08-15 07:48:13'),
(74, 'Canoi', 'lo', 12, 60, NULL, '300x450', NULL, 600, 1, 1, 9000, NULL, '2024-08-15 07:49:15', '2024-08-15 07:49:56'),
(75, 'Lilaa', 'lo', 12, 5, NULL, '300x450', NULL, 700, 1, 1, 5000, NULL, '2024-08-15 07:56:28', '2024-08-15 07:56:44'),
(76, 'Winn', 'lo', 12, 60, NULL, '300x450', NULL, 80, 1, 1, 7000, NULL, '2024-08-15 08:00:33', '2024-08-15 08:00:48'),
(77, 'Cono', 'lo', 12, 70, NULL, '244x80', NULL, 80, 1, 1, 8000, NULL, '2024-08-15 08:04:34', '2024-08-15 08:06:00'),
(78, 'floral basket', 'lo', 13, 60, NULL, '0', NULL, 50, 1, 1, 6500, NULL, '2024-08-15 08:08:50', '2024-08-15 08:09:14'),
(79, 'Elephant storage', 'ko', 13, 5, NULL, '0', NULL, 0, 1, 1, 1200, NULL, '2024-08-15 08:12:53', '2024-08-15 08:13:07'),
(80, 'Floral lamp head', 'lo', 13, 5, NULL, '0', NULL, 0, 1, 1, 4000, NULL, '2024-08-15 08:15:50', '2024-08-15 08:16:00'),
(81, 'Delfi', 'lo', 14, 80, NULL, '0', NULL, 0, 1, 1, 60000, NULL, '2024-08-15 08:31:43', '2024-08-15 08:33:11'),
(82, 'Sekton', 'lo', 14, 40, NULL, '0', NULL, 0, 1, 1, 70000, NULL, '2024-08-15 08:41:55', '2024-08-15 08:42:45'),
(83, 'Oakwood', 'lo', 14, 7, NULL, '0', NULL, 0, 1, 1, 8000, NULL, '2024-08-15 08:45:19', '2024-08-15 08:45:54'),
(84, 'Windwood', 'lo', 14, 45, NULL, '0', NULL, 0, 1, 1, 4000, NULL, '2024-08-15 08:47:46', '2024-08-15 08:47:46'),
(85, 'Ehnet', 'lo', 14, 20, NULL, '0', NULL, 0, 1, 1, 7000, NULL, '2024-08-15 08:51:30', '2024-08-15 08:52:52'),
(86, 'Cae', 'lo', 12, 0, NULL, '0', NULL, 0, 1, 1, 7000, NULL, '2024-08-15 09:02:56', '2024-08-15 09:04:20'),
(87, 'Eer', 'lo', 11, 45, NULL, '0', NULL, 0, 1, 1, 30000, NULL, '2024-08-15 09:08:38', '2024-08-15 09:09:49'),
(88, 'Comfi', 'lo', 11, 60, NULL, '0', NULL, 0, 1, 1, 50000, NULL, '2024-08-15 09:10:40', '2024-08-15 09:12:36'),
(89, 'Reli', 'lo', 11, 12, NULL, '0', NULL, 0, 1, 1, 45000, NULL, '2024-08-15 09:13:27', '2024-08-15 09:15:08'),
(90, 'Queen', 'lo', 11, 14, NULL, '0', NULL, 0, 1, 1, 26000, NULL, '2024-08-15 09:15:54', '2024-08-15 09:16:49'),
(91, 'cozy', 'lo', 11, 5, NULL, '0', NULL, 0, 1, 1, 70000, NULL, '2024-08-15 09:18:01', '2024-08-15 09:19:04'),
(92, 'Boka', 'lo', 11, 60, NULL, '0', NULL, 0, 1, 1, 45000, NULL, '2024-08-15 09:19:50', '2024-08-15 09:20:51'),
(93, 'Grea', 'lo', 12, 56, NULL, '0', NULL, 0, 1, 1, 12000, NULL, '2024-08-15 09:47:32', '2024-08-15 09:48:16'),
(94, 'Iola', 'lo', 12, 6, NULL, '0', NULL, 0, 1, 1, 45000, NULL, '2024-08-15 09:49:04', '2024-08-15 09:49:44'),
(95, 'kinda', 'lo', 12, 56, NULL, '00', NULL, 0, 1, 1, 6000, NULL, '2024-08-15 09:50:25', '2024-08-15 09:50:56'),
(96, 'Lindz', 'lo', 12, 6, NULL, '0', NULL, 0, 1, 1, 6000, NULL, '2024-08-15 09:51:49', '2024-08-15 09:52:07'),
(97, 'Piola', 'l', 12, 23, NULL, '0', NULL, 0, 1, 1, 22000, NULL, '2024-08-15 09:53:48', '2024-08-15 09:54:41'),
(98, 'Kinza', 'l', 12, 15, NULL, '0', NULL, 0, 1, 1, 34000, NULL, '2024-08-15 09:56:06', '2024-08-15 09:57:00'),
(99, 'sofia', 'l', 12, 15, NULL, '0', NULL, 0, 1, 1, 20000, NULL, '2024-08-15 09:58:47', '2024-08-15 09:59:34'),
(100, 'Set 1', 'l', 5, 6, NULL, '0', NULL, 0, 1, 1, 150000, NULL, '2024-08-15 10:03:19', '2024-08-15 10:05:13'),
(101, 'Set 2', 'l', 5, 30, NULL, '0', NULL, 0, 1, 1, 120000, NULL, '2024-08-15 10:06:24', '2024-08-15 10:07:33'),
(102, 'Set 3', 'lo', 5, 10, NULL, '0', NULL, 0, 1, 1, 140000, NULL, '2024-08-15 10:09:01', '2024-08-15 10:10:53'),
(103, 'Set 4', 'l', 5, 8, NULL, '0', NULL, 0, 1, 1, 80000, NULL, '2024-08-15 10:12:25', '2024-08-15 10:13:20'),
(104, 'tab 1', 'l', 7, 5, NULL, '0', NULL, 0, 1, 1, 12000, NULL, '2024-08-15 10:16:02', '2024-08-15 10:17:22'),
(105, 'tab 2', 'l', 7, 12, NULL, '0', NULL, 0, 1, 1, 120000, NULL, '2024-08-15 10:18:44', '2024-08-15 10:19:48'),
(106, 'Luxi', 'l', 1, 60, NULL, '0', NULL, 0, 1, 1, 50000, NULL, '2024-08-15 10:24:03', '2024-08-15 10:25:32'),
(107, 'K2', 'l', 1, 12, NULL, '0', NULL, 0, 1, 1, 17000, NULL, '2024-08-15 10:26:28', '2024-08-15 10:27:48'),
(108, 'k3', 'l', 1, 23, NULL, '0', NULL, 0, 1, 1, 63000, NULL, '2024-08-15 10:29:36', '2024-08-15 10:32:13'),
(109, 'oval mirror golden', 'lo', 16, 56, NULL, '56', NULL, 4, 1, 1, 8000, NULL, '2024-08-15 12:33:01', '2024-08-15 12:33:28'),
(110, 'black oval mirror', 'l', 16, 100, NULL, '800', NULL, 90, 1, 1, 8000, NULL, '2024-08-15 12:34:25', '2024-08-15 12:34:47'),
(111, 'white oval mirror', 'lo', 16, 50, NULL, '100', NULL, 55, 1, 1, 8000, NULL, '2024-08-15 12:35:41', '2024-08-15 12:35:58'),
(112, 'Bed 1', 'l', 17, 45, NULL, '45', NULL, 55, 1, 1, 45000, NULL, '2024-08-15 12:39:56', '2024-08-15 12:40:46'),
(113, 'bed 2', 'l', 17, 45, NULL, '150', NULL, 5, 1, 1, 45000, NULL, '2024-08-15 12:41:37', '2024-08-15 12:42:44'),
(114, 'bed 3', 'lo', 17, 50, NULL, '45', NULL, 60, 1, 1, 50000, NULL, '2024-08-15 12:51:50', '2024-08-15 12:54:09'),
(115, 'bed 4', 'lo', 17, 45, NULL, '500', NULL, 60, 1, 1, 55000, NULL, '2024-08-15 12:55:22', '2024-08-15 12:55:55'),
(116, 'bed 5', 'lo', 17, 40, NULL, '600', NULL, 50, 1, 1, 43000, NULL, '2024-08-15 12:56:48', '2024-08-15 12:58:09'),
(117, 'Tod1', 'lo', 18, 80, NULL, '45', NULL, 50, 1, 1, 60000, NULL, '2024-08-15 13:00:53', '2024-08-15 13:02:01'),
(118, 'Tod2', 'lo', 18, 60, NULL, '45', NULL, 20, 1, 1, 70000, NULL, '2024-08-15 13:02:56', '2024-08-15 13:03:28'),
(119, 'Tod3', 'lo', 18, 70, NULL, '60', NULL, 40, 1, 1, 40000, NULL, '2024-08-15 13:04:11', '2024-08-15 13:04:48'),
(120, 'St1', 'lo', 19, 30, NULL, '150', NULL, 20, 1, 1, 1200, NULL, '2024-08-15 13:16:20', '2024-08-15 13:17:25'),
(121, 'st2', 'lo', 19, 13, NULL, '50', NULL, 80, 1, 1, 12000, NULL, '2024-08-15 13:18:39', '2024-08-15 13:21:04'),
(122, 'st3', 'lo', 19, 50, NULL, '70', NULL, 60, 1, 1, 20000, NULL, '2024-08-15 13:22:39', '2024-08-15 13:24:33'),
(123, 'w1', 'lo', 15, 6, NULL, '0', NULL, 80, 1, 1, 20000, NULL, '2024-08-16 08:57:38', '2024-08-16 08:59:26'),
(124, 'w2', 'lo', 15, 45, NULL, '50', NULL, 60, 1, 1, 25000, NULL, '2024-08-16 09:00:25', '2024-08-16 09:00:44'),
(125, 'w3', 'l', 15, 4, NULL, '0', NULL, 50, 1, 1, 40000, NULL, '2024-08-16 09:01:41', '2024-08-16 09:02:59'),
(126, 'w6', 'l', 15, 8, NULL, '0', NULL, 30, 1, 1, 15000, NULL, '2024-08-16 09:04:11', '2024-08-16 09:10:27'),
(127, 'w5', 'l', 15, 50, NULL, '0', NULL, 0, 1, 1, 20000, NULL, '2024-08-16 09:05:45', '2024-08-16 09:06:10'),
(128, 'w7', 'lo', 15, 60, NULL, '0', NULL, 2, 1, 1, 16000, NULL, '2024-08-16 09:11:51', '2024-08-16 09:12:40'),
(129, 'w8', 'lo', 15, 6, NULL, '0', NULL, 12, 1, 1, 18000, NULL, '2024-08-16 09:14:46', '2024-08-16 09:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_url`, `created_at`, `updated_at`) VALUES
(3, 1, 'assets/web/images/product/1716809578_logo.png', '2024-05-27 06:32:58', '2024-05-27 06:32:58'),
(4, 1, 'assets/web/images/product/1716933058_2 (3).png', '2024-05-28 16:50:58', '2024-05-28 16:50:58'),
(5, 1, 'assets/web/images/product/1716935023_4.jpg', '2024-05-28 17:23:43', '2024-05-28 17:23:43'),
(14, 59, 'assets/web/images/product/1723025129_sofa.jfif', '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(15, 60, 'assets/web/images/product/1723554599_p4.png', '2024-08-13 08:09:59', '2024-08-13 08:09:59'),
(16, 1, 'assets/web/images/product/1723554826_p5.png', '2024-08-13 08:13:46', '2024-08-13 08:13:46'),
(17, 2, 'assets/web/images/product/1723554979_Screenshot 2024-05-29 103529.png', '2024-08-13 08:16:19', '2024-08-13 08:16:19'),
(18, 3, 'assets/web/images/product/1723555310_WhatsApp Image 2024-08-13 at 6.07.19 AM.jpeg', '2024-08-13 08:21:50', '2024-08-13 08:21:50'),
(19, 4, 'assets/web/images/product/1723555914_WhatsApp Image 2024-08-13 at 6.07.29 AM.jpeg', '2024-08-13 08:31:55', '2024-08-13 08:31:55'),
(20, 5, 'assets/web/images/product/1723556943_WhatsApp Image 2024-08-13 at 3.36.18 AM.jpeg', '2024-08-13 08:49:03', '2024-08-13 08:49:03'),
(21, 6, 'assets/web/images/product/1723557234_WhatsApp Image 2024-08-13 at 3.49.00 AM.jpeg', '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(22, 9, 'assets/web/images/product/1723557556_WhatsApp Image 2024-08-13 at 3.53.53 AM (1).jpeg', '2024-08-13 08:59:16', '2024-08-13 08:59:16'),
(23, 8, 'assets/web/images/product/1723558625_WhatsApp Image 2024-08-13 at 6.07.13 AM.jpeg', '2024-08-13 09:17:05', '2024-08-13 09:17:05'),
(24, 10, 'assets/web/images/product/1723558817_WhatsApp Image 2024-08-13 at 6.07.17 AM.jpeg', '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(25, 13, 'assets/web/images/product/1723559146_WhatsApp Image 2024-08-13 at 6.07.26 AM.jpeg', '2024-08-13 09:25:46', '2024-08-13 09:25:46'),
(26, 14, 'assets/web/images/product/1723560028_WhatsApp Image 2024-08-13 at 6.07.27 AM (1).jpeg', '2024-08-13 09:40:28', '2024-08-13 09:40:28'),
(27, 7, 'assets/web/images/product/1723560599_WhatsApp Image 2024-08-13 at 2.54.32 AM.jpeg', '2024-08-13 09:49:59', '2024-08-13 09:49:59'),
(28, 11, 'assets/web/images/product/1723560802_WhatsApp Image 2024-08-13 at 2.58.25 AM.jpeg', '2024-08-13 09:53:22', '2024-08-13 09:53:22'),
(29, 12, 'assets/web/images/product/1723560994_WhatsApp Image 2024-08-13 at 3.04.19 AM.jpeg', '2024-08-13 09:56:34', '2024-08-13 09:56:34'),
(30, 15, 'assets/web/images/product/1723561790_WhatsApp Image 2024-08-13 at 3.08.36 AM.jpeg', '2024-08-13 10:09:50', '2024-08-13 10:09:50'),
(31, 16, 'assets/web/images/product/1723562662_WhatsApp Image 2024-08-13 at 3.37.14 AM.jpeg', '2024-08-13 10:24:22', '2024-08-13 10:24:22'),
(32, 17, 'assets/web/images/product/1723645738_WhatsApp Image 2024-08-14 at 4.52.37 PM.jpeg', '2024-08-14 09:28:58', '2024-08-14 09:28:58'),
(33, 18, 'assets/web/images/product/1723645869_WhatsApp Image 2024-08-14 at 4.52.34 PM.jpeg', '2024-08-14 09:31:09', '2024-08-14 09:31:09'),
(34, 19, 'assets/web/images/product/1723646071_WhatsApp Image 2024-08-14 at 4.52.28 PM.jpeg', '2024-08-14 09:34:31', '2024-08-14 09:34:31'),
(35, 20, 'assets/web/images/product/1723646168_WhatsApp Image 2024-08-14 at 4.52.30 PM.jpeg', '2024-08-14 09:36:08', '2024-08-14 09:36:08'),
(36, 28, 'assets/web/images/product/1723647083_WhatsApp Image 2024-08-14 at 4.52.13 PM.jpeg', '2024-08-14 09:51:23', '2024-08-14 09:51:23'),
(37, 29, 'assets/web/images/product/1723647428_WhatsApp Image 2024-08-14 at 4.52.18 PM.jpeg', '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(38, 21, 'assets/web/images/product/1723647692_WhatsApp Image 2024-08-14 at 4.52.23 PM.jpeg', '2024-08-14 10:01:32', '2024-08-14 10:01:32'),
(39, 2, 'assets/web/images/product/1723649577_WhatsApp Image 2024-08-14 at 4.44.05 PM.jpeg', '2024-08-14 10:32:57', '2024-08-14 10:32:57'),
(40, 19, 'assets/web/images/product/1723649839_WhatsApp Image 2024-08-14 at 4.52.28 PM (1).jpeg', '2024-08-14 10:37:19', '2024-08-14 10:37:19'),
(41, 61, 'assets/web/images/product/1723650234_WhatsApp Image 2024-08-14 at 4.52.25 PM (1).jpeg', '2024-08-14 10:43:54', '2024-08-14 10:43:54'),
(42, 61, 'assets/web/images/product/1723650257_WhatsApp Image 2024-08-14 at 4.52.24 PM (3).jpeg', '2024-08-14 10:44:17', '2024-08-14 10:44:17'),
(43, 61, 'assets/web/images/product/1723650284_WhatsApp Image 2024-08-14 at 4.52.24 PM (1).jpeg', '2024-08-14 10:44:44', '2024-08-14 10:44:44'),
(44, 18, 'assets/web/images/product/1723653077_WhatsApp Image 2024-08-14 at 4.52.33 PM (2).jpeg', '2024-08-14 11:31:17', '2024-08-14 11:31:17'),
(45, 18, 'assets/web/images/product/1723653125_WhatsApp Image 2024-08-14 at 4.52.33 PM (1).jpeg', '2024-08-14 11:32:05', '2024-08-14 11:32:05'),
(46, 62, 'assets/web/images/product/1723653281_WhatsApp Image 2024-08-14 at 4.52.22 PM (2).jpeg', '2024-08-14 11:34:41', '2024-08-14 11:34:41'),
(47, 62, 'assets/web/images/product/1723653296_WhatsApp Image 2024-08-14 at 4.52.21 PM (5).jpeg', '2024-08-14 11:34:56', '2024-08-14 11:34:56'),
(48, 62, 'assets/web/images/product/1723653321_WhatsApp Image 2024-08-14 at 4.52.21 PM (4).jpeg', '2024-08-14 11:35:21', '2024-08-14 11:35:21'),
(49, 63, 'assets/web/images/product/1723653467_WhatsApp Image 2024-08-14 at 4.52.20 PM (3).jpeg', '2024-08-14 11:37:47', '2024-08-14 11:37:47'),
(50, 63, 'assets/web/images/product/1723653482_WhatsApp Image 2024-08-14 at 4.52.20 PM (1).jpeg', '2024-08-14 11:38:02', '2024-08-14 11:38:02'),
(51, 63, 'assets/web/images/product/1723653505_WhatsApp Image 2024-08-14 at 4.52.19 PM (1).jpeg', '2024-08-14 11:38:25', '2024-08-14 11:38:25'),
(52, 64, 'assets/web/images/product/1723653717_WhatsApp Image 2024-08-14 at 4.52.04 PM.jpeg', '2024-08-14 11:41:57', '2024-08-14 11:41:57'),
(53, 64, 'assets/web/images/product/1723653735_WhatsApp Image 2024-08-14 at 4.51.53 PM.jpeg', '2024-08-14 11:42:15', '2024-08-14 11:42:15'),
(54, 64, 'assets/web/images/product/1723653785_WhatsApp Image 2024-08-14 at 4.51.55 PM.jpeg', '2024-08-14 11:43:05', '2024-08-14 11:43:05'),
(55, 65, 'assets/web/images/product/1723653889_WhatsApp Image 2024-08-14 at 4.44.04 PM.jpeg', '2024-08-14 11:44:49', '2024-08-14 11:44:49'),
(56, 65, 'assets/web/images/product/1723653907_WhatsApp Image 2024-08-14 at 4.44.05 PM (3).jpeg', '2024-08-14 11:45:07', '2024-08-14 11:45:07'),
(57, 65, 'assets/web/images/product/1723653930_WhatsApp Image 2024-08-14 at 4.44.06 PM.jpeg', '2024-08-14 11:45:30', '2024-08-14 11:45:30'),
(58, 65, 'assets/web/images/product/1723654023_WhatsApp Image 2024-08-14 at 4.44.07 PM.jpeg', '2024-08-14 11:47:03', '2024-08-14 11:47:03'),
(59, 66, 'assets/web/images/product/1723654187_WhatsApp Image 2024-08-14 at 4.43.46 PM.jpeg', '2024-08-14 11:49:47', '2024-08-14 11:49:47'),
(60, 66, 'assets/web/images/product/1723654199_WhatsApp Image 2024-08-14 at 4.43.46 PM (2).jpeg', '2024-08-14 11:49:59', '2024-08-14 11:49:59'),
(61, 66, 'assets/web/images/product/1723654219_WhatsApp Image 2024-08-14 at 4.43.46 PM (1).jpeg', '2024-08-14 11:50:19', '2024-08-14 11:50:19'),
(62, 67, 'assets/web/images/product/1723654619_WhatsApp Image 2024-08-14 at 4.43.48 PM.jpeg', '2024-08-14 11:56:59', '2024-08-14 11:56:59'),
(63, 67, 'assets/web/images/product/1723654728_WhatsApp Image 2024-08-14 at 4.43.47 PM (4).jpeg', '2024-08-14 11:58:48', '2024-08-14 11:58:48'),
(64, 67, 'assets/web/images/product/1723654754_WhatsApp Image 2024-08-14 at 4.43.47 PM (3).jpeg', '2024-08-14 11:59:14', '2024-08-14 11:59:14'),
(65, 68, 'assets/web/images/product/1723655094_WhatsApp Image 2024-08-14 at 4.43.30 PM.jpeg', '2024-08-14 12:04:54', '2024-08-14 12:04:54'),
(66, 68, 'assets/web/images/product/1723655107_WhatsApp Image 2024-08-14 at 4.43.31 PM (1).jpeg', '2024-08-14 12:05:07', '2024-08-14 12:05:07'),
(67, 68, 'assets/web/images/product/1723655128_WhatsApp Image 2024-08-14 at 4.43.31 PM.jpeg', '2024-08-14 12:05:28', '2024-08-14 12:05:28'),
(68, 69, 'assets/web/images/product/1723655179_WhatsApp Image 2024-08-14 at 4.43.38 PM.jpeg', '2024-08-14 12:06:19', '2024-08-14 12:06:19'),
(69, 69, 'assets/web/images/product/1723655211_WhatsApp Image 2024-08-14 at 4.43.38 PM (1).jpeg', '2024-08-14 12:06:51', '2024-08-14 12:06:51'),
(70, 70, 'assets/web/images/product/1723655425_WhatsApp Image 2024-08-14 at 2.58.34 PM.jpeg', '2024-08-14 12:10:25', '2024-08-14 12:10:25'),
(71, 70, 'assets/web/images/product/1723655436_WhatsApp Image 2024-08-14 at 2.58.35 PM.jpeg', '2024-08-14 12:10:36', '2024-08-14 12:10:36'),
(72, 70, 'assets/web/images/product/1723655457_WhatsApp Image 2024-08-14 at 2.58.35 PM (1).jpeg', '2024-08-14 12:10:57', '2024-08-14 12:10:57'),
(73, 34, 'assets/web/images/product/1723655864_WhatsApp Image 2024-08-14 at 2.58.02 PM.jpeg', '2024-08-14 12:17:44', '2024-08-14 12:17:44'),
(74, 34, 'assets/web/images/product/1723655905_WhatsApp Image 2024-08-14 at 2.58.03 PM (1).jpeg', '2024-08-14 12:18:25', '2024-08-14 12:18:25'),
(75, 34, 'assets/web/images/product/1723655973_WhatsApp Image 2024-08-14 at 2.58.03 PM (1).jpeg', '2024-08-14 12:19:33', '2024-08-14 12:19:33'),
(76, 34, 'assets/web/images/product/1723656045_WhatsApp Image 2024-08-14 at 2.58.03 PM.jpeg', '2024-08-14 12:20:45', '2024-08-14 12:20:45'),
(77, 3, 'assets/web/images/product/1723656387_WhatsApp Image 2024-08-13 at 6.07.30 AM.jpeg', '2024-08-14 12:26:27', '2024-08-14 12:26:27'),
(78, 71, 'assets/web/images/product/1723657661_WhatsApp Image 2024-08-13 at 6.07.09 AM.jpeg', '2024-08-14 12:47:41', '2024-08-14 12:47:41'),
(79, 71, 'assets/web/images/product/1723657745_WhatsApp Image 2024-08-13 at 6.07.08 AM (1).jpeg', '2024-08-14 12:49:05', '2024-08-14 12:49:05'),
(80, 71, 'assets/web/images/product/1723657777_WhatsApp Image 2024-08-13 at 6.07.08 AM.jpeg', '2024-08-14 12:49:37', '2024-08-14 12:49:37'),
(81, 72, 'assets/web/images/product/1723658220_WhatsApp Image 2024-08-13 at 6.07.01 AM (4).jpeg', '2024-08-14 12:57:00', '2024-08-14 12:57:00'),
(82, 72, 'assets/web/images/product/1723658378_WhatsApp Image 2024-08-13 at 6.07.01 AM (3).jpeg', '2024-08-14 12:59:38', '2024-08-14 12:59:38'),
(83, 73, 'assets/web/images/product/1723726079_r3.2.jpg', '2024-08-15 07:47:59', '2024-08-15 07:47:59'),
(84, 73, 'assets/web/images/product/1723726094_r3.3.jpg', '2024-08-15 07:48:14', '2024-08-15 07:48:14'),
(85, 74, 'assets/web/images/product/1723726155_r5.jpg', '2024-08-15 07:49:15', '2024-08-15 07:49:15'),
(86, 74, 'assets/web/images/product/1723726196_r5.1.jpg', '2024-08-15 07:49:56', '2024-08-15 07:49:56'),
(87, 75, 'assets/web/images/product/1723726588_r14.jpg', '2024-08-15 07:56:28', '2024-08-15 07:56:28'),
(88, 75, 'assets/web/images/product/1723726605_r14.1.jpg', '2024-08-15 07:56:45', '2024-08-15 07:56:45'),
(89, 76, 'assets/web/images/product/1723726833_r6.jpg', '2024-08-15 08:00:33', '2024-08-15 08:00:33'),
(90, 76, 'assets/web/images/product/1723726848_r6.1.jpg', '2024-08-15 08:00:48', '2024-08-15 08:00:48'),
(91, 77, 'assets/web/images/product/1723727074_r4.jpg', '2024-08-15 08:04:34', '2024-08-15 08:04:34'),
(92, 77, 'assets/web/images/product/1723727160_r4.4.jpg', '2024-08-15 08:06:00', '2024-08-15 08:06:00'),
(93, 78, 'assets/web/images/product/1723727330_3.jpg', '2024-08-15 08:08:50', '2024-08-15 08:08:50'),
(94, 78, 'assets/web/images/product/1723727354_3.2.jpg', '2024-08-15 08:09:14', '2024-08-15 08:09:14'),
(95, 79, 'assets/web/images/product/1723727573_5.jpg', '2024-08-15 08:12:53', '2024-08-15 08:12:53'),
(96, 79, 'assets/web/images/product/1723727587_5.1.jpg', '2024-08-15 08:13:07', '2024-08-15 08:13:07'),
(97, 80, 'assets/web/images/product/1723727750_2.jpg', '2024-08-15 08:15:50', '2024-08-15 08:15:50'),
(98, 80, 'assets/web/images/product/1723727760_2.1.jpg', '2024-08-15 08:16:00', '2024-08-15 08:16:00'),
(99, 81, 'assets/web/images/product/1723728704_WhatsApp Image 2024-08-15 at 6.17.59 PM.jpeg', '2024-08-15 08:31:44', '2024-08-15 08:31:44'),
(100, 81, 'assets/web/images/product/1723728740_WhatsApp Image 2024-08-15 at 6.17.59 PM (1).jpeg', '2024-08-15 08:32:20', '2024-08-15 08:32:20'),
(101, 81, 'assets/web/images/product/1723728763_WhatsApp Image 2024-08-15 at 6.18.00 PM (1).jpeg', '2024-08-15 08:32:43', '2024-08-15 08:32:43'),
(102, 81, 'assets/web/images/product/1723728791_WhatsApp Image 2024-08-15 at 6.18.00 PM.jpeg', '2024-08-15 08:33:11', '2024-08-15 08:33:11'),
(103, 82, 'assets/web/images/product/1723729315_WhatsApp Image 2024-08-15 at 6.19.43 PM.jpeg', '2024-08-15 08:41:55', '2024-08-15 08:41:55'),
(104, 83, 'assets/web/images/product/1723729519_WhatsApp Image 2024-08-15 at 6.30.40 PM.jpeg', '2024-08-15 08:45:19', '2024-08-15 08:45:19'),
(105, 83, 'assets/web/images/product/1723729554_WhatsApp Image 2024-08-15 at 6.30.40 PM (2).jpeg', '2024-08-15 08:45:54', '2024-08-15 08:45:54'),
(106, 84, 'assets/web/images/product/1723729666_WhatsApp Image 2024-08-15 at 6.20.11 PM.jpeg', '2024-08-15 08:47:46', '2024-08-15 08:47:46'),
(107, 85, 'assets/web/images/product/1723729890_WhatsApp Image 2024-08-15 at 6.20.12 PM.jpeg', '2024-08-15 08:51:30', '2024-08-15 08:51:30'),
(108, 86, 'assets/web/images/product/1723730576_WhatsApp Image 2024-08-15 at 6.35.55 PM.jpeg', '2024-08-15 09:02:56', '2024-08-15 09:02:56'),
(109, 87, 'assets/web/images/product/1723730918_s1.jpg', '2024-08-15 09:08:38', '2024-08-15 09:08:38'),
(110, 87, 'assets/web/images/product/1723730989_s2.jpg', '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(111, 88, 'assets/web/images/product/1723731040_s1.jpg', '2024-08-15 09:10:40', '2024-08-15 09:10:40'),
(112, 88, 'assets/web/images/product/1723731156_s2.jpg', '2024-08-15 09:12:36', '2024-08-15 09:12:36'),
(113, 89, 'assets/web/images/product/1723731207_s1.jpg', '2024-08-15 09:13:27', '2024-08-15 09:13:27'),
(114, 90, 'assets/web/images/product/1723731354_s1.jpg', '2024-08-15 09:15:54', '2024-08-15 09:15:54'),
(115, 90, 'assets/web/images/product/1723731409_s3.jpg', '2024-08-15 09:16:49', '2024-08-15 09:16:49'),
(116, 91, 'assets/web/images/product/1723731481_s1.jpg', '2024-08-15 09:18:01', '2024-08-15 09:18:01'),
(117, 91, 'assets/web/images/product/1723731544_s2.jpg', '2024-08-15 09:19:04', '2024-08-15 09:19:04'),
(118, 92, 'assets/web/images/product/1723731590_s1.jpg', '2024-08-15 09:19:50', '2024-08-15 09:19:50'),
(119, 92, 'assets/web/images/product/1723731651_s2.jpg', '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(120, 93, 'assets/web/images/product/1723733252_WhatsApp Image 2024-08-15 at 7.13.38 PM.jpeg', '2024-08-15 09:47:32', '2024-08-15 09:47:32'),
(121, 93, 'assets/web/images/product/1723733296_WhatsApp Image 2024-08-15 at 7.13.39 PM.jpeg', '2024-08-15 09:48:16', '2024-08-15 09:48:16'),
(122, 94, 'assets/web/images/product/1723733344_WhatsApp Image 2024-08-15 at 7.13.45 PM.jpeg', '2024-08-15 09:49:04', '2024-08-15 09:49:04'),
(123, 94, 'assets/web/images/product/1723733361_WhatsApp Image 2024-08-15 at 7.13.46 PM.jpeg', '2024-08-15 09:49:21', '2024-08-15 09:49:21'),
(124, 94, 'assets/web/images/product/1723733384_WhatsApp Image 2024-08-15 at 7.13.46 PM (1).jpeg', '2024-08-15 09:49:44', '2024-08-15 09:49:44'),
(125, 95, 'assets/web/images/product/1723733425_WhatsApp Image 2024-08-15 at 7.13.47 PM.jpeg', '2024-08-15 09:50:25', '2024-08-15 09:50:25'),
(126, 95, 'assets/web/images/product/1723733438_WhatsApp Image 2024-08-15 at 7.13.48 PM.jpeg', '2024-08-15 09:50:38', '2024-08-15 09:50:38'),
(127, 95, 'assets/web/images/product/1723733457_WhatsApp Image 2024-08-15 at 7.13.48 PM (1).jpeg', '2024-08-15 09:50:57', '2024-08-15 09:50:57'),
(128, 96, 'assets/web/images/product/1723733509_WhatsApp Image 2024-08-15 at 7.13.36 PM.jpeg', '2024-08-15 09:51:49', '2024-08-15 09:51:49'),
(129, 96, 'assets/web/images/product/1723733527_WhatsApp Image 2024-08-15 at 7.13.37 PM.jpeg', '2024-08-15 09:52:07', '2024-08-15 09:52:07'),
(130, 97, 'assets/web/images/product/1723733628_WhatsApp Image 2024-08-15 at 7.13.31 PM.jpeg', '2024-08-15 09:53:48', '2024-08-15 09:53:48'),
(131, 97, 'assets/web/images/product/1723733650_WhatsApp Image 2024-08-15 at 7.13.29 PM.jpeg', '2024-08-15 09:54:10', '2024-08-15 09:54:10'),
(132, 97, 'assets/web/images/product/1723733681_WhatsApp Image 2024-08-15 at 7.13.33 PM.jpeg', '2024-08-15 09:54:41', '2024-08-15 09:54:41'),
(133, 98, 'assets/web/images/product/1723733766_WhatsApp Image 2024-08-15 at 7.13.34 PM.jpeg', '2024-08-15 09:56:06', '2024-08-15 09:56:06'),
(134, 98, 'assets/web/images/product/1723733799_WhatsApp Image 2024-08-15 at 7.13.34 PM (1).jpeg', '2024-08-15 09:56:39', '2024-08-15 09:56:39'),
(135, 98, 'assets/web/images/product/1723733820_WhatsApp Image 2024-08-15 at 7.13.35 PM (2).jpeg', '2024-08-15 09:57:00', '2024-08-15 09:57:00'),
(136, 99, 'assets/web/images/product/1723733927_WhatsApp Image 2024-08-15 at 7.13.43 PM.jpeg', '2024-08-15 09:58:47', '2024-08-15 09:58:47'),
(137, 99, 'assets/web/images/product/1723733946_WhatsApp Image 2024-08-15 at 7.13.44 PM.jpeg', '2024-08-15 09:59:06', '2024-08-15 09:59:06'),
(138, 99, 'assets/web/images/product/1723733974_WhatsApp Image 2024-08-15 at 7.13.45 PM (1).jpeg', '2024-08-15 09:59:34', '2024-08-15 09:59:34'),
(139, 100, 'assets/web/images/product/1723734199_d51.jpg', '2024-08-15 10:03:19', '2024-08-15 10:03:19'),
(140, 100, 'assets/web/images/product/1723734221_d53.jpg', '2024-08-15 10:03:41', '2024-08-15 10:03:41'),
(141, 100, 'assets/web/images/product/1723734313_d52.jpg', '2024-08-15 10:05:13', '2024-08-15 10:05:13'),
(142, 101, 'assets/web/images/product/1723734384_d21.jpg', '2024-08-15 10:06:24', '2024-08-15 10:06:24'),
(143, 101, 'assets/web/images/product/1723734405_d25.jpg', '2024-08-15 10:06:45', '2024-08-15 10:06:45'),
(144, 101, 'assets/web/images/product/1723734453_d24.jpg', '2024-08-15 10:07:33', '2024-08-15 10:07:33'),
(145, 102, 'assets/web/images/product/1723734541_d6.jpg', '2024-08-15 10:09:01', '2024-08-15 10:09:01'),
(146, 102, 'assets/web/images/product/1723734569_d7.jpg', '2024-08-15 10:09:29', '2024-08-15 10:09:29'),
(147, 102, 'assets/web/images/product/1723734602_d63.jpg', '2024-08-15 10:10:02', '2024-08-15 10:10:02'),
(148, 102, 'assets/web/images/product/1723734653_d72.jpg', '2024-08-15 10:10:53', '2024-08-15 10:10:53'),
(149, 103, 'assets/web/images/product/1723734745_d31.jpg', '2024-08-15 10:12:25', '2024-08-15 10:12:25'),
(150, 103, 'assets/web/images/product/1723734770_d32.jpg', '2024-08-15 10:12:50', '2024-08-15 10:12:50'),
(151, 103, 'assets/web/images/product/1723734800_d34.jpg', '2024-08-15 10:13:20', '2024-08-15 10:13:20'),
(152, 104, 'assets/web/images/product/1723734962_d1.jpg', '2024-08-15 10:16:02', '2024-08-15 10:16:02'),
(153, 104, 'assets/web/images/product/1723734988_d12.jpg', '2024-08-15 10:16:28', '2024-08-15 10:16:28'),
(154, 104, 'assets/web/images/product/1723735042_d11.jpg', '2024-08-15 10:17:22', '2024-08-15 10:17:22'),
(155, 105, 'assets/web/images/product/1723735124_d32.jpg', '2024-08-15 10:18:44', '2024-08-15 10:18:44'),
(156, 106, 'assets/web/images/product/1723735443_8.1.jpg', '2024-08-15 10:24:03', '2024-08-15 10:24:03'),
(157, 106, 'assets/web/images/product/1723735462_8.2.jpg', '2024-08-15 10:24:22', '2024-08-15 10:24:22'),
(158, 106, 'assets/web/images/product/1723735498_8.3.jpg', '2024-08-15 10:24:58', '2024-08-15 10:24:58'),
(159, 106, 'assets/web/images/product/1723735532_8.5.jpg', '2024-08-15 10:25:32', '2024-08-15 10:25:32'),
(160, 107, 'assets/web/images/product/1723735588_3.jpg', '2024-08-15 10:26:28', '2024-08-15 10:26:28'),
(161, 107, 'assets/web/images/product/1723735642_3.3.jpg', '2024-08-15 10:27:22', '2024-08-15 10:27:22'),
(162, 107, 'assets/web/images/product/1723735668_3.1.jpg', '2024-08-15 10:27:48', '2024-08-15 10:27:48'),
(163, 108, 'assets/web/images/product/1723735776_13.jpg', '2024-08-15 10:29:36', '2024-08-15 10:29:36'),
(164, 108, 'assets/web/images/product/1723735799_13.1.jpg', '2024-08-15 10:29:59', '2024-08-15 10:29:59'),
(165, 108, 'assets/web/images/product/1723735833_13.3.jpg', '2024-08-15 10:30:33', '2024-08-15 10:30:33'),
(166, 108, 'assets/web/images/product/1723735892_13.4.jpg', '2024-08-15 10:31:32', '2024-08-15 10:31:32'),
(167, 108, 'assets/web/images/product/1723735933_13.2.jpg', '2024-08-15 10:32:13', '2024-08-15 10:32:13'),
(168, 109, 'assets/web/images/product/1723743181_WhatsApp Image 2024-08-15 at 10.28.02 PM.jpeg', '2024-08-15 12:33:01', '2024-08-15 12:33:01'),
(169, 109, 'assets/web/images/product/1723743208_WhatsApp Image 2024-08-15 at 10.27.58 PM (2).jpeg', '2024-08-15 12:33:28', '2024-08-15 12:33:28'),
(170, 110, 'assets/web/images/product/1723743266_WhatsApp Image 2024-08-15 at 10.27.58 PM (1).jpeg', '2024-08-15 12:34:26', '2024-08-15 12:34:26'),
(171, 110, 'assets/web/images/product/1723743287_WhatsApp Image 2024-08-15 at 10.27.57 PM.jpeg', '2024-08-15 12:34:47', '2024-08-15 12:34:47'),
(172, 111, 'assets/web/images/product/1723743341_WhatsApp Image 2024-08-15 at 10.27.58 PM.jpeg', '2024-08-15 12:35:41', '2024-08-15 12:35:41'),
(173, 111, 'assets/web/images/product/1723743358_WhatsApp Image 2024-08-15 at 10.27.55 PM.jpeg', '2024-08-15 12:35:58', '2024-08-15 12:35:58'),
(174, 112, 'assets/web/images/product/1723743596_23.jpg', '2024-08-15 12:39:56', '2024-08-15 12:39:56'),
(175, 112, 'assets/web/images/product/1723743646_23.3.jpg', '2024-08-15 12:40:46', '2024-08-15 12:40:46'),
(176, 113, 'assets/web/images/product/1723743697_1.jpg', '2024-08-15 12:41:37', '2024-08-15 12:41:37'),
(177, 113, 'assets/web/images/product/1723743711_1.1.jpg', '2024-08-15 12:41:51', '2024-08-15 12:41:51'),
(178, 113, 'assets/web/images/product/1723743739_1.3.jpg', '2024-08-15 12:42:19', '2024-08-15 12:42:19'),
(179, 113, 'assets/web/images/product/1723743764_1..2.jpg', '2024-08-15 12:42:44', '2024-08-15 12:42:44'),
(180, 114, 'assets/web/images/product/1723744310_16.jpg', '2024-08-15 12:51:50', '2024-08-15 12:51:50'),
(181, 114, 'assets/web/images/product/1723744338_16.2.jpg', '2024-08-15 12:52:18', '2024-08-15 12:52:18'),
(182, 115, 'assets/web/images/product/1723744522_18.jpg', '2024-08-15 12:55:22', '2024-08-15 12:55:22'),
(183, 115, 'assets/web/images/product/1723744555_18.1.jpg', '2024-08-15 12:55:55', '2024-08-15 12:55:55'),
(184, 116, 'assets/web/images/product/1723744608_19.jpg', '2024-08-15 12:56:48', '2024-08-15 12:56:48'),
(185, 116, 'assets/web/images/product/1723744689_19.1.jpg', '2024-08-15 12:58:09', '2024-08-15 12:58:09'),
(186, 117, 'assets/web/images/product/1723744853_3.jpg', '2024-08-15 13:00:53', '2024-08-15 13:00:53'),
(187, 118, 'assets/web/images/product/1723744976_2.jpg', '2024-08-15 13:02:56', '2024-08-15 13:02:56'),
(188, 118, 'assets/web/images/product/1723745008_2.1.jpg', '2024-08-15 13:03:28', '2024-08-15 13:03:28'),
(189, 119, 'assets/web/images/product/1723745051_1.jpg', '2024-08-15 13:04:11', '2024-08-15 13:04:11'),
(190, 119, 'assets/web/images/product/1723745067_1.1.jpg', '2024-08-15 13:04:27', '2024-08-15 13:04:27'),
(191, 119, 'assets/web/images/product/1723745088_1.2.jpg', '2024-08-15 13:04:48', '2024-08-15 13:04:48'),
(192, 120, 'assets/web/images/product/1723745780_1.jpg', '2024-08-15 13:16:20', '2024-08-15 13:16:20'),
(193, 120, 'assets/web/images/product/1723745794_1.3.jpg', '2024-08-15 13:16:34', '2024-08-15 13:16:34'),
(194, 121, 'assets/web/images/product/1723745919_4.jpg', '2024-08-15 13:18:39', '2024-08-15 13:18:39'),
(195, 122, 'assets/web/images/product/1723746159_2.jpg', '2024-08-15 13:22:39', '2024-08-15 13:22:39'),
(196, 122, 'assets/web/images/product/1723746273_2.2.jpg', '2024-08-15 13:24:33', '2024-08-15 13:24:33'),
(197, 123, 'assets/web/images/product/1723816659_WhatsApp Image 2024-08-16 at 5.27.05 PM-removebg-preview.jpg', '2024-08-16 08:57:39', '2024-08-16 08:57:39'),
(198, 123, 'assets/web/images/product/1723816694_WhatsApp Image 2024-08-16 at 5.27.04 PM-removebg-preview.jpg', '2024-08-16 08:58:14', '2024-08-16 08:58:14'),
(199, 123, 'assets/web/images/product/1723816736_WhatsApp Image 2024-08-16 at 5.27.05 PM (1).jpeg', '2024-08-16 08:58:56', '2024-08-16 08:58:56'),
(200, 123, 'assets/web/images/product/1723816766_WhatsApp Image 2024-08-16 at 5.27.04 PM (1).jpeg', '2024-08-16 08:59:26', '2024-08-16 08:59:26'),
(201, 124, 'assets/web/images/product/1723816826_WhatsApp Image 2024-08-16 at 5.27.03 PM.jpeg', '2024-08-16 09:00:26', '2024-08-16 09:00:26'),
(202, 124, 'assets/web/images/product/1723816844_WhatsApp Image 2024-08-16 at 5.27.03 PM (1).jpeg', '2024-08-16 09:00:44', '2024-08-16 09:00:44'),
(203, 125, 'assets/web/images/product/1723816901_WhatsApp Image 2024-08-16 at 5.26.45 PM.jpeg', '2024-08-16 09:01:41', '2024-08-16 09:01:41'),
(204, 125, 'assets/web/images/product/1723816919_WhatsApp Image 2024-08-16 at 5.26.44 PM.jpeg', '2024-08-16 09:01:59', '2024-08-16 09:01:59'),
(205, 125, 'assets/web/images/product/1723816961_WhatsApp Image 2024-08-16 at 5.26.46 PM.jpeg', '2024-08-16 09:02:41', '2024-08-16 09:02:41'),
(206, 126, 'assets/web/images/product/1723817051_WhatsApp Image 2024-08-16 at 5.26.38 PM (1).jpeg', '2024-08-16 09:04:11', '2024-08-16 09:04:11'),
(207, 127, 'assets/web/images/product/1723817145_WhatsApp Image 2024-08-16 at 5.26.55 PM (1).jpeg', '2024-08-16 09:05:45', '2024-08-16 09:05:45'),
(208, 126, 'assets/web/images/product/1723817375_WhatsApp Image 2024-08-16 at 5.27.00 PM.jpeg', '2024-08-16 09:09:35', '2024-08-16 09:09:35'),
(209, 126, 'assets/web/images/product/1723817427_WhatsApp Image 2024-08-16 at 5.27.00 PM.jpeg', '2024-08-16 09:10:27', '2024-08-16 09:10:27'),
(210, 128, 'assets/web/images/product/1723817512_WhatsApp Image 2024-08-16 at 5.26.18 PM.jpeg', '2024-08-16 09:11:52', '2024-08-16 09:11:52'),
(211, 129, 'assets/web/images/product/1723817686_WhatsApp Image 2024-08-16 at 5.26.56 PM (1).jpeg', '2024-08-16 09:14:46', '2024-08-16 09:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `color`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 59, 'Blue', 'Blue', 60000, 58000, '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(2, 59, 'Green', 'Green', 55000, 52000, '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(3, 59, 'Pink', 'Pink', 56000, 54000, '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(4, 3, 'White', NULL, 30000, NULL, '2024-08-13 08:21:51', '2024-08-13 08:21:51'),
(5, 3, 'Woody', NULL, 30000, NULL, '2024-08-13 08:21:51', '2024-08-13 08:21:51'),
(6, 3, 'Light woody', NULL, 30000, NULL, '2024-08-13 08:21:51', '2024-08-13 08:21:51'),
(7, 3, 'Classic', NULL, 7999, NULL, '2024-08-13 08:28:33', '2024-08-13 08:28:33'),
(8, 5, 'Laborum', NULL, 60000, NULL, '2024-08-13 08:49:03', '2024-08-13 08:49:03'),
(9, 5, 'Laborum', NULL, 70000, NULL, '2024-08-13 08:49:04', '2024-08-13 08:49:04'),
(10, 5, 'Laborum 3', NULL, 70000, NULL, '2024-08-13 08:49:04', '2024-08-13 08:49:04'),
(11, 6, 'Eveniet 1', NULL, 50000, NULL, '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(12, 6, 'Eveniet 2', NULL, 50000, NULL, '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(13, 6, 'Eveniet 3', NULL, 50000, NULL, '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(14, 9, 'Facilis', NULL, 150000, NULL, '2024-08-13 08:59:16', '2024-08-13 08:59:16'),
(15, 9, 'Facilis', NULL, 150000, NULL, '2024-08-13 08:59:16', '2024-08-13 08:59:16'),
(16, 8, 'Classic', NULL, 17000, NULL, '2024-08-13 09:17:05', '2024-08-13 09:17:05'),
(17, 8, 'Light', NULL, 15000, NULL, '2024-08-13 09:17:05', '2024-08-13 09:17:05'),
(18, 10, 'Classic', NULL, 49000, NULL, '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(19, 10, 'Light', NULL, 45000, NULL, '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(20, 10, 'Grey', NULL, 45000, NULL, '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(21, 13, 'Dolor Grey', NULL, 140000, NULL, '2024-08-13 09:25:47', '2024-08-13 09:25:47'),
(22, 13, 'Dolor Light', NULL, 120000, NULL, '2024-08-13 09:25:47', '2024-08-13 09:25:47'),
(23, 14, 'Light', NULL, 25000, NULL, '2024-08-13 09:40:28', '2024-08-13 09:40:28'),
(24, 14, 'Woody', NULL, 25000, NULL, '2024-08-13 09:40:29', '2024-08-13 09:40:29'),
(25, 7, 'White', NULL, 7000, NULL, '2024-08-13 09:49:59', '2024-08-13 09:49:59'),
(26, 7, 'Sunset', NULL, 8000, NULL, '2024-08-13 09:49:59', '2024-08-13 09:49:59'),
(27, 11, 'Bluey', NULL, 50000, NULL, '2024-08-13 09:53:22', '2024-08-13 09:53:22'),
(28, 11, 'Off White', NULL, 60000, NULL, '2024-08-13 09:53:22', '2024-08-13 09:53:22'),
(29, 12, 'Whitey', NULL, 40000, NULL, '2024-08-13 09:56:34', '2024-08-13 09:56:34'),
(30, 12, 'Mustard', NULL, 60000, NULL, '2024-08-13 09:56:34', '2024-08-13 09:56:34'),
(31, 15, 'Swirly Yellow', NULL, 8900, NULL, '2024-08-13 10:09:51', '2024-08-13 10:09:51'),
(32, 15, 'Swirly Grey', NULL, 8900, NULL, '2024-08-13 10:09:51', '2024-08-13 10:09:51'),
(33, 16, 'Grey', NULL, 50000, NULL, '2024-08-13 10:24:22', '2024-08-13 10:24:22'),
(34, 16, 'The OG', NULL, 60000, NULL, '2024-08-13 10:24:23', '2024-08-13 10:24:23'),
(35, 17, 'Classic', NULL, 9000, NULL, '2024-08-14 09:28:59', '2024-08-14 09:28:59'),
(36, 17, 'Black', NULL, 8000, NULL, '2024-08-14 09:28:59', '2024-08-14 09:28:59'),
(37, 17, 'Light woody', NULL, 7000, NULL, '2024-08-14 09:28:59', '2024-08-14 09:28:59'),
(38, 18, 'Anton Marble', NULL, 679, NULL, '2024-08-14 09:31:09', '2024-08-14 09:31:09'),
(39, 18, 'Anton Marble', NULL, 679, NULL, '2024-08-14 09:31:09', '2024-08-14 09:31:09'),
(40, 19, 'Predestal', NULL, 935, NULL, '2024-08-14 09:34:32', '2024-08-14 09:34:32'),
(41, 20, 'Ordin', NULL, 756, NULL, '2024-08-14 09:36:08', '2024-08-14 09:36:08'),
(42, 20, 'Dark wood', NULL, 600, NULL, '2024-08-14 09:36:08', '2024-08-14 09:36:08'),
(43, 28, 'Black Disk', NULL, 500, NULL, '2024-08-14 09:51:23', '2024-08-14 09:51:23'),
(44, 29, 'Classic', NULL, 800, NULL, '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(45, 29, 'White', NULL, 500, NULL, '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(46, 29, 'Light Woody', NULL, 500, NULL, '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(47, 21, 'Black', NULL, 500, NULL, '2024-08-14 10:01:32', '2024-08-14 10:01:32'),
(48, 65, 'Royal blue', NULL, 700, NULL, '2024-08-14 11:47:03', '2024-08-14 11:47:03'),
(49, 65, 'Royal grey', NULL, 700, NULL, '2024-08-14 11:47:04', '2024-08-14 11:47:04'),
(50, 65, 'Royal brown', NULL, 700, NULL, '2024-08-14 11:47:04', '2024-08-14 11:47:04'),
(51, 67, 'Classic', NULL, 12000, NULL, '2024-08-14 11:58:48', '2024-08-14 11:58:48'),
(52, 69, 'White', NULL, 8000, NULL, '2024-08-14 12:06:51', '2024-08-14 12:06:51'),
(53, 34, 'Pink', NULL, 882, NULL, '2024-08-14 12:17:44', '2024-08-14 12:17:44'),
(54, 34, 'Grass', NULL, 882, NULL, '2024-08-14 12:17:44', '2024-08-14 12:17:44'),
(55, 34, 'Royal', NULL, 882, NULL, '2024-08-14 12:17:44', '2024-08-14 12:17:44'),
(56, 71, 'Black', NULL, 60000, NULL, '2024-08-14 12:48:33', '2024-08-14 12:48:33'),
(57, 71, 'Grey', NULL, 60000, NULL, '2024-08-14 12:48:34', '2024-08-14 12:48:34'),
(58, 72, 'Classic', NULL, 89000, NULL, '2024-08-14 12:59:38', '2024-08-14 12:59:38'),
(59, 74, 'Beige', NULL, 9000, NULL, '2024-08-15 07:49:56', '2024-08-15 07:49:56'),
(60, 77, 'Classic', NULL, 8000, NULL, '2024-08-15 08:06:00', '2024-08-15 08:06:00'),
(61, 77, 'Pink', NULL, 8000, NULL, '2024-08-15 08:06:00', '2024-08-15 08:06:00'),
(62, 78, 'Classic', NULL, 6500, NULL, '2024-08-15 08:09:14', '2024-08-15 08:09:14'),
(63, 82, 'Blue', NULL, 70000, NULL, '2024-08-15 08:42:46', '2024-08-15 08:42:46'),
(64, 82, 'Green', NULL, 70000, NULL, '2024-08-15 08:42:46', '2024-08-15 08:42:46'),
(65, 83, 'Black', NULL, 8000, NULL, '2024-08-15 08:45:54', '2024-08-15 08:45:54'),
(66, 85, 'ehnet dark', NULL, 7000, NULL, '2024-08-15 08:52:52', '2024-08-15 08:52:52'),
(67, 85, 'ehnet classic', NULL, 7000, NULL, '2024-08-15 08:52:52', '2024-08-15 08:52:52'),
(68, 86, 'Laborum', NULL, 7000, NULL, '2024-08-15 09:04:20', '2024-08-15 09:04:20'),
(69, 86, 'Grey', NULL, 7000, NULL, '2024-08-15 09:04:20', '2024-08-15 09:04:20'),
(70, 86, 'Blue', NULL, 7000, NULL, '2024-08-15 09:04:20', '2024-08-15 09:04:20'),
(71, 87, 'Classic', NULL, 30000, NULL, '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(72, 87, 'white', NULL, 30000, NULL, '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(73, 87, 'Grey', NULL, 30000, NULL, '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(74, 88, 'Classic', NULL, 60000, NULL, '2024-08-15 09:12:36', '2024-08-15 09:12:36'),
(75, 88, 'Light', NULL, 50000, NULL, '2024-08-15 09:12:36', '2024-08-15 09:12:36'),
(76, 89, 'Royal', NULL, 450000, NULL, '2024-08-15 09:15:08', '2024-08-15 09:15:08'),
(77, 89, 'Black', NULL, 480000, NULL, '2024-08-15 09:15:08', '2024-08-15 09:15:08'),
(78, 89, 'Dusty', NULL, 470000, NULL, '2024-08-15 09:15:08', '2024-08-15 09:15:08'),
(79, 90, 'Grey', NULL, 30000, NULL, '2024-08-15 09:16:49', '2024-08-15 09:16:49'),
(80, 90, 'Sandy', NULL, 20000, NULL, '2024-08-15 09:16:49', '2024-08-15 09:16:49'),
(81, 91, 'Mustardy', NULL, 60000, NULL, '2024-08-15 09:19:04', '2024-08-15 09:19:04'),
(82, 91, 'Black', NULL, 60000, NULL, '2024-08-15 09:19:05', '2024-08-15 09:19:05'),
(83, 91, 'Grey', NULL, 60000, NULL, '2024-08-15 09:19:05', '2024-08-15 09:19:05'),
(84, 92, 'Black', NULL, 45000, NULL, '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(85, 92, 'Blue', NULL, 45000, NULL, '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(86, 92, 'Brown', NULL, 45000, NULL, '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(87, 93, 'Classic', NULL, 12000, NULL, '2024-08-15 09:48:16', '2024-08-15 09:48:16'),
(88, 100, 'Table', NULL, 120000, NULL, '2024-08-15 10:05:13', '2024-08-15 10:05:13'),
(89, 100, 'chair', NULL, 120000, NULL, '2024-08-15 10:05:13', '2024-08-15 10:05:13'),
(90, 105, 'Classic', NULL, 120000, NULL, '2024-08-15 10:19:48', '2024-08-15 10:19:48'),
(91, 105, 'Woody', NULL, 10000, NULL, '2024-08-15 10:19:48', '2024-08-15 10:19:48'),
(92, 112, 'black', NULL, 45000, NULL, '2024-08-15 12:40:46', '2024-08-15 12:40:46'),
(93, 114, 'black', NULL, 50000, NULL, '2024-08-15 12:54:09', '2024-08-15 12:54:09'),
(94, 114, 'brown', NULL, 50000, NULL, '2024-08-15 12:54:10', '2024-08-15 12:54:10'),
(95, 114, 'green', NULL, 50000, NULL, '2024-08-15 12:54:10', '2024-08-15 12:54:10'),
(96, 117, 'Green', NULL, 60000, NULL, '2024-08-15 13:02:01', '2024-08-15 13:02:01'),
(97, 117, 'white', NULL, 60000, NULL, '2024-08-15 13:02:01', '2024-08-15 13:02:01'),
(98, 117, 'Woody', NULL, 60000, NULL, '2024-08-15 13:02:01', '2024-08-15 13:02:01'),
(99, 120, 'Black', NULL, 12000, NULL, '2024-08-15 13:17:25', '2024-08-15 13:17:25'),
(100, 121, 'Black', NULL, 12000, NULL, '2024-08-15 13:19:12', '2024-08-15 13:19:12'),
(101, 121, 'Brown', NULL, 12000, NULL, '2024-08-15 13:21:04', '2024-08-15 13:21:04'),
(102, 122, 'Mustardy brown', NULL, 20000, NULL, '2024-08-15 13:24:34', '2024-08-15 13:24:34'),
(103, 122, 'Classic', NULL, 20000, NULL, '2024-08-15 13:24:34', '2024-08-15 13:24:34'),
(104, 126, 'Black', NULL, 15000, NULL, '2024-08-16 09:04:34', '2024-08-16 09:04:34'),
(105, 127, 'Classic', NULL, 20000, NULL, '2024-08-16 09:06:10', '2024-08-16 09:06:10'),
(106, 128, 'Woody', NULL, 16000, NULL, '2024-08-16 09:12:40', '2024-08-16 09:12:40'),
(107, 128, 'Light', NULL, 16000, NULL, '2024-08-16 09:12:40', '2024-08-16 09:12:40'),
(108, 129, 'Black', NULL, 18000, NULL, '2024-08-16 09:15:32', '2024-08-16 09:15:32'),
(109, 129, 'Light', NULL, 18000, NULL, '2024-08-16 09:15:32', '2024-08-16 09:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_variant_images`
--

CREATE TABLE `product_variant_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_variant_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variant_images`
--

INSERT INTO `product_variant_images` (`id`, `product_variant_id`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/web/images/product/1723025129_sofa3.jpg', '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(2, 2, 'assets/web/images/product/1723025129_sofa1.jfif', '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(3, 3, 'assets/web/images/product/1723025129_sofa2.jfif', '2024-08-07 05:05:29', '2024-08-07 05:05:29'),
(4, 4, 'assets/web/images/variant/1723555311_WhatsApp Image 2024-08-13 at 6.07.20 AM.jpeg', '2024-08-13 08:21:51', '2024-08-13 08:21:51'),
(5, 5, 'assets/web/images/variant/1723555311_WhatsApp Image 2024-08-13 at 6.07.19 AM (2).jpeg', '2024-08-13 08:21:51', '2024-08-13 08:21:51'),
(6, 6, 'assets/web/images/variant/1723555311_WhatsApp Image 2024-08-13 at 6.07.20 AM (1).jpeg', '2024-08-13 08:21:51', '2024-08-13 08:21:51'),
(7, 7, 'assets/web/images/variant/1723555713_WhatsApp Image 2024-08-13 at 6.07.19 AM (1).jpeg', '2024-08-13 08:28:33', '2024-08-13 08:28:33'),
(8, 8, 'assets/web/images/variant/1723556943_WhatsApp Image 2024-08-13 at 3.36.19 AM.jpeg', '2024-08-13 08:49:03', '2024-08-13 08:49:03'),
(9, 9, 'assets/web/images/variant/1723556944_WhatsApp Image 2024-08-13 at 3.36.18 AM (1).jpeg', '2024-08-13 08:49:04', '2024-08-13 08:49:04'),
(10, 10, 'assets/web/images/variant/1723556944_WhatsApp Image 2024-08-13 at 3.36.21 AM (1).jpeg', '2024-08-13 08:49:04', '2024-08-13 08:49:04'),
(11, 11, 'assets/web/images/variant/1723557234_WhatsApp Image 2024-08-13 at 3.49.02 AM (1).jpeg', '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(12, 12, 'assets/web/images/variant/1723557234_WhatsApp Image 2024-08-13 at 3.49.03 AM.jpeg', '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(13, 13, 'assets/web/images/variant/1723557234_WhatsApp Image 2024-08-13 at 3.49.02 AM.jpeg', '2024-08-13 08:53:54', '2024-08-13 08:53:54'),
(14, 14, 'assets/web/images/variant/1723557556_WhatsApp Image 2024-08-13 at 3.53.56 AM.jpeg', '2024-08-13 08:59:16', '2024-08-13 08:59:16'),
(15, 15, 'assets/web/images/variant/1723557557_WhatsApp Image 2024-08-13 at 3.53.57 AM (2).jpeg', '2024-08-13 08:59:17', '2024-08-13 08:59:17'),
(16, 16, 'assets/web/images/variant/1723558625_WhatsApp Image 2024-08-13 at 6.07.14 AM.jpeg', '2024-08-13 09:17:05', '2024-08-13 09:17:05'),
(17, 17, 'assets/web/images/variant/1723558625_WhatsApp Image 2024-08-13 at 6.07.15 AM.jpeg', '2024-08-13 09:17:05', '2024-08-13 09:17:05'),
(18, 18, 'assets/web/images/variant/1723558817_WhatsApp Image 2024-08-13 at 6.07.17 AM (1).jpeg', '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(19, 19, 'assets/web/images/variant/1723558817_WhatsApp Image 2024-08-13 at 6.07.18 AM (1).jpeg', '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(20, 20, 'assets/web/images/variant/1723558817_WhatsApp Image 2024-08-13 at 6.07.18 AM (1).jpeg', '2024-08-13 09:20:17', '2024-08-13 09:20:17'),
(21, 21, 'assets/web/images/variant/1723559147_WhatsApp Image 2024-08-13 at 6.07.21 AM.jpeg', '2024-08-13 09:25:47', '2024-08-13 09:25:47'),
(22, 22, 'assets/web/images/variant/1723559147_WhatsApp Image 2024-08-13 at 6.07.21 AM (1).jpeg', '2024-08-13 09:25:47', '2024-08-13 09:25:47'),
(23, 23, 'assets/web/images/variant/1723560028_WhatsApp Image 2024-08-13 at 6.07.27 AM (2).jpeg', '2024-08-13 09:40:28', '2024-08-13 09:40:28'),
(24, 24, 'assets/web/images/variant/1723560029_WhatsApp Image 2024-08-13 at 6.07.28 AM.jpeg', '2024-08-13 09:40:29', '2024-08-13 09:40:29'),
(25, 25, 'assets/web/images/variant/1723560599_WhatsApp Image 2024-08-13 at 2.54.32 AM (1).jpeg', '2024-08-13 09:49:59', '2024-08-13 09:49:59'),
(26, 26, 'assets/web/images/variant/1723560599_WhatsApp Image 2024-08-13 at 2.54.33 AM.jpeg', '2024-08-13 09:49:59', '2024-08-13 09:49:59'),
(27, 27, 'assets/web/images/variant/1723560802_WhatsApp Image 2024-08-13 at 2.58.25 AM (1).jpeg', '2024-08-13 09:53:22', '2024-08-13 09:53:22'),
(28, 28, 'assets/web/images/variant/1723560803_WhatsApp Image 2024-08-13 at 2.58.25 AM (2).jpeg', '2024-08-13 09:53:23', '2024-08-13 09:53:23'),
(29, 29, 'assets/web/images/variant/1723560994_WhatsApp Image 2024-08-13 at 3.04.21 AM (1).jpeg', '2024-08-13 09:56:34', '2024-08-13 09:56:34'),
(30, 30, 'assets/web/images/variant/1723560994_WhatsApp Image 2024-08-13 at 3.04.24 AM.jpeg', '2024-08-13 09:56:34', '2024-08-13 09:56:34'),
(31, 31, 'assets/web/images/variant/1723561791_WhatsApp Image 2024-08-13 at 3.08.38 AM.jpeg', '2024-08-13 10:09:51', '2024-08-13 10:09:51'),
(32, 32, 'assets/web/images/variant/1723561791_WhatsApp Image 2024-08-13 at 3.08.38 AM (1).jpeg', '2024-08-13 10:09:51', '2024-08-13 10:09:51'),
(33, 33, 'assets/web/images/variant/1723562662_WhatsApp Image 2024-08-13 at 3.37.14 AM (1).jpeg', '2024-08-13 10:24:22', '2024-08-13 10:24:22'),
(34, 34, 'assets/web/images/variant/1723562663_WhatsApp Image 2024-08-13 at 3.37.15 AM.jpeg', '2024-08-13 10:24:23', '2024-08-13 10:24:23'),
(35, 35, 'assets/web/images/variant/1723645739_WhatsApp Image 2024-08-14 at 4.52.35 PM.jpeg', '2024-08-14 09:28:59', '2024-08-14 09:28:59'),
(36, 36, 'assets/web/images/variant/1723645739_WhatsApp Image 2024-08-14 at 4.52.35 PM (1).jpeg', '2024-08-14 09:28:59', '2024-08-14 09:28:59'),
(37, 37, 'assets/web/images/variant/1723645739_WhatsApp Image 2024-08-14 at 4.52.35 PM (2).jpeg', '2024-08-14 09:28:59', '2024-08-14 09:28:59'),
(38, 38, 'assets/web/images/variant/1723645869_WhatsApp Image 2024-08-14 at 4.52.33 PM.jpeg', '2024-08-14 09:31:09', '2024-08-14 09:31:09'),
(39, 39, 'assets/web/images/variant/1723645869_WhatsApp Image 2024-08-14 at 4.52.33 PM (1).jpeg', '2024-08-14 09:31:09', '2024-08-14 09:31:09'),
(40, 40, 'assets/web/images/variant/1723646072_WhatsApp Image 2024-08-14 at 4.52.28 PM (1).jpeg', '2024-08-14 09:34:32', '2024-08-14 09:34:32'),
(41, 41, 'assets/web/images/variant/1723646168_WhatsApp Image 2024-08-14 at 4.52.30 PM (2).jpeg', '2024-08-14 09:36:08', '2024-08-14 09:36:08'),
(42, 42, 'assets/web/images/variant/1723646168_WhatsApp Image 2024-08-14 at 4.52.30 PM (1).jpeg', '2024-08-14 09:36:08', '2024-08-14 09:36:08'),
(43, 43, 'assets/web/images/variant/1723647083_WhatsApp Image 2024-08-14 at 4.52.13 PM (1).jpeg', '2024-08-14 09:51:23', '2024-08-14 09:51:23'),
(44, 44, 'assets/web/images/variant/1723647428_WhatsApp Image 2024-08-14 at 4.52.18 PM (1).jpeg', '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(45, 45, 'assets/web/images/variant/1723647428_WhatsApp Image 2024-08-14 at 4.52.17 PM (1).jpeg', '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(46, 46, 'assets/web/images/variant/1723647428_WhatsApp Image 2024-08-14 at 4.52.17 PM.jpeg', '2024-08-14 09:57:08', '2024-08-14 09:57:08'),
(47, 47, 'assets/web/images/variant/1723647692_WhatsApp Image 2024-08-14 at 4.52.21 PM (1).jpeg', '2024-08-14 10:01:32', '2024-08-14 10:01:32'),
(48, 48, 'assets/web/images/variant/1723654024_WhatsApp Image 2024-08-14 at 4.44.20 PM (1).jpeg', '2024-08-14 11:47:04', '2024-08-14 11:47:04'),
(49, 49, 'assets/web/images/variant/1723654024_WhatsApp Image 2024-08-14 at 4.44.19 PM.jpeg', '2024-08-14 11:47:04', '2024-08-14 11:47:04'),
(50, 50, 'assets/web/images/variant/1723654024_WhatsApp Image 2024-08-14 at 4.44.21 PM (1).jpeg', '2024-08-14 11:47:04', '2024-08-14 11:47:04'),
(51, 51, 'assets/web/images/variant/1723654728_WhatsApp Image 2024-08-14 at 4.43.47 PM (5).jpeg', '2024-08-14 11:58:48', '2024-08-14 11:58:48'),
(52, 52, 'assets/web/images/variant/1723655211_WhatsApp Image 2024-08-14 at 4.43.39 PM.jpeg', '2024-08-14 12:06:51', '2024-08-14 12:06:51'),
(53, 53, 'assets/web/images/variant/1723655864_WhatsApp Image 2024-08-14 at 2.58.00 PM.jpeg', '2024-08-14 12:17:44', '2024-08-14 12:17:44'),
(54, 54, 'assets/web/images/variant/1723655864_WhatsApp Image 2024-08-14 at 2.58.01 PM.jpeg', '2024-08-14 12:17:44', '2024-08-14 12:17:44'),
(55, 56, 'assets/web/images/variant/1723657713_WhatsApp Image 2024-08-13 at 6.07.11 AM (1).jpeg', '2024-08-14 12:48:33', '2024-08-14 12:48:33'),
(56, 57, 'assets/web/images/variant/1723657714_WhatsApp Image 2024-08-13 at 6.07.11 AM.jpeg', '2024-08-14 12:48:34', '2024-08-14 12:48:34'),
(57, 58, 'assets/web/images/variant/1723658378_WhatsApp Image 2024-08-13 at 6.07.01 AM (2).jpeg', '2024-08-14 12:59:38', '2024-08-14 12:59:38'),
(58, 59, 'assets/web/images/variant/1723726196_r5.2.jpg', '2024-08-15 07:49:56', '2024-08-15 07:49:56'),
(59, 60, 'assets/web/images/variant/1723727160_r4.3.jpg', '2024-08-15 08:06:00', '2024-08-15 08:06:00'),
(60, 61, 'assets/web/images/variant/1723727160_r4.1.jpg', '2024-08-15 08:06:00', '2024-08-15 08:06:00'),
(61, 62, 'assets/web/images/variant/1723727354_3.1.jpg', '2024-08-15 08:09:14', '2024-08-15 08:09:14'),
(62, 63, 'assets/web/images/variant/1723729366_WhatsApp Image 2024-08-15 at 6.19.44 PM.jpeg', '2024-08-15 08:42:46', '2024-08-15 08:42:46'),
(63, 64, 'assets/web/images/variant/1723729366_WhatsApp Image 2024-08-15 at 6.19.48 PM.jpeg', '2024-08-15 08:42:46', '2024-08-15 08:42:46'),
(64, 65, 'assets/web/images/variant/1723729555_WhatsApp Image 2024-08-15 at 6.30.40 PM (3).jpeg', '2024-08-15 08:45:55', '2024-08-15 08:45:55'),
(65, 66, 'assets/web/images/variant/1723729972_WhatsApp Image 2024-08-15 at 6.20.11 PM (1).jpeg', '2024-08-15 08:52:52', '2024-08-15 08:52:52'),
(66, 67, 'assets/web/images/variant/1723729972_WhatsApp Image 2024-08-15 at 6.20.13 PM.jpeg', '2024-08-15 08:52:52', '2024-08-15 08:52:52'),
(67, 68, 'assets/web/images/variant/1723730660_WhatsApp Image 2024-08-15 at 6.35.55 PM (1).jpeg', '2024-08-15 09:04:20', '2024-08-15 09:04:20'),
(68, 69, 'assets/web/images/variant/1723730660_WhatsApp Image 2024-08-15 at 6.35.57 PM.jpeg', '2024-08-15 09:04:20', '2024-08-15 09:04:20'),
(69, 70, 'assets/web/images/variant/1723730660_WhatsApp Image 2024-08-15 at 6.35.58 PM.jpeg', '2024-08-15 09:04:20', '2024-08-15 09:04:20'),
(70, 71, 'assets/web/images/variant/1723730989_s4.jpg', '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(71, 72, 'assets/web/images/variant/1723730989_s3.jpg', '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(72, 73, 'assets/web/images/variant/1723730989_s7.jpg', '2024-08-15 09:09:49', '2024-08-15 09:09:49'),
(73, 74, 'assets/web/images/variant/1723731156_s4.jpg', '2024-08-15 09:12:36', '2024-08-15 09:12:36'),
(74, 75, 'assets/web/images/variant/1723731157_s5.jpg', '2024-08-15 09:12:37', '2024-08-15 09:12:37'),
(75, 76, 'assets/web/images/variant/1723731308_s3.jpg', '2024-08-15 09:15:08', '2024-08-15 09:15:08'),
(76, 77, 'assets/web/images/variant/1723731308_s8.jpg', '2024-08-15 09:15:08', '2024-08-15 09:15:08'),
(77, 78, 'assets/web/images/variant/1723731308_s6.jpg', '2024-08-15 09:15:08', '2024-08-15 09:15:08'),
(78, 79, 'assets/web/images/variant/1723731409_s2.jpg', '2024-08-15 09:16:49', '2024-08-15 09:16:49'),
(79, 80, 'assets/web/images/variant/1723731409_s5.jpg', '2024-08-15 09:16:49', '2024-08-15 09:16:49'),
(80, 81, 'assets/web/images/variant/1723731544_s5.jpg', '2024-08-15 09:19:04', '2024-08-15 09:19:04'),
(81, 82, 'assets/web/images/variant/1723731545_s6.jpg', '2024-08-15 09:19:05', '2024-08-15 09:19:05'),
(82, 83, 'assets/web/images/variant/1723731545_s3.jpg', '2024-08-15 09:19:05', '2024-08-15 09:19:05'),
(83, 84, 'assets/web/images/variant/1723731651_s3.jpg', '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(84, 85, 'assets/web/images/variant/1723731651_s5.jpg', '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(85, 86, 'assets/web/images/variant/1723731651_s6.jpg', '2024-08-15 09:20:51', '2024-08-15 09:20:51'),
(86, 87, 'assets/web/images/variant/1723733296_WhatsApp Image 2024-08-15 at 7.13.41 PM.jpeg', '2024-08-15 09:48:16', '2024-08-15 09:48:16'),
(87, 88, 'assets/web/images/variant/1723734313_d56.jpg', '2024-08-15 10:05:13', '2024-08-15 10:05:13'),
(88, 89, 'assets/web/images/variant/1723734313_d57.jpg', '2024-08-15 10:05:13', '2024-08-15 10:05:13'),
(89, 90, 'assets/web/images/variant/1723735188_d34.jpg', '2024-08-15 10:19:48', '2024-08-15 10:19:48'),
(90, 91, 'assets/web/images/variant/1723735188_d33.jpg', '2024-08-15 10:19:48', '2024-08-15 10:19:48'),
(91, 92, 'assets/web/images/variant/1723743646_23.2.jpg', '2024-08-15 12:40:46', '2024-08-15 12:40:46'),
(92, 93, 'assets/web/images/variant/1723744449_16.6.jpg', '2024-08-15 12:54:09', '2024-08-15 12:54:09'),
(93, 94, 'assets/web/images/variant/1723744450_16.7.jpg', '2024-08-15 12:54:10', '2024-08-15 12:54:10'),
(94, 95, 'assets/web/images/variant/1723744450_16.8.jpg', '2024-08-15 12:54:10', '2024-08-15 12:54:10'),
(95, 96, 'assets/web/images/variant/1723744921_3.1.jpg', '2024-08-15 13:02:01', '2024-08-15 13:02:01'),
(96, 97, 'assets/web/images/variant/1723744921_4.1.jpg', '2024-08-15 13:02:01', '2024-08-15 13:02:01'),
(97, 98, 'assets/web/images/variant/1723744921_3.3.jpg', '2024-08-15 13:02:01', '2024-08-15 13:02:01'),
(98, 99, 'assets/web/images/variant/1723745845_1.2.jpg', '2024-08-15 13:17:25', '2024-08-15 13:17:25'),
(99, 100, 'assets/web/images/variant/1723745952_4.4.jpg', '2024-08-15 13:19:12', '2024-08-15 13:19:12'),
(100, 101, 'assets/web/images/variant/1723746064_4.2.jpg', '2024-08-15 13:21:04', '2024-08-15 13:21:04'),
(101, 102, 'assets/web/images/variant/1723746274_2.3.jpg', '2024-08-15 13:24:34', '2024-08-15 13:24:34'),
(102, 103, 'assets/web/images/variant/1723746274_2.4.jpg', '2024-08-15 13:24:34', '2024-08-15 13:24:34'),
(103, 104, 'assets/web/images/variant/1723817074_WhatsApp Image 2024-08-16 at 5.26.38 PM.jpeg', '2024-08-16 09:04:34', '2024-08-16 09:04:34'),
(104, 105, 'assets/web/images/variant/1723817170_WhatsApp Image 2024-08-16 at 5.26.55 PM (2).jpeg', '2024-08-16 09:06:10', '2024-08-16 09:06:10'),
(105, 106, 'assets/web/images/variant/1723817560_WhatsApp Image 2024-08-16 at 5.26.18 PM (1).jpeg', '2024-08-16 09:12:40', '2024-08-16 09:12:40'),
(106, 107, 'assets/web/images/variant/1723817560_WhatsApp Image 2024-08-16 at 5.26.19 PM.jpeg', '2024-08-16 09:12:40', '2024-08-16 09:12:40'),
(107, 108, 'assets/web/images/variant/1723817732_WhatsApp Image 2024-08-16 at 5.26.57 PM.jpeg', '2024-08-16 09:15:32', '2024-08-16 09:15:32'),
(108, 109, 'assets/web/images/variant/1723817732_WhatsApp Image 2024-08-16 at 5.26.58 PM.jpeg', '2024-08-16 09:15:32', '2024-08-16 09:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `comment`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'I loved it!', 6, 7, '2024-08-13 11:35:21', '2024-08-13 11:35:21');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','customer','rider') NOT NULL DEFAULT 'customer',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `first_name`, `last_name`, `phone_number`, `shipping_address`, `billing_address`, `city`, `state`, `country`, `zip_code`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$TRAvzEf/fxQ2SFE4He7speW1oFiNyI/4vmYFFYmJ8dJKeIpL/pxBm', NULL, '2024-05-19 16:43:14', '2024-08-08 14:09:55', 'admin', 'Wajiha', 'Kanwal', '03118062408', 'Bahria Town Bhase 4', 'Bahria Town Bhase 7', 'Islamabad', 'Pakistan', 'Pakistan', '46000'),
(2, 'customer sam', 'customer@gmail.com', NULL, '$2y$12$7/HJRKahOxVR.kQyaz/PWubyL73jbaL7aYDKjTJakR4NYYioE9B/W', NULL, '2024-05-25 18:51:58', '2024-05-25 18:51:58', 'customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'adnan safdar', 'adnan@gmail.com', NULL, '$2y$12$n1QcoKVVUqr5wi923tZQw.e1xXzg6.FRtAzIQDi5CFV6QpR8X4FJ.', NULL, '2024-05-25 19:07:55', '2024-05-25 19:07:55', 'customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Delivery Person', 'delivery@gmail.com', NULL, '$2y$12$P3.H5of33LkRwkth/DYGx.7xLR.XgAj6u/hBs8BJb.7higV7s2YRe', NULL, '2024-08-08 12:25:48', '2024-08-08 12:25:48', 'rider', NULL, NULL, '03334262423', NULL, NULL, 'Islamabad', 'Pakistan', 'Pakistan', '46000'),
(6, 'sumaiya', 'suma123@gmail.com', NULL, '$2y$12$8R48srwT2kPYCf6xSjS/O.SlgUxu8wXQBFprqocaa99DhQnXu8qfy', NULL, '2024-08-12 14:08:12', '2024-08-12 14:08:12', 'customer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'sumaiya', 'sumaiyam42@gmail.com', NULL, '$2y$12$PRZsBOt.FZoaADvxhh1CLOZ.dIMYNt0QTMEQfq/UpEdDPtEQ9W23u', NULL, '2024-08-13 11:18:29', '2024-08-13 11:21:34', 'customer', 'sumaiya', 'mohamad', '0311805623', 'hbl atm iiui', 'hbl atm iiui', 'islamabad', 'punjab', NULL, '44000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variant_images`
--
ALTER TABLE `product_variant_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variant_images_product_variant_id_foreign` (`product_variant_id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `product_variant_images`
--
ALTER TABLE `product_variant_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_variant_images`
--
ALTER TABLE `product_variant_images`
  ADD CONSTRAINT `product_variant_images_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`);

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
