<?php
	session_start();
	include "../Model/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<!-- Font ICONs -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" /> 
  <style>
  	.error{
  		color: red;
  	}
  </style>
</head>
<body>	
	<form action="" method="post" id="form_class" autocomplete="off">


		<p id="head">Coverage<b>Wizard</b>&nbsp;&nbsp;<img src="img/vs1.png" width="10%" height="10%"></p>

		<!-- <p class="animate-charcter">Welcome to Coverage Wizard!!</p> -->
		<!-- <p>Please sign-in to your account..</p></marquee> -->
		<?php if(isset($_GET['error'])){?>
			<!-- <p class="error"></p> -->
			<div class="error">
 			<?php echo $_GET['error'];?>
			</div>
		<?php }?>

		<div class="group">	
		<label class="label">Username</label>
		<input type="text" name="user_name">	
	    </div>

		<div class="group">
	    <label class="label">Password</label>
	    <i class="bi bi-eye" id="togglePassword"></i>
		<input type="Password" name="pass_word" >
		<a href="#" class="forgot_password">Forgot Password?</a>
		</div>

		<div class="group">
		<input type="checkbox" name="check_box">
		<label id="remember">Remember Me</label>
		</div>

		<div class="group">
		<input type="submit" name="submit">
		</div>
	</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){			
	$user_name=$_POST['user_name'];
	$pass_word=$_POST['pass_word'];

	$_SESSION["status"]=false;	

	 $query="SELECT * FROM company WHERE company_email = '$user_name' AND company_password='$pass_word'";
  		 $result=$con->query($query);
  		 $rowcount=mysqli_num_rows($result);

		 if($rowcount>0){
     	 $_SESSION["user_name"]=$user_name;
     	 $_SESSION["pass_word"]=$pass_word;
		 $_SESSION["status"]=true;
		 header("Location:home.php");
   		}
   	/*	else if(empty($user_name)){
			header("Location: login.php?error= User Name is required..");
			exit();
		}
		else if (empty($pass_word)) {
			header("Location: login.php?error= Password is required..");
			exit();
		}
 
		else{
			header("Location: login.php?error= Invalid Username and Password..");
			exit();
		}*/
	}
?>
<script>
$(document).ready(function() {
$("#form_class").validate({
    rules: {

    user_name : {
    required: true,
    },

    pass_word: {
    required: true,
    },
    }

    messages:{
    	user_name : {
    		required: "Username Required",
    	},
    	pass_word:{
    		required: "Password Required",
    	}
    }
    });
    });
</script>