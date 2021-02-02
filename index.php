<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo-log.css">
    <title></title>
  </head>
  <body >

    <h1>Inicia Sesión</h1>
    <form class="form-login" action="valida-log.php" method="POST">
      <h2 class="form__titulo">Ingresá Ahora</h2>
      <div class="contenedor-inputs">
        <input class="input-48" type="text" name="usuario" placeholder="&#128100; Usuario">
        <input class="input-48" type="password" name="password" placeholder="&#128272; Password">
        <input type="submit" name="Entrar" class="btn-enviar" value="Entrar">
        <p class="form__link">Registrate Ahora <a href="registro.php">Ingresa aquí</a></p><br>
        <p class="form__link">REGISTRO DE ESCUELAS <a href="FORMULARIO.php">Ingresa aquí</a></p>
      </div>
    </form>
  </body>
</html>
