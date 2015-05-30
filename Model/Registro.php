<?php 
class Registro
{
	private $_idRegistro;
	private $_autoMasRentado;
	private $_fallasComunes;
	private $_autoAlquiladoTuristas;

	function __construct()
	{

	}
	public function getIdRegistro()
	{
		return $this->_idRegistro;
	}
	public function setIdRegistro($_idRegistro)
	{
		$this->_idRegistro=$_idRegistro;
	}
	public function getAutoMasRentado()
	{
		return $this->_autoMasRentado;
	}
	public function setAutoMasRentado($_autoMasRentado)
	{
		$this->_autoMasRentado=$_autoMasRentado;
	}
	public function getFallasComunes()
	{
		return $this->_fallasComunes;
	}
	public function setFallasComunes($_fallasComunes)
	{
		$this->_fallasComunes=$_fallasComunes;
	}
	public function getAutoAlquiladoTuristas()
	{
		return $this->_autoAlquiladoTuristas;
	}
	public function setAutoAlquiladoTuristas($_autoAlquiladoTuristas)
	{
		$this->_autoAlquiladoTuristas=$_autoAlquiladoTuristas;
	}
}
 ?>