<?php

$id=$_GET['idservicios'];    

require_once "conexion.php";
require_once "metodosCrud.php";

$objeto=new metodos();
if($objeto->eliminarDatos($id)==1){
    header("location:adminSe.php");
}else{
    echo "fallo al eliminar";
}

?>