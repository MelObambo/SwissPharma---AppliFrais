<?php 
require('Model/m_accounting_menu.php');

session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php?view=login');
    exit;
}

require('View/v_accounting_menu.php');
?>