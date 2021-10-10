<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error = "") {
        $this->smarty->assign('title', 'Login');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('active', null);
        $this->smarty->display('templates/admin/login.tpl');
    }

    function goToManageProducts() {
        header("Location: ".BASE_URL."admin/manageProducts");
    }

}