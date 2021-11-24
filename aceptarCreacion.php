<?php
$Name = $_POST['Name'];
$Empresa = $_POST['Empresa'];
$Direccion = $_POST['Direccion'];
$Mail = $_POST['Mail'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contrasena'];
$Rol = $_POST['rol'];
include_once('./Connection.php'); 
$link = Conectarse(); 
$String = "INSERT INTO Usuarios (IdRol,Nombre, Empresa, Usuario, Direccion, Correo, Contrasena) VALUES (";
$extra = "'$Rol','$Name','$Empresa','$Usuario','$Direccion','$Mail',SHA('$Contrasena'))";

var_dump($_POST);
$String = $String . $extra;

if (mysqli_query($link, $String)) {

    echo "ok";
    $to = "comeca@comeca.com.gt"; // this is your Email address

    $from = $Mail; // this is the sender's Email address

    $subject = "EMAIL WEB CREACION USUARIO COMECA" ;        
   
    $message = "Sr/Sra. " . $Name . "\n\n" ."Hemos creado su cuenta de usuario en COMECA, sus credenciales son las siguientes:". 
    "\n\n" . "Usuario: ". $Usuario . "\n\n" . "Contraseña: ". $Contrasena . "\n\n" .  "Compruebe sus credenciales en la siguiente URL https://comeca.com.gt/comeca/login.html";

    mail($from,$subject,$message,"");

    } else {
  echo "error";
}

Desconectarse($link);

?>