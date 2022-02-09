<!-- Fatal errors are ones that crash your program and are classified as critical errors. An undefined function or class in the script is the main reason for this type of error.
There are three (3) types of fatal errors:
1. Startup fatal error (when the system can’t run the code at installation)
2. Compile time fatal error (when a programmer tries to use nonexistent data)
3. Runtime fatal error (happens while the program is running, causing the code to stop working completely)
For instance, the following script would result in a fatal error: -->
<?php

	/*Warning error 
	$n=5;
	$m=0;
	$div=$n/$m;
	echo "$div";*/
	function abcd()
	{
		echo "Hello Php using Function ";
	}

	try{
		if(function_exists('abc')){
			echo "Function is present.";
		}
		else{
			throw new Exception("Please, Enter valid function..");
		}
			
		}
		// else{
		// 	echo "Please, Enter valid function..";
		// }
	catch(Exception $e){
		echo $e->getMessage()."<br>";
		echo $e->getLine()."<br>";
		echo $e->getCode()."<br>";
		echo $e->getFile()."<br>";
	}
	echo "<br>Hello";
?>	