<style>
	.Que{
		color: red;
		font-size: 20px;
	}
</style>
<?php
	echo "<span class='Que'>2] Create Books class object and access its methods?</span>";

	class Books{ 		//create a class classname is Books
		public $title;
		public $author;
		public $price;

		function set_title($title){	//create a function
			$this->title=$title;
		}

		function get_title(){
			return $this->title;
		}

		function set_author($author){
			$this->author=$author;
		}

		function get_author(){
			return $this->author;
		}

		function set_price($price){
			$this->price=$price;
		}
		
		
		function get_price(){
			return $this->price;
		}
	}
	$tit=new Books();
	$aut=new Books();
	$pri=new Books();

	$tit->set_title('The Secrates of Lost Stones');
	$aut->set_author('Melissa Payne');
	$pri->set_price('Rs. 2000');

	echo "<br><br><b>Title:</b> ".$tit->get_title();
	echo "<br><b>Author:</b> ".$aut->get_author();
	echo "<br><b>Price:</b> ".$pri->get_price();

?>