-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 25, 2022 lúc 07:40 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `congvienhotay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_sp` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `gia` int(11) NOT NULL DEFAULT '0',
  `soluong` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_sp`, `id_hd`, `gia`, `soluong`) VALUES
(5, 38, 500000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `khachhang_id` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `ghichu`, `ngaytao`, `khachhang_id`, `tongtien`) VALUES
(38, 'ádaÀDSAD', '2022-11-25 05:06:15', 18, 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenKH` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenKH`, `diachi`, `sdt`) VALUES
(18, 'đừng sai nữa mà', 'như trên', '1111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trochoi`
--

CREATE TABLE `trochoi` (
  `id` int(11) NOT NULL,
  `tenTC` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `dacdiemnoibat` text COLLATE utf8_unicode_ci,
  `gia` int(11) NOT NULL DEFAULT '0',
  `anhminhhoa` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trochoi`
--

INSERT INTO `trochoi` (`id`, `tenTC`, `mota`, `dacdiemnoibat`, `gia`, `anhminhhoa`) VALUES
(3, 'Đu quay bạch tuộcc', 'đu quay bạch tuộc mang tính chất lành mạnh', 'Giải trí lành mạnh; Giải mát mùa hè', 300000, './views/assets/image/duquaybachtuoc.png'),
(4, 'Bể lâu đài', 'Giải trí cho trẻ em mọi lứa tuổi Người lớn cũng có thể chơi', 'Giải trí cho trẻ em mọi lứa tuổi; Người lớn cũng có thể chơi', 500000, './views/assets/image/belaudai.png'),
(5, 'Rồng thép thăng long', 'Rồng thép thăng long', 'Giải trí cho trẻ em mọi lứa tuổi; Người lớn cũng có thể chơi', 500000, './views/assets/image/rongthepthanglong.png'),
(6, 'Đu quay khổng lồ', 'Đu quay khổng lồ', 'Giải trí cho trẻ em mọi lứa tuổi; Người lớn cũng có thể chơi', 400000, './views/assets/image/duquaykhonglo.png'),
(7, 'Công viên mặt trời', 'Giải trí cho trẻ em mọi lứa tuổi; Người lớn cũng có thể chơi', 'Giải trí cho trẻ em mọi lứa tuổi; Người lớn cũng có thể chơi', 600000, './views/assets/image/congvienmattroi.png'),
(8, 'Tàu hải tặc', 'tàu hải tặc', 'Giải trí lành mạnh; Giải mát mùa hè', 300000, './views/assets/image/tauhaitac.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `display_name`, `password`, `ngay_tao`) VALUES
(1, 'admin', 'Người quản trị', 'admin', '2020-06-15 09:21:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_sp`,`id_hd`),
  ADD KEY `id_hd` (`id_hd`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhang_id` (`khachhang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trochoi`
--
ALTER TABLE `trochoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `trochoi`
--
ALTER TABLE `trochoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `trochoi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
