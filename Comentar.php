<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);





include_once('./Connection.php'); 
$link = Conectarse(); 
$String = "INSERT INTO Comentario (IdPost,IdUsuario,Comentario) VALUES (";
$extra = "'" .  $_POST['idPost'] .  "','" . $_SESSION['IdRol']. "','" . $_POST['comentario'] ."')";


$String = $String . $extra;
var_dump($String);
if (mysqli_query($link, $String)) {

  echo "Ok";

    } else {
  echo "error";
}

Desconectarse($link);

?>