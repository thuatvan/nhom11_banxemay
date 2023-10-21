-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 08:02 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_pro1014`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `pass_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `pass_admin`) VALUES
(8, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `content_binhluan` text NOT NULL,
  `date_binhluan` varchar(30) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `name_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `name_danhmuc`) VALUES
(1, 'Xe máy điện'),
(2, 'Xe máy 50cc'),
(3, 'Xe đạp điện'),
(4, 'Xe ga 50cc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `soDienThoai` varchar(20) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `id_sanpham`, `id_taikhoan`, `hoTen`, `soDienThoai`, `diaChi`, `created_at`) VALUES
(4, 19, 6, '4234234', '23423423423', '23423423', '2023-10-21 06:01:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `name_sanpham` varchar(255) NOT NULL,
  `price_sanpham` int(11) NOT NULL,
  `img_sanpham` text NOT NULL,
  `img_sanpham1` text NOT NULL,
  `description_sanpham` varchar(255) NOT NULL,
  `view_sanpham` int(11) NOT NULL DEFAULT 0,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `name_sanpham`, `price_sanpham`, `img_sanpham`, `img_sanpham1`, `description_sanpham`, `view_sanpham`, `id_danhmuc`) VALUES
(3, 'Xe máy điện Xmen Osakar Sport', 17400000, 'xe-may-dien-xmen-osakar-pro-den-tem-bac.webp', 'xmen-osakar-pro.webp', '       ĐÁNH GIÁ TỔNG QUAN XE ĐIỆN XMEN OSAKAR PRO\r\nXe điện XMEN Osakar Pro là mẫu xe điện cao cấp nhất, hầm hồ nhất, chắc chắn nhất của dòng xe máy điện XMEN. Xe được trang bị 2 giảm sóc chắc chắn, động cơ 1000W cùng 5 bình ắc quy cỡ lớn 60V - 20Ah.', 6, 1),
(4, 'Xe máy điện Xmen Osakar Sport', 16900000, 'xe-may-dien-xmen-osakar-sport-den-do.webp', 'xmen-osakar-pro.webp', '       ĐÁNH GIÁ TỔNG QUÁT XE ĐIỆN XMEN OSAKAR SPORT\r\nXe máy điện Xmen Osakar Sport là mẫu xe điện phong cách thể thao, cá tính, mạnh mẽ nhất trong dòng xe điện Xmen. Xe có thiết kế hầm hố, bộ tem bắt mắt, màu sắc cá tính.', 1, 1),
(5, 'Xe máy điện Xmen JVC F1', 16500000, 'xe-may-dien-xmen-jvc-f1-xanh-47b2cb33-8cff-4298-9659-29c99a5e05e6.webp', 'jvc-g9s.webp', '     ĐÁNH GIÁ TỔNG QUAN XE ĐIỆN XMEN JVC F1:\r\nXe máy điện XMEN JVC F1 là mẫu xe điện XMEN bán chạy nhất Việt Nam bởi 3 yếu tố: 1- Quãng đường đi xa nhất - Bền nhất - Tốc độ lớn nhất. Đây là mẫu xe máy điện XMEN duy nhất có thể di chuyển liên tục quãng đườ', 3, 1),
(6, 'Xe máy điện Xmen JVC Neo', 15900000, 'xe-may-dien-xmen-neo-jvc-xanh.webp', 'xmen-osakar-pro.webp', '     ĐÁNH GIÁ TỔNG QUAN XE MÁY ĐIỆN XMEN JVC NEO:\r\nXe máy điện XMEN JVC NEO được coi là chiếc xe điện XMEN quốc dân vì ai cũng có thể sử dụng được dù ở thành phố hay nông thôn, dù thu nhập cao hay thu nhập thấp.  ', 3, 1),
(7, 'Xe máy điện Xmen Espero CPI', 18900000, 'xe-may-dien-xmen-espero-cpi-do.webp', 'xmen-osakar-pro.webp', 'ĐÁNH GIÁ TỔNG QUAN XE MÁY ĐIỆN XMEN JVC NEO:\r\nXe máy điện XMEN JVC NEO được coi là chiếc xe điện XMEN quốc dân vì ai cũng có thể sử dụng được dù ở thành phố hay nông thôn, dù thu nhập cao hay thu nhập thấp.', 0, 1),
(8, 'Xe máy điện Xmen Espero CPI', 18900000, 'xe-may-dien-xmen-espero-cpi-do.webp', 'xmen-osakar-pro.webp', 'ĐÁNH GIÁ TỔNG QUAN XE MÁY ĐIỆN XMEN JVC NEO:\r\nXe máy điện XMEN JVC NEO được coi là chiếc xe điện XMEN quốc dân vì ai cũng có thể sử dụng được dù ở thành phố hay nông thôn, dù thu nhập cao hay thu nhập thấp.', 0, 1),
(9, 'Cub 86 Nama Motor 50cc đèn Led 2 tầng', 17500000, 'cub-86-nama-motor-ghi-san.webp', '', 'ĐÁNH GIÁ TỔNG QUAN CUB 86 NAMA MOTOR 50CC\r\nĐược đánh giá là mẫu xe Cub 50cc đẹp nhất, chất lượng tốt nhất hiện nay. Xe có thiết kế hiện đại, trẻ trung với đèn pha Led 2 tầng, đồng hồ điện tử màn hình Led. Xe sử dụng động cơ 49,5cc tiết kiệm xăng, không cầ', 2, 2),
(11, 'Cub 83 Nama Motor 50cc đèn Led', 16900000, 'cub-83-nama-motor-xam-xanh.webp', '', 'ĐÁNH GIÁ TỔNG QUAN CUB 83 NAMA MOTOR 50CC\r\nCub 83 Nama Motor được các chuyên gia đánh giá là mẫu xe Ngon - Bổ  - Rẻ nhất trong dòng xe Cub 50cc hiện nay. Xe có thiết kế mới mẻ, trẻ trung với đèn pha Led 2 tầng. Xe sử dụng động cơ 49,5cc tiết kiệm xăng, kh', 0, 2),
(12, 'Cub 50 Ally New SE đèn LED 2 tầng', 18000000, 'cub-50cc-ally-se-kem.webp', 'cub-50cc-ally-se.webp', 'ĐÁNH GIÁ TỔNG QUAN CUB 50 ALLY NEW SE:\r\nLấy cảm hứng từ mẫu Cub 50cc huyền thoại, Hãng Ally Motor đã phát triển, thay đổi, và đưa chiếc Cub 50 New Ally SE lên một tầm cao mới về thiết kế. Chiếc xe trở nên đẹp hơn, bắt mắt hơn, và đặc biệt động cơ rất ngọt', 0, 2),
(13, 'Cub 50cc Sumotor', 16000000, 'cub-50cc-sumotor-xanh-duong.webp', '', 'Chưa có mô tả chi tiết', 0, 2),
(14, 'Cub 50cc DK Retro', 17500000, 'cub-50cc-dk-retro-do.webp', '', ' Chưa có mô tả chi tiết ', 1, 2),
(18, 'Xe ga 50cc Nioshima Nio Plus đèn Led', 22000000, 'vespa-50cc-roma-sx.webp', '', '    giá cả hợp lý ngoại hính sang trọng!!        ', 5, 4),
(19, 'Xe ga Crea FI Pro 50cc đèn Led', 21600000, 'vespa-50cc-ally-ghi.webp', 'nio-plus-50cc (1).webp', '    đẹp hợp thời đại', 9, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `name_taikhoan` varchar(255) NOT NULL,
  `pass_taikhoan` text NOT NULL,
  `email_taikhoan` text NOT NULL,
  `phone_taikhoan` int(10) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `name_taikhoan`, `pass_taikhoan`, `email_taikhoan`, `phone_taikhoan`, `role`) VALUES
(1, '0325254004', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'vanlon1582003@gmail.com', 337097912, 0),
(2, '0312456789', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'hhfgik04@gmail.com', 325254004, 0),
(3, 'NGUYEN VAN THUAT', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'nfahfanfel34@gmail.com', 987623454, 0),
(4, 'admin423234234', 'f0057e560244cb01fe90f920637411620830d029', 'vanlo8200n153@gmail.com', 337097914, 0),
(5, 'vuanghichqua', 'c84f085316726447e0a0177fe7f16a96', 'vann158200lo3@gmail.com', 337097911, 0),
(6, '242343242354234', '6382278b779c4fd94dec0d487234b81a66003f2f', 'vanlon15820324203@gmail.com', 337097992, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `name_trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id_trangthai`, `name_trangthai`) VALUES
(1, 'Đang Chờ'),
(2, 'Đã Hủy'),
(3, 'Đã Tư Vấn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `fk_sanpham` (`id_sanpham`),
  ADD KEY `fk_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `fk_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`),
  ADD CONSTRAINT `fk_taikhoan` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
