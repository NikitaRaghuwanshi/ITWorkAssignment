<?php
session_start();

  if($_SESSION["status"]!= true){
    header("Location: login.php");
  }
	include "../Model/db_connection.php";
	
	$company_id=trim($_POST['company_id']);
	$company_name=trim($_POST['company_name']);
	$company_agency=$_POST['company_agency'];
	$company_email=$_POST['company_email'];
	$company_password=$_POST['company_password'];
	$company_created=$_POST['company_created'];
	// $company_status=$_POST['company_status'];

	
	$query = "UPDATE company set company_name = '".$company_name."',company_agency='".$company_agency."',company_email='".$company_email."',company_password='".$company_password."',company_created='".$company_created."' where company_id = ".$company_id;

	if($con->query($query)){
		$_SESSION['message'] = "Record Update Successfully!..";
        header("Location: ../View/user.php");
		// header('location:user.php');
	}
	else{
		$_SESSION['message'] = "Record Updatede Failed!..";
        header("Location: ../View/user.php");
	}
?>