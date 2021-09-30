-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 10:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskusi`
--

CREATE TABLE `tb_diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `judul`, `isi`, `foto`) VALUES
(1, 'PENGUMUMAN HUT TELKOM', 'SELAMATT', ''),
(2, 'SELAMAT ATAS', 'Sidoarjo, 2 hari yang lalu telah diresmikan', ''),
(3, 'SELAMAT', 'chukae', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nama`, `jabatan`, `alamat`, `foto`, `keterangan`) VALUES
(1, 'Riri Mardhatillah', '', 'Sidoarjo', '', ''),
(2, 'Andrew', '', 'Sidoarjo', '', ''),
(4, 'Afrida', 'asdf', 'Madiun', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `asal_instansi` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama`, `email`, `no_hp`, `alamat`, `asal_instansi`, `tgl_mulai`, `tgl_selesai`, `foto`, `status`) VALUES
(1, 'Alif', 'alif@gmail.com', 8, 'Ngawi', 'PNM', '2021-06-01', '2021-11-30', '', 0),
(2, 'Najah', 'najah@gmail.com', 85, 'Madiun', 'PNM', '2021-06-01', '2021-11-30', '', 0),
(3, 'Nabila', 'nabila@gmail.com', 85, 'Madiun', 'PNM', '2021-06-01', '2021-11-30', '', 0),
(6, 'aja', 'pasri@gmail.com', 988, '0', 'PNM', '2021-09-01', '2021-10-22', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id_presensi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_presensi`
--

INSERT INTO `tb_presensi` (`id_presensi`, `judul`, `keterangan`) VALUES
(1, 'presensi', 'presensi untuk SMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_diskusi`
--
ALTER TABLE `tb_diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_diskusi`
--
ALTER TABLE `tb_diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
