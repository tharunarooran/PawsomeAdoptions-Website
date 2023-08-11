<?php


// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$image = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = "pets_img/".$image;
    $petname = $_POST['petname'];
    $breed = $_POST['breed'];
    $description = $_POST['description'];
	$species = $_POST['spec_id'];
		
	$db = mysqli_connect("localhost", "root", "", "pets_db");

		// Get all the submitted data from the form
		$sql ="INSERT INTO `pets`(`id`, `image`, `petname`, `breed`, `description`, `spec_id`) VALUES (null,'$image', '$petname', '$breed', '$description', $species)"; 
        
     

        
		// Execute query
		mysqli_query($db, $sql);
		
		
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}

	header('location: uppets.php');
}