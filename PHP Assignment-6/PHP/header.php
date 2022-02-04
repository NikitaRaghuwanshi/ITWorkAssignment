<!DOCTYPE html>
<html>
<head>
	<title>Header Part</title>
	<style>
		ul{
			margin-top: 3px;
			list-style-type: none;		
			padding: 0;
			overflow: hidden;
			background-color: rgba(0,0,0,0.3);
		}
		li{
			display: inline;
			float: left;		
		}
		li a {
		  display: block;
		  padding: 8px;
		  color: black;
		  text-decoration: none;
		}
	</style>
</head>
<body>


<?php
	echo "<nav>
	<ul>
	<li><a href='#home'>Home</a></li>
	<li><a href='#home'>Gallery</a></li>
	<li><a href='#home'>About Us</a></li>
	<li><a href='#home'>Login</a></li>
	</ul>
	</nav>";
?>

</body>
</html>