<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Restaurants - Logout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-dark">
        <?php
            include_once 'Structure/footer.php';
        ?>
        <?php
            // Remove all sassion variables, destroy the session and return to index.php with a form button
            session_unset();
            session_destroy();
        ?>

        <p class="text-light">Session ended</p>
        <a href="index.php">Back to Home page</a>

        <?php
            footer();
        ?>
    </body>
</html>