<?php 
class Reservacion
{
	private $_idReserva;
	private $_idRegistro;

	function __construct()
	{

	}
	public function getIdReserva()
	{
		return $this->_idReserva;
	}
	public function setIdReserva($_idReserva)
	{
		$this->_idReserva=$_idReserva;
	}
	public function getIdRegistro()
	{
		return $this->_idRegistro;
	}
	public function setIdRegistro($_idRegistro)
	{
		$this->_idRegistro=$_idRegistro;
	}
}
 ?>