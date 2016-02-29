<?php
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM species";
	$result = $db->query($query);
	
	$species = $result->fetch_all(MYSQLI_ASSOC);
?>	