-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 11:58 AM
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
  `kriteria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asesmens`
--

INSERT INTO `asesmens` (`id`, `unikom_id`, `asesmen`, `kriteria`, `created_at`, `updated_at`) VALUES
(49, 80, 'Menyiapkan Fasilitas Pengelasan', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', '2022-05-09 00:56:38', '2022-05-09 16:15:51'),
(50, 80, 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', '2022-05-09 01:14:47', '2022-05-09 01:14:47'),
(51, 80, 'Melakasanakan pemeriksaan hasil pengelasan secara visual', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', '2022-05-09 01:18:16', '2022-05-09 01:18:16'),
(52, 80, 'Melaporkan hasil pengelasan', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', '2022-05-09 01:21:02', '2022-05-09 01:21:02'),
(53, 86, '-', '<p>-<br></p>', '2022-05-10 21:44:54', '2022-05-10 21:44:54'),
(54, 94, '-', '<p>-<br></p>', '2022-05-10 21:45:18', '2022-05-10 21:45:18'),
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
(81, 116, 'Memperbaiki program', '<p>3.1 Perbaikan terhadap kesalahan kompilasi maupun build dirumuskan. </p><p>3.2 Perbaikan dilakukan. <br></p>', '2022-05-11 13:33:50', '2022-05-11 13:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `asesor`
--

CREATE TABLE `asesor` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `no_hp` bigint(20) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`id`, `nik`, `nama`, `image`, `alamat`, `sex`, `email`, `status`, `updated_at`, `created_at`, `no_hp`, `value`) VALUES
(1, '-', '-', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', NULL, NULL),
(24, 'MET.000.010629 2017', 'Adha Panca Wardanu', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:52:47.000000', '2022-05-09 21:52:47.000000', NULL, NULL),
(25, 'MET.000.009812 2021', 'Ahmad Ravi', NULL, 'Luwu Utara, Sulawesi Selatan', NULL, NULL, 'Aktif', '2022-05-09 21:53:14.000000', '2022-05-09 21:53:14.000000', NULL, NULL),
(26, 'MET.000.004633 2020', 'Alfath Desita Jumiar', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:53:35.000000', '2022-05-09 21:53:35.000000', NULL, NULL),
(27, 'MET.000.010618 2017', 'Ar-Razy Muhammad', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:53:48.000000', '2022-05-09 21:53:48.000000', NULL, NULL),
(28, 'MET.000.010613 2017', 'Beny Setiawan', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:54:03.000000', '2022-05-09 21:54:03.000000', NULL, NULL),
(29, 'MET.000.009818 2021', 'Darmanto', NULL, 'Lamandau, Kalimantan Tengah', NULL, NULL, 'Aktif', '2022-05-09 21:54:23.000000', '2022-05-09 21:54:23.000000', NULL, NULL),
(30, 'MET.000.009815 2021', 'Erick Radwitya', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:54:38.000000', '2022-05-09 21:54:38.000000', NULL, NULL),
(31, 'MET.000.009816 2021', 'Fachrul Rozie', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:54:54.000000', '2022-05-09 21:54:54.000000', NULL, NULL),
(32, 'MET.000.009813 2021', 'Firmanilah Kamil', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:55:07.000000', '2022-05-09 21:55:07.000000', NULL, NULL),
(33, 'MET.000.009822 2021', 'Halimansyah', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:55:18.000000', '2022-05-09 21:55:18.000000', NULL, NULL),
(34, 'MET.000.010619 2017', 'Irfan Cholid', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:55:32.000000', '2022-05-09 21:55:32.000000', NULL, NULL),
(35, 'MET.000.009819 2021', 'Kharisma', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:55:45.000000', '2022-05-09 21:55:45.000000', NULL, NULL),
(36, 'MET.000.009824 2021', 'Maya Santi', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:55:58.000000', '2022-05-09 21:55:58.000000', NULL, NULL),
(37, 'MET.000.009821 2021', 'Nenengsih Verawati', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:56:12.000000', '2022-05-09 21:56:12.000000', NULL, NULL),
(38, 'MET.000.009820 2021', 'Rosmalinda', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:56:36.000000', '2022-05-09 21:56:36.000000', NULL, NULL),
(39, 'MET.000.010604 2017', 'Saifudin Usman', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:56:59.000000', '2022-05-09 21:56:59.000000', NULL, NULL),
(40, 'MET.000.010608 2017', 'Venti Jatsiyah', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:57:12.000000', '2022-05-09 21:57:12.000000', NULL, NULL),
(41, 'MET.000.009814 2021', 'Yudi Chandra', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:57:31.000000', '2022-05-09 21:57:31.000000', NULL, NULL),
(42, 'MET.000.010614 2017', 'Yusuf', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:57:46.000000', '2022-05-09 21:57:46.000000', NULL, NULL),
(43, 'MET.000.009817 2021', 'Muhammad Jimi Rizaldi', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:59:06.000000', '2022-05-09 21:59:06.000000', NULL, NULL),
(44, 'MET.000.010609 2017', 'Encik Eko Rifkowaty', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 22:00:12.000000', '2022-05-09 22:00:12.000000', NULL, NULL),
(45, NULL, 'Eka Wahyudi', NULL, NULL, 'Laki-laki', NULL, 'Aktif', '2022-05-11 12:26:19.000000', '2022-05-11 12:26:19.000000', NULL, NULL),
(46, NULL, 'A. Nova Zulfahmi', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:38:02.000000', '2022-05-11 12:38:02.000000', NULL, NULL),
(47, NULL, 'Budi Pratomo', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:38:38.000000', '2022-05-11 12:38:38.000000', NULL, NULL),
(48, NULL, 'Dian Fitriani', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:38:58.000000', '2022-05-11 12:38:58.000000', NULL, NULL),
(49, NULL, 'M. Iwan Toro', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:40:37.000000', '2022-05-11 12:40:37.000000', NULL, NULL),
(50, NULL, 'Novi Indah Pradasari', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:41:19.000000', '2022-05-11 12:41:19.000000', NULL, NULL),
(51, NULL, 'Sartika', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:41:51.000000', '2022-05-11 12:41:51.000000', NULL, NULL),
(52, NULL, 'Sy. Indra Septiansyah', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:42:24.000000', '2022-05-11 12:42:24.000000', NULL, NULL),
(53, NULL, 'Syarifah Aqla', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:42:49.000000', '2022-05-11 12:42:49.000000', NULL, NULL),
(54, NULL, 'Firman', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:47:57.000000', '2022-05-11 12:47:57.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asus`
--

CREATE TABLE `asus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '<h5><span style=\"color: rgb(66, 66, 66);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Lembaga Sertifikasi Profesi Pihak Kesatu - Politeknik Negeri Ketapang</span></span></span></h5>', NULL, NULL, '2022-05-11 02:25:44.000000', '2022-05-11 09:25:44.396733');

-- --------------------------------------------------------

--
-- Table structure for table `beranda_img1`
--

CREATE TABLE `beranda_img1` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda_img1`
--

INSERT INTO `beranda_img1` (`id`, `judul`, `keterangan`, `image`, `updated_at`, `created_at`) VALUES
(67, NULL, NULL, 'public/uploads/carousel/16505618951.jpg', '2022-04-21 10:24:55.000000', '2022-04-21 10:24:55.000000'),
(68, NULL, NULL, 'public/uploads/carousel/16505619262.jpg', '2022-05-09 17:15:43.000000', '2022-05-10 00:15:43.262057');

-- --------------------------------------------------------

--
-- Table structure for table `beranda_img2`
--

CREATE TABLE `beranda_img2` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `no_hp` varchar(225) DEFAULT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `intagram` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda_img2`
--

INSERT INTO `beranda_img2` (`id`, `keterangan`, `image`, `updated_at`, `created_at`, `no_hp`, `nama`, `facebook`, `twitter`, `intagram`, `email`) VALUES
(36, 'Ketua LSP - POLITAP', 'public/uploads/pengelola/16505683451.png', '2022-04-21 12:12:25.000000', '2022-04-21 12:12:25.000000', '12121212121212', 'Budi Pratomo Sibuea, S.ST., M.ST', NULL, 'Ketua LSP - POLITAP', NULL, NULL),
(37, 'Manajer Sertifikasi LSP - POLITAP', 'public/uploads/pengelola/16505684442.png', '2022-05-09 17:24:27.000000', '2022-05-10 00:24:27.552562', '2312', 'A. Nova Zulfahmi, S.Pi., M.Sc', 'www.google.com', 'Manajer Sertifikasi LSP - POLITAP', NULL, NULL),
(38, 'Manajer Mutu LSP - POLITAP', 'public/uploads/pengelola/16505687524.png', '2022-04-21 12:19:12.000000', '2022-04-21 12:19:12.000000', '2312312', 'Ahmad Ravi, S.Pd., M.Pd', NULL, 'Manajer Mutu LSP - POLITAP', NULL, NULL),
(39, 'Manajer Administrasi LSP - POLITAP', 'public/uploads/pengelola/16505690133.png', '2022-04-21 12:23:33.000000', '2022-04-21 12:23:33.000000', '2323', 'Firmanilah Kamil, S.Pd., M.Pd', NULL, 'Manajer Administrasi LSP - POLITAP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` int(11) NOT NULL,
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

INSERT INTO `beritas` (`id`, `kategori_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `image`, `file1`, `file2`) VALUES
(28, 1, 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab m elaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 dibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga pendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki tugas untuk mengembangkan standar kompetensi, melaksanakan uji kompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas dan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh BNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem sertifikasi pihak pertama secara konsisten dan profesional, sehingga dapat diterima di tingkat nasional yang relevan demi kepentingan pengembangan sumber daya manusia dalam aspek peningkatan kualitas dan perlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP merupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri Ketapang adalah satu-satunya perguruan tinggi negeri di Kabupaten Ketapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi mahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi Perawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, Teknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', '2022-05-09 20:52:19', '2022-05-09 20:59:13', 'public/uploads/berita/16521547396.png', NULL, NULL),
(34, 1, 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. </h6>', '2022-05-09 21:18:32', '2022-05-09 21:27:38', 'public/uploads/berita/1652156312IMG_20220420_131245.jpg', NULL, NULL),
(35, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politeknik Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', '2022-05-09 21:23:35', '2022-05-09 21:25:33', 'public/uploads/berita/16521566151.jpg', NULL, NULL);

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
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_registers`
--

INSERT INTO `data_registers` (`id`, `skema_name`, `skema_id`, `user_id`, `user_name`, `status`, `surel`, `tmpt_lahir`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `provinsi`, `kabupaten`, `kota`, `kecamatan`, `image`, `jurusan_id`, `semester_id`, `ktp`, `ktm`, `khs`, `lain`, `created_at`, `updated_at`, `nim`, `date`, `time`, `asesor_id`, `tuk_id`, `keterangan`, `kode`, `id_skema`, `kode_skema`, `koreksi`) VALUES
(120, 'Junior Graphic Designer', 'belom-1', '1', 'Admin LSP-POLITAP', '<h4 style=\'color: green\'>Menunggu Validasi...</h4>', NULL, NULL, '1998-08-27', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 82150040132, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1650562518lsp.png', 3, 3, NULL, NULL, NULL, NULL, '2022-05-11 13:34:12', '2022-05-11 13:35:42', 1234, NULL, NULL, 1, 1, NULL, '1', '20', '-', NULL),
(1815, 'Sertifikat III Bidang Pengelasan SMAW', 'belomSKM/1214/00003/1/2018/118', '18', 'asu', '<h4 style=\'color: rgb(141, 7, 7)\'>Pendaftaran Ditolak</h4>', NULL, NULL, '2022-05-11', '1', 'indonesia', 'Ketapang, Kalimantan Barat', NULL, 12121212121212, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/16522457101024px-User-avatar.svg.png', 1, 1, NULL, NULL, NULL, NULL, '2022-05-10 22:21:24', '2022-05-10 22:28:33', 12345678, NULL, NULL, 1, 1, '<p>jsdjfskdlfsdlkfsdfsd<br></p>', '18', '15', 'SKM/1214/00003/1/2018/1', NULL),
(2115, 'Sertifikat III Bidang Pengelasan SMAW', 'belomSKM/1214/00003/1/2018/121', '21', 'Dwi Ramadhani', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', NULL, NULL, '2022-05-11', '1', 'indonesia', 'Ketapang, Kalimantan Barat', NULL, 12121212121212, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652248540photo.png', 5, 6, NULL, NULL, NULL, NULL, '2022-05-10 22:57:30', '2022-05-10 23:11:44', 12345678, NULL, NULL, 1, 1, NULL, '-', NULL, 'SKM/1214/00003/1/2018/1', NULL),
(2315, 'Sertifikat III Bidang Pengelasan SMAW', 'SKM/1214/00003/1/2018/123', '23', 'Dwi Ranadhani', '<h4 style=\'color: rgb(163, 129, 8)\'>Lengkapi Data Anda</h4>', NULL, NULL, '2022-05-11', '2', 'Indonesia', 'BTN Puri Nirwana', NULL, 82150040912, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/16522867781652248540photo.png', 4, 1, NULL, NULL, NULL, NULL, '2022-05-11 09:33:20', '2022-05-11 09:33:20', 304200058, NULL, NULL, 1, 1, NULL, '23', '15', 'SKM/1214/00003/1/2018/1', NULL),
(2515, 'Sertifikat III Bidang Pengelasan SMAW', 'belomSKM/1214/00003/1/2018/125', '25', 'Dwi Ramadhani', '<h4 style=\'color: green\'>Menunggu Validasi...</h4>', NULL, NULL, '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-05-11 09:38:54', '2022-05-11 09:41:14', 3042020057, NULL, NULL, 1, 1, NULL, '25', '15', 'SKM/1214/00003/1/2018/1', NULL);

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
(7, 'dokumen1', 'public/uploads/file/1652295056dokumen.pdf', '2022-05-11 11:50:57', '2022-05-11 11:50:57'),
(8, 'dokumen2', 'public/uploads/file/1652295069dokumen.pdf', '2022-05-11 11:51:09', '2022-05-11 11:51:09'),
(9, 'dokumen3', 'public/uploads/file/1652295080dokumen.pdf', '2022-05-11 11:51:20', '2022-05-11 11:51:20');

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
(1, '<h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">Profil Lembaga Sertifikasi Politeknik Negeri Ketapang</span> </span></h3>', '<h6 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi yang telah memperoleh sertifikat lisensi No. </span><span style=\"font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi Profesi\r\n (BNSP). dan memiliki Nomor SK </span>\r\n						KEP. 0429/BNSP/IV/2018&nbsp; <span style=\"font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP&nbsp; </span><span style=\"font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span><span style=\"font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).&nbsp; </span></h6><h6 style=\"text-align: left;\"><span style=\"font-family: &quot;Arial&quot;;\">Memiliki 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji kompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></h6><p></p>', '<h2 align=\"center\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Visi</span></span></span></h2><p align=\"center\"><br></p><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">menjamin kompetensi sumberdaya manusia agar mampu bersaing </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">di era globalisasi.\"</span><br></h4>', '<h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Misi</span></b></span></h2><h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></b></span></h2><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">2. Mengembangkan sumber daya manusia di LSP Politeknik Negeri </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; Ketapang dan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">seluruh asesor</span> <span style=\"font-family: &quot;Comic Sans MS&quot;;\">kompetensi menjadi tenaga profesional</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">3. Mengembangkan skema dan perangkat asesmen secara berkelanjutan</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">5.</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> Mengembangkan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">sistem </span></span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">informasi website untuk kepen</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">tingan internal </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; dan</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> eksternal LSP POLITAP </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder </span></h4><h5 align=\"justify\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h5><h5 align=\"justify\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"></span></h5><h5><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h5><h4><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4><h4><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4><h4><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Impact&quot;;\"><br></span></b></span></h4>', '<h4 style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\">MOTTO</span></h4><h3 style=\"   text-align: center;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"font-family: &quot;Courier New&quot;;\">\"Kompeten , Unggul dan, Profesional\"</span><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\"><br></span></h3>', 'public/uploads/f_profil/1650562467lsp.png', '2022-05-09 20:45:14.000000', '2022-05-10 03:45:14.417740'),
(2, '<h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(0, 255, 255);\">Profil Lembaga Sertifikasi Politeknik Negeri Ketapang</span><br></span></h3><h4 align=\"center\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></h4><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi </span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\">yang telah memperoleh sertifikat lisensi No. </span><span style=\"font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi </span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\">Profesi\r\n (BNSP). dan memiliki Nomor SK </span>\r\n						KEP. 0429/BNSP/IV/2018<span style=\"font-family: &quot;Arial&quot;;\"></span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP </span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span><span style=\"font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span><span style=\"font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI)</span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"></span><span style=\"font-family: &quot;Arial&quot;;\">dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).</span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\">Memiliki 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji\r\n</span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"></span><span style=\"font-family: &quot;Arial&quot;;\">kompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program studi </span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\">dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang memiliki kompetensi mumpuni</span></h5><h5 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"></span><span style=\"font-family: &quot;Arial&quot;;\">sesuai bidangnya dan memiliki nilai lebih di pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></h5>', '<p></p><h4><span style=\"background-color: inherit;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">Makna Logo LSP-P1 POLITAP meliputi:</span></span></h4><p></p><h6>1. LSP, merupakan singkatan dari Lembaga Sertifikasi Profesi; </h6><h6>2. POLITAP, merupakan singkatan dari Politeknik Negeri Ketapang;</h6><h6>3. Latar belakang tulisan warna merah-putih seperti bendera negara, melambangkan perjuangan Lembaga Sertifikasi Profesi Politeknik </h6><h6>&nbsp;&nbsp;&nbsp;&nbsp;Negeri Ketapang (LSP POLITAP) yang tiada henti untuk menjadi lembaga sertifikasi profesi yang profesional dan terpercaya; </h6><h6>4. Lingkaran berwarna merah seperti bola dunia, menunjukkan eksistensi perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri </h6><h6>&nbsp;&nbsp;&nbsp; Ketapang (LSP POLITAP) hingga ketingkat internasional; </h6><h6>5. Simbol centang berwarna merah di dalam lingkaran, merupakan gambaran dari komitmen perjuangan Lembaga Sertifikasi Profesi</h6><h6>&nbsp;&nbsp;&nbsp;&nbsp; Politeknik Negeri Ketapang (LSP-POLITAP) untuk menghasilkan sumberdaya manusia yang berkualitas. </h6>', '<h2 align=\"center\"><span style=\"background-color: inherit;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Visi</span></span></span></h2><p align=\"center\"><br></p><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">menjamin kompetensi sumberdaya manusia agar mampu bersaing </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">di era globalisasi.\"</span><br></h4>', '<h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Misi</span></b></span></h2><h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></b></span></h2><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten</span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">2. Mengembangkan sumber daya manusia di LSP Politeknik Negeri </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">Ketapang dan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">seluruh asesor</span> <span style=\"font-family: &quot;Comic Sans MS&quot;;\">kompetensi menjadi tenaga profesional</span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">3. Mengembangkan skema dan perangkat asesmen secara berkelanjutan</span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi </span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">5.</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> Mengembangkan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">sistem </span></span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">informasi website untuk kepen</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">tingan internal </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; </span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">dan</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> eksternal LSP POLITAP </span></span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h4>', '<h4 style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">MOTTO</span></h4><h3 style=\"   text-align: center;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"font-family: &quot;Courier New&quot;;\">\"Kompeten , Unggul dan, Profesional\"</span><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\"><br></span></h3>', 'public/uploads/f_profil/1650562467lsp.png', '2022-05-09 20:45:42.000000', '2022-05-10 03:45:42.900075');

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
(90, 4, 'public/uploads/galeri/16521570231.jpg', '2022-05-09 21:30:23', '2022-05-09 21:30:23'),
(91, 4, 'public/uploads/galeri/16521570232.jpg', '2022-05-09 21:30:23', '2022-05-09 21:30:23'),
(92, 4, 'public/uploads/galeri/16521570236.png', '2022-05-09 21:30:23', '2022-05-09 21:30:23'),
(93, 4, 'public/uploads/galeri/1652157023lsp-team.jpg', '2022-05-09 21:30:23', '2022-05-09 21:30:23'),
(94, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (1).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(95, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (2).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(96, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (3).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(97, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (4).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(98, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (5).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(99, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (6).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(100, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (7).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(101, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (8).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(102, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (9).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(103, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (10).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(105, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (12).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(106, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (13).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(107, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (14).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(108, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (15).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(109, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (16).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(110, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (17).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52');

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
(4, 'Carousel Album', '2022-05-09 19:37:54', '2022-05-09 19:37:54'),
(5, 'Kegiatan Mahasiswa', '2022-05-09 19:39:55', '2022-05-09 21:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `keterangan`, `image`, `created_at`, `updated_at`) VALUES
(1, '<br>', 'public/uploads/info/16522939352022-05-11 23-36-57.mp4', '2022-04-20 07:58:52', '2022-05-11 11:32:15');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(43, '2022_05_05_170426_create_dokumen__uploads_table', 34);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'TO-DO-LIST', '<h5><span style=\"color: rgb(255, 0, 0); --darkreader-inline-color: #ff1a1a; font-family: &quot;Comic Sans MS&quot;;\" data-darkreader-inline-color=\"\">ADMIN</span></h5><ol><li>input link navbar admin<br></li><li>setting akun</li><li>efek aos pada admin</li><li>menambahkan modal di admin</li><li>mengubah validate di admin</li><li>print untuk setiap menu administrasi dan pendaftaran</li><li>edit admin profil</li><li>edit user password</li><li>menu navigasi</li><li>membuat tata cara menggunakan web di info pendaftaran</li><li>galeri thumbnail<br></li></ol>', '2022-04-28 22:32:00', '2022-04-29 07:33:09'),
(3, 'PENTING', '<ol><li>membuat input tanpa refresh</li><li>membuat desain prosedur sertifikasi</li><li>ajax provinsi-kabupaten<br></li></ol>', '2022-05-09 11:32:33', '2022-05-09 11:37:16');

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
(10, 'D III Perawatan Dan Perbaikan Mesin', '2022-04-25 00:43:22.000000', '2022-04-25 00:43:22.000000'),
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
(8, '-', 'Asisten Kebun Kelapa Sawit', 17, 1, 38, 1, '2022-04-05 11:26:03', '2022-05-11 12:29:35'),
(10, '-', 'Teknisi Laboratorium', 12, 13, 44, 1, '2022-04-11 09:44:53', '2022-05-11 12:21:50'),
(13, '-', 'Kewirausahaan Industri', 14, 1, 34, 1, '2022-04-17 05:37:07', '2022-05-11 12:21:31'),
(14, '-', 'Instalasi Listrik', 15, 1, 30, 1, '2022-04-17 05:43:24', '2022-05-11 12:21:04'),
(15, '-', 'Sertifikat III Bidang Pengelasan SMAW', 10, 13, 25, 1, '2022-04-17 05:45:23', '2022-05-11 12:29:06'),
(16, '-', 'Inspector Keamanan Pangan', 14, 1, 24, 1, '2022-05-11 12:19:42', '2022-05-11 12:19:42'),
(17, '-', 'Personil K3', 11, 1, 53, 1, '2022-05-11 12:25:10', '2022-05-11 13:02:39'),
(18, '-', 'Network Administrator Muda', 13, 1, 45, 1, '2022-05-11 12:27:05', '2022-05-11 12:27:05'),
(19, '-', 'Junior Web Programmer', 13, 1, 27, 1, '2022-05-11 12:28:20', '2022-05-11 12:28:20'),
(20, '-', 'Junior Graphic Designer', 13, 1, 29, 1, '2022-05-11 12:28:43', '2022-05-11 12:28:43');

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
(1, NULL, 'public/uploads/strorg/1649792551Struktur LSP_1.jpg', '2022-04-17 08:41:32', '2022-04-17 15:41:32');

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
(13, 'Lab Bengkel Mesin', '-', '2022-05-09 20:31:01.000000', '2022-05-09 20:31:01.000000');

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
(40, 'JIP.SM01.001.01', 15, 'Melakukan Komunikasi Timbal Balik', '2022-04-17 06:50:03', '2022-04-26 00:52:48', NULL),
(41, 'JIP.SM01.002.01', 15, 'Mengidentifikasi Prinsip-prinsip Keselamatan dan  Kesehatan Kerja (K3)', '2022-04-26 00:57:53', '2022-04-26 01:06:45', NULL),
(42, 'JIP.SM02.001.01', 15, 'Mengukur dengan alat ukur mekanika dasar', '2022-04-26 01:04:26', '2022-04-26 01:07:41', NULL),
(43, 'JIP.SM02.002.01', 15, 'Membaca sketsa dan/atau gambar kerja sederhana', '2022-04-26 01:08:39', '2022-04-26 01:08:39', NULL),
(44, 'JIP.SM02.003.01', 15, 'Menggunakan peralatan tangan dan mesin-mesin ringan', '2022-04-26 01:09:06', '2022-04-26 01:09:06', NULL),
(45, 'JIP.SM02.004.01', 15, 'Melaksanakan pemotongan secara mekanik', '2022-04-26 01:09:35', '2022-04-26 01:09:35', NULL),
(46, 'JIP.SM02.005.01', 15, 'Melaksanakan pemotongan dengan gas', '2022-04-26 01:10:24', '2022-04-26 01:10:24', NULL),
(47, 'JIP.SM02.008.01', 15, 'Melaksanakan rutinitas (dasar) pengelasan dengan proses  las busur manual', '2022-04-26 01:11:14', '2022-04-26 01:11:14', NULL),
(48, 'JIP.SM02.009.01', 15, 'Mengelas pelat posisi di bawah tangan / Flat dengan proses  las busur manual', '2022-04-26 01:11:58', '2022-04-26 01:11:58', NULL),
(49, 'JIP.SM02.010.01', 15, 'Mengelas pelat posisi mendatar / Horizontal dengan proses  las busur manual', '2022-04-26 01:12:25', '2022-04-26 01:12:25', NULL),
(50, 'JIP.SM03.001.01', 15, 'Membuat laporan', '2022-04-26 01:13:02', '2022-04-26 01:13:02', NULL),
(51, 'JIP.SM03.002.01', 15, 'Melakukan perhitungan dasar teknik', '2022-04-26 01:13:25', '2022-04-26 01:13:25', NULL),
(52, 'JIP.SM01.003.01', 15, 'Melakukan pekerjaan secara tim', '2022-04-26 01:13:44', '2022-04-26 01:13:44', NULL),
(53, 'JIP.SM01.004.01', 15, 'Menerapkan Keselamatan dan Kesehatan Kerja serta  Lingkungan Hidup (K3L)', '2022-04-26 01:14:09', '2022-04-26 01:14:09', NULL),
(54, 'JIP.SM01.006.01', 15, 'Mengukur dengan alat ukur mekanik presisi', '2022-04-26 01:15:42', '2022-04-26 01:15:42', NULL),
(55, 'JIP.SM01.007.01', 15, 'Membaca gambar teknik dan simbol las', '2022-04-26 01:16:02', '2022-04-26 01:16:02', NULL),
(56, 'JIP.SM02.011.01', 15, 'Mengelas pelat posisi tegak/ Vertical dengan proses las  busur manual', '2022-04-26 01:16:22', '2022-04-26 01:16:22', NULL),
(57, 'JIP.SM02.012.01', 15, 'Mengelas pelat posisi di atas kepala / Overhead dengan  proses las busur manual', '2022-04-26 01:16:48', '2022-04-26 01:16:48', NULL),
(58, 'JIP.SM02.013.01', 15, 'Mengelas pipa posisi sumbu mendatar dapat diputar dengan  proses las busur manual', '2022-04-26 01:17:11', '2022-04-26 01:17:11', NULL),
(59, 'JIP.SM02.014.01', 15, 'Mengelas pipa posisi sumbu tegak dapat diputar dengan  proses las busur manual', '2022-04-26 01:17:32', '2022-04-26 01:17:32', NULL),
(60, 'JIP.SM03.003.01', 15, 'Menafsirkan literatur berbahasa inggris', '2022-04-26 01:17:53', '2022-04-26 01:17:53', NULL),
(61, 'JIP.SM03.004.01', 15, 'Mengoperasikan komputer', '2022-04-26 01:18:12', '2022-04-26 01:18:12', NULL),
(62, 'JIP.SM01.005.01', 15, 'Menerapkan sistem mutu', '2022-04-26 01:18:33', '2022-04-26 01:18:33', NULL),
(78, 'JIP.SM01.006.01', 15, 'Merencanakan tugas rutin', '2022-04-26 01:44:26', '2022-04-26 01:44:26', NULL),
(79, 'JIP.SM02.015.01', 15, 'Mengelas pipa posisi sumbu mendatar tidak dapat diputar  dengan proses las busur manual', '2022-04-26 01:49:49', '2022-04-26 01:49:49', NULL),
(80, 'JIP.SM02.016.01', 15, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', '2022-04-26 01:50:14', '2022-04-26 01:50:14', NULL),
(81, 'JIP.SM02.017.01', 15, 'Mengelas pelat dan/atau pipa segala posisi dengan proses  kombinasi TIG (GTAW) dan las busur manual', '2022-04-26 01:50:42', '2022-04-26 01:50:42', NULL),
(82, 'JIP.SM03.005.01', 15, 'Menerapkan penanganan material', '2022-04-26 01:51:05', '2022-04-26 01:51:05', NULL),
(83, 'JIP.SM03.006.01', 15, 'Mengenal karakteristik dan penggunaan bahan', '2022-04-26 01:51:31', '2022-04-26 01:51:31', NULL),
(84, 'JIP.SM03.007.01', 15, 'Melakukan pemeliharaan mesin dan perlengkapan las', '2022-04-26 01:52:04', '2022-04-26 01:52:04', NULL),
(85, 'JIP.SM03.008.01', 15, 'Menerapkan Metalurgi Las', '2022-04-26 01:52:26', '2022-04-26 01:52:26', NULL),
(86, 'M.702090.001.02', 14, 'Melakukan komunikasi dengan pihak IKM', '2022-04-26 01:54:48', '2022-04-26 01:54:48', NULL),
(87, 'M.702090.002.02', 14, 'Melakukan inventarisasi masalah pada IKM', '2022-04-26 01:55:19', '2022-04-26 01:55:19', NULL),
(88, 'M.702090.003.02', 14, 'Memberikan jasa konsultasi kepada pihak IKM', '2022-04-26 01:55:43', '2022-04-26 01:55:43', NULL),
(89, 'M.702090.004.02', 14, 'Melakukan evaluasi pelaksanaan konsultasi', '2022-04-26 01:56:15', '2022-04-26 01:56:15', NULL),
(90, 'M.702090.017.02', 14, 'Menggunakan 7 alat QC pada manajemen mutu', '2022-04-26 01:56:40', '2022-04-26 01:56:40', NULL),
(91, 'M.702090.018.02', 14, 'Melakukan inspeksi penerapan QC', '2022-04-26 01:57:07', '2022-04-26 01:57:07', NULL),
(92, 'M.702090.019.02', 14, 'Melaksanakan perbaikan mutu produk/ Jasa', '2022-04-26 01:57:32', '2022-04-26 01:57:32', NULL),
(93, 'M.702090.020.02', 14, 'Menerapkan prinsip-prinsip SMM dan TQC', '2022-04-26 01:57:52', '2022-04-26 01:57:52', NULL),
(94, 'M.749000.020.01', 13, 'Menerima sampel yang akan dianalisis', '2022-04-26 01:59:48', '2022-04-26 01:59:48', NULL),
(95, 'M.749000.021.01', 13, 'Mengambil sampel uji (sub-sampling) dari sampel  lapangan', '2022-04-26 02:00:07', '2022-04-26 02:00:07', NULL),
(96, 'M.749000.022.01', 13, 'Menyiapkan sampel untuk analisa kimia', '2022-04-26 02:00:26', '2022-04-26 02:00:26', NULL),
(97, 'M.749000.023.01', 13, 'Mengarsipkan sampel', '2022-04-26 02:00:49', '2022-04-26 02:00:49', NULL),
(98, 'M.749000.025.01', 13, 'Menyajikan data analisis kimia', '2022-04-26 02:01:11', '2022-04-26 02:01:11', NULL),
(99, 'M.749000.026.01', 13, 'Melaksanakan analisis titrimetri konvensional mengikuti  prosedur', '2022-04-26 02:01:41', '2022-04-26 02:01:41', NULL),
(100, 'M.749000.027.01', 13, 'Melaksanakan analisis gravimetri konvensional mengikuti  prosedur', '2022-04-26 02:01:59', '2022-04-26 02:01:59', NULL),
(101, 'M.749000.031.01', 13, 'Melaksanakan analisis fisiko-kimia mengikuti prosedur', '2022-04-26 02:02:41', '2022-04-26 02:02:41', NULL),
(102, 'M.749000.033.01', 13, 'Melaksanakan analisis secara spektrofotometri mengikuti  prosedur', '2022-04-26 02:03:30', '2022-04-26 02:03:30', NULL),
(103, 'M.749000.035.01', 13, 'Melaksanakan analisis organoleptik mengikuti prosedur', '2022-04-26 02:03:51', '2022-04-26 02:03:51', NULL),
(104, 'M.749000.036.01', 13, 'Melaksanakan analisis proksimat (konvensional) mengikuti  prosedur', '2022-04-26 02:04:19', '2022-04-26 02:04:19', NULL),
(109, 'J.620100.004.02', 20, 'Menggunakan Struktur Data', '2022-05-11 13:05:11', '2022-05-11 13:05:11', NULL),
(110, 'J.620100.005.02', 20, 'Mengimplementasikan User Interface', '2022-05-11 13:05:31', '2022-05-11 13:05:50', NULL),
(111, 'J.620100.011.01', 20, 'Melakukan instalasi Software Tools Pemrograman', '2022-05-11 13:06:23', '2022-05-11 13:06:23', NULL),
(112, 'J.620100.016.01', 20, 'Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', '2022-05-11 13:06:40', '2022-05-11 13:06:40', NULL),
(113, 'J.620100.017.02', 20, 'Mengimplementasikan Pemrograman Terstruktur', '2022-05-11 13:07:09', '2022-05-11 13:07:09', NULL),
(114, 'J.620100.019.02', 20, 'Menggunakan Library atau Komponen Pre-Existing', '2022-05-11 13:07:37', '2022-05-11 13:07:37', NULL),
(115, 'J.620100.023.02', 20, 'Membuat Dokumen Kode Program', '2022-05-11 13:07:52', '2022-05-11 13:07:52', NULL),
(116, 'J.620100.025.02', 20, 'Melakukan Debugging', '2022-05-11 13:08:18', '2022-05-11 13:08:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_register_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `kode` bigint(20) DEFAULT NULL,
  `koreksi` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id`, `kode_dokumen`, `data_register_id`, `name`, `image`, `created_at`, `updated_at`, `status`, `user_id`, `kode`, `koreksi`) VALUES
(409, '11815', 1815, 'Photo', NULL, '2022-05-10 22:22:07', '2022-05-10 22:22:07', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 18, 118, NULL),
(410, '21815', 1815, 'Kartu Tanda Penduduk', NULL, '2022-05-10 22:22:07', '2022-05-10 22:22:07', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 18, 218, NULL),
(411, '31815', 1815, 'Kartu Tanda Mahasiswa', NULL, '2022-05-10 22:22:07', '2022-05-10 22:22:07', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 18, 318, NULL),
(412, '41815', 1815, 'Kartu Hasil Studi', NULL, '2022-05-10 22:22:07', '2022-05-10 22:22:07', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 18, 418, NULL),
(437, '12115', 2115, 'Photo', 'public/uploads/uploads_file_register/1652249020photo.png', '2022-05-10 22:57:39', '2022-05-10 23:04:22', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 21, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>'),
(438, '22115', 2115, 'Kartu Tanda Penduduk', 'public/uploads/uploads_file_register/1652248678KTP.png', '2022-05-10 22:57:39', '2022-05-10 22:59:12', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 21, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>'),
(439, '32115', 2115, 'Kartu Tanda Mahasiswa', 'public/uploads/uploads_file_register/1652248684KHS.png', '2022-05-10 22:57:39', '2022-05-10 22:59:22', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 21, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>'),
(440, '42115', 2115, 'Kartu Hasil Studi', 'public/uploads/uploads_file_register/1652248689KTM.png', '2022-05-10 22:57:39', '2022-05-10 22:59:31', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 21, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>'),
(441, '12315', 2315, 'Photo', 'public/uploads/uploads_file_register/1652286863photo.png', '2022-05-11 09:33:40', '2022-05-11 09:34:23', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 23, 123, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>'),
(442, '22315', 2315, 'Kartu Tanda Penduduk', NULL, '2022-05-11 09:33:40', '2022-05-11 09:33:40', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 23, 223, NULL),
(443, '32315', 2315, 'Kartu Tanda Mahasiswa', NULL, '2022-05-11 09:33:40', '2022-05-11 09:33:40', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 23, 323, NULL),
(444, '42315', 2315, 'Kartu Hasil Studi', NULL, '2022-05-11 09:33:40', '2022-05-11 09:33:40', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 23, 423, NULL),
(445, '12515', 2515, 'Photo', 'public/uploads/uploads_file_register/1652287182photo.png', '2022-05-11 09:39:14', '2022-05-11 09:39:42', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 25, 125, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>'),
(446, '22515', 2515, 'Kartu Tanda Penduduk', 'public/uploads/uploads_file_register/1652287192KTP.png', '2022-05-11 09:39:15', '2022-05-11 09:39:52', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 25, 225, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>'),
(447, '32515', 2515, 'Kartu Tanda Mahasiswa', 'public/uploads/uploads_file_register/1652287203KTM.png', '2022-05-11 09:39:15', '2022-05-11 09:40:03', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 25, 325, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>'),
(448, '42515', 2515, 'Kartu Hasil Studi', 'public/uploads/uploads_file_register/1652287210KHS.png', '2022-05-11 09:39:15', '2022-05-11 09:40:10', '<label class=\'badge badge-outline-success badge-pill\'>Ada</label>', 25, 425, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>'),
(449, '1120', 120, 'Photo', NULL, '2022-05-11 13:34:29', '2022-05-11 13:34:29', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 1, 11, NULL),
(450, '2120', 120, 'Kartu Tanda Penduduk', NULL, '2022-05-11 13:34:29', '2022-05-11 13:34:29', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 1, 21, NULL),
(451, '3120', 120, 'Kartu Tanda Mahasiswa', NULL, '2022-05-11 13:34:29', '2022-05-11 13:34:29', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 1, 31, NULL),
(452, '4120', 120, 'Kartu Hasil Studi', NULL, '2022-05-11 13:34:30', '2022-05-11 13:34:30', '<label class=\'badge badge-outline-danger badge-pill\'>Kosong</label>', 1, 41, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `surel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `kode`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `provinsi`, `kabupaten`, `kota`, `kecamatan`, `tamatan_id`, `image`, `ttd`, `jurusan_id`, `semester_id`, `email_verified_at`, `remember_token`, `password`, `ktp`, `khs`, `ktm`, `created_at`, `updated_at`, `surel`, `tmpt_lahir`, `email2`, `tempat_lahir`) VALUES
(1, 'Administrator', 'Admin LSP-POLITAP', '1234', 0, '1998-08-27', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 82150040132, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1650562518lsp.png', NULL, 3, 3, NULL, 'ZWArKL0puaJkIZ1f9VQBipYZ8gkfJDXTX2ASk8ySXJtVDaAz91lTMljHvD4o', '$2y$10$.77uDWW0GccOEAmSygpKbegD0rupPTlKLd/Tivp2/BHEP8acP/lD.', NULL, NULL, NULL, '2022-03-31 01:01:51', '2022-05-09 07:00:10', NULL, NULL, 'sdfsd@fsdfsdfsdf', 'fsdgdfsdf'),
(25, NULL, 'Dwi Ramadhani', '3042020057', NULL, '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', NULL, 4, 4, NULL, NULL, '$2y$10$ZF9y04L.RUIsE60DjwV0C.Ss3KFMk5VAi9xp2TjYospzqYXImBEPO', NULL, NULL, NULL, '2022-05-11 09:37:32', '2022-05-11 09:38:37', NULL, NULL, 'dwi222@gmail.com', 'Ketapang'),
(26, NULL, 'Ponsianus JOPI', '3042020058', NULL, '2000-06-12', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 91256789696, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652302506photo.png', NULL, 4, 4, NULL, NULL, '$2y$10$3OTmQaxoxzTHuN555seoHOaqj25qqu0G1Cb9ws.bnZ1yVFuM7panm', NULL, NULL, NULL, '2022-05-11 13:53:25', '2022-05-11 13:55:06', NULL, NULL, 'ponzzy22@gmail.com', 'Ketapang');

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
(406, '11815', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', 18, 49, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Menyiapkan Fasilitas Pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-10 22:22:10', '2022-05-10 22:22:10', 1815, 118, NULL, 'JIP.SM02.016.01'),
(407, '21815', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', 18, 50, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-10 22:22:10', '2022-05-10 22:22:10', 1815, 218, NULL, 'JIP.SM02.016.01'),
(408, '31815', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', 18, 51, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melakasanakan pemeriksaan hasil pengelasan secara visual', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-10 22:22:10', '2022-05-10 22:22:10', 1815, 318, NULL, 'JIP.SM02.016.01'),
(409, '41815', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', 18, 52, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaporkan hasil pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-10 22:22:10', '2022-05-10 22:22:10', 1815, 418, NULL, 'JIP.SM02.016.01'),
(430, '12115', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', 21, 49, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Menyiapkan Fasilitas Pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652248699dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-10 22:57:40', '2022-05-10 22:59:36', 2115, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', 'JIP.SM02.016.01'),
(431, '22115', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', 21, 50, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652248709dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-10 22:57:40', '2022-05-10 22:59:42', 2115, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', 'JIP.SM02.016.01'),
(432, '32115', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', 21, 51, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melakasanakan pemeriksaan hasil pengelasan secara visual', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652248716dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-10 22:57:40', '2022-05-10 22:59:56', 2115, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', 'JIP.SM02.016.01'),
(433, '42115', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', 21, 52, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaporkan hasil pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652248721dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-10 22:57:40', '2022-05-10 23:00:01', 2115, 0, '<label class=\'badge badge-outline-info badge-pill\'>Valid</label>', 'JIP.SM02.016.01'),
(434, '12315', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', 23, 49, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Menyiapkan Fasilitas Pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 09:33:46', '2022-05-11 09:33:46', 2315, 123, NULL, 'JIP.SM02.016.01'),
(435, '22315', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', 23, 50, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 09:33:46', '2022-05-11 09:33:46', 2315, 223, NULL, 'JIP.SM02.016.01'),
(436, '32315', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', 23, 51, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melakasanakan pemeriksaan hasil pengelasan secara visual', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 09:33:46', '2022-05-11 09:33:46', 2315, 323, NULL, 'JIP.SM02.016.01'),
(437, '42315', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', 23, 52, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaporkan hasil pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 09:33:47', '2022-05-11 09:33:47', 2315, 423, NULL, 'JIP.SM02.016.01'),
(438, '12515', '<p>1.1 Alat Pelindung diri, consummable materials dan perlatan pengelasandi idenfitikasi</p><p>1.2 Alat pelindung diri / PPE diidentifikasi dan diterapkan berdasarkan SOP</p><p>1.3 Jenis dan ukuran bahan dan elektroda las</p><p>1.4 Perlatan utama dan pendukung disiapkan berdasarkan tuntunan pekerja atau WPS<br></p><p><br></p>', 25, 49, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Menyiapkan Fasilitas Pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652287241dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-11 09:39:21', '2022-05-11 09:40:41', 2515, 125, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>', 'JIP.SM02.016.01'),
(439, '22515', '<p>2.1 karakteristik mesin las dan teknik pengelasan dipahami sesuai dengan kebutuhan pengelasan</p><p>2.2 besarnya arus listrik diatur berdasarkan jenis dan ukuran elektroda las yang digunakan atau WPS yang di tentukan</p><p>2.3 Las Cantum ( tack weld ) dibuat dengan ukuran dan jumlah sesuai dengan ukuran bahan yang dilas</p><p>2.4 pengelasan pipa pada pelat posisi sumbu miring tidak dapat diputar didemonstrasikan sesuai dengan teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3</p><p>2.5 pengelasan Pipa sambungan tumpul kampuh V posisi sumbu miring tidak dapat diputar di demonstrasikan sesuai dengan Teknik pengelasan yang berlaku ( SOP ) dengan menerapkan K3<br></p>', 25, 50, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaksanakan pengelasan pipa pada posisis sumbu miring tidak dapat diputar', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652287255dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-11 09:39:21', '2022-05-11 09:40:55', 2515, 225, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>', 'JIP.SM02.016.01'),
(440, '32515', '<p>3.1 Alat uji dan alat ukur hasil pengelasan diidentifikasi disiapkan dan diperiksa fungsi dan validasinnya</p><p>3.2 Seluruh hasil pengelasan diperiksa secara visual dan dibandingkan dengan standar baku</p><p>3.3 Hasil pemeriksaan visual disimpulkan dan ditafsirkan</p><p>3.4 Perbaikan hasil las (bila diperlukan) dilakukan secara SOP<br></p>', 25, 51, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melakasanakan pemeriksaan hasil pengelasan secara visual', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652287263dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-11 09:39:21', '2022-05-11 09:41:03', 2515, 325, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>', 'JIP.SM02.016.01'),
(441, '42515', '<p>4.1 Instrumen Pengamatan proses dan pengukuran hasil las ( WPQR ) dipahami</p><p>4.2 Data hasil pengamatan dan pengukuran diinput dalam instrumen</p><p>4.3 Laporan hasil pengamatan dan pengukuran diserahkan kepada yang berhak sesuai dengan SOP<br></p>', 25, 52, 'Mengelas pipa posisi sumbu miring tidak dapat diputar  dengan proses las busur manual', 'Melaporkan hasil pengelasan', 'Sertifikat III Bidang Pengelasan SMAW', 15, 'public/uploads/formulir_apl2/1652287269dokumen.pdf', '<label class=\'badge badge-outline-success badge-pill\'>Kompeten</label>', '2022-05-11 09:39:21', '2022-05-11 09:41:09', 2515, 425, '<label class=\'badge badge-outline-warning badge-pill\'>Belum Dikoreksi</label>', 'JIP.SM02.016.01'),
(442, '1120', '<p>1.1 Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.<br>1.2 Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.<br></p>', 1, 58, 'Menggunakan Struktur Data', 'Mengidentifikasi  konsep data dan struktur data', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:35', '2022-05-11 13:34:35', 120, 11, NULL, 'J.620100.004.02'),
(443, '2120', '2.1 Struktur data diimplementasikan sesuai dengan bahasa pemrograman yang akan dipergunakan.<br>2.2 Akses terhadap data dinyatakan dalam algoritma yang efisiensi sesuai bahasa pemrograman yang akan dipakai. <br>', 1, 59, 'Menggunakan Struktur Data', 'Menerapkan struktur data dan akses terhadap struktur data tersebut', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:35', '2022-05-11 13:34:35', 120, 21, NULL, 'J.620100.004.02'),
(444, '3120', '<p>1.1 Rancangan user interface diidentifikasi sesuai kebutuhan. <br>1.2 Komponen user interface dialog diidentifikasi sesuai konteks rancangan proses.<br>1.3 Urutan dari akses komponen user interface dialog dijelaskan.<br>1.4 Simulasi (mock-up) dari aplikasi yang akan dikembangkan dibuat. <br></p>', 1, 60, 'Mengimplementasikan User Interface', 'Mengidentifikasi rancangan user interface', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:35', '2022-05-11 13:34:35', 120, 31, NULL, 'J.620100.005.02'),
(445, '4120', '<p>2.1 Menu program sesuai dengan rancangan program diterapkan.<br>2.2 Penempatan user interface dialog diatur secara sekuensial.<br>2.3 Setting aktif-pasif komponen user interface dialog disesuaikan dengan urutan alur proses.<br>2.4 Bentuk style dari komponen user interface ditentukan. <br>2.5 Penerapan simulasi dijadikan suatu proses yang sesungguhnya.<br></p>', 1, 61, 'Mengimplementasikan User Interface', 'Melakukan implementasi rancangan user interface', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 41, NULL, 'J.620100.005.02'),
(446, '5120', '<p>1.1 Platform (lingkungan) yang akan digunakan untuk menjalankan tools pemrograman&nbsp; diidentifikasi sesuai&nbsp; dengan kebutuhan.</p><p>1.2 Tools bahasa pemrogram dipilih sesuai dengan kebutuhaan dan lingkungan pengembangan.<br></p>', 1, 62, 'Melakukan instalasi Software Tools Pemrograman', 'Memilih tools pemrograman yang sesuai dengan kebutuhan', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 51, NULL, 'J.620100.011.01'),
(447, '6120', '<p>2.1 Tools pemrogaman ter-install sesuai dengan prosedur. &nbsp; </p><p>2.2 Tools pemrograman bisa dijalankan di lingkungan pengembangan yang telah ditetapkan.<br></p>', 1, 63, 'Melakukan instalasi Software Tools Pemrograman', 'Instalasi tool pemrograman', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 61, NULL, 'J.620100.011.01'),
(448, '7120', '<p>3.1 Script (source code) sederhana dibuat&nbsp; sesuai tools pemrogaman yang di-install </p><p>3.2 Script dapat dijalankan dengan benar dan menghasilkan keluaran sesuai skenario yang diharapkan <br></p>', 1, 64, 'Melakukan instalasi Software Tools Pemrograman', 'Menerapkan hasil pemodelan kedalam eksekusi script sederhana', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 71, NULL, 'J.620100.011.01'),
(449, '8120', '<p>1.1 Kode sumber dituliskan mengikuti coding-guidelines dan best practices.&nbsp; </p><p>1.2 Struktur program yang sesuai dengan konsep paradigmanya dibuat.&nbsp; </p><p>1.3 Galat/error ditangani. <br></p>', 1, 65, 'Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', 'Menerapkan codingguidelines dan best  practices dalam  penulisan program  (kode sumber)', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 81, NULL, 'J.620100.016.01'),
(450, '9120', '<p>2.1 Efisiensi penggunaan resources oleh kode dihitung. </p><p>2.2 Kemudahan interaksi selalu diimplementasikan&nbsp; sesuai standar yang berlaku.<br></p>', 1, 66, 'Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', 'Menggunakan ukuran performansi dalam menuliskan kode sumber', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 91, NULL, 'J.620100.016.01'),
(451, '10120', '<p>1.1 Tipe data yang sesuai standar ditentukan . </p><p>1.2 Syntax program yang dikuasai digunakan sesuai standar. </p><p>1.3 Struktur kontrol program yang dikuasai digunakan sesuai standar.<br></p>', 1, 67, 'Mengimplementasikan Pemrograman Terstruktur', 'Menggunakan tipe data dan control program', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 101, NULL, 'J.620100.017.02'),
(452, '11120', '<p>2.1 Program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran telah dibuat. </p><p>2.2 Struktur kontrol percabangan dan pengulangan dalam membuat program telah digunakan.<br></p>', 1, 68, 'Mengimplementasikan Pemrograman Terstruktur', 'Membuat program sederhana', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 111, NULL, 'J.620100.017.02'),
(453, '12120', '<p>3.1 Program dengan menggunakan prosedur dibuat sesuai aturan penulisan program. </p><p>3.2 Program dengan menggunakan fungsi dibuat sesuai aturan penulisan program. </p><p>3.3 Program dengan menggunakan prosedur dan fungsi secara bersamaan dibuat sesuai aturan penulisan program. </p><p>3.4 Keterangan untuk setiap prosedur dan fungsi telah diberikan. <br></p>', 1, 69, 'Mengimplementasikan Pemrograman Terstruktur', 'Membuat program menggunakan prosedur dan fungsi', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:36', '2022-05-11 13:34:36', 120, 121, NULL, 'J.620100.017.02'),
(454, '13120', '<p>4.1 Dimensi array telah ditentukan. </p><p>4.2 Tipe data array telah ditentukan. </p><p>4.3 Panjang array telah&nbsp; ditentukan. </p><p>4.4 Pengurutan array telah digunakan.<br></p>', 1, 70, 'Mengimplementasikan Pemrograman Terstruktur', 'Membuat program menggunakan array', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 131, NULL, 'J.620100.017.02'),
(455, '14120', '<p>5.1 Program untuk menulis data dalam media penyimpan telah dibuat. </p><p>5.2 Program untuk membaca data dari media penyimpan telah dibuat.<br></p>', 1, 71, 'Mengimplementasikan Pemrograman Terstruktur', 'Membuat program untuk akses file', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 141, NULL, 'J.620100.017.02'),
(456, '15120', '<p>1.1 Class unit-unit reuse (dari aplikasi lain) yang sesuai dapat diidentifikasi. </p><p>1.2 Keuntungan efisiensi dari pemanfaatan komponen reuse dapat dihitung. </p><p>1.3 Lisensi, Hak cipta dan hak paten tidak dilanggar dalam pemanfaatan komponen reuse tersebut<br></p>', 1, 72, 'Menggunakan Library atau Komponen Pre-Existing', 'Melakukan pemilihan unit-unit reuse yang potensial', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 151, NULL, 'J.620100.019.02'),
(457, '16120', '<p>2.1 Ketergantungan antar unit diidentifikasi. </p><p>2.2 Penggunaan komponen yang sudah obsolete dihindari. </p><p>2.3 Program yang dihubungkan dengan library diterapkan.<br></p>', 1, 73, 'Menggunakan Library atau Komponen Pre-Existing', 'Melakukan integrasi library atau komponen pre-existing dengan source code yang ada', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 161, NULL, 'J.620100.019.02'),
(458, '17120', '<p>3.1 Cara-cara pembaharuan library atau komponen pre-existing diidentifikasi. </p><p>3.2 Pembaharuan library atau komponen preexisting berhasil dilakukan.<br><br><br></p>', 1, 74, 'Menggunakan Library atau Komponen Pre-Existing', 'Melakukan pembaharuan library atau komponen preexisting yang  digunakan', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 171, NULL, 'J.620100.019.02'),
(459, '18120', '<p>1.1 Modul program diidentifikasi </p><p>1.2 Parameter&nbsp; yang&nbsp; dipergunakan&nbsp; diidentifikasi&nbsp; </p><p>1.3 Algoritma dijelaskan cara kerjanya </p><p>1.4 Komentar setiap baris kode termasuk data, eksepsi, fungsi, prosedur dan class (bila ada) diberikan <br></p>', 1, 75, 'Membuat Dokumen Kode Program', 'Melakukan identifikasi kode program', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 181, NULL, 'J.620100.023.02'),
(460, '19120', '<p>2.1 Dokumentasi modul dibuat sesuai dengan identitas untuk memudahkan pelacakan </p><p>2.2 Identifikasi dokumentasi diterapkan </p><p>2.3 Kegunaan modul dijelaskan&nbsp; </p><p>2.4 Dokumen direvisi sesuai perubahan kode program<br></p>', 1, 76, 'Membuat Dokumen Kode Program', 'Membuat dokumentasi modul program', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 191, NULL, 'J.620100.023.02'),
(461, '20120', '<p>3.1 Dokumentasi fungsi, prosedur atau metod dibuat&nbsp; </p><p>3.2 Kemungkinan eksepsi dijelaskan&nbsp; </p><p>3.3 Dokumen direvisi sesuai perubahan kode program <br></p>', 1, 77, 'Membuat Dokumen Kode Program', 'Membuat dokumentasi fungsi, prosedur atau method program', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 201, NULL, 'J.620100.023.02'),
(462, '21120', '<p>4.1 Tools untuk generate dokumentasi diidentifikasi </p><p>4.2 Generate dokumentasi dilakukan <br></p>', 1, 78, 'Membuat Dokumen Kode Program', 'Men-generate dokumentasi', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 211, NULL, 'J.620100.023.02'),
(463, '22120', '<p>1.1 Kode program sesuai spesifikasi disiapkan. </p><p>1.2 Debugging tools untuk melihat proses suatu modul dipersiapkan. <br></p>', 1, 79, 'Melakukan Debugging', 'Mempersiapkan kode program', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 221, NULL, 'J.620100.025.02'),
(464, '23120', '<p>2.1 Kode program dikompilasi sesuai bahasa pemrograman yang digunakan. </p><p>2.2 Kriteria lulus build dianalisis. </p><p>2.3 Kriteria eksekusi aplikasi dianalisis. </p><p>2.4 Kode kesalahan dicatat. <br></p>', 1, 80, 'Melakukan Debugging', 'Melakukan debugging', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 231, NULL, 'J.620100.025.02'),
(465, '24120', '<p>3.1 Perbaikan terhadap kesalahan kompilasi maupun build dirumuskan. </p><p>3.2 Perbaikan dilakukan. <br></p>', 1, 81, 'Melakukan Debugging', 'Memperbaiki program', 'Junior Graphic Designer', 20, NULL, '<label class=\'badge badge-outline-danger badge-pill\'>Tidak Kompeten</label>', '2022-05-11 13:34:37', '2022-05-11 13:34:37', 120, 241, NULL, 'J.620100.025.02');

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
-- Indexes for table `asus`
--
ALTER TABLE `asus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `dokumen__uploads`
--
ALTER TABLE `dokumen__uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `asus`
--
ALTER TABLE `asus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beranda_img1`
--
ALTER TABLE `beranda_img1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `beranda_img2`
--
ALTER TABLE `beranda_img2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `dokumen__uploads`
--
ALTER TABLE `dokumen__uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `group_galeris`
--
ALTER TABLE `group_galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `unikoms`
--
ALTER TABLE `unikoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `xnxxes`
--
ALTER TABLE `xnxxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=490;

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
