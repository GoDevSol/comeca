<?php
$data = json_decode($_POST['Solicitud']);
var_dump($data);
include_once('./Connection.php'); 
$link = Conectarse(); 
$StringDelete = "DELETE FROM Solicitudes WHERE idSolicitud = $data->id ";
  
    if (mysqli_query($link, $StringDelete)) {
        echo "ok";
    } else {
        echo "error";
    }

Desconectarse($link);

?>