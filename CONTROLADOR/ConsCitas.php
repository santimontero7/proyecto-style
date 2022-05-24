<?php
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/citasDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/citas.php");

$objeto = new citasDAO();
$resultado = $objeto-> selectCitas();




?>