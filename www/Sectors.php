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
            include './Content/getSectors.php';
            include './Content/getRoutes.php';
            include './Structure/navbar.php';
            include './Structure/session.php';
            include './Structure/footer.php';
        ?>
    </head>
    <header>
            <!-- Navbar -->
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
            $sector = getSector();
            print_r($sector);

            // print('
            //     <p class="h1 card-title text-center text-light">'.$sector[$id]->name.'</p>
            //     <div class=" container text-light m-5 margenes">
            //         <div class="row">
            //             <div class="col-6 text-left">
            //                 <p class="card-text">'.$sector[$id]->description.'</p>
            //                 <p class="h4">Aproximación<p>
            //                 <p class="card-text">'.$sector[$id]->approach.'</p>
            //             </div>
            //         </div
            //     </div>
            //     </br>
            // ');

        ?>
            <!-- Tarjetas de las Rutas -->
        <?php
            // $Spot = $spots[$id]->name;
            // print('</br>');

            // // Introducimos la funcion getSectors en la variable $sectors
            // $sectors = getSectors($Spot);
        
            // // Contamos cuantos objetos tenemos dentro del array $sectors y lo metemos en la variable $numSectors
            // $numSectors = count($sectors);

            // // Bucle que itera tantas veces como Sectores haya, y printa la informacion de cada uno de ellos en cartas Bootstrap
            // for($i=0;$i<$numSectors;$i++){
            //     print('
            //         </br>
            //         </br>
            //         <div class="card d-flex mx-lg-5">
            //             <div class="card-body">
            //                 <div class="row">
            //                     <div class="col-6 m-3">
            //                         <a href="/Sectors.php?id='.$sectors[$i]->id.'"><p class="h3 card-title text-center">'.$sectors[$i]->name.'</p></a>
            //                         <p class="card-text text-dark"><b><u>Descripció: </u></b>'.$sectors[$i]->description.'</p>
            //                         <p class="card-text text-dark"><b><u>Aproximació: </u></b>'.$sectors[$i]->approach.'</p>
            //                     </div>
            //                 </div>
            //             </div>
            //         </div>
            //         </br>
            //     ');
            // }

        ?>
            <!-- Footer -->
        <?php
            footer();
        ?>
    </body>
</html>