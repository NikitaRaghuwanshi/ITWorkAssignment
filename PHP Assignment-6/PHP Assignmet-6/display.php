<style>
	*{
		text-align: center;
		padding: 100px;
		padding-left: 200px;
		padding-right: 200px;
		background-color: rgba(0,0,0,0.2);
	}

</style>
<?php
	echo "<br>First Name: ". $Name=$_POST['f_name']."<br>";

	echo "<br>Last Name: ". $Last=$_POST['l_name']."<br>";

	echo "<br>Email: ". $E_mail=$_POST['E_mail']."<br>";

	echo "<br>Phone Number: ". $Phone=$_POST['PH_NO']."<br>";

	echo "<br>Password: ".$Password=$_POST['PWD']."<br>";

	echo "<br>Profile: ".$profile=$_POST['sel']."<br>";

	echo "<br>Pincode: ".$pincode=$_POST['PIN']."<br>";
?>