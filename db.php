<?php

class Conexion{
    
    private $conexion;

    function __construct(){
        $this->conexion = new mysqli('localhost','root','12345678','pruebas');
        if (!$this->conexion)
            die("error: " . mysqli_connect_error());            
    }

    function consulta($consulta){
        return $this->conexion->query($consulta);
    }

}

?>
