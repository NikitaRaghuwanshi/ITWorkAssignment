<?php
	echo "<h3>To check string is palindrome or not..</h3>";
	$st_R=$_POST['palindrome'];
	// $st_R="1211";	
	$revstr="";
	$count=strlen($st_R)-1;
	for($i=$count;$i>=0;$i--)
	{
		$revstr.=$st_R[$i];
	} 
	if($st_R==$revstr){
		echo "$st_R is a Palindrome $revstr..";
	}
	else {
		echo "<br>$st_R is not Palindrome $revstr..";
	}

	echo "<h3>Print fibonacci series without using recursion..</h3>";
	$num=$_POST['fibo'];	
	// $num=10;
	$f1=0;
	$f2=1;
	$f3;
	for($i=0;$i<$num;$i++)
	{
		$f3=$f1+$f2;
		echo "Fibonacci $f1<br>";
		$f1=$f2;
		$f2=$f3;
	}

	echo "<h3>Reverse given number..</h3>";
	$num1=$_POST['reverse'];
	// $num1 = 123456789;  
	$rev = 0;  
	while ($num1 > 1)  
	{  
	$rem = $num1 % 10;  
	$rev = ($rev * 10) + $rem;  
	$num1 /= 10;   
	}  
	echo "Reverse Number is: " .$rev;  


	echo "<h3>Reverse given String..</h3>";
	$str=$_POST['reverse_Str'];
	// $str="I Love Ice-Cream";
	echo "Orignal String:- $str";
	$str_rev="";
	$count1=strlen($str);
	for($i=--$count1;$i>=0;$i--)
	{
		$str_rev.=$str[$i];
	}
	echo "<br>Reverse String:- $str_rev";

	echo "<h3>Swap two numbers with and without using third variable..</h3>";

	echo "Without Using Third Variable.";
	$a=$_POST['first_no'];
	$b=$_POST['second_no'];
	// $a=5;
	// $b=10;
	echo "<br>Before Swaping: $a & $b";
	$a=$a+$b;	//Three Ways of Swaping 1) Using +and- 2)Using bitwise 3)Using * and /
	$b=$a-$b;
	$a=$a-$b;
	echo "<br>After Swaping: $a & $b";

	echo "<br><br>With Using Third Variable.";
	$a=$_POST['first_no'];
	$b=$_POST['second_no'];
	// $a=50;
	// $b=90;
	echo "<br>Before Swaping: $a & $b";
	$c=$a;
	$a=$b;
	$b=$c;
	echo "<br>After Swaping: $a & $b";

	echo "<h3>Year is leap year or not..</h3>";
	$leap=$_POST['leap'];
	// $leap=1700;
	if($leap%400==0)
		echo "This is a Leap year: $leap";
	else if($leap%100==0)
		echo "This is Not a Leap Year: $leap";
	else if($leap%4==0)
		echo "This is a Leap Year: $leap";
	else 
		echo "This is Not a Leap Year: $leap";

	echo "<h3>Write a program to print an array..</h3>";
	$arr1=$_POST['$arr'];
	$arr1=array("Project Manager","Team Lead","QA Testing");
	echo "Dinesh Sir is a ".$arr1[0]." & also a ".$arr1[1];

	echo "<h3>Elements in an array in Ascending order..</h3>";
	print("Ascending Arrays using sort()..");
	$a_sort=array();
	
	for($i=0;$i<5;$i++){
		$a_sort[$i]=$_POST['aes'.$i];
	}
	// $a_sort=array("Nikita","Trupti","Narsing","Priya","Aiswarya");
	sort($a_sort);
	$a_leng=count($a_sort);
	for($i=0; $i< $a_leng;$i++)
	echo "<br>".$a_sort[$i];

	echo "<h3>Elements in an array in descending order..</h3>";
	print("Decending Arrays Using rsort()..");
	$d_sort=array();
	for($i=0;$i<5;$i++){
		$d_sort[$i]=$_POST['des'.$i];
	}
	// $d_sort=array("Nikita","Trupti","Narsing","Priya","Aiswarya");
	rsort($d_sort);
	$d_leng=count($d_sort);
	for($i=0;$i<$d_leng;$i++)
	echo "<br>".$d_sort[$i];

?>