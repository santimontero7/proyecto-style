<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$nombres=$_POST['txtnombre'];
$apellidos=$_POST['txtapellidos'];
$email=$_POST['txtemail'];
$telefono=$_POST['txttelefono'];
$direccion=$_POST['txtdireccion'];
$id=$_POST['id'];

$datos=array($nombres,$apellidos,$email,$telefono,$direccion,$id);

$objeto=new metodos();
if($objeto->actualizarDatos($datos)==1){
    header("location:admin.php");
}else{
    echo "fallo al agregar";
}


?>