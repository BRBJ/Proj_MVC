<?php 
class Descuento
{
	private $_idDescuento;
	private $_cantidad;
	function __construct()
	{

	}
	public function getIdDescuento()
	{
		return $this->_idDescuento;
	}
	public function setIdDescuento($_idDescuento)
	{
		$this->_idDescuento=$_idDescuento;
	}
	public function getCantidad()
	{
		return $this->_cantidad;
	}
	public function setCantidad($_cantidad)
	{
		$this->_cantidad=$_cantidad;
	}
}
 ?>