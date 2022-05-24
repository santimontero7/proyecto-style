<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$nombreservicio=$_POST['txtnombreservicio'];
$precioservicio=$_POST['txtprecioservicio'];

$detallesservicio=$_POST['txtdetalles'];
$id=$_POST['txtidservicio'];

$datos=array($nombreservicio,$precioservicio,$detallesservicio,$id);

$objeto=new metodos();
if($objeto->actualizarDatos($datos)==1){
    header("location:admin.php");
}else{
    echo "fallo al agregar";
}


?>