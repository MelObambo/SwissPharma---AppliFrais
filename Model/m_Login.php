<?php
require('connexion.php');

/**
 * @param string $name
 * 
 * @return Object $res
 */
function getLogin($name) {
    $connexion = getConnexion();
    $sql = "SELECT * FROM Utilisateur WHERE login = :login ;";
    $req = $connexion->prepare($sql);
    $req->bindParam(':login', $name, PDO::PARAM_STR);
    $req->execute();
    $res = $req->fetch();
    return $res;
}

/**
 * @param int $id
 * 
 * @return Object $res
 * 
 * Verify if the user is an accountant
 */
function isAccountant($id) {
    $connexion = getConnexion();
    $sql = "SELECT * FROM Comptable WHERE id = :id ;";
    $req = $connexion->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
    $res = $req->fetch();
    return $res;
}
?>