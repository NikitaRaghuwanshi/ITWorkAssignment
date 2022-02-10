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
	echo "<span class='Que'>4] Example for interface ?</span>";

	interface Employee{
		function emp_details($employee_name, $employee_salary);
	}		
	interface Department{
		function dept_details($Department_name, $Department_head);
	}
	class Company implements Employee, Department{
		public function emp_details($employee_name, $employee_salary){
			echo "<h3>Employee Details: </h3>";
			echo "<b>Employee Name: </b> $employee_name<br>";
			echo "<b>Employee Salary: </b>$employee_salary<br>";
		}
		public function dept_details($Department_name, $Department_head){
			echo "<h3>Department Details: </h3>";
			echo "<b>Department Name: </b>$Department_name<br>";
			echo "<b>Department Head: </b>$Department_head<br>";
		}
	} 
	$company=new Company();
	$company->emp_details('Nikita','50,000');
	$company->emp_details('Trupti','50,000');
	$company->emp_details('Aishwariya','50,000');
	$company->emp_details('Narsing','50,000');
	$company->emp_details('Priya','50,000');
	$company->dept_details('Kumudini','Full Stack Developer');
	$company->dept_details('Dinesh','Production Manager');
	$company->dept_details('Ankush','Developer');

?>