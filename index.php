<?php
    $conexion= mysqli_connect('localhost', 'root', "", 'base_de_coders');
?>

<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <title>Wheel Of Doom</title>
</head>
<body>
    <h1>Wheel Of Doom | Stranger Strings</h1>

    <div class="boton">
    </div>

    <div class="formulario">
    <h2>Añadir victima</h2> 
       <form method="POST" action="guardar.php">
            <label>Nueva victima:</label><br>
            <input type ="text" name="nombre" placeholder="Nombre"><br><br>
            <input type="submit" name="" placeholder="Añadir">          
       </form>

    </div>

    <div class= "vivos">
    <h2>Lista de vivos</h2>
         <table>
             <tr>
                  <th>Coder</th>
            </tr>
                 <?PHP 
                     $sql="SELECT name FROM coders WHERE alive='1'";
                     $result=mysqli_query($conexion,$sql);
                     while($mostrar=mysqli_fetch_array($result)){
                 ?>
             <tr>
             <td><?php echo $mostrar['name']?></td>
             </tr>
             <?php
             }
             ?>
    </table>
    </div>

    <div class= "muertos">
         <h2>Lista de muertos</h2>
         <table>
             <tr>
                <th>Coder</th>
            </tr>
                 <?PHP 
                 $sql="SELECT name FROM coders WHERE alive='0'";
                 $result=mysqli_query($conexion,$sql);
                 while($mostrar=mysqli_fetch_array($result)){
             ?>
             <tr>
            <td><?php echo $mostrar['name']?></td>
            </tr>
             <?php
            }
            ?>
         </table>
    </div>
 
</body>
</html>