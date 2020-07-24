-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 24, 2020 lúc 06:24 PM
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
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Ngày đẹp tháng 7', 'banner 1.png', '2020-07-24 04:06:11', '2020-07-24 04:06:11'),
(3, 'Sale 50% đồng hồ thời trang', 'banner 3.png', '2020-07-24 04:20:29', '2020-07-24 04:20:29'),
(4, 'Đồng hồ độc quyền', 'banner 2.png', '2020-07-24 04:40:54', '2020-07-24 04:40:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `thumbnail`, `created_at`, `updated_at`) VALUES
(8, 'Fossil', 'fossil-logo.png', '2020-07-23 04:24:53', '2020-07-23 04:24:53'),
(9, 'Casio', 'casio-logo.jpg', '2020-07-23 04:38:20', '2020-07-23 04:38:20'),
(10, 'Orient', 'orient-logo.png', '2020-07-23 04:39:53', '2020-07-23 04:39:53'),
(11, 'Obaku', 'obaku-logo.png', '2020-07-23 04:41:10', '2020-07-23 04:41:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 44, 'sdas', 'dsadasdsa', '2020-07-24 11:02:31', '2020-07-24 11:02:31'),
(2, 27, 'Hoàng Mai', 'Đồng hồ gọn nhẹ, tinh xảo', '2020-07-24 11:09:40', '2020-07-24 11:09:40'),
(3, 42, 'Lê Văn Đạt', 'Đồng hồ đơn giản, nam tính, 2 màu đỏ đen tạo sự bí ẩn', '2020-07-24 11:10:59', '2020-07-24 11:10:59'),
(4, 43, 'Lê Thị Oanh', 'đồng hồ dành cho các quý bà sang trọng, đeo lên làm nổi bật hẳn', '2020-07-24 11:13:04', '2020-07-24 11:13:04'),
(5, 26, 'fdsfsd', 'cxvxcvxc', '2020-07-24 11:13:27', '2020-07-24 11:13:27'),
(6, 26, 'dsfdsfdsf', 'vcvxcvxcv', '2020-07-24 11:13:33', '2020-07-24 11:13:33'),
(7, 26, 'Hoàng Trung Thông', 'Giá cả phải chăng', '2020-07-24 11:14:03', '2020-07-24 11:14:03'),
(8, 26, 'Lê ngọc Phượng', 'Mình vừa mua cho chồng mình chiếc này, ảnh rất thích', '2020-07-24 11:14:55', '2020-07-24 11:14:55'),
(9, 26, 'Đặng Hoàng Sáng', 'Đồng hồ tốt nhưng giá hơi chát', '2020-07-24 11:16:11', '2020-07-24 11:16:11'),
(10, 26, 'Huỳnh Đức Trân', 'Quá rẻ, quá đẹp, quá chất', '2020-07-24 11:16:49', '2020-07-24 11:16:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Nam','Nữ') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `address`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(29, 'Đào Thùy Linh', 'Nữ', 'linhdao@gmail.com', '77 hàng đào', '015645666', 'nhận hàng trong 40 ngày nữa', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(30, 'Trần Thị Kim Thoa', 'Nữ', 'kimthoa@gmail.com', '102 Mã Mây, phường Hàng Buồm, quận Hoàn Kiếm, Hà Nội', '0357892475', 'Giao hàng kín, chỉ nhận hàng buổi chiều,', '2020-07-21 09:08:30', '2020-07-21 09:08:30');

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
(4, '2020_07_02_110922_add_soft_delete_to_users', 1),
(6, '2020_07_11_133604_create_customers_table', 2),
(7, '2020_07_13_105948_create_orders_table', 2),
(8, '2020_07_20_154808_create_orders_table', 3),
(9, '2020_07_22_211733_create_brands_table', 4),
(10, '2020_07_24_104545_create_banners_table', 5),
(11, '2020_07_24_145539_create_comments_table', 6),
(12, '2020_07_24_172719_add_product_id_to_comments', 7),
(13, '2020_07_24_173141_add_product_id_to_comments', 8),
(14, '2020_07_24_175539_create_comments_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product_name`, `product_qty`, `product_price`, `product_thumbnail`, `created_at`, `updated_at`) VALUES
(7, 29, 'Obaku V219GXBIRZ', 3, 4157000, 'Obaku V219GXBIRZ.png', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(8, 29, 'Obaku V146LGIRR', 4, 2451000, 'Obaku V146LGIRR.png', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(9, 29, 'Fossil FS5305', 2, 2631000, 'Fossil FS5305.png', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(10, 29, 'Fossil ES4722', 1, 2146000, 'Fossil ES4722.png', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(11, 29, 'Fossil ES3546', 1, 4576000, 'Fossil ES3546.png', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(12, 29, 'Casio LA680WEGB', 8, 1790000, 'Casio LA680WEGB.png', '2020-07-20 11:25:14', '2020-07-20 11:25:14'),
(13, 30, 'Obaku V219GXBIRZ', 4, 4157000, 'Obaku V219GXBIRZ.png', '2020-07-21 09:08:30', '2020-07-21 09:08:30'),
(14, 30, 'Fossil ES4722', 1, 2146000, 'Fossil ES4722.png', '2020-07-21 09:08:30', '2020-07-21 09:08:30'),
(15, 30, 'Fossil ES3546', 3, 4576000, 'Fossil ES3546.png', '2020-07-21 09:08:30', '2020-07-21 09:08:30'),
(16, 30, 'Casio LA680WEGB', 2, 1790000, 'Casio LA680WEGB.png', '2020-07-21 09:08:30', '2020-07-21 09:08:30');

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
  `content` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `price` int(10) NOT NULL,
  `thumbnail` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'Còn hàng',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `content`, `price`, `thumbnail`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, 'Obaku', 'Obaku V130LCIRB', '<p>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</p>', 3469000, 'Obaku-V130LCIRB.png', 'Hết hàng', '2020-07-08 21:38:54', '2020-07-23 15:09:37', NULL),
(25, 'Casio', 'Casio MTP-1335D-9AVDF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 1090000, 'Casio MTP-1335D-9AVDF.png', 'Hết hàng', '2020-07-10 14:01:21', '2020-07-22 15:21:03', NULL),
(26, 'Casio', 'Casio MTP-X300L-1AVDF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 1936000, 'Casio MTP-X300L-1AVDF.png', 'Còn hàng', '2020-07-10 14:05:39', '2020-07-22 15:58:18', NULL),
(27, 'Casio', 'Casio LTP-E143DBL-3ADR', '<p><span style=\"background-color: #ced4d9;\"><em><strong>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</strong></em></span></p>', 1480000, 'Casio LTP-E143DBL-3ADR.png', 'Còn hàng', '2020-07-10 14:08:03', '2020-07-14 14:42:06', NULL),
(28, 'Orient', 'Orient RA-AA0C06E19B', '<p><em><strong><span style=\"color: #3598db;\">Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</span></strong></em></p>', 2413000, 'orient-FAC0A005T0.jpg', 'Còn hàng', '2020-07-10 14:10:07', '2020-07-18 02:13:39', NULL),
(29, 'Casio', 'Casio LA680WEGB', 'Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản không ngừng cải tiến và cho ra mắt những dòng sản phẩm chất lượng phù hợp với nhiều đối tượng khách hàng. Những dòng sản phẩm nổi tiếng của Casio là: G-Shock với thiết kế mạnh mẽ cùng độ bền cao, Edifice thiết kế hiện đại cùng nhiều tính năng vượt trội, Sheen với thiết kế cổ điển và sang trọng,…', 1790000, 'Casio LA680WEGB.png', 'Còn hàng', '2020-07-10 14:48:30', '2020-07-10 14:48:30', NULL),
(33, 'Fossil', 'Fossil', '<p>dfdssssssssssssbvccccccccbvcbcvbfdg</p>', 6780000, 'orient-FKU00006W0.jpg', 'Còn hàng', '2020-07-17 15:09:53', '2020-07-18 02:04:35', '2020-07-18 02:04:35'),
(34, 'Orient', 'orient-FAG02003W0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 5679000, 'orient-FAG02003W0.jpg', 'Còn hàng', '2020-07-18 02:32:14', '2020-07-18 02:32:14', NULL),
(35, 'Orient', 'orient-FEV0V003DH', '<p><strong>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</strong></p>', 4558700, 'orient-FEV0V003DH.jpg', 'Còn hàng', '2020-07-18 02:33:24', '2020-07-18 02:33:24', NULL),
(36, 'Orient', 'orient-FAG03001D0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 1450000, 'orient-FAG03001D0.jpg', 'Còn hàng', '2020-07-18 02:34:10', '2020-07-18 02:34:10', NULL),
(37, 'Orient', 'orient-RA-AP0003S10B', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 5630000, 'orient-RA-AP0003S10B.jpg', 'Còn hàng', '2020-07-18 02:36:50', '2020-07-18 02:36:50', NULL),
(38, 'Fossil', 'Fossil ES3546', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 4576000, 'Fossil ES3546.png', 'Còn hàng', '2020-07-18 09:55:17', '2020-07-18 09:55:17', NULL),
(39, 'Fossil', 'Fossil ES4594', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 1957000, 'Fossil ES4594.png', 'Còn hàng', '2020-07-18 10:00:50', '2020-07-18 10:00:50', NULL),
(40, 'Fossil', 'Fossil ES4722', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 2146000, 'Fossil ES4722.png', 'Còn hàng', '2020-07-18 10:01:26', '2020-07-18 10:01:26', NULL),
(41, 'Fossil', 'Fossil ES4727', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 2346000, 'Fossil ES4727.png', 'Còn hàng', '2020-07-18 10:01:56', '2020-07-18 10:01:56', NULL),
(42, 'Fossil', 'Fossil FS5305', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 2631000, 'Fossil FS5305.png', 'Còn hàng', '2020-07-18 10:02:24', '2020-07-18 10:02:24', NULL),
(43, 'Obaku', 'Obaku V146LGBMG2', '<p><strong>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</strong></p>', 3451000, 'Obaku V146LGBMG2.png', 'Còn hàng', '2020-07-18 10:06:35', '2020-07-18 10:06:35', NULL),
(44, 'Obaku', 'Obaku V146LGIRR', '<p><strong>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</strong></p>', 2451000, 'Obaku V146LGIRR.png', 'Còn hàng', '2020-07-18 10:07:17', '2020-07-18 10:07:17', NULL),
(45, 'Obaku', 'Obaku V219GXBIRZ', '<p>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</p>', 4157000, 'Obaku V219GXBIRZ.png', 'Còn hàng', '2020-07-18 10:07:58', '2020-07-18 10:07:58', NULL),
(46, 'Fossil', 'fdfgfdgdfg', '<p>vxnbnvdfgưeqửewvcbvcn</p>', 4589000, 'Fossil ME3179.png', 'Hết hàng', '2020-07-23 01:57:27', '2020-07-23 01:58:34', '2020-07-23 01:58:34'),
(47, 'Orient', 'ddsgsgds', '<p>gfdgfdgfd</p>', 3456574, 'Fossil ES4594.png', 'Còn hàng', '2020-07-23 02:17:32', '2020-07-23 02:17:47', '2020-07-23 02:17:47');

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
(5, 'Thành Nguyễn', 'thanhnv.hn110@gmail.com', NULL, '$2y$10$ounyvLVjUzL3nUf6ERvoZuz1mVdiQaDf.z4.87uNuiraQXKSnjnLq', 'tlxgha9oqWU1fuXdhXw9bQ9v1pyKlo1BJg0cMc421IfMELiwxMgf8eV4p0j8', '2020-07-15 02:16:17', '2020-07-15 02:16:17', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

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
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
