-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2023 pada 13.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Jumlah` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `Kode`, `Nama`, `Satuan`, `Jumlah`, `Gambar`) VALUES
(3, '21312aw2', 'TITAN', 'PCS', '11', '64341d9881a85.jpg'),
(4, '21312aw2', 'Pensil', 'PSC', '10', '64f11b966de20.png'),
(5, 'fbd32h2', 'BUKU', 'PSC', '20', '64f186fa7c5a4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporankeluar`
--

CREATE TABLE `laporankeluar` (
  `id` int(11) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Jumlah` varchar(255) NOT NULL,
  `Tanggal` varchar(225) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `JumlahKurang` varchar(255) NOT NULL,
  `Hasil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporankeluar`
--

INSERT INTO `laporankeluar` (`id`, `Kode`, `Nama`, `Satuan`, `Jumlah`, `Tanggal`, `Gambar`, `JumlahKurang`, `Hasil`) VALUES
(1, '21312aw2', 'fdsa', 'PCS', '400', '', '', '200', '200'),
(2, '21312aw2', 'TITAN', 'PCS', '3', '2023-04-10', '64341d9881a85.jpg', '1', '2'),
(3, '21312aw2', 'TITAN', 'PCS', '2', '2023-08-31', '64341d9881a85.jpg', '3', '-1'),
(4, '', '', '', '', '2023-09-01', '', '', '0'),
(5, '', '', '', '', '2023-09-01', '', '', '0'),
(6, '21312aw2', 'Pensil', 'PSC', '40', '2023-09-01', '64f11b966de20.png', '30', '10'),
(7, 'fbd32h2', 'BUKU', 'PSC', '35', '2023-09-01', '64f186fa7c5a4.png', '15', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanmasuk`
--

CREATE TABLE `laporanmasuk` (
  `id` int(11) NOT NULL,
  `Kode` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Jumlah` varchar(255) NOT NULL,
  `Tanggal` varchar(225) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `JumlahTambah` varchar(255) NOT NULL,
  `Hasil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporanmasuk`
--

INSERT INTO `laporanmasuk` (`id`, `Kode`, `Nama`, `Satuan`, `Jumlah`, `Tanggal`, `Gambar`, `JumlahTambah`, `Hasil`) VALUES
(2, '21312aw2', 'fdsa', 'PCS', '300', '', '', '100', '400'),
(3, '21312aw2', 'TITAN', 'PCS', '0', '2023-04-10', '64341d9881a85.jpg', '1', '1'),
(4, '21312aw2', 'TITAN', 'PCS', '1', '2023-04-10', '64341d9881a85.jpg', '2', '3'),
(5, '21312aw2', 'TITAN', 'PCS', '-1', '2023-09-01', '64341d9881a85.jpg', '12', '11'),
(6, '21312aw2', 'Pensil', 'PSC', '20', '2023-09-01', '64f11b966de20.png', '20', '40'),
(7, 'fbd32h2', 'BUKU', 'PSC', '20', '2023-09-01', '64f186fa7c5a4.png', '15', '35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'adm', 'adm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplayer`
--

CREATE TABLE `suplayer` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Perusahaan` varchar(255) NOT NULL,
  `Nomor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplayer`
--

INSERT INTO `suplayer` (`id`, `Nama`, `Alamat`, `Perusahaan`, `Nomor`) VALUES
(1, 'Titan', 'HONGKONG', 'PT HONGKONG', '211221'),
(2, 'Hanif', 'Bekasi', 'PT Telkom', '213129321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporankeluar`
--
ALTER TABLE `laporankeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanmasuk`
--
ALTER TABLE `laporanmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suplayer`
--
ALTER TABLE `suplayer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `laporankeluar`
--
ALTER TABLE `laporankeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporanmasuk`
--
ALTER TABLE `laporanmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `suplayer`
--
ALTER TABLE `suplayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
