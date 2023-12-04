<?php
require('connexion.php');

/**
 * @return Array $res
 */
function getExpenseSheet() {
    $id = $_SESSION['id'];
    $connexion = getConnexion();
    $sql = "SELECT * FROM FicheFrais f JOIN Visiteur v ON f.idVisiteur = v.id WHERE id = :id ;";
    $req = $connexion->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
    $res = $req->fetchAll();
    return $res;
}
?>