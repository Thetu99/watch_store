-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 28, 2020 lúc 08:06 PM
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
(4, 'Đồng hồ độc quyền', 'banner 2.png', '2020-07-24 04:40:54', '2020-07-24 04:40:54'),
(7, 'Lễ hội đồng hồ', 'banner 4.png', '2020-07-27 08:49:12', '2020-07-27 08:49:12');

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
  `id` int(11) UNSIGNED NOT NULL,
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
(2, 27, 'Hoàng Mai', 'Đồng hồ gọn nhẹ, tinh xảo', '2020-07-24 11:09:40', '2020-07-24 11:09:40'),
(3, 42, 'Lê Văn Đạt', 'Đồng hồ đơn giản, nam tính, 2 màu đỏ đen tạo sự bí ẩn', '2020-07-24 11:10:59', '2020-07-24 11:10:59'),
(4, 43, 'Lê Thị Oanh', 'đồng hồ dành cho các quý bà sang trọng, đeo lên làm nổi bật hẳn', '2020-07-24 11:13:04', '2020-07-24 11:13:04'),
(7, 26, 'Hoàng Trung Thông', 'Giá cả phải chăng', '2020-07-24 11:14:03', '2020-07-24 11:14:03'),
(8, 26, 'Lê ngọc Phượng', 'Mình vừa mua cho chồng mình chiếc này, ảnh rất thích', '2020-07-24 11:14:55', '2020-07-24 11:14:55'),
(9, 26, 'Đặng Hoàng Sáng', 'Đồng hồ tốt nhưng giá hơi chát', '2020-07-24 11:16:11', '2020-07-24 11:16:11'),
(10, 26, 'Huỳnh Đức Trân', 'Quá rẻ, quá đẹp, quá chất', '2020-07-24 11:16:49', '2020-07-24 11:16:49'),
(11, 26, 'Ngọc Phong', 'Hàng đẹp chất lượng, lần sau sẽ còn quay lại', '2020-07-25 05:15:27', '2020-07-25 05:15:27'),
(12, 26, 'Lê Minh Tuấn', 'mua ủng hộ shop 2 chiếc, cảm nhận ban đầu rất tuyệt', '2020-07-25 05:17:17', '2020-07-25 05:17:17'),
(13, 44, 'ngoc anh pham', 'chất lượng đồng hồ tương xứng vs giá tiền, quá tuyệt vời', '2020-07-25 05:21:29', '2020-07-25 05:21:29'),
(14, 24, 'Cong Danh Do', 'Bao h có hàng vậy shop?', '2020-07-25 09:42:56', '2020-07-25 09:42:56'),
(15, 41, 'Lê Bích Hằng', 'đồng hồ này đẹp quá shop ơi, bao h có hàng tiếp ạ?', '2020-07-25 09:48:08', '2020-07-25 09:48:08'),
(16, 42, 'Trần Minh Hoàng', 'rất đáng mua, rất đáng tiền', '2020-07-25 16:14:19', '2020-07-25 16:14:19'),
(17, 45, 'sdgds', 'dgdsg', '2020-07-26 04:18:59', '2020-07-26 04:18:59'),
(18, 40, 'phan anh nguyen', 'very good', '2020-07-26 07:30:46', '2020-07-26 07:30:46'),
(20, 26, 'dfsdfds', 'aaaaaa aaaaaaaa aaaaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaaa aaaaaaaaaa aaaaaaaaaa aaaaaaa aaaa', '2020-07-28 04:37:56', '2020-07-28 04:37:56'),
(22, 29, 'Bùi Tiến Thọ', 'chất lượng tuyệt vời, rất đáng tiền', '2020-07-28 18:02:39', '2020-07-28 18:02:39');

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
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `address`, `phone`, `note`, `payment_method`, `created_at`, `updated_at`) VALUES
(137, 'Đặng Đình Hùng', 'Nam', 'dinhhung@gmail.com', '67 hàng trống', '03326545', 'Giao hàng trong vòng 7 ngày', 'Chuyển khoản', '2020-07-25 10:36:45', '2020-07-25 10:36:45'),
(138, 'Bùi Thị Nhàn', 'Nam', 'nhanbui@gmail.com', '55 trần thái tông', '034564564', 'Nhận hàng các buổi chiều trong tuần', 'Trực tiếp', '2020-07-25 10:56:09', '2020-07-25 10:56:09'),
(139, 'thế tú', 'Nam', 'agdasg@gmail.com', 'sgd', 'sgdg', 'se', 'Trực tiếp', '2020-07-26 04:19:38', '2020-07-26 04:19:38'),
(140, 'Đoàn Mạnh Khang', 'Nam', 'doankhang@gmail.com', '37 Đội Cấn', '0344613486', 'Nhận hàng từ 8h-11h', 'Chuyển khoản', '2020-07-27 09:29:59', '2020-07-27 09:29:59'),
(141, 'dfd', 'Nam', 'dfdsfds@gmail', 'dsfsd', 'dfsfd', 'sdfdsfds', 'Trực tiếp', '2020-07-27 09:34:56', '2020-07-27 09:34:56');

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
(28, 137, 'Obaku V146LGIRR', 2, 2451000, 'Obaku V146LGIRR.png', '2020-07-25 10:36:45', '2020-07-25 10:36:45'),
(29, 137, 'Fossil FS5305', 3, 2631000, 'Fossil FS5305.png', '2020-07-25 10:36:45', '2020-07-25 10:36:45'),
(30, 137, 'Fossil ES4594', 1, 1957000, 'Fossil ES4594.png', '2020-07-25 10:36:45', '2020-07-25 10:36:45'),
(31, 137, 'Obaku V219GXBIRZ', 4, 4157000, 'Obaku V219GXBIRZ.png', '2020-07-25 10:36:45', '2020-07-25 10:36:45'),
(32, 138, 'Fossil ES4594', 1, 1957000, 'Fossil ES4594.png', '2020-07-25 10:56:09', '2020-07-25 10:56:09'),
(33, 138, 'Orient RA-AA0C06E19B', 2, 2413000, 'orient-FAC0A005T0.jpg', '2020-07-25 10:56:09', '2020-07-25 10:56:09'),
(34, 139, 'Obaku V219GXBIRZ', 1, 4157000, 'Obaku V219GXBIRZ.png', '2020-07-26 04:19:38', '2020-07-26 04:19:38'),
(35, 140, 'Fossil ME3172', 4, 7699000, 'Fossil ME3172.png', '2020-07-27 09:29:59', '2020-07-27 09:29:59'),
(36, 140, 'Fossil ME3179', 3, 5299000, 'Fossil ME3179.png', '2020-07-27 09:29:59', '2020-07-27 09:29:59'),
(37, 140, 'Obaku V219GXBIRZ', 2, 4157000, 'Obaku V219GXBIRZ.png', '2020-07-27 09:29:59', '2020-07-27 09:29:59');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `content`, `price`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(24, 'Obaku', 'Obaku V130LCIRB', '<p>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</p>', 3469000, 'Obaku-V130LCIRB.png', 'Hết hàng', '2020-07-08 21:38:54', '2020-07-23 15:09:37'),
(25, 'Casio', 'Casio MTP-1335D-9AVDF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 1090000, 'Casio MTP-1335D-9AVDF.png', 'Hết hàng', '2020-07-10 14:01:21', '2020-07-22 15:21:03'),
(26, 'Casio', 'Casio MTP-X300L-1AVDF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 1936000, 'Casio MTP-X300L-1AVDF.png', 'Còn hàng', '2020-07-10 14:05:39', '2020-07-22 15:58:18'),
(27, 'Casio', 'Casio LTP-E143DBL-3ADR', '<p><span style=\"background-color: #ffffff;\"><em><strong>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</strong></em></span></p>', 1480000, 'Casio LTP-E143DBL-3ADR.png', 'Hết hàng', '2020-07-10 14:08:03', '2020-07-25 07:56:38'),
(28, 'Orient', 'Orient RA-AA0C06E19B', '<p><span style=\"color: #000000;\"><em><strong>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</strong></em></span></p>', 2413000, 'orient-FAC0A005T0.jpg', 'Còn hàng', '2020-07-10 14:10:07', '2020-07-25 07:56:53'),
(29, 'Casio', 'Casio LA680WEGB', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 3364000, 'Casio LA680WEGB.png', 'Còn hàng', '2020-07-10 14:48:30', '2020-07-28 10:34:49'),
(34, 'Orient', 'orient-FAG02003W0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 5679000, 'orient-FAG02003W0.jpg', 'Còn hàng', '2020-07-18 02:32:14', '2020-07-18 02:32:14'),
(35, 'Orient', 'orient-FEV0V003DH', '<p><strong>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</strong></p>', 4558700, 'orient-FEV0V003DH.jpg', 'Còn hàng', '2020-07-18 02:33:24', '2020-07-18 02:33:24'),
(36, 'Orient', 'orient-FAG03001D0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 1450000, 'orient-FAG03001D0.jpg', 'Còn hàng', '2020-07-18 02:34:10', '2020-07-18 02:34:10'),
(37, 'Orient', 'orient-RA-AP0003S10B', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 5630000, 'orient-RA-AP0003S10B.jpg', 'Còn hàng', '2020-07-18 02:36:50', '2020-07-18 02:36:50'),
(38, 'Fossil', 'Fossil ES3546', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 4576000, 'Fossil ES3546.png', 'Hết hàng', '2020-07-18 09:55:17', '2020-07-25 07:55:57'),
(39, 'Fossil', 'Fossil ES4594', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 1957000, 'Fossil ES4594.png', 'Còn hàng', '2020-07-18 10:00:50', '2020-07-18 10:00:50'),
(40, 'Fossil', 'Fossil ES4722', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 2146000, 'Fossil ES4722.png', 'Hết hàng', '2020-07-18 10:01:26', '2020-07-25 07:55:45'),
(41, 'Fossil', 'Fossil ES4727', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 2346000, 'Fossil ES4727.png', 'Hết hàng', '2020-07-18 10:01:56', '2020-07-25 07:57:08'),
(42, 'Fossil', 'Fossil FS5305', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 2631000, 'Fossil FS5305.png', 'Còn hàng', '2020-07-18 10:02:24', '2020-07-18 10:02:24'),
(43, 'Obaku', 'Obaku V146LGBMG2', '<p><strong>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</strong></p>', 3451000, 'Obaku V146LGBMG2.png', 'Hết hàng', '2020-07-18 10:06:35', '2020-07-25 07:55:31'),
(44, 'Obaku', 'Obaku V146LGIRR', '<p><strong>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</strong></p>', 3144000, 'Obaku V146LGIRR.png', 'Hết hàng', '2020-07-18 10:07:17', '2020-07-28 10:50:13'),
(45, 'Obaku', 'Obaku V219GXBIRZ', '<p>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</p>', 4157000, 'Obaku V219GXBIRZ.png', 'Còn hàng', '2020-07-18 10:07:58', '2020-07-18 10:07:58'),
(48, 'Fossil', 'Fossil FS5580', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 899000, 'Fossil FS5580.png', 'Còn hàng', '2020-07-26 11:38:55', '2020-07-26 11:38:55'),
(49, 'Fossil', 'Fossil ME3172', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 7699000, 'Fossil ME3172.png', 'Còn hàng', '2020-07-26 11:43:00', '2020-07-26 11:43:00'),
(50, 'Fossil', 'Fossil ME3179', '<p>Lấy cảm hứng từ vẻ đẹp cổ điển ở c&aacute;c tạp ch&iacute; thời trang thuộc những năm 1930 &ndash; 1950, những mẫu thiết kế đồng hồ tinh tế đầy n&eacute;t ho&agrave;i cổ đ&atilde; được đ&ocirc;ng đảo người d&ugrave;ng đ&oacute;n nhận. Kh&ocirc;ng phải l&agrave; xưa cũ, gi&aacute; trị m&agrave; Fossil chọn để tạo dựng thương hiệu cho m&igrave;nh ch&iacute;nh l&agrave; sự vững chắc. Từ những thiết kế &ldquo;retro&rdquo; cho đồng hồ, họ tin rằng những sản phẩm &ldquo;thời gian&rdquo; đ&oacute; sẽ kh&ocirc;ng bao giờ c&oacute; dấu hiệu tho&aacute;i tr&agrave;o. N&oacute;i một c&aacute;ch đơn giản, đ&oacute; l&agrave; lời cam kết giữa thiết kế trường tồn v&agrave; chất lượng bền bỉ.</p>', 5299000, 'Fossil ME3179.png', 'Còn hàng', '2020-07-26 11:46:05', '2020-07-26 11:46:05'),
(51, 'Casio', 'Casio W-S220C-4BVDF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 1654000, 'Casio W-S220C-4BVDF.png', 'Còn hàng', '2020-07-28 10:17:15', '2020-07-28 10:17:15'),
(52, 'Casio', 'Casio A500WA-7DF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 959000, 'Casio A500WA-7DF.png', 'Còn hàng', '2020-07-28 10:17:57', '2020-07-28 10:17:57'),
(53, 'Casio', 'Casio MRW-400H-9AVDF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 1448000, 'Casio MRW-400H-9AVDF.png', 'Còn hàng', '2020-07-28 10:18:36', '2020-07-28 10:18:36'),
(54, 'Casio', 'Casio SGW-400H-1BVDR', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 2481000, 'Casio SGW-400H-1BVDR.png', 'Còn hàng', '2020-07-28 10:19:24', '2020-07-28 10:19:24'),
(55, 'Casio', 'Casio LQ-142E-7ADF', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 338000, 'Casio LQ-142E-7ADF.png', 'Còn hàng', '2020-07-28 10:20:03', '2020-07-28 10:20:03'),
(56, 'Casio', 'Casio SGW-1000-2BDR', '<p>Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản kh&ocirc;ng ngừng cải tiến v&agrave; cho ra mắt những d&ograve;ng sản phẩm chất lượng ph&ugrave; hợp với nhiều đối tượng kh&aacute;ch h&agrave;ng. Những d&ograve;ng sản phẩm nổi tiếng của Casio l&agrave;: G-Shock với thiết kế mạnh mẽ c&ugrave;ng độ bền cao, Edifice thiết kế hiện đại c&ugrave;ng nhiều t&iacute;nh năng vượt trội, Sheen với thiết kế cổ điển v&agrave; sang trọng,&hellip;</p>', 4080000, 'Casio SGW-1000-2BDR.png', 'Còn hàng', '2020-07-28 10:36:53', '2020-07-28 10:36:53'),
(57, 'Orient', 'Orient FGW01001W0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 4208000, 'Orient FGW01001W0.png', 'Còn hàng', '2020-07-28 10:40:54', '2020-07-28 10:40:54'),
(58, 'Orient', 'Orient FAC08002F0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 5152000, 'Orient FAC08002F0.png', 'Còn hàng', '2020-07-28 10:43:01', '2020-07-28 10:43:01'),
(59, 'Orient', 'Orient FAC0000DD0', '<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>', 4792000, 'Orient FAC0000DD0.png', 'Còn hàng', '2020-07-28 10:45:25', '2020-07-28 10:45:25'),
(60, 'Obaku', 'Obaku V197GXCWRB1', '<p>Đồng hồ Obaku c&oacute; được tỉ lệ v&agrave;ng l&agrave; bởi v&igrave; được s&aacute;ng lập bởi 2 kiến tr&uacute;c sư đại t&agrave;i c&aacute;ch đ&acirc;y 50 năm. Cũng v&igrave; c&oacute; mắt thẩm mỹ cao v&agrave; sự t&agrave;i t&igrave;nh, tỉ mỉ của họ m&agrave; những chiếc đồng hồ Obaku lu&ocirc;n lu&ocirc;n được đ&aacute;nh gi&aacute; rất cao. Vẻ đẹp lu&ocirc;n lu&ocirc;n khiến người kh&aacute;c phải ấn tượng khi tận mắt nh&igrave;n thấy chiếc đồng hồ n&agrave;y v&agrave; c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ đẹp của người sử dụng.</p>', 2160000, 'Obaku V197GXCWRB1.png', 'Còn hàng', '2020-07-28 10:48:48', '2020-07-28 10:48:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replies`
--

CREATE TABLE `replies` (
  `id` int(10) NOT NULL,
  `comment_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(2, 12, 'harry carty', 'yes i think so', '2020-07-27 17:52:16', '2020-07-27 17:52:16'),
(4, 18, 'quân trần việt', 'very very great', '2020-07-28 04:02:20', '2020-07-28 04:02:20'),
(7, 22, 'Admin', 'Cảm ơn bạn đã quan tâm sản phẩm', '2020-07-28 18:03:17', '2020-07-28 18:03:17');

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
-- Chỉ mục cho bảng `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

--
-- Các ràng buộc cho bảng `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
