-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2022 at 07:49 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lingkar`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(2) NOT NULL,
  `status` enum('hadir','Tidak Hadir') NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_karyawan`, `status`, `tanggal`, `keterangan`) VALUES
(15, 61, 'Tidak Hadir', '2022-12-14 14:21:12', ''),
(16, 62, 'hadir', '2022-12-14 14:21:37', ''),
(17, 64, 'Tidak Hadir', '2022-12-12 14:21:45', ''),
(18, 64, 'hadir', '2022-12-02 14:22:03', ''),
(19, 62, 'hadir', '2022-12-15 12:39:48', ''),
(20, 61, 'hadir', '2022-12-17 19:20:39', 's'),
(21, 62, 'hadir', '2022-12-21 19:42:54', 'h'),
(22, 62, 'hadir', '2022-12-21 19:43:03', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `karyawan` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis` enum('basah','kering') NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `karyawan`, `nama_barang`, `jenis`, `tanggal`, `jumlah`, `harga`, `keterangan`) VALUES
(1, '', 'Tahu', 'basah', '2022-12-21 20:52:46', 20, 1000000, 'gsdhbaj'),
(2, '', 'Tahu', 'basah', '2022-12-21 20:53:51', 20, 1000000, 'sd'),
(3, '', 'Tahu', 'kering', '2022-12-06 20:54:02', 20, 1000000, 'dasf'),
(4, 'root', 'Tahu', 'kering', '2022-12-21 20:55:04', 20, 1000000, 'ASdsfd');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_income` date NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `nama`, `tgl_income`, `jumlah`) VALUES
(1, 'Rizal KA', '2022-12-06', '200000'),
(2, 'Rizal KA', '2022-12-06', '1000000'),
(11, 'root', '2022-03-20', '1000000'),
(12, 'root', '2022-11-24', '3000000'),
(14, 'root', '2022-12-11', '1000000'),
(15, 'root', '2022-12-12', '2000000'),
(16, 'root', '2022-12-14', '4200000'),
(17, 'root', '2022-12-22', '230000'),
(18, 'root', '2022-12-17', '1920000'),
(19, 'root', '2022-12-26', '2188000');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `tgl_masuk`, `email`, `nohp`, `foto`) VALUES
(60, 'Fitria Ambar Pratiwi1s', '2022-11-22', 'tiwitiwi@gmail.com', '082140466901', 'Screenshot (6) (1).png'),
(61, 'Fitria Ambar Pratiwi', '2022-11-25', 'root@fjsakndsaf', '082140466901', 'Nur Eldir.jpeg'),
(62, 'Rizal Khoirul Anam', '2022-12-15', 'asdas@gma.com', '082140466901', 'lisa-blackpink-di-acara-bvlgari-10_43.jpeg'),
(63, 'root', '1970-01-01', 'root@fjsakndsaf', '082140466901', 'cover-album-mini-bjork-yang-dipakai-bjorka_43.jpeg'),
(64, 'Fitria Ambar Pratiwi', '2022-12-13', 'root@fjsakndsaf', '082140466901', 'png-transparent-black-and-blue-laptop-computer-illustration-computer-programming-programmer-icon-design-software-developer-icon-coder-blue-web-design-text-removebg-preview.png'),
(65, 'root', '2022-12-22', 'root@fjsakndsaf', '082140466901', 'chart.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `category` enum('Makanan','Minuman','Snack') NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `category`, `harga`) VALUES
(1, 'Nasi goreng', 'Makanan', '10k'),
(2, 'Mie goreng', 'Makanan', '10k'),
(3, 'Mie nyemek', 'Makanan', '10k'),
(4, 'Mie kuah', 'Makanan', '10k'),
(5, 'Bihun Goreng', 'Makanan', '10k'),
(6, 'Roti bakar 1 rasa', 'Makanan', '6k'),
(7, 'Roti bakar 2 rasa', 'Makanan', '8k'),
(8, 'Kentang', 'Snack', '9k'),
(9, 'Tahu crispy', 'Snack', '6k'),
(10, 'Nasi bakar', 'Makanan', '6k'),
(11, 'Sate 1500', 'Snack', '1,5k'),
(12, 'Sate 2000', 'Snack', '2k'),
(13, 'Sate 2500', 'Snack', '2,5k'),
(14, 'Sate 3500', 'Snack', '3,5k');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`date`, `value`) VALUES
('2022-12-09 20:56:57', 1),
('2022-12-09 20:57:07', 1),
('2022-12-09 21:04:03', 1),
('2022-12-09 21:09:14', 1),
('2022-12-10 11:21:29', 1),
('2022-12-10 11:23:32', 1),
('2022-12-11 00:31:48', 1),
('2022-12-11 01:38:51', 1),
('2022-12-11 01:38:53', 1),
('2022-12-11 11:20:10', 1),
('2022-12-11 11:30:02', 1),
('2022-12-11 11:30:23', 1),
('2022-12-11 11:30:36', 1),
('2022-12-11 11:30:38', 1),
('2022-12-11 11:32:09', 1),
('2022-12-11 11:32:11', 1),
('2022-12-11 11:32:14', 1),
('2022-12-11 11:32:15', 1),
('2022-12-11 11:33:18', 1),
('2022-12-11 15:44:34', 1),
('2022-12-11 23:47:13', 1),
('2022-12-11 23:47:20', 1),
('2022-12-12 10:17:05', 1),
('2022-12-12 19:40:21', 1),
('2022-12-12 19:40:26', 1),
('2022-12-12 19:41:47', 1),
('2022-12-13 20:51:36', 1),
('2022-12-14 14:17:40', 1),
('2022-12-14 14:58:06', 1),
('2022-12-14 15:07:24', 1),
('2022-12-14 15:36:04', 1),
('2022-12-14 15:36:21', 1),
('2022-12-15 12:38:26', 1),
('2022-12-17 19:03:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `kecamatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namalengkap`, `username`, `foto`, `email`, `nohp`, `password`, `alamat`, `provinsi`, `kota`, `kecamatan`) VALUES
(11, 'Rizal Khoirul AAA', 'root', 'chart.png', 'rrizalkaa@gmail.com', '081230147253', 'root', 'JL tawang Mangu no 21 Sumbersari Jember', 'Jawa Timur', 'jember', 'Sumber Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
