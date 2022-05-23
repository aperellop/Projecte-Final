<?php
    include 'classSector.php';
    include 'connection.php';
?>

<?php
    function getSectors(){
        // Conexión a la base de datos
        $db = connectDB();

        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Sectors WHERE spot='.$Spot.';');
        $result->execute();
        $result->bind_result($spot, $name, $description, $approach);

        while ($result->fetch() != null){ //Recorremos los registros devueltos
            
            //Creamos el array de objetos
            $sector[] = new Sector ($spot, $name, $description, $approach);
        }
        return $sector;
        
        $result->close();
        $db->close();
    }
?>