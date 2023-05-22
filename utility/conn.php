<?php 

/*$servername = "localhost";
$username = "id20788863_user";
$password = "!";
$dbname = "id20788863_templateproject";*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "templateproject";

// Connessione al database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}



?>