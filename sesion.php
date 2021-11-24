<?php
    $object = new stdClass();
    session_start();
    if (isset($_SESSION['sesion_iniciada'])) {
      $object->iniciada = true;
      switch ($_SESSION['Administrador']) {
        case true:
          $object->Administrador = true;
          break;
        case false:
          $object->Administrador = false;
          break;
      }
      
    }else{
      $object->iniciada = false;
      $object->Administrador = "";
    }
    echo json_encode($object);
?>