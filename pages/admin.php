<?php
session_start();
include("../utility/conn.php");
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
    <title>Admin Page</title>
</head>

<body>
    <div class="logo">
        <a href="../">
            <p>URBANSCRIPT</p>
        </a>
        <h6>ADMIN PAGE</h6>
    </div><br>

    <center>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    inserisci template:
                    <form action="../utility/admin.php" method="get" class="login">
                        <br>
                        <input hidden name="scelta" value="1">
                        <input type="text" name="nomet" placeholder="nome template"><br><br>
                        <input type="text" name="nomef" placeholder="nome file"><br><br>
                        free:<br>
                        <select name="free">
                            <option>0</option>
                            <option>1</option>
                        </select><br><br>
                        <input type="submit" class="bg-success" style=" border: solid 2px #266145 !important;"
                            value="invia"><br><br>
                    </form>
                </div>
                <div class="col-sm">
                    modifica template:
                    <form action="../utility/admin.php" method="get" class="login">
                        <input hidden name="scelta" value="2">
                        <br>
                        <select name="nomem">
                            <?php
                            $sql = "SELECT * FROM template";
                            $result = $conn->query($sql) or
                                die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                            while ($row = $result->fetch_assoc()) {
                                echo "<option>" . $row["nome"] . "</option>";
                            }
                            ?>
                        </select><br>
                        <br>
                        <input type="text" name="nomet" placeholder="nome template"><br><br>
                        free:<br>
                        <select name="free">
                            <option>0</option>
                            <option>1</option>
                        </select><br><br>
                        <input type="submit" class="bg-warning" style=" border: solid 2px #756024 !important;"
                            value="invia"><br><br>
                    </form>
                </div>
                <div class="col-sm">
                    Elimina template:
                    <form action="../utility/admin.php" method="get" class="login">
                        <br>
                        <input hidden name="scelta" value="3">
                        <select name="nomem">
                            <?php
                            $sql = "SELECT * FROM template";
                            $result = $conn->query($sql) or
                                die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                            while ($row = $result->fetch_assoc()) {
                                echo "<option>" . $row["nome"] . "</option>";
                            }
                            ?>
                        </select><br>
                        <input type="submit" class="bg-danger" style=" border: solid 2px #672027 !important;"
                            value="invia">
                    </form>
                    <br>Aggiungi admin:
                    <form action="../utility/admin.php" method="get" class="login">
                        <br>
                        <input hidden name="scelta" value="3">
                        <select name="nomem" style="width:14rem !important;">
                            <?php
                            $sql = "SELECT * FROM user";
                            $result = $conn->query($sql) or
                                die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                            while ($row = $result->fetch_assoc()) {
                                echo "<option>" . $row["email"] . "</option>";
                            }
                            ?>
                        </select><br>
                        <input type="submit" class="bg-danger" style=" border: solid 2px #672027 !important;"
                            value="invia">
                    </form>
                </div>
            </div>
        </div>
    </center>

    <footer class="footer">
        <p>Copyrights - 2023 UrbanScript by MushroomsTrip . All rights reserved</p>
    </footer>
</body>

</html>