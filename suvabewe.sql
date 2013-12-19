-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 19. Desember 2013 jam 22:32
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suvabewe`
--
CREATE DATABASE `suvabewe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `suvabewe`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `apartemen`
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
-- Dumping data untuk tabel `apartemen`
--

INSERT INTO `apartemen` (`no_kamar`, `type_kamar`, `spec_kamar`, `password`, `nama_pemilik`, `email`, `available`, `harga`, `booked`, `booked_fee`, `booked_date`, `tagihan_listrik`, `tagihan_air`, `gambar_tidur1`, `gambar_tidur2`, `gambar_tidur3`, `gambar_makan`, `gambar_dapur`, `gambar_mandi`, `gambar_tamu`, `gambar_balkon`) VALUES
(0, '', '', '123456', 'Admin', '', 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', '', '', '', '', '', ''),
(101, 'A', '', '1234', 'Sandy Usman Erry', '', 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `gambar` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `tanggal`) VALUES
(1, '2013-11-30', 'Hello and Welcome to SUVABEWE', 'hafjldajfla', '2013-11-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `gambar` text NOT NULL,
  `ketarangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
