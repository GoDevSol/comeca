<?php
$data = json_decode($_POST['Id']);

include_once('./Connection.php'); 
$link = Conectarse(); 
$StringDelete = "DELETE FROM Post WHERE Id = $data";
  
    if (mysqli_query($link, $StringDelete)) {
        echo "ok";
    } else {
        echo "error";
    }

Desconectarse($link);

?>