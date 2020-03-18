<?php
namespace App;
final class ConnectionApp
{
    public function connect(){
        $conexion= mysqli_connect('localhost', 'root', "", 'base_de_coders');
        if (isset($conexion)){
            return 'Conectado!';
        }
    }
}
?>
