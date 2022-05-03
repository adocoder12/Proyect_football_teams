-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2021 at 08:14 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelaajat`
--

DROP TABLE IF EXISTS `pelaajat`;
CREATE TABLE IF NOT EXISTS `pelaajat` (
  `player_ID` int NOT NULL AUTO_INCREMENT,
  `etunimi` tinytext NOT NULL,
  `sukunimi` tinytext NOT NULL,
  `pelaja_nro` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `peli_paikka` tinytext NOT NULL,
  `team` int NOT NULL,
  PRIMARY KEY (`player_ID`),
  KEY `team` (`team`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelaajat`
--

INSERT INTO `pelaajat` (`player_ID`, `etunimi`, `sukunimi`, `pelaja_nro`, `peli_paikka`, `team`) VALUES
(16, 'iker', 'casillas', '1', 'GK', 1),
(2, 'Adonay', 'longa', '7', 'DEF', 2),
(17, 'Hannu', 'Kärkkäinen', '55', 'DEF', 4),
(15, 'Leonel', 'Messi', '10', 'GK', 3),
(4, 'Carlos', 'hernandez', '2', 'DEF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `team_ID` int NOT NULL AUTO_INCREMENT,
  `joukkue` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`team_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_ID`, `joukkue`) VALUES
(1, 'Team_a'),
(2, 'team_b'),
(3, 'team_c\r\n'),
(4, 'team_d\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
