<?php

    //require_once 'db.php';
    require_once 'controller/HomeController.php';
    require_once 'controller/ProductController.php';
    require_once 'controller/ProductTypeController.php';
    require_once 'controller/AdminController.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; 
    }

    $params = explode('/', $action);

    $homeController = new HomeController();
    $productController = new ProductController();
    $productTypeController = new ProductTypeController();
    $adminController = new AdminController();

    switch ($params[0]) {
        case 'home': 
            $homeController->showHome(); 
            break;
        case 'productos':
            if (empty($params[1])) {
                // /productos Listado de items
                $productController->showProducts(); 
            } else {
                // /productos/{itemId} Detalle de item
                $productController->showProduct($params[1]); 
            }
            break;
        case 'precios': 
            if (empty($params[1])) {
                // /precios Listado de categorias
                $productTypeController->showPrices(); 
            } else {
                // /precios/{categoria} Listado de items por categoria
                $productTypeController->showProductsByProductType($params[1]); 
            }
            break;
        // /admin
        // case 'admin': 
        //     switch ($params[1]) {
        //         case 'home': 
        //             $adminController->showHome(); 
        //             break;
        //         case 'productos':
        //             if (empty($params[1])) {
        //                 // /admin/productos Listado de items
        //                 $adminController->showProducts(); 
        //             } else {
        //                 // /productos/{itemId} Detalle de item
        //                 $adminController->showProduct($params[1]); 
        //             }
        //             break;
        //         case 'precios': 
        //             $adminTypeController->showPrices(); 
        //             break;
        //         default: 
        //             echo('404 Page not found'); 
        //             break;
        //     }
        default: 
            echo('404 Page not found'); 
            break;
    }