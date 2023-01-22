-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2023 pada 08.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_regis`
--

CREATE TABLE `db_regis` (
  `id_regis` int(11) NOT NULL,
  `nama_masjid` varchar(50) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `deskripsi_fasilitas` varchar(500) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_web` varchar(100) NOT NULL,
  `alamat_lengkap` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_regis`
--

INSERT INTO `db_regis` (`id_regis`, `nama_masjid`, `kecamatan`, `kelurahan`, `deskripsi_fasilitas`, `nama_pengurus`, `no_hp`, `email`, `alamat_web`, `alamat_lengkap`, `latitude`) VALUES
(1, '', 'Alaska', 'California', 'aku cinta allah swt.', 'anam', '085666777999', 'chakdarwis@gmail.com', 'http://localhost/kumpulan3/register.php', 'jl. swadaya 1 cimanggis depok', 'apa saja'),
(12, 'baiturrohman', 'Delaware', 'Texas', 'i love you allah', 'amin', '0832222111444', 'chakdarwis@gmail.com', 'http://localhost/kumpulan3/register.php', 'jl ndandanldnaj', 'apa saja'),
(15, 'Baitul Maqdis', 'Alaska', 'California', 'i love allah', 'guru', '098', 'ziazakariyya@gmail.com', 'yuguyyugg', 'jkcnusdcbs', 'cdouab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_regis2`
--

CREATE TABLE `db_regis2` (
  `id_regis2` int(11) NOT NULL,
  `nama_masjid` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nama_dkm` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_regis2`
--

INSERT INTO `db_regis2` (`id_regis2`, `nama_masjid`, `kecamatan`, `kelurahan`, `deskripsi`, `nama_dkm`, `no_hp`, `status`) VALUES
(1, '', '', '', '', '', '', ''),
(15, 'Baitul Maqdis', 'robat', 'Cimanggis', 'ahdoiashf', 'jbdjab', 'lndcal', 'Alaska');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_regis_user`
--

CREATE TABLE `db_regis_user` (
  `id_regis_user` int(11) NOT NULL,
  `nama_masjid` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_web` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_regis_user`
--

INSERT INTO `db_regis_user` (`id_regis_user`, `nama_masjid`, `kecamatan`, `kelurahan`, `deskripsi`, `nama_pengurus`, `no_hp`, `email`, `alamat_web`, `alamat_lengkap`, `latitude`) VALUES
(2, 'Baitul Maqdis', 'Alaska', 'California', 'i love allah', 'guru', '087', 'ziazakariyya@gmail.com', 'wtwfdgd', 'cuiiahc', 'jabcacb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `email`, `username`, `password`) VALUES
(1, '0', '0', '0', '81'),
(2, 'zia', 'ziazakariyya@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'muhammad ali', 'ziazakariyya@gmail.com', 'ali', '86318e52f5ed4801abe1d13d509443de'),
(4, 'hana', 'ziazakariyya@gmail.com', 'hana', '52fd46504e1b86d80cfa22c0a1168a9d'),
(5, 'dimas', 'dimasramadhani333@gmail.com', 'dmz001', '9c90d8246b1840fb5ee588976a5cf6ba'),
(6, 'anton', 'ziazakariyya@gmail.com', 'anton', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'fina', 'safi22234ti@student.nurulfikri.ac.id', 'safntunajah', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'demo', 'demo123@gmail.com', 'demo', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_regis`
--
ALTER TABLE `db_regis`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indeks untuk tabel `db_regis2`
--
ALTER TABLE `db_regis2`
  ADD PRIMARY KEY (`id_regis2`);

--
-- Indeks untuk tabel `db_regis_user`
--
ALTER TABLE `db_regis_user`
  ADD PRIMARY KEY (`id_regis_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_regis`
--
ALTER TABLE `db_regis`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `db_regis2`
--
ALTER TABLE `db_regis2`
  MODIFY `id_regis2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `db_regis_user`
--
ALTER TABLE `db_regis_user`
  MODIFY `id_regis_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
