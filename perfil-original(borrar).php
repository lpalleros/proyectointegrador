<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil - Rollin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/main.css">
</head>
<body>
<?php
require_once("nav.php");
?>
<div class="container-fluid">
  
    <div class="perfil">
    <h2>TU PERFIL</h2>
    <section class="perfil1">
      <img src="IMAGENES/contactoDefault.png" alt="contactoFotoDefault">
      <div class="BOTONROJO botonPerfil">
        <label for="foto">CAMBIAR FOTO</label>
        <input id="foto" type="file" name="foto" value="">
      </div>
    </section> 

    <!-- aca va php para cambiar, eliminar datos de usuario -->
    <section class="perfil1"> 
      <h3>NOMBRE APELLIDO</h3>
      <p>Email: nombre.apellido@gmail.com</p>
      <p>Fecha de nacimiento: </p>
      <p>Dirección: </p>
      <p>Teléfono: </p>
      <div class="BOTONROJO botonPerfil">
        <a href="#">EDITAR DATOS</a>
      </div>
      <div class="BOTONROJO botonPerfil">
        <a href="#">VER COMPRAS</a>
      </div>
      <div class="BOTONROJO botonPerfil" id="botonEliminarCuenta">
        <a href="#">ELIMINAR CUENTA</a>
      </div>           
  </section>           

  </div>
</div>

<!-- col-lg-6 col-xs-12 -->

<?php
require_once("footer.php");
?>

</body>
</html>



