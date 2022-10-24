-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2022 pada 21.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nolepsenpai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'pekopon', '$2y$10$biIPkBUp87S5WyGWyKHDVunwK67qOKxXbN5tXvJ458P8wtpDqRvzi'),
(3, 'admin', '$2y$10$KHGrcQporxjAmYa2Oy7gPeoY6OXPU0IIRe1HDOko.p0DvIo.r.lk.'),
(4, 'admin46', '$2y$10$CsxiwijFsMgRASvv/DjvwubvZes5.cLutVFG9r.4hPHtrPxncWUgO'),
(5, '12345', '$2y$10$P2vgtJfNr/T4qfw9cdYbgOKrWLrByWa5P/Mo.sWLWtbkBrFJu1nSG'),
(6, '1234', '$2y$10$vq2EAtn1lJgrNvxd0SJ5j.omKzorK0Q8twywLErBMu1nVOxVO4ZD6'),
(7, '456', '250cf8b51c773f3f8dc8b4be867a9a02'),
(8, '234', '$2y$11$q5Yy4Z9aenuzgIYmsIPVWuMPG9O63fQzRWvwaYxP5sLa3nn8kSZz6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `studio` varchar(100) NOT NULL,
  `genre` text DEFAULT NULL,
  `skor` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `judul`, `tanggal_rilis`, `studio`, `genre`, `skor`, `gambar`) VALUES
(19, 'Naruto: Shippuuden', '2019-10-17', 'Studio Pierrot', 'Action, Adventure, Comedy, Martial Art', '8.19', 'Kakashi.jpg'),
(20, 'One Piece', '2022-10-02', 'Toei Animation', 'Comedy, Fantasy, Super Power', '8.53', 'Zoro.jpg'),
(21, 'Shingeki no Kyojin', '2020-12-16', 'Wit Studio', 'Fantasy, Military, Mystery, Supernatural', '8.19', 'Erwin.jpg'),
(22, 'Jujutsu Kaisen', '2021-03-31', 'MAPPA', 'Horror, School, Supernatural', '9.0', 'Gojo.jpg'),
(23, 'Kimetsu no Yaiba', '2022-02-14', 'Ufotable', 'Action, Demons, Historical, Shounen', '8.67', 'Tengen.jpg'),
(24, 'Hunter X Hunter', '2019-12-06', 'Madhouse', 'Adventure, Fantasy, Shounen', '9.12', 'Hisoka.jpg'),
(29, 'jbbsss', '0000-00-00', 'knknk', 'nknkn', 'knkn', '634a61656e352.jpg'),
(30, 'test', '0000-00-00', 'test', 'test', 'lkn', 'test'),
(31, 'test', '0000-00-00', 'test', 'test', 'lkn', 'test'),
(32, 'test', '0000-00-00', 'test', 'test', 'lkn', 'test'),
(33, 'test', '0000-00-00', 'test', 'test', 'lkn', 'test');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
