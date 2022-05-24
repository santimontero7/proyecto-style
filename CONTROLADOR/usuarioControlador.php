<?php
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/usuarioDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/usuario.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];


$objetoUsuario = new Usuario;
$objetoUsuario->setNombre($nombre);
$objetoUsuario->setApellido($apellido);
$objetoUsuario->setCorreo($correo);
$objetoUsuario->setPass($pass);

$objeto =new UsuarioDAO;
$objeto->insertUsuario($objetoUsuario);
header("location:../VISTA/Login.php");

?>