<!DOCTYPE html>
<html>
<head>
	<title>All Programs..</title>
	<style>
		.heading{
			font-size: 20px;
			color: #0073e6;
			font-weight: bold;
			display: block;
		}
	</style>
</head>
<body>
	<form>
	<?php
	// Write a program to check string is palindrome or not.

	echo "<span class='heading'>Write a program to check string is palindrome or not..</span>";
	/*$palin=1221;
	$palin_s="NITIN";
	$rev1=strrev($palin);
	$rev2=strrev($palin_s);

	if($palin==$rev1)
		echo "$palin is a Palindrome..";
	else 
		echo "<br>$palin is not Palindrome..";

	if($palin_s==$rev2)
		echo "<br>$palin_s is a Palindrome..";
	else
		echo "<br>$palin_s is not Palindrome..";*/

	//Other way of palindrom
	$st_R="1211";	
	$revstr="";
	$count=strlen($st_R);
	for($i=--$count;$i>=0;$i--)
	{
		$revstr.=$st_R[$i];
	} 
	if($st_R==$revstr){
		echo "$st_R is a Palindrome $revstr..";
	}
	else {
		echo "<br>$st_R is not Palindrome $revstr..";
	}
	// echo "String palindrom: $revstr";
	echo "<hr>";

	// Write a program to print fibonacci series without using recursion..

	echo "<span class='heading'>Write a program to print fibonacci series without using recursion..</span>";
	$num=10;
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
	echo "<hr>"; 

	// Write a program to reverse given number..

	echo "<span class='heading'>Write a program to reverse given number..</span>";
	/*$str="123456789";
	$rev=strrev($str);
	echo "Orignal Number:- $str";
	echo "<br>Reverse Number:- $rev";*/
	$num = 123456789;  
	$rev = 0;  
	while ($num > 1)  
	{  
	$rem = $num % 10;  
	$rev = ($rev * 10) + $rem;  
	$num /= 10;   
	}  
	echo "Reverse Number is: " .$rev;  

	echo "<hr>";

	// Write a program to reverse given string..

	echo "<span class='heading'>Write a program to reverse given string..</span>";
	/*$str1="I Love Ice-Cream";
	$rev2=strrev($str1);
	echo "Orignal String:- $str1";
	echo "<br>Reverse String:- $rev2";*/

	$str="I Love Ice-Cream";
	echo "Orignal String:- $str";
	$str_rev="";
	$count1=strlen($str);
	for($i=--$count1;$i>=0;$i--)
	{
		$str_rev.=$str[$i];
	}
	echo "<br>Reverse String:- $str_rev";
	echo "<hr>";

	// Write a program to swap two numbers with and without using third variable..

	echo "<span class='heading'>Write a program to swap two numbers with and without using third variable..</span>";
	echo "Without Using Third Variable.";
	$a=5;
	$b=10;
	echo "<br>Before Swaping: $a & $b";
	$a=$a+$b;	//Three Ways of Swaping 1) Using +and- 2)Using bitwise 3)Using * and /
	$b=$a-$b;
	$a=$a-$b;

	/*$a=$a^$b;	//Three Ways of Swaping 1) Using +and- 2)Using bitwise 3)Using * and /
	$b=$a^$b;
	$a=$a^$b;

	$a=$a*$b;	//Three Ways of Swaping 1) Using +and- 2)Using bitwise 3)Using * and /
	$b=$a/$b;
	$a=$a/$b;*/
	echo "<br>After Swaping: $a & $b";

	echo "<br><br>With Using Third Variable.";
	$a=50;
	$b=90;
	echo "<br>Before Swaping: $a & $b";
	$c=$a;
	$a=$b;
	$b=$c;
	echo "<br>After Swaping: $a & $b";
	

	echo "<hr>";

	// Write a program to find if the given year is leap year or not..

	echo "<span class='heading'>Write a program to find if the given year is leap year or not..</span>";
	$leap=1700;
	if($leap%400==0)
		echo "This is a Leap year: $leap";
	else if($leap%100==0)
		echo "This is Not a Leap Year: $leap";
	else if($leap%4==0)
		echo "This is a Leap Year: $leap";
	else 
		echo "This is Not a Leap Year: $leap";

	echo "<hr>";

	// Write a program to print an array..

	echo "<span class='heading'>Write a program to print an array..</span>";

	$arr1=array("Project Manager","Team Lead","QA Testing");
	echo "Dinesh Sir is a ".$arr1[0]." & also a ".$arr1[1];

	echo "<hr>";

	// Write a program to print each element of an array..

	echo "<span class='heading'>Write a program to print each element of an array..</span>";
	$arr=array('HTML','CSS','PHP','Bootstrap');
	echo "Print an Array:- ";
	foreach($arr as $print)
		echo "<br>$print";

	echo "<hr>";

	// Write a program to find number of elements in an array..

	echo "<span class='heading'>Write a program to find number of elements in an array..</span>";
	$find=count($arr);
	echo "Find number of elements in an array : $find";
	echo "<hr>";

	// Write a program to sort elements in an array in ascending order..

	echo "<span class='heading'>Write a program to sort elements in an array in ascending order..</span>";
	print("Ascending Arrays using sort()..");
	$a_sort=array("Nikita","Trupti","Narsing","Priya","Aiswarya");
	sort($a_sort);
	$a_leng=count($a_sort);
	for($i=0; $i< $a_leng;$i++)
	echo "<br>".$a_sort[$i];
	echo "<hr>";

	// Write a program to sort elements in an array in descending order..

	echo "<span class='heading'>Write a program to sort elements in an array in descending order..</span>";
	print("Decending Arrays using sort()..");
	$d_sort=array("Nikita","Trupti","Narsing","Priya","Aiswarya");
	rsort($d_sort);
	$d_leng=count($d_sort);
	for($i=0;$i<$d_leng;$i++)
	echo "<br>".$d_sort[$i];
	echo "<hr>";

	// Write a program to find the sum of elements in an array..

	echo "<span class='heading'>Write a program to find the sum of elements in an array..</span>";
	$a1=array('10','12','34','3','9');
	/*$a1_leng=count($a1);
	$sum=0;
	for($i=0;$i<=$a1_leng;$i++)
	echo $sum+=$a1[$i]."<br>";*/

	echo "<br>Sum Of Array Using array_sum():- ".array_sum($a1);
	echo "<hr>";

	// Write a program to remove the duplicated values from an array..

	echo "<span class='heading'>Write a program to remove the duplicated values from an array..</span>";
	/*$rem= array("12","22","10","22","12");
	$reml=count($rem);
	for ($i=$reml;$i<$reml;$i++) { 
		if($reml==-1)
		{
			echo $rem;
		}
	}*/

	$arr = array("java","php","laravel","codeigniter","java","laravel");
 
	 $count = count($arr);
	 
	 $outArr = [];
	 
	 foreach($arr as $key => $arrVal) {
	    if(!in_array($arrVal, $outArr)){
	        array_push($outArr, $arrVal);
	    }
	 }
	 print_r ($outArr);

	echo "<hr>";

	//  Factorial of a Number..

	echo " <span class='heading'>Factorial of a Number..</span>";

	$no=4;
	$fact=1;
	for($i=$no; $i>=1; $i--) { 
		$fact*=$i;
	}
	echo "The Number $no of Factorial Number is $fact.";
	echo "<hr>";

	//  Write a program to count 5 to 15 using loop..

	echo "<span class='heading'> Write a program to count 5 to 15 using loop..</span>";

	echo "Print 5 to 15 Numbers:";
	for($i=5;$i<=15;$i++){
		echo "<br>$i";
	}

	echo "<hr>";

	/* Write a program to check student grade based on the marks using if-else statement.
	Conditions:
	If marks are 60% or more, grade will be First.
	If marks between 45% to 59%, grade will be Second.
	If marks between 33% to 44%, grade will be Third.
	If marks are less than 33%, student will be Fail.*/

	echo "<span class='heading'>Write a program to check student grade based on the marks using if-else statement.
	Conditions:
	If marks are 60% or more, grade will be First.
	If marks between 45% to 59%, grade will be Second.
	If marks between 33% to 44%, grade will be Third.
	If marks are less than 33%, student will be Fail.</span>";

	$mark=65	;
	if($mark>100)
	{
		echo "Please, Enter Valid Number.";
	}
	else if ($mark>=60) {
		echo "Grade Will be First Class..";
	}
	else if($mark<=59 && $mark>=45){
		echo "Grade Will be Second Class..";
	}
	else if($mark<=44 && $mark>=33){
		echo "Grade Will be Third Class..";
	}
	else if($mark<33){
		echo " Student will be Fail.";
	}
	else{
		echo "Fail";
	}
	echo "<hr>";

	// Write a PHP program to check if a person is eligible to vote..

	echo "<span class='heading'>Write a PHP program to check if a person is eligible to vote..</span>";
	$age=18;
	$num=17;
	if($age<=$num)
		echo "Person is eligible to vote..";
	else
		echo "Person is not eligible to vote..";
	echo "<hr>";
	?>
	</form>
</body>
</html>