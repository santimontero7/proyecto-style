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

        $sql="INSERT INTO citas (IdCitas,NombresUsuario,ApellidosUsuario,EmailUsuario,FechaCita,HoraCita,Direccion) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";

        return $resultado=mysqli_query($conexion,$sql);

    }

    public function actualizarDatos($datos){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 

        $sql="UPDATE citas set NombresUsuario='$datos[0]',
                                ApellidosUsuario='$datos[1]',
                                EmailUsuario='$datos[2]',
                                FechaCita='$datos[3]',
                                HoraCita='$datos[4]',
                                HoraCita='$datos[5]'
                                


                                where IdCitas='$datos[6]'";
        
        return $resultado=mysqli_query($conexion,$sql);
    }

    public function eliminarDatos($id){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 
        $sql="DELETE from citas where id='$IdCitas'";
        return $resultado=mysqli_query($conexion,$sql);
    }
}

?>