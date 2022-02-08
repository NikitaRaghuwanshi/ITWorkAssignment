<!DOCTYPE html>
<html>
<head>
	<title>Assignment 6</title>
</head>
<body>
	<form action="user.php" method="post">
		<h3>1) Write a program to check string is palindrome or not..</h3>
		<input type="text" name="palindrome">
		<!-- <input type="submit" name="submit" value="check"> -->

		<h3>2) Write a program to print fibonacci series without using recursion..</h3>
		<input type="number" name="fibo">
		<!-- <input type="submit" name="submit"> -->

		<h3>3)  Write a program to reverse given number..</h3>
		<input type="number" name="reverse">
		<!-- <input type="submit" name="submit">
 -->
		<h3>4)  Write a program to reverse given string..</h3>
		<input type="text" name="reverse_Str">
		<!-- <input type="submit" name="submit"> -->

		<h3>5) Write a program to swap two numbers with and without using third variable..</h3>
		<input type="number" name="first_no">
		<input type="number" name="second_no">
		<!-- <input type="submit" name="submit"> -->

		<h3>6) Write a program to find if the given year is leap year or not..</h3>
		<input type="number" name="leap">
		<!-- <input type="submit" name="submit"> -->

		<h3>7) Write a program to print an array..</h3>
		<input type="text" name="arr">
		<!-- <input type="submit" name="submit"> -->

		<h3>8) Write a program to find number of elements in an array..</h3>
		<input type="number" name="leap">
		<!-- <input type="submit" name="submit"> -->

		<?php
		echo "<h3>14) Write a program to sort elements in an array in ascending order..</h3>";
		for($i=0;$i<5;$i++){
		print "<input type='text' name='aes$i'>";
		}
		print "<input type='submit' name='submit'>";

		echo "<h3>15) Write a program to sort elements in an array in descending order..</h3>";
		for($i=0;$i<5;$i++){
		print "<input type='text' name='des$i'>";
		}
		print "<input type='submit' name='submit'>";
		?>
	</form>
</body>
</html>