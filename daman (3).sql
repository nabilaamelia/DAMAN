-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2021 pada 10.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `role_id`) VALUES
(3, 'alif5', '099a147c0c6bcd34009896b2cc88633c', 0),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(11, 'alif', '099a147c0c6bcd34009896b2cc88633c', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diskusi`
--

CREATE TABLE `tb_diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `judul`, `isi`, `foto`, `waktu`) VALUES
(11, 'KEGIATAN MAGANG', '', '', '2021-10-29 07:36:05'),
(12, 'helooo', '', 'K3.jpg', '2021-10-29 07:41:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nama`, `jabatan`, `alamat`, `foto`, `motto`, `no_hp`) VALUES
(9, 'BAHTIAR BARID', 'MANAGER', 'SDA', 'photo_2021-10-28_14-52-56.jpg', 'Makan untuk hidup', '09'),
(10, 'DWI EKO TRI SAPTONO', 'ASSISTANT MANAGER', 'SDA', 'photo_2021-10-28_14-55-40.jpg', 'Bikin hepi aja', '09'),
(11, 'RIZKI RODIA MARDHATILLAH', 'OFFICER', 'SDA', 'photo_2021-10-28_14-57-00.jpg', '', '09'),
(12, 'AFRIDA', 'STAFF - HELPDESK', 'SDA', 'frida.jpg', '', '09'),
(13, 'IAN', 'STAFF - HELPDESK', 'SDA', 'ian.jpg', '', '09'),
(14, 'JUNIAR', 'STAFF - HELPDESK', 'SDA', 'jujun.jpg', '', '09'),
(15, 'NADA', 'STAFF - HELPDESK', 'SDA', 'nada.jpg', '', '09'),
(16, 'VIRA', 'STAFF - HELPDESK', 'SDA', 'vira1.jpg', '', '09'),
(17, 'RANI', 'STAFF - HELPDESK', 'SDA', 'rani.jpg', '', ''),
(18, 'RIZKA', 'STAFF - HELPDESK', 'SDA', 'photo_2021-10-28_15-02-29.jpg', '', ''),
(19, 'RIZKY ISYAK', 'STAFF - HELPDESK', 'SDA', 'IMG_20210419_195408_802.JPG', '', ''),
(20, 'MUHAMMAD ALFIAN', 'STAFF - HELPDESK', 'SDA', 'photo_2021-10-28_15-04-12.jpg', '', ''),
(21, 'ANDREW', 'STAFF - HELPDESK', 'SDA', 'photo_2021-10-28_15-04-58.jpg', '', ''),
(22, 'MUHAMMAD ANDI', 'STAFF - TEKNISI', 'SDA', 'MOHAMMAD_ANDI_PRASETYO_20960870_ANDI.jpg', '', ''),
(23, 'DENNY', 'STAFF - TEKNISI', 'SDA', 'photo_2021-10-28_15-07-43.jpg', '', ''),
(24, 'RIZAL', 'STAFF - TEKNISI', 'SDA', 'photo_2021-10-28_15-08-46.jpg', '', ''),
(25, 'FAHMI', 'STAFF - TEKNISI', 'SDA', 'photo_2021-10-28_15-10-38.jpg', '', '085806773034');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `asal_instansi` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama`, `email`, `no_hp`, `alamat`, `asal_instansi`, `tgl_mulai`, `tgl_selesai`, `foto`, `status`) VALUES
(1, 'Alif', 'alif@gmail.com', '8', 'Ngawi', 'PNM', '2021-06-01', '2021-11-30', 'admin.jpg', '0'),
(2, 'Najah', 'najah@gmail.com', '85', 'Madiun', 'PNM', '2021-06-01', '2021-11-30', 'admin.jpg', 'Aktif'),
(3, 'Nabila', 'nabila@gmail.com', '85', 'Madiun', 'PNM', '2021-06-01', '2021-11-30', '', '0'),
(6, 'aja', 'pasri@gmail.com', '988', '0', 'PNM', '2021-09-01', '2021-10-22', '', '0'),
(9, 'keset', '', '', '', 'MAN 2 Ngawi', '0000-00-00', '0000-00-00', '', '0'),
(10, 'lalalala', '', '', '', 'PNM', '0000-00-00', '0000-00-00', '', '0'),
(11, 'Tresnaning Arifiyah', 'nabilaamelia46@gmail.com', '081231029995', 'SARADAN', 'PNM', '2021-10-01', '2021-10-23', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id_presensi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `absen` varchar(255) NOT NULL,
  `tampil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_presensi`
--

INSERT INTO `tb_presensi` (`id_presensi`, `judul`, `absen`, `tampil`) VALUES
(3, 'Presensi Hari Ini', 'https://intip.in/AbsensiPKLSKOMDA', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_diskusi`
--
ALTER TABLE `tb_diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indeks untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_diskusi`
--
ALTER TABLE `tb_diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
