-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2013 at 04:54 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suvabewe`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartemen`
--

CREATE TABLE IF NOT EXISTS `apartemen` (
  `no_kamar` int(5) NOT NULL,
  `type_kamar` varchar(1) NOT NULL,
  `spec_kamar` text NOT NULL,
  `password` text NOT NULL,
  `nama_pemilik` text NOT NULL,
  `email` text NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `harga` int(20) NOT NULL,
  `booked` tinyint(1) NOT NULL DEFAULT '0',
  `booked_fee` int(20) NOT NULL,
  `booked_date` date NOT NULL,
  `tagihan_listrik` int(20) NOT NULL,
  `tagihan_air` int(20) NOT NULL,
  `gambar_tidur1` text NOT NULL,
  `gambar_tidur2` text NOT NULL,
  `gambar_tidur3` text NOT NULL,
  `gambar_makan` text NOT NULL,
  `gambar_dapur` text NOT NULL,
  `gambar_mandi` text NOT NULL,
  `gambar_tamu` text NOT NULL,
  `gambar_balkon` text NOT NULL,
  PRIMARY KEY (`no_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `gambar` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`gambar`, `judul`, `isi`, `tanggal`) VALUES
('', 'Test12355555', 'TestHoam', '2013-11-26'),
('', 'Grand Opening Apartemen', 'Pembukaan bla2\r\nbla2\r\nbla2\r\nbla2\r\nbla2\r\nbla2', '2013-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `gambar` text NOT NULL,
  `ketarangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `gambar` text NOT NULL,
  `pagelink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
