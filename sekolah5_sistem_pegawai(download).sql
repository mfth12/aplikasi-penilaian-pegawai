-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2020 at 10:18 AM
-- Server version: 10.2.32-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah5_sistem_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penilaian`
--

CREATE TABLE `data_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `penginput_id` int(11) NOT NULL,
  `penginput_nama` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `tgl_penilaian` timestamp NOT NULL DEFAULT current_timestamp(),
  `nilai_1a` int(2) NOT NULL,
  `nilai_1b` int(2) NOT NULL,
  `nilai_2a` int(2) NOT NULL,
  `nilai_2b` int(2) NOT NULL,
  `nilai_2c` int(2) NOT NULL,
  `nilai_2d` int(2) NOT NULL,
  `nilai_3a` int(2) NOT NULL,
  `nilai_3b` int(2) NOT NULL,
  `nilai_3c` int(2) NOT NULL,
  `nilai_3d` int(2) NOT NULL,
  `nilai_4a` int(2) NOT NULL,
  `nilai_4b` int(2) NOT NULL,
  `nilai_4c` int(2) NOT NULL,
  `nilai_4d` int(2) NOT NULL,
  `nilai_4e` int(2) NOT NULL,
  `nilai_5a` int(2) NOT NULL,
  `nilai_5b` int(2) NOT NULL,
  `nilai_5c` int(2) NOT NULL,
  `nilai_5d` int(2) NOT NULL,
  `avg_nilai_1` float(5,2) NOT NULL,
  `avg_nilai_2` float(5,2) NOT NULL,
  `avg_nilai_3` float(5,2) NOT NULL,
  `avg_nilai_4` float(5,2) NOT NULL,
  `avg_nilai_5` float(5,2) NOT NULL,
  `avg_semua` float(6,2) NOT NULL,
  `teks_penilai` text NOT NULL,
  `teks_pegawai` text NOT NULL,
  `teks_tgp_penilai` text NOT NULL,
  `teks_yayasan` text NOT NULL,
  `teks_ket` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penilaian`
--

INSERT INTO `data_penilaian` (`id_penilaian`, `penginput_id`, `penginput_nama`, `user_id`, `full_name`, `unit`, `tahun`, `tgl_penilaian`, `nilai_1a`, `nilai_1b`, `nilai_2a`, `nilai_2b`, `nilai_2c`, `nilai_2d`, `nilai_3a`, `nilai_3b`, `nilai_3c`, `nilai_3d`, `nilai_4a`, `nilai_4b`, `nilai_4c`, `nilai_4d`, `nilai_4e`, `nilai_5a`, `nilai_5b`, `nilai_5c`, `nilai_5d`, `avg_nilai_1`, `avg_nilai_2`, `avg_nilai_3`, `avg_nilai_4`, `avg_nilai_5`, `avg_semua`, `teks_penilai`, `teks_pegawai`, `teks_tgp_penilai`, `teks_yayasan`, `teks_ket`, `status`) VALUES
(370, 796, 'Kepala Sekolah SD', 808, '55 Limaaaaa', 'SDIT', 2020, '2020-09-01 01:17:49', 89, 86, 43, 67, 64, 67, 87, 34, 66, 76, 89, 46, 76, 45, 63, 88, 79, 97, 87, 87.50, 60.25, 65.75, 63.80, 87.75, 73.01, 'bekerja dengan baik', '', '', '', '', 0),
(371, 796, 'Kepala Sekolah SD', 795, 'Hanya User Pegawai Saja', 'SDIT', 2020, '2020-09-01 02:50:47', 98, 76, 54, 88, 79, 97, 83, 86, 87, 86, 54, 78, 65, 78, 64, 57, 87, 56, 88, 87.00, 79.50, 85.50, 67.80, 72.00, 78.36, 'baik saja', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_user`
--

CREATE TABLE `pegawai_user` (
  `user_id` int(11) NOT NULL,
  `nik` varchar(24) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('pegawai','admin','kepsek') NOT NULL DEFAULT 'pegawai',
  `unit` varchar(50) NOT NULL,
  `pangkat_gol` varchar(64) NOT NULL,
  `jabatan_pekerjaan` varchar(64) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_user`
--

INSERT INTO `pegawai_user` (`user_id`, `nik`, `password`, `email`, `full_name`, `tempat`, `tgl_lahir`, `phone`, `role`, `unit`, `pangkat_gol`, `jabatan_pekerjaan`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(817, '19710802.200307.2.001', '687b2142f7427611c52f58c7c559ad4c', '', 'Eva Rahmawati, S.Pt', 'Panampung', '1971-08-02', '', 'admin', 'YAYASAN', 'IV/b', 'Pegawai Tetap Yayasan', '2020-09-01 07:55:17', 'default.jpg', '2020-09-01 07:26:34', 1),
(818, '19581105.200410.1.005', '3236045f467eaf096eb8b45058033070', '', 'J. Syahrial Zakaria', 'Palembang', '1958-11-05', '', 'admin', 'YAYASAN', 'III/a', 'Pegawai Tetap Yayasan', '2020-09-01 07:33:05', 'default.jpg', '2020-09-01 07:33:05', 1),
(819, '19830506.201303.1.052', '045c933e007d75c13fde9d1d719106e5', '', 'Junei Efendi', 'Tanjungpinang', '1983-09-27', '', 'pegawai', 'YAYASAN', 'I/d', 'Pegawai Tetap Yayasan', '2020-09-01 07:39:05', 'default.jpg', '2020-09-01 07:39:05', 1),
(820, '19920216.201407.2.062', '7ae32dd97a32d6d4e02df2e3dd47bef1', '', 'Putri Melati, S. Ak.', 'Tanjungpinang', '1992-02-16', '', 'pegawai', 'YAYASAN', 'III/b', 'Pegawai Tetap Yayasan', '2020-09-02 01:12:38', 'default.jpg', '2020-09-01 07:47:15', 1),
(821, 'mfth12', '6fbba95bf77028dfd3270ce0937c3984', 'ciftah12@gmail.com', 'Miftahul Haq', 'Bekasi', '1997-12-28', '081331847725', 'admin', 'YAYASAN', 'Developer', 'Karyawan Magang', '2020-09-02 01:54:38', 'Miftahul_Haq.png', '2020-09-02 00:54:12', 1),
(822, '19840509.201708.1.098', '245f4ce27cac0188b1c6d82eadfad9da', '', 'Ma\'ruf Alkaffah ', 'Tanjung Karang', '1984-05-09', '', 'pegawai', 'YAYASAN', 'II/a', 'Pegawai Tetap Yayasan', '2020-09-02 00:56:57', 'default.jpg', '2020-09-02 00:56:57', 1),
(823, '19730310.201707.1.079', '93e31df7e1622ea3cbb096264996f235', '', 'Nasrum MD, S.Pd', '', '', '', 'admin', 'RA', 'IV/a', 'Pegawai Tetap Yayasan', '2020-09-02 01:10:22', 'default.jpg', '2020-09-02 01:10:22', 1),
(824, '19840105.200507.2.009', '961c4a58ce8e64307464f5e6fe420275', '', 'Eni Kusumawati, S. Pd. AUD', 'Surabaya', '1984-01-05', '', 'kepsek', 'RA', 'III/b', 'Pegawai Tetap Yayasan', '2020-09-02 03:09:34', 'default.jpg', '2020-09-02 02:01:13', 1),
(825, '19730423.201807.2.100', '1ca98b358edbb065001d4f9a747ff61b', '', 'Mubadiatul Khoiroh, S.Pd.I', 'Pacitan', '1976-12-27', '', 'pegawai', 'RA', 'III/a', 'Pegawai Tetap Yayasan', '2020-09-02 02:31:07', 'default.jpg', '2020-09-02 02:31:07', 1),
(826, '19831223.202007.2.116', 'ce3ccc5be92a340084035e89dd9144f7', '', 'Pipin Suherpina', 'Medan', '1983-12-23', '', 'pegawai', 'RA', 'II/a', 'Pegawai Tetap Yayasan', '2020-09-02 02:42:24', 'default.jpg', '2020-09-02 02:42:24', 1),
(827, '19980801.201707.2.107', '717b84b160bf3fb58e8e5ce9315194ca', '', 'Maryati Yolanda Hidayatun Nur', 'Tanjungpinang', '1998-08-01', '', 'pegawai', 'RA', 'II/a', 'Pegawai Tetap Yayasan', '2020-09-02 03:04:41', 'default.jpg', '2020-09-02 03:04:41', 1),
(828, '19710809.200306.2.002', '9e404f97ca36306caa0945f68f80b3ea', '', 'Indrayani, A.Ma', 'Talawi', '1971-08-09', '', 'pegawai', 'RA', 'III/b', 'Pegawai Tetap Yayasan', '2020-09-02 03:06:00', 'default.jpg', '2020-09-02 03:06:00', 1),
(829, '19800313.200507.2.010', '80d3bbec6d81e8b1b58125cc9b4ef7d8', '', 'Ita Marzana, A. Ma', 'Tanjungpinang', '1980-03-13', '', 'pegawai', 'RA', 'III/a', 'Pegawai Tetap Yayasan', '2020-09-02 03:07:14', 'default.jpg', '2020-09-02 03:07:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `per_tahun`
--

CREATE TABLE `per_tahun` (
  `tahun_id` int(4) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_tahun`
--

INSERT INTO `per_tahun` (`tahun_id`, `tahun`) VALUES
(910, 2018),
(911, 2019),
(912, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `per_unit`
--

CREATE TABLE `per_unit` (
  `unit_id` int(4) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_unit`
--

INSERT INTO `per_unit` (`unit_id`, `unit`) VALUES
(403, 'RA'),
(401, 'SDIT'),
(402, 'SMPIT'),
(404, 'YAYASAN');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
('5f2c3f9d2afc0', 'Speaker JBL GO', 24900, '5f2c3f9d2afc0.png', 'JBL resmi dari singapore, garansi IMS indonesia\r\n'),
('5f2c3fbb3a1ca', 'Kacamata Anti-blue', 90000, '5f2c3fbb3a1ca.jpg', 'berapa saja yang mau beli, silakan'),
('5f2c41f3a3bd4', 'iPhone SE', 238000012, '5f2c41f3a3bd4.jpg', 'ini hape terbaru lho..'),
('5f2ca9e022526', 'listrik api', 59000, '5f2ca9e022526.jpg', 'pengiriman lewat JNE'),
('5f2cb83a02c07', 'laptop acer swift 5', 7500000, 'default.jpg', 'diskon 50%'),
('5f2cc90e6d339', 'Kacamata Anti-red', 600, 'default.jpg', 'biasa aja kacamata nya'),
('5f2cc9fe9de8f', 'Botol Aqua kaleng', 23, '5f2cc9fe9de8f.png', '23'),
('5f2ccae5e393d', 'belajar bersama saya kuy', 230001, 'default.jpg', 'yuup'),
('5f2ccb0dc8d13', 'iPod 3s', 2147483647, 'default.jpg', 'tidak ada stok lagi'),
('5f30bf3c66afc', 'baru99', 5, '5f30bf3c66afc.png', '999999'),
('5f30c015dd50c', 'kanzun', 454545454, '5f30c015dd50c.png', 'fx'),
('5f316e545dde7', 'cisco', 20, '5f316e545dde7.png', 'dua puluh'),
('5f31efd01bed5', 'Besok Pagi', 2300, 'default.jpg', 'geratis'),
('5f31f3754e797', 'Gelas Kaca', 80000, '5f31f3754e797.png', 'new brand'),
('5f31f7e818063', 'aaaaaaaaaaa', 23, 'default.jpg', 'aku'),
('5f31f85e8f8da', 'kanzunn 2', 29, 'default.jpg', 'ada baru'),
('5f3b400abc40f', 'leptop asus ROG', 430000, 'default.jpg', 'Beli 1 gratis 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `password`, `nama`, `role`) VALUES
(1, 'nisa', '25d55ad283aa400af464c76d713c07ad', 'Annisa Trisnanda Lutfia', 'admin'),
(2, 'siska', '40159ac8fd3c00cb696f847442264fc0', 'Siska Melina Rachman', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `pegawai_user`
--
ALTER TABLE `pegawai_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `unit` (`unit`);

--
-- Indexes for table `per_tahun`
--
ALTER TABLE `per_tahun`
  ADD PRIMARY KEY (`tahun_id`),
  ADD UNIQUE KEY `tahun` (`tahun`);

--
-- Indexes for table `per_unit`
--
ALTER TABLE `per_unit`
  ADD PRIMARY KEY (`unit_id`),
  ADD UNIQUE KEY `unit` (`unit`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penilaian`
--
ALTER TABLE `data_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

--
-- AUTO_INCREMENT for table `pegawai_user`
--
ALTER TABLE `pegawai_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=830;

--
-- AUTO_INCREMENT for table `per_tahun`
--
ALTER TABLE `per_tahun`
  MODIFY `tahun_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=913;

--
-- AUTO_INCREMENT for table `per_unit`
--
ALTER TABLE `per_unit`
  MODIFY `unit_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
