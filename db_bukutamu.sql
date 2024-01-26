-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2023 pada 07.46
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `email`, `alamat`, `nim`, `jurusan`, `tanggal`) VALUES
(2, 'Hong Jisoo', 'jisooya@gmail.com', 'Los Angeles', 'H1D019012', 'Informatika', '2022-05-30'),
(3, 'Fikka ayu', 'fikka2121@gmail.com', 'Baturraden', 'H1D019044', 'Informatika', '2022-05-31'),
(4, 'Novi Siti Nurapriyani', 'novi28@gmail.com', 'Ciamis', 'H1D019012', 'Informatika', '2022-05-31'),
(5, 'Xu Minghao', 'minghaou8@gmail.com', 'Korea Selatan', 'H1D019008', 'Informatika', '2022-05-31'),
(6, 'Mildyanis Estika', 'estika@gmail.com', 'Cirebon', 'H1D019008', 'Informatika', '2022-05-31'),
(7, 'Aliya Nada Kamiliya', 'nada28@gmail.com', 'Ciamis', 'H1D019011', 'Informatika', '2022-05-31'),
(8, 'Trinita Risqi Widiyanti', 'nita@gmail.com', 'Kedungbanteng', 'H1D019029', 'Informatika', '2022-05-31'),
(9, 'Byun Baekhyun', 'baekhyun0605@gmail.com', 'Bucheon, Korea Selatan', 'H1D019044', 'Informatika', '2022-05-31'),
(10, 'Park Chanyeol', 'loey61@gmail.com', 'Korea Selatan', 'H1D019061', 'Informatika', '2022-05-31'),
(11, 'Gendis Ariesta Pragita Putri', 'gendisku@gmail.com', 'Pekalongan', 'H1D019041', 'Informatika', '2022-05-31'),
(12, 'Indah Cahya Febriani', 'indaahnyadunia@gmail.com', 'Cilacap', 'H1D019054', 'Informatika', '2022-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`) VALUES
(1, 'Fikka Ayu Pamirtha Sary', 'fikka21@gmail.com', 'default.jpg', '$2y$10$WfUCdXCdzhTzD0eK4wHEP.7PhuSMsRluDuxvwOYfvi/x2UtEn9fpG'),
(3, 'admin', 'admin@gmail.com', '', 'admin123'),
(4, 'Admin', 'admin1@gmail.com', 'default.jpg', '$2y$10$Yp/zrlb7Go.I6Bb2BNYPjurBLiZvHX7.oD1gjrsTW8n2bIFwLQ27O');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
