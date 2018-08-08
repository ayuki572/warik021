-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 05:01 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surma`
--
CREATE DATABASE IF NOT EXISTS `surma` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `surma`;

-- --------------------------------------------------------

--
-- Table structure for table `srt_in`
--

CREATE TABLE IF NOT EXISTS `srt_in` (
  `id_srt` int(11) NOT NULL AUTO_INCREMENT,
  `no_srt` varchar(50) NOT NULL,
  `asal_srt` varchar(100) NOT NULL,
  `hal_srt` varchar(255) NOT NULL,
  `tgl_srt` date NOT NULL,
  `tgl_trm_srt` date NOT NULL,
  `tgl_jth_tmp_srt` date NOT NULL,
  `kategori_srt` varchar(50) NOT NULL,
  `isi_srt` text NOT NULL,
  `ket_srt` varchar(255) NOT NULL,
  `disposisi` text NOT NULL,
  `to_dis` varchar(255) NOT NULL,
  `rak` varchar(50) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  PRIMARY KEY (`id_srt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `srt_in`
--

INSERT INTO `srt_in` (`id_srt`, `no_srt`, `asal_srt`, `hal_srt`, `tgl_srt`, `tgl_trm_srt`, `tgl_jth_tmp_srt`, `kategori_srt`, `isi_srt`, `ket_srt`, `disposisi`, `to_dis`, `rak`, `pdf`) VALUES
(1, 'tes23', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', 'No r', 'No', '', ''),
(2, 'tes', 'tes', 'tes', '0000-00-00', '0000-00-00', '0000-00-00', 'tes', 'di rubah', 'rer', 'No', 'No', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `show_this` varchar(2) NOT NULL DEFAULT '01',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `show_this`) VALUES
(1, '123', '123', '01'),
(2, '', '', '01'),
(3, 'a', 'a', '01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
