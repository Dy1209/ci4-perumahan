-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220605.3bb0712d47
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2022 pada 10.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perumahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `wa_admin` varchar(13) NOT NULL,
  `alamat_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `email_admin`, `wa_admin`, `alamat_admin`) VALUES
(1, 'alviany', 'adminadmin1', 'Putri Alviany Dyah', 'alviany@gmail.com', '089666150147', 'Pemalang, Jawa Tengah'),
(2, 'diva', 'admin2', 'Diva Kirana', 'diva@gmail.com', '082137433532', 'Purwokerto, Cilacap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(11) NOT NULL,
  `nama_agent` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `email_agent` varchar(255) NOT NULL,
  `wa_agent` varchar(13) NOT NULL,
  `jk_agent` varchar(50) NOT NULL,
  `foto_agent` varchar(255) NOT NULL,
  `alamat_agent` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agent`
--

INSERT INTO `agent` (`id_agent`, `nama_agent`, `slug`, `email_agent`, `wa_agent`, `jk_agent`, `foto_agent`, `alamat_agent`, `created_at`, `updated_at`) VALUES
(14, 'Panji', 'panji', 'panji@gmail.com', '081547895642', 'Laki-Laki', 'agent-3.jpg', 'Purbalingga', '2022-05-28 23:46:38', '2022-05-28 23:46:38'),
(19, 'Melati', 'melati', 'melati@gmail.com', '028457964521', 'Perempuan', 'agent-5.jpg', 'Jl. Kusuma Jaya, No.11', '2022-05-29 22:41:33', '2022-05-29 22:41:33'),
(20, 'Tejo Sutejo', 'tejo-sutejo', 'tejo@gmail.com', '081547582354', 'Laki-Laki', 'agent-1.jpg', 'Jl. Kusuma Jaya, No.11', '2022-05-31 05:49:22', '2022-05-31 05:50:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'alviany@gmail.com', NULL, '2022-05-27 00:22:40', 0),
(2, '::1', 'alviany@gmail.com', NULL, '2022-05-27 00:22:59', 0),
(3, '::1', 'alviany@gmail.com', NULL, '2022-05-27 00:33:12', 0),
(4, '::1', 'putri', NULL, '2022-05-27 00:34:34', 0),
(5, '::1', 'alviany@gmail.com', NULL, '2022-05-27 00:44:34', 0),
(6, '::1', 'alviany@gmail.com', NULL, '2022-05-27 01:55:06', 0),
(7, '::1', 'azmiT', 2, '2022-05-27 02:08:07', 0),
(8, '::1', 'putri@gmail.com', NULL, '2022-05-27 02:11:05', 0),
(9, '::1', 'putri@gmail.com', NULL, '2022-05-27 02:11:27', 0),
(10, '::1', 'putri@gmail.com', 4, '2022-05-27 02:16:00', 0),
(11, '::1', 'putri@gmail.com', 4, '2022-05-27 02:28:25', 0),
(12, '::1', 'putri@gmail.com', 6, '2022-05-27 02:43:41', 0),
(13, '::1', 'anydyahari@gmail.com', 7, '2022-05-27 02:45:35', 1),
(14, '::1', 'azmi@gmail.com', 8, '2022-05-27 07:13:00', 1),
(15, '::1', 'anydyahari@gmail.com', 7, '2022-05-27 21:01:52', 1),
(16, '::1', 'azmi@gmail.com', 8, '2022-05-28 03:25:22', 1),
(17, '::1', 'anydyahari@gmail.com', 7, '2022-05-28 17:39:23', 1),
(18, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 03:05:29', 1),
(19, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 07:29:40', 1),
(20, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 10:23:10', 1),
(21, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 10:29:33', 1),
(22, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 10:36:05', 1),
(23, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 10:41:43', 1),
(24, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 10:42:01', 1),
(25, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 10:44:00', 1),
(26, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 19:50:57', 1),
(27, '::1', 'anydyahari@gmail.com', 7, '2022-05-29 21:52:55', 1),
(28, '::1', 'anydyahari@gmail.com', 7, '2022-05-31 05:20:12', 1),
(29, '::1', 'anydyahari@gmail.com', 7, '2022-06-05 02:05:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1653620640, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE `rumah` (
  `id` int(11) NOT NULL,
  `kode_rumah` varchar(3) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `luas_area` varchar(50) NOT NULL,
  `kamar_tidur` varchar(50) NOT NULL,
  `kamar_mandi` varchar(50) NOT NULL,
  `garasi` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`id`, `kode_rumah`, `slug`, `alamat`, `harga`, `luas_area`, `kamar_tidur`, `kamar_mandi`, `garasi`, `gambar`, `created_at`, `updated_at`) VALUES
(18, 'A01', 'a01', 'Jl. Angkasa, No.03, Purwokerto, Jawa Tengah', '1.170.000.000', '234', '2', '1', '1', 'post-single-1.jpg', '2022-05-28 23:34:29', '2022-05-29 19:51:29'),
(19, 'A02', 'a02', 'Jl. Kumbang, No.41, Purwokerto, Jawa Tengah', '1.640.600.001', '136', '3', '2', '1', 'mahal.jpg', '2022-05-28 23:36:22', '2022-05-29 21:53:21'),
(20, 'A03', 'a03', 'Jl. Elang, No. 17, Purwokerto, Jawa Tengah', '1.448.170.000', '138', '3', '1', '1', 'slide-1.jpg', '2022-05-28 23:38:02', '2022-05-28 23:38:02'),
(21, 'A04', 'a04', 'Jl. Luar Biasa, No.24, Purwokerto, Jawa Tengah', '2.386.900.000', '301', '5', '2', '1', 'slide-2.jpg', '2022-05-28 23:44:03', '2022-05-28 23:44:03'),
(22, 'A05', 'a05', 'Jl. Bintang, No.01, Purwokerto, Jawa Tengah', '3.001.940.000', '362', '6', '3', '1', 'slide-3.jpg', '2022-05-28 23:46:13', '2022-05-28 23:46:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'anydyahari@gmail.com', 'Daisy', '$2y$10$cIuqLOhYoaBGX0mF3IYkYOuS1XXjqaCrPJIZr.pTafEBkdI4j5nky', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-27 02:45:27', '2022-05-27 02:45:27', NULL),
(8, 'azmi@gmail.com', 'azmi', '$2y$10$kt6XRR3gI3SsrcIw6eqbpefsyFpNBenIF82h0aVKOMsywJq5BONte', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-27 07:12:50', '2022-05-27 07:12:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



