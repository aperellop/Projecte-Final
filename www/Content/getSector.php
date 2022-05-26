<?php
    include 'classSector.php';
    include 'connection.php';
?>

<?php
    function getSector($id){
        // Conexión a la base de datos
        $db = connectDB();

        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Sectors WHERE id="'.$id.'";');
        $result->execute();
        $result->bind_result($id, $spot, $name, $description, $approach);

        while ($result->fetch() != null){ //Recorremos los registros devueltos
            //Creamos el array de objetos
            $sector[] = new Sector ($id, $spot, $name, $description, $approach);
        }
        return $sector;
        
        $result->close();
        $db->close();
    }
?>