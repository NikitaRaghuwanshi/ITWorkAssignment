<?php
	include "../Model/db_connection.php";

	$id=$_GET['id'];

	$query="DELETE FROM company where company_id = ".$id;

	if($con->query($query)){
		$_SESSION['message'] = "Record Delete!!!";
	  	 	header("Location: ../View/user.php");
		// header('location:user.php');
	}
	else{
		$_SESSION['message'] = "Failed!!!";
	  	 	header("Location: ../View/user.php");
	}
?>
