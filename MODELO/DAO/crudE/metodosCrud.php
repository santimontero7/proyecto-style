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

        $sql="INSERT INTO empleados (id,nombres,apellidos,email,telefono,direccion) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";

        return $resultado=mysqli_query($conexion,$sql);

    }

    public function actualizarDatos($datos){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 

        $sql="UPDATE productos set nombres='$datos[1]',
                                apellidos='$datos[2]',
                                email='$datos[3]',
                                telefono='$datos[4]'
                                direccion='$datos[5]'


                                where id='$datos[0]'";
        
        return $resultado=mysqli_query($conexion,$sql);
    }

    public function eliminarDatos($id){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 
        $sql="DELETE from empleados where id='$id'";
        return $resultado=mysqli_query($conexion,$sql);
    }
}

?>