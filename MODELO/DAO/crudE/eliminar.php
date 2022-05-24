<?php

$id=$_GET['id'];    

require_once "conexion.php";
require_once "metodosCrud.php";

$objeto=new metodos();
if($objeto->eliminarDatos($id)==1){
    header("location:admin.php");
}else{
    echo "fallo al eliminar";
}

?>