-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2016 pada 04.59
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tokobuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userid` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`userid`, `password`, `username`) VALUES
('admin', 'admin', 'mugo lestantuno');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
`ID_buku` int(5) NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `komentar` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`ID_buku`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(1, 'Regina Melati', 'regina@gmail.com', 'buku nya sudah sampai gan ', '2016-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kat` int(3) NOT NULL,
  `nama_kat` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Buku Novel'),
(2, 'Buku Komik'),
(3, 'Buku Kamus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id_kota` int(3) NOT NULL,
  `nm_kota` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ongkir` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nm_kota`, `ongkir`) VALUES
(1, 'Jakarta', 9000),
(2, 'Bekasi', 7000),
(3, 'Bandung', 12000),
(4, 'Bogor', 8000),
(5, 'Surabaya', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(4) NOT NULL,
  `password` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `telp` varchar(13) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `id_kota` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `password`, `nama`, `alamat`, `telp`, `email`, `id_kota`) VALUES
(1, '1234', 'Regina Melati', 'jl flamboyan no 2 jakarta selatan', '089912345678', 'regina@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `total_bayar` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_orders`, `status`, `tgl`, `jam`, `total_bayar`, `id_member`) VALUES
('NF0000001', 'oke', '2016-12-07', '12:50:48', '32000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_detail`
--

CREATE TABLE IF NOT EXISTS `orders_detail` (
  `id_orders` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `id_produk` int(3) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `id_produk`, `jumlah`, `total_harga`) VALUES
('NF0000001', 202, 1, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_temp`
--

CREATE TABLE IF NOT EXISTS `orders_temp` (
`id_orders_temp` int(5) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `id_session` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jumlah` int(4) NOT NULL,
  `tgl_order_temp` date NOT NULL,
  `jam_order_temp` time NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=406 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(3) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `harga` int(8) NOT NULL,
  `stok` int(8) NOT NULL,
  `berat` decimal(5,2) NOT NULL,
  `gambar` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `id_kat` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `keterangan`, `harga`, `stok`, `berat`, `gambar`, `tgl`, `id_kat`) VALUES
(201, 'LC: Parasyte 06', 'Penulis : Hitoshi Iwaaki || Penerbit : Elex Media Komputindo || Tanggal terbit : November - 2016 || Jumlah Halaman : 216 || Kategori : Comic', 19000, 3, '1.00', 'bk1.jpg', '2016-12-07', 2),
(101, 'Bad Romance', 'Penulis : Equita Millianda || Penerbit : Pastel Books || Tanggal terbit : November - 2016 || Jumlah Halaman : 376 || Kategori: Teenlit', 67000, 3, '1.00', 'bn1.jpg', '2016-12-07', 1),
(102, 'Lost In Lawu', 'Penulis : Andri Saptono || Penerbit : Kaki Langit || Tanggal terbit : Maret - 2016 || Jumlah Halaman : 234 || Kategori : Remaja', 56000, 3, '1.00', 'bn2.jpg', '2016-12-07', 1),
(103, 'Bulan Lebam Di Tepian Toba', 'Penulis : Sihar Ramses Simatupang || Penerbit : Kaki Langit || Tanggal terbit : 2009 || Jumlah Halaman : 260 || Kategori : Drama', 34000, 3, '1.00', 'bn3.jpg', '2016-12-07', 1),
(303, 'Kamus Lengkap Inggris-Indonesi', 'Penulis : Sutrisno, S.Pd & Achmad Fanani, M.Pd || Penerbit : Senja Publishing || Tanggal terbit : September - 2016 || Kategori : Belajar Bahasa', 85000, 3, '1.00', 'bm3.jpg', '2016-12-07', 3),
(302, 'Kamus Lengkap Jepang Indonesia', 'Penulis : Muryani J Semita || Penerbit : PUSAT STUDI BAHASA || Tanggal terbit : 2014 || Kategori : Belajar Bahasa', 107000, 3, '1.00', 'bm2.jpg', '2016-12-07', 3),
(301, 'Korean Made Easy For Beginners', 'Penulis : Oh Seung Eun || Penerbit : Grasindo || Tanggal terbit : Juni - 2016 || Jumlah Halaman : 288 || Kategori : Belajar Bahasa', 122000, 3, '1.00', 'bm1.jpg', '2016-12-07', 3),
(202, 'Crayon Shinchan 48', 'Penulis : Yoshito Usui || Penerbit : Elex Media Komputindo || Tanggal terbit : November - 2016 || Jumlah Halaman : 112 || Kategori : Comic', 20000, 3, '1.00', 'bk2.jpg', '2016-12-07', 2),
(203, 'One Shot: Fairy Tail Zero', 'Penulis : Hiro Mashima || Penerbit : Elex Media Komputindo || Tanggal terbit : November - 2016 || Jumlah Halaman : 280 || Kategori : Comic', 20000, 3, '1.00', 'bk3.jpg', '2016-12-07', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
 ADD PRIMARY KEY (`ID_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `orders_temp`
--
ALTER TABLE `orders_temp`
 ADD PRIMARY KEY (`id_orders_temp`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
MODIFY `ID_buku` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id_kota` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `orders_temp`
--
ALTER TABLE `orders_temp`
MODIFY `id_orders_temp` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=406;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
