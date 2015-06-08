<?php
include 'Conectar.php';
require_once 'Cliente.php';

class DAOCliente{
	var $con;

	public function DAOCliente(){
	}

	public function insertar($obj){
		$c = conectar();
		$id = $obj -> getIdCliente();
		$nom = $obj -> getNombre();
		$apellidos = $obj -> getApellidos();
		$dui = $obj -> getDui();

		$sql="insert into empleado values($id, '$nom','$apellidos', '$dui')";
		if(!$c->query($sql)){
				print "Error al ejecutar la sql: ";// se debe mostrar el error
		}else{
			    echo '<script language="javascript">alert("Guardado!");</script>';
		     }
		mysqli_close($c);
	}

	public function eliminar($obj){
		$c=conectar();
		$id=$obj->getId();
		$sql="delete from empleado where id= $id";
		if(!$c->query($sql)){
				print "Error al ejecutar la sql: ";//.$c->mysql_error();
		}else{
			    echo '<script language="javascript">alert("Eliminado!");</script>';
		     }
		mysqli_close($c);
	}

	public function modificar($obj){
		$c=conectar();
		$id=$obj->getId();
		$nombres=$obj->getNombres();
		$apellidos=$obj->getApellidos();
		$dui=$obj->getDui();
		$sql="update empleado set nombres='$nombres', apellidos='$apellidos',dui='$dui' where id=$id";
		if(!$c->query($sql)){
				print "Error al ejecutar la sql: ";// se debe mostrar el error
		}else{
			    echo '<script language="javascript">alert("Modificado!");</script>';
		     }
		mysqli_close($c);
	}

	public function listar(){
		$c = conectar();
		$sql="select * from empleado";
		$resultado = $c->query($sql);
		//mostrar resultado bonito
		print "<table>";
		$ncampos = mysqli_num_fields($resultado);
		//imprime encabezados de la consulta
		print "<tr>";
		for($i=0; $i<$ncampos;$i++){
		  print "<td><b><font color='black'>". mysqli_fetch_field_direct($resultado, $i)->name."</font></b></td>";
		}
		print "</tr>";
		//ahora todo el contenido de la consulta
		print "<tr>";
		for($i=0; $i<$ncampos;$i++){
		 	while($fila=mysqli_fetch_row($resultado)){  //mientras hayan registros
			 	print "<tr>";
						for ($j=0; $j<$ncampos; $j++)
						{
							print "<td>". $fila[$j] . " </td> ";
						}
				print "</tr>";
		 	}
		}
		print "</tr>";
	}
	public function buscar($obj){
		$c=conectar();
		$id=$obj->getId();
		$sql="select * from empleado where id= $id";
		$resultado = $c->query($sql);
		if(!$c->query($sql)){
				print "Error al ejecutar la sql: ";//.$c->mysql_error();
		}else{
			echo "<center><h3><strong>Resultado de la busqueda</strong><h3></center>";
					print "<table>";
					$ncampos = mysqli_num_fields($resultado);
					//imprime encabezados de la consulta
					print "<tr>";
					for($i=0; $i<$ncampos;$i++){
					  print "<td><b><font color='black'>". mysqli_fetch_field_direct($resultado, $i)->name."</font></b></td>";
					}
					print "</tr>";
					//ahora todo el contenido de la consulta
					print "<tr>";
					for($i=0; $i<$ncampos;$i++){
					 	while($fila=mysqli_fetch_row($resultado)){  //mientras hayan registros
						 	print "<tr>";
									for ($j=0; $j<$ncampos; $j++)
									{
										print "<td>". $fila[$j] . " </td> ";
									}
							print "</tr>";
					 	}
					}
					print "</tr>";
		     }
		mysqli_close($c);
	}
}
?>
