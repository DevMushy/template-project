<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Sign up</title>
</head>

<body>
    <center>
        <div class="logo">
            <a href="../">
                <p>URBANSCRIPT</p>
            </a>
            <h6>SIGN UP</h6>
        </div>
        <div class="login">
            <form action="../utility/signup.php" method="post">
                <input type="email" name="email" placeholder="Inserisci la tua email..." required><br><br>
                <input type="password" name="password" placeholder="Inserisci la tua password..." required><br><br>
                <input type="checkbox" required> <span>Accetta
                <a href="https://www.iubenda.com/privacy-policy/48115950"
                    class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe "
                    title="Privacy Policy ">Privacy Policy</a></span><br>
                    <input type="submit" value="Entra">
            </form>
            <p>Hai gia un Account? <a href="./login.php">Accedi</a></p>
        </div>

    </center>

    <br><br><br>
    <footer class="footer">
        <p>Copyrights - 2023 UrbanScript by MushroomsTrip . All rights reserved</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script
        type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>
</body>

</html>