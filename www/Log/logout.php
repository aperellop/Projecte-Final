<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack - Logout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <style>
            .body{
                text-align:center;
                margin:0 auto;
            }
            .circular--square {
                border-radius: 50%;
            }
        </style>

        <?php
            include_once './../Structure/navbar.php';
            include_once './../Structure/footer.php';
        ?>
    </head>

    <header>
        <?php
            navbar();
        ?>
    </header>

    <body class="bg-dark">
        <?php
            // Remove all sassion variables, destroy the session and return to index.php with a form button
            session_unset();
            session_destroy();

            print('
                <div class="body">
                    <p class="text-light">Sesión Finalizada</p>
                    <a href="./../index.php">Vuelve a la página Home</a>
                </div>
            ');
        ?>
        
        <?php
            footer();
        ?>
    </body>
</html>