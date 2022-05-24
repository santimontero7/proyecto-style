<?php
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/INTERFACE/IServicios.php");
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/servicios.php");
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/SERVICIO/servicio.php");

class ServiciosDAO implements IServicios{  
        public function selectServicios(){
            $data_source = new DataSource();
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM servicios");
            $usuario = null;
            $usuarios = array();
            foreach ($data_table as $clave => $valor) {
                $usuario = new Servicios();
                $usuario->setIdServicio( $data_table[$clave]["idservicio"] );
                $usuario->setNombreServicio( $data_table[$clave]["NombreServicio"] );
                $usuario->setDetalleServicio( $data_table[$clave]["detalleServicio"] );
                $usuario->setPrecioServicio( $data_table[$clave]["PrecioServicio"] );
                
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        }
        public function selectServiciosById($id){
            $data_source = new DataSource();
            $table= $data_source->ejecutarConsulta("SELECT * FROM servicios");
            $usuario = null;
            if(count($table) > 0){
                foreach ($table as $clave => $valor) {
                    $usuario = new Servicios();
                    $usuario->setIdServicio( $table[$clave]["idservicio"] );
                    $usuario->setNombreServicio( $table[$clave]["NombreServicio"] );
                    $usuario->setDetalleServicio( $table[$clave]["detalleServicio"] );
                    $usuario->setPrecioServicio( $table[$clave]["PrecioServicio"] );
                }
                return $usuario;
            }else{
                return null;
            }
        }

        public function searchServicios($nombreServicio){
            $data_source = new DataSource();
            $table = $data_source->ejecutarConsulta("SELECT * FROM servicios WHERE NombreServicio = :NombreServicio ",
                array(':NombreServicio'=> $nombreServicio));
            $usuario = null;
            if(count($table) == 1){
                foreach ($table as $clave => $valor) {
                    $usuario = new Servicios();
                    $usuario->setIdServicio( $table[$clave]["idservicio"] );
                    $usuario->setNombreServicio( $table[$clave]["NombreServicio"] );
                    $usuario->setDetalleServicio( $table[$clave]["detalleServicio"] );
                    $usuario->setPrecioServicio( $table[$clave]["PrecioServicio"] );
                }
                return $usuario;
            }else{
                return null;
            }
        }
        public function insertServicios(Servicios $usuario){
            $data_source = new DataSource();
    
            $sql = "INSERT INTO servicios VALUES (:idservicio,:NombreServicio,:detalleServicio,:PrecioServicio)";
    
            $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':idservicio'=>$usuario->getIdServicio(),
                ':NombreServicio'=>$usuario->getNombreServicio(),
                ':detalleServicio'=>$usuario->getDetalleServicio(),
                ':PrecioServicio'=>$usuario->getPrecioServicio()
                )
            );
            return $resultado;

        }
        public function updateServicios(Servicios $usuario){
            $data_source = new DataSource();
            $sql = "UPDATE servicios SET NombreServicio = NombreServicio,
                    detalleServicio = detalleServicio,
                    PrecioServicio = PrecioServicio,
                    
                    WHERE idservicio = idservicio
                    ";
            $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':NombreServicio'=>$usuario->getNombreServicio(),
                ':detalleServicio'=>$usuario->getDetalleServicio(),
                ':PrecioServicio'=>$usuario->getPrecioServicio()
           
                )
            );
            return $resultado;
        }
    
        public function deleteServicios($id){
            $data_source = new DataSource();
            $resultado = $data_source->ejecutarActualizacion("DELETE FROM servicios WHERE idservicio = :idservicio",
                array(':idservicio'=>$id));
            return $resultado;
        }
    
    }
    
?>