<?php
session_start();
include("./utility/conn.php");

$sql = "SELECT * FROM template WHERE free = 0 LIMIT 3";
$result = $conn->query($sql) or
  die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="logo">
    <p>URBANSCRIPT</p>
  </div>
  <div class="header">
    <!--<p>LIBERA<br>LA TUA PASSIONE<br>PER LE LETTERE</p>-->
    <p>Creatività <br>urbana in <br>caratteri unici.</p>
    <?php
    if(!isset($_SESSION["user"])){
      echo '<a href="./pages/login.php"><button class="btn">ACCEDI</button></a>';
    }else{
      echo '<a href="./utility/login.php"><button class="btn">LOG OUT</button></a>';
    }

    ?>
  </div>

  <?php

  while ($row = $result->fetch_assoc()) {
    echo "<div class='post'>
      <img src='./images/" . $row["imgUrl"] . "'>
      <a href='./images/" . $row["imgUrl"] . "' download='" . $row["nome"] . "'><button>DOWNLOAD</button></a>
      </div><br>";
  }

  if (!isset($_SESSION["user"])) {
    $sql = "SELECT * FROM template WHERE free = 1 LIMIT 2";
    $result = $conn->query($sql) or
      die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

    echo '<div class="title">
              <br><p>Altri template<hr></p>
           </div>';

    while ($row = $result->fetch_assoc()) {
      echo "<div class='post-b'>
        <img src='./images/" . $row["imgUrl"] . "'>
        </div><br>";
    }

    echo "<div style='text-align:center'><form action='./pages/login.php' method='get'><input value='4' name='login' hidden><input type='submit' value='Visualizza Tutto' class='linkForm'></form></div>";
  } else {
    $sql = "SELECT * FROM template WHERE free = 1";
    $result = $conn->query($sql) or
      die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

    while ($row = $result->fetch_assoc()) {
      echo "<div class='post'>
        <img src='./images/" . $row["imgUrl"] . "'>
        <a href='./images/" . $row["imgUrl"] . "' download='" . $row["nome"] . "'><button>DOWNLOAD</button></a>
        </div><br>";
    }
  }

  ?>

  <footer class="footer">
    <p>Copyrights - 2023 UrbanScript by MushroomsTrip . All rights reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>