 <?php
  
  include "../Model/db_connection.php";
  $query="SELECT * FROM company where company_id = ".$_GET['id'];
  $result=$con->query($query);
  if($result->num_rows>0){
    while($data=$result->fetch_assoc()){
       $company_name=$data['company_name']; 
       $company_agency=$data['company_agency']; 
       $company_email=$data['company_email']; 
       $company_password=$data['company_password'];
       $company_created=$data['company_created'];
       // $company_status=$data['company_status'];
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form</title>
  <style>
    .card{
      margin-top: 5px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="container">
  <div class="card">
    <div class="card-body">
 
  <h2 style="text-align: center;">My Account</h2>
  <form action="db_update_form.php" method="post">

    <input type="hidden" name="company_id" value="<?php echo $_GET['id']?>">

    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="f_name">Full Name</label>
          <input type="text" class="form-control" id="f_name" placeholder="Full Name" name="company_name" value="<?php echo $company_name ?>">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label for="agency">Insurance Agency Name</label>
          <input type="text" class="form-control" id="agency" placeholder="Insurance Agency Name" name="company_agency" value="<?php echo $company_agency ?>">
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="company_email" value="<?php echo $company_email ?>">
      </div>
  </div>
    <div class="col-lg-6">
      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="company_password" value="<?php echo $company_password ?>">
      </div>
  </div>

  </div>

    <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="created_date">Created Date</label>
        <input type="date" class="form-control" id="created_date" name="company_created" value="<?php echo $created_date ?>">
      </div>
    </div>

    <div class="col-lg-6">
    <div class="form-group">
        <label for="user_city">User City</label>
        <input type="text" class="form-control" id="user_city" name="user_city" value="<?php echo $user_city ?>">
      </div>  
    </div>
    </div>  

    <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="user_state">User State</label>
        <input type="date" class="form-control" id="user_state" name="user_state" value="<?php echo $user_state ?>">
      </div>
    </div>

    <div class="col-lg-6">
    <div class="form-group">
        <label for="user_address">User Address</label>
        <input type="date" class="form-control" id="user_address" name="user_address" value="<?php echo $user_address ?>">
      </div>  
    </div>
    </div>  

    <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="user_pincode">User Pincode</label>
        <input type="date" class="form-control" id="user_pincode" name="user_pincode" value="<?php echo $user_pincode ?>">
      </div>
    </div>


      <div class="form-group form-check">&nbsp;&nbsp;&nbsp;
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
      </div>

      <div class="col-lg-12" style="text-align: center;">
        <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
      </div>
  </form>
</div>
</div>
</div>
 </div>

</body>
</html>