<?php 
class Reparacion
{
	private $_idReparacion;

	function __construct()
	{

	}
	public function getIdReparacion()
	{
		return $this->_idReparacion;
	}
	public function setIdReparacion($_idReparacion)
	{
		$this->_idReparacion=$_idReparacion;
	}
}
 ?>