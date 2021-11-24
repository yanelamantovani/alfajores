<?php

require_once './model/ProductModel.php';
require_once './model/ProductTypeModel.php';
require_once './view/ProductView.php';
require_once './controller/AuthHelper.php';

class ProductController {

    private $productTypeModel;
    private $productModel;
    private $authHelper;
    private $view;

    function __construct() {
        $this->productTypeModel = new ProductTypeModel();
        $this->productModel = new ProductModel();
        $this->view = new ProductView();
        $this->authHelper = new AuthHelper();
    }

    function showProducts() {
        $products = $this->productModel->getProducts();
        $this->view->showProducts($products);
    }

    function showProduct($productId) {
        $product = $this->productModel->getProduct($productId);
        $this->view->showProduct($product, $this->authHelper->getLoggedRole());
    }

    function showManageProducts($index) {
        $this->authHelper->checkLoggedIn();
        $products = $this->productModel->getProducts();
        $productTypes = $this->productTypeModel->getProductTypes();
        $this->view->showManageProducts($products, $productTypes, $index);
    }

    function createProduct() {
        $this->authHelper->checkLoggedIn();
        $productId = $_POST['id'] !== '' ? $_POST['id'] : null;
        if (is_null($productId)) {
            $this->productModel->createProduct($_POST['name'], $_POST['description'], $_POST['image'], $_POST['productTypeId']);
        } else {
            $this->productModel->updateProduct($productId, $_POST['name'], $_POST['description'], $_POST['image'], $_POST['productTypeId']);
        }
        $this->view->goToManageProducts();
    }

    function deleteProduct($productId) {
        $this->authHelper->checkLoggedIn();
        $this->productModel->deleteProduct($productId);
        $this->view->goToManageProducts();
    }
}
