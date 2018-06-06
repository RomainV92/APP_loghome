-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 06 juin 2018 à 20:51
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `urser`
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
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`ID`, `ID_piece`, `Num_Serie`, `Valeur`, `Nom`, `Type`) VALUES
(3, 3, 'XX5646 464', 0, 'luminos', 'température'),
(5, 3, 'XX5646 464', 0, 'luminos', 'température');

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur_type`
--

INSERT INTO `capteur_type` (`ID`, `type`, `Nom`, `AxeX`, `AxeY`, `Image_url`) VALUES
(10, '', '', '', '', ''),
(9, '3', 'température', 'Celcius', 'secondes', ''),
(11, 'température', 'température', '', '', '../images/temperature.png'),
(12, 'luminosité', 'luminosité', '', '', '../images/bulb.png'),
(15, 'moteur', 'moteur', '', '', '../images/ventilation.png');

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
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`ID`, `Nom`, `Prenom`, `Pseudo`, `Password`, `Telephone`, `Mail`, `Question`, `Answer`, `Image_url`) VALUES
(38, 'tissot', 'mael', 'Svenn', '$2y$10$YDRrvFNneNiq/Q7VpQAjW.ylcKHsEIrRTV79wDDaesX4nyYMwP9/G', '0695827160', 'camarche@camarche.com', '0', '', '29919979_1737327392991256_1485306110_n.jpg'),
(40, 'mael', 'mael', 'mael', '$2y$10$f/inFWa.0IKPspcPDJh9PuveQacQHvYUqLlr9psuF9c4CS2UFHxnG', '0695827160', 'tissotm@hotmail.com', '0', '', ''),
(0, 'admin', 'admin', 'Admin0', '$2y$10$AbTDsuVYGWoMu2mBP/ea2uzrFoye2ozybem/mhTcdyD3Sh9Yu/55e', '0695827160', 'a@a.com', '0', '', ''),
(41, 'mael', 'mael', 'Mael', '$2y$10$8g.tigJheoI/hrw9a2LWeumm53/5XYKissK/EJLpL7.iBc/IvFUU6', '0695827160', 'tissotm@hotmail.com', 'type2', 'Maman', ''),
(47, 'André', 'mael', 'André', '$2y$10$LBy3a0L7YJPmXcC3.2rLZOBn.k.rWUbMY.JOV26EAyXonB7fK4wnC', '0685746128', 'ati@gmail.com', 'type4', 'tchoupi', 'image_Log.png'),
(46, 'Tissot', 'mael', 'mael', '$2y$10$XxMYVl9kyjKSt4YZ8sd9rudXS/nLQd90YkvKEjKi4HY2lbEmoccxm', '0695827160', 'tissotm@hotmail.com', 'type2', 'Maman', '');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `Street` text NOT NULL,
  `Postal` int(4) NOT NULL,
  `superficie` int(11) NOT NULL,
  `nom` text NOT NULL,
  `City` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`ID`, `ID_user`, `adresse`, `Street`, `Postal`, `superficie`, `nom`, `City`) VALUES
(13, 36, 'ISEP', '3 rue des mouettes', 75015, 154, 'Charles xavier', ''),
(10, 36, 'Bonjour', 'hey', 75015, 6, 'PLS', ''),
(6, 4, 'a', 'hey', 75015, 14, 'é', ''),
(7, 36, 'a', 'hey', 75015, 14, 'é', ''),
(8, 36, 'a', 'hey', 75015, 14, 'é', ''),
(9, 36, 'VEDER', 'hey', 75015, 152, '\"', ''),
(11, 36, '', 'hey', 75015, 6, 'a', ''),
(12, 36, 'az', 'hey', 75015, 23, 'azer', ''),
(14, 38, 'ISEP', '3 rue des mouettes', 75015, -9, 'maison ', ''),
(15, 38, 'a', '3 rue des mouettes', 75015, 3, 'a', 'ville');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`ID`, `ID_maison`, `Nom`, `Superficie`) VALUES
(1, 10, '2', 300),
(2, 15, 'chambre', 5),
(3, 14, 'Salon', 32);

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
