-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2021 pada 12.03
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040137`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Terbit` date NOT NULL,
  `Dimensi` varchar(15) NOT NULL,
  `ISBN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `Judul`, `Pengarang`, `Terbit`, `Dimensi`, `ISBN`) VALUES
(1, 'a.png', 'Outliers', 'Malcolm Gladwell', '2008-11-18', '304 Halaman', '9780141036243'),
(2, 'b.png', 'Blink', 'Malcolm Gladwell', '2005-01-11', '330 Halaman', '9781586217617'),
(3, 'c.png', 'The Tipping Point', 'Malcolm Gladwell', '2000-08-15', '304 Halaman', '9781586217457'),
(4, 'd.png', 'Talking to Strangers', 'Malcolm Gladwell', '2019-09-10', '400 Halaman', '9781549100017'),
(5, 'e.png', 'What the Dog Saw', 'Malcolm Gladwell', '2009-10-20', '432 Halaman', '9781600249150'),
(6, 'g.png', 'David and Goliath', 'Malcolm Gladwell', '2013-10-01', '320 Halaman', '9781478980445'),
(7, 'f.png', 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Mark Manson', '2016-09-13', '224 Halaman', '9781441711366'),
(8, 'h.png', 'Sang Pemimpi', 'Andrea Hirata', '2006-07-10', '292 Halaman', '9783446249691'),
(9, 'i.png', 'Laskar Pelangi', 'Andrea Hirata', '2005-05-26', '529 Halaman', '9780374246310'),
(10, 'j.png', 'Lontara Rindu', 'S. Gegge Mappangewa', '2012-04-15', '342 Halaman', '9786027595019');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
