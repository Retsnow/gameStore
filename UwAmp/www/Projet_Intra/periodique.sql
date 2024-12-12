-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 08 Octobre 2024 à 20:46
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `intra`
--

-- --------------------------------------------------------

--
-- Structure de la table `periodique`
--

CREATE TABLE `periodique` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `annee` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `mois` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `periodique`
--

INSERT INTO `periodique` (`id`, `nom`, `titre`, `annee`, `mois`, `numero`, `photo`) VALUES
(1, 'MagPi', 'Fabrication & impression 3D avec le Raspberry Pi', '2021', 'janvier-février', '16', 'https:\\\\www.elektor.fr/cdn/shop/files/magpi-n016-janvier-fevrier-2021-fr19566-320205.jpg'),
(2, 'MagPi', 'Raspberry Pi 400 Guides & Projets', '2021', 'mars-avril', '17', 'https:\\\\www.elektor.fr/cdn/shop/files/magpi-n017-mars-avril-2021-fr19670-886386.jpg'),
(3, 'MagPi', 'Créer un centre Multi Média', '2021', 'mai-juin', '18', 'https:\\\\www.elektor.fr/cdn/shop/files/magpi-n018-mai-juin-2021-fr19729-600930.png'),
(4, 'MagPi', '50 trucs et astuces pour booster l\'ordinaire d\'un ordinateur peu ordinaire', '2021', 'juillet-août', '19', 'https:\\\\www.elektor.fr/cdn/shop/files/magpi-n019-juilletaout-2021-fr19822-148802.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `periodique`
--
ALTER TABLE `periodique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `periodique`
--
ALTER TABLE `periodique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
