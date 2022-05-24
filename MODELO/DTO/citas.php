<?php
class citas{
  public $IdCitas;
  public $NombresUsuario;
  public $ApellidosUsuario;
  public $EmailUsuario;
  public $FechaCita;
  public $HoraCita;
  public $Direccion;



public function setIdCitas($IdCitas){
    $this->IdCitas = $IdCitas;;
}
public function getIdCitas(){
    return $this->IdCitas;;
}

public function setNombresUsuario($NombresUsuarios){
    $this->NombresUsuarios= $NombresUsuarios;
}
public function getNombresUsuarios(){
    return $this->NombresUsuarios;
}
public function setApellidosUsuario($ApellidosUsuario){
    $this-> ApellidosUsuario= $ApellidosUsuario;
}
public function getApellidosUsuario(){
    return $this->ApellidosUsuario;
}

public function setEmailUsuario($EmailUsuario){
    $this->EmailUsuario= $EmailUsuario;
}
public function getEmailUsuario(){
    return $this->EmailUsuario;
}

public function setFechaCita($FechaCita){
    $this->FechaCita= $FechaCita;
}
public function getFechaCita(){
    return $this->FechaCita;
}
public function setHoraCita($HoraCita){
    $this->HoraCita= $HoraCita;
}
public function getHoraCita(){
    return $this->HoraCita;
}
public function setDireccion($Direccion){
    $this->Direccion= $Direccion;
}
public function getDireccion(){
    return $this->Direccion;
}



}
?>