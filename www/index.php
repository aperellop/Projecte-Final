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
                font-size: 150px;
                height: 400px;
                width: 1320px;
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
            include './Content/getSpots.php';
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
            <!-- Cabecera -->
        <div class="image-fondo cabecera body">
            <p class="text-center text-light">The Crack</p>
            <p class="h4 text-center text-light">Te damos la bienvenida a la plataforma colaborativa</p>
            <p class="h4 text-center text-light">de escalada en roca y búlder de Mallorca</p>
        </div>
            <!-- Spots -->
        <?php
            // Introducimos la funcion getSpots en la variable $spots
            $spots = getSpots();

            // Contamos cuantos objetos tenemos dentro del array $spots y lo metemos en la variable $numSpots
            $numSpots = count($spots);
            // echo $numSpots;

            // Bucle que itera tantas veces como Spots haya, y printa la informacion de cada uno de ellos en cartas Bootstrap
            for($i=0;$i<$numSpots;$i++){
                print('
                    </br>
                    </br>
                    <div class="card d-flex mx-lg-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 m-3">
                                    <a href="/Spots.php?id='.$i.'"><p class="h3 card-title text-center">'.$spots[$i]->name.'</p></a>
                                    <p class="card-text">'.$spots[$i]->description.'</p>
                                    <!-- <p class="card-text">'.$spots[$i]->approach.'</p> -->
                                    <!-- <p class="card-text">'.$spots[$i]->conditions.'</p> -->
                                </div>
                                <div class="col-2 m-5">
                                    <img src="'.$spots[$i]->photography.'" width="300">
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