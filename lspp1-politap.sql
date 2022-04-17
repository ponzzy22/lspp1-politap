-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 09:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lspp1-politap`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesmens`
--

CREATE TABLE `asesmens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unikom_id` bigint(20) UNSIGNED NOT NULL,
  `asesmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asesmens`
--

INSERT INTO `asesmens` (`id`, `unikom_id`, `asesmen`, `created_at`, `updated_at`) VALUES
(5, 3, 'bgbgb', '2022-04-05 13:10:37', '2022-04-05 13:10:37'),
(6, 3, 'bgbgbgb', '2022-04-05 13:10:43', '2022-04-05 13:10:43'),
(9, 6, 'rtrtrtr', '2022-04-05 13:11:13', '2022-04-05 13:11:13'),
(11, 7, 'yuyuyuyu', '2022-04-05 13:11:30', '2022-04-05 13:11:30'),
(12, 7, 'klkl', '2022-04-05 13:11:36', '2022-04-05 13:11:36'),
(13, 8, 'asd', '2022-04-05 19:35:40', '2022-04-05 19:35:40'),
(14, 8, 'sdsd212121', '2022-04-05 19:35:49', '2022-04-05 19:35:49'),
(15, 3, 'asd121212', '2022-04-05 23:43:19', '2022-04-05 23:43:19'),
(17, 4, 'utang1', '2022-04-06 09:11:43', '2022-04-06 09:11:43'),
(18, 4, 'utang2', '2022-04-06 09:11:51', '2022-04-06 09:11:51'),
(19, 4, 'utang3', '2022-04-06 09:11:57', '2022-04-06 09:11:57'),
(20, 19, 'ora1', '2022-04-06 09:12:33', '2022-04-06 09:12:33'),
(21, 19, 'ora2', '2022-04-06 09:12:39', '2022-04-06 09:12:39'),
(26, 13, '343434343', '2022-04-13 12:54:19', '2022-04-13 12:54:19'),
(27, 4, 'asd23123123123', '2022-04-13 12:55:06', '2022-04-13 12:55:06'),
(28, 33, 'Assesment-1', '2022-04-14 10:01:02', '2022-04-14 10:01:02'),
(29, 33, 'Assesment-2', '2022-04-14 10:01:07', '2022-04-14 10:01:07'),
(33, 34, 'Assesment-6', '2022-04-14 10:02:18', '2022-04-14 10:02:18'),
(34, 34, 'Assesment-7', '2022-04-14 10:02:23', '2022-04-14 10:02:23'),
(35, 35, 'Assesment-7', '2022-04-14 10:02:45', '2022-04-14 10:02:45'),
(36, 36, 'Assesment-12', '2022-04-14 10:03:11', '2022-04-14 10:03:11'),
(37, 37, 'Assesment-76', '2022-04-14 10:03:23', '2022-04-14 10:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `asesor`
--

CREATE TABLE `asesor` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`id`, `nik`, `nama`, `image`, `alamat`, `sex`, `email`, `status`, `updated_at`, `created_at`) VALUES
(1, 133243, '-', 'public/uploads/asesor/1649875927ceb99d0f22759041b43f10a726f0a392.jpg', 'sdasdfs', 'Laki-laki', 'cino7sd13dfd0@gmail.com', 'Nonaktif', '2022-04-14 09:21:17.271280', '2022-04-14 09:21:17.271280'),
(4, 3423423, 'Ponsianus Jopi', 'public/uploads/asesor/1649874795ceb99d0f22759041b43f10a726f0a392.jpg', 'sdas', 'Laki-laki', 'cino7130@gmail.com', 'Aktif', '2022-04-13 11:36:05.000000', '2022-04-13 18:36:05.220887'),
(7, 22112, 'bujang', 'public/uploads/asesor/1648831776Screenshot (6).png', 'sddsds', NULL, 'user@role.com', 'Nonaktif', '2022-04-01 20:11:28.000000', '2022-04-02 03:11:29.416920'),
(8, 34234233333, 'Sukiman', 'public/uploads/asesor/1649183000ceb99d0f22759041b43f10a726f0a392.jpg', 'sdas', 'Laki-laki', 'cino7sd130343@gmail.com', 'Aktif', '2022-04-05 11:23:20.000000', '2022-04-05 11:23:20.000000'),
(9, 342342389333, 'Bang Toyib', 'public/uploads/asesor/1649183057ceb99d0f22759041b43f10a726f0a392.jpg', 'sdas23123', 'Laki-laki', 'cino7sd1231230@gmail.com', 'Aktif', '2022-04-05 11:24:17.000000', '2022-04-05 11:24:17.000000'),
(11, 3324234, 'sdasd', 'public/uploads/asesor/16497900542020-10-30 07.27.27 1.jpg', 'dasda', 'Laki-laki', '082150040132@fdf', 'Aktif', '2022-04-12 12:00:54.000000', '2022-04-12 12:00:54.000000'),
(13, 345345, 'dfsdf', 'public/uploads/asesor/1649868954ceb99d0f22759041b43f10a726f0a392.jpg', 'fdsd', 'Laki-laki', 'admin@fgf', 'Aktif', '2022-04-13 09:55:54.000000', '2022-04-13 09:55:54.000000'),
(15, 34234, 'dsfsdf', 'public/uploads/asesor/1649869695ceb99d0f22759041b43f10a726f0a392.jpg', 'fefef', 'Laki-laki', 'fefefe@fsdfd', 'Aktif', '2022-04-13 10:08:15.000000', '2022-04-13 10:08:15.000000');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `judul2` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `judul2`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, 'LSP P1 - POLITAP', 'POLITEKNIK NEGERI KETAPANG', 'Lembaga Sertifikasi Profesi (LSP) Universitas Gunadarma adalah lembaga sertifikasi profesi yang telah memperoleh sertifikat lisensi no. KEP.817/BNSP/IV/2020 dari Badan Nasional Sertifikasi Profesi (BNSP).\r\n\r\nSebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP Universitas Gunadarma diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja Nasional Indonesia (SKKNI).\r\n\r\nMemiliki 43 skema dan 209 asesor, LSP Universitas Gunadarma siap melaksanakan uji kompetensi pada seluruh mahasiswa Universitas Gunadarma dari berbagai program studi dalam rangka menyiapkan lulusan Universitas Gunadarma yang memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di pasar tenaga kerja baik nasional maupun internasional.', '2022-03-27 07:33:12.000000', '2022-03-27 14:33:12.590384');

-- --------------------------------------------------------

--
-- Table structure for table `beranda_img1`
--

CREATE TABLE `beranda_img1` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda_img1`
--

INSERT INTO `beranda_img1` (`id`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(50, NULL, 'public/uploads/beranda_img1/1648393014banner_2.jpg', '2022-03-27 07:56:54.000000', '2022-03-27 07:56:54.000000'),
(52, NULL, 'public/uploads/beranda_img1/1649794658IMG_0133.JPG', '2022-04-12 13:17:38.000000', '2022-04-12 13:17:38.000000'),
(53, NULL, 'public/uploads/beranda_img1/1649794795IMG_0136.JPG', '2022-04-12 13:19:55.000000', '2022-04-12 13:19:55.000000'),
(54, NULL, 'public/uploads/beranda_img1/1649794922IMG_0359.JPG', '2022-04-12 13:22:02.000000', '2022-04-12 13:22:02.000000'),
(55, NULL, 'public/uploads/beranda_img1/1649795156banner_1.jpg', '2022-04-12 13:25:56.000000', '2022-04-12 13:25:56.000000'),
(56, NULL, 'public/uploads/beranda_img1/1649795163banner_12.jpg', '2022-04-12 13:26:03.000000', '2022-04-12 13:26:03.000000');

-- --------------------------------------------------------

--
-- Table structure for table `beranda_img2`
--

CREATE TABLE `beranda_img2` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda_img2`
--

INSERT INTO `beranda_img2` (`id`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(26, NULL, 'public/uploads/beranda_img2/16497929622.png', '2022-04-12 12:49:22.000000', '2022-04-12 12:49:22.000000'),
(27, NULL, 'public/uploads/beranda_img2/16497929663.png', '2022-04-12 12:49:26.000000', '2022-04-12 12:49:26.000000'),
(28, NULL, 'public/uploads/beranda_img2/16497929724.png', '2022-04-12 12:49:32.000000', '2022-04-12 12:49:32.000000'),
(29, NULL, 'public/uploads/beranda_img2/16497930141.png', '2022-04-12 12:50:14.000000', '2022-04-12 12:50:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `image`, `file1`, `file2`) VALUES
(3, 'dfasdf', 'sdasdas', '<p><b>sdasd&nbsp; &nbsp; &nbsp;</b></p><p><b>1.fdsfsdfs</b></p><p><b>2.dfsdfsdfsdfsd<u>sdfsdfsdfs</u></b></p><p><b style=\"background-color: rgb(255, 255, 0); --darkreader-inline-bgcolor:#999900;\" data-darkreader-inline-bgcolor=\"\">dfsdfdsfdsfasdfdf</b></p>', '2022-04-16 07:22:22', '2022-04-16 11:26:33', 'public/uploads/berita/1650118942ASSIST-3.png', NULL, NULL),
(4, 'sa', 'dsfadfsad', 'dfadsfasdffsadfasdfsdfsdfsdfsdfdsfdsafsadfasdfsdafasdfsa**fsadfasdfasdfasdfadsfadsfsaf**', '2022-04-16 07:25:44', '2022-04-16 07:25:44', 'public/uploads/berita/1650119144ASSIST-1.png', NULL, NULL),
(5, 'rtwertwret', 'rtrtr', '**dfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf***dfsdfsdfsdfsdfefwfewedfwefwefwefwefef*[](http://fgdfgsdfgdfsgsrgesrgesgrrsgrgsrgrgrrg)', '2022-04-16 07:29:45', '2022-04-16 07:29:45', 'public/uploads/berita/1650119385SEASON-1.png', NULL, NULL),
(6, 'er', 'er', '*ererererer*\r\nerwer\r\nerwere', '2022-04-16 08:17:22', '2022-04-16 08:17:22', 'public/uploads/berita/1650122242SEASON-2.png', NULL, NULL),
(7, 'sds', 'asda', '<p><b>dsfdsfasdf</b></p>', '2022-04-16 09:22:34', '2022-04-16 09:22:34', 'public/uploads/berita/1650126154GOALS-3.png', NULL, NULL),
(8, 'gfgsf', 'fgfg', '<ol><li>fgsdfg</li><li>fgsdfg</li><li>fgsdfgs</li><li>sfgsdfg</li><li>fgsdfgsdf</li><li>fgsdfgsdfg</li><li><b>fgsfgsdfgsdfgsdfg</b></li></ol>', '2022-04-16 09:23:41', '2022-04-16 09:23:41', 'public/uploads/berita/1650126221SEASON-2.png', NULL, NULL),
(10, 'd', 'd', '<ol><li><b>sddddddddddddddddd<span style=\"background-color: rgb(255, 255, 0); --darkreader-inline-bgcolor:#999900;\" data-darkreader-inline-bgcolor=\"\">sdddddddddddddddddddddddddddddddd</span></b></li></ol>', '2022-04-16 11:37:55', '2022-04-16 11:37:55', 'public/uploads/berita/1650134275SEASON-1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_registers`
--

CREATE TABLE `data_registers` (
  `id` bigint(20) NOT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_post` int(11) DEFAULT NULL,
  `no_hp` bigint(20) DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim` bigint(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor_id` int(11) DEFAULT NULL,
  `tuk_id` bigint(20) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_registers`
--

INSERT INTO `data_registers` (`id`, `skema_name`, `skema_id`, `user_id`, `user_name`, `status`, `surel`, `tmpt_lahir`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `provinsi`, `kabupaten`, `kota`, `kecamatan`, `image`, `jurusan_id`, `semester_id`, `ktp`, `ktm`, `khs`, `lain`, `created_at`, `updated_at`, `nim`, `date`, `time`, `asesor_id`, `tuk_id`, `keterangan`) VALUES
(210, 'Ahli Pawang Hujan2', '3423423efrwe', '2', 'Woii Ngeteh ....', 'Menunggu Validasi...', 'Ngetehasu@gmail.com', 'Ketapang', '2022-03-31', '2', 'Indonesia', 'hmmmmmmm', 78889, 0, 'Kalimantan Barat', 'Ketapang', 'Ketapang', 'Delta Pawan', NULL, 4, 4, NULL, NULL, NULL, NULL, '2022-04-14 10:18:00', '2022-04-14 10:18:00', 3042020058, NULL, NULL, 1, 1, NULL),
(510, 'Ahli Pawang Hujan2', '3423423efrwe', '5', 'Ponsianus Jopi', 'Menunggu Validasi...', 'ponzzy22@gmail.com', 'Ketapang', '2013-01-08', '1', 'Indonesia', 'dfsdfsdfsdfsdf', 78889, 34534, 'wewere', 'sdf', 'sdf', 'sdas', NULL, 3, 3, NULL, NULL, NULL, NULL, '2022-04-14 10:08:27', '2022-04-14 10:08:27', 3042020058, NULL, NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_profil`
--

CREATE TABLE `f_profil` (
  `id` int(11) NOT NULL,
  `profil` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_profil`
--

INSERT INTO `f_profil` (`id`, `profil`, `visi`, `misi`, `motto`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Profil', 'Visi', 'Misi', 'Motto', 'public/uploads/f_profil/1649792747Logo LSP Politap.png', '2022-04-12 12:45:47.000000', '2022-04-12 19:45:47.989914');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_fotos`
--

CREATE TABLE `galeri_fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_galeri_id` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_fotos`
--

INSERT INTO `galeri_fotos` (`id`, `group_galeri_id`, `image`, `created_at`, `updated_at`) VALUES
(28, 1, 'public/uploads/data_register_apl2/1650032363ASSIST-1.png', '2022-04-15 07:19:23', '2022-04-15 07:19:23'),
(29, 1, 'public/uploads/data_register_apl2/1650032363ASSIST-2.png', '2022-04-15 07:19:23', '2022-04-15 07:19:23'),
(30, 1, 'public/uploads/data_register_apl2/1650032950ASSIST-1.png', '2022-04-15 07:29:10', '2022-04-15 07:29:10'),
(31, 1, 'public/uploads/data_register_apl2/1650032950ASSIST-2.png', '2022-04-15 07:29:10', '2022-04-15 07:29:10'),
(32, 1, 'public/uploads/data_register_apl2/1650036236ASSIST-3.png', '2022-04-15 08:23:56', '2022-04-15 08:23:56'),
(33, 1, 'public/uploads/data_register_apl2/1650036236GOALS-1.png', '2022-04-15 08:23:56', '2022-04-15 08:23:56'),
(34, 1, 'public/uploads/data_register_apl2/1650036236GOALS-2.png', '2022-04-15 08:23:56', '2022-04-15 08:23:56'),
(35, 1, 'public/uploads/data_register_apl2/1650036236GOALS-3.png', '2022-04-15 08:23:56', '2022-04-15 08:23:56'),
(36, 1, 'public/uploads/data_register_apl2/1650036236SEASON-1.png', '2022-04-15 08:23:56', '2022-04-15 08:23:56'),
(37, 1, 'public/uploads/data_register_apl2/1650036236SEASON-2.png', '2022-04-15 08:23:56', '2022-04-15 08:23:56'),
(38, 2, 'public/uploads/data_register_apl2/1650036262ASSIST-1.png', '2022-04-15 08:24:22', '2022-04-15 08:24:22'),
(42, 2, 'public/uploads/data_register_apl2/1650040102ASSIST-2.png', '2022-04-15 09:28:22', '2022-04-15 09:28:22'),
(43, 2, 'public/uploads/data_register_apl2/1650040102ASSIST-3.png', '2022-04-15 09:28:22', '2022-04-15 09:28:22'),
(44, 2, 'public/uploads/data_register_apl2/1650040102GOALS-1.png', '2022-04-15 09:28:22', '2022-04-15 09:28:22'),
(45, 2, 'public/uploads/data_register_apl2/1650040102GOALS-2.png', '2022-04-15 09:28:22', '2022-04-15 09:28:22'),
(46, 2, 'public/uploads/data_register_apl2/1650040102GOALS-3.png', '2022-04-15 09:28:22', '2022-04-15 09:28:22'),
(47, 2, 'public/uploads/data_register_apl2/1650040102SEASON-1.png', '2022-04-15 09:28:22', '2022-04-15 09:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `group_galeris`
--

CREATE TABLE `group_galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_galeris`
--

INSERT INTO `group_galeris` (`id`, `galeri`, `created_at`, `updated_at`) VALUES
(1, 'sgfgfg', '2022-04-01 05:01:40', '2022-04-01 05:01:40'),
(2, 'jopi', '2022-04-14 22:40:27', '2022-04-15 09:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `updated_at`, `created_at`) VALUES
(1, 'Teknik Pertambangan', '2022-04-02 11:54:46.000000', '2022-04-02 11:54:46.000000'),
(2, 'Teknik Mesin', '2022-04-02 11:54:46.000000', '2022-04-02 11:54:46.000000'),
(3, 'Teknik Pertanian/ Pengelolahan Hasil Perkebunan', '2022-04-02 11:59:07.000000', '2022-04-02 11:59:07.000000'),
(4, 'Teknik Informatika', '2022-04-02 12:00:20.000000', '2022-04-02 12:00:20.000000'),
(5, 'Teknik Elektro', '2022-04-02 12:00:40.000000', '2022-04-02 12:00:40.000000'),
(6, 'Teknik Sipil', '2022-04-02 12:00:40.000000', '2022-04-02 12:00:40.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_31_053712_create_permission_tables', 1),
(6, '2022_04_04_064735_create_skemas_table', 2),
(7, '2022_04_04_065104_create_unikoms_table', 2),
(8, '2022_04_04_142623_create_skemas_table', 3),
(9, '2022_04_04_162549_create_ases_mandiri_table', 4),
(10, '2022_04_05_035640_create_skemas_table', 5),
(11, '2022_04_05_035931_create_unikoms_table', 5),
(12, '2022_04_05_040007_create_asesman_table', 5),
(13, '2022_04_05_040903_create_asesman_table', 6),
(14, '2022_04_05_041003_create_unikoms_table', 6),
(15, '2022_04_05_184320_create_unikoms_table', 7),
(16, '2022_04_05_194410_create_asesmens_table', 8),
(17, '2022_04_06_112234_create_formulirs_table', 9),
(18, '2022_04_07_070821_create_xnxxes_table', 10),
(19, '2022_04_08_154429_create_posts_table', 11),
(20, '2022_04_09_084617_create_tokens_table', 12),
(21, '2022_04_10_063220_create_data_registers_table', 13),
(22, '2022_04_10_104413_create_xnxxes_table', 14),
(23, '2022_04_10_104856_add_new_post_id_table', 15),
(24, '2022_04_10_105849_add_new_posdfst_id_table', 16),
(25, '2022_04_10_115354_create_xnxxes_table', 17),
(26, '2022_04_10_120142_create_xnxxes_table', 18),
(27, '2022_04_10_120226_add_new_psdfosdfst_id_table', 19),
(28, '2022_04_10_122844_create_xnxxes_table', 20),
(29, '2022_04_10_124409_add_new_psdfosdfst_id_tablefgdfgffgf', 21),
(30, '2022_04_10_124454_add_new_psdfosdfst_id_tablefgdfgffgfsdssd', 22),
(31, '2022_04_11_063629_create_upload_files_table', 23),
(32, '2022_04_11_064002_add_data_table', 24),
(33, '2022_04_12_135433_asu', 25),
(34, '2022_04_12_180546_create_sertifikasis_table', 26),
(35, '2022_04_15_043313_create_group_galeris_table', 27),
(36, '2022_04_15_071246_create_galeri_fotos_table', 28),
(37, '2022_04_16_081140_create_beritas_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `status`, `published_at`, `created_at`, `updated_at`, `user_id`) VALUES
(4, 'sas', 'dsadasdas', 'sadas', NULL, '2022-04-08 11:10:17', '2022-04-08 11:10:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(6) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `updated_at`, `created_at`) VALUES
(1, 'Teknik Informatika', '2022-04-01 07:40:46.000000', '2022-04-01 07:40:46.000000'),
(2, 'Teknik Sipil', '2022-04-01 07:41:19.000000', '2022-04-01 07:41:19.000000'),
(4, 'Teknik Elektro', '2022-04-01 07:37:33.000000', '2022-04-01 07:37:33.000000'),
(6, 'Teknik Pertambangan', '2022-04-05 11:27:11.000000', '2022-04-05 11:27:11.000000'),
(8, 'Teknik Listrik', '2022-04-12 11:55:14.000000', '2022-04-12 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_register` bigint(20) DEFAULT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-03-31 01:01:51', '2022-03-31 01:01:51'),
(2, 'user', 'web', '2022-03-31 01:01:51', '2022-03-31 01:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`, `updated_at`, `created_at`) VALUES
(1, 1, '2022-04-02 12:03:06.000000', '2022-04-02 12:03:06.000000'),
(2, 2, '2022-04-02 12:03:21.000000', '2022-04-02 12:03:21.000000'),
(3, 3, '2022-04-02 12:03:21.000000', '2022-04-02 12:03:21.000000'),
(4, 4, '2022-04-02 12:03:49.000000', '2022-04-02 12:03:49.000000'),
(5, 5, '2022-04-02 12:03:49.000000', '2022-04-02 12:03:49.000000'),
(6, 6, '2022-04-02 12:04:16.000000', '2022-04-02 12:04:16.000000'),
(7, 7, '2022-04-02 12:04:16.000000', '2022-04-02 12:04:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasis`
--

CREATE TABLE `sertifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `id` int(11) NOT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`id`, `sex`, `updated_at`, `created_at`) VALUES
(1, 'Laki-laki', '2022-04-03 01:40:39', '2022-04-03 01:40:40'),
(2, 'Perempuan', '2022-04-03 01:40:40', '2022-04-03 01:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `skemas`
--

CREATE TABLE `skemas` (
  `id` bigint(20) NOT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `tuk_id` bigint(20) UNSIGNED NOT NULL,
  `asesor_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skemas`
--

INSERT INTO `skemas` (`id`, `kode_skema`, `skema`, `prodi_id`, `tuk_id`, `asesor_id`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 'SKM-32412323', 'Jaringan LAN', 1, 3, 4, 1, '2022-04-05 11:18:59', '2022-04-05 11:18:59'),
(3, 'SKM-2q312323', 'Teknik Byakugan', 2, 3, 7, 1, '2022-04-05 11:19:32', '2022-04-05 11:19:32'),
(5, 'SKM-22112323', 'Mugen Tsukoyomi', 2, 3, 4, 2, '2022-04-05 11:21:08', '2022-04-05 11:33:40'),
(7, 'SKM-22212323', 'Basis Data', 1, 3, 7, 1, '2022-04-05 11:21:48', '2022-04-05 11:21:48'),
(8, 'SKM-3241232323', 'PONZZI', 2, 5, 9, 1, '2022-04-05 11:26:03', '2022-04-05 11:26:03'),
(9, 'SKM-2zzz312323', 'Amaterasu', 6, 7, 9, 2, '2022-04-05 19:29:52', '2022-04-05 19:29:52'),
(10, '3423423efrwe', 'Ahli Pawang Hujan2', 1, 4, 4, 1, '2022-04-11 09:44:53', '2022-04-11 11:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Aktif', '2022-04-02 03:46:08', '2022-04-02 03:46:08'),
(2, 'Nonaktif', '2022-04-02 03:46:51', '2022-04-02 03:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `strorg`
--

CREATE TABLE `strorg` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strorg`
--

INSERT INTO `strorg` (`id`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(1, NULL, 'public/uploads/strorg/1649792551Struktur LSP_1.jpg', '2022-04-12 12:42:31', '2022-04-12 19:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 89, 8, '2022-04-09 01:54:48', '2022-04-09 01:54:48'),
(2, 82, 8, '2022-04-09 01:58:08', '2022-04-09 01:58:08'),
(4, 85, 8, '2022-04-09 02:05:41', '2022-04-09 02:05:41'),
(5, 52, 5, '2022-04-09 06:53:34', '2022-04-09 06:53:34'),
(6, 59, 5, '2022-04-09 07:24:17', '2022-04-09 07:24:17'),
(7, 53, 5, '2022-04-09 07:25:43', '2022-04-09 07:25:43'),
(8, 58, 5, '2022-04-09 07:48:50', '2022-04-09 07:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `tuk`
--

CREATE TABLE `tuk` (
  `id` int(11) NOT NULL,
  `tuk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuk`
--

INSERT INTO `tuk` (`id`, `tuk`, `alamat`, `updated_at`, `created_at`) VALUES
(1, '-', NULL, '2022-04-14 09:21:33.428215', '2022-04-14 09:21:33.428215'),
(3, 'LAB KOMPUTER', 'DSDFSD', '2022-04-01 20:30:07.000000', '2022-04-01 20:30:07.000000'),
(4, 'LAB KIMIA', 'DFFSD', '2022-04-01 20:30:18.000000', '2022-04-01 20:30:18.000000'),
(5, 'LAB MIPA', 'WQW', '2022-04-05 11:24:42.000000', '2022-04-05 11:24:42.000000'),
(6, 'KANTIN', '312', '2022-04-05 11:25:00.000000', '2022-04-05 11:25:00.000000'),
(11, 'fdfsd', 'dfsdfsdf', '2022-04-13 12:08:58.000000', '2022-04-13 12:08:58.000000');

-- --------------------------------------------------------

--
-- Table structure for table `unikoms`
--

CREATE TABLE `unikoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_unikom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_id` bigint(20) NOT NULL,
  `unikom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zzz` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unikoms`
--

INSERT INTO `unikoms` (`id`, `kode_unikom`, `skema_id`, `unikom`, `created_at`, `updated_at`, `zzz`) VALUES
(3, 'UNIT-2112232', 5, 'Rajin Begadang', '2022-04-05 12:11:16', '2022-04-13 12:35:29', NULL),
(4, 'UNIT-723112', 8, 'Suka Ngutang sana sini', '2022-04-05 12:11:44', '2022-04-05 12:11:44', NULL),
(6, 'UNIT-0000345', 2, 'APA YA', '2022-04-05 12:13:09', '2022-04-13 09:18:30', NULL),
(7, 'UNIT-42112232', 2, 'Rajin Ibadah', '2022-04-05 12:13:54', '2022-04-05 12:13:54', NULL),
(8, 'UNIT-2WWW112', 9, 'AHDJSJKDJA', '2022-04-05 19:34:38', '2022-04-05 19:34:38', NULL),
(9, 'UNIT-2112343', 2, 'Unit 12312', '2022-04-05 22:38:18', '2022-04-05 22:38:18', NULL),
(10, 'UNIT-42112232ww', 2, 'aaa', '2022-04-05 22:42:01', '2022-04-05 22:42:01', NULL),
(12, 'UNIT-211234534', 2, '34234', '2022-04-05 22:42:55', '2022-04-05 22:42:55', NULL),
(13, 'UNIT-211212312331232', 2, 'Wadidaw', '2022-04-05 22:50:11', '2022-04-05 22:50:11', NULL),
(14, 'UNIT-2112wer', 2, 'aaaerwe', '2022-04-05 22:52:46', '2022-04-05 22:52:46', NULL),
(16, 'UNIT-42112232ww12', 2, 'Unit 12312343', '2022-04-05 22:54:11', '2022-04-05 22:54:11', NULL),
(17, 'UNIT-2', 2, 'Rajin Merantau2', '2022-04-05 22:55:31', '2022-04-05 22:55:31', NULL),
(19, 'UNIT-42', 8, 'Orra UMUM', '2022-04-05 22:56:53', '2022-04-06 09:10:32', NULL),
(20, 'UNIT-211223212', 5, 'Inul', '2022-04-05 22:58:29', '2022-04-05 22:58:29', NULL),
(21, 'UNIT-2112z', 7, 'h', '2022-04-06 05:22:36', '2022-04-06 05:22:36', NULL),
(23, 'dfsdf', 2, 'dfsdf', '2022-04-11 12:33:04', '2022-04-11 12:33:04', NULL),
(29, 'UNIT-2112re', 3, 'aaawer', '2022-04-13 12:25:58', '2022-04-13 12:25:58', NULL),
(30, 'UNIT-2112dfsd', 5, 'sdfsd', '2022-04-13 12:34:05', '2022-04-13 12:34:05', NULL),
(31, 'UNIT-2112', 5, 'aaa', '2022-04-13 12:34:44', '2022-04-13 12:34:44', NULL),
(33, 'UNIT-2112DFSDF', 10, 'UNIKOM-1', '2022-04-14 09:59:32', '2022-04-14 09:59:32', NULL),
(34, 'UNIT-2112SDASD', 10, 'UNIKOM-2', '2022-04-14 09:59:53', '2022-04-14 09:59:53', NULL),
(35, 'UNIT-2112342342', 10, 'UNIKOM-3', '2022-04-14 10:00:04', '2022-04-14 10:00:04', NULL),
(36, 'UNIT-42112232wwASDA', 10, 'UNIKOM-4', '2022-04-14 10:00:23', '2022-04-14 10:00:23', NULL),
(37, 'UNIT-211212221212', 10, 'UNIKOM-5', '2022-04-14 10:00:36', '2022-04-14 10:00:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_register_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `kode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id`, `data_register_id`, `name`, `image`, `created_at`, `updated_at`, `status`, `user_id`, `kode`) VALUES
(44, 210, 'Photo', 'public/uploads/data_register_apl2/1649957078ceb99d0f22759041b43f10a726f0a392.jpg', '2022-04-14 10:24:38', '2022-04-14 10:24:38', 'Ada', 2, 12),
(48, 210, 'Kartu Tanda Mahasiswa', NULL, '2022-04-14 10:26:36', '2022-04-14 10:26:36', 'Tidak Ada', 2, 22),
(49, 210, 'Kartu Tanda Penduduk', NULL, '2022-04-14 10:26:40', '2022-04-14 10:26:40', 'Tidak Ada', 2, 32),
(50, 210, 'Kartu Hasil Semester', NULL, '2022-04-14 10:26:44', '2022-04-14 10:26:44', 'Tidak Ada', 2, 42);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `surel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_post` int(11) DEFAULT NULL,
  `no_hp` bigint(20) DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tamatan_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `kode`, `surel`, `tmpt_lahir`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `provinsi`, `kabupaten`, `kota`, `kecamatan`, `tamatan_id`, `image`, `ttd`, `jurusan_id`, `semester_id`, `email_verified_at`, `remember_token`, `password`, `ktp`, `khs`, `ktm`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Admin Role', 'admin', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/16483930572.png', NULL, NULL, NULL, NULL, '8Uo0YQoBIcyMDlx1RqOToagvo88JadFFPh3YBOvvNgdrH8NsL1JReQtIYn9i', '$2y$10$.77uDWW0GccOEAmSygpKbegD0rupPTlKLd/Tivp2/BHEP8acP/lD.', NULL, NULL, NULL, '2022-03-31 01:01:51', '2022-03-31 01:01:51'),
(2, 'Administrator', 'asu', '123', 0, NULL, NULL, '2022-04-20', '2', 'Indonesia', 'sdas', NULL, 34534, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1649955301ceb99d0f22759041b43f10a726f0a392.jpg', NULL, 3, 3, NULL, NULL, '$2y$10$SWgeJ2o7bKY2HX77jaVz9OKRX1QC83qdgzvaqGGCVH.o5amTu4cXS', NULL, NULL, NULL, '2022-03-31 01:01:52', '2022-04-14 10:54:50'),
(5, NULL, 'Ponsianus Jopi', '3042020058', 23245545, 'ponzzy22@gmail.com', 'Ketapang', '2013-01-08', NULL, 'Indonesia', NULL, NULL, 2323564561111, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1649923581Screenshot (11).png', NULL, NULL, NULL, NULL, NULL, '$2y$10$MRwgjmSTHReZ1dKNg57OruXd4bi9A6paOIyzrjoT05hU9HOW7In3m', 'public/uploads/beranda_img2/1649256639ceb99d0f22759041b43f10a726f0a392.jpg', 'public/uploads/beranda_img2/1648986790Screenshot (24).png', 'public/uploads/beranda_img2/1648987026Screenshot (11).png', '2022-04-02 07:38:26', '2022-04-14 01:06:21'),
(6, NULL, 'Ngeteh Asusdasd', '3042020058343', 12334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1649919571ceb99d0f22759041b43f10a726f0a392.jpg', NULL, NULL, NULL, NULL, NULL, '$2y$10$E9EAyJ7Q9SCX/csBxQXmvuF9aTlQQASEeUSkzl/KIzU7KlQjvQkz2', NULL, NULL, NULL, '2022-04-02 08:12:07', '2022-04-14 00:01:45'),
(9, NULL, 'asu', '7130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1649926334Screenshot (6).png', NULL, NULL, NULL, NULL, NULL, '$2y$10$Ky5CakRj8QyGbs734KcAbOCGAAu7Ht/DWTbmbBuVnd60XU3JAqVBa', NULL, NULL, NULL, '2022-04-14 01:38:05', '2022-04-14 01:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `xnxxes`
--

CREATE TABLE `xnxxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `unikom_id` bigint(20) DEFAULT NULL,
  `unikom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data_register_id` bigint(20) NOT NULL,
  `kode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xnxxes`
--

INSERT INTO `xnxxes` (`id`, `user_id`, `unikom_id`, `unikom_name`, `skema_name`, `skema_id`, `image`, `status`, `created_at`, `updated_at`, `data_register_id`, `kode`) VALUES
(84, 5, 28, 'Assesment-1', 'Ahli Pawang Hujan2', 10, NULL, 'Tidak Kompeten', '2022-04-14 10:08:55', '2022-04-14 10:08:55', 510, 15),
(85, 5, 29, 'Assesment-2', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956220lspp1-politap.pdf', 'Kompeten', '2022-04-14 10:10:20', '2022-04-14 10:10:20', 510, 25),
(86, 5, 33, 'Assesment-6', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956248lspp1-politap.pdf', 'Kompeten', '2022-04-14 10:10:48', '2022-04-14 10:10:48', 510, 35),
(87, 5, 34, 'Assesment-7', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956253lspp1-politap.pdf', 'Kompeten', '2022-04-14 10:10:53', '2022-04-14 10:10:53', 510, 45),
(88, 5, 35, 'Assesment-7', 'Ahli Pawang Hujan2', 10, NULL, 'Tidak Kompeten', '2022-04-14 10:10:56', '2022-04-14 10:10:56', 510, 55),
(89, 2, 37, 'Assesment-76', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956694lspp1-politap.pdf', 'Kompeten', '2022-04-14 10:18:14', '2022-04-14 10:18:14', 210, 72),
(90, 2, 35, 'Assesment-7', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956708lspp1-politap.pdf', 'Kompeten', '2022-04-14 10:18:28', '2022-04-14 10:18:28', 210, 52),
(91, 2, 36, 'Assesment-12', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956715180-Article Text-492-1-10-20190103.pdf', 'Kompeten', '2022-04-14 10:18:35', '2022-04-14 10:18:35', 210, 62),
(92, 2, 28, 'Assesment-1', 'Ahli Pawang Hujan2', 10, NULL, 'Tidak Kompeten', '2022-04-14 10:18:41', '2022-04-14 10:18:41', 210, 12),
(93, 2, 29, 'Assesment-2', 'Ahli Pawang Hujan2', 10, 'public/uploads/data_register_apl2/1649956729lspp1-politap.pdf', 'Kompeten', '2022-04-14 10:18:49', '2022-04-14 10:18:49', 210, 22),
(94, 2, 34, 'Assesment-7', 'Ahli Pawang Hujan2', 10, NULL, 'Tidak Kompeten', '2022-04-14 10:18:51', '2022-04-14 10:18:51', 210, 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesmens`
--
ALTER TABLE `asesmens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asesmens_unikom_id_foreign` (`unikom_id`);

--
-- Indexes for table `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda_img1`
--
ALTER TABLE `beranda_img1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda_img2`
--
ALTER TABLE `beranda_img2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_registers`
--
ALTER TABLE `data_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_profil`
--
ALTER TABLE `f_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_galeris`
--
ALTER TABLE `group_galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_register` (`kode_register`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skemas`
--
ALTER TABLE `skemas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_skema` (`kode_skema`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strorg`
--
ALTER TABLE `strorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tokens_token_unique` (`token`);

--
-- Indexes for table `tuk`
--
ALTER TABLE `tuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unikoms`
--
ALTER TABLE `unikoms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_unikom` (`kode_unikom`),
  ADD KEY `unikoms_skema_id_foreign` (`skema_id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upload_files_data_register_foreign` (`data_register_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `surel` (`surel`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indexes for table `xnxxes`
--
ALTER TABLE `xnxxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xnxxes_data_register_id_foreign` (`data_register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesmens`
--
ALTER TABLE `asesmens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beranda_img1`
--
ALTER TABLE `beranda_img1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `beranda_img2`
--
ALTER TABLE `beranda_img2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `group_galeris`
--
ALTER TABLE `group_galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skemas`
--
ALTER TABLE `skemas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strorg`
--
ALTER TABLE `strorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tuk`
--
ALTER TABLE `tuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unikoms`
--
ALTER TABLE `unikoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `xnxxes`
--
ALTER TABLE `xnxxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asesmens`
--
ALTER TABLE `asesmens`
  ADD CONSTRAINT `asesmens_unikom_id_foreign` FOREIGN KEY (`unikom_id`) REFERENCES `unikoms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `unikoms`
--
ALTER TABLE `unikoms`
  ADD CONSTRAINT `unikoms_skema_id_foreign` FOREIGN KEY (`skema_id`) REFERENCES `skemas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD CONSTRAINT `upload_files_data_register_foreign` FOREIGN KEY (`data_register_id`) REFERENCES `data_registers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `xnxxes`
--
ALTER TABLE `xnxxes`
  ADD CONSTRAINT `xnxxes_data_register_id_foreign` FOREIGN KEY (`data_register_id`) REFERENCES `data_registers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
