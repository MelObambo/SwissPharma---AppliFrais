<?php

use App\Controllers;
use App\Controllers\LoginController;
use App\Controllers\AccountingMenuController;
use App\Controllers\MenuController;
use App\Controllers\ExpenseSheetController;

require('vendor/autoload.php');
require('config.php');

if(!isset($_REQUEST['view'])){
	$_REQUEST['view'] = 'login';
}	 

$view = $_REQUEST['view'];


switch ($view) {
    case 'login': {
        $controller = new LoginController();
        $controller->login();
        break;
    }
    case 'logout': {
        $controller = new LoginController();
        $controller->logout();
        break;
    }
    case 'menu': {
        $controller = new MenuController();
        $controller->menu();
        break;
    }
    case 'expense_sheet': {
        $controller = new ExpenseSheetController();
        $controller->expenseSheet();
        break;
    }
    // case 'expense_sheets': {
    //     require("Controller/c_expense_sheets.php");
    //     break;
    // }
    // case 'expense_sheet': {
    //     include ("Controller/c_expense_sheet.php");
    //     break;
    // }
    // case 'validate_expense_sheets': {
    //     include ("Controller/c_validate_expense_sheets.php");
    //     break;
    // }
    // case 'payment': {
    //     include ("Controller/c_payment.php");
    //     break;
    // }
}
?>