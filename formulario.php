<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos-esc.css">
    <title></title>
  </head>
  <body>

    <h1>Registro de Escuelas</h1>
    <form class="form-register" action="ingresar.php" method="POST">
      <h2 class="form__titulo">Crea tu cuenta</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de la institucion*"
        value="<?php if (isset($nombre)) echo "$nombre"; ?>" class="input-100" required>
        <input type="text" name="CCT" id="apellidos" placeholder="CCT*"
        value="<?php if (isset($apellidos)) echo "$apellidos"; ?>" class="input-48"  required>
        <input type="text" name="telefono" id="telefono" placeholder="Telefono*"
        value="<?php if (isset($telefono)) echo "$telefono"; ?>" class="input-48"  required>
        <input type="text" name="direccion" id="email" placeholder="Direcciòn* (URL)"
        value="<?php if (isset($email)) echo "$email"; ?>" class="input-100"  required>

        <input type="email" name="email" id="email" placeholder="Email*"
        value="<?php if (isset($email)) echo "$email"; ?>" class="input-100"  required>
        <br>
        <label for="">Nivel Educativo</label>
      </br>
      <ul class="lista">
        <li> <input type="checkbox" id="primaria" name="checkbox[]" value="Primaria" >
              <label for="primaria"> Primaria</label><br></li>

        <li><input type="checkbox" id="secundaria" name="checkbox[]" value="secundaria" >
        <label for="secundaria"> Secundaria</label><br></li>


        <li><input type="checkbox" id="preparatoria" name="checkbox[]" value="preparatoria" >
        <label for="preparatoria"> Preparatoria</label><br></li>


        <li><input type="checkbox" id="universidad" name="checkbox[]" value="universidad" >
        <label for="universidad"> Universidad</label><br></li>


      </ul><br><br>
        <input type="submit" name="submit" value="Registrar" class="btn-enviar">
        <p class="form__link">¿Ya tienes cuenta? <a href="index.php">Ingresa aquí</a></p>
        <?php


         echo "HOLA";
         ?>
      </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
