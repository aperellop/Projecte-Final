<?php
    include 'classSpot.php';
    include 'connection.php';
?>

<?php
    function getSpots(){
        // Conexión a la base de datos
        $db = connectDB();

        // Preparamos y ejecutamos la query para recoger todos los Spots
        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Spots;');
        $result->execute();
        $result->bind_result($id, $name, $description, $approach, $conditions, $photography);

        while ($result->fetch() != null){ //Recorremos los registros devueltos
            //Creamos el array de objetos
            $spot[] = new Spot ($id, $name, $description, $approach, $conditions, $photography);
        }
        return $spot;
        
        $result->close();
        $db->close();
    }
?>