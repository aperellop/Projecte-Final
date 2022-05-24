<?php
    function session(){
        // Si hay una sesión iniciada
        if (isset($_SESSION['username'])){
            // Printa la foto, nombre y email del usuario de la sesión y el botón para deslogearse
            print('
            <div class="container">
                <div class="row">
                    <div class="col p-5 text-left">
                        <img class="circular--square" src="'.$_SESSION['photography'].'" height="50" width="50">
                        <p class="h4 mx-lg-5 text-light" >Hello, '.$_SESSION['name'].'</p>
                        <p class="mx-lg-5 text-light" >'.$_SESSION['email'].'</p>
                    </div>
                    <div class="col-1">
                        <a class="mx-lg-5" href="./../logout.php"><button type="button">Log out</button></a>
                    </div>
                </div>
            </div>
            ');
        } else {
            // Sinó printa un saludo genérico y el botón para logearse
            print('
                <p class="h5 mx-lg-5 text-light" >Hello, guest</p>
                <a class="mx-lg-5" href="./../login.php"><button type="button">Log in</button></a>
            ');
        }
    }
?>