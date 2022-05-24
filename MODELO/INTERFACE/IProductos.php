<?php 
interface IProductos
{

	public function selectProductos();
	public function selectProductoById($id);
	public function searchProductos($NombreProducto);
	public function insertProductos(Productos $usuario);
	public function updateProducto(Productos $usuario);
	public function deleteProducto($id);

}

?>