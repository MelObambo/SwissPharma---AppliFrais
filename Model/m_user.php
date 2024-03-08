<?php
require('connexion.php');

// namespace user

// class user {

//     private $matricule;
//     private $nom;
//     private $prenom;
//     private $adresse
//     private $cp
//     private $ville
//     private $tel
//     private $mel
//     private $dateNaissance
//     private $dateEmbauche
//     private $role;
//     private $login;
//     private $mdp;

//     function __construct($i, $n, $p, $a, $c, $v, $t, $me, $dn, $de, $r, $l, $md){
//         $this->id = $i;
//         $this->nom = $n;
//         $this->prenom = $p;
//         $this->adresse = $a;
//         $this->cp = $c;
//         $this->ville = $v;
//         $this->tel = $t;
//         $this->mel = $me;
//         $this->dateNaissance = $dn;
//         $this->dateEmbauche = $de;
//         $this->role = $r;
//         $this->login = $l;
//         $this->mdp = $md;
//     }

//     function getNom(){
//         return $this->nom;
//     }
//     function getPrenom(){
//         return $this->prenom;
//     }
// }
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