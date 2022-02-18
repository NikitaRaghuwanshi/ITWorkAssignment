<?php
	session_start();
	include "../Model/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../View/login.css">
	<!-- Font ICONs -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
</head>
<body>	
	<form action="" method="post" class="form_class" autocomplete="off">

		<p id="head">Coverage<b>Wizard</b>&nbsp;&nbsp;<img src="img/vs1.png" width="10%" height="10%"></p>

		<p>Welcome to Coverage Wizard!!</p>
		<!-- <p>Please sign-in to your account..</p></marquee> -->

		<?php if(isset($_GET['error'])){?>
			<!-- <p class="error"><?php echo $_GET['error'];?></p> -->
			<div class="">	
			</div><div class="alert alert-danger" role="alert">
 			 This is a danger alert—check it out!
			</div>
		<?php }?>

		<div class="group">	
		<label class="label">Username</label>
		<input type="text" name="user_name">	
	    </div>

		<div class="group">
	    <label class="label">Password</label>
	    <i class="bi bi-eye" id="togglePassword"></i>
		<input type="Password" name="pass_word">
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
	if(isset($_POST['user_name'])&& isset($_POST['pass_word'])){			

	function validate($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}	
}
	$user_name=validate($_POST['user_name']);
	$pass_word=validate($_POST['pass_word']);

	  if(empty($user_name)){
			header("Location:  ../Controller/loginex.php?error= User Name is required..");
			exit();
		}
		else if (empty($pass_word)) {
			header("Location:  ../Controller/loginex.php?error= Password is required..");
			exit();
		}
	$sql="SELECT * FROM company WHERE company_email = '$user_name' AND company_password='$pass_word'";	

	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)===1){
		$row=mysqli_fetch_assoc($result);

	if($row['user_name']=== $user_name && $row['pass_word']=== $pass_word){
		echo "Logged In !";
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['name']=$row['name'];
		$_SESSION['company_id']=$row['id'];
		header("Location: vertical_nav.php");
		exit();
	}	
	else{
		header("Location: ../Controller/loginex.php?error=Incorrect User Name or Password");
		exit();
	}
	}
	else{
		header("Location: ../Controller/loginex.php");
		exit();
	}
?>