<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "hospital";

	$conn = mysqli_connect($servername, $username, $password,$database);
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM species";
	$result = $db->query($query);
	
	$speciess = $result->fetch_all(MYSQLI_ASSOC);
?>	