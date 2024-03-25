<?php
namespace App\Models;

class PackageModel extends Model {

    /**
     * @param $label, $amount
     * 
     * Creates an expense sheet in the database
     */
    public function createPackage($label, $amount){
        $sql = "INSERT INTO FraisForfait(libelle, montant)
                VALUES (:label, :amount);";
        $req = $this->getConnexion()->prepare($sql);
        $req->bindParam(':label', $label);
        $req->bindParam(':amount', $amount);
        $req->execute();
    }

    public function getPackage(){
        $sql ="SELECT * FROM FraisForfait";
        $req = $this->getConnexion()->prepare($sql);
        $req->execute();
    }
}
?>