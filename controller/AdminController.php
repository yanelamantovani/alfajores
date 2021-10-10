<?php

require_once './model/ProductTypeModel.php';
require_once './model/ProductModel.php';
require_once './controller/AuthHelper.php';
require_once './view/AdminView.php';

class AdminController {

    private $productTypeModel;
    private $productModel;
    private $authHelper;
    private $view;

    function __construct() {
        $this->productTypeModel = new ProductTypeModel();
        $this->productModel = new ProductModel();
        $this->authHelper = new AuthHelper();
        $this->view = new AdminView();
    }

    function showManageProducts($index) {
        $this->authHelper->checkLoggedIn();
        $products = $this->productModel->getProducts();
        $productTypes = $this->productTypeModel->getProductTypes();
        $this->view->showManageProducts($products, $productTypes, $index);
    }

    function showManageProductTypes($index) {
        $this->authHelper->checkLoggedIn();
        $productTypes = $this->productTypeModel->getProductTypes();
        $this->view->showManageProductTypes($productTypes, $index);
    }

    function createProduct($productId) {
        $this->authHelper->checkLoggedIn();
        if (is_null($productId)) {
            $this->productModel->createProduct($_POST['name'], $_POST['description'], $_POST['image'], $_POST['productTypeId']);
        } else {
            $this->productModel->updateProduct($productId, $_POST['name'], $_POST['description'], $_POST['image'], $_POST['productTypeId']);
        }
        $this->view->goToManageProducts();
    }

    function createProductType($productTypeId) {
        $this->authHelper->checkLoggedIn();
        if (is_null($productTypeId)) {
            $this->productTypeModel->createProductType($_POST['name'], $_POST['description'], $_POST['price1'], $_POST['price6'], $_POST['price12']);
        } else {
            $this->productTypeModel->updateProductType($productTypeId, $_POST['name'], $_POST['description'], $_POST['price1'], $_POST['price6'], $_POST['price12']);
        }
        $this->view->goToManageProductTypes();
    }

    function deleteProduct($productId) {
        $this->authHelper->checkLoggedIn();
        $this->productModel->deleteProduct($productId);
        $this->view->goToManageProducts();
    }

    function deleteProductType($productTypeId) {
        $this->authHelper->checkLoggedIn();
        $this->productTypeModel->deleteProductType($productTypeId);
        $this->view->goToManageProductTypes();
    }
}