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
	echo "<span class='Que'>3] Write 1 example based on inheritance..
			<br>- create first class with name Company
			<br>- create second class with name Employee
			<br>- Employee class inherites Company</span>";


		class Company
		{
			public $compy;
			public $date;
			function __construct($cpy, $d){
				$this->compy=$cpy;
				$this->date=$d;
			}
			function details(){
				echo "<h3>Company Details</h3>";
				echo "<b>Company Name: </b>".$this->compy ."<br>";
				echo "<b>Established Details: </b> ".$this->date."<br>";
			}
		}
		class Employee extends Company
		{
			public $name;
			public $contact;
			public $city;

			function __construct($n, $con, $city){
				$this->name=$n;
				$this->contact=$con;
				$this->city=$city;
			}
			function details(){
				echo "<h3>Employee Details</h3>";
				echo "<b>Employee Name: </b>".$this->name ."<br>";
				echo "<b>Employee Contact No.: </b>".$this->contact."<br>";
				echo "<b>Employee City:</b>".$this->city."<br>";
			}
		}
		$emp=new Company('ITWorks Infotech','20 May 2016 ');
		$emp->details();
		$emp=new Employee('Nikita','7719977524','Akola');
		$emp->details();
?>