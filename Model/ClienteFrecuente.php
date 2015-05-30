<?php 
class ClienteFrecuente
{
	private $_idCliFrec;
	private $_idDescuento;

	function __construct()
	{

	}
	public function getIdCliFrec()
	{
		return $this->_idCliFrec;
	}
	public function setIdCliFrec($_idCliFrec)
	{
		$this->_idCliFrec=$_idCliFrec;
	}
	public function getIdDescuento()
	{
		return $this->_idDescuento;
	}
	public function setIdDescuento($_idDescuento)
	{
		$this->_idDescuento=$_idDescuento;
	}
}
 ?>