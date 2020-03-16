<?php 
    require('../models/modelo.php');
    $per=new personas_model();
    $datos=$per->get_personas();
    echo json_encode($datos);
?>