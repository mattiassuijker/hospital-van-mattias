<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get species for id
			$database = new mysqli('localhost','root','','hospital');
			$id = $database->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM species WHERE id=$id";
			$result = $database->query($query);
		
			$species = $result->fetch_assoc();		
		endif;
		if ($species == NULL):
			// No species found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$database = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $database->escape_string($_POST["id"]);  
		$name = $database->escape_string($_POST["name"]);
		$status = $database->escape_string($_POST["status"]);

		// Prepare query and execute
		$query = "UPDATE species SET name='$name', status='$status', WHERE id=$id";
		$result = $database->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>