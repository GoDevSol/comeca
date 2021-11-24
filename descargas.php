<?php 
session_start();
include_once('./Connection.php'); 
$link = Conectarse(); 
$Usuario = $_SESSION['IdUsuario'];
$Direccion ="Direccion/". $_POST['path'];

$String = "INSERT INTO Descargas (IdUsuario,FileName) VALUES (";
$extra = "'$Usuario','$Direccion')";


$String = $String . $extra;

if (mysqli_query($link, $String)) {

    echo "ok";

    } else {

  echo "error";

}
Desconectarse($link);


 ?>