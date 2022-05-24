<?php

require_once "conexion.php";
require_once "metodosCrud.php";

$NombresUsuario=$_POST['NombresUsuario'];
$ApellidosUsuario=$_POST['ApellidosUsuario'];
$EmailUsuario=$_POST['EmailUsuario'];
$FechaCita=$_POST['FechaCita'];
$HoraCita=$_POST['HoraCita'];
$Direccion=$_POST['Direccion'];

$datos=array($NombresUsuario,$ApellidosUsuario,$EmailUsuario,$FechaCita,$HoraCita,$Direccion);

$objeto=new metodos();
if($objeto->insertarDatos($datos)==1){
    header("location:../../../VISTA/indexx.html");
}else{
    echo "fallo al agregar";
}


?>