-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 12:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Kemahasiswaan','Direktur','Warek') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `level`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kemahasiswaan'),
(7, 'kemahasiswaan', 'c8c116beb88fde7a38473945653ab21b', 'Kemahasiswaan'),
(8, 'direktur', '4fbfd324f5ffcdff5dbf6f019b02eca8', 'Direktur'),
(9, 'warek', '78042aaf99ab008f4799649aa171b9ae', 'Warek');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_ukm`
--

CREATE TABLE `tbl_admin_ukm` (
  `id_admin_ukm` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_ukm`
--

INSERT INTO `tbl_admin_ukm` (`id_admin_ukm`, `id_ukm`, `username`, `password`) VALUES
(1, 1, 'sema', '089ac4682a780fd36a19a6279c977758'),
(2, 2, 'bem', 'd3c654d99bdfaf101e012bfe2810679e'),
(3, 3, 'hmif', 'fcd76f4e4db02c08ae0e2c0f717ac578'),
(4, 4, 'himasi', 'ff727cddcbafbf83178e5e91d4a86cf6'),
(5, 5, 'himmi', 'ef8127179685da06330500a400a3effd'),
(6, 6, 'amcc', '5d979a735eb007ec25230936969e4d41'),
(7, 7, 'koma', '1523a3e2351d153732ff47b316c85389'),
(8, 8, 'aec', '05b980fd14414110790904f87051f9e9'),
(9, 9, 'fossil', 'bd2ad056056683306b5730e3f2e8ff13'),
(10, 10, 'lpm', 'cd0c321f9890a2ca4e4fadeacde8726d'),
(11, 11, 'himmika', 'df93c38e6f8040f2bdd030de1b7ec171'),
(12, 12, 'amo', '3d5390642ff7a7fd9b7ab8bac4ec3ec5'),
(13, 13, 'mayapala', '6b0be9c5edc9d9ad227947ecdd3640b5'),
(14, 14, 'himaditi', '5b34bf7d075e0e8940bc6bf1b9736482'),
(15, 15, 'himtek', '8c8587b3551461ef669a98e8d3c7e68e'),
(16, 16, 'himsi', '440d46a610941b67b0ae7fcef784c50b'),
(17, 17, 'koma', '1523a3e2351d153732ff47b316c85389'),
(18, 18, 'avbc', '81cf540d738fcbeb22ef47ab46514f3a'),
(26, 21, 'fossil', 'bd2ad056056683306b5730e3f2e8ff13'),
(27, 22, 'pastuvena', '2d090f12c445736b0b1f931a1db0b9a4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `id_rencana` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `id_ukm`, `id_rencana`, `id_admin`) VALUES
(12, 16, 27, 8),
(15, 6, 31, 9),
(16, 6, 32, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_persetujuan`
--

CREATE TABLE `tbl_persetujuan` (
  `id_persetujuan` int(11) NOT NULL,
  `id_rencana` int(11) NOT NULL,
  `status` enum('Diterima Direktur','Ditolak Direktur','Ditolak Warek','Diterima Warek','Ke Warek') NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_persetujuan`
--

INSERT INTO `tbl_persetujuan` (`id_persetujuan`, `id_rencana`, `status`, `keterangan`) VALUES
(5, 27, 'Diterima Direktur', ''),
(6, 31, 'Diterima Warek', ''),
(9, 32, 'Diterima Warek', ''),
(11, 28, 'Ditolak Direktur', 'Tidak Jelas\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rencana_kegiatan`
--

CREATE TABLE `tbl_rencana_kegiatan` (
  `id_rencana` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `waktu` datetime NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `status` enum('Menunggu','Diterima','Ditolak','Diproses') NOT NULL,
  `ket_tolak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rencana_kegiatan`
--

INSERT INTO `tbl_rencana_kegiatan` (`id_rencana`, `id_ukm`, `judul`, `file`, `tgl_kirim`, `waktu`, `tempat`, `deskripsi`, `status`, `ket_tolak`) VALUES
(27, 16, 'Himsi Ceria', '9b4590c1107b0664ba4893696f268519.pdf', '2023-08-29 11:21:23', '2023-09-01 09:00:00', 'SA', 'Ceria sajalah', 'Diterima', ''),
(28, 16, 'Haha Hihi', '05970d55e7d0c4b2f8b72ab3241a8c4c.pdf', '2023-08-29 11:22:02', '2023-09-30 09:00:00', 'BSC', 'hahh', 'Ditolak', 'Tidak Jelas\r\n'),
(31, 6, 'KodingYuk', '1c2a59c5b6e038f59d12583f7f05ef4e.pdf', '2023-08-29 11:26:14', '2023-09-21 10:00:00', 'Lab 7.3.2', 'Belajar Phyton', 'Diterima', ''),
(32, 6, 'Framework Buat Apa?', '70d6ba2b83f079dfafe769d5293fcbaa.pdf', '2023-08-29 11:28:14', '2023-09-29 16:00:00', 'Citra 2', 'Pengenalan Framework', 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukm`
--

CREATE TABLE `tbl_ukm` (
  `id_ukm` int(11) NOT NULL,
  `nm_ukm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ukm`
--

INSERT INTO `tbl_ukm` (`id_ukm`, `nm_ukm`) VALUES
(1, 'SEMA'),
(2, 'BEM'),
(3, 'HMIF'),
(4, 'HIMASI'),
(5, 'HIMMI'),
(6, 'AMCC'),
(7, 'KOMA'),
(8, 'AEC'),
(9, 'FOSSIL'),
(10, 'LPM'),
(11, 'HIMMIKA'),
(12, 'AMO'),
(13, 'MAYAPALA'),
(14, 'HIMADITI'),
(15, 'HIMTEK'),
(16, 'HIMSI'),
(17, 'KOMA'),
(18, 'AVBC'),
(21, 'Fossil'),
(22, 'Pastuvena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_admin_ukm`
--
ALTER TABLE `tbl_admin_ukm`
  ADD PRIMARY KEY (`id_admin_ukm`),
  ADD KEY `id_ukm` (`id_ukm`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_persetujuan`
--
ALTER TABLE `tbl_persetujuan`
  ADD PRIMARY KEY (`id_persetujuan`);

--
-- Indexes for table `tbl_rencana_kegiatan`
--
ALTER TABLE `tbl_rencana_kegiatan`
  ADD PRIMARY KEY (`id_rencana`);

--
-- Indexes for table `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_admin_ukm`
--
ALTER TABLE `tbl_admin_ukm`
  MODIFY `id_admin_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_persetujuan`
--
ALTER TABLE `tbl_persetujuan`
  MODIFY `id_persetujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_rencana_kegiatan`
--
ALTER TABLE `tbl_rencana_kegiatan`
  MODIFY `id_rencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin_ukm`
--
ALTER TABLE `tbl_admin_ukm`
  ADD CONSTRAINT `tbl_admin_ukm_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `tbl_ukm` (`id_ukm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
