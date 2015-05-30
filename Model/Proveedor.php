<?php 
class Proveedor
{
	private $_idProv;
	private $_nombre;
	private $_telefono;
	private $_representante;
	private $_correo;

	function __construct()
	{

	}
	public function getIdProv()
	{
		return $this->_idProv;
	}
	public function setIdProv($_idProv)
	{
		$this->idProv=$_idProv;
	}
	public function getNombre()
	{
		return $this->_nombre;
	}
	public function setNombre($_nombre)
	{
		$this->nombre=$_nombre;
	}
	public function getTelefono()
	{
		return $this->_telefono;
	}
	public function setTelefono($_telefono)
	{
		$this->telefono=$_telefono;
	}
	public function getRepresentante()
	{
		return $this->_representante;
	}
	public function setRepresentante($_representante)
	{
		$this->_representante=$_representante;
	}
	public function getCorreo()
	{
		return $this->_correo;
	}
	public function setCorreo($_correo)
	{
		$this->_correo=$_correo;
	}
}

 ?>