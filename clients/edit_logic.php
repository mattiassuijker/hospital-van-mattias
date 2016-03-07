<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			// Get client for id
			$database = new mysqli('localhost','root','','hospital');
			$id = $database->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM client WHERE id=$id";
			$result = $database->query($query);
		
			$client = $result->fetch_assoc();		
		endif;
		if ($client == NULL):
			// No client found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$database = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $database->escape_string($_POST["id"]);
		$name = $database->escape_string($_POST["name"]);
		
		// Prepare query and execute
		$query = "UPDATE client SET name='$name' WHERE id=$id";
		$result = $database->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>