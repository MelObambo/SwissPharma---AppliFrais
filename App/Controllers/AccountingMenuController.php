<?php 
namespace App\Controllers;

class MenuController extends Controllers {

    session_start();


    public function visitorMenu() {
        $this->isConnected();

        $this->render('Menu/VisitorMenuView');
    }

    public function accountantMenu() {
        $this->isConnected();

        $this->render('Menu/AccountingMenuView');
    }
}
?>