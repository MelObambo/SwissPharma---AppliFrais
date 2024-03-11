<?php 
namespace App\Controllers;

use App\Models\EmployeeModel;

class LoginController extends Controller { 

    public function login(){

        $e = false;
        
        if(isset($_POST['name']) && isset($_POST['password'])) {

            $login = $_POST['name'];
            
            $userModel = new EmployeeModel();
            $user = $userModel->getEmployee($login);
        
            if ($user && password_verify($_POST['password'], $user['mdp'])) {
                session_start();

                $_SESSION['matricule'] = $login['matricule'];
                $_SESSION['name'] = $login["nom"];
                $_SESSION['surname'] = $login['prenom'];
                $_SESSION['role'] = $login['idRole'];
                var_dump($_SESSION['matricule']);
                
                // $this->redirect('menu');
                exit;
            } else {
                $e = 'Le nom d\'utilisateur ou le mot de passe que vous avez saisi est incorrecte.';
            }
        }

        $this->render('Login/LoginView', ['e'=>$e]);
    }

    public function logout(){
        session_start();
        session_destroy();
        session_abort();
        $this->redirect('login');
    }
}
?>