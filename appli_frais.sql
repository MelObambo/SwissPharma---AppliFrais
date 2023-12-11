-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 déc. 2023 à 15:17
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `swisspharma`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptable`
--

CREATE TABLE `comptable` (
  `idComptable` int(11) NOT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

CREATE TABLE `fichefrais` (
  `id` int(11) NOT NULL,
  `mois` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `idVisiteur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfaitise`
--

CREATE TABLE `fraisforfaitise` (
  `id` int(11) NOT NULL,
  `typeFrais` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `montantUnitaire` decimal(10,2) NOT NULL,
  `idFicheFrais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraishorsforfait`
--

CREATE TABLE `fraishorsforfait` (
  `id` int(11) NOT NULL,
  `dateFrais` date NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `idFicheFrais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `idVisiteur` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptable`
--
ALTER TABLE `comptable`
  ADD PRIMARY KEY (`idComptable`),
  ADD KEY `idUtilisateur` (`idUtilisateur`);

--
-- Index pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVisiteur` (`idVisiteur`);

--
-- Index pour la table `fraisforfaitise`
--
ALTER TABLE `fraisforfaitise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFicheFrais` (`idFicheFrais`);

--
-- Index pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFicheFrais` (`idFicheFrais`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`idVisiteur`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comptable`
--
ALTER TABLE `comptable`
  ADD CONSTRAINT `comptable_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD CONSTRAINT `fichefrais_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteur` (`idVisiteur`);

--
-- Contraintes pour la table `fraisforfaitise`
--
ALTER TABLE `fraisforfaitise`
  ADD CONSTRAINT `fraisforfaitise_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `fichefrais` (`id`);

--
-- Contraintes pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  ADD CONSTRAINT `fraishorsforfait_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `fichefrais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
