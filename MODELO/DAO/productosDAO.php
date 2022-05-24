<?php
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/INTERFACE/IProductos.php");
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/Productos.php");
 require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/SERVICIO/servicio.php");

class ProductosDAO implements IProductos{  
        public function selectProductos(){
            $data_source = new DataSource();
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM productos");
            $usuario = null;
            $usuarios = array();
            foreach ($data_table as $clave => $valor) {
                $usuario = new Productos();
                $usuario->setIdProducto( $data_table[$clave]["IdProductos"] );
                $usuario->setNombreproducto( $data_table[$clave]["NombreProductos"] );
                $usuario->setDetallesProducto( $data_table[$clave]["DetallesProductos"] );
                $usuario->setCantidadProducto( $data_table[$clave]["CantidadProductos"] );
                $usuario->setPrecioProducto( $data_table[$clave]["PrecioProductos"] );
                $usuario->setFotoProducto( $data_table[$clave]["FotoProductos"] );
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        }
        public function selectProductoById($id){
            $data_source = new DataSource();
            $table= $data_source->ejecutarConsulta("SELECT * FROM productos");
            $usuario = null;
            if(count($table) > 0){
                foreach ($table as $clave => $valor) {
                    $usuario = new Productos();
                    $usuario->setIdProducto( $table[$clave]["IdProductos"] );
                    $usuario->setNombreproducto( $table[$clave]["NombreProductos"] );
                    $usuario->setDetallesProducto( $table[$clave]["DetallesProductos"] );
                    $usuario->setCantidadProducto( $table[$clave]["CantidadProductos"] );
                    $usuario->setPrecioProducto( $table[$clave]["precioProducto"] );
                    $usuario->setFotoProducto( $table[$clave]["FotoProducto"] );
                }
                return $usuario;
            }else{
                return null;
            }
        }

        public function searchProductos($nombreproducto){
            $data_source = new DataSource();
            $table = $data_source->ejecutarConsulta("SELECT * FROM productos WHERE NombreProductos = :NombreProductos ",
                array(':NombreProductos'=> $nombreproducto));
            $usuario = null;
            if(count($table) == 1){
                foreach ($table as $clave => $valor) {
                    $usuario = new Usuario();
                    $usuario->setIdusuario( $table[$clave]["IdProductos"] );
                    $usuario->setNombre( $table[$clave]["NombreProductos"] );
                    $usuario->setApellido( $table[$clave]["DetallesProductos"] );
                    $usuario->setPass( $table[$clave]["CantidadProductos"] );
                }
                return $usuario;
            }else{
                return null;
            }
        }
        public function insertProductos(Productos $usuario){
            $data_source = new DataSource();
    
            $sql = "INSERT INTO productos VALUES (:IdProductos,:NombreProducto,:CantidadProductos,:CantidadProducto,:PrecioProducto,:FotoProducto)";
    
            $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':IdProductos'=>$usuario->getIdProducto(),
                ':NombreProductos'=>$usuario->getNombreproducto(),
                ':DetallesProductos'=>$usuario->getDetallesProducto(),
                ':CantidadProducto'=>$usuario->getCantidadProducto(),
                ':PrecioProducto'=>$usuario->getPrecioProducto(),
                'FotoProducto'=>$usuario->getFotoProducto(),
                )
            );
            return $resultado;

        }
        public function updateProducto(Productos $usuario){
            $data_source = new DataSource();
            $sql = "UPDATE productos SET NombreProductos = NombreProductos,
                    DetallesProductos = DetallesProductos,
                    CantidadProductos = CantidadProductos,
                    PrecioProductos = PrecioProducto,
                    FotoProductos = FotoProductos
                    WHERE IdProductos = IdProductos
                    ";
            $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':NombreProductos'=>$usuario->getNombreproducto(),
                ':DetallesProductos'=>$usuario->getDetallesProducto(),
                ':CantidadProducto'=>$usuario->getCantidadproducto(),
                ':PrecioProducto'=>$usuario->getPrecioProducto(),
                ':FotoProducto'=>$usuario->getFotoProducto()
                )
            );
            return $resultado;
        }
    
        public function deleteProducto($id){
            $data_source = new DataSource();
            $resultado = $data_source->ejecutarActualizacion("DELETE FROM productos WHERE IdProductos = :IdProductos",
                array(':IdProductos'=>$id));
            return $resultado;
        }
    
    }
    
?>