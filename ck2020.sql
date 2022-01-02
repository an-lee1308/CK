-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2022 lúc 08:11 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ck2020`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `MAHD` int(11) NOT NULL,
  `MAXE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`MAHD`, `MAXE`) VALUES
(0, 5),
(2, 2),
(2, 3),
(4, 3),
(5, 3),
(8, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangxe`
--

CREATE TABLE `hangxe` (
  `MAHANG` int(11) NOT NULL,
  `TENHANG` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `MAHD` int(11) NOT NULL,
  `TENHD` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYLAP` datetime NOT NULL DEFAULT current_timestamp(),
  `MAKH` int(11) NOT NULL,
  `TONGTIEN` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`MAHD`, `TENHD`, `NGAYLAP`, `MAKH`, `TONGTIEN`) VALUES
(0, 'hd1', '2021-12-27 19:35:00', 2, 20000),
(1, 'hd2', '2021-12-28 19:35:52', 4, 20000),
(2, 'fe1', '2021-12-28 19:38:30', 3, 4),
(3, 'fe2', '2021-12-29 19:39:03', 3, 4),
(4, 'fe3', '2021-12-27 19:39:14', 4, 4),
(5, 'fe4', '2021-12-26 19:39:28', 3, 4),
(6, 'fe5', '2021-12-27 19:39:46', 2, 4),
(7, 'fe', '0000-00-00 00:00:00', 3, 4),
(8, 'fe7', '2021-12-26 19:40:23', 0, 4),
(9, 'fe8', '2021-12-26 19:40:39', 1, 4),
(10, 'fe9', '2021-12-26 19:40:53', 4, 4),
(11, 'fe99', '2021-12-27 19:41:07', 0, 4),
(12, 'fe999', '0000-00-00 00:00:00', 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(11) NOT NULL,
  `HOTEN` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `HOTEN`, `SDT`) VALUES
(0, 'b', 123),
(1, 'Le', 92852),
(2, 'NguyenVanTung', 11),
(3, 'NguyenHungDung', 12),
(4, 'LevAnTuan', 13),
(5, 'Hahahaa', 1124);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `MAXE` int(11) NOT NULL,
  `TENXE` text COLLATE utf8_unicode_ci NOT NULL,
  `MAUXE` text COLLATE utf8_unicode_ci NOT NULL,
  `SOCHO` int(11) NOT NULL,
  `MAHANG` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`MAXE`, `TENXE`, `MAUXE`, `SOCHO`, `MAHANG`) VALUES
(0, 'mer', 'blue', 4, 'MH1'),
(2, 'mer', 'gr', 4, 'MH2'),
(3, 'Vios', 'green', 4, '2'),
(4, 'Cảmy', 'dark', 4, '3'),
(5, 'Kia', 'xanh', 4, '4');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`MAHD`,`MAXE`),
  ADD KEY `cthd_ibfk_1` (`MAXE`);

--
-- Chỉ mục cho bảng `hangxe`
--
ALTER TABLE `hangxe`
  ADD PRIMARY KEY (`MAHANG`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`MAXE`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `cthd_ibfk_1` FOREIGN KEY (`MAXE`) REFERENCES `xe` (`MAXE`),
  ADD CONSTRAINT `cthd_ibfk_2` FOREIGN KEY (`MAHD`) REFERENCES `hopdong` (`MAHD`);

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
