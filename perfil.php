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
<div class="perfil1">
<h2>TU PERFIL</h2>
<section class="perfil">
<img src="IMAGENES/contactoDefault.png" alt="contactoFotoDefault">
<div class="BOTONROJO">
             <label for="foto">CAMBIAR FOTO</label>
             <input id="foto" type="file" name="foto" value="">
           </div>
</section> 

<!-- aca va php para cambiar datos de usuario -->
<section class="perfil"> 
<h3>NOMBRE APELLIDO</h3>
<p>Email: nombre.apellido@gmail.com</p>
<p>Fecha de nacimiento: </p>
<p>Dirección: </p>
<p>Teléfono: </p>
<div class="BOTONROJO">
<a href="#">EDITAR DATOS</a>
</div>
<div class="BOTONROJO">
             <a href="#">VER COMPRAS</a>
           </div>
</section>
</div>

<?php
require_once("footer.php");
?>

</body>
</html>

