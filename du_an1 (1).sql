-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 11:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `count` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `count`) VALUES
(1, 'banner-home-small-1', 'banner-ml-home-1.jpg', 1),
(2, 'banner-home-small-2', 'banner-ml-home-2.jpg', 2),
(3, 'banner-home-2', 'banner-home-2.jpg', 3),
(4, 'banner-home-3', 'banner-home-3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_order`
--

CREATE TABLE `cart_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT 0,
  `name_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `paymentmethod` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. COD / 2.Bank / 3.Paypal',
  `nameuser2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addressuser2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailuser2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneuser2` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` tinyint(4) DEFAULT 0,
  `sethome` tinyint(4) DEFAULT 0,
  `count` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `parent_id`, `sethome`, `count`) VALUES
(9, 'Điện thoại di động', 0, 1, 1),
(10, 'Máy tính bảng', 0, 1, 0),
(11, 'Laptop - Macbook', 0, 1, 2),
(12, 'Đồng hồ thông minh', 0, 0, 0),
(13, 'Loa - Tai nghe', 0, 1, 3),
(14, 'Đồ chơi công nghệ', 0, 0, 0),
(15, 'Phụ kiện', 0, 0, 0),
(16, 'Dịch vụ sửa chữa', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_producer`
--

CREATE TABLE `catalog_producer` (
  `id_producer` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalog_producer`
--

INSERT INTO `catalog_producer` (`id_producer`, `id_catalog`) VALUES
(1, 9),
(1, 10),
(1, 11),
(2, 9),
(2, 10),
(3, 9),
(4, 9),
(5, 9),
(6, 9),
(9, 11),
(10, 11),
(11, 11),
(12, 11),
(13, 11);

-- --------------------------------------------------------

--
-- Table structure for table `color_board`
--

CREATE TABLE `color_board` (
  `id` int(5) NOT NULL,
  `name_color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_board`
--

INSERT INTO `color_board` (`id`, `name_color`, `color_code`) VALUES
(1, 'Red', '#FF0B02'),
(2, 'Blue', '#01B6FF'),
(3, 'Gold', '#FFE801'),
(4, 'Gray', '#999F96'),
(5, 'Black', '#000000'),
(6, 'Rose', '#FF3E74'),
(7, ' Moss green', '#122F28'),
(8, 'Silver', '#E8E5E1'),
(9, 'White', '#ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `name`, `note`) VALUES
(2, 'Quà tặng ', '20000d');

-- --------------------------------------------------------

--
-- Table structure for table `group_producer`
--

CREATE TABLE `group_producer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent_name` int(11) DEFAULT 0,
  `id_producer` int(11) DEFAULT 0,
  `id_catalog` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_producer`
--

INSERT INTO `group_producer` (`id`, `name`, `id_parent_name`, `id_producer`, `id_catalog`) VALUES
(1, 'Nhà sản xuất', 0, 0, 9),
(2, '', 1, 2, 9),
(3, '', 1, 3, 9),
(4, '', 1, 4, 9),
(5, '', 1, 5, 9),
(6, '', 1, 6, 9),
(8, 'Apple', 0, 0, 9),
(9, '', 1, 1, 9),
(10, 'Nhà sản xuất', 0, 0, 10),
(11, '', 10, 1, 10),
(12, 'Nhà sản xuất', 0, 0, 11),
(13, '', 11, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `name`, `image`) VALUES
(0, 'Unknown', NULL),
(1, 'Apple', NULL),
(2, 'Samsung', NULL),
(3, 'Xiaomi', NULL),
(4, 'Realme', NULL),
(5, 'Nokia', NULL),
(6, 'Huawei', NULL),
(9, 'Dell', NULL),
(10, 'HP', NULL),
(11, 'MSI', NULL),
(12, 'Asus', NULL),
(13, 'Lenovo', NULL),
(14, 'Kingston', NULL),
(15, 'Anker', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` tinyint(1) DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_producer` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screen_resolution` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Độ phân giải màn hình',
  `operating_system` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT ' hệ điều hành',
  `cpu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_catalog` int(11) NOT NULL,
  `hot` tinyint(1) DEFAULT 0,
  `selling` int(10) DEFAULT 0,
  `screen_size` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `id_gift` int(5) DEFAULT 0,
  `tra_gop` tinyint(1) DEFAULT 0,
  `rank_start` tinyint(1) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `sale`, `image`, `date`, `id_producer`, `note`, `view`, `detail`, `screen_resolution`, `operating_system`, `cpu`, `id_catalog`, `hot`, `selling`, `screen_size`, `ram`, `rom`, `battery`, `type`, `id_gift`, `tra_gop`, `rank_start`) VALUES
(4, 'Iphone 11 Pro', 0, 'ip11-pro-den.png', '2020-06-03', 1, NULL, 99, '', '2436x1125', 'IOS 13', 'Apple A13', 9, 0, 50, '5,8\'\'', '4 GB', '256 GB', '3046 mAh', 0, NULL, 0, 2),
(6, 'Iphone 11 Pro Max', 0, 'ip11-pro-max-xanh.png', '2020-06-03', 1, NULL, 0, NULL, '2688 x 1242 pixels', 'IOS 13', 'Apple A13', 9, 0, 99, '6.5 inches', '4 GB', '256 GB', '3969 mAh', 0, NULL, 0, 2),
(7, 'iPhone SX MAX 64GB', 0, 'iPhone-Xs-Max-gold.png', '2020-06-03', 1, NULL, 0, NULL, '1125 x 2436 pixels', 'iOS 12', 'Apple A12', 9, 0, 0, '6.5\"', '4 GB', '64 GB', '3225 mAh', 0, NULL, 0, 2),
(8, 'iPhone SX MAX 256 GB', 0, 'iPhone-Xs-Max-gold.png', '2020-06-03', 1, NULL, 0, NULL, '1125 x 2436 pixels', 'iOS 12', 'Apple A12', 9, 0, 0, '6.5\"', '4 GB', '256 GB', '3225 mAh', 0, NULL, 0, 2),
(9, 'iPhone 7', 0, 'ip7-gold-1.jpg', '2020-06-03', 1, NULL, 0, NULL, '1080 x 1920 pixels', 'iOS', 'Apple A10 Fusion', 9, 0, 0, '5.5 inch', '3 GB', '32 GB', '2900 mAh', 0, NULL, 0, 2),
(10, 'Samsung Galaxy A21s', 0, 'SaS-A21s-den-1.png', '2020-06-03', 2, NULL, 50, NULL, 'HD+, 720 x 1520 Pixels', 'Android 10', 'Exynos 850, 8, 8 nhân 2.0 GHz', 9, 0, 12, '6.5 inchs', '3 GB', '32 GB', '5000 mAh', 0, NULL, 0, 2),
(11, 'Samsung Galaxy M20', 0, 'Galaxy-M20-1.png', '2020-06-05', 2, NULL, 49, NULL, 'Full HD +, 1080 x 2340 Pixels', 'Android 8 (Oreo)', 'Exynos 7904 8 nhân 64-bit, 8, 1.8 GHz', 9, 0, 0, '6.3 inches', '3 GB', '32 GB', '5000 mAh', 0, NULL, 0, 2),
(12, 'Samsung Galaxy S20 Ultra', 0, 'ss-s20-ultra-den-1.png', '2020-06-06', 2, NULL, 6, NULL, '2K+, 2K+ (1440 x 3200 Pixels)', 'Android 10', 'Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 9, 0, 0, '6.9 inchs', '12 GB', '128 GB', '5000 mAh', 0, NULL, 0, 2),
(13, 'Samsung Galaxy S20+', 0, 'ss-s20-plus-den-1.png', '2020-06-04', 2, NULL, 10, NULL, '2K+, 2K+ (1440 x 3200 Pixels)', 'Android 10', 'Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 9, 0, 50, '6.7 inchs', '8 GB', '128 GB', '4500 mAh', 0, NULL, 0, 2),
(14, 'Realme 6 Pro 8GB-128GB', 0, 'realme-6pro-do-1.png', '2020-06-04', 4, NULL, 1, NULL, 'Full HD +, 2400 x 1080 Pixels', 'Realme UI (Android 10)', 'Qualcomm® Snapdragon™ 720G, 8, 2.3GHz', 9, 0, 0, '6.6 inches', '8 GB', '128 GB', '4300 mAh', 0, NULL, 0, 2),
(15, 'Realme 6 8GB-128GB', 0, 'realme-6-trang-1.png', '2020-06-04', 4, NULL, 0, NULL, 'Full HD +, 2400 x 1080 Pixels', 'Realme UI (Android 10)', 'MediaTek Helio G90T, 8, 2.05GHz', 9, 0, 0, '6.5 inchs', '8 GB', '128 GB', '4300 mAh', 0, NULL, 0, 2),
(16, 'iPad 2019 10.2 Wi-Fi + 4G 32GB', 0, 'ipad-wifi-4g-2019-vang-1.png', '2020-06-06', 1, NULL, 1, NULL, '2160 x 1620 Pixels', 'iPadOS', 'A10 Fusion', 10, 0, 0, '10.2 inchs', '3 GB', '32 GB', '32.4Wh', 0, NULL, 0, 2),
(17, 'Samsung Galaxy Tab S6 (2019)', 0, 'samsung-galaxy-tab-s6-xanh-1.png', '2020-06-03', 2, NULL, 9, NULL, ' 2560 x 1600 pixels', 'Android 9.0 (Pie)', 'Snapdragon 855 8 nhân', 10, 0, 0, '10.5 inchs', '6 GB', '128 GB', '7040 mAh', 0, NULL, 0, 2),
(18, 'Macbook Air 13 256GB 2019', 0, 'macbook-air-13-2019-silver-1.png', '2020-06-06', 1, NULL, 5, 'MacBook Air 256GB 2019 không chỉ là phương tiện làm việc cơ động lý tưởng mà còn là một tuyệt tác về thiết kế, với màn hình Retina tuyệt mỹ cùng kiểu dáng sang trọng, mỏng nhẹ đến không ngờ.</br>\r\nHình ảnh chân thực chưa từng thấy\r\nVới độ phân giải 2560 x 1600 pixels cho hơn 4 triệu điểm ảnh, bạn sẽ được tận hưởng màn hình siêu sắc nét. Kể cả những văn bản cũng rõ ràng hơn để cảm giác đọc tài liệu, email, duyệt web của bạn dễ chịu như in ra trên giấy. Đặc biệt, MacBook Air 2019 sở hữu màn hình công nghệ True Tone, có khả năng tự động điều chỉnh nhiệt độ màu dựa theo môi trường, để hình ảnh luôn tuyệt mỹ nhất.\r\n', '2560 x 1600 Pixels', 'Mac OS', 'Intel, Core i5', 11, 0, 0, '13.3 inchs', '8 GB, LPDDR3', 'SSD, 256 GB', '49.9 W h Li-Poly', 0, NULL, 0, 2),
(27, 'Dell Inspiron N3593C i3', 0, 'dell-inspiron-n3593c-den-1.png', '2020-07-16', 9, NULL, 5, NULL, ' 1920 x 1080 Pixels', 'Window 10 home', ' Chip intel I3 ,Intel® UHD Graphics, Tích hợp', 11, 0, 0, '15.6 inchs', '4 GB, DDR4', 'SSD, SSD: 256GB, Hỗ trợ khe cắm HDD SATA 3.0', '3 Cells', 0, 2, 0, 2),
(28, 'Asus Vivobook', 0, 'asus-vivobook-a412-1.png', '2019-12-17', 12, NULL, 0, NULL, '1920 x 1080 Pixels, 60Hz, Anti-Glare with 45% NTSC', 'Window 10 home', 'Quad Core R5, AMD Radeon™ Vega 8 Graphics', 11, 0, 0, '14.0 inchs', '8 GB, DDR4', 'SSD, 512 GB', '2 Cells', 0, 2, 0, 2),
(29, 'Lenovo legion Y540', 0, 'lenovo-legion-y540-1.png', '2020-03-10', 13, NULL, 0, NULL, '1920 x 1080 Pixels', 'Window 10 home', 'Intel, Core i5, GEFORCE GTX 1650, Card rời', 11, 0, 0, '15.6 inchs', '8 GB, DDR4', 'HDD 5400rpm + SSD, 1024 + 128 GB', '3 Cells', NULL, 2, 0, 2),
(30, 'MacBook Pro 16 Touch Bar', 0, 'MBP-16-touch-xam-1.png', '2020-07-24', 1, NULL, 0, NULL, '3072 x 1920 Pixels', 'Mac OS', 'Intel, Core i7,AMD Radeon Pro 5300M with 4GB of GDDR6, Intel UHD Graphics 630, Card rời và tích hợp', 11, 1, 0, '16 inchs', '16 GB, DDR4', 'SSD, 512 GB', '100 watt‑hour lithium‑polymer', NULL, 2, 0, 2),
(31, 'MacBook Pro 16 Touch Bar 2020', 0, 'MBP-16-touch-xam-1.png', '2020-07-24', 1, NULL, 0, NULL, '3072 x 1920 Pixels', 'Mac OS', 'Intel, Core i7,AMD Radeon Pro 5300M with 4GB of GDDR6, Intel UHD Graphics 630, Card rời và tích hợp', 11, 1, 0, '16 inchs', '16 GB, DDR4', 'SSD, 1TGB', '100 watt‑hour lithium‑polymer', NULL, 2, 0, 2),
(33, 'Tai nghe Kingston HyperX Cloud Orbit S_HX-HSCOS-GM', 0, 'hx-product-headset-cloud-orbit-4-lg.jpg', '2020-08-03', 14, NULL, 0, NULL, '1', '1', '1', 13, 0, 0, '1', '1', '1', '1', 1, 2, 0, 2),
(34, 'Tai nghe Samsung Galaxy Buds+', 0, 'Mo-ta-san-pham-tai-nghe-samsung-galaxy-buds-2-9.jpg', '2020-08-01', 2, NULL, 0, NULL, '1', '1', '1', 13, 0, 0, '1', '1', '1', '1', 1, 2, 0, 2),
(44, 'Tai nghe Bluetooth nhét tai TWS Anker Soundcore Li', 0, 'ak_4.jpg', '2020-08-01', 0, NULL, 0, NULL, '1', '1', '1', 13, 0, 0, '1', '1', '1', '1', 1, 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_color` int(5) DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `id_product`, `id_color`, `image`, `price`) VALUES
(1, 9, 5, 'ip7-black.jpg', 8990000),
(2, 9, 4, 'ip7-gray.jpg', 9000000),
(3, 9, 6, 'ip7-rose.jpg', 8900000),
(10, 6, 7, 'ip11-pro-max-xanh.png', 36900000),
(11, 6, 5, 'ip11-pro-max-den.png', 37900000),
(12, 6, 8, 'ip11-pro-max-bac.png', 37900000),
(13, 4, 7, 'ip11-pro-xanh-reu.png', 32490000),
(14, 4, 3, 'ip11-pro-vang.png', 33000000),
(15, 4, 4, 'ip11-pro-den.png', 32900000),
(16, 4, 8, 'ip11-pro-silver.png', 33100000),
(17, 16, 3, 'ipad-wifi-4g-2019-vang-1.png', 13990000),
(19, 13, 2, 'ss-s20-plus-xanh-2.png', 20990000),
(20, 11, 2, 'Galaxy-M20-1.png', 4990000),
(21, 11, 5, 'Galaxy-M20-gray-3.png', 5100000),
(22, 12, 4, 'ss-s20-ultra-xam-1.png', 26900000),
(23, 12, 5, 'ss-s20-ultra-den-1.png', 27900000),
(24, 15, 9, 'realme-6-trang-1.png', 6990000),
(25, 15, 2, 'realme-6-xanh-1.png', 6990000),
(26, 14, 1, 'realme-6pro-do-1.png', 7999000),
(27, 14, 2, 'realme-6pro-xanh-1.png', 7990000),
(28, 7, 9, 'iPhone-Xs-Max-White.png', 25990000),
(29, 7, 3, 'iPhone-Xs-Max-gold.png', 29990000),
(30, 8, 3, 'iPhone-Xs-Max-gold.png', 30990000),
(31, 17, 2, 'samsung-galaxy-tab-s6-xanh-1.png', 18490000),
(32, 27, 5, 'dell-inspiron-n3593c-den-1.png', 11590000),
(33, 28, 8, 'asus-vivobook-a412-1.png', 14490000),
(34, 29, 5, 'lenovo-legion-y540-1.png', 20990000),
(35, 30, 4, 'MBP-16-touch-xam-1.png', 59990000),
(36, 18, 4, 'macbook-air-13-2019-silver-1.png', 19490000),
(37, 31, 4, 'MBP-16-touch-xam-1.png', 70000000),
(39, 33, 5, 'hx-product-headset-cloud-orbit-4-lg.jpg', 8450000),
(40, 34, 5, 'Mo-ta-san-pham-tai-nghe-samsung-galaxy-buds-2-9.jpg', 3290000);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `note`, `image`) VALUES
(2, 'slider-2', NULL, 'slider-2.png'),
(3, 'slider-3', NULL, 'slider-3.png'),
(4, 'slider-4', NULL, 'slider-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user.png',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `image`, `email`, `phone`, `address`, `role`) VALUES
(24, 'admin', 'admin', 'admin', '', 'mtmusic2015100@gmail.com', '', '', 1),
(25, 'user', 'user', 'user', '', 'mtmusic2015100@gmail.com', '0943446110', 'Ha Noi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_order`
--
ALTER TABLE `cart_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user` (`id_user`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_producer`
--
ALTER TABLE `catalog_producer`
  ADD PRIMARY KEY (`id_producer`,`id_catalog`),
  ADD KEY `FK_group_cata` (`id_catalog`);

--
-- Indexes for table `color_board`
--
ALTER TABLE `color_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comment_product` (`id_product`),
  ADD KEY `FK_comment_user` (`id_user`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_producer`
--
ALTER TABLE `group_producer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_group_catalog` (`id_catalog`),
  ADD KEY `FK_producer_Group` (`id_producer`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order`,`id_product`),
  ADD KEY `FK_order_product_detail` (`id_product`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_catalog` (`id_catalog`),
  ADD KEY `FK_product_producer` (`id_producer`),
  ADD KEY `FK_gift` (`id_gift`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_detail` (`id_product`),
  ADD KEY `FK_color` (`id_color`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_order`
--
ALTER TABLE `cart_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `color_board`
--
ALTER TABLE `color_board`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_producer`
--
ALTER TABLE `group_producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_order`
--
ALTER TABLE `cart_order`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `catalog_producer`
--
ALTER TABLE `catalog_producer`
  ADD CONSTRAINT `FK_group_cata` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`),
  ADD CONSTRAINT `FK_group_cata2` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_comment_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_comment_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `group_producer`
--
ALTER TABLE `group_producer`
  ADD CONSTRAINT `FK_catalog_Groupproducer` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_producer_Group` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_gift` FOREIGN KEY (`id_gift`) REFERENCES `gift` (`id`),
  ADD CONSTRAINT `FK_product_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_product_producer` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `FK_color` FOREIGN KEY (`id_color`) REFERENCES `color_board` (`id`),
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
