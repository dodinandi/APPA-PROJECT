-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 02:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbappaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `harga` int(8) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_menu`, `nama_menu`, `tempat`, `tanggal_booking`, `harga`, `gambar`) VALUES
(2, 'wedding', 'pik 2', '2022-12-25', 500000, 'bgw.jpg'),
(3, 'graduation', 'ancol', '2023-01-25', 500000, 'bggrr.jpg'),
(4, 'graduation', 'kota tua', '2023-01-25', 500000, 'bgtv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `total_belanja` int(9) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_menu`, `nama`, `tanggal_pesanan`, `total_belanja`, `bukti_bayar`) VALUES
(29, 3, 'Anita Susanti', '2022-11-26', 500000, '136417956_158770296035889_6118466206667857565_n.jpg'),
(30, 2, 'windy artika', '2022-11-26', 500000, '136417956_158770296035889_6118466206667857565_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `selesai`
--

CREATE TABLE `selesai` (
  `id_pemotretan` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `hasil_pemotretan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selesai`
--

INSERT INTO `selesai` (`id_pemotretan`, `id_menu`, `nama`, `tanggal_selesai`, `hasil_pemotretan`) VALUES
(4, 3, 'Anita Susanti', '2022-11-26', 'New folder.rar'),
(7, 2, 'windy artika', '2022-11-26', 'Hasil Foto.rar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `status` enum('admin','user','photographer','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `hp`, `status`) VALUES
(1, 'admin', 'admin', 'Dodi Hernandi', 'Laki-Laki', '1999-07-01', 'jl.budi mulia rt 10/15', '081280692124', 'admin'),
(2, 'customer', 'customer', 'Windy Artika', 'Perempuan', '2001-08-25', 'jl.jembatan 2', '081280692124', 'user'),
(3, 'photographer', 'photographer', 'Anwar', 'Laki-Laki', '1998-06-01', 'jl.tanah merah', '081280692124', 'photographer'),
(4, 'owner', 'owner', 'ibnu', 'Laki-Laki', '1992-11-05', 'jl.tambun', '081280692124', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `selesai`
--
ALTER TABLE `selesai`
  ADD PRIMARY KEY (`id_pemotretan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `selesai`
--
ALTER TABLE `selesai`
  MODIFY `id_pemotretan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
