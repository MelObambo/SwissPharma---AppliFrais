<?php 
require('Model/m_Visit_menu.php');

session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php?view=login');
    exit;
}

require('View/v_visit_menu.php');
?>