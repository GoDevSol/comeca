<?php 

$Nombre = $_GET["Nombre"];
$Apellido = $_GET["Apellido"];

echo $Nombre . $Apellido;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inicio.php" method="GET">
        <input type="text" name="Nombre">
        <input type="text" name="Apellido">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>