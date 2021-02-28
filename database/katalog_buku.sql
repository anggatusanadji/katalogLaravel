-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2020 pada 01.41
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_10_02_025802_alter_users_add_username', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(2, 'Angga', 'anggatusanadji@gmail.com', NULL, '$2y$10$8d7KqJybDdu..riyTmhukumjR3R5nVrlxeR0iUVXN1iWbiWR/mvlC', 'h3JyKXqIWBa1XztR3q8Xu41UfnnNoNroKAdJUN6FonlzKabSOi4XO1ZOPB7H', '2020-10-19 14:39:45', '2020-10-19 14:39:45', 'anggatus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `deskripsi_buku` varchar(500) NOT NULL,
  `penerbit_id` int(5) NOT NULL,
  `penulis_buku` varchar(200) NOT NULL,
  `jumlah_halaman` int(4) NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  `harga_buku` varchar(10) NOT NULL,
  `cover_buku` varchar(100) NOT NULL,
  `tipe_buku_id` int(5) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `kategori_id`, `judul_buku`, `deskripsi_buku`, `penerbit_id`, `penulis_buku`, `jumlah_halaman`, `tahun_terbit`, `harga_buku`, `cover_buku`, `tipe_buku_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'Kambing Jantan: Sebuah Catatan Harian Pelajar Bodoh', ' Buku ini berkonsep buku harian dan berisi 235 halaman, yang ditulis berdasarkan kejadian asli sang penulis saat ia kuliah di Adelaide, Australia. Buku ini pun sempat difilmkan pada tahun 2009', 1, 'Raditya Dika', 235, '2005', '50000', 'Belum Ada', 1, 'Tersedia', NULL, NULL, NULL),
(6, 2, 'Danur', 'Buku ini menceritakan tentang masa kecil penulis yang diikuti sosok hantu belanda bernama Peter, William, Hans, Hendrik, dan Jhansen', 2, 'Risa Saraswati', 214, '2012', '75000', 'Belum Ada', 1, 'Tersedia', NULL, NULL, NULL),
(9, 1, 'Manusia Setengah Salmon', 'Berkonsepkan cerita komedi yang ditulis berdasarkan kisah sang penulis seperti dalam buku-buku sebelumnya', 1, 'Raditya Dika', 264, '2011', '75000', 'Belum Ada', 1, 'Tersedia', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `deskripsi_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Komedi', 'Berisi cerita lucu, konyol dan menggelitik yang bisa membuat anda tertawa.. hahahahaha...', '2020-10-06 15:59:32', '2020-10-06 16:01:25', NULL),
(2, 'Horror', 'Cerita seram yang membuat anda merinding, bahkan merasa ketakutan', '2020-10-06 16:00:07', '2020-10-06 16:00:07', NULL),
(3, 'Romantis', 'Cerita menarik yang diperuntukkan untuk para remaja yang berisi tentang kisah cinta sepasang kekasih', '2020-10-06 16:00:29', '2020-10-06 16:00:29', NULL),
(4, 'Drama', 'Cerita menegangkan yang mengisahkan tentang seseorang yang berhadapan dengan konflik, sehingga membuat para pembaca tegang', '2020-10-06 16:00:56', '2020-10-06 16:00:56', NULL),
(5, 'b', 'b', '2020-10-19 02:37:14', '2020-10-19 14:49:27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id` int(11) NOT NULL,
  `nama_penerbit` varchar(255) NOT NULL,
  `alamat_penerbit` varchar(255) NOT NULL,
  `tlp_penerbit` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id`, `nama_penerbit`, `alamat_penerbit`, `tlp_penerbit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gagasmedia', 'Jln. H. Montong No. 57, Ciganjur, Jagakarsa', '(021) 45456565', '0000-00-00 00:00:00', '2020-10-19 15:09:43', NULL),
(2, 'Elexmedia Komputindo', 'Jl. Palmerah Barat No. 29–32, Gelora, Tanah Abang', '(021) 53650110', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_buku`
--

CREATE TABLE `tb_tipe_buku` (
  `id_tipe_buku` int(5) NOT NULL,
  `nama_tipe_buku` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tipe_buku`
--

INSERT INTO `tb_tipe_buku` (`id_tipe_buku`, `nama_tipe_buku`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Popular', NULL, NULL, NULL),
(2, 'Diskon', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`kategori_id`),
  ADD KEY `id_penerbit` (`penerbit_id`),
  ADD KEY `id_tipe_buku` (`tipe_buku_id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tb_tipe_buku`
--
ALTER TABLE `tb_tipe_buku`
  ADD PRIMARY KEY (`id_tipe_buku`),
  ADD KEY `id_tipe_buku` (`id_tipe_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tipe_buku`
--
ALTER TABLE `tb_tipe_buku`
  MODIFY `id_tipe_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`tipe_buku_id`) REFERENCES `tb_tipe_buku` (`id_tipe_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`penerbit_id`) REFERENCES `tb_penerbit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
