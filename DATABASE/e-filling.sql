-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-filling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nama_pt` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `stock` int(10) NOT NULL,
  `status` enum('tampilkan','sembunyikan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `name`, `nama_pt`, `kode`, `desc`, `stock`, `status`) VALUES
(47, 'CASH-PT.TPIN-CASH/TPIN/IV/22/001', 'TPIN-PT.TT.Techno park indonesia', 'CASH/TPIN/IV/22/001', 'Nama tidak lengkap', 11, 'tampilkan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjam`
--

CREATE TABLE `tbl_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjam`
--

INSERT INTO `tbl_peminjam` (`id_peminjam`, `username`, `password`, `name`, `email`) VALUES
(41, 'haykal', 'Bz8BaFEsBmkLawU4BjsINVYy', 'haykal rizki', 'haykal456@gmail.com'),
(46, 'johan', 'AjgAZwRoDmtXOA==', 'johan1', 'asep@gmail.com'),
(47, 'superadmin', 'XTwKMFJlV2dXYw==', 'ddd', 'hafid27@gmail.com'),
(48, 'guest', 'VDUONFRjBzcGMg==', 'hafid', 'hafid27@gmail.com'),
(49, 'kakak', 'UzILMV9oV2dWYg==', 'kakak', 'kaka@gmail.com'),
(50, 'assifa', 'UzIKMFdgDj4BNQ==', 'assifa', 'assifa@gmail.com'),
(51, 'hafid', 'BWRcZlViBDQFMQ==', 'Hafid Robbi Assifa', 'hafidrobbi@gmail.com'),
(54, 'leni', 'Aj4NYF81VDk=', 'leni', 'leni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `username`, `password`, `name`, `email`, `photo`) VALUES
(1, 'superadmin', 'XTwKMFJlV2dXYw==', 'hafid', 'hafidrobbi@email.com', ''),
(3, 'hafid', 'VDUONFRjBzcGMg==', 'hafidrobbi', 'hafidrobbi2@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_fasilitas` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_fasilitas`, `jml`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(43, 38, 1, 5, '2018-11-02 21:32:43', '0000-00-00 00:00:00', '1'),
(45, 38, 2, 3, '2018-11-02 21:33:02', '0000-00-00 00:00:00', '0'),
(46, 38, 3, 5, '2018-11-02 23:32:16', '0000-00-00 00:00:00', '0'),
(47, 30, 1, 5, '2018-11-02 23:42:06', '0000-00-00 00:00:00', '0'),
(50, 41, 11, 2, '2022-10-06 22:41:13', '2022-10-06 22:41:53', '2'),
(52, 49, 1, 2, '2022-10-12 21:03:22', '0000-00-00 00:00:00', '1'),
(53, 47, 11, 2, '2022-10-28 21:38:50', '0000-00-00 00:00:00', '1'),
(54, 47, 11, 1, '2022-10-28 21:39:05', '0000-00-00 00:00:00', '1'),
(55, 47, 11, 1, '2022-10-28 21:40:37', '0000-00-00 00:00:00', '1'),
(61, 49, 18, 2, '2022-11-11 03:18:39', '0000-00-00 00:00:00', '0'),
(62, 49, 18, 1, '2022-11-11 03:19:29', '0000-00-00 00:00:00', '0'),
(63, 49, 11, 3, '2022-11-11 04:56:04', '0000-00-00 00:00:00', '0'),
(67, 51, 43, 1, '2022-11-14 20:26:59', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_fasilitas` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_fasilitas`, `jml`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(58, 49, 11, 2, '2022-11-11 01:28:37', '2022-11-11 04:38:52', '1'),
(59, 49, 11, 2, '2022-11-11 03:01:11', '2022-11-11 04:38:54', '1'),
(60, 49, 11, 1, '2022-11-11 03:18:21', '2022-11-11 04:38:55', '1'),
(64, 49, 29, 1, '2022-11-11 05:22:37', '2022-11-11 05:29:56', '1'),
(65, 49, 30, 1, '2022-11-11 05:22:43', '2022-11-11 05:29:59', '1'),
(66, 51, 29, 1, '2022-11-11 06:02:07', '2022-11-11 06:03:21', '1'),
(68, 46, 47, 1, '2022-11-14 20:59:00', '2022-11-14 21:03:34', '1'),
(69, 51, 47, 1, '2022-11-14 21:21:21', '0000-00-00 00:00:00', '0'),
(70, 51, 47, 1, '2022-11-14 21:23:25', '2022-11-14 21:23:56', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
