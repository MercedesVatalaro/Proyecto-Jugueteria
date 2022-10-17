<?php
require_once './libs/smarty/libs/Smarty.class.php';
require_once './helpers/AuthHelper.php';

class ProductView
{

    private $smarty;

    function __construct()
    {


        $this->smarty = new Smarty();
    }

    function showProducts($products)
    {

        $this->smarty->assign('titulo', "Encontrá tus favoritos acá:");
        $this->smarty->assign("products", $products);
        $this->smarty->assign('tituloform', 'Ingrese un producto');
        $this->smarty->display('templates/product_list.tpl');
    }
    function showHomeLocation()
    {

        header("Location: " . BASE_URL . "home");
    }
    function showLoginLocation()
    {

        header("Location: " . BASE_URL . "login");
    }

    function showProduct($producto)
    {
        $this->smarty->assign('titulo', "Productos");
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('templates/product_description.tpl');
    }

    function showNewProduct()
    {

        $this->smarty->assign('titulo', "Agrega un producto");
        $this->smarty->display('templates/add_product.tpl');
    }
    function showUpdatedProduct($producto, $categorias)
    {
        $this->smarty->assign('titulo', "Edita el producto");
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('templates/edit_product.tpl');
    }
}
