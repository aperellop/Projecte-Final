<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- CSS -->
        <style>
            .image-fondo {
                background-image: url("./Resources/Photographies/Structure/serra-de-tramuntana-mallorca.jpg");
                background-size: cover;
                
            }
            .cabecera{
                height: 400px;
                width: 1320px;
                font-size: 150px;
            }
            .margenes{
                height: 400px;
                width: 1320px;
                float: none; 
                margin-left: auto; 
                margin-right: auto;

            }
            .body{
                text-align:center;
                margin:0 auto;
            }
            .circular--square {
                border-radius: 50%;
            }
        </style>
            <!-- Includes -->
        <?php
            include './Content/getSector.php';
            include './Content/getRoutes.php';
            include './Structure/navbar.php';
            include './Structure/session.php';
            include './Structure/footer.php';
        ?>
    </head>
        <!-- Navbar -->
    <header>
        <?php
            navbar();
        ?>
    </header>
    <body class="bg-dark margenes">
            <!-- Sesion -->
        <?php
            session();
        ?>
            <!-- Información del Sector seleccionado -->
        <?php
            $id = $_GET["id"];
            $sector = getSector($id);
            // print_r($sector);

            print('
                <p class="h1 card-title text-center text-light">'.$sector->name.'</p>
                <div class=" container text-light m-5 margenes">
                    <div class="row">
                        <div class="text-left">
                            <p class="card-text">'.$sector->description.'</p>
                            <p class="h4">Aproximación<p>
                            <p class="card-text">'.$sector->approach.'</p>
                        </div>
                    </div
                </div>
                </br>
            ');

        ?>
            <!-- Tarjetas de las Rutas -->
        <?php
            $Sector = $sector->name;
            // echo $Sector;
            print('</br>');

            // Introducimos la funcion getRoutes en la variable $routes
            $routes = getRoutes($Sector);
        
            // Contamos cuantos objetos tenemos dentro del array $routes y lo metemos en la variable $numRoutes
            $numRoutes = count($routes);

            // Bucle que itera tantas veces como Rutas haya, y printa la informacion de cada uno de ellas en cartas Bootstrap
            for($i=0;$i<$numRoutes;$i++){
                print('
                    </br>
                    </br>
                    <div class="card d-flex mx-lg-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col m-3">
                                    <p class="h3 card-title text-center text-dark">'.$routes[$i]->name.'</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-3">
                                    <p class="card-text text-dark"><b><u>Descripció:</u></b> '.$routes[$i]->description.'</p>
                                </div>
                                <div class="col m-3 text-center">
                                    <p class="card-text text-dark h3"><b><u></u></b>'.$routes[$i]->grade.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                ');
            }

        ?>
            <!-- Footer -->
        <?php
            footer();
        ?>
    </body>
</html>