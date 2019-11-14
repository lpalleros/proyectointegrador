<?php
    class bd{
        private $conexion;
        public function __construct(){
            $dsn="mysql:dbname=mydb;host=127.0.0.1;port=3306";
            $user="root";
            $pass="";
            $opciones = [];

            $this->conexion = new PDO($dns,$user,$pass,$opciones);
        }
    }
?>