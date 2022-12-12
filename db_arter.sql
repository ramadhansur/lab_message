-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Des 2022 pada 06.26
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `pemeriksaan` text,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama`, `email`, `no_telp`, `jenis_kelamin`, `pemeriksaan`, `status`) VALUES
(1, 'Rissa', 'ramadhansuryanto44@gmail.com', '089633616973', 'Perempuan', 'Gula Darah Puasa', 'SUDAH'),
(2, 'Rissa', 'ramadhansuryanto44@gmail.com', '089633616973', 'Perempuan', 'Asam Urat', 'SUDAH'),
(3, 'Rangga', 'Rangga@gmail.com', '085156953573', 'Laki-laki', 'Gula Darah Puasa', 'SUDAH'),
(4, 'Rangga', 'Rangga@gmail.com', '085156953573', 'Laki-laki', 'Trigliserida', 'SUDAH'),
(5, 'Rangga', 'Rangga@gmail.com', '085156953573', 'Laki-laki', 'asfsdsffqwerwqe', 'SUDAH'),
(6, 'Lisa', 'lisa@gmail.com', '081239797630', 'Perempuan', 'Gula Darah Puasa', 'SUDAH'),
(7, 'Lisa', 'lisa@gmail.com', '081239797630', 'Perempuan', 'Trigliserida', 'BELUM'),
(8, 'Lisa', 'lisa@gmail.com', '081239797630', 'Perempuan', 'Asam Urat', 'BELUM'),
(9, 'Lisa', 'lisa@gmail.com', '081239797630', 'Perempuan', 'asfsdsffqwerwqe', 'BELUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL,
  `pemeriksaan` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id`, `pemeriksaan`, `pesan`) VALUES
(1, 'Gula Darah Puasa', 'ayo kita puasa'),
(2, 'Kolesterol', 'asdfsdfasdfasdf'),
(3, 'Trigliserida', 'asdf'),
(5, 'Asam Urat', 'sdfasfafasd'),
(6, 'asdfasdfa', 'sdfasddfasdf'),
(7, 'asfsdsffqwerwqe', 'qwerwefsadfasd'),
(8, 'asdfsdfasdfsdf', 'ssdfasdfasdf'),
(9, 'Glukosa', 'ladjflkasjdfoowiejrlkwerwqerweqr');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
