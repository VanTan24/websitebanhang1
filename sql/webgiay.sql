-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 11:18 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `username`, `password`, `admin_status`) VALUES
(1, 'vantan', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`) VALUES
(1, 8, '8541', 1, ''),
(2, 8, '4962', 1, ''),
(3, 8, '1253', 1, ''),
(26, 25, '5619', 0, ''),
(27, 25, '6047', 0, ''),
(28, 25, '9234', 0, ''),
(29, 25, '9524', 0, ''),
(30, 26, '7418', 0, ''),
(31, 27, '6340', 0, '2021-12-28 12:33:32'),
(32, 27, '5537', 0, '2021-12-28 18:40:30'),
(33, 28, '7958', 0, '2021-12-29 10:55:38'),
(34, 28, '597', 0, '2021-12-29 10:58:40'),
(35, 28, '8373', 0, '2021-12-29 11:03:02'),
(36, 28, '9151', 0, '2021-12-29 11:15:33'),
(37, 28, '1054', 0, '2021-12-29 11:47:39'),
(38, 29, '1672', 0, '2021-12-29 16:45:44'),
(39, 29, '685', 0, '2021-12-29 16:47:22'),
(40, 29, '2833', 0, '2021-12-29 16:48:25'),
(41, 29, '5636', 0, '2021-12-29 17:10:31'),
(42, 30, '285', 0, '2021-12-30 11:00:18'),
(43, 31, '2923', 0, '2021-12-30 21:43:22'),
(44, 31, '2791', 0, '2021-12-30 21:44:34'),
(45, 31, '975', 0, '2021-12-30 21:45:32'),
(46, 32, '6840', 0, '2022-01-02 21:21:44'),
(47, 32, '8838', 0, '2022-01-02 21:25:34'),
(48, 33, '5227', 0, '2022-01-03 19:56:01'),
(49, 33, '5615', 0, '2022-01-03 19:57:04'),
(50, 35, '1050', 0, '2022-01-06 09:56:18'),
(51, 35, '9849', 0, '2022-01-06 10:47:38'),
(52, 36, '8667', 0, '2022-01-12 17:17:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `stt`, `soluongmua`) VALUES
(38, '5619', 85, 4),
(39, '5619', 112, 2),
(40, '6047', 88, 1),
(41, '9234', 89, 2),
(42, '9524', 38, 1),
(43, '9524', 89, 1),
(44, '7418', 83, 5),
(45, '7418', 115, 6),
(46, '6340', 103, 10),
(47, '6340', 88, 1),
(48, '5537', 83, 5),
(49, '5537', 114, 6),
(50, '7958', 83, 6),
(51, '7958', 97, 4),
(52, '7958', 116, 4),
(53, '597', 80, 1),
(54, '8373', 82, 8),
(55, '8373', 116, 4),
(56, '9151', 86, 4),
(57, '9151', 94, 4),
(58, '9151', 116, 2),
(59, '1054', 82, 10),
(60, '1672', 83, 1),
(61, '685', 77, 8),
(62, '2833', 86, 1),
(63, '5636', 76, 2),
(64, '5636', 119, 1),
(65, '5636', 80, 1),
(66, '285', 86, 1),
(67, '285', 116, 2),
(68, '2923', 101, 1),
(69, '2791', 91, 1),
(70, '975', 86, 1),
(71, '6840', 97, 3),
(72, '6840', 83, 2),
(73, '8838', 80, 4),
(74, '8838', 106, 4),
(75, '8838', 114, 3),
(76, '5227', 89, 6),
(77, '5227', 106, 5),
(78, '5227', 116, 4),
(79, '5615', 85, 5),
(80, '5615', 91, 5),
(81, '5615', 92, 3),
(82, '5615', 115, 4),
(83, '1050', 82, 4),
(84, '1050', 105, 5),
(85, '9849', 100, 1),
(86, '8667', 103, 1),
(87, '8667', 83, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(25, 'tanluong', 'tanluong24122001@gmail.com', 'danang', '123', '098596133'),
(26, 'gray', 'gray@', 'dn', '123', '6852'),
(27, 'vantan24', 'matmalyoko950@gmail.com', 'dn', '123', '1500'),
(28, 'Quang Vinh', 'Vinh@gmail.com', 'Đà Nẵng', '123', '0468478646'),
(29, 'Truyền', 'Truyen@gmail.com', 'Quảng Trị', '123', '059875354'),
(30, 'Ái Lê', 'Ai2@gmail.com', 'Quảng Trị', '123', '079562312'),
(31, 'Hồng Nhung', 'Nhung256@gmail.com', 'Đà Nẵng', '123', '0458496565'),
(32, 'Phương Thảo', 'phuongthao@gmail.com', '170 Trần Cao Vân', '123', '0905716972'),
(33, 'VanTan', 'tanluong@gmail.com', 'Đà nẵng', '123', '078655056'),
(34, 'Thiên Trang', 'Trang@gmail.com', 'Đà nẵng', '123', '085645646'),
(35, 'Thiên Trang', 'Trang@gmail.com', 'Đà nẵng', '123', '098596564'),
(36, 'Quý', 'Quý@gmail.com', 'quảng nam', '123', '079515208');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(21, 'GIÀY NIKE', 15),
(22, 'GIÀY ADIDAS', 16),
(23, 'GIÀY VANS', 17),
(24, 'GIÀY BALENCIAGA', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `stt` int(11) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(50) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`stt`, `tensp`, `masp`, `giasp`, `soluong`, `hinhanh`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(38, 'Giày Nike Dunk Low Orange Pearl', '1', '950000', 100, '1640085645_f.png', '', 1, 21),
(76, 'Giày Nike Air Jordan 1 Digital Pink Rep 1:1', '2', '910000', 100, '1640084994_20.png', '', 1, 21),
(77, 'Giày Nike Jordan 1 Retro High Fearless UNC Chicago', '3', '1250000', 100, '1640085534_1.png', '', 1, 21),
(78, 'Giày Jordan 7 Màu 1 Nike Air Jordan 1 Mid SE Multi Color Rep 1:1', '4', '939000', 100, '1640084860_Giay-Jordan-7-Mau-1-Mid-SE-Multi.jpg', '', 1, 21),
(79, 'Giày Jordan 1 High Zoom Xanh Đen Zen Green Rep 1:1', '5', '810000', 100, '1640085731_Jordan-1-High-Zoom-Zen-Green-5.png', '', 1, 21),
(80, 'Giày Nike Air Jordan 1 High Dark Mocha Like Auth', '6', '1149000', 100, '1640085845_giay-nike-air-Jordan-1-high-dark.jpg', '', 1, 21),
(81, 'Giày Nike Air Jordan 1 Chicago Off White Pk God Factory', '7', '910000', 100, '1640085937_giay-nike-air-Jordan-1-off-white.jpg', '', 1, 21),
(82, 'Giày Nike Air Jordan 1 Hyper Royal', '8', '1239000', 100, '1640086368_giay-nike-air-Jordan-1-hyper-roy.jpg', '', 1, 21),
(83, 'Giày Nike Air Jordan 1 Retro High Black Satin Gym Red Rep 1:1', '9', '810000', 100, '1640086239_Jordan-1-retro-high-black-satin.jpg', '', 1, 21),
(84, 'Giày Nike Air Jordan 4 Travis Scott Pk God Factory Rep 1:1', '10', '990000', 100, '1640086305_Giay-Nike-Air-Jordan-4-Travis-Sc.jpg', '', 1, 21),
(85, 'Giày Nike Air Jordan 4 Retro Bred Rep 1:1', '11', '990000', 100, '1640086442_Giay-Nike-Air-Jordan-4-Retro-Bre.jpg', '', 1, 21),
(86, 'Giày Nike Dunk Low Retro SP Syracuse Nike Syracuse Rep 1:1', '12', '599000', 100, '1640086526_Giay-Nike-Dunk-Low-Retro-SP-Syra.jpg', '', 1, 21),
(87, 'Giày Nike M2K Tekno White Grey Rep 1:1', '13', '660000', 100, '1640086603_Giay-Nike-M2K-Tekno-White-Grey.jpg', '', 1, 21),
(88, 'Giày Sneaker Nike Air Jordan 1 Low Court Purple ', '14', '749000', 100, '1640097061_14.png', '', 1, 21),
(89, 'Giày Thể Thao Nike Air Jordan 1', '15', '710000', 100, '1640096895_16.png', '', 1, 21),
(90, 'Giày Adidas EQT Bask ADV trắng đen phản quang Rep 1:1', '16', '660000', 100, '1640087057_Adidas-EQT-Bask-ADV-trang-den-ph.jpg', '', 1, 22),
(91, 'Giày Adidas Prophere Blue Rep 1:1 – Xanh Dương', '17', '660000', 100, '1640087133_Adidas-Prophere-Blue-2.jpg', '', 1, 22),
(92, 'Giày Adidas Prophere Triple White Rep 1:1 – Trắng Full', '18', '660000', 100, '1640087210_Adidas-Prophere-Triple-White-2.jpg', '', 1, 22),
(93, 'Giày ADIDAS ULTRA BOOST 4.0 HỒNG NỮ Rep 1:1', '19', '810000', 100, '1640087262_ADIDAS-ULTRA-BOOST-4.0-HONG.jpg', '', 1, 22),
(94, 'Giày Adidas Ultra Boost 6.0 Blue White Rep 1:1', '20', '749000', 100, '1640087318_Adidas-Ultra-Boost-6.0-Blue-Whit.jpg', '', 1, 22),
(95, 'Giày Adidas Alphabounce Instinct M Đỏ Xám Rep 1:1', '21', '710000', 100, '1640087386_2Giay-Adidas-Alphabounce-Instinc.jpg', '', 1, 22),
(96, 'Giày Adidas Alphabounce Instinct M Full Đen Rep 1:1', '22', '710000', 100, '1640087451_Giay-Adidas-Alphabounce-Instinct.jpg', '', 1, 22),
(97, 'Giày Adidas Alphabounce Instinct M Xanh Xám Rep 1:1', '23', '800000', 100, '1640087590_w.jpg', '', 1, 22),
(98, 'Giày Giày Adidas EQT Bask ADV xanh dương Rep 1:1', '24', '560000', 100, '1640087658_Giay-Adidas-EQT-Bask-ADV-xanh-du.jpg', '', 1, 22),
(99, 'Giày Adidas EQT Bask ADV đen trắng phản quang Rep 1:1', '25', '950000', 100, '1640087746_Giay-Adidas-EQT-Bask-ADV-den-tra.jpg', '', 1, 22),
(100, 'Giày Adidas Prophere Trace Olive Rep 1:1– Xanh Rêu Cam', '26', '700000', 100, '1640087885_Adidas-Prophere-Trace-Olive-–-Xa.jpg', '', 1, 22),
(101, 'Giày Adidas EQT Bask ADV đen xanh Rep 1:1', '27', '560000', 100, '1640087957_Adidas-EQT-Bask-ADV-den-xanh-1.j.jpg', '', 1, 22),
(102, 'Giày Adidas EQT Xám Xanh Bask ADV Grey Sub Green For Rep 1:1', '28', '590000', 100, '1640088031_Adidas-EQT-Bask-ADV-xam-xanh.jpg', '', 1, 22),
(103, 'Giày Adidas Prophere Blue Rep 1:1 – Xanh Dương', '29', '1200000', 100, '1640088103_Adidas-Prophere-Blue-2.jpg.jpg', '', 1, 22),
(104, 'Giày Adidas Prophere Maroon Rep 1:1 – Đỏ Đô', '30', '950000', 100, '1640088151_Adidas-Prophere-Maroon-–-Do-Do-3.jpg', '', 1, 22),
(105, 'Giày Vans Caro rep 1:1', '31', '550000', 100, '1640088523_Vans.png', '', 1, 23),
(106, 'Giày Thể Thao XSPORT Van.s Old Skool Mũi nỉ', '32', '250000', 100, '1640088659_MG.png', '', 1, 23),
(107, 'Giày Vans Style 36 Amber Glow Rep 1:1', '33', '640000', 100, '1640088714_Giày-Style-36-Amber-Glow.jpg', '', 1, 23),
(108, 'Giày Sneaker Vans UA Old Skool Color Theory Shale Green ', '34', '1225000', 100, '1640088989_4.png', '', 1, 23),
(109, 'Giày Vans Old Skool Navy White', '35', '1487500', 100, '1640089023_d1c2a76837da45938b8225929d722c40.jpg', '', 1, 23),
(110, 'Giày Vans DIY Authentic', '36', '1015000', 100, '1640089087_d464ea3df9b222706db7e66e57b26ea5.jpg', '', 1, 23),
(111, 'Giày Vans Old Shool Mix & Match', '37', '1487500', 100, '1640089159_56f6a70eedc23ef81088ce45dc944e62.jpg', '', 1, 23),
(112, 'Giày sneakers Vans Slip-On Deck Club', '38', '850000', 100, '1640089212_66f504a6ec71fda0bd47e65ad5eb7c46.jpg', '', 1, 23),
(113, 'Giày Vans UA Era Flame', '39', '1395000', 100, '1640089289_8cbcd7e0392641a8fbfb16ac73976957.jpg', '', 1, 23),
(114, 'Giày Balenciaga Trắng', '40', '1250000', 100, '1640092944_Balenciaga-Wmns-Triple-S-Trainer.jpg', '', 1, 24),
(115, 'Giày Balenciaga Track 3.0 Vàng', '41', '1239000', 100, '1640092998_giay-balenciaga-track-3.0-vang.jpg', '', 1, 24),
(116, 'Giày Balen Đế Khí Trắng', '42', '1250000', 100, '1640093070_19-1.jpg', '', 1, 24),
(117, 'Giày Balenciaga Triple S Red', '43', '1250000', 100, '1640093134_Giay-Balenciaga-Triple-S-Red-Bal.jpg', '', 1, 24),
(118, 'Giày Balenciaga Triple S Black Đen', '44', '1300000', 100, '1640093181_20-1.jpg.jpg', '', 1, 24),
(119, 'Giày Balenciaga Track 3.0 Rep 11 mầu Xanh Đen', '45', '1239000', 100, '1640093238_balenciaga-track-3.0-rep-11-mau.jpg', '', 1, 24),
(120, 'Giày Balenciaga Đỏ Xanh Triple S Trainer Blue Red', '46', '1250000', 100, '1640093388_Triple.png', '', 1, 24),
(121, 'Giày Thể Thao Balenciaga Triple S Trainer Grey', '47', '1500000', 100, '1640093493_Balenciaga.png', '', 1, 24),
(122, 'Giày Balenciaga Track 3.0 full trắng', '48', '1239000', 100, '1640093578_giay-balenciaga-track-3.0-full-t.jpg', '', 1, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(7, '2021-12-28', 2, '6000000', 10),
(8, '2021-12-29', 11, '1301085000', 240),
(9, '2021-12-21', 50, '15500000', 25),
(10, '2021-12-22', 55, '25500000', 25),
(11, '2021-12-23', 50, '15600000', 30),
(12, '2021-12-24', 10, '36500000', 30),
(13, '2021-12-25', 2, '1000000000', 10),
(14, '2021-12-26', 8, '65000000', 9),
(15, '2021-12-27', 2, '6000000', 10),
(16, '2021-12-28', 8, '65000000', 9),
(18, '2021-11-25', 2, '900000', 2),
(19, '2021-11-28', 10, '1000000000', 4),
(20, '2021-12-01', 8, '500000', 10),
(21, '2021-12-04', 54, '100000000', 90),
(22, '2021-12-07', 30, '500000000', 40),
(23, '2021-12-10', 14, '100000000', 10),
(24, '2021-12-13', 20, '1500000000', 60),
(25, '2021-12-16', 24, '50000000', 15),
(26, '2021-12-19', 41, '150000000', 35),
(27, '2021-12-20', 50, '1500000000', 40),
(28, '2021-12-30', 4, '3668000', 3),
(29, '2022-01-02', 2, '4259000', 5),
(30, '2022-01-03', 50, '2000000000', 15),
(31, '2022-01-06', 2, '2489000', 9),
(32, '2022-01-12', 1, '2010000', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`stt`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
