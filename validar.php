<?php

if (isset($_POST['submit'])) {
  if (empty($nombre)) {
    echo "<h3 class='error'> * Agrega tu nombre </h3>";
  }else {
    if (strlen($nombre) > 20) {
      echo "<h3 class='error'> * Tu nombre es muy largo </h3>";
    }
  }

  if (empty($apellidos)) {
    echo "<h3 class='error'> * Agrega tus apellidos </h3>";
  }

  if (empty($telefono)) {
    echo "<h3 class='error'> * Agrega tu nombre </h3>";
  }else {
    if (!is_numeric($telefono)) {
      echo "<h3 class='error'> * El telefono debe de ser solo numeros </h3>";
    }
  }

  if (empty($usuario)) {
    echo "<h3 class='error'> * Agraga tu usuario </h3>";
  }else {
    if (strlen($usuario) > 10) {
      echo "<h3 class='error'> * Tu usuario es muy largo </h3>";
    }
  }

  if (empty($email)) {
    echo "<h3 class='error'> * Agrega tu email </h3>";
  }else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<h3 class='error'> * Email invalido </h3>";
    }
   filter_var($email, FILTER_SANITIZE_STRING);
  }
}


 ?>
