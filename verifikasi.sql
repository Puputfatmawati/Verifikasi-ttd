-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2023 pada 09.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcode`
--

CREATE TABLE `barcode` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nim` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `penandatangan` text NOT NULL,
  `barcode` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barcode`
--

INSERT INTO `barcode` (`id`, `tanggal`, `nim`, `nama`, `jenis_surat`, `no_surat`, `keperluan`, `penandatangan`, `barcode`) VALUES
(1, '2023-03-14', 3219017, 'Puput Fatma', 'Surat pengantar', '234667822222', 'tanda tangan', 'pa indra', 24901012);

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
-- Struktur dari tabel `lbl_user`
--

CREATE TABLE `lbl_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lbl_user`
--

INSERT INTO `lbl_user` (`id`, `user_id`, `username`, `password`, `level`, `jabatan`, `foto`) VALUES
(12, NULL, 'Najaemin', '123Nana', 'Admin', 'Operator Stmik', 'Najaemin.jpg'),
(16, NULL, 'Puput', '1234', 'Admin', '', 'Puput.jpg'),
(18, NULL, 'Minaismu', '123Mina', 'Pejabat', 'Prodi Teknik Informatika', 'Minaismu.jpg'),
(19, NULL, 'IndraM', 'Indra12', 'Pejabat', 'prodi sistem informasi', 'IndraM.png'),
(26, NULL, 'Athar', '123Athar', 'Pejabat', 'Ketua akademik', 'Athar.jpg');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(50) NOT NULL,
  `kode_surat` varchar(50) DEFAULT NULL,
  `jenis_surat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `kode_surat`, `jenis_surat`) VALUES
(4, NULL, 'Surat Tanda tangan prodi'),
(5, NULL, 'Surat Tanda tangan prodi'),
(6, NULL, 'Surat Pengantar'),
(7, 'A20', 'surat cinta'),
(8, 'A21', 'pengantar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `level`, `jabatan`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Najaemin', 'Admin', '', NULL, NULL, NULL, '$2y$10$KgTUt1dmf/KfffVccUJVJufAA8H3Pt2DoxYRQczwpv2PwZWIr.GTu', 'TgrvzU7vW1cjyFEhcnR5htwxqqD12vIsOMMWlzpmXxBZjdVSZle1ehBmmFHM', '2023-03-15 00:54:19', '2023-03-15 00:54:19'),
(21, 'Puput', 'Admin', '', NULL, NULL, NULL, '$2y$10$sj9O5g4hZgRFHyX18YbsGeNqyCjcUxSWPkOLS16f4NLrMztbdcVly', 'K08FRfz5Cwq0cseklziRj73p2DYs44n7LeYKxm6MHfkqlNUDzF20jdHjoPP6', '2023-03-16 22:38:04', '2023-03-16 22:38:04'),
(23, 'Minaismu', 'Pejabat', 'Prodi Teknik Informatika', NULL, NULL, NULL, '$2y$10$9nAtUlkjNWsCrVqJeQntbeJJGWTM0yGBNWlSiJvDKpyPKz1HXflrW', 'oWHDPSue8iRYKECCrlkGftlDWTpWRIHfUhd2eJcjJ4hfU7p5PzEviSriXFle', '2023-03-19 22:30:15', '2023-03-19 22:30:15'),
(24, 'IndraM', 'Pejabat', 'Prodi Teknik Informatika', NULL, NULL, NULL, '$2y$10$3198AdCdpFec.FFgWm.DR.9SvRL754vlCVDwCLmovE7sROqSolvd.', '0ojFRkFZgMfYcAtLg41GRwcWOr9y9hn3YWrwzWDanVsSWfeTtdRCh2zguPJR', '2023-03-19 22:34:49', '2023-03-19 22:34:49'),
(34, 'Athar', 'Pejabat', 'Ketua akademik', NULL, NULL, NULL, '$2y$10$IFKi6gFVruR4GkLdN4JyMuTXfJNkweA4lfscu8Z9ea68yStZ/JDy2', '07aYiz0ukymwTiqDlEqjIwyapyx3xEV1qrviMUNxbMcDSiBX8LG4OeOObV3A', '2023-05-10 22:51:15', '2023-05-10 22:51:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id` int(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nim` int(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_surat` varchar(50) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `keperluan` varchar(100) DEFAULT NULL,
  `penandatangan` text DEFAULT NULL,
  `dokumen` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `barcode` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `verifikasi`
--

INSERT INTO `verifikasi` (`id`, `tanggal`, `nim`, `nama`, `jenis_surat`, `no_surat`, `keperluan`, `penandatangan`, `dokumen`, `status`, `barcode`) VALUES
(37, '2023-03-16', 3219001, 'Nurul', 'Surat SKKA', '7879167826117909', 'Tanda Tangan Prodi', 'Pa indra', 'Nurul.pdf', 'DITOLAK', NULL),
(40, '2023-03-17', 3219017, 'Nurul', 'Surat SKKA', '7879167826117', 'Tanda tangan untuk SKKA', 'pak dani', 'Nurul.pdf', 'DITOLAK', NULL),
(41, '2023-03-20', 1219017, 'Rizal', 'Surat Pengantar', '787987161213761181', 'Tanda tangan untuk SKKA', 'Bu Mina', 'Rizal.pdf', 'DITERIMA', 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://127.0.0.1:8000/verifikasi/view/41&choe=UTF-8'),
(42, '2023-03-30', 122002, 'akbar', 'Surat Tanda tangan prodi', '7879167826117', 'Tanda tangan untuk SKKA', 'Bu Mina', 'akbar.pdf', 'DITERIMA', 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://127.0.0.1:8000/verifikasi/view/42&choe=UTF-8'),
(43, '2023-03-30', 578585, 'pptt', 'Surat Pengantar', 'y86879754646', 'Tanda tangan untuk SKKA', 'Bu Mina', 'pptt.pdf', 'DITERIMA', 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://127.0.0.1:8000/verifikasi/view/43&choe=UTF-8'),
(44, '2023-03-30', 3219001, 'puput fatmawati', 'Surat Tanda tangan prodi', '7879167826118', 'Tanda tangan untuk SKKA', 'Pa yus jayusman', 'puput fatmawati.pdf', 'DITERIMA', 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://127.0.0.1:8000/verifikasi/view/44&choe=UTF-8'),
(45, '2023-03-31', 1218007, 'Alena Askara', 'Surat Tanda tangan prodi', '7879167826117909', 'Tanda Tangan Prodi', 'Pa yus jayusman', 'Alena Askara.pdf', 'DITOLAK', NULL),
(46, '2023-05-09', 3219017, 'puput fatmawati', 'Surat Tanda tangan prodi', 'y86879754646', 'Tanda tangan untuk SKKA', 'Pa yus jayusman', 'puput fatmawati.pdf', 'DITERIMA', 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://127.0.0.1:8000/verifikasi/view/46&choe=UTF-8');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lbl_user`
--
ALTER TABLE `lbl_user`
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
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barcode`
--
ALTER TABLE `barcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lbl_user`
--
ALTER TABLE `lbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
