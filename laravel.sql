-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Okt 2023 pada 06.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `koleksi`
--

CREATE TABLE `koleksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaKoleksi` varchar(100) NOT NULL,
  `jenisKoleksi` tinyint(4) NOT NULL,
  `jumlahKoleksi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlahKeluar` int(11) NOT NULL,
  `jumlahSisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `koleksi`
--

INSERT INTO `koleksi` (`id`, `namaKoleksi`, `jenisKoleksi`, `jumlahKoleksi`, `created_at`, `updated_at`, `jumlahKeluar`, `jumlahSisa`) VALUES
(1, 'Tereliye', 1, 100, '2023-10-07 05:41:08', '2023-10-28 22:40:10', 0, 100),
(2, 'Boy Candra', 2, 100, '2023-10-07 06:43:06', '2023-10-28 22:32:21', 0, 100),
(3, 'Laskar Pelangi', 2, 100, '2023-10-07 22:21:35', '2023-10-28 22:40:02', 0, 100),
(4, 'Cerita Si Madun', 1, 100, '2023-10-08 13:47:05', '2023-10-08 13:47:05', 0, 100),
(5, 'Kemarin aku sekarang', 1, 100, '2023-10-09 16:01:55', '2023-10-28 22:40:30', 0, 100),
(6, 'Dilan 1990', 1, 100, '2023-10-12 00:51:00', '2023-10-28 10:51:05', 0, 100),
(7, 'Rajin Sholat', 1, 100, '2023-10-12 01:39:00', '2023-10-28 10:44:14', 0, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_29_030048_modified_migration_users_1', 1),
(7, '2023_09_29_041640_modified_migration_users_2', 1),
(8, '2023_10_05_085814_create_koleksi_table', 1),
(9, '2023_10_07_184212_modified_migration_koleksi_1', 1),
(10, '2023_10_07_185107_modified_migration_koleksi_2', 1),
(11, '2023_10_21_041540_modified_migration_koleksi_3', 1),
(12, '2023_10_27_155312_create_transaksi_table', 1),
(13, '2023_10_27_160420_create_transaksi_detail_table', 2),
(14, '2023_10_28_120944_create_transaksi_detail_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `idPetugas` bigint(20) UNSIGNED NOT NULL,
  `idPeminjam` bigint(20) UNSIGNED NOT NULL,
  `tanggalPinjam` date NOT NULL,
  `tanggalSelesai` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `idPetugas`, `idPeminjam`, `tanggalPinjam`, `tanggalSelesai`, `created_at`, `updated_at`) VALUES
(1, 1, 9, '2023-10-29', '2023-10-29', '2023-10-28 22:31:48', '2023-10-28 22:32:34'),
(2, 1, 2, '2023-10-29', '2023-10-29', '2023-10-28 22:38:29', '2023-10-28 22:40:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idTransaksi` bigint(20) UNSIGNED NOT NULL,
  `idKoleksi` bigint(20) UNSIGNED NOT NULL,
  `tanggalKembali` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `keterangan` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id`, `idTransaksi`, `idKoleksi`, `tanggalKembali`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-10-29', 2, NULL, '2023-10-28 22:31:48', '2023-10-28 22:32:21'),
(2, 1, 1, '2023-10-29', 2, NULL, '2023-10-28 22:31:48', '2023-10-28 22:32:03'),
(3, 1, 1, '2023-10-29', 3, NULL, '2023-10-28 22:31:48', '2023-10-28 22:32:34'),
(4, 2, 3, '2023-10-29', 2, NULL, '2023-10-28 22:38:29', '2023-10-28 22:40:02'),
(5, 2, 1, '2023-10-29', 3, NULL, '2023-10-28 22:38:29', '2023-10-28 22:40:10'),
(6, 2, 5, '2023-10-29', 2, NULL, '2023-10-28 22:38:29', '2023-10-28 22:40:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `religion` varchar(20) NOT NULL,
  `gender` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `address`, `phoneNumber`, `birthdate`, `religion`, `gender`) VALUES
(1, 'Davin Wardana', 'davinww060304@gmail.com', NULL, '$2y$10$mDSQBGb7FgXxVrZFrIUtTOjx2ov7Yq65h73WpvuehYLcs9jT/Ms/u', 'zyqktbs41Py6xIJUWw6TP9WiaMXVQch0ECqULBXkdjuWXlnj6J5my8C50Wme', '2023-09-21 00:20:32', '2023-10-07 02:35:20', 'davin', 'Bojongsoang', '6281213539307', '2004-06-29', 'Islam', 1),
(2, 'Billa', 'ghinasalsabilla29@gmail.com', NULL, '$2y$10$ksISpTqEe7kVUVCDyvdVueDFIzMx2Tj0O0O6UWJNLHe4CtLX/o2eW', NULL, '2023-09-29 00:30:36', '2023-09-29 00:30:36', 'billa', 'Jatinangor', '6285156493669', '2004-03-06', 'Kristen', 0),
(3, 'Faris Akbar', 'faris@gmail.com', NULL, '$2y$10$2AnpxXE.U19lMU0eqHbDPe65vodTINbkCBrjC9zPndsuf3EAviZ2K', NULL, '2023-10-06 17:58:24', '2023-10-06 17:58:24', 'faris', 'Bekasi', '6281806993369', '2007-03-27', 'Khonghucu', 1),
(4, 'Risqi Briliansyah', 'risqi@gmail.com', NULL, '$2y$10$S.mjD1zR64KxyZsoO6ycLOuwOgggEG2e..5RR7VJouNBf6BymAuVW', NULL, '2023-10-06 18:25:52', '2023-10-06 19:18:25', 'risqi', 'Cikarang 2', '6285156493669', '2023-10-02', 'Katolik', 1),
(5, 'Adhisty Nayyara', 'nayya@gmail.com', NULL, '$2y$10$Co2t1JEbhQlRo2OCzFt6A.VYIr9XiJqibeGAPu9T2O9Jk/chrWqDm', NULL, '2023-10-07 05:34:28', '2023-10-07 05:34:28', 'nayya', 'Bumi Citra', '6285774795399', '2023-10-05', 'Islam', 0),
(6, 'Titik Sugiyarti', 'titik@gmail.com', NULL, '$2y$10$dDU.b42k9QMo//mAp8jY/.tg82ZllMzregPhfjQS41F6V9irJoJga', NULL, '2023-10-07 05:35:30', '2023-10-20 17:03:28', 'titik', 'Lestari', '6285164628424', '1980-02-06', 'Islam', 0),
(7, 'Didik Hermanto', 'didik@gmail.com', NULL, '$2y$10$9QiCXPicdceEgsSqqpERuekZXz2CyNQH8o5tmQCV8e7nxk6cwZH4K', NULL, '2023-10-07 05:41:58', '2023-10-07 05:41:58', 'didik', 'Cisanggiri', '628688318283', '1998-02-09', 'Kristen', 1),
(8, 'Nieko Arifin', 'niko@gmail.com', NULL, '$2y$10$F/id4AUvz1CRY/TnfZJWeONKbeTK5jhsJj9o5jdMGywJvx.rY9U2y', NULL, '2023-10-07 05:45:37', '2023-10-07 05:45:37', 'niko', 'Graha', '6287817283711', '2023-10-04', 'Katolik', 1),
(9, 'Ghina Salsabilla', 'ghina@gmail.com', NULL, '$2y$10$cCUSL89tY.CPni7JudNkIu4AXXR/xQLxh4ciemfNCEkG9aWWe6j22', NULL, '2023-10-07 05:46:54', '2023-10-20 18:01:39', 'ghina', 'Cimandiri', '628781928482', '2023-10-18', 'Hindu', 0),
(10, 'Arsyila', 'syila@gmail.com', NULL, '$2y$10$zrVHP0hmr8uGDdH5Dm0FK.rMWBXZQbVriFeqD2/KA4GlnTGF7NLgS', NULL, '2023-10-07 05:47:58', '2023-10-07 05:47:58', 'arsyila', 'Cimandiri', '628787182842', '2023-10-02', 'Hindu', 0),
(11, 'Zidana', 'zidan@gmail.com', NULL, '$2y$10$txye2TsKn.hqbVmgUOcr9.AhwRKnaIGs7v8xZ1wUfUglXWTO0gnVG', NULL, '2023-10-07 06:07:16', '2023-10-20 17:08:02', 'zidan', 'Jakarta', '62878718273', '2023-10-09', 'Katolik', 0),
(12, 'Raffi Ardiansyah', 'raffi@gmail.com', NULL, '$2y$10$/Qe1vvLbG8zdhR7M56zMBu4dKhjEHYzrP9QAlXTnDx14yR/hvWi9m', NULL, '2023-10-07 22:25:49', '2023-10-07 22:25:49', 'raffi', 'Cimandiri', '6281234567890', '2005-06-14', 'Islam', 1),
(13, 'Imelda Linda', 'imelda@gmail.com', NULL, '$2y$10$O5T73/E6QfIrWrQYFpEgyeFXJ/5PDEQkAU8fu1u3uWh983nxf58I6', NULL, '2023-10-10 16:22:53', '2023-10-10 16:22:53', 'imelda', 'Cimandiri', '6289329523523', '2000-02-06', 'Islam', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_idpetugas_foreign` (`idPetugas`),
  ADD KEY `transaksi_idpeminjam_foreign` (`idPeminjam`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_idpeminjam_foreign` FOREIGN KEY (`idPeminjam`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_idpetugas_foreign` FOREIGN KEY (`idPetugas`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
