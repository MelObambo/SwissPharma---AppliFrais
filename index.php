<?php
require('config.php');


if(!isset($_REQUEST['view'])){
	$_REQUEST['view'] = 'login';
}	 

$view = $_REQUEST['view'];


switch ($view) {
    case 'login': {
        require("Controller/c_Login.php");
        break;
    }
    case 'accounting_menu': {
        include ("Controller/c_Accounting_menu.php");
        break;
    }
    // case 'menu_visiteur': {
    //     include ("Controller/c_Visit_menu.php");
    //     break;
    // }
}
?>