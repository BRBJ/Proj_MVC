<?php 
class Cliente
{
	private $_fecha;
	private $_monto;
	private $_idCliente;
	private $_idReserva;

	function __construct()
	{

	}
	public function getFecha()
	{
		return $this->_fecha;
	}
	public function setFecha($_fecha)
	{
		$this->_fecha=$_fecha;
	}
	public function getMonto()
	{
		return $this->_monto;
	}
	public function setMonto($_monto)
	{
		$this->_monto=$_monto;
	}
	public function getIdCliente()
	{
		return $this->_idCliente;
	}
	public function setIdCliente($_idCliente)
	{
		$this->_idCliente=$_idCliente;
	}
	public function getIdReserva()
	{
		return $this->_idReserva;
	}
	public function setIdReserva($_idReserva)
	{
		$this->_idReserva=$_idReserva;
	}
}
 ?>