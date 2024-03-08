<?php

namespace App\Controllers;

class Controller {

    protected $viewPath;

    public function render($view) {
        require($this->viewPath . 'Views/' . $view . '.php');
        return $this;
    }

    // public function linkTo($routeName, $params = null) {
    //     if($params == null){
    //         return '?page='.$routeName;
    //     }else{
    //         return '?page='.$routeName.'&'.$params;
    //     }
    // }

}
?>