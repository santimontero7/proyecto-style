<?php
require_once "conexion.php";
$objeto=new conectarbd();
$conexion=$objeto->conexion();
$id=$_GET['IdCitas'];
$sql="SELECT NombresUsuario, ApellidosUsuario, EmailUsuario, FechaCita,HoraCita,Direccion from citas where id ='$IdCitas";

$resultado=mysqli_query ($conexion,$sql);
$ver=mysqli_fetch_row($resultado);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="actualizar.php" method="post">

<input type="text" hidden="" value="<?php echo $id  ?> " name="id">

    <label for="">Nombre Usuario:
    <input type="text" name="txtnombresusuario" value="<?php echo $ver[0] ?>">
    </label>
    
    <label for="">Apellidos Usuario:
    <input type="text" name="txtapellidosusuario" value="<?php echo $ver[1] ?>">
    </label>

    <label for="">EmailUsuario:
    <input type="text" name="txtemailusuario" value="<?php echo $ver[2] ?>">
    </label>

    <label for="">Fecha cita:
    <input type="text" name="txtfechacita" value="<?php echo $ver[3] ?>">
    </label>
    <label for="">Hora cita:
    <input type="text" name="txthoracita" value="<?php echo $ver[4] ?>">
    </label>
    <label for="">Direccion:
    <input type="text" name="txtdireccion" value="<?php echo $ver[5] ?>">
    </label>
 
    
    <button>Agregar</button>

</form>
    
</body>
</html>