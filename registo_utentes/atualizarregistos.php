<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.....: Atualiza Registos :.....</title>
</head>
<body>
<center>
<h1> Atualizar Registos </h1> <br><br>

<?php

if (isset($_POST["update"])) 
{
$connect = mysqli_connect("localhost","root","","projeto");

$exibe = "SELECT * FROM utentes";

$exibe = mysqli_query($connect, $exibe);

while ($mostra = mysqli_fetch_assoc( $exibe )) {

echo $mostra['id']. ". ";

echo "".$mostra["nome"].", ";

echo $mostra["email"]."<br><hr>";

}



$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$query = "UPDATE `utentes` SET `nome` = '" .$nome. "', `email` = '".$email."', `idade` = $idade WHERE `id` = $id";

$result = mysqli_query($connect, $query);

if ($result) 
{
    echo 'Registo Atualizado'. "<br>";
}else {
    echo 'Registo não Atualizado'. "<br>";
}
mysqli_close($connect);
}

?>
<br>

    <form actions="" method="post">

    ID para atualizar: <input type="text" name="id" required> <br> <br>

    Nome: <input type="text"  name="nome" required> <br> <br>

    Email: <input type="text" name="email"required> <br> <br>

    Idade: <input type="text" name="idade"required> <br> <br>

    <input type="submit" name="update" value="ATUALIZAR">

    




</form>
</body>
</html>