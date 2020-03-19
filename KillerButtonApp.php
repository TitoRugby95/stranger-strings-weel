    
    <?php
        // Establezco conexión
        $connection= mysqli_connect('localhost', 'root', "", 'base_de_coders');


        // Obtengo el array total      
        $queryAll = "SELECT * FROM coders";
        $resultAll = mysqli_query($connection, $queryAll);
        $arrayAllCoders = array();
        while ($row = mysqli_fetch_array($resultAll))
        {
            $arrayAllCoders[] = array 
            (
                "ID:" => $row['ID'],
                "Nombre:" =>$row['name'],
                "Vida:" =>$row['alive']
            );
        }
 
        // Cuento el array total
        $conteoTotal=count($arrayAllCoders);


         // Obtengo el array de muertos
         $queryDead = "SELECT * FROM coders WHERE alive='0' ";
         $resultDead = mysqli_query($connection, $queryDead);
         $arrayDeadCoders = array();
         while ($row = mysqli_fetch_array($resultDead))
         {
             $arrayDeadCoders[] = array 
             (
                 "ID:" => $row['ID'],
                 "Nombre:" =>$row['name'],
                 "Vida:" =>$row['alive']
             );
         }

 
         // Cuento el array de muertos
         $conteoMuertos=count($arrayDeadCoders);


        // Array de vivos
        $queryAlive = "SELECT * FROM coders WHERE alive='1'";
        $resultAlive = mysqli_query($connection, $queryAlive);
        $arrayAliveCoders = array();
        while ($row = mysqli_fetch_array($resultAlive))
        {
            $arrayAliveCoders[] = array 
            (
                "ID:" => $row['ID'],
                "Nombre:" =>$row['name'],
                "Vida:" =>$row['alive']
            );
        }
        
        // EMPIEZA EL SHOW:

        // Primero lo que no tiene que pasar: que no haya ninguna victima
        // Mensaje de que no hay víctimas (error)
        if($conteoTotal==0){
            echo 'añade una víctima para poder matar a alguien';
            $enlace='index.php';
            echo "<a href='".$enlace."'>Volver</a>";
        }

        // Cuando NO hay posible víctima: conteo total es igual numero de muertos
        // Reiniciar el juego
        if($conteoTotal==$conteoMuertos){
            $queryRevivir="UPDATE coders SET alive='1'";
            // 
            mysqli_query($connection, $queryRevivir);
            // 
            print 'Se reincia la matanza.';
            $enlace='index.php';
            echo "<a href='".$enlace."'>Volver</a>";
        }

        // Cuando hay una posible victima:  que el conteo total no sea igual al conteo de muertos
        // Barajar el array y eliminar la primera posición de la DB
        if($conteoTotal!=$conteoMuertos){

            shuffle ($arrayAliveCoders);
            print 'CODERS SHUFFLED:';
            print_r ($arrayAliveCoders);
            $idAlEiminar = ($arrayAliveCoders[0]['ID:']);
            print 'Ha muerto: '.$idAlEiminar;
            $queryMatar="UPDATE coders SET alive='0' WHERE ID='$idAlEiminar'";
            $result = mysqli_query($connection, $queryMatar);        
            return $result;           
        }
    ?>