<?php 
interface ICitas
{

	public function selectCitas();
	public function selectCitasById($id);
	public function searchCitas($nombreCitas);
	public function insertCitas(Citas $usuario);
	public function updateCitas(Citas $usuario);
	public function deleteCitas($id);

}

?>