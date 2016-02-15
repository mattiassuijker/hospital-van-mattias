<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			// Get client for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM client WHERE id=$id";
			$result = $db->query($query);
		
			$client = $result->fetch_assoc();		
		endif;
		if ($client == NULL):
			// No client found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "DELETE FROM client WHERE id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>