<?php

    require_once 'controller/HomeController.php';
    require_once 'controller/ProductController.php';
    require_once 'controller/ProductTypeController.php';
    require_once 'controller/UserController.php';
    
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
    $userController = new UserController();
    
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
        case 'login':
            if (empty($params[1])) {
                // /login Formularios de login y registro
                $userController->showLogin(); 
            } 
            break;
        case 'logout': 
            $userController->logout(); 
            break;
        case 'verify': 
            $userController->verifyLogin(); 
            break;
        case 'signin': 
            $userController->signIn(); 
            break;
        // /admin
        case 'admin': 
            switch ($params[1]) {  
                case 'manageProducts':
                    $productController->showManageProducts(isset($params[2]) ? intval($params[2]) : null); 
                    break;
                case 'manageProductTypes':
                    $productTypeController->showManageProductTypes(isset($params[2]) ? intval($params[2]) : null); 
                    break;
                case 'manageUsers':
                    $userController->showManageUsers(isset($params[2]) ? intval($params[2]) : null); 
                    break;
                case 'createProduct':
                    $productController->createProduct(); 
                    break;
                case 'createProductType':
                    $productTypeController->createProductType(); 
                    break;        
                case 'updateUser':
                    $userController->updateUser(); 
                    break;        
                case 'deleteProduct':
                    $productController->deleteProduct($params[2]); 
                    break;
                case 'deleteProductType':
                    $productTypeController->deleteProductType($params[2]); 
                    break;        
                case 'deleteUser':
                    $userController->deleteUser($params[2]); 
                    break;            
                default: 
                    echo('404 Page not found'); 
                    break;
            }
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }




    