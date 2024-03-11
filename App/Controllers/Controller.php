<?php

namespace App\Controllers;

class Controller {

    public function isConnected(){
        if(!isset($_SESSION['id'])){
            $this->redirect('login');
            exit;
        }
    }
    
    public function render($path) {
        require('View/' . $path . '.php');
        return $this;
    }
    public function redirect($path) {
        header('Location: index.php?view=' . $path);
    }
}
?>