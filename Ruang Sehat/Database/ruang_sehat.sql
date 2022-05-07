-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 06:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruang_sehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `nip` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`nip`, `password`, `nama`, `image`) VALUES
(12345678, '12345678', 'Petugas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamarpakai`
--

CREATE TABLE `tb_kamarpakai` (
  `kd_kamarpakai` varchar(100) NOT NULL,
  `id_pasien` varchar(100) NOT NULL,
  `id_kamar` int(100) NOT NULL,
  `lama_pakai` varchar(100) NOT NULL,
  `Tgl_pakai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamarpakai`
--

INSERT INTO `tb_kamarpakai` (`kd_kamarpakai`, `id_pasien`, `id_kamar`, `lama_pakai`, `Tgl_pakai`) VALUES
('KD-01', 'ID-005', 3, '5 Hari', '2022-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `id_pasien` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_bpjs` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `riwayat_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id_pasien`, `nama_pasien`, `nik`, `no_bpjs`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_telepon`, `riwayat_penyakit`) VALUES
('ID-005', 'Maya ', '123', 'BPJ123', '2022-04-02', 'Aceh Besar', 'Perempuan', 'Darussalam', '0822222', 'demam'),
('ID-01', 'Reza', '112012021212', 'BPJS01', '2022-04-08', 'Aceh Besar', 'Laki-Laki', 'D', '0821212', 'Pilek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_kamar` int(100) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `meja_makan` varchar(100) NOT NULL,
  `kamar_mandi` varchar(100) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `image_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_kamar`, `nama_ruangan`, `kategori`, `tv`, `meja_makan`, `kamar_mandi`, `ac`, `image_kamar`) VALUES
(2, 'Matahari', 'Reguler', 'T', 'F', 'T', 'T', 'hero.png'),
(3, 'Melati', 'Reguler', 'F', 'F', 'T', 'F', 'ruangkamar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_kamarpakai`
--
ALTER TABLE `tb_kamarpakai`
  ADD PRIMARY KEY (`kd_kamarpakai`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `nip` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345679;

--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_kamar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kamarpakai`
--
ALTER TABLE `tb_kamarpakai`
  ADD CONSTRAINT `tb_kamarpakai_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_masyarakat` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kamarpakai_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tb_ruangan` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
