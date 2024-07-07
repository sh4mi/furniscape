-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 21, 2024 at 04:56 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'beds', 'beds', '2024-05-19 16:47:50', '2024-05-28 16:53:38'),
(2, 'praesentium', 'id-et-quae-libero-magni-nostrum-consequatur', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(3, 'ipsa', 'dolores-in-quia-quidem-quas-neque-ex-beatae', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(4, 'repellendus', 'repellat-saepe-qui-et-sint-temporibus-omnis-illo-praesentium', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(5, 'similique', 'ut-qui-laborum-architecto-illo-fugit-consequatur-perferendis-in', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(6, 'sunt', 'soluta-ducimus-occaecati-voluptatem-cumque-architecto-distinctio-reiciendis', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(7, 'debitis', 'voluptas-velit-ipsam-reprehenderit-aut-rem-exercitationem-doloribus-qui', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(8, 'eaque', 'cum-iusto-qui-nobis-sunt-natus-earum-impedit', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(9, 'et', 'qui-beatae-beatae-tempora-et', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(10, 'sapiente', 'nulla-quam-eligendi-perspiciatis-soluta', '2024-05-19 16:47:50', '2024-05-19 16:47:50'),
(11, 'sofa', 'sofa', '2024-05-27 05:14:37', '2024-05-27 05:14:37');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_15_213106_create_categories_table', 1),
(6, '2024_05_15_213123_create_products_table', 1),
(7, '2024_05_15_213141_create_orders_table', 1),
(8, '2024_05_15_213158_create_order_items_table', 1),
(9, '2024_05_15_213242_create_product_images_table', 1),
(10, '2024_05_15_213254_create_product_variations_table', 1),
(11, '2024_05_25_235847_add_role_enum_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `status` enum('pending','confirmed','delivered','dispatched','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` enum('cod','card') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` tinyint(1) NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Tarva Bed', 'Libero quas dolorem tenetur unde qui est autem. Blanditiis illo aperiam et tempora. Esse eum non tempore dolor. Sint iusto dolorem animi ullam.', 1, 63, NULL, '36.06x25.02x31.73', 'itaque', 797, 0, 0, 492.59, 400, '2024-05-19 17:56:51', '2024-05-28 17:23:43'),
(2, 'fugiat', 'Ullam et illo exercitationem similique quis corrupti. Voluptate non odio consequatur beatae repellat nulla. Molestias dolorem eaque dolorem autem libero enim accusantium.', 1, 4, '3373840665720', '34.17x32.17x36.86', 'illo', 89, 1, 1, 344.53, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(3, 'dolorum', 'Sit voluptatum natus culpa repudiandae dolores repellendus. Voluptates voluptate tenetur officia dolores. Sint sit placeat dolor vel ad at. Alias ut libero excepturi iste possimus culpa aut.', 9, 8, '8363184427837', '76.63x37.76x23.54', 'nobis', 839, 1, 1, 799.33, 393.79, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(4, 'non', 'Asperiores repellat quasi soluta voluptas voluptatibus minima recusandae. Aut dolorem occaecati rem ut laudantium sed officia. Illo sed nemo nemo quos unde.', 1, 98, '7035207119869', '33.67x39.9x86.18', 'pariatur', 4, 0, 1, 704.87, 481.55, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(5, 'laborum', 'Ut soluta consequatur enim error ipsa. Necessitatibus officiis autem sint et dolorem hic cumque. Tempore fuga excepturi quis molestiae voluptas. Itaque distinctio aliquam omnis est tenetur expedita.', 7, 77, '2159171570466', '0.39x61.99x32.69', 'est', 855, 1, 0, 63.97, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(6, 'eveniet', 'Aut est fugiat maxime molestias. Omnis a enim non voluptatem voluptates laudantium ratione. Omnis debitis numquam molestiae. Eum nulla illum reprehenderit ipsam.', 9, 87, '1188836055681', '84.05x82.17x21.04', 'sint', 120, 1, 0, 484.81, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(7, 'nisi', 'Aut vitae incidunt doloribus ut vitae voluptatem. Sequi et in nostrum illum fuga. Aut enim sit sit quam.', 2, 97, '4638361944396', '6.26x15.78x75.79', 'eius', 164, 1, 1, 867.05, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(8, 'aspernatur', 'Molestias ut aut natus dolores nesciunt quasi sint fuga. Molestias qui optio aliquid quisquam quia sit. Nemo ut vero laboriosam accusamus ut voluptates.', 10, 81, '8144493567595', '6.07x72.18x52', 'et', 123, 0, 1, 171.15, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(9, 'facilis', 'Voluptas quo ullam dolores. Ducimus non sunt sint. Provident excepturi cumque voluptas consequatur.', 4, 73, '6019991630367', '11.29x50.23x90.16', 'blanditiis', 514, 0, 0, 149.07, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(10, 'voluptates', 'Non incidunt a modi nemo aut. Dolor amet qui fugiat possimus veritatis ipsa. Laboriosam omnis hic ut non vero debitis.', 9, 62, '6763422977056', '76.72x58.72x49.28', 'tempore', 885, 1, 1, 493.71, 104.73, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(11, 'a', 'Quo ut id cum quis perspiciatis itaque modi. Ducimus aut et ipsam odio sunt. Aliquid eum perspiciatis totam reprehenderit pariatur velit aut.', 5, 19, '0388930559394', '32.41x28.37x80.07', 'eos', 928, 0, 0, 489.47, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(12, 'praesentium', 'Nemo quis similique sint tenetur ex rerum. Porro provident doloremque ducimus laudantium ut quod possimus quia. Similique facere nobis qui et similique dolorem molestiae numquam. Hic quam similique autem exercitationem.', 2, 25, '8265612383251', '15.62x0.28x34.03', 'occaecati', 23, 0, 0, 552.18, 56.96, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(13, 'dolor', 'Ullam minima et distinctio vitae adipisci. Magnam nihil natus rem autem quis. Omnis laborum omnis vitae culpa mollitia aut. Magnam consequatur perspiciatis est et ipsam in autem.', 6, 36, '2192738785835', '36.68x88.54x72.68', 'omnis', 95, 1, 0, 146.29, 471.59, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(14, 'occaecati', 'Ut velit enim enim enim accusamus illum. Quisquam aut amet iusto dolor. Occaecati consequatur aspernatur dolore eaque error facilis eligendi.', 6, 8, '5658095321224', '32.07x1.39x68.67', 'ratione', 528, 0, 0, 225.98, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(15, 'id', 'Dolores nisi et tempora id. Sit cumque itaque eligendi. Qui est et exercitationem libero alias. Atque magni non a expedita.', 1, 94, '7051732362587', '49.69x69.88x75.18', 'perspiciatis', 848, 1, 1, 966.41, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(16, 'ut', 'Quos eum sapiente et ab eum molestias. Hic aut accusamus sed illo.', 3, 91, '7015055718940', '23.54x40.58x38.99', 'est', 18, 1, 1, 32.21, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(17, 'delectus', 'Id aut aut laboriosam praesentium molestias in. Tenetur qui aut ad ducimus iste consequuntur. Quo sint quia facilis ducimus cum similique tenetur.', 1, 100, '6548560356518', '83.24x51.59x23.35', 'enim', 402, 1, 1, 944.26, 232.45, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(18, 'doloribus', 'Aut voluptas nihil omnis neque et rerum et. Recusandae voluptatem pariatur ipsum nihil. Aut quisquam beatae non error sed et soluta.', 8, 20, '4778084645511', '12x3.52x48.68', 'aliquam', 208, 0, 0, 679.06, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(19, 'sed', 'Eos voluptatum quae ut. Enim eum unde praesentium atque iste nihil. In in excepturi eveniet nostrum.', 1, 33, '5238573010682', '64.61x78.41x6.12', 'veniam', 492, 0, 0, 935.48, 131.69, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(20, 'consequuntur', 'Facere optio distinctio laudantium tenetur pariatur eligendi impedit. Saepe labore quasi fugiat voluptatem voluptate ratione dolor.', 4, 98, '2083233279557', '56.63x15.67x56.63', 'eveniet', 8, 0, 0, 756.96, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(21, 'et', 'Asperiores temporibus fugiat autem cum ullam. Omnis odit aliquam amet aut quibusdam dolores vel laboriosam. Distinctio ad quo quod eos consequatur. Labore in exercitationem nam molestias.', 3, 10, '2199750588215', '25.44x41.99x43.54', 'molestias', 328, 1, 1, 441.51, 335.03, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(22, 'quas', 'Quia quasi omnis aliquam voluptate ut eaque a. Et porro sit qui voluptatem. Et ex consequuntur in. Voluptatem impedit dolorum modi recusandae porro recusandae ut vitae.', 4, 70, '4201586185617', '49.3x71.21x14.99', 'debitis', 840, 0, 0, 153.94, 484.85, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(23, 'maxime', 'Earum similique quasi eveniet rerum aut quas at. Placeat aut laboriosam itaque nisi ducimus distinctio et. Quo rerum voluptatum maxime dignissimos omnis odio labore.', 1, 20, '6597019979006', '18.82x97.04x45.56', 'distinctio', 145, 1, 0, 649.98, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(24, 'et', 'Ad quia iure doloremque minima iste voluptas. Reiciendis in ipsum incidunt nisi. Qui quisquam dolore earum laudantium.', 7, 86, '9066854995016', '54.6x69.21x3.11', 'illo', 159, 1, 1, 133.43, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(25, 'et', 'Omnis est est et. Aliquid consectetur adipisci quas omnis. Et aspernatur cumque perspiciatis qui nihil est culpa illum.', 5, 79, '5993094700534', '31.51x32.03x96.19', 'ad', 677, 1, 1, 362.17, 56.62, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(26, 'fuga', 'Molestiae rerum quis et similique. Aut nostrum architecto voluptate dicta consequatur ea. Tempora enim ab consectetur rerum reprehenderit consequatur dolore. Nihil voluptatem ut omnis optio molestiae in odit.', 1, 87, '4082992896058', '11.88x28.97x57.18', 'facilis', 518, 1, 0, 202.52, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(27, 'dignissimos', 'Exercitationem nobis porro alias odio dicta at fugit. Molestiae dolores aliquam sed ut. Aut voluptatibus vitae vel unde.', 8, 88, '1549388838694', '98.97x20.23x92.01', 'at', 505, 0, 1, 191.58, 326.43, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(28, 'voluptatem', 'Quia et dolor veritatis. Eaque modi odio nemo est et ut consequatur dolore. Animi quia nostrum sunt.', 9, 98, '9298681188815', '98.02x51.71x1.05', 'voluptatibus', 114, 1, 0, 344.38, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(29, 'nostrum', 'Eum omnis voluptatem ut perferendis. Qui repellendus consequuntur sed reprehenderit ipsa. Non similique aut et velit repudiandae.', 7, 43, '5728600111289', '47.6x91.44x8.5', 'minus', 715, 0, 1, 166.99, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(30, 'omnis', 'Molestiae ducimus occaecati sunt dolores. Soluta amet cupiditate iure et doloribus eveniet. Eos quasi delectus optio inventore voluptatem. Fuga est commodi iste et dicta animi tempora.', 7, 24, '1835814078872', '22.7x93.02x15.02', 'delectus', 55, 1, 0, 951.59, 84.68, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(31, 'sunt', 'Nisi dolores qui quo unde quam natus. Unde voluptatem animi cum quia et placeat voluptas.', 4, 22, '0547846648602', '2.2x6.46x98.82', 'aut', 954, 1, 1, 898.23, 395.06, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(32, 'deserunt', 'Quae a sint rerum delectus quia. Omnis repudiandae aliquam provident a sed et. Voluptate et qui nobis mollitia qui tempora est.', 2, 24, '6516613268262', '13.34x85.85x86.66', 'dicta', 682, 1, 1, 530.94, NULL, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(33, 'et', 'Qui debitis voluptatem recusandae architecto placeat autem ab. Rerum quo consequuntur exercitationem beatae porro ea. Aspernatur placeat deserunt molestiae error voluptatibus et sint alias.', 4, 18, '6092108166898', '57.15x33.43x52.99', 'ipsum', 183, 0, 1, 429.49, 315.26, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
(34, 'occaecati', 'Consectetur omnis officiis inventore et adipisci. Odio in quis nesciunt. Est accusamus omnis aut sed molestiae nemo ut. Aliquam voluptas nisi accusantium velit soluta quos ratione.', 2, 73, '6744516679506', '98.76x42.87x34.66', 'voluptatem', 834, 1, 0, 882.56, 395.3, '2024-05-19 17:56:51', '2024-05-19 17:56:51'),
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
(50, 'ea', 'Et blanditiis pariatur expedita sed non velit. Est vel non eum. Perferendis eius beatae veritatis et quia et. Nobis est assumenda voluptatem id sit expedita.', 4, 70, '2409219659180', '90.63x61.86x64.61', 'enim', 476, 1, 0, 399.94, 114.76, '2024-05-19 17:56:51', '2024-05-19 17:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_url`, `created_at`, `updated_at`) VALUES
(3, 1, 'assets/web/images/product/1716809578_logo.png', '2024-05-27 06:32:58', '2024-05-27 06:32:58'),
(4, 1, 'assets/web/images/product/1716933058_2 (3).png', '2024-05-28 16:50:58', '2024-05-28 16:50:58'),
(5, 1, 'assets/web/images/product/1716935023_4.jpg', '2024-05-28 17:23:43', '2024-05-28 17:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$TRAvzEf/fxQ2SFE4He7speW1oFiNyI/4vmYFFYmJ8dJKeIpL/pxBm', NULL, '2024-05-19 16:43:14', '2024-05-19 16:43:14', 'admin'),
(2, 'customer sam', 'customer@gmail.com', NULL, '$2y$12$7/HJRKahOxVR.kQyaz/PWubyL73jbaL7aYDKjTJakR4NYYioE9B/W', NULL, '2024-05-25 18:51:58', '2024-05-25 18:51:58', 'customer'),
(3, 'adnan safdar', 'adnan@gmail.com', NULL, '$2y$12$n1QcoKVVUqr5wi923tZQw.e1xXzg6.FRtAzIQDi5CFV6QpR8X4FJ.', NULL, '2024-05-25 19:07:55', '2024-05-25 19:07:55', 'customer');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
