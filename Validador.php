<?php
/**
 *
 */
 $email = $_POST["email"];

class Validador
{
  protected $error = [];
  public function estaVacio($valor) {
    return $valor == "";
  }
  public function cantidadDeLetras($valor){
    return strlen($valor);
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
    } else {
      return "#";
    }
  }
  public function validarPassword($pass1){
    if($this->estaVacio($pass1)){
      return "Debes ingresar un constraseña";
    } else if(!$this->compararPassWord($pass1,password_verify($_POST["password"],$pass1) )){
      return "Has ingresado una contraseña incorrecta.";
    }
  }

}













// FIN DE OBJETO


?>
