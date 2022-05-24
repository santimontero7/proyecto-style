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
        
        <a class="btn btn-primary btn-lg" href="../crudE/admin.php" role="button">Registrar Empleados</a>
        <a class="btn btn-primary btn-lg" href="../crudSe/adminSe.php" role="button">Registrar Servicios</a>

        </fieldset>
   
    </header>

<form action="insertar.php" method="post">
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

    <label for="">Detalles:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtdetalles" id="" aria-describedby="helpId" placeholder="">
    </label>

    <button>Insertar</button>

</form>

<table style="border-collapse:collapse;" border="3">
    <tr>
        
         <td>id cita:</td>

        <td>Nombre usuario:</td>
        <td>apellido usuario:</td>
        <td>email usuario:</td>
        <td>fecha cita:</td>
        <td>hora cita:</td>
        <td>direccion cita:</td>

        <!-- Modulo Actualizar  -->        
        <td>Actualizar</td>
        <td>Eliminar</td>
    </tr>

<?php
    $objeto= new metodos();
    $sql="SELECT IdCitas,NombresUsuario,ApellidosUsuario,EmailUsuario,FechaCita,HoraCita,Direccion from citas";
    $datos=$objeto->mostrarDatos($sql);

    foreach($datos as $key){

?>
    <tr>
        <td><?php echo $key ['IdCitas']; ?></td>
        <td><?php echo $key ['NombresUsuario']; ?></td>
        <td><?php echo $key ['ApellidosUsuario']; ?></td> 
        <td><?php echo $key ['EmailUsuario']; ?></td> 
        <td><?php echo $key ['FechaCita']; ?></td> 
        <td><?php echo $key ['HoraCita']; ?></td> 
        <td><?php echo $key ['Direccion']; ?></td> 



        <!-- Actualizar -->
        <td><a  class="btn btn-success" href="editar.php?id=<?php echo $key['IdCitas'] ?>">Editar</a></td>
        <td><a  class="btn btn-success" href="eliminar.php?id=<?php echo $key['IdCitas'] ?>">Eliminar</a></td>
    </tr>
<?php
    }
?>

</table>
</div>   
</body>
</html>