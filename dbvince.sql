-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvince`
--

-- --------------------------------------------------------

--
-- Table structure for table `gangguan`
--

CREATE TABLE `gangguan` (
  `id_gangguan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_nama` int(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `ciri` text NOT NULL,
  `dampak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gangguan`
--

INSERT INTO `gangguan` (`id_gangguan`, `tanggal`, `id_nama`, `nama_alat`, `ciri`, `dampak`) VALUES
(1, '2021-12-20', 8, 'Server A', 'Mati mendadak', 'Kinerja menjadi lambat\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_peralatan`
--

CREATE TABLE `jenis_peralatan` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_peralatan`
--

INSERT INTO `jenis_peralatan` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Router'),
(3, 'Switch/Hub'),
(5, 'Radio Wireless'),
(6, 'Access Point'),
(7, 'PC / Mini PC'),
(8, 'Server'),
(9, 'Modem');

-- --------------------------------------------------------

--
-- Table structure for table `nama_peralatan`
--

CREATE TABLE `nama_peralatan` (
  `id_nama` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `jumlah_port` varchar(11) DEFAULT NULL,
  `alamat_ip` varchar(50) DEFAULT NULL,
  `nama_wifi` varchar(50) DEFAULT NULL,
  `pass_wifi` varchar(50) DEFAULT NULL,
  `frekuensi` varchar(50) DEFAULT NULL,
  `lebar_frekuensi` varchar(50) DEFAULT NULL,
  `ram` varchar(50) DEFAULT NULL,
  `storage` varchar(50) DEFAULT NULL,
  `prosesor` varchar(50) DEFAULT NULL,
  `lokasi_awal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nama_peralatan`
--

INSERT INTO `nama_peralatan` (`id_nama`, `id_jenis`, `nama_jenis`, `nama_alat`, `jumlah_port`, `alamat_ip`, `nama_wifi`, `pass_wifi`, `frekuensi`, `lebar_frekuensi`, `ram`, `storage`, `prosesor`, `lokasi_awal`) VALUES
(8, 8, 'Server', 'Server A', '', '', '', '', '', '', '4 GB', '500 GB', 'Intel i5', 'Kantor A'),
(9, 6, 'Access Point', 'Access Point A', '', '200.200.200.0', 'test1', 'test1', '48 Khz', '100mm', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penanganan_gangguan`
--

CREATE TABLE `penanganan_gangguan` (
  `id_penanganan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_gangguan` int(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `ciri` text NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `tindakan` text NOT NULL,
  `hasil` text NOT NULL,
  `rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penanganan_gangguan`
--

INSERT INTO `penanganan_gangguan` (`id_penanganan`, `tanggal`, `id_gangguan`, `nama_alat`, `ciri`, `oleh`, `tindakan`, `hasil`, `rekomendasi`) VALUES
(1, '2021-12-20', 1, 'Server A', 'Mati mendadak', 'vince', 'penjagaan lingkungan server', 'server berjalan normal', 'tempatkan server ditempat yang aman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gangguan`
--
ALTER TABLE `gangguan`
  ADD PRIMARY KEY (`id_gangguan`),
  ADD KEY `id_nama` (`id_nama`);

--
-- Indexes for table `jenis_peralatan`
--
ALTER TABLE `jenis_peralatan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `nama_peralatan`
--
ALTER TABLE `nama_peralatan`
  ADD PRIMARY KEY (`id_nama`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `penanganan_gangguan`
--
ALTER TABLE `penanganan_gangguan`
  ADD PRIMARY KEY (`id_penanganan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gangguan`
--
ALTER TABLE `gangguan`
  MODIFY `id_gangguan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_peralatan`
--
ALTER TABLE `jenis_peralatan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nama_peralatan`
--
ALTER TABLE `nama_peralatan`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penanganan_gangguan`
--
ALTER TABLE `penanganan_gangguan`
  MODIFY `id_penanganan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nama_peralatan`
--
ALTER TABLE `nama_peralatan`
  ADD CONSTRAINT `nama_peralatan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_peralatan` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
