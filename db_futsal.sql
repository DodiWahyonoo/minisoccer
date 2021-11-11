-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 06:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'Indosoccernesia', 'dodijr850@gmail.com', 'dodi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_article`
--

CREATE TABLE `tb_article` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_article`
--

INSERT INTO `tb_article` (`id`, `thumbnail`, `content`, `date`, `id_admin`, `title`) VALUES
(6, 'http://localhost/futbal/assets/images/thumbnail/1e037deeef3587504c51d2a1c2c6eef6.jpg', '<p><span style=\"color: rgb(68, 68, 68); font-family: Montserrat;\">Untuk bermain di lapangan minisoccer indosoccernesia, anda diwajibkan memenuhi persyaratan berikut ini</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: 26px; color: rgb(114, 114, 114); font-family: Poppins, sans-serif;\">Untuk bermain di lapangan minisoccer indosoccernesia, anda diwajibkan memenuhi persyaratan berikut ini :</p><p>                                    \r\n\r\n                                </p><ol style=\"margin-bottom: 10px; list-style: inside none decimal-leading-zero; padding-left: 0px; color: rgb(68, 68, 68); font-family: Poppins, sans-serif;\"><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">DP Minimal 30% dari harga Sewa.</li><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">Dp tidak bisa dapat dikembalikan dengan alasan apapun. Apabila tim atau orang yang booking tidak datang pada jam tersebut.</li><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">Dp atau booking tidak bisa dipindah tanggalkan.</li><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">Booking dengan melalui tlpn/whatsapp wajib mentransfer DP ke rekening BCA.</li><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">Pembayaran lapang wajib dilunasi sebelum bermain Dipotong dengan DP yang sudah masuk terlebih dahulu.</li><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">DP hanya berlaku untuk Reguler, Tidak untuk MEMBER.</li><li style=\"font-size: 15px; color: rgb(114, 114, 114); line-height: 30px;\">Syarat dan ketentuan ini berlaku bagi siapapun yang menyewa lapang.</li></ol>', '2019-10-15', 2, 'Cara Booking Lapangan di Indosoccer'),
(7, 'http://localhost/futbal/assets/images/thumbnail/c3ec6ee78475f5599f268e783e120c49.jpg', '<span style=\"color: rgb(68, 68, 68); font-family: Montserrat;\">Indosoccernesia merupakan Lapangan mini soccer dengan fasilitas premium bagi Anda para penggila sepak bola. Lapangan mini soccer ini dibangun dengan luas lebih dari 1800 m2</span>                                    \r\n\r\n                                ', '2019-10-14', 2, 'Profile Lengkap Indosoccernesia'),
(8, 'http://localhost/futbal/assets/images/thumbnail/f8059bbe2625fcf953687606ead47f50.jpg', '<span style=\"color: rgb(68, 68, 68); font-family: Montserrat;\">Untuk pelayanan harga, Indosoccernesia memberikan harga terbaik dengan memberikan harga yang terjangkau oleh masyarakat</span>                                    \r\n\r\n                                ', '2019-10-14', 2, 'List Harga Lapangan Indosoccernesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(11) NOT NULL,
  `time` varchar(11) NOT NULL,
  `senin` varchar(50) DEFAULT NULL,
  `selasa` varchar(50) DEFAULT NULL,
  `rabu` varchar(50) DEFAULT NULL,
  `kamis` varchar(50) DEFAULT NULL,
  `jumat` varchar(50) DEFAULT NULL,
  `sabtu` varchar(50) DEFAULT NULL,
  `minggu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id`, `time`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(1, '06.00', '', '', 'xbdasjknd', '', '', '', ''),
(2, '07.00', '', '', '', '', '', '', ''),
(3, '08.00', '', '', '', '', '', '', ''),
(4, '09.00', '', '', '', '', '', '', ''),
(5, '10.00', '', '', '', '', '', '', ''),
(6, '11.00', '', '', '', '', '', '', ''),
(7, '12.00', '', '', '', '', '', '', ''),
(8, '13.00', '', '', '', '', '', '', ''),
(9, '14.00', '', '', '', '', '', '', ''),
(10, '15.00', '', '', '', '', '', '', ''),
(11, '16.00', '', '', '', '', '', '', ''),
(12, '17.00', '', '', '', '', '', '', ''),
(13, '18.00', '', '', '', '', '', '', ''),
(14, '19.00', '', '', '', '', '', '', ''),
(15, '20.00', '', '', '', '', '', '', ''),
(16, '21.00', '', '', '', '', '', '', ''),
(17, '22.00', '', '', '', '', '', '', ''),
(18, '23.00', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `image`) VALUES
(2, 'http://localhost/futbal/assets/images/galeri/1.jpg'),
(3, 'http://localhost/futbal/assets/images/galeri/big-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_pertandingan`
--

CREATE TABLE `tb_hasil_pertandingan` (
  `id` int(11) NOT NULL,
  `tim_one` varchar(255) NOT NULL,
  `logo_tim_one` varchar(255) NOT NULL,
  `skor_tim_one` int(11) NOT NULL,
  `tim_two` varchar(255) NOT NULL,
  `logo_tim_two` varchar(255) NOT NULL,
  `skor_tim_two` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil_pertandingan`
--

INSERT INTO `tb_hasil_pertandingan` (`id`, `tim_one`, `logo_tim_one`, `skor_tim_one`, `tim_two`, `logo_tim_two`, `skor_tim_two`, `hasil`) VALUES
(1, 'Bunglon FC', '', 0, 'Analis FC', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `tim_one` varchar(255) NOT NULL,
  `logo_time_one` varchar(255) NOT NULL,
  `tim_two` varchar(255) NOT NULL,
  `logo_time_two` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `tim_one`, `logo_time_one`, `tim_two`, `logo_time_two`, `date`, `time`, `tempat`) VALUES
(1, 'Bunglon FC', '', 'Analis FC', '', '2019-10-15', '10:30:00', 'Lapangan Mini Soccer ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_article`
--
ALTER TABLE `tb_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil_pertandingan`
--
ALTER TABLE `tb_hasil_pertandingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_article`
--
ALTER TABLE `tb_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_hasil_pertandingan`
--
ALTER TABLE `tb_hasil_pertandingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_article`
--
ALTER TABLE `tb_article`
  ADD CONSTRAINT `tb_article_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
