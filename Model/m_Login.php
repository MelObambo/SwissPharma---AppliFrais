<?php
require('connexion.php');

/**
 * @param $name
 * @param $pwd
 * 
 * @return $res
 * 
 * Search the user with the login and the password specified.
 */
function getLogin($name) {
    //$login = filter_var($name, FILTER_SANITIZE_STRING);
    $connexion = getConnexion();
    $sql = "SELECT * FROM utilisateur WHERE login = :login ;";
    $req = $connexion->prepare($sql);
    $req->bindParam(':login', $name, PDO::PARAM_STR);
    $req->execute();
    $res = $req->fetch();
    return $res;
}
?>