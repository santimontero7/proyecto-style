<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>

<div class="row aling-text-items " >  
<header>
    
        <fieldset>
        <a class="btn btn-primary btn-lg" href="../crudS/adminC.php" role="button">Registrar Citas</a>
        <a class="btn btn-primary btn-lg" href="../crudE/admin.php" role="button">Registrar Empleados</a>
        <a class="btn btn-primary btn-lg" href="../crudSe/adminSe.php" role="button">Registrar Servicios</a>

        </fieldset>
   
    </header>

<form action="insertar.php" method="post">


    <label for="">IdProducto:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtidproducto" id="" aria-describedby="helpId" placeholder="">
    </label>
    <label for="">Nombre:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtnombre" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">Precio:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtprecio" id="" aria-describedby="helpId" placeholder="">
    </label>
    
    <label for="">Proveedor:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtproveedor" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">cantidad:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtcantidad" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">Detalles:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtdetalles" id="" aria-describedby="helpId" placeholder="">
    </label>

    <button>Insertar</button>

</form>

<table  width="100%" style="border-collapse:collapse;" border="3">
    <tr>
    
        <td>idProducto:</td>
        <td>Nombre:</td>
        <td>Precio:</td>
        <td>Proovedor:</td>
        <td>Cantidad:</td>
        <td>Detalles:</td>

        <!-- Modulo Actualizar  -->  
        <td>Listar</td>
        <td>Actualizar</td>
        <td>Eliminar</td>
    </tr>

<?php
    $objeto= new metodos();
    $sql="SELECT idproducto,nombre,precio,proveedor,detalles,cantidad from productos";
    $datos=$objeto->mostrarDatos($sql);

    foreach($datos as $key){

?>
    <tr>
        <td><?php echo $key ['idproducto']; ?></td>
        <td><?php echo $key ['nombre']; ?></td>
        <td><?php echo $key ['precio']; ?></td> 
        <td><?php echo $key ['proveedor']; ?></td> 
        <td><?php echo $key ['cantidad']; ?></td> 
        <td><?php echo $key ['detalles']; ?></td> 



        <!-- Actualizar -->
        <td><a  class="btn btn-success" href="editar.php?id=<?php echo $key['idproducto'] ?>">Listar</a></td>
        <td><a  class="btn btn-success" href="editar.php?id=<?php echo $key['idproducto'] ?>">Editar</a></td>
        <td><a  class="btn btn-success" href="eliminar.php?id=<?php echo $key['idproducto'] ?>">Eliminar</a></td>
    </tr>
<?php
    }
?>

</table>
</div>   
</body>
</html>