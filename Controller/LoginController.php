<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once './helpers/AuthHelper.php';

class LoginController{
    private $model;   
    private $view;
   
   function __construct(){
   
       $this->model = new UserModel();
       $this->view = new LoginView();
      
   }
function logout(){

    session_start();
    session_destroy();
    $this->view->showLogin("Has cerrado sesion");


}
function login(){
    
    $this->view->showLogin();
}

function verifyLogin(){

   

        $email = $_POST['email'];
        $password = $_POST['password'];

        
        // si el usuario existe y las contraseñas coinciden 

        $user = $this->model->getUser($email);

        if  ($user && password_verify($password, $user->password)){
           // inicio una session para este usuario
           
           session_start();
           $_SESSION['USER_ID'] = $user->id;
           $_SESSION['USER_EMAIL'] = $user->email;
           $_SESSION['IS_LOGGED'] = true;
          

            
           header("Location: ".BASE_URL."home"); 
           header("Location: " . BASE_URL . "showCategories");
        }else{

            $this->view->showLogin("El usuario o la contraseña son incorrectos");
        }

    }
}

