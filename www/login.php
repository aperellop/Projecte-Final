<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack - Login</title>
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
            include_once 'Content/connection.php';
        ?>
    </head>
        <!-- Navbar -->
    <header>
        <?php
            navbar();
        ?>
    </header>

    <body class="bg-dark">
            <!-- Formulario de login donde pedimos username y password -->
        <?php
            print('
                <div class="d-flex mx-lg-5 text-light">
                    <form method="post" action="login.php">
                        <label for="username">Username:</label><br>
                            <input type="text" name="username"><br>
                        <label for="password">Password:</label><br>
                            <input type="password" name="password"><br><br>
                        <input type="submit"></input>
                        <button type="reset">Reset</button>
                    </form>
                </div>
            ');

            login();
        ?>

        <?php
            function login() {
                //Database connection
                $database = connectDB();

                // print_r($database);

                // Chequeamos que existen los username y contraseña introducidos
                if (isset($_POST['username']) and isset($_POST['password'])){
                    // Creamos las variables para los campos introducidos
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Preparamos la query donde buscamos la fila del username
                    $sql = ('SELECT * FROM Users WHERE USERNAME="'.$username.'";');

                    
                    if($userTable = $database->query($sql)) {
                        // Si el resultado de la query nos da minimo un resultado
                        if($userTable->num_rows>0){

                            $user = $userTable->fetch_object();
                            $pwh = $user->password;

                            if ($password == $pwh) {
                                $_SESSION['username'] = $user->username;
                                $_SESSION['name'] = $user->name;
                                $_SESSION['email'] = $user->email;
                                $_SESSION['photography'] = $user->photography;
                                
                                print('
                                    <div class="body">
                                        <p class="text-light">Sesión iniciada</p>
                                        <a href="index.php">Vuelve a la página Home</a>
                                    </div>
                                ');
                            }  else {
                            print ("Contraseña incorrecta, inténtelo de nuevo");
                            }
                        } else {
                            print ("Usuario no existente, debe registrarse");
                        }
                    } else {
                        echo "ERROR";
                    }
                }
            }
        ?>
            <!-- Footer -->
        <?php
            footer();
        ?>
    </body>
</html>