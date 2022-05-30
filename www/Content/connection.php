<?php
    function connectDB(){
        $servername = "db_server";
        $username = "aperellop";
        $password = "pwd";
        $database = "TheCrackDB";

        // Creación de la conexion
        $db = new mysqli($servername, $username, $password, $database);

        // Test conexión
        if (mysqli_connect_errno()) {
            printf("Connection Failed: %s\n", mysqli_connect_error());
            return false;
        } else {
            return $db;
        }
    }
?>