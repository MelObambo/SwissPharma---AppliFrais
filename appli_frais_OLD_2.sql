-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 nov. 2023 à 17:45
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

CREATE TABLE `Comptable` (
  `idComptable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

CREATE TABLE `FicheFrais` (
  `idFicheFrais` int(11) NOT NULL,
  `mois` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `idVisiteur` int(11) DEFAULT NULL,
  `idComptable` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfantasies`
--

CREATE TABLE `FraisForFantasies` (
  `idFraisForFantasies` int(11) NOT NULL,
  `idFicheFrais` int(11) DEFAULT NULL,
  `typeFrais` varchar(255) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `montantUnitaire` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraishorsforfait`
--

CREATE TABLE `FraisHorsForfait` (
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

CREATE TABLE `Utilisateur` (
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

CREATE TABLE `Visiteur` (
  `idVisiteur` int(11) NOT NULL,
  `matricule` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptable`
--
ALTER TABLE `Comptable`
  ADD PRIMARY KEY (`idComptable`);

--
-- Index pour la table `fichefrais`
--
ALTER TABLE `FicheFrais`
  ADD PRIMARY KEY (`idFicheFrais`),
  ADD KEY `idVisiteur` (`idVisiteur`),
  ADD KEY `idComptable` (`idComptable`);

--
-- Index pour la table `fraisforfaitises`
--
ALTER TABLE `FraisForFantasies`
  ADD PRIMARY KEY (`idFraisForFantasies`),
  ADD KEY `idFicheFrais` (`idFicheFrais`);

--
-- Index pour la table `fraishorsforfait`
--
ALTER TABLE `FraisHorsForfait`
  ADD PRIMARY KEY (`idFraisHorsForfait`),
  ADD KEY `idFicheFrais` (`idFicheFrais`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `Visiteur`
  ADD PRIMARY KEY (`idVisiteur`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comptable`
--
ALTER TABLE `Comptable`
  ADD CONSTRAINT `comptable_ibfk_1` FOREIGN KEY (`idComptable`) REFERENCES `Utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `fichefrais`
--
ALTER TABLE `FicheFrais`
  ADD CONSTRAINT `ficheFrais_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteur` (`idVisiteur`),
  ADD CONSTRAINT `ficheFrais_ibfk_2` FOREIGN KEY (`idComptable`) REFERENCES `Comptable` (`idComptable`);

--
-- Contraintes pour la table `fraisforfaitises`
--
ALTER TABLE `FraisforFaitises`
  ADD CONSTRAINT `fraisforfaitises_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `Fichefrais` (`idFicheFrais`);

--
-- Contraintes pour la table `fraishorsforfait`
--
ALTER TABLE `FraishorsForfait`
  ADD CONSTRAINT `FraisHorsforfait_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `Fichefrais` (`idFicheFrais`);

--
-- Contraintes pour la table `visiteur`
--
ALTER TABLE `Visiteur`
  ADD CONSTRAINT `visiteur_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `Utilisateur` (`idUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;