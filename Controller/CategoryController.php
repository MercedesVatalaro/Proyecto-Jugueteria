<?php
require_once "./Model/CategoryModel.php";
require_once "./View/CategoryView.php";
require_once "./Model/ProductModel.php";
require_once "./helpers/AuthHelper.php";

class CategoryController
{


    private $model;
    private $view;

    function __construct()
    {

        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }

    function showHomeCategories()
    {
        session_start();
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }


    function createCategories()
    {
        $categoriaNueva = $_POST['newcategoria'];
        $this->model->insertCategory($categoriaNueva);
        $this->view->showCategoryLocation();
    }

    function deleteCategories($id_categoria)
    {
        $productos = $this->model->getProductsByCategory($id_categoria);
        if (count($productos)>0){
            $this->view->mostrarError("Elimine primero los siguientes productos de la categoria", $productos);
        } else{
            $this->model->deleteCategoriesFromDB($id_categoria);
            $this->view->showCategoryLocation();
        }
    }

    function updateCategories($id_categoria)
    { 
        $categoria = $this->model->getCategoryById($id_categoria);
        $this->view->showUpdatedCategory($categoria);
    }

    function updateCategory()
    {

        $id_categoria = $_POST['id_categoria'];
        $categoria = $_POST['categoria'];

        $this->model->updateCategoriesFromDB($id_categoria, $categoria);

        $this->view->showCategoryLocation();
    }
    function showProductsByCategory($id_categoria)
    {

        $productos = $this->model->getProductsByCategory($id_categoria);

        $this->view->showProductsByCategory($productos);
    }
}
