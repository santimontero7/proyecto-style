<?php
class Servicios{
  public $IdServicio;
  public $NombreServicio;
  public $DetalleServicio;
  public $PrecioServicio;




public function setIdServicio($IdServicio){
    $this->IdServicio = $IdServicio;
}
public function getIdServicio(){
    return $this->IdServicio;
}

public function setNombreServicio($NombreServicio){
    $this->NombreServicio= $NombreServicio;
}
public function getNombreServicio(){
    return $this->NombreServicio;
}
public function setDetalleServicio($DetalleServicio){
    $this-> DetalleServicio= $DetalleServicio;
}
public function getDetalleServicio(){
    return $this->DetalleServicio;
}

public function setPrecioServicio($PrecioServicio){
    $this->PrecioServicio= $PrecioServicio;
}
public function getPrecioServicio(){
    return $this->PrecioServicio;
}




}
?>