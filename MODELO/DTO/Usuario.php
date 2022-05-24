<?php 

class Usuario 
{
	private $idusuario;
	private $nombre;
	private $apellido;
	private $correo;
	private $pass;
	
	public function setIdusuario($idusuario){
		$this->idusuario = $idusuario;
	}

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setApellido($apellido){
		$this->apellido= $apellido;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setPass($pass){
		$this->pass = $pass;
	}

	public function getPass(){
		return $this->pass;
	}

}

 ?>