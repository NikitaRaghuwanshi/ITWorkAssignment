
<style>
	*{
			background-image: url("img/code3.jpg");
		}
	h3{
		color: green;
	}
</style>
<?php
	// 1] Write a program to find no of days between two dates in Php?
	
	echo "<h3>1] Write a program to find no of days between two dates in Php?
		</h3>";
		$date1 = "2016-07-31";
		$date2 = "2017-08-05";

		function dateDiff($date1, $date2)
		{
		    $date1_ts = strtotime($date1);
		    $date2_ts = strtotime($date2);
		    $diff = $date2_ts - $date1_ts;
		    return round($diff / 86400);
		}

		$dateDiff = dateDiff($date1, $date2);

		printf("Difference between in two dates : " . $dateDiff . " Days ");
		print "</br>";

	/*2] Write a program in PHP to find the occurrence of a word in a string*/
	echo "<h3>2] Write a program in PHP to find the occurrence of a word in a string?
		</h3>";

		// $p1 = "Nikita";
		// $p2 = "Raghuwanshi";
		  
		print_r(str_word_count("Nikita is R"));
		
		  
		

	/*3] What will this code output
	$x = true and false;
	var_dump($x); */

	echo "<h3>3] What will this code output ?
		</h3>";

		$x=true and false;
		//$y=true && false;
		var_dump($x);
		//var_dump($y);

		/*4] What will be the output of the code below
		$x = 5;
		echo $x;
		echo "<br />";
		echo $x+++$x++;
		echo "<br />";
		echo $x;
		echo "<br />";
		echo $x---$x--;
		echo "<br />";
		echo $x;	*/
		echo "<h3>4] What will be the output of the code below</h3>";
		$x = 5;
		echo $x;//5
		echo "<br />";
		echo $x+++$x++;//5+6=11
		echo "<br />";
		echo $x;//7
		echo "<br />";
		echo $x---$x--;//7-6=1
		echo "<br />";
		echo $x;//5
		
	// 5] Write a program for this pattern ?
	echo "<h3>5] Write a program for this pattern ?</h3>";
	for ($i=1;$i<=5;$i++)
	 { 
		for ($j=5; $j>=$i; $j--) 
		{ 
			echo " * ";
		}
		echo "<br>";
	}

	// 6] Write a program to print below format.

	/*for ($i=1;$i<=8;$i++) { 
		$k=1;
		for ($j=1;$j<=$i;$j++) { 
			echo " $k ";
			$k++;
		}
		echo "<br>";
	}*/

	// 6] Write a program to print below format ?
	echo "<h3>6] Write a program to print below format.</h3>";

	for ($i=1;$i<=8;$i++) 
        {
           for ($j=1;$j<=$i;$j++)
            {
              echo " $j ";
            }
             
           echo "<br>";
        }

    // 7] Write a Program for finding the biggest number in an array without using any array functions.
    echo "<h3>7] Write a Program for finding the biggest number in an array without using any array functions.</h3>";

    $arr=array(22,12,100,79,121,66);
    $arrleng=count($arr);
    $max=$arr[0];
    for ($i=1;$i<$arrleng;$i++) 
    {  
    if($arr[$i]>$max)
    	$max=$arr[$i];
    }
    echo "The biggest number is $max";

    // 8] Write a Program for finding the smallest number in an array	
    echo "<h3>8] Write a Program for finding the smallest number in an array.</h3>";

    $min=$arr[0];
    for ($i=1;$i<$arrleng;$i++)
    { 
    	if($arr[$i]<$min) 
    	$min=$arr[$i];
    }
    echo "The Smallest Numner is $min";

    // 9] Write a program to concatenate two strings character by character. e.g : INFOTECH + ITWORKS = INFOTECHITWORKS

    echo "<h3>9] Write a program to concatenate two strings character by character. e.g : INFOTECH + ITWORKS = INFOTECHITWORKS</h3>";

    $str1="INFOTECH";
    $str2="ITWORKS";
    echo "Concatenate two strings : ".$str1.$str2;

    // 10] Write a program to find second highest number in an array.

    echo "<h3>10] Write a program to find second highest number in an array.</h3>";

	$num = array(20, 520, 52, 755, 75, 15, 561, 656, 765);
	$max = $num[0];
	$smax;
	for($i=1; $i<count($num); $i++){
		if($num[$i]>$max){
			$smax = $max;
			$max = $num[$i];
		}else if($smax<$num[$i] && $smax < $max){
			$smax = $num[$i];
		}
	}
	echo "Second highest number in an array : $smax";


?>