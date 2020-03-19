 
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
        print_r ($arrayAllCoders);
        
        // Cuento el array total
        $conteoTotal=count($arrayAllCoders);
        print $conteoTotal;


        ECHO '</HR>';

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
        print_r ($arrayDeadCoders);

        // Cuento el array de muertos
        $conteoMuertos=count($arrayDeadCoders);
        print $conteoMuertos;
?>