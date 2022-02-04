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
	<form action="Program.php" method="get">
	<?php
	// Write a program to check string is palindrome or not.

	echo "<span class='heading'>Write a program to check string is palindrome or not..</span>";
	$palin=121;
	$rev1=reverse($palin);

	if($palin==$rev1)
		echo "Is palindrome";
	else
		echo "Not palindrome";


	function reverse($str){
		$rev="";
		$count=strlen($str)-1;
		for($i=$count; $i>=0; $i--){
			$rev.=$str[$i];
		}
		return $rev;
	}

	echo "<hr>";

	// Write a program to print fibonacci series without using recursion..

	echo "<span class='heading'>Write a program to print fibonacci series without using recursion..</span>";
	echo "<hr>"; 

	// Write a program to reverse given number..

	echo "<span class='heading'>Write a program to reverse given number..</span>";
	$rev_n=5;
	echo "Enter Number: ".$rev_n;
	for($i=0;$i>=$rev_n;$i--){
		echo "Reverse Numbaer: ".$rev_n;
	}
	echo "<hr>";

	// Write a program to reverse given string..

	echo "<span class='heading'>Write a program to reverse given string..</span>";
	echo "<hr>";

	// Write a program to swap two numbers with and without using third variable..

	echo "<span class='heading'>Write a program to swap two numbers with and without using third variable..</span>";
	echo "<hr>";

	// Write a program to find if the given year is leap year or not..

	echo "<span class='heading'>Write a program to find if the given year is leap year or not..</span>";
	echo "<hr>";

	// Write a program to print an array..

	echo "<span class='heading'>Write a program to print an array..</span>";
	echo "<hr>";

	// Write a program to print each element of an array..

	echo "<span class='heading'>Write a program to print each element of an array..</span>";
	echo "<hr>";

	// Write a program to find number of elements in an array..

	echo "<span class='heading'>Write a program to find number of elements in an array..</span>";
	echo "<hr>";

	// Write a program to sort elements in an array in ascending order..

	echo "<span class='heading'>Write a program to sort elements in an array in ascending order..</span>";
	echo "<hr>";

	// Write a program to sort elements in an array in descending order..

	echo "<span class='heading'>Write a program to sort elements in an array in descending order..</span>";
	echo "<hr>";

	// Write a program to find the sum of elements in an array..

	echo "<span class='heading'>Write a program to find the sum of elements in an array..</span>";
	echo "<hr>";

	// Write a program to remove the duplicated values from an array..

	echo "<span class='heading'>Write a program to remove the duplicated values from an array..</span>";
	echo "<hr>";

	//  Factorial of a Number..

	echo " <span class='heading'>Factorial of a Number..</span>";
	echo "<hr>";

	//  Write a program to count 5 to 15 using loop..

	echo "<span class='heading'> Write a program to count 5 to 15 using loop..</span>";
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
	echo "<hr>";

	// Write a PHP program to check if a person is eligible to vote..

	echo "<span class='heading'>Write a PHP program to check if a person is eligible to vote..</span>";
	echo "<hr>";
	?>
	</form>
</body>
</html>