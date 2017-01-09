-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 09 Janvier 2017 à 13:59
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `trombinoschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `bouche`
--

CREATE TABLE IF NOT EXISTS `bouche` (
  `id_bouche` int(11) NOT NULL AUTO_INCREMENT,
  `img_bouche` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bouche`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=367 ;

--
-- Contenu de la table `bouche`
--

INSERT INTO `bouche` (`id_bouche`, `img_bouche`) VALUES
(1, 'bouche-00.png'),
(2, 'bouche-01.png'),
(3, 'bouche-02.png'),
(4, 'bouche-03.png'),
(5, 'bouche-04.png'),
(6, 'bouche-05.png'),
(7, 'bouche-06.png'),
(8, 'bouche-07.png'),
(9, 'bouche-08.png'),
(10, 'bouche-09.png'),
(11, 'bouche-10.png'),
(12, 'bouche-11.png'),
(13, 'bouche-12.png');

-- --------------------------------------------------------

--
-- Structure de la table `ensemble`
--

CREATE TABLE IF NOT EXISTS `ensemble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `ensemble` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `ensemble`
--

INSERT INTO `ensemble` (`id`, `nom`, `ensemble`) VALUES
(2, 'Eric', 'face-04.png,eyes-04.png,nez-03.png,bouche-04.png'),
(3, 'Patrick', 'face-00.png,eyes-00.png,nez-00.png,bouche-00.png'),
(5, 'heyhey', 'face-01.png,eyes-04.png,nez-06.png,bouche-04.png'),
(7, 'tiboulet', 'face-08.png,eyes-09.png,nez-09.png,bouche-10.png');

-- --------------------------------------------------------

--
-- Structure de la table `nez`
--

CREATE TABLE IF NOT EXISTS `nez` (
  `id_nez` int(11) NOT NULL AUTO_INCREMENT,
  `img_nez` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nez`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=275 ;

--
-- Contenu de la table `nez`
--

INSERT INTO `nez` (`id_nez`, `img_nez`) VALUES
(1, 'nez-00.png'),
(2, 'nez-01.png'),
(3, 'nez-02.png'),
(4, 'nez-03.png'),
(5, 'nez-04.png'),
(6, 'nez-05.png'),
(7, 'nez-06.png'),
(8, 'nez-07.png'),
(9, 'nez-08.png'),
(10, 'nez-09.png'),
(11, 'nez-10.png'),
(12, 'nez-11.png'),
(13, 'nez-12.png');

-- --------------------------------------------------------

--
-- Structure de la table `visage`
--

CREATE TABLE IF NOT EXISTS `visage` (
  `id_visage` int(11) NOT NULL AUTO_INCREMENT,
  `img_visage` varchar(20) NOT NULL,
  PRIMARY KEY (`id_visage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=274 ;

--
-- Contenu de la table `visage`
--

INSERT INTO `visage` (`id_visage`, `img_visage`) VALUES
(1, 'face-00.png'),
(2, 'face-01.png'),
(3, 'face-02.png'),
(4, 'face-03.png'),
(5, 'face-04.png'),
(6, 'face-05.png'),
(7, 'face-06.png'),
(8, 'face-07.png'),
(9, 'face-08.png'),
(10, 'face-09.png'),
(11, 'face-10.png'),
(12, 'face-11.png'),
(13, 'face-12.png');

-- --------------------------------------------------------

--
-- Structure de la table `yeux`
--

CREATE TABLE IF NOT EXISTS `yeux` (
  `id_yeux` int(11) NOT NULL AUTO_INCREMENT,
  `img_yeux` varchar(20) NOT NULL,
  PRIMARY KEY (`id_yeux`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=274 ;

--
-- Contenu de la table `yeux`
--

INSERT INTO `yeux` (`id_yeux`, `img_yeux`) VALUES
(1, 'eyes-00.png'),
(2, 'eyes-01.png'),
(3, 'eyes-02.png'),
(4, 'eyes-03.png'),
(5, 'eyes-04.png'),
(6, 'eyes-05.png'),
(7, 'eyes-06.png'),
(8, 'eyes-07.png'),
(9, 'eyes-08.png'),
(10, 'eyes-09.png'),
(11, 'eyes-10.png'),
(12, 'eyes-11.png'),
(13, 'eyes-12.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
