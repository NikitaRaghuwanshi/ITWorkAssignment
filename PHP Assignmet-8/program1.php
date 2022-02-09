<style>
	.Que{
		color: red;
		font-size: 20px;
	}
</style>
<?php
	echo "<span class='Que'>1] Create 1 class with name Books and create 2 functions in books class?</span>";

	class Books{ 		//create a class classname is Books
		public $title;
		public $author;

		function set_title($title){	//create a function
			$this->title=$title;
		}
		function set_author($author){
			$this->author=$author;
		}

		function get_title(){
			return $this->title;
		}
		function get_author(){
			return $this->author;
		}
	}
?>