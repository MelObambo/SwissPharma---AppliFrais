<?php 
namespace App\Controllers;

class MenuController extends Controller {

    
    
    public function Menu(){
        session_start();
        $this->render('Menu/MenuView');
    }
}
?>