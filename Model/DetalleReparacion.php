<?php 
class DetalleReparacion
{
	private $_falla;
	private $_idReparacion;
	private $_numPlaca;
	function __construct()
	{

	}
	public function getFalla()
	{
		return $this->_falla;
	}
	public function setFalla($_falla)
	{
		$this->_falla=$_falla;
	}
	public function getIdReparacion()
	{
		return $this->_idReparacion;
	}
	public function setIdReparacion($_idReparacion)
	{
		$this->_idReparacion=$_idReparacion;
	}
	public function getNumPlaca()
	{
		return $this->_numPlaca;
	}
	public function setNumPlaca($_numPlaca)
	{
		$this->_numPlaca=$_numPlaca;
	}
}

 ?>