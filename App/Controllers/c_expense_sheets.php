<?php
require('Model/m_expense_sheet.php');

session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php?view=user');
    exit;
}
// $sheets = getExpenseshe

require('View/v_expense_sheets.php')
?>