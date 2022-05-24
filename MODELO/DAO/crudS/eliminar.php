<?php

$id=$_GET['IdCitas'];    

require_once "conexion.php";
require_once "metodosCrud.php";

$objeto=new metodos();
if($objeto->eliminarDatos($id)==1){
    header("location:adminC.php");
}else{
    echo "fallo al eliminar";
}

?>