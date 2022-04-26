-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 07:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id_web` int(11) NOT NULL,
  `nama_web` varchar(50) NOT NULL,
  `logo_web` varchar(100) NOT NULL,
  `deskripsi_web` varchar(100) NOT NULL,
  `pembuatweb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id_web`, `nama_web`, `logo_web`, `deskripsi_web`, `pembuatweb`) VALUES
(1, 'E-Book', 'logo.png', 'E-Book adalah layanan website berbasis ...', 'Kijang 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `role` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `nama`, `username`, `email`, `password`, `is_active`, `date_created`) VALUES
(11, 2, 'Haruman Wiguna', 'admin', 'harumanwiguna1@gmail.com', '$2y$10$SMBUyhX7Zf4SyKhJKi0MDeuBPTAYUFXvW3zPDpeZP.wgOxx8GPMTK', 0, '0000-00-00'),
(12, 2, '', '', '', '$2y$10$JmpUNZ3vXyx0wlhHYLb5xukRZRDeT0u790Pw2R2HV7e/Wph89Hb9m', 0, '0000-00-00'),
(13, 2, 'Haruman Wiguna', 'admin', 'harumanwiguna1@gmail.com', '$2y$10$Wfcv0FBtZGTbyGqWxyA7V.5zpr3G7ZydZ7LXSYb1s/o8xDHQfWYnu', 0, '0000-00-00'),
(14, 2, 'Haruman Wiguna', 'admin', 'harumanwiguna1@gmail.com', '$2y$10$9nyxyTh.Ui6Hu/tqLdj9l.uYDdMdC0CXiyKj6Rl5mKhpOsNaePn/2', 0, '0000-00-00'),
(15, 2, 'Haruman Wiguna', 'admin', 'harumanwiguna1@gmail.com', '$2y$10$KeSRcxXDnmBTRJwbDV1xfee8wJVNUK/hix3onGEu4J37uQVQiGJ5m', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(19, 'harumanwiguna1@gmail.com', '5426933691', '0000-00-00'),
(20, '', '2603111758', '0000-00-00'),
(21, 'harumanwiguna1@gmail.com', '1383141272', '0000-00-00'),
(22, 'harumanwiguna1@gmail.com', '5016747698', '0000-00-00'),
(23, 'harumanwiguna1@gmail.com', '2646886172', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_web`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
