<?php
namespace App\Models;

class ExpenseSheetModel extends Model {

    /**
     * @param $monthYear, $nbReceipt, $totalAmount, $modifDate
     * 
     * Creates an expense sheet in the database
     */
    public function createExpenseSheet($monthYear, $nbReceipt, $totalAmount, $modifDate){
        $sql = "INSERT INTO FicheFrais(moisAnnee, matricule, nbJustificatif, montantValide, dateModif)
                VALUES (:monthYear, :registration, :nbReceipt, :totalAmount, :modifDate);";
        $req = $this->getConnexion()->prepare($sql);
        $req->bindParam(':monthYear', $monthYear);
        $req->bindParam(':registration', $_SESSION['matricule']);
        $req->bindParam(':nbReceipt', $nbReceipt);
        $req->bindParam(':totalAmount', $totalAmount);
        $req->bindParam(':modifDate', date("Y-m-d"));
        $req->execute();
    }

    public function getExpenseSheet(){}
}
?>