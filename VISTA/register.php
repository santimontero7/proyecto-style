<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="../VISTA/assets/css/estilologin.css">
  </head>
  <body>
  <section class="form-login">
      <h5>Formulario De Registro</h5>
	  <form  action="/proyectofinal2.0/CONTROLADOR/usuarioControlador.php" method="POST">
      <input class="controls" type="text" name="nombre" value="" placeholder="nombres">
	  <input class="controls" type="text" name="apellido" value="" placeholder="apellidos">
	  <input class="controls" type="text" name="correo" value="" placeholder="Correo">
      <input class="controls" type="password" name="pass" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="" value="Registrarse">
      <p><a href="login.php">¿Ya Tienes una Cuenta?</a></p>

    </section>

				
</body>
</html>