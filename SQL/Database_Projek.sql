-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2025 at 06:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Projek_Pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bahan_Material`
--

CREATE TABLE `Bahan_Material` (
  `jenis_unit` varchar(50) NOT NULL,
  `nama_material` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Bahan_Material`
--

INSERT INTO `Bahan_Material` (`jenis_unit`, `nama_material`) VALUES
('Rumah Subsidi', 'Atap Spandek Hitam'),
('Rumah Subsidi', 'Batako Kelas 1'),
('Rumah Subsidi', 'Batu Gunung Moramo'),
('Rumah Subsidi', 'Besi 10, 8, 6 SNI'),
('Rumah Subsidi', 'Cat Propan'),
('Rumah Subsidi', 'Daun Pintu HDF'),
('Rumah Subsidi', 'Gybsum A+'),
('Rumah Subsidi', 'Kayu Jati Lokal'),
('Rumah Subsidi', 'Kayu Jati Putih'),
('Rumah Subsidi', 'Pasir Nambo'),
('Rumah Subsidi', 'Pasir Pohara'),
('Rumah Subsidi', 'Pasir Unaha'),
('Rumah Subsidi', 'Semen Tonasa dan Cons'),
('Rumah Subsidi', 'Tehel Acurra');

-- --------------------------------------------------------

--
-- Table structure for table `Berita`
--

CREATE TABLE `Berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `kata_kunci` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Berita`
--

INSERT INTO `Berita` (`id`, `gambar`, `nama`, `keterangan`, `tanggal`, `kata_kunci`) VALUES
(2, 'lokasi_perumahan.jpg', 'Pembangunan Rumah Bersubsidi', '\"Rumah subsidi yang layak dan bagus untuk dimiliki, lokasi cukup strategis dikota Kendari. telah berdasarkan regulasi pemeritah telah terbangun sebanyak 98 unit rumah subsidi. pembangunan terus di laksanakan hingga 200 unit rumah subsidi.\" ', '2023-05-11', 'Pemabangunan rumah bersubsidi di wilayah kota Kendari');

-- --------------------------------------------------------

--
-- Table structure for table `Fasilitas`
--

CREATE TABLE `Fasilitas` (
  `nama_fasilitas` varchar(50) NOT NULL,
  `gambar` mediumblob DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Fasilitas`
--

INSERT INTO `Fasilitas` (`nama_fasilitas`, `gambar`, `keterangan`) VALUES
('Area Parkiran', NULL, NULL),
('Jalan Paving', NULL, NULL),
('Lapangan Olahraga', NULL, NULL),
('Masjid', NULL, NULL),
('Taman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Feedback_Customer`
--

CREATE TABLE `Feedback_Customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Ruangan`
--

CREATE TABLE `Ruangan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Ruangan`
--

INSERT INTO `Ruangan` (`id`, `gambar`, `nama`) VALUES
(1, 'Kamar 1.jpg', 'Kamar Tidur'),
(2, 'Kamar Mandi.jpg', 'Kamar Mandi'),
(3, 'ruang dapur.jpg', 'Ruang Dapur'),
(4, 'ruang tengah.jpg', 'Ruang Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `Ulasan_Pelanggan`
--

CREATE TABLE `Ulasan_Pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Ulasan_Pelanggan`
--

INSERT INTO `Ulasan_Pelanggan` (`id_pelanggan`, `nama_pelanggan`, `keterangan`, `email_pelanggan`) VALUES
(1, 'q', 'ewe', 'farhansp03@gmail.com'),
(2, 'qwww', 'eeeeeeeeeee', 'farhansp03@gmail.com'),
(3, 'qw', '1123qw', 'fdemogod@gmail.com'),
(4, 'Farhan', 'Halo', 'farhansp03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Unit`
--

CREATE TABLE `Unit` (
  `jenis_unit` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `tampak_depan` mediumblob DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tampak_atas` mediumblob DEFAULT NULL,
  `tampak_belakang` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Unit`
--

INSERT INTO `Unit` (`jenis_unit`, `harga`, `tampak_depan`, `deskripsi`, `tampak_atas`, `tampak_belakang`) VALUES
('Rumah Subsidi', 180000000, NULL, 'Merupakan rumah subsidi dengan dana bantuan dari pemerintah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'da', 'huhah', '123', 'admin'),
(2, 'Farhan', 'tidak ada', '$2y$10$1nH02A62HEwBeESjDHqGpusZvmUG6NFU./D5i12t.GAgbcKjPg3WO', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bahan_Material`
--
ALTER TABLE `Bahan_Material`
  ADD PRIMARY KEY (`jenis_unit`,`nama_material`);

--
-- Indexes for table `Berita`
--
ALTER TABLE `Berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Fasilitas`
--
ALTER TABLE `Fasilitas`
  ADD PRIMARY KEY (`nama_fasilitas`);

--
-- Indexes for table `Feedback_Customer`
--
ALTER TABLE `Feedback_Customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `Ruangan`
--
ALTER TABLE `Ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Ulasan_Pelanggan`
--
ALTER TABLE `Ulasan_Pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `Unit`
--
ALTER TABLE `Unit`
  ADD PRIMARY KEY (`jenis_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Berita`
--
ALTER TABLE `Berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Feedback_Customer`
--
ALTER TABLE `Feedback_Customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Ruangan`
--
ALTER TABLE `Ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Ulasan_Pelanggan`
--
ALTER TABLE `Ulasan_Pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bahan_Material`
--
ALTER TABLE `Bahan_Material`
  ADD CONSTRAINT `Bahan_Material_ibfk_1` FOREIGN KEY (`jenis_unit`) REFERENCES `Unit` (`jenis_unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
