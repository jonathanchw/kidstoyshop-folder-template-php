-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2023 at 01:30 AM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steps` int NOT NULL DEFAULT '1',
  `content` json DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_step` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'checkout',
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'offer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `company_id`, `name`, `key`, `image`, `steps`, `content`, `active`, `created_at`, `updated_at`, `first_step`, `category`) VALUES
(1, 1, 'Touchbuds', 'touchbuds', NULL, 1, '[{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Touch Sound Buds\"}, {\"key\": \"logo\", \"type\": \"image\", \"label\": \"Logo\"}, {\"key\": \"top_banners\", \"type\": \"children\", \"label\": \"Top Banners\", \"children\": [{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Great products at an Affordable Price\"}, {\"key\": \"subtitle\", \"type\": \"text\", \"label\": \"Subtitle\", \"placeholder\": \"Order Now!\"}, {\"key\": \"image\", \"type\": \"image\", \"label\": \"Image\", \"caption\": \"1920x650\"}]}, {\"key\": \"home_subtitle\", \"type\": \"text\", \"label\": \"Home Subtitle\", \"placeholder\": \"Introducing the\"}, {\"key\": \"home_title\", \"type\": \"text\", \"label\": \"Home Title\", \"placeholder\": \"Touch Sound Buds Collection\"}, {\"key\": \"home_description\", \"type\": \"textarea\", \"label\": \"Home Description\", \"placeholder\": \"\"}, {\"key\": \"home_image\", \"type\": \"image\", \"label\": \"Home Image\", \"caption\": \"630x420\"}, {\"key\": \"color1\", \"type\": \"color\", \"label\": \"Color 1\"}, {\"key\": \"color2\", \"type\": \"color\", \"label\": \"Color 2\"}]', 1, NULL, NULL, 'checkout', 'page'),
(2, 1, 'Toys', 'toys', NULL, 1, '[{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Touch Sound Buds\"}, {\"key\": \"logo\", \"type\": \"image\", \"label\": \"Logo\"}, {\"key\": \"top_banner_title\", \"type\": \"text\", \"label\": \"Top banner title\", \"placeholder\": \"Welcome to toys\"}, {\"key\": \"top_banner_image\", \"type\": \"image\", \"label\": \"Top banner image\"}, {\"key\": \"top_banner_description\", \"type\": \"textarea\", \"label\": \"Top banner description\", \"placeholder\": \"Some great description about this website\"}, {\"key\": \"about_us_title\", \"type\": \"text\", \"label\": \"About us title\", \"placeholder\": \"About us\"}, {\"key\": \"about_us_image\", \"type\": \"image\", \"label\": \"About us\", \"caption\": \"450x320\"}, {\"key\": \"about_us_description\", \"type\": \"textarea\", \"label\": \"About us description\", \"placeholder\": \"Who we are and why we are great!\"}, {\"key\": \"benefits_key_title\", \"type\": \"text\", \"label\": \"Benefits key title\", \"placeholder\": \"Benefits key\"}, {\"key\": \"benefits_key_image\", \"type\": \"image\", \"label\": \"Benefits key image\", \"caption\": \"450x320\"}, {\"key\": \"benefits_key\", \"type\": \"children\", \"label\": \"Benefits key items\", \"children\": [{\"key\": \"benefits_key_strong\", \"type\": \"text\", \"label\": \"Benefits key item\", \"placeholder\": \"Captivating Variety\"}, {\"key\": \"benefits_key_description\", \"type\": \"text\", \"label\": \"Benefits key description\", \"placeholder\": \"Explore our captivating collection of toys, ranging from puzzles to...\"}]}, {\"key\": \"primary_color\", \"type\": \"color\", \"label\": \"Primary color\"}, {\"key\": \"secondary_color\", \"type\": \"color\", \"label\": \"Secondary color\"}, {\"key\": \"accent_color\", \"type\": \"color\", \"label\": \"Accent color\"}, {\"key\": \"text_color\", \"type\": \"color\", \"label\": \"Text color\"}, {\"key\": \"background_color\", \"type\": \"color\", \"label\": \"Background color\"}]', 1, NULL, NULL, 'checkout', 'page'),
(3, 1, 'Gadgetstore', 'gadgetstore', NULL, 1, '[{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Touch Sound Buds\"}, {\"key\": \"store_name\", \"type\": \"text\", \"label\": \"Store name\", \"placeholder\": \"Gadget Store\"}, {\"key\": \"top_banner_title\", \"type\": \"text\", \"label\": \"Top banner title\", \"placeholder\": \"Explore Our Selection Of High-quality\"}, {\"key\": \"top_banner_image\", \"type\": \"image\", \"label\": \"Top banner image\"}, {\"key\": \"top_banner_description\", \"type\": \"textarea\", \"label\": \"Top banner description\", \"placeholder\": \"Some great description about this website\"}, {\"key\": \"about_us_title\", \"type\": \"text\", \"label\": \"About us title\", \"placeholder\": \"Welcome to our online store!\"}, {\"key\": \"about_us_description\", \"type\": \"textarea\", \"label\": \"About us description\", \"placeholder\": \"Who we are and why we are great!\"}, {\"key\": \"about_us_image\", \"type\": \"image\", \"label\": \"About us\"}, {\"key\": \"about_us_background\", \"type\": \"image\", \"label\": \"About us background\"}, {\"key\": \"benefits_key_title\", \"type\": \"text\", \"label\": \"Benefits key title\", \"placeholder\": \"Benefits key\"}, {\"key\": \"benefits_key_image\", \"type\": \"image\", \"label\": \"Benefits key image\", \"caption\": \"450x320\"}, {\"key\": \"benefits_key\", \"type\": \"children\", \"label\": \"Benefits key items\", \"children\": [{\"key\": \"benefits_key_bullet\", \"type\": \"text\", \"label\": \"Benefits key item\", \"placeholder\": \"Captivating Variety\"}]}, {\"key\": \"primary_color\", \"type\": \"color\", \"label\": \"Primary color\", \"caption\": \"Buttons, etc\"}, {\"key\": \"secondary_color\", \"type\": \"color\", \"label\": \"Secondary color\", \"caption\": \"Navbar, subtitles, etc\"}, {\"key\": \"background_color\", \"type\": \"color\", \"label\": \"Background color\", \"caption\": \"Background of whole document\"}, {\"key\": \"text_color\", \"type\": \"color\", \"label\": \"Text color\", \"caption\": \"Titles and paragraphs\"}, {\"key\": \"header_color\", \"type\": \"color\", \"label\": \"Header color\", \"caption\": \"Top banner and breadcumbs header\"}]', 1, NULL, NULL, 'checkout', 'page'),
(14, 1, 'Smartbulb', 'smartbulb', NULL, 1, '[{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Touch Sound Buds\"}, {\"key\": \"store_name\", \"type\": \"text\", \"label\": \"Store name\", \"placeholder\": \"Gadget Store\"}, {\"key\": \"top_banner_title\", \"type\": \"text\", \"label\": \"Top banner title\", \"placeholder\": \"Explore Our Selection Of High-quality\"}, {\"key\": \"top_banner_subtitle\", \"type\": \"text\", \"label\": \"Top banner subtitle\", \"placeholder\": \"enjoy our discounts\"}, {\"key\": \"top_banner_image\", \"type\": \"image\", \"label\": \"Top banner image\"}, {\"key\": \"top_banner_description\", \"type\": \"textarea\", \"label\": \"Top banner description\", \"placeholder\": \"Some great description about this website\"}, {\"key\": \"welcome_description\", \"type\": \"textarea\", \"label\": \"Welcome_description\", \"placeholder\": \"Welcome the user in one paragrahp\"}, {\"key\": \"about_us_title\", \"type\": \"text\", \"label\": \"About us title\", \"placeholder\": \"Welcome to our online store!\"}, {\"key\": \"about_us_description\", \"type\": \"textarea\", \"label\": \"About us description\", \"placeholder\": \"Who we are and why we are great!\"}, {\"key\": \"about_us_image\", \"type\": \"image\", \"label\": \"About us\"}, {\"key\": \"benefits_key_background_image\", \"type\": \"image\", \"label\": \"Benefits key background image\"}, {\"key\": \"benefits_key_title\", \"type\": \"text\", \"label\": \"Benefits key title\", \"placeholder\": \"Benefits key\"}, {\"key\": \"benefits_key\", \"type\": \"children\", \"label\": \"Benefits key items\", \"children\": [{\"key\": \"benefits_key_bullet\", \"type\": \"text\", \"label\": \"Benefits key item\", \"placeholder\": \"Captivating Variety\"}]}, {\"key\": \"primary_color\", \"type\": \"color\", \"label\": \"Primary color\", \"caption\": \"Buttons, etc\"}, {\"key\": \"background_color\", \"type\": \"color\", \"label\": \"Background color\", \"caption\": \"Background of html whole document\"}, {\"key\": \"text_color\", \"type\": \"color\", \"label\": \"Text color\", \"caption\": \"Titles and paragraphs\"}, {\"key\": \"footer_color\", \"type\": \"color\", \"label\": \"Footer color\", \"caption\": \"Footer color\"}]', 1, NULL, NULL, 'checkout', 'page'),
(24, 1, 'Smartbulb', '', NULL, 1, NULL, 1, '2023-11-15 21:54:09', '2023-11-15 21:54:09', 'checkout', 'offer'),
(25, 1, 'Kids toy Shop', 'kidstoyshop', NULL, 1, '[{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Touch Sound Buds\"}, {\"key\": \"store_name\", \"type\": \"text\", \"label\": \"Store name\", \"placeholder\": \"Gadget Store\"}, {\"key\": \"top_banner_title\", \"type\": \"text\", \"label\": \"Top banner title\", \"placeholder\": \"Explore Our Selection Of High-quality\"}, {\"key\": \"top_banner_subtitle\", \"type\": \"text\", \"label\": \"Top banner subtitle\", \"placeholder\": \"enjoy our discounts\"}, {\"key\": \"top_banner_image\", \"type\": \"image\", \"label\": \"Top banner image\"}, {\"key\": \"top_banner_description\", \"type\": \"textarea\", \"label\": \"Top banner description\", \"placeholder\": \"Some great description about this website\"}, {\"key\": \"welcome_banner_title\", \"type\": \"text\", \"label\": \"Welcome banner title\", \"placeholder\": \"Welcome To Our Store\"}, {\"key\": \"welcome_description\", \"type\": \"textarea\", \"label\": \"Welcome_description\", \"placeholder\": \"Welcome the user in one paragrahp\"}, {\"key\": \"welcome_banner_image\", \"type\": \"image\", \"label\": \"Welcome banner image\"}, {\"key\": \"about_us_title\", \"type\": \"text\", \"label\": \"About us title\", \"placeholder\": \"Welcome to our online store!\"}, {\"key\": \"about_us_description\", \"type\": \"textarea\", \"label\": \"About us description\", \"placeholder\": \"Who we are and why we are great!\"}, {\"key\": \"about_us_image\", \"type\": \"image\", \"label\": \"About us\"}, {\"key\": \"benefits_key_background_image\", \"type\": \"image\", \"label\": \"Benefits key background image\"}, {\"key\": \"benefits_key_title\", \"type\": \"text\", \"label\": \"Benefits key title\", \"placeholder\": \"Benefits key\"}, {\"key\": \"benefits_key\", \"type\": \"children\", \"label\": \"Benefits key items\", \"children\": [{\"key\": \"benefits_key_bullet\", \"type\": \"text\", \"label\": \"Benefits key item\", \"placeholder\": \"Captivating Variety\"}]}, {\"key\": \"primary_color\", \"type\": \"color\", \"label\": \"Primary color\", \"caption\": \"Buttons, etc\"}, {\"key\": \"background_color\", \"type\": \"color\", \"label\": \"Background color\", \"caption\": \"Background of html whole document\"}, {\"key\": \"text_color\", \"type\": \"color\", \"label\": \"Text color\", \"caption\": \"Titles and paragraphs\"}, {\"key\": \"footer_color\", \"type\": \"color\", \"label\": \"Footer color\", \"caption\": \"Footer color\"}]', 1, NULL, NULL, 'checkout', 'page'),
(26, 1, 'Fit Rider Toy & Joy Store', 'fit-rider-toy-and-joy-store', NULL, 1, '[{\"key\": \"title\", \"type\": \"text\", \"label\": \"Title\", \"placeholder\": \"Touch Sound Buds\"}, {\"key\": \"store_name\", \"type\": \"text\", \"label\": \"Store name\", \"placeholder\": \"Gadget Store\"}, {\"key\": \"top_banner_title\", \"type\": \"text\", \"label\": \"Top banner title\", \"placeholder\": \"Explore Our Selection Of High-quality\"}, {\"key\": \"top_banner_subtitle\", \"type\": \"text\", \"label\": \"Top banner subtitle\", \"placeholder\": \"enjoy our discounts\"}, {\"key\": \"top_banner_image\", \"type\": \"image\", \"label\": \"Top banner image\"}, {\"key\": \"top_banner_description\", \"type\": \"textarea\", \"label\": \"Top banner description\", \"placeholder\": \"Some great description about this website\"}, {\"key\": \"welcome_banner_title\", \"type\": \"text\", \"label\": \"Welcome banner title\", \"placeholder\": \"Welcome To Our Store\"}, {\"key\": \"welcome_description\", \"type\": \"textarea\", \"label\": \"Welcome_description\", \"placeholder\": \"Welcome the user in one paragrahp\"}, {\"key\": \"welcome_banner_image\", \"type\": \"image\", \"label\": \"Welcome banner image\"}, {\"key\": \"about_us_title\", \"type\": \"text\", \"label\": \"About us title\", \"placeholder\": \"Welcome to our online store!\"}, {\"key\": \"about_us_description\", \"type\": \"textarea\", \"label\": \"About us description\", \"placeholder\": \"Who we are and why we are great!\"}, {\"key\": \"about_us_image\", \"type\": \"image\", \"label\": \"About us\"}, {\"key\": \"benefits_key_background_image\", \"type\": \"image\", \"label\": \"Benefits key background image\"}, {\"key\": \"benefits_key_title\", \"type\": \"text\", \"label\": \"Benefits key title\", \"placeholder\": \"Benefits key\"}, {\"key\": \"benefits_key\", \"type\": \"children\", \"label\": \"Benefits key items\", \"children\": [{\"key\": \"benefits_key_bullet\", \"type\": \"text\", \"label\": \"Benefits key item\", \"placeholder\": \"Captivating Variety\"}]}, {\"key\": \"primary_color\", \"type\": \"color\", \"label\": \"Primary color\", \"caption\": \"Buttons, etc\"}, {\"key\": \"background_color\", \"type\": \"color\", \"label\": \"Background color\", \"caption\": \"Background of html whole document\"}, {\"key\": \"text_color\", \"type\": \"color\", \"label\": \"Text color\", \"caption\": \"Titles and paragraphs\"}, {\"key\": \"footer_color\", \"type\": \"color\", \"label\": \"Footer color\", \"caption\": \"Footer color\"}]', 1, NULL, NULL, 'checkout', 'page');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `templates_company_id_foreign` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `templates_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
