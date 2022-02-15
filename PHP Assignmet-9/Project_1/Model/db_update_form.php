<?php
	include "../Model/db_connection.php";
	
	$company_id=trim($_POST['company_id']);
	$company_name=trim($_POST['company_name']);
	$company_agency=$_POST['company_agency'];
	$company_email=$_POST['company_email'];
	$company_password=$_POST['company_password'];
	$company_created=$_POST['company_created'];
	$company_status=$_POST['company_status'];

	
	$query = "UPDATE company set company_name = '".$company_name."',company_agency='".$company_agency."',company_email='".$company_email."',company_password='".$company_password."',company_created='".$company_created."',company_status='".$company_status."' where company_id = ".$company_id;

	if($con->query($query)){
		echo "<script>alert('Record Update Successfully..')</script>";
		// header('location:user.php');
	}
	else{
		echo "<script>alert('Record Update Failed..')</script>";
	}
?>