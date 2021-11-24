<?php
    $direccion = $_POST['direccion'];
    $newDir = "./Directorio/".$direccion;
    function delete_files($target) {
        if(is_dir($target)){
            $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
    
            foreach( $files as $file ){
                delete_files( $file );      
            }
    
            rmdir( $target );
        } elseif(is_file($target)) {
            unlink( $target );  
        }
    }
if (strpos($newDir, "..")) {
     
}else
{
    if ($direccion == ""){
        
    }else{
        delete_files($newDir);
    }


}

echo "OK"
?>