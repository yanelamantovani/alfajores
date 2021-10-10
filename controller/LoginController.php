<?php

require_once './model/UserModel.php';
require_once './view/LoginView.php';

class LoginController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function login() {
        $this->view->showLogin();
    }

    function logout() {
        session_start();
        session_destroy();
        $this->view->showLogin("Sesión finalizada");
    }

    function verifyLogin() {
        if (!empty($_POST['email']) && !empty($_POST['password'])){ 
            $email = $_POST['email']; 
            $password = $_POST['password'];
            $user = $this->model->getUser($email);
            if ($user && $password == $user->password){
                session_start();
                $_SESSION["email"] = $email;
                $this->view->goToManageProducts();
            } else {
                $this->view->showLogin("Acceso denegado");
            } 
        }
    }
}