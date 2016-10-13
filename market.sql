-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 09:10 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Rau - Củ - Quả', 'rau-cu-qua', 'vegetable.jpg', '2016-10-11 04:14:11', '2016-10-10 20:20:41'),
(2, 'Thịt & Cá', 'thit-ca', 'meat.jpg', '2016-10-11 04:21:39', '2016-10-10 20:20:41'),
(3, 'Hoa Tươi', 'hoa-tuoi', 'vegetable.jpg', '2016-10-11 04:22:54', '2016-10-10 20:20:41'),
(4, 'Đồ Ăn Sáng', 'do-an-sang', '', '2016-10-11 03:20:41', '2016-10-10 20:20:41'),
(5, 'Mua theo món', 'mua-theo-mon', 'meat.jpg', '2016-10-11 04:23:14', '2016-10-10 20:20:41'),
(6, 'Đồ Ăn Sáng', 'do-an-sang', 'meat.jpg', '2016-10-11 03:20:41', '2016-10-10 20:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(255) NOT NULL,
  `tloai_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weigh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tloai_id`, `name`, `slug`, `price`, `weigh`, `img`, `created_at`, `updated_at`) VALUES
(2, 1, 'Rau muống', 'rau-muong', '3000', '1', 'product.jpg', '2016-10-12 19:25:25', '2016-10-12 19:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(255) NOT NULL,
  `dmuc_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `dmuc_id`, `name`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rau Xanh', 'rau-xanh', 'rauxanh.jpg', '2016-10-11 06:30:32', '2016-10-10 20:28:32'),
(2, 1, 'Củ Quả', 'cu-qua', 'cuqua.jpg', '2016-10-11 06:30:42', '2016-10-10 20:28:32'),
(3, 1, 'Rau sống', 'rau-song', 'rausong.jpg', '2016-10-11 06:30:50', '2016-10-10 20:28:32'),
(4, 1, 'Rau thơm', 'rau-thom', 'rauthom.jpg', '2016-10-11 06:30:59', '2016-10-10 20:28:32'),
(5, 2, 'Thịt Lợn', 'thit-lon', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(6, 2, 'Thịt Bò', 'thit-bo', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(7, 2, 'Thủy Hải Sản', 'thuy-hai-san', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(8, 2, 'Thực phẩm khác', 'thuc-pham-khac', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(9, 3, 'Hoa Lễ', 'hoa-le', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(10, 3, 'Hoa cắm', 'hoa-cam', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(11, 3, 'Giỏ Hoa', 'gio-hoa', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(12, 4, 'Bánh Trái', 'banh-trai', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32'),
(13, 4, 'Bún Phở', 'bun-pho', '', '2016-10-11 03:28:32', '2016-10-10 20:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
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
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
