<?php

$Title = $_POST['Title'];
$HTML = $_POST['HTML'];
$Image = $_POST['Image'];


include_once('./Connection.php'); 
$link = Conectarse(); 
$String = "INSERT INTO Post (Image,HTML,Title) VALUES (";
$extra = "'$Image','$HTML','$Title')";


$String = $String . $extra;
var_dump($String);
if (mysqli_query($link, $String)) {

  echo "Ok";

    } else {
  echo "error";
}

Desconectarse($link);

?>