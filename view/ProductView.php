<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products) {
        $this->smarty->assign('loggedUsername', null);
        $this->smarty->assign('highlighted', "productos");
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/products.tpl');
    }

    function showProduct($product) {
        $this->smarty->assign('loggedUsername', null);
        $this->smarty->assign('highlighted', "productos");
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/product.tpl');
    }

    function showManageProducts($products, $productTypes, $index) {
        $this->smarty->assign('active', 'manageProducts');
        $this->smarty->assign('products', $products);
        $this->smarty->assign('productTypes', $productTypes);
        $this->smarty->assign('index', $index);
        $this->smarty->display('templates/admin/manageProducts.tpl');
    }

    function goToManageProducts() {
        header("Location: ".BASE_URL."admin/manageProducts");
    }
}
