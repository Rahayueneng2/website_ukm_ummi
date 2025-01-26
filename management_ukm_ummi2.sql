-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2025 at 07:30 AM
-- Server version: 11.1.2-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_ukm_ummi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `ukm_id` bigint(20) UNSIGNED NOT NULL,
  `ukm_name` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `ukm_id`, `ukm_name`, `name`, `prodi_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Rantika Salsabila', 1, 10, '2025-01-25 21:49:24', '2025-01-25 21:49:24'),
(2, 1, '', 'Cantika', 2, 12, '2025-01-25 21:50:09', '2025-01-25 21:50:09'),
(3, 1, '', 'Tanaya', 3, 14, '2025-01-25 21:50:32', '2025-01-25 21:50:32'),
(4, 1, '', 'Caca', 4, 9, '2025-01-25 21:51:05', '2025-01-25 21:51:05'),
(5, 2, '', 'Ismi', 5, 11, '2025-01-25 21:52:21', '2025-01-25 21:52:21'),
(6, 2, '', 'Natya', 6, 13, '2025-01-25 21:52:49', '2025-01-25 21:52:49'),
(7, 1, '', 'Andri', 9, 15, '2025-01-25 21:53:10', '2025-01-25 21:53:10'),
(8, 3, '', 'Teguh', 14, 13, '2025-01-25 21:53:43', '2025-01-25 21:53:43'),
(9, 3, '', 'Revi', 7, 11, '2025-01-25 21:54:15', '2025-01-25 21:54:15'),
(10, 3, '', 'Rio', 16, 13, '2025-01-25 21:55:28', '2025-01-25 21:55:28'),
(11, 4, '', 'Raya', 11, 13, '2025-01-25 21:56:15', '2025-01-25 21:56:15'),
(12, 5, '', 'Citra', 13, 11, '2025-01-25 21:56:48', '2025-01-25 21:56:48'),
(13, 5, '', 'Febri', 12, 9, '2025-01-25 21:57:19', '2025-01-25 21:57:19'),
(14, 5, '', 'Natasya', 45, 9, '2025-01-25 21:57:42', '2025-01-25 21:57:42'),
(15, 5, '', 'Fadil', 10, 11, '2025-01-25 21:58:16', '2025-01-25 21:58:16'),
(16, 5, '', 'Raditya', 43, 13, '2025-01-25 21:58:43', '2025-01-25 21:58:43'),
(17, 5, '', 'Rehan', 34, 11, '2025-01-25 21:59:25', '2025-01-25 21:59:25'),
(18, 6, '', 'Maria', 44, 9, '2025-01-25 22:00:07', '2025-01-25 22:00:07'),
(19, 6, '', 'Haikal', 42, 11, '2025-01-25 22:00:47', '2025-01-25 22:00:47'),
(20, 6, '', 'Dani', 42, 11, '2025-01-25 22:01:13', '2025-01-25 22:01:13'),
(21, 6, '', 'Indriyani', 46, 13, '2025-01-25 22:01:48', '2025-01-25 22:01:48'),
(22, 7, '', 'Farhan', 40, 15, '2025-01-25 22:03:15', '2025-01-25 22:03:15'),
(23, 7, '', 'Irez', 38, 13, '2025-01-25 22:03:44', '2025-01-25 22:03:44'),
(24, 7, '', 'Arman', 34, 11, '2025-01-25 22:04:18', '2025-01-25 22:04:18'),
(25, 7, '', 'Dian', 8, 9, '2025-01-25 22:04:58', '2025-01-25 22:04:58'),
(26, 7, '', 'Meitia', 4, 9, '2025-01-25 22:05:23', '2025-01-25 22:05:23'),
(27, 7, '', 'Rafi', 35, 11, '2025-01-25 22:05:58', '2025-01-25 22:05:58'),
(28, 7, '', 'Davin', 28, 1, '2025-01-25 22:07:04', '2025-01-25 22:07:04'),
(29, 7, '', 'Nina', 6, 15, '2025-01-25 22:07:39', '2025-01-25 22:07:39'),
(30, 7, '', 'Firhan', 2, 13, '2025-01-25 22:08:11', '2025-01-25 22:08:11'),
(31, 8, '', 'Intan', 1, 1, '2025-01-25 22:09:24', '2025-01-25 22:09:24'),
(32, 8, '', 'Sindi', 2, 11, '2025-01-25 22:09:59', '2025-01-25 22:09:59'),
(33, 8, '', 'Rafael', 2, 13, '2025-01-25 22:10:52', '2025-01-25 22:10:52'),
(34, 8, '', 'Nabila', 3, 13, '2025-01-25 22:11:24', '2025-01-25 22:11:24'),
(35, 8, '', 'Rizki', 4, 15, '2025-01-25 22:12:07', '2025-01-25 22:12:07'),
(36, 8, '', 'Aruna', 7, 7, '2025-01-25 22:12:33', '2025-01-25 22:12:33'),
(37, 8, '', 'Yesi', 13, 13, '2025-01-25 22:13:00', '2025-01-25 22:13:00'),
(38, 8, '', 'Nana', 11, 11, '2025-01-25 22:13:45', '2025-01-25 22:13:45'),
(39, 8, '', 'Faisal', 12, 9, '2025-01-25 22:14:29', '2025-01-25 22:14:29'),
(40, 8, '', 'Rani', 1, 13, '2025-01-25 22:15:03', '2025-01-25 22:15:03'),
(41, 8, '', 'Geri', 44, 11, '2025-01-25 22:15:29', '2025-01-25 22:15:29'),
(42, 8, '', 'Arya', 10, 9, '2025-01-25 22:16:10', '2025-01-25 22:16:10'),
(43, 8, '', 'Ilyasa', 38, 11, '2025-01-25 22:16:37', '2025-01-25 22:16:37'),
(44, 8, '', 'Ghani', 4, 11, '2025-01-25 22:17:29', '2025-01-25 22:17:29'),
(45, 8, '', 'Daffa', 40, 9, '2025-01-25 22:18:06', '2025-01-25 22:18:06'),
(46, 9, '', 'Riri', 39, 15, '2025-01-25 22:18:51', '2025-01-25 22:18:51'),
(47, 9, '', 'Bagas', 46, 9, '2025-01-25 22:19:36', '2025-01-25 22:19:36'),
(48, 9, '', 'Rifal', 45, 11, '2025-01-25 22:20:01', '2025-01-25 22:20:01'),
(49, 9, '', 'Regina', 42, 13, '2025-01-25 22:20:54', '2025-01-25 22:20:54'),
(50, 9, '', 'feby', 25, 13, '2025-01-25 22:21:20', '2025-01-25 22:21:20'),
(51, 9, '', 'Rizkita', 32, 11, '2025-01-25 22:22:15', '2025-01-25 22:22:15'),
(52, 9, '', 'Nazmi', 1, 9, '2025-01-25 22:22:45', '2025-01-25 22:22:45'),
(53, 10, '', 'Azkiya', 1, 9, '2025-01-25 22:23:49', '2025-01-25 22:23:49'),
(54, 10, '', 'Awal', 9, 11, '2025-01-25 22:24:14', '2025-01-25 22:24:14'),
(55, 10, '', 'Agung', 4, 13, '2025-01-25 22:24:43', '2025-01-25 22:24:43'),
(56, 10, '', 'Arkana', 10, 15, '2025-01-25 22:25:16', '2025-01-25 22:25:16'),
(57, 10, '', 'fadilla', 12, 15, '2025-01-25 22:25:54', '2025-01-25 22:25:54'),
(58, 10, '', 'Rizal', 4, 9, '2025-01-25 22:26:26', '2025-01-25 22:26:26'),
(59, 10, '', 'Abda', 9, 13, '2025-01-25 22:26:56', '2025-01-25 22:26:56'),
(60, 10, '', 'Mugni', 42, 15, '2025-01-25 22:27:35', '2025-01-25 22:27:35'),
(61, 10, '', 'Lutfi', 43, 13, '2025-01-25 22:28:09', '2025-01-25 22:28:09'),
(62, 10, '', 'Ramli', 37, 11, '2025-01-25 22:29:19', '2025-01-25 22:29:19'),
(63, 11, '', 'rere', 11, 13, '2025-01-25 22:30:46', '2025-01-25 22:30:46'),
(64, 12, '', 'tita', 13, 15, '2025-01-25 22:31:44', '2025-01-25 22:31:44'),
(65, 13, '', 'fifah', 1, 3, '2025-01-25 22:32:02', '2025-01-25 22:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_14_182459_create_ukms_table', 1),
(6, '2025_01_14_182507_create_prodis_table', 1),
(7, '2025_01_14_182515_create_semesters_table', 1),
(8, '2025_01_14_182524_create_members_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `prodi_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`prodi_id`, `prodi_name`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '2025-01-25 20:54:40', NULL),
(2, 'Teknik Sipil', '2025-01-25 20:54:40', NULL),
(3, 'Kimia', '2025-01-25 20:54:40', NULL),
(4, 'Pendidikan Teknologi Informasi', '2025-01-25 20:54:40', NULL),
(5, 'Pendidikan Bahasa Indonesia', '2025-01-25 20:54:40', NULL),
(6, 'Pendidikan Biologi', '2025-01-25 20:54:40', NULL),
(7, 'Pendidikan Guru PAUD', '2025-01-25 20:54:40', NULL),
(8, 'Pendidikan Guru SD', '2025-01-25 20:54:40', NULL),
(9, 'PJKR', '2025-01-25 20:54:40', NULL),
(10, 'Pendidikan Matematika', '2025-01-25 20:54:40', NULL),
(11, 'Akuntansi', '2025-01-25 20:54:40', NULL),
(12, 'Manajemen Ritel', '2025-01-25 20:54:40', NULL),
(13, 'D3 Perpajakan', '2025-01-25 20:54:40', NULL),
(14, 'Administrasi Bisnis', '2025-01-25 20:54:40', NULL),
(15, 'Administrasi Publik', '2025-01-25 20:54:40', NULL),
(16, 'Hubungan Masyarakat', '2025-01-25 20:54:40', NULL),
(17, 'Sastra Inggris', '2025-01-25 20:54:40', NULL),
(18, 'Magister Ilmu Administrasi', '2025-01-25 20:54:40', NULL),
(19, 'Agribisnis', '2025-01-25 20:54:40', NULL),
(20, 'Akuakultur', '2025-01-25 20:54:40', NULL),
(21, 'Ilmu Hukum', '2025-01-25 20:54:40', NULL),
(22, 'D3 Keperawatan', '2025-01-25 20:54:40', NULL),
(23, 'S1 Keperawatan dan Profesi Ners', '2025-01-25 20:54:40', NULL),
(24, 'Teknik Informatika', '2025-01-25 20:54:46', NULL),
(25, 'Teknik Sipil', '2025-01-25 20:54:46', NULL),
(26, 'Kimia', '2025-01-25 20:54:46', NULL),
(27, 'Pendidikan Teknologi Informasi', '2025-01-25 20:54:46', NULL),
(28, 'Pendidikan Bahasa Indonesia', '2025-01-25 20:54:46', NULL),
(29, 'Pendidikan Biologi', '2025-01-25 20:54:46', NULL),
(30, 'Pendidikan Guru PAUD', '2025-01-25 20:54:46', NULL),
(31, 'Pendidikan Guru SD', '2025-01-25 20:54:46', NULL),
(32, 'PJKR', '2025-01-25 20:54:46', NULL),
(33, 'Pendidikan Matematika', '2025-01-25 20:54:46', NULL),
(34, 'Akuntansi', '2025-01-25 20:54:46', NULL),
(35, 'Manajemen Ritel', '2025-01-25 20:54:46', NULL),
(36, 'D3 Perpajakan', '2025-01-25 20:54:46', NULL),
(37, 'Administrasi Bisnis', '2025-01-25 20:54:46', NULL),
(38, 'Administrasi Publik', '2025-01-25 20:54:46', NULL),
(39, 'Hubungan Masyarakat', '2025-01-25 20:54:46', NULL),
(40, 'Sastra Inggris', '2025-01-25 20:54:46', NULL),
(41, 'Magister Ilmu Administrasi', '2025-01-25 20:54:46', NULL),
(42, 'Agribisnis', '2025-01-25 20:54:46', NULL),
(43, 'Akuakultur', '2025-01-25 20:54:46', NULL),
(44, 'Ilmu Hukum', '2025-01-25 20:54:46', NULL),
(45, 'D3 Keperawatan', '2025-01-25 20:54:46', NULL),
(46, 'S1 Keperawatan dan Profesi Ners', '2025-01-25 20:54:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `semester_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semester_id`, `semester_number`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-01-25 20:54:40', NULL),
(2, 2, '2025-01-25 20:54:40', NULL),
(3, 3, '2025-01-25 20:54:40', NULL),
(4, 4, '2025-01-25 20:54:40', NULL),
(5, 5, '2025-01-25 20:54:40', NULL),
(6, 6, '2025-01-25 20:54:40', NULL),
(7, 7, '2025-01-25 20:54:40', NULL),
(8, 8, '2025-01-25 20:54:40', NULL),
(9, 1, '2025-01-25 20:54:46', NULL),
(10, 2, '2025-01-25 20:54:46', NULL),
(11, 3, '2025-01-25 20:54:46', NULL),
(12, 4, '2025-01-25 20:54:46', NULL),
(13, 5, '2025-01-25 20:54:46', NULL),
(14, 6, '2025-01-25 20:54:46', NULL),
(15, 7, '2025-01-25 20:54:46', NULL),
(16, 8, '2025-01-25 20:54:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ukms`
--

CREATE TABLE `ukms` (
  `ukm_id` bigint(20) UNSIGNED NOT NULL,
  `ukm_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `history` text DEFAULT NULL,
  `social_media` varchar(255) DEFAULT NULL,
  `image_ukm` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukms`
--

INSERT INTO `ukms` (`ukm_id`, `ukm_name`, `description`, `history`, `social_media`, `image_ukm`, `created_at`, `updated_at`) VALUES
(1, 'Lises Asmarandana', 'UKM Lises Asmarandana Universitas Muhammadiyah Sukabumi adalah Unit Kegiatan Mahasiswa yang berfokus pada seni dan budaya Sunda. Setiap tahun, UKM ini rutin mengadakan pementasan drama Sunda, memberikan kesempatan bagi mahasiswa untuk mengekspresikan bakat seni mereka dalam rangka melestarikan budaya Sunda. Kegiatan ini menjadi sarana penting untuk pengembangan kreativitas mahasiswa di bidang seni.', 'Lises Asmarandana didirikan sebagai Unit Kegiatan Mahasiswa yang mengembangkan seni Sunda, khususnya dalam bidang karawitan, tari, dan drama musikal. UKM ini lahir dengan tujuan untuk memberikan ruang bagi mahasiswa Universitas Muhammadiyah Sukabumi yang memiliki minat dan bakat dalam seni untuk mengembangkan diri mereka. Seiring berjalannya waktu, Lises Asmarandana terus berupaya melestarikan dan memperkenalkan budaya Sunda melalui berbagai kegiatan kesenian yang mereka selenggarakan, termasuk pementasan tahunan yang menjadi ciri khas UKM ini.', 'lisesasmarandana', 'ukms/1737865833_UKM-Lises-Asmarandana-UMMI.jpg', '2025-01-25 21:30:33', '2025-01-25 21:33:20'),
(2, 'PSM Sinfonia', 'Unit Kegiatan Mahasiswa (UKM) Paduan Suara Mahasiswa (PSM) Sinfonia Universitas Muhammadiyah Sukabumi (UMMI) merupakan wadah bagi mahasiswa yang memiliki minat dan bakat dalam seni vokal, khususnya paduan suara. UKM ini aktif dalam mengembangkan kemampuan anggotanya di bidang musik vokal melalui latihan rutin, partisipasi dalam berbagai acara kampus, serta keikutsertaan dalam kompetisi maupun pementasan. Selain kegiatan seni, UKM PSM Sinfonia juga berperan dalam membangun rasa kebersamaan dan kepedulian sosial, seperti melalui acara silaturahmi, bakti sosial, dan kegiatan religius, termasuk buka puasa bersama yang melibatkan anak-anak dari panti asuhan.', 'PSM Sinfonia UMMI didirikan sebagai salah satu Unit Kegiatan Mahasiswa di Universitas Muhammadiyah Sukabumi dengan tujuan utama mengembangkan potensi seni vokal mahasiswa dan memperkaya kehidupan kampus melalui musik. Sejak berdiri, UKM ini telah menjadi bagian penting dari kegiatan seni budaya di UMMI, dengan turut memeriahkan berbagai acara resmi kampus, baik akademik maupun non-akademik, seperti wisuda dan peringatan hari besar.\r\n\r\nPada tahun-tahun berikutnya, PSM Sinfonia tidak hanya fokus pada pengembangan seni tetapi juga memperluas kegiatan yang melibatkan aspek sosial dan keagamaan. Contohnya adalah kegiatan yang diselenggarakan pada bulan Ramadan, seperti acara silaturahmi, bakti sosial, dan buka puasa bersama, yang diadakan pada 14 Juni 2017 di Auditorium UMMI. Kegiatan ini mencerminkan nilai-nilai kebersamaan dan kepedulian sosial dengan mengundang anak yatim dari Panti Asuhan Ummu Salamah untuk berbagi kebahagiaan.\r\n\r\nPSM Sinfonia terus berkomitmen untuk menjadi ruang kreativitas, kolaborasi, dan pelestarian seni vokal di kalangan mahasiswa UMMI, serta memberikan dampak positif baik di dalam maupun di luar lingkungan kampus.', 'psmsinfonia', 'ukms/1737865966_psm.jpg', '2025-01-25 21:32:46', '2025-01-25 21:32:46'),
(3, 'Karate', 'Unit Kegiatan Mahasiswa (UKM) Karate Universitas Muhammadiyah Sukabumi (UMMI) adalah wadah bagi mahasiswa untuk mengembangkan kemampuan dan prestasi di bidang olahraga karate. UKM ini aktif mengadakan latihan rutin, pembinaan, serta berpartisipasi dalam berbagai kompetisi tingkat daerah, nasional, hingga internasional. Selain meningkatkan kemampuan bela diri, UKM Karate juga bertujuan membentuk karakter disiplin, sportivitas, dan tanggung jawab di kalangan mahasiswa.', 'UKM Karate UMMI telah menjadi salah satu unit kegiatan yang berprestasi di tingkat nasional. Salah satu pencapaian penting adalah kontribusi dari Firman Septiadi, M.Pd., pelatih sekaligus dosen Program Studi Pendidikan Jasmani UMMI, yang berhasil meraih Juara 1 pada Kejuaraan Nasional Karate di Batam pada November 2018 dan Juara 3 Karate PORDA Jawa Barat pada Oktober 2018. Prestasi ini mencerminkan komitmen UKM Karate UMMI dalam mencetak atlet-atlet berbakat sekaligus mendukung pengembangan olahraga karate di lingkungan kampus.', 'karate_ummi', 'ukms/1737866141_karate.jpeg', '2025-01-25 21:35:41', '2025-01-25 21:35:41'),
(4, 'Samantha Teater', 'Unit Kegiatan Mahasiswa (UKM) Samantha Teater Universitas Muhammadiyah Sukabumi (UMMI) merupakan wadah bagi mahasiswa yang memiliki minat dan bakat di bidang seni teater. UKM ini aktif dalam mengembangkan kreativitas anggotanya melalui pementasan teater, pelatihan seni peran, dan berbagai kegiatan seni lainnya. Samantha Teater berkomitmen untuk melestarikan seni budaya sekaligus memberikan inspirasi bagi generasi muda.', 'UKM Samantha Teater didirikan sebagai ruang ekspresi dan pengembangan diri bagi mahasiswa UMMI yang memiliki minat di bidang seni pertunjukan. Salah satu kegiatan penting UKM ini adalah Musyawarah Besar (Mubes), yang merupakan forum musyawarah tertinggi untuk mengevaluasi kinerja organisasi, memilih pengurus baru, dan menetapkan program kerja untuk periode berikutnya. Dalam setiap kepengurusannya, Samantha Teater terus berupaya menjalin kemitraan dengan Organisasi Mahasiswa (Ormawa) lainnya dan pihak eksternal, serta menumbuhkan nilai kebersamaan dan profesionalitas. Dengan semangat kolaborasi dan dedikasi yang tinggi, UKM Samantha Teater berupaya menjadi organisasi yang aktif, dinamis, dan berdampak positif di lingkungan kampus maupun masyarakat.', 'samanthateater', 'ukms/1737866239_samntha.jpg', '2025-01-25 21:37:19', '2025-01-25 21:37:19'),
(5, 'Hizbul Wathan', 'Unit Kegiatan Mahasiswa (UKM) Gerakan Kepanduan Hizbul Wathan Universitas Muhammadiyah Sukabumi (UMMI) adalah organisasi otonom Muhammadiyah yang bergerak di bidang pendidikan dan pembinaan anak, remaja, serta pemuda. UKM ini bertujuan untuk mencetak kader yang berakhlak Islami, berjiwa kepemimpinan, dan siap berkontribusi bagi persyarikatan, umat, dan bangsa. Melalui berbagai program kepanduan, Hizbul Wathan menjadi wadah untuk mengembangkan keterampilan, nilai kebersamaan, dan semangat dakwah Islam.', 'Hizbul Wathan, sebagai bagian dari persyarikatan Muhammadiyah, telah lama menjadi pelopor dalam pendidikan karakter dan kepemimpinan di kalangan pemuda. UKM ini menanamkan nilai-nilai amar ma’ruf nahi munkar berdasarkan Al-Qur\'an dan As-Sunah sebagai landasan dalam setiap kegiatannya. Selain itu, Hizbul Wathan berfokus pada penguatan manajemen organisasi bagi para anggotanya, sehingga mampu menciptakan kader yang cakap dalam perencanaan, pengelolaan, dan pelaksanaan program organisasi. Dengan pendekatan yang terstruktur, UKM ini terus berupaya mendukung visi dan misi Muhammadiyah melalui kontribusi nyata di lingkungan kampus UMMI.', 'hizbulwathan_ummi', 'ukms/1737866309_hw.jpeg', '2025-01-25 21:38:29', '2025-01-25 21:38:29'),
(6, 'Tapak Suci', 'Unit Kegiatan Mahasiswa (UKM) Tapak Suci Putra Muhammadiyah Universitas Muhammadiyah Sukabumi (UMMI) adalah organisasi otonom yang bergerak di bidang seni bela diri pencak silat. UKM ini bertujuan untuk mengembangkan minat dan bakat mahasiswa dalam seni bela diri sekaligus mendorong peningkatan prestasi, baik akademik maupun non-akademik. Dengan mengusung nilai-nilai Islam dan kemurnian budaya Indonesia, Tapak Suci menjadi wadah pembinaan karakter yang adaptif, solutif, dan kolaboratif.', 'UKM Tapak Suci Putra Muhammadiyah UMMI didirikan sebagai bagian dari gerakan dakwah Muhammadiyah dalam melestarikan seni bela diri pencak silat yang luhur dan bermoral. Sejak berdirinya, UKM ini telah menjadi ruang bagi mahasiswa untuk mengaktualisasikan potensi mereka secara positif melalui kompetisi, pelatihan, dan kegiatan organisasi. Tapak Suci juga aktif menjalin kerja sama dengan berbagai organisasi dan lembaga untuk mendukung pengembangan sumber daya manusia serta membangun jejaring yang kuat. Dengan dedikasi pada administrasi yang baik dan komitmen terhadap pelestarian seni bela diri, UKM ini terus berperan dalam membentuk generasi yang berprestasi dan berbudi pekerti luhur.', 'tapaksuciummi_', 'ukms/1737866370_tapak suci.jpg', '2025-01-25 21:39:30', '2025-01-25 21:39:30'),
(7, 'Mapalu', 'Unit Kegiatan Mahasiswa Mahasiswa Penggiat Alam Terbuka (MAPALU) Universitas Muhammadiyah Sukabumi (UMMI) adalah organisasi mahasiswa yang bergerak di bidang aktivitas alam terbuka. MAPALU bertujuan memanfaatkan alam terbuka sebagai media untuk membangun karakter anggotanya melalui pengembangan soft skill dan hard skill. Organisasi ini menjadi wadah bagi mahasiswa UMMI yang memiliki minat dalam kegiatan alam bebas untuk belajar, bertumbuh, dan berkontribusi secara positif.', 'MAPALU UMMI didirikan untuk memenuhi kebutuhan mahasiswa dalam menyalurkan minat mereka terhadap kegiatan alam terbuka. Seiring waktu, MAPALU telah berkembang menjadi organisasi yang aktif mengelola berbagai program, mulai dari pelatihan keterampilan alam terbuka hingga pengelolaan organisasi secara profesional. Dengan struktur keanggotaan yang mencakup anggota muda, anggota penuh, anggota purna, dan anggota kehormatan, MAPALU menjadi ruang pembelajaran yang inklusif. Anggota penuh, sebagai bagian dari Dewan Pengurus MAPALU, bertanggung jawab dalam perencanaan dan pengelolaan program, serta pengembangan organisasi untuk mendukung pertumbuhan personal dan kolektif seluruh anggotanya.', 'mapalu_ummi', 'ukms/1737866421_mapalu.jpeg', '2025-01-25 21:40:21', '2025-01-25 21:40:21'),
(8, 'Unit Pers Mahasiswa', 'Unit Pers Mahasiswa (UPM) Universitas Muhammadiyah Sukabumi (UMMI) adalah organisasi mahasiswa yang berfokus pada bidang jurnalistik dan pengembangan organisasi. UPM bertujuan untuk menjadi media pers kampus yang berani, independen, dan menjadi wadah bagi mahasiswa untuk mengekspresikan diri melalui tulisan dan kegiatan pengorganisasian. Dengan memberikan pelatihan dan pengembangan kepada anggota muda, UPM berkomitmen mencetak kader yang profesional, beretika, dan bersemangat dalam menyuarakan aspirasi mahasiswa.', 'UPM UMMI dibentuk sebagai respons terhadap kebutuhan akan saluran komunikasi yang independen dan kredibel di kampus. Sejak didirikan, UPM telah berperan sebagai jembatan antara mahasiswa dan masyarakat, memberikan ruang bagi mereka untuk menyampaikan ide dan pendapat melalui media cetak maupun digital. Dengan melibatkan mahasiswa dalam berbagai kegiatan jurnalistik dan organisasi, UPM berusaha menciptakan lingkungan yang mendukung pengembangan minat dan bakat di bidang pers, serta membangun karakter yang profesional, etis, dan berintegritas tinggi.', 'upm.ummi', 'ukms/1737866477_upm.jpg', '2025-01-25 21:41:17', '2025-01-25 21:41:17'),
(9, 'Basket', 'UKM UBBU Universitas Muhammadiyah Sukabumi adalah wadah bagi mahasiswa untuk menyalurkan minat dan bakat dalam olahraga bola basket. Dengan mengadakan latihan rutin dan program kerja yang melibatkan seluruh anggota, UKM ini bertujuan untuk mengembangkan keterampilan bola basket sambil menanamkan nilai kebersamaan, sportifitas, dan prinsip-prinsip keislaman.', 'UKM UBBU dibentuk sebagai respons terhadap tingginya minat mahasiswa di bidang bola basket. Sejak didirikan, UKM ini telah menjadi tempat berkembangnya keterampilan olahraga serta menjunjung tinggi nilai-nilai kebersamaan dan sportifitas. Melalui latihan rutin dan program kerja yang disusun bersama, UKM UBBU berkomitmen untuk menghasilkan atlet bola basket yang berprestasi, baik di bidang olahraga maupun dalam menjunjung prinsip keislaman.', 'ubbu_ummi', 'ukms/1737866582_basket 3.jpg', '2025-01-25 21:43:02', '2025-01-25 21:43:02'),
(10, 'Perfummi', 'UKM PERFUMMI (Persatuan Futsal UMMI) Universitas Muhammadiyah Sukabumi adalah wadah bagi mahasiswa untuk mengembangkan minat dan bakat dalam olahraga futsal. Dengan lebih dari 150 anggota, termasuk mahasiswa baru, PERFUMMI rutin mengadakan latihan setiap Selasa dan Kamis di Garuda Futsal atau Futsal 33. Selain itu, UKM ini juga mengadakan berbagai program kerja (proker) seperti MABA CUP CHAMPIONS dan MAKRAB untuk meningkatkan kebersamaan antar anggota.', 'Sejak didirikan, PERFUMMI telah meraih berbagai prestasi membanggakan, termasuk Juara I & II PASIM Futsal Cup 2015, Juara Futsal I Putri Kategori Mahasiswa Pendidikan Kota Sukabumi 2015, dan Juara III Futsal Champions antar Perguruan Tinggi Se-Jawa Barat 2016. Keberhasilan ini tidak lepas dari latihan disiplin dan kerjasama yang kuat antara anggota dan pelatih, serta semangat untuk membawa nama Universitas Muhammadiyah Sukabumi di dunia futsal.', 'Perfummi_', 'ukms/1737866646_futsal.jpg', '2025-01-25 21:44:06', '2025-01-25 21:44:06'),
(11, 'LDK Al- Umm', 'UKM Lembaga Dakwah Kampus (LDK) Al-Umm Universitas Muhammadiyah Sukabumi (UMMI) adalah organisasi mahasiswa yang fokus pada kegiatan dakwah dan penguatan spiritualitas kampus. Salah satu kegiatan unggulan LDK Al-Umm adalah Tabligh Akbar, yang bertujuan untuk memperdalam ilmu agama dan memperkuat ukhuwah Islamiyah di kalangan mahasiswa. Tabligh Akbar ini sering kali menghadirkan penceramah-penceramah ternama untuk memberikan tausiyah yang bermanfaat bagi seluruh civitas akademika.', 'LDK Al-Umm telah menyelenggarakan berbagai acara dakwah, salah satunya adalah Tabligh Akbar yang dilaksanakan pada Jum\'at (19/7/2024) di Auditorium UMMI dengan tema \"Meredam Rasa Demi Sang Pencipta\". Acara ini diisi oleh Ustadz Arifin Riswandi dan Ustadz Dede Baharsyah, dan dihadiri oleh Wakil Rektor II Dr. Ike Rachmawati, M.Si., yang dalam sambutannya menekankan pentingnya acara ini sebagai wadah untuk mempererat ukhuwah Islamiyah di lingkungan kampus. Kegiatan ini merupakan bagian dari komitmen LDK Al-Umm dalam mendidik mahasiswa untuk menjadi pribadi yang lebih baik melalui kegiatan dakwah dan pengajaran agama.', 'ldk_alumm', 'ukms/1737866706_LDK.jpeg', '2025-01-25 21:45:06', '2025-01-25 21:45:06'),
(12, 'Bulu tangkis', 'PB UMMI (Persatuan Bulu Tangkis Universitas Muhammadiyah Sukabumi) adalah Unit Kegiatan Mahasiswa (UKM) yang bergerak dalam bidang olahraga bulu tangkis. UKM ini memberikan wadah bagi mahasiswa yang memiliki minat dan bakat dalam olahraga bulu tangkis, baik secara tunggal maupun ganda. PB UMMI menyediakan latihan rutin dengan konsep yang menarik, mulai dari pemanasan, pemberian materi, hingga praktik lapangan. Latihan dilakukan setiap hari Sabtu di Taman Asri Ciaul, mulai pukul 14.00 WIB hingga selesai. UKM ini menjadi salah satu pilihan populer di kalangan mahasiswa UMMI.', 'PB UMMI didirikan untuk menampung minat mahasiswa dalam olahraga bulu tangkis. Meskipun sempat vakum akibat pandemi COVID-19, UKM ini berhasil mempertahankan anggota aktif dan kembali bangkit setelah situasi membaik. Pada masa pandemi, PB UMMI memilih untuk menghentikan kegiatan latihan offline mengingat keterbatasan kondisi. Namun, setelah pandemi, PB UMMI kembali melanjutkan kegiatan latihan rutin dengan konsep yang menarik, dan hingga kini memiliki lebih dari 100 anggota terdaftar. Eksistensinya yang terus terjaga menunjukkan antusiasme tinggi di kalangan mahasiswa dalam berolahraga bulu tangkis.', 'bulutangkis_ummi', 'ukms/1737866762_bultang.jpg', '2025-01-25 21:46:02', '2025-01-25 21:46:02'),
(13, 'Seni Rupa', 'UKM Seni Rupa Universitas Muhammadiyah Sukabumi merupakan wadah bagi mahasiswa untuk menyalurkan kreativitas di bidang seni rupa yang inovatif dan inspiratif. UKM ini fokus pada pengembangan kemampuan seni melalui pelatihan, pameran, dan kolaborasi, sekaligus menjadi sarana edukasi serta pelayanan bagi peminat seni. Dengan beragam program kegiatan, UKM Seni Rupa UMMI berkomitmen mencetak seniman yang kreatif, beretika, dan mampu menjunjung tinggi nilai-nilai kearifan lokal.', 'UKM Seni Rupa UMMI didirikan sebagai jawaban atas kebutuhan mahasiswa untuk mengembangkan bakat dan kreativitas di bidang seni rupa. Sejak awal berdirinya, UKM ini konsisten menyelenggarakan berbagai pelatihan, pameran seni, dan kegiatan edukasi yang melibatkan mahasiswa dan masyarakat. Selain itu, UKM ini aktif mempromosikan seni rupa sebagai bagian integral dari kehidupan kampus yang berorientasi pada pembentukan mental, moral, dan intelektual mahasiswa. Hingga kini, UKM Seni Rupa UMMI terus berperan sebagai ruang kolaborasi seni dan kreativitas bagi seluruh mahasiswa Universitas Muhammadiyah Sukabumi.', 'senirupa_ummi', 'ukms/1737866823_senirupa.jpg', '2025-01-25 21:47:03', '2025-01-25 21:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2025-01-25 20:54:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '4rOsnbuXZatL9dQau0NrqNPPcKVdKO36UBrMBEYvrwnD7UpTADmCcbI0z66J', NULL, NULL),
(2, 'Eneng Rahayu', 'rahayueneng6@gmail.com', NULL, '$2y$12$C86UEaiudQ/2AHm7nSwMWupyzzkU0ycc2uZb15IdQYdPXvtHLFc3e', 2, NULL, '2025-01-25 21:12:53', '2025-01-25 21:12:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `members_ukm_id_foreign` (`ukm_id`),
  ADD KEY `members_prodi_id_foreign` (`prodi_id`),
  ADD KEY `members_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `ukms`
--
ALTER TABLE `ukms`
  ADD PRIMARY KEY (`ukm_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `prodi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ukms`
--
ALTER TABLE `ukms`
  MODIFY `ukm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodis` (`prodi_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`semester_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ukm_id_foreign` FOREIGN KEY (`ukm_id`) REFERENCES `ukms` (`ukm_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
