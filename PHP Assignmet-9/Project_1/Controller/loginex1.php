<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../View/login.css">
	<!-- Font ICONs -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" /> 
</head>
<body>	
	<form action="" method="post" class="form_class" autocomplete="off">

		<p id="head">Coverage<b>Wizard</b>&nbsp;&nbsp;<img src="img/vs1.png" width="10%" height="10%"></p>

		<p>Welcome to Coverage Wizard!!</p>
		<!-- <p>Please sign-in to your account..</p></marquee> -->

		<?php if(isset($_GET['error'])){?>
			<p class="error"><?php echo $_GET['error'];?></p>
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