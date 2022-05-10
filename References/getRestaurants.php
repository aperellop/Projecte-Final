<?php
    function getRestaurant($name){      

    $mysqli = connectDB();
    $query = "SELECT * From `restaurants` where `name`=('$name')";
    $obj_arr_rest = array();

    //If conection is stablished
    if ($mysqli !== false){
        if ($resultado = $mysqli->query($query)) {

            // /* get objects array */
            while ($obj = $resultado->fetch_object()) {
                array_push($obj_arr_rest, new Restaurant($obj->name, $obj->address, $obj->phone, $obj->description, $obj->pic));
            }
            
            // /* docs things, closing stuff */
            $resultado->close();
            return $obj_arr_rest;
        }
        $mysqli->close();
    } else {
        return false;
    }        
    }
?>

<?php
    //Consulta preparada con SELECT
    $resultado = $db->stmt_init();
    $resultado->prepare('SELECT * FROM personas');
    $resultado->execute();
    $resultado->bind_result($id, $nombre, $activo);

    while ($resultado->fetch() != null){ //Recorre los registros devueltos
        echo $id." ".$nombre." ".$activo."";
    }
    
    $resultado->close();
    $db->close();
    echo "";
?>