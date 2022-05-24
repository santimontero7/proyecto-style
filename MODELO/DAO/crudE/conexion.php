<?php

class conectarbd{

    private $servidor="localhost";
    private $usuario="root";
    private $bd="style";
    private $password="";


    public function conexion(){
        $conexion=mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->bd);

    return $conexion;
    }
}

# Instanciar. 

$objeto=new conectarbd(); 
if ($objeto->conexion()){
    echo "";
}
else{
    echo "fallo en la conexion";
}


?>