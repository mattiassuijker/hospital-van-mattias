<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$database = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $database->escape_string($_POST["name"]);
		$status = $database->escape_string($_POST["status"]);

		// Prepare query and execute
		$query = "INSERT INTO species(name, status) VALUES ('$name','$status')";
		$result = $database->query($query);
    // Tell the browser to go back to the index page

    header("Location: ./");	
    exit();
	endif;

?>