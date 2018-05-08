-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 11:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` char(8) DEFAULT NULL,
  `siswa_nisn` char(10) DEFAULT NULL,
  `siswa_nama` varchar(100) DEFAULT NULL,
  `siswa_jk` char(1) DEFAULT NULL,
  `siswa_tmp_lahir` varchar(50) DEFAULT NULL,
  `siswa_tgl_lahir` date DEFAULT NULL,
  `siswa_alamat` text,
  `siswa_entri` datetime DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_nis`, `siswa_nisn`, `siswa_nama`, `siswa_jk`, `siswa_tmp_lahir`, `siswa_tgl_lahir`, `siswa_alamat`, `siswa_entri`, `siswa_kelas_id`, `siswa_status`) VALUES
(1, '11601887', '0004790286', 'ADI BUDIMAN', 'L', 'SUBANG', '2000-10-20', 'CILEULEUY', '2018-02-23 14:34:53', 3, 'hadir'),
(3, '11601901', '0021260722', 'AHMAD IRFAN MAULANA', 'L', 'SUBANG', '2002-04-03', 'SUKAMULYA', '2018-02-23 14:34:53', 3, 'hadir'),
(4, '11601925', '0011355292', 'ALIN AL FAUZI', 'L', 'SUBANG', '2001-10-07', 'BANTARSARI', '2018-02-23 14:34:53', 3, 'hadir'),
(5, '11601946', '0012592757', 'Angga Purnamajaya', 'L', 'Subang', '2001-02-08', 'Belendung', '2018-02-23 14:34:53', 3, 'hadir'),
(6, '11601982', '0013614018', 'AYU PRIHATINI', 'P', 'SUBANG', '2001-02-17', 'JL.RAYA CICADAS', '2018-02-23 14:34:53', 3, 'hadir'),
(8, '11602015', '0012597172', 'DADI MULYADI', 'L', 'SUBANG', '2001-05-12', 'BANTARSEMA', '2018-02-23 14:34:54', 3, 'hadir'),
(9, '11602018', '0004897901', 'DAFIQ RHOMDHON', 'L', 'SUBANG', '2000-12-10', 'Pemuda', '2018-02-23 14:34:54', 3, 'hadir'),
(10, '11602044', '0006706429', 'Devi Fauziah Iftiani', 'P', 'Subang', '2000-08-13', 'CIATER NAGRAK', '2018-02-23 14:34:54', 3, ''),
(11, '11602102', '0010630305', 'Efan Rahmat Maulana', 'L', 'Subang', '2001-08-30', 'Blok Padasuka', '2018-02-23 14:34:54', 3, ''),
(12, '11602139', '0019560798', 'FAHRUL ACHMAD AL FARIZQI', 'L', 'SUBANG', '2001-03-10', 'RAYA KAMARUNG', '2018-02-23 14:34:54', 3, ''),
(13, '11602155', '0020090221', 'FAUZAN NUR RAMDANI', 'L', 'SUBANG', '2000-12-01', 'RAYA TUGU UTARA', '2018-02-23 14:34:54', 3, ''),
(14, '11602199', '0009105196', 'Gungun Gunawan', 'L', 'Subang', '2000-08-20', 'GUNUNGN CUPU', '2018-02-23 14:34:54', 3, ''),
(15, '11602226', '0008522913', 'IKHSAN SYAFEI FIRDAUS', 'L', 'PURWAKARTA', '2000-05-13', 'MT.HARYONO Gg.ABIMANYU', '2018-02-23 14:34:54', 3, ''),
(16, '11602237', '0004790901', 'INDAH NELA', 'P', 'SUBANG', '2000-07-12', 'BANJARAN HILIR', '2018-02-23 14:34:54', 3, ''),
(17, '11602284', '0012614276', 'LESTARI UTAMI PUTRI', 'P', 'SUBANG', '2001-04-26', 'S PARMAN', '2018-02-23 14:34:54', 3, ''),
(18, '11602301', '0013158004', 'MALVIN GUNAWAN', 'L', 'JAKARTA', '2001-03-06', 'Sukasari', '2018-02-23 14:34:54', 3, ''),
(19, '11602314', '0011177222', 'MELINA', 'P', 'SUBANG', '2001-03-13', 'CISALAK', '2018-02-23 14:34:54', 3, ''),
(20, '11602337', '0020213303', 'MUCHLISH CHOERUDDIN', 'L', 'SUBANG', '2002-04-07', 'PADASUKA', '2018-02-23 14:34:54', 3, ''),
(21, '11602341', '0004823818', 'MUHAMAD ERI WAHYUDI', 'L', 'PURWOREJO', '2000-07-19', 'RAYA KALIJATI', '2018-02-23 14:34:54', 3, ''),
(22, '11602347', '0009456840', 'MUHAMAD ROHIMAT NURRIZQI', 'L', 'SUBANG', '2000-06-28', 'CIBITUNG', '2018-02-23 14:34:54', 3, ''),
(23, '11602355', '0026202154', 'MUHAMMAD IQBAL ', 'L', 'SUBANG', '2002-12-02', 'KELAPA', '2018-02-23 14:34:54', 3, ''),
(24, '11602370', '0017762928', 'NAUFAL HAFIZH HERIANDI', 'L', 'SUBANG', '2001-06-22', 'JL MARSINU', '2018-02-23 14:34:54', 3, ''),
(25, '11602418', '0004790617', 'PANDU MAULANA', 'L', 'SUBANG', '2000-07-01', 'CIHERANG', '2018-02-23 14:34:54', 3, ''),
(26, '11602444', '0009964576', 'R. Subangkit Ramadhan', 'L', 'Subang', '2000-11-27', 'RAYA PAGADEN', '2018-02-23 14:34:55', 3, ''),
(27, '11602460', '0014273522', 'RD. RAFLY FAUZI NUGRAHA', 'L', 'SUBANG', '2001-10-13', 'PALABUAN', '2018-02-23 14:34:55', 3, ''),
(28, '11602471', '0011353221', 'RENITA KARTINI', 'P', 'Subang', '2001-09-17', 'ARIEF RAHMAN HAKIM', '2018-02-23 14:34:55', 3, ''),
(29, '11602500', '0015163991', 'RINI APRIANI', 'P', 'SUBANG', '2001-04-09', 'PURI SUBANG ASRI BLOK I NO.8', '2018-02-23 14:34:55', 3, ''),
(30, '11602524', '0028464889', 'RIZAL PRAMUDYITA', 'L', 'SUBANG', '2001-09-18', 'MAYJEN MT.HARYONO', '2018-02-23 14:34:55', 3, ''),
(31, '11602553', '0001522690', 'SAKTI ALGERI DIPALMA', 'L', 'SUBANG', '2000-06-12', 'KP. SUKALAKSANA GG. PLAMBOYAN', '2018-02-23 14:34:55', 3, ''),
(32, '11602576', '0012950522', 'SHOLEH DINDA WARDANA', 'L', 'SUBANG', '2001-01-11', 'PARUNG HILIR', '2018-02-23 14:34:55', 3, ''),
(33, '11602583', '0012598921', 'SINTA DELIANI', 'P', 'SUBANG', '2001-12-16', 'ARIEF RAHMAN HAKIM', '2018-02-23 14:34:55', 3, ''),
(34, '11602607', '0011217558', 'SUCI REFIANTO', 'L', 'SUBANG', '2001-10-08', 'RAYA KALIJATI', '2018-02-23 14:34:55', 3, ''),
(35, '11602618', '0017455419', 'SYARIEL IKHWAN KURNIAWAN', 'L', 'SUBANG', '2001-12-26', 'BTN SUKAJAYA BLOK A.88', '2018-02-23 14:34:55', 3, ''),
(36, '11602633', '0001898052', 'TELA HANDAYANI', 'P', 'SUBANG', '2000-12-12', 'TANJUNGWANGI', '2018-02-23 14:34:55', 3, ''),
(37, '11602672', '0011355667', 'WAHYUDIN', 'L', 'SUBANG', '2001-01-20', 'BABAKAN CURUG', '2018-02-23 14:34:55', 3, ''),
(38, '11602710', '0010756996', 'YULI YULIA SARI', 'P', 'SUBANG', '2001-07-23', 'Tegalpanjang', '2018-02-23 14:34:55', 3, ''),
(39, '11602723', '0019692434', 'Zidan Lingga Mahesa', 'L', 'Subang', '2001-05-12', 'Griya CIpaku', '2018-02-23 14:34:55', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_level` enum('siswa','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`) VALUES
(3, 'Rambo', 'rambo', 'rambo', 'siswa'),
(4, 'Dadi', 'admin', 'admin', 'admin'),
(6, 'Dadi', 'dadi12', 'dadi12', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
