<?php
	include "../Model/db_connection.php";
	$query="SELECT * FROM company";
	$result=$con->query($query);
	echo $result->num_rows;
?>