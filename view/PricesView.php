<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class PricesView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showPrices($productTypes) {
        $this->smarty->assign('highlighted', "precios");
        $this->smarty->assign('productTypes', $productTypes);
        $this->smarty->display('templates/prices.tpl');
    }

    function showProductType($productType, $products) {
        $this->smarty->assign('highlighted', "precios");
        $this->smarty->assign('productType', $productType);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/productType.tpl');
    }
}