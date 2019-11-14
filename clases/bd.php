<?php
    class bd{
        private $conexion;
        public function __construct(){
            $dsn="mysql:dbname=mydb;host=127.0.0.1;port=3306";
            $user="root";
            $pass="root";
            $opciones = [];

            $this->conexion = new PDO($dns,$user,$pass,$opciones);
        }

        public function registrarUsuario($nombre, $user, $password,$email){
          $consulta = $this->conexion->prepare("INSERT INTO usuarios (id,nombre,usuario,contrasenia,email,imagen)VALUES
          Null,:nombre1, :usuario1, :contrasenia1; :email1; :imagen1;");
          $consulta->bindValue(":nombre1",$nombre);
          $consulta->bindaValue(":usuario1",$user);
          $consulta->bindValue(":contrasenia1", password_hash($password,PASSWORD_DEFAULT));
          $consulta->bindValue(":email1",$email);

          $consulta->execute();

          return $consulta->lastInsertId();
        }

        public function verPerfilUsuario($id){
          $consulta = $this->conexion->query("SELECT * FROM usuarios Where id =".$id);
          return $consulta->fetch(PDO::FETCH_ASSOC);
        }
    }
?>
