<?php 
class Vehiculo
{
	private $_numPlaca;
	private $_marca;
	private $_modelo;
	private $_anio;
	private $_color;
	private $_idCliente;
	private $_idProv;
	function __construct()
	{

	}
	public function getNumPlaca()
	{
		return $this->_numPlaca;
	}
	public function setNumPlaca($_numPlaca)
	{
		$this->_numPlaca=$_numPlaca;
	}
	public function getMarca()
	{
		return $this->_marca;
	}
	public function setMarca($_marca)
	{
		$this->_marca=$_marca;
	}
	public function getModelo()
	{
		return $this->_modelo;
	}
	public function setModelo($_modelo)
	{
		$this->_modelo=$_modelo;
	}
	public function getAnio()
	{
		return $this->_anio;
	}
	public function setAnio($_anio)
	{
		$this->_anio=$_anio;
	}
	public function getColor()
	{
		return $this->_color;
	}
	public function setColor($_color)
	{
		$this->_color=$_color;
	}
	public function getIdCliente()
	{
		return $this->_idCliente;
	}
	public function setIdCliente($_idCliente)
	{
		$this->idCliente=$_idCliente;
	}
	public function getIdProv()
	{
		return $this->_idProv;
	}
	public function setIdProv($_idProv)
	{
		$this->idProv=$_idProv;
	}
}
 ?>