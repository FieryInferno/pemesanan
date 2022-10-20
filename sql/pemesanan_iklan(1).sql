-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2022 pada 09.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_iklan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_siaran`
--

CREATE TABLE `jenis_siaran` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_siaran`
--

INSERT INTO `jenis_siaran` (`id`, `jenis`) VALUES
(1, 'Spot'),
(2, 'Jingle'),
(3, 'Filler'),
(4, 'Advertorial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `jasa_siaran` varchar(50) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `detail_tarif_subtotal` varchar(200) NOT NULL,
  `detail_tarif` varchar(100) NOT NULL,
  `oder_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_detail`, `jasa_siaran`, `qty`, `detail_tarif_subtotal`, `detail_tarif`, `oder_status`) VALUES
(41, 54, '2', '50', '2250000', '45000', 0),
(42, 55, '1', '101', '3282500', '32500', 0),
(43, 56, '2', '66', '2970000', '45000', 0),
(44, 57, '1', '40', '1300000', '32500', 0),
(45, 58, '2', '100', '4500000', '45000', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_detail`
--

CREATE TABLE `pemesanan_detail` (
  `id_detail` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `order_tanggal` date NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tgl_penyiaran` varchar(100) NOT NULL,
  `tgl_akhirpenyiaran` varchar(100) NOT NULL,
  `programa` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `isi_iklan` varchar(255) NOT NULL,
  `keterangan_berkas` varchar(255) NOT NULL,
  `order_total` varchar(100) NOT NULL,
  `order_status` int(1) NOT NULL,
  `waktu_order` datetime NOT NULL,
  `waktu_siaran` varchar(50) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan_detail`
--

INSERT INTO `pemesanan_detail` (`id_detail`, `nama_instansi`, `order_tanggal`, `id_jenis`, `jenis`, `tgl_penyiaran`, `tgl_akhirpenyiaran`, `programa`, `no_telepon`, `email`, `isi_iklan`, `keterangan_berkas`, `order_total`, `order_status`, `waktu_order`, `waktu_siaran`, `catatan`) VALUES
(54, 'Pt.surya puja', '2022-10-10', 0, 'Spot', '', '', 'Programa1', '081343355602', 'cindyolivia@gmail.com', 'CETAK KARTU RENCANA STUDI skripsi 2.pdf', '-', '', 0, '2022-10-10 16:46:10', '', '1 hari 2 kali tayang'),
(55, 'Makmur Selalu', '2022-10-10', 0, 'jingle', '', '', 'Programa 2', '081343355602', 'makmur@gmail.com ', 'Kelas Remaja Minggu Ke-19.pdf', '-', '', 0, '2022-10-10 16:47:39', '', '1 hari 2 kali tayang'),
(56, 'Pt.Berkah Abadi', '2022-10-17', 0, 'Filler', '19 Oktober 2022', '30 Desember 2022', 'Programa 4', '081343355602', 'berkah@gmail.com', 'CETAK KARTU RENCANA STUDI skripsi 2.pdf', '-', '', 0, '2022-10-17 17:43:16', '05.00-18.00 Wit', '1 hari 1 kali tayang'),
(57, 'Pt.Indo', '2022-10-17', 0, 'Advertorial', '19 Oktober 2022', '8 November 2022', 'Programa 2', '081343355602', 'olivia@gmail.com', 'Kelas Remaja Minggu Ke-19.pdf', '-', '', 0, '2022-10-17 17:48:05', '18.00-24.00 Wit', '1 hari 2 kali tayang'),
(58, 'Cindy Rumpaidus', '2022-10-19', 0, 'Spot', '', '', 'Programa 4', '081343355602', 'olivia@gmail.com', 'Jean Welsa Rumpaidus pdf 2021 sk003.pdf', '-', '', 0, '2022-10-19 09:17:06', '', '1 hari 2 kali tayang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyiaran_iklan`
--

CREATE TABLE `penyiaran_iklan` (
  `id_penyiaran` int(11) NOT NULL,
  `nama_instansi_id` varchar(100) NOT NULL,
  `jasa_siaran_id` varchar(100) NOT NULL,
  `jenis_siaran_iklan` varchar(100) NOT NULL,
  `tgl_penyiaran` date NOT NULL,
  `tgl_akhir_penyiaran` date NOT NULL,
  `waktu_siaran` varchar(100) NOT NULL,
  `total_siaran` varchar(100) NOT NULL,
  `programa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran_masukan`
--

CREATE TABLE `saran_masukan` (
  `id` int(11) NOT NULL,
  `nama_klien` varchar(100) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `kritik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saran_masukan`
--

INSERT INTO `saran_masukan` (`id`, `nama_klien`, `saran`, `kritik`) VALUES
(3, 'PT. Surya Puja membahana', 'Selain web buat juga aplikasi mobile phone.', 'Aplikasi dapat lebih baik lagi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif_iklan`
--

CREATE TABLE `tarif_iklan` (
  `id_tarif` int(11) NOT NULL,
  `jasa_siaran` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tarif` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tarif_iklan`
--

INSERT INTO `tarif_iklan` (`id_tarif`, `jasa_siaran`, `satuan`, `tarif`, `harga`, `keterangan`) VALUES
(1, 'Reguler Time', 'Per 60 detik', '32500', 'Rp.32.500,-', 'Reguler Time adalah waktu yang memilki sedikit pendengar mulai dari pukul 18.00 - 24.00 Wit.'),
(2, 'Prime Time', 'Per 60 detik', '45000', 'Rp.45.000,-', 'Prime Time adalah waktu yang memilki banyak pendengar mulai dari pukul 05.00 - 18.00 Wit.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `gambar`, `password`, `role_id`, `is_active`, `date_created`, `alamat`, `no_telepon`) VALUES
(6, 'Cindy Olivia Rumpaidus', 'olivia@gmail.com', 'default.jpg', '$2y$10$JDR9bU3.hhEObVJsIuMouu3TwhLbepdo.l6ianiTnNcVtMWB3Bf8S', 1, 1, 1648565834, 'Jl. Tasangkapura No.25, Entrop, Jayapura Selatan', '08134331113'),
(7, 'Gabriella Graziella Rumpaidus', 'Bella@gmail.com', 'default.jpg', '$2y$10$rhzdcPnR3vfyIvluITTir.3lWNH9nkw8lsuARnIvRq.64SFpgQ4GS', 2, 1, 1654694099, 'Jln.siri', '(0967) 537488'),
(10, 'Siti Caludia', 'cindyolivia@gmail.com', 'default.jpg', '$2y$10$PpoW6lZxZW6lIfgdzpSyyOdvD7I0xFAbGEy6nhNBfDfN.1zrMhcSC', 2, 1, 1661364375, 'Jln.semangka', '081243356891'),
(14, 'Pt. Makmur', 'makmur@gmail.com', 'default.jpg', '$2y$10$olzDIfmE64o.F5eWy/03gO8TaoKZ3HUA4FPMAVn3GfQi3Xy9jq.ki', 2, 1, 1665324562, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(2, 1, 1),
(4, 2, 2),
(11, 1, 3),
(12, 1, 4),
(13, 1, 20),
(14, 1, 5),
(15, 1, 21),
(16, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'klien'),
(3, 'menu'),
(4, 'Informasi'),
(5, 'Laporan'),
(6, 'Saran & Masukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator '),
(2, 'Klien');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profil Saya', 'klien', 'fas fa-fw fa-user', 1),
(3, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(4, 1, 'Data User', 'user', 'fas fa-fw fa-solid fa-users', 1),
(5, 1, 'Profile Saya\r\n', 'admin/profile', 'fas fa-fw fa-user', 1),
(15, 3, 'Sub Menu Management', 'menu/submenu\r\n', 'fas fa-fw fa-solid fa-folder-open\"', 1),
(27, 2, 'Tarif Iklan', 'daftar_tarif', 'fas fa-fw fa-solid fa-money-bill', 1),
(28, 1, 'Role', 'admin/role', 'fas fa-fw fa-solid fa-user-tie', 1),
(30, 1, 'Tarif Iklan', 'tarif_iklan', 'fas fa-fw fa-solid fa-money-bill', 1),
(31, 4, 'Informasi Penyiaran', 'Penyiaran\r\n', 'fas fa-fw fa-solid fa-info\r\n\r\n', 1),
(32, 4, 'Informasi Pembayaran', 'pembayaran', 'fas fa-fw fa-solid fa-info', 1),
(33, 5, 'Laporan ', 'laporan', 'fas fa-fw fa-solid fa-book', 1),
(34, 1, 'Surat Perjanjian', 'spk', 'fas fa-fw fa-solid fa-envelope', 1),
(35, 6, 'Saran & Masukan', 'saran', '\r\nfas fa-fw fa-solid fa-file-invoice\r\n\r\n', 1),
(36, 4, 'Data Pemesanan', 'pesan_admin', 'fas fa- fw bi bi-cart', 1),
(38, 2, 'Informasi Pembayaran', 'pembayaran_iklan', 'fas fa-fw fa-solid fa-info', 1),
(39, 2, 'Informasi Penyiaran', 'info_penyiaran', 'fas fa-fw fa-solid fa-info', 1),
(40, 2, 'Surat Perjanjian', 'surat', 'fas fa-fw fa-solid fa-envelope', 1),
(41, 2, 'Saran & Masukan', 'saran_masukan', 'fas fa-fw fa-solid fa-file-invoice', 1),
(44, 2, 'Memesan Iklan', 'pesan', 'fas fa- fw bi bi-cart', 1),
(45, 2, 'Riwayat Pemesanan', 'Riwayat', 'bi bi-clock-history', 1),
(46, 36, 'Informasi', 'Info', 'fas fa-fw fa-solid fa-info', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_siaran`
--
ALTER TABLE `jenis_siaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jasa_siaran` (`jasa_siaran`);

--
-- Indeks untuk tabel `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `penyiaran_iklan`
--
ALTER TABLE `penyiaran_iklan`
  ADD PRIMARY KEY (`id_penyiaran`);

--
-- Indeks untuk tabel `saran_masukan`
--
ALTER TABLE `saran_masukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tarif_iklan`
--
ALTER TABLE `tarif_iklan`
  ADD PRIMARY KEY (`id_tarif`),
  ADD KEY `jasa_siaran` (`jasa_siaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_siaran`
--
ALTER TABLE `jenis_siaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `penyiaran_iklan`
--
ALTER TABLE `penyiaran_iklan`
  MODIFY `id_penyiaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `saran_masukan`
--
ALTER TABLE `saran_masukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tarif_iklan`
--
ALTER TABLE `tarif_iklan`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
