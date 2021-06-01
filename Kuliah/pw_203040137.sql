-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 17.49
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
-- Database: `pw_203040137`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Fresabayu Anggoro', '203040137', 'fresabayu0601@gmail.com', 'Teknik Informatikaa', '1.png'),
(2, 'Siti Wasillah Djuniakh', '203040138', 'wasillah.siti10@gmail.com', 'Pendidikan Matematika', '2.png'),
(3, 'Lely Alawiyah', '203040139', 'lelyalawiyah@gmail.com', 'Pendidikan Agama Islam', '3.png'),
(5, 'Alia Ardiana', '203040141', 'aliaar@gmail.com', 'Teknik Industri', '5.png'),
(6, 'Karno Arwa', '203040142', 'karnoa@gmmail.com', 'Menejemen Pendidikan Islam', '6.png'),
(7, 'Ahmad Masum', '203040143', 'ahmadm@gmail.com', 'Hukum Pidana Islam', '7.png'),
(8, 'Adjie Tubagus Ar', '203040144', 'adjietb@gmail.com', 'Pendidikan Agama Islam', '8.png'),
(9, 'Nazil Romadhon', '203040145', 'nazilr@gmail.com', 'Teknik Idustri', '9.png'),
(10, 'Sopyan Sauri', '203040146', 'sopyans@gmail.com', 'Pendidikan Bahasa Inggris', '10.png'),
(25, 'Ilasari Fauziah', '203040147', 'ilasarifz@gmail.com', 'Teknik Kedokteran', '3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'fresaa', '$2y$10$Y0e8.iYwxm8YQzYhztDPP.s95QiaB2VuEFfAy6IlJSoAdm5QuN/wa'),
(5, 'bay', '$2y$10$6sovj1WZqM9DJB1mYNJ8vubN4IKGV7ZVcNEqZkNwcG8thWXtZowAC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
