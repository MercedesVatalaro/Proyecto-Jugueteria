<?php

require_once './libs/smarty/libs/Smarty.class.php';
require_once './helpers/AuthHelper.php';

class CategoryView
{

    private $smarty;

    function __construct()
    {


        $this->smarty = new Smarty();
    }
    function showCategories($categories)
    {

        $this->smarty->assign('titulo', "Ver categorias");
        $this->smarty->assign("categories", $categories);
        $this->smarty->display('templates/category_list.tpl');
    }

    function showCategory($categorias, $productos, $productosCategoria)
    {
        $this->smarty->assign('titulo', "Productos");
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categoria', $categorias);
        $this->smarty->assign('productosCategoria', $productosCategoria);


        $this->smarty->display('templates/category_description.tpl');
    }

    function showNewCategory()
    {

        $this->smarty->assign('tituloform', "Agrega una categoria");
        $this->smarty->display('templates/add_category.tpl');
    }
    function showCategoryLocation()
    {

        header("Location: " . BASE_URL . "showCategories");
    }
    function showUpdatedCategory($categoria)
    {
        $this->smarty->assign('titulo', "Edita la categoria");

        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/edit_category.tpl');
    }
    function showProductsByCategory($productos)
    {
        $this->smarty->assign('titulo', "Productos de la categoria seleccionada");
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/category_description.tpl');
    }
    function mostrarError($error, $productos){
      
        $this->smarty->assign('error', $error);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/errorDelete.tpl');
    }
}
