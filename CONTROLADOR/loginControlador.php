<?php

require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DAO/usuarioDAO.php");
require_once  ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/usuario.php");
$correo= $_POST['correo'];
$pass = $_POST['pass'];
echo $correo;
echo $pass;
$objetoUsuario = new Usuario;
$objetoUsuario->setCorreo($correo);
$objetoUsuario->setPass($pass);


$objeto =new UsuarioDAO;
$login = $objeto->loginUsuario($objetoUsuario->getCorreo(),$objetoUsuario->getPass());
if($login!=''){
    header("location:../VISTA/catalogo/index.html");
}else{
    header("location:../VISTA/login.php");
}


?>

