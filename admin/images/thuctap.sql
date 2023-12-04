-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2023 lúc 06:18 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuctap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldsnhanvienchinhthuc`
--

CREATE TABLE `tbldsnhanvienchinhthuc` (
  `MaNVCT` int(11) NOT NULL,
  `Hopdong` text NOT NULL,
  `Ngaylamviec` date NOT NULL,
  `Luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbldsnhanvienchinhthuc`
--

INSERT INTO `tbldsnhanvienchinhthuc` (`MaNVCT`, `Hopdong`, `Ngaylamviec`, `Luong`) VALUES
(1, '1 năm', '2023-06-06', 4000000),
(2, '3 năm', '2023-06-04', 3500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldspvan`
--

CREATE TABLE `tbldspvan` (
  `mapv` int(15) NOT NULL,
  `ngaypv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbldspvan`
--

INSERT INTO `tbldspvan` (`mapv`, `ngaypv`) VALUES
(1, '2023-05-25'),
(2, '2023-06-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldsthuviec`
--

CREATE TABLE `tbldsthuviec` (
  `matv` int(15) NOT NULL,
  `luongtv` int(20) NOT NULL,
  `ngaytv` date NOT NULL,
  `ngaykt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbldsthuviec`
--

INSERT INTO `tbldsthuviec` (`matv`, `luongtv`, `ngaytv`, `ngaykt`) VALUES
(1, 2000000, '2023-05-02', '2023-05-30'),
(2, 4200000, '2023-05-03', '2023-05-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloc`
--

CREATE TABLE `tblloc` (
  `MaTV` int(11) NOT NULL,
  `TKQL` int(11) NOT NULL,
  `Ketqua` varchar(50) NOT NULL,
  `Ngayloc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblloc`
--

INSERT INTO `tblloc` (`MaTV`, `TKQL`, `Ketqua`, `Ngayloc`) VALUES
(1, 1653, 'đạt', '2023-06-29'),
(2, 1653, 'không đạt', '2023-06-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmotacv`
--

CREATE TABLE `tblmotacv` (
  `MaMT` int(15) NOT NULL,
  `mota` varchar(200) DEFAULT NULL,
  `ngaydang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblmotacv`
--

INSERT INTO `tblmotacv` (`MaMT`, `mota`, `ngaydang`) VALUES
(1, 'T&T cần tuyển vị trí kế toán cho công ty, môi trường năng động - chuyên nghiêp - nghiêm túc - uy tín, công việc đơn giản', '2023-05-09'),
(2, 'T&T cần tuyển vị trí nhân viên vận hành cho công ty, môi trường năng động, công việc đơn giản\r\nYêu cầu: \r\n- Thành thạo máy tính\r\n- Đức tính tốt, trung thực trong công việc\r\n', '2023-05-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnhanvien`
--

CREATE TABLE `tblnhanvien` (
  `MaNV` int(15) NOT NULL,
  `TenNV` varchar(200) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `gioitinh` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `hopdong` varchar(200) DEFAULT NULL,
  `chuyenmon` varchar(200) DEFAULT NULL,
  `MaPB` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblnhanvien`
--

INSERT INTO `tblnhanvien` (`MaNV`, `TenNV`, `ngaysinh`, `diachi`, `gioitinh`, `email`, `SDT`, `hopdong`, `chuyenmon`, `MaPB`) VALUES
(1, 'Nguyễn Ngọc Phương', '1995-05-17', 'Chương Mỹ, Hà Nội', 'Nữ', 'phuong@gmail.com', '0362985647', '2 năm', 'Excel', '1'),
(2, 'Ngô Văn Thắng', '2004-03-17', 'Đống Đa, Hà Nội', 'Nam', 'thang@gmail.com', '059868952', '1 năm', NULL, '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblphongban`
--

CREATE TABLE `tblphongban` (
  `MaPB` int(11) NOT NULL,
  `Tenphong` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblphongban`
--

INSERT INTO `tblphongban` (`MaPB`, `Tenphong`, `Email`, `SDT`) VALUES
(1, 'Phòng Kế toán', 't&t.pketoan@gmail.co', 369852147),
(2, 'Phòng Nhân viên vận hành', 't&t.pnhanvienvanhanh', 987452369),
(3, 'Phòng Quản lý nhân sự', 't&t.pquanlynhansu@gm', 369852364);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblquanly`
--

CREATE TABLE `tblquanly` (
  `TKQL` int(11) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblquanly`
--

INSERT INTO `tblquanly` (`TKQL`, `matkhau`) VALUES
(1653, '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblquanlynhansu`
--

CREATE TABLE `tblquanlynhansu` (
  `tkns` int(15) NOT NULL,
  `matkhau` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblquanlynhansu`
--

INSERT INTO `tblquanlynhansu` (`tkns`, `matkhau`) VALUES
(1000, '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltuyenpv`
--

CREATE TABLE `tbltuyenpv` (
  `mauv` int(15) NOT NULL,
  `tkns` int(15) NOT NULL,
  `mapv` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbltuyenpv`
--

INSERT INTO `tbltuyenpv` (`mauv`, `tkns`, `mapv`) VALUES
(1, 1000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblungvien`
--

CREATE TABLE `tblungvien` (
  `MaUV` int(15) NOT NULL,
  `hoten` varchar(200) DEFAULT NULL,
  `gioitinh` varchar(50) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `VitriUT` varchar(200) DEFAULT NULL,
  `chuyenmon` varchar(200) DEFAULT NULL,
  `CV` text DEFAULT NULL,
  `TKNS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblungvien`
--

INSERT INTO `tblungvien` (`MaUV`, `hoten`, `gioitinh`, `ngaysinh`, `SDT`, `email`, `diachi`, `VitriUT`, `chuyenmon`, `CV`, `TKNS`) VALUES
(1, 'Nguyễn Ý Lan', 'Nu', '1995-05-17', 32659874, 'abc@gmail.com', 'Ha Noi', 'Nhân viên vận hành', 'Vận hành', NULL, '1'),
(2, 'Đoàn Ngọc Chúc', 'Nữ', '1994-01-19', 369874569, 'chuc@gmail.com', 'Ha Noi', 'Kế toán', 'Kế toán', NULL, '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbldsnhanvienchinhthuc`
--
ALTER TABLE `tbldsnhanvienchinhthuc`
  ADD PRIMARY KEY (`MaNVCT`);

--
-- Chỉ mục cho bảng `tbldspvan`
--
ALTER TABLE `tbldspvan`
  ADD PRIMARY KEY (`mapv`);

--
-- Chỉ mục cho bảng `tbldsthuviec`
--
ALTER TABLE `tbldsthuviec`
  ADD PRIMARY KEY (`matv`);

--
-- Chỉ mục cho bảng `tblloc`
--
ALTER TABLE `tblloc`
  ADD PRIMARY KEY (`MaTV`);

--
-- Chỉ mục cho bảng `tblmotacv`
--
ALTER TABLE `tblmotacv`
  ADD PRIMARY KEY (`MaMT`);

--
-- Chỉ mục cho bảng `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `tblphongban`
--
ALTER TABLE `tblphongban`
  ADD PRIMARY KEY (`MaPB`);

--
-- Chỉ mục cho bảng `tblquanly`
--
ALTER TABLE `tblquanly`
  ADD PRIMARY KEY (`TKQL`);

--
-- Chỉ mục cho bảng `tblquanlynhansu`
--
ALTER TABLE `tblquanlynhansu`
  ADD PRIMARY KEY (`tkns`);

--
-- Chỉ mục cho bảng `tblungvien`
--
ALTER TABLE `tblungvien`
  ADD PRIMARY KEY (`MaUV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbldsnhanvienchinhthuc`
--
ALTER TABLE `tbldsnhanvienchinhthuc`
  MODIFY `MaNVCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbldspvan`
--
ALTER TABLE `tbldspvan`
  MODIFY `mapv` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbldsthuviec`
--
ALTER TABLE `tbldsthuviec`
  MODIFY `matv` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblmotacv`
--
ALTER TABLE `tblmotacv`
  MODIFY `MaMT` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  MODIFY `MaNV` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblphongban`
--
ALTER TABLE `tblphongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblquanly`
--
ALTER TABLE `tblquanly`
  MODIFY `TKQL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1654;

--
-- AUTO_INCREMENT cho bảng `tblquanlynhansu`
--
ALTER TABLE `tblquanlynhansu`
  MODIFY `tkns` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT cho bảng `tblungvien`
--
ALTER TABLE `tblungvien`
  MODIFY `MaUV` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
