<?php 
namespace App\Controllers;

use App\Models\EmployeeModel;

class LoginController extends Controller {

    public function login(){
        
        if(isset($_POST['name']) && isset($_POST['password'])) {

            $login = $_POST['name'];
            $password = $_POST['password'];
            
            $userModel = new EmployeeModel();
            $user = $userModel->getEmployee($login);
        
            if ($user && $password == $user['mdp']) {
                session_start();

                $_SESSION['id'] = $login['id'];
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

        $this->render('Login/LoginView');
    }
}

require("View/v_login.php");
?>