<?php
    include './Structure/navbar.php';
    include 'class.php';
    include 'connection.php';
?>

<?php
    navbar();
?>

<?php
    function getSpots(){
        // Conexión a la base de datos
        $db = connectDB();

        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Spots;');
        $result->execute();
        $result->bind_result($name, $description, $approach, $conditions, $photography);

        while ($result->fetch() != null){ //Recorremos los registros devueltos
            
            //Creamos el array de objetos
            $spot[] = new Spot ($name, $description, $approach, $conditions, $photography);
        }
        return $spot;
        
        $result->close();
        $db->close();
    }
?>