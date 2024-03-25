<?php 
namespace App\Controllers;

use App\Models\EmployeeModel;

class LoginController extends Controller { 

    public function login(){

        session_start();
        if($_SESSION != []){
            $this->redirect('menu');
        }
        session_abort();

        $e = false;
        
        if(isset($_POST['name']) && isset($_POST['password'])) {

            $login = $_POST['name'];
            
            $userModel = new EmployeeModel();
            $user = $userModel->getEmployee($login);
        
            if ($user && password_verify($_POST['password'], $user['mdp'])) {
                session_start();

                $_SESSION['matricule'] = $user['matricule'];
                $_SESSION['name'] = $user["nom"];
                $_SESSION['surname'] = $user['prenom'];
                $_SESSION['role'] = $user['idRole'];
                
                $this->redirect('menu');
                exit;
            } else {
                $e = 'Le nom d\'utilisateur ou le mot de passe que vous avez saisi est incorrecte.';
            }
        }

        $this->render('Login/LoginView', ['e'=> $e]);
    }

    public function logout(){
        session_start();
        session_destroy();
        session_abort();
        $this->redirect('login');
    }
}
?>