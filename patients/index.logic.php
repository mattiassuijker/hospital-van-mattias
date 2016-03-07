<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM patient";
	$result = $db->query($query);

	$query2 = "SELECT client.name, patient.id
	FROM client
	INNER JOIN patient
	ON client.clientid patient.clientid
	ORDER BY client.name";
	$result2 = $db->query($query2);
	$patients2 = $result2->fetch_all(MYSQLI_ASSOC);
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>