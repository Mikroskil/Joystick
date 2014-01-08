-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2014 at 02:21 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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

--
-- Dumping data for table `apartemen`
--

INSERT INTO `apartemen` (`no_kamar`, `type_kamar`, `spec_kamar`, `password`, `nama_pemilik`, `email`, `available`, `harga`, `booked`, `booked_fee`, `booked_date`, `tagihan_listrik`, `tagihan_air`, `gambar_tidur1`, `gambar_tidur2`, `gambar_tidur3`, `gambar_makan`, `gambar_dapur`, `gambar_mandi`, `gambar_tamu`, `gambar_balkon`) VALUES
(100, '', '', '123456', 'Admin', '', 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', '', '', '', '', '', ''),
(101, 'A', '', '1234', 'Sandy Usman Erry', '', 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', '', '', '', '', '', ''),
(102, 'A', '2 Kamar Tidur\r\n2 Kamar Mandi', '12345', 'Lisa', 'redixy_lisa@live.com', 0, 500000000, 0, 0, '0000-00-00', 0, 0, '', '', '', '', '', '', '', ''),
(104, 'A', '', '', '', '', 1, 500000000, 0, 0, '0000-00-00', 0, 0, '104-tidur1.jpg', '', '', '104-makan.jpg', '104-dapur.jpg', '104-mandi.jpg', '104-tamu.jpg', '104-balkon.jpg'),
(105, 'A', '', '', '', '', 1, 500000000, 0, 0, '0000-00-00', 0, 0, '105-tidur1.jpg', '', '', '105-makan.jpg', '105-dapur.jpg', '105-mandi.jpg', '105-tamu.jpg', '105-balkon.jpg'),
(106, 'A', '', '', '', '', 1, 500000000, 0, 0, '0000-00-00', 0, 0, '106-tidur1.jpg', '', '', '106-makan.jpg', '106-dapur.jpg', '106-mandi.jpg', '106-tamu.jpg', '106-balkon.jpg'),
(107, 'B', '', '', '', '', 1, 650000000, 0, 0, '0000-00-00', 0, 0, '107-tidur1.jpg', '107-tidur2.jpg', '', '107-makan.jpg', '107-dapur.jpg', '107-mandi.jpg', '107-tamu.jpg', '107-balkon.jpg'),
(108, 'B', '', '', '', '', 1, 650000000, 0, 0, '0000-00-00', 0, 0, '108-tidur1.jpg', '108-tidur2.jpg', '', '108-makan.jpg', '108-dapur.jpg', '108-mandi.jpg', '108-tamu.jpg', '108-balkon.jpg'),
(109, 'C', '', '', '', '', 1, 850000000, 0, 0, '0000-00-00', 0, 0, '109-tidur1.jpg', '109-tidur2.jpg', '109-tidur3.jpg', '109-makan.jpg', '109-dapur.jpg', '109-mandi.jpg', '109-tamu.jpg', '109-balkon.jpg'),
(110, 'C', '', '', '', '', 1, 950000000, 0, 0, '0000-00-00', 0, 0, '110-tidur1.jpg', '110-tidur2.jpg', '110-tidur3.jpg', '110-makan.jpg', '110-dapur.jpg', '110-mandi.jpg', '110-tamu.jpg', '110-balkon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `gambar` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `berita`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'Lisa', 'lisa@yahoo.com', 'Confirmed Payment', 'I have confirmed my payment, but seem like there is something wrong, because i don''t get any mail. Can you check my confirmation once again?'),
(2, 'Andi', 'lightmyfire@yahoo.com', 'Great Website', 'The feature on this website are quite comprehensive. It also look so neat. It gives me best experience on surveying apartment online, and I can booked it to. It makes me satisfied! Thank you!!'),
(3, 'Budi', 'budi@yahoo.com', 'Subscription Mail?', 'It''s quite interesting here, but can i got some subscription if there is new project?');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `gambar` text NOT NULL,
  `ketarangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--


-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `gambar` text NOT NULL,
  `pagelink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
