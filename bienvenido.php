<?php
  session_start();

  $varsesion = $_SESSION['usuario'];
  if ($varsesion == null || $varsesion = '') {
    echo 'Usted no tiene autorización';
    die();
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>BIENVENIDO <?php echo $_SESSION['usuario']; ?></h1>
    <a href="logout.php">Cerrar Sesión</a>

  </body>
</html>
