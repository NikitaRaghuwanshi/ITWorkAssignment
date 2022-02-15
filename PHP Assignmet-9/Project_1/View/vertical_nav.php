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
    <!-- <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnyUu9-_IwfdI7XhrzeAcucshveYsyDjKDiQ&usqp=CAU"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .sidenav{
        height: 125vh;
        background-color: rgba(0,0,0,0.1);
        font-size: 15px;
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
            
        <li><a href="statics.php"><i class='bx bx-home-alt icon'></i>
         <span class="text nav-text">Home</span></a></li>
       
       <li><a href="user.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">User</span></a></li>
       
       <li><a href="my_account.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">My Account</span></a></li>

         <li><a href="insert_record.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">Insert Record</span></a></li> 

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
       <ul class="nav nav-pills nav-stacked">
      
       <li><a href="statics.php"><i class='bx bx-home-alt icon'></i>
         <span class="text nav-text">Home</span></a></li>
       
       <li><a href="user.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">User</span></a></li>
       
       <li><a href="my_account.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">My Account</span></a></li>

        <li><a href="insert_record.php"><i class='bx bx-group icon'></i>
         <span class="text nav-text">Insert Record</span></a></li> 

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
<!-- </body>
</html> -->
