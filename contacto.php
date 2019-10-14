<?php
//variables para Persistencia
$user="";
$nombre ="";
$email = "";
//Errores
$errorNombre = "";
$errorMail ="";
$errorUser="";
$errorPassword="";
$errorFoto="";
$errorExtension="";
//para sumar los errores tengo esta variable
$error = 0;

if ($_POST) {


    if ($_POST) {
        //persistencia
        $user= $_POST["user"];
        $nombre = $_POST["name"];
        $email = $_POST["email"];
        }
        //validacion
    if ($_POST) {
      if($_POST["name"] == "") {
        $errorNombre = "Ingrese su Nombre";
        $error++;
      }

      if ($_POST["email"] == "") {
        $errorMail = "Debe completar este campo";
        $error++;
      }
      else if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) == false  ){
        $errorMail = "El Mail no tiene el formato correcto";
        $error++;
      }

      if($_POST["user"] == "") {
        $errorUser = "Ingrese un Nombre de Usuario";
        $error++;
      }

      else if (strlen($_POST["user"]) < 4) {
        $errorUser = "El usuario debe tener al menos 4 caracteres";
        $error++;
      }

      if ($_POST["password"] == "" || $_POST["password_confirm"] == "" ) {
        $errorPasword = "Debe completar este Campo";
        $error++;
      }
      else if ($_POST["password"] != $_POST["password_confirm"]) {
        $errorPassword = "Las contraseñias tienen que ser iguales";
        $error++;
      }
      else{ $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
      }
    }
    //VALIDACION FOTO y Subida
    if ($_FILES) {
      if ($_FILES["foto"]["error"]!= 0) {
        $errorFoto = "Hubo un error al cargar la Foto";
        $error++;
      }
      else {
        $ext = pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);

        if($ext!= "jpg" && $ext != "jpeg" && !$ext != "png"){
          $errorExtension = "El formato de la Foto debe ser PNG, JPEG o JPG";
          $error++;
        }
        else {
          move_uploaded_file($_FILES["foto"]["tmp_name"],"archivos/".$_POST["name"].".".$ext);
        }
      }
    }
        //CReacion de usuario nuevo
    if ($error == 0) {
      $usuarioNuevo = [
        "nombre" => $_POST["name"],
        "usuario"=> $_POST["user"],
        "email"=> $_POST["email"],
        "password"=> $pass
      ];
      var_dump($usuarioNuevo);
  //CARGA DE USUARIO NUEVO EN JASON
      $archivos = file_get_contents("usuarios.json");

      $usuarios = json_decode($archivos, true);

      $usuarios[]=$usuarioNuevo;

      $jsonfinal = json_encode($usuarios);

      file_put_contents("usuarios.json",$jsonfinal);
    }

    //Redirigir
    //if ($error == 0) {
    //  header("Location:"
// }


}






 ?>


<!-- ************************** -->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto - Rollin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/main.css">
</head>
<body>
  <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-toggleable-md ">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="imagenes/logo_fondo_transparente.png" width="120px" id="logo">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#Content" aria-controls="Content" aria-expanded="false" aria-label="Toggle navigation" id="toggleButton">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="Content" >
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.html">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrase.html">Registrarse</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="faq.html" >FAQ</a>
            </li>
          </ul>
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="imagenes/vector_mochila.png" width="30px" id="logo">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FINAL DEL NAVBAR  -->

    <!--
    <header>

    </header>
    -->
    <div class="container-fluid">
        <div class="row portadaContacto">
            <div class="col-md-10 recuadroContacto">
              <div class="col-md-12 col-xs-12">
                <h2>CONTACTO</h2>  
              </div>
              <section class="row">
                <article class="col-md-6 col-xs-12">
                  <form class="formulario-de-contacto" method="POST" action="contacto.php">
                    <label for="name">Nombre</label>
                    <input id="name" type="text" name="name" value="<?=$nombre?>"placeholder="">
                    <br>
                    <span class="error"><?=$errorNombre?></span>
                    <br>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="<?=$email?>"placeholder="">
                    <br>
                    <span class="error" ><?=$errorMail?></span>
                    <br>
                    <label for="email">Mensaje</label>
                    <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
                    <!-- <input id="email" type="email" name="email" value="<?=$email?>"placeholder=""> -->
                    <br>
                    <span class="error" ><?=$errorMail?></span>
                    <br>
                    <div class="button-contacto col-md-4 col-xs-10">
                      <input type="submit" name="" value="ENVIAR">
                    </div>

                  </form>
                </article>
                <article class="col-md-6 col-xs-12">
                  <h5>ROLLIN'</h5>
                  <h6 class="tel-contacto">0800-555-1916</h6>
                  <p>Av. Lorem Ipsum Dolor 2563 - Winterfeld - Narnia</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d976.7624670938173!2d-58.45068527079769!3d-34.568130815979046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c54d0c9049%3A0xf6009a37c1e07018!2sControl%20Remoto%20Total!5e0!3m2!1ses-419!2sar!4v1571003545593!5m2!1ses-419!2sar" width="100%" height="280px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </article>
              </section>
            </div>
            
        </div>
       

    
        
    <footer class="row">
        <section class="col-md-7 col-xs-12  row listas">
            <article class="col-md-2 col-xs-12">
                <a href="#"><h5>Tienda</h5></a>
                <ul>
                    <li><a href="#">Monopatines</a></li>
                    <li><a href="#">Accesorios</a></li>
                </ul>
            </article>
            <article class="col-md-2 col-xs-12">
                <a href="faq.html"><h5>Faq</h5></a> 
            </article>

            <article class="col-md-2 col-xs-12">
                <a href="contacto.php"><h5>Contacto</h5></a>
            </article>
        </section>
        <section class="col-md-5  col-xs-12 row logo">
            <article class="col-12">
                <a href="index.html"><h5>ROLLIN'</h5></a>
                <a href="https://goo.gl/maps/x6Stu22dYpuu1bjT8" target="_blank"><p>Av. Lorem Ipsum Dolor 2563 - Winterfeld - Narnia</p></a>
            </article>
        </section>

    </footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
