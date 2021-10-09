<?php

require_once './model/ProductTypeModel.php';
require_once './model/ProductModel.php';
require_once './view/PricesView.php';

class ProductTypeController {

    private $productTypeModel;
    private $productModel;
    private $view;

    function __construct() {
        $this->productTypeModel = new ProductTypeModel();
        $this->productModel = new ProductModel();
        $this->view = new PricesView();
    }

    function showPrices() {
        $productTypes = $this->productTypeModel->getProductTypes();
        $this->view->showPrices($productTypes);
    }

    function showProductsByProductType($productTypeName) {
        $productType = $this->productTypeModel->getProductTypeByName($productTypeName);
        $products = $this->productModel->getProductsByProductType($productType->id);
        $this->view->showProductType($productType, $products);
    }

}