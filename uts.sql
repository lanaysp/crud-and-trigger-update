-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2019 pada 09.37
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `lihat_mhs`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `lihat_mhs` (
`id` int(11)
,`nim` varchar(20)
,`nama_mhs` varchar(100)
,`jenkel_mhs` varchar(50)
,`alamat_lengkap` varchar(129)
,`no_hp` varchar(150)
,`hp` varchar(20)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `no_hp_lama` varchar(30) NOT NULL,
  `no_hp_baru` varchar(30) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_diubah`) VALUES
(5, '161240000597', '0897654792', '08976547924', '2019-11-12 15:35:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jenkel_mhs` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(129) NOT NULL,
  `no_hp` varchar(150) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mhs`, `jenkel_mhs`, `alamat_lengkap`, `no_hp`, `hp`) VALUES
(4, '161240000597', 'Maulana Yusup', 'Laki - Laki', 'Jepara Siripan \r\n', '08976547924', ''),
(5, '161240000598', 'Gatau', 'Perempuan', 'Lengkap', '0897645423863', '');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `ubah_hp` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW BEGIN INSERT INTO log
SET nim = old.nim,
no_hp_baru = new.no_hp,
no_hp_lama = old.no_hp,
tgl_diubah = now();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur untuk view `lihat_mhs`
--
DROP TABLE IF EXISTS `lihat_mhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lihat_mhs`  AS  (select `mahasiswa`.`id` AS `id`,`mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mhs` AS `nama_mhs`,`mahasiswa`.`jenkel_mhs` AS `jenkel_mhs`,`mahasiswa`.`alamat_lengkap` AS `alamat_lengkap`,`mahasiswa`.`no_hp` AS `no_hp`,`mahasiswa`.`hp` AS `hp` from `mahasiswa`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
