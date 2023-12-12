-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 déc. 2023 à 18:28
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appli-frais`
--

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

CREATE TABLE `fichefrais` (
  `id` int(11) NOT NULL,
  `mois` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfaitises`
--

CREATE TABLE `fraisforfaitises` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `motDePasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUtilisateur` (`idUtilisateur`);

--
-- Index pour la table `fraisforfaitises`
--
ALTER TABLE `fraisforfaitises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFicheFrais` (`idFicheFrais`);

--
-- Index pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFicheFrais` (`idFicheFrais`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fraisforfaitises`
--
ALTER TABLE `fraisforfaitises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD CONSTRAINT `fichefrais_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `fraisforfaitises`
--
ALTER TABLE `fraisforfaitises`
  ADD CONSTRAINT `fraisforfaitises_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `fichefrais` (`id`);

--
-- Contraintes pour la table `fraishorsforfait`
--
ALTER TABLE `fraishorsforfait`
  ADD CONSTRAINT `fraishorsforfait_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `fichefrais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
