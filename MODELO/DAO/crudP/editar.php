<?php
require_once "conexion.php";
$objeto=new conectarbd();
$conexion=$objeto->conexion();

$sql="SELECT idproducto, nombre, precio, proveedor, detalles, cantidad from productos";

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




   <label for="">IdProducto:
    <input type="text" name="txtidproducto" value="<?php echo $ver[4] ?>">
    </label>
    


    <label for="">Nombre:
    <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
    </label>
    
    <label for="">PRECIO
    <input type="text" name="txtprecio" value="<?php echo $ver[1] ?>">
    </label>

    <label for="">PROVEEDOR
    <input type="text" name="txtproveedor" value="<?php echo $ver[2] ?>">
    </label>
    <label for="">CANTIDAD:
    <input type="text" name="txtcantidad" value="<?php echo $ver[5] ?>">
    </label>
    

    <label for="">DETALLES
    <input type="text" name="txtdetalles" value="<?php echo $ver[3] ?>">
    </label>
    
    <button>Agregar</button>

</form>
    
</body>
</html>