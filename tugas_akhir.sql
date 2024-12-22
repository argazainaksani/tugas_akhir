-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2020 pada 11.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `alamat`, `no_telepon`) VALUES
(3, 'arga zain aksani', 'jl klipang blok k84', '+6282133477552'),
(7, 'kaneki', 'Jl. Pierrot aired on Tokyo MX ', '+6282133477553'),
(8, 'kirito', 'jl A-1 Pictures.', '+6282133477554'),
(9, 'kurumi', 'Jl. Aic Plus+', '+6282133477555'),
(10, 'c.ronaldo', 'Jl. Juventus Raya NO 6', '+6282133477556'),
(11, 'Roney', 'Jl. mancester United no 20', '+6282133477580'),
(12, 'cosmos', 'jl myako', '+6282133477590');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama_pembayaran` varchar(200) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `cicilan` varchar(100) NOT NULL,
  `aktif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama_pembayaran`, `nominal`, `cicilan`, `aktif`) VALUES
(1, 'Spp 11rpl', '75.000', '1x', 'aktif'),
(8, 'Spp 11Otp', '75.000', '1x', 'aktif'),
(9, 'Spp 11Akl', '75.000', '1x', 'aktif'),
(10, 'Spp 11Bdp', '75.000', '1x', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_siswa`
--

CREATE TABLE `laporan_siswa` (
  `id_laporan` int(11) NOT NULL,
  `Bulan` varchar(100) NOT NULL,
  `Total` varchar(200) NOT NULL,
  `sudah_dibayar` varchar(100) NOT NULL,
  `tanggal_bayar` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_siswa`
--

INSERT INTO `laporan_siswa` (`id_laporan`, `Bulan`, `Total`, `sudah_dibayar`, `tanggal_bayar`, `status`) VALUES
(4, 'januari', '75.000', 'Rp 0', '-', 'belum Lunas'),
(7, 'februari', '75.000', 'Rp 0', '-', 'belum Lunas'),
(8, 'maret', '75.000', 'Rp 0', '-', 'belum Lunas'),
(9, 'april', '75.000', 'Rp 0', '-', 'belum Lunas'),
(10, 'mei', '75.000', 'Rp 0', '-', 'belum Lunas'),
(11, 'januari', '75.000', 'Rp 0', '-', 'belum Lunas'),
(14, 'januari', '75.000', 'Rp 0', '-', 'belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` char(9) NOT NULL,
  `jenis_biaya` varchar(100) NOT NULL,
  `total_beban` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nis`, `nama_siswa`, `kelas`, `jenis_biaya`, `total_beban`, `status`) VALUES
(5, '8875', 'arga zain aksani', '11Rpl', 'spp per bulan', '750000', 'belum lunas'),
(8, '8876', 'kaneki', '11Rpl', 'spp per bulan', '750000', 'belum lunas'),
(9, '8877', 'kirito', '11Rpl', 'spp per bulan', '750000', 'belum lunas'),
(10, '8878', 'kurumi', '11Rpl', 'spp per bulan', '750000', 'belum lunas'),
(11, '8879', 'c. ronaldo', '11Rpl', 'spp per bulan', '750000', 'belum lunas'),
(12, '8880', 'Roney', '11Rpl', 'spp per bulan', '750000', 'belum lunas'),
(13, '8881', 'cosmos', '11Rpl', 'spp per bulan', '750000', 'belum lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'arga zain', '$2y$10$fJmGWS7Fs40KtQjqkaagxO0B.qXRydW4NjvNR6VUN.toQwGUMo2VO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_siswa`
--
ALTER TABLE `laporan_siswa`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laporan_siswa`
--
ALTER TABLE `laporan_siswa`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
