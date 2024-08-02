<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.....: Consultar Registos :.....</title>
</head>
<body>
    <center>
    <h1> Consulta </h1>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "projeto");

    $exibe = "SELECT * FROM utente";

    $exibe = mysqli_query ($conn, $exibe);

    while ($mostra = mysqli_fetch_assoc ($exibe)) {

    echo $mostra ['nome'] . "<br>";
    echo $mostra ['email'] . "<br> <hr>";  

    }
    ?>

</body>
</html>