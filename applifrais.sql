-- Création de la table `utilisateur` qui servira de parent pour `comptable` et `visiteur`
CREATE TABLE `Utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `motDePasse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Création de la table `comptable` liée à `utilisateur`
CREATE TABLE `Comptable` (
  `idComptable` int(11) NOT NULL,
  PRIMARY KEY (`idComptable`),
  CONSTRAINT `comptable_ibfk_1` FOREIGN KEY (`idComptable`) REFERENCES `Utilisateur` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Création de la table `visiteur` liée à `utilisateur`
CREATE TABLE `Visiteur` (
  `idVisiteur` int(11) NOT NULL,
  PRIMARY KEY (`idVisiteur`),
  CONSTRAINT `visiteur_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `Utilisateur` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table `fichefrais` liée à `utilisateur` et `comptable`
CREATE TABLE `FicheFrais` (
  `idFicheFrais` int(11) NOT NULL,
  `mois` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `idVisiteur` int(11) DEFAULT NULL,
  `idComptable` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFicheFrais`),
  CONSTRAINT `fichefrais_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteur` (`idVisiteur`),
  CONSTRAINT `fichefrais_ibfk_2` FOREIGN KEY (`idComptable`) REFERENCES `Comptable` (`idComptable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Les autres tables restent inchangées
CREATE TABLE `FraisForfaitises` (
  `idFraisForfaitises` int(11) NOT NULL,
  `idFicheFrais` int(11) DEFAULT NULL,
  `typeFrais` varchar(255) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `montantUnitaire` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idFraisForfaitises`),
  CONSTRAINT `fraisforfaitises_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `FicheFrais` (`idFicheFrais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `FraishorsForfait` (
  `idFraisHorsForfait` int(11) NOT NULL,
  `idFicheFrais` int(11) DEFAULT NULL,
  `dateFrais` date DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFraisHorsForfait`),
  CONSTRAINT `fraishorsforfait_ibfk_1` FOREIGN KEY (`idFicheFrais`) REFERENCES `FicheFrais` (`idFicheFrais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
