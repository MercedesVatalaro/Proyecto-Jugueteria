<?php

require_once "Controller/ProductController.php";
require_once "Controller/LoginController.php";
require_once "Controller/CategoryController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('LOGOUT', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logout');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

$productController = new ProductController();
$categoryController = new CategoryController();
$loginController = new LoginController();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'showCategories':
        $categoryController->showHomeCategories();
        break;
    case 'createCategories':
        $categoryController->createCategories($params[1]);
        break;
    case 'deleteCategories':
        $categoryController->deleteCategories($params[1]);
        break;
    case 'updateCategories':
        $categoryController->updateCategories($params[1]);
        break;
    case 'updateCategory':
        $categoryController->updateCategory();
        break;
    case 'showProductsByCategory':
        $id_categoria = $params[1];
        $categoryController->showProductsByCategory($id_categoria);
        break;
    case 'login':
        $loginController->login();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'home':
        $productController->showHome();
        break;
    case 'createProducts':
        $productController->createProducts();
        break;
    case 'deleteProducts':
        $productController->deleteProducts($params[1]);
        break;
    case 'updateProducts':
        $id = $params[1];
        $productController->updateProducts($id);
        break;
    case 'updateProduct':
        $productController->updateProduct();
        break;
    case 'viewProducts':
        $productController->viewProducts($params[1]);
        break;
   

    default:
        echo ('404 Page not found');
        break;
}
