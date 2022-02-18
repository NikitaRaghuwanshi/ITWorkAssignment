<?php 
	include "../Model/db_connection.php";

	/*Table 1 compnay Details Insert */
	/*$company_id=$_POST['company_id'];*/
	$company_name=trim($_POST['company_name']);
	$company_agency=$_POST['company_agency'];
	$company_email=$_POST['company_email'];
	$company_password=$_POST['company_password'];
	// $company_created=$_POST['company_created'];

	$query1="INSERT INTO company(	company_name,company_agency,company_email,company_password) VALUES ('".$company_name."','".$company_agency."','".$company_email."','".$company_password."')";

	$res1=mysqli_query($con,$query1);

	/*Table 2 user_details Details Insert */
	$user_id=$_POST['user_id']; 
	$user_city=$_POST['user_city'];
	$user_state=$_POST['user_state'];
	$user_address=$_POST['user_address'];
	$user_pincode=$_POST['user_pincode'];

	

     $query3="SELECT company_id from company where company_name='$company_name' && company_email='$company_email'";

    
     $query_result=$con->query($query3);
     $res3=mysqli_fetch_array($query_result);
     // echo $res3;
     $company_id=$res3['company_id'];


	echo $query2="INSERT INTO user_details(user_city,user_state,user_address,user_pincode,user_id)VALUES('".$user_city."','".$user_state."','".$user_address."','".$user_pincode."','".$company_id."')";


    $res2=mysqli_query($con,$query2);

  if($res1 && $res2){

  	$_SESSION['message'] = "Record is Added!!!";
            header("Location: ../View/user.php");
  	/*echo "     Record Added";*/

  }
  
  else{
  	$_SESSION['message'] = "Fail to add Record!!!";
            header("Location: ../View/user.php");
  	/*echo "     Failed";*/
  }
	
?>


