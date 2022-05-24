<?php

require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/CitasDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/Citas.php");

$IdCitas = $_POST['IdCitas'];
$NombresUsuario = $_POST['NombresUsuario'];
$ApellidosUsuario = $_POST['ApellidosUsuario'];
$EmailUsuario = $_POST['EmailUsuario'];
$FechaCita = $_POST['FechaCita'];
$HoraCita = $_POST['HoraCita'];
$Direccion = $_POST['Direccion'];



$objetoCitas = new citas;
$objetoServicio->setNombresUsuario($NombresUsuario);
$objetoServicio->setApellidosUsuario($ApellidosUsuario);
$objetoServicio->setEmailUsuario($EmailUsuario);
$objetoServicio->setFechaCita($FechaCita);
$objetoServicio->setHoraCita($HoraCita);
$objetoServicio->setDireccion($Direccion);


$objeto =new CitasDAO;
$objeto->insertCitas($objetoCitasDAO);
header("location:../../VISTA/indexx.php");


?>