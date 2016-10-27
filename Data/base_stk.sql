-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 23 Octobre 2016 à 20:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base_stk`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `ID_MEMBRE` int(11) NOT NULL AUTO_INCREMENT,
  `ADRESSE_1` varchar(250) DEFAULT NULL,
  `ADRESSE_2` varchar(250) DEFAULT NULL,
  `TEL_1` varchar(13) DEFAULT NULL,
  `TEL_2` varchar(13) DEFAULT NULL,
  `TEL_3` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`ID_MEMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE IF NOT EXISTS `cotisation` (
  `ID_MEMBRE` int(11) NOT NULL AUTO_INCREMENT,
  `ANNE` date NOT NULL,
  `MOIS_PAYE` int(11) DEFAULT NULL,
  `TOTAL` decimal(18,3) NOT NULL,
  PRIMARY KEY (`ID_MEMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `log_in`
--

CREATE TABLE IF NOT EXISTS `log_in` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_MEMBRE` int(11) DEFAULT NULL,
  `TYPE` varchar(100) NOT NULL,
  `DATE` date NOT NULL,
  `MONTANT` decimal(18,3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `log_out`
--

CREATE TABLE IF NOT EXISTS `log_out` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TYPE` varchar(100) DEFAULT NULL,
  `DATE` date NOT NULL,
  `DESCRIPTION` varchar(250) DEFAULT NULL,
  `MONTANT` decimal(18,3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(250) NOT NULL,
  `PRENOM` varchar(250) DEFAULT NULL,
  `AGES` int(11) DEFAULT NULL,
  `INTEGRATION` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membres_bureau`
--

CREATE TABLE IF NOT EXISTS `membres_bureau` (
  `ID_MEMBRE` int(11) NOT NULL AUTO_INCREMENT,
  `POSTE` varchar(250) NOT NULL,
  `ANNE_DEBUT` date DEFAULT NULL,
  `ANNE_FIN` date DEFAULT NULL,
  PRIMARY KEY (`ID_MEMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vokatra`
--

CREATE TABLE IF NOT EXISTS `vokatra` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ANNE` date NOT NULL,
  `ID_MEMBRE` int(11) NOT NULL,
  `MONTANT` decimal(10,0) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
