<?php 
require("Model/m_Login.php");

if(isset($_POST['name']) && isset($_POST['password'])){

    $login = getLogin($_POST['name']);
    if ($login) {
        $id = $login['idUtilisateur'];
        $name = $login["nom"];
        $surname = $login['prenom'];

        if($_POST['password'] == $login['motDePasse']){
            session_start();
            $_SESSION['id'] = $id;
            if(isAccountant($id) != null){
                header('Location: index.php?view=accounting_menu');
            } else {
                header('Location: index.php?view=visit_menu');
            }
            exit;
        }
    }
}

require("View/v_Login.php");
?>