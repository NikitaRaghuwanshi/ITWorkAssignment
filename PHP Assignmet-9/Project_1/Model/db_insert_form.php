<?php 
	 include "../Model/db_connection.php";
	 
	 $company_name=trim($_POST['company_name']);
	 $company_agency=$_POST['company_agency'];
	 $company_email=$_POST['company_email'];
	 $company_password=$_POST['company_password'];
	 $company_created=$_POST['company_created'];
	 $company_status=$_POST['company_status'];

	 $query="INSERT INTO company(company_name,company_agency,company_email,company_password,company_created,company_status) VALUES ('".$company_name."','".$company_agency."','".$company_email."','".$company_password."','".$company_created."','".$company_status."')";

	 if($con->query($query)){
	 	echo "<script>alert('Record Added Successfully..')</script>";
	 	// header('location:user.php.php');
	 	// echo "<a href='user.php'></a>";
	 }
	 else{
	 	echo "<script>alert('Record Failed..')</script>";
	 }
	 $company_id=$_POST['company_id'];
	 $user_city=$_POST['user_city'];
	 $query="INSERT INTO user_details(user_city) VALUES ('".$user_city."')";
	 if($con->query($query)){
	 	echo "<script>alert('Record Added Successfully..')</script>";
	 	// header('location:user.php.php');
	 	// echo "<a href='user.php'></a>";
	 }
	 else{
	 	echo "<script>alert('Record Failed..')</script>";
	 }
?>
