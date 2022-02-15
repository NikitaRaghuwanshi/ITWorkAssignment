<?php
	$con=mysqli_connect("localhost","root","","my_account_form");

	//Check Connection
	if(mysqli_connect_error())
	{
		echo "Failed to Connect to MySQL: ".mysqli_connect_error();
	}	
	// else{
	// 	echo "Connection Successfully..";
	// }
?>