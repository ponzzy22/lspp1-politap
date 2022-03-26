-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 06:14 AM
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
  `deskripsi` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `judul2`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, 'LSP P1 - POLITAP', 'POLITEKNIK NEGERI KETAPANG', NULL, '2022-03-25 21:23:56.000000', '2022-03-26 04:23:56.606451');

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
(40, NULL, 'public/uploads/beranda_img1/1648268676banner_1.jpg', '2022-03-25 21:24:36.000000', '2022-03-25 21:24:36.000000'),
(41, NULL, 'public/uploads/beranda_img1/1648268681banner_2.jpg', '2022-03-25 21:24:41.000000', '2022-03-25 21:24:41.000000'),
(42, NULL, 'public/uploads/beranda_img1/1648268716banner_12.jpg', '2022-03-25 21:25:16.000000', '2022-03-26 04:25:16.544293');

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
(14, NULL, 'public/uploads/beranda_img2/16482687481.png', '2022-03-25 21:25:48.000000', '2022-03-25 21:25:48.000000'),
(15, NULL, 'public/uploads/beranda_img2/16482687532.png', '2022-03-25 21:25:53.000000', '2022-03-25 21:25:53.000000'),
(16, NULL, 'public/uploads/beranda_img2/16482687573.png', '2022-03-25 21:25:57.000000', '2022-03-25 21:25:57.000000'),
(17, NULL, 'public/uploads/beranda_img2/16482687624.png', '2022-03-25 21:26:02.000000', '2022-03-25 21:26:02.000000');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `beranda_img2`
--
ALTER TABLE `beranda_img2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
