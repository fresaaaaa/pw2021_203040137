-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 13.21
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
-- Database: `tubes_203040137`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Studio` varchar(15) NOT NULL,
  `Source` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `gambar`, `Judul`, `Genre`, `Status`, `Studio`, `Source`) VALUES
(1, 'onepiece.png', 'One Piece', 'Action, Adventure, Comedy, Super Power, Fantasy', 'Ongoing', 'Toei Animation', 'Manga'),
(2, 'naruto.png', 'Naruto Shippuden', 'Action, Adventure, Comedy, Super Power, Shounen', 'Complete', 'Pierrot', 'Manga'),
(3, 'bc.png', 'Black Clover', 'Action, Comedy, Magic, Fantasy, Shounen', 'Complete', 'Pierrot', 'Manga'),
(4, 'hxh.png', 'Hunter x Hunter', 'Action, Adventure, Super Power, Fantasy, Shounen', 'Complete', 'Madhouse', 'Manga'),
(5, 'bnha.png', 'Boku no Hero Academia', 'Action, Comedy, Super Power, School, Shounen', 'Complete', 'Bones', 'Manga'),
(6, 'boruto.png', 'Boruto: Naruto Next Generations', 'Action, Adventure, Super Power, Martial Arts, Shou', 'Ongoing', 'Pierrot', 'Manga'),
(7, 'char.png', 'Charlotte', 'Drama, School, Super Power', 'Complete', 'P.A Works', 'Original'),
(8, 'nise.png', 'Nisekoi: False Love', 'Harem, Comedy, Romance, School, Shounen', 'Complete', 'Shaft', 'Manga'),
(9, 'opm.png', 'One Punch Man', 'Action, Sci-Fi, Comedy, Parody, Super Power, Super', 'Complete', 'Madhouse', 'Web Manga'),
(10, 'kny.png', 'Kimetsu no Yaiba', 'Action, Demon, Historical, Shounen, Superanatural', 'Complete', 'Ufotable', 'Manga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'bay', '$2y$10$0jJuQlPnvbDEkcsJgQpyceb4vof16vuaOgH82Q5GC9gYdKgmD6ya2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
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
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
