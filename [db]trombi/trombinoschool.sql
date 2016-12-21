-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Décembre 2016 à 10:31
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trombinoschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `bouche`
--

CREATE TABLE `bouche` (
  `id_bouche` int(11) NOT NULL,
  `img_bouche` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ensemble`
--

CREATE TABLE `ensemble` (
  `id_ensemble` int(11) NOT NULL,
  `id_visage` int(11) NOT NULL,
  `id_nez` int(11) NOT NULL,
  `id_bouche` int(11) NOT NULL,
  `id_yeux` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nez`
--

CREATE TABLE `nez` (
  `id_nez` int(11) NOT NULL,
  `img_nez` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `visage`
--

CREATE TABLE `visage` (
  `id_visage` int(11) NOT NULL,
  `img_visage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `yeux`
--

CREATE TABLE `yeux` (
  `id_yeux` int(11) NOT NULL,
  `img_yeux` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bouche`
--
ALTER TABLE `bouche`
  ADD PRIMARY KEY (`id_bouche`);

--
-- Index pour la table `ensemble`
--
ALTER TABLE `ensemble`
  ADD PRIMARY KEY (`id_ensemble`),
  ADD KEY `id_visage` (`id_visage`,`id_nez`,`id_bouche`,`id_yeux`);

--
-- Index pour la table `nez`
--
ALTER TABLE `nez`
  ADD PRIMARY KEY (`id_nez`);

--
-- Index pour la table `visage`
--
ALTER TABLE `visage`
  ADD PRIMARY KEY (`id_visage`);

--
-- Index pour la table `yeux`
--
ALTER TABLE `yeux`
  ADD PRIMARY KEY (`id_yeux`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bouche`
--
ALTER TABLE `bouche`
  MODIFY `id_bouche` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ensemble`
--
ALTER TABLE `ensemble`
  MODIFY `id_ensemble` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `nez`
--
ALTER TABLE `nez`
  MODIFY `id_nez` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `visage`
--
ALTER TABLE `visage`
  MODIFY `id_visage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `yeux`
--
ALTER TABLE `yeux`
  MODIFY `id_yeux` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
