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
        <a class="btn btn-primary btn-lg" href="../crudP/admin.php" role="button">Registrar productos</a>
        <a class="btn btn-primary btn-lg" href="../crudSe/adminSe.php" role="button">Registrar Servicios</a>

        </fieldset>
   
    </header>

<form action="insertar.php" method="post">
    <label for="">Nombre:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtnombres" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">Precio:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtapellidos" id="" aria-describedby="helpId" placeholder="">
    </label>
    
    <label for="">Proveedor:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtemail" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">Direccion:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtdireccion" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">telefono:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txttelefono" id="" aria-describedby="helpId" placeholder="">
    </label>

    <button>Insertar</button>

</form>

<table style="border-collapse:collapse;" border="3">
    <tr>
    <td>id:</td>

        <td>Nombres:</td>
        <td>Apellidos:</td>
        <td>Email:</td>
        <td>telefono:</td>
        <td>Direccion:</td>

        <!-- Modulo Actualizar  -->        
        <td>Actualizar</td>
        <td>Eliminar</td>
    </tr>

<?php
    $objeto= new metodos();
    $sql="SELECT id,nombres,apellidos,email,telefono,direccion from empleados";
    $datos=$objeto->mostrarDatos($sql);

    foreach($datos as $key){

?>
    <tr>
        <td><?php echo $key ['id']; ?></td>
        <td><?php echo $key ['nombres']; ?></td>
        <td><?php echo $key ['apellidos']; ?></td> 
        <td><?php echo $key ['email']; ?></td> 
        <td><?php echo $key ['telefono']; ?></td> 
        <td><?php echo $key ['direccion']; ?></td> 



        <!-- Actualizar -->
        <td><a  class="btn btn-success" href="editar.php?id=<?php echo $key['id'] ?>">Editar</a></td>
        <td><a  class="btn btn-success" href="eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a></td>
    </tr>
<?php
    }
?>

</table>
</div>   
</body>
</html>