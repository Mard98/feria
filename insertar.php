<?php

require 'php/conexion.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

$insertar = "INSERT INTO aspirante(nombre, apellidos, Telefono, usuario, email, password) VALUES
('$nombre', '$apellidos', '$telefono', '$usuario', '$email', '$password')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
  echo "<script> alert('Se registro correctamente');
  window.location='/Trabajo/registro' </script>";

}else {
  echo "<script> alert('No se pudo registrar'); window.history.go(-1);</script>";

}
