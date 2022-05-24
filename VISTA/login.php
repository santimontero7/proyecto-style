<?php
require_once "/xampp/htdocs/proyectofinal2.0/MODELO/SERVICIO/servicio.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../VISTA/assets/css/estilologin.css">
    <title>login</title>
</head>
<body>
<section class="form-login">
      <h5>Formulario Login</h5>
	  <form  action="/proyectofinal2.0/CONTROLADOR/loginControlador.php" method="POST">
      <input class="controls" type="text" name="correo" value="" placeholder="Correo">
      <input class="controls" type="password" name="pass" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="" value="Ingresar">
      <p><a href="register.php">¿no estas Registrado?</a></p>

    </section>

</body>
</html>