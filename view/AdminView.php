<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class AdminView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
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