<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
require_once './controller/AuthHelper.php';

class HomeView {

    private $smarty;
    private $authHelper;

    function __construct() {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }

    function showHome() {
        $this->smarty->assign('loggedRole', $this->authHelper->getLoggedRole());
        $this->smarty->assign('highlighted', "home");
        $this->smarty->display('templates/home.tpl');
    }
}