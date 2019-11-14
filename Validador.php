<?php
/**
 *
 */
 $email = $_POST["email"];


class Validador
{
  private $cantidadMinimaLetras = 4;
  protected $error = [];


  public function estaVacio($valor) {
    return $valor == "";
  }

  public function cantidadDeLetras($valor){
    return strlen($valor) < $this->cantidadMinimaLetras;

  }

  public function getCantidadMinimaLetras(){
    return $this->cantidadMinimaLetras;
  }

  public function formatoEmail($emailIngresado){
      return filter_var($emailIngresado, FILTER_VALIDATE_EMAIL);
    }
  public function compararPassword($pass1,$pass2){
    return $pass1 == $pass2;
  }
  public function validarEmail($email){
    if($this->estaVacio($email)){
      return "Debes ingresar tu correo electrónico.";
    } else if(!$this->formatoEmail($email)){
      return "Debes ingresar un formato de correo electrónico válido.";
    }
      return "#";
    }

  public function validarPasswordRegistro($pass1,$pass2){
    if($this->estaVacio($pass1)){
      return "Debes ingresar un constraseña";
    }else if (!$this->compararPassword($pass1,$pass2)) {
    return "Las contraseñas deben ser Iguales";
  }else{ $pass = password_hash($pass1, PASSWORD_DEFAULT);
    }
    return "#";
  }

  public function validarPassword($pass1){
    if($this->estaVacio($pass1)){
      return "Debes ingresar un constraseña";
    } else if(!$this->compararPassWord($pass1,password_verify($_POST["password"],$pass1) )){
      return "Has ingresado una contraseña incorrecta.";
    }
  }
  public function validarNombre($nombre){
    if($this->estaVacio($nombre)){return "Ingrese su Nombre";
    }else if ($this->cantidadDeLetras($nombre)){
      return "El nombre debe contener al menos ". $this->getCantidadMinimaLetras()." Letras";
    } return "#";
  }
  public function validarUsername($user){
    if($this->estaVacio($user)){return "Ingrese su Nombre de Usuario";
    }else if ($this->cantidadDeLetras($user)){
      return "El nombre de usuario debe contener al menos ". $this->getCantidadMinimaLetras()." Letras";
    }return "#";
  }

  public function validarFoto($foto){
    if ($foto["error"]!= 0) {
         return  "Hubo un error al cargar la Foto";
      }
      else {
          $ext = pathinfo($foto["name"],PATHINFO_EXTENSION);

          if($ext!= "jpg" && $ext != "jpeg" && !$ext != "png"){
            return  "El formato de la Foto debe ser PNG, JPEG o JPG";
          }return "#";
        }

      }











}


?>
