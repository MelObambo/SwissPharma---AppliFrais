<?php
require('connexion.php');

/**
 * @param string $name
 * 
 * @return Object $res
 */
function getLogin($login) {
    $connexion = getConnexion();
    $sql = "SELECT * FROM utilisateur WHERE login = :login ;";
    $req = $connexion->prepare($sql);
    $req->bindParam(':login', $login, PDO::PARAM_STR);
    $req->execute();
    $res = $req->fetch($connexion::FETCH_ASSOC);
    return $res;
}
?>