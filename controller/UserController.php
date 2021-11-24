<?php

require_once './model/UserModel.php';
require_once './controller/AuthHelper.php';
require_once './view/UserView.php';

class UserController {
    private $model;
    private $authHelper;
    private $view;
    private $homeView;

    function __construct() {
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
        $this->view = new UserView();
        $this->homeView = new HomeView();
    }

    function showLogin() {
        $this->view->showLogin("");
    }

    function signIn() {
        //Crea la cuenta cuando viene en el POST
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            //Guarda el nuevo usuario en la base de datos
            $this->model->createUser($email, $password, 'USER');
            $this->view->showLogin("Usuario creado");
            //$this->doVerifyLogin($email, $_POST['password']);
        } else {
            $this->view->showLogin("email y password no pueden estar vacios");
        }
    }

    function verifyLogin() {
        if (!empty($_POST['email']) && !empty($_POST['password'])){ 
            $email = $_POST['email']; 
            $password = $_POST['password'];
            $this->doVerifyLogin($email, $password);
        }
    }

    function logout() {
        $this->authHelper->logout();
        $this->view->showLogin("Sesión finalizada");
    }
    
    function doVerifyLogin($email, $password) {
        $user = $this->model->getUser($email);
        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["role"] = $user->role;
            $_SESSION["user_id"] = $user->id;
            if ($user->role == 'ADMIN') {
                $this->view->goToManageUsers();
            } else {
                $this->view->showLogin("User ID".$_SESSION["user_id"]);
                //header("Location: ".BASE_URL."home");
            }
        } else {
            $this->view->showLogin("Acceso denegado");
        } 
    }

    function showManageUsers($index) {
        $this->authHelper->checkLoggedIn();
        $users = $this->model->getUsers();
        $this->view->showManageUsers($users, $index);
    }

    function updateUser() {
        $this->authHelper->checkLoggedIn();
        $this->model->updateUser($_POST['id'], $_POST['email'], $_POST['role']);
        $this->view->goToManageUsers();
    }

    function deleteUser($userId) {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteUser($userId);
        $this->view->goToManageUsers();
    }
}