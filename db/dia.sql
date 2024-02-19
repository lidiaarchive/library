-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 01:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dia`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', NULL, NULL),
(2, 'Inggris', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fiksi', NULL, NULL),
(2, 'Non-Fiksi', NULL, NULL),
(3, 'Religius', NULL, NULL),
(4, 'Referensi', NULL, NULL),
(5, 'Komik', NULL, NULL),
(6, 'Puisi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` bigint UNSIGNED NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_terbit` int DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bahasa` bigint UNSIGNED DEFAULT NULL,
  `id_penerbit` bigint UNSIGNED DEFAULT NULL,
  `id_category` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `isbn`, `cover`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `pdf`, `created_at`, `updated_at`, `id_bahasa`, `id_penerbit`, `id_category`) VALUES
(1, '978-602-04-1375-4', 'bob sadino.jpg', 'Belajar Goblok dari Bob Sadino', 'Dodi Mawardi', 'Kintami Publishing', 2009, 'Belajar Goblok dari Bob Sadino.pdf', NULL, NULL, NULL, NULL, NULL),
(2, '978-623-97262-4-9', 'bibi gill.jpg', 'Bibi Gill', 'Tere Liye', 'Gramedia Pustaka Utama', 2022, 'bibi gill.pdf', NULL, NULL, NULL, NULL, NULL),
(3, '978-602-03-5117-9', 'bintang.jpg', 'Bintang', 'Tere Liye', 'Gramedia Pustaka Utama', 2017, 'bintang.pdf', NULL, NULL, NULL, NULL, NULL),
(4, '978-979-060-068-3', '', 'Teknik Grafika dan Industri Grafika jilid 1', 'Antonius Bowo Wasono', 'Buku Sekolah Eletronik', 2008, 'teknik grafika dan industri grafika.pdf', NULL, NULL, NULL, NULL, NULL),
(5, '-', '-', 'Millionaire Mindset 01', 'Rismalasari', '-', 2009, 'Millionaire Mindset 01.pdf', NULL, NULL, NULL, NULL, NULL),
(6, '-', '-', 'Millionaire Mindset 03', 'Rismalasari', '-', 2000, 'Millionaire Mindset 03.pdf', NULL, NULL, NULL, NULL, NULL),
(7, '-', '-', 'Millionaire Mindset 09', 'Rismalasari', '-', 2000, 'Millionaire Mindset 09.pdf', NULL, NULL, NULL, NULL, NULL),
(8, '-', '-', 'Jaringan Dasar', '-', '-', 2000, 'jaringan dasar.pdf', NULL, NULL, NULL, NULL, NULL),
(9, '-', '-', 'Keyboard Shortcuts Windows', '-', '-', 2000, 'keyboard shortcuts windows.pdf', NULL, NULL, NULL, NULL, NULL),
(10, '-', '-', 'Java Fundamentals 3.1', '-', '-', 2015, 'JF_3_1.pdf', NULL, NULL, NULL, NULL, NULL),
(11, '-', '-', 'Java Fundamentals 3.2', '-', '-', 2015, 'JF_3_2.pdf', NULL, NULL, NULL, NULL, NULL),
(12, '-', '-', 'Java Fundamentals 3.3', '-', '-', 2015, 'JF_3_3.pdf', NULL, NULL, NULL, NULL, NULL),
(13, '-', '-', 'Java Fundamentals 3.4', '-', '-', 2015, 'JF_3_4.pdf', NULL, NULL, NULL, NULL, NULL),
(14, '-', '-', 'Java Fundamentals 3.5', '-', '-', 2015, 'JF_3_5.pdf', NULL, NULL, NULL, NULL, NULL),
(15, '-', '-', 'Java Fundamentals 3.6', '-', '-', 2015, 'JF_3_6.pdf', NULL, NULL, NULL, NULL, NULL),
(16, '-', '-', 'Java Fundamentals 3.7', '-', '-', 2015, 'JF_3_7.pdf', NULL, NULL, NULL, NULL, NULL),
(17, '-', '-', 'Java Fundamentals 3.8', '-', '-', 2015, 'JF_3_8.pdf', NULL, NULL, NULL, NULL, NULL),
(18, '-', '-', 'Java Fundamentals 3.9', '-', '-', 2015, 'JF_3_9.pdf', NULL, NULL, NULL, NULL, NULL),
(19, '-', '-', 'Java Fundamentals 3.10', '-', '-', 2015, 'JF_3_10.pdf', NULL, NULL, NULL, NULL, NULL),
(20, '-', '-', 'Java Fundamentals 4.1', '-', '-', 2015, 'JF_4_1.pdf', NULL, NULL, NULL, NULL, NULL),
(21, '-', '-', 'Java Fundamentals 4.2 Solution', '-', '-', 2015, 'JF_4_2_Solution.pdf', NULL, NULL, NULL, NULL, NULL),
(22, '-', '-', 'Java Fundamentals 4.3', '-', '-', 2015, 'JF_4_3.pdf', NULL, NULL, NULL, NULL, NULL),
(23, '-', '-', 'Java Fundamentals 4.4', '-', '-', 2015, 'JF_4_4.pdf', NULL, NULL, NULL, NULL, NULL),
(24, '-', '-', 'Java Fundamentals 4.4 Solution', '-', '-', 2015, 'JF_4_4_Solution.pdf', NULL, NULL, NULL, NULL, NULL),
(25, '-', '', 'Java Fundamentals 5.2', '-', '-', 2015, 'JF_5_2.pdf', NULL, NULL, NULL, NULL, NULL),
(26, '-', '-', 'Java Fundamentals 6.1', '-', '-', 2015, 'JF_6_1.pdf', NULL, NULL, NULL, NULL, NULL),
(27, '-', '-', 'Java Fundamentals 6.2', '-', '-', 2015, 'JF_6_2.pdf', NULL, NULL, NULL, NULL, NULL),
(28, '-', '-', 'Java Fundamentals 7.1', '-', '-', 2015, 'JF_7_1.pdf', NULL, NULL, NULL, NULL, NULL),
(29, '-', '-', 'Java Fundamentals 7.2', '-', '-', 2015, 'JF_7_2.pdf', NULL, NULL, NULL, NULL, NULL),
(30, '-', '-', 'Java Fundamentals 7.3', '-', '-', 2015, 'JF_7_3.pdf', NULL, NULL, NULL, NULL, NULL),
(31, '-', '-', 'Java Fundamentals 7.4', '-', '-', 2015, 'JF_7_4.pdf', NULL, NULL, NULL, NULL, NULL),
(32, '-', '-', 'Java Fundamentals 7.5', '-', '-', 2015, 'JF_7_5.pdf', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_24_085110_create_categories_table', 1),
(6, '2023_09_01_011118_ebooks_table', 1),
(7, '2023_09_07_054619_penerbit_table', 1),
(8, '2023_09_15_042752_bahasa_table', 1),
(9, '2023_09_20_010620_add_id_bahasa_column_to_ebooks_table', 1),
(10, '2023_09_20_011217_add_id_penerbit_column_to_ebooks_table', 1),
(11, '2023_09_20_011353_add_id_categories_column_to_ebooks_table', 1);

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
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `role` enum('admin','client') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto_profile`, `nama`, `kelas`, `jenis_kelamin`, `agama`, `username`, `password`, `phone`, `address`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', '-', '-', '-', 'Admin', '$2y$10$JpUM5gqLSPTHeEkToEP/ZuqcfoRIdN2jDHoDQfMKUkDUuhngsYC.6', '(0332) 431201', NULL, 'active', 'admin', NULL, NULL),
(2, NULL, 'Abhista Farrel Karomah Hibatullah', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Farrel', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(3, NULL, 'Ahmad Abdillah Faza', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Faza', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(4, NULL, 'Alif Zaky Lutfiansyah', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Zaky', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(5, NULL, 'Aril Beni Setiawan', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Aril', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(6, NULL, 'Chelo Tasnim Haryono', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Chelo', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(7, NULL, 'Dava Faranezar', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Dava', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(8, NULL, 'Dimas Rega Adiwijaya', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Dimas', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(9, NULL, 'Haris Mochammad Ishak', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Haris', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(10, NULL, 'Luqmanaya Wahidan Sutanto', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Idan', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(11, NULL, 'Mohammad Davilah Akbar', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Davil', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(12, NULL, 'Mohammad Rayhan Zhidad', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Rayhan', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(13, NULL, 'Muhammad Gufron', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Gufron', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(14, NULL, 'Muhammad Ikrom', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Ikrom', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(15, NULL, 'Muhammad Irfan Ubaidillah', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Irfan', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(16, NULL, 'Muhammad Mahrus', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Mahrus', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(17, NULL, 'Putra Aditya Perkasa', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Adit', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(18, NULL, 'Radhitia Pratama Effendy', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Radhit', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(19, NULL, 'Raya Ghaniyya Yuda', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Raya', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(20, NULL, 'Riski Yantono Avis', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Avis', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(21, NULL, 'Rizky', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Rizky', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(22, NULL, 'Siti qomariatul Maulidia', 'XII-RPL 1', 'Perempuan', 'Islam', 'Lidia', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(23, NULL, 'Tabina Faisa Pribadi', 'XII-RPL 1', 'Perempuan', 'Islam', 'Tabina', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(24, 'tes', 'Teguh Wichaksono', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Teguh', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(25, NULL, 'Wildan Zaki Amali', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Wildan', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL),
(26, NULL, 'Yuviar Nuzul Ramadhani', 'XII-RPL 1', 'Laki-laki', 'Islam', 'Yuvi', '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke', NULL, NULL, 'active', 'client', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ebooks_id_bahasa_foreign` (`id_bahasa`),
  ADD KEY `ebooks_id_penerbit_foreign` (`id_penerbit`),
  ADD KEY `ebooks_id_category_foreign` (`id_category`);

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
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD CONSTRAINT `ebooks_id_bahasa_foreign` FOREIGN KEY (`id_bahasa`) REFERENCES `bahasa` (`id`),
  ADD CONSTRAINT `ebooks_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `ebooks_id_penerbit_foreign` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
