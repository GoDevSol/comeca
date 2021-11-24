<?php
$data = json_decode($_POST['Solicitud']);
var_dump($data);
include_once('./Connection.php'); 
$link = Conectarse(); 
$String = "INSERT INTO Usuarios (IdRol, Nombre, Empresa, Usuario, Direccion, Correo, Contrasena) VALUES (";
$extra = "'$data->rol','$data->nombre','$data->empresa','$data->usuario','$data->direccion','$data->correo',SHA('$data->contrasena'))";
$StringDelete = "DELETE FROM Solicitudes WHERE idSolicitud = $data->id ";

$String = $String . $extra;

if (mysqli_query($link, $String)) {
  
    if (mysqli_query($link, $StringDelete)) {
        echo "ok";
        
    $to = "comeca@comeca.com.gt"; // this is your Email address

    $from = $data->correo; // this is the sender's Email address

    $subject = "EMAIL WEB CREACION USUARIO COMECA" ;        
   
    $message = "Sr/Sra. " . $data->nombre . "\n\n" ."Hemos recibido su solicitud de usuario y ha sido aceptada, sus credenciales son las siguientes:". 
    "\n\n" . "Usuario: ". $data->usuario . "\n\n" . "Contraseña: ". $data->contrasena . "\n\n" .  "Compruebe sus credenciales en la siguiente URL https://comeca.com.gt/comeca/login.html";



    

    mail($from,$subject,$message,"");

    

    } else {
        echo "error";
    }
} else {
  echo "error";
}

Desconectarse($link);

?>