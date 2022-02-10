<style>
	.Que{
		color: red;
		font-size: 20px;
	}
	b{
		color:green;
	}
	h3{
		color: blue;
	}
</style>
<?php
	echo "<span class='Que'>6] Use acceess modifiers ?</span>";

	/*class Access{
		public $name;

		public function __construct($name){
			$this->name=$name;
		}
		public function show(){
			echo "<br><h3>Public Access Modifiers..</h3>";
			echo "<b>Student Name: </b>".$this->name."<br>";
		}
	}
	$student=new Access("Nikita Raghuwanshi");
	//$student->name="Akash"; //Public Access Modifier use
	$student->show();
*/
	/*class Access{
		protected $name;

		public function __construct($name){
			$this->name=$name;
		}
		protected function show(){
			echo "<br><h3>Protected Access Modifiers..</h3>";
			echo "<b>Student Name: </b>".$this->name."<br>";
		}
	}
	class Modifier extends Access{
		public function show(){
			echo "<br><br><b>School Name: </b>".$this->name."<br>";
		}
	}
	$student=new Access("Trupti Khaire");
	//$student->name="Akash"; //Protected Access Modifier use
	$student->show();*/

	class Access{
		private $name;

		public function __construct($name){
			$this->name=$name;
		}
		public function show(){
			echo "<br><h3>Private Access Modifiers..</h3>";
			echo "<b>Student Name: </b>".$this->name."<br>";
		}	
	}
	class Modifier extends Access{
		public function show(){
			echo "<br><br><b>School Name: </b>".$this->name."<br>";
		}
	}
	$student=new Modifier("Trupti Khaire");
	//$student->name="Akash"; //Protected Access Modifier use
	$student->show();
			
?>