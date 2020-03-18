<?php
     $conexion= mysqli_connect('localhost', 'root', "", 'base_de_coders');
     $insertar=$_POST['nombre'];
     $add="INSERT INTO coders values('','$insertar', '1')";
     $query=mysqli_query($conexion, $add);
?>

<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <title>Vicitma Añadida</title>
</head>
<body>
     <h1>VICTIMA AÑADIDA</h1>
     <a href="INDEX.PHP">Volver</a>
</body>
</html>

