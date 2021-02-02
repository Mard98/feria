
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">

    <title></title>
    <script src="js/validacion.js"></script>
  </head>
  <body>

    <h1>Registrate</h1>
    <form class="form-register" action="insertar.php" method="POST">
      <h2 class="form__titulo">Crea tu cuenta</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre(s)*"
        value="<?php if (isset($nombre)) echo "$nombre"; ?>" class="input-48" required>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos*"
        value="<?php if (isset($apellidos)) echo "$apellidos"; ?>" class="input-48"  required>
        <input type="text" name="telefono" id="telefono" placeholder="Telefono*"
        value="<?php if (isset($telefono)) echo "$telefono"; ?>" class="input-48"  required>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario*"
        value="<?php if (isset($usuario)) echo "$usuario"; ?>" class="input-48"  required>
        <input type="email" name="email" id="email" placeholder="Email*"
        value="<?php if (isset($email)) echo "$email"; ?>" class="input-48"  required>
        <input type="password" name="password" id="password" placeholder="Password*" class="input-48"  required>
        <input type="submit" name="submit" value="Registrar" class="btn-enviar">
        <p class="form__link">¿Ya tienes cuenta? <a href="index.php">Ingresa aquí</a></p>
        <?php

         if (isset($_POST['submit'])) {
           $nombre = $_POST['nombre'];
           $apellidos = $_POST['apellidos'];
           $telefono = $_POST['telefono'];
           $usuario = $_POST['usuario'];
           $email = $_POST['email'];
           $password = $_POST['password'];

           $campos = array();

           if($nombre == ""){
             if ($nombre == "") {
               array_push($campos, "El campo Password no puede estar vacio");
             }
             if ($apellidos == "") {
               array_push($campos, "El campo apellidos no puede estar vacio ");
             }
             if ($telefono == "") {
               array_push($campos, "El campo telefono no puede estar vacio ");
             }
             if ($usuario == "" || strlrn($usuario < 10)) {
               array_push($campos, "El campo usuario no puede estar vacio. debe contener menos de 10 caracteres ");
             }
             if ($email == "" || strpos($email, "@") === false) {
               array_push($campos, "Ingresa un correo electronico valido.");
             }
             if ($password == "" || strlen($password < 8)) {
               array_push($campos, "La contraseña esta vacia, debe de contener menos de 8 caracteres");
             }
             if (count($campos) > 0) {
               echo "<div class='error'>";
               for ($i=0; $i < count($campos); $i++ ) {
                 echo "<li>".$campos[$i]."</div>";
               }
             }else{
               echo "<div class='correcto'> Datos Correctos";
             }
           }
         }
         echo "HOLA";
         ?>
      </div>

    </form>
  </body>
</html>
