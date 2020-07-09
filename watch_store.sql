-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 09, 2020 lúc 06:50 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `watch_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_02_110922_add_soft_delete_to_users', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(10) NOT NULL,
  `thumbnail` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `content`, `price`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'orient', 'orient-FAC0A005T0', '', 6810000, 'orient-FAC0A005T0.jpg', NULL, '2020-07-05 19:57:20', NULL),
(2, 'orient', 'orient-FAG03001D0', '', 7990000, 'orient-FAG03001D0.jpg', NULL, '2020-07-05 19:57:20', NULL),
(3, 'casio', 'orient-FAG02003W0', '', 6260000, 'orient-FAG02003W0.jpg', NULL, '2020-07-05 19:57:20', NULL),
(4, 'tissot', 'ORIENT RA-AP0003S10B', '', 6900000, 'orient-RA-AP0003S10B.jpg', NULL, '2020-07-05 19:57:20', NULL),
(21, 'Tissot', 'NEWMEN F580', 'Lấy cảm hứng từ vẻ đẹp cổ điển ở các tạp chí thời trang thuộc những năm 1930 – 1950, những mẫu thiết kế đồng hồ tinh tế đầy nét hoài cổ đã được đông đảo người dùng đón nhận. Không phải là xưa cũ, giá trị mà Fossil chọn để tạo dựng thương hiệu cho mình chính là sự vững chắc. Từ những thiết kế “retro” cho đồng hồ, họ tin rằng những sản phẩm “thời gian” đó sẽ không bao giờ có dấu hiệu thoái trào. Nói một cách đơn giản, đó là lời cam kết giữa thiết kế trường tồn và chất lượng bền bỉ.', 1790000, 'Fossil-FS5580.png', '2020-07-08 07:25:48', '2020-07-08 08:21:38', NULL),
(22, 'Casio', 'dfdfs', 'sadsadsa', 379000, 'orient-FAG03001D0.jpg', '2020-07-08 08:13:47', '2020-07-08 08:13:57', '2020-07-08 08:13:57'),
(23, 'Orient', 'Thành Nguyễn', 'Lấy cảm hứng từ vẻ đẹp cổ điển ở các tạp chí thời trang thuộc những năm 1930 – 1950, những mẫu thiết kế đồng hồ tinh tế đầy nét hoài cổ đã được đông đảo người dùng đón nhận. Không phải là xưa cũ, giá trị mà Fossil chọn để tạo dựng thương hiệu cho mình chính là sự vững chắc. Từ những thiết kế “retro” cho đồng hồ, họ tin rằng những sản phẩm “thời gian” đó sẽ không bao giờ có dấu hiệu thoái trào. Nói một cách đơn giản, đó là lời cam kết giữa thiết kế trường tồn và chất lượng bền bỉ.\r\n\r\nLấy cảm hứng từ vẻ đẹp cổ điển ở các tạp chí thời trang thuộc những năm 1930 – 1950, những mẫu thiết kế đồng hồ tinh tế đầy nét hoài cổ đã được đông đảo người dùng đón nhận. Không phải là xưa cũ, giá trị mà Fossil chọn để tạo dựng thương hiệu cho mình chính là sự vững chắc. Từ những thiết kế “retro” cho đồng hồ, họ tin rằng những sản phẩm “thời gian” đó sẽ không bao giờ có dấu hiệu thoái trào. Nói một cách đơn giản, đó là lời cam kết giữa thiết kế trường tồn và chất lượng bền bỉ.\r\n\r\nLấy cảm hứng từ vẻ đẹp cổ điển ở các tạp chí thời trang thuộc những năm 1930 – 1950, những mẫu thiết kế đồng hồ tinh tế đầy nét hoài cổ đã được đông đảo người dùng đón nhận. Không phải là xưa cũ, giá trị mà Fossil chọn để tạo dựng thương hiệu cho mình chính là sự vững chắc. Từ những thiết kế “retro” cho đồng hồ, họ tin rằng những sản phẩm “thời gian” đó sẽ không bao giờ có dấu hiệu thoái trào. Nói một cách đơn giản, đó là lời cam kết giữa thiết kế trường tồn và chất lượng bền bỉ.\r\n\r\nLấy cảm hứng từ vẻ đẹp cổ điển ở các tạp chí thời trang thuộc những năm 1930 – 1950, những mẫu thiết kế đồng hồ tinh tế đầy nét hoài cổ đã được đông đảo người dùng đón nhận. Không phải là xưa cũ, giá trị mà Fossil chọn để tạo dựng thương hiệu cho mình chính là sự vững chắc. Từ những thiết kế “retro” cho đồng hồ, họ tin rằng những sản phẩm “thời gian” đó sẽ không bao giờ có dấu hiệu thoái trào. Nói một cách đơn giản, đó là lời cam kết giữa thiết kế trường tồn và chất lượng bền bỉ.', 379000, 'orient-FEV0V003DH.jpg', '2020-07-08 09:13:38', '2020-07-08 09:17:32', '2020-07-08 09:17:32'),
(24, 'Obaku', 'Obaku V130LCIRB', 'Đồng hồ Obaku có được tỉ lệ vàng là bởi vì được sáng lập bởi 2 kiến trúc sư đại tài cách đây 50 năm. Cũng vì có mắt thẩm mỹ cao và sự tài tình, tỉ mỉ của họ mà những chiếc đồng hồ Obaku luôn luôn được đánh giá rất cao. Vẻ đẹp luôn luôn khiến người khác phải ấn tượng khi tận mắt nhìn thấy chiếc đồng hồ này và càng làm tôn lên vẻ đẹp của người sử dụng.', 3144000, 'Obaku-V130LCIRB.png', '2020-07-08 21:38:54', '2020-07-08 21:38:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lưu Chương', 'luubi@gmail.com', NULL, '$2y$10$Fqy5zIX8X2mxoIqYfHTwu.uhcq3YUW6oRNPc.Wgyq6H5X0jnB1DM2', NULL, '2020-07-03 00:42:41', '2020-07-06 07:12:00', NULL),
(3, 'Quan Vũ', 'quanvu@gmail.com', NULL, '$2y$10$mVffROPnzx7uEfB7BWt.AeuAn/G86l6oYitMTDtLjq9fjvRUlRzQy', NULL, '2020-07-03 04:00:45', '2020-07-05 08:04:32', NULL),
(4, 'Trương Phi', 'truongphi@gmail.com', NULL, '$2y$10$BMm1jDWLnWKyMSsDgXtVluGwxHqtWoPRkBRmp.KZwvSh5bs5Y2v0K', NULL, '2020-07-05 07:42:57', '2020-07-05 08:04:32', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
