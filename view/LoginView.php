<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin() {
        $this->smarty->assign('loggedUsername', null);
        $this->smarty->assign('highlighted', "login");
        $this->smarty->display('templates/login.tpl');
    }

    function goToManageProducts() {
        header("Location: ".BASE_URL."admin/manageProducts");
    }

}