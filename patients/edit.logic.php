<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT patient.name, patient.status, client.id, species.id, patient.id,species.name AS namespecies, client.name AS nameclient
					FROM patient 
					INNER JOIN species
					ON species.id = patient.speciesid
					INNER JOIN client
					ON client.id = patient.clientid
					WHERE patient.id=$id
					";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();
			$query = "SELECT client.id, client.name, species.id AS idspecies, species.name AS namespecies
						FROM client
						INNER JOIN ";
			$result = $db -> query($query);
			$rows = $result -> fetch_all(MYSQLI_ASSOC);
			var_dump($patient);

		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);

		// Prepare query and execute
		$query = "UPDATE patient SET name='$name' WHERE id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>