<?php

require_once './model/ProductModel.php';
require_once './view/ProductView.php';

class ProductController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    function showProducts() {
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }

    function showProduct($productId) {
        $product = $this->model->getProduct($productId);
        $this->view->showProduct($product);
    }
}