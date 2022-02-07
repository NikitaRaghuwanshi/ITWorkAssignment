
<style>
	h3{
		color: green;
	}
</style>
<?php
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
	echo $smax;


?>