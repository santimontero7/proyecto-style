<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$nombre=$_POST['txtnombre'];
$precio=$_POST['txtprecio'];
$proveedor=$_POST['txtproveedor'];
$detalles=$_POST['txtdetalles'];
$idproducto=$_POST['txtidproducto'];
$cantidad=$_POST['txtcantidad'];

$datos=array($nombre,$precio,$proveedor,$detalles,$idproducto,$cantidad);

$objeto=new metodos();
if($objeto->actualizarDatos($datos)==1){
    header("location:admin.php");
}else{
    echo "fallo al agregar";
}


?>