<?php

$conectarse=mysqli_connect("localhost","root","","style") or die ("Problema al conectar la base de datos");

mysqli_query($conectarse,"insert into citas (IdCitas,NombresUsuario,ApellidosUsuario,EmailUsuario,FechaCita,HoraCita,Direccion)
values ('$_REQUEST[nombreusuario]','$_REQUEST[apellidousuario]','$_REQUEST[emailusuario]',$_REQUEST[fechacita],$_REQUEST[horacita],$_REQUEST[direccion])")or die ("Problemas al conectar con la tabla ".mysqli_error($conectarse));

mysqli_close($conectarse);
header("Location: indexx.html");