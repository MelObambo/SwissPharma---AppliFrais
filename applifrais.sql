-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 déc. 2023 à 17:40
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
-- Base de données : `applifrais`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptable`
--

CREATE TABLE `comptable` (
  `idComptable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

CREATE TABLE `fichefrais` (
  `idFicheFrais` int(11) NOT NULL,
  `mois` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `idVisiteur` int(11) DEFAULT NULL,
  `idComptable` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfaitises`
--

CREATE TABLE `fraisforfaitises` (
  `idFraisForfaitises` int(11) NOT NULL,
  `idFicheFrais` int(11) DEFAULT NULL,
  `typeFrais` varchar(255) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `montantUnitaire` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraishorsforfait`
--

CREATE TABLE `fraishorsforfait` (
  `idFraisHorsForfait` int(11) NOT NULL,
  `idFicheFrais` int(11) DEFAULT NULL,
  `dateFrais` date DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `motDePasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `idVisiteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptable`
--
ALTER TABLE `comptable`
  ADD PRIMARY KEY (`idComptable`);

--
-- Index pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD PRIMARY KEY (`idFicheFrais`),
  ADD KEY `fichefrais_ibfk_1` (`idVisiteur`),
  ADD KEY `fichefrais_ibfk_2` (`idComptable`);

--
-- Index pour la table `fraisforfaitises`
--
ALTER TABLE `fraisforfaitises`
  ADD PRIMARY KEY (`idFraisForfaitises`),
  ADD KEY `fraisforfaitises_ibfk_1` (`idFicheFrais`);

--
-- Index pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  ADD PRIMARY KEY (`idFraisHorsForfait`),
  ADD KEY `fraishorsforfait_ibfk_1` (`idFicheFrais`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

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
  ADD CONSTRAINT `comptable_ibfk_1` FOREIGN KEY (`idComptable`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD CONSTRAINT `fichefrais_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteur` (`idVisiteur`),
  ADD CONSTRAINT `fichefrais_ibfk_2` FOREIGN KEY (`idComptable`) REFERENCES `comptable` (`idComptable`);

--
-- Contraintes pour la table `fraisforfaitises`
--
ALTER TABLE `fraisforfaitises`
  ADD CONSTRAINT `fraisforfaitises_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `fichefrais` (`idFicheFrais`);

--
-- Contraintes pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  ADD CONSTRAINT `fraishorsforfait_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `fichefrais` (`idFicheFrais`);

--
-- Contraintes pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD CONSTRAINT `visiteur_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `utilisateur` (`idUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
