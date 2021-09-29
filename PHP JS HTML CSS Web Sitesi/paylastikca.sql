-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 16 Ağu 2021, 00:43:46
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `paylastikca`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(30) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `konu` varchar(35) NOT NULL,
  `mesaj` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `email`, `konu`, `mesaj`) VALUES
(1, 'Mehmet Acar', '05555555555', 'email@email.com', 'Deneme', 'Merhaba Ben Mehmet'),
(12, 'Eren Karaman', '05569874522', 'eren@eren.com', 'TEST', 'Merhaba BEN EREN'),
(7, 'Ahmet Akan', '05555555555', 'ahmet@ahmet.com', 'TEST', 'Ben Ahmet merhaba.'),
(8, 'Atakan Demir', '05592523654', 'atakan@atakan.com', 'TEST', 'Ben ATAKAN'),
(11, 'Salih Uzun', '05565578921', 'salih@salih.com', 'TEST', 'BEN SALIH'),
(13, 'Eren Karaman', '05569874522', 'eren@eren.com', 'TEST', 'Merhaba BEN EREN'),
(14, 'Mehmet Acar', '05558887744', 'mehmet@mehmet.com', 'TEST', 'Merhaba Ben Mehmet '),
(16, 'sdadasdas', '05536632547', 'fskda@asdajdas', 'TEST', 'ASDASDJASAFADA'),
(17, 'sdadasdas', '05536632547', 'fskda@asdajdas', 'TEST', 'ASDASDJASAFADA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
