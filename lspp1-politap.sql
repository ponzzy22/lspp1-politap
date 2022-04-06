-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 08:16 PM
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
(1, 2, 'asd', '2022-04-05 13:03:57', '2022-04-05 13:03:57'),
(2, 2, 'sdsd', '2022-04-05 13:10:12', '2022-04-05 13:10:12'),
(3, 3, 'bgbg', '2022-04-05 13:10:21', '2022-04-05 13:10:21'),
(4, 3, 'bgbgbg', '2022-04-05 13:10:31', '2022-04-05 13:10:31'),
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
(21, 19, 'ora2', '2022-04-06 09:12:39', '2022-04-06 09:12:39');

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
(4, 3423423, 'Ponsianus Jopi', 'public/uploads/asesor/1648836603logo-pegadaian-01.png', 'sdas', NULL, 'cino7130@gmail.com', 'Aktif', '2022-04-01 11:10:03.000000', '2022-04-01 18:10:03.923912'),
(7, 22112, 'bujang', 'public/uploads/asesor/1648831776Screenshot (6).png', 'sddsds', NULL, 'user@role.com', 'Nonaktif', '2022-04-01 20:11:28.000000', '2022-04-02 03:11:29.416920'),
(8, 34234233333, 'Sukiman', 'public/uploads/asesor/1649183000ceb99d0f22759041b43f10a726f0a392.jpg', 'sdas', 'Laki-laki', 'cino7sd130343@gmail.com', 'Aktif', '2022-04-05 11:23:20.000000', '2022-04-05 11:23:20.000000'),
(9, 342342389333, 'Bang Toyib', 'public/uploads/asesor/1649183057ceb99d0f22759041b43f10a726f0a392.jpg', 'sdas23123', 'Laki-laki', 'cino7sd1231230@gmail.com', 'Aktif', '2022-04-05 11:24:17.000000', '2022-04-05 11:24:17.000000');

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
(49, NULL, 'public/uploads/beranda_img1/1648393010banner_1.jpg', '2022-03-27 07:56:50.000000', '2022-03-27 07:56:50.000000'),
(50, NULL, 'public/uploads/beranda_img1/1648393014banner_2.jpg', '2022-03-27 07:56:54.000000', '2022-03-27 07:56:54.000000'),
(51, NULL, 'public/uploads/beranda_img1/1648393018banner_12.jpg', '2022-03-27 07:56:58.000000', '2022-03-27 07:56:58.000000');

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
(19, NULL, 'public/uploads/beranda_img2/16483930531.png', '2022-03-27 07:57:33.000000', '2022-03-27 07:57:33.000000'),
(20, NULL, 'public/uploads/beranda_img2/16483930572.png', '2022-03-27 07:57:37.000000', '2022-03-27 07:57:37.000000'),
(21, NULL, 'public/uploads/beranda_img2/16483930623.png', '2022-03-27 07:57:42.000000', '2022-03-27 07:57:42.000000'),
(22, NULL, 'public/uploads/beranda_img2/16483930674.png', '2022-03-27 07:57:48.000000', '2022-03-27 07:57:48.000000');

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
-- Table structure for table `formulirs`
--

CREATE TABLE `formulirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `echo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, 'text1', 'text2', 'text13', 'text14', 'public/uploads/f_profil/1648393351lsp.png', '2022-03-27 08:02:31.000000', '2022-03-27 15:02:31.869071');

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
(17, '2022_04_06_112234_create_formulirs_table', 9);

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
(7, 'Teknik Bedukun', '2022-04-05 11:27:25.000000', '2022-04-05 11:27:25.000000');

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
(9, 'SKM-2zzz312323', 'Amaterasu', 6, 7, 9, 2, '2022-04-05 19:29:52', '2022-04-05 19:29:52');

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
(1, NULL, 'public/uploads/strorg/1648393890ceb99d0f22759041b43f10a726f0a392.jpg', '2022-03-27 08:11:30', '2022-03-27 15:11:30');

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
(3, 'LAB KOMPUTER', 'DSDFSD', '2022-04-01 20:30:07.000000', '2022-04-01 20:30:07.000000'),
(4, 'LAB KIMIA', 'DFFSD', '2022-04-01 20:30:18.000000', '2022-04-01 20:30:18.000000'),
(5, 'LAB MIPA', 'WQW', '2022-04-05 11:24:42.000000', '2022-04-05 11:24:42.000000'),
(6, 'KANTIN', '312', '2022-04-05 11:25:00.000000', '2022-04-05 11:25:00.000000'),
(7, 'KONOHA', '2323', '2022-04-05 11:25:11.000000', '2022-04-05 11:25:11.000000'),
(8, '2222', '2312', '2022-04-05 22:25:00.000000', '2022-04-05 22:25:00.000000');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unikoms`
--

INSERT INTO `unikoms` (`id`, `kode_unikom`, `skema_id`, `unikom`, `created_at`, `updated_at`) VALUES
(2, 'UNIT-2112', 2, 'Rajin Merantau', '2022-04-05 12:07:35', '2022-04-05 12:07:35'),
(3, 'UNIT-2112232', 5, 'Rajin Begadang', '2022-04-05 12:11:16', '2022-04-05 12:11:16'),
(4, 'UNIT-723112', 8, 'Suka Ngutang sana sini', '2022-04-05 12:11:44', '2022-04-05 12:11:44'),
(6, 'UNIT-00003', 2, 'APA YA', '2022-04-05 12:13:09', '2022-04-05 12:13:09'),
(7, 'UNIT-42112232', 2, 'Rajin Ibadah', '2022-04-05 12:13:54', '2022-04-05 12:13:54'),
(8, 'UNIT-2WWW112', 9, 'AHDJSJKDJA', '2022-04-05 19:34:38', '2022-04-05 19:34:38'),
(9, 'UNIT-2112343', 2, 'Unit 12312', '2022-04-05 22:38:18', '2022-04-05 22:38:18'),
(10, 'UNIT-42112232ww', 2, 'aaa', '2022-04-05 22:42:01', '2022-04-05 22:42:01'),
(12, 'UNIT-211234534', 2, '34234', '2022-04-05 22:42:55', '2022-04-05 22:42:55'),
(13, 'UNIT-211212312331232', 2, 'Wadidaw', '2022-04-05 22:50:11', '2022-04-05 22:50:11'),
(14, 'UNIT-2112wer', 2, 'aaaerwe', '2022-04-05 22:52:46', '2022-04-05 22:52:46'),
(16, 'UNIT-42112232ww12', 2, 'Unit 12312343', '2022-04-05 22:54:11', '2022-04-05 22:54:11'),
(17, 'UNIT-2', 2, 'Rajin Merantau2', '2022-04-05 22:55:31', '2022-04-05 22:55:31'),
(19, 'UNIT-42', 8, 'Orra UMUM', '2022-04-05 22:56:53', '2022-04-06 09:10:32'),
(20, 'UNIT-211223212', 5, 'Inul', '2022-04-05 22:58:29', '2022-04-05 22:58:29'),
(21, 'UNIT-2112z', 7, 'h', '2022-04-06 05:22:36', '2022-04-06 05:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `kode`, `surel`, `tmpt_lahir`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `provinsi`, `kabupaten`, `kota`, `kecamatan`, `tamatan_id`, `image`, `ttd`, `jurusan_id`, `semester_id`, `email_verified_at`, `remember_token`, `password`, `ktp`, `khs`, `ktm`, `created_at`, `updated_at`) VALUES
(1, 'Admin Role', 'admin', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tQ7fofXA0RHduneyXFy6ig4xOKRnzAyfnyJ7xxfGbr0lj7BuGTKUPdABpDM1', '$2y$10$.77uDWW0GccOEAmSygpKbegD0rupPTlKLd/Tivp2/BHEP8acP/lD.', NULL, NULL, NULL, '2022-03-31 01:01:51', '2022-03-31 01:01:51'),
(2, 'User Role', 'user', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$SWgeJ2o7bKY2HX77jaVz9OKRX1QC83qdgzvaqGGCVH.o5amTu4cXS', NULL, NULL, NULL, '2022-03-31 01:01:52', '2022-03-31 01:01:52'),
(5, 'Ponsianus Jopi', '3042020058', 23245545, 'ponzzy22@gmail.com', 'Ketapang', '2013-01-08', '2', 'Indonesia', 'sadas', 7888912, 232356456, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1649257070lspp1-politap.pdf', NULL, 4, 5, NULL, NULL, '$2y$10$MRwgjmSTHReZ1dKNg57OruXd4bi9A6paOIyzrjoT05hU9HOW7In3m', 'public/uploads/beranda_img2/1649256639ceb99d0f22759041b43f10a726f0a392.jpg', 'public/uploads/beranda_img2/1648986790Screenshot (24).png', 'public/uploads/beranda_img2/1648987026Screenshot (11).png', '2022-04-02 07:38:26', '2022-04-06 07:57:50'),
(6, '12345', '12345', 12334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$E9EAyJ7Q9SCX/csBxQXmvuF9aTlQQASEeUSkzl/KIzU7KlQjvQkz2', NULL, NULL, NULL, '2022-04-02 08:12:07', '2022-04-02 10:34:32'),
(7, 'sdasd', '23434343', 1112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Wl8FEAjlDBU7TqkMDqsrlOEvO2uhQDzbG9WMzjaoHxMnHAucPJum2', NULL, NULL, NULL, '2022-04-02 09:05:50', '2022-04-02 09:52:53'),
(8, 'sukiman', '23123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6owq2StfKfJb11WH5Phf0.5DXaEiYEJcFEvo3EmhLJd3a9WuNhTiC', NULL, NULL, NULL, '2022-04-06 07:10:11', '2022-04-06 07:10:11');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formulirs`
--
ALTER TABLE `formulirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_profil`
--
ALTER TABLE `f_profil`
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
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `surel` (`surel`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesmens`
--
ALTER TABLE `asesmens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beranda_img1`
--
ALTER TABLE `beranda_img1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `beranda_img2`
--
ALTER TABLE `beranda_img2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulirs`
--
ALTER TABLE `formulirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skemas`
--
ALTER TABLE `skemas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `tuk`
--
ALTER TABLE `tuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `unikoms`
--
ALTER TABLE `unikoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
