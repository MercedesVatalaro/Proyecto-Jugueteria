<?php

class CategoryModel
{

    private $db;
    function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_jugueteria;charset=utf8', 'root', '');
    }


    function getCategories()
    {

        $sentencia = $this->db->prepare("SELECT * FROM categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function getCategory($id_categoria)
    {

        $sentencia = $this->db->prepare("SELECT productos.*, categorias.categoria as categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id_categoria");

        $sentencia->execute([$id_categoria]);
        $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }

    function insertCategory($categoriaNueva)
    {
        $query = $this->db->prepare('INSERT INTO categorias(categoria) VALUES (?)');
        $query->execute([$categoriaNueva]);

        return $this->db->lastInsertId();
    }

    function deleteCategoriesFromDB($id_categoria)
    {   
        $sentencia = $this->db->prepare("DELETE FROM categorias WHERE id_categoria=?");
        $sentencia->execute([$id_categoria]);
    }
    function updateCategoriesFromDB($id_categoria, $categoria)
    {
        $sentencia = $this->db->prepare("UPDATE categorias SET categoria=? WHERE categorias.id_categoria=?");

        $sentencia->execute(array($categoria, $id_categoria));
    }

    function getCategoryById($id_categoria)
    {

        $sentencia = $this->db->prepare("SELECT * FROM categorias WHERE categoria=?");
        $sentencia->execute([$id_categoria]);
        $categorias = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categorias;
    }
    function getProductsByCategory($id_categoria)
    {
        $query = $this->db->prepare('SELECT * FROM productos WHERE id_categoria= ?');
        $query->execute(array($id_categoria));
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}
