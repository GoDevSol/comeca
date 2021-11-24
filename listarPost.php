<?php 
include_once('./Connection.php'); 
$link = Conectarse(); 

if ($valor = QueryColumnsOrder($link,'Post',['*'])){ 
    
    echo json_encode($valor);
}   

Desconectarse($link);


 ?>