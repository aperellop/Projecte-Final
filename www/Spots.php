<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <?php
            include './Content/getSpots.php';
            include './Structure/footer.php';
        ?>

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
            .body{
                text-align:center;
                margin:0 auto;
            }
            .circular--square {
                border-radius: 50%;
            }
        </style>
    </head>

    <body class="bg-dark">

        <?php

            $i = $_GET["id"];
            $spots = getSpots($i);

            // print_r($spots);

            print('
                <p class="h1 card-title text-center text-light">'.$spots[$i]->name.'</p>
                <div class=" container text-light m-5">
                    <div class="row">
                        <div class="col text-left">
                            <p class="card-text">'.$spots[$i]->description.'</p>
                            <p class="h4">Aproximación<p>
                            <p class="card-text">'.$spots[$i]->approach.'</p>
                            <p class="h4">Condiciones<p>
                            <p class="card-text">'.$spots[$i]->conditions.'</p>
                        </div>
                        <div class="col-1 text-left">
                            <img src="'.$spots[$i]->photography.'" width="500">
                        </div>
                    </div
                </div>
            ');

            
        ?>

        <?php
            footer();
        ?>
    </body>
</html>