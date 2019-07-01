-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 juil. 2019 à 02:41
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id_competence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `href` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_competence`),
  KEY `id_competence` (`id_competence`),
  KEY `libelle` (`libelle`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `id_type`, `libelle`, `logo`, `alt`, `href`) VALUES
(1, 1, 'HTML5 - CSS3', 'Logo/html_css.png', 'Logo HTML5 & CSS3', NULL),
(2, 1, 'PHP', 'Logo/php.png', 'Logo PHP', NULL),
(3, 1, 'JavaScript', 'Logo/javascript.png', 'Logo JavaScript', NULL),
(4, 1, 'C', 'Logo/C.png', 'Logo Langage C', NULL),
(5, 1, 'Python', 'Logo/python.png', 'Logo Python', NULL),
(6, 1, 'infrastructure et réseaux', 'Logo/infra.png', 'Logo Infrastructure', 'Docs/ccna.pdf'),
(7, 2, 'CCNA1', 'Logo/CCNA_certif.png', 'Logo du CCNA', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

DROP TABLE IF EXISTS `experience_pro`;
CREATE TABLE IF NOT EXISTS `experience_pro` (
  `id_exp_pro` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_target` varchar(50) NOT NULL,
  PRIMARY KEY (`id_exp_pro`),
  KEY `id_exp_pro` (`id_exp_pro`),
  KEY `libelle` (`libelle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience_pro`
--

INSERT INTO `experience_pro` (`id_exp_pro`, `libelle`, `logo`, `alt`, `data_target`) VALUES
(1, 'Gamned', 'Logo/gamned.png', 'Logo de Gamned', '#modal_gamned'),
(2, 'Inspection du travail', 'Logo/inspection.png', 'Logo de l\'inspection du travail', '#inspection');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_message` (`id_message`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_message`, `prenom`, `nom`, `mail`, `telephone`, `message`) VALUES
(1, 'Manon', 'JK', NULL, NULL, 'Bonjour!!'),
(2, 'rtyui', 'fghj', '', '', 'rtyui'),
(3, 'rtyui', 'fghj', '', '', 'rtyui');

-- --------------------------------------------------------

--
-- Structure de la table `modaux`
--

DROP TABLE IF EXISTS `modaux`;
CREATE TABLE IF NOT EXISTS `modaux` (
  `id_mod` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `contenu` varchar(3000) NOT NULL,
  PRIMARY KEY (`id_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modaux`
--

INSERT INTO `modaux` (`id_mod`, `titre`, `contenu`) VALUES
('inspection', 'Inspection du travail', 'J\'ai effectué un stage dans la partie informatique de l\'inspection du travail. J\'ai pu apprendre les bases de l\'infrastructure et du réseaux ainsi que l\'installation d\'OS sur des postes.'),
('modal_CV', 'Site CV', 'Ce projet est tout simplement le site sur lequel vous êtes actuellement. Il constiste à donner accés à toutes les informations me concernant qu\'ont besoin les employeurs. Ce projet souligne donc une maîtres des différents langage web.'),
('modal_gamned', 'Gamned', 'Gamned est une entreprise de publicité programmatique. Dans cette ancienne startup, j\'ai pu étudier les bases des bases de données ainsi que des premières connaissances en infrastructure et réseaux.'),
('modal_infra', 'Infrastructure et réseaux', 'Ce projet consiste à simuler la création d\'une infrastructure réseaux d\'une entreprise. J\'ai donc simulé l\'infrastructure sur des machines virtuelles via VMWare. Ce projet souligne donc une maîtrise de l\'infrastructure réseaux et une maîtrise de logiciel de virtualisation.'),
('modal_plante', 'Plante connectée', 'Ce projet consiste à rendre automatique l\'entretien d\'une plante via des capteurs et d\'autres engins permettant de répondre aux besoins de la plantes (actuateur, etc...). Les différents appareils sont dirigé par une carte arduino qui donne des directives celon une base de données. Ce projet souligne donc une maîtrise du langage C.');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `data_target` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_projet`),
  KEY `libelle` (`libelle`),
  KEY `id_projet` (`id_projet`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `libelle`, `logo`, `alt`, `data_target`) VALUES
(1, 'Plante connectée', 'Logo/plante.png', 'Logo du projet Plante Connectée', '#modal_plante'),
(2, 'Site CV', 'Logo/site.png', 'Logo du projet Site CV', '#modal_CV'),
(3, 'Infrastructure et réseaux', 'Logo/infra.png', 'Logo du projet infrastructure et réseaux', '#modal_infra');

-- --------------------------------------------------------

--
-- Structure de la table `type_competence`
--

DROP TABLE IF EXISTS `type_competence`;
CREATE TABLE IF NOT EXISTS `type_competence` (
  `id_type` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_competence`
--

INSERT INTO `type_competence` (`id_type`, `libelle`) VALUES
(1, 'Compétences'),
(2, 'Certifications');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_passwd` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `user_name`, `user_passwd`) VALUES
(1, 'ghislainSeguin', 'GS2000portfolio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
