<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$database = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $database->escape_string($_POST["name"]);
		$status = $database->escape_string($_POST["status"]);
		$species = $database->escape_string($_POST["species"]);

		// Prepare query and execute
		$query = "INSERT INTO client(name, status, species) VALUES ('$name','$status','$species')";
		$result = $database->query($query);
    // Tell the browser to go back to the index page

    header("Location: ./");	
    exit();
	endif;

?>
