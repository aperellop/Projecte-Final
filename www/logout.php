<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack - Logout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- CSS -->
        <style>
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
            include_once 'Structure/navbar.php';
            include_once 'Structure/footer.php';
        ?>
    </head>
        <!-- Navbar -->
    <header>
        <?php
            navbar();
        ?>
    </header>
    <body class="bg-dark">
            <!-- Cierre de sesión -->
        <?php
            // Borramos todas las variables de la sesion, destruimos la sesion
            session_unset();
            session_destroy();
            // Printamos un link para volver a index.html
            print('
                <div class="body">
                    <p class="text-light">Sesión Finalizada</p>
                    <a href="index.php">Vuelve a la página Home</a>
                </div>
            ');
        ?>
            <!-- Footer -->
        <?php
            footer();
        ?>
    </body>
</html>