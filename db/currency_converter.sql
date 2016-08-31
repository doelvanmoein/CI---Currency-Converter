-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 31 Agu 2016 pada 20.07
-- Versi Server: 5.5.47-0ubuntu0.14.04.1
-- Versi PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `_git_money_converter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurs`
--

CREATE TABLE IF NOT EXISTS `kurs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `currency` varchar(50) DEFAULT NULL,
  `kurs` double(20,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `kurs`
--

INSERT INTO `kurs` (`id`, `currency`, `kurs`) VALUES
(1, 'USD [US Dollar ]', 13233.00),
(2, 'GBP [Poundsterling]', 17333.00),
(3, 'EUR [Euro]', 14757.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
