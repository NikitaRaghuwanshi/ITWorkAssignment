<!DOCTYPE html>
<html>
<head>
	<title>Form Handling.</title>
	<style>
		body{
			margin-top: 0px; 
			text-align: center;
			width: 100%;
			background-color: #ffffb3;
			overflow-x: hidden;
		}
		.form_class{
		  max-width: 500px;
		  margin: auto;
		  background: rgba(0,0,0,0.3);
		  padding: 10px;
		}
		.group{
			margin: 10px;
			padding: 10px;
		}
		label{
			float: left;
			width: 25%;
		}
		.error{
			color: red;
			display: block;
			width: 120%;
		}
		
	</style>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<body>
	<?php require "header.php";?>
	<h2>Registration Form</h2>
	<form action="display.php" method="post" class="form_class">
	<div class="group">	
	<label for="name">First Name:</label>
	<input type="text" name="f_name" id="name" placeholder="First Name">
	<span id="fname_err" class="error"></span>	
    </div>

    <div class="group">	
	<label for="s_name">Last Name:</label>
	<input type="text" name="l_name" id="s_name" placeholder="Last Name">
	<span id="sname_err" class="error"></span>
	</div>

	<div class="group">	
	<label for="email">Email:</label>
	<input type="Email" name="E_mail" id="email" placeholder="Email">
	<span id="email_err" class="error"></span>
	</div>

	<div class="group">	
	<label for="ph_no">Phone Number:</label>
	<input type="Number" name="PH_NO" id="ph_no" placeholder="Phone Number">
	<span id="ph_err" class="error"></span>
	</div>

	<div class="group">	
	<label for="pwd">Password:</label>
	<input type="Password" name="PWD" id="pwd" placeholder="Password">
	<span id="pwd_err" class="error"></span>
	</div>

	<div class="group">	
	<label for="pro">Profile:</label>
	<select id="pro" name="sel">
		<option name="sel" selected="">Software Developer</option>
		<option name="sel">Full Stack Developer</option>
		<option name="sel">Software Tester</option>
		<option name="sel">Data Scienties</option>
	</select>
	<span id="sel_err" class="error"></span>
	</div>
	<!-- <input type="text" name="PRO" id="pro" placeholder="
	Profile"> -->

	<div class="group">	
	<label for="pin">Pincode</label>
	<input type="Number" name="PIN"
	id="pin" placeholder="Pincode">
	<span id="pin_err" class="error"></span>
	</div>

	<input type="submit" name="submit">
	
	</form><br>

<?php include 'footer.php'; ?>
	<script>

		/*$(document).ready(function(){
			$('#email').keyup({
				if(emailvalid())
					$('$emailID').html("Valid");
				
				else
					$('$emailID').html("Invalid");
				
			});
		});

		function emailvalid(){
			var E_mail=$('#email').val();
			var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(reg.test(E_mail))
			return true;
			else
			return false;	
		}*/
		$(".form_class").submit(function(){
		var fname = $("#name").val();
		var sname = $("#s_name").val();
	    var email=$("#email").val();
	    var mobile=$("#ph_no").val().toString();
        var pass=$("#pwd").val().toString();
        // var pass=$("#pro").val().toString();
        var pin=$("#pin").val().toString();
     
	    $("#fname_err").text('');
	    $("#sname_err").text('');
	    $("#email_err").text('');
	    $("#ph_err").text('');
	    $("#pwd_err").text('');
	    $("#sel_err").text('');
	    $("#pin_err").text('');

        if(fname == "")
        {
        	$("#fname_err").text("This Field is not valid");
        	return false;
        }

        if(sname == "")
        {
        	$("#sname_err").text("This Field is not valid");
        	return false;
        }
        

        if(email == "")
        {
        	$("#email_err").text("This Field is not valid");
            return false;
        }

        if(mobile == "")
        {
        	$("#ph_err").text("This Field is not valid");
        	return false;
        }
        else 
        {
        	// var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        	if(mobile.length===10)//&& reg.test('#mobile')) 
        	{
        		
        	}
        	else
        	{
        		$("#ph_err").text("Please, Enter a 10 digit Mobile");
        		return false;
        	}
        }

        if(pass == "")
        {
        	$("#pwd_err").text("This Field is not valid");
        	return false;
        }
        else
        {
        	if(pass.length>=8)
        	{
        		
        	}
        	else
        	{
        		$("#pwd_err").text("Please, Enter minimum 8 digits Password.");
        	    return false;
        	}

        }


       
       
        if(pin == "")
        {
        	$("#pin_err").text("This Field is not Valid");
        	return false;
        }
        else
        {
        	if(pin.length == 6)
        	{

        	}
        	else
        	{
        		$("#pin_err").text("Please, Enter a 6 digits Pincode");
        	    return false;
        	}

        }

	});

	
    </script>

</body>
</html>