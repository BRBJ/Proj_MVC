<?php
require_once 'Model/Cliente.php';
if (isset($_POST["acept"])) {
  $pass = $_POST["pass"];
  $confPass = $_POST["con-pass"];
  if ($pass==$confPass) {
    $cliente = new Cliente();
    $id = "";
    $nombre = $_POST["nom"];
    $edad = $_POST["edad"];
    $tel = $_POST["tel"];
    $correo = $_POST["mail"];
    $nac = $_POST["nacio"];
    $cliente -> setIdCliente($id);
    $cliente -> setNombre($nombre);
    $cliente -> setEdad($edad);
    $cliente -> setTelefono($tel);
    $cliente -> setCorreo($correo);
    $cliente -> setPass($pass);
    $cliente -> setNacionalidad($nac);
    $cliente -> agregarDatos($id, $nombre, $edad, $tel, $correo, $pass, $nac);
  }else {
    print("<script>alert('No coinciden las contraseñas')</script>");
  }


}
require 'Views/index.php';
?>
