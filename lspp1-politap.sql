-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 10:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(81, 116, 'Memperbaiki program', '<p>3.1 Perbaikan terhadap kesalahan kompilasi maupun build dirumuskan. </p><p>3.2 Perbaikan dilakukan. <br></p>', '2022-05-11 13:33:50', '2022-05-11 13:33:50'),
(82, 117, '34234234', '<p>324234</p>', '2022-06-11 04:23:41', '2022-06-11 04:23:41'),
(83, 118, '234234', '<p>2342342</p>', '2022-06-11 04:24:01', '2022-06-11 04:24:01'),
(84, 119, 'na', '<p>aad</p>', '2022-06-11 04:24:32', '2022-06-11 04:24:32'),
(85, 120, 'asu', '<p>asu</p>', '2022-06-11 05:17:29', '2022-06-11 05:17:29'),
(86, 93, 'kimak', '<p>dfsdf</p>', '2022-06-11 06:07:28', '2022-06-11 06:07:28');

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
  `no_hp` varchar(20) DEFAULT NULL,
  `skema` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`id`, `nik`, `nama`, `image`, `alamat`, `sex`, `email`, `status`, `updated_at`, `created_at`, `no_hp`, `skema`) VALUES
(1, '-', '-', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', NULL, NULL),
(24, 'MET.000.010629 2017', 'Adha Panca Wardanu', 'public/uploads/asesor/1654176913Screenshot (66).png', '-', 'Laki-laki', 'cino7130@gmail.com', 'Aktif', '2022-06-11 08:29:27.000000', '2022-06-11 15:29:27.977565', '34532', 'Skema Sertifikasi Kompetensi KKNI Sertifikat III Bidang Pengelasan SMAw'),
(25, 'MET.000.009812 2021', 'Ahmad Ravi', NULL, 'Luwu Utara, Sulawesi Selatan', NULL, NULL, 'Aktif', '2022-05-09 21:53:14.000000', '2022-05-09 21:53:14.000000', NULL, NULL),
(26, 'MET.000.004633 2020', 'Alfath Desita Jumiar', NULL, 'Kota Pontianak, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:53:35.000000', '2022-05-09 21:53:35.000000', NULL, NULL),
(27, 'MET.000.010618 2017', 'Ar-Razy Muhammad', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:53:48.000000', '2022-05-09 21:53:48.000000', NULL, NULL),
(28, 'MET.000.010613 2017', 'Beny Setiawan', NULL, 'Ketapang, Kalimantan Barat', NULL, NULL, 'Aktif', '2022-05-09 21:54:03.000000', '2022-05-09 21:54:03.000000', NULL, NULL),
(29, 'MET.000.009818 2021', 'Darmanto', 'public/uploads/asesor/1654176913Screenshot (66).png', 'Lamandau, Kalimantan Tengah', NULL, NULL, 'Aktif', '2022-06-09 15:40:08.339415', '2022-06-09 15:40:08.339415', NULL, NULL),
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
(54, NULL, 'Firman', NULL, NULL, NULL, NULL, 'Aktif', '2022-05-11 12:47:57.000000', '2022-05-11 12:47:57.000000', NULL, NULL),
(56, '2312312gdfsdas', '435345', NULL, 'Kota Pontianak, Kalimantan Barat', 'Laki-laki', 'ramadhanidwi289@gmail.com', 'Aktif', '2022-06-10 00:24:40.000000', '2022-06-10 07:24:40.793242', '012121212121212', 'Skema Sertifikasi Kompetensi KKNI Sertifikat III Bidang Pengelasan SMA');

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
(1, 'Skema', 'public/uploads/info/16549630353.jpg', '2022-06-11 08:57:15.000000', '2022-06-11 15:57:15.101756'),
(2, 'TUK', 'public/uploads/info/16548771261652157112Kegiatan Mahasiswa (5).jpeg', '2022-06-10 09:05:26.000000', '2022-06-10 16:05:26.243379');

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
(69, NULL, NULL, 'public/uploads/carousel/16546909263.jpg', '2022-06-08 05:22:06.000000', '2022-06-08 05:22:06.000000');

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
(36, 'Ketua LSP', 'public/uploads/pengelola/16505683451.png', '2022-06-08 09:18:36.000000', '2022-06-08 16:18:36.074794', '12121212121212', 'Budi Pratomo Sibuea, S.ST., M.ST', NULL, 'Ketua LSP', NULL, NULL),
(37, 'Manajer Sertifikasi', 'public/uploads/pengelola/16505684442.png', '2022-06-11 09:02:57.000000', '2022-06-11 16:02:57.061798', NULL, 'A. Nova Zulfahmi, S.Pi., M.Sc', NULL, 'Manajer Sertifikasi', NULL, NULL),
(38, 'Manajer Mutu', 'public/uploads/pengelola/16505687524.png', '2022-06-08 09:18:23.000000', '2022-06-08 16:18:23.326277', '2312312', 'Ahmad Ravi, S.Pd., M.Pd', NULL, 'Manajer Mutu', NULL, NULL),
(39, 'Manajer Administrasi', 'public/uploads/pengelola/16505690133.png', '2022-06-08 09:18:08.000000', '2022-06-08 16:18:08.931625', '2323', 'Firmanilah Kamil, S.Pd., M.Pd', NULL, 'Manajer Administrasi', NULL, NULL);

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `kategori_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `image`, `status`, `file2`) VALUES
(28, 1, 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab m elaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 dibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga pendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki tugas untuk mengembangkan standar kompetensi, melaksanakan uji kompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas dan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh BNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem sertifikasi pihak pertama secara konsisten dan profesional, sehingga dapat diterima di tingkat nasional yang relevan demi kepentingan pengembangan sumber daya manusia dalam aspek peningkatan kualitas dan perlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP merupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri Ketapang adalah satu-satunya perguruan tinggi negeri di Kabupaten Ketapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi mahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi Perawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, Teknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', '2022-05-09 20:52:19', '2022-06-11 09:37:02', 'public/uploads/berita/16521547396.png', 'Posting', NULL),
(34, 1, 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. </h6>', '2022-05-09 21:18:32', '2022-06-11 09:36:43', 'public/uploads/berita/1652156312IMG_20220420_131245.jpg', 'Posting', NULL),
(35, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politeknik Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', '2022-05-09 21:23:35', '2022-06-11 09:36:14', 'public/uploads/berita/16521566151.jpg', 'Posting', NULL),
(37, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politeknik Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', 'qwewe', '2022-06-11 09:20:52', '2022-06-11 12:04:51', 'public/uploads/berita/16549644523.jpg', 'Posting', NULL),
(38, 1, 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab m elaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 dibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga pendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki tugas untuk mengembangkan standar kompetensi, melaksanakan uji kompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas dan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh BNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem sertifikasi pihak pertama secara konsisten dan profesional, sehingga dapat diterima di tingkat nasional yang relevan demi kepentingan pengembangan sumber daya manusia dalam aspek peningkatan kualitas dan perlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP merupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri Ketapang adalah satu-satunya perguruan tinggi negeri di Kabupaten Ketapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi mahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi Perawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, Teknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', '2022-05-09 20:52:19', '2022-06-11 09:37:02', 'public/uploads/berita/16521547396.png', 'Posting', NULL),
(39, 1, 'Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. </h6>', '2022-05-09 21:18:32', '2022-06-11 09:36:43', 'public/uploads/berita/1652156312IMG_20220420_131245.jpg', 'Posting', NULL),
(40, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politeknik Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', '<h6>Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang \r\nbertanggungjawab melaksanakan sertifikasi kompetensi profesi. LSP-P1 \r\ndibentuk wajib berbadan hukum dan dibentuk oleh perusahaan atau lembaga \r\npendidikan dan pelatihan yang teregistrasi oleh BNSP. LSP-P1 memiliki \r\ntugas untuk mengembangkan standar kompetensi, melaksanakan uji \r\nkompetensi, menerbitkan sertifikat kompetensi serta melakukan verifikasi\r\n tempat uji kompetensi.&nbsp; </h6><p><br></p><h6>Dalam melaksanakan tugas \r\ndan fungsi LSP-P1 POLITAP mengacu pada pedoman yang dikeluarkan oleh \r\nBNSP, untuk menjamin agar lembaga sertifikasi menjalankan sistem \r\nsertifikasi pihak pertama secara konsisten dan profesional, sehingga \r\ndapat diterima di tingkat nasional yang relevan demi kepentingan \r\npengembangan sumber daya manusia dalam aspek peningkatan kualitas dan \r\nperlindungan tenaga kerja.&nbsp; </h6><h6><br></h6><h6>LSP P1 POLITAP \r\nmerupakan bagian dari Politeknik Negeri Ketapang. Politeknik Negeri \r\nKetapang adalah satu-satunya perguruan tinggi negeri di Kabupaten \r\nKetapang.. LSP P1 POLITAP memenuhi kebutuhan sertifikasi kompetensi \r\nmahasiswa dari 8 Prodi di Politeknik Negeri Ketapang, meliputi Prodi \r\nPerawatan dan Perbaikan Mesin, Teknik Informatika, Teknik Pertambangan, \r\nTeknik Elektro, Perancangan Jalan dan Jembatan,, Agroindustri, Teknologi\r\n Pengolahan Hasil Perkebunan, dan Budidya Tanaman Perkebunan. <br></h6>', '2022-05-09 21:23:35', '2022-06-11 09:36:14', 'public/uploads/berita/16521566151.jpg', 'Posting', NULL),
(41, 2, 'Layanan Skema Lembaga Sertifikasi Profesi Politeknik Ketapang', 'Lembaga sertifikasi profesi merupakan lembaga pendukung BNSP yang bertanggungjawab melaksanakan sertifikasi kompetensi profesi.', 'qwewe', '2022-06-11 09:20:52', '2022-06-11 12:04:51', 'public/uploads/berita/16549644523.jpg', 'Posting', NULL);

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
  `nim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor_id` int(11) DEFAULT NULL,
  `tuk_id` bigint(20) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_skema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koreksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valuesurel` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valuelahir` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_registers`
--

INSERT INTO `data_registers` (`id`, `skema_name`, `skema_id`, `user_id`, `user_name`, `status`, `surel`, `tmpt_lahir`, `tgl_lahir`, `sex_id`, `negara`, `alamat`, `kode_post`, `no_hp`, `provinsi`, `kabupaten`, `kota`, `kecamatan`, `image`, `jurusan_id`, `semester_id`, `ktp`, `ktm`, `khs`, `lain`, `created_at`, `updated_at`, `nim`, `date`, `time`, `asesor_id`, `tuk_id`, `keterangan`, `kode`, `id_skema`, `kode_skema`, `koreksi`, `valuesurel`, `valuelahir`) VALUES
(2516, 'Inspector Keamanan Pangan', 'belom-25', '25', 'Dwi Ramadhani2', '<h4 style=\'color: green\'>Menunggu Validasi...</h4>', 'dwi222@gmail.com', 'Ketapang', '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 05:23:11', '2022-06-11 05:25:09', '3042020057', NULL, NULL, 1, 1, NULL, '25', '16', '-', NULL, NULL, NULL),
(2517, 'Personil K3', 'belom-25', '25', 'Dwi Ramadhani2', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'dwi222@gmail.com', 'Ketapang', '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 05:20:20', '2022-06-11 05:24:45', '3042020057', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL),
(2518, 'Network Administrator Muda', 'belom-25', '25', 'Dwi Ramadhani2', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'dwi222@gmail.com', 'Ketapang', '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 05:12:01', '2022-06-11 05:16:25', '3042020057', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL),
(2519, 'Junior Web Programmer', 'belom-25', '25', 'Dwi Ramadhani2', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'dwi222@gmail.com', 'Ketapang', '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 05:06:40', '2022-06-11 05:11:45', '3042020057', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL),
(2614, 'Instalasi Listrik', 'belom-26', '26', 'Ponsianus JOPI', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'ponzzy22@gmail.com', 'Ketapang', '2000-06-12', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 91256789696, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652302506photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 06:07:41', '2022-06-11 07:17:16', '3042020058', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL),
(2615, 'Sertifikat III Bidang Pengelasan SMAW', '-26', '26', 'Ponsianus JOPI', '<h4 style=\'color: rgb(163, 129, 8)\'>Lengkapi Data Anda</h4>', 'ponzzy22@gmail.com', 'Ketapang', '2000-06-12', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 91256789696, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652302506photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 07:25:34', '2022-06-11 07:25:34', '3042020058', NULL, NULL, 1, 1, NULL, '26', '15', '-', NULL, NULL, NULL),
(2617, 'Personil K3', 'belom-26', '26', 'Ponsianus JOPI', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'ponzzy22@gmail.com', 'Ketapang', '2000-06-12', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 91256789696, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652302506photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 06:03:40', '2022-06-11 06:05:28', '3042020058', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL),
(2618, 'Network Administrator Muda', 'belom-26', '26', 'Ponsianus JOPI', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'ponzzy22@gmail.com', 'Ketapang', '2000-06-12', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 91256789696, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652302506photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 05:59:59', '2022-06-11 06:03:10', '3042020058', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL),
(2619, 'Junior Web Programmer', 'belom-26', '26', 'Ponsianus JOPI', '<h4 style=\'color: rgb(0, 0, 0)\'>Sertifikasi Selesai</h4>', 'ponzzy22@gmail.com', 'Ketapang', '2000-06-12', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 91256789696, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652302506photo.png', 4, 4, NULL, NULL, NULL, NULL, '2022-06-11 05:45:01', '2022-06-11 05:50:04', '30', NULL, NULL, 1, 1, NULL, '-', NULL, '-', NULL, NULL, NULL);

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
-- Table structure for table `fileapl2s`
--

CREATE TABLE `fileapl2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fileapl2s`
--

INSERT INTO `fileapl2s` (`id`, `file`, `image`, `created_at`, `updated_at`) VALUES
(2, '34', 'public/uploads/fileapl2/1654883205BAB III_Arif W.pdf', '2022-06-10 10:46:46', '2022-06-10 10:46:46');

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
(2, 'sdasdasda', 'public/uploads/file/1654883625SKKNI_2014-400_-_3D_Illustration_Artist.pdf', '2022-06-10 10:53:45', '2022-06-10 10:53:45');

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
(9, 'dokumen3', 'public/uploads/file/1652295080dokumen.pdf', '2022-05-11 11:51:20', '2022-05-11 11:51:20'),
(10, 'dsasdasdasd', 'public/uploads/file/16547644491652150076S_PTA_1504738_Chapter3.pdf', '2022-06-09 01:47:29', '2022-06-09 01:47:29');

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
(2, '<h3 align=\"left\"><span style=\"font-family: &quot;Arial&quot;;\"><span style=\"color: rgb(0, 255, 255);\">Profil Lembaga Sertifikasi Politeknik Negeri Ketapang</span><br></span></h3><h1 align=\"center\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></h1><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\">Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga \r\nsertifikasi profesi </span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\">yang telah memperoleh sertifikat lisensi No. </span><span style=\"font-family: &quot;Arial&quot;;\">BNSP-LSP-1214-ID dari Badan Nasional Sertifikasi </span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\">Profesi\r\n (BNSP). dan memiliki Nomor SK </span>\r\n						KEP. 0429/BNSP/IV/2018<span style=\"font-family: &quot;Arial&quot;;\"></span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\">Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema yang dimiliki LSP </span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span><span style=\"font-family: &quot;Arial&quot;;\">Politeknik Negeri Ketapang</span><span style=\"font-family: &quot;Arial&quot;;\"> diselaraskan dengan Kerangka Kualifikasi Nasional Indonesia (KKNI)</span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"></span><span style=\"font-family: &quot;Arial&quot;;\">dan Standar Kualifikasi Kerja\r\n            Nasional Indonesia (SKKNI).</span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"><br></span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\">Memiliki 6 skema, LSP&nbsp; Politeknik Negeri Ketapang  siap melaksanakan uji\r\n</span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"></span><span style=\"font-family: &quot;Arial&quot;;\">kompetensi\r\n            pada seluruh\r\n            mahasiswa  Politeknik Negeri Ketapang dari berbagai program studi </span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\">dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang memiliki kompetensi mumpuni</span></span></span></h5><h5 align=\"left\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Arial&quot;;\"></span><span style=\"font-family: &quot;Arial&quot;;\">sesuai bidangnya dan memiliki nilai lebih di pasar tenaga kerja\r\n            baik\r\n            nasional maupun internasional.</span></span></span></h5>', '<p></p><h4><span style=\"background-color: inherit;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">Makna Logo LSP-P1 POLITAP meliputi:</span></span></h4><p></p><h6>1. LSP, merupakan singkatan dari Lembaga Sertifikasi Profesi; </h6><h6>2. POLITAP, merupakan singkatan dari Politeknik Negeri Ketapang;</h6><h6>3. Latar belakang tulisan warna merah-putih seperti bendera negara, melambangkan perjuangan Lembaga Sertifikasi Profesi Politeknik </h6><h6>&nbsp;&nbsp;&nbsp;&nbsp;Negeri Ketapang (LSP POLITAP) yang tiada henti untuk menjadi lembaga sertifikasi profesi yang profesional dan terpercaya; </h6><h6>4. Lingkaran berwarna merah seperti bola dunia, menunjukkan eksistensi perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri </h6><h6>&nbsp;&nbsp;&nbsp; Ketapang (LSP POLITAP) hingga ketingkat internasional; </h6><h6>5. Simbol centang berwarna merah di dalam lingkaran, merupakan gambaran dari komitmen perjuangan Lembaga Sertifikasi Profesi</h6><h6>&nbsp;&nbsp;&nbsp;&nbsp; Politeknik Negeri Ketapang (LSP-POLITAP) untuk menghasilkan sumberdaya manusia yang berkualitas. </h6>', '<h2 align=\"center\"><span style=\"background-color: inherit;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Visi</span></span></span></h2><p align=\"center\"><br></p><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">\"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">menjamin kompetensi sumberdaya manusia agar mampu bersaing </span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">di era globalisasi.\"</span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h4><h4 align=\"center\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span><br></h4>', '<h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Misi</span></b></span></h2><h2 align=\"center\"><span style=\"color: rgb(255, 0, 0);\"><b><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></b></span></h2><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten</span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">2. Mengembangkan sumber daya manusia di LSP Politeknik Negeri </span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">Ketapang dan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">seluruh asesor</span> <span style=\"font-family: &quot;Comic Sans MS&quot;;\">kompetensi menjadi tenaga profesional</span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">3. Mengembangkan skema dan perangkat asesmen secara berkelanjutan</span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">4. Mengembangkan sarana dan prasarana uji kompetensi </span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">5.</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> Mengembangkan </span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">sistem </span></span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">informasi website untuk kepen</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">tingan internal </span></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;&nbsp; </span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">dan</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\"> eksternal LSP POLITAP </span></span></h4><h4 align=\"left\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Comic Sans MS&quot;;\">6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder</span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h4><h4 align=\"left\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\"><br></span></h4>', '<h4 style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0); font-family: &quot;Comic Sans MS&quot;;\">MOTTO</span></h4><h3 style=\"   text-align: center;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">﻿</span><span style=\"font-family: &quot;Courier New&quot;;\">\"Kompeten , Unggul dan, Profesional\"</span><span style=\"color: rgb(255, 0, 0); font-family: &quot;Impact&quot;;\"><br></span></h3>', 'public/uploads/f_profil/1650562467lsp.png', '2022-06-09 20:56:51.000000', '2022-06-10 03:56:51.879485');

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
(110, 5, 'public/uploads/galeri/1652157112Kegiatan Mahasiswa (17).jpeg', '2022-05-09 21:31:52', '2022-05-09 21:31:52'),
(112, 6, 'public/uploads/galeri/16548366955.jpeg', '2022-06-09 21:51:35', '2022-06-09 21:51:35'),
(113, 6, 'public/uploads/galeri/16548366956.jpeg', '2022-06-09 21:51:35', '2022-06-09 21:51:35'),
(114, 6, 'public/uploads/galeri/16548366958.jpeg', '2022-06-09 21:51:35', '2022-06-09 21:51:35'),
(115, 6, 'public/uploads/galeri/16548366959.jpeg', '2022-06-09 21:51:35', '2022-06-09 21:51:35'),
(116, 6, 'public/uploads/galeri/165483669510.jpeg', '2022-06-09 21:51:35', '2022-06-09 21:51:35');

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
(5, 'Kegiatan Mahasiswa', '2022-05-09 19:39:55', '2022-05-09 21:31:27'),
(6, 'Testing', '2022-06-09 21:50:50', '2022-06-09 21:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `info2`
--

CREATE TABLE `info2` (
  `id` bigint(20) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info2`
--

INSERT INTO `info2` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/info/16548758071652157112Kegiatan Mahasiswa (13).jpeg', '2022-06-10 15:43:27', '2022-06-10 08:43:27');

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
(47, '2022_06_10_174907_create_filelains_table', 38);

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
(3, 'PENTING', '<ol><li>membuat input tanpa refresh</li><li>membuat desain prosedur sertifikasi</li><li>ajax provinsi-kabupaten<br></li></ol>', '2022-05-09 11:32:33', '2022-05-09 11:37:16'),
(4, 'BUG WEB', '<ol><li>Konversi ke pdf</li><li>Create backup data sertifikat</li><li>Create Format Formulir</li><li>Update password user dan admin</li><li>Validation API<br></li><li>Design banner</li><li>Fitur Filter</li><li>Verifikasi login melalui email<br></li></ol>', '2022-05-29 03:07:30', '2022-06-11 12:35:10');

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
(20, '-', 'Junior Graphic Designer', 13, 1, 29, 1, '2022-05-11 12:28:43', '2022-06-11 08:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `skknis`
--

CREATE TABLE `skknis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, NULL, 'public/uploads/strorg/1649792551Struktur LSP_1.jpg', '2022-06-11 09:08:05', '2022-06-11 16:08:05');

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
  `image` varchar(255) DEFAULT NULL,
  `pengelola` varchar(255) NOT NULL,
  `tuk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `kode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuk`
--

INSERT INTO `tuk` (`id`, `image`, `pengelola`, `tuk`, `alamat`, `updated_at`, `created_at`, `kode`) VALUES
(1, 'public/uploads/asesor/1654176913Screenshot (66).png', '', '-', NULL, '2022-06-09 15:43:03.180584', '2022-06-09 15:43:03.180584', ''),
(13, 'public/uploads/asesor/1654176913Screenshot (66).png', 'erwerwerwer', 'Lab Bengkel Mesin', '-', '2022-06-09 10:54:31.432727', '2022-06-09 10:54:31.432727', ''),
(14, 'public/uploads/pengelola/1654167630Screenshot (67).png', 'gsdfgsdfg1212', 'LAB KIMIA2', 'dfsdfsdfsdfsdf1212', '2022-06-02 04:00:30.000000', '2022-06-02 11:00:30.028158', ''),
(15, 'public/uploads/pengelola/1654792126lsp-11.png', '234234234234234', 'Lab Bengkel Mesin', 'Ketapang, Kalimantan Barat', '2022-06-09 09:34:27.000000', '2022-06-09 16:34:27.951103', 'dffdgffrg/43423423/asdasdasdasd');

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
(116, 'J.620100.025.02', 20, 'Melakukan Debugging', '2022-05-11 13:08:18', '2022-05-11 13:08:18', NULL),
(117, '423423', 19, 'wefwfwf', '2022-06-11 04:23:27', '2022-06-11 04:23:27', NULL),
(118, '4324', 19, '341234', '2022-06-11 04:23:31', '2022-06-11 04:23:31', NULL),
(119, '231231', 18, 'nq', '2022-06-11 04:24:21', '2022-06-11 04:24:21', NULL),
(120, 'as', 17, 'asu', '2022-06-11 05:17:04', '2022-06-11 05:17:04', NULL),
(121, 'asu', 17, 'asu', '2022-06-11 05:17:12', '2022-06-11 05:17:12', NULL);

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
(1, 'Administrator', 'Admin LSP-POLITAP', 'admin', 0, '1998-08-27', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 82150040132, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1650562518lsp.png', NULL, 3, 3, NULL, 'y0OWD04lYpTu445zymRRL0lTdUebdJjufJNBxhJRYMvflkhSe2k35aSnP7NJ', '$2y$10$.77uDWW0GccOEAmSygpKbegD0rupPTlKLd/Tivp2/BHEP8acP/lD.', NULL, NULL, NULL, '2022-03-31 01:01:51', '2022-05-09 07:00:10', NULL, NULL, 'sdfsd@fsdfsdfsdf', 'fsdgdfsdf'),
(25, NULL, 'Dwi Ramadhani2', '3042020057', NULL, '1995-05-17', '1', 'Indonesia', 'BTN Puri Nirwana', NULL, 81256390908, NULL, NULL, NULL, NULL, NULL, 'public/uploads/beranda_img2/1652287117photo.png', NULL, 4, 4, NULL, NULL, '$2y$10$ZF9y04L.RUIsE60DjwV0C.Ss3KFMk5VAi9xp2TjYospzqYXImBEPO', NULL, NULL, NULL, '2022-05-11 09:37:32', '2022-06-11 01:58:38', NULL, NULL, 'dwi222@gmail.com', 'Ketapang'),
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
-- Indexes for table `banner`
--
ALTER TABLE `banner`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beranda_img1`
--
ALTER TABLE `beranda_img1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `beranda_img2`
--
ALTER TABLE `beranda_img2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- AUTO_INCREMENT for table `fileapl2s`
--
ALTER TABLE `fileapl2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filelains`
--
ALTER TABLE `filelains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `f_profil`
--
ALTER TABLE `f_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `group_galeris`
--
ALTER TABLE `group_galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `kknis`
--
ALTER TABLE `kknis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `skknis`
--
ALTER TABLE `skknis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `unikoms`
--
ALTER TABLE `unikoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `xnxxes`
--
ALTER TABLE `xnxxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=795;

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
