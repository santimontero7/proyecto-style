<?php
require_once "conexion.php";
$objeto=new conectarbd();
$conexion=$objeto->conexion();
$id=$_GET['id'];
$sql="SELECT nombres, apellidos, email, telefono , direccion from empleados where id='$id'";

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

    <label for="">Nombres:
    <input type="text" name="txtnombres" value="<?php echo $ver[1] ?>">
    </label>
    
    <label for="">apellidos:
    <input type="text" name="txtapellidos" value="<?php echo $ver[2] ?>">
    </label>

    <label for="">Email:
    <input type="text" name="txtemail" value="<?php echo $ver[3] ?>">
    </label>

    <label for="">telefono:
    <input type="text" name="txttelefono" value="<?php echo $ver[4] ?>">
    </label>

    <label for="">direccion:
    <input type="text" name="txtdireccion" value="<?php echo $ver[5] ?>">
    </label>
    
    <button>Agregar</button>

</form>
    
</body>
</html>