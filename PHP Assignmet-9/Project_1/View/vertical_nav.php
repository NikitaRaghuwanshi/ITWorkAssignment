<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div class="row content"> <!-- divided into rows and column 3 -->
     	<div class="col-sm-3">

     	<!-- Toggal part of Vertical nav bar -->
     	<nav class="navbar navbar-expand-lg navbar-light bg-light">	
     	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">	

	      	<!-- Vertical Part of navibar -->
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"  		aria-orientation="vertical">
		      <h2>&nbsp;Visual Studio<img src="img/vs1.png" width="20%"></h2><br>
			  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-fw fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
			  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-fw fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;Users</a>
			  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class='fa fa-address-book-o'></i>&nbsp;&nbsp;&nbsp;&nbsp;My Account</a>
			  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class='fa fa-sign-out'></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			  <a href="#" style="text-decoration: none;"><i style="color: black">&nbsp;&nbsp; visualstudio@gmail.com</i></a>
			</div>

			<div class="tab-content" id="v-pills-tabContent">
			  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
			  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
			  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
			  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div>
			</div>
		</div>
		</nav>
		</div>
		
		<div class="col-sm-9">
			<div class="container-fluid">
				<div class="card bg-light">
					<div class="card-body">
						<div class="row" >
   						<div class="col-sm-9">
						<h5>Dashboard</h5>
						</div>
						<div class="col-sm-3">
    					<!-- <div class="col-sm-6"> -->
    						<h5 style="float: right;">Admin</h5>
    					<!-- </div> -->
    					</div>
						</div>
					</div>
				</div>
				<!-- php include "user.php"; ?> -->
				<!-- php include "my_account.php";?> -->
			</div>
		</div>

	</div>
</body>
</html>
