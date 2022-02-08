<!DOCTYPE html>
<html>
<head>
	<title>Start with PHP</title>
</head>
<body>
	<h2>Welcome to PHP...</h2>
	<?php
	echo "PHP(Server Client Scripting)<br>";
	?>
	<?php
		echo "Hiiii.. PHP"."</br>";
		$var1=12;
		$var2=6;

		echo "Variable 1:- ".$var1;
		echo "<br>Variable 2:- ".$var2;

		// Operators in PHP
		// Arithmetic Operators
		echo "<br><br><font color=red>Arithmatic Operators..</font>";
		echo "<br>Variable1 + Veriable2 Addition:- ".$var1+$var2;

		echo "<br>Variable1 - Veriable2 Substraction:- ".$var1-$var2;

		echo "<br>Variable1 * Veriable2 Multiplication:- ".$var1*$var2;

		echo "<br>Variable1 / Veriable2 Division:- ".$var1/$var2;

		echo "<br>Variable1 % Veriable2 Modulus:- ".$var1%$var2;

		echo "<br>Variable1 ** Veriable2 Exponentiation:- ".$var1**$var2;

		// Assignment Operators
		echo "<br><br><font color=red>Assignment Operator..</font>";
		
		$newvar=$var1;
		echo "<br>New Variable:- ".$newvar;

		$newvar +=2;
		echo "<br>Addition:- ".$newvar."<br>";

		$newvar -=2;
		echo "Substraction:- ".$newvar."<br>";

		$newvar *=2;
		echo "Multiplication:- ".$newvar."<br>";

		$newvar /=2;
		echo "Division:- ".$newvar."<br>";

		$newvar %=2;
		echo "Modulus:- ".$newvar."<br>";


		// Comparison Operators
		echo "<br><font color=red>Comparison Operators..</font>";
		echo "<br>Equal to Operators:";
		$a=100;
		$b=100;
		$c="100";
		var_dump($a==$b);

		echo "<br>Two Variables are Equal or not Equal:- ";
		var_dump(1==4);//predefined functions
		print "<br>Identical Operators:";
		var_dump($a===$c);

		print "<br>Not Equal to Operators:";

		$x=20;
		$y=25;
		print(var_dump($x!=$y));
		echo "<b>OR</b>";
		echo var_dump($x <> $y);

		echo "<br>Not identical:";
		var_dump($x !== $y);

		echo "<br>	Greater than:";
		var_dump($x>$y);

		echo "<br>	Less than :";
		var_dump($x<$y);

		echo "<br>	Greater than or Equal to:";
		var_dump($x>=$y);

		echo "<br>	Less than or Equal to:";
		var_dump($x<=$y);
		// Increment/Decrement Operators
		print("<br><br><font color=red>Increment Operators..</font>");
		$x++;
		ECho "<br>Post Increment:".$x;

		++$x;
		echo "<br>Pre Increment:".$x;

		$y--;
		echo "<br>Post Decrement:".$y;

		++$y;
		echo "<br>Pre Decrement:".$y;

		// Logical Operators
		print("<br><br><font color=red>Logical Operator..</font>");

		$p = 100;  
		$q = 50;

		echo "<br>And Operators:";
		if ($p == 100 and $q == 50) {
		    echo "Hello world!";
		}

		echo "<br>OR Operators:";
		if ($p == 100 or $q == 50) {
		    echo "Hello world!";
		}

		echo "<br>XOR Operators:";
		if ($p == 100 xor $q == 40) {
		    echo "Hello world!";
		}

		echo "<br>&& Operators:";
		if ($p == 100 && $q == 50) {
		    echo "Hello world!";
		}

		echo "<br>|| Operators:";
		if ($p == 100 || $q == 80) {
		    echo "Hello world!";
		}

		echo "<br>! Operators:";
		if ($p !== 10) {
		    echo "Hello world!";
		}

		// String Opertors
		print("<br><br><font color=red>String Operators:</font>");
		$text1="Nikita";
		$text2=" Raghuwanshi";

		echo "<br>Concatenation:".$text1.$text2;

		echo "<br>Concatenation assignment:";

		echo $text1.=$text2;

		// Array Operators
		echo "<br><br><font color=red>Array Operators..</font>";
		$arr1= array('a' => "Nik's", 'b'=>"Trupti", 'c'=> "Narsing" );
		$arr2= array('d' =>"Aishwariya" , 'e'=>"Priya");
		echo "<br>Union Operators:";
		print_r($arr1+$arr2);

		echo "<br>Equality Operators:";
		print_r(var_dump($arr1==$arr2));

		echo "<br>Identity Operators:";
		print_r(var_dump($arr1===$arr2));

		echo "<br>Inequality Operators:";
		print_r(var_dump($arr1!=$arr2));

		echo "<br>Inequality Operators:";
		print_r(var_dump($arr1<>$arr2));

		echo "<br>Non-identity Operators:";
		print_r(var_dump($arr1!==$arr2));

		// Conditional Assignment Operators

		echo "<br><br><font color=red>Conditional Operators..</font>";
		echo "<br>Ternary:";

				 // variable $user is the value of $_GET['user']
		   // and 'anonymous' if it does not exist
		   echo $user = $_GET["user"] ?? "anonymous";
		  
		   // variable $color is "red" if $color does not exist or is null
		   echo $color = $color ?? "red";

		   echo "<br>Null Coalescing:";

		   // variable $user is the value of $_GET['user']
		   // and 'anonymous' if it does not exist
		   echo $user = $_GET["user"] ?? "anonymous";
		   echo("<br>");
		  
		   // variable $color is "red" if $color does not exist or is null
		   echo $color = $color ?? "red";
	?>
</body>
</html>