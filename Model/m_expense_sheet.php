<?php

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

?>