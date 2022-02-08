<!DOCTYPE html>
<html>
<head>
	<title>String Functions..</title>
	<style>
		.str{
			color: Green;
		}
	</style>
</head>

<body>
	<h2>String Functions..</h2>
	<?php
	// String Length 
	print('<span class="str">String Length..<br></span>');
	$length="Nikita Raghuwanshi";
	echo $length."=".strlen($length);

	// str_word_count() - Count Words in a String

	print('<span class="str"></br><br>Counting the String Words..</span></br>');
	$count="I Love Pizza";
	echo $count."=".str_word_count($count);

	// strrev() - Reverse a String
	print('<span class="str"></br><br>Reverse a String Words..</span></br>');

	echo $count."=".strrev($count);

	// strpos() - Search For a Text Within a String
	print("<span class='str'><br><br>Search For a Text Within a String Words..</span><br>");

	echo $count."=".strpos("I Love Pune!!", "Love");

	// str_replace() - Replace Text Within a String

	print("<span class='str'><br><br>Replace Text Within a String Words..</span><br>");

	echo str_replace("Pune", "Maharashtra", "I Love Pune!!");

	?>
</body>
</html>