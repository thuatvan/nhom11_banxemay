-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220825.01c7ed3568
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 05:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1_pro1014`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `pass_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `pass_admin`) VALUES
(8, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `content_binhluan` text NOT NULL,
  `date_binhluan` varchar(30) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `content_binhluan`, `date_binhluan`, `id_sanpham`, `id_taikhoan`) VALUES
(18, '8', '09:35:43pm 05/10/2023', 25, 54);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `name_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `name_danhmuc`) VALUES
(15, 'Ô Tô Mercedes '),
(24, 'Ô Tô Vinfast ');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `soDienThoai` varchar(20) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `id_sanpham`, `id_taikhoan`, `hoTen`, `soDienThoai`, `diaChi`, `created_at`) VALUES
(5, 25, 55, '3', '3', '3', '2023-10-05 21:24:04'),
(6, 21, 55, 'duchoang', '094234234', 'Ha NAm', '2023-10-05 21:29:31'),
(7, 23, 55, 'duchoang', '094234234', 'Ha NAm', '2023-10-05 21:29:31'),
(17, 22, 56, '7', '7', '7', '2023-10-06 15:01:47'),
(18, 17, 56, '5', '5', '5', '2023-10-06 15:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `lichhen`
--

CREATE TABLE `lichhen` (
  `id_lichhen` int(11) NOT NULL,
  `id_taikhoan` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `id_trangthai` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `name_nhanvien` varchar(255) NOT NULL,
  `taikhoan_nhanvien` varchar(255) NOT NULL,
  `pass_nhanvien` varchar(255) NOT NULL,
  `img_nhanvien` text NOT NULL,
  `thongtin_nhanvien` text NOT NULL,
  `phone_nhanvien` int(10) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `name_sanpham` varchar(255) NOT NULL,
  `price_sanpham` int(11) NOT NULL,
  `img_sanpham` text NOT NULL,
  `description_sanpham` varchar(255) NOT NULL,
  `view_sanpham` int(11) NOT NULL DEFAULT 0,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `name_sanpham`, `price_sanpham`, `img_sanpham`, `description_sanpham`, `view_sanpham`, `id_danhmuc`) VALUES
(17, 'VF 8', 710000000, 'VF e34_1648799684.gif', '    \r\nMẫu C-SUV với thiết kế tinh tế\r\nVinFast ra mắt VF e34, mẫu C-SUV với thiết kế tinh tế, thân thiện với người dùng cùng loạt công nghệ thông minh hiện đại, hứa hẹn nâng tầm trải nghiệm Khách hàng.\r\n', 292, 24),
(18, 'PRE', 1710000000, 'Pre.gif', '        Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 15, 24),
(19, 'FADIL', 610000000, 'fadil_1656325630.png', '        Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 2, 24),
(20, 'FADIL', 610000000, 'LUXA_1648799764.gif', '            Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 7, 24),
(21, 'FADIL', 610000000, 'Pre.gif', '            Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 189, 24),
(22, 'FADIL', 610000000, 'VF e34_1648799684.gif', '            Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 3, 24),
(23, 'Vf8', 610000000, 'LUXA_1648799764.gif', '            Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 14, 24),
(24, 'FADIL', 610000000, 'fadil_1656325630.png', '            Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 164, 24),
(25, 'FADIL', 610000000, 'LuxSA20.gif', '            Mẫu eSUV cỡ trung thời thượng\r\nVF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.', 43, 24);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `name_taikhoan` varchar(255) NOT NULL,
  `pass_taikhoan` text NOT NULL,
  `email_taikhoan` text NOT NULL,
  `phone_taikhoan` int(10) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `name_taikhoan`, `pass_taikhoan`, `email_taikhoan`, `phone_taikhoan`, `role`) VALUES
(28, 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'aasd', 32432, 0),
(29, 'chuyenntnh123', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'vithithuhang@gmail.com', 2147483647, 0),
(30, 'chuyenntnh123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'chuyenvmph20182@fpt.edu.vn', 666666666, 0),
(50, 'chuyendeptrai', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'vuongmanhchuyenchuyen@gmail.com', 868492236, 0),
(51, 'duchoang', 'f5d4fdb9a5c202501903a2f306cf0e500110149f', 'duchoang@gmail.com', 941999318, 0),
(53, 'uss12454', '80bd990a7be0fd0edf5dd3a08db7bda59f54228f', 'uss12454@gmail.com', 324324324, 0),
(54, 'duchoang0923', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'duchoang0923@gmail.com', 999999892, 0),
(55, '0941999312', 'd3ca52718e10bab123aea0a9f5be01d8cdcd48e0', '0941999312@gmail.com', 941999312, 0),
(56, '0932492348234823', '0542270a1591916f72e01915380183e5a2174cd0', '093249@gmail.com', 988888982, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `name_trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`id_trangthai`, `name_trangthai`) VALUES
(1, 'Đang Chờ'),
(2, 'Đã Hủy'),
(3, 'Đã Tư Vấn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `fk_sanpham` (`id_sanpham`),
  ADD KEY `fk_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `lichhen`
--
ALTER TABLE `lichhen`
  ADD PRIMARY KEY (`id_lichhen`),
  ADD KEY `fk_trangthai` (`id_trangthai`),
  ADD KEY `fk_tk_lichhen` (`id_taikhoan`),
  ADD KEY `fk_sp_sanpham` (`id_sanpham`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `fk_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lichhen`
--
ALTER TABLE `lichhen`
  MODIFY `id_lichhen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`),
  ADD CONSTRAINT `fk_taikhoan` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Constraints for table `lichhen`
--
ALTER TABLE `lichhen`
  ADD CONSTRAINT `fk_sp_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`),
  ADD CONSTRAINT `fk_tk_lichhen` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`),
  ADD CONSTRAINT `fk_trangthai` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthai` (`id_trangthai`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
