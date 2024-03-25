<?php 
namespace App\Controllers;

class MenuController extends Controller {

    public function menu(){
        session_start();
        $this->isConnected();

        $this->render('Menu/MenuView');
    }
}
?>