-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb:3306
-- Generation Time: Sep 08, 2019 at 04:05 PM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobildinaspendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `iddriver` varchar(6) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `noktp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`iddriver`, `nama`, `alamat`, `nohp`, `noktp`) VALUES
('IDR001', 'Sugeng', 'Jogonalan', '8732123', '8737281232'),
('IDR002', 'Ahmad', 'Joyokarian', '983123', '7468327234');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idpemesanan` varchar(6) NOT NULL,
  `waktu` time NOT NULL,
  `tanggalpeminjaman` date DEFAULT NULL,
  `tanggalpengembali` date DEFAULT NULL,
  `namapenanggung` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `platmobil` varchar(10) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idpemesanan`, `waktu`, `tanggalpeminjaman`, `tanggalpengembali`, `namapenanggung`, `nohp`, `platmobil`, `bidang`, `tujuan`) VALUES
('PMS001', '00:32:00', '2019-09-02', '2019-09-08', 'Ahmad', '08955332211', 'AD3421DS', 'Sosial', 'Salatiga');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idadmin` varchar(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idadmin`, `username`, `password`) VALUES
('ADM001', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpemesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
