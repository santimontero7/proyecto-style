<?php 
interface IServicios
{

	public function selectServicios();
	public function selectServiciosById($id);
	public function searchServicios($nombreServicio);
	public function insertServicios(Servicios $usuario);
	public function updateServicios(Servicios $usuario);
	public function deleteServicios($id);

}

?>