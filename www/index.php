<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .image-fondo {
                background-image: url("./Resources/Photographies/Structure/serra-de-tramuntana-mallorca.jpg");
                background-size: cover;
                
            }
            .cabecera{
                height: 400px;;
                width: 1500px;
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
            include './Structure/navbar.php';
            include './Content/getSpots.php';
            include './Structure/footer.php';
        ?>

        <?php
            navbar();
        ?>

        <?php
            if (isset($_SESSION['username'])){
                print('

                </br>
                <div class="container">
                    <div class="row">
                        <div class="col-1">
                            <img class="circular--square" src="'.$_SESSION['photography'].'" width="100" height="100">
                        </div>
                        <div class="col p-5 text-left">
                            <p class="h4 mx-lg-5 text-light" >Hello, '.$_SESSION['name'].'</p>
                            <p class="mx-lg-5 text-light" >'.$_SESSION['email'].'</p>
                        </div>
                        <div class="col-1">
                            <a class="mx-lg-5" href="logout.php"><button type="button">Log out</button></a>
                        </div>
                    </div>
                </div>
                ');
            } else {
                print('
                    <p class="h5 mx-lg-5 text-light" >Hello, guest</p>

                    <a class="mx-lg-5" href="login.php"><button type="button">Log in</button></a>
                ');
            }
        ?>

        <div class="image-fondo cabecera body">
            <p class="text-center text-light">The Crack</p>
            <p class="h4 text-center text-light">Te damos la bienvenida a la plataforma colaborativa</p>
            <p class="h4 text-center text-light">de escalada en roca y búlder de Mallorca</p>
        </div>

        <?php
            // $connectDB = connectDB();
            $spots = getSpots();

            // Loop where we iterate as many times as we have restaurants, printing all the info of these inside bootstrap cards
            for($i=0;$i<5;$i++){
                print('
                    <div class="card d-flex mx-lg-5 text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="/restaurantsdb.php?id='.$i.'"><p class="h3 card-title">'.$spots[$i]->name.'</p></a>
                                    <p class="card-text">'.$spots[$i]->description.'</p>
                                    <p class="card-text">'.$spots[$i]->location.'</p>
                                </div>

                                <div class="col-sm-5">
                                    <img src="'.$spots[$i]->photography.'" width="200">
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                ');
            }
        ?>

        <?php
            footer();
        ?>
    </body>
</html>