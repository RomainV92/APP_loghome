-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 juin 2018 à 21:35
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_piece` int(11) NOT NULL,
  `Num_Serie` text NOT NULL,
  `Valeur` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Type` text NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`ID`, `ID_piece`, `Num_Serie`, `Valeur`, `Nom`, `Type`, `Status`) VALUES
(36, 22, 'XX5646 464', 45, 'Tempos', 'température', '0'),
(35, 22, 'XX5646 464', 0, 'luminos', 'luminosité', '0'),
(34, 21, 'XX5646 464 1', 0, 'Ventilos', 'Ventillation', '0'),
(33, 21, 'XX5646 464 123', 0, 'Tempos', 'température', '0'),
(32, 21, 'XX5646 464', 0, 'luminos', 'luminosité', '0');

-- --------------------------------------------------------

--
-- Structure de la table `capteur_type`
--

DROP TABLE IF EXISTS `capteur_type`;
CREATE TABLE IF NOT EXISTS `capteur_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `Nom` text NOT NULL,
  `AxeX` text NOT NULL,
  `AxeY` text NOT NULL,
  `Image_url` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur_type`
--

INSERT INTO `capteur_type` (`ID`, `type`, `Nom`, `AxeX`, `AxeY`, `Image_url`) VALUES
(24, 'Température', 'température', 'Celcius', 'secondes', '../images/temperature.png'),
(12, 'luminosité', 'luminosité', '', '', '../images/bulb.png'),
(25, 'Ventillation', 'Ventillation', 'n/a', 'n/a', '../images/ventilation.png');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Pseudo` text NOT NULL,
  `Password` text NOT NULL,
  `Telephone` varchar(11) NOT NULL,
  `Mail` text NOT NULL,
  `Question` text NOT NULL,
  `Answer` text NOT NULL,
  `Image_url` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`ID`, `Nom`, `Prenom`, `Pseudo`, `Password`, `Telephone`, `Mail`, `Question`, `Answer`, `Image_url`) VALUES
(38, 'tissot', 'mael', 'Svenn', '$2y$10$YDRrvFNneNiq/Q7VpQAjW.ylcKHsEIrRTV79wDDaesX4nyYMwP9/G', '0695827160', 'camarche@camarche.com', '0', '', '29919979_1737327392991256_1485306110_n.jpg'),
(0, 'admin', 'admin', 'Admin0', '$2y$10$AbTDsuVYGWoMu2mBP/ea2uzrFoye2ozybem/mhTcdyD3Sh9Yu/55e', '0695827160', 'a@a.com', '0', '', 'image_Log.png'),
(56, 'Xavier', 'Michel', 'MichelSamba', '$2y$10$5wJ0V5Yj.ibWE5l5rYkvW.KHv3AVgkr2JiIl/LSPjaSjebzJa3qJO', '0695827160', 'romain.valaix@gmail.com', 'type2', 'Beatrice', 'image_Log.png');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `type_maison` text NOT NULL,
  `adresse` text NOT NULL,
  `Street` text NOT NULL,
  `Postal` int(4) NOT NULL,
  `superficie` int(11) NOT NULL,
  `nom` text NOT NULL,
  `City` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`ID`, `ID_user`, `type_maison`, `adresse`, `Street`, `Postal`, `superficie`, `nom`, `City`) VALUES
(30, 56, 'appartement', '152', 'rue Blomet', 75015, 150, 'Appartement Paris', 'Issy-les-moulineaux'),
(29, 56, 'maison', '1', 'rue des vertugadins', 92190, 250, 'Maison Meudon', 'Meudo');

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
CREATE TABLE IF NOT EXISTS `pieces` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_maison` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Superficie` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`ID`, `ID_maison`, `Nom`, `Superficie`) VALUES
(22, 30, 'chambre', 19),
(21, 30, 'Salon', 50);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_maison`
--

DROP TABLE IF EXISTS `utilisateurs_maison`;
CREATE TABLE IF NOT EXISTS `utilisateurs_maison` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `ID_maison` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `util_maisons`
--

DROP TABLE IF EXISTS `util_maisons`;
CREATE TABLE IF NOT EXISTS `util_maisons` (
  `ID_maison` int(11) NOT NULL,
  `ID_utilisateur` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `util_maisons`
--

INSERT INTO `util_maisons` (`ID_maison`, `ID_utilisateur`, `ID`) VALUES
(10, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
