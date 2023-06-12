-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 09:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balita`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `nama`, `TTL`, `nama_ibu`, `nama_ayah`, `alamat`, `telepon`) VALUES
(2, 'bagas', '2005', 'Angeline', 'Steven', 'Malang', '0981212'),
(5, 'Ilham', '2002', 'Susanti', 'Bejo', 'Malang', '0812212412'),
(6, 'Valen', '2003', 'Ani', 'Budi', 'Malang', '0892521211'),
(7, 'Varo', '2009', 'Vina', 'Gugun', 'Batu', '08234312222'),
(8, 'Farahn', '2001', 'Hani', 'Joni', 'Pucung', '0896215124');

-- --------------------------------------------------------

--
-- Table structure for table `master_account`
--

CREATE TABLE `master_account` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKelamin` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Null',
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_account`
--

INSERT INTO `master_account` (`id`, `id_status`, `nama`, `jenisKelamin`, `noHp`, `alamat`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bagas', 'Laki Laki', '0895620091690', 'Malang', 'bagas', '$2y$10$jCTERKZJP99HyrIRSDlsY.EPp7dc5bUMUmFL3rg8M9rvgmJl3Zcae', NULL, NULL),
(2, 2, 'user', 'Laki Laki', '0012912', 'Malang', 'user', '$2y$10$tFzR0DgHmuUB0woNhWwCsusX1ljyVe.ofMx9iL6.eZuVhdtXA/49m', NULL, NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_25_043057_create_status_user_table', 1),
(3, '2023_03_25_044739_create_master_account_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progress_babies`
--

CREATE TABLE `progress_babies` (
  `id_progress` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `bulan_ke` varchar(30) NOT NULL,
  `panjang_bayi` int(11) NOT NULL,
  `berat_bayi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_babies`
--

INSERT INTO `progress_babies` (`id_progress`, `id_anak`, `bulan_ke`, `panjang_bayi`, `berat_bayi`) VALUES
(5, 7, '3', 99, 20),
(8, 2, '1', 82, 4),
(9, 2, '1', 45, 55);

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE `status_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`id`, `nameStatus`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `master_account`
--
ALTER TABLE `master_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_account_username_unique` (`username`),
  ADD KEY `master_account_id_status_foreign` (`id_status`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `progress_babies`
--
ALTER TABLE `progress_babies`
  ADD PRIMARY KEY (`id_progress`),
  ADD KEY `id_anak` (`id_anak`);

--
-- Indexes for table `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_account`
--
ALTER TABLE `master_account`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progress_babies`
--
ALTER TABLE `progress_babies`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status_user`
--
ALTER TABLE `status_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_account`
--
ALTER TABLE `master_account`
  ADD CONSTRAINT `master_account_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `status_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `progress_babies`
--
ALTER TABLE `progress_babies`
  ADD CONSTRAINT `progress_babies_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
