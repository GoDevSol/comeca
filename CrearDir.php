<?php 
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    var_dump($direccion);
    var_dump($nombre);
    $newDir = "./Directorio/".$direccion.'/'.$nombre;
    
if (strpos($newDir, "..")) {
     
}else
{
    mkdir($newDir); 
}   
    echo "OK"
?> 	