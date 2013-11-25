-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2013 at 10:55 AM
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
  `password` text NOT NULL,
  `nama_pemilik` text NOT NULL,
  `email` text NOT NULL,
  `available` tinyint(1) NOT NULL,
  `tagihan_listrik` int(20) NOT NULL,
  `tagihan_air` int(20) NOT NULL,
  PRIMARY KEY (`no_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
