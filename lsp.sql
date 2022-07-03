-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 01:21 AM
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
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesor`
--

CREATE TABLE `asesor` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `no_hp` varchar(20) DEFAULT NULL,
  `skema` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`id`, `nik`, `nama`, `image`, `alamat`, `sex`, `email`, `status`, `updated_at`, `created_at`, `no_hp`, `skema`) VALUES
(1, '-', '-', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', NULL, NULL),
(24, 'MET.000.010629 2017', 'Adha Panca Wardanu, S.TP., M.P', NULL, '-', 'Laki-laki', 'cino7130@gmail.com', 'Aktif', '2022-07-03 10:27:13.000000', '2022-07-03 17:27:13.598353', '034529', '-'),
(25, 'MET.000.009812 2021', 'Ahmad Ravi, S.Pd., M.Pd', NULL, 'Luwu Utara, Sulawesi Selatan', NULL, NULL, 'Aktif', '2022-06-24 01:45:49.000000', '2022-06-24 08:45:49.214812', NULL, NULL),
(26, 'MET.000.004633 2020', 'Alfath Desita Jumiar, S.P., M.Si', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:46:51.000000', '2022-06-24 08:46:51.168584', NULL, NULL),
(27, 'MET.000.010618 2017', 'Ar-Razy Muhammad, S.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:47:19.000000', '2022-06-24 08:47:19.457959', NULL, NULL),
(28, 'MET.000.010613 2017', 'Beny Setiawan, S.Tp., M.P', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:47:59.000000', '2022-06-24 08:47:59.462946', NULL, NULL),
(29, 'MET.000.009818 2021', 'Darmanto, S.Kom., M.Kom', NULL, 'Lamandau, Kalimantan Tengah', NULL, NULL, 'Aktif', '2022-06-24 01:48:39.000000', '2022-06-24 08:48:39.058245', NULL, NULL),
(30, 'MET.000.009815 2021', 'Erick Radwitya, S.S.T., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:49:17.000000', '2022-06-24 08:49:17.508052', NULL, NULL),
(31, 'MET.000.009816 2021', 'Fachrul Rozie, S.T., M.Tr.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:49:54.000000', '2022-06-24 08:49:54.065927', NULL, NULL),
(32, 'MET.000.009813 2021', 'Firmanilah Kamil, S.Pd., M.Pd', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:51:47.000000', '2022-06-24 08:51:47.995468', NULL, NULL),
(34, 'MET.000.010619 2017', 'Irfan Cholid, S.P., M.MA', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:54:17.000000', '2022-06-24 08:54:17.968855', NULL, NULL),
(35, 'MET.000.009819 2021', 'Kharisma, S.Kom., M.Kom', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:54:48.000000', '2022-06-24 08:54:48.944209', NULL, NULL),
(36, 'MET.000.009824 2021', 'Maya Santi, S.Pd., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:55:19.000000', '2022-06-24 08:55:19.401027', NULL, NULL),
(37, 'MET.000.009821 2021', 'Nenengsih Verawati, S.TP., M.P', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:55:54.000000', '2022-06-24 08:55:54.633013', NULL, NULL),
(38, 'MET.000.009820 2021', 'Rosmalinda, S.ST., M.P', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:56:23.000000', '2022-06-24 08:56:23.286903', NULL, NULL),
(39, 'MET.000.010604 2017', 'Saifudin Usman, S.T., M.Tr.Kom', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:56:55.000000', '2022-06-24 08:56:55.623026', NULL, NULL),
(40, 'MET.000.010608 2017', 'Venti Jatsiyah, S.P., M.Si', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:57:39.000000', '2022-06-24 08:57:39.193338', NULL, NULL),
(41, 'MET.000.009814 2021', 'Yudi Chandra, S.ST., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:58:21.000000', '2022-06-24 08:58:21.279745', NULL, NULL),
(42, 'MET.000.010614 2017', 'Yusuf, S.ST., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:58:49.000000', '2022-06-24 08:58:49.705848', NULL, NULL),
(43, 'MET.000.009817 2021', 'M. Jimi Rizaldi, S.ST., M.T', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 01:59:53.000000', '2022-06-24 08:59:53.499269', NULL, NULL),
(44, 'MET.000.010609 2017', 'Encik Eko Rifkowaty, S.TP., M.P', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-06-24 02:00:39.000000', '2022-06-24 09:00:39.218082', NULL, NULL),
(45, 'MET.000.01512 2022', 'Eka Wahyudi, S.Pd., M.Cs', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:01:25.000000', '2022-06-24 09:01:25.436973', NULL, NULL),
(46, 'MET.OOO.008402 2021', 'A. Nova Zulfahmi, S.Pi., M.Sc', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:02:59.000000', '2022-06-24 09:02:59.333408', NULL, NULL),
(47, 'MET.000.008401 2021', 'Budi Pratomo Sibuea, S.ST., M.ST', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:03:33.000000', '2022-06-24 09:03:33.979241', NULL, NULL),
(49, 'MET.000.009823 2021', 'M. Iwan Toro, A.Md', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-06-24 02:04:30.000000', '2022-06-24 09:04:30.622465', NULL, NULL),
(50, 'MET.000.004637 2020', 'Novi Indah Pradasari, S.Kom., M.Kom', NULL, NULL, 'Perempuan', NULL, 'Aktif', '2022-06-24 02:07:20.000000', '2022-06-24 09:07:20.366150', NULL, NULL),
(51, 'MET.000.004642 2020', 'Sartika, S.Si., M.T', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:07:50.000000', '2022-06-24 09:07:50.930562', NULL, NULL),
(52, 'MET.000.004645 2020', 'Sy. Indra Septiansyah, S.Si., M.T', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:08:27.000000', '2022-06-24 09:08:27.711489', NULL, NULL),
(53, 'MET.000.004643 2020', 'Syarifah Aqla, S.Pd., M.T', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:09:18.000000', '2022-06-24 09:09:18.147761', NULL, NULL),
(54, 'MET.000.004644 2020', 'Firman, S.Pd., M.P.Fis', NULL, NULL, NULL, NULL, 'Aktif', '2022-06-24 02:09:54.000000', '2022-06-24 09:09:54.330513', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Skema', 'uploads/info/16563141241655040701index.png', '2022-06-27 00:15:24.000000', '2022-06-27 07:15:24.820887'),
(2, 'TUK', 'uploads/info/16563145261655040767WhatsApp Image 2022-03-10 at 16.14.59.jpeg', '2022-06-27 00:22:06.000000', '2022-06-27 07:22:06.496930');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(5) UNSIGNED NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `kategori_id`, `title`, `excerpt`, `body`, `image`, `status`, `updated_at`, `created_at`) VALUES
(35, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politekn', 'Lembaga sertifikasi ', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', 'uploads/berita/16553957711652156312IMG_20220420_131245.jpg', 'Posting', '2022-06-16 09:09:31', '2022-05-09 21:23:35'),
(37, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politekn', 'Lembaga sertifikasi ', '<div style=\"color: rgb(106, 112, 107); font-family: &quot;Fira Code SemiBold&quot;, Consolas, &quot;Courier New&quot;, monospace; font-weight: normal; font-size: 14px; line-height: 19px; white-space: pre;\"><div><span style=\"background-color: inherit;\"><span style=\"color: rgb(106, 112, 107); font-family: &quot;Times New Roman&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempora quasi et, accusantium dicta facere saepe odit ipsum sunt ducimus! Quo soluta quasi minima tenetur! Qui perferendis eaque rem ipsa.</span></span></div></div>', 'uploads/berita/16567639596.png', 'Posting', '2022-07-02 05:12:39', '2022-06-11 09:20:52'),
(41, 1, 'Layanan Skema Lembaga Sertifikasi Profesi Politekn', 'Lembaga sertifikasi ', '<div style=\"color: rgb(106, 112, 107); font-family: &quot;Fira Code SemiBold&quot;, Consolas, &quot;Courier New&quot;, monospace; font-weight: normal; font-size: 14px; line-height: 19px; white-space: pre;\"><div><span style=\"background-color: inherit;\"><span style=\"color: rgb(106, 112, 107); font-family: &quot;Tahoma&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempora quasi et, accusantium dicta facere saepe odit ipsum sunt ducimus! Quo soluta quasi minima tenetur! Qui perferendis eaque rem ipsa.</span></span></div></div>', 'uploads/berita/16553957451652155910WhatsApp Image 2020-06-26 at 10.01.35.jpeg', 'Posting', '2022-06-16 09:09:05', '2022-06-11 09:20:52'),
(43, 1, 'erwerwe', 'werwe', '<p>wer<br></p>', 'uploads/berita/16567640152.jpg', 'Posting', '2022-07-02 05:13:35', '2022-07-02 05:13:35'),
(44, 1, 'SDASDASD', 'ASDAS', '<p><span style=\"background-color: inherit; --darkreader-inline-bgcolor: inherit;\" data-darkreader-inline-bgcolor=\"\"><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"\">PONSIANUS JOPI</span></span></span></p><p align=\"justify\">1. Asdasdasjdasdj J dfsfkjdfksdjfkls;df dfsdkfsddfsd saddd ddddddddd ddddd sadddd ddddd ddddd ddddd&nbsp; fsdfsdfsdf asdas da sd as dasd asd as das das d asdas das das das das a sdas da s<br></p><div align=\"justify\"><ol><li>sdasdas dasdasdasd asdasdasdasda sdasdasd asdasdasdasd asdasd asd asdasdasd sdasdas asd asd as dasd as dasdas das das das da sda sd asd as asdasdasdasdasdasdasdasd asdasdas dasdas dasdasda sdasdasdasd asdasdasd asda sdasdas sdasdasd sad asd as as das dasd as das da sd asd asd as da sdas da sda sd as das das da sdas das dasd as dasdas as a sdas das&nbsp; sd asd asd asd as d as dasd as da sda da<a href=\"http://127.0.0.1:8000/berita/eyJpdiI6Ik1tcW50SUYvQkZ1eGs4UFlaaFVEZ3c9PSIsInZhbHVlIjoiZndoS0JTNmthK3VJa1Z5eU4vYVNEQT09IiwibWFjIjoiNjMzYjBlYWU0ZDcxMzEzYmFjZWJhM2UyMDBmNzI1MmQ2YjlmNDlkMGRmZmE1ODRhZGRjNzQ1MzU2OWM4NmZlMSIsInRhZyI6IiJ9\" target=\"_blank\">fsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf</a>sadasdasdas dasdasdasd asdasdasda sdasdasd asdasdasda sdadsdadasdasdasdasdasdasdasd<br></li></ol></div>', 'uploads/berita/16567654182.jpg', '<label class=\"badge badge-danger\">Tidak di Posting</label>', '2022-07-03 12:43:44', '2022-07-02 05:36:58'),
(45, 2, 'sdas', 'asdas', '<p>sada<br></p>', 'uploads/berita/1656876958login balsamiq.jpg', '<label class=\"badge badge-info\">Posting</label>', '2022-07-03 12:43:29', '2022-07-03 12:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `judul`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(71, NULL, NULL, 'uploads/carousel/16553907202.jpg', '2022-06-16 07:45:20.000000', '2022-06-16 07:45:20.000000'),
(72, NULL, NULL, 'uploads/carousel/16553907293.jpg', '2022-06-16 07:48:39.000000', '2022-06-16 14:48:39.836530'),
(73, NULL, NULL, 'uploads/carousel/16554023141652155910WhatsApp Image 2020-06-26 at 10.01.35.jpeg', '2022-06-16 10:58:34.000000', '2022-06-16 10:58:34.000000'),
(74, NULL, 'rtertczxczc', 'uploads/carousel/16567587716.png', '2022-07-02 03:53:44.000000', '2022-07-02 10:53:44.996807'),
(75, NULL, NULL, 'uploads/carousel/16567594552.jpg', '2022-07-02 03:57:35.000000', '2022-07-02 03:57:35.000000'),
(76, NULL, NULL, 'uploads/carousel/16567594632.jpg', '2022-07-02 03:57:43.000000', '2022-07-02 03:57:43.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cek_pendaftarans`
--

CREATE TABLE `cek_pendaftarans` (
  `5` bigint(20) UNSIGNED NOT NULL,
  `cek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `kode_post` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `nim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor_id` int(11) DEFAULT NULL,
  `tuk_id` bigint(20) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kantor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_registers`
--

INSERT INTO `data_registers` (`id`, `skema_name`, `skema_id`, `user_id`, `user_name`, `status`, `surel`, `tmpt_lahir`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `image`, `jurusan_id`, `semester_id`, `nim`, `date`, `time`, `asesor_id`, `tuk_id`, `keterangan`, `kode`, `id_skema`, `kode_skema`, `jenis`, `koreksi`, `rmh`, `tmt`, `ktr`, `institusi`, `alamat_kantor`, `email3`, `jabatan`, `telp`, `fax`, `postal`, `created_at`, `updated_at`) VALUES
(3319, 'Junior Web Programmer', 'belomSS.JWP/LSPP/005/202233', '33', 'Ponsianus Jopi', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'ponzy22@gmail.com', 'Ketapang', '2022-06-29', '1', 'Ketapang', 'BTNSASDASDHAJSDK', '7888111', '081256390909', 'uploads/beranda_img2/1656504172d795ebcce6432ef85d4bd6cd6f5fe363.jpg', 4, 4, '3042020058', '2022-06-30', '8:59 PM', 38, 24, NULL, '-', NULL, 'SS.JWP/LSPP/005/2022', 'Sertifikasi', NULL, '-', 'SMA', '-', 'PEGADAIAN', 'dimana dak tau', 'apelah@assu', 'ketua', '03030303030', '3333333', '76767', '2022-07-02 22:48:43', '2022-07-03 07:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen__uploads`
--

CREATE TABLE `dokumen__uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumen__uploads`
--

INSERT INTO `dokumen__uploads` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Photo', '2022-05-05 17:06:57', '2022-05-05 17:06:57'),
(2, 'Kartu Tanda Penduduk', '2022-05-05 17:06:57', '2022-05-05 17:06:57'),
(3, 'Kartu Tanda Mahasiswa', '2022-05-05 17:07:37', '2022-05-05 17:07:37'),
(4, 'Kartu Hasil Studi', '2022-05-05 17:07:37', '2022-05-05 17:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `elemen`
--

CREATE TABLE `elemen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unikom_id` int(5) UNSIGNED NOT NULL,
  `asesmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `elemen`
--

INSERT INTO `elemen` (`id`, `unikom_id`, `asesmen`, `kriteria`, `created_at`, `updated_at`) VALUES
(49, 80, 'Menyiapkan Fasilitas Pengelasan', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', '2022-05-09 00:56:38', '2022-05-09 16:15:51'),
(50, 80, 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', '2022-05-09 01:14:47', '2022-05-09 01:14:47'),
(51, 80, 'Melakasanakan pemeriksaan hasil pengelasan secara visual', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', '2022-05-09 01:18:16', '2022-05-09 01:18:16'),
(52, 80, 'Melaporkan hasil pengelasan', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', '2022-05-09 01:21:02', '2022-05-09 01:21:02'),
(58, 109, 'Mengidentifikasi  konsep data dan struktur data', '<p>1.1 Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.<br>1.2 Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.<br></p>', '2022-05-11 13:11:52', '2022-05-11 13:11:52'),
(59, 109, 'Menerapkan struktur data dan akses terhadap struktur data tersebut', '2.1 Struktur data diimplementasikan sesuai dengan bahasa pemrograman yang akan dipergunakan.<br>2.2 Akses terhadap data dinyatakan dalam algoritma yang efisiensi sesuai bahasa pemrograman yang akan dipakai. <br>', '2022-05-11 13:13:11', '2022-05-11 13:13:11'),
(60, 110, 'Mengidentifikasi rancangan user interface', '<p>1.1 Rancangan user interface diidentifikasi sesuai kebutuhan. <br>1.2 Komponen user interface dialog diidentifikasi sesuai konteks rancangan proses.<br>1.3 Urutan dari akses komponen user interface dialog dijelaskan.<br>1.4 Simulasi (mock-up) dari aplikasi yang akan dikembangkan dibuat. <br></p>', '2022-05-11 13:14:49', '2022-05-11 13:14:49'),
(61, 110, 'Melakukan implementasi rancangan user interface', '<p>2.1 Menu program sesuai dengan rancangan program diterapkan.<br>2.2 Penempatan user interface dialog diatur secara sekuensial.<br>2.3 Setting aktif-pasif komponen user interface dialog disesuaikan dengan urutan alur proses.<br>2.4 Bentuk style dari komponen user interface ditentukan. <br>2.5 Penerapan simulasi dijadikan suatu proses yang sesungguhnya.<br></p>', '2022-05-11 13:15:31', '2022-05-11 13:15:31'),
(62, 111, 'Memilih tools pemrograman yang sesuai dengan kebutuhan', '<p>1.1 Platform (lingkungan) yang akan digunakan untuk menjalankan tools pemrograman&nbsp; diidentifikasi sesuai&nbsp; dengan kebutuhan.</p><p>1.2 Tools bahasa pemrogram dipilih sesuai dengan kebutuhaan dan lingkungan pengembangan.<br></p>', '2022-05-11 13:17:14', '2022-05-11 13:18:18'),
(63, 111, 'Instalasi tool pemrograman', '<p>2.1 Tools pemrogaman ter-install sesuai dengan prosedur. &nbsp; </p><p>2.2 Tools pemrograman bisa dijalankan di lingkungan pengembangan yang telah ditetapkan.<br></p>', '2022-05-11 13:18:00', '2022-05-11 13:18:00'),
(64, 111, 'Menerapkan hasil pemodelan kedalam eksekusi script sederhana', '<p>3.1 Script (source code) sederhana dibuat&nbsp; sesuai tools pemrogaman yang di-install </p><p>3.2 Script dapat dijalankan dengan benar dan menghasilkan keluaran sesuai skenario yang diharapkan <br></p>', '2022-05-11 13:18:49', '2022-05-11 13:19:12'),
(65, 112, 'Menerapkan codingguidelines dan best  practices dalam  penulisan program  (kode sumber)', '<p>1.1 Kode sumber dituliskan mengikuti coding-guidelines dan best practices.&nbsp; </p><p>1.2 Struktur program yang sesuai dengan konsep paradigmanya dibuat.&nbsp; </p><p>1.3 Galat/error ditangani. <br></p>', '2022-05-11 13:20:15', '2022-05-11 13:20:15'),
(66, 112, 'Menggunakan ukuran performansi dalam menuliskan kode sumber', '<p>2.1 Efisiensi penggunaan resources oleh kode dihitung. </p><p>2.2 Kemudahan interaksi selalu diimplementasikan&nbsp; sesuai standar yang berlaku.<br></p>', '2022-05-11 13:20:47', '2022-05-11 13:20:47'),
(67, 113, 'Menggunakan tipe data dan control program', '<p>1.1 Tipe data yang sesuai standar ditentukan . </p><p>1.2 Syntax program yang dikuasai digunakan sesuai standar. </p><p>1.3 Struktur kontrol program yang dikuasai digunakan sesuai standar.<br></p>', '2022-05-11 13:22:02', '2022-05-11 13:22:02'),
(68, 113, 'Membuat program sederhana', '<p>2.1 Program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran telah dibuat. </p><p>2.2 Struktur kontrol percabangan dan pengulangan dalam membuat program telah digunakan.<br></p>', '2022-05-11 13:22:37', '2022-05-11 13:22:37'),
(69, 113, 'Membuat program menggunakan prosedur dan fungsi', '<p>3.1 Program dengan menggunakan prosedur dibuat sesuai aturan penulisan program. </p><p>3.2 Program dengan menggunakan fungsi dibuat sesuai aturan penulisan program. </p><p>3.3 Program dengan menggunakan prosedur dan fungsi secara bersamaan dibuat sesuai aturan penulisan program. </p><p>3.4 Keterangan untuk setiap prosedur dan fungsi telah diberikan. <br></p>', '2022-05-11 13:23:15', '2022-05-11 13:23:15'),
(70, 113, 'Membuat program menggunakan array', '<p>4.1 Dimensi array telah ditentukan. </p><p>4.2 Tipe data array telah ditentukan. </p><p>4.3 Panjang array telah&nbsp; ditentukan. </p><p>4.4 Pengurutan array telah digunakan.<br></p>', '2022-05-11 13:23:47', '2022-05-11 13:24:17'),
(71, 113, 'Membuat program untuk akses file', '<p>5.1 Program untuk menulis data dalam media penyimpan telah dibuat. </p><p>5.2 Program untuk membaca data dari media penyimpan telah dibuat.<br></p>', '2022-05-11 13:24:48', '2022-05-11 13:24:48'),
(72, 114, 'Melakukan pemilihan unit-unit reuse yang potensial', '<p>1.1 Class unit-unit reuse (dari aplikasi lain) yang sesuai dapat diidentifikasi. </p><p>1.2 Keuntungan efisiensi dari pemanfaatan komponen reuse dapat dihitung. </p><p>1.3 Lisensi, Hak cipta dan hak paten tidak dilanggar dalam pemanfaatan komponen reuse tersebut<br></p>', '2022-05-11 13:25:59', '2022-05-11 13:25:59'),
(73, 114, 'Melakukan integrasi library atau komponen pre-existing dengan source code yang ada', '<p>2.1 Ketergantungan antar unit diidentifikasi. </p><p>2.2 Penggunaan komponen yang sudah obsolete dihindari. </p><p>2.3 Program yang dihubungkan dengan library diterapkan.<br></p>', '2022-05-11 13:26:30', '2022-05-11 13:26:30'),
(74, 114, 'Melakukan pembaharuan library atau komponen preexisting yang  digunakan', '<p>3.1 Cara-cara pembaharuan library atau komponen pre-existing diidentifikasi. </p><p>3.2 Pembaharuan library atau komponen preexisting berhasil dilakukan.<br><br><br></p>', '2022-05-11 13:27:24', '2022-05-11 13:27:24'),
(75, 115, 'Melakukan identifikasi kode program', '<p>1.1 Modul program diidentifikasi </p><p>1.2 Parameter&nbsp; yang&nbsp; dipergunakan&nbsp; diidentifikasi&nbsp; </p><p>1.3 Algoritma dijelaskan cara kerjanya </p><p>1.4 Komentar setiap baris kode termasuk data, eksepsi, fungsi, prosedur dan class (bila ada) diberikan <br></p>', '2022-05-11 13:28:31', '2022-05-11 13:28:31'),
(76, 115, 'Membuat dokumentasi modul program', '<p>2.1 Dokumentasi modul dibuat sesuai dengan identitas untuk memudahkan pelacakan </p><p>2.2 Identifikasi dokumentasi diterapkan </p><p>2.3 Kegunaan modul dijelaskan&nbsp; </p><p>2.4 Dokumen direvisi sesuai perubahan kode program<br></p>', '2022-05-11 13:29:22', '2022-05-11 13:29:22'),
(77, 115, 'Membuat dokumentasi fungsi, prosedur atau method program', '<p>3.1 Dokumentasi fungsi, prosedur atau metod dibuat&nbsp; </p><p>3.2 Kemungkinan eksepsi dijelaskan&nbsp; </p><p>3.3 Dokumen direvisi sesuai perubahan kode program <br></p>', '2022-05-11 13:30:12', '2022-05-11 13:30:12'),
(78, 115, 'Men-generate dokumentasi', '<p>4.1 Tools untuk generate dokumentasi diidentifikasi </p><p>4.2 Generate dokumentasi dilakukan <br></p>', '2022-05-11 13:31:03', '2022-05-11 13:31:03'),
(79, 116, 'Mempersiapkan kode program', '<p>1.1 Kode program sesuai spesifikasi disiapkan. </p><p>1.2 Debugging tools untuk melihat proses suatu modul dipersiapkan. <br></p>', '2022-05-11 13:32:47', '2022-05-11 13:32:47'),
(80, 116, 'Melakukan debugging', '<p>2.1 Kode program dikompilasi sesuai bahasa pemrograman yang digunakan. </p><p>2.2 Kriteria lulus build dianalisis. </p><p>2.3 Kriteria eksekusi aplikasi dianalisis. </p><p>2.4 Kode kesalahan dicatat. <br></p>', '2022-05-11 13:33:17', '2022-05-11 13:33:17'),
(81, 116, 'Memperbaiki program', '<p>3.1 Perbaikan terhadap kesalahan kompilasi maupun build dirumuskan. </p><p>3.2 Perbaikan dilakukan. <br></p>', '2022-05-11 13:33:50', '2022-05-11 13:33:50'),
(87, 124, 'Elemen1', '<p>Kriteria1</p>', '2022-06-26 10:57:29', '2022-06-26 10:57:41'),
(88, 125, 'Elemen2', '<p>Kriteria2<br></p>', '2022-06-26 10:58:20', '2022-06-26 10:58:20'),
(90, 126, 'sdasd', '<p>asd</p>', '2022-06-28 11:59:47', '2022-06-28 11:59:47');

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
-- Table structure for table `fileapl2s`
--

CREATE TABLE `fileapl2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filelains`
--

CREATE TABLE `filelains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filelains`
--

INSERT INTO `filelains` (`id`, `file`, `image`, `created_at`, `updated_at`) VALUES
(3, 'weqweqw', 'uploads/file/165672476202. FR.APL-02. ASKOM.pdf', '2022-07-01 18:19:22', '2022-07-01 18:19:22'),
(4, 'sgsgsfg', 'uploads/file/1656780587Design Frontend LSP-POLITAP.pdf', '2022-07-02 09:49:47', '2022-07-02 09:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `image`, `created_at`, `updated_at`) VALUES
(11, 'sdasdasdasd', 'uploads/file/165677989702. FR.APL-02. ASKOM.pdf', '2022-07-02 09:38:17', '2022-07-02 09:38:17'),
(12, 'fsdfsdfsdf', 'uploads/file/165677994502. FR.APL-02. ASKOM.pdf', '2022-07-02 09:39:05', '2022-07-02 09:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `formapl2s`
--

CREATE TABLE `formapl2s` (
  `id` int(11) UNSIGNED NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formapl2s`
--

INSERT INTO `formapl2s` (`id`, `skema`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'sdasd', 'sdasd', '2022-06-27 23:14:25', '2022-06-27 23:14:25'),
(2, 'dfsdf', 'sdfsd', '2022-06-27 23:18:41', '2022-06-27 23:18:41'),
(4, 'qerqwe', 'erqwe', '2022-06-28 00:18:19', '2022-06-28 00:18:19'),
(5, 'qwe', 'qwe', '2022-06-28 00:45:45', '2022-06-28 00:45:45'),
(6, 'Asisten Kebun Kelapa Sawit', 'gdfg', '2022-06-28 01:12:02', '2022-06-28 01:12:02'),
(7, 'Asisten Kebun Kelapa Sawit', 'SS.AKKS/LSPP/001/2022', '2022-06-28 01:13:41', '2022-06-28 01:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `formapl2_children`
--

CREATE TABLE `formapl2_children` (
  `id` int(11) UNSIGNED NOT NULL,
  `formapl2_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elemen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formapl2_children`
--

INSERT INTO `formapl2_children` (`id`, `formapl2_id`, `unit`, `elemen`, `created_at`, `updated_at`) VALUES
(1, '7', 'qweqw', 'qweqwe', '2022-06-28 01:27:56', '2022-06-28 01:27:56'),
(2, '1', 'sdas', '<p>dasdasd<br></p>', '2022-06-28 01:45:25', '2022-06-28 01:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `f_profil`
--

CREATE TABLE `f_profil` (
  `id` int(11) NOT NULL,
  `profil` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
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

INSERT INTO `f_profil` (`id`, `profil`, `isi`, `visi`, `misi`, `motto`, `image`, `updated_at`, `created_at`) VALUES
(1, '<h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">Profil Lembaga Sertifikasi Politeknik Negeri Ketapang</span></span></h3><h5 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></h5><h5 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi yang telah memperoleh sertifikat lisensi No. </span><span style=\"font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi Profesi\r\n (BNSP). dan memiliki Nomor SK </span>\r\n						KEP. 0429/BNSP/IV/2018&nbsp; <span style=\"font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP&nbsp; </span><span style=\"font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span><span style=\"font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).&nbsp; </span></h5><h5 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\">Memiliki\r\n 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji \r\nkompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program \r\nstudi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang \r\nmemiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di\r\n pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></h5><h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\"></span> </span></h3>', '<br>', '<h2 align=\"center\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Visi</span></span></span></h2><p align=\"center\"><br></p><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">menjamin kompetensi sumberdaya manusia agar mampu bersaing </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">di era globalisasi.\"</span><br></h4>', '<h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Misi</span></b></span></h2><h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></b></span></h2><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">2. Mengembangkan sumber daya manusia di LSP Politeknik Negeri </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; Ketapang dan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">seluruh asesor</span> <span style=\"font-family: &quot;Comic Sans MS&quot;;\">kompetensi menjadi tenaga profesional</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">3. Mengembangkan skema dan perangkat asesmen secara berkelanjutan</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">5.</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> Mengembangkan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">sistem </span></span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">informasi website untuk kepen</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">tingan internal </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; dan</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> eksternal LSP POLITAP </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder </span></h4><h5 align=\"justify\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h5><h5 align=\"justify\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"></span></h5><h5><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h5><h4><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4><h4><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4><h4><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4>', '<h4 style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\">MOTTO</span></h4><h3 style=\"   text-align: center;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"font-family: &quot;Courier New&quot;;\">\"Kompeten , Unggul dan, Profesional\"</span><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\"><br></span></h3>', 'public/uploads/f_profil/1650562467lsp.png', '2022-06-08 07:13:35.000000', '2022-06-08 14:13:35.591045'),
(2, '<ul><li style=\"text-align: justify;\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi yang telah memperoleh sertifikat lisensi No. </span></span><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi Profesi\r\n (BNSP). dan memiliki Nomor SK </span></span><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">\r\n						KEP. 0429/BNSP/IV/2018.</span></span></li><li style=\"text-align: justify;\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP</span><span style=\"font-family: &quot;Arial&quot;;\"> - </span></span><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span></span><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).</span></span></span></li><li style=\"text-align: justify;\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Memiliki 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji kompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang memiliki kompetensi mumpunisesuai bidangnya dan memiliki nilai lebih di pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></span></span></li></ul>', '<h6 align=\"center\"><span style=\"background-color: inherit; --darkreader-inline-bgcolor: inherit;\" data-darkreader-inline-bgcolor=\"\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Arial&quot;; --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">Makna Logo</span><br></span></span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">1. LSP, merupakan singkatan dari Lembaga Sertifikasi Profesi; </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">2. POLITAP, merupakan singkatan dari Politeknik Negeri Ketapang;</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">3. Latar belakang tulisan warna merah-putih seperti bendera negara, melambangkan perjuangan Lembaga Sertifikasi Profesi Politeknik </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;Negeri Ketapang (LSP POLITAP) yang tiada henti untuk menjadi lembaga sertifikasi profesi yang profesional dan terpercaya; </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">4. Lingkaran berwarna merah seperti bola dunia, menunjukkan eksistensi perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">&nbsp;&nbsp;&nbsp; Ketapang (LSP POLITAP) hingga ketingkat internasional; </span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">5. Simbol centang berwarna merah di dalam lingkaran, merupakan gambaran dari komitmen perjuangan Lembaga Sertifikasi Profesi</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp; Politeknik Negeri Ketapang (LSP-POLITAP) untuk menghasilkan sumberdaya manusia yang berkualitas. </span></span></h6>', '<div align=\"center\"><h6><span style=\"font-family: &quot;Arial&quot;;\">﻿</span><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-size: 1.875rem;\"><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">Visi</span><span style=\"font-family: &quot;Arial&quot;;\"> </span></span></span></h6><h6><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya\r\n                            manusia agar mampu bersaing di era globalisasi.\"</span></h6><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4></div>', '<div align=\"center\"><h6><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-size: 30px; font-family: &quot;Arial&quot;;\">Misi</span></span></h6></div><h6><span style=\"font-family: &quot;Arial&quot;;\">\r\n                             </span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten.</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">2. Mengembangkan\r\n                            sumber daya manusia di LSP Politeknik Negeri &nbsp;&nbsp; Ketapang dan seluruh asesor\r\n                            kompetensi menjadi tenaga profesional.</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">3. Mengembangkan skema dan perangkat asesmen\r\n                            secara berkelanjutan.</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi .</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">5.\r\n                            Mengembangkan sistem informasi website untuk kepentingan internal &nbsp;&nbsp; dan eksternal\r\n                            LSP POLITAP .</span></span></h6><h6 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder .\r\n                        </span></span></h6><h4 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></span></h4><h4 align=\"center\"><span style=\"font-weight: normal;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></span></h4>', '<div style=\"text-align: center;\"><h6><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a;\" data-darkreader-inline-color=\"\"><span style=\"font-size: 30px;\">Motto</span></span></h6><h6><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya\r\n                            manusia agar mampu bersaing di era globalisasi.\"\r\n                        </span></h6><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4><h4><span style=\"font-weight: normal; font-family: &quot;Arial&quot;;\"><br></span></h4></div>', 'uploads/f_profil/1655616860lsp.png', '2022-07-02 04:54:10.000000', '2022-07-02 11:54:10.744916');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_fotos`
--

CREATE TABLE `galeri_fotos` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_galeri_id` int(5) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_fotos`
--

INSERT INTO `galeri_fotos` (`id`, `group_galeri_id`, `image`, `created_at`, `updated_at`) VALUES
(117, 6, 'uploads/galeri/165557804112.png', '2022-06-18 11:47:21', '2022-06-18 11:47:21'),
(118, 6, 'uploads/galeri/1655578041IMG_20220420_131245.jpg', '2022-06-18 11:47:21', '2022-06-18 11:47:21'),
(119, 6, 'uploads/galeri/16555782052.jpg', '2022-06-18 11:50:05', '2022-06-18 11:50:05'),
(120, 6, 'uploads/galeri/16555782053.jpg', '2022-06-18 11:50:05', '2022-06-18 11:50:05'),
(121, 6, 'uploads/galeri/16555782056.png', '2022-06-18 11:50:05', '2022-06-18 11:50:05'),
(122, 6, 'uploads/galeri/1655578205lsp.jpg', '2022-06-18 11:50:05', '2022-06-18 11:50:05'),
(123, 5, 'uploads/galeri/1656724866Untitled (2).png', '2022-07-01 18:21:06', '2022-07-01 18:21:06'),
(124, 5, 'uploads/galeri/1656724866Untitled (Copy).png', '2022-07-01 18:21:06', '2022-07-01 18:21:06'),
(125, 5, 'uploads/galeri/1656724866Untitled.png', '2022-07-01 18:21:06', '2022-07-01 18:21:06'),
(126, 5, 'uploads/galeri/1656724953banner_1.jpg', '2022-07-01 18:22:33', '2022-07-01 18:22:33'),
(127, 5, 'uploads/galeri/1656724953banner_2.jpg', '2022-07-01 18:22:33', '2022-07-01 18:22:33'),
(128, 5, 'uploads/galeri/1656724953banner_12.jpg', '2022-07-01 18:22:33', '2022-07-01 18:22:33'),
(129, 4, 'uploads/galeri/16567249761.png', '2022-07-01 18:22:56', '2022-07-01 18:22:56'),
(130, 4, 'uploads/galeri/16567249762.png', '2022-07-01 18:22:56', '2022-07-01 18:22:56'),
(131, 4, 'uploads/galeri/16567249763.png', '2022-07-01 18:22:56', '2022-07-01 18:22:56'),
(132, 4, 'uploads/galeri/16567249764.png', '2022-07-01 18:22:56', '2022-07-01 18:22:56'),
(133, 11, 'uploads/galeri/16568737001655221338asu.jpg', '2022-07-03 11:41:40', '2022-07-03 11:41:40'),
(134, 11, 'uploads/galeri/16568737001655221962Rapat ASKOM (1).jpeg', '2022-07-03 11:41:40', '2022-07-03 11:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `group_galeris`
--

CREATE TABLE `group_galeris` (
  `id` int(5) UNSIGNED NOT NULL,
  `galeri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_galeris`
--

INSERT INTO `group_galeris` (`id`, `galeri`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Carousel Album', '', '2022-05-09 19:37:54', '2022-05-09 19:37:54'),
(5, 'Kegiatan Mahasiswa', 'uploads/group-galeri/165677461316550431791652157112Kegiatan Mahasiswa (2).jpeg', '2022-05-09 19:39:55', '2022-07-02 08:10:13'),
(11, 'sdasda', 'uploads/group-galeri/165677321216550431791652157112Kegiatan Mahasiswa (1).jpeg', '2022-07-02 07:46:52', '2022-07-02 07:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `info2`
--

CREATE TABLE `info2` (
  `id` int(5) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info2`
--

INSERT INTO `info2` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/info/16567675982.jpg', '2022-07-02 13:13:18', '2022-07-02 06:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(5) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `keterangan`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'uploads/info/1656770319165504730416522939352022-05-11 23-36-57.mp4', '2022-04-20 07:58:52', '2022-07-02 06:58:39');

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(5) UNSIGNED NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Artikel/Berita', '2022-04-19 19:33:27', '2022-04-19 19:33:27'),
(2, 'Pengumuman', '2022-04-19 19:33:57', '2022-04-19 19:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `kknis`
--

CREATE TABLE `kknis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(37, '2022_04_16_081140_create_beritas_table', 29),
(38, '2022_04_19_193029_create_kategoris_table', 30),
(39, '2022_04_20_133815_create_infos_table', 31),
(40, '2022_04_26_053611_create_files_table', 32),
(41, '2022_04_28_170453_create_notes_table', 33),
(42, '2022_05_03_142051_create_asus_table', 34),
(43, '2022_05_05_170426_create_dokumen__uploads_table', 34),
(44, '2022_06_10_170400_create_skknis_table', 35),
(45, '2022_06_10_172828_create_kknis_table', 36),
(46, '2022_06_10_173640_create_fileapl2s_table', 37),
(47, '2022_06_10_174907_create_filelains_table', 38),
(48, '2022_06_15_043550_create_cek_pendaftarans_table', 39),
(49, '2022_06_15_114759_create_verifikasi_skemas_table', 39),
(50, '2022_06_28_045703_create_formapl2s_table', 39),
(51, '2022_06_28_064228_create_formapl2_children_table', 40);

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
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'TO-DO-LIST', '<h5><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a; font-family: &quot;Comic Sans MS&quot;;\" data-darkreader-inline-color=\"\">ADMIN</span></h5><ol><li>input link navbar admin<br></li><li>setting akun</li><li>efek aos pada admin</li><li>menambahkan modal di admin</li><li>mengubah validate di admin</li><li>print untuk setiap menu administrasi dan pendaftaran</li><li>edit admin profil</li><li>edit user password</li><li>menu navigasi</li><li>membuat tata cara menggunakan web di info pendaftaran</li><li>galeri thumbnail<br></li></ol>', '2022-04-28 22:32:00', '2022-04-29 07:33:09'),
(3, 'PENTING', '<ol><li>membuat input tanpa refresh</li><li>membuat desain prosedur sertifikasi</li><li>ajax provinsi-kabupaten<br></li></ol>', '2022-05-09 11:32:33', '2022-05-09 11:37:16'),
(4, 'BUG WEB', '<ol><li>Konversi ke pdf</li><li>Create backup data sertifikat</li><li>Create Format Formulir</li><li>Update password user dan admin</li><li>Validation API<br></li><li>Design banner</li><li>Fitur Filter</li><li>Verifikasi login melalui email</li><li>format tanggal</li><li>design penggunaan tutorial aplikasi png, pdf, dan video<br></li></ol>', '2022-05-29 03:07:30', '2022-06-16 07:29:10'),
(5, 'update', '<ol><li>faq</li><li>kontak kami</li><li>data karyawan</li><li>agenda</li><li>laporan dan sharing</li><li>blacklist</li><li>buat crud formulir apl1<br><br></li></ol>', '2022-07-02 03:20:23', '2022-07-03 13:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ponzzy22@gmail.com', '$2y$10$X9tJwwncpiLX.J2cT.zXV./xyKJgE.mfyGFm6RaRoehjPwmp2l/KW', '2022-06-10 23:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `nama`, `keterangan`, `image`, `no_hp`, `email`, `updated_at`, `created_at`, `facebook`, `twitter`, `instagram`) VALUES
(36, 'Budi Pratomo Sibuea, S.ST., M.STsdasdasd', 'Ketua LSP', 'uploads/pengelola/16566501531.png', 'asdas', 'dfsfdds@dsfdsf', '2022-07-02 04:25:07.000000', '2022-07-02 11:25:07.590008', 'sdasd', 'ukhuk', 'http://127.0.0.1:8000/beranda_img2/36/edit'),
(37, 'A. Nova Zulfahmi, S.Pi., M.Sc', 'Manajer Sertifikasi', 'uploads/pengelola/16566501452.png', NULL, NULL, '2022-06-30 21:35:45.000000', '2022-07-01 04:35:45.011064', NULL, 'Manajer Sertifikasi', NULL),
(38, 'Ahmad Ravi, S.Pd., M.Pd', 'Manajer Mutu', 'uploads/pengelola/16566501334.png', NULL, NULL, '2022-06-30 21:35:33.000000', '2022-07-01 04:35:33.923626', NULL, 'Manajer Mutu', NULL),
(39, 'Firmanilah Kamil, S.Pd., M.Pd', 'Manajer Administrasi', 'uploads/pengelola/16566500873.png', NULL, NULL, '2022-06-30 21:34:47.000000', '2022-07-01 04:34:47.906944', NULL, 'Manajer Administrasi', NULL);

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
(11, 'D III Teknik Pertambangan', '2022-04-25 00:45:12.000000', '2022-04-25 00:45:12.000000'),
(12, 'D III Teknologi Pengolahan Hasil Perkebunan', '2022-04-25 00:45:47.000000', '2022-04-25 00:45:47.000000'),
(13, 'D III Teknik Informatika', '2022-04-25 00:46:01.000000', '2022-04-25 00:46:01.000000'),
(14, 'D III Agroindustri', '2022-04-25 00:46:26.000000', '2022-04-25 00:46:26.000000'),
(15, 'D III Teknik Elektro', '2022-04-25 00:46:41.000000', '2022-04-25 00:46:41.000000'),
(16, 'D IV Rekontruksi Jalanan dan Jembatan', '2022-04-25 00:48:32.000000', '2022-04-25 00:48:32.000000'),
(17, 'D IV Budidaya Tanaman Perkebunan', '2022-04-25 00:49:00.000000', '2022-04-25 00:49:00.000000');

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
  `prodi_id` int(5) UNSIGNED NOT NULL,
  `status_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuk_id` int(5) UNSIGNED NOT NULL,
  `asesor_id` int(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skemas`
--

INSERT INTO `skemas` (`id`, `kode_skema`, `skema`, `prodi_id`, `status_id`, `tuk_id`, `asesor_id`, `created_at`, `updated_at`) VALUES
(8, 'SS.AKKS/LSPP/001/2022', 'Asisten Kebun Kelapa Sawit', 17, '1', 1, 38, '2022-04-05 11:26:03', '2022-06-24 01:28:26'),
(10, 'SS.TL/LSPP/002/2022', 'Teknisi Laboratorium', 12, '1', 1, 44, '2022-04-11 09:44:53', '2022-06-24 01:29:13'),
(13, 'SS.KI/LSPP/003/2022', 'Kewirausahaan Industri', 14, '1', 1, 34, '2022-04-17 05:37:07', '2022-06-24 01:29:44'),
(14, 'SS.SPPTR/LSPP/009/2022', 'Supervisor Pemeliharaan Pemanfaatan Tegangan Rendah', 15, '1', 1, 30, '2022-04-17 05:43:24', '2022-06-24 01:42:27'),
(15, 'SS.WS/LSPP/007/2022', 'Welding Supervisor', 10, '1', 1, 25, '2022-04-17 05:45:23', '2022-06-24 01:37:56'),
(16, 'SS.PPJ/LSPP/010/2022', 'Pelaksanaan Pemeliharaan Jalan', 14, '1', 1, 24, '2022-05-11 12:19:42', '2022-06-24 01:43:32'),
(17, 'SS.TKKK/LSPP/008/2022', 'Teknisi Keselamatan dan Kesehatan Kerja (K3)', 11, '1', 1, 53, '2022-05-11 12:25:10', '2022-06-24 01:36:27'),
(18, 'SS.NAM/LSPP/004/2022', 'Network Administrator Muda', 13, '1', 1, 45, '2022-05-11 12:27:05', '2022-06-24 01:30:47'),
(19, 'SS.JWP/LSPP/005/2022', 'Junior Web Programmer', 13, '1', 1, 27, '2022-05-11 12:28:20', '2022-06-24 01:31:28'),
(20, 'SS.DGM/LSPP/006/2022', 'Desainer Grafis Muda', 13, '1', 1, 29, '2022-05-11 12:28:43', '2022-07-03 09:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `skknis`
--

CREATE TABLE `skknis` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skknis`
--

INSERT INTO `skknis` (`id`, `file`, `skema_id`, `image`, `created_at`, `updated_at`) VALUES
(3, 'WEQWEQWEQWE', 0, 'uploads/skkni/165672440101. FR.APL-01. ASKOM.pdf', '2022-07-01 18:13:21', '2022-07-01 18:13:21'),
(4, 'as', 14, 'uploads/skkni/165677715102. FR.APL-02. ASKOM.pdf', '2022-07-02 08:52:31', '2022-07-02 08:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(5) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `keterangan`, `updated_at`, `created_at`) VALUES
(1, 'Aktif', '<label class=\"badge badge-info\">Aktif</label>', '2022-07-03 14:41:16', '2022-07-03 14:41:16'),
(2, 'Nonaktif', '<label class=\"badge badge-danger\">Tidak Aktif</label>', '2022-07-03 14:43:03', '2022-07-03 14:43:03');

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
(1, NULL, 'uploads/strorg/16567639033.jpg', '2022-07-02 05:11:43', '2022-07-02 12:11:43');

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
  `kode` varchar(50) DEFAULT NULL,
  `pengelola` varchar(50) DEFAULT NULL,
  `tuk` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuk`
--

INSERT INTO `tuk` (`id`, `kode`, `pengelola`, `tuk`, `alamat`, `image`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '-', 'images/back/Gedung-Kuliah-I-Laboratorium-Politeknik-Negeri-Ketapang.jpg', '2022-06-19 04:20:59.214903', '2022-06-19 04:20:59.214903'),
(18, NULL, 'Rosmalinda, S.ST., M.P', 'Laboratorium Uji Mutu', NULL, NULL, '2022-06-26 22:35:54.000000', '2022-06-27 05:35:54.926688'),
(19, NULL, 'Sopiana, S.P., M.Si', 'TUK Kebun Praktik', NULL, NULL, '2022-06-24 01:15:12.000000', '2022-06-24 01:15:12.000000'),
(20, NULL, 'Dian Fitriarni, S.ST., M.Sc', 'TUK Manajemen', NULL, NULL, '2022-06-24 01:16:38.000000', '2022-06-24 01:16:38.000000'),
(21, NULL, 'Darmanto, S.Kom., M.Kom', 'TUK Teknik Informatika', NULL, NULL, '2022-06-24 01:17:45.000000', '2022-06-24 01:17:45.000000'),
(22, NULL, 'Asepp Ruchiyat, S.T., M.T', 'TUK Teknik Mesin', NULL, NULL, '2022-06-24 01:18:53.000000', '2022-06-24 01:18:53.000000'),
(23, NULL, 'Syarifah Aqla, S.Pd., M.T', 'TUK Teknik Pertambangan', NULL, NULL, '2022-06-24 01:19:44.000000', '2022-06-24 01:19:44.000000'),
(24, NULL, 'Ivan Suwanda, S.T., M.T', 'TUK Teknik Elektro', NULL, NULL, '2022-06-24 01:20:25.000000', '2022-06-24 01:20:25.000000'),
(25, NULL, 'Abdul Hafid, S.T', 'TUK Teknik Sipil', NULL, NULL, '2022-06-24 01:21:02.000000', '2022-06-24 01:21:02.000000');

-- --------------------------------------------------------

--
-- Table structure for table `unikoms`
--

CREATE TABLE `unikoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_unikom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_id` int(5) NOT NULL,
  `unikom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unikoms`
--

INSERT INTO `unikoms` (`id`, `kode_unikom`, `skema_id`, `unikom`, `created_at`, `updated_at`) VALUES
(40, 'JIP.SM01.001.01', 15, 'Melakukan Komunikasi Timbal Balik', '2022-04-17 06:50:03', '2022-04-26 00:52:48'),
(41, 'JIP.SM01.002.01', 15, 'Mengidentifikasi Prinsip-prinsip Keselamatan dan  Kesehatan Kerja (K3)', '2022-04-26 00:57:53', '2022-04-26 01:06:45'),
(42, 'JIP.SM02.001.01', 15, 'Mengukur dengan alat ukur mekanika dasar', '2022-04-26 01:04:26', '2022-04-26 01:07:41'),
(43, 'JIP.SM02.002.01', 15, 'Membaca sketsa dan/atau gambar kerja sederhana', '2022-04-26 01:08:39', '2022-04-26 01:08:39'),
(44, 'JIP.SM02.003.01', 15, 'Menggunakan peralatan tangan dan mesin-mesin ringan', '2022-04-26 01:09:06', '2022-04-26 01:09:06'),
(45, 'JIP.SM02.004.01', 15, 'Melaksanakan pemotongan secara mekanik', '2022-04-26 01:09:35', '2022-04-26 01:09:35'),
(46, 'JIP.SM02.005.01', 15, 'Melaksanakan pemotongan dengan gas', '2022-04-26 01:10:24', '2022-04-26 01:10:24'),
(47, 'JIP.SM02.008.01', 15, 'Melaksanakan rutinitas (dasar) pengelasan dengan proses  las busur manual', '2022-04-26 01:11:14', '2022-04-26 01:11:14'),
(48, 'JIP.SM02.009.01', 15, 'Mengelas pelat posisi di bawah tangan / Flat dengan proses  las busur manual', '2022-04-26 01:11:58', '2022-04-26 01:11:58'),
(49, 'JIP.SM02.010.01', 15, 'Mengelas pelat posisi mendatar / Horizontal dengan proses  las busur manual', '2022-04-26 01:12:25', '2022-04-26 01:12:25'),
(50, 'JIP.SM03.001.01', 15, 'Membuat laporan', '2022-04-26 01:13:02', '2022-04-26 01:13:02'),
(51, 'JIP.SM03.002.01', 15, 'Melakukan perhitungan dasar teknik', '2022-04-26 01:13:25', '2022-04-26 01:13:25'),
(52, 'JIP.SM01.003.01', 15, 'Melakukan pekerjaan secara tim', '2022-04-26 01:13:44', '2022-04-26 01:13:44'),
(53, 'JIP.SM01.004.01', 15, 'Menerapkan Keselamatan dan Kesehatan Kerja serta  Lingkungan Hidup (K3L)', '2022-04-26 01:14:09', '2022-04-26 01:14:09'),
(54, 'JIP.SM01.006.01', 15, 'Mengukur dengan alat ukur mekanik presisi', '2022-04-26 01:15:42', '2022-04-26 01:15:42'),
(55, 'JIP.SM01.007.01', 15, 'Membaca gambar teknik dan simbol las', '2022-04-26 01:16:02', '2022-04-26 01:16:02'),
(56, 'JIP.SM02.011.01', 15, 'Mengelas pelat posisi tegak/ Vertical dengan proses las  busur manual', '2022-04-26 01:16:22', '2022-04-26 01:16:22'),
(57, 'JIP.SM02.012.01', 15, 'Mengelas pelat posisi di atas kepala / Overhead dengan  proses las busur manual', '2022-04-26 01:16:48', '2022-04-26 01:16:48'),
(58, 'JIP.SM02.013.01', 15, 'Mengelas pipa posisi sumbu mendatar dapat diputar dengan  proses las busur manual', '2022-04-26 01:17:11', '2022-04-26 01:17:11'),
(59, 'JIP.SM02.014.01', 15, 'Mengelas pipa posisi sumbu tegak dapat diputar dengan  proses las busur manual', '2022-04-26 01:17:32', '2022-04-26 01:17:32'),
(60, 'JIP.SM03.003.01', 15, 'Menafsirkan literatur berbahasa inggris', '2022-04-26 01:17:53', '2022-04-26 01:17:53'),
(61, 'JIP.SM03.004.01', 15, 'Mengoperasikan komputer', '2022-04-26 01:18:12', '2022-04-26 01:18:12'),
(62, 'JIP.SM01.005.01', 15, 'Menerapkan sistem mutu', '2022-04-26 01:18:33', '2022-04-26 01:18:33'),
(78, 'JIP.SM01.006.01', 15, 'Merencanakan tugas rutin', '2022-04-26 01:44:26', '2022-04-26 01:44:26'),
(79, 'JIP.SM02.015.01', 15, 'Mengelas pipa posisi sumbu mendatar tidak dapat diputar  dengan proses las busur manual', '2022-04-26 01:49:49', '2022-04-26 01:49:49'),
(80, 'JIP.SM02.016.01', 15, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', '2022-04-26 01:50:14', '2022-04-26 01:50:14'),
(81, 'JIP.SM02.017.01', 15, 'Mengelas pelat dan/atau pipa segala posisi dengan proses  kombinasi TIG (GTAW) dan las busur manual', '2022-04-26 01:50:42', '2022-04-26 01:50:42'),
(82, 'JIP.SM03.005.01', 15, 'Menerapkan penanganan material', '2022-04-26 01:51:05', '2022-04-26 01:51:05'),
(83, 'JIP.SM03.006.01', 15, 'Mengenal karakteristik dan penggunaan bahan', '2022-04-26 01:51:31', '2022-04-26 01:51:31'),
(84, 'JIP.SM03.007.01', 15, 'Melakukan pemeliharaan mesin dan perlengkapan las', '2022-04-26 01:52:04', '2022-04-26 01:52:04'),
(85, 'JIP.SM03.008.01', 15, 'Menerapkan Metalurgi Las', '2022-04-26 01:52:26', '2022-04-26 01:52:26'),
(86, 'M.702090.001.02', 14, 'Melakukan komunikasi dengan pihak IKM', '2022-04-26 01:54:48', '2022-04-26 01:54:48'),
(87, 'M.702090.002.02', 14, 'Melakukan inventarisasi masalah pada IKM', '2022-04-26 01:55:19', '2022-04-26 01:55:19'),
(88, 'M.702090.003.02', 14, 'Memberikan jasa konsultasi kepada pihak IKM', '2022-04-26 01:55:43', '2022-04-26 01:55:43'),
(89, 'M.702090.004.02', 14, 'Melakukan evaluasi pelaksanaan konsultasi', '2022-04-26 01:56:15', '2022-04-26 01:56:15'),
(90, 'M.702090.017.02', 14, 'Menggunakan 7 alat QC pada manajemen mutu', '2022-04-26 01:56:40', '2022-04-26 01:56:40'),
(91, 'M.702090.018.02', 14, 'Melakukan inspeksi penerapan QC', '2022-04-26 01:57:07', '2022-04-26 01:57:07'),
(92, 'M.702090.019.02', 14, 'Melaksanakan perbaikan mutu produk/ Jasa', '2022-04-26 01:57:32', '2022-04-26 01:57:32'),
(93, 'M.702090.020.02', 14, 'Menerapkan prinsip-prinsip SMM dan TQC', '2022-04-26 01:57:52', '2022-04-26 01:57:52'),
(94, 'M.749000.020.01', 13, 'Menerima sampel yang akan dianalisis', '2022-04-26 01:59:48', '2022-04-26 01:59:48'),
(95, 'M.749000.021.01', 13, 'Mengambil sampel uji (sub-sampling) dari sampel  lapangan', '2022-04-26 02:00:07', '2022-04-26 02:00:07'),
(96, 'M.749000.022.01', 13, 'Menyiapkan sampel untuk analisa kimia', '2022-04-26 02:00:26', '2022-04-26 02:00:26'),
(97, 'M.749000.023.01', 13, 'Mengarsipkan sampel', '2022-04-26 02:00:49', '2022-04-26 02:00:49'),
(98, 'M.749000.025.01', 13, 'Menyajikan data analisis kimia', '2022-04-26 02:01:11', '2022-04-26 02:01:11'),
(99, 'M.749000.026.01', 13, 'Melaksanakan analisis titrimetri konvensional mengikuti  prosedur', '2022-04-26 02:01:41', '2022-04-26 02:01:41'),
(100, 'M.749000.027.01', 13, 'Melaksanakan analisis gravimetri konvensional mengikuti  prosedur', '2022-04-26 02:01:59', '2022-04-26 02:01:59'),
(101, 'M.749000.031.01', 13, 'Melaksanakan analisis fisiko-kimia mengikuti prosedur', '2022-04-26 02:02:41', '2022-04-26 02:02:41'),
(102, 'M.749000.033.01', 13, 'Melaksanakan analisis secara spektrofotometri mengikuti  prosedur', '2022-04-26 02:03:30', '2022-04-26 02:03:30'),
(103, 'M.749000.035.01', 13, 'Melaksanakan analisis organoleptik mengikuti prosedur', '2022-04-26 02:03:51', '2022-04-26 02:03:51'),
(104, 'M.749000.036.01', 13, 'Melaksanakan analisis proksimat (konvensional) mengikuti  prosedur', '2022-04-26 02:04:19', '2022-04-26 02:04:19'),
(109, 'J.620100.004.02', 20, 'Menggunakan Struktur Data', '2022-05-11 13:05:11', '2022-06-26 23:25:21'),
(110, 'J.620100.005.02', 20, 'Mengimplementasikan User Interface', '2022-05-11 13:05:31', '2022-06-15 23:26:44'),
(111, 'J.620100.011.01', 20, 'Melakukan instalasi Software Tools Pemrograman', '2022-05-11 13:06:23', '2022-05-11 13:06:23'),
(112, 'J.620100.016.01', 20, 'Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', '2022-05-11 13:06:40', '2022-05-11 13:06:40'),
(113, 'J.620100.017.02', 20, 'Mengimplementasikan Pemrograman Terstruktur', '2022-05-11 13:07:09', '2022-05-11 13:07:09'),
(114, 'J.620100.019.02', 20, 'Menggunakan Library atau Komponen Pre-Existing', '2022-05-11 13:07:37', '2022-05-11 13:07:37'),
(115, 'J.620100.023.02', 20, 'Membuat Dokumen Kode Program', '2022-05-11 13:07:52', '2022-05-11 13:07:52'),
(116, 'J.620100.025.02', 20, 'Melakukan Debugging', '2022-05-11 13:08:18', '2022-05-11 13:08:18'),
(126, '354354354354', 19, 'sdasd', '2022-06-28 11:59:38', '2022-06-28 13:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_register_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `y` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `z` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` bigint(20) DEFAULT NULL,
  `koreksi` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id`, `kode_dokumen`, `name`, `data_register_id`, `user_id`, `status`, `y`, `n`, `z`, `kode`, `koreksi`, `image`, `created_at`, `updated_at`) VALUES
(700, '13319', 'Photo', 3319, 33, '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', '.', '.', '.', 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', NULL, '2022-07-02 22:48:50', '2022-07-03 01:11:56'),
(701, '23319', 'Kartu Tanda Penduduk', 3319, 33, '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', '.', '.', '.', 2, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Valid</label>', NULL, '2022-07-02 22:48:50', '2022-07-03 01:12:10'),
(702, '33319', 'Kartu Tanda Mahasiswa', 3319, 33, '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', '.', '.', '.', 2, '<label class=\'badge badge-outline-light badge-pill\'>Tidak Ada Data</label>', NULL, '2022-07-02 22:48:50', '2022-07-03 01:12:48'),
(703, '43319', 'Kartu Hasil Studi', 3319, 33, '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', '.', '.', '.', 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', NULL, '2022-07-02 22:48:50', '2022-07-03 01:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tamatan_id` int(11) DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kantor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_post` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `proses` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `kode`, `tgl_lahir`, `negara`, `sex_id`, `alamat`, `no_hp`, `institusi`, `tamatan_id`, `jabatan`, `jurusan_id`, `semester_id`, `email2`, `email3`, `tempat_lahir`, `alamat_kantor`, `postal`, `telp`, `fax`, `ktp`, `ktr`, `tmt`, `rmh`, `kode_post`, `image`, `remember_token`, `password`, `email_verified_at`, `proses`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Admin', 'admin', NULL, '2022-06-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AzBNtVQAQcUmvjiA4HCaPth0tEONqvgosDe5V0bsGbEURwJJcfoPw8n1Ysl2', '$2y$10$raBf7d85ytR9eFAaPezzxODSDhK4v.eqUkd/9jIxsnl7mc3RDRF4a', NULL, NULL, '2022-06-29 04:59:35', '2022-06-29 05:02:52'),
(33, 'User', 'Ponsianus Jopi', '3042020058', NULL, '2022-06-29', 'Ketapang', '1', 'BTNSASDASDHAJSDK', '081256390909', 'PEGADAIAN', NULL, 'ketua', 4, 4, 'ponzy22@gmail.com', 'apelah@assu', 'Ketapang', 'dimana dak tau', '76767', '03030303030', '3333333', NULL, '-', 'SMA', '-', '7888111', 'uploads/beranda_img2/1656504172d795ebcce6432ef85d4bd6cd6f5fe363.jpg', 'Uu2mYDV2JvIh41cPvTPJnE8r9RT8VaaFe1u9NhpkOFkihnIU4e6IF3Z6JBEk', '$2y$10$DZAYsDTZOFnuSXuoNuEpZOT7ry2NTYEYWa4B9K9uTDO8Awx4AE4TS', NULL, NULL, '2022-06-29 04:59:35', '2022-06-29 05:02:52'),
(34, 'Mahasiswa', 'asdas', '12321312312131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '21312@fsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$n3aMIbkSH5rf9.c78/Y97eSjCJmC3IqYIs9hPKuY4k7HuPGs/WnXO', NULL, NULL, '2022-06-30 01:56:38', '2022-06-30 01:56:38'),
(35, 'Mahasiswa', 'ererwerwe', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'qwe@gfsdg.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.M4.E0jPeCRjUTljrD.Rwu3ci2ufcvvg8EtN0xlZgmPFjOgsKG8LW', NULL, NULL, '2022-07-01 02:05:29', '2022-07-01 02:05:29'),
(36, 'User', '121212', '44444444444444444', NULL, '2022-07-04', '1212', NULL, '1212', '1212', NULL, NULL, NULL, 2, 1, '123123212@sdadw', NULL, '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wmuDRj/PSvvwi4hKbCW7nuaVw7Qf1tWdfrLQiHmDvL0uKypSZoW8i', NULL, NULL, '2022-07-01 02:09:16', '2022-07-03 09:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_skemas`
--

CREATE TABLE `verifikasi_skemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `xnxxes`
--

CREATE TABLE `xnxxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_elemen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `unikom_id` bigint(20) DEFAULT NULL,
  `unikom_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesmen_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data_register_id` bigint(20) DEFAULT NULL,
  `kode` bigint(20) DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unikom_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xnxxes`
--

INSERT INTO `xnxxes` (`id`, `kode_elemen`, `kriteria`, `user_id`, `unikom_id`, `unikom_name`, `asesmen_name`, `skema_name`, `skema_id`, `image`, `status`, `created_at`, `updated_at`, `data_register_id`, `kode`, `koreksi`, `unikom_kode`) VALUES
(962, '13319', '<p>asd</p>', 33, 90, 'sdasd', 'sdasd', 'Junior Web Programmer', 19, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-07-02 22:48:52', '2022-07-03 01:51:37', 3319, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', '354354354354');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cek_pendaftarans`
--
ALTER TABLE `cek_pendaftarans`
  ADD PRIMARY KEY (`5`);

--
-- Indexes for table `data_registers`
--
ALTER TABLE `data_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen__uploads`
--
ALTER TABLE `dokumen__uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elemen`
--
ALTER TABLE `elemen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asesmens_unikom_id_foreign` (`unikom_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fileapl2s`
--
ALTER TABLE `fileapl2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filelains`
--
ALTER TABLE `filelains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formapl2s`
--
ALTER TABLE `formapl2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formapl2_children`
--
ALTER TABLE `formapl2_children`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `info2`
--
ALTER TABLE `info2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kknis`
--
ALTER TABLE `kknis`
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
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skknis`
--
ALTER TABLE `skknis`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifikasi_skemas`
--
ALTER TABLE `verifikasi_skemas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `cek_pendaftarans`
--
ALTER TABLE `cek_pendaftarans`
  MODIFY `5` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen__uploads`
--
ALTER TABLE `dokumen__uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `elemen`
--
ALTER TABLE `elemen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileapl2s`
--
ALTER TABLE `fileapl2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filelains`
--
ALTER TABLE `filelains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `formapl2s`
--
ALTER TABLE `formapl2s`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formapl2_children`
--
ALTER TABLE `formapl2_children`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `group_galeris`
--
ALTER TABLE `group_galeris`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `info2`
--
ALTER TABLE `info2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kknis`
--
ALTER TABLE `kknis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `skknis`
--
ALTER TABLE `skknis`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `unikoms`
--
ALTER TABLE `unikoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=704;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `verifikasi_skemas`
--
ALTER TABLE `verifikasi_skemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xnxxes`
--
ALTER TABLE `xnxxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=963;

--
-- Constraints for dumped tables
--

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
