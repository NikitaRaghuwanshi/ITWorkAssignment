<style>
	.Que{
		color: red;
		font-size: 20px;
	}
	h3{
		color: blue;
	}
	b{
		color: green;
	}
</style>
<?php
	echo "<span class='Que'>5] Example for Abstract class ?</span><br><br>";

	abstract class Security{
		abstract protected function details($company_name, $company_ip_adddress); 
	}
	class Company extends Security{
		public function details($company_name , $company_ip_adddress){
			echo "<h3>Company Details: <br></h3>";
			echo "Company Name: <b>$company_name</b><br>";
			echo "IP Address: <b>$company_ip_adddress</b><br>";
		}
	}
	$comp=new Company();
	$comp->details('Google','172.217.166.4');			
?>