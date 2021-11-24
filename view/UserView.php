<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
require_once './controller/AuthHelper.php';

class UserView {

    private $smarty;
    private $authHelper;
    
    function __construct() {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }

    function showLogin($message) {
        $this->smarty->assign('loggedRole', $this->authHelper->getLoggedRole());
        $this->smarty->assign('highlighted', "login");
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl');
    }

    function showManageUsers($users, $index) {
        $this->smarty->assign('active', 'manageUsers');
        $this->smarty->assign('users', $users);
        $this->smarty->assign('index', $index);
        $this->smarty->display('templates/admin/manageUsers.tpl');
    }

    function goToManageUsers() {
        header("Location: ".BASE_URL."admin/manageUsers");
    }

}