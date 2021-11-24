<?php
$Name = $_POST['Name'];
$Empresa = $_POST['Empresa'];
$Direccion = $_POST['Direccion'];
$Mail = $_POST['Mail'];
include_once('./Connection.php'); 
$link = Conectarse(); 
$data = json_decode(file_get_contents('php://input'), true);
$String = "INSERT INTO Solicitudes (Nombre, Empresa, Direccion, Correo) VALUES (";
$extra = "'$Name','$Empresa','$Direccion','$Mail')";


$String = $String . $extra;

if (mysqli_query($link, $String)) {
  echo "ok";
} else {
  echo "error";
}

Desconectarse($link);

?>