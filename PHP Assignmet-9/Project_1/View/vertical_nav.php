<?php
  session_start();

  if($_SESSION["status"]!= true){
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
   <?php include "../Bootstrap/bootstrap.php";?>
    <style>
      .sidenav{
        height: 120vh;
        background-color: rgba(0,0,0,0.4);
        font-size: 16px;
      }
      .nav-text{
        color: #000;
      }
      
    </style>
  </head>
  <body>
    <!-- nav bar for mobile -->
    <nav class="navbar navbar-inverse visible-xs">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Visual Studio</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            
        <li><a href="home.php"><i class='bx bx-home-alt icon'></i>
         <span class="text nav-text">Home</span></a></li>
       
       <li><a href="user.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">User</span></a></li>
       
       <li><a href="my_account.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">My Account</span></a></li>

         <li><a href="user_details.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">User Details Record</span></a></li>  
       
       <li><a href="logout.php"><i class='bx bx-menu icon' ></i>
         <span class="text nav-text">Logout</span></a></li>

        </ul>
        </div>
      </div>
    </nav>
    <!-- nav bar for laptop -->
    <div class="container-fluid">
     <div class="row content">
     <div class="col-sm-3 sidenav hidden-xs">
       <h2>&nbsp;Visual Studio<img src="img/vs1.png" width="20%"></h2><br>
       <ul class="nav nav-pills nav-stacked red ">
      
       <li><a href="home.php"><i class='bx bx-home-alt icon'></i>
         <span class="text nav-text">Home</span></a></li>
       
       <li><a href="user.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">User</span></a></li>
       
       <li><a href="my_account.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">My Account</span></a></li>

          <li><a href="user_details.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">User Details Record</span></a></li> 

          <li><a href="join_table.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">Join Two Tables</span></a></li>  
       
       <li><a href="logout.php"><i class='bx bx-menu icon' ></i>
         <span class="text nav-text">Logout</span></a></li>
       </ul>
                                        
 </div><br>

<div class="col-sm-9">
 <div class="well">
  <div class="row" >
   <div class="col-sm-9">
    <h3 style="margin-top: 10px;">Dashboard</h3>
   </div>
   </div>
 </div>
  </div>
</body>
</html>
