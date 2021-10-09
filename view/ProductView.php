<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products) {
        $this->smarty->assign('highlighted', "productos");
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/products.tpl');
    }

    function showProduct($product) {
        $this->smarty->assign('highlighted', "productos");
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/product.tpl');
    }
}