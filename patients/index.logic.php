<?php
	
	$db = new mysqli('localhost','root','','hospital');



	$result = $db->query("SELECT patient.name, patient.status, patient.id,species.name AS namespecies, client.name AS nameclient
	FROM patient
	INNER JOIN species
	ON species.id = patient.speciesid
	INNER JOIN client
	ON client.id = patient.clientid");

	$patients = $result->fetch_all(MYSQLI_ASSOC);
	var_dump($patients);
	