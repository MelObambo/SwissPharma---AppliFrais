<?php 
require("Model/m_user.php");

if(isset($_POST['name']) && isset($_POST['password'])){
    $user = $_POST['name'];

    $login = getLogin($user);
<<<<<<< HEAD
    if($login != null) {
        if($_POST['password'] == $login['motDePasse']){
            session_start();
            $_SESSION['id'] = $login['id'];
=======
    var_dump($login);
    if ($login) {
        if($_POST['password'] == $login['motDePasse']){
            session_start();
            $_SESSION['id'] = $login['idUtilisateur'];
            $_SESSION['name'] = $login["nom"];
            $_SESSION['surname'] = $login['prenom'];
            $_SESSION['role'] = $login['role'];

            if($_SESSION['role'] == 'comptable'){
                header('Location: index.php?view=accounting_menu');
            } else {
                header('Location: index.php?view=visit_menu');
            }
            exit;
        }
    }
}

require("View/v_login.php");
?>