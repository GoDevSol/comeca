<?php
var_dump($_FILES['image']);
	   if (($_FILES['image']['name']!="")){
	// Where the file is going to be stored
		$target_dir = "./assets/images/banner/";
		
		$file = $_FILES['image']['name'];
		
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['image']['tmp_name'];
		$path_filename_ext = $target_dir."banner8.jpg";

		unlink( $path_filename_ext);
		
	 
	// Check if file already exists
	if (file_exists($path_filename_ext)) {
	 echo "Sorry, file already exists.";
	 }else{
	 move_uploaded_file($temp_name,$path_filename_ext);
	 echo "Congratulations! File Uploaded Successfully.";
	 }
	}
?> 	