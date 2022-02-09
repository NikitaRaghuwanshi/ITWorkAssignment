<style>
	.Que{
		color: red;
		font-size: 20px;
	}
</style>	
<?php
	echo "<span class='Que'>4] Example for interface ?</span>";

	interface Employee{
		function emp_details($employee_name, $employee_salary);
	}		
	interface Department{
		function dept_details($Department_name, $Department_head)
	}
	class Company implements Employee, Department{
		function emp_details($employee_name, $employee_salary){
			echo "<h3>Employee Details: </h3>";
			echo "Company ";
		}
	} 
?>