<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiCommentsController.php';

$router = new Router();

$router->addRoute('comments', 'GET', 'ApiCommentsController', 'getComments');
$router->addRoute('comments/:ID', 'GET', 'ApiCommentsController', 'getComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentsController', 'deleteComment');
$router->addRoute('comments', 'POST', 'ApiCommentsController', 'insertComment');
$router->addRoute('comments/:ID', 'PUT', 'ApiCommentsController', 'updateComment');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
