-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 10:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` smallint(5) NOT NULL,
  `tentaikhoan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giahientai` double NOT NULL,
  `giacu` double NOT NULL,
  `sotuong` int(5) NOT NULL,
  `sotrangphuc` int(5) NOT NULL,
  `rank` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sale` int(5) NOT NULL,
  `anh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `tentaikhoan`, `matkhau`, `giahientai`, `giacu`, `sotuong`, `sotrangphuc`, `rank`, `sale`, `anh`) VALUES
(4, 'xuanp9981', '2502k1089', 150000, 300000, 78, 30, 'Kim Cương', 50, '4.jpg'),
(6, 'anhdat12354', 'hhtbgvd2000', 900000, 1500000, 80, 60, 'Cao Thủ', 60, '6.jpg'),
(7, 'khuemoclang', 'camel48923', 100000, 600000, 135, 140, 'Bạc', 80, '7.jpg'),
(8, 'yeulaniemdau', 'zip4992', 200000, 400000, 165, 500, 'Đồng', 40, '8.jpg'),
(9, 'tinhyeumaunang', 'nang92991', 250000, 1000000, 109, 44, 'Bạch Kim', 75, '9.jpg'),
(10, 'chamdaynoidau', 'tanvo1002', 50000, 250000, 109, 22, 'Bạch Kim', 80, '10.jpg'),
(11, 'dungchoanhnua', 'phuc8882', 150000, 750000, 120, 45, 'Bạch Kim', 80, '11.jpg'),
(12, 'tinhphieulang', 'rep58922', 350000, 1000000, 120, 100, 'Bạch Kim', 80, '12.jpg'),
(13, 'loskaret1997 ', 'Ordu9183', 800000, 4000000, 166, 120, 'Bạch Kim', 80, '13.jpg'),
(14, 'suluman_01992 ', 'sakura8299', 1000000, 5000000, 170, 155, 'Thách Đấu', 80, '14.jpg'),
(16, 'rockynguyen9912', 'zorsifre0182', 950000, 4000000, 120, 156, 'Vàng', 80, '16.jpg'),
(17, 'Berkylime12532 ', '123456789a', 150000, 750000, 132, 60, 'Vàng', 80, '17.jpg'),
(18, 'linhchovip5339 ', 'linh42469', 25000, 100000, 36, 10, 'Bạch Kim', 80, '18.jpg'),
(19, 'phinenom12345', 'khoa4323', 300000, 1000000, 120, 45, 'Vàng', 80, '19.jpg'),
(20, 'haubg2003', 'hhtbgvd2003', 300000, 1500000, 176, 500, 'Vàng', 80, '20.jpg'),
(21, 'nguyendausoi ', 'Aa01244628827', 50000, 100000, 132, 41, 'Unrank', 50, '21.jpg'),
(22, 'anhchangngheo92 ', 'anhdai92', 300000, 750000, 130, 120, 'Sắt', 80, '22.jpg'),
(23, 'Plahoahongdo', 'Dung2510', 25000, 100000, 30, 10, 'Đồng', 80, '23.jpg'),
(24, 'chongthugiang', 'Duyphong123', 2000000, 5000000, 135, 500, 'Bạc', 60, '24.jpg'),
(25, 'voquochoang4', '0907646481', 120000, 360000, 70, 50, 'Sắt', 70, '25.jpg'),
(26, 'khaiFPgame123', 'shopnicklol2390', 50000, 200000, 150, 300, 'Sắt', 75, '26.jpg'),
(27, '12345678916ngu', 'shopnicklol7190', 450000, 2000000, 150, 240, 'Đồng', 80, '27.jpg'),
(28, 'provip123', 'chienthan2vn', 4000000, 8000000, 178, 1200, 'Thách Đấu', 50, '28.jpg'),
(29, 'samongust1', 'shopnicklol9283', 120000, 400000, 60, 35, 'Unrank', 70, '29.jpg'),
(30, 'cuongsaunho1231', 'shopnicklol7058', 900000, 4000000, 160, 300, 'Vàng', 80, '30.jpg'),
(31, 'number1_cc', 'ALIvLwAuH', 50000, 250000, 136, 40, 'Vàng', 80, '31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `account_sold`
--

CREATE TABLE `account_sold` (
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(5) NOT NULL,
  `tentaikhoan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giahientai` double NOT NULL,
  `sotuong` int(10) NOT NULL,
  `sotrangphuc` int(10) NOT NULL,
  `rank` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_sold`
--

INSERT INTO `account_sold` (`email`, `id`, `tentaikhoan`, `matkhau`, `giahientai`, `sotuong`, `sotrangphuc`, `rank`) VALUES
('hhtbgvd2000@gmail.com', 15, 'ogizhannida391 ', 'iloveuire12345', 50000, 60, 14, 'Bạc');

-- --------------------------------------------------------

--
-- Table structure for table `danhsachthe`
--

CREATE TABLE `danhsachthe` (
  `id` int(11) NOT NULL,
  `loaithe` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menhgia` double NOT NULL,
  `soseri` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mathe` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhsachthe`
--

INSERT INTO `danhsachthe` (`id`, `loaithe`, `menhgia`, `soseri`, `mathe`) VALUES
(1, 'VIETTEL', 50000, '12451478985', '247845124698744'),
(2, 'VIETTEL', 100000, '58365412426', '311511546960694'),
(3, 'VIETTEL', 200000, '69639342762', '732917784007062'),
(4, 'VIETTEL', 500000, '46134578842', '864861988237489'),
(5, 'VIETTEL', 200000, '23793122431', '326036491729313'),
(6, 'VIETTEL', 200000, '43472126228', '137623790198847'),
(7, 'VIETTEL', 500000, '40128860618', '435137879042427'),
(8, 'VIETTEL', 200000, '61525076229', '231286479217252'),
(9, 'VIETTEL', 100000, '17262519863', '797281617946224'),
(10, 'VIETTEL', 50000, '63452446583', '823369353931802'),
(11, 'VIETTEL', 200000, '99676371913', '442059451573771'),
(12, 'VIETTEL', 100000, '24175851445', '403371570683378'),
(13, 'VIETTEL', 500000, '35983422811', '997509051045243'),
(14, 'VIETTEL', 200000, '82079716229', '419090893810680'),
(15, 'VIETTEL', 100000, '45888412036', '448244111151479'),
(16, 'VIETTEL', 200000, '70430326903', '227400340412575'),
(17, 'VIETTEL', 50000, '22896304263', '345670263701803'),
(18, 'VIETTEL', 200000, '10696040968', '479635544249942'),
(19, 'VIETTEL', 500000, '19622100546', '855085967827991'),
(20, 'VIETTEL', 500000, '17579516116', '544792008926928');

-- --------------------------------------------------------

--
-- Table structure for table `thedanap`
--

CREATE TABLE `thedanap` (
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `loaithe` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menhgia` double NOT NULL,
  `soseri` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mathe` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_dangnhap`
--

CREATE TABLE `user_dangnhap` (
  `id` smallint(6) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` smallint(2) NOT NULL,
  `sodu` double NOT NULL,
  `solanmua` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_dangnhap`
--

INSERT INTO `user_dangnhap` (`id`, `email`, `password`, `level`, `sodu`, `solanmua`) VALUES
(1, 'admin', 'admin', 1, 999799999, 99999),
(2, 'hhtbgvd2000@gmail.com', 'hhtbgvd2000', 0, 50000, 1),
(5, 'hhtbgvd@gmail.com', 'hhtbgvd', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_sold`
--
ALTER TABLE `account_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhsachthe`
--
ALTER TABLE `danhsachthe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thedanap`
--
ALTER TABLE `thedanap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_dangnhap`
--
ALTER TABLE `user_dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `danhsachthe`
--
ALTER TABLE `danhsachthe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `thedanap`
--
ALTER TABLE `thedanap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_dangnhap`
--
ALTER TABLE `user_dangnhap`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
