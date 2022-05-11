<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Crack - Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-dark">
        <?php
            include_once 'Structure/footer.php';
            include_once 'Content/connection.php';
        ?>

        <?php
            // With the POST method you have to read this parameters, and query the database searching this user.
            // If this username and password are correct, you have to store the necessary information into sessions variables and return to the index.php page.
            // If the username or password are not correct, we will notify the user.
            
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

                //Checking if form POST variables are set
                if (isset($_POST['username']) and isset($_POST['password'])){
                    //Getting the username and passwd from the form
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $sql = ('SELECT * FROM Users WHERE USERNAME="'.$username.'";');

                    //Querying the database for a matching username and veryfying passphrase.
                    if($userTable = $database->query($sql)) {
                        if($userTable->num_rows>0){

                            $user = $userTable->fetch_object();
                            $pwh = $user->password;
                            // $token = hash('md5', $password);

                            if ($password == $pwh) {
                            //Storing the session ID and email.
                            $_SESSION['username'] = $user->username;
                            $_SESSION['name'] = $user->name;
                            $_SESSION['email'] = $user->email;
                            $_SESSION['photography'] = $user->photography;
                            
                            print('
                                <p class="text-light">Sesion iniciada</p>
                                <a href="index.php">Vuelve a la página Home</a>
                            ');

                            }  else {
                            print ("Incorrect password");
                            }
                        } else {
                            print ("Username not found");
                        }
                    } else {
                        echo "ERROR";
                    }
                }
            }
        ?>
        
        <?php
            footer();
        ?>
    </body>
</html>