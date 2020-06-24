-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 04:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiking`
--

-- --------------------------------------------------------

--
-- Table structure for table `gunung`
--

CREATE TABLE `gunung` (
  `id_gunung` int(8) NOT NULL,
  `nama_gunung` varchar(64) NOT NULL,
  `alamat_gunung` text NOT NULL,
  `konten` text NOT NULL,
  `slug_gunung` varchar(64) NOT NULL,
  `gambar` varchar(512) NOT NULL,
  `harga` int(11) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kabupaten_kota` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `time` date NOT NULL,
  `id_status` int(8) NOT NULL,
  `id_kategori` int(8) NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gunung`
--

INSERT INTO `gunung` (`id_gunung`, `nama_gunung`, `alamat_gunung`, `konten`, `slug_gunung`, `gambar`, `harga`, `provinsi`, `kabupaten_kota`, `kecamatan`, `time`, `id_status`, `id_kategori`, `id_user`) VALUES
(4, 'Gunung Semeru', 'Jawa Timur', '<p>Aku adalah gunung semeru</p>', 'gunung-semeru', 'tes.jpg', 0, 'Jawa Timur', 'Malang', 'Batu', '2020-06-17', 1, 1, 2),
(8, 'Selindung Edit', '', '<p>xx</p>', 'selindung-edit', 'tes.jpg', 0, 'Kalimantan Barat', 'Sambas', 'Selakau', '2020-06-17', 1, 1, 2),
(9, 'Ceremaiii', '', '<p style=\"text-align: justify;\"><strong>nama saya iqbal.&nbsp;<em>saya suka makan</em></strong>.&nbsp;</p>', 'ceremaiii', 'tes.jpg', 0, 'jabar', 'kuningan', 'aa', '2020-06-17', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_gunung`
--

CREATE TABLE `kategori_gunung` (
  `id_kategori` int(8) NOT NULL,
  `kategori_gunung` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_gunung`
--

INSERT INTO `kategori_gunung` (`id_kategori`, `kategori_gunung`) VALUES
(1, 'Gunung Api'),
(2, 'Bukan Gunung Api');

-- --------------------------------------------------------

--
-- Table structure for table `status_gunung`
--

CREATE TABLE `status_gunung` (
  `id_status` int(8) NOT NULL,
  `status_gunung` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_gunung`
--

INSERT INTO `status_gunung` (`id_status`, `status_gunung`) VALUES
(1, 'Dibuka'),
(2, 'Tutup');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(512) NOT NULL,
  `name` varchar(64) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role_id`, `image`) VALUES
(2, 'admin', '$2y$10$gJUTNNAvaY4dBmsXjWuJ8.W8uw6NDbfxNZrdSMviwQ8e2Px0I6Goq', 'Iqbal Atma Muliawan', 1, 'iqbal.png'),
(3, 'bambang', 'bambang', '0', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gunung`
--
ALTER TABLE `gunung`
  ADD PRIMARY KEY (`id_gunung`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori_gunung`
--
ALTER TABLE `kategori_gunung`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `status_gunung`
--
ALTER TABLE `status_gunung`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gunung`
--
ALTER TABLE `gunung`
  MODIFY `id_gunung` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_gunung`
--
ALTER TABLE `kategori_gunung`
  MODIFY `id_kategori` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_gunung`
--
ALTER TABLE `status_gunung`
  MODIFY `id_status` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gunung`
--
ALTER TABLE `gunung`
  ADD CONSTRAINT `gunung_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_gunung` (`id_kategori`),
  ADD CONSTRAINT `gunung_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status_gunung` (`id_status`),
  ADD CONSTRAINT `gunung_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
