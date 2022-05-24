<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$IdCitas=$_POST['txtidcitas'];
$NombresUsuario=$_POST['txtnombresusuarios'];
$ApellidosUsuario=$_POST['txtapellidosusuario'];
$EmailUsuario=$_POST['txtemailusuario'];
$FechaCita=$_POST['tctfechacita'];
$HoraCita=$_POST['txthoracita'];
$Direccion=$_POST['txtdireccion'];


$datos=array($IdCitas,$NombresUsuario,$ApellidosUsuario,$EmailUsuario,$FechaCita,$HoraCita,$Direccion);

$objeto=new metodos();
if($objeto->insertarDatos($datos)==1){
    header("location:adminC.php");
}else{
    echo "fallo al agregar";
}


?>