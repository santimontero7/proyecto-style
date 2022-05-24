<?php

require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/serviciosDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/Servicios.php");

$NombreServicio = $_POST['NombreServicio'];
$DetalleServicio = $_POST['DetalleServicio'];

$PrecioServicio = $_POST['PrecioServicio'];



$objetoServicio = new Servicios;
$objetoServicio->setNombreServicio($NombreServicio);
$objetoServicio->setDetalleServicio($DetalleServicio);

$objetoServicio->setPrecioServicio($PrecioServicio);


$objeto =new serviciosDAO;
$objeto->insertServicios($objetoserviciosDAO);
header("location:../listservicios.php");


?>