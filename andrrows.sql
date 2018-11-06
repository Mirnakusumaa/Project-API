-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 10:30 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andrrows`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_orders`
--

CREATE TABLE `detail_orders` (
  `id_order` int(20) NOT NULL,
  `id_service` int(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `jumlah_sepatu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `total_harga` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` enum('Belum Dibayar','Sudah Dibayar','Sedang Di Proses','Selesai Di Proses','Belum Diambil','Sudah Diambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `total_harga` BEFORE INSERT ON `orders` FOR EACH ROW BEGIN
SET @service1 = (select harga FROM services WHERE nama_service = new.service1);
SET @service2 = (SELECT harga FROM services WHERE nama_service = new.service2);
SET @service3 = (SELECT harga FROM services WHERE nama_service = new.service3);
SET @layanan_tambahan = (SELECT harga FROM services WHERE nama_service = new.layanan_tambahan);
SET new.total_harga = (@service1+@service2+@service3+@layanan_tambahan)*new.jumlah_sepatu;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id_service` int(20) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_service`, `jenis_layanan`, `harga`) VALUES
(1, 'fast cleaning', '30000'),
(2, 'deep cleaning', '40000'),
(3, 'leather care', '60000'),
(4, 'repair', '45000'),
(5, 'repaint', '50000'),
(6, 'unyellowing and whitening', '70000'),
(7, 'just for her', '30000'),
(8, 'waterproff action', '80000'),
(9, 'fast cleaning + waterproff action', '100000'),
(10, 'deep cleaning + waterproff action', '110000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','customer') NOT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `level`, `remember_token`) VALUES
(12, 'oja', 'ojajnda', '$2y$10$S/UpXS3R/9LDD70NIRjKguaWWloqaVGYkHRRjd4pkqh7exuRg31xa', '', ''),
(13, 'kusumawati', 'miefue', '$2y$10$E8.tJKBtEh4dKq/4WiqNyeBQezqHmxQXvx1tP4yUmkSYTuvBQRIei', '', ''),
(17, 'mirna', 'mirnakusumawati38@gmail.com', '$2y$10$dZG0XtNE0FHSRpYzZ7ZeW.YzTmwRiSAn.lpzms3aJ5dZrTug8c38K', '', 'OEdL76Ex5UBbaKYvZR0PouFfSdkoffYpC6FIz82ndEJnaWfoFOlNgtLPi7cq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD CONSTRAINT `detail_orders_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `detail_orders_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
