<style>
	*{
		background-image: url("img/code3.jpg");
	}
	h3,p{
		color: green;
		font-weight: bold;
	}
</style>
<?php

	echo "<h3>1] Write a program to find no of days between two dates in Php?
		</h3>";
	echo "<p>O/P:</p>";
	$date1=$_GET['out1'];
	$date2=$_GET['out2'];
	// $date1 = "2016-07-31";
	// $date2 = "2016-08-05";

	function dateDiff($date1, $date2)
	{
	    $date1_ts = strtotime($date1);
	    $date2_ts = strtotime($date2);
	    $diff = $date2_ts - $date1_ts;
	    return round($diff / 86400);
	}

	$dateDiff = dateDiff($date1, $date2);

	printf("Difference between in two dates : " . $dateDiff . " Days ");


	echo "<h3>3] What will this code output ?
		</h3>";
	echo "<p>O/P:<br><br></p>";
	$num=$_GET['output'];
	$x=true and false;
		//$y=true && false;
		var_dump($x);
		//var_dump($y);

	echo "<h3>4] What will be the output of the code below ?</h3>";
	echo "<p>O/P:<br><br></p>";
	$num1=$_GET['output1'];
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

	echo "<h3>5] Write a program for this pattern ?</h3>";
	echo "<p>Patterns:<br><br></p>";
	$num2=$_GET['patt'];
		for ($i=1;$i<=$num;$i++)
			{ 
				for ($j=$num; $j>=$i; $j--) 
				{ 
					echo " * ";
				}
				echo "<br>";
			}

	echo "<h3>6] Write a program to print below format.</h3>";
	echo "<p>Print Number:<br><br></p>";
	$Print=$_GET['print'];
		for ($i=1;$i<=$Print;$i++) 
        {
           for ($j=1;$j<=$i;$j++)
            {
              echo " $j ";
            }
             
           echo "<br>";
        }

    echo "<h3>7] Write a Program for finding the biggest number in an array without using any array functions.</h3>";
    echo "The biggest number is ";
    $arr=$_GET['arr'];
    $arr=array(22,12,100,79,121,66);
    $arrleng=count($arr);
    $max=$arr[0];
    for ($i=1;$i<$arrleng;$i++) 
    {  
    if($arr[$i]>$max)
    	$max=$arr[$i];
    }
	 echo  $max;

	 echo "<h3>8] Write a Program for finding the smallest number in an array.</h3>";
	 echo "The Smallest Numner is ";

	 $Smallest=$_GET['smallest'];
	 $min=$arr[0];
    for ($i=1;$i<$arrleng;$i++)
    { 
    	if($arr[$i]<$min) 
    	$min=$arr[$i];
    }
    echo "$min";

    echo "<h3>9] Write a program to concatenate two strings character by character. e.g : INFOTECH + ITWORKS = INFOTECHITWORKS</h3>";

    $Concatenate=$_GET['concatenate'];
    $str1="INFOTECH";
    $str2="ITWORKS";
    echo "Concatenate two strings : ".$str1.$str2;

    echo "<h3>10] Write a program to find second highest number in an array.</h3>";
    echo "The second highest number in an array is ";
    $S_higgest=$_GET['s_higgest'];
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