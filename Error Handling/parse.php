<!-- Parse Errors are caused by misused or missing symbols i a syntax. The Compiler catch the error and terminates the script.

	Parse errors are caused by:
	1) Unclosed brackets or quotes
	2) Missing or extra semicolons or parentheses
	3) Misspellings
	For example, the following script would stop execution and signal a parse error:
 -->

<?php  
    /*------------------syntax error-------------------*/  
   
    /*echo "Alex: Hie! I'm Alex. </br>";  
    echo "Bob: I'm Bob. How are you?"  
    echo "Alex: I'm good! and you?";  
    echo "Bob: I'm also good";  */

     /*------------------syntax error-------------------*/  
    try{
    $telecom = "Airtel";  
    automobile = "Jaguar";  
    echo $telecom;  
    echo $automobile;  
	}
	catch(Exception $e){
		echo $e->getCode();
	}
?>  	

