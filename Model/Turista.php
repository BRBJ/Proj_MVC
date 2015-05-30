<?php 
class Turista
{
	private $_idTurista;
	private $_idDescuento;
	private $_idPaquete;

	function __construct()
	{

	}
	public function getIdTurista()
	{
		return $this->_idTurista;
	}
	public function setIdTurista($_idTurista)
	{
		$this->_idTurista=$_idTurista;
	}
	public function getIdDescuento()
	{
		return $this->_idDescuento;
	}
	public function setIdDescuento($_idDescuento)
	{
		$this->_idDescuento=$_idDescuento;
	}
	public function getIdPaquete()
	{
		return $this->_idPaquete;
	}
	public function setIdPaquete($_idPaquete)
	{
		$this->_idPaquete=$_idPaquete;
	}
}
 ?>