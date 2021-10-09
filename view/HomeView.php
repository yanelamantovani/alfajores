<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class HomeView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome() {
        $this->smarty->assign('highlighted', "home");
        $this->smarty->display('templates/home.tpl');
    }
}