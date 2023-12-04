<?php
require('Model/m_expense_sheets.php');

session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php?view=login');
    exit;
}

require('View/v_expense_sheets.php')
?>