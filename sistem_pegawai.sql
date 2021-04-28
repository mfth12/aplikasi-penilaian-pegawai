-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 06:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pegawai`
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
  `tgl_penilaian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penilaian`
--

INSERT INTO `data_penilaian` (`id_penilaian`, `penginput_id`, `penginput_nama`, `user_id`, `full_name`, `unit`, `tahun`, `tgl_penilaian`, `nilai_1a`, `nilai_1b`, `nilai_2a`, `nilai_2b`, `nilai_2c`, `nilai_2d`, `nilai_3a`, `nilai_3b`, `nilai_3c`, `nilai_3d`, `nilai_4a`, `nilai_4b`, `nilai_4c`, `nilai_4d`, `nilai_4e`, `nilai_5a`, `nilai_5b`, `nilai_5c`, `nilai_5d`, `avg_nilai_1`, `avg_nilai_2`, `avg_nilai_3`, `avg_nilai_4`, `avg_nilai_5`, `avg_semua`, `teks_penilai`, `teks_pegawai`, `teks_tgp_penilai`, `teks_yayasan`, `teks_ket`, `status`) VALUES
(346, 796, 'kepala sekolah sd', 812, 'Pegawai Magang SD', 'SDIT', 2017, '2020-08-27 17:23:19', 87, 55, 32, 33, 45, 12, 33, 32, 23, 12, 33, 22, 12, 33, 23, 31, 22, 21, 2, 71.00, 30.50, 25.00, 24.60, 19.00, 99.99, 'o0o', '', '', '', '', 0),
(347, 796, '', 812, 'Pegawai Magang SD', 'SDIT', 2017, '2020-08-27 17:27:11', 83, 12, 77, 23, 74, 99, 86, 74, 23, 88, 21, 33, 65, 43, 77, 53, 78, 8, 63, 47.50, 68.25, 67.75, 47.80, 50.50, 65.00, 'weeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksifweeeeeee banyak sdkekna a ansk casdeuh sadijsij aksdksad edkejsh asodkoska sokdoaksd aoksougkc,xmdm sdkksif', '', '', '', '', 0),
(348, 796, 'Miftahu', 795, 'Hanya User Pegawai Saja', 'SDIT', 2019, '2020-08-27 17:28:47', 98, 12, 88, 75, 76, 88, 93, 21, 2, 8, 99, 75, 46, 7, 88, 76, 87, 65, 5, 55.00, 81.75, 31.00, 63.00, 58.25, 51.80, '3223332as dnaknkfkmekmdmfkxd', 'iyaaaappppps', 'kedua kalinya saya menyetujui ini.', 'terima', '', 5),
(349, 796, '', 812, 'Pegawai Magang SD', 'SDIT', 2020, '2020-08-27 17:30:41', 98, 12, 88, 76, 54, 77, 86, 64, 67, 32, 4, 32, 3, 8, 8, 77, 42, 47, 65, 55.00, 73.75, 62.25, 11.00, 57.75, 83.50, 'sintaks', '', '', '', '', 5),
(350, 796, 'Miftahul', 812, 'Pegawai Magang SD', 'SDIT', 2017, '2020-08-27 17:34:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 13.00, '9', '', '', 'tidak', '', 6),
(351, 771, '', 811, 'Guru Biasa SDIT', 'SDIT', 2017, '2020-08-28 00:54:25', 2, 2, 22, 52, 42, 23, 12, 2, 43, 21, 22, 24, 32, 22, 23, 23, 43, 3, 33, 2.00, 34.75, 19.50, 24.60, 25.50, 12.27, 'wertyuiop', '', '', '', '', 0),
(353, 796, '73 Kepala Sekolah', 813, '98', 'SDIT', 2019, '2020-08-28 07:25:55', 84, 94, 27, 98, 77, 36, 76, 83, 76, 88, 69, 76, 72, 21, 78, 33, 76, 8, 87, 89.00, 59.50, 80.75, 63.20, 51.00, 68.69, 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', '', '', '', '', 6),
(354, 796, '73 Kepala Sekolah', 812, 'Pegawai Magang SD', 'SDIT', 2020, '2020-08-28 07:46:08', 65, 88, 72, 12, 53, 6, 22, 15, 26, 15, 29, 13, 52, 95, 73, 23, 34, 93, 3, 76.50, 35.75, 19.50, 52.40, 38.25, 44.48, 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum', '', '', '', '', 0),
(355, 796, '73 Kepala Sekolah', 795, 'Hanya User Pegawai Saja', 'SDIT', 2017, '2020-08-28 07:57:07', 80, 32, 74, 88, 96, 42, 72, 12, 2, 8, 9, 6, 54, 8, 23, 32, 2, 8, 9, 56.00, 75.00, 23.50, 20.00, 12.75, 37.45, 'Dari mana saya bisa mendapatkannya?\r\nAda banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur hum', 'Terimakasih banyak yaaa', 'sudah disetujui', 'terima', '', 5),
(356, 796, '73 Kepala Sekolah', 813, '98', 'SDIT', 2017, '2020-08-28 08:22:50', 89, 46, 43, 57, 87, 65, 88, 96, 56, 76, 88, 57, 84, 83, 85, 79, 75, 87, 58, 67.50, 63.00, 79.00, 79.40, 74.75, 72.73, ' seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem', '', '', '', '', 0),
(357, 796, '73 Kepala Sekolah', 812, 'Pegawai Magang SD', 'SDIT', 2020, '2020-08-28 08:56:37', 8, 76, 5, 4, 6, 7, 8, 6, 44, 6, 55, 6, 3, 4, 5, 4, 2, 33, 6, 42.00, 5.50, 16.00, 14.60, 11.25, 17.87, ' seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem', '', '', '', '', 0),
(358, 794, 'kepala sekolah baru', 805, 'satu dua tiga', 'SMPIT', 2017, '2020-08-28 09:16:31', 67, 4, 55, 2, 3, 2, 3, 5, 6, 8, 65, 34, 76, 3, 4, 6, 53, 56, 7, 35.50, 15.50, 5.50, 36.40, 30.50, 24.68, 'hard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata lat', '', '', '', '', 0),
(359, 796, '73 Kepala Sekolah', 811, 'Guru Biasa SDIT', 'SDIT', 2020, '2020-08-29 13:36:59', 17, 87, 56, 86, 89, 75, 88, 68, 95, 86, 86, 88, 46, 86, 87, 64, 89, 65, 82, 52.00, 76.50, 84.25, 78.60, 75.00, 73.27, 'amskdm ja sd azuf sjdksajbfs asiufiwe', '', '', '', '', 0),
(360, 780, 'Hapsari Raisa', 805, 'satu dua tiga', 'SMPIT', 2017, '2020-08-29 14:15:08', 98, 56, 77, 85, 97, 4, 77, 86, 45, 78, 43, 67, 54, 67, 88, 65, 7, 88, 96, 77.00, 65.75, 71.50, 63.80, 64.00, 68.41, 'kedisiplinan baik, mudah diatur, dan orangnya ramah terhadap sesama\r\n', '', '', '', '', 0),
(361, 780, 'Hapsari Raisa', 807, '4a 4a 4aaaa', 'SMPIT', 2017, '2020-08-29 14:48:21', 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12.00, 0.00, 0.00, 0.00, 0.00, 2.40, '2345678yhfgdfs', 'kenapa nilai saya kurang sekali?\r\nsdsa', 'mungkin anda kurang kompeten dalam bidang ini.', 'baik. saya approve penilaian nya', '', 5),
(362, 780, 'Hapsari Raisa', 807, '4a 4a 4aaaa', 'SMPIT', 2020, '2020-08-29 14:51:49', 64, 64, 22, 12, 65, 23, 54, 32, 68, 76, 97, 53, 67, 88, 56, 74, 89, 64, 5, 64.00, 30.50, 57.50, 72.20, 58.00, 56.44, 'asdmsamodmosmdosmdomsomdomsdms', 'iya, saya konfirmasi sekarang', '', '', '', 1),
(363, 796, '73 Kepala Sekolah SD', 808, '55 Limaaaaa', 'SDIT', 2019, '2020-08-30 02:22:22', 76, 64, 34, 63, 24, 5, 6, 32, 56, 54, 88, 64, 64, 23, 94, 64, 23, 56, 44, 70.00, 31.50, 37.00, 66.60, 46.75, 50.37, '876543wsdfghjuiytresddfghjukyutredsdfgfhtyjyutrfsd', '', '', '', '', 0),
(364, 780, 'Hapsari Raisa', 807, '4a 4a 4aaaa', 'SMPIT', 2020, '2020-08-30 05:58:35', 98, 65, 87, 65, 78, 78, 94, 87, 79, 76, 84, 89, 78, 75, 88, 59, 73, 86, 99, 81.50, 77.00, 84.00, 82.80, 79.25, 80.91, 'pegawai baru, bagus sekali kinerja nya. saya suka', 'alhamdulillah, terimakasih banyak ya', 'iya, kinerja anda sangat memuaskan. terimakasih', 'sya tolak', '', 6),
(365, 782, 'Kepala Sekolah TK', 816, '1 aja', 'RA', 2020, '2020-08-30 16:51:23', 87, 75, 90, 64, 34, 76, 88, 74, 32, 47, 98, 32, 43, 56, 36, 56, 43, 56, 74, 81.00, 66.00, 60.25, 53.00, 57.25, 63.50, 'cukup baik dan berkompeten', 'baik lah', 'okeee\r\n', 'sip', '', 6),
(366, 796, 'Kepala Sekolah SD', 795, 'Hanya User Pegawai Saja', 'SDIT', 2020, '2020-08-31 00:58:54', 90, 72, 87, 68, 90, 87, 97, 89, 67, 87, 86, 79, 76, 88, 57, 83, 87, 88, 96, 81.00, 83.00, 85.00, 77.20, 88.50, 82.94, 'bacaan quran nya harus ditingkatkan lagi.', 'tidak keberatan', 'baik', 'baik lah', '', 5),
(367, 782, 'Kepala Sekolah TK', 816, '1 aja', 'RA', 2017, '2020-08-31 01:45:36', 12, 12, 65, 32, 32, 11, 23, 43, 45, 32, 1, 23, 54, 22, 43, 45, 43, 22, 43, 12.00, 35.00, 35.75, 28.60, 38.25, 29.92, '111111111111111', '', '', '', '', 0),
(368, 796, 'Kepala Sekolah SD', 795, 'Hanya User Pegawai Saja', 'SDIT', 2020, '2020-08-31 03:33:34', 67, 65, 33, 100, 67, 42, 11, 34, 23, 2, 56, 43, 21, 34, 33, 44, 55, 42, 1, 66.00, 60.50, 17.50, 37.40, 35.50, 43.38, 'baik', 'yia, terimakasih', 'aaaa', 'ditolak', '', 6);

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
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(64) NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_user`
--

INSERT INTO `pegawai_user` (`user_id`, `nik`, `password`, `email`, `full_name`, `tempat`, `tgl_lahir`, `phone`, `role`, `unit`, `pangkat_gol`, `jabatan_pekerjaan`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(771, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ciftah12@gmail.com', 'Miftahul Haq 2', 'Bekasi Barat', '2020-12-28', '081331847725', 'admin', 'SMPIT', 'IXc', 'Team IT', '2020-08-31 03:55:06', 'Miftahul_Haq.png', '2020-08-24 08:19:10', 1),
(780, 'kepseksmp', 'b6a8fafbd269f881e6e7c60dfd0518f4', 'raisa12@gmail.com', 'Hapsari Raisa', 'Bekasi', '1999-08-10', '0822274849578', 'kepsek', 'SMPIT', 'Ib', 'Guru Bahasa ingris', '2020-08-31 03:15:14', 'Hapsari_Raisa.jpg', '2020-08-15 01:24:35', 1),
(782, 'kepsekra', '86c17c0e5fc568858476b4d8ced3b728', 'teladan@2222221.com', 'Kepala Sekolah TK', 'Bekasi Barat', '2020-08-14', '88236409', 'kepsek', 'RA', '', 'Wakil Kepala Sekolah', '2020-08-31 01:47:31', 'Kepala_Sekolah_TK.png', '2020-08-14 08:31:48', 1),
(795, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'nu@gmail.co', 'Hanya User Pegawai Saja', 'Jakarta', '2004-12-12', '656', 'pegawai', 'SDIT', '', 'Guru quran', '2020-08-31 03:56:32', 'Hanya_User_Pegawai_Saja.png', '2020-08-14 15:05:39', 1),
(796, 'kepseksd', 'cd1132e130c6f22674137276ee144abe', 'dfdf@s', 'Kepala Sekolah SD', '343', '2020-08-20', '8883', 'kepsek', 'SDIT', '', 'Guru Honorrer 2', '2020-08-31 03:55:34', '73_Kepala_Sekolah.jpg', '2020-08-15 01:19:33', 1),
(797, 'yayasan', 'f6cec6089689fae8789cd2e64c4eeb6a', '', 'yayaasann', '', '', '', 'admin', 'YAYASAN', '', '', '2020-08-15 01:58:38', 'yayaasann.png', '2020-08-15 01:58:38', 1),
(805, 'satu', '27946274a201346f0322e3861909b5ff', 'satu@aa', 'satu dua tiga', '', '', '213', 'pegawai', 'SMPIT', '', '', '2020-08-29 14:17:00', 'satu_dua_tiga.png', '2020-08-20 14:05:01', 1),
(807, '4', 'a87ff679a2f3e71d9181a67b7542122c', '', '4a 4a 4aaaa', '', '', '4444', 'pegawai', 'SMPIT', '', 'Guru Honorrer 2a', '2020-08-30 05:39:40', '4.jpg', '2020-08-24 01:49:02', 1),
(808, '5', 'e4da3b7fbbce2345d7772b0674a318d5', '', '55 Limaaaaa', 'Bekasi', '2012-06-13', '55555', 'pegawai', 'SDIT', 'Ic', 'Guru Honorrer 2ab', '2020-08-24 03:22:54', '55.png', '2020-08-24 03:22:54', 1),
(809, '6', '1679091c5a880faf6fb5e6087eb1b2dc', 'tambahan@gmail.com', 'Enam puluh enam koma satu', 'Jakarta', '1999-01-12', '081299826494', 'pegawai', 'SDIT', 'Ve', 'Staff Keuangan', '2020-08-24 06:52:17', 'Enam_puluh_enam_koma_satu.png', '2020-08-24 06:52:17', 1),
(810, '7', '8f14e45fceea167a5a36dedd4bea2543', 'ciftah12@gmail.com', 'Tujuh puluh ribu rupiah', '77777', '2020-08-23', '7777777777', 'admin', 'SDIT', '7a', '7777777', '2020-08-24 09:01:46', 'Tujuh_puluh_ribu_rupiah.jpg', '2020-08-24 09:01:17', 1),
(811, '90009', 'b312a491b1d6b93b96f06a15fd830918', '', 'Guru Biasa SDIT', '', '', '', 'pegawai', 'SDIT', 'VIb', 'Guru Honorrer 2ab', '2020-08-25 17:27:44', 'Guru_Biasa_SDIT.png', '2020-08-25 17:27:44', 1),
(812, '35', '1c383cd30b7c298ab50293adfecb7b18', '', 'Pegawai Magang SD sajaa', '', '', '', 'pegawai', 'SDIT', 'Ve', 'Guru Honorrer', '2020-08-25 17:54:16', 'Pegawai_Magang_SD.png', '2020-08-25 17:54:16', 1),
(813, '98', 'ed3d2c21991e3bef5e069713af9fa6ca', '', '98', '98Aff', '', '', 'pegawai', 'SDIT', 'VIb', 'Wali Kelas', '2020-08-27 04:43:03', 'default.jpg', '2020-08-27 04:43:03', 1),
(814, 'saya', '20c1a26a55039b30866c9d0aa51953ca', '', 'saya saya ysa', '', '', '', 'pegawai', 'BARU', 'Ve', 'Guru Honorrer', '2020-08-27 15:05:49', 'saya_saya_ysa.png', '2020-08-27 15:05:49', 1),
(816, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'ciftah12@gmail.com', '1 aja', '', '', '', 'pegawai', 'RA', '', '', '2020-08-31 01:46:22', '111111asa.png', '2020-08-29 07:10:54', 1);

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
(901, 2017),
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
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT for table `pegawai_user`
--
ALTER TABLE `pegawai_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=817;

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
