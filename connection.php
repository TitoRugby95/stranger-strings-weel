<?php
    $connection= mysqli_connect('localhost', 'root', "", 'base_de_coders');
    if (isset($coneection)){
        return $connection;
    }
?>