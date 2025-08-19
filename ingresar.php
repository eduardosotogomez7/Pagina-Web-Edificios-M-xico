<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->

   <title>Inicio de sesión</title>
</head>

<body>
  <form method="post" action="" class="formulario_administrador">
  <h3 class="formulario"> ¡BIENVENIDO!</h3>

    <?php
      include "modelo/conexionbd.php";
      include "controlador/ingresar_usuario.php";
    ?> 

    <div class="">
        <div class="">
          <h5>Numero de cuenta</h5>
          <input id="user" type="text" class="formulario_in" name="cuenta">
        </div>
    </div>
    <div class="">
        <div class="">
          <h5>Contraseña</h5>
          <input type="password" id="input" class="formulario_in" name="password">
        </div>
    </div>
    

    <div class="text-center">
        <a class="registrar_administrador" href="">Olvidé mi contraseña</a>
        <a class="registrar_administrador" href="registro.php">Registrarse</a>
    </div>
    <a href="informacion.php" class="boton_formulario" >INICIAR SESION</a>
  </form>

</body>

</html>