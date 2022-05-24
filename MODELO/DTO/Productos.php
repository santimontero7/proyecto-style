<?php
class Productos{
  public $IdProducto;
  public $NombreProducto;
  public $DetallesProducto;
  public $CantidadProducto;
  public $PrecioProducto;
  public $FotoProducto;



public function setIdProducto($IdProducto){
    $this->IdProducto = $IdProducto;;
}
public function getIdProducto(){
    return $this->IdProducto;;
}

public function setNombreproducto($NombreProducto){
    $this->NombreProducto= $NombreProducto;
}
public function getNombreproducto(){
    return $this->NombreProducto;
}
public function setDetallesProducto($DetallesProducto){
    $this-> DetallesProducto= $DetallesProducto;
}
public function getDetallesProducto(){
    return $this->DetallesProducto;
}

public function setCantidadProducto($CantidadProducto){
    $this->CantidadProducto= $CantidadProducto;
}
public function getCantidadProducto(){
    return $this->CantidadProducto;
}

public function setPrecioProducto($PrecioProducto){
    $this->PrecioProducto= $PrecioProducto;
}
public function getPrecioProducto(){
    return $this->PrecioProducto;
}
public function setFotoProducto($FotoProducto){
    $this->FotoProducto= $FotoProducto;
}
public function getFotoProducto(){
    return $this->FotoProducto;
}




}
?>