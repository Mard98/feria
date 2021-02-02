<?php

require 'php/conexion.php';

$CCT = $_POST['CCT'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$checkbox = $_POST['checkbox'];
 foreach ($checkbox as $key => $value) {
   $nivel = "INSERT INTO escuelas SET nivel = '$value' WHERE CCT = '.$_POST['CCT']'";
   $query2 = mysqli_query($conectar, $nivel);
 }

$insertar = "INSERT INTO escuelas(CCT,nombre, telefono, direccion, email) VALUES
('$CCT','$nombre', '$telefono', '$direccion', '$email')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
  echo "<script> alert('Se registro correctamente');
  window.location='/Trabajo/registro/' </script>";

}else {
  echo "<script> alert('No se pudo registrar'); window.history.go(-1);</script>";

}
