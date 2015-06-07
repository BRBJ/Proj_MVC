<?php
require_once 'Model/Cliente.php'
if (isset($_POST["aceptar"])) {
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
  }else {
    print("<script>alert('No coinciden las contraseñas')</script>");
  }

}
?>
