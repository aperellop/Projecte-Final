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
                    </br>
                    </br>
                    <div class="card d-flex mx-lg-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 sm-5">
                                    <a href="/Spots.php?id='.$i.'"><p class="h3 card-title text-center">'.$spots[$i]->name.'</p></a>
                                    <p class="card-text">'.$spots[$i]->description.'</p>
                                    <p class="h4">Aproximación<p>
                                    <p class="card-text">'.$spots[$i]->approach.'</p>
                                    <p class="h4">Condiciones<p>
                                    <p class="card-text">'.$spots[$i]->conditions.'</p>
                                </div>

                                <div class="col-5 sm-5">
                                    <img src="'.$spots[$i]->photography.'" width="300">
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                ');

            // print('
            //     <div class="card d-flex mx-lg-5 text-center">
            //         <div class="card-body">
            //             <div class="row">
            //                 <div class="col-sm-5">
            //                     <h3 class="card-title">'.$Spots->name.'</h3>
            //                     <p class="card-text">'.$Spots->description.'</p>
            //                     <p class="card-text">'.$Spots->approach.'</p>
            //                     <p class="card-text">'.$Spots->conditions.'</p>
            //                 </div>

            //                 <div class="col-sm-5">
            //                     <img src="'.$Spots->photography.'" width="200">
            //                 </div>
            //             </div>
            //         </div>
            //     </div>
            //     </br>
            // '); 
        ?>

        <?php
            footer();
        ?>
    </body>
</html>