<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$column = isset($_GET['column']) ? $_GET['column'] : null;
	$sort = isset($_GET['sort']) ? $_GET['sort'] : null;
	$displaysort = isset($sort) && $sort == "asc" ? "desc" : "asc"; 
	$columnsort = $column && $sort ? "ORDER BY " . $column . " " . $sort : "";

	$query = "SELECT patient.name, patient.status, patient.gender, patient.id,species.name AS species, client.name AS client
	FROM patient
	INNER JOIN species
	ON species.id = patient.speciesid
	INNER JOIN client
	ON client.id = patient.clientid " . $columnsort;
	


	$result = $db->query($query);

	$patients = $result->fetch_all(MYSQLI_ASSOC);
	
	