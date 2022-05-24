<?php
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/INTERFACE/ICitas.php");
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/Citas.php");
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/SERVICIO/servicio.php");

class citasDAO implements ICitas{  
        public function selectCitas(){
            $data_source = new DataSource();
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM citas");
            $usuario = null;
            $usuarios = array();
            foreach ($data_table as $clave => $valor) {
                $usuario = new citas();
                $usuario->setIdCitas( $data_table[$clave]["IdCitas"] );
                $usuario->setNombresUsuario( $data_table[$clave]["NombresUsuario"] );
                $usuario->setApellidosUsuario( $data_table[$clave]["ApellidosUsuario"] );
                $usuario->setEmailUsuario( $data_table[$clave]["EmailUsuario"] );
                $usuario->setFechaCita( $data_table[$clave]["FechaCita"] );
                $usuario->setHoraCita( $data_table[$clave]["HoraCita"] );
                $usuario->setDireccion( $data_table[$clave]["Direccion"] );
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        }
        public function selectCitasById($id){
            $data_source = new DataSource();
            $table= $data_source->ejecutarConsulta("SELECT * FROM citas");
            $usuario = null;
            if(count($table) > 0){
                foreach ($table as $clave => $valor) {
                    $usuario = new citas();
                    $usuario->setIdCitas( $table[$clave]["IdCitas"] );
                    $usuario->setNombresUsuario( $table[$clave]["NombresUsuario"] );
                    $usuario->setApellidosUsuario( $table[$clave]["ApellidosUsuario"] );
                    $usuario->setEmailUsuario( $table[$clave]["EmailUsuario"] );
                    $usuario->setFechaCita( $table[$clave]["FechaCita"] );
                    $usuario->setHoraCita( $table[$clave]["HoraCita"] );
                    $usuario->setDireccion( $table[$clave]["direccion"] );



                }
                return $usuario;
            }else{
                return null;
            }
        }

        public function searchCitas($EmailUsuario){
            $data_source = new DataSource();
            $table = $data_source->ejecutarConsulta("SELECT * FROM citas WHERE EmailUsuario = :EmailUsuario ",
                array(':EmailUsuario'=> $EmailUsuario));
            $usuario = null;
            if(count($table) == 1){
                foreach ($table as $clave => $valor) {
                    $usuario = new citas();
                    $usuario->setIdCitas( $table[$clave]["IdCitas"] );
                    $usuario->setNombresUsuario( $table[$clave]["NombresUsuario"] );
                    $usuario->setApellidosUsuario( $table[$clave]["ApellidosUsuario"] );
                    $usuario->setEmailUsuario( $table[$clave]["EmailUsuario"] );
                    $usuario->setFechaCita( $table[$clave]["FechaCita"] );
                    $usuario->setHoraCita( $table[$clave]["HoraCita"] );
                    $usuario->setDireccion( $table[$clave]["direccion"] );
                }
                return $usuario;
            }else{
                return null;
            }
        }
        public function insertCitas(citas $usuario){
            $data_source = new DataSource();
    
            $sql = "INSERT INTO citas VALUES (:IdCitas,:NombresUsuario,:ApellidosUsuario,:EmailUsuario,:FechaCita,:HoraCita,:direccion)";
    
            $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':IdCitas'=>$usuario->getIdCitas(),
                ':NombresUsuario'=>$usuario->getNombresUsuarios(),
                ':ApellidosUsuario'=>$usuario->getApellidosUsuario(),
                ':EmailUsuario'=>$usuario->getEmailUsuario(),
                ':FechaCita'=>$usuario->getFechaCita(),
                ':HoraCita'=>$usuario->getHoraCita(),
                ':direccion'=>$usuario->getDireccion()

                )
            );
            return $resultado;

        }
        public function updateCitas(citas $usuario){
            $data_source = new DataSource();
            $sql = "UPDATE citas SET NombresUsuario = NombresUsuario,
                    ApellidosUsuario = ApellidosUsuario,
                    EmailUsuario = EmailUsuario,
                    FechaCita = FechaCita,
                    HoraCita = HoraCita,
                    direccion = direccion

                    WHERE IdCitas = IdCitas
                    ";
            $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':NombresUsuario'=>$usuario->getNombresUsuarios(),
                ':ApellidosUsuario'=>$usuario->getApellidosUsuario(),
                ':EmailUsuario'=>$usuario->getEmailUsuario(),
                ':FechaCita'=>$usuario->getFechaCita(),
                ':HoraCita'=>$usuario->getHoraCita(),
                ':direccion'=>$usuario->getDireccion()
           
                )
            );
            return $resultado;
        }
    
        public function deleteCitas($id){
            $data_source = new DataSource();
            $resultado = $data_source->ejecutarActualizacion("DELETE FROM citas WHERE IdCitas = :IdCitas",
                array(':IdCitas'=>$id));
            return $resultado;
        }
    
    }
    
?>