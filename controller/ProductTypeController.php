<?php

require_once './model/ProductTypeModel.php';
require_once './model/ProductModel.php';
require_once './view/PricesView.php';
require_once './controller/AuthHelper.php';

class ProductTypeController {

    private $productTypeModel;
    private $productModel;
    private $authHelper;
    private $view;

    function __construct() {
        $this->productTypeModel = new ProductTypeModel();
        $this->productModel = new ProductModel();
        $this->view = new PricesView();
        $this->authHelper = new AuthHelper();
    }

    function showPrices() {
        $productTypes = $this->productTypeModel->getProductTypes();
        $this->view->showPrices($productTypes);
    }

    function showProductsByProductType($productTypeId) {
        $productType = $this->productTypeModel->getProductType($productTypeId);
        $products = $this->productModel->getProductsByProductType($productTypeId);
        $this->view->showProductType($productType, $products);
    }

    function showManageProductTypes($index) {
        $this->authHelper->checkLoggedIn();
        $productTypes = $this->productTypeModel->getProductTypes();
        $this->view->showManageProductTypes($productTypes, $index);
    }

    function createProductType() {
        $this->authHelper->checkLoggedIn();
        $productTypeId = $_POST['id'] !== '' ? $_POST['id'] : null;
        if (!isset($_POST['name']) 
            || !isset($_POST['description']) 
            || !isset($_POST['price1']) 
            || !isset($_POST['price6'])
            || !isset($_POST['price12'])) {
            $this->view->goToManageProductTypes();
            die;
        }
        if (is_null($productTypeId)) {
            $this->productTypeModel->createProductType($_POST['name'], $_POST['description'], $_POST['price1'], $_POST['price6'], $_POST['price12']);
        } else {
            $this->productTypeModel->updateProductType($productTypeId, $_POST['name'], $_POST['description'], $_POST['price1'], $_POST['price6'], $_POST['price12']);
        }
        $this->view->goToManageProductTypes();
    }

    function deleteProductType($productTypeId) {
        $this->authHelper->checkLoggedIn();
        $this->productTypeModel->deleteProductType($productTypeId);
        $this->view->goToManageProductTypes();
    }
}
