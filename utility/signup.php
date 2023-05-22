<?php
session_start();
include("./conn.php");

// Funzione per generare una password crittografata
function generateHash($password) {
    $options = [
        'cost' => 12, // Il costo dell'algoritmo di hashing (da 4 a 31)
    ];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION["dado"] = 1;
        header("Location: ../pages/login.php");
    }else{
        $pass = generateHash($password);
        $query = "INSERT INTO user (email, password, privacyPolicy,admin) VALUES ('$email','$pass','SI',0)";
        $result = $conn->query($query);
        $query = "SELECT ID FROM user WHERE email = '$email'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $_SESSION["user"] = $row["ID"];
        header("Location: ../");
    }



}

// Chiude la connessione al database
$conn->close();
?>

?>