<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Agendar Cita</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="../../../VISTA/assets/css/estilologin.css">
  </head>
  <body>
  <section class="form-login">
      <h5>Agendamiento De Citas</h5>
	  <form  action="../../CONTROLADOR/CitasController.php" method="POST">
      <input class="controls" type="text" name="NombreUsuario" value="" placeholder="nombres usuario">
	  <input class="controls" type="text" name="ApellidoUsuario" value="" placeholder="apellidos usuario">
      <input class="controls" type="text" name="EmailUsuario" value="" placeholder="email usuario">
	  <input class="controls" type="text" name="FechaCita" value="" placeholder="fecha cita">
	  <input class="controls" type="text" name="HoraCita" value="" placeholder="hora cita">
      <input class="controls" type="text" name="Direccion" value="" placeholder="direccion">
      <input class="buttons" type="submit" name="" value="Agendar Cita">
      

    </section>

				
</body>
</html>