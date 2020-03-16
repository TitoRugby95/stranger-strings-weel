<?php

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "beta");

        if ($conexion->connect_error)
            die($conexion->connect_error);

        //$sql = "SELECT `name` FROM coders ORDER BY idteam DESC";

        return $conexion;
    }
}


?>
