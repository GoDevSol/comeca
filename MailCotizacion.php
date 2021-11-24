<?php 
    $to = "comeca@comeca.com.gt"; // this is your Email address
    $from = $_POST['Mail']; // this is the sender's Email address
    $from2 = "comecamercadeo@gmail.com";
    $first_name = $_POST['Name'];    
    
    $subject = "COTIZACION WEB " . $_POST['Producto'] . " ";        
    
    $message = "*****  DATOS CLIENTE ***** ".  "\n\n" .  " Nombre: " . $first_name ."\n\n" . " TEL: " . $_POST['Tel'] ."\n\n" . " PRODUCTO PARA COTIZAR: " . $_POST['Producto'] ."\n\n" . " CONTENIDO DEL MENSAJE :" . "\n\n" . $_POST['Mensaje'];
    $message2 = "Nuestro equipo ah recibido su mensaje Sr/Sra. " . $first_name . "\n\n" . $_POST['Mensaje'] . "\n\n" . "Nos comunicaremos con usted lo antes posible.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    
    mail($from,$subject,$message2,$headers2);
    mail($from2,$subject,$message,$headers);
    
    
?>