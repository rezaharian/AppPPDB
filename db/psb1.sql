-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 08:41 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(10) NOT NULL,
  `akte` varchar(200) NOT NULL,
  `ijazah` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_pendaftar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id_bukti` int(15) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nik` bigint(20) NOT NULL,
  `nama` text NOT NULL,
  `alamat_siswa` varchar(200) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `j_k` text NOT NULL,
  `agama` text NOT NULL,
  `no_hp_siswa` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nama_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `pekerjaan_orang_tua` varchar(50) NOT NULL,
  `alamat_orang_tua` varchar(50) NOT NULL,
  `no_hp_orang_tua` int(15) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `no_hp_wali` int(15) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `ekskul` varchar(15) NOT NULL,
  `upload_ijazah` enum('DI TERIMA','DALAM PROSES','BERKAS BELUM LENGKAP') NOT NULL DEFAULT 'DALAM PROSES',
  `upload_foto` varchar(20) NOT NULL,
  `id_pendaftar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(10) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jenis_bayar` varchar(60) NOT NULL,
  `nominal_bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(5) NOT NULL,
  `us` varchar(200) NOT NULL,
  `pw` varchar(200) NOT NULL,
  `lv` enum('admin','petugas','guru','kepala') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `us`, `pw`, `lv`) VALUES
(1, 'admin', 'Cakungsmk44', 'petugas'),
(127, 'reva', 'reva', 'admin'),
(128, 'kepala', 'kepala', 'kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id_bukti`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `id_pendaftar_2` (`id_pendaftar`),
  ADD KEY `id_pendaftar` (`id_pendaftar`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id_bukti` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_pendaftar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99957;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
