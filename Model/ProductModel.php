
<?php
class ProductModel
{

    private $db;
    function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_jugueteria;charset=utf8', 'root', '');
    }

    function getProducts()
    {

        $sentencia = $this->db->prepare("SELECT * FROM productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function productsById($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM productos WHERE id=?");
        $sentencia->execute([$id]);
        $productos = $sentencia->fetch(PDO::FETCH_OBJ);
        return $productos;
    }
    function insertProduct($nombreProducto, $descripcionProducto, $precioProducto, $categoriaProducto)
    {

        $query = $this->db->prepare('INSERT INTO productos (nombre, descripcion, precio, id_categoria) 
        VALUES (?, ?, ?,?)');
        $query->execute([$nombreProducto, $descripcionProducto, $precioProducto, $categoriaProducto]);

        return $this->db->lastInsertId();
    }

    function deleteProductsFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM productos WHERE id=?");
        $sentencia->execute([$id]);
    }

    function updateProductsFromDB($id, $nombre, $descripcion, $precio, $id_categoria)
    {
        $sentencia = $this->db->prepare("UPDATE productos SET nombre=?, descripcion=?, precio=?, id_categoria=?  WHERE id=?");
        $sentencia->execute(array($nombre, $descripcion, $precio, $id_categoria, $id));
    }

    function getProduct($id)
    {

        $sentencia = $this->db->prepare("SELECT a.*, b.* FROM productos a INNER JOIN categorias b ON a.id_categoria= b.id_categoria WHERE a.id= ?");
        $sentencia->execute([$id]);
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    }
}
