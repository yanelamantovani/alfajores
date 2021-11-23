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

    function showLogin() {
        $this->view->showLogin();
    }

    function login() {
        $this->view->showLogin();
    }

    function signIn() {
        //Crea la cuenta cuando viene en el POST
        if (!empty($_POST['email']) && !empty($_POST['password'])){
        $userEmail = $_POST['email'];
        $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
        //Guarda el nuevo usuario en la base de datos
        $db = new PDO('mysql:host=localhost:3306;'.'dbname=ejemploHashing;charset=utf8','root','root');
        $query = $db->prepare('INSERT INTO users (email, password) VALUES (? , ?)');
        $query->execute([$userEmail,$userPassword]);
        }
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
            if ($user && password_verify($password, $user->password)){
                session_start();
                $_SESSION["email"] = $email;
                $this->view->goToManageProducts();
            } else {
                $this->view->showLogin("Acceso denegado");
            } 
        }
    }
}