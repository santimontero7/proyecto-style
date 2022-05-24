<?php
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/productoDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/producto.php");
$objeto = new ProductosDAO();
$id= $_GET['id'];
$resultado = $objeto-> deleteProducto($id);
header("location:../listproductos.php");
?>