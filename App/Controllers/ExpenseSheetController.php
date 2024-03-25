<?php 
namespace App\Controllers;

use App\Models\ExpenseSheetModel;
use App\Models\PackageModel;
use App\Models\OutPackageModel;

class ExpenseSheetController extends Controller {

    
    public function expenseSheet(){
        session_start();
        $this->isConnected();

        $e = "";

        if(
           isset($_POST['period'])
        && isset($_POST['meal']) 
        && isset($_POST['nights']) 
        && isset($_POST['stage']) 
        && isset($_POST['kilometer']) 
        && isset($_POST['nbReceipt'])
        && isset($_POST['totalAmount'])
        ){
            
        } else {
            $e = "Vous n\'avez pas ";
        }
        if(isset($_POST['dateOutPackage']) && isset($_POST['label']) && isset($_POST['quantity'])) {
            $e;
        }
        $this->render('ExpenseSheet/ExpenseSheetView_e', ['e' => $e]);
    }
}
?>