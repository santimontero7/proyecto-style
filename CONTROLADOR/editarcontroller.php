<?php
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/productosDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/productos.php");

$objeto = new ProductosDAO();
$id= $_GET['id'];
$resultado = $objeto-> updateProducto($id);
header("location:../listproductos.php");

?>