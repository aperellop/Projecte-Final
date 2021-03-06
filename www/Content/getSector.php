<?php
    include 'classSector.php';
    include 'connection.php';
?>

<?php
    function getSector($id){
        // Conexión a la base de datos
        $db = connectDB();

        // Preparamos y ejecutamos la query para recoger el sector seleccionado
        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Sectors WHERE id="'.$id.'";');
        $result->execute();
        $result->bind_result($id, $spot, $name, $description, $approach);

        while ($result->fetch() != null){ //Recorremos los registros devueltos
            //Creamos objeto
            $sector = new Sector ($id, $spot, $name, $description, $approach);
        }
        return $sector;
        
        $result->close();
        $db->close();
    }
?>