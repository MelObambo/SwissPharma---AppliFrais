<?php

namespace App\Models;

class ExpenseSheet {
    private $moisAnnee;
    private $matricule;
    private $nbJustificatif;
    private $montantValide;
    private $dateModif;
    private $idEtat;
}
/**
 * inserts packaged an expense sheet
 */
function createPackageExpenseSheet($id) {
    $connexion = getConnexion();
    $sql = "START TRANSACTION;
        INSERT INTO FicheFrais(mois, etat)
        VALUES (:mois, :etat, :id);
        INSERT INTO FraisForfaitise(idFicheFrais, typeFrais, quantite, montantUnitaire)
        VALUES (:id, :type, :quantite, :montant);
        COMMIT";
    $req = $connexion->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
}

/**
 * inserts packaged an expense sheet
 */
function createOutExpenseSheet($id) {
    $connexion = getConnexion();
    $sql = "START TRANSACTION;
        INSERT INTO FicheFrais(mois, etat)
        VALUES (:mois, :etat, :id);
        INSERT INTO FraisHorsForfait(idFicheFrais, dateFrais, libelle, montant, etat)
        VALUES (:id, :date, :libelle, :montant, etat);
        COMMIT";
    $req = $connexion->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
}

?>