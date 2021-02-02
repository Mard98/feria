<?php
  session_start();


  $varsesion = $_SESSION['usuario'];
  if ($varsesion == null || $varsesion = '') {
    echo 'Usted no tiene autorización';
    die();
  }
  session_destroy();

  header("Location:index.php");

?>
