<?php
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/serviciosDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/servicios.php");

$objeto = new serviciosDAO();
$resultado = $objeto-> selectServicios();




?>