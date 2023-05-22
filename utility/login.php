<?php
session_start();
include("./conn.php");

function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

if (isset($_SESSION["user"])) {
    session_destroy();
    session_start();
    header("Location: ../");
    exit();
}

// Recupera il nome utente e la password inviati dal form di login
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Esegue una query utilizzando prepared statements per recuperare l'hash della password associato all'utente
    $query = "SELECT password FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hash = $row['password'];

        // Verifica se la password fornita corrisponde all'hash salvato nel database
        if (verifyPassword($password, $hash)) {
            // Password corretta, l'utente è autenticato
            $query = "SELECT ID FROM user WHERE email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $_SESSION["user"] = $row["ID"];
            header("Location: ../");
            exit();
        } else {
            // Password errata
            $_SESSION["dado"] = 2;
            header("Location: ../pages/login.php");
            exit();
        }
    } else {
        // Utente non trovato
        $_SESSION["dado"] = 3;
        header("Location: ../pages/login.php");
        exit();
    }
}
?>