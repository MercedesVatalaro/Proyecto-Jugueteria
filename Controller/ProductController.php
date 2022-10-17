<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";
require_once "./Model/CategoryModel.php";
require_once "./helpers/AuthHelper.php";

class ProductController
{


    private $model;
    private $view;
    private $categoryModel;
    

    function __construct()
    {

        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->categoryModel = new CategoryModel();

        //barrera de seguridad
        //$authHelper = new AuthHelper();
        //$authHelper->checkloggedIn();

    }


    function showHome()
    {
        session_start();

        //$this->authHelper->checkloggedIn();
        $products = $this->model->getProducts();

        $this->view->showProducts($products);
    }

    function createProducts()
    {

        $nombreProducto = $_POST['newnombre'];
        $descripcionProducto = $_POST['newdescripcion'];
        $precioProducto = $_POST['newprecio'];
        $categoriaProducto = $_POST['newid_categoria'];


        $this->model->insertProduct($nombreProducto, $descripcionProducto, $precioProducto, $categoriaProducto);

        header("Location: " . BASE_URL);
    }

    function deleteProducts($id)
    {
        $this->model->deleteProductsFromDB($id);
        $this->view->showHomeLocation();
    }

    function updateProducts($id)
    {

        $producto = $this->model->productsById($id);
        $categorias = $this->categoryModel->getCategories();
        $this->view->showUpdatedProduct($producto, $categorias);
    }
    function updateProduct()
    {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $id_categoria = $_POST['id_categoria'];

        $this->model->updateProductsFromDB($id, $nombre, $descripcion, $precio, $id_categoria);


        header("Location:" . BASE_URL . "home");
    }


    function viewProducts($id)
    {
        $producto = $this->model->getProduct($id);
        $this->view->showProduct($producto);
    }
}
