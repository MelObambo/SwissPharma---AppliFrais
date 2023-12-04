<?php 

session_start();

if(!isset($_SESSION['id'])){
    header('Location: index.php?view=login');
    exit;
}
echo 'ok';
?>