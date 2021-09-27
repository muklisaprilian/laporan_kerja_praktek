-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2018 at 02:54 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_lkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator`
--

CREATE TABLE IF NOT EXISTS `tb_administrator` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_administrator`
--

INSERT INTO `tb_administrator` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator2`
--

CREATE TABLE IF NOT EXISTS `tb_administrator2` (
  `panitia_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`panitia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_administrator2`
--

INSERT INTO `tb_administrator2` (`panitia_id`, `username`, `password`) VALUES
(1, 'pani', 'pani');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_agenda_surat_masuk` (
  `agenda_surat_masuk_id` int(40) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`agenda_surat_masuk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agenda_surat_masuk`
--

INSERT INTO `tb_agenda_surat_masuk` (`agenda_surat_masuk_id`, `uraian`, `asal_surat`, `tgl_masuk`, `ket`) VALUES
(101, 'Permohonan Perbaikan Kanal Pada Rawa', 'Pidie', '2015-02-06', 'Sedang Di Proses'),
(102, 'Permohonan Perbaikan Saluran Irigasi DI. Meunodu', 'Aceh Besar', '2016-10-03', 'Sedang Di Proses'),
(103, 'Permohonan Pembuatan Saluran Irigasi Tersier ', 'Aceh Utara', '2017-02-24', 'Sedang Di Proses  ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_amandemen_i`
--

CREATE TABLE IF NOT EXISTS `tb_amandemen_i` (
  `amandemen_i_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `nomor` char(40) NOT NULL,
  `tgl_i` date NOT NULL,
  `tim_mc` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `no_sk` char(40) NOT NULL,
  PRIMARY KEY (`amandemen_i_id`),
  KEY `amprahan_id` (`amprahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_amandemen_i`
--

INSERT INTO `tb_amandemen_i` (`amandemen_i_id`, `amprahan_id`, `nomor`, `tgl_i`, `tim_mc`, `ketua`, `sekretaris`, `anggota`, `no_sk`) VALUES
(111, 1001, 'KU.602/KPA/718/2015', '2015-05-23', 'Lima Orang', 'Manzuni. ST', 'Rina. ST. MT', 'Syukri Daut. ST, Jainal. ST, Ramla. ST', 'KU. 602/A-IRP/200/2015'),
(112, 1002, 'KU.602/KPA/723/2016', '2016-05-02', 'Lima Orang', 'Marzuki. ST.MT', 'Sarah. ST', 'Daut. ST, Julianda. ST, Rizki. ST', 'KU. 602/A-IRP/210/2016'),
(113, 1003, 'KU.602/KPA/733/2017', '2017-11-15', 'Lima Orang', 'Zakir. ST', 'Yeni. ST', 'Sarul. ST, Juna. ST, Diki. ST', 'KU. 602/A-IRP/222/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_amandemen_ii`
--

CREATE TABLE IF NOT EXISTS `tb_amandemen_ii` (
  `amandemen_ii_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `nomor` char(40) NOT NULL,
  `tanggal` date NOT NULL,
  `tim_mc` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `no_sk` char(40) NOT NULL,
  PRIMARY KEY (`amandemen_ii_id`),
  KEY `amprahan_id` (`amprahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_amandemen_ii`
--

INSERT INTO `tb_amandemen_ii` (`amandemen_ii_id`, `amprahan_id`, `nomor`, `tanggal`, `tim_mc`, `ketua`, `sekretaris`, `anggota`, `no_sk`) VALUES
(111, 1001, 'KU.602/KPA/918/2015', '2015-04-21', 'Lima Orang', 'Dani. M.Sc', 'Yuni. ST', 'Daniel. ST, Karim. ST, Jeni. ST', 'KU. 602/A-IRP/225/2015'),
(112, 1002, 'KU.602/KPA/920/2016', '2016-06-16', 'Lima Orang', 'Samsul. ST', 'Hakim. ST', 'Hendri. ST, Harun. ST, Dino. ST', 'KU. 602/A-IRP/230/2016'),
(113, 1003, 'KU.602/KPA/929/2017', '2017-07-20', 'Lima Orang', 'Munir. ST', 'Siska. ST', 'Sandi. ST, Jeri. ST, Danur. ST', 'KU. 602/A-IRP/240/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_amprahan`
--

CREATE TABLE IF NOT EXISTS `tb_amprahan` (
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
  `jamsostek` varchar(50) NOT NULL,
  PRIMARY KEY (`amprahan_id`),
  KEY `agenda_surat_masuk_id` (`agenda_surat_masuk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_amprahan`
--

INSERT INTO `tb_amprahan` (`amprahan_id`, `agenda_surat_masuk_id`, `nama_paket`, `nilai_kontrak`, `nomor_kontrak`, `nama_perusahaan`, `direktur`, `no_npwp`, `kop_cirut`, `galian_c`, `jamsostek`) VALUES
(1001, 101, 'Pembangunan Bang Pantai Kec. Labuhan Haji Barat Kab. Aceh Selatan (Otsus Aceh)', ' Rp. 700.000.000 -,', 'KU.602-A/KPA-IRP/361/2015', 'PT. NORPINDO', 'Andianto', '02.945.821.110.000', 'PT. NORPINDO', 'Pasir', 'Tenaga Kerja'),
(1002, 102, 'Pembangunan Saluran Irigasi Kec. Beurenuen Kab. Pidie (Otsus Aceh)', 'Rp. 697.117.000 -,', 'KU.602-A/KPA-IRP/773/2016', 'CV. ADUN SAJA', 'Rizal', '02.945.721.130.000', 'CV. ADUN SAJA', 'Batu Kali', 'Tenaga Kerja'),
(1003, 103, 'Pembangunan Kanal pada Rawa Kec. Batee Iliek Kab. Bireuen (Otsus Aceh)', 'Rp. 600.117.000 -,', 'KU.602-A/KPA-IRP/753/2017', 'CV. SEJAHTERA', 'Zainal', '02.945.361.187.000', 'CV. SEJAHTERA', 'tanah liat', 'Tenaga Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nomor_jaminan`
--

CREATE TABLE IF NOT EXISTS `tb_nomor_jaminan` (
  `nomor_jaminan_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `pelaksanaan` varchar(50) NOT NULL,
  `uang_muka` varchar(50) NOT NULL,
  `pemeliharaan` varchar(50) NOT NULL,
  PRIMARY KEY (`nomor_jaminan_id`),
  KEY `amprahan_id` (`amprahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nomor_jaminan`
--

INSERT INTO `tb_nomor_jaminan` (`nomor_jaminan_id`, `amprahan_id`, `pelaksanaan`, `uang_muka`, `pemeliharaan`) VALUES
(111, 1001, 'No. 0574/JB-02/610/X/2015', '39/JB.VI/2015', '28/JB-04/641/XI/2015'),
(112, 1002, 'No. 0599/JB-02/650/X/2016', '31/JB.VI/2016', '12/JB-04/231/XI/2016'),
(113, 1003, 'No. 0474/JB-02/600/X/2017', '35/JB.VI/2017', '22/JB-04/611/XI/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pho`
--

CREATE TABLE IF NOT EXISTS `tb_pho` (
  `pho_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `nomor` char(40) NOT NULL,
  `tanggal` date NOT NULL,
  `tim_pho` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `no_sk` char(40) NOT NULL,
  PRIMARY KEY (`pho_id`),
  KEY `amprahan_id` (`amprahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pho`
--

INSERT INTO `tb_pho` (`pho_id`, `amprahan_id`, `nomor`, `tanggal`, `tim_pho`, `ketua`, `sekretaris`, `anggota`, `no_sk`) VALUES
(111, 1001, 'KU.602/KPA/100/2015', '2015-05-17', 'Lima Orang', 'Azhar. ST', 'Erita. ST', 'Dany. ST, Azwar. ST, Maimun. ST', 'KU. 602/A-IRP/250/2015'),
(112, 1002, 'KU.602/KPA/119/2016', '2016-11-10', 'Lima Orang', 'Amir. ST', 'Heni. ST', 'Rahmat. ST, Hakim. ST, Farul. ST', 'KU. 602/A-IRP/260/2016'),
(113, 1003, 'KU.602/KPA/140/2017', '2017-11-30', 'Lima Orang', 'Bazir. ST', 'Rita. ST', 'Salman. ST, Hadi. ST, Walis. ST', 'KU. 602/A-IRP/270/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur_organisasi`
--

CREATE TABLE IF NOT EXISTS `tb_struktur_organisasi` (
  `struktur_organisasi_id` int(40) NOT NULL,
  `amprahan_id` int(40) NOT NULL,
  `kpa` varchar(50) NOT NULL,
  `pptk` varchar(50) NOT NULL,
  `pembantu_pptk` varchar(50) NOT NULL,
  `pengawas` char(40) NOT NULL,
  `no_sk` char(40) NOT NULL,
  PRIMARY KEY (`struktur_organisasi_id`),
  KEY `amprahan_id` (`amprahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_struktur_organisasi`
--

INSERT INTO `tb_struktur_organisasi` (`struktur_organisasi_id`, `amprahan_id`, `kpa`, `pptk`, `pembantu_pptk`, `pengawas`, `no_sk`) VALUES
(111, 1001, 'Ir. Zainul . MM', 'Rivaldo. ST', 'Rahmad. ST', 'Rino. ST', '954/KPTS/SDA/009/2015'),
(112, 1002, 'Ir. Rian. MT', 'Rinaldi. ST', 'Ari. ST', 'Reza. S.SI', '934/KPTS/SDA/019/2016'),
(113, 1003, 'Ir. Zubir. M.Sc', 'Isan. ST', 'Baihaqi. ST', 'Zaka. ST', '977/KPTS/SDA/023/2017');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
