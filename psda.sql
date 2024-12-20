-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2024 pada 14.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidangs`
--

CREATE TABLE `bidangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bidang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bidangs`
--

INSERT INTO `bidangs` (`id`, `nama_bidang`, `created_at`, `updated_at`) VALUES
(1, 'kepaladinas', '2024-12-07 04:50:27', '2024-12-07 04:50:27'),
(2, 'Industri Pariwisata', '2024-12-07 04:50:27', '2024-12-07 04:50:27'),
(3, 'sekretariat', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surat_dari` varchar(255) NOT NULL,
  `diterima` date NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `nomor_agenda` varchar(255) NOT NULL,
  `hal` varchar(255) NOT NULL,
  `catatan_sekretaris` text DEFAULT NULL,
  `diteruskan_kepada` varchar(255) NOT NULL,
  `tindak_lanjut` text DEFAULT NULL,
  `catatan_kepaladinas` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id`, `surat_dari`, `diterima`, `tanggal_surat`, `nomor_surat`, `nomor_agenda`, `hal`, `catatan_sekretaris`, `diteruskan_kepada`, `tindak_lanjut`, `catatan_kepaladinas`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Dinas Pendidikan', '2024-12-05', '2024-12-03', '123/SD/2024', '456/AG/2024', 'Permohonan Dana Kegiatan', 'Segera diproses dan ditindaklanjuti.', 'Kepala Bidang Pendidikan', 'Diharapkan anggaran dapat disetujui minggu depan.', 'Perhatikan anggaran dan timeline kegiatan.', '2024-12-07 13:48:13', '2024-12-07 13:48:13'),
(2, 'Kepala Dinas Pendidikan asgus', '2024-12-05', '2024-12-03', '123/SD/2024', '456/AG/2024', 'Permohonan Dana Kegiatan', 'Segera diproses dan ditindaklanjuti.', '-', '-', '-', '2024-12-08 07:37:15', '2024-12-08 07:37:15'),
(3, 'Kepala Dinas Pendidikan agus', '2024-12-05', '2024-12-03', '123/SD/2024', '456/AG/2024', 'Permohonan Dana Kegiatan', 'Segera diproses dan ditindaklanjuti.', '-', '-', '-', '2024-12-08 08:17:55', '2024-12-13 08:22:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisis`
--

INSERT INTO `divisis` (`id`, `nama_divisi`, `bidang_id`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Dinas', 1, '2024-12-07 04:50:27', '2024-12-07 04:50:27'),
(2, 'Sekretaris', 2, '2024-12-07 04:50:27', '2024-12-07 04:50:27'),
(4, 'Sekretariat', 1, NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_28_081909_create_bidangs_table', 1),
(6, '2024_04_28_090547_create_divisis_table', 1),
(7, '2024_04_28_090607_create_pegawais_table', 1),
(8, '2024_04_28_090647_create_pengajuans_table', 1),
(9, '2024_06_21_032035_create_perjalanan_dinas_table', 1),
(10, '2024_06_22_022836_change_jml_hari_to_integer_on_pengajuans_table', 1),
(11, '2024_11_15_160354_create_pengajuan_komentar_table', 1),
(12, '2024_12_02_135210_create_pengajuan_cutis_table', 1),
(13, '2024_12_02_135319_create_pengajuancuti_komentar_table', 1),
(14, '2024_12_07_201817_create_disposisi_table', 2);

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
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `divisi_id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama`, `nip`, `jenis_kelamin`, `email`, `password`, `divisi_id`, `bidang_id`, `created_at`, `updated_at`) VALUES
(1, 'Akbar Setiawan', '123456789', 'L', 'akbarcindo@gmail.com', '$2y$12$RR4sP76Zg1/s1jIaGQFwZe3pHPnven0RlFwAb4AtEDMKli8iQHHLS', 1, 1, '2024-12-07 04:50:27', '2024-12-07 04:50:27'),
(2, 'Bayu Gaming', '987654321', 'L', 'bayu@gmail.com', '$2y$12$ngB9zElgCODARDp11eD7oefoFT3Hib4q.yLvFuq6EDTgH9RKvtWDG', 2, 2, '2024-12-07 04:50:27', '2024-12-07 04:50:27'),
(3, 'sekertaris', '989898', 'L', 'sekertaris@gmail.com', '$2y$12$ngB9zElgCODARDp11eD7oefoFT3Hib4q.yLvFuq6EDTgH9RKvtWDG', 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuancuti_komentar`
--

CREATE TABLE `pengajuancuti_komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengajuancuti_id` bigint(20) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuans`
--

CREATE TABLE `pengajuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepada` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `hal` varchar(255) NOT NULL,
  `dasar` text NOT NULL,
  `urusan` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `lama_perjalanan` varchar(255) NOT NULL,
  `sumber_pembayaran` varchar(255) NOT NULL,
  `jumlah_berpergian` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `staf_pendamping` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`staf_pendamping`)),
  `pejabat_nama` varchar(255) NOT NULL,
  `pejabat_pangkat` varchar(255) NOT NULL,
  `pejabat_nip` varchar(255) NOT NULL,
  `pejabat_jabatan` varchar(255) NOT NULL,
  `transportasi` varchar(255) NOT NULL,
  `status` enum('proses','ditolak','disetujui','perbaiki') NOT NULL DEFAULT 'proses',
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `status_sekretaris` enum('belum_dikonfirmasi','disetujui','ditolak') NOT NULL DEFAULT 'belum_dikonfirmasi',
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jml_hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuans`
--

INSERT INTO `pengajuans` (`id`, `kepada`, `dari`, `tanggal`, `nomor`, `sifat`, `hal`, `dasar`, `urusan`, `tujuan`, `lama_perjalanan`, `sumber_pembayaran`, `jumlah_berpergian`, `staf_pendamping`, `pejabat_nama`, `pejabat_pangkat`, `pejabat_nip`, `pejabat_jabatan`, `transportasi`, `status`, `is_admin`, `status_sekretaris`, `pegawai_id`, `created_at`, `updated_at`, `jml_hari`) VALUES
(1, 'Kepala Sekolah', 'Guru', '2024-11-10', '123/ABC/2024', 'Penting', 'Perjalanan Dinas', 'Menindaklanjuti instruksi Kepala Sekolah', 'Pendidikan', 'Kota Jakarta', '5 Hari', 'DIPA', 1, '[{\"nama\":\"tes\",\"nip\":\"988\",\"pangkat\":\"Petugas\",\"jabatan\":\"Petugas\"}]', 'Dr. Joko Widodo', 'PNS', '19831205', 'Kepala Sekolah', 'Kendaraan Dinas', 'disetujui', 0, 'ditolak', 2, '2024-12-07 05:05:25', '2024-12-07 11:54:27', NULL),
(2, 'kanann', 'Guru', '2024-11-10', '123/ABC/2024', 'Penting', 'Perjalanan Dinas', 'Menindaklanjuti instruksi Kepala Sekolah', 'Pendidikan', 'Kota Jakarta', '5 Hari', 'DIPA', 1, '[{\"nama\":\"EDO AZANI\",\"nip\":\"a\",\"pangkat\":\"4B\",\"jabatan\":\"Wakil Kepala sekolah\"}]', 'Dr. Joko Widodo', 'PNS', '19831205', 'Kepala Sekolah', 'Kendaraan Dinas', 'proses', 0, 'belum_dikonfirmasi', 2, '2024-12-20 06:48:52', '2024-12-20 06:48:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_cuti`
--

CREATE TABLE `pengajuan_cuti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `masa_kerja` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `jenis_cuti` enum('Cuti Tahunan','Cuti Besar','Cuti Sakit','Cuti Melahirkan','Cuti Alasan Penting','Cuti Lain-lain') NOT NULL,
  `alasan_cuti` text NOT NULL,
  `lama_cuti` int(10) UNSIGNED NOT NULL,
  `alamat_cuti` varchar(255) NOT NULL,
  `catatan_cuti` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`catatan_cuti`)),
  `status` varchar(255) NOT NULL DEFAULT 'Proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuan_cuti`
--

INSERT INTO `pengajuan_cuti` (`id`, `pegawai_id`, `nomor_surat`, `nama`, `nip`, `jabatan`, `masa_kerja`, `unit_kerja`, `jenis_cuti`, `alasan_cuti`, `lama_cuti`, `alamat_cuti`, `catatan_cuti`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '78721872', 'Mohammad Qudsi HM - Gulukmanjung Bluto Sumenep', '4353453', 'Osis', '5 tahun', 'tes', 'Cuti Besar', 'akjsak', 10, 'Palembang', '\"{\\\"cuti_tahunan\\\":{\\\"tahun\\\":\\\"-\\\",\\\"sisa\\\":\\\"1\\\",\\\"keterangan\\\":\\\"a\\\"},\\\"cuti_besar\\\":{\\\"tahun\\\":\\\"-\\\",\\\"sisa\\\":\\\"1\\\",\\\"keterangan\\\":\\\"v\\\"},\\\"cuti_sakit\\\":{\\\"tahun\\\":\\\"-\\\",\\\"sisa\\\":\\\"1\\\",\\\"keterangan\\\":\\\"x\\\"},\\\"cuti_melahirkan\\\":{\\\"tahun\\\":\\\"-\\\",\\\"sisa\\\":\\\"1\\\",\\\"keterangan\\\":\\\"c\\\"},\\\"cuti_alasan_penting\\\":{\\\"tahun\\\":\\\"-\\\",\\\"sisa\\\":\\\"11\\\",\\\"keterangan\\\":\\\"v\\\"},\\\"cuti_luar_tanggungan\\\":{\\\"tahun\\\":\\\"-\\\",\\\"sisa\\\":\\\"1\\\",\\\"keterangan\\\":\\\"z\\\"}}\"', 'Proses', '2024-12-07 12:30:08', '2024-12-07 12:30:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_komentar`
--

CREATE TABLE `pengajuan_komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengajuan_id` bigint(20) UNSIGNED NOT NULL,
  `id_surat` bigint(20) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `status` enum('proses','disetujui','ditolak','perbaiki') NOT NULL DEFAULT 'proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuan_komentar`
--

INSERT INTO `pengajuan_komentar` (`id`, `pengajuan_id`, `id_surat`, `komentar`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'tes halo', 'proses', '2024-12-07 06:01:46', '2024-12-07 06:01:46'),
(2, 1, 1, 'tes', 'disetujui', '2024-12-07 06:01:57', '2024-12-07 06:01:57'),
(3, 1, 1, 'bagus', 'disetujui', '2024-12-07 07:37:28', '2024-12-07 07:37:28'),
(4, 1, 1, 'konci', 'proses', '2024-12-07 11:46:40', '2024-12-07 11:46:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjalanan_dinas`
--

CREATE TABLE `perjalanan_dinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisis_bidang_id_foreign` (`bidang_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_email_unique` (`email`),
  ADD KEY `pegawais_divisi_id_foreign` (`divisi_id`),
  ADD KEY `pegawais_bidang_id_foreign` (`bidang_id`);

--
-- Indeks untuk tabel `pengajuancuti_komentar`
--
ALTER TABLE `pengajuancuti_komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuancuti_komentar_pengajuan_cuti_id_foreign` (`pengajuancuti_id`);

--
-- Indeks untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuans_pegawai_id_foreign` (`pegawai_id`);

--
-- Indeks untuk tabel `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuan_komentar`
--
ALTER TABLE `pengajuan_komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuan_komentar_pengajuan_id_foreign` (`pengajuan_id`);

--
-- Indeks untuk tabel `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengajuancuti_komentar`
--
ALTER TABLE `pengajuancuti_komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_komentar`
--
ALTER TABLE `pengajuan_komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `divisis`
--
ALTER TABLE `divisis`
  ADD CONSTRAINT `divisis_bidang_id_foreign` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_bidang_id_foreign` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`),
  ADD CONSTRAINT `pegawais_divisi_id_foreign` FOREIGN KEY (`divisi_id`) REFERENCES `divisis` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengajuancuti_komentar`
--
ALTER TABLE `pengajuancuti_komentar`
  ADD CONSTRAINT `pengajuancuti_komentar_pengajuan_cuti_id_foreign` FOREIGN KEY (`pengajuancuti_id`) REFERENCES `pengajuan_cuti` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD CONSTRAINT `pengajuans_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajuan_komentar`
--
ALTER TABLE `pengajuan_komentar`
  ADD CONSTRAINT `pengajuan_komentar_pengajuan_id_foreign` FOREIGN KEY (`pengajuan_id`) REFERENCES `pengajuans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
