<?php
class metodos{
    public function mostrarDatos($sql){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 

        $resultado=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
    }

    public function insertarDatos($datos){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 

        $sql="INSERT INTO citas (NombresUsuario,ApellidosUsuario,EmailUsuario,FechaCita,HoraCita)";

        return $resultado=mysqli_query($conexion,$sql);

    }

 }

?>