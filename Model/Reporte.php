<?php 
class Reporte
{
	private $_idReporte;
	private $_idRegistro;

	function __construct()
	{

	}
	public function getIdReporte()
	{
		return $this->_idReporte;
	}
	public function setIdReporte($_idReporte)
	{
		$this->_idReporte=$_idReporte;
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