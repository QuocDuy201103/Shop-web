-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 11:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `address`, `email`, `phonenumber`, `username`, `password`, `role`, `status`) VALUES
(1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho Chi Minh', 'duy@gmail.com', '0336883213', 'duy', 'duy123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminpro`
--

CREATE TABLE `tbl_adminpro` (
  `idadmin` int(11) NOT NULL,
  `usernameadmin` varchar(20) NOT NULL,
  `passwordadmin` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_adminpro`
--

INSERT INTO `tbl_adminpro` (`idadmin`, `usernameadmin`, `passwordadmin`, `role`) VALUES
(1, 'quocduy', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(10) NOT NULL,
  `iddh` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `dongia` double(10,0) NOT NULL DEFAULT 0,
  `soluong` int(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `iddh`, `idsp`, `tensp`, `img`, `dongia`, `soluong`) VALUES
(9, 10, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(10, 11, 3, 'Roja Parfums Elysium Pour Homme Parfum Cologne', '../upload/elysium.png', 200000, 4),
(11, 11, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(12, 11, 2, 'boss hugo', '../upload/boss.png', 3000000, 1),
(13, 12, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(14, 12, 2, 'boss hugo', '../upload/boss.png', 3000000, 1),
(15, 13, 1, 'chanel blue', '../upload/chanel1.png', 200000, 3),
(16, 13, 2, 'boss hugo', '../upload/boss.png', 3000000, 1),
(17, 14, 1, 'chanel blue', '../upload/chanel1.png', 200000, 10),
(18, 15, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(19, 16, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(20, 17, 2, 'boss hugo', '../upload/boss.png', 3000000, 1),
(21, 18, 2, 'boss hugo', '../upload/boss.png', 3000000, 1),
(22, 19, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(23, 20, 1, 'chanel blue', '../upload/chanel1.png', 200000, 1),
(24, 20, 3, 'Roja Parfums Elysium Pour Homme Parfum Cologne', '../upload/elysium.png', 200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(10) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendanhmuc`, `uutien`, `hienthi`) VALUES
(1, 'Chanel', 0, 1),
(2, 'Boss', 0, 1),
(3, 'Gucci', 0, 1),
(4, 'Roja', 0, 1),
(5, 'Dior', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `tongdonhang` double(10,0) NOT NULL DEFAULT 0,
  `phuongthucthanhtoan` tinyint(1) NOT NULL DEFAULT 1,
  `iduser` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madonhang`, `tongdonhang`, `phuongthucthanhtoan`, `iduser`, `name`, `address`, `email`, `tell`, `status`) VALUES
(13, 'KDN44066', 3600000, 4, 1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho', 'duy@gmail.com', '0336883213', 'canceled'),
(14, 'KDN8746', 2000000, 2, 1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho', 'duy@gmail.com', '0336883213', 'canceled'),
(15, 'KDN64693', 200000, 1, 1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho', 'duy@gmail.com', '0336883213', 'confirmed'),
(16, 'KDN76089', 200000, 2, 1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho', 'duy@gmail.com', '0336883213', 'confirmed'),
(17, 'KDN62913', 3000000, 1, 1, 'vo quoc duy', 'ba lat', 'duy@gmail.com', '0336883213', 'confirmed'),
(18, 'KDN51277', 3000000, 1, 1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho', 'duy@gmail.com', '0336883213', 'confirmed'),
(20, 'KDN13123', 400000, 1, 1, 'vo quoc duy', '1A67 hamlet 1 Pham Van Hai commune, Binh Chanh, Ho Chi Minh', 'duy@gmail.com', '0336883213', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(10) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `iddanhmuc` int(10) NOT NULL,
  `xuatxu` varchar(50) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `dungtich` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `giacu` double(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensanpham`, `img`, `gia`, `iddanhmuc`, `xuatxu`, `detail`, `dungtich`, `status`, `giacu`) VALUES
(1, 'chanel blue', '../upload/chanel1.png', 200000, 1, 'Ý', 'Đem lại mùi hương tự nhiên của bản thân không hề trộn lẫn với người khác. Nước hoa không cồn , Hương thơm tự nhiên từ cơ thể quyến rũ.', '100ml', 0, NULL),
(2, 'boss hugo', '../upload/boss.png', 3000000, 2, 'Đức', 'Đem lại mùi hương tự nhiên của bản thân không hề trộn lẫn với người khác. Nước hoa không cồn , Hương thơm tự nhiên từ cơ thể quyến rũ.', '100ml', 0, NULL),
(3, 'Roja Parfums Elysium Pour Homme Parfum Cologne', '../upload/elysium.png', 200000, 4, 'Đức', 'Đem lại mùi hương tự nhiên của bản thân không hề trộn lẫn với người khác. Nước hoa không cồn , Hương thơm tự nhiên từ cơ thể quyến rũ.', '100ml', 0, NULL),
(4, 'Dior Homme 2020 EDT', '../upload/diorEau.png', 3000000, 5, 'Anh', 'Đem lại mùi hương tự nhiên của bản thân không hề trộn lẫn với người khác. Nước hoa không cồn , Hương thơm tự nhiên từ cơ thể quyến rũ.', '100ml', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_adminpro`
--
ALTER TABLE `tbl_adminpro`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddanhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_adminpro`
--
ALTER TABLE `tbl_adminpro`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddanhmuc`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
