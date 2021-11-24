<?php 
session_start();
include_once('./Connection.php'); 
$link = Conectarse(); 
$data = json_decode($_POST['Descargas']);
$where = [['IdUsuario','=', $data->id  ]];


if ($valor = QueryColumnsWhere($link,'Descargas',['*'],$where,"")){      
    echo json_encode($valor);
}else{
    echo 0;
}
Desconectarse($link);


 ?>