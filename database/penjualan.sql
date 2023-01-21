-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2023 pada 18.15
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
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cake`
--

CREATE TABLE `cake` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cake`
--

INSERT INTO `cake` (`id`, `name`, `kategori`) VALUES
(2, 'Croissant Banana Nutella', 'reguler'),
(3, 'Croissant Butter', 'reguler'),
(4, 'Croissant Kouign Amann', 'reguler'),
(5, 'Croissant Beef Bratwurst Sausage', 'reguler'),
(6, 'Croissant Lotus Biscoff', 'reguler'),
(7, 'Croissant Triple Cheese', 'reguler'),
(8, 'Croissant Bicolor Nutella', 'reguler'),
(9, 'Croissant Cheese Cake Danish', 'reguler'),
(10, 'Croissant Ovomaltine', 'reguler'),
(11, 'Croissant Hazelnut Chocolate', 'reguler'),
(12, 'Croissant Triple Chocolate Gourmandise', 'reguler'),
(13, 'Croissant Black & Berries Chocolate', 'reguler'),
(14, 'Croissant Garlic', 'reguler'),
(15, 'Croissant Cinamon Roll', 'reguler'),
(16, 'Croissant Apple Pie Danish', 'reguler'),
(17, 'Croissant Almond', 'reguler'),
(18, 'Croissant Pain Aux Raisin', 'reguler'),
(19, 'Croissant Salted Egg', 'reguler'),
(20, 'Croissant Matcha', 'reguler'),
(21, 'Croissant Smoked Beef & Mozarella', 'reguler'),
(22, 'Croissant Palmier', 'reguler'),
(23, 'Croissant Croffle', 'reguler'),
(24, 'Croissant Plain Seeded', 'reguler'),
(25, 'Croissant Reddish Danish', 'reguler'),
(26, 'Croissant Valrhona Noisette', 'reguler'),
(27, 'Croissant Quichee', 'reguler'),
(28, 'Croissant Red Velvet', 'reguler'),
(29, 'Croissant Roules A La Pistache', 'reguler'),
(30, 'Nutty Danish', 'reguler'),
(31, 'Kiwi Danish', 'reguler'),
(32, 'Blueberry Danish', 'reguler'),
(33, 'Peach Danish', 'reguler'),
(34, 'Grape Danish', 'reguler'),
(35, 'Raspeberry Danish', 'reguler'),
(36, 'Strawberry Danish', 'reguler'),
(37, 'Flan Parisien', 'reguler'),
(38, 'Chousson Aux Pommes', 'reguler'),
(39, 'Parist Brest Mini Esclair', 'mini'),
(40, 'Jivala Milk Brownie Mini Esclair', 'mini'),
(41, 'Chocolat Noir Mini Esclair', 'mini'),
(42, 'Mix Berries Mini Esclair', 'mini'),
(43, 'Tiramisu Mini Esclair', 'mini'),
(44, 'Flamboise Mini Esclair', 'mini'),
(45, 'Matcha And Pomme Mini Esclair', 'mini'),
(46, 'st Honore Mini Esclair', 'mini'),
(47, 'Citron Maringue Mini Esclair', 'mini'),
(48, 'Croissant Pain Au Chocolate', 'Reguler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soldproduct`
--

CREATE TABLE `soldproduct` (
  `id` int(10) NOT NULL,
  `id_product` int(15) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soldproduct`
--

INSERT INTO `soldproduct` (`id`, `id_product`, `date`, `quantity`) VALUES
(17, 2, '2022-02-16', 24),
(18, 2, '2022-03-14', 43),
(19, 2, '2022-04-17', 8),
(20, 2, '2022-05-01', 38),
(21, 2, '2022-06-01', 33),
(22, 2, '2022-07-01', 30),
(25, 2, '2022-08-01', 38),
(26, 2, '2022-09-01', 29),
(27, 2, '2022-10-02', 35),
(28, 3, '2022-02-01', 30),
(29, 3, '2022-03-01', 9),
(30, 3, '2022-04-01', 8),
(31, 3, '2022-05-01', 49),
(32, 3, '2022-06-01', 24),
(33, 3, '2022-07-01', 21),
(34, 3, '2022-08-01', 33),
(35, 3, '2022-09-01', 29),
(36, 3, '2022-10-01', 33),
(37, 4, '2022-02-01', 25),
(38, 4, '2022-03-01', 23),
(39, 4, '2022-04-01', 6),
(40, 4, '2022-05-01', 27),
(41, 4, '2022-06-01', 28),
(42, 4, '2022-07-01', 31),
(43, 4, '2022-08-01', 27),
(44, 4, '2022-09-01', 25),
(45, 4, '2022-10-01', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `name` varchar(155) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(2, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soldproduct`
--
ALTER TABLE `soldproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `soldproduct`
--
ALTER TABLE `soldproduct`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
