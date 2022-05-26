<?php
    include 'classRoute.php';
    // include 'connection.php';
?>

<?php
    function getRoutes($Sector){
        // Conexión a la base de datos
        $db = connectDB();

        // Preparamos y ejecutamos la query para recoger todas las rutas que pertenecen al $Sector
        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Routes WHERE sector="'.$Sector.'";');
        $result->execute();
        $result->bind_result($id, $sector, $name, $description, $grade);

        while ($result->fetch() != null){ //Recorremos los registros devueltos
            //Creamos el array de objetos
            $route[] = new Route ($id, $sector, $name, $description, $grade);
        }
        return $route;
        
        $result->close();
        $db->close();
    }
?>