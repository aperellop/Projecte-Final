<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-dark">
        <p class="h1 text-center text-light">The Crack</p>
                
        <?php
            include './Content/getSpots.php';
            include './Structure/footer.php';
        ?>

        <?php

            $i = $_GET["id"];
            $spots = getSpots($i);

            print_r($spots);

            print('
                <div class="card d-flex mx-lg-5 text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h3 class="card-title">'.$Spots->name.'</h3>
                                <p class="card-text">'.$Spots->description.'</p>
                                <p class="card-text">'.$Spots->approach.'</p>
                                <p class="card-text">'.$Spots->conditions.'</p>
                            </div>

                            <div class="col-sm-5">
                                <img src="'.$Spots->photography.'" width="200">
                            </div>
                        </div>
                    </div>
                </div>
                </br>
            '); 
        ?>

        <?php
            footer();
        ?>
    </body>
</html>