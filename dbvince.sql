-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:01 AM
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
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(15) NOT NULL,
  `kode_kendaraan` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `kode_kendaraan`, `merk`, `harga`, `stok`) VALUES
(3, 'HP001', 'Honda PCX e HEV', 43712000, 50),
(4, 'HF001', 'Honda Forza', 84807000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(15) NOT NULL,
  `kode_pelanggan` varchar(7) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `kode_pelanggan`, `nama_pelanggan`, `alamat`, `kota`) VALUES
(1, 'P_00001', 'PT.Ikhlas', 'Jl. Melati No. 5', 'Padang'),
(2, 'P_00002', 'PT. Syukur', 'Jl. Mawar No. 1', 'Bukittinggi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(15) NOT NULL,
  `no_faktur` varchar(25) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `kode_pelanggan` varchar(25) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kode_kendaraan` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `stok` int(15) NOT NULL,
  `jml_transaksi` int(15) NOT NULL,
  `jml_bayar` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_faktur`, `tgl_faktur`, `kode_pelanggan`, `nama_pelanggan`, `alamat`, `kota`, `kode_kendaraan`, `merk`, `harga`, `stok`, `jml_transaksi`, `jml_bayar`) VALUES
(3, 'Fak01', '2021-07-01', 'P_00001', 'PT. Ikhlas', 'Jl. Melati No. 5', 'Padang', 'P_00001', 'Honda PCX e HEV', 43712000, 50, 3, 131136000),
(4, 'Fak01', '2021-07-01', 'P_00001', 'PT. Ikhlas', 'Jl. Melati No. 5', 'Padang', 'P_00001', 'Honda Forza', 84807000, 20, 2, 169614000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
