-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 22 mars 2018 à 23:26
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `workshop2`
--
CREATE DATABASE IF NOT EXISTS `workshop2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `workshop2`;

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE `apprenant` (
  `id_apprenant` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datenaiss_pro` date NOT NULL,
  `genre_pro` varchar(25) NOT NULL,
  `tel_pro` varchar(25) NOT NULL,
  `adresse_pro` varchar(25) NOT NULL,
  `statut_pro` binary(1) NOT NULL,
  `identifiant` varchar(25) NOT NULL,
  `adr_email_professionnel` varchar(25) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `competence1` varchar(255) DEFAULT NULL,
  `competence2` varchar(255) DEFAULT NULL,
  `competence3` varchar(255) DEFAULT NULL,
  `imageProfil` varchar(255) NOT NULL,
  `disponibilite1` varchar(255) NOT NULL,
  `disponibilite2` varchar(255) NOT NULL,
  `disponibilite3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id_apprenant`, `first_name`, `last_name`, `email`, `password`, `datenaiss_pro`, `genre_pro`, `tel_pro`, `adresse_pro`, `statut_pro`, `identifiant`, `adr_email_professionnel`, `hash`, `active`, `competence1`, `competence2`, `competence3`, `imageProfil`, `disponibilite1`, `disponibilite2`, `disponibilite3`) VALUES
(2, 'Jatin', 'Bhatia', 'jatin.bhatia@hotmail.fr', 'test1', '1997-07-04', 'a', 'test', 'test', 0x00, 'test', 'test', 'test', 1, 'PHP', 'JAVA', 'C++', 'images/profile_placeholder.gif', 'Mardi', 'Jeudi', 'Dimanche'),
(3, 'Marie', 'Lahondere', 'marie.lahondere@hotmail.fr', 'test2', '1999-02-23', 'test2', 'test2', 'test2', 0x00, 'test2', 'test2', 'test2', 1, 'SQL', 'Maths', 'C', 'images/profile_placeholder.gif', 'Mercredi', 'Jeudi', 'Vendredi'),
(4, 'Deguene', 'Diene', 'deguene.diene@free.fr', 'test3', '1998-06-12', 'test3', 'test3', 'test', 0x00, 'test', 'test', 'test', 1, 'PHP', 'Reseau', 'Economie', 'images/profile_placeholder.gif', 'Lundi', 'Mardi', ''),
(5, 'Ariana', 'Montignac', 'ariana.montignac@hotmail.fr', 'test4', '1999-01-01', 'test', 'test', 'test', 0x00, 'test', 'test', 'test', 1, 'Maths', 'Gestion', 'Html', 'images/profile_placeholder.gif', 'Mercredi', 'Jeudi', ''),
(6, 'Sebastien', 'Peloux', 'sebastien.peloux@hotmail.fr', 'test5', '1998-01-01', 'test2', 'test2', 'test2', 0x00, 'test2', 'test2', 'test2', 1, 'CSS', 'C++', 'Maths', 'images/profile_placeholder.gif', 'Samedi', 'Lundi', 'Dimanche'),
(7, 'Timothe', 'Gris', 'timothe.gris@hotmail.fr', 'test6', '1970-01-01', 'test', 'test', 'test', 0x00, 'test', 'test', 'test', 1, 'Anglais', 'Reseau', 'Algo', 'images/profile_placeholder.gif', 'Mardi', 'Vendredi', 'Mercredi'),
(8, 'Fabien', 'Belnou', 'fabien.belnou@hotmail.fr', 'test7', '1970-01-01', 'test', 'test', 'test', 0x00, 'test', 'test', 'test', 1, 'Maths', 'JAVA', 'CSS', 'images/profile_placeholder.gif', 'Lundi', 'Jeudi', ''),
(9, 'Arthur', 'Dufour', 'arthur.dufour@hotmail.fr', 'test8', '1970-01-01', 'test2', 'test2', 'test2', 0x00, 'test2', 'test2', 'test2', 1, 'HTML', 'Maths', 'C++', 'images/profile_placeholder.gif', 'Mardi', 'Vendredi', 'Dimanche'),
(10, 'Flemming', 'Mallant', 'flemming.mallant@hotmail.fr', 'test9', '1970-01-01', 'test3', 'test3', 'test', 0x00, 'test', 'test', 'test', 1, 'C', 'PHP', 'Management', 'images/profile_placeholder.gif', 'Mercredi', 'Samedi', ''),
(11, 'Aude', 'Beaudoux', 'aude.beaudoux@hotmail.fr', 'test10', '1970-01-01', 'test', 'test', 'test', 0x00, 'test', 'test', 'test', 1, 'Anglais', 'Maths', 'Droit', 'images/profile_placeholder.gif', 'Lundi', 'Mardi', 'Dimanche'),
(12, 'Margaux', 'Dupont', 'margaux.dupont@hotmail.fr', 'test11', '1970-01-01', 'test2', 'test2', 'test2', 0x00, 'test2', 'test2', 'test2', 1, 'SQL', 'Merise', 'PHP', 'images/profile_placeholder.gif', 'Mardi', '', ''),
(13, 'Rebecca', 'Gonin', 'reblapuce@hotmail.com', 'test12', '0000-00-00', 'F', 'I52n52c2', 'qsdqsd', 0x00, 'reb', '', '091d584fced301b442654dd8c23b3fc9', 0, 'Maths', 'PHP', 'Anglais', 'images/profile_placeholder.gif', 'Mercredi', 'Jeudi', ''),
(14, 'Stephanie', 'Gonin', 'stephcoucou@hotmail.fr', 'test13', '0000-00-00', 'qsdqs', 'qsdqsd', 'qsdqsd', 0x00, 'steph', '', '8757150decbd89b0f5442ca3db4d0e0e', 0, 'Reseau', 'Gestion', 'Maths', 'images/profile_placeholder.gif', 'Dimanche', 'Mardi', 'Vendredi'),
(15, 'Yves', 'Caron', 'yves.caron@hotmail.fr', 'test14', '0000-00-00', 'COUCOU', 'coucou', 'coucou', 0x00, 'DD', '', 'a760880003e7ddedfef56acb3b09697f', 0, 'Maths', 'Windows', 'Linux', 'images/profile_placeholder.gif', 'Mardi', 'Jeudi', ''),
(16, 'a', 'b', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '0000-00-00', 'a', 'a', 'a', 0x00, 'a', '', 'b5b41fac0361d157d9673ecb926af5ae', 0, NULL, NULL, NULL, 'images/profile_placeholder.gif', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `communiquer`
--

DROP TABLE IF EXISTS `communiquer`;
CREATE TABLE `communiquer` (
  `id_message` int(11) NOT NULL,
  `nbr_mp` int(11) NOT NULL,
  `heure_mp` datetime NOT NULL,
  `contenu_mp` text NOT NULL,
  `expediteur_mp` varchar(25) NOT NULL,
  `recepteur_mp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rencontrer`
--

DROP TABLE IF EXISTS `rencontrer`;
CREATE TABLE `rencontrer` (
  `id_rencontre` int(11) NOT NULL,
  `client_renc` varchar(25) NOT NULL,
  `prestataire_renc` varchar(25) NOT NULL,
  `lieu_renc` varchar(25) NOT NULL,
  `date_renc` datetime NOT NULL,
  `type_renc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rencontrer`
--

INSERT INTO `rencontrer` (`id_rencontre`, `client_renc`, `prestataire_renc`, `lieu_renc`, `date_renc`, `type_renc`) VALUES
(1, 'Marie', 'a', 'Téléphone', '2020-06-25 00:00:00', 'Video'),
(2, 'Stephanie', 'a', 'Téléphone', '2018-03-22 00:00:00', 'Audio'),
(3, 'Marie', 'a', 'Téléphone', '2020-06-25 00:00:00', 'Video'),
(4, 'Stephanie', 'a', 'Téléphone', '2018-03-22 00:00:00', 'Audio'),
(5, 'Marie', 'a', 'Téléphone', '2020-06-25 00:00:00', 'Video'),
(6, 'Stephanie', 'a', 'Téléphone', '2018-03-22 00:00:00', 'Audio'),
(7, 'Marie', 'a', 'Téléphone', '2020-06-25 00:00:00', 'Video'),
(8, 'Stephanie', 'a', 'Téléphone', '2018-03-22 00:00:00', 'Audio');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id_apprenant`);

--
-- Index pour la table `communiquer`
--
ALTER TABLE `communiquer`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `rencontrer`
--
ALTER TABLE `rencontrer`
  ADD PRIMARY KEY (`id_rencontre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id_apprenant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `communiquer`
--
ALTER TABLE `communiquer`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rencontrer`
--
ALTER TABLE `rencontrer`
  MODIFY `id_rencontre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
