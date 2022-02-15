<?php
	include "../Model/db_connection.php";

	$id=$_GET['id'];

	$query="DELETE FROM company where company_id = ".$id;

	if($con->query($query)){
		echo "<script>alert('Record Delete Successfully..')</script>";
		// header('location:user.php');
	}
	else{
		echo "<script>alert('Record Failed..')</script>";
	}
?>