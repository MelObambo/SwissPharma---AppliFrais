<?php

<<<<<<< HEAD
$id = $_SESSION['id'];

/**
 * inserts packaged an expense sheet
 */
function createPackageExpenseSheet() {
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
function createOutExpenseSheet() {
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
=======
function createExpenseSheet() {
    $connexion = getConnexion();
    $sql = `
        INSERT INTO FicheFrais(mois, etat)
        VALUES(:mois, :etat, :id, :)
        FraisHorsForfait fh on f.id = fh.id WHERE id = :id ;
    
    
    `;
    $req = $connexion->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
    $res = $req->fetchAll();
    return $res;
}

/**
 * @return Array $res
 */

 $id = $_SESSION['id'];
>>>>>>> 736feaa88401757c5b3945a1fdb95569fab8f615

?>