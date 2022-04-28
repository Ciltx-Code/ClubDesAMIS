-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 avr. 2022 à 14:59
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clubdesamis`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` int NOT NULL AUTO_INCREMENT,
  `commission_id_id` int NOT NULL,
  `date_debut` date NOT NULL,
  `duree` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_47CC8C9231058CC4` (`commission_id_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `action_user`
--

DROP TABLE IF EXISTS `action_user`;
CREATE TABLE IF NOT EXISTS `action_user` (
  `action_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`action_id`,`user_id`),
  KEY `IDX_FB726D479D32F035` (`action_id`),
  KEY `IDX_FB726D47A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commission`
--

DROP TABLE IF EXISTS `commission`;
CREATE TABLE IF NOT EXISTS `commission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dine`
--

DROP TABLE IF EXISTS `dine`;
CREATE TABLE IF NOT EXISTS `dine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nb_invites` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `diner`
--

DROP TABLE IF EXISTS `diner`;
CREATE TABLE IF NOT EXISTS `diner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prix` int NOT NULL,
  `date` datetime DEFAULT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dine_user`
--

DROP TABLE IF EXISTS `dine_user`;
CREATE TABLE IF NOT EXISTS `dine_user` (
  `dine_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`dine_id`,`user_id`),
  KEY `IDX_BD0687887E943B25` (`dine_id`),
  KEY `IDX_BD068788A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220428132824', '2022-04-28 13:28:31', 2385),
('DoctrineMigrations\\Version20220428133318', '2022-04-28 13:33:24', 838);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonction_commission`
--

DROP TABLE IF EXISTS `fonction_commission`;
CREATE TABLE IF NOT EXISTS `fonction_commission` (
  `fonction_id` int NOT NULL,
  `commission_id` int NOT NULL,
  PRIMARY KEY (`fonction_id`,`commission_id`),
  KEY `IDX_4D469D8257889920` (`fonction_id`),
  KEY `IDX_4D469D82202D1EB2` (`commission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonction_user`
--

DROP TABLE IF EXISTS `fonction_user`;
CREATE TABLE IF NOT EXISTS `fonction_user` (
  `fonction_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`fonction_id`,`user_id`),
  KEY `IDX_F8A9981557889920` (`fonction_id`),
  KEY `IDX_F8A99815A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscrit_action`
--

DROP TABLE IF EXISTS `inscrit_action`;
CREATE TABLE IF NOT EXISTS `inscrit_action` (
  `inscrit_id` int NOT NULL,
  `action_id` int NOT NULL,
  PRIMARY KEY (`inscrit_id`,`action_id`),
  KEY `IDX_943235226DCD4FEE` (`inscrit_id`),
  KEY `IDX_943235229D32F035` (`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscrit_user`
--

DROP TABLE IF EXISTS `inscrit_user`;
CREATE TABLE IF NOT EXISTS `inscrit_user` (
  `inscrit_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`inscrit_id`,`user_id`),
  KEY `IDX_C2602F716DCD4FEE` (`inscrit_id`),
  KEY `IDX_C2602F71A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parraine`
--

DROP TABLE IF EXISTS `parraine`;
CREATE TABLE IF NOT EXISTS `parraine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amis_parraine_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2371A5FAEF1F4E0D` (`amis_parraine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parraine_user`
--

DROP TABLE IF EXISTS `parraine_user`;
CREATE TABLE IF NOT EXISTS `parraine_user` (
  `parraine_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`parraine_id`,`user_id`),
  KEY `IDX_431D729F2A603A13` (`parraine_id`),
  KEY `IDX_431D729FA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telFixe` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telPortable` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroAdresse` int NOT NULL,
  `villeAdresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `FK_47CC8C9231058CC4` FOREIGN KEY (`commission_id_id`) REFERENCES `commission` (`id`);

--
-- Contraintes pour la table `action_user`
--
ALTER TABLE `action_user`
  ADD CONSTRAINT `FK_FB726D479D32F035` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FB726D47A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `dine_user`
--
ALTER TABLE `dine_user`
  ADD CONSTRAINT `FK_BD0687887E943B25` FOREIGN KEY (`dine_id`) REFERENCES `dine` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BD068788A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fonction_commission`
--
ALTER TABLE `fonction_commission`
  ADD CONSTRAINT `FK_4D469D82202D1EB2` FOREIGN KEY (`commission_id`) REFERENCES `commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4D469D8257889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fonction_user`
--
ALTER TABLE `fonction_user`
  ADD CONSTRAINT `FK_F8A9981557889920` FOREIGN KEY (`fonction_id`) REFERENCES `fonction` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F8A99815A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscrit_action`
--
ALTER TABLE `inscrit_action`
  ADD CONSTRAINT `FK_943235226DCD4FEE` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_943235229D32F035` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscrit_user`
--
ALTER TABLE `inscrit_user`
  ADD CONSTRAINT `FK_C2602F716DCD4FEE` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C2602F71A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `parraine`
--
ALTER TABLE `parraine`
  ADD CONSTRAINT `FK_2371A5FAEF1F4E0D` FOREIGN KEY (`amis_parraine_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `parraine_user`
--
ALTER TABLE `parraine_user`
  ADD CONSTRAINT `FK_431D729F2A603A13` FOREIGN KEY (`parraine_id`) REFERENCES `parraine` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_431D729FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
