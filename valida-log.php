<?php
require 'php/conexion.php';

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $nombre = $_POST['nombre'];



  $consulta = "SELECT * FROM aspirante WHERE usuario='$usuario' and password='$password'";
  $resultado = mysqli_query($conectar, $consulta);

  session_start();


  $filas= mysqli_num_rows($resultado);
  if ($filas>0) {
  $_SESSION['usuario'] = $usuario;
    header("location:bienvenido.php");
  }else {
    echo "Error en la autenticación";
  }
  mysqli_free_result($resultado);
  mysqli_close($conectar);

?>
