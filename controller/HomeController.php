<?php

//require_once './Model/TaskModel.php';
require_once './view/HomeView.php';

class HomeController {

    // private $model;
    private $view;

    function __construct() {
        //$this->model = new TaskModel();
        $this->view = new HomeView();
    }

    function showHome() {
        //$tasks = $this->model->getTasks();
        $this->view->showHome();
    }

}