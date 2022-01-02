-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2022 lúc 08:12 AM
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
-- Cơ sở dữ liệu: `ck2021`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baoduong`
--

CREATE TABLE `baoduong` (
  `MABD` int(10) NOT NULL,
  `NGAYNHAN` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYTRA` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `SOKM` text COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL,
  `SOXE` int(10) NOT NULL,
  `THANHTIEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baoduong`
--

INSERT INTO `baoduong` (`MABD`, `NGAYNHAN`, `NGAYTRA`, `SOKM`, `NOIDUNG`, `SOXE`, `THANHTIEN`) VALUES
(0, '01-01-22', '3333', '123', '333', 4, 5555),
(1, '1-1-22', '02/01/2022', '20', '1', 5, 230000),
(2, '', '3333', 'dddd', '333', 3, 5555),
(3, '2', '3333', '4', '5', 3, 5555),
(4, '2', '3333', '4', '5', 4, 5555),
(5, '2', '3333', '4', '5', 3, 5555),
(6, '2', '3333', '4', '5', 3, 5555),
(7, '2', '3333', '4', '5', 3, 5555),
(8, '2', '3333', '4', '5', 4, 5555);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `MACV` int(10) NOT NULL,
  `TENCV` text COLLATE utf8_unicode_ci NOT NULL,
  `DONGIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`MACV`, `TENCV`, `DONGIA`) VALUES
(0, 'Lau', 210000),
(1, 'Lau1', 220000),
(2, 'Lau2', 230000),
(3, 'Lau3', 240000),
(4, 'Lau4', 250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctbd`
--

CREATE TABLE `ctbd` (
  `MABD` int(10) NOT NULL,
  `MACV` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctbd`
--

INSERT INTO `ctbd` (`MABD`, `MACV`) VALUES
(0, 0),
(1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(10) NOT NULL,
  `HOTENKH` text COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `HOTENKH`, `DIACHI`, `SDT`) VALUES
(0, 'a', 'aa', 'vv'),
(2, 'aa', 'bbbb', 'ccc'),
(3, 'Tran Anh Hung', 'abv', '1234'),
(4, 'Mai Anh Hieu', '1111', '2222'),
(5, ' Anh Hieu', '1111', '2222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `SOXE` int(10) NOT NULL,
  `HANGXE` text COLLATE utf8_unicode_ci NOT NULL,
  `NAMSX` text COLLATE utf8_unicode_ci NOT NULL,
  `MAKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`SOXE`, `HANGXE`, `NAMSX`, `MAKH`) VALUES
(0, 'BMW', '2000', 0),
(1, 'vin', '2000', 1),
(2, 'BKAV', '2000', 2),
(3, 'BMW', '2121', 3),
(4, 'VVV', '555', 4),
(5, 'VVV', '555', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baoduong`
--
ALTER TABLE `baoduong`
  ADD PRIMARY KEY (`MABD`),
  ADD KEY `SOXE` (`SOXE`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MACV`);

--
-- Chỉ mục cho bảng `ctbd`
--
ALTER TABLE `ctbd`
  ADD PRIMARY KEY (`MABD`,`MACV`),
  ADD KEY `MACV` (`MACV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`SOXE`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baoduong`
--
ALTER TABLE `baoduong`
  ADD CONSTRAINT `baoduong_ibfk_1` FOREIGN KEY (`SOXE`) REFERENCES `xe` (`SOXE`);

--
-- Các ràng buộc cho bảng `ctbd`
--
ALTER TABLE `ctbd`
  ADD CONSTRAINT `ctbd_ibfk_1` FOREIGN KEY (`MABD`) REFERENCES `baoduong` (`MABD`),
  ADD CONSTRAINT `ctbd_ibfk_2` FOREIGN KEY (`MACV`) REFERENCES `congviec` (`MACV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
