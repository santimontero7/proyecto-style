<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$nombreservicio=$_POST['txtnombreservicio'];
$precioservicio=$_POST['txtprecioservicio'];

$detallesservicio=$_POST['txtdetallesservicio'];

$datos=array($nombreservicio,$precioservicio,$detallesservicio);

$objeto=new metodos();
if($objeto->insertarDatos($datos)==1){
    header("location:adminSe.php");
}else{
    echo "fallo al agregar";
}


?>