<?php 
require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/INTERFACE/IUsuario.php");
require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/DTO/Usuario.php");
require_once ("/xampp/htdocs/proyectofinal2.0/MODELO/SERVICIO/servicio.php");
class UsuarioDAO implements IUsuario
{
	public function selectUsuarios(){

		$data_source = new DataSource();
		$table = $data_source->ejecutarConsulta("SELECT * FROM  usuarios");
		$usuario = null;
		$usuarios = array();

		foreach ($table as $clave => $valor) {
			$usuario = new Usuario();
			$usuario->setIdusuario( $table[$clave]["idusuario"] );
			$usuario->setNombre( $table[$clave]["nombre"] );
			$usuario->setApellido( $table[$clave]["apellido"] );
            $usuario->setCorreo( $table[$clave]["correo"] );
			$usuario->setPass( $table[$clave]["pass"] );
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	public function selectUsuarioById($id){
		$data_source = new DataSource();
		$table= $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE idusuario = :idusuario",array(
			':idusuario'=>$id));
		$usuario = null;

		if(count($table) == 1){

			foreach ($table as $clave => $valor) {
				$usuario = new Usuario();
				$usuario->setIdusuario( $table[$clave]["idusuario"] );
				$usuario->setNombre( $table[$clave]["nombre"] );
				$usuario->setApellido( $table[$clave]["apellido"] );
				$usuario->setCorreo( $table[$clave]["correo"] );
				$usuario->setPass( $table[$clave]["pass"] );
			}
			return $usuario;
		}else{
			return null;
		}
	}
	
	public function searchUsuario($correo, $clave){
		$data_source = new DataSource();
		$table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE correo = :correo AND pass = :pass",
			array(':correo'=>$correo,':pass'=>$clave));
		$usuario = null;

		if(count($table) == 1){

			foreach ($table as $clave => $valor) {
				$usuario = new Usuario();
				$usuario->setIdusuario( $table[$clave]["idusuario"] );
				$usuario->setNombre( $table[$clave]["nombre"] );
				$usuario->setApellido( $table[$clave]["apellido"] );
				$usuario->setPass( $table[$clave]["pass"] );
			}
			return $usuario;
		}else{
			return null;
		}
	}

	public function insertUsuario(Usuario $usuario){
		$data_source = new DataSource();

		$sql = "INSERT INTO usuarios VALUES (:idusuario,:nombre,:apellido,:correo,:pass)";

		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':idusuario'=>$usuario->getIdusuario(),
			':nombre'=>$usuario->getNombre(),
			':apellido'=>$usuario->getApellido(),
			':correo'=>$usuario->getCorreo(),
			':pass'=>$usuario->getPass()
			)
		);
		return $resultado;
		
	}

	public function loginUsuario($correo, $clave){
		$data_source = new DataSource();
		$table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE correo = :correo AND pass = :pass",
			array(':correo'=>$correo,':pass'=>$clave));
		$usuario = null;

		if(count($table) == 1){

			foreach ($table as $clave => $valor) {
				$usuario = new Usuario();
				$usuario->setIdusuario( $table[$clave]["idusuario"] );
				$usuario->setCorreo( $table[$clave]["correo"] );
				$usuario->setNombre( $table[$clave]["nombre"] );
				$usuario->setApellido( $table[$clave]["apellido"] );
				$usuario->setPass( $table[$clave]["pass"] );
			}
			return $usuario;
		}else{
			return null;
		}
	}

	public function updateUsuario(Usuario $usuario){
		$data_source = new DataSource();
		$sql = "UPDATE usuarios SET nombre = :nombre,
				apellido = :apellido,
				correo = :correo
				WHERE idusuario = :idusuario
				";
		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':nombre'=>$usuario->getNombre(),
			':apellido'=>$usuario->getApellido(),
			':correo'=>$usuario->getCorreo(),
			':idusuario'=>$usuario->getIdusuario()
			)
		);
		return $resultado;
	}

	public function deleteUsuario($id){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM usuarios WHERE idusuario = :idusuario",
			array(':idusuario'=>$id));
		return $resultado;
	}

}



 ?>