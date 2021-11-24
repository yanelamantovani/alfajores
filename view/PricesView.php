<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
require_once './controller/AuthHelper.php';

class PricesView {

    private $smarty;
    private $authHelper;

    function __construct() {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }

    function showPrices($productTypes) {
        $this->smarty->assign('loggedRole', $this->authHelper->getLoggedRole());
        $this->smarty->assign('highlighted', "precios");
        $this->smarty->assign('productTypes', $productTypes);
        $this->smarty->display('templates/prices.tpl');
    }

    function showProductType($productType, $products) {
        $this->smarty->assign('loggedRole', $this->authHelper->getLoggedRole());
        $this->smarty->assign('highlighted', "precios");
        $this->smarty->assign('productType', $productType);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/productType.tpl');
    }

    function showManageProductTypes($productTypes, $index) {
        $this->smarty->assign('active', 'manageProductTypes');
        $this->smarty->assign('productTypes', $productTypes);
        $this->smarty->assign('index', $index);
        $this->smarty->display('templates/admin/manageProductTypes.tpl');
    }

    function goToManageProductTypes() {
        header("Location: ".BASE_URL."admin/manageProductTypes");
    }
}
