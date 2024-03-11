<?php 
namespace App\Controllers;

use App\Model\EmployeeModel;

class LoginController extends Controller {

    public function login(){
        
        if(isset($_POST['name']) && isset($_POST['password'])) {

            $login = $_POST['name'];
            $password = hash('sha256', $_POST['password']);
            
            $userModel = new EmployeeModel();
            $user = $userModel->getEmployee($login);

            var_dump($user);
        
            // if ($user && $password == $user['mdp']) {
            //     session_start();

            //     $_SESSION['id'] = $login['id'];
            //     $_SESSION['name'] = $login["nom"];
            //     $_SESSION['surname'] = $login['prenom'];
            //     $_SESSION['role'] = $login['role'];
                
            //     if($_SESSION['role'] == 'comptable'){
            //         $this->redirect('accountant_menu');
            //     } else {
            //         $this->redirect('visitor_menu');
            //     }
            //     exit;
            // }
        }

        $this->render('Login/LoginView');
    }
}
?>