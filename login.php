<?php
session_start();
if(isset($_COOKIE["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
}
$email = "";
$password = "";
$mensajeDeErrorEmail = "";
$mensajeDeErrorPassword = "";

// pedido de archivo JSON para comparar usuarios y contraseñas

$usuariosEnJSON = file_get_contents("usuarios.json");
$usuarios = json_decode($usuariosEnJSON,true);

// comienzo la validación de usuario una vez que envía el formulario por primera vez

if($_POST){
  // persistencia de los datos ingresados por el usuario en el formulario para su correción.
  $email = $_POST["email"];
  $password = $_POST["password"];


  // validaciones en caso de ingresar un campo vacio.

  if($_POST["email"] == "") {
    $error[0] = "alert alert-danger";
    $mensajeDeErrorEmail = "Debes ingresar tu correo electrónico.";
  }

  // validacion en caso de colocar contraseña vacia.
  if ($password == "" || strlen($password) < 4) {
    $error[1] = "alert alert-danger";
    $mensajeDeErrorPassword = " Debes ingresar un constraseña";
  }



  // pido el correo que ingreso el usuario y lo guardo en la variable.
  $correoDelUsuario = $_POST["email"];


  if(isset($_POST["recordarme"])){
      if ($_POST["recordarme"] != null) {
        if(isset($_SESSION["username"])){
            //echo "<h1>Hay una cookie guardada</h1>";
            setCookie("username",$_SESSION["username"]);
        }

      }
    }
// recorro el array desde el archivo json para buscar un usuario registrado.
  foreach ($usuarios as $usuario) {
    if ($correoDelUsuario != null) {
      if ($correoDelUsuario == $usuario["email"]) {
        $error[0] = "alert alert-success";
        $mensajeDeErrorEmail = "";
        if (password_verify($_POST["password"],$usuario["password"])) {
            $_SESSION["username"] = $usuario["nombre"];
            if(isset($_POST["recordarme"])){
                if ($_POST["recordarme"] != null) {
                      setCookie("username",$_SESSION["username"]);
                }
            }
            header("Location:index.php");
            break;
          }  else {
            $error[1] = "alert alert-danger";
            $mensajeDeErrorPassword = "Has ingresado una contraseña incorrecta.";
            break;
          }
      } else {
        $error[0] = "alert alert-danger";
        $mensajeDeErrorEmail = "El usuario no está registrado.";
        $password= "";
        $mensajeDeErrorPassword = "";

      }
    }
  }

}

require_once("nav.php");
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
          <span style="color:#721c24;"><?=$mensajeDeErrorEmail?></span>
          <br>
          <label for="password">Clave</label>
          <input id="password" type="password" name="password" class="<?=$error[1]?>" value="<?=$password?>">
          <span style="color:#721c24;"><?=$mensajeDeErrorPassword?></span>
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

    <?php require_once("footer.php"); ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
