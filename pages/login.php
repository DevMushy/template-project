<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <center>
        <?php
        if (!isset($_SESSION["dado"]) || $_SESSION["dado"] == 0) {

        } else {

            if ($_SESSION["dado"] == 1) {
                echo ' <div class="alert alert-warning" role="alert">
                Utente Gia esistente, Accedi!
            </div>';
            }

            if ($_SESSION["dado"] == 2) {
                echo ' <div class="alert alert-warning" role="alert">
                Email o Password errati! riprova
            </div>';
            }

            if ($_SESSION["dado"] == 3) {
                echo ' <div class="alert alert-danger" role="alert">
                Questo utente non esiste, Registrati!
            </div>';
            }
        }
        if(!isset($_GET["login"])){

        }else{
            echo ' <div class="alert alert-primary" role="alert">
            Accedi per visualizzare più contenuti!
        </div>';
        }



        $_SESSION["dado"] = 0;
        ?>

        <div class="logo">
        <a href="../"><p>URBANSCRIPT</p></a>
            <h6>LOGIN</h6>
        </div>
        <div class="login">
            <form action="../utility/login.php" method="post">
                <input type="email" name="email" placeholder="Inserisci la tua email..." required><br><br>
                <input type="password" name="password" placeholder="Inserisci la tua password..." required><br><br>
                <input type="submit" value="Entra">
            </form>
            <p>Non hai un account? <a href="./signup.php">Registrati</a></p>
        </div>


    </center>

    <br><br><br>
    <footer class="footer">
        <p>Copyrights - 2023 UrbanScript by MushroomsTrip . All rights reserved</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>