<?php
 $parametro = "Directorio";




function TraerDirectorio($parametro){
    $array = [];
    foreach (scandir($parametro) as $key) {
        if ($key != "." && $key != "..") {

            if (strpos($key, ".")) {
                
                $object = new stdClass();
                $object->text = $key;
                $object->icon = "https://img.icons8.com/wired/16/000000/file--v2.png";
                $array[] = $object; 
            }else{
                $object = new stdClass();
                $object->text = $key;
                $status = new stdClass();
                $status->opened = true;
                $object->state = $status;
                $object->children = TraerDirectorio($parametro . "/" . $key);
                $array[] = $object;

            }
        }
      }
      return $array;

}


    echo json_encode(TraerDirectorio($parametro));
?>