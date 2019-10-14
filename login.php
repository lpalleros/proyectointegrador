<?php
session_start();
if(isset($_COOKIE["username"])){
    echo "<h1>Hay una cookie guardada</h1>";
    $_SESSION["username"] = $_COOKIE["username"];
    header("Location:index.php");
}
$email = "";
$password = "";
$usuariosEnJSON = file_get_contents("usuarios.json");
$usuarios = json_decode($usuariosEnJSON,true);
if($_POST){
  // persistencia de los datos ingresados por el usuario.
  $email = $_POST["email"];
  $password = $_POST["password"];

  // validaciones en caso de ingresar un campo vacio.
  if($_POST["email"] == "") {
    $error[0] = "alert alert-danger";
  }
  if ($_POST["password"] == "") {
    $error[1] = "alert alert-danger";
  }


  // pido el correo que ingreso el usuario y lo guardo en la variable.
  $correoDelUsuario = $_POST["email"];


  if($_POST["recordarme"] != null){
      setCookie("username",$_POST["username"]);
    }
// recorro el array desde el archivo json para buscar un usuario registrado.
  foreach ($usuarios as $usuario) {
    if ($correoDelUsuario == $usuario["email"]) {
      echo "<h2>Encontré un correo que coincide</h2>";
      if (password_verify($_POST["password"],$usuario["password"])) {
        $_SESSION["username"] = $usuario["nombre"];
        header("Location:index.php");
      } else {
        echo "<h2>La contraseña NO coincide con el usuario.</h2>";

      }
    }
  }

}

include_once("nav.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="ESTILO/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <title>Iniciar sesión</title>
  </head>
  <body>


    <div class="row container-registro">
      <div class="col-lg-6 d-none d-sm-block imagen-lateral-inicio"></div>
      <div class="col-lg-6 col-sm-12 registro">
        <form class="formulario-de-registro" method="post">
          <h2>INICIAR SESIÓN</h2>
          <br>
          <label for="email">Email</label>
          <input id="email" type="email" name="email" class="<?=$error[0]?>" value="<?=$email?>">
          <br>
          <label for="password">Clave</label>
          <input id="password" type="password" name="password" class="<?=$error[1]?>" value="<?=$password?>">
          <br>
          <div class="checkbox-recordarme">
              <input id="recordarme"type="checkbox" name="recordarme">
              <label for="recordarme">Recordarme</label>
          </div>
          <br>
          <div class="button">
            <button type="submit">Entrar</button>
          </div>
          <br>
          <div class="FORGOTPASS">
            <a href="#">Olvidé mi clave</a>
          </div>
        </form>
      </div>

    </div>


    <footer class="row">
      <section class="col-md-7 col-xs-12  row listas">
          <article class="col-md-2">
              <a href="#"><h5>Tienda</h5></a>
              <ul>
                  <li><a href="#">Monopatines</a></li>
                  <li><a href="#">Accesorios</a></li>
              </ul>
          </article>
          <article class="col-md-2">
              <a href="faq.html"><h5>Faq</h5></a>
          </article>

          <article class="col-md-2">
              <a href="mailto:contacto@rollin.com"><h5>Contacto</h5></a>
          </article>
      </section>
      <section class="col-md-5  col-xs-12 row logo">
          <article class="col-12">
              <a href="index.html"><h5 style="text-align: right">ROLLIN'</h5></a>
              <a href="https://goo.gl/maps/x6Stu22dYpuu1bjT8" target="_blank"><p style="text-align: right">Av. Lorem Ipsum Dolor 2563 - Winterfeld - Narnia</p></a>
          </article>
      </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
