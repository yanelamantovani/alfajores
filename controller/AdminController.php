<?php

//require_once './Model/TaskModel.php';
//require_once './View/TaskView.php';

class AdminController {

    // private $model;
    // private $view;

    function __construct() {
        //$this->model = new TaskModel();
        //$this->view = new TaskView();
    }

    function showHome() {
        //$tasks = $this->model->getTasks();
        //$this->view->showTasks($tasks);
        echo "Esto es el home del admin";
    }

    function showProducts() {
        //$tasks = $this->model->getTasks();
        //$this->view->showTasks($tasks);
        echo "Esto es Productos";
    }

    function showProduct($productId) {
        //$tasks = $this->model->getTasks();
        //$this->view->showTasks($tasks);
        echo "Esto es el Producto " . $productId;
    }

    function showProductsByProductType($productType) {
        //$tasks = $this->model->getTasks();
        //$this->view->showTasks($tasks);
        echo "Esto es la categoría " . $productType;
    }

}