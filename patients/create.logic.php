<?php		

	$db = new mysqli('localhost','root','','hospital');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$clientid = $db->escape_string($_POST["client"]);
		$speciesid = $db->escape_string($_POST["species"]);

		
		
		// Prepare query and execute
		$query = "INSERT INTO patient (name, gender, status, clientid, speciesid) VALUES ('$name' ,'$gender', '$status' ,$clientid ,$speciesid)";
		$result = $db->query($query);                          
		echo $query;
		

	
    	// Tell the browser to go back to the index page.
    	header("Location: ./");
    	exit();
	} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
		$speciesQuery = "select * from species";
		$clientsQuery = "select * from client";

		$speciesResult = $db->query($speciesQuery);
		$clientsResult = $db->query($clientsQuery);

		$species = $speciesResult->fetch_all(MYSQLI_ASSOC);
		$clients = $clientsResult->fetch_all(MYSQLI_ASSOC);
	}

?>
