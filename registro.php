<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
   <link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <title>Inicio de sesión</title>
</head>

<body>
  
  <!-- INICIO DEL FORMULARIO -->
  <form method="post" action="" class="formulario_administrador"> 
    <h2 class="">BIENVENIDO</h2>

    <?php
      include "modelo/conexionbd.php";
      include "controlador/registro_usuario.php"
    ?>
    
    <div class=""> <!-- cuenta -->
        <div class="">
          <h5>Numero de cuenta</h5>
          <input id="cuenta" type="text" class="formulario_in" name="cuenta">
        </div>
    </div>

    <div class=""> <!-- nombre -->
        <div class="">
          <h5>Nombre</h5>
          <input id="name" type="text" class="formulario_in" name="name">
        </div>
    </div>

    <div class=""> <!-- contraseña -->
        <div class="div">
          <h5>Contraseña</h5>
          <input type="password" id="input" class="formulario_in" name="password">
        </div>
    </div>

    <div class=""> <!-- tipo -->
        <div class="div">
          <h5>Tipo de usuario</h5>
          <input type="int" id="input" class="formulario_in" name="tipo">
        </div>
    </div>
    

    <input name="boton_registro" class="" type="submit" value="REGISTRAR">
  </form>

</body>

</html>