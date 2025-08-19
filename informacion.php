<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <title>Inicio de sesión</title>
</head>

<body>
    <!-- INICIO DEL FORMULARIO -->
  <form method="post" action="" class="formulario_administrador"> 
    <h2 class="">INGRESA LOS DATOS LOCO</h2>

    <?php
      include "modelo/conexionbd.php";
      include "controlador/informacion_tema.php"
    ?>
    
    <div class=""> <!-- cuenta -->
        <div class="">
          <h5>¿Que wea desea insertar?</h5>
          <input name="boton_biografia" class="formulario_in" type="submit" value="Biografías">
          <input name="boton_edificio" class="formulario_in" type="submit" value="Edificios">
          <input name="boton_urbano" class="formulario_in" type="submit" value="Espacios Urbanos">
        </div>
    </div>
    
  </form>

</body>

</html>