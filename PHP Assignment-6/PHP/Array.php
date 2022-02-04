<!DOCTYPE html>
<html>
<head>
	<title>Array Functions..</title>
	<style>
		.heading{
			color: #e60073;
			font-size: 20px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
	
	print("Array Print using echo index value and array() used to create an array:");
	$lang= array('C','C++','Java','PHP','Ruby');
	echo " ".$lang[3].",".$lang[2];

	echo "<br>Total Array Count: ".count($lang);

	// Indexed Arrays

	echo "<span class='heading'><br><br>Indexed Arrays..</span>";
	echo "<br>".$lang[2].",".$lang[4];

	// Associative Arrays
	print("<span class='heading'<br><br>Associative Arrays..</span>");
	$person=array('Niki'=>'51','Trupti'=>'35','Narsing'=>'15','Ashiwarya'=>'23','Priya'=>'18');

	echo "<br>Narsing is ".$person['Narsing']." years old.";


	// Multidimensional Arrays

	print("<span class='heading'><br><br>Multidimensional Arrays..</span>");

	$persons= array(
		array('Katrina','Mumbai',35 ),
		array('Deepika','Pune',33),
		array('Alia','Shimla',27),
		array('Shradha','Kolhapur',32),
	);

	echo "<br>Actress: ".$persons[0][0].","."Place: ".$persons[0][1].","."Age: ".$persons[0][2];

	echo "<br>Actress: ".$persons[1][0].","."Place: ".$persons[1][1].","."Age: ".$persons[1][2];

	echo "<br>Actress: ".$persons[2][0].","."Place: ".$persons[2][1].","."Age: ".$persons[2][2];

	echo "<br>Actress: ".$persons[3][0].","."Place: ".$persons[3][1].","."Age: ".$persons[3][2];

	// Sort Functions For Arrays

	print("<span class='heading'><br><br>Ascending Arrays using sort()..<br></span>");
	$s_arr=array("Nikita","Trupti","Narsing","Priya","Aiswarya");
	$s_arr1=array(5,3,9,2,44);

	sort($s_arr);

	$s_leng=count($s_arr);

	for($i=0; $i< $s_leng;$i++)
		echo $s_arr[$i].",";
	

	sort($s_arr1);
	$s_leng1=count($s_arr1);

	for($j=0; $j<$s_leng1;$j++)
		echo "<br>".$s_arr1[$j];


	print("<span class='heading'><br><br>Descending Arrays using rsort()..<br></span>");

	$s_arr=array("Nikita","Trupti","Narsing","Priya","Aiswarya");
	$s_arr1=array(5,3,9,2,44);

	rsort($s_arr);

	$s_leng=count($s_arr);

	for($i=0; $i< $s_leng;$i++)
		echo $s_arr[$i].",";
	

	rsort($s_arr1);
	$s_leng1=count($s_arr1);

	for($j=0; $j<$s_leng1;$j++)
		echo "<br>".$s_arr1[$j];



	print("<span class='heading'><br><br>Ascending Order according to value using asort()..<br></span>");

	$s_arr=array("Nikita"=>"35","Trupti"=>"43","Narsing"=>"55","Priya"=>"63","Aiswarya"=>"100");

	asort($s_arr);

	foreach($s_arr as $i=>$i_value){
		print_r ("Key= ".$i." , Value= ". $i_value);
		echo "<br>";
	}

	print("<span class='heading'><br><br>Ascending Order according to Key using  ksort()..<br></span>");

	$s_arr=array("Nikita"=>35,"Trupti"=>43,"Narsing"=>55,"Priya"=>63,"Aiswarya"=>100);

	ksort($s_arr);

	foreach($s_arr as $i=>$i_value){
		print_r ("Key= ".$i." , Value= ". $i_value);
		echo "<br>";
	}

	print("<span class='heading'><br><br>Descending Order according to Value using  arsort()..<br></span>");

	$s_arr=array("Nikita"=>"35","Trupti"=>"43","Narsing"=>"55","Priya"=>"63","Aiswarya"=>"100");

	arsort($s_arr);

	foreach($s_arr as $i=>$i_value){
		print_r ("Key= ".$i." , Value= ". $i_value);
		echo "<br>";
	}

	print("<span class='heading'><br><br>Descending Order according to Key using  krsort()..<br></span>");

	$s_arr=array("Nikita"=>"35","Trupti"=>"43","Narsing"=>"55","Priya"=>"63","Aiswarya"=>"100");

	krsort($s_arr);

	foreach($s_arr as $i=>$i_value){
		print_r ("Key= ".$i." , Value= ". $i_value);
		echo "<br>";
	}

	?>
</body>
</html>