<?php
    // include 'class.php';
    include 'connection.php';
?>

<?php
    // Task Restaurant1

    // function getRestaurants(){
    //     $restaurant1 = new Restaurant ("La Tertulia Café Teatre", "Carrer d'Ausiàs March, 19, 07003 Palma, Illes Balears", "971 09 30 74", "Llonguets i pa amb olis a rompre.", "./Resources/Photographies/LaTertulia.jpg");
    //     $restaurant2 = new Restaurant ("Es Llogaret", "Carrer Germans García Peñaranda, 6, 07010 Palma, Illes Balears","871 91 04 04", "Ens agrada oferir qualitat, gust i familiaritat a bon preu.", "./Resources/Photographies/EsLlogaret.png");
    //     $restaurant3 = new Restaurant ("Es Cruce", "Ctra. de Palma, 0, 07250 Vilafranca de Bonany, Illes Balears", "971 56 00 73","Especialiestes en el Tumbet de xot, la sipi amb salsa, caragols, porcella...", "./Resources/Photographies/EsCruce.jpg");
    //     $restaurant4 = new Restaurant ("Natur Poke", "Carrer Josep Anselm Clavé 1, 07002, Palma", "971 53 68 39", "Plat de menjar d'origen hawaià amb influències de la gastronomia japonesa que permet barrejar al gust una gran varietat d'aliments naturals, frescos, rics, nutritius i sans.", "./Resources/Photographies/NaturPoke.jpg");
    //     $restaurant5 = new Restaurant ("Coyunda", "Camí dels Reis, 209, Palma de Mallorca, Illes Balears", "971 20 98 56", "El nostre objectiu es oferir la millor qualitat i servei durant 24 hores cada dia de la setmana i tot l'any, els nostres productes són tots frescos i de primera qualitat.", "./Resources/Photographies/Coyunda.jpg");

    // $restaurants = [$restaurant1, $restaurant2, $restaurant3, $restaurant4, $restaurant5];

    // return $restaurants;
    // }
?>

<?php
    // Task Restaurants2 with database connection
    function getSpots(){
        // Connection to database
        $db = connectDB();

        $result = $db->stmt_init();
        $result->prepare('SELECT * FROM Spots;');
        $result->execute();
        $result->bind_result($name, $description, $approach, $conditions, $photography);

        while ($result->fetch() != null){ //Recorre los registros devueltos
            // echo $name." ".$description." ".$address." ".$phonenumber." ".$photography." ";

            $spot[] = new Spot ($name, $description, $approach, $conditions, $photography);
        }
        return $spot;
        
        $result->close();
        $db->close();
    }

    // function getSpot($i){
    //     // Connection to database
    //     $db = connectDB();

    //     // print_r($db);

    //     $result = $db->stmt_init();
    //     $result->prepare('SELECT * FROM Restaurants WHERE restid = '.$i.';');
    //     $result->execute();
    //     $result->bind_result($restid, $name, $description, $address, $phonenumber, $photography);

    //     while ($result->fetch() != null){ //Recorre los registros devueltos
    //         // echo $name." ".$description." ".$address." ".$phonenumber." ".$photography." ";

    //         $restaurant = new Restaurant ($restid, $name, $description, $address, $phonenumber, $photography);
    //     }
    //     return $restaurant;
        
    //     $result->close();
    //     $db->close();
    // }
?>