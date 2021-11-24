<?php 
include_once('./Connection.php'); 
$link = Conectarse(); 

if ($valor = QueryColumns($link,'Usuarios',['*'])){ 
    
    echo json_encode($valor);
}   

Desconectarse($link);


 ?>