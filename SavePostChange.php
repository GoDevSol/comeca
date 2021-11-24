<?php

$Id = $_POST['Id'];
$Title = $_POST['Title'];
$HTML = $_POST['HTML'];
$Image = $_POST['Image'];


include_once('./Connection.php'); 
$link = Conectarse(); 
$String = "Update Post SET  Image = '". $Image . "',Title= '" . $Title . "',HTML= '" . $HTML . "' WHERE Id = " . $Id ;


echo($String);

if (mysqli_query($link, $String)) {

  echo "Ok";

    } else {
  echo "error";
}

Desconectarse($link);

?>