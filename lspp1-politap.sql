-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:16 PM
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

--
-- Indexes for dumped tables
--

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
-- Indexes for table `f_profil`
--
ALTER TABLE `f_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strorg`
--
ALTER TABLE `strorg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `strorg`
--
ALTER TABLE `strorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
