<?php 
session_start();

include_once('./Connection.php'); 
$link = Conectarse(); 

$where = [['Usuario','=', $_POST['User'] ]];
$extra = 'Contrasena = SHA("' .$_POST['Password'].'") AND ';


if ($valor = QueryColumnsWhere($link,'Usuarios',['*'],$where,$extra)){      
   $_SESSION['sesion_iniciada'] = true;
   $_SESSION['Nombre'] = $valor[0]['Nombre'];
   $_SESSION['Empresa'] = $valor[0]['Empresa'];
   $_SESSION['Direccion'] = $valor[0]['Direccion'];
   $_SESSION['Correo'] = $valor[0]['Correo'];
   $_SESSION['IdRol'] = $valor[0]['IdRol'];
   
   if ($valor[0]['IdRol']== 1) {
    echo 1;
    $_SESSION['Administrador'] = true;
   }else {
    echo 2;
    $_SESSION['Administrador'] = false; 
   }
}else{
    echo 0;
}
Desconectarse($link);


 ?>