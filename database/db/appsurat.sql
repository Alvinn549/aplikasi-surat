-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2022 at 12:36 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dusuns`
--

CREATE TABLE `dusuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dusuns`
--

INSERT INTO `dusuns` (`id`, `nama_dusun`, `created_at`, `updated_at`) VALUES
(1, 'nesciunt', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(2, 'dolorum', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(3, 'dolore', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(4, 'recusandae', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(5, 'unde', '2022-08-14 12:32:05', '2022-08-14 12:32:05');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(5, '2022_08_13_034320_create_penduduks_table', 1),
(6, '2022_08_13_105509_create_dusuns_table', 1),
(7, '2022_08_13_105604_create_rws_table', 1),
(8, '2022_08_13_105719_create_rts_table', 1),
(9, '2022_08_13_211203_create_profil_desas_table', 1),
(10, '2022_08_14_065203_create_surats_table', 1);

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
-- Table structure for table `penduduks`
--

CREATE TABLE `penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rw_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rt_id` bigint(20) UNSIGNED DEFAULT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_dalam_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduks`
--

INSERT INTO `penduduks` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `dusun_id`, `rw_id`, `rt_id`, `alamat_lengkap`, `kebangsaan`, `agama`, `pekerjaan`, `status_perkawinan`, `pendidikan_dalam_kk`, `created_at`, `updated_at`) VALUES
(1, '3318250306936316', 'Kairav Zulkarnain', 'Makassar', '2014-03-15', '8', 'Perempuan', 5, 1, 2, 'Jr. Labu No. 604, Palembang 11496, Kaltara', 'Sulawesi Selatan', 'Budha', 'Buruh', 'Lajang', 'SD', '2022-08-14 12:32:05', '2022-08-14 12:32:07'),
(2, '1209394406046440', 'Wawan Maman Firgantoro S.T.', 'Sabang', '2022-05-08', '0', 'Laki-Laki', 1, 1, 3, 'Dk. Wahidin No. 755, Administrasi Jakarta Selatan 48783, NTT', 'Nusa Tenggara Timur', 'Hindu', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:05', '2022-08-14 12:32:07'),
(3, '3403035711059503', 'Estiawan Natsir S.Sos', 'Bukittinggi', '1988-03-04', '34', 'Perempuan', 3, 1, 3, 'Jr. Teuku Umar No. 450, Sabang 86429, Sumut', 'Jawa Timur', 'Kristen', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:05', '2022-08-14 12:32:07'),
(4, '3206330911936926', 'Wirda Novitasari', 'Pontianak', '2007-08-24', '14', 'Laki-Laki', 5, 1, 3, 'Ds. Asia Afrika No. 187, Bitung 10235, Sultra', 'Aceh', 'Islam', 'Petani', 'Lajang', 'SMA Sederajat', '2022-08-14 12:32:05', '2022-08-14 12:32:07'),
(5, '3201412110003302', 'Malika Ida Farida', 'Bau-Bau', '1980-08-19', '41', 'Laki-Laki', 1, 3, 2, 'Psr. Raden No. 82, Dumai 81953, Maluku', 'Maluku', 'Konghuchu', 'Pegawai', 'Lajang', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(6, '3572746105968968', 'Reksa Jarwa Prasetya S.E.I', 'Cilegon', '1990-05-11', '32', 'Perempuan', 2, 2, 2, 'Jln. Wahid No. 851, Prabumulih 67682, Kaltara', 'Aceh', 'Hindu', 'Buruh', 'Menikah', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(7, '3403165008128465', 'Nasim Embuh Waluyo', 'Banda Aceh', '2013-06-13', '9', 'Perempuan', 2, 1, 1, 'Jln. Otto No. 418, Yogyakarta 13769, Bali', 'Sulawesi Barat', 'Hindu', 'Pegawai', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(8, '1704066802044590', 'Rini Ani Mardhiyah', 'Batu', '1995-03-16', '27', 'Laki-Laki', 2, 2, 2, 'Ds. Kusmanto No. 641, Sawahlunto 86445, Babel', 'Maluku Utara', 'Islam', 'Petani', 'Menikah', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(9, '3513800805949938', 'Jabal Pangestu', 'Padang', '1998-12-10', '23', 'Perempuan', 4, 1, 1, 'Jr. Merdeka No. 331, Palangka Raya 92424, Bengkulu', 'Kalimantan Utara', 'Islam', 'Buruh', 'Lajang', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(10, '1607166101996326', 'Michelle Aryani', 'Tual', '2002-10-23', '19', 'Perempuan', 5, 1, 1, 'Jr. Dago No. 635, Sabang 25334, Sulsel', 'DKI Jakarta', 'Khatolik', 'Pegawai', 'Lajang', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(11, '3579883103985693', 'Wahyu Raden Maulana', 'Denpasar', '1996-04-20', '26', 'Laki-Laki', 2, 2, 2, 'Jr. Gajah No. 867, Metro 11203, Sulteng', 'Jawa Tengah', 'Hindu', 'Petani', 'Lajang', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(12, '5308475901965528', 'Yulia Namaga', 'Pagar Alam', '1994-10-31', '27', 'Perempuan', 4, 3, 1, 'Psr. Taman No. 446, Pontianak 12195, Maluku', 'Kalimantan Timur', 'Konghuchu', 'Petani', 'Lajang', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(13, '3301565007993409', 'Mariadi Gatot Habibi', 'Serang', '2016-07-15', '6', 'Perempuan', 1, 2, 2, 'Psr. Wora Wari No. 725, Jambi 40509, DKI', 'Sulawesi Tenggara', 'Islam', 'Buruh', 'Menikah', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(14, '7201084807053023', 'Irnanto Sirait', 'Sukabumi', '2002-08-03', '20', 'Laki-Laki', 5, 2, 2, 'Dk. Gremet No. 769, Administrasi Jakarta Selatan 92206, DIY', 'Papua Barat', 'Kristen', 'Petani', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(15, '1401094611080344', 'Bella Hastuti', 'Sorong', '2014-09-24', '7', 'Perempuan', 2, 1, 3, 'Psr. Barasak No. 332, Metro 40825, Maluku', 'Papua', 'Islam', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(16, '1272642911069289', 'Ajimin Kurniawan M.Farm', 'Balikpapan', '1999-02-26', '23', 'Laki-Laki', 3, 2, 3, 'Ki. Hang No. 898, Palu 13349, Banten', 'Jawa Barat', 'Khatolik', 'Buruh', 'Lajang', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(17, '7202765411058754', 'Laila Fujiati', 'Administrasi Jakarta Pusat', '1981-12-04', '40', 'Perempuan', 4, 2, 1, 'Jr. Cikapayang No. 202, Magelang 99110, Jatim', 'Jawa Tengah', 'Konghuchu', 'Buruh', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(18, '3519372506209916', 'Shakila Wulandari', 'Surakarta', '2001-04-27', '21', 'Laki-Laki', 2, 2, 3, 'Ds. Peta No. 265, Tangerang 11239, DIY', 'Kepulauan Bangka Belitung', 'Kristen', 'Pegawai', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:07'),
(19, '3578622612960064', 'Kacung Nainggolan', 'Administrasi Jakarta Selatan', '1994-09-21', '27', 'Laki-Laki', 5, 3, 2, 'Ki. Achmad Yani No. 252, Pariaman 23666, Sulteng', 'Jawa Barat', 'Budha', 'Petani', 'Lajang', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(20, '8105670606977689', 'Agnes Nasyidah S.Sos', 'Kendari', '1976-09-29', '45', 'Laki-Laki', 1, 2, 2, 'Jr. Salatiga No. 600, Mojokerto 96536, NTT', 'Sulawesi Tengah', 'Hindu', 'Buruh', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(21, '5204950107948521', 'Dina Nasyiah', 'Singkawang', '2019-07-07', '3', 'Laki-Laki', 1, 3, 2, 'Jr. Bayan No. 716, Bima 93161, Sulsel', 'Kalimantan Utara', 'Hindu', 'Petani', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(22, '1308440511099540', 'Malik Dongoran', 'Pariaman', '1998-04-06', '24', 'Laki-Laki', 1, 1, 3, 'Kpg. Kusmanto No. 35, Sorong 39306, Malut', 'Riau', 'Hindu', 'Buruh', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(23, '1572110612042161', 'Banawa Kenes Megantara M.Pd', 'Depok', '1996-07-05', '26', 'Perempuan', 4, 3, 1, 'Ds. Monginsidi No. 309, Administrasi Jakarta Utara 82220, Jambi', 'DI Yogyakarta', 'Budha', 'Petani', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(24, '6501763012164196', 'Violet Pertiwi', 'Kupang', '1981-12-08', '40', 'Perempuan', 3, 1, 3, 'Dk. Cikutra Barat No. 868, Salatiga 81918, Bengkulu', 'Kepulauan Riau', 'Budha', 'Pegawai', 'Lajang', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(25, '1501701508137162', 'Galur Estiawan Manullang M.Farm', 'Administrasi Jakarta Utara', '1990-11-25', '31', 'Laki-Laki', 3, 2, 3, 'Jln. Sam Ratulangi No. 759, Batam 33094, NTT', 'Riau', 'Khatolik', 'Pegawai', 'Lajang', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(26, '3674021912160359', 'Citra Fitriani Wahyuni', 'Denpasar', '1986-02-02', '36', 'Perempuan', 5, 3, 1, 'Ds. Bakit  No. 386, Sibolga 28655, DIY', 'Kepulauan Riau', 'Khatolik', 'Pegawai', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(27, '9271536006068353', 'Puput Utami S.E.', 'Administrasi Jakarta Selatan', '1996-01-04', '26', 'Laki-Laki', 3, 2, 3, 'Psr. Baing No. 853, Banjarmasin 89113, Sultra', 'Sumatera Barat', 'Khatolik', 'Buruh', 'Lajang', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(28, '3376156901110169', 'Pangestu Naradi Sihombing', 'Mojokerto', '1991-06-13', '31', 'Perempuan', 4, 2, 1, 'Kpg. Salak No. 489, Pariaman 48488, Sumbar', 'Sulawesi Barat', 'Kristen', 'Petani', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(29, '6401604205128658', 'Caturangga Irawan', 'Padangsidempuan', '1993-08-13', '29', 'Laki-Laki', 1, 1, 1, 'Jr. Suprapto No. 937, Pematangsiantar 51526, Jabar', 'Jawa Barat', 'Khatolik', 'Pegawai', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(30, '8271091012066460', 'Sari Winda Lestari M.TI.', 'Yogyakarta', '2017-07-26', '5', 'Laki-Laki', 3, 2, 2, 'Dk. Flores No. 497, Pagar Alam 78686, Maluku', 'Kalimantan Tengah', 'Hindu', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(31, '7111934912021157', 'Hasna Safitri', 'Bandar Lampung', '1999-10-04', '22', 'Laki-Laki', 2, 2, 3, 'Ds. Jaksa No. 92, Subulussalam 58746, Sulbar', 'Kalimantan Barat', 'Khatolik', 'Buruh', 'Menikah', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(32, '1308645309978132', 'Febi Mandasari M.Ak', 'Tarakan', '2005-08-09', '17', 'Perempuan', 5, 3, 2, 'Psr. Madrasah No. 313, Bukittinggi 16243, Banten', 'Jawa Tengah', 'Budha', 'Pegawai', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(33, '7503225309004081', 'Hilda Hasanah S.E.I', 'Sungai Penuh', '1978-02-27', '44', 'Laki-Laki', 4, 1, 2, 'Dk. Dr. Junjunan No. 986, Pematangsiantar 25519, Sumsel', 'Papua', 'Kristen', 'Pegawai', 'Lajang', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(34, '5306874306945082', 'Satya Siregar', 'Pasuruan', '2008-08-30', '13', 'Perempuan', 2, 1, 1, 'Ds. Padang No. 566, Dumai 71929, Bali', 'Jawa Timur', 'Hindu', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(35, '6501111911015066', 'Liman Tampubolon', 'Palangka Raya', '1971-04-07', '51', 'Perempuan', 3, 1, 1, 'Psr. Urip Sumoharjo No. 492, Sungai Penuh 32022, Sulsel', 'Riau', 'Budha', 'Buruh', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(36, '7503454801229115', 'Queen Silvia Yulianti', 'Semarang', '2017-02-25', '5', 'Perempuan', 2, 1, 2, 'Jr. Sam Ratulangi No. 480, Blitar 20392, Kalsel', 'Jambi', 'Hindu', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(37, '3602190906125013', 'Vivi Zelaya Hassanah', 'Pematangsiantar', '2001-06-21', '21', 'Perempuan', 2, 1, 3, 'Dk. Raden Saleh No. 441, Mataram 79236, Maluku', 'Kalimantan Selatan', 'Hindu', 'Pegawai', 'Lajang', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(38, '6503086109107226', 'Wardaya Rafid Situmorang M.Farm', 'Bandar Lampung', '1971-02-04', '51', 'Perempuan', 5, 3, 3, 'Kpg. Supono No. 130, Prabumulih 12547, Riau', 'Kalimantan Tengah', 'Kristen', 'Petani', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(39, '1613984708953404', 'Opan Hakim', 'Manado', '1974-05-27', '48', 'Perempuan', 1, 1, 3, 'Ds. Sukajadi No. 576, Bengkulu 57233, Babel', 'Kepulauan Bangka Belitung', 'Kristen', 'Petani', 'Menikah', 'SMA Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(40, '6304472608986599', 'Karen Devi Puspita M.M.', 'Tebing Tinggi', '2004-05-08', '18', 'Laki-Laki', 2, 2, 3, 'Dk. Panjaitan No. 257, Padangsidempuan 75037, Jatim', 'Kalimantan Timur', 'Kristen', 'Pegawai', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(41, '1216076706995378', 'Yuni Wahyuni', 'Tarakan', '2020-08-31', '1', 'Perempuan', 1, 1, 1, 'Jr. Cokroaminoto No. 270, Singkawang 10774, Sulbar', 'Sulawesi Utara', 'Budha', 'Pegawai', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(42, '1213901309093534', 'Uda Ardianto', 'Tegal', '1982-01-17', '40', 'Laki-Laki', 2, 2, 3, 'Ki. Orang No. 540, Bekasi 50380, DKI', 'Kalimantan Barat', 'Khatolik', 'Buruh', 'Lajang', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(43, '8171122609071141', 'Prayogo Uwais S.Gz', 'Kediri', '2016-10-07', '5', 'Laki-Laki', 1, 2, 2, 'Jln. Dago No. 64, Banjarmasin 52354, Riau', 'Maluku Utara', 'Hindu', 'Buruh', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(44, '1171676908014596', 'Irnanto Haryanto', 'Malang', '2012-01-04', '10', 'Perempuan', 2, 3, 1, 'Jr. Bakti No. 44, Payakumbuh 56459, Kalteng', 'Papua Barat', 'Khatolik', 'Buruh', 'Lajang', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(45, '3315361401172794', 'Hasna Ghaliyati Utami', 'Bandar Lampung', '1974-03-12', '48', 'Perempuan', 4, 3, 1, 'Jln. Surapati No. 551, Padang 90277, Jatim', 'Kepulauan Riau', 'Islam', 'Buruh', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(46, '1603522501129087', 'Agus Maryadi Mangunsong', 'Administrasi Jakarta Barat', '1980-04-27', '42', 'Laki-Laki', 4, 1, 1, 'Jr. Bata Putih No. 773, Jambi 56743, Babel', 'DKI Jakarta', 'Hindu', 'Buruh', 'Menikah', 'S1 Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:08'),
(47, '1409784911044710', 'Chelsea Andriani S.E.', 'Palembang', '2012-07-21', '10', 'Perempuan', 1, 2, 2, 'Jln. Dahlia No. 922, Blitar 15739, Babel', 'Bali', 'Islam', 'Buruh', 'Menikah', 'SD', '2022-08-14 12:32:06', '2022-08-14 12:32:09'),
(48, '3326795909136216', 'Nabila Ophelia Wastuti', 'Banjar', '2004-04-20', '18', 'Laki-Laki', 4, 1, 1, 'Ki. Muwardi No. 204, Sibolga 16616, DIY', 'Lampung', 'Khatolik', 'Petani', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:06', '2022-08-14 12:32:09'),
(49, '6407300703998409', 'Jaeman Sihombing', 'Pematangsiantar', '2004-04-02', '18', 'Laki-Laki', 1, 3, 2, 'Jr. Wahidin No. 832, Kotamobagu 50405, Sumut', 'Papua', 'Khatolik', 'Buruh', 'Menikah', 'SMP Sederajat', '2022-08-14 12:32:07', '2022-08-14 12:32:09'),
(50, '7171497103010020', 'Dina Agustina S.I.Kom', 'Kupang', '2018-02-19', '4', 'Laki-Laki', 2, 1, 3, 'Gg. Jakarta No. 531, Pariaman 23620, Maluku', 'Sumatera Selatan', 'Kristen', 'Petani', 'Lajang', 'SMA Sederajat', '2022-08-14 12:32:07', '2022-08-14 12:32:09');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_desas`
--

CREATE TABLE `profil_desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kantor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepala_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_desas`
--

INSERT INTO `profil_desas` (`id`, `nama_desa`, `email_desa`, `alamat_kantor`, `nomor_surat`, `nama_kepala_desa`, `telp`, `website_desa`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Semanten', 'semanten@gmail.com', 'Semanten, Kec Pacitan', '1241', 'Syariffudin Hidayat', '089696764576', 'semanten.pacitankab.go.id', NULL, '2022-08-14 12:32:05', '2022-08-14 12:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `rts`
--

CREATE TABLE `rts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rts`
--

INSERT INTO `rts` (`id`, `nama_rt`, `rw_id`, `created_at`, `updated_at`) VALUES
(1, 'quibusdam', 1, '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(2, 'neque', 3, '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(3, 'ullam', 3, '2022-08-14 12:32:05', '2022-08-14 12:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `rws`
--

CREATE TABLE `rws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rws`
--

INSERT INTO `rws` (`id`, `nama_rw`, `dusun_id`, `created_at`, `updated_at`) VALUES
(1, 'vel', 4, '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(2, 'ut', 2, '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(3, 'tenetur', 3, '2022-08-14 12:32:05', '2022-08-14 12:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penduduk_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_kk_pengaju` bigint(20) UNSIGNED NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perkiraan_waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perkiraan_tempat_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berlaku_selama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dikeluarkan_di` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pada_tanggal` date NOT NULL,
  `saksi_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_saksi_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saksi_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_saksi_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'menunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `email_verified_at`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Pertama', 'Admin1', 'admin1@gmail.com', '$2y$10$oIaI8p09jr8QPB.qKjMisuHIGbJ0ryzOQQdJaodTUkavahLBd0c7G', NULL, 'admin', NULL, '2022-08-14 12:32:00', '2022-08-14 12:32:00'),
(2, 'User Pertama', 'User1', 'user1@gmail.com', '$2y$10$6rs8PGuj1FS.s7KvXkBohOzwg.CxKkEsDXaPgxBldnq2FmgWe.oiO', NULL, 'kepala_desa', NULL, '2022-08-14 12:32:00', '2022-08-14 12:32:00'),
(3, 'Sakura Rahmawati M.M.', 'Tira Prastuti S.Sos', 'samsul.situmorang@example.net', '$2y$10$2Vcpovf.XhVouISugan92.u0Pz/3/yPJ7hNi1yuDq.oPSw/xIx5yq', '2022-08-14 12:32:01', 'user', 'CsQKyKtm3q', '2022-08-14 12:32:04', '2022-08-14 12:32:04'),
(4, 'Ibrani Pranawa Mansur', 'Keisha Rachel Riyanti', 'budiyanto.salwa@example.org', '$2y$10$gPqRu40mHK/m3D22KQxieejqgE8BDa1vngS3DqIoHmX5PA.u4nl.6', '2022-08-14 12:32:01', 'user', 'pmSzrUNPBA', '2022-08-14 12:32:04', '2022-08-14 12:32:04'),
(5, 'Gawati Utami', 'Wirda Lidya Maryati S.Pd', 'jarwi17@example.com', '$2y$10$ZeNK75Is/6Ick4IVTiechuleLQOWtZfS8fPCo1utxa.3ToEcgHxri', '2022-08-14 12:32:02', 'user', 'pqwIat6rf6', '2022-08-14 12:32:04', '2022-08-14 12:32:04'),
(6, 'Latika Pertiwi', 'Gada Winarno', 'hhandayani@example.com', '$2y$10$tRbsNvcZCZvDDKjV7G7KG.Z49qDP7XTiKn.XBcrAO9DyiiGjkUvmu', '2022-08-14 12:32:02', 'user', 'dgIN5eYQ8u', '2022-08-14 12:32:04', '2022-08-14 12:32:04'),
(7, 'Gading Nashiruddin', 'Raharja Bahuraksa Pradipta M.Farm', 'nainggolan.rangga@example.org', '$2y$10$KcJkwxsH9IZqNtxxTktD/eMezzNIJocHWLEdx56GyGIOn/yNB2Gk.', '2022-08-14 12:32:02', 'admin', 'k6EE9mTeBN', '2022-08-14 12:32:04', '2022-08-14 12:32:04'),
(8, 'Lintang Astuti', 'Martani Marbun', 'vsiregar@example.org', '$2y$10$ZaR7v/0XLZvAd8i/3eeTyeMlgshEFHffYyXfP0wokce8ABVqyq6BK', '2022-08-14 12:32:03', 'admin', 'kgGCMcuFfY', '2022-08-14 12:32:04', '2022-08-14 12:32:04'),
(9, 'Oman Wijaya', 'Surya Sirait S.Gz', 'hakim.bahuraksa@example.com', '$2y$10$vvYV3BW.jYK601UF6zuB5OIu.vpNayxcpMkkFg/09Z2tkk8aVDTxG', '2022-08-14 12:32:03', 'user', 'riheMNZy0F', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(10, 'Koko Kuswoyo S.Sos', 'Gina Lalita Haryanti', 'cemplunk.wasita@example.com', '$2y$10$GjvUl1wY0te.5EX5kuWpSemItBR6cS7lgdIJ5ScBNmtu4y/6kBHPi', '2022-08-14 12:32:04', 'user', 'uK372wbwjI', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(11, 'Sadina Rahayu', 'Martaka Putra', 'azalea35@example.net', '$2y$10$nodpXfluTRoi4fIZC/e9KeFNnk1GjeMWeMTg1aInuGOwol43mrryq', '2022-08-14 12:32:04', 'user', 'Gra8UyHlCQ', '2022-08-14 12:32:05', '2022-08-14 12:32:05'),
(12, 'Yuni Purwanti', 'Belinda Wirda Wulandari S.IP', 'tpurnawati@example.org', '$2y$10$uUfS9M5XAGnDPXTwsvrI.O/JHmKmXMEeJAeYjx4dojCoyoMhT7PZS', '2022-08-14 12:32:04', 'admin', 't8MHNGDxpM', '2022-08-14 12:32:05', '2022-08-14 12:32:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dusuns`
--
ALTER TABLE `dusuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil_desas`
--
ALTER TABLE `profil_desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rts`
--
ALTER TABLE `rts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rws`
--
ALTER TABLE `rws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dusuns`
--
ALTER TABLE `dusuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_desas`
--
ALTER TABLE `profil_desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rts`
--
ALTER TABLE `rts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rws`
--
ALTER TABLE `rws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
