-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 02:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `bill_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_pro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_pttt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '1. Thanh toán khi nhận hàng\r\n2. Thanh toán trực tuyến',
  `ngaydathang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT NULL COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `name_pro`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(1, 0, 'khoa', '', 'dsmndsmgn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '', 2147483647, 0, NULL, NULL, NULL),
(2, 0, 'khoa', '', 'dsmndsmgn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '06:40:11am 16/12/2022', 2147483647, 0, NULL, NULL, NULL),
(3, 0, 'khoa', '', 'dsmndsmgn', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '06:40:54am 16/12/2022', 2147483647, 0, NULL, NULL, NULL),
(4, 0, 'khoa', '', 'dsmndsmgn', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '06:41:44am 16/12/2022', 2147483647, 0, NULL, NULL, NULL),
(5, 0, 'khoa', '', 'dsmndsmgn', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '06:46:13am 16/12/2022', 2147483647, 0, NULL, NULL, NULL),
(6, 0, 'khoa', '', 'Can Thơ', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '06:46:47am 16/12/2022', 2147483647, 0, NULL, NULL, NULL),
(7, 0, 'khoa', '', 'dnfn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '06:47:22am 16/12/2022', 2147483647, 0, NULL, NULL, NULL),
(8, 0, 'khoa', '', 'dnfn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '06:50:25am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(9, 0, 'khoa', '', 'krenkrnykneyn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '06:50:45am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(10, 0, 'khoa', '', 'krenkrnykneyn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '07:53:21am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(11, 0, 'khoa', '', 'krenkrnykneyn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '07:54:56am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(12, 0, 'khoa', '', 'krenkrnykneyn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '07:57:43am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(13, 0, 'khoa', '', 'krenkrnykneyn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '07:58:08am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(14, 0, 'khoa', '', 'krenkrnykneyn', '0763038603', 'tongdangkhoa20172017@gmail.com', '0', '07:58:51am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(15, 0, 'khoa', '', 'Can Thơ', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '07:59:37am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(16, 0, 'khoa', '', 'Can Thơ', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '08:03:32am 16/12/2022', 2147483647, NULL, NULL, NULL, NULL),
(17, 0, 'khoa', '', 'Can Tho', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '08:14:27am 16/12/2022', 12625000, NULL, NULL, NULL, NULL),
(18, 0, 'khoa', '', 'Can Tho', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '08:16:24am 16/12/2022', 12625000, NULL, NULL, NULL, NULL),
(19, 0, 'khoa', '', 'ksdnknskng', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '08:20:11am 16/12/2022', 12625000, NULL, NULL, NULL, NULL),
(20, 1, 'khoa', '', 'ksdnknskng', '0763038603', 'tongdangkhoa20172017@gmail.com', '1', '08:50:10am 16/12/2022', 12625000, NULL, NULL, NULL, NULL),
(21, 1, 'khoa', '', 'Ca', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán khi nhận hàng', '08:50:24am 16/12/2022', 14384000, NULL, NULL, NULL, NULL),
(22, 1, 'Tong Dang Khoa', '', 'Can Tho', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán khi nhận hàng', '08:58:26am 16/12/2022', 17313000, NULL, NULL, NULL, NULL),
(23, 1, 'khoa', '', 'knfgnfkd', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán khi nhận hàng', '01:03:47pm 16/12/2022', 17313000, NULL, NULL, NULL, NULL),
(24, 1, 'khoa', '', 'hihi', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán trực tuyến', '01:30:30pm 16/12/2022', 21142000, NULL, NULL, NULL, NULL),
(25, 1, 'khoa', '', 'hihi', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán trực tuyến', '01:32:13pm 16/12/2022', 21142000, NULL, NULL, NULL, NULL),
(26, 1, 'khoa', '', 'hihi', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán trực tuyến', '01:33:40pm 16/12/2022', 21142000, NULL, NULL, NULL, NULL),
(27, 1, 'khoa', '', 'hihi', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán trực tuyến', '01:35:33pm 16/12/2022', 21142000, NULL, NULL, NULL, NULL),
(28, 1, 'Tong Khoa', '', 'Nguyen Van Linh', '0763038603', 'tongdangkhoa20172017@gmail.com', 'Thanh toán trực tuyến', '02:29:00pm 16/12/2022', 5858000, NULL, NULL, NULL, NULL),
(29, 1, 'Tong Dang Khoa', '', 'Cần Thơ', '0763038603', 'khoatdpc04409@fpt.edu.vn', 'Thanh toán khi nhận hàng', '02:34:05pm 16/12/2022', 5858000, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 1),
(2, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 2),
(3, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 3),
(4, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 4),
(5, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 5),
(6, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 6),
(7, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 6),
(8, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 7),
(9, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 7),
(10, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 7),
(11, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 8),
(12, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 8),
(13, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 8),
(14, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 9),
(15, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 9),
(16, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 9),
(17, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 9),
(18, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 10),
(19, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 10),
(20, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 10),
(21, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 10),
(22, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 11),
(23, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 11),
(24, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 11),
(25, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 11),
(26, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 12),
(27, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 12),
(28, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 12),
(29, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 12),
(30, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 13),
(31, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 13),
(32, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 13),
(33, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 13),
(34, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 14),
(35, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 14),
(36, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 14),
(37, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 14),
(38, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 15),
(39, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 15),
(40, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 15),
(41, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 15),
(42, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 16),
(43, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 16),
(44, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 16),
(45, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 16),
(46, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 17),
(47, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 17),
(48, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 17),
(49, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 17),
(50, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 17),
(51, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 18),
(52, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 18),
(53, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 18),
(54, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 18),
(55, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 18),
(56, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 19),
(57, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 19),
(58, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 19),
(59, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 19),
(60, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 19),
(61, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 20),
(62, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 20),
(63, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 20),
(64, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 20),
(65, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 20),
(66, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 21),
(67, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 21),
(68, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 21),
(69, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 21),
(70, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 21),
(71, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 21),
(72, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 22),
(73, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 22),
(74, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 22),
(75, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 22),
(76, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 22),
(77, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 22),
(78, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 22),
(79, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 23),
(80, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 23),
(81, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 23),
(82, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 23),
(83, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 23),
(84, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 23),
(85, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 23),
(87, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 25),
(88, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 25),
(89, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 25),
(90, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 25),
(91, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 25),
(92, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 25),
(93, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 25),
(94, 1, 42, './upload/Nike_Pegasus_39_Premium-3829.webp', 'Nike Pegasus 39 Premium ', 3829000, 1, 3829000, 25),
(95, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 26),
(96, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 26),
(97, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 26),
(98, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 26),
(99, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 26),
(100, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 26),
(101, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 26),
(102, 1, 42, './upload/Nike_Pegasus_39_Premium-3829.webp', 'Nike Pegasus 39 Premium ', 3829000, 1, 3829000, 26),
(103, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 27),
(104, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 27),
(105, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 27),
(106, 1, 30, './upload/Zion_2_PF-3829.webp', 'Zion 2 PF', 3829000, 1, 3829000, 27),
(107, 1, 43, './upload/Nike_Pegasus_39-3519.webp', 'Nike Pegasus 39', 3519000, 1, 3519000, 27),
(108, 1, 44, './upload/Nike_Revolution_6-1759.webp', 'Nike Revolution 6', 1759000, 1, 1759000, 27),
(109, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 27),
(110, 1, 42, './upload/Nike_Pegasus_39_Premium-3829.webp', 'Nike Pegasus 39 Premium ', 3829000, 1, 3829000, 27),
(111, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 28),
(112, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 28),
(113, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 29),
(114, 1, 45, './upload/Nike_Winflo_9-2929.webp', 'Nike Winflo 9', 2929000, 1, 2929000, 29);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(3, 'Jordan'),
(4, 'Basketball'),
(5, 'Football'),
(6, 'Golf'),
(7, 'Tennis'),
(9, 'Walking'),
(10, 'Running');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `iddm`) VALUES
(5, 'Nike Phantom GT2', 7319000, 'Nike_Phantom_GT2-7319.webp', 'Building off the Phantom GT, the Nike Phantom GT2 Elite FG features an updated design and raised patterning to help create optimal spin to control the flight of the ball. Off-centre lacing provides a clean strike zone for skilful dribbling, passing and sh', 5),
(6, 'Nike Streetgato', 2479000, 'Nike_Streetgato-2479.webp', 'Rule the streets in the Nike Streetgato.They blend performance details with streetwear flair so you can be ready to play at any moment.', 5),
(7, 'Nike Zoom CR7 ', 7777000, 'Nike_Zoom_CR7-7777.jpg', 'Like Cristiano Ronaldo, azulejo tiles are a Portuguese national treasure. For the Nike Zoom Mercurial Superfly 9 Elite CR7, we took visual inspiration from the Portuguese icons to show what can be achieved when one dedicates themselves to the craft. Now l', 5),
(9, 'The Nike Premier 9', 3219000, 'The_Nike_Premier_9-3219.webp', 'The Nike Premier 3 gets back to the basics with a timeless silhouette wrapped in supple kangaroo leather—helping you to move confidently as an unstoppable force on the pitch.', 5),
(15, 'Nike Zoom SupperFly', 7909000, 'Nike_Zoom_SuperFly-7909.webp', 'Building off the Phantom GT, the Nike Phantom GT2 Elite FG features an updated design and raised patterning to help create optimal spin to control the flight of the ball. Off-centre lacing provides a clean strike zone for skilful dribbling, passing and sh', 5),
(16, 'Kyrie Infinity EP', 4109000, 'Kyrie_Infinity_EP-4109.webp', 'The Kyrie Infinity provides a tight custom fit, enhanced responsiveness in the forefoot and traction up the sides, allowing players to accelerate and decelerate on demand and take advantage of the separation they create.', 4),
(17, 'Lebron 19', 4695000, 'Lebron_19-4695.webp', 'The Kyrie Infinity provides a tight custom fit, enhanced responsiveness in the forefoot and traction up the sides, allowing players to accelerate and decelerate on demand and take advantage of the separation they create.', 4),
(18, 'Lerbon XX EF', 5869000, 'Lebron_XX_EF-5869.webp', 'The Kyrie Infinity provides a tight custom fit, enhanced responsiveness in the forefoot and traction up the sides, allowing players to accelerate and decelerate on demand and take advantage of the separation they create.', 4),
(19, 'PG 6 EP ', 3239000, 'PG_6_EP-3239.webp', 'The Kyrie Infinity provides a tight custom fit, enhanced responsiveness in the forefoot and traction up the sides, allowing players to accelerate and decelerate on demand and take advantage of the separation they create.', 4),
(20, 'Zion 2 PF', 3519000, 'Zion_2_PF-3519.webp', 'The Kyrie Infinity provides a tight custom fit, enhanced responsiveness in the forefoot and traction up the sides, allowing players to accelerate and decelerate on demand and take advantage of the separation they create.', 4),
(21, 'Air Jordan 1 LowG', 4109000, 'Air_Jordan_1_LowG-4109.webp', 'The Kyrie Infinity provides a tight custom fit, enhanced responsiveness in the forefoot and traction up the sides, allowing players to accelerate and decelerate on demand and take advantage of the separation they create.', 6),
(22, 'Air Jordan 12 Low', 5439000, 'Air_Jordan_12_Low-5439.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, dolorum sapiente impedit minima a omnis odio voluptatum, explicabo quibusdam aspernatur aliquid commodi? Molestiae magnam fugiat corporis culpa. Cum, libero laboriosam!', 6),
(23, 'Jordan ADG4 ', 5439000, 'Jordan_ADG4-5439.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, dolorum sapiente impedit minima a omnis odio voluptatum, explicabo quibusdam aspernatur aliquid commodi? Molestiae magnam fugiat corporis culpa. Cum, libero laboriosam!', 6),
(24, 'Nike Ari Max 90G', 3028000, 'Nike_Air_Max_90G-3028.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, dolorum sapiente impedit minima a omnis odio voluptatum, explicabo quibusdam aspernatur aliquid commodi? Molestiae magnam fugiat corporis culpa. Cum, libero laboriosam!', 6),
(25, 'Nike Ari Zoom Victory', 2719000, 'Nike_Air_Zoom_Victory-2719.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, dolorum sapiente impedit minima a omnis odio voluptatum, explicabo quibusdam aspernatur aliquid commodi? Molestiae magnam fugiat corporis culpa. Cum, libero laboriosam!', 6),
(26, 'Air Jordan 1 Mid SE', 3254000, 'Air_Jordan_1_Mid_SE-3254.webp', 'Fresh look, familiar feel. Every time we update the AJ-1, you get the classic kicks you already love, decked out in new combinations of colours and textures. Premium materials and accents bring modern expression to an all-time favourite.', 3),
(27, 'Jordan 1 KO', 4109000, 'Jordan_1_KO-4109.webp', 'Fresh look, familiar feel. Every time we update the AJ-1, you get the classic kicks you already love, decked out in new combinations of colours and textures. Premium materials and accents bring modern expression to an all-time favourite.', 3),
(28, 'Jordan Delta Flow', 4109000, 'Jordan_Delta_Flow-4109.webp', 'Fresh look, familiar feel. Every time we update the AJ-1, you get the classic kicks you already love, decked out in new combinations of colours and textures. Premium materials and accents bring modern expression to an all-time favourite.', 3),
(30, 'Zion 2 PF', 3829000, 'Zion_2_PF-3829.webp', 'Fresh look, familiar feel. Every time we update the AJ-1, you get the classic kicks you already love, decked out in new combinations of colours and textures. Premium materials and accents bring modern expression to an all-time favourite.', 3),
(31, 'Jordan Series 06', 2499000, 'Jordan_Series_.06-2499.webp', 'Fresh look, familiar feel. Every time we update the AJ-1, you get the classic kicks you already love, decked out in new combinations of colours and textures. Premium materials and accents bring modern expression to an all-time favourite.', 3),
(32, 'Nike Court Air Zoom', 3919000, 'Nike_Court_Air_Zoom-3919.webp', 'The NikeCourt Air Zoom Vapor Pro takes everything you love about the NikeCourt Air Zoom Vapor X and makes it lighter and more supportive. The 3-layer design puts breathability.', 7),
(33, 'Nike Court Vapor 9', 4409000, 'Nike_Court_Vapor_9-4409.webp', 'The NikeCourt Air Zoom Vapor Pro takes everything you love about the NikeCourt Air Zoom Vapor X and makes it lighter and more supportive. The 3-layer design puts breathability.', 7),
(34, 'Nike Court Vapor Lite', 2349000, 'Nike_Court_Vapor_Lite-2349.webp', 'The NikeCourt Air Zoom Vapor Pro takes everything you love about the NikeCourt Air Zoom Vapor X and makes it lighter and more supportive. The 3-layer design puts breathability.', 7),
(35, 'Nike Court Zoom NXT', 2929000, 'Nike_Court_Zoom_NXT-2929.webp', 'The NikeCourt Air Zoom Vapor Pro takes everything you love about the NikeCourt Air Zoom Vapor X and makes it lighter and more supportive. The 3-layer design puts breathability.', 7),
(36, 'Nike Court Zoom Pro', 2929000, 'Nike_Court_Zoom_Pro-2929.webp', 'The NikeCourt Air Zoom Vapor Pro takes everything you love about the NikeCourt Air Zoom Vapor X and makes it lighter and more supportive. The 3-layer design puts breathability.', 7),
(37, 'Nike Air Zoom Pegasus 38', 3519000, 'Nike_Air_Zoom_Pegasus_38-3519.webp', 'The road is your runway. Get ready to take flight in the workhorse with wings.', 9),
(38, 'Nike DownShifer 11 ', 1909000, 'Nike_DownShifter_11-1909.webp', 'The road is your runway. Get ready to take flight in the workhorse with wings.', 9),
(39, 'Nike Free Run 5.0', 3519000, 'Nike_Free_Run_5.0-3519.webp', 'The road is your runway. Get ready to take flight in the workhorse with wings.', 9),
(40, 'Nike Quest 4', 2319000, 'Nike_Quest_4-2319.webp', 'The road is your runway. Get ready to take flight in the workhorse with wings.', 9),
(41, 'Nike Winflo 8', 2929000, 'Nike_Winflo_8-2929.webp', 'The road is your runway. Get ready to take flight in the workhorse with wings.', 9),
(42, 'Nike Pegasus 39 Premium ', 3829000, 'Nike_Pegasus_39_Premium-3829.webp', 'Your workhorse with wings never rests on nostalgia. Now made with more pop and comfort than its predecessor.', 10),
(43, 'Nike Pegasus 39', 3519000, 'Nike_Pegasus_39-3519.webp', 'Your workhorse with wings never rests on nostalgia. Now made with more pop and comfort than its predecessor.', 10),
(44, 'Nike Revolution 6', 1759000, 'Nike_Revolution_6-1759.webp', 'Your workhorse with wings never rests on nostalgia. Now made with more pop and comfort than its predecessor.', 10),
(45, 'Nike Winflo 9', 2929000, 'Nike_Winflo_9-2929.webp', 'Your workhorse with wings never rests on nostalgia. Now made with more pop and comfort than its predecessor.', 10),
(46, 'Nike Zoom Fly 5', 4999000, 'Nike_Zoom_Fly_5-4999.webp', 'Your workhorse with wings never rests on nostalgia. Now made with more pop and comfort than its predecessor.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'khoa', '12345678', 'tongdangkhoa20172017@gmail.com', '', '0763038603', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill` (`idbill`),
  ADD KEY `fk_user` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
