<?php

require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/productosDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/productos.php");

$IdProducto = $_POST['IdProductos'];
$NombreProducto = $_POST['NombreProductos'];
$DetallesProducto = $_POST['DetallesProductos'];
$CantidadProducto= $_POST['CantidadProductos'];
$PrecioProducto = $_POST['PrecioProductos'];
$FotoProducto= $_POST['FotoProductos'];
$rut  = '../Images/'.$fotoproducto;
echo $fotoproducto;


$objetoProducto = new Productos;
$IdProducto->setIdProducto($IdProducto);
$objetoProducto->setNombreproducto($NombreProducto);
$objetoProducto->setDetallesProducto($DetallesProducto);
$objetoProducto->setcantidadproducto($CantidadProducto);
$objetoProducto->setPrecioProducto($PrecioProducto);
$objetoProducto->setFotoProducto($rut);

$objeto =new ProductosDAO;
$objeto->insertProductos($objetoProducto);
header("location:../listproductos.php");



?>