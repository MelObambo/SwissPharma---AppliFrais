<?php
require('config.php');


if(!isset($_REQUEST['view'])){
	$_REQUEST['view'] = 'login';
}	 

$view = $_REQUEST['view'];


switch ($view) {
    case 'login': {
        require("Controller/c_login.php");
        break;
    }
    case 'accounting_menu': {
        include ("Controller/c_accounting_menu.php");
        break;
    }
    case 'visit_menu': {
        include ("Controller/c_visit_menu.php");
        break;
    }
    case 'expense_sheets': {
        require("Controller/c_expense_sheets.php");
        break;
    }
    case 'expense_sheet': {
        include ("Controller/c_expense_sheet.php");
        break;
    }
    case 'validate_expense_sheets': {
        include ("Controller/c_validate_expense_sheets.php");
        break;
    }
    case 'payment': {
        include ("Controller/c_payment.php");
        break;
    }
}
?>