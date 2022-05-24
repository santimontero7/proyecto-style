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

        $sql="INSERT INTO productos (idproducto,nombre,precio,proveedor,detalles,cantidad) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";

        return $resultado=mysqli_query($conexion,$sql);

    }

    public function actualizarDatos($datos){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 

        $sql="UPDATE productos set nombre='$datos[0]',
                                precio='$datos[1]',
                                proveedor='$datos[2]',
                                detalles='$datos[3]',
                                cantidad='$datos[5]',

                               idproducto='$datos[4]'";
        
        return $resultado=mysqli_query($conexion,$sql);
    }
    
public function eliminarDatos($idproducto){
        $dato=new conectarbd();
        $conexion=$dato->conexion(); 
        $sql="DELETE from productos where idproducto='$idproducto'";
        return $resultado=mysqli_query($conexion,$sql);
    }
}

?>