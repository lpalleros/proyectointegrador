<?php
  /** Clase Usuario
   *
   */
  class Usuario
  {
    protected $nombre;
    protected $username;
    protected $email;
    protected $imagen;
    protected $password;
    function __construct($emailIngresado,$passwordIngresada)
    {
      $this->email = $emailIngresado;
      $this->password = $passwordIngresada;
    }
    public function setNombre($nombreIngresado){
      $this->nombre = $nombreIngresado;
    }

    public function getNombre(){
      return $this->nombre;
    }
    public function setUsername($usernameIngresado){
      $this->username = $usernameIngresado;
    }

    public function getUsername(){
      return $this->username;
    }
    public function setEmail($emailIngresado){
      $this->email = $emailIngresado;
    }

    public function getEmail(){
      return $this->email;
    }


  }




?>
