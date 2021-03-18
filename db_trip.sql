-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 08:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Millenia Silvianthie', 'millen@gmail.com', 'millen', '202cb962ac59075b964b07152d234b70', 'superadmin'),
(2, 'Sakti Dewangga', 'sakti@gmail.com', 'sakti', '827ccb0eea8a706c4c34a16891f84e7b', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `content`) VALUES
(1, 'Berlibur adalah sesuatu hal yang menyenangkan, kita bisa menghibur diri dan menyenangkan pikiran. Kami hadir untuk melayani agar liburan anda menyenangkan dan memberikan kesan perjalanan terbaik di liburan anda.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`) VALUES
(1, 'Anya', 'Geraldine', 'anya@gmail.com', 'Thank You', 'Your travel is amazing'),
(2, 'Cinta ', 'Laura', 'cinta@gmail.com', 'Big thanks', 'I give you five rate, thank you so much'),
(3, 'Adipati', 'Dolken', 'adipati@gmail.com', 'Appreciate', 'Saya rasa setiap pelayanan dalam travel ini luar biasa, thankyou');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_destination`
--

CREATE TABLE `tbl_destination` (
  `id` int(11) NOT NULL,
  `nama_destinasi` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `travel_plan` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `images`, `keterangan`) VALUES
(1, 'images/Candi-Borobudur.jpg', 'Candi Borobudur'),
(2, 'images/Prambanan.jpg', 'Candi Prambanan'),
(3, 'images/Bromo.jpg', 'Bromo'),
(4, 'images/Bali.jpg', 'Pantai Kelingking');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `trip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id`, `nama`, `identitas`, `alamat`, `telp`, `email`, `tanggal`, `trip`) VALUES
(1, 'Anya Geraldine', '35121249020001', 'Jakarta', '085643230909', 'anya@gmail.com', '28/04/2020', 'Malang (2 Person Rp. 2.000.000)'),
(2, 'Cinta Laura', '42121249020202', 'Jakarta', '085733230901', 'cinta@gmail.com', '30/04/2020', 'Malang (1 Person Rp. 1.900.000)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_destination`
--
ALTER TABLE `tbl_destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
