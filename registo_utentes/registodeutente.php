<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.....: Registo de Utente :.....</title>
</head>
<body>
    <center>
    <?php 
    $conn = mysqli_connect("localhost", "root","","projeto");

    $nome = $_POST ['nome'];
    $email = $_POST ['email'];

    $sql = "INSERT INTO utente VALUES ('$nome', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso";
    }
    ?>
</body>
</html>