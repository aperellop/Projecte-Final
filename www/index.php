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
            include './Content/getRestaurants.php';
            include './Structure/footer.php';
        ?>

        <?php
            // Modify the index.php page to show the logged user in the webpage, using sessions:
                        //  ●	If it exists a logged user, you have to show his username and his email, and a button to log out
                        //  ●	If it doesn’t exist a logged user, you have to show a log in button

            // if($session){
            //     print('
            //     <div class="d-flex mx-lg-5 text-center">
            //     <a href="logout.php"><button type="button">Log out</button></a>
            //     </div>
            //     ');
            // }else{
            //     print('
            //         <div>
            //             <p>'.$username.'</p>
            //             <p>'.$email.'</p>
            //         </div>

            //         <div class="d-flex  mx-lg-5 text-center">
            //             <a href="login.php"><button type="button">Log in</button></a>
            //         </div>
            //     ');
            // }
        ?>

        <?php
            // Modify the index.php page to show the logged user in the webpage, using sessions:
                        //  ●	If it exists a logged user, you have to show his username and his email, and a button to log out
                        //  ●	If it doesn’t exist a logged user, you have to show a log in button

            if (isset($_SESSION['username'])){
                print('
                    <p class="h4 mx-lg-5 text-light" >Hello, '.$_SESSION['username'].'</p>
                    <p class="mx-lg-5 text-light" >'.$_SESSION['email'].'</p>

                    <a class="mx-lg-5" href="logout.php"><button type="button">Log out</button></a>
                ');
            } else {
                print('
                    <p class="h5 mx-lg-5 text-light" >Hello, guest</p>

                    <a class="mx-lg-5" href="login.php"><button type="button">Log in</button></a>
                ');
            }
        ?>

        <?php
            // $connectDB = connectDB();
            $restaurants = getRestaurants();

            // Loop where we iterate as many times as we have restaurants, printing all the info of these inside bootstrap cards
            for($i=0;$i<5;$i++){
                print('
                    <div class="card d-flex mx-lg-5 text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="/restaurantsdb.php?id='.$i.'"><p class="h3 card-title">'.$restaurants[$i]->name.'</p></a>
                                    <p class="card-text">'.$restaurants[$i]->description.'</p>
                                    <p class="card-text">'.$restaurants[$i]->address.'</p>
                                    <p class="card-text">'.$restaurants[$i]->phonenumber.'</p>
                                </div>

                                <div class="col-sm-5">
                                    <img src="'.$restaurants[$i]->photography.'" width="200">
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