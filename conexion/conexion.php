<?php

    $host = 'localhost';
    $usuario = 'root';
    $clave = '';
    $base = 'registroweb';

    $cn = mysqli_connect($host,$usuario,$clave,$base);
/*
    if($cn){
        echo 'conexion Exitosa';
    }else{
        echo 'Error de conexion';
    }

    mysqli_close($cn);
*/

class Conexion{

    private $host;
    private $usuario;
    private $password;
    private $database;

    function __construct(){

        $this-> host = "localhost";
        $this-> usuario = "root";
        $this-> password = "";
        $this-> database = "registroweb";

    }

    function getHost(){
        return $this->host;
    }

    function getUsuario(){
        return $this->usuario;
    }

    function getPassword(){
        return $this->password;
    }

    function getDatabase(){
        return $this->database;
    }

    function setHost($host){
        $this->host = $host;
    }

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function setDatabase($database){
        $this->database = $database;
    }

    //Funciones
    public function connect(){
        
    }


}

?>