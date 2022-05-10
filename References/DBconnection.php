<?php
    function connectDB(){
        $servername = "db_server";
        $username = "aperellop";
        $password = "pwd";
        $db = "RestaurantsDB";

        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $db);
        $mysqli->set_charset("utf8");

        // Test connection
        if (mysqli_connect_errno()) {
            printf("Connection Failed: %s\n", mysqli_connect_error());
            return false;
        } else {
            return $mysqli;
        }
    }
?>