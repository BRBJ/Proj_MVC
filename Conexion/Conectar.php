<?php
class Conectar {
	public static function conexion(){
		$conexion=new mysqli("localhost:8080","root","","proj");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}
}
?>
