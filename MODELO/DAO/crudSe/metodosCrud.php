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

        $sql="INSERT INTO servicios (idservicio,nombreservicio,precioservicio,detallesservicio) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

        return $resultado=mysqli_query($conexion,$sql);

    }

    public function actualizarDatos($datos){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 

        $sql="UPDATE servicios set nombreservicio='$datos[1]',
                                precioservicio='$datos[2]',
                                
                                detallesservicio='$datos[3]'


                                where idservicio='$datos[0]'";
        
        return $resultado=mysqli_query($conexion,$sql);
    }

    public function eliminarDatos($id){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 
        $sql="DELETE from servicios where idservicio='$id'";
        return $resultado=mysqli_query($conexion,$sql);
    }
}

?>