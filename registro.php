<!DOCTYPE html>
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
    if ($error == 0) {
      header("Location:login.php");
 }


}






 ?>


<!-- ************************** -->


 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="ESTILO/main.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

     <title>Registro</title>
   </head>
   <body>
     <!-- NAVBAR  -->
       <?php include_once("nav.php"); ?>
       <!-- FINAL DEL NAVBAR  -->
     <div class="row container-registro">
       <div class="col-lg-6 col-sm-12 registro">
         <form class="formulario-de-registro" method="POST" action="registro.php" enctype="multipart/form-data">
           <h2>REGISTRO</h2>
           <br>
           <label for="name">Nombre completo</label>
           <input id="name" type="text" name="name" value="<?=$nombre?>"placeholder="">
           <span class="error"><?=$errorNombre?></span>
           <br>
           <label for="user">Nombre de Usuario</label>
           <input id="user" type="text" name="user" value="<?=$user?>" placeholder="">
           <span class="error"><?=$errorUser?></span>
           <br>
           <label for="email">Email</label>
           <input id="email" type="email" name="email" value="<?=$email?>"placeholder="">
           <span class="error" ><?=$errorMail?></span>
           <br>
           <div class="">
             <label for="foto">FOTO</label>
             <input id="foto" type="file" name="foto" value="">
           </div>
           <span class="error"><?=$errorFoto?><?=$errorExtension?></span>
           <br>
           <label for="password">Clave</label>
           <input id="password" type="password" name="password" placeholder="">
           <span class="error"><?=$errorPassword?></span>
           <br>
           <label for="">Confirmar Clave</label>
           <input id="password_confirm" type="password" name="password_confirm" placeholder="">
           <br>
           <div>
               <input id="ofertas" type="checkbox" name="ofertas">
               <label for="ofertas">Deseo recibir ofertas y novedades</label>
           </div>
           <br>
           <div class="button">
             <button type="submit">ENVIAR</button>
           </div>
         </form>
       </div>
       <div class="col-lg-6 d-none d-sm-block imagen-lateral"></div>
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


