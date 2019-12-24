-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2019 lúc 06:01 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_quanlydiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `MaSV` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaMH` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DQT` float DEFAULT NULL,
  `DT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`MaSV`, `MaMH`, `DQT`, `DT`) VALUES
('175A0', '1', 1, 4),
('175A1', '1', 10, 9);

--
-- Bẫy `diem`
--
DELIMITER $$
CREATE TRIGGER `tg_diem` AFTER INSERT ON `diem` FOR EACH ROW INSERT diemsv VALUES (null,(NEW.DQT*(SELECT monh.HS FROM monh WHERE monh.MaMH = NEW.MaMH)+NEW.DT*(1.0-(SELECT monh.HS FROM monh WHERE monh.MaMH = NEW.MaMH))), NEW.MAMH, NEW.MaSV)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_update_diem` AFTER UPDATE ON `diem` FOR EACH ROW UPDATE diemsv SET diemsv.diem10 = (NEW.DQT*(SELECT monh.HS FROM monh WHERE monh.MaMH = NEW.MaMH)+NEW.DT*(1.0-(SELECT monh.HS FROM monh WHERE monh.MaMH = NEW.MaMH))) WHERE diemsv.MaSV = NEW.MaSV and diemsv.MaMH = NEW.MaMH
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaidoan`
--

CREATE TABLE `giaidoan` (
  `MaGD` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Nam` int(4) NOT NULL,
  `KyH` int(1) NOT NULL,
  `GD` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giaidoan`
--

INSERT INTO `giaidoan` (`MaGD`, `Nam`, `KyH`, `GD`) VALUES
('GD12019', 2019, 1, 1),
('GD12020', 2020, 1, 1),
('GD22019', 2019, 1, 2),
('GD22020', 2020, 1, 2),
('GD32019', 2019, 2, 3),
('GD32020', 2020, 2, 3),
('GD42019', 2019, 2, 4),
('GD42020', 2020, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gv`
--

CREATE TABLE `gv` (
  `MaGV` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NamSinh` int(11) DEFAULT NULL,
  `Que` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gv`
--

INSERT INTO `gv` (`MaGV`, `HoTen`, `NamSinh`, `Que`) VALUES
('GV1', 'Kiều Tuấn Dũng', 1976, 'Hà Nội'),
('GV2', 'Trần Tuấn Tài', 1978, 'Hà Nội'),
('GV3', 'Nguyễn Văn Đông', 1982, 'Hà Nội'),
('GV4', 'Nguyễn Văn Hùng', 1984, 'Hà Nội'),
('GV5', 'Phạm Văn Đồng', 1972, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaL` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenL` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaL`, `TenL`) VALUES
('59PM1', 'K59PM1'),
('59PM2', 'K59TH2'),
('59TH1', 'K59TH1'),
('59TH2', 'K59TH2'),
('59TH3', 'K59TH3'),
('59TH4', 'K59TH4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophp`
--

CREATE TABLE `lophp` (
  `MaLHP` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenLHP` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaMH` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaGV` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaGD` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lophp`
--

INSERT INTO `lophp` (`MaLHP`, `TenLHP`, `MaMH`, `MaGV`, `MaGD`) VALUES
('1', 'Công Ngh', '1', 'GV1', 'GD12019'),
('2', 'Công Ngh', '1', 'GV2', 'GD12019'),
('3', 'Công Ngh', '1', 'GV3', 'GD12019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monh`
--

CREATE TABLE `monh` (
  `MaMH` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenMH` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaN` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `STC` int(11) NOT NULL,
  `HS` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `monh`
--

INSERT INTO `monh` (`MaMH`, `TenMH`, `MaN`, `STC`, `HS`) VALUES
('1', 'công nghệ web', 'CNTT', 3, 0.4),
('2', 'Phân Tích thiết kế HTTT', 'CNTT', 3, 0.4),
('3', 'CGW', 'CNTT', 3, 0.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `MaN` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenN` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`MaN`, `TenN`) VALUES
('CNTT', 'Công nghệ Thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sv`
--

CREATE TABLE `sv` (
  `MaSV` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaL` varchar(8) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `HoTen` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NamSinh` int(4) DEFAULT NULL,
  `CMT` int(12) DEFAULT NULL,
  `Que` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sv`
--

INSERT INTO `sv` (`MaSV`, `MaL`, `HoTen`, `NamSinh`, `CMT`, `Que`) VALUES
('175A0', '59TH1', 'Trịnh Văn Tú', 1999, 1099017269, 'Hà Nội'),
('175A1', '59TH1', 'Nguyễn Anh Tuấn', 1999, 1099017269, 'Hà Nội'),
('175A10', '59TH3', 'Trịnh A A', 1999, 1099017269, 'Hà Nội'),
('175A11', '59TH3', 'Nguyễn Tái Tú', 1999, 1099017269, 'Hà Nội'),
('175A12', '59TH4', 'Trịnh Tàu T', 1999, 1099017269, 'Hà Nội'),
('175A13', '59TH4', 'Nguyễn Thế Tú', 1999, 1099017269, 'Hà Nội'),
('175A14', '59TH4', 'Trịnh Văn C', 1999, 1099017269, 'Hà Nội'),
('175A15', '59TH4', 'Trịnh Văn B', 1999, 1099017269, 'Hà Nội'),
('175A16', '59PM1', 'Nguyễn Văn A', 1999, 1099017269, 'Hà Nội'),
('175A17', '59PM1', 'Trịnh Văn AI', 1999, 1099017269, 'Hà Nội'),
('175A18', '59PM1', 'Nguyễn Văn Thế', 1999, 1099017269, 'Hà Nội'),
('175A19', '59PM1', 'Nguyễn Văn Đao', 1999, 1099017269, 'Hà Nội'),
('175A2', '59TH1', 'Nguyễn Thế Tú', 1999, 1099017269, 'Hà Nội'),
('175A3', '59TH1', 'Nguyễn Anh Tú', 1999, 1099017269, 'Hà Nội'),
('175A4', '59TH2', 'Trịnh Văn Tuấn', 1999, 1099017269, 'Hà Nội'),
('175A5', '59TH2', 'Tào Văn Tuấn', 1999, 1099017269, 'Hà Nội'),
('175A6', '59TH2', 'Nguyễn Văn G', 1999, 1099017269, 'Hà Nội'),
('175A7', '59TH2', 'Trịnh Tú', 1999, 1099017269, 'Hà Nội'),
('175A8', '59TH3', 'Trịnh Văn Tú', 1999, 1099017269, 'Hà Nội'),
('175A9', '59TH3', 'NGuyễn Văn A', 1999, 1099017269, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `username` varchar(8) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `level`) VALUES
('admin', '1', 1),
('giaovien', '1', 3),
('quanli', '1', 2),
('sinhvien', '1', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`MaSV`,`MaMH`),
  ADD KEY `MaSV` (`MaSV`,`MaMH`),
  ADD KEY `diem_ibfk_2` (`MaMH`);

--
-- Chỉ mục cho bảng `giaidoan`
--
ALTER TABLE `giaidoan`
  ADD PRIMARY KEY (`MaGD`);

--
-- Chỉ mục cho bảng `gv`
--
ALTER TABLE `gv`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaL`);

--
-- Chỉ mục cho bảng `lophp`
--
ALTER TABLE `lophp`
  ADD PRIMARY KEY (`MaLHP`),
  ADD KEY `MaMH` (`MaMH`,`MaGV`,`MaGD`),
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaGD` (`MaGD`);

--
-- Chỉ mục cho bảng `monh`
--
ALTER TABLE `monh`
  ADD PRIMARY KEY (`MaMH`),
  ADD KEY `MaN` (`MaN`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaN`);

--
-- Chỉ mục cho bảng `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaL` (`MaL`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sv` (`MaSV`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaMH`) REFERENCES `monh` (`MaMH`);

--
-- Các ràng buộc cho bảng `lophp`
--
ALTER TABLE `lophp`
  ADD CONSTRAINT `lophp_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `gv` (`MaGV`),
  ADD CONSTRAINT `lophp_ibfk_2` FOREIGN KEY (`MaGD`) REFERENCES `giaidoan` (`MaGD`),
  ADD CONSTRAINT `lophp_ibfk_4` FOREIGN KEY (`MaMH`) REFERENCES `monh` (`MaMH`);

--
-- Các ràng buộc cho bảng `monh`
--
ALTER TABLE `monh`
  ADD CONSTRAINT `monh_ibfk_1` FOREIGN KEY (`MaN`) REFERENCES `nganh` (`MaN`);

--
-- Các ràng buộc cho bảng `sv`
--
ALTER TABLE `sv`
  ADD CONSTRAINT `sv_ibfk_1` FOREIGN KEY (`MaL`) REFERENCES `lop` (`MaL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
