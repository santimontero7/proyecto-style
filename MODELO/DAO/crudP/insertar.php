<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$idproducto=$_POST['txtidproducto'];
$nombre=$_POST['txtnombre'];
$precio=$_POST['txtprecio'];
$proveedor=$_POST['txtproveedor'];
$detalles=$_POST['txtdetalles'];
$cantidad=$_POST['txtcantidad'];

$datos=array($idproducto,$nombre,$precio,$proveedor,$detalles,$cantidad);

$objeto=new metodos();
if($objeto->insertarDatos($datos)==1){
    header("location:admin.php");
}else{
    echo "fallo al agregar";
}


?>