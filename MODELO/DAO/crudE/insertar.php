<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$nombres=$_POST['txtnombres'];
$apellidos=$_POST['txtapellidos'];
$email=$_POST['txtemail'];
$direccion=$_POST['txtdireccion'];
$telefono=$_POST['txttelefono'];

$datos=array($nombres,$apellidos,$email,$direccion,$telefono);

$objeto=new metodos();
if($objeto->insertarDatos($datos)==1){
    header("location:admin.php");
}else{
    echo "fallo al agregar";
}


?>