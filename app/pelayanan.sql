-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 03:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` varchar(6) NOT NULL,
  `n_pelapor` varchar(30) NOT NULL,
  `j_pelapor` varchar(30) NOT NULL,
  `d_pelapor` varchar(30) NOT NULL,
  `n_barang` varchar(30) NOT NULL,
  `k_sifat` varchar(30) NOT NULL,
  `i_aduan` varchar(100) NOT NULL,
  `g_aduan` varchar(100) NOT NULL,
  `p_pelayanan` varchar(30) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `ket_petugas` varchar(100) NOT NULL,
  `tgl_lapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `n_pelapor`, `j_pelapor`, `d_pelapor`, `n_barang`, `k_sifat`, `i_aduan`, `g_aduan`, `p_pelayanan`, `ket`, `status`, `ket_petugas`, `tgl_lapor`) VALUES
('NP0001', 'asfasf', '12313', '213123', 'Layanan Informasi', 'Keterangan Rencana Kota', 'asfas', 'safasf', 'Putri Rahmaniar', 'asfaf', 'Sedang diajukan', '-', '2023-11-10'),
('NP0002', 'Fathur', '21313', '12313', 'Layanan Informasi', 'Keterangan Rencana Kota', 'aasfasf', 'asfasaf', 'Putri Rahmaniar', 'safasfsafasfafs', 'Sedang diajukan', '-', '2023-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `img`, `status`) VALUES
('1', 'admin', '$2y$10$vx9rULGqEcbI1khsJ2su8eRHIhZlpmvQW5sPZu3jmk471MtfaNqrm', 'Admin', '1617430645_admin2.png', 1),
('1204075', 'fathur', '$2y$10$fqtnhndDqFeFsMM3kGnxX.f2TggnLuHpe2MY7ywCVQMdgzqXS2YkG', 'Fathur Abdul Hali', 'default.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
