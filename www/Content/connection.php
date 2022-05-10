<?php
    function connectDB(){
        $servername = "db_server";
        $username = "aperellop";
        $password = "pwd";
        $database = "thecrackDB";

        // Create connection
        $db = new mysqli($servername, $username, $password, $database);
        // $db->set_charset("utf8");

        // Test connection
        if (mysqli_connect_errno()) {
            printf("Connection Failed: %s\n", mysqli_connect_error());
            return false;
        } else {
            return $db;
        }
    }
?>