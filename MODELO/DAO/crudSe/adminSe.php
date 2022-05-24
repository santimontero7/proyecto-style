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
    <link rel="stylesheet" href="../VISTA/assets/css/estilologin.css">
</head>
<body>
<div class="row aling-text-items " >  

    
<fieldset>
<a class="btn btn-primary btn-lg" href="../crudS/adminC.php" role="button">Registrar Citas</a>
<a class="btn btn-primary btn-lg" href="../crudE/admin.php" role="button">Registrar Empleados</a>
<a class="btn btn-primary btn-lg" href="../crudP/admin.php" role="button">Registrar Productos</a>

</fieldset>
   
   

<form action="insertar.php" method="post">
    <label for="">Nombre servicio:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtnombreservicio" id="" aria-describedby="helpId" placeholder="">
    </label>

    <label for="">Precio servicio:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtprecioservicio" id="" aria-describedby="helpId" placeholder="">
    </label>
    
    <label for="">Detalles del servicio:
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="txtdetallesservicio" id="" aria-describedby="helpId" placeholder="">
    </label>

   

    <button>Insertar</button>

</form>

<table style="border-collapse:collapse;" border="3">
    <tr>
       <td>id:</td>

        <td>Nombre servicio:</td>
        <td>Precio servicio:</td>
        
        <td>Detalles servicio:</td>

        <!-- Modulo Actualizar  -->        
        <td>Actualizar</td>
        <td>Eliminar</td>
    </tr>

<?php
    $objeto= new metodos();
    $sql="SELECT idservicio,nombreservicio,precioservicio,detallesservicio from servicios";
    $datos=$objeto->mostrarDatos($sql);

    foreach($datos as $key){

?>
    <tr>
        <td><?php echo $key ['idservicio']; ?></td>
        <td><?php echo $key ['nombreservicio']; ?></td>
        <td><?php echo $key ['precioservicio']; ?></td> 
      
        <td><?php echo $key ['detallesservicio']; ?></td> 



        <!-- Actualizar -->
        <td><a  class="btn btn-success" href="editar.php?id=<?php echo $key['idservicio'] ?>">Editar</a></td>
        <td><a  class="btn btn-success" href="eliminar.php?id=<?php echo $key['idservicio'] ?>">Eliminar</a></td>
    </tr>
<?php
    }
?>

</table>
</div>   
</body>
</html>