<?php
namespace App\Models;

class OutPackageModel extends Model {

    /**
     * @param $date, $amount, $label
     * 
     * Creates an out expense sheet in the database
     */
    public function createOutPackage($date, $amount, $label){
        $sql = "INSERT INTO FraisForfait(dateHF, montant, libelle)
                VALUES (:date, :amount, :label);";
        $req = $this->getConnexion()->prepare($sql);
        $req->bindParam(':date', $date);
        $req->bindParam(':amount', $amount);
        $req->bindParam(':label', $label);
        $req->execute();
    }

    public function getOutPackage(){
        $sql ="SELECT * FROM LigneFraisHorsForfait";
        $req = $this->getConnexion()->prepare($sql);
        $req->execute();
    }
}
?>