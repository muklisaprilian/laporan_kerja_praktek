-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 07:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_lkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator`
--

CREATE TABLE `tb_administrator` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_administrator`
--

INSERT INTO `tb_administrator` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator2`
--

CREATE TABLE `tb_administrator2` (
  `panitia_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_administrator2`
--

INSERT INTO `tb_administrator2` (`panitia_id`, `username`, `password`) VALUES
(1, 'pani', 'pani');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda_surat_masuk`
--

CREATE TABLE `tb_agenda_surat_masuk` (
  `agenda_surat_masuk_id` int(40) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agenda_surat_masuk`
--

INSERT INTO `tb_agenda_surat_masuk` (`agenda_surat_masuk_id`, `uraian`, `asal_surat`, `tgl_masuk`, `ket`) VALUES
(101, 'Permohonan Perbaikan Kanal Pada Rawa', 'Pidie', '2015-02-06', 'Sedang Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_amandemen_i`
--

CREATE TABLE `tb_amandemen_i` (
  `amandemen_i_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `nomor` char(40) NOT NULL,
  `tgl_i` date NOT NULL,
  `tim_mc` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `no_sk` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_amandemen_ii`
--

CREATE TABLE `tb_amandemen_ii` (
  `amandemen_ii_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `nomor` char(40) NOT NULL,
  `tanggal` date NOT NULL,
  `tim_mc` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `no_sk` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_amprahan`
--

CREATE TABLE `tb_amprahan` (
  `amprahan_id` int(40) NOT NULL,
  `agenda_surat_masuk_id` int(40) NOT NULL,
  `nama_paket` varchar(80) NOT NULL,
  `nilai_kontrak` varchar(50) NOT NULL,
  `nomor_kontrak` varchar(50) NOT NULL,
  `nama_perusahaan` char(40) NOT NULL,
  `direktur` char(40) NOT NULL,
  `no_npwp` char(40) NOT NULL,
  `kop_cirut` varchar(50) NOT NULL,
  `galian_c` varchar(50) NOT NULL,
  `jamsostek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nomor_jaminan`
--

CREATE TABLE `tb_nomor_jaminan` (
  `nomor_jaminan_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `pelaksanaan` varchar(50) NOT NULL,
  `uang_muka` varchar(50) NOT NULL,
  `pemeliharaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pho`
--

CREATE TABLE `tb_pho` (
  `pho_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `nomor` char(40) NOT NULL,
  `tanggal` date NOT NULL,
  `tim_pho` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `no_sk` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur_organisasi`
--

CREATE TABLE `tb_struktur_organisasi` (
  `struktur_organisasi_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `kpa` varchar(50) NOT NULL,
  `pptk` varchar(50) NOT NULL,
  `pembantu_pptk` varchar(50) NOT NULL,
  `pengawas` char(40) NOT NULL,
  `no_sk` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_administrator2`
--
ALTER TABLE `tb_administrator2`
  ADD PRIMARY KEY (`panitia_id`);

--
-- Indexes for table `tb_agenda_surat_masuk`
--
ALTER TABLE `tb_agenda_surat_masuk`
  ADD PRIMARY KEY (`agenda_surat_masuk_id`);

--
-- Indexes for table `tb_amandemen_i`
--
ALTER TABLE `tb_amandemen_i`
  ADD PRIMARY KEY (`amandemen_i_id`),
  ADD KEY `amprahan_id` (`amprahan_id`);

--
-- Indexes for table `tb_amandemen_ii`
--
ALTER TABLE `tb_amandemen_ii`
  ADD PRIMARY KEY (`amandemen_ii_id`),
  ADD KEY `amprahan_id` (`amprahan_id`);

--
-- Indexes for table `tb_amprahan`
--
ALTER TABLE `tb_amprahan`
  ADD PRIMARY KEY (`amprahan_id`),
  ADD KEY `agenda_surat_masuk_id` (`agenda_surat_masuk_id`);

--
-- Indexes for table `tb_nomor_jaminan`
--
ALTER TABLE `tb_nomor_jaminan`
  ADD PRIMARY KEY (`nomor_jaminan_id`),
  ADD KEY `amprahan_id` (`amprahan_id`);

--
-- Indexes for table `tb_pho`
--
ALTER TABLE `tb_pho`
  ADD PRIMARY KEY (`pho_id`),
  ADD KEY `amprahan_id` (`amprahan_id`);

--
-- Indexes for table `tb_struktur_organisasi`
--
ALTER TABLE `tb_struktur_organisasi`
  ADD PRIMARY KEY (`struktur_organisasi_id`),
  ADD KEY `amprahan_id` (`amprahan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_administrator2`
--
ALTER TABLE `tb_administrator2`
  MODIFY `panitia_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
