-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 06:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maverickdressdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `created_date`) VALUES
(1, 'Shirt', '1', '2023-02-09 14:19:34'),
(2, 'Skirts', '1', '2023-02-09 14:19:34'),
(3, 'P.T. T-shirts', '1', '2023-02-09 14:19:34'),
(4, 'P.T. shorts', '1', '2023-02-09 14:19:34'),
(5, 'P.T. track pants', '1', '2023-02-09 14:19:34'),
(6, 'Belts', '1', '2023-02-09 14:19:34'),
(7, 'Ties', '1', '2023-02-09 14:19:34'),
(8, 'Logos', '1', '2023-02-09 14:19:34'),
(9, 'Socks', '1', '2023-02-09 14:19:34'),
(10, 'Frocks', '1', '2023-02-09 14:19:34'),
(17, 'test2', '1', NULL),
(18, NULL, '0', NULL),
(19, NULL, NULL, NULL),
(20, 'ties', '1', NULL);

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customer_id`, `customer_name`, `email`, `phone`, `content`, `status`, `created_date`, `updated_date`) VALUES
(23, NULL, 'Prof. Tyrese Ortiz DVM', 'wruecker@treutel.org', '(346) 323-7365', 'Voluptatem sint rerum placeat necessitatibus impedit. Rem asperiores exercitationem a deserunt qui aut dolorem. Ut rem repellat enim. Alias dolorem voluptatem sit deserunt.\n\nSaepe voluptate fuga et repellendus. Ut vitae doloribus voluptates.\n\nUt nemo ut delectus iure alias reprehenderit. Eligendi id odio repellat et. Atque quibusdam commodi assumenda eum vero.', NULL, '2023-05-22 21:51:12', NULL),
(24, NULL, 'Talia Schmidt', 'sauer.helen@yahoo.com', '1-947-623-5303', 'Nam doloribus illo quod nam debitis temporibus. Voluptatibus voluptatem nisi quae ab. Eum libero ut et nostrum. Fugiat tempore tempora tenetur deleniti sit ut.\n\nVitae accusantium blanditiis accusantium cumque. Debitis quisquam omnis alias blanditiis. Dolor fugiat ea qui et hic.\n\nNisi perspiciatis rerum corrupti dolore dicta qui at. Dolore dolor reprehenderit quas voluptatum.', NULL, '2023-05-21 07:08:09', NULL),
(25, NULL, 'Mr. Hoyt Emmerich', 'nkunde@hotmail.com', '1-650-976-0898', 'Fuga beatae aut deleniti quam. Non non ut omnis. Nostrum necessitatibus cupiditate alias quod. Excepturi doloribus est sequi id magni.\n\nIusto qui est qui consequuntur aut voluptate magni. Aut rerum id ut impedit. Quis debitis in et impedit in dolorem. Et perspiciatis distinctio ea nisi esse non.\n\nSunt ut ea ut eos. Quae facilis quia possimus omnis. Molestiae sed dolorum a. Doloribus aliquid ipsam incidunt necessitatibus. Distinctio occaecati beatae non velit.', NULL, '2023-05-24 10:21:37', NULL),
(26, NULL, 'Llewellyn Erdman', 'ylebsack@gmail.com', '918.539.8564', 'Est ut iusto ab recusandae sint. Iure ut tempora ex tenetur nihil dolores distinctio. Mollitia enim numquam illum quos quia architecto. Cumque voluptatem deleniti iusto sit et voluptatum. Quos corporis quaerat harum ipsa eius odio.\n\nA quia et unde consequatur enim nihil. Rerum ratione ullam similique harum beatae voluptatibus voluptate dolores. Maiores accusantium accusamus qui fugiat omnis expedita maiores. Odio exercitationem reprehenderit veritatis veritatis molestiae quo et.\n\nAut totam eos et occaecati. Dolore delectus reiciendis sunt accusamus non velit sed. Error quia deserunt tempora doloribus odio quia rem.', NULL, '2023-04-26 22:07:57', NULL),
(27, NULL, 'Mackenzie Medhurst II', 'xbarton@gmail.com', '657.770.0510', 'Quia asperiores cupiditate aut consequatur. Et aut esse praesentium excepturi dolore dicta. Cumque ullam ex enim corporis architecto officia.\n\nVitae blanditiis modi qui tempora. Esse eligendi dolor ipsam doloremque mollitia aut. Impedit dolores aut ipsam dicta sunt et fugiat aut.\n\nDolorem mollitia eum minus sint. Sint consequatur tempore dignissimos voluptas. Sit laudantium tempore recusandae velit quae ipsum laborum.', NULL, '2023-05-25 06:55:51', NULL),
(28, NULL, 'Lorenz Gibson', 'bartell.vince@hane.com', '+16808021917', 'Voluptas in ipsam laudantium quia repudiandae. Aut eos velit iusto asperiores dolorem. Saepe officiis et dolores soluta dolore voluptate cupiditate.\n\nEt distinctio corporis praesentium occaecati aliquid deleniti et. Sint et qui eveniet quisquam quam. Eligendi voluptatem libero dolore est. Qui laboriosam architecto rerum in quasi.\n\nSit quisquam sint animi voluptatem magnam. Et quaerat itaque maxime accusantium dolor. Dolores non quibusdam ut aliquid corrupti. Sequi rerum aut dolorum doloremque non.', NULL, '2023-03-02 22:54:31', NULL),
(29, NULL, 'Etha Crona', 'litzy22@sanford.com', '1-478-403-1319', 'Molestiae eum necessitatibus voluptas accusamus soluta et eius. Hic nemo a numquam optio ad saepe. Ipsum nobis sunt deleniti enim quod et quo dolores. Numquam distinctio nisi adipisci libero ab quam.\n\nAut ut molestias itaque rerum ipsam et nemo et. Nulla itaque quos cupiditate deleniti aliquam. Repellendus quis officiis optio et et dolorem sequi.\n\nUt maxime placeat debitis quaerat quod. Id dolores cum recusandae explicabo omnis qui. Molestiae nobis officiis sint aut eum repudiandae. Tempora iure aut cupiditate consequatur consequatur.', NULL, '2023-03-28 05:25:01', NULL),
(30, NULL, 'Prof. Gabrielle Balistreri Sr.', 'bruen.fiona@yahoo.com', '339.764.7433', 'Natus explicabo ea similique ea quo quae et. Blanditiis pariatur id aut id quo. Tempora amet sint rerum quam. Dolorem non nostrum voluptatum autem provident recusandae.\n\nUt quaerat consequatur voluptates voluptatem. Porro incidunt est voluptatem adipisci quos et. Ipsum labore quo eos numquam explicabo. Et neque aut quia exercitationem voluptatibus quaerat magni.\n\nDistinctio eius voluptate illo debitis. Sunt quo voluptatem ut velit ipsa. Aspernatur ea sunt inventore.', NULL, '2023-08-28 14:03:12', NULL),
(31, NULL, 'Mr. Marques Hagenes', 'anahi.hegmann@emmerich.com', '+1.310.579.8584', 'Occaecati alias qui ratione sunt ut et laborum. Fugit sequi nam quis labore rerum sint. Nemo esse aut non eligendi explicabo. Tempore blanditiis voluptatem alias eaque labore eos illo hic.\n\nFugiat excepturi atque soluta dolorem. Et rerum architecto nemo corrupti odio quod voluptates sit. Omnis voluptatem voluptas non magni dolorem dolorem.\n\nProvident et inventore voluptate blanditiis quis. Itaque est maiores laudantium et labore. Et aspernatur voluptatem sint sint nihil. Nulla eligendi quis a amet sapiente esse. Molestiae sequi ducimus explicabo dolorem facere.', NULL, '2023-04-30 04:43:19', NULL),
(32, NULL, 'Dr. Katlyn Ernser', 'jweissnat@yahoo.com', '+1-325-963-8113', 'Voluptatem nihil praesentium aperiam fuga nostrum quisquam aliquam et. Voluptatum atque aut ut harum. Dolor et ratione sunt.\n\nEligendi iure maxime quos aut culpa. Quas sed quos quidem hic non ipsa repellat. Vero ipsam aperiam animi sunt quisquam amet quasi fugiat.\n\nVoluptas sit veritatis ut eos. Cum excepturi laudantium qui aperiam et.', NULL, '2023-05-02 01:53:35', NULL),
(33, NULL, 'Barrett Kutch', 'hvolkman@zemlak.biz', '234.760.7051', 'Necessitatibus non natus laboriosam dignissimos enim atque. Maiores ut aut debitis corporis rerum libero ea. Quasi qui quidem qui. Nobis dolorem et in veniam dolore ullam aspernatur.\n\nRatione ut optio quia dolores blanditiis iste vitae. Eligendi rerum quis architecto pariatur facere amet ut. Laudantium aut et sint reprehenderit ut voluptatem. Blanditiis et qui maiores ullam. Quia cum et vel numquam dolores dolorem.\n\nQuos possimus facere praesentium et consequatur est. Nisi iure numquam vero id natus. Voluptas quos minus dicta possimus.', NULL, '2023-04-26 12:26:03', NULL),
(34, NULL, 'Mrs. Ciara Wiegand', 'lmarquardt@hotmail.com', '(760) 969-6413', 'Eum ut architecto ut sed ullam molestiae. Voluptates sit et non suscipit. Ad nihil dolor aut cum aspernatur a. Eius aliquam sed quae consequatur rerum fugiat.\n\nVoluptatem voluptas nulla voluptas optio exercitationem deleniti ut provident. Nihil minima doloremque sit nihil autem facilis. Pariatur similique vero error debitis neque porro tempora. Ut qui vel provident reiciendis.\n\nPariatur recusandae at eum nesciunt. Laudantium est a architecto et minus fugit minima.', NULL, '2023-04-20 16:53:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `product_id`, `file_path`, `status`, `created_at`, `updated_at`) VALUES
(8, 53, '167774031222.png', 1, '2023-03-02 06:58:32', '2023-03-02 06:58:32'),
(9, 53, '167774031246.jpg', 0, '2023-03-02 06:58:32', '2023-03-04 03:26:32'),
(10, 53, '167774031260.png', 0, '2023-03-02 06:58:32', '2023-03-04 02:19:02'),
(11, 53, '167774031294.jpg', 0, '2023-03-02 06:58:32', '2023-03-04 02:19:02'),
(12, 54, '167774049712.png', 1, '2023-03-02 07:01:37', '2023-03-02 07:01:37'),
(13, 54, '167774049783.png', 0, '2023-03-02 07:01:37', '2023-03-04 02:10:42'),
(14, 54, '167774049781.png', 0, '2023-03-02 07:01:37', '2023-03-04 03:30:38'),
(15, 54, '167774049780.png', 0, '2023-03-02 07:01:37', '2023-03-04 03:09:24'),
(16, 55, '167774239869.jpg', 1, '2023-03-02 07:33:18', '2023-03-02 07:33:18'),
(17, 55, '167775547453.png', 0, '2023-03-02 11:11:14', '2023-03-04 03:17:25'),
(18, 53, '167776558575.png', 0, '2023-03-02 13:59:45', '2023-03-04 02:11:48'),
(19, 53, '167776558594.png', 0, '2023-03-02 13:59:45', '2023-03-04 02:09:48'),
(20, 53, '167776558560.png', 0, '2023-03-02 13:59:45', '2023-03-04 02:19:02'),
(21, 55, '167790021293.jpg', 0, '2023-03-04 03:23:33', '2023-03-04 03:23:50'),
(22, 54, '167790094244.jpg', 0, '2023-03-04 03:35:42', '2023-03-04 03:36:01'),
(23, 54, '167790145777.png', 0, '2023-03-04 03:44:17', '2023-03-04 03:44:37'),
(24, 55, '167790154498.jpg', 0, '2023-03-04 03:45:44', '2023-03-04 03:46:00'),
(25, 55, '16779038756.webp', 0, '2023-03-04 04:24:35', '2023-03-04 04:25:01'),
(26, 54, '167790398392.png', 0, '2023-03-04 04:26:23', '2023-03-04 04:26:40'),
(27, 54, '167790408690.png', 0, '2023-03-04 04:28:06', '2023-03-04 04:28:20'),
(28, 54, '167790415463.png', 0, '2023-03-04 04:29:14', '2023-03-04 04:29:41'),
(29, 54, '167790415469.webp', 0, '2023-03-04 04:29:14', '2023-03-04 04:29:41'),
(30, 30, '167817837161.webp', 1, '2023-03-07 08:39:32', '2023-03-07 08:39:32'),
(31, 30, '167817837224.webp', 1, '2023-03-07 08:39:32', '2023-03-07 08:39:32'),
(32, 30, '167817837234.webp', 1, '2023-03-07 08:39:32', '2023-03-07 08:39:32'),
(33, 31, '16781787674.jpg', 0, '2023-03-07 08:46:07', '2023-03-07 09:35:34'),
(34, 31, '167817876752.jpg', 0, '2023-03-07 08:46:07', '2023-03-07 09:35:34'),
(35, 31, '16781787672.jpg', 0, '2023-03-07 08:46:07', '2023-03-07 09:35:34'),
(36, 32, '167817878290.webp', 1, '2023-03-07 08:46:22', '2023-03-07 08:46:22'),
(37, 33, '16781789141.webp', 1, '2023-03-07 08:48:34', '2023-03-07 08:48:34'),
(38, 33, '167817891479.webp', 1, '2023-03-07 08:48:34', '2023-03-07 08:48:34'),
(39, 34, '167817971133.webp', 1, '2023-03-07 09:01:51', '2023-03-07 09:01:51'),
(40, 34, '167817971111.jpg', 1, '2023-03-07 09:01:51', '2023-03-07 09:01:51'),
(41, 35, '167817972385.webp', 1, '2023-03-07 09:02:03', '2023-03-07 09:02:03'),
(42, 35, '167817972362.jpg', 1, '2023-03-07 09:02:03', '2023-03-07 09:02:03'),
(43, 36, '167817981250.jpg', 1, '2023-03-07 09:03:32', '2023-03-07 09:03:32'),
(44, 36, '167817981247.webp', 1, '2023-03-07 09:03:32', '2023-03-07 09:03:32'),
(45, 37, '167817983250.jpg', 1, '2023-03-07 09:03:52', '2023-03-07 09:03:52'),
(46, 37, '167817983250.jpg', 1, '2023-03-07 09:03:52', '2023-03-07 09:03:52'),
(47, 38, '167817985780.jpg', 1, '2023-03-07 09:04:17', '2023-03-07 09:04:17'),
(48, 38, '167817985799.jpg', 1, '2023-03-07 09:04:17', '2023-03-07 09:04:17'),
(49, 39, '167817988140.jpg', 1, '2023-03-07 09:04:41', '2023-03-07 09:04:41'),
(50, 39, '16781798812.jpg', 1, '2023-03-07 09:04:41', '2023-03-07 09:04:41'),
(51, 41, '167818057662.jpg', 1, '2023-03-07 09:16:16', '2023-03-07 09:16:16'),
(52, 41, '167818057619.webp', 1, '2023-03-07 09:16:16', '2023-03-07 09:16:16'),
(53, 42, '16781806163.webp', 1, '2023-03-07 09:16:56', '2023-03-07 09:16:56'),
(54, 48, '167818071330.png', 1, '2023-03-07 09:18:33', '2023-03-07 09:18:33'),
(55, 48, '167818071314.png', 1, '2023-03-07 09:18:33', '2023-03-07 09:18:33'),
(56, 47, '16781807275.jpg', 1, '2023-03-07 09:18:47', '2023-03-07 09:18:47'),
(57, 47, '167818072781.jpg', 1, '2023-03-07 09:18:47', '2023-03-07 09:18:47'),
(58, 43, '16781808591.webp', 1, '2023-03-07 09:20:59', '2023-03-07 09:20:59'),
(59, 43, '167818085914.jpg', 1, '2023-03-07 09:20:59', '2023-03-07 09:20:59'),
(60, 44, '167818087874.jpg', 1, '2023-03-07 09:21:18', '2023-03-07 09:21:18'),
(61, 44, '167818087897.jpg', 1, '2023-03-07 09:21:18', '2023-03-07 09:21:18'),
(62, 44, '167818087878.jpg', 1, '2023-03-07 09:21:18', '2023-03-07 09:21:18'),
(63, 56, '167818111617.jpg', 1, '2023-03-07 09:25:16', '2023-03-07 09:25:16'),
(64, 31, '167818169874.webp', 1, '2023-03-07 09:34:58', '2023-03-07 09:34:58'),
(65, 31, '167818169847.webp', 1, '2023-03-07 09:34:58', '2023-03-07 09:34:58'),
(66, 31, '167818169874.webp', 1, '2023-03-07 09:34:58', '2023-03-07 09:34:58'),
(67, 31, '167818169823.jpg', 1, '2023-03-07 09:34:58', '2023-03-07 09:34:58'),
(68, 56, '167818377574.webp', 1, '2023-03-07 10:09:35', '2023-03-07 10:09:35'),
(69, 57, '167818396753.jpg', 1, '2023-03-07 10:12:47', '2023-03-07 10:12:47'),
(70, 58, '167819209928.jpg', 1, '2023-03-07 12:28:20', '2023-03-07 12:28:20'),
(71, 58, '167819212996.jpg', 1, '2023-03-07 12:28:49', '2023-03-07 12:28:49'),
(72, 58, '167819212937.jpg', 1, '2023-03-07 12:28:49', '2023-03-07 12:28:49');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_19_064513_create_image_gallery_table', 2),
(6, '2023_02_28_030714_create_roles_table', 3),
(7, '2023_02_28_030737_create_role_user_table', 3),
(8, '2023_03_05_130610_visit_count_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `googlemaps_api` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Table structure for table `contact`

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category_id`, `price`, `quantity`, `description`, `images`, `status`, `created_date`, `updated_date`) VALUES
(30, 'Blue Dress Shirt', 1, '29.99', 100, 'Professional blue dress shirt made from high-quality cotton. Available in various sizes.', '167817837234.webp', '1', '2022-07-16 19:27:10', '2023-03-07 08:39:32'),
(31, 'Black Skirt', 2, '39.99', 75, 'Elegant black skirt made from a blend of polyester and rayon. Available in various lengths.', '167818169823.jpg', '1', '2022-05-01 18:39:56', '2023-03-07 09:34:58'),
(32, 'Red Frock', 10, '49.99', 50, 'Stunning red frock made from lightweight chiffon fabric. Perfect for formal events and parties.', '167817878290.webp', '1', '2023-02-21 10:58:10', '2023-03-07 08:46:22'),
(33, 'White Polo T-Shirt', 3, '14.99', 250, 'Classic white polo t-shirt made from breathable cotton. Available in various sizes.', '167817891479.webp', '1', '2022-02-27 22:51:06', '2023-03-07 08:48:34'),
(34, 'Grey P.T. Shorts', 4, '15.99', 200, 'Sleek and comfortable grey shorts made from durable polyester. Perfect for sports and gym activities.', '167817971111.jpg', '1', '2022-09-27 09:21:01', '2023-03-07 09:01:51'),
(35, 'Navy P.T. Track Pants', 5, '24.99', 125, 'Soft and comfortable navy track pants with an elastic waistband and tapered leg design. Great for jogging and casual wear.', '167817972362.jpg', '1', '2022-12-04 02:11:46', '2023-03-07 09:02:03'),
(36, 'Black Leather Belt', 6, '19.99', 175, 'Sleek black leather belt with a silver buckle. Available in various sizes.', '167817981247.webp', '1', '2022-02-11 06:55:50', '2023-03-07 09:03:32'),
(37, 'Red Silk Tie', 7, '9.99', 150, 'Stylish red silk tie with a subtle pattern. Perfect for formal occasions.', '167817983250.jpg', '1', '2022-01-12 04:03:54', '2023-03-07 09:03:52'),
(38, 'Custom Logo Embroidery', 8, '14.99', 250, 'Custom embroidered logo design on uniform shirts or jackets. Choose from various thread colors and placement options.', '167817985799.jpg', '1', '2022-12-01 23:32:01', '2023-03-07 09:04:17'),
(39, 'White Crew Socks', 9, '4.99', 500, 'Comfortable white crew socks made from a blend of cotton and polyester. Available in packs of 10.', '16781798812.jpg', '1', '2023-01-28 09:28:25', '2023-03-07 09:04:41'),
(40, 'Navy Blue Uniform Shirt', 1, '24.99', 200, 'Classic navy blue uniform shirt made from a durable cotton blend. Perfect for employees in a variety of industries.', NULL, '1', '2022-05-02 00:46:02', '2022-10-12 11:17:47'),
(41, 'Black A-Line Skirt', 2, '39.99', 125, 'Elegant black A-line skirt made from a comfortable stretch fabric. Available in various sizes.', '167818057619.webp', '1', '2022-09-01 23:25:00', '2023-03-07 09:16:16'),
(42, 'Green Wrap Dress', 10, '55.00', 75, 'Stylish green wrap dress made from a soft and flowy fabric. Perfect for both casual and formal occasions.', '16781806163.webp', '3', '2022-01-21 18:46:52', '2023-03-07 09:58:25'),
(43, 'Grey Gym T-Shirt', 3, '12.99', 250, 'Comfortable grey gym t-shirt made from a moisture-wicking fabric. Available in various sizes.', '167818085914.jpg', '1', '2022-07-07 23:39:23', '2023-03-07 09:20:59'),
(44, 'Black Running Shorts', 4, '16.99', 200, 'Lightweight black running shorts with built-in compression shorts for added support. Perfect for athletes and runners.', '167818087878.jpg', '1', '2022-02-11 13:56:22', '2023-03-07 09:21:18'),
(45, 'Grey Yoga Pants', 5, '29.99', 125, 'Stretchy grey yoga pants with a high waistband and a flattering fit. Great for yoga, pilates, and other low-impact activities.', NULL, '1', '2022-02-16 22:43:44', '2022-06-08 01:16:26'),
(46, 'Brown Leather Belt', 6, '24.99', 175, 'Stylish brown leather belt with a gold buckle. Available in various sizes.', NULL, '1', '2022-04-10 23:49:32', '2023-03-03 07:38:32'),
(47, 'Blue Striped Tie', 7, '12.99', 150, 'Classic blue striped tie made from a soft and lightweight fabric. Perfect for both casual and formal occasions.', '167818072781.jpg', '1', '2022-12-16 02:56:32', '2023-03-07 09:18:47'),
(48, 'Custom Logo Screen Printing', 8, '9.99', 250, 'Custom screen printed logo design on uniform t-shirts or sweatshirts. Choose from various ink colors and placement options.', '167818071314.png', '1', '2022-07-16 15:14:04', '2023-03-07 09:18:33'),
(49, 'Black Ankle Socks', 9, '3.99', 500, 'Comfortable black ankle socks made from a soft and breathable cotton blend. Available in packs of 10.', NULL, '1', '2022-12-05 19:20:48', '2022-12-31 21:56:48'),
(56, 'Asian High School Uniform', 2, '54.00', 100, 'Asian School Uniform For Girl', '167818377574.webp', '3', '2023-03-07 16:25:16', '2023-03-07 10:09:35'),
(57, 'Western School Uniform', 1, '22.00', 200, 'Customized primary school uniform of western style blazer', '167818396753.jpg', '3', '2023-03-07 17:12:47', '2023-03-07 10:12:56'),
(58, 'shirt 1', 1, '122.00', 12, 'shirt', '167819212937.jpg', '1', '2023-03-07 19:28:19', '2023-03-07 12:28:49');

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
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@itsolutionstuff.com', NULL, '$2y$10$uUbW0ql.GkZKhtf65a7ymeRQ6tPhxUmMID4JWqz0Pl47a1YwYmpKe', 1, NULL, '2023-02-14 07:15:08', '2023-02-14 07:15:08'),
(2, 'User', 'user@itsolutionstuff.com', NULL, '$2y$10$VQxt44DjDrBRJRB67v/QruwAYYjAV3XNThZACf3ADDsQPmr2hvR1.', 0, NULL, '2023-02-14 07:15:08', '2023-02-14 07:15:08'),
(3, 'Han', 'ad01@401.com', NULL, '$2y$10$wbkynfDQoi.Sggjx7T6a4eknxfGYAPhE/W4smcODwkpYycHQGqZbq', 1, NULL, '2023-02-15 05:05:38', '2023-02-15 05:05:38'),
(4, 'Hann', 'test@test.com', NULL, '$2y$10$dfYy.twtCGBbf5r8FHiihuY.oznnVn8gTopp2x/bxWoOpgv880mSG', 1, NULL, '2023-02-15 14:45:44', '2023-02-15 14:45:44'),
(5, 'Han', 'han@401.com', NULL, '$2y$10$4peZvy4aQcIvO/tGMESZ.Owa7W6c6cha9fDVVxmVybk478T1/i1SG', 0, NULL, '2023-02-16 19:29:49', '2023-02-16 19:29:49'),
(7, 'QQQ', 'ghjghjg@gm.vm', NULL, '$2y$10$rmzu7XAo02REkIvZw30Xa.CYWZvmipUrmJM/iyVsqWFGN3YlJXrsK', 0, NULL, '2023-02-17 20:31:50', '2023-02-17 20:31:50'),
(8, 'Han', 'admin2@mail.com', NULL, '$2y$10$5bdyZ6YU1ap9d96RaCa.tuuCMtuvzjCgS7CbcgPcJUtUz2M62opii', 1, NULL, '2023-03-07 00:29:38', '2023-03-07 00:29:38'),
(9, 'test111', 'tt@eee.com', NULL, '$2y$10$VLTFUvf47AtPfaUBDblumuUkDOT/RMtUTA3Yqz5hhkSN9yWhUyv1q', 1, NULL, '2023-03-07 00:31:44', '2023-03-07 00:31:44'),
(11, 'zxczxc', 'zxczxc@gm.vm', NULL, '$2y$10$G/1XgvAOqTl.04HOHLDwIepT7.aKQSuuo4yK62qxEHVG8Rb5T.kaO', 1, NULL, '2023-03-07 00:34:25', '2023-03-07 00:34:25'),
(12, 'lehan1997s@gmail.com', 'lehan1997s@gmail.com', NULL, '$2y$10$/7/hw6owNXIq2GC.NHza3.ih0gC7/ZsRRd5uf4AEIXlhgBrccgcgK', 0, NULL, '2023-03-07 12:32:35', '2023-03-07 12:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `visit_count`
--

CREATE TABLE `visit_count` (
  `ip` varchar(255) DEFAULT NULL,
  `sessionKey` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit_count`
--

INSERT INTO `visit_count` (`ip`, `sessionKey`, `created_at`, `updated_at`) VALUES
('127.0.0.1', NULL, '2023-03-05 07:21:30', '2023-03-05 07:21:30'),
('127.0.0.1', NULL, '2023-03-05 07:21:51', '2023-03-05 07:21:51'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:23:57', '2023-03-05 07:23:57'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:24:09', '2023-03-05 07:24:09'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:28:04', '2023-03-05 07:28:04'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:28:09', '2023-03-05 07:28:09'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:30:10', '2023-03-05 07:30:10'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:30:14', '2023-03-05 07:30:14'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:54:41', '2023-03-05 07:54:41'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 07:57:15', '2023-03-05 07:57:15'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 08:03:54', '2023-03-05 08:03:54'),
('127.0.0.1', 'wgqTC6EYOWjahOoprQE7bHVeG3MNKHoAJi3C3dVT', '2023-03-05 08:05:14', '2023-03-05 08:05:14'),
('127.0.0.1', 'kzwVpiYGQc3s8z9lVSvrFUzNPSlLyHGpS0W58Nnc', '2023-03-05 08:49:40', '2023-03-05 08:49:40'),
('127.0.0.1', 'kzwVpiYGQc3s8z9lVSvrFUzNPSlLyHGpS0W58Nnc', '2023-03-05 08:49:49', '2023-03-05 08:49:49'),
('127.0.0.1', 'pPzxS5JYWbOrr3CmBN5KJRsOKUnn42idjmEBbdq6', '2023-03-05 09:23:42', '2023-03-05 09:23:42'),
('127.0.0.1', 'avFFrhlBV8UQMSNBVlW9FsftQtzoEDFCxiAtmLdi', '2023-03-05 09:25:48', '2023-03-05 09:25:48'),
('127.0.0.1', '3xT97KOYf8aNoIaifgFxnvFCiDii1xcrAwxYy3lc', '2023-03-05 09:27:06', '2023-03-05 09:27:06'),
('127.0.0.1', 'VhJlwg33y5G2sKuspO4ZtIxkmoli5AX9CJZZWv4O', '2023-03-05 09:28:31', '2023-03-05 09:28:31'),
('127.0.0.1', 'cjzz5NDxwRK18AvOsLAVliBPxwbem1B9HvQMXNRy', '2023-03-05 09:40:39', '2023-03-05 09:40:39'),
('127.0.0.1', 'lHzrhyZJAqE4sGIXuFoEl9GmdyW4q0KkcczhwjOP', '2023-03-05 12:07:25', '2023-03-05 12:07:25'),
('127.0.0.1', 'hmDdS2w8xd5R43sCvPPWwhvOjxoIiXRejwbwB98Q', '2023-03-05 13:06:57', '2023-03-05 13:06:57'),
('127.0.0.1', 'R5UBieAet15CQd9C8fhWHdN8E7SmuWo5n1EDhLtV', '2023-03-05 13:07:59', '2023-03-05 13:07:59'),
('127.0.0.1', '0N3TaZT5ipEUdgr4ptad4y6GhRRuNlrxCNQ9ozF1', '2023-03-06 07:55:58', '2023-03-06 07:55:58'),
('127.0.0.1', 'C9m7o7lnOt90WCv5YhRpSxCPMDipHlpAabEQvQ9u', '2023-03-06 16:25:49', '2023-03-06 16:25:49'),
('29.122.66.114', 'dpvBWrmODQFuzqcdl7gVbv4lC8ni7XPM88k5AbED', '2022-02-23 03:08:34', NULL),
('196.98.234.251', 'I4fVn47UbooVpFw8ayJI4F5BNYk8r2qVdvY11WOc', '2022-02-20 10:47:20', NULL),
('40.184.201.68', 'icc1QBDWbhICQAvNR8hC7eB64Bj4LrnbPdmBuL4Z', '2022-02-28 16:41:38', NULL),
('159.122.68.111', '2kaoyD6L52bVGMQYRvsdvz6kCpjL3WfjpgId2LbJ', '2022-03-04 15:48:38', NULL),
('123.245.156.124', 'J7j5yHTXWC0DfcPwx8vLMB4gUuuQ4tuWNzMrhfbI', '2022-02-21 20:14:33', NULL),
('233.117.22.1', '7iwBrCcQnSM8j2K8tOulNRapa6raDO7jkM7qAu36', '2022-03-05 00:10:57', NULL),
('187.113.123.226', 'wi4bfxbXrLzP3MXfouKUWgUDHrqtYta0s2WIxSNj', '2022-03-05 22:41:32', NULL),
('218.166.228.233', 'EgAGjKX6vHiNxncbFoKxOrgIatxWdD8dKj3LbfQ6', '2022-02-20 15:56:00', NULL),
('208.58.91.126', '3bxluHt36EVIJhtQq5vpSPpW7okizDSUmeYjK01X', '2022-02-25 22:56:11', NULL),
('129.151.169.186', 'dnmSICgqocTg5aSLkzknnFkt99H5EbQJHuuwtaQK', '2022-03-03 13:47:10', NULL),
('102.195.189.31', 'Ih72EOB9iLRvbHfLAlAXROq9kY3U0xooXYv6zR7T', '2022-03-01 06:03:31', NULL),
('121.143.188.6', 'xNtXgnwT8NLhQQfpOgmpmNCyQz3fdm9eUB9bK9Se', '2022-03-04 12:44:18', NULL),
('171.214.175.103', 'M2OUm9fA1O7zYbJU7OvIKbQlsSG82CC1bSWj88rM', '2022-02-28 07:38:13', NULL),
('77.0.182.229', 'kI2Zea09QFtrnAMoZIdzr2NfynyDAmoBsJJe7U6j', '2022-02-27 17:16:34', NULL),
('186.193.251.175', 'aAFVrc8oFeYj5KhCqc0fo02kNeHs83IL2KfhUICo', '2022-02-23 04:56:24', NULL),
('153.117.194.235', 'fvsTYprIaIdPngiCfwJWZMRqufWvK0LtxytEbvl7', '2022-02-20 10:56:58', NULL),
('122.177.210.246', 'nNAbLnlhV670A1UY3V851QO0z4gYczW8XHJdEoCL', '2022-02-21 06:26:40', NULL),
('20.246.191.153', 'IKuBmVEXk8hC7AxW8TKu3YaymDJW0VjU3D1Vs4Rp', '2022-02-15 06:38:43', NULL),
('126.32.181.166', 'vm3vTtBQsNYcHVouLHmV8lvkMCy5DYCzr1SoSL0b', '2022-03-02 07:36:00', NULL),
('191.210.110.120', 'iHNHW54EH5gBOjYFh7U5Vp5gyqx7g1ncsIxLWloj', '2022-02-21 05:22:04', NULL),
('218.179.235.36', '1KfnivcqfaXTll6osyBP6XduWk8R40n39Ef7keeZ', '2023-02-27 07:28:50', NULL),
('249.175.46.106', 'RW3JIZgR5t8ayBgZ7ho1f9hhUzDHnyVlOfj4OcV7', '2023-02-22 07:35:58', NULL),
('111.21.247.216', 'SovWiweK4iqLl1umAQJnezbaJgovw8aTVp9XMPzt', '2023-02-23 15:20:42', NULL),
('71.60.156.59', 'RFfn7goBYh0Nrx1lQAH7z8qih9pyhVPyYfRfvWO0', '2023-03-05 22:17:29', NULL),
('178.167.210.93', 'ZTJKfBwQdwvWVujRXRwfFTE8pQkJ25wuXDiXZSBZ', '2023-03-06 12:38:19', NULL),
('235.241.103.102', '3jCwMx9V2RjknEksAmUK88iqWeEQKHBfAeB0fr6C', '2023-02-15 09:47:12', NULL),
('70.76.22.163', 'FA8ZYKxBw8X2Yauzg9RmiQeDSGD9IbmM3Wn7as0Q', '2023-02-19 07:38:53', NULL),
('188.212.10.190', 'sHO4pPpHdisoM0WZWxUlJ1kHqfzR6I4hnPB8FvlT', '2023-03-04 01:55:02', NULL),
('223.3.153.14', 'AAKZbpbLi7xHtdxhtN99SO90gDgx7xF5zjIBYt8U', '2023-02-20 19:20:30', NULL),
('214.252.253.119', 'nLS3OyBWZ4jllgHZQumevmnunZztky8g7WAvIVnz', '2023-02-18 06:19:47', NULL),
('33.151.203.20', '7z9dLCQeck6ooS6vT1BLPLvTiH06CQzZ35obBWlC', '2023-02-25 13:09:31', NULL),
('191.128.238.116', 'a1y54pRF5huUfkzmZFz18WNBAJiqCCrhrUxWMvxZ', '2023-03-02 19:18:12', NULL),
('31.193.198.130', '51trVthj7psFBkkXQVWVb3joYN9Jv1JGU0Nkm3qV', '2023-02-23 16:05:50', NULL),
('118.20.135.216', '8ydXGisBTBEKdQwr6QC3KJkJW6VOzDFEPXQpXE1I', '2023-03-05 01:52:57', NULL),
('218.238.56.60', 'fdnHOnqpNQ7RysxqFQBovRP7s3L1kFf67ibZ6hsY', '2023-03-02 15:25:27', NULL),
('150.21.159.148', 'QjprgA6RIB6g5sqryBhfW5pvrTtDiiTmQ33jYJ8i', '2023-03-01 07:04:42', NULL),
('156.198.11.8', 'QLsuoHpNU1gyzrsyQVmVc6ygT0DCTKxaaZhX3z2E', '2023-03-02 09:31:41', NULL),
('148.223.165.84', 'J28MF45PYvGoww7UKEDoHnicZVW02VXw1ZEulEmB', '2023-02-23 16:13:43', NULL),
('148.228.100.253', '7s4t1CU0p8WBmCifJSe8ZZPasAQM56AaYnqV3eaU', '2023-02-25 06:35:53', NULL),
('203.233.46.189', 'qyYKBCf9ZPz3z1730n5T2aE85OyGjZYnbrLs1rOk', '2023-02-26 03:51:05', NULL),
('127.0.0.1', 'xJzd5NEBZ2UtAb6zwFHvCEZB1SehI0Xyxg4Z2yj9', '2023-03-06 19:03:11', '2023-03-06 19:03:11'),
('127.0.0.1', 'X5FBXjDddzGFXtmysTR0acdBQVg2Og6yZ6U0DPzY', '2023-03-07 03:06:10', '2023-03-07 03:06:10'),
('127.0.0.1', 'E2s5PUHMBiJ56kgBKRUjzUKiKcm6KbdwfERR412J', '2023-03-07 03:06:30', '2023-03-07 03:06:30'),
('127.0.0.1', 'FwlDtvRzFryOYvgbEeQNuhx6jYEzxLdXBi4cn1Fx', '2023-03-07 03:27:12', '2023-03-07 03:27:12'),
('127.0.0.1', 'AW1gNUGOVwdtQ73RokMh5NPRBYpWNM7PEmdERyLZ', '2023-03-07 05:54:07', '2023-03-07 05:54:07'),
('127.0.0.1', 'GusomA6jDcn1Vf4iOLxJyUwfX7XkcewjwpcIvLwg', '2023-03-07 11:30:32', '2023-03-07 11:30:32'),
('127.0.0.1', 'MIwP4xrFkbK5b1Kqndmcu99EtMpRhPNdP05VfUsl', '2023-03-07 12:31:27', '2023-03-07 12:31:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_account` (`id`);


--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
