<?php
$data = json_decode($_POST['Eliminar']);
var_dump($data);
include_once('./Connection.php'); 
$link = Conectarse(); 
$StringDelete = "DELETE FROM Usuarios WHERE idUsuario = $data->id ";
  
    if (mysqli_query($link, $StringDelete)) {
        echo "ok";
    } else {
        echo "error";
    }

Desconectarse($link);

?>