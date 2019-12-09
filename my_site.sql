-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 08 déc. 2019 à 14:52
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Presentation` varchar(255) NOT NULL,
  `Besoin1` varchar(255) NOT NULL,
  `Besoin2` varchar(255) NOT NULL,
  `Besoin3` varchar(255) NOT NULL,
  `Besoin4` varchar(255) NOT NULL,
  `Besoin5` varchar(255) NOT NULL,
  `Imperatif1` varchar(255) NOT NULL,
  `Imperatif2` varchar(255) NOT NULL,
  `Imperatif3` varchar(255) NOT NULL,
  `Imperatif4` varchar(255) NOT NULL,
  `Imperatif5` varchar(255) NOT NULL,
  `Wordpress` tinyint(1) NOT NULL,
  `Prestashop` tinyint(1) NOT NULL,
  `Bootstrap` tinyint(1) NOT NULL,
  `HTML` tinyint(1) NOT NULL,
  `CSS` tinyint(1) NOT NULL,
  `PHP` tinyint(1) NOT NULL,
  `Site_Vitrine` tinyint(1) NOT NULL,
  `E-commerce` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`ID`, `Titre`, `Presentation`, `Besoin1`, `Besoin2`, `Besoin3`, `Besoin4`, `Besoin5`, `Imperatif1`, `Imperatif2`, `Imperatif3`, `Imperatif4`, `Imperatif5`, `Wordpress`, `Prestashop`, `Bootstrap`, `HTML`, `CSS`, `PHP`, `Site_Vitrine`, `E-commerce`) VALUES
(1, 'Hypnose vision', 'Un site vitrine pour un hypno-thérapeute.', 'Présenter son travail\r\n', 'Faciliter l\'ajout de contenu', 'Augmenter la visibilité sur internet', '', '', 'Site résponsive', 'Page contact avec coordonnée et formulaire', 'Système d\'article gérer par le client', 'Système d\'avis client à validé avant publication', '', 1, 0, 1, 1, 1, 0, 1, 0),
(2, 'Atelier A3 Lille', 'Un site vitrine pour un atelier de trois artistes.', 'Présenter leurs oeuvres', 'Mettre en avant leurs différents services ', 'Augmenter la visibilité sur internet', '', '', 'Présenter le concepts de l\'atelier', 'Une page personnel par artiste résident', 'Recapitulatif des expositions organisé', '', '', 0, 0, 1, 1, 1, 1, 1, 0),
(3, 'Mamzelle Firlipipis', 'Une artiste peintre qui souhaiter un site de E-commerce.', 'Vendre ses oeuvres', 'Augmenter son nombre d\'abonnement', 'Augmenter la visibilité sur internet', '', '', 'Site de E-Commerce facile à gérer', 'Systeme de payement par Paypal', 'Transporteur different selon les produits', '', '', 0, 1, 0, 1, 1, 0, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
