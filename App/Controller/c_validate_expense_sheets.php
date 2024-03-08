<?php
require('Model/m_validate_expense_sheets.php');

session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php?view=user');
    exit;
}

require('View/v_validate_expense_sheets.php');
?>